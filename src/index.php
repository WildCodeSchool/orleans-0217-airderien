<?php

//route
$page ='home';


require '../vendor/autoload.php';
$loader = new Twig_Cache_Filesystem(__DIR__.'../public');
$twig = new Twig_Environment($loader,[
    'cache' => false, // __DIR__.'tmp'
]);

if($page === 'home'){
    echo $twig->render('hub2.html.twig',[

    ]);
}


?>