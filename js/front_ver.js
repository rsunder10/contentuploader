
pic1 = new Image(16, 16); 
pic1.src = "./img/loader.gif";
var user=false;
$(document).ready(function(){

$("#username").change(function() { 

var usr = $("#username").val();

if(usr.length >= 8)
{
$("#status").html('<img src="./img/loader.gif" align="absmiddle">&nbsp;Checking availability...');

    $.ajax({  
    type: "POST",  
    url: "./php_func/check.php",  
    data: "username="+ usr,  
    success: function(msg){  
  
	if(msg == 'OK')
	{ 
		
		$("#status").html('&nbsp;<img src="./img/tick.gif" align="absmiddle">');
		user=true;
	}  
	else  
	{  

		$("#status").html(msg);
		user=false;
	}  
   

 } 
   
  }); 
}
else
	{
	$("#status").html('<font color="red">The username should have at least <strong>4</strong> characters.</font>');
	user=false;
	}

});

});