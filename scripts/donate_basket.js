$(document).ready(function() {
  $("#pay_method").change(function() {
    if($("#pay_method :selected").val() == "YM_Card") alert("YM_Card");
    if($("#pay_method :selected").val() == "YM_Native") alert("YM_Native");
  });
});
