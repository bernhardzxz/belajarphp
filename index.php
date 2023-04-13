<!doctype html>
<html lang="en">
  <head>
    <!-- Required Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- My Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- My Icon Bootstarp -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- My CSS -->
    <link href="css/style.css" rel="stylesheet">

    <title>KelasTI.com</title>
    <link rel="shortcut icon" href="favicon/favicon.png" type="image/x-icon">
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg narbar-dark bg-primary ">
    <div class="container-fluid">
      <a class="navbar-brand" url="#" href="index.php"><img src="img/kelasTI3.png" width= "150px"></img></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aboutus.php">About Us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Organisasi
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Register</a></li>
              <li><a class="dropdown-item" href="admin">Dashboard</a></li>
              <li><a class="dropdown-item" href="#">Setting</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="activity.php">Activity</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contactus.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->

  <!-- Jumbotron -->
  <section class="p-5 mb-4 text-center" id="jumbotron">
        <div class="container-fluid py-5">
          <img src="img/logojumbotron.png" width="200" id="profil" class="rounded-circle img-thumbnail img-responsive">
          <p class="fs-4" style="color: black;"><b>Learning, Creative, Productive </b></p>
          <button class="btn btn-primary btn-lg" type="button">Go to Dashboard</button>
        </div>
  </section>
  <!-- End Jumbotron -->

  <!-- Layout – Containers – Grid - Card -->
  <section id="kegiatan" class="p-5">
    <div class="container">
      <div class="row text-center mb-5">
        <div class="col">
          <h2>Activity</h2>
        </div>
      </div>
      <!-- CARD column-->
      <div class="row">
        <div class="col-md-3 mb-3 text-center">
          <div class="card">
            <img src="img/coding1.jpg" class="card-img-top" alt="MAaf GAmbar ini Rusak">
            <div class="card-body">
              <h5 class="card-title">Activity 1</h5>
              <p class="card-text">Pengenalan HTML 5 dan CSS 3, Dalam pembuatan Suatu Website.</p>
              <a href="#" class="btn btn-primary">See Details</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3 text-center">
          <div class="card">
            <img src="img/coding2.jpg" class="card-img-top" alt="MAaf GAmbar ini Rusak">
            <div class="card-body">
              <h5 class="card-title">Activity 2</h5>
              <p class="card-text">HTML 5 dan CSS 3 Lanjutan + Penggunaan Library Bootstarp 5.3.</p>
              <a href="#" class="btn btn-primary">See Details</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3 text-center">
          <div class="card">
            <img src="img/coding3.jpg" class="card-img-top" alt="MAaf GAmbar ini Rusak">
            <div class="card-body">
              <h5 class="card-title">Activity 3</h5>
              <p class="card-text">Pengenalan Bahasa Pemograman PHP (Hypertext Preprocessor).</p>
              <a href="#" class="btn btn-primary">See Details</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3 text-center">
          <div class="card">
            <img src="img/coding4.jpg" class="card-img-top" alt="MAaf GAmbar ini Rusak">
            <div class="card-body">
              <h5 class="card-title">Activity 4</h5>
              <p class="card-text">Mengimplementasi PHP kedalam sebuah website dan PHP Lanjutan.</p>
              <a href="#" class="btn btn-primary">See Details</a>
            </div>
          </div>
        </div>
    </div>
  </section>
  <!-- End Layout – Containers – Grid - Card -->

  <!-- Form Hubungi Kami -->
  <section id="contactus" class="p-5 bg-light">
    <div class="container">
      <div class="row text-center mb-5">
        <div>
          <h2>Contact US</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-3">
          <h6><i class="bi bi-badge-ad"></i><br>Jl. Hanura Permai 1</h6>
          <h6><i class="bi bi-envelope"></i><br>KelasTI@gmail.com</h6>
          <h6><i class="bi bi-telephone-plus"></i><br>+62 89531111**</h6>
          <h3 class="pt-4">Social Media</h3>
          <h1><i class="bi bi-instagram" href="https://www.instagram.com/dermawanbernhard/"></i><i class="bi bi-facebook" href="https://www.facebook.com/dermawanbernhard.dermawanbernhard"></i><i class="bi bi-linkedin" href="https://www.linkedin.com/in/dermawan-bernhard-34b237237/"></i></h1>
        </div>
        <div class="col-md-5">
          <form action="" method="post">
            <div class="mb-3">
              <label for="nama" class="form-label">Full Name:</label>
              <input type="text" class="form-control" id="nama" aria-describedby="Nama Lengkap">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email:</label>
              <input type="email" class="form-control" id="email" aria-describedby="Email">
            </div>
            <div class="mb-3">
              <label for="pesan" class="form-label">Message:</label>
              <textarea class="form-control" id="pesan" rows="3" placeholder="leave a message here"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- end Form Hubungi kami -->

  <!-- Footer -->
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
          <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
        </a>
        <span class="mb-3 mb-md-0 text-muted">&copy; All rights reserved | <b>Bernhard Corp.</b></span>
      </div>
    <!-- End Footer -->

    <!-- Script Section Jumbotron -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>