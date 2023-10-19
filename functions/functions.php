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

if (!isset($_SESSION['project']))
    $_SESSION['project'] = "dmme";
else if (isset($_GET['project']) && $_SESSION['project'] != $_GET['project'] && !empty($_GET['project'])) {
    if ($_GET['project'] == "dmmeP1")
        $_SESSION['project'] = "dmmeP1";
    else if ($_GET['project'] == "dmmeP2")
        $_SESSION['project'] = "dmmeP2";
    else if ($_GET['project'] == "dmmeP3")
        $_SESSION['project'] = "dmmeP3";
    else if ($_GET['project'] == "mena")
        $_SESSION['project'] = "mena";
    else if ($_GET['project'] == "deie")
        $_SESSION['project'] = "deie";
}

require_once "data/program/" . $_SESSION['program'] . ".php";
require_once "data/project/" . $_SESSION['project'] . ".php";

?>