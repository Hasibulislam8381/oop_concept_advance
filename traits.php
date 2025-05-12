<?php
trait Logger{
    public function log($msg){
        echo "Log message: $msg";
    }
}

class User{
    use Logger;
}
class Admin{
    use Logger;
}

$user = new User();
$user->log("User Login\n");
echo "<br/>";
$admin = new Admin();
$admin->log("Admin Login ");