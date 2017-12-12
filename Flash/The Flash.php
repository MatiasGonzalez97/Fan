<!DOCTYPE html>

<html>

 <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>The Flash</title>
        <link rel="stylesheet" href="../style/FlashStyle.css">
    </head>

    <body>

        <p>
          The Flash es una serie estrenada en el año 2014
        </p>

        <p>
            <em>Sinopsis</em>+
            Cuando Barry Allen solo tenía 11 años, su madre fue asesinada en un extraño y terrorífico incidente y donde estuvo involucrado un hombre en un traje amarillo y donde su padre fue falsamente culpado del asesinato. Su vida cambió para siempre por la tragedia, Barry fue adoptado y criado por el detective Joe West, el padre de la mejor amiga de Barry, Iris. Ahora, Barry se ha convertido en un brillante investigador CSI, cuya determinación es descubrir la verdad sobre la extraña muerte de su madre, le lleva a seguir todas las leyendas urbanas sin explicación y los avances científicos que surjan. La última obsesión de Barry es un acelerador de partículas de alta tecnología, creado por el visionario físico Harrison Wells y su equipo de S.T.A.R. Labs, que afirma que su invención aportará avances inimaginables en poder y medicina. Sin embargo, algo sale horriblemente mal durante una presentación pública, y cuando la devastadora explosión causa una extraña y fuerte tormenta, que ocasiona muchas supuestas muertes, Barry es alcanzado por un rayo y arrojado por la fuerza del rayo hacia mezclas químicas de su laboratorio. Después de nueve meses en coma, Barry despierta para descubrir que su vida ha cambiado de nuevo, el accidente le ha dado el poder de la súpervelocidad, garantizándole la habilidad de moverse por Central City como un ángel guardián invisible. Aunque emocionado inicialmente por sus nuevos poderes, Barry se queda impactado al descubrir que no es la única persona (metahumano) que ha sido creado en la explosión del acelerador, y no todo el mundo está usando sus poderes para el bien. En los meses posteriores al accidente, la ciudad ha visto un enorme crecimiento de gente desaparecida, muertes sin explicación y otros fenómenos extraños. Barry ha renovado ahora su propósito, usando sus nuevos poderes de la velocidad para proteger a los inocentes, mientras no deja nunca de lado su búsqueda por resolver el asesinato de su madre y limpiar el nombre de su padre. Por ahora, solo unos pocos amigos y socios muy cercanos saben que Barry es literalmente el hombre con vida más rápido del mundo
        </p>

        <h2>The Flash</h2>

        <a>
            <img src="The Flash.jpg"WIDTH=200 HEIGHT=300/>
        </a>

        <ul>

        </li>
            <table width="620px">
              <table width="620px">
              	<tr>
              		<td width="20px"></td>
              		<td width="200px">Tittle</td>
              		<td width="200px">Date</td>
              		<td width="200px">Answers</td>
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
              			echo "<td><a href='foro.php?id=$id'>ver</a></td>";
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
