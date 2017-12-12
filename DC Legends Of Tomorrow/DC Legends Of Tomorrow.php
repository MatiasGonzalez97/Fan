<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>DC Legends Of Tomorrow</title>
        <link rel="stylesheet" href="../style/LegendsStyle.css">
    </head>
    <body>

        <p>
           DC Legends Of Tomorrow es una serie estrenada en el año 2016
        </p>

        <p>
            <em>Sinopsis</em>
             Cuando los héroes no son suficientes, el mundo necesita leyendas. Después de haber visto el futuro, Rip Hunter (Arthur Darvill) se encarga de organizar un grupo dispar de héroes y villanos para intentar evitar que suceda la catástrofe que sabe que se avecina.El 'spin off' de Arrow y The Flash cuenta con personajes de ambas series, como Captain Cold (Wentworth Miller), el Dr. Martin Stein (Victor Garber), Ray Palmer (Brandon Routh) o Sara Lance (Caity Lotz), así como las novedades de Hawkgirl (Ciara Renée) y Rip Hunter (Arthur Duvall). La ficción se ha ordenado para el canal CW, al igual que las series originales, y esta ambientada en el mismo periodo de tiempo.
        </p>

        <h2>DC Legends Of Tomorrow</h2>

        <a>
            <img src="DC Legends Of Tomorrow.jpg" WIDTH=200 HEIGHT=300/>
        </a>

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
