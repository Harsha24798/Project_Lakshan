<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <title>Document</title>
    <style>
      .car_img{
        width:100%;
        height:100vh;
        object-fit:cover;
      }
      .cccccccc{
        /* margin-bottom:20%; */
        font-weight:800;
        font-size:100px;
      }
      .sssss{
        padding-bottom:40px;
      }
      .hero-btn{
        padding-bottom: 90px;
      }
      .service-tag{
        /* margin-top:-3%; */
      }
      
    </style>
</head>

<body>
    <!-- Navbar -->
    <!-- <nav class="navbar bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="img/logo.png" alt="Bootstrap" width="" height="50">
    </a>
  </div>
</nav> -->

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="img/logo.png" alt="Bootstrap" width="" height="50">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item"> 
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- body -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/01.jpg" class="d-block w-100 car_img opacity-75" alt="...">
      <div class="carousel-caption d-none d-md-block pb-50px">
        <h1 class="display-1 cccccccc">First slide label</h1>
        <p class="sssss">Some representative placeholder content for the first slide.</p>
        <div class="hero-btn">
        <button class="btn btn-danger p-4">Our Packages</button>
        <button class="btn btn-primary p-4">Contact US</button>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/02.jpg" class="d-block w-100 car_img" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="display-1 cccccccc">Second slide label</h1>
        <p class="sssss">Some representative placeholder content for the second slide.</p>
        <div class="hero-btn">
        <button class="btn btn-danger p-4">Our Packages</button>
        <button class="btn btn-primary p-4">Contact US</button>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/03.jpg" class="d-block w-100 car_img" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="display-1 cccccccc">Third slide label</h1>
        <p class="sssss">Some representative placeholder content for the third slide.</p>
        <div class="hero-btn">
        <button class="btn btn-danger p-4">Our Packages</button>
        <button class="btn btn-primary p-4">Contact US</button>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- body -->
<h1 class="p-3 text-center">OUR SERVICES</h1>
<!-- cart -->
<div class="card-group container service-tag d-flex">
  <div class="card px-2 p-3">
    <img src="img/service-1.jpg" class="card-img-top " alt="...">
    <div class="card-body">
      <h5 class="card-title card_custom">Card title</h5>
      <p class="card-text ">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card px-2 p-3">
    <img src="img/service-2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card px-2 p-3">
    <img src="img/service-3.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
<!-- cart -->
<h1 class="p-3 text-center">OUR LATES WORK</h1>
</body>

</html>