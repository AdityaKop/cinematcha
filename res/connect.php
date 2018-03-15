<?php

try {

  $db = new PDO('mysql:host=localhost;dbname=cinematcha;charset=UTF8', 'root', '');
  //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

} catch (PDOException $e) {

  echo 'Connection failed: ' . $e->getMessage();
  exit;
  
}
