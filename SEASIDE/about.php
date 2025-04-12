<?php
// about.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seaside Floating Restaurant</title>
    <style>
        /* General Styles */
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Courier New', Courier, monospace;
}
body {
    font-family: "Poppins", sans-serif;
    background-color: #1F3A52;
    color: #ECEFF1;
    margin: 0;
    padding: 0;
    text-align: center;
    background: linear-gradient(to bottom, #0f3b53, #145874);
}
header {
    top: 0;
    left: 0;
    color: #070354;
    position: fixed;    
    width: 100%;
    background-color: rgba(0, 0, 0, 0.4);
    padding: 10px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
h2 { 
    color: #e6e6e6;

}
h3 {
    color: #2c3e50;
}

button {
    background-color: #3498db;
    color: white;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
}

button:hover {
    background-color: #2980b9;
}
.logo img {
    width: 50px;
    height: 50px;
    margin-left: 20px;
}

nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
}

nav ul li {
    margin: 0 15px;
    list-style: none;
    display: inline-block;
}

nav ul li a {
    color: rgb(255, 255, 255);
    text-decoration: none;
    font-size: 18px;
    font-weight: bold;
    transition: all ease 0.5s;
}

nav ul li a:hover {
    background-color: #000b41;
}
h2 {
    font-size: 20px;
    font-style: bold;
    color: #e6e6e6;
    font-family: Copperplate, Papyrus, fantasy;
}
p{
    color: white;
    font-family: 'Courier New', Courier, monospace;

}

button {
    background-color: transparent;
    border: 2px solid #ffffff;
    padding: 10px 20px;
    font-size: 18px;
    cursor: pointer;
    color: #ffffff;
    font-weight: bold;
    font-family: Copperplate, Papyrus, fantasy;

    transition: transform 0.3s ease;
}


button:hover {
    transform: translateY(-10px);
    background-color: #980000;
    color: white;
}
/* About Section */
#about {
    padding: 50px 10%;
}

.section-title {
    font-size: 22px;
    font-weight: 400;
    text-transform: uppercase;
    color: #ccc;
}

.main-title {
    font-size: 36px;
    font-weight: bold;
    text-transform: uppercase;
    margin-bottom: 20px;
}

.content {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 30px;
    flex-wrap: wrap;
}

.about-img {
    width: 450px;
    height: auto;
    border-radius: 10px;
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
}

.text {
    max-width: 500px;
    text-align: left;
}

/* Button */
button {
    padding: 12px 20px;
    border: 2px solid #ECEFF1;
    background: transparent;
    color: #ECEFF1;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
    margin-top: 10px;
    transition: all 0.3s;
}

button:hover {
    background: #ECEFF1;
    color: #1F3A52;
}

/* Responsive */
@media (max-width: 768px) {
    .content {
        flex-direction: column;
        text-align: center;
    }
    .text {
        text-align: center;
    }
}

    </style>
</head>
<body>
<br>
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

    <br>
    <br>
    <br>    

    <section id="about">
        <h2 class="section-title">ABOUT</h2>
        <h1 class="main-title">SEASIDE FLOATING RESTAURANT</h1>
        <div class="content">
            <img src="image3.jpg" alt="Seaside Floating Restaurant" class="about-img">
            <div class="text">
                <p>
                    Welcome to Seaside Floating Restaurant in Barangay Balaring, Silay City! 
                    Dine over the water and savor the freshest seafood, complemented by breathtaking 
                    ocean views and a soothing sea breeze.
                </p>
                <button id="readMoreBtn">Read More</button>
            </div>
        </div>
    </section>

    <script src="function.js"></script>
</body>
</html>
