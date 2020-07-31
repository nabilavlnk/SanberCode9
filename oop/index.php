<?php
    include "animal.php";

    $sheep->set_name('shaun');
    echo "namanya " . $sheep->get_name();
    echo "<br>";
    $sheep->set_legs('2');
    echo "kakinya " . $sheep->get_legs();
    echo "<br>";
    $sheep->set_blood('coldblooded');
    echo "darahnya " . $sheep->get_blood();

?>