<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Food</title>
    <link rel="stylesheet" type="text/css" href="../static/css/style.css">
</head>
<body>
    <header>
        <div class="container nav1">
          <div class="logo">
            <img src="../static/images/logo2.png">
            </div>
          <ul>
          <li><a href="index.html">HOME</a></li>
          <li><a href="order.php" class="current">ORDER</a></li>
          <li><a href="about.html">ABOUT US</a></li>
         </ul>
         </div>
         </header>

<div>
<?php
$mysqli = new mysqli("localhost","root","","restaurant");
$result = $mysqli -> query("SELECT * FROM food");
if ($result) {
  while($row = $result->fetch_assoc()) {
    echo $row['name'];
  }

}
else {
  echo mysql_error();
}
$mysqli -> close();
?> 
</div>

         <footer class="main-footer">
            <section>
              <div class="section">
                <h2>Contact Us</h2>
                <div class="footer-headline">Tell us a little about yourself, and we'll be in touch right away  </div>
      
            <div class="footer-form">
             <form action="/action_page.php">
              <table>
                <tr>
             <td><label for="Name">Name:</label></td>
               <td><input type="text" placeholder="Your Name..." required /></td>
               </tr>
               <tr>
                 <td><label for="Email">Email:</label></td>
               <td><input type="email" placeholder="Your Email..." required /></td>
               </tr>
               <tr>
               <td><label for="Contact">Contact No:</label></td>
               <td><input type="number" placeholder="Your Contact No..." required/></td>
               </tr>
               <tr>
               <td><label for="Comment">Comments: </label></td>
               <td><textarea name="message" placeholder="Your Comments " rows="2" required></textarea></td>
                </tr>
              </table>
              </form>
               </div>
            </div>
            </section>
            </div>
          </footer>
          <div class="sub-footer">
            <a href="#"><img src="../static/images/insta.jpg" /></a>
            <a href="#"><img src="../static/images/facebook.png" /></a>
          </div>
</body>
</html>