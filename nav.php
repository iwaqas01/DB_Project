<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Blood Bank</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <style type="text/css">
        body
        {
          background-image: url('images/bg1.jpg');
          background-repeat: no-repeat;
          background-size: cover;
        }

.navbar-icon-top .navbar-nav .nav-link > .fa {
  position: relative;
  width: 36px;
  font-size: 24px;
}

.navbar-icon-top .navbar-nav .nav-link > .fa > .badge {
  font-size: 0.75rem;
  position: absolute;
  right: 0;
  font-family: sans-serif;
}

.navbar-icon-top .navbar-nav .nav-link > .fa {
  top: 3px;
  line-height: 12px;
}

.navbar-icon-top .navbar-nav .nav-link > .fa > .badge {
  top: -10px;
}

@media (min-width: 576px) {
  .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link {
    text-align: center;
    display: table-cell;
    height: 70px;
    vertical-align: middle;
    padding-top: 0;
    padding-bottom: 0;
  }

  .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link > .fa {
    display: block;
    width: 48px;
    margin: 2px auto 4px auto;
    top: 0;
    line-height: 24px;
  }

  .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link > .fa > .badge {
    top: -7px;
  }
}

@media (min-width: 768px) {
  .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link {
    text-align: center;
    display: table-cell;
    height: 70px;
    vertical-align: middle;
    padding-top: 0;
    padding-bottom: 0;
  }

  .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link > .fa {
    display: block;
    width: 48px;
    margin: 2px auto 4px auto;
    top: 0;
    line-height: 24px;
  }

  .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link > .fa > .badge {
    top: -7px;
  }
}

@media (min-width: 992px) {
  .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link {
    text-align: center;
    display: table-cell;
    height: 70px;
    vertical-align: middle;
    padding-top: 0;
    padding-bottom: 0;
  }

  .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link > .fa {
    display: block;
    width: 48px;
    margin: 2px auto 4px auto;
    top: 0;
    line-height: 24px;
  }

  .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link > .fa > .badge {
    top: -7px;
  }
}

@media (min-width: 1200px) {
  .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link {
    text-align: center;
    display: table-cell;
    height: 70px;
    vertical-align: middle;
    padding-top: 0;
    padding-bottom: 0;
  }

  .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link > .fa {
    display: block;
    width: 48px;
    margin: 2px auto 4px auto;
    top: 0;
    line-height: 24px;
  }

  .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link > .fa > .badge {
    top: -7px;
  }
}

    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark" style="background-color: #b72121">
  <a class="navbar-brand text-white" href="index.php">Blood Bank</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link text-white" href="index.php">
          <i class="fa fa-home"></i>
          Home
          <span class="sr-only">(current)</span>
          </a>
      </li>
     <!--  <li class="nav-item">
        <a class="nav-link text-white" href="signup.php">
          <i class="fa fa-plus">
            <span class="badge badge-danger">11</span>
          </i>
          Signup
        </a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link text-white" href="login.php">
          <i class="fa fa-sign-in">
           <!--  <span class="badge badge-warning">11</span> -->
          </i>
          Login
        </a>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="search.php">
          <i class="fa fa-search">
           <!--  <span class="badge badge-warning">11</span> -->
          </i>
          Search
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="contact.php">
          <i class="fa fa-address-book">
           <!--  <span class="badge badge-warning">11</span> -->
          </i>
          Contact
        </a>
      </li>
       <li class="nav-item">
        <a class="nav-link text-white" href="about.php">
          <i class="fa fa-info-circle">
           <!--  <span class="badge badge-warning">11</span> -->
          </i>
          About us
        </a>
      </li>
    </ul>
     <ul class="navbar-nav">
   
      <li class="nav-item">
        <a class="nav-link text-white" href="user.php">
          <i class="fa fa-user-circle">
            <span class="badge badge-success"></span>
          </i>
          User
        </a>
      </li>
    </ul>
    <ul class="navbar-nav">
   
      <li class="nav-item">
        <a class="nav-link text-white" href="auth.php">
          <i class="fa fa-sign-out">
            <span class="badge badge-success"></span>
          </i>
          Sign Out
        </a>
      </li>
    </ul>


   
  </div>
</nav>

<script type="text/javascript">

</script>
</body>
</html>
