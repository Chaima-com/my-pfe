<?php
    include_once('../../script/niveaux.script.php');
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: GET");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    $nivs = getNiveaux();
    $nvn = [];
    foreach($nivs as $nv){
        array_push($nvn, ['id'=>$nv['id'],'label'=>$nv['label']]);
    }

    http_response_code(200);
    echo json_encode($nvn);