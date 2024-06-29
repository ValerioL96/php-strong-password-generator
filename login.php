<?php
session_start();

if(isset($_GET['username']) && isset($_GET['password'])){
    $_SESSION['username'] = $_GET['username'];
    $_SESSION['password'] = $_GET['password'];
}
?>

<form action="" method="GET">
    <div>
        <label for="username">
            Username:
        </label>
        <input type="text" name="username" id="username">
    </div>
    <div>
        <label for="password">
            Password:
        </label>
        <input type="password" name="password" id="password">
    </div>
    <button type="submit">
        Login
    </button>
</form>