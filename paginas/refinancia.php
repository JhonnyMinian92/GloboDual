<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>GloboDual</title>
    <link rel="icon" href="../img/favicon.png">
    <script type="text/javascript">
    	function actualizar(){
    		var retorno = new XMLHttpRequest();
    		retorno.open("POST","../paginas/SoapRefinanciar.php",true);
    		retorno.setRequestHeader("Content-Type","application/x-www-form-urlenconded")
    		retorno.onreadystatechange = function(){
    			if(retorno.readyState == 4){
    				var regreso = eval("("+retorno.resposeText+")");
    				document.getElementById("txtnomapel").innerHTML = ""+regreso[0]["nom_socio"]+" "+regreso[0]["apel_socio"]+"";
    			}
    		};
    		retorno.send("variable="+document.getElementById("txtcedula").value);
    	}
    </script>
</head>
<body>
	<form>
	<div>
		<a>Socio: </a>
		<input type="text" id="txtcedula" name="txtcedula" placeholder="Cedula" onkeydown="actualizar();">
	</div>
	<div>
		<p>Nombres y Apellidos: <a id="txtnomapel"></a></p>
		<p>Ciudad: </p>
		<p>Direccion: </p>
	</div>

	<div>
		<p>Tiempo en Mora: </p>
		<p>Valor Vencido: </p>
		<p>Capital Total: </p>
		<p>Interes Generado: </p>
	</div>

	<div>
		<h2>Negociacion</h2>
		<a>Abono: </a> <input type="" name=""> <br><br>
		<a>Tiempo: </a> <input type="" name="">
	</div> <br>
	<button>Generar</button>
	</form>
</body>