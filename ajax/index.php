<!DOCTYPE html>
<html>
<head>
	<title>document</title>
</head>
<body>
<button onclick="ejecutar()">Presioname grr</button>
<script src="js/jquery-3.2.1.min.js">
	

</script>



<script >
function ejecutar(){
	$.ajax({
  method: "GET",
  url: "procesar.php",
  data: { name: "John", location: "Boston" }
})
  .done(function( msg ) {
    alert( "ajax termino");
  })

  .fail(function(){

  	alert("ajax no termino");
  });

}
</script>
</body>
</html>