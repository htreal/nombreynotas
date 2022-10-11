<?php

    if( isset($_POST["submit"]) && !empty($_POST["submit"])) {



        $nombre = $_POST["nombre"];
        $nota1 = $_POST["nota1"];
        $nota2 = $_POST["nota2"];
        $nota3 = $_POST["nota3"];
        $nota4 = $_POST["nota4"];

        $promedio=($nota1+$nota2+$nota3+$nota4)/4;

        if(empty($nombre)){
            echo "Agrega su nombre";
        }else if(empty($nota1)){
            echo "nota 1 sin valor";
        }else if(empty($nota2)){
            echo "nota 2 sin valor";
        }else if(empty($nota3)){
            echo "nota 3 sin valor";
        }else if(empty($nota4)){
            echo "nota 4 sin valor";
        }else if($nota1<0 and $nota1 >7.0){
            echo "El valor de la nota 1 es incorrecto";
        }else if(!preg_match("/^[0-9.]{3,3}$/", $_POST["nota1"])){
            echo "ERROR ingreso un caracter INVALIDO (nota 1)";
        }else if($nota2<0 and $nota2 >7.0){
            echo "EL valor de la nota 2 es incorrecto";
        }else if(!preg_match("/^[0-9.]{3,3}$/", $_POST["nota2"])){
            echo "ERROR ingreso un caracter INVALIDO (nota 2)";
        }else if($nota3<0 and $nota3 >7.0){
            echo "El valor de la nota 3 es incorrecto";
        }else if(!preg_match("/^[0-9.]{3,3}$/", $_POST["nota3"])){
            echo "ERROR ingreso un caracter INVALIDO (nota 3)";
        }else if($nota4<0 and $nota4 >7.0){
            echo "El valor de la nota 4 es incorrecto";
        }else if(!preg_match("/^[0-9.]{3,3}$/", $_POST["nota4"])){
            echo "ERROR ingreso un caracter INVALIDO (nota 4";
        }else if($promedio>=4.0){
            echo "<p><b>Has Aprobado la Asignatura!<br>
                <b>Nombre del Estudiante: </b>".$nombre."<br>
                <b>Notas Ingresadas:</b><br> Nota 1: ".$nota2."<br>Nota 2: ".$nota2."<br>Nota 3: ".$nota3."<br>Nota 4: ".$nota4."<br>
                <b>Promedio:</b> ".$promedio. "<br>
                <b>Asignatura:</b> Desarrollo de Sistemas Web Dinámicos</p>";

        }else{
            echo "<b><script language='javascript'>alert('REPROBADO!');</script></b>
                <p>REPROBADO<br><b>Nombre del Estudiante: </b>".$nombre."<br>
                <b>Notas Ingresadas:</b><br> Nota 1: ".$nota1."<br>Nota 2: ".$nota2."<br>Nota 3: ".$nota3."<br>Nota 4: ".$nota4."<br>
                <b>Promedio:</b> ".$promedio. "<br>
                <b>Asignatura:</b> Desarrollo de Sistemas Web Dinámicos</p>";

        }



    }

?>