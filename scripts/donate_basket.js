$(document).ready(function() {
  $("#YM_Card_form").hide();
  $("#YM_Native_form").hide();
  $("#pay_method").change(function() {

    if($("#pay_method :selected").val() === "YM_Native") {
      $("#YM_Card_form").hide();
      $("#YM_Native_form").show();
    }

    if($("#pay_method :selected").val() === "YM_Card") {
      $("#YM_Native_form").hide();
      $("#YM_Card_form").show();
    }
  });
});
