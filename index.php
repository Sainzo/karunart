<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
  <link rel="stylesheet" href="back.css">
  <title>Document</title>


 
</head>
<header id="header">
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="index.php"><img src="a.jpg" alt="" height="40px"></a>
    <a href="https://www.facebook.com/karun.dhukuchhu?mibextid=ZbWKwL"><i class="fa-brands fa-square-facebook fa-bounce fa-2xl" style="color: #ffffff;"></i></a>
    <a href="https://www.instagram.com/karundhukuchhu?igsh=OHBrZmd2YWx1NXR5"><i class="fa-brands fa-instagram fa-2xl" style="color: #ffffff; margin-left:10px;"></i></a>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#heros">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#services">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#collections">Collections</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact Us</a>
        </li>

       
      </ul>
      <form class="d-flex" role="search">
        
        <button class="btn btn-success"><a href="login.php" style="color:#fff;">Admin</a></button>
      </form>
    </div>
  </nav>
</header>



<!-- ======= Hero Section ======= -->
<section id="heros" class="d-flex flex-column justify-content-center align-items-center">
  <div class="heros-container" data-aos="fade-in">
    <h1>Karun Dhukuchhu</h1>
    <p>I'm <span class="typed" data-typed-items="Artist, Student, Paid Art worker"></span></p>
  </div>
</section><!-- End Hero -->

<section class="my-5" id="about">
  <div class="py-5">
    <h3 class="text-center">About Me</h3>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12">
        <img src="logo2.jpg" alt="" class="img-fluid aboutimg">
      </div>
      <div class="col-lg-6 col-md-6 col-12">
        <h5 class="display-4" style="font-weight: bold;">I am a student.</h5>
        <div class="row">
          <div class="col-lg-6">
            <ul>
              <li class="py-2" style="font-size: large"><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong>
                <span>20 November, 2006</span>
              </li>
              <li class="py-2" style="font-size: large"><i class="bi bi-chevron-right"></i> <strong>Facebook:</strong>
                <span>Karun Dhukuchhu</span>
              </li>
              <li class="py-2" style="font-size: large"><i class="bi bi-chevron-right"></i> <strong>Phone:</strong>
                <span>+977 9841237566</span>
              </li>
              <li class="py-2" style="font-size: large"><i class="bi bi-chevron-right"></i> <strong>City:</strong>
                <span>Bhaktapur Nepal</span>
              </li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul>
              <li class="py-2" style="font-size: large"><i class="bi bi-chevron-right"></i> <strong>Age:</strong>
                <span>17</span>
              </li>
              <li class="py-2" style="font-size: large"><i class="bi bi-chevron-right"></i> <strong>Profession:</strong>
                <span>Art worker</span>
              </li>
              <li class="py-2" style="font-size: large"><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                <span>karundhukuchhu78@gmail.com</span>
              </li>
              <li class="py-2" style="font-size: large"><i class="bi bi-chevron-right"></i> <strong>Paid
                  artwork:</strong> <span>Available</span></li>
            </ul>
          </div>
        </div>
        <a href="" class="btn btn-success">Check More</a>
      </div>
    </div>
  </div>
</section>

<section class="my-5" id="services">
  <div class="py-5">
    <h3 class="text-center">Paid Artworks Services</h3>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
          <img class="card-img-top" src="uploads/p3-min.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">Sketched Art Work</h4>
            <p class="card-text">Paper size: A3 <br> Includes: Human face drawings</p> 
            <a href="#contact" class="btn btn-primary stretched-link">Contact us</a>           
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
          <img class="card-img-top" src="uploads/n-min-min.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">Charcoal artwork</h4>
            <p class="card-text">Paper size: A3 <br> Includes: Human face drawings</p>
            <a href="#contact" class="btn btn-primary stretched-link">Contact us</a>         
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
          <img class="card-img-top" src="uploads/f-min-min.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">Free style art</h4>
            <p class="card-text">Desired art works as customer requirements like painting, pen art etc.</p>
            <a href="#contact" class="btn btn-primary stretched-link">Contact us</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="my-5" id="collections">
  <div class="py-5">
    <h3 class="text-center">Collections</h3>
  </div>
  <div class="container-fluid">
    <div class="row">
    
  <?php
  $dir = "uploads/";
  $files = scandir($dir);
  foreach($files as $file){
    if(is_file($dir.$file)){
      echo '<div class="col-lg-4 col-md-4 col-12">';
      echo '<img src="'.$dir.$file.'" alt="" class="img-fluid py-2">';
      echo '</div>';
    }
  }
 ?>

    </div>
  </div>
  </section>

  <div class="container" id="contact">
  <div class="py-5">
    <h3 class="text-center">Contact Us</h3>
  </div>
  <form action="user_info.php" class="needs-validation" novalidate method="post">
    <div class="form-group">
      <label for="uname">Username:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Email</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter email id" name="email" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Contact number</label>
      <input type="number" class="form-control" id="pwd" placeholder="Enter contact number" name="mobile" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label>Comments</label>
      <textarea name="comments" class="form-control" placeholder="Enter your feedback." required></textarea>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> I agree on sending my personal contact and trust this website.
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<footer>
  <p class="py-3 bg-dark text-white text-center">@karundhukuchhu78</p>
</footer>

<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
<script>
  var typed = new Typed('.typed', {
    strings: ["Artist", "Student", "Paid Art worker"],
    typeSpeed: 50,
    backSpeed: 50,
    loop: true
  });
</script>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="typed.js"></script>

</body>

</html>