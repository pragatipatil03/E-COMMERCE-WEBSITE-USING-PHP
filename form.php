
<?php include("connection.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coffee Shop</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    
</head>
<body>
  <div class="all-content">
   
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg" id="navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="#" id="logo"><img src="./images/logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span><i class="fa-solid fa-bars" style="color: white; font-size: 23px;"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#menu">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#product">Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#gallary">Gallary</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#blogs">Blogs</a>
          </li>
         
         
         
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  

<!-- home section -->
   <section id="home">
    <div class="content">
      <h3>Start Your Day With a <br> Fresh Coffee</h3>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero, fugit
         <br>ipsum dolor sit amet consectetur.
      </p>
      <button id="btn">Shop Now</button>
    </div>
   </section>





<!-- about section -->
<div class="about" id="about">
  <div class="container">
  <div class="heading">About <span>Us</span></div>
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <img src="./images/about.png" alt="">
        </div>
      </div>
      <div class="col-md-6">
        <h3>What Makes Our Coffee Special?</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum minima numquam porro consequuntur ipsum, nulla aliquam amet quam consequatur expedita.
          <br><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque minus dicta quia maxime! Suscipit rerum similique non perferendis maiores rem, cumque explicabo exercitationem deserunt illum in aperiam natus impedit recusandae?
          <br><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id rem voluptates harum, quis excepturi voluptatum!
         </p>
         <button id="about-btn">Learn More.</button>
      </div>
    </div>
  </div>
</div>
<!-- about section -->


   



<!-- top cards -->
<section class="top-cards">
  <div class="heading2">Top <span>Categories</span></div>
  <div class="container">
    <div class="row">
      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="./images/c1.png" alt="">
          
        </div>
      </div>
      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="./images/c2.png" alt="">
          
        </div>
      </div>
      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="./images/c3.png" alt="">
          
        </div>
      </div>
    </div>
  </div>
</section>







<!-- menu -->
<section class="menu" id="menu">
  <div class="container">
  <div class="heading3">Menu</div>
</div>
  <div class="container" id="container2">
  <div class="row">
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/m1.png" alt="">
        <div class="card-body">
          <div class="star text-center">
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
          </div>
          <h3>Coffee</h3>
          <p>$99 <strike>$100</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></p>
        </div>
      </div>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/m2.png" alt="">
        <div class="card-body">
          <div class="star text-center">
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
          </div>
          <h3>Coffee</h3>
          <p>$90 <strike>$110</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></p>
        </div>
      </div>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/m3.png" alt="">
        <div class="card-body">
          <div class="star text-center">
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
          </div>
          <h3>Coffee</h3>
          <p>$100 <strike>$200</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></p>
        </div>
      </div>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/m4.png" alt="">
        <div class="card-body">
          <div class="star text-center">
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
          </div>
          <h3>Coffee</h3>
          <p>$120 <strike>$150</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></p>
        </div>
      </div>
    </div>
  </div>

  <div class="row" style="margin-top: 50px;">
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/m5.png" alt="">
        <div class="card-body">
          <div class="star text-center">
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
          </div>
          <h3>Coffee</h3>
          <p>$200 <strike>$300</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></p>
        </div>
      </div>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/m6.png" alt="">
        <div class="card-body">
          <div class="star text-center">
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
          </div>
          <h3>Coffee</h3>
          <p>$30 <strike>$50</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></p>
        </div>
      </div>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/m7.png" alt="">
        <div class="card-body">
          <div class="star text-center">
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
          </div>
          <h3>Coffee</h3>
          <p>$100 <strike>$200</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></p>
        </div>
      </div>
    </div>
    <div class="col-md-3 py-3 py-md-0">
      <div class="card">
        <img src="./images/m8.png" alt="">
        <div class="card-body">
          <div class="star text-center">
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
          </div>
          <h3>Coffee</h3>
          <p>$120 <strike>$150</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></p>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>









<!-- product -->
<section id="product" class="product">
  <div class="container">
  <div class="heading4">Products</div>
</div>
  <div class="container" id="container3">

    <div class="row">
      <div class="col-md-3 py-3 py-md-0">
        <div class="card">
          <img src="./images/arabica coffee.png" alt="">
          <div class="card-body">
            <h3>Arabic Coffee</h3>
          <p>$120 <strike>$150</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></p>

          </div>
        </div>
      </div>
      <div class="col-md-3 py-3 py-md-0">
        <div class="card">
          <img src="./images/Cappuccino coffee.png" alt="">
          <div class="card-body">
            <h3>Cappuccino Coffee</h3>
          <p>$250 <strike>$350</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></p>

          </div>
        </div>
      </div>
      <div class="col-md-3 py-3 py-md-0">
        <div class="card">
          <img src="./images/Black Coffee.png" alt="">
          <div class="card-body">
            <h3>Black Coffee</h3>
          <p>$130 <strike>$150</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></p>

          </div>
        </div>
      </div>
      <div class="col-md-3 py-3 py-md-0">
        <div class="card">
          <img src="./images/Decaf caffee.png" alt="">
          <div class="card-body">
            <h3>Decaf Coffee</h3>
          <p>$120 <strike>$150</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></p>

          </div>
        </div>
      </div>
    </div>

  </div>
</section>





<!-- our gallary -->
<div class="container" id="gallary">
  <h1>Our <span>Gallary</span></h1>
  <div class="row" style="margin-top: 30px;">
    <div class="col-md-4 py-3 py-md-0">
      <div class="card">
        <img src="./images/image1.png" alt="">
      </div>
    </div>
    <div class="col-md-4 py-3 py-md-0">
      <div class="card">
        <img src="./images/image2.png" alt="">
      </div>
    </div>
    <div class="col-md-4 py-3 py-md-0">
      <div class="card">
        <img src="./images/image3.png" alt="">
      </div>
    </div>
  </div>
  <div class="row" style="margin-top: 30px;">
    <div class="col-md-4 py-3 py-md-0">
      <div class="card">
        <img src="./images/image4.png" alt="">
      </div>
    </div>
    <div class="col-md-4 py-3 py-md-0">
      <div class="card">
        <img src="./images/image5.png" alt="">
      </div>
    </div>
    <div class="col-md-4 py-3 py-md-0">
      <div class="card">
        <img src="./images/image6.png" alt="">
      </div>
    </div>
  </div>
</div>





<!-- contact -->
<!-- contact -->
<section class="contact" id="contact">
  <div class="container">
    <form action="#" method="post">
      <div class="row">
        <div class="col-md-7">
          <div class="heading6">Contact <span>Us</span></div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, blanditiis
            <br>ipsum dolor sit amet consectetur.
          </p>
          <input class="form-control" type="text" placeholder="Name" name="name" aria-label="Name" required><br>
          <input class="form-control" type="email" placeholder="Email" name="email" aria-label="Email" required><br>
          <input class="form-control" type="tel" placeholder="Phone Number" name="number" aria-label="Phone Number" required><br>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <div class="col-md-5" id="col">
          <h1>Info</h1>
          <p><i class="fa-regular fa-envelope"></i> example@gmail.com</p>
          <p><i class="fa-solid fa-phone"></i> +92000000000000000</p>
          <p><i class="fa-solid fa-building-columns"></i> Karachi, Sindh, Pakistan</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, culpa</p>
        </div>
      </div>
    </form>
  </div>
</section>



   <!-- blogs -->
   <section class="blogs" id="blogs">
    <h1>Latest <span>Blogs</span></h1>

    <div class="container">

      <div class="row">

        <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="./images/b1.png" alt="">
          <div class="card-body">
            <h3>Lorem, ipsum dolor</h3>
            <h5>Admin / 6 March 2020</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora quis aperiam magnam nostrum quae distinctio, id minima repellat eveniet quaerat.</p>
            <button id="blogbtn">Read More.</button>
          </div>
        </div>  
        </div>
        <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="./images/b2.png" alt="">
          <div class="card-body">
            <h3>Lorem, ipsum dolor</h3>
            <h5>Admin / 6 March 2020</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora quis aperiam magnam nostrum quae distinctio, id minima repellat eveniet quaerat.</p>
            <button id="blogbtn">Read More.</button>
          </div>
        </div>  
        </div>
        <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="./images/b3.png" alt="">
          <div class="card-body">
            <h3>Lorem, ipsum dolor</h3>
            <h5>Admin / 6 March 2020</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora quis aperiam magnam nostrum quae distinctio, id minima repellat eveniet quaerat.</p>
            <button id="blogbtn">Read More.</button>
          </div>
        </div>  

        </div>
        
      </div>

    </div>


   </section>








   <!-- footer -->
   <footer id="footer">
    <div class="footer-logo text-center"><img src="./images/logo.png" alt=""></div>
    <div class="socail-links text-center">
      <i class="fa-brands fa-twitter"></i>
      <i class="fa-brands fa-facebook-f"></i>
      <i class="fa-brands fa-instagram"></i>
      <i class="fa-brands fa-youtube"></i>
      <i class="fa-brands fa-pinterest-p"></i>
    </div>
    
    <div class="copyright text-center">
      &copy; Copyright <strong><span>Coffee Shop</span></strong>. All Rights Reserved
  </div>
</footer>
   <!-- footer -->

   <a href="#" class="arrow"><i><img src="./images/up-arrow.png" alt="" width="50px"></i></a>


  </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>

<?php 
include("connection.php");

if (isset($_POST['name'], $_POST['email'], $_POST['number'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];

    $query = "INSERT INTO form (name, email, number) VALUES ('$name', '$email', '$number')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Data Inserted Successfully";
    } else {
        echo "Failed to Insert Data";
    }
}
?>
