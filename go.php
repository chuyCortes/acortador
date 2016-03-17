<?php
    include 'core/querys.php';
    $masterQuery = new Querys();
    $id  = "http://uanl.mx/";
    $id .= $_GET['id'];
    $ROW = $masterQuery->checaurl($id);
    echo $ROW;
    //verificamos si el hash existe en nuestra base de datos
    // $SQL = @mysql_query("SELECT * FROM `acortador` WHERE `char`='".trim()."'");
    // $ROW = @mysql_fetch_array($SQL);

    //Si existe redireccionamos
    // if($ROW['url']!=""){
    //     header ('HTTP/1.1 301 Moved Permanently'); //esta cabecera si queremos la agregamos sino no hay problema :)
    //     header('location: '.$ROW['url']);
    //     die();
    // }else{
    //     //sino existe el hash en nuestra BD redireccionamos al index de nuestro sitio
    //     header('location: http://localhost/chuy/acortador/home.php');
    //     die();
    // }

?>