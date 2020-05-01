<?php
    require('./db.config.php');

    class Response {
    protected $pdo = null;
    protected $stmt = null;

    function __construct () {
    // __construct() : connect to the database
    // PARAM : DB_HOST, DB_CHARSET, DB_NAME, DB_USER, DB_PASSWORD

        try {
        $this->pdo = new PDO(
            "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_USER, DB_PASSWORD, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
            ]
        );
        return true;
        } catch (Exception $ex) {
        $this->CB->verbose(0, "DB", $ex->getMessage(), "", 1);
        }
    }

    function __destruct () {
    // __destruct() : close connection when done

        if ($this->stmt !== null) { $this->stmt = null; }
        if ($this->pdo !== null) { $this->pdo = null; }
    }

    function save ($question_id, $response){

        // ADD ENTRY
        $sql = "INSERT INTO `responses` (`question_id`, `response`) VALUES (?, ?)";
        
        $cond = [$question_id, $response];
        try {
        $this->stmt = $this->pdo->prepare($sql);
        $this->stmt->execute($cond);
        } catch (Exception $ex) {
        // die($ex->getMessage());
        return false;
        }

        return true;
    }
    }
?>