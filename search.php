<?php require 'connect.php';
include 'nav.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blood Bank</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <style>
         .signup-content
         {
            padding-top: 150px;
         }
    </style>
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" name="form">
                        <h2 class="form-title">Search</h2>
                        <div class="form-group col-md-12">
                            <label></label>
                            <select class="form-control" onchange="showUser(this.value)" name="blood">
                                <option selected>Choose..</option>
                                <option>A+</option>
                                <option>A-</option>
                                <option>B+</option>
                                <option>B-</option>
                                <option>AB+</option>
                                <option>AB-</option>
                                <option>O+</option>
                                <option>O-</option>
                            </select>
                        </div>
                      
                       <!--  <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Search"/>
                        </div> -->
                    </form>
                    <p class="loginhere">
                        
                    </p>
                   
                </div>
            </div>
             <div id="myresult">
                        
                    </div>
        </section>

    </div>          
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script>
function showUser(str) 
{
  if (str=="") {
    document.getElementById("myresult").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("myresult").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","result.php?q="+str,true);
  xmlhttp.send();
}
</script>

</body>
</html>