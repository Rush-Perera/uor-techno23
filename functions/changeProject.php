<?php
session_start();

if (isset($_GET['lang']) && in_array($_GET['lang'], ['en', 'si'])) {
  $_SESSION['language'] = $_GET['lang'];
}
?>