<!-- used the Web Developer extension to test my website. -->
<!-- used the W3 CSS validator to validate my CSS. -->
<!-- used a php beautify tool -->

<!doctype html>
<html lang="en" dir="ltr">
  <head>

    <meta name="viewport" content="width=device-width">
    <meta charset="UTF-8">
    <title>contact us | trip to silicon valley</title>
    <meta name="description" content="contact details page of my website about a trip to Silicon Valley"/>
    <meta name="copyright" content="Copyright Carmen Liao 2018">

    <link rel="stylesheet" type="text/css" href="css/styles(default).css" media="screen"> <!-- default styles -->
    <link rel="stylesheet" type="text/css" href="css/print.css" media="print"> <!-- print styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- css imported from Font Awesome that shows the right pointing arrow-->
    <link href="https://fonts.googleapis.com/css?family=Cookie|Dancing+Script" rel="stylesheet"> <!-- css imported from google fonts that shows the title font -->

    <!-- check if the user has logged in before sending them to this page. -->
    <script src="check-login.js"></script>

  </head>

  <body>
    <!-- The back to top button takes the user to the top of the website-->
    <a name = "backtotop">
    <div id="nav">
      <nav class="main">
        <ul>
          <!-- the title of the page acts like a logo that takes the user to the home page when clicked -->
          <li class = "title"><a class = "title" href="index.php" title = "title of homepage" alt = "Trip to Silicon Valley">Trip to Silicon Valley</a></li>
          <li class = "nav"><a class = "border" href="index.php">Home</a></li>
          <li class = "nav"><a class = "border" href="gallery.php">Gallery</a></li>
          <li class = "nav"><a class = "border" href="contact.php">Contact</a></li>
          <li class = "logout"><a class = "border1" href="logout.php">Logout</a></li>
        </ul>
      </nav>
    </div>


    <div class = "title-div">
      <div id = "contact-overlay">
          <h1 class = "contact-title">Questions?</h1>
          <h3 class = "contact-blurb"> Flick us an email and we'll try to respond as soon as we can.</h3>
          <a class = "email-bottom" href="#bottom">Email</a>
          <i class="fa">&#xf105;</i>
      </div>
      <!-- if the user clicks "Email" on this page, it sends them conveniently down to the email form -->
      <a name="bottom"></a>
    </div>

    <div class = "filler"> </div> <!-- a div for extra space for better display of content -->
    <!-- this message only shows when print action is detected. otherwise it doesn't show -->
    <p class = "my-email"> Send an email to: 'carmenliao.student@wegc.school.nz' along with your name, email and message.</p>
		<form class = "left" method="post" action="contact.php">

			<p class = "details">
				<label for="name">Name </label>
        <br>
				<input type="text" id="name" name="name" required />
			</p>

      <p class = "details">
				<label for="email">Email </label>
        <br>
				<input type="text" id="email" name="email" required />
			</p>

      <p class = "details">
				<label for="message" class = "message-label">Message </label>
        <br>
				<textarea id="message" name="message" rows="6" cols="30" required></textarea>
        <!-- validated so that the user must put some kind of info in each box before its sent -->
			</p>

      <p class = "submit">
				<button id = "submit" type="submit" name="send">Submit</button>
			</p>
    </form>

    <!-- promoting the wegc facebook page as well -->
    <p class = "facebook"> The WEGC Silicon Valley Facebook Page</p>
    <iframe class = "facebook" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fwegcsv%2F&tabs=timeline&width=420&height=400&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="420" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>

    <?php require 'mail.php'; ?>

    <footer class = "footer-style-contact">
      <div class = "todays-date">
        <h4 class = "date">Today's Date </h4>
        <script src="date.js"></script>
      </div>

      <div class = "line"></div>

      <div class = "plugins">
        <div>
          <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a>
          <div class="g-plus" data-action="share" data-height="24"></div>
        </div>
        <iframe class = "like" src="https://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.wegcstudents.com%2Fy132018%2Fsvtrip&width=450&layout=standard&action=like&size=small&show_faces=false&share=true&height=35&appId" width="450" height="35" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
      </div>
        <i class="top"><a class = "top" href="#backtotop">&#xf106;</a></i>
    </footer>


    <div class = "copyright">
      <p class = "main-copyright"> &copy; Carmen Liao 2018</p>
    </div>


    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>

  </body>
</html>
