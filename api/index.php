<?php
  ini_set('max_execution_time', 0);
  require('../res/connect.php');

  $action = filter_input(INPUT_GET, 'action');

  if (isset($action)) {

    switch ($action) {

      case "get_movies":

        $stmt = $db->prepare("SELECT * FROM movies LIMIT 5");
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($row, JSON_UNESCAPED_UNICODE);
        break;

    }

  }

?>
