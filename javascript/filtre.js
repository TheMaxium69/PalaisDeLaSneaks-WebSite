console.log('hey');
$("#search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#tableTEST .card").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
  console.log('hey');
