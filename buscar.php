<?php
	$servername = "localhost";
    $username = "root";
  	$password = "";
  	$dbname = "tienda";

	$conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
      }

    $salida = "";

    $query = "SELECT * FROM videojuegos ORDER By Titulo";

    if (isset($_POST['consulta'])) {
    	$q = $conn->real_escape_string($_POST['consulta']);
    	$query = "SELECT Titulo , Fecha , Compañia , Director , CodPEGI, Idjuego,
		 Categoria , Plataforma , Modos  FROM videojuegos 
		WHERE Titulo LIKE '%".$q."%' 
		OR Fecha LIKE '%".$q."%' 
		OR Compañia LIKE '%".$q."%'
		OR Director LIKE '%".$q."%' 
		OR Categoria LIKE '%".$q."%' 
		OR CodPEGI LIKE '%".$q."%'
		OR Idjuego LIKE '%".$q."%'
		OR Modos LIKE '%".$q."%' 
		OR Plataforma LIKE '%".$q."%'";
    }

    $resultado = $conn->query($query);

    if ($resultado->num_rows>0) {
    	$salida.="<table border=1 class='tabla_datos'>
    			<thead>
				<tr id='titulo'>
				<td>Titulo</td>
				<td>Fecha</td>
				<td>Compañia</td>
				<td>Director</td>
				<td>Modos</td>
				<td>Plataforma</td>
				<td>Categoria</td>
				<td>CodPEGI</td>
				<td>Idjuego</td>
				</tr>
    			</thead>
    			

    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr>
    					 <td>".$fila['Titulo']."</td>
            <td>".$fila['Fecha']."</td>
            <td>".$fila['Compañia']."</td>
            <td>".$fila['Director']."</td>
            <td>".$fila['Modos']."</td>
            <td>".$fila['Plataforma']."</td>
            <td>".$fila['Categoria']."</td>
            <td>".$fila['CodPEGI']."</td>
            <td>".$fila['Idjuego']."</td>
    				</tr>";

    	}
    	$salida.="</tbody></table>";
    }else{
    	$salida.="NO HAY DATOS :(";
    }


    echo $salida;

    $conn->close();
