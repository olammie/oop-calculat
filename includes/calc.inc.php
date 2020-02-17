<?php

    declare(strict_types = 1);
    include 'class-autoload.inc.php';

    $oper = $_POST["oper"];
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    $calc = new calc($oper, (int)$num1, (int)$num2);// the (int) will serve as casting

    //Running a try/catch block

    try {
        echo $calc->calculator();
    } catch (TypeError $e) {
        echo "Error!: " . $e->getMessage();
    }
?>