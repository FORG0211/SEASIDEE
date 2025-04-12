<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Gallery Page</title>
  <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Courier New', Courier, monospace;
}
    body {
      margin: 0;
      font-family: 'Georgia', serif;
      background-color: #0f3b53;
      color: white;
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

    section {
      padding: 40px 20px;
    }

    .section-title {
        padding-top: 40px;
      font-size: 18px;
      letter-spacing: 2px;
      margin-bottom: 10px;
    }

    .main-title {
      font-size: 48px;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .sub-title {
      font-size: 32px;
      font-weight: bold;
      margin-bottom: 40px;
    }

    .image-grid {
      display: flex;
      justify-content: center;
      gap: 20px;
      flex-wrap: wrap;
      margin-bottom: 30px;
    }

    .image-grid img {
      width: 100%;
      max-width: 400px;
      border-radius: 6px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.5);
    }

    @media (max-width: 768px) {
      .main-title {
        font-size: 36px;
      }

      .sub-title {
        font-size: 26px;
      }

      .image-grid {
        flex-direction: column;
        align-items: center;
      }

      .image-grid img {
        max-width: 90%;
      }
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

  <section>
    <div class="section-title">BROWSE</div>
    <div class="main-title">GALLERY</div>
    <div class="image-grid">
      <div>
        <div class="sub-title" style="font-size: 20px;">EXTERIOR</div>
        <img src="exterior2.jpg" alt="Exterior">
      </div>
      <div>
        <div class="sub-title" style="font-size: 20px;">INTERIOR</div>
        <img src="interior2.jpg" alt="Interior">
      </div>
    </div>
  </section>

  <section>
    <div class="section-title">BROWSE</div>
    <div class="sub-title">EXTERIOR GALLERY</div>
    <div class="image-grid">
      <img src="exterior.jpg" alt="Exterior 1">
      <img src="exterior1.jpg" alt="Exterior 2">
    </div>
  </section>

  <section>
    <div class="section-title">BROWSE</div>
    <div class="sub-title">INTERIOR GALLERY</div>
    <div class="image-grid">
      <img src="interior.jpg" alt="Interior 1">
      <img src="interior1.jpg" alt="Interior 2">
    </div>
  </section>

</body>
</html>
