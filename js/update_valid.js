function validatePhone(a) {
    var filter = /^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/;
    if (filter.test(a)) {
        return true;
    }
    else {
        return false;
    }
}
function regno_valid(a){
if(a=="")
	return false;
if(a.length>=8)
	return true;
else 
	return false;

}
function fl_valid(a){
if(a=="")
    return false;
else
    return true;

}

$(document).ready(function(e){
    var first=true;
    var last=true;
    var domain=true;
    var contact=true;
    var regno=true;
$('#changepass').hide();
$('#show').click(function(e){
  $('#changepass').toggle();
});

$('#contact').blur(function(e) {

    
       if (validatePhone($(this).val())) {

           $('#contact_status').html('Valid');

           $('#contact').css('border-color', 'green');
           contact=true;
       }

       else {
if($(this).val()=="")
            $('#contact_status').html('Cant Leave Empty');
      else
          $('#contact_status').html('Invalid');

          $('#contact').css('border-color', 'red');
          contact=false;
       }

    });

$('#regno').blur(function(e) {

    
       if(regno_valid($(this).val())) {

           $('#regno_status').html('Valid');

           $('#regno').css('border-color', 'green');
           regno=true;
       }

       else {
        if($(this).val()=="")
            $('#regno_status').html('Cant Leave Empty');
        else if($(this).val().length<8)
                 $('#regno_status').html('Minimum Length Should be 8');
         
          $('#regno').css('border-color', 'red');
          regno=false;
       }

    });

$('#first').blur(function(e) {

    
       if(fl_valid($(this).val())) {

           $('#first_status').html('Valid');

           $('#first').css('border-color', 'green');
           first=true;
       }

       else {
        if($(this).val()=="")
            $('#first_status').html('Cant Leave Empty');         
          $('#first').css('border-color', 'red');
          first=false;
       }

    });



$('#last').blur(function(e) {

    
       if(fl_valid($(this).val())) {

           $('#last_status').html('Valid');

           $('#last').css('border-color', 'green');
           last=true;
       }

       else {
        if($(this).val()=="")
            $('#last_status').html('Cant Leave Empty');      
          $('#last').css('border-color', 'red');
          last=false;
       }

    });
$('#domain').blur(function(e) {

    
       if(fl_valid($(this).val())) {

           $('#domain_status').html('Valid');

           $('#domain').css('border-color', 'green');
           domain=true;
       }

       else {
        if($(this).val()=="")
            $('#domain_status').html('Cant Leave Empty');        
          $('#domain').css('border-color', 'red');
          domain=false;
       }

    });



    $('#form').submit(function(event) {
        if(first==true && last==true  && contact==true  && domain==true && regno==true){
        return;
        }
    $('#mainerror').html('Full The Form Completely Without Any Error'); 
            event.preventDefault()
    });


});
