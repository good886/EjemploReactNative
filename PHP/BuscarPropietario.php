<?php
include 'conexion.php';

$result=mysqli_query($conexion,"SELECT * FROM Propietario");
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