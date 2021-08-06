<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,700&display=swap" rel="stylesheet"/>
    <link href="https://necolas.github.io/normalize.css/latest/normalize.css" rel="stylesheet"/>
    <link href="css/zeynep.css" rel="stylesheet"/>
    <link href="css/base.css" rel="stylesheet"/>
    <link href="css/left.css" rel="stylesheet"/>
    <title>Library Management System</title>
  </head>
  <body>
    
    <main>
      <h1>
        Library Management System
      </h1>
        <p>"When in doubt go to the library."<br>
      - J.K. Rowling</p>
    
    <div class="form-box">
        <div class="button-box">
          <div id="btn"></div>
          <button type="button" class="toggle-btn" onclick="login()">Log In</button>
          <button type="button" class="toggle-btn" onclick="register()">Register</button>
        </div>
       
      <form method="POST" action="validation.php" id="login" class="input-group">
        <input type="text" name="user" class="input-field"  placeholder="User Name" title="Enter your name" required>
        <input type="password" name="password" class="input-field" id="myInput" placeholder="Enter Password" required>
        <br>
        <div class="show">
        <input type="checkbox" class="chech-box" onclick="myFunction()">Show password</div>
        <button type="submit" class="submit-btn" required><a href="#" style="text-decoration: none; ">Login</a></button>
        <div style="margin-top: 20px; color: black; font-size: medium;">New user<a onclick="register()" style="cursor:pointer; color: blue;"> Click here</a></div>
      </form>
       <form method="POST" action="registration.php" id="register" class="input-group">
        <input type="text" name="user" class="input-field"  placeholder="User Name" title="Enter your name" required>
        <input type="password" name="password" class="input-field" id="myInput" placeholder="Enter Password" required>
        <input type="password" class="input-field" id="myInput" placeholder="Enter Confirm Password" required>
        <div class="show">
      </div>
         <button type="submit" class="submit-btn" required><a href="#" style="text-decoration: none; ">Register</a></button>
        <div style="margin-top: 20px;color: black;">Already have an account!<a onclick="login()" style="cursor:pointer; color: blue;"><br>Click here</a></div>
      </form>
    </div>
    <script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
      <script>
         $('.btn').click(function(){
           $(this).toggleClass("click");
           $('.sidebar').toggleClass("show");
         });
           $('.feat-btn').click(function(){
             $('nav ul .feat-show').toggleClass("show");
             $('nav ul .first').toggleClass("rotate");
           });
           $('.serv-btn').click(function(){
             $('nav ul .serv-show').toggleClass("show1");
             $('nav ul .second').toggleClass("rotate");
           });
           $('nav ul li').click(function(){
             $(this).addClass("active").siblings().removeClass("active");
           });
      </script>
      <script>
        var x = document.getElementById("login");
        var y= document.getElementById("register");
        var z =document.getElementById("btn");

        function register(){
          x.style.left = "-400px";
          y.style.left = "50px";
          z.style.left = "110px";
        }
        function login(){
          x.style.left = "50px";
          y.style.left = "450px";
          z.style.left = "0";
        }
      </script>

    <div class="zeynep-overlay"></div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="js/zeynep.js"></script>

    <script>
      $(function() {
        // init zeynepjs side menu
        var zeynep = $('.zeynep').zeynep({
          opened: function () {
            // log
            console.log('the side menu opened')
          },
          closed: function () {
            // log
            console.log('the side menu closed')
          }
        })

        // dynamically bind 'closing' event
        zeynep.on('closing', function () {
          // log
          console.log('this event is dynamically binded')
        })

        // handle zeynepjs overlay click
        $('.zeynep-overlay').on('click', function () {
          zeynep.close()
        })

        // open zeynepjs side menu
        $('.btn-open').on('click', function () {
          zeynep.open()
        })
      })
    </script>

  </body>
</html>
