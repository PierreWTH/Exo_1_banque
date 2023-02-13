<?php

spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
    });

    // Creation des instances

    $t1 = new Titulaire("Pierre", "Wietrich", "15-05-1980", "Nancy");

    $c1 = new Compte("livret A", 1400, "euros", $t1);
    $c2 = new Compte("Assurance Vie", 10000, "euros", $t1);
    $c3 = new Compte("compte courant", 600, "euros", $t1);
    
    $t1->afficherInfos();

    
    


    





?>