<?php
    include_once('../../script/categorie.script.php');
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: GET");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    $cats = getCategories();
    $cts = [];
    foreach($cats as $ct){
        array_push($cts, ['id'=>$ct['id'],'label'=>$ct['label']]);
    }

    http_response_code(200);
    echo json_encode($cts);