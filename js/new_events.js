

$(document).ready(function(){

$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
});

$("input[type='button']").click(function() {

        switch(this.id) {
            // case 'domain':window.location.href="../event/domain_select.php";break;

            case 'create_event':window.location.href = "../event/event_name.php"; break;
            case 'event_name': window.location.href="../event/event_name.php";break;
            case 'event_rules': window.location.href = "../event/event_rules.php"; break;
            case 'event_introduction': window.location.href = "../event/event_introduction.php"; break;
            case 'event_cordinators': window.location.href = "../event/event_cordinators.php"; break;
            case 'abort': window.location.href = "../profile/newevent.php"; break;
            case 'abort2':window.location.href="../profile/user.php";break;
            case 'add_cordinator':
                    var html='<label>Cordinator '+count+'</label><input type="text" id="enter_cordinator" class="form-control" name="ecord[]" required/><label>Mobile Number</label><input type="text" id = "mobile_number" class="form-control" name = "number[]" required/><br/><hr/>'
                    count++;
                    $('#cordin').append(html);
                break;

            case 'add_rule':
                    var html='<label>Rule'+count+'</label><input type="text" id="rule_rule" class="form-control" name="rule_rule[]" required/><br/><hr/>'
                    count++;
                    $('#ruleadd').append(html);
                break;                
}

    });



})