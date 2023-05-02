<?php

session_start();
if (isset($_SESSION['author'])) {
  header("Location: http://localhost/Blog Website/login.php");
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700;900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css"
      integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm"
      crossorigin="anonymous"
    />
    <script
      src="https://kit.fontawesome.com/c9ed89b800.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="main.css" />
    <title>Blog Website</title>
  </head>

  <body>
    <!--Navigation-->
    <header>
      <div class="container">
        <div class="d-flex space-between align-items-center">
          <div class="social-links">
            <ul class="d-flex">
              <li>
                <a href=""><i class="fa fa-facebook"></i></a>
              </li>
              <li>
                <a href=""><i class="fa fa-twitter"></i></a>
              </li>
              <li>
                <a href=""><i class="fa fa-youtube-play"></i></a>
              </li>
              <li>
                <a href=""><i class="fa fa-instagram"></i></a>
              </li>
            </ul>
          </div>
          <div class="logo-container">
            <a class="logo" href="#">Modern <span>blog</span></a>
          </div>
          <div class="info">
            <ul class="d-flex">
              <li>
                <a href=""><i class="fa fa-phone"></i>111 222 333</a>
                <a href=""><i class="fa fa-envelope"></i>info@foobar.com</a>
              </li>
            </ul>
          </div>
        </div>
        <nav>
          <ul class="d-flex justify-content-center">
            <li><a href="#">Technology</a></li>
            <li><a href="#">Programming</a></li>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">HTML &amp; CSS</a></li>
            <li><a href="#">Bootstrap</a></li>
            <li><a href="#">Website Themes</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <!--Main-->
    <section class="contact">
      <form
        action="http://localhost/Blog Website/admin/php/insert_post.php"
        method="POST"
      >
        <input
          name="author"
          type="hidden"
          value="<?php echo $_SESSION['author'] ?>"
        />
        <label for="title">Title</label>
        <input type="text" name="title" />
        <label for="seo">Seo Title</label>
        <input type="text" name="seo" />
        <label for="category">Category</label>
        <input type="text" name="category" />
        <label for="content">Message</label>
        <textarea name="content" cols="30" rows="10"></textarea>
        <input class="insert-btn" type="submit" value="submit" />
      </form>
    </section>

    <!--Footer-->
    <footer class="section-padding bg-dark color-white">
      <div class="container">
        <div class="grid-3-col">
          <div class="footer-about">
            <div class="logo-container">
              <a class="logo" href="">Modern <span>blog</span></a>
            </div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo
              provident doloribus nisi obcaecati soluta dolore tenetur earum
              fuga quia, pariatur quam quibusdam quos cupiditate laudantium
              maxime aspernatur molestiae incidunt suscipit. Suscipit sapiente
              voluptas voluptatem nam, ipsa mollitia. Deleniti quibusdam quod
              cum hic! Modi at, expedita omnis excepturi nisi enim recusandae?
            </p>
            <div class="social-links">
              <ul class="d-flex">
                <li>
                  <a href=""><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a href=""><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a href=""><i class="fa fa-youtube-play"></i></a>
                </li>
                <li>
                  <a href=""><i class="fa fa-instagram"></i></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="footer-nav text-center">
            <h3>Useful links</h3>
            <ul class="">
              <li><a href="#">Technology</a></li>
              <li><a href="#">Programming</a></li>
              <li><a href="#">Web Design</a></li>
              <li><a href="#">HTML &amp; CSS</a></li>
              <li><a href="#">Bootstrap</a></li>
              <li><a href="#">Website Themes</a></li>
            </ul>
          </div>
          <div class="footer-news text-cente">
            <h3>Newsletter</h3>
            <form class="d-flex align-items-center">
              <div class="input-group">
                <input type="text" placeholder="Email" />
                <button class="btn-main"><i class="fa fa-envelope"></i></button>
              </div>
            </form>
          </div>
        </div>

        <div class="text-center credits">
          <p>Made by Alina Kovyrialova &copy; 2023. All rights reserved.</p>
        </div>
      </div>
    </footer>
  </body>
</html>
