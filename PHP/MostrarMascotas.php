<?php
include 'conexion.php';

$json = file_get_contents('php://input');
$obj = json_decode($json,true);
$id_propietario = $obj['id_propietario'];

$result=mysqli_query($conexion,"SELECT * FROM Mascota WHERE id_propietario_mascota = '$id_propietario'");
if(mysqli_num_rows($result)){
    while($row[]=mysqli_fetch_assoc($result)){
        $json=json_encode($row);

    }
}else{
    echo 'No se encuentra el resultado';
}
echo $json;
mysqli_close($conexion);
?>