$(document).ready(function() {
  $("#pay_method").change(function() {
    if($("#pay_method :selected").val() == "YM_Native") {
      $("#YM_Card_form").toggleClass("YM_form_invisible");
      $(".pay_window").replaceWith($("#YM_Native_form"));
      $("#YM_Native_form").toggleClass("YM_form_visible");
    }

    if($("#pay_method :selected").val() == "YM_Card") {
      $("#YM_Native_form").toggleClass("YM_form_invisible");
      $(".pay_window").replaceWith($("#YM_Card_form"));
      $("#YM_Card_form").toggleClass("YM_form_visible");
    }
  });
});
