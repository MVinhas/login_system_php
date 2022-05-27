<?php
require_once 'db.php';
include_once 'header.php';
if (!empty($_POST)) {
    $sql = "SELECT * FROM users WHERE username = ? LIMIT 1";
    $query = $mysqli->prepare($sql);
    $query->bind_param("s", $_POST['username']);
    
    $query->execute();
    $query->store_result();
    if ($query->num_rows == 1) {
        $query->bind_result($id, $username, $password);
        if ($query->fetch()) {
            if (password_verify($_POST['password'], $password)) {
                echo "Login Successful!";
                session_start();
                $_SESSION['user'] = $_POST['username'];
            } else {
                echo "Wrong password!";
            }   
        } else {
            echo "Login failed. Try again.";
        }
    }  else {
        echo "Login failed. Try again.";
    }
}
if (!isset($_SESSION) || empty($_SESSION)) {
    include_once 'login_form.php';
} else {
    echo "Welcome!";
}
include_once 'footer.php';