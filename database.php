
<?php
include("config.php");

class Database
{
    public $connection;

    public function __construct($config, $username = 'root', $password = 'bytefury')
    {
        $dsn = 'mysql:' . http_build_query($config, '', ';');

        try {
            $this->connection = new PDO($dsn, $username, $password, [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
            $this->connection->exec("USE test");
            echo "Database Connected Successfully";
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

}
?>
