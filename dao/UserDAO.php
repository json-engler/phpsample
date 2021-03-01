<?php

require("models/UserModel.php");
require("utils/LoggerUtils.php");

class UserDAO {
    public function __construct() {
    }

    function getUsers() {
        $users = array();
        array_push($users,new UserModel("dave"));
        array_push($users,new UserModel("tom"));
        return $users;
    }
}
?>