
<?php
    $array1 = array("Curso"=>"PHP","Pessoa"=>"Joao","Loja"=>"Centro");
    $array2 = array("Curso"=>"Java","Pessoa"=>"Pedro","Loja"=>"Zona Sul");
    $array3 = array("Curso"=>"Python","Pessoa"=>"Clara","Loja"=>"Zona Oeste");
   
    foreach($array1 as $key => $value){
        echo $key."=".$value;
        echo '<p>';
    }
    foreach($array2 as $key => $value){
        echo $key."=".$value;
        echo '<p>';
    }
    foreach($array3 as $key => $value){
        echo $key."=".$value;
        echo '<p>';
    }
?>