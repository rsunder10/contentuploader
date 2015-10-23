

$(document).ready(function(){


    $("input[type='button']").click(function() {
        switch(this.id) {
            case 'create_event':window.location.href = "../event/event_name.php"; break;
            case 'event_name': window.location.href="../event/event_name.php";break;
            case 'event_rules': window.location.href = "../event/event_rules.php"; break;
            case 'event_introduction': window.location.href = "../event/event_introduction.php"; break;
            case 'event_cordinators': window.location.href = "../event/event_cordinators.php"; break;
            case 'abort': window.location.href = "../profile/newevent.php"; break;
            case 'abort2':window.location.href="../profile/user.php";break;
            case 'add_cordinator':
                    var html='<label>Cordinator '+count+'</label><input type="text" id="enter_cordinator" name="ecord[]" required/> <br/>'
                    count++;
                    $('#cordin').append(html);
                break;
        }
    });
})