<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title>Login Site</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
    <!-- Link css online -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="sign-in.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="sign-in.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <main class="form-signin w-100 m-auto">
      <form action = "check.php" method="post">
        <img class="mb-4" src="../img/logojumbotron.png" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Sign in</h1>
        <div class="form-floating mb-2">
          <input type="username" class="form-control" id="username" placeholder="username">
          <label for="username">username</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="password" placeholder="password">
          <label for="password">Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">submit</button>
        <p class="mt-5 mb-3 text-body-secondary">&copy; 2022–2023</p>
      </form>
    </main>
  </body>
</html>