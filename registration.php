<?php
require_once 'db.php';
if (empty($_POST)) {
    include_once 'registration_form.php';
} else {
    if ($_POST['password'] !== $_POST['confirm_password']) {
        echo "Passwords do not match!<br>";
        include_once 'registration_form.php';
    } else {
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $sql = "INSERT INTO users(username, password) VALUES (?, ?)";
        $query = $mysqli->prepare($sql);
        $query->bind_param("ss", $username, $password);
        if ($query->execute()) {
            header('Location: login.php');
        } else {
            echo "An error has ocurred while registering your user";
        }
    }
}
