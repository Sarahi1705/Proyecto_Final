<?php

if (filter_input_array(INPUT_POST)) {
                 
$_id_ =  trim(filter_input(INPUT_POST, 'id'));   
$_nombre = trim(filter_input(INPUT_POST, 'nombre'));
$_sexo = trim(filter_input(INPUT_POST, 'sexo'));
include_once '../model/Alumnos.php';

$edit = alumnos::edit($_nombre,$_sexo,$_id_);
    if ($edit){
        header("location: ../index.php?menu=alumnos");
        } else{
        echo 'Error, no se pudo actualizar';
        }
    


}

?>