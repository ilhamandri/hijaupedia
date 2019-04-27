 <head>
      <link rel="stylesheet" type="text/css" href="style/style.css">
  </head>

<body>
  <main>
    <header>
      <h1 id="logo"><a href="image/logo.png">HijauPedia</a></h1>
      <nav>
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="katalog.php">Katalog</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="article.php">Article</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav>
      <nav class="responsive">
        <span class="open">Navigation</span>
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="katalog.php">Katalog</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="article.php">Article</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav>
      <form action="" class="search">
        <input type="submit" value="" />
        <input type="search" placeholder="Search..." />
       </form>
    </header>

<section class="basket grid2">
      <h1>Shopping Bag</h1>
      <ul>
        <li>
          <img src="http://adaide.id/v5/wp-content/uploads/2017/06/tongkol-jagung2.jpg" alt="" />
          <h2>Lampu Tidur</h2>
          <a href="" class="remove">[Remove]</a>
          <span class="price">Rp.100.000</span>
          <span class="count">1</span>
        </li>
      </ul>
      <span class="total">Total: Rp.100.000</span>
      <a href="" class="button small orange">CHECKOUT</a>
    </section>
  </header>

  <footer>
      <h4>Copy Right&reg; HijauPedia </h4>
      <ul class="social">
        <li><a href=""><img src="https://i.imgur.com/xUT72NF.png" alt="" /></a></li>
        <li><a href=""><img src="https://i.imgur.com/yWRhsGj.png" alt="" /></a></li>
        <li><a href=""><img src="https://i.imgur.com/xpE7R2R.png" alt="" /></a></li>
        <li><a href=""><img src="https://i.imgur.com/feGu0Ls.png" alt="" /></a></li>
      </ul>
    </footer>
</main>


<script type="text/javascript">  
      $("footer .social li").hover(function(){
          $("footer .social li").not(this).stop(true).animate({opacity: ".6"},250);
          },
          function(){
          $("footer .social li").not(this).stop(true).animate({opacity: "1"},250);
          });

          $(".responsive span").click(function() {
          $(this).next("ul").slideToggle(250);
        });
    </script>
</body>