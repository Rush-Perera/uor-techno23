<?php
session_start();

$programs = [
    "dmme" => "dmme",
    "dce" => "dce",
    "dcee" => "dcee",
    "mena" => "mena",
    "deie" => "deie"
];

$projects = [
    "dmmeP1" => "dmmeP1",
    "dmmeP2" => "dmmeP2",
    "dmmeP3" => "dmmeP3",
    "deieP1" => "deieP1",
    "deieP2" => "deieP2",
    "deieP3" => "deieP3",
    "deieP4" => "deieP4",
    "dceeP1" => "dceeP1",
    "dceeP2" => "dceeP2",
    "dceeP3" => "dceeP3",
    "dceeP4" => "dceeP4",
];

if (!isset($_SESSION['program'])) {
    $_SESSION['program'] = "dmme";
} elseif (isset($_GET['program']) && !empty($_GET['program']) && isset($programs[$_GET['program']])) {
    $_SESSION['program'] = $programs[$_GET['program']];
}

if (!isset($_SESSION['project'])) {
    $_SESSION['project'] = "dmmeP1";
} elseif (isset($_GET['project']) && !empty($_GET['project']) && isset($projects[$_GET['project']])) {
    $_SESSION['project'] = $projects[$_GET['project']];
}

require_once "data/program/{$_SESSION['program']}.php";
require_once "data/project/{$_SESSION['project']}.php";
?>
