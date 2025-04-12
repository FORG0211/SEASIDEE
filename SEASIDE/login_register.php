<?php
session_start();
require_once 'config.php';

// Handle registration
if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $phone_number = intval($_POST['phone_number']);
    $role = 'user'; // Default role is user, no need for a role field in the form

    // Check if the email already exists
    $checkEmail = $conn->query("SELECT email FROM users WHERE email = '$email'");
    if ($checkEmail->num_rows > 0) {
        $_SESSION['register_error'] = 'Email is already registered!';
        $_SESSION['active_form'] = 'register';
    } else {
        // Insert user into database with the default role as 'user'
        $conn->query("INSERT INTO users (name, email, password, phone_number, role) VALUES('$name', '$email', '$password', '$phone_number', '$role')");
        $_SESSION['register_success'] = 'Registration successful. You can log in now.';
    }

    header("Location: index.php");
    exit();
}

// Handle login
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare SQL query to check user credentials
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['name'] = $user['name'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['role'] = $user['role'];

            // Redirect based on user role
            if ($user['role'] === 'admin') {
                header("Location: admindashboard.php");
            } else {
                header("Location: user_page.php");
            }
            exit();
        } else {
            $_SESSION['login_error'] = 'Incorrect password';
            $_SESSION['active_form'] = 'login';
        }
    } else {
        $_SESSION['login_error'] = 'No user found with this email';
        $_SESSION['active_form'] = 'login';
    }

    header("Location: index.php");
    exit();
}
?>
