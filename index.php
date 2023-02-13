<?php

spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
    });

    $t1 = new Titulaire("Pierre", "Wietrich", "15-05-1980", "Nancy");
    $t1 -> afficherInfos();

    $t2 = new Titulaire("Elon", "Musk", "15-05-1975", "New york");
    $t2 -> afficherInfos();

    $c3 = new Compte("livret A", 1400, "roubles", $t1);
    
    $c3 -> displayInfos();

    $c4 = new Compte("compte courant", 600, "$", $t2);
    $c4 -> displayInfos();
    
    $c3->Payment(50, $c4);
    


    





?>