<?php

    $datos_desayunos = file_get_contents('desayunos.json');
    $objDesayunos = json_decode($datos_desayunos);


    $datos_comidas = file_get_contents('comidas.json');
    $objComidas = json_decode($datos_comidas);


    $datos_cenas = file_get_contents('cenas.json');
    $objCenas = json_decode($datos_cenas);


    $datos_postres = file_get_contents('postres.json');
    $objPostres = json_decode($datos_postres);


    $datos_bebidas = file_get_contents('bebidas.json');
    $objBebidas = json_decode($datos_bebidas);
?>
