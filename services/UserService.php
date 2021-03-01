<?php
require_once("dao/UserDAO.php");
require_once("utils/LoggerUtils.php");

class UserService {

    private $userDAO;
    private $logger;
    
    public function __construct() {
        $this->logger = getLogger();
        $this->userDAO = new UserDAO();
    }

    public function getUsers() {
        $users = $this->userDAO->getUsers();
        $this->logger->debug(__METHOD__ . "count(users)=" . count($users));
        return $users;
    }
}
?>