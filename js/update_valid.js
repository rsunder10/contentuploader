
function pass2valid(a,b){
if(a=="")
  return false;
if(a.length>=8)
  if(a===b)
    return true;
else 
  return false;

}
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
    var pass1=false;
    var pass2=false;
    var prev=false;

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


$('#prev').blur(function(e) {

    
       if(fl_valid($(this).val())) {

           $('#prev_status').html('Valid');

           $('#prev').css('border-color', 'green');
           prev=true;
       }

       else {
        if($(this).val()=="")
            $('#prev_status').html('Cant Leave Empty');        
          $('#prev').css('border-color', 'red');
          prev=false;
       }

    });


$('#pass1').blur(function(e) {

  
     if(regno_valid($(this).val())) {

         $('#pass1_status').html('Valid');

         $('#pass1').css('border-color', 'green');
         pass1=true;
     }

     else {
      if($(this).val()=="")
          $('#pass1_status').html('Cant Leave Empty');
    else if($(this).val().length<8)
           $('#pass1_status').html('Minimum Length Should be 8');
       
        $('#pass1').css('border-color', 'red');
        pass1=false;
     }

  });
$('#pass2').blur(function(e) {

  
     if(pass2valid($(this).val(),$('#pass1').val())) {

         $('#pass2_status').html('Valid');

         $('#pass2').css('border-color', 'green');
         pass2=true;
     }

     else {
      if($(this).val()=="")
          $('#pass2_status').html('Cant Leave Empty');
    else if($(this).val().length<8)
           $('#pass2_status').html('Minimum Length Should be 8');
      else if($(this).val()!=$('#pass1').val())
        $('#pass2_status').html('Password Didnt Match');
       
        $('#pass2').css('border-color', 'red');
        pass2=false;
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
