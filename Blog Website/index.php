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
            <li><a href="category.html">Technology</a></li>
            <li><a href="detail.html">Programming</a></li>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">HTML &amp; CSS</a></li>
            <li><a href="#">Bootstrap</a></li>
            <li><a href="#">Website Themes</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <!--Blog posts-->
    <section class="blog-posts section-padding">
      <div class="container">
        <div class="grid-2-1-col">
          <section>
            <?php 
              require_once("./php/getPost.php");
              getMainPost();
            ?>
            <div class="btn-container d-flex justify-content-center">
              <button class="btn-main" href="">Load more</button>
            </div>
          </section>
          <aside>
            <div class="author text-center">
              <div class="author-img-container">
                <img
                  class="img-thumbnail img-circle"
                  src="img/man.jpg"
                  alt="man on a ledge"
                />
              </div>
              <div class="author-info">
                <h3>My name is Joe</h3>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi
                  consequuntur fugit earum ex? Laboriosam delectus facere ea,
                  error, explicabo modi odio, perspiciatis voluptatem similique
                  esse assumenda velit harum voluptates obcaecati.
                </p>
                <div class="social-links">
                  <ul class="d-flex justify-content-center">
                    <li>
                      <a href=""><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href=""><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href=""><i class="fa fa-youtube-play"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="author text-center">
              <div class="author-img-container">
                <img
                  class="img-thumbnail"
                  src="img/man.jpg"
                  alt="man on a ledge"
                />
              </div>
              <div class="author-info">
                <h3>My name is Joe</h3>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi
                  consequuntur fugit earum ex? Laboriosam delectus facere ea,
                  error, explicabo modi odio, perspiciatis voluptatem similique
                  esse assumenda velit harum voluptates obcaecati.
                </p>
                <div class="social-links">
                  <ul class="d-flex justify-content-center">
                    <li>
                      <a href=""><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href=""><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href=""><i class="fa fa-youtube-play"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="author text-center">
              <div class="author-img-container">
                <img
                  class="img-thumbnail img-circle"
                  src="img/man.jpg"
                  alt="man on a ledge"
                />
              </div>
              <div class="author-info">
                <h3>My name is Joe</h3>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi
                  consequuntur fugit earum ex? Laboriosam delectus facere ea,
                  error, explicabo modi odio, perspiciatis voluptatem similique
                  esse assumenda velit harum voluptates obcaecati.
                </p>
                <div class="social-links">
                  <ul class="d-flex justify-content-center">
                    <li>
                      <a href=""><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href=""><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href=""><i class="fa fa-youtube-play"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="tags section-padding">
              <ul class="d-flex">
                <li class="badge"><a href="">Programming</a></li>
                <li class="badge"><a href="">HTML</a></li>
                <li class="badge"><a href="">CSS</a></li>
                <li class="badge"><a href="">Responsive</a></li>
                <li class="badge"><a href="">Bootstrap</a></li>
                <li class="badge"><a href="">Template</a></li>
                <li class="badge"><a href="">Themes</a></li>
                <li class="badge"><a href="">Project</a></li>
                <li class="badge"><a href="">Data</a></li>
                <li class="badge"><a href="">Development</a></li>
                <li class="badge"><a href="">Programming</a></li>
                <li class="badge"><a href="">Web Design</a></li>
              </ul>
            </div>
          </aside>
        </div>
      </div>
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
              <li><a href="category.html">Technology</a></li>
              <li><a href="detail.html">Programming</a></li>
              <li><a href="#">Web Design</a></li>
              <li><a href="#">HTML &amp; CSS</a></li>
              <li><a href="#">Bootstrap</a></li>
              <li><a href="#">Website Themes</a></li>
              <li><a href="contact.html">Contact</a></li>
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
