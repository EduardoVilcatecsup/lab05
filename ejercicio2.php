<!DOCTYPE html>
<html>
<head>
	<title>Cálculo de precios de gaseosas</title>
</head>
<body>
	<h1>Cálculo de precios de gaseosas</h1>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label for="precio_actual">Precio actual de la gaseosa:</label>
		<input type="number" name="precio_actual" id="precio_actual" required>
		<br>
		<label for="cantidad">Cantidad de unidades adquiridas:</label>
		<input type="number" name="cantidad" id="cantidad" required>
		<br>
		<input type="submit" value="Calcular">
	</form>

	<?php
		// Verificar si se han enviado los datos del formulario
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// Obtener los datos del formulario
			$precio_actual = $_POST["precio_actual"];
			$cantidad = $_POST["cantidad"];

			// Definir los porcentajes de descuento
			$descuento_precio = 0.05;
			$descuento_compra = 0.07;

			// Realizar los cálculos
			$nuevo_precio = $precio_actual * (1 - $descuento_precio);
			$importe_compra = $cantidad * $nuevo_precio;
			$importe_descuento = $importe_compra * $descuento_compra;
			$importe_pagar = $importe_compra - $importe_descuento;
			$caramelos_obsequio = $cantidad * 2;

			// Mostrar los resultados en pantalla
			echo "<h2>Resultados:</h2>";
			echo "<p>Nuevo precio de la gaseosa: $" . $nuevo_precio . "</p>";
			echo "<p>Importe de la compra: $" . $importe_compra . "</p>";
			echo "<p>Importe del descuento especial: $" . $importe_descuento . "</p>";
			echo "<p>Importe a pagar: $" . $importe_pagar . "</p>";
			echo "<p>Caramelos obsequiados: " . $caramelos_obsequio . "</p>";
		}
	?>
</body>
</html>