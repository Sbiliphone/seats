<?php
session_start();
$db = adoNewConnection('mysqli');
$db->debug = true;
$db->connect('localhost', 'root', 'root', 'Seats');
date_default_timezone_set('Europe/Rome');