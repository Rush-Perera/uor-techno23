<?php
session_start();

if (isset($_GET['program']) && in_array($_GET['program'], ['dce', 'dcee','deie','dmme','mena'])) {
  $_SESSION['program'] = $_GET['program'];
}
if (isset($_GET['project']) && in_array($_GET['project'], ['dmmeP1', 'dmmeP2','dmmeP3','dceeP1','dceeP2','dceeP3','dceeP4','deieP1','deieP2','deieP3','deieP4'])) {
  $_SESSION['project'] = $_GET['project'];
}

?>