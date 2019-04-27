<!DOCTYPE html>
<html>

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
    </header>


	<section class="address grid1">
      <iframe width="100%" height="328" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=33.989879,-118.475579&amp;num=1&amp;ie=UTF8&amp;t=m&amp;z=14&amp;ll=33.989345,-118.475146&amp;output=embed"></iframe>
      <h1>Universitas Katolik Parahyangan</h1>
      <h2>Bandung, Jawa Barat, Indonseia</h2>
    </section>

    <div id = "contactinfo"> 
       		<h2> Contact Us </h2>
       		<p> Call Center(24 jam) : 081320105551</p>
       		<p> Email : hellopedia@hijaupedia.com </p>
    </div>

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
</html>