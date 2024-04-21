<?php
class event
{
    private ?int $event_id  = null;
    private ?string $event_name = null;
    private ?string $event_description = null;

    private ?DateTime $event_date = null;

    private ?string $event_location = null;
    private ?string $event_organizer = null;

    public function __construct( $event_id = NULL, $event_name, $event_description,$event_date,$event_location,$event_organizer)
    {
        $this->event_id = $event_id;
        $this->event_name = $event_name;
        $this->event_description = $event_description;
        $this->event_date = $event_date;
        $this->event_location = $event_location;
        $this->event_organizer = $event_organizer;


    }

    public function getevent_id()
    {
        return $this->event_id;
    }
    public function setevent_id($event_id)
    {
        $this->event_id = $event_id;

        return $this;
    }
    public function getevent_name()
    {
        return $this->event_name;
    }

    public function setevent_name($event_name)
    {
        $this->event_name = $event_name;

        return $this;
    }

    public function getevent_description()
    {
        return $this->event_description;
    }
    public function setevent_description($event_description)
    {
        $this->event_description = $event_description;

        return $this;
    }
    public function getevent_date()
    {
        return $this->event_date;
    }
    public function setevent_date($event_date)
    {
        $this->event_date = $event_date;

        return $this;
    }
    public function getevent_location()
    {
        return $this->event_location;
    }
    public function setevent_location($event_location)
    {
        $this->event_location = $event_location;

        return $this;
    }
    public function getevent_organizer()
    {
        return $this->event_organizer;
    }
    public function setevent_organizer($event_organizer)
    {
        $this->event_organizer = $event_organizer;

        return $this;
    }
    
}
