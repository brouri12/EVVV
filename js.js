function validateForm() {
    var eventName = document.getElementById("event_name").value;
    if (!/^[a-zA-Z ]+$/.test(eventName)) {
        alert("Event name should only contain letters and spaces.");
        return false;
    }

    // Validate event description
    var eventDescription = document.getElementById("event_description").value;
    // You can add additional validation if needed for the description

    // Validate event date
    var eventDate = new Date(document.getElementById("event_date").value);
    var currentDate = new Date();
    if (eventDate <= currentDate) {
        alert("Event date should be in the future.");
        return false;
    }

    // Validate event organizer
    var eventOrganizer = document.getElementById("event_organizer").value;
    if (!/^[a-zA-Z ]+$/.test(eventOrganizer)) {
       alert("Event organizer should only contain letters and spaces.");
        return false;
    }
if (eventDate==="" || eventName==="" || eventDescription==="" || eventOrganizer==="") {
    alert("remplir les champs");
            return false;
}
    // If all validations pass, the form will submit
    return true;
}
