<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">  
    
    <!-- My Css -->
    <link rel="stylesheet" href="css/login.css" />
    
    <!-- CDN Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    
    <!-- Font Montserrat-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    
    <title>Halaman Login | SIMBAH-G</title>
    
    <!-- Judul -->
    <h1 style="color: white; font-family: montserrat; font-weight: bolder;">SISTEM INFORMASI HIBAH GAMPONG</h1>
    
  </head>
  <!-- Form Login -->
  <body style="background-color:#219653;">
    <div class="registration-form">
      <form action="ceklogin.php" method="POST" class="signin-form">
        <div class="form-head">
          <h3 style="font-weight: bolder;">SIMBAH-G</h3>
        </div>
        <div class="form-group">
          <input type="email" class="form-control item" name="email"  placeholder="E-MAIL"/>
        </div>
        <div class="form-group">
          <input type="password" class="form-control item" name="password"  placeholder="PASSWORD"/>
        </div>
        <div class="form-group">
          <button name="login" class="btn btn-block login" >LOGIN</button> <br>
          <div class="signup text-end"><a  style="color: black;" href="register.php">DAFTAR</a></div>
        </div>
      </form>
    </div>
    <!-- Akhir Form Login -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>