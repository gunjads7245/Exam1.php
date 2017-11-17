<?php

require_once('database.php');
require_once('user.php');
require_once('userDB.php');

$users = UsersDB::getUsers();
$users = UsersDB::setUsers();

class Database {
    private static $dsn = 'mysql:host=sql.njit.edu;dbname=gds24';
    private static $username = 'gds24';
    private static $password = 'OEgO7oED';
    private static $db;
        require_once('user.php');
    $users = UsersDB::getUsers();
    private function __construct() {}
    public static function getDB () {
     if (!isset(self::$db)) {
            try {
                self::$db = new PDO(self::$dsn,
                                     self::$username,
                                     self::$password);
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                echo $error_message;
                exit();
            }
        }
        return self::$db;
    }
}
?>
<?php
    require_once('database.php');
    require_once('users_db.php');
    require_once('user.php');
    $users = UsersDB::getUsers();
?>
<html>
    <head>
        <title>Week 9 Assignmnet</title>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <table class="user-table">
            <tr>
                <th>ID</th>
                <th>email</th>
                <th>fname</th>
                <th>lname</th>
                <th>phone</th>
                <th>birthdate</th>
                <th>gender</th>
                <th>password</th>
            </tr>   
            <?php foreach ($users as $user) : ?>
                <?php echo $user->displayUserRow(); ?>
            <?php endforeach; ?>        
        </table>
    </body>     
</html>

