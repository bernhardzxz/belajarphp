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
              <li><a class="dropdown-item" href="#">Dashboard</a></li>
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
            <a class="nav-link" href="#">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->

 <!-- Layout – Containers – Grid - Card -->
 <section id="aboutus" class="p-5 bg-light">
    <div class="container">
      <div class="row text-center mb-5">
        <div class="col">
          <h2>ABOUT US</h2>
        </div>
      </div>
      <!-- CARD column-->
      <div class="row">
        <div class="col-md-8">
              <h3>History</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi laboriosam perferendis dolore incidunt error iste laudantium odit, veniam fugit. Laudantium sequi reiciendis optio quas vero iusto voluptatem, ab quam praesentium eos voluptatibus nemo repudiandae voluptas illum ex aliquam deserunt ipsum explicabo blanditiis temporibus! Mollitia incidunt facilis provident praesentium, doloribus corrupti ipsam, laborum quasi soluta rem necessitatibus sint animi rerum repellat? Esse impedit quo beatae. Est blanditiis, totam possimus veniam quia assumenda minus! Dicta nemo fuga dolorem vitae fugiat! Nemo fugit harum a labore, provident facere natus reprehenderit, animi doloremque alias adipisci aspernatur excepturi vero expedita doloribus ducimus, saepe nobis nihil? Ducimus mollitia fugit labore, quae debitis facilis aperiam molestiae consequatur enim voluptates dolor deleniti, fugiat architecto distinctio. Provident, doloremque harum.</p>
            </div>
          <div class="col-md-4">
            <div class="card">
              <img src="img/kampusit.jpg" alt="Maaf Gambar Sedang Rusak">
              <div class="card-body">
                <p class="text-center">KelasIT.com, 21 Maret 2023</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Layout – Containers – Grid - Card -->

  <!-- visi,misi -->
  <section id="aboutus" class="p-5 bg-light">
    <div class="container">
      <div class="row text-left mb-5">
        <div class="col">
          <h2>Visi, Misi, dan Tujuan</h2>
        </div>
      </div>
      <!-- card -->
      <div class="row">
        <div class="col-md-4">
          <div class="card text-bg-light mb-3" style="max-width: 19rem;">
            <div class="card-header">
              <h5 class="card-title">Visi</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, et ex omnis impedit expedita quo aliquam fugit voluptates deserunt porro dicta suscipit officiis modi soluta.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-bg-light mb-3" style="max-width: 19rem;">
            <div class="card-header">
              <h5 class="card-title">Misi</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, et ex omnis impedit expedita quo aliquam fugit voluptates deserunt porro dicta suscipit officiis modi soluta.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-bg-light mb-3" style="max-width: 19rem;">
            <div class="card-header">
              <h5 class="card-title">Tujuan</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, et ex omnis impedit expedita quo aliquam fugit voluptates deserunt porro dicta suscipit officiis modi soluta.</p>
            </div>
          </div>
        </div>
      </div>
  <!--end visi,misi  -->

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