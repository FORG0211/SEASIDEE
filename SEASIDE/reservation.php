<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seaside Floating Restaurant</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Courier New', Courier, monospace;
}
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #0f3b53, #145874);
            color: white;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 50%;
            margin: 100px auto;
            padding: 15px;
            padding-top: 15px;
            background: linear-gradient( #2e6193, #2e938e);
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }

        .title {
            font-size: 40px;
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            align-items: start;
            width: 100%;
            text-align: left;
        }

        label {
            font-weight: bold;
            font-size: 14px;
            text-transform: uppercase;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }

        input:focus, textarea:focus {
            outline: 2px solid #ffffff;
        }

        button {
            padding: 10px 15px;
            font-size: 18px;
            font-weight: bold;
            color: white;
            background: transparent;
            border: 2px solid white;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: white;
            color: #2c3e50;
        }

        header {
            position: fixed;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.4);
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            top: 0;
        }

        .logo img {
            width: 50px;
            height: 50px;
            margin-left: 20px;
        }

        nav ul {
            list-style: none;
            display: flex;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<header>
    <div class="logo">
    <a href="user_page.php">
    <img src="logo.png" alt="Restaurant logo">
    </div>
    <nav>
        <ul>
            <li><a href="about.php">About</a></li>
            <li><a href="user_page.php#menu">Menu</a></li>
            <li><a href="reservation.php">Reservation</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="index.php">Login</a></li>
        </ul>
    </nav>
</header>

<div class="container">
    <h1 class="title">Reservation</h1>
    <form method="POST" action="reservation.php">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" required>
        </div>
        <div class="form-group">
            <label>Phone Number</label>
            <input type="tel" name="phone_number" required>
        </div>
        <div class="form-group">
            <label>Number of Guests</label>
            <input type="number" name="guests" min="1" required>
        </div>
        <div class="form-group">
            <label>Reservation Date</label>
            <input type="date" name="reservation_date" required>
        </div>
        <div class="form-group">
            <label>Reservation Time</label>
            <input type="time" name="reservation_time" required>
        </div>
        <div class="form-group">
            <label>Notes</label>
            <textarea name="notes" placeholder="Any special requests"></textarea>
        </div>
        <button type="submit" name="submit">Submit Reservation</button>
    </form>
</div>

</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection settings
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sea_side_sql";
    // Connect to database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check for connection error
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Sanitize and retrieve form input
    $name = $conn->real_escape_string($_POST['name']);
    $phone_number = intval($_POST['phone_number']);
    $guests = intval($_POST['guests']);
    $reservation_date = $_POST['reservation_date'];
    $reservation_time = $_POST['reservation_time'];
    $notes = $conn->real_escape_string($_POST['notes']);

    // Insert data into the table
    $sql = "INSERT INTO reservations (name, phone_number, guests, reservation_date, reservation_time, notes)
            VALUES ('$name', '$phone_number', $guests, '$reservation_date', '$reservation_time', '$notes')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Reservation successful!');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>

