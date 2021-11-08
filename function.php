<?php

function t1()
{
    if (isset($_GET['inp-1'])) {
        return trim($_GET['inp-1']);
    }
    return false;
}

function t2()
{
    if (isset($_GET['inp-2-1']) and isset($_GET['inp-2-2'])) {
        if ($_GET['inp-2-1'] !== "" and $_GET['inp-2-2'] !== "") {
            return max(array($_GET['inp-2-1'], $_GET['inp-2-2']));
        } else {
            return 'Введите, пожалуйста, оба числа';
        }
    } else {
        return false;
    }
}

function t3()
{
    if (isset($_GET['inp-3'])) {
        if (mb_strlen(trim($_GET['inp-3'])) > 5) {
            return 1;
        } else {
            return 0;
        }
    } else {
        return false;
    }
}

function t4()
{
    if (isset($_GET['inp-4'])) {
        if (Date('Y') - $_GET['inp-4'] >= 18) {
            return 1;
        } else {
            return 0;
        }
    } else {
        return false;
    }
}

function t5()
{
    if (isset($_GET['i-5'])) {
        return 1;
    } else {
        return 0;
    }
}

function t6()
{
    switch ($_GET['radio-1']) {
        case "green":
            return "green";
        case "red":
            return "red";
        case "blue":
            return "blue";
    }
}

function t7()
{
    switch ($_POST['radio-2']) {
        case "green":
            return "green";
        case "red":
            return "red";
        case "orange":
            return "orange";
    }
}

function t8()
{
    if (isset($_POST["i-8"])) {
        return 1;
    } else {
        return 0;
    }
}

function t9()
{
    if (stristr($_POST['i-9'], '@')) {
        return 1;
    } else {
        return 0;
    }
}

function t10()
{

    if (isset($_POST["i-10"])) {
        if (trim($_POST["i-10"]) !== "") {
            return trim($_POST["i-10"]);
        } else {
            return "Поле не может быть пустым";
        }
    } else {
        return false;
    }
}
