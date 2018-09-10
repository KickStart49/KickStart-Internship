
$(document).ready(function(){
  $("#monthval").hide(); 

  $( document ).on( "change","#stmon", function() {
   $('#stnone').prop("disabled", true); 
  $( "#monthval").show();
});
$( document ).on( "change","#stnone", function() {
   $('#stmon').prop("disabled", true); 
  $( "#monthval").hide();
});
 
});

