<!DOCTYPE html>
<html>
    <head>
        <title>
            the walking dead
        </title>
        <link rel="stylesheet" href="../style/TWDStyle.css">
    </head>
    <body>
       <p>
           The Walking dead
        </p>
        <p>
            Sinopsis
        </p>
        <p>
            Tras despertar de un coma en un hospital abandonado, el oficial de policía Rick Grimes (Andrew Lincoln) se da cuenta que el mundo que conocía ya no existe y de que el caos se ha apoderado de la ciudad debido a que inexplicablemente los muertos caminantes dominan las calles. A las afueras de Atlanta, un pequeño campamento lucha por sobrevivir mientras los muertos-vivientes los acechan a cada momento.Dicho grupo, guiado por Shane Walsh (Jon Bernthal), pasa a ser liderado por Rick, a quien encuentran después de haberlo dado por muerto. Este último anteriormente había encontrado en Atlanta a un grupo pequeño que ha ido a la ciudad a buscar víveres. Mientras su situación se vuelve más y más sombría, la desesperación del grupo por sobrevivir les obliga a hacer cosas que en su vida anterior a la plaga caminantes no se habrían imaginado hacer jamás.
        </p>
        <img src="twe.jpg"
        WIDTH=WIDTH=200 HEIGHT=300/>

               <table width="620px">
	<tr>
		<td width="20px"></td>
		<td width="200px">Titulo</td>
		<td width="200px">Fecha</td>
		<td width="200px">Respuestas</td>
	</tr>
<?php
	include("conexionBD.php");
	$query = "SELECT * FROM  foro WHERE identificador = 0 ORDER BY fecha DESC";
	$result = $mysqli->query($query);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$id = $row['ID'];
		$titulo = $row['titulo'];
		$fecha = $row['fecha'];
		$respuestas = $row['respuestas'];
		echo "<tr>";
			echo "<td><a href='foro.php?id=$id'>Leer</a></td>";
			echo "<td>$titulo</td>";
			echo "<td>".date("d-m-y,$fecha")."</td>";
			echo "<td>$respuestas</td>";
		echo "</tr>";
	}
?>
</table>
<a href="formulario.php"> nuevo tema </a>
    </body>
</html>
