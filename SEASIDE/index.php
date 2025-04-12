<?php
session_start();
$error = [
    'login' => $_SESSION['login_error'] ?? '',
    'register' => $_SESSION['register_error'] ?? '',
    'register_success' => $_SESSION['register_success'] ?? ''
];
$activeForm = $_SESSION['active_form'] ?? 'login';

session_unset();

function showError($error){
    return !empty($error) ? "<p class='error-message'>$error</p>" : '';
}

function isActiveForm($formName, $activeForm){
    return $formName === $activeForm ? 'active' : '';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "poppings", serif;
}

body{
    display:flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: linear-gradient(135deg, #2e6193, #2e8e93);
    color: black;
}
.container {
    margin: 0 15px;
}

.form-box {
    width: 100%;
    max-width: 450px;
    padding:30px ;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px #553434;
    display: none;
}
.form-box.active {
    display:block;
}

h2{
    font-size: 34px;
    text-align: center;
    margin-bottom: 20px;
}

input,
select{
    width: 100%;
    padding: 12px;
    background: #fff;
    border-radius: 10px;
    border: none;
    outline: none;
    font-size: 16px;
    color: rgb(0, 0, 0);
    margin-bottom: 20px;
}

button {
    width: 100%;
    padding: 12px;
    background: #553434;
    border-radius: 6px;
    border: none;
    cursor: pointer;
    font-size: 16px;
    color: rgb(255, 255, 255);
    font-weight: 500;
    margin-bottom: 20px;
    transition: 0.5s;
}

button:hover {
    background: rgb(200, 6, 6);
}

p {
    font-size: 14.5px;
    text-align: center;
    margin-bottom: 10px;
}
p a {
    color: rgb(0, 0, 0);
    text-decoration: none;
}

p a:hover {
    text-decoration: underline;
}
.error-message {
    padding: 12px;
    background: #fff;
    border-radius: 6px;
    font-size: 16px;
    color: #553434;
    text-align: center;
    margin-bottom: 20px;

}
</style>
</head>
<body>
<div class="container">
        <!-- Login Form -->
        <div class="form-box <?= isActiveForm('login', $activeForm); ?>" id="login-form">
            <form action="login_register.php" method="post">
                <h2>Log in</h2>
                <?= showError($error['login']); ?>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" name="login">Log in</button>
                <p>Don't have an account? <a href="#" onclick="showForm('register-form')">Register</a></p>
            </form>
        </div>

        <!-- Register Form -->
        <div class="form-box <?= isActiveForm('register', $activeForm); ?>" id="register-form">
            <form action="login_register.php" method="post">
                <h2>Register</h2>
                <?= showError($error['register']); ?>
                <?= showError($error['register_success']); ?>
                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="text" name="phone_number" placeholder="Phone Number" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" name="register">Register</button>
                <p>Already have an account? <a href="#" onclick="showForm('login-form')">Log in</a></p>
            </form>
        </div>
    </div>

    <script href=script.js></script>
</body>
</html>