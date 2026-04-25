<!DOCTYPE html>

<html lang="es"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>Pastelería</title> 
    <link rel="stylesheet" href="estilo-pasteleria.css"> 
</head> 
<body> 

    <header> 
        <h1>PASTELERÍA: "PASTELES"</h1> 
        <p>Los mejores pasteles para cualquier ocasión</p> 
    </header> 

    <nav> 
        <a href="#productos">| PRODUCTOS |</a> 
        <a href="#descuento">| DESCUENTO |</a> 
        <a href="#pedidos">| PEDIDOS |</a> 

    </nav> 
 
    <section id="productos"> 
        <h2>Productos y Precios</h2> 
 
        <table border="1"> 
            <tr> 
                <td>PASTELES</td> 
                <td>GELATINAS</td> 
                <td>PAYS</td> 
            </tr> 
 
            <tr> 
                <td>Pastel de 3 Leches: $350</td> 
                <td>Gelatina de Pistache: $250</td> 
                <td>Pay de Mango: $300</td> 
            </tr> 
 
            <tr> 
                <td>Pastel de Chocolate: $300</td> 
                <td>Gelatina de Limón: $150</td> 
                <td>Pay de Jamón con Queso Amarillo: $250</td> 
            </tr> 
 
            <tr> 
                <td>Pastel de Vainilla: $300</td> 
                <td>Gelatina de Fresa: $150</td> 
                <td>Pay de Frutas: $275</td> 
            </tr> 
 
            <tr> 
                <td>Pastel de Zanahoria: $350</td> 
                <td>Gelatina de Mosaico: $270</td> 
                <td>Pay de Queso: $225</td> 
            </tr> 
 
            <tr> 
                <td>Pastel de Ferrero: $400</td> 
                <td>Gelatina de Naranja: $150</td> 
                <td>Pay de Café: $200</td> 
            </tr> 
 
            <tr> 
                <td>Pastel de Mazapán: $400</td> 
                <td>Gelatina de Durazno: $150</td> 
                <td>Cheesecake: $325</td> 
            </tr> 
        </table> 
    </section> 

    <section id="descuento">
			<?php
				$_precio1 = 350; 
				$_desc;
				$_porc=0.05;
				echo "<h2>PROMOCION DEL PASTEL DE 3 LECHES</h2>";
				for($i=1; $i<10; $i++){
					echo "Día " . $i . ": $" .  $_desc=($_precio1-($_precio1*$_porc)) . "<br>";
					$_porc=($_porc+0.01);
				}
			?>
		</section>
 
    <section id="pedidos"> 
        <h2>Haz tu pedido</h2> 
 
        <form action="pasteles_codigo.php" method="POST"> 
            <label>Nombre:</label><br> 
            <input type="text" name="nombre" required><br> 
 
            <label>Selecciona un producto:</label><br> 
            <select type="text" name="producto"> 
                <option>Pastel 3 leches</option>
                <option>Pastel de Chocolate</option>              
                <option>Pastel de Vainilla</option>
                <option>Pastel de Zanahoria</option>
                <option>Pastel de Ferrero</option>
                <option>Pastel de Mazapán</option>
                <option>Gelatina de Pistache</option>
                <option>Gelatina de Limón</option>
                <option>Gelatina de Fresa</option>
                <option>Gelatina de Mosaico</option>             
                <option>Gelatina de Naranja</option>
                <option>Gelatina de Durazno</option>
                <option>Pay de Mango</option>
                <option>Pay de Jamón con Queso Amarill    
                <option>Pay de Queso</option>
                <option>Pay de Café</option>
                <option>Cheesecake</option>
            </select><br> 
 
            <label>Cantidad:</label><br> 
            <input type="text" name="cantidad" required=""><br> 

            <label>Número de Teléfono:</label><br>
            <input type="text" name="celular" required=""><br>
 
            <label>Comentarios:</label><br> 
            <textarea type="textarea" name="comentarios" required=""></textarea><br> 
 
            <button type="submit" name="Enviar" value="Enviar">Enviar pedido</button> 
        </form> 
    </section> 
 
 
    <footer> 
        <p> 2026 PASTELERÍA: "PASTELES"</p> 
    </footer> 
 
</body> 
</html> 
 
 
