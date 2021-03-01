<html>
<header>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</header>
<body>
<?php
    require_once("services/UserService.php");

    $userService = new UserService();    
?>
<div class="container">
    <span>Users</span>
    <table>
        <th>Name</th>
        <?php
            $users = $userService->getUsers();
            foreach ($users as $user) {
                echo "<tr><td>" . $user->name . "</td></tr>";
            }
        ?>
    </table>
</div>
</body>
</html>