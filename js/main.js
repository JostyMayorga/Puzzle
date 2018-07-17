 $("#menuPrincipalfail").click(function(){
      window.location.href = "index.php";
    });
    
  $("#menuPrincipalwin").click(function(){
      window.location.href = "index.php";
    });

  $("#intentarOtra").click(function(){
      window.location.href = "main.php?"+localStorage.getItem('juegoActual');
    });

 $("#imagenRegresa").ready(function(){
     $('.mimagen').addClass('disable');
    });

 $("#cambio").click(function(){
     window.location.href = "index.php";
     //console.log("asd");
});

    $("#imagenes > a:gt(0)").hide();
    $("#siguiente").click(function(){

        $("#imagenes > a:first")
        .fadeOut(0)
        .next()
        .fadeIn(0)
        .end()
        .appendTo("#imagenes");
    });

    $("#atras").click(function(){
        $("#imagenes > a:gt(0)")
        .fadeIn(0)
        .prev()
        .fadeOut(0)
        .appendTo("#imagenes");
    });



$("#slider1").click(function(){
  $("#audioHome")[0].pause();
  var globalVariable=0
  var queryString = "?"+ globalVariable;
  window.location.href = "main.php" + queryString;
  
try {
    cargarArreglo();
    
}
catch(err) {
    //console.log(err.message);
}

});
$("#slider2").click(function(){

  var globalVariable=1
  var queryString = "?"+globalVariable;
  window.location.href = "main.php" + queryString;
try {
    cargarArreglo();
}
catch(err) {
    //console.log(err.message);
}
});
$("#slider3").click(function(){
  var globalVariable=2
  var queryString = "?" + globalVariable;
  window.location.href = "main.php" + queryString;
try {
    cargarArreglo();
}
catch(err) {
    //console.log(err.message);
}
});
