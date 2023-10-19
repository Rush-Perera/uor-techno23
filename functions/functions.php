<?php
session_start();

if (!isset($_SESSION['program']))
    $_SESSION['program'] = "dmme";
else if (isset($_GET['program']) && $_SESSION['program'] != $_GET['program'] && !empty($_GET['program'])) {
    if ($_GET['program'] == "dmme")
        $_SESSION['program'] = "dmme";
    else if ($_GET['program'] == "dce")
        $_SESSION['program'] = "dce";
    else if ($_GET['program'] == "dcee")
        $_SESSION['program'] = "dcee";
    else if ($_GET['program'] == "mena")
        $_SESSION['program'] = "mena";
    else if ($_GET['program'] == "deie")
        $_SESSION['program'] = "deie";
}

require_once "data/program/" . $_SESSION['program'] . ".php";

?>