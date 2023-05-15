<!DOCTYPE html>
<html>
<head>
	<title>Calculadora de Sueldo de Vendedores</title>
</head>
<body>
	<h1>Calculadora de Sueldo de Vendedores</h1>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		Importe total vendido del mes: <input type="number" name="importe" required><br>
		Cantidad de hijos en edad escolar: <input type="number" name="hijos" required><br>
		<input type="submit" name="submit" value="Calcular">
	</form>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$importe = $_POST["importe"];
			$hijos = $_POST["hijos"];

			$bonificacion = $hijos * 50;
			$comision = $importe * 0.075;
			$sueldo_bruto = 600 + $comision + $bonificacion;
			$descuento = $sueldo_bruto * 0.11;
			$sueldo_neto = $sueldo_bruto - $descuento;

			echo "<h2>Resultados</h2>";
			echo "Bonificación por hijos en edad escolar: S/." . $bonificacion . "<br>";
			echo "Comisión por ventas: S/." . $comision . "<br>";
			echo "Sueldo bruto: S/." . $sueldo_bruto . "<br>";
			echo "Descuento: S/." . $descuento . "<br>";
			echo "Sueldo neto: S/." . $sueldo_neto;
		}
	?>
</body>
</html>