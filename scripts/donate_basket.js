var active_form;

$(document).ready(function() {
  $("#YM_Card_form").hide();
  $("#YM_Native_form").hide();
  $("#pay_method").change(function() {

    if($("#pay_method :selected").val() === "YM_Native") {
      $("#YM_Card_form").hide();
      $("#YM_Native_form").show();

      $.ajax({
        type: "POST",
        url: "php/donate_basket.php",
        success: function(data) {
          //alert(data);
          $(".pay_amount").val(data);
        },
        error:function(ts){
          alert(ts.responseText);
        }});

      active_form = "YM_Native_form";
    }

    if($("#pay_method :selected").val() === "YM_Card") {
      $("#YM_Native_form").hide();
      $("#YM_Card_form").show();
      active_form = "YM_Native_Card";
    }
  });
});
