<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>P2_ejercicio_3</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		div{
			width: 100%;
			height: 100vh;
			background-color: #0c0f0a;
			text-align: center;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			font-family: monospace;
			font-size: 20px;
		}
		form{
			height: 80vh;
			width: 110vh;
			margin: 20px;
			box-shadow: 0 0 10px #ff206e;
			background-color: #ff206e;
			border-radius: 5vh;
		}
		.a{
			height: 50vh;
			width: 110vh;
			margin-top: 15px;
			display: flex;
			flex-direction: column;
			background-color: transparent;
		}
		.b{
			height: 30vh;
			width: 110vh;
			background-color: transparent;
		}
		table{
			width: 100vh;
			height: 15vh;
			margin-right: 80px;
			border-color:#ff206e ;
		}
		p{
			color: #fbff12;
			text-shadow: 0 0 10px black;
		}

		.d{
			height: 50px;
			display: flex;
			background-color: transparent;
			flex-direction: row;
			margin-top: 20px;
		}
		th{
			color: #41ead4;
			text-shadow: 0 0 10px black;
		}

		input,section{
			padding: 5px;
			text-align: center;
			margin: 15px;
		/*	background-color: black;
			color: wheat;*/
		}
		
	</style>
</head>
<body>

<div>

<h1 style="color: #fbff12; text-shadow: 0 0 10px #ff206e;" >CASA DE CAMBIO "EL VELOZ"</h1><br>
<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<div class="a">
		
		<h3 style="margin: 30px;" >INGRESAR VALOR</h3><br>

		<?php
			$calculo="-";
			$mostrar ="-";
			$ingrese="";
			if(isset($_GET['reset']))
			{
				$num1=0;
				$num2=0;
				$calculo="-";
				$mostrar ="-";
				$ingrese ="";
			}

			if(isset($_GET['submit']))
			{
				$num1 = $_GET['num1'];
				$num2 = $_GET['num2'];
				$operacion = $_GET['operacion'];
				$ingrese ="";

				

				if ($num1 == '') {

					$num1 = 0;
					$num2 = 0;
					$calculo = "-";
					
					$operacion=1;

					$ingrese = "Ingrese Número  ";

					
				}

				if (($num2 == '')&&($ingrese = "Ingrese Número 1")) {

					$num1 = 0;
					$num2 = 0;
					$calculo ="-";
					
					$operacion=1;

					$ingrese = " Ingrese Número 2";
				}

				if (($num1 == '')&&($num2 == '')){
					$ingrese = "INGRESE 1° NÚMERO Y 2° NÚMERO ";
				}

				echo "<p>$ingrese</p>";

				switch ($operacion) {

					case 'suma':
						$calculo = $num1 + $num2;
						$mostrar = "$num1 + $num2";
						break;
					case 'resta':
						$calculo = $num1 - $num2;
						$mostrar = "$num1 - $num2";
						break;
					case 'multiplicacion':
						$calculo = $num1 * $num2;
						$mostrar = "$num1 * $num2";
						break;
					case 'division':
						$calculo = $num1 / $num2;
						$mostrar = "$num1 / $num2";
						break;

					case '1':
			
						$mostrar = "-";
						break;
					
				}
				
			}

		?>
		<input style="border-radius: 5vh ;" type="number" min="0.1" step="0.1" name="num1" placeholder="1° NÚMERO">
		<input style="border-radius: 5vh ;" type="number" min="0.1" step="0.1" name="num2" placeholder="2° NÚMERO">

		<h3 style="margin: 25px;" >SELECCIONE MONEDA FUENTE</h3><br>
		<select name="operacion">
			<option value="suma">PESO</option>
			<option value="resta">DÓLAR</option>
			<option value="multiplicacion">EURO</option>
			<option value="division">REAL</option>
		</select>



			<h3 style="margin: 25px;" >SELECCIONE MONEDA A CAMBIAR</h3><br>
		<select name="operacion">
			<option value="suma">PESO</option>
			<option value="resta">DÓLAR</option>
			<option value="multiplicacion">EURO</option>
			<option value="division">REAL</option>
		</select>

		<div class="d">
			<input class="c" type="submit" name="reset" value="Reiniciar" >
			<input class="c" type="submit" name="submit" value="Calcular" >
		</div>
		
	</div>
	
		

	<div class="b">
		<?php


			echo "<caption>RESULTADO</caption>";
			echo "<table>";
				echo "<tr>";
					echo "<th>OPERACIÓN</th>";	
					echo "<th>TOTAL</th>";	
				echo "</tr>";
				echo "<tr>";
					echo "<td>$mostrar</td>";
					echo "<td>$calculo</td>";		
				echo "</tr>";
			echo "</table>";
			
		?>
	</div>
</form>
</div>


</body>
</html>