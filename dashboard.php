<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Desire Kaleba">
    <meta name="description" content="Js fields validation example">
    <meta name="keywords" content="">

    <link rel="stylesheet" href="css/main.css"/>
    
    <title>Dashboard</title>
</head>
<body class="wrapper">


<?php

    session_start();
    if (!$_SESSION['user']) {
        header("location: login.php");
    }
    require('./db.config.php');
    $pdo = null;
    $stmt = null;

    try {
        $pdo = new PDO(
            "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_USER, DB_PASSWORD, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
            ]
        );
        
        $query = "SELECT q.id, q.name, r.id as r_id, r.question_id, r.response  FROM questions q JOIN responses r ON q.id = r.question_id";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();

        if (count($result) > 0) {
            $repondants = null;
            if ((count($result) / 16) == 1) {
                $repondants = "<h2>". count($result) / 16 . "&nbsp;&nbsp; personne a respondu" ."</h2>";
            } else {
                $repondants = "<h2>". count($result) / 16 . "&nbsp;&nbsp; personnes ont respondu" ."</h2>";
            }
            print($repondants);
            $res_string = "<ul>";
            foreach($result as $res) {
                $res_string .= "<li><b>" .$res['name']. "</b></li>";
                $res_string .= "<ul>";
                $res_string .= "<li>" .$res['response']. "</li>";
                $res_string .= "</ul>";

                if ($res['id'] == 16) {
                    $res_string .= '<hr>';
                }
            }
            $res_string .= "</ul>";
            print($res_string);
        } else {
            echo "No result found";
        }

    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
?>

</body>
</html>