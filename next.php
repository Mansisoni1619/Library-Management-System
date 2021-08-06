<?php 
session_start();
if (!isset($_SESSION['username'])) {
  header('location:index.php');
}

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,700&display=swap" rel="stylesheet"/>
    <link href="https://necolas.github.io/normalize.css/latest/normalize.css" rel="stylesheet"/>
    <link href="css/zeynep.css" rel="stylesheet"/>
    <link href="css/next.css" rel="stylesheet"/>
    <link href="css/left.css" rel="stylesheet"/>
    <title>Library Management System</title>
  </head>
  <body>
    <div class="zeynep">
      <ul>
        <li>
          <a href="#">MENU</a>
        </li>
        <li class="has-submenu">
          <a href="#" data-submenu="categories">PDF BOOKS</a>

          <div id="categories" class="submenu">
            <div class="submenu-header">
              <a href="#" data-submenu-close="categories">Main Menu</a>
            </div>
            <ul>
              <li class="has-submenu">
                <a href="#" data-submenu="electronics">Branch</a>

                <div id="electronics" class="submenu">
                  <div class="submenu-header">
                    <a href="#" data-submenu-close="electronics">Branch</a>
                  </div>
                  <ul>
                    <li>
                      <a href="Book.html">CSE</a>
                    </li>

                    <li>
                      <a href="#">IT</a>
                    </li>

                    <li>
                      <a href="#">ECE</a>
                    </li>

                    <li>
                      <a href="#">MECH</a>
                    </li>

                    <li>
                      <a href="#">CE</a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </li>


        <li class="has-submenu">
          <a href="#" data-submenu="categories1">PDF NOTES</a>

          <div id="categories1" class="submenu">
            <div class="submenu-header">
              <a href="#" data-submenu-close="categories1">Main Menu</a>
            </div>
            <ul>
              <li class="has-submenu">
                <a href="#" data-submenu="electronics1">Branch</a>

                <div id="electronics1" class="submenu">
                  <div class="submenu-header">
                    <a href="#" data-submenu-close="electronics1">Branch</a>
                  </div>
                  <ul>
                    <li>
                      <a href="Notes.html">CSE</a>
                    </li>

                    <li>
                      <a href="#">IT</a>
                    </li>

                    <li>
                      <a href="#">ECE</a>
                    </li>

                    <li>
                      <a href="#">MECH</a>
                    </li>

                    <li>
                      <a href="#">CE</a>
                    </li>
                  </ul>
                </div>
              </li>

            </ul>
          </div>
        </li>
        
        <li class="has-submenu">
          <a href="#" data-submenu="categories2">PREV. PAPERS</a>

          <div id="categories2" class="submenu">
            <div class="submenu-header">
              <a href="#" data-submenu-close="categories2">Main Menu</a>
            </div>
            <ul>
              <li class="has-submenu">
                <a href="#" data-submenu="electronics2">Branch</a>

                <div id="electronics2" class="submenu">
                  <div class="submenu-header">
                    <a href="#" data-submenu-close="electronics2">Branch</a>
                  </div>
                  <ul>
                    <li>
                      <a href="Paper.html">CSE</a>
                    </li>

                    <li>
                      <a href="#">IT</a>
                    </li>

                    <li>
                      <a href="#">ECE</a>
                    </li>

                    <li>
                      <a href="#">MECH</a>
                    </li>

                    <li>
                      <a href="#">CE</a>
                    </li>
                  </ul>
                </div>
              </li>

            </ul>
          </div>
        </li>
        <li>
          <a href="thought.html">AUTHOR THOUGHTS</a>
        </li>
         <li>
          <a href="gallery.html">GALLERY</a>
        </li>
         <li>
          <a href="contact.php">CONTACT</a>
        </li>
        <li>
          <a href="feedback.php">FEEDBACK</a>
        </li>

        <li>
          <a href="about.html">ABOUT</a>
        </li>
        <li>
          <a href="logout.php">LOGOUT</a>
        </li>
      </ul>
    </div>

    <main>
      <h1>
        Library Management System
      </h1>

      <p>"When in doubt go to the library."<br>
      - J.K. Rowling</p>

      <button type="button" class="btn-open first">View Menu !</button>

     <div class="welcome"> Welcome <?php echo $_SESSION['username']; ?> </div>
     <div class="library">to library</div>
     <div class="zeynep-overlay"></div>
     <div class="logo">
        <img src="developer/book.png">
      </div>

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
