<?php
    include_once('../../script/specialite.script.php');
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: GET");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    $specs = getSpecialies();
    $sps = [];
    foreach($specs as $sp){
        array_push($sps, ['id'=>$sp['id'],'label'=>$sp['label']]);
    }

    http_response_code(200);
    echo json_encode($sps);