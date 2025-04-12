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
    background-image: url('Background.png');
    background-size: cover; 
    background-position: center; 
    background-repeat: no-repeat; 
}
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #f5ebdc;
    text-align: center;
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

section {
    height: 100vh;
    width: 100vw;
    margin: 30px auto;
    padding: 10px;
    max-width: 800px;
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}
#menu {
    background: linear-gradient( #2e6193, #2e938e);}
.location{
    height: 50vh;
    width: 100vw;
    margin: 30px auto;
    padding: 10px;
    max-width: 800px;
    background: linear-gradient(#2e938e, #2e6193);
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
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

.gallery-images {
    display: flex;
    justify-content: center;
    gap: 20px;
}

.gallery-images .image img {
    width: 350px;
    height: 350px;
    border-radius: 5px;
    padding-top: 50px;
}

footer {
    background-color: #2c3e50;
    color: white;
    padding: 10px;
    margin-top: 20px;
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

main {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 80vh;
}

.center-logo {
    width: 350px;
    height: auto;
    margin-bottom: 30px;
}
h3{
    font-size: 40px;
    font-style: bold;
    color: #000b41;
    font-family: Copperplate, Papyrus, fantasy;
    padding-top: 20px;
    padding-bottom: 30px;
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
    background-color: #2c3e50;
    border: 2px solid #ffffff;
    padding: 10px 20px;
    font-size: 18px;
    cursor: pointer;
    color: white;
    font-weight: bold;
    font-family: Copperplate, Papyrus, fantasy;
    transition: transform 0.3s ease;
}
.menu-categories{
    padding-top: 20px;
    margin: 0 15px;
}
.menu-header {
    margin-bottom: 20px;
}
.menu-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 10px;
}

.menu-item {
    display: flex;
    justify-content: space-between;
    font-size: 18px;
    padding: 5px 10px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    
}
.menu-column{
    display: absolute;
    justify-content: space-between;
    font-size: 15px;
    padding: 5px 8px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
}
.menu-title{
    padding-top: 60px;
    color: #f5ebdc;
}
h1 {
    font-size: 60px;
    font-family: 'Serif';
    text-transform: uppercase;
    font-weight: bold;
}


button:hover {
    transform: translateY(-10px);
    background-color: #980000;
    color: white;
}
footer {
    background-color: #2d5c88;
    padding: 30px;
    display: flex;
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
    <br>    
    <br>
    <br>
    <main>
        <div class="content">
            <img src="logo.png" alt="Restaurant Logo" class="center-logo">
            <h2>SEA-SIDE RESTAURANT</h2>
            <br>
            <form action="reservation.php" method="POST">
  <button type="submit" name="reserve">RESERVE HERE</button>
</form>
        </div>
    </main>
   

    <br>
    <h2>SEASIDE FLOATING RESTAURANT</h2>
    <p>Welcome to Seaside Floating Restaurant, a one-of-a-kind dining spot in Bacolod, Philippines.<br> Enjoy breathtaking ocean views and the freshest seafood in town.</p>


    <section id="menu">
        <h1 class="menu-title">MENU</h1>

        <div class="menu-categories">
            <button>APPETIZERS</button>
            <button>SPECIALS</button>
            <button>CRABS</button>
            <button>SIZZLING/GRILLED</button>
            <button>RICE</button>
            <button>BEVERAGES</button>
            <button>SOUP</button>
            <button>PORK</button>
            <button>CHICKEN</button>
            <button>DESSERTS</button>
        </div>

        <h3 class="section-title">APPETIZERS</h3>

        <div class="menu-items">
            <div class="menu-column">
                <p><span>BUTTERED SHRIMP</span> <span>320</span></p>
                <p><span>CALAMARES</span> <span>320</span></p>
                <p><span>CAMARON REBOSADO</span> <span>320</span></p>
                <p><span>CHEESE STICKS</span> <span>150</span></p>
                <p><span>FRENCH FRIES</span> <span>85</span></p>
            </div>
            <div class="menu-column">
                <p><span>KINILAW</span> <span>320</span></p>
                <p><span>KROPEK</span> <span>95</span></p>
                <p><span>LUMPIA SHANGHAI</span> <span>180</span></p>
                <p><span>ONION RINGS</span> <span>175</span></p>
                <p><span>TALABA</span> <span>95</span></p>
            </div>
        </div>
    </section>



<section class="location">
    <h3>OUR LOCATION</h3>
    <p>Seaside Floating Restaurant, Barangay Balaring, Silay City, Negros Occidental, Philippines</p>
    <form action="location.php" method="POST">
        <br>
        <br>
        <br>
  <button type="submit" name="location">View Location</button>
</form>
</section>

<script src="function.js"></script>

<footer>
    <p>Operating Hours: Monday - Sunday, 8:00 AM - 9:00 PM</p>
    <p>Contact: +63 947 968 8950 | Email: info@seasidefloating.com</p>
</footer>

</body>
</html>
