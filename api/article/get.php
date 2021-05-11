<?php
    include_once('../../script/article.script.php');
    include_once('../../script/user.script.php');
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: GET");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    $path = '/assets/articles/';

    if(isset($_GET['id_category'])){
        $id_cat = $_GET['id_category'];
    $articles = getArticleByIdCategory($id_cat);
    $arts = [];
    foreach($articles as $art){
        $id = $art['id'];
        $title = $art['title'];
        $photo = $art['photo'];
        $desc  = $art['description'];
        $published_at = $art['published_at'];
        $price = $art['price'];
        $owner = mysqli_fetch_assoc(getUserById($art['owner_id']));
        $owner = ['id'=>$owner['id'],'firstName'=>$owner['first_name'], 'lastName'=>$owner['last_name']];
        array_push($arts, ['title'=>$title,'owner'=>$owner,'description'=>$desc,'photo'=>$path.$photo]);
    }
    echo json_encode($arts);
    }
    if(isset($_GET['id_owner'])){
        $id = $_GET['id_owner'];
        $articles = getArticleByIdOwner($id);
        $arts = [];
        foreach($articles as $art){
            $id = $art['id'];
            $title = $art['title'];
            $photo = $art['photo'];
            $desc  = $art['description'];
            $published_at = $art['published_at'];
            $price = $art['price'];
            array_push($arts, [
                'title'=>$title,
                'description'=>$desc,
                'photo'=>$path.$photo,
                'published_at'=>$art['published_at'],
                'price'=>$art['price']
            ]);
        }
        echo json_encode($arts);
        return null;
    }
    $articles = getArticles();
    $arts = [];
    foreach($articles as $art){
        $id = $art['id'];
        $title = $art['title'];
        $photo = $art['photo'];
        $desc  = $art['description'];
        $published_at = $art['published_at'];
        $price = $art['price'];
        $owner = mysqli_fetch_assoc(getUserById($art['owner_id']));
        $owner = ['id'=>$owner['id'],'firstName'=>$owner['first_name'], 'lastName'=>$owner['last_name']];
        array_push($arts, ['title'=>$title,'owner'=>$owner,'description'=>$desc,'photo'=>$path.$photo]);
    }
    echo json_encode($arts);