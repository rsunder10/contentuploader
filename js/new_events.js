$(document).ready(function(){
    $("input[type='button']").click(function() {
        switch(this.id) {
            case 'create_event':window.location.href = "../event/event_name.php"; break;
            case 'event_name': window.location.href="../event/event_name.php"; break;
            case 'event_rules': window.location.href = "../event/event_rules.php"; break;
            case 'event_introduction': window.location.href = "../event/event_introduction.php"; break;
            case 'event_cordinators': window.location.href = "../event/event_cordinators.php"; break;
        }
    });
})