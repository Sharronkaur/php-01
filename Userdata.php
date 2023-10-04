<!DOCTYPE html>
<html lang="en">
<head>

  <title>Thank you</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <h1>Thanks for subscribing with us</h1>
  </header>

  <main>
  <fieldset>
  <div class="container">


    <?php

	  $fname = $_POST['fname'];
	  $lname = $_POST['lname'];
    $Email = $_POST['email'];
    $number = $_POST['number'];

    echo "<p class='white'> First Name: $fname </p>";
    echo "<p class='white'> Last Name: $lname </p>";
    echo "<p class='white'> Email address : $Email </p>";
    echo "<p class='white'> Phone Number : $number </p>";
  ?>
 </div>
</fieldset>
  </main>

  <div class="footer">
        <p>Created by Sharron Kaur</p>
    </div>

</body>
</html>


