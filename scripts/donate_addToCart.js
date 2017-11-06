$(document).ready(function() {
  $("#ak47_form").submit(function() {
    var form_data = $(this).serialize();
    $.ajax({
      type: "POST",
      url: "php/donate_shopping.php",
      data: form_data,
      success: function(data) {
        alert(data);
      },
      error:function(){
        alert("error occured");
      }});
    });
  });
