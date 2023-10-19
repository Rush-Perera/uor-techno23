<?php
session_start();

if (isset($_GET['program']) && in_array($_GET['program'], ['dce', 'dcee','deie','dmme','mena'])) {
  $_SESSION['program'] = $_GET['program'];
}
?>