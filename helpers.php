<?php

function dump($var) {

    echo '<pre>';

        var_dump($var);

    echo '</pre>';

}

function dd($var) {

    die(dump($var));

}