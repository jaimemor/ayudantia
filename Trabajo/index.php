<!DOCTYPE html>
<html>
<head>
	<title>Trabajo Ayudantia Ajax</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>



<div class="container">
	<div class="row">
		<div class="col-md-6 well">
			
			
			 
<center><button onclick="ejecutar('upla')" class="btn btn-success btn-lg">Enviar</button></center>
<div id="resultado"></div>
<script src="js/jquery-3.2.1.min.js">
	

</script>



<script>
       	function ejecutar(universidad){

       		$.ajax({
                            url: 'formu.php',
                           method: "GET",
                            data: {param1: 'value1', param2: universidad},

                            beforesend: function(){
                                   //$("#resultado").html('');
                                   //$("#resultado").append("enviando");
                                          },
                     })
                     .done(function(data) {
                            // $("#resultado").html('');
                                   $("#resultado").append(data);

                            // if (data=='1') {
                            //     alert("primer lalalal");
                            //     alert(data);
                            // }
                            // else {

                            //     alert("segundo mensaje");
                            //     alert(data);
                            //}

                     })
                     .fail(function() {
                            $("#resultado").html('');
                                   $("#resultado").append("<span>error al enviar</span>");
                     })
                     
                     
                     
              }


</script>
		</div>

			
			 
		</div>
		
</div>



<script type="text/javascript" scr="js/javascript"></script>
<script type="text/javascript" scr="js/bootstrap.js"></script>
</body>
</html>