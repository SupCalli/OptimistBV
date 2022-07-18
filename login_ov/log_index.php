<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet"  href="style_log.css">
        <!-- Font Awesome -->
        <link
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
          rel="stylesheet"
        />
        <!-- Google Fonts -->
        <link
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
          rel="stylesheet"
        />
        <!-- MDB -->
        <link
          href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css"
          rel="stylesheet"
        />
</head>

<body>
    <!--<form action="">
        <h2>Login</h2>
        <label> User Name</label>
        <input type="text" name="uname" placeholder="User Name">

        <label> Password</label>
        <input type="password" name="password" placeholder="Password">

        <button type>LOGIN</button>
    </form> -->

    <section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="./img/LogoMakr-2U0aY7.png"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">Optimist BV</h4>
                </div>

                <form action="log_login.php" method="post">
                  <p>Please login to your account</p>

                  <?php if (isset($_GET['error'])) { ?>
     		          <p class="error"><?php echo $_GET['error']; ?></p>
                	<?php } ?>

                  <div class="form-outline mb-4">
                    <input type="text" id="form2Example11" name="uname" class="form-control"
                      placeholder="Phone number or email address" />
                    <label class="form-label" for="form2Example11">Username</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example22" name="password" class="form-control" />
                    <label class="form-label" for="form2Example22">Password</label>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Log
                      in</button>
                    <!--<a class="text-muted" href="#!">Forgot password?</a> -->
                  </div>
                  <!--
                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Don't have an account?</p>
                    <button type="button" class="btn btn-outline-danger">Create new</button>
                  </div>
                  -->

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-black px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">We are more than just a company</h4>
                <p class="small mb-0">Optimist BV is an ICT consulting company that operates multi-lingual telesales, remote tech support call center, and customer support. They also do multimedia content marketing, advertising, and technology development which they’re popularly known for – wearable AI eyeglasses mainly for blinds and social media marketing department.
</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


      
</body>

<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js"
></script>
</html>


<!-- References 
1. https://www.youtube.com/watch?v=JDn6OAMnJwQ
2. https://mdbootstrap.com/docs/standard/extended/login/

-->