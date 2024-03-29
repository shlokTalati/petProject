<?php

$authUrl = array(
    "/authentication"
);

$appUrl = array(
    "/",
    "/home" => "home.php",
    "/userprofile" => "userProfile.php",
    "/faq"=> "faq.php", 
    "/listpet"=> "listPet.php",
    "/browsepet"=> "browsepet.php",
    "/exploreyourtype"=> "exploreyourtype.php",
    "/typeresult"=> "typeresult.php",
    "/aboutus"=> "aboutus.php"
    

);

if($request_uri_path != "/authentication" && $_SESSION['loggedInStatus'] == false){
    header("Location: /petmarket/authentication");
}
else if($request_uri_path == "/authentication" && $_SESSION['loggedInStatus'] == true){
    header("Location: /petmarket/home");
}

if($request_uri_path == '/authentication'){
    require(ROOT ."app/controller/authentication.php");
}
else if(array_key_exists($request_uri_path, $appUrl)){
    include(ROOT .'app/controller/'.$appUrl[$request_uri_path]);
}
