$.ajax({
  type: "POST",
  url: "php/index_session_unset.php",
  success: function(data) {
    alert(data);
  },
  error:function(ts){
    alert(ts.responseText);
  }});
