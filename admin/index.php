<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title>KelasTI.com</title>
    <link rel="shortcut icon" href="../favicon/favicon.png" type="image/x-icon">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
    
    <!-- link css online -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">   

    <!-- Custom styles for this template -->
    <link href="sign-in.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <main class="form-signin w-100 m-auto">
      <form action="check.php" method="post">
        <img class="mb-4" src="../img/logojumbotron.png" alt="gambar ini rusak" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">sign in</h1>

        <div class="form-floating mb-2" >
          <input type="text" class="form-control" name="username" placeholder="username">
          <label for="username">Username</label>
        </div>

        <div class="form-floating">
          <input type="password" class="form-control" name="password" placeholder="password">
          <label for="password">Password</label>
        </div>
        
        <button class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>
        <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p>
      </form>
    </main>
  </body>
</html>