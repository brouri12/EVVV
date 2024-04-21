<?php
include '../config.php';
include '../model/event.php';

class eventC
{
    public function listevent()
    {
        $sql = "SELECT * FROM event";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteevent($event_id)
    {
        $sql = "DELETE FROM event WHERE event_id = :event_id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':event_id', $event_id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addevent($event)
    {
        $sql = "INSERT INTO event
        VALUES (NULL, :event_name, :event_description,:event_date,:event_location,:event_organizer)";  
        $db = config::getConnexion(); 
        try {
            
            
            $query = $db->prepare($sql);
            $query->execute([
                'event_name' => $event->getevent_name(),
                'event_description' => $event->getevent_description(),
                'event_date' => $event->getevent_date()->format('Y/m/d'),
                'event_location' => $event->getevent_location(),
                'event_organizer' => $event->getevent_organizer()
                
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updateevent($event, $event_id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE event SET 
                    event_name = :event_name, 
                    event_description = :event_description, 
                    event_date = :event_date, 
                    event_location = :event_location,
                    event_organizer = :event_organizer
                  
                WHERE event_id= :event_id'
            );
            $query->execute([
                'event_id' => $event_id,
                'event_name' => $event->getevent_name(),
                'event_description' => $event->getevent_description(),
                'event_date' => $event->getevent_date()->format('Y/m/d'),
                'event_location' => $event->getevent_location(),
                'event_organizer' => $event->getevent_organizer()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showevent($event_id)
    {
        $sql = "SELECT * from event where event_id = $event_id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $event = $query->fetch();
            return $event;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}
