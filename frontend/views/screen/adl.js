function calAdl() {
  var adl = 0;
  $("input[type=radio][data-adl]:checked").each(function(i, el) {
    adl += parseInt($(el).data("adl"));
  });
  $("#adl_point_top").html(adl)
  $("#adl_point_foot").html(adl);
  $("#adl_score").val(adl);
  $("#adl").val(adl);
}
$("input[type=radio][data-adl]").on("change", calAdl);