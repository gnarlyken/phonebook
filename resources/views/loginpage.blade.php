<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
    <style>
      body {
        background-color: rgb(247, 247, 247);
      }
    </style>
  </head>

  <body class="text-center">
    <form class="form-signin" action="{{ route('login') }}" method="POST" style="max-width: 300px; margin: 0 auto;">
      @csrf
      <br> <br>
      <h1 class="h3 mb-3 font-weight-normal"><b>Please sign in</b></h1>
      <br> <br>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <br>
      <button class="btn btn-lg btn-primary btn-block" type="submit" style="background-color: black;">Sign in</button>
      <br> <br><br> <br>
      <img class="mb-4" src="https://cigarsdaily-woocommerce-media.s3.us-east-2.amazonaws.com/2020/05/20-202269_phone-number-telephone-svg-png-icon-free-download.png" alt="" width="172" height="172">
    </form>

    <!-- Bootstrap core JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
