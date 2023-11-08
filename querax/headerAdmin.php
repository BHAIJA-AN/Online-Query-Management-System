<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online-query-management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
      .default {
    border: none;
    background-color: inherit;
    display: inline-block;
    text-align: left;
}
footer {

      padding: 0px;
      position:fixed;
      bottom:0;
      z-index:999;
      width:100%
    }
/* On mouse-over */
.default:hover {background: #f1f1f1;}


      .sticky + .content {
  padding-top: 60px;
}
       .dropdown .dropdown-menu:after {
    content: "";
    width: 0;
    height: 0;.
    position: absolute;
    bottom: 100%;
    right: 30px;
    border-width: 0 6px 8px 6px;
    border-style: solid;
    border-color: #fff transparent;
}

 .dropdown .dropdown-menu:before {
    content: "";
    width: 0;
    height: 0;
    position: absolute;
    bottom: 100%;
    right: 28px;
    border-width: 0 8px 10px 8px;
    border-style: solid;
    border-color: rgba(0,0,0,0.1) transparent;
}

 .dropdown:hover .dropdown-menu { display: block; margin-top: 6px; border-radius:5px; }

    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}

    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }


      .sticky {
  position: fixed;
  top: 0;
  width: 100%;
          z-index: 999;
}

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;}
    }
  </style>

</head>

<nav id="navbar" class="navbar navbar-inverse">
  <div class="container-fluid" style="width:80%;margin:auto;">


    <div class="navbar-header">
       <a class="navbar-brand" href="index.php" style="padding-top:0;padding-bottom:0;"><img src="images/querax.png"  style="height:inherit;"/></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">

      <ul class="nav navbar-nav navbar-right">
        <li><a href="logIn.php">Log In As User</a></li>
        <li><a href="AdminSignUp.php">Register</a></li>

          </ul>
    </div>
  </div>
</nav>

 <script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
