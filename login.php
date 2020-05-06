<?php
session_start();
require('./db.config.php');
$pdo = null;
$stmt = null;
$error = null;

if (isset($_POST['submit'])) {

    $username = $_POST['name'];
	$password = $_POST['password'];
	$pass = md5($password);
        try {
        $pdo = new PDO(
            "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_USER, DB_PASSWORD, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
            ]
        );
        
$query = "SELECT * FROM `users` WHERE `username` = ? AND `password` = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$username, $pass]);
    $user = $stmt->fetchAll();

    if (count($user) > 0) {
        // header('location: dashboard.php');
        $_SESSION['user'] = $user[0]['username'];
        header('location: dashboard.php');
    } else {
        $error = "Wrong credentials, please check your information";
    }

        } catch (Exception $ex) {
        // $error = "Wrong credentials, please check your information";
        // $this->CB->verbose(0, "DB", $ex->getMessage(), "", 1);
        }
	
}
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Desire Kaleba">
    <meta name="description" content="Js fields validation example">
    <meta name="keywords" content="">

    <link rel="stylesheet" href="./css/login.css">

    <title>login</title>
</head>
<body>
    
    <main>
        <section>
            <div class="container">
                <h2>Login</h2>
                <p id="message"></p>
                <p class="error" id=""><?php echo($error !== null) ? $error : ""; ?></p>
                <form id="my-form" action="login.php" method="POST">
                    <div class="form-group">
                        <label for="name">Name</label><br>
                        <input type="text" id="name" name="name" class="form-controller"/>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label><br>
                        <input type="password" id="password" name="password" class="form-controller" autocomplete />
                    </div>
                    <button type="submit" name="submit" class="btn">Login</button>
                    
                </form>
            </div>
        </section>
    </main>

    <script src="./js/login.js"></script>
</body>
</html>