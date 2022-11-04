<!--
NAME : Aarsh Parimal Patel
Assignment#1
Semester-2
 -->


<!DOCTYPE html>
<html lang="en">

<head>

  <!-- adding the metadata -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Assignment 1</title>
  <meta name="description" content="Assignment 1 (pizza webpage)">
  <meta name="robots" content="noindex,nofollow">

  <!-- providing the link for the fonts selected from google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik+Dirt&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">

  <!-- adding our css style sheet -->
  <link rel="stylesheet" href="./css/style.css">

</head>

<body>
  <header>

    <!-- adding a logo for our webpage -->
    <div class="logo">
      <a href="index.php"> <img src="./img/logo.png" alt="logoimg"></a>
    </div>

    <!-- adding nav elements for our navigation bar -->
    <nav>
      <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="index.php">ABOUT US</a></li>
        <li><a href="index.php">OTHER MENU</a></li>
        <li><a href="index.php">SPECIALS</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <section class="bghead">

      <!-- adding our main heading -->
      <h1>RUN-HOT PIZZA</h1>
    </section>

    <!-- adding form -->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

      <section class="menu">
        <h2>PIZZA MENU</h2>
      </section>

      <!-- adding elements for our first pizza -->
      <section class=pizza1>
        <div class="imgp1">
          <h2>The Canadian Pizza</h2>
          <img src="./img/CanadianPizza.jpg" alt="pizza1">
        </div>
        <div class="sizes1">
          <h3>Size:</h3>

          <!-- adding a drop down list for choosing the size of our pizza -->
          <select class="sizedd1" name="siz[]">
            <option value="" disabled selected hidden>-Select-</option>
            <option value="Small(Canadian Pizza)">Small</option>
            <option value="Medium(Canadian Pizza)">Medium</option>
            <option value="Large(Canadian Pizza)">Large</option>
            <option value="Extra-large(Canadian Pizza)">Extra large</option>
          </select>
        </div>

        <div class="ext1">
          <h3>Extra Toppings:</h3>
          <!-- ading check boxes for extra toppings-->
          <input type="checkbox" id="tp01" name="toppings1[]" value=" Jalapeno(For Canadian Pizza) ">

          <!-- [] is used to store values which I have used for php. -->
          <label for="tp01">Jalapeno</label>
          <br>
          <br>
          <input type="checkbox" id="tp02" name="toppings1[]" value=" Ham(For Canadian Pizza) ">
          <label for="tp02">Ham</label>
          <br>
          <br>
          <input type="checkbox" id="tp03" name="toppings1[]" value=" Bacon(For Canadian Pizza) ">
          <label for="tp03">Bacon</label>
          <br>
          <br>
          <input type="checkbox" id="tp04" name="toppings1[]" value=" Sausage(For Canadian Pizza) ">
          <label for="tp04">Sausage</label>
        </div>

        <div class="sauces">
          <h3>Base Sauce:</h3>

          <!-- adding radio buttons for selecting sauces -->
          <input type="radio" id="sau1" name="sau[]" value=" Marinara(For Canadian Pizza) ">
          <!-- [] is used to store values which I have used for php. -->
          <label for="sau1">Marinara</label>
          <br>
          <br>
          <input type="radio" id="sau2" name="sau[]" value=" Garlic(For Canadian Pizza) ">
          <label for="sau2">Garlic</label>
          <br>
          <br>
          <input type="radio" id="sau3" name="sau[]" value=" BBQ(For Canadian Pizza) ">
          <label for="sau3">BBQ</label>
          <br>
          <br>
          <input type="radio" id="sau4" name="sau[]" value=" Ranch(For Canadian Pizza) ">
          <label for="sau4">Ranch</label>
          <br>
          <br>
          <input type="radio" id="sau5" name="sau[]" value=" No sauce(For Canadian Pizza) ">
          <label for="sau5">No sauce</label>
        </div>

        <div class="quan">
          <h3><label for="np">QUANTITY:</label>

            <!-- adding number input for our quantity which has minimum value of 0 and max value of 50 for pizzas. -->
            <input type="number" id="np" name="noofpizzas" value="" min="0" max="50" placeholder="0">
          </h3>
          <br>

          <!-- adding check box for add to cart for adding the pizza to the cart. I have also used a symbol of cart to display it. -->
          <input type="checkbox" name="p1" value="The Canadian Pizza x">ADD TO CART<img src="./img/cart.png" alt="cart">
        </div>
      </section>


      <!-- adding elements for our second pizza. -->
      <section class=pizza2>
        <div class="imgp2">


          <h2>The Deluxe Pizza</h2>
          <img src="./img/DeluxePizza.jpg" alt="pizza2">
        </div>
        <div class="sizes2">

          <!-- adding a drop down list for choosing the size of our pizza -->
          <h3>Size:</h3>
          <select class="sizedd2" name="sz[]">
            <option value="" disabled selected hidden>-Select-</option>
            <option value="Small(Deluxe Pizza)">Small</option>
            <option value="Medium(Deluxe Pizza)">Medium</option>
            <option value="Large(Deluxe Pizza)">Large</option>
            <option value="Extra-large(Deluxe Pizza)">Extra large</option>
          </select>

        </div>
        <div class="ext2">
          <h3>Extra Toppings:</h3>
          <!-- ading check boxes for extra toppings-->
          <input type="checkbox" id="tp001" name="toppings2[]" value=" Jalapeno(For Deluxe Pizza) ">
          <!-- [] is used to store values which I have used for php. -->
          <label for="tp001">Jalapeno</label>
          <br>
          <br>
          <input type="checkbox" id="tp002" name="toppings2[]" value=" Ham(For Deluxe Pizza) ">
          <label for="tp002">Ham</label>
          <br>
          <br>
          <input type="checkbox" id="tp003" name="toppings2[]" value=" Bacon(For Deluxe Pizza) ">
          <label for="tp003">Bacon</label>
          <br>
          <br>
          <input type="checkbox" id="tp004" name="toppings2[]" value=" Sausage(For Deluxe Pizza) ">
          <label for="tp004">Sausage</label>

        </div>
        <div class="sauces1">
          <h3>Base Sauce:</h3>

          <!-- adding radio buttons for selecting sauces -->
          <input type="radio" id="sau01" name="sauc[]" value=" Marinara(For Deluxe Pizza) ">
          <!-- [] is used to store values which I have used for php. -->
          <label for="sau01">Marinara</label>
          <br>
          <br>
          <input type="radio" id="sau02" name="sauc[]" value=" Garlic(For Deluxe Pizza) ">
          <label for="sau02">Garlic</label>
          <br>
          <br>
          <input type="radio" id="sau03" name="sauc[]" value=" BBQ(For Deluxe Pizza) ">
          <label for="sau03">BBQ</label>
          <br>
          <br>
          <input type="radio" id="sau04" name="sauc[]" value=" Ranch(For Deluxe Pizza) ">
          <label for="sau04">Ranch</label>
          <br>
          <br>
          <input type="radio" id="sau05" name="sauc[]" value=" No sauce(For Deluxe Pizza) ">
          <label for="sau05">No sauce</label>
        </div>
        <div class="quan1">
          <h3><label for="nop">QUANTITY:</label>

            <!-- adding number input for our quantity which has minimum value of 0 and max value of 50 for pizzas. -->
            <input type="number" id="nop" name="nofpizzas" value="" min="0" max="50" placeholder="0">
          </h3>
          <br>
          <!-- adding check box for add to cart for adding the pizza to the cart. I have also used a symbol of cart to display it. -->
          <input type="checkbox" name="p2" value="The Deluxe Pizza x">ADD TO CART<img src="./img/cart.png" alt="cart">
        </div>
      </section>

      <!-- adding elements for our second pizza. -->
      <section class=pizza3>
        <div class="imgp3">
          <h2>The Mediterranean Pizza</h2>
          <img src="./img/MediterraneanPizza.jpeg" alt="pizza3">

        </div>
        <div class="sizes3">
          <h3>Size:</h3>

          <!-- adding a drop down list for choosing the size of our pizza -->
          <select class="sizedd3" name="size[]">
            <option value="" disabled selected hidden>-Select-</option>
            <option value="Small(Mediterranean Pizza)">Small</option>
            <option value="Medium(Mediterranean Pizza)">Medium</option>
            <option value="Large(Mediterranean Pizza)">Large</option>
            <option value="Extra-large(Mediterranean Pizza)">Extra large</option>
          </select>

        </div>
        <div class="ext3">
          <h3>Extra Toppings:</h3>
          <!-- ading check boxes for extra toppings-->
          <input type="checkbox" id="tp0001" name="toppings3[]" value=" Jalapeno(For Mediterranean Pizza) ">
          <!-- [] is used to store values which I have used for php. -->
          <label for="tp0001">Jalapeno</label>
          <br>
          <br>
          <input type="checkbox" id="tp0002" name="toppings3[]" value=" Ham(For Mediterranean Pizza) ">

          <label for="tp0002">Ham</label>
          <br>
          <br>
          <input type="checkbox" id="tp0003" name="toppings3[]" value=" Bacon(For Mediterranean Pizza) ">
          <label for="tp0003">Bacon</label>
          <br>
          <br>
          <input type="checkbox" id="tp0004" name="toppings3[]" value=" Sausage(For Mediterranean Pizza) ">
          <label for="tp0004">Sausage</label>
        </div>
        <div class="sauces2">
          <h3>Base Sauce:</h3>

          <!-- adding radio buttons for selecting sauces -->
          <input type="radio" id="sau001" name="sauce[]" value=" Marinara(For Mediterranean Pizza) ">
          <!-- [] is used to store values which I have used for php. -->
          <label for="sau001">Marinara</label>
          <br>
          <br>
          <input type="radio" id="sau002" name="sauce[]" value=" Garlic(For Mediterranean Pizza) ">
          <label for="sau002">Garlic</label>
          <br>
          <br>
          <input type="radio" id="sau003" name="sauce[]" value=" BBQ(For Mediterranean Pizza) ">
          <label for="sau003">BBQ</label>
          <br>
          <br>
          <input type="radio" id="sau004" name="sauce[]" value=" Ranch(For Mediterranean Pizza) ">
          <label for="sau004">Ranch</label>
          <br>
          <br>
          <input type="radio" id="sau005" name="sauce[]" value=" No sauce(For Mediterranean Pizza) ">
          <label for="sau005">No sauce</label>
        </div>
        <div class="quan2">
          <h3><label for="nopp">QUANTITY:</label>

            <!-- adding number input for our quantity which has minimum value of 0 and max value of 50 for pizzas. -->
            <input type="number" id="nopp" name="noffpizzas" value="" min="0" max="50" placeholder="0">
          </h3>
          <br>
          <!-- adding check box for add to cart for adding the pizza to the cart. I have also used a symbol of cart to display it. -->
          <input type="checkbox" name="p3" value="The Mediterranean Pizza x">ADD TO CART<img src="./img/cart.png" alt="cart">
        </div>
      </section>

      <!-- adding a form to get information from customer for their order. -->
      <section>
        <div class="personalinfo">
          <h2>PERSONAL INFORMATION</h2>
          <!-- adding textboxes -->
          <label for="fn">First Name:</label>
          <input type="text" name="firstname" id="fn" placeholder="Please enter your first name">
          <br>
          <br>
          <label for="ln">Last Name:</label>
          <input type="text" name="lastname" id="ln" placeholder="Please enter your last name">
          <br>
          <br>
          <label for="mail">E-mail:</label>
          <input type="text" name="email" id="mail" placeholder="Please enter your email address">
          <br>
          <br>

          <!-- adding telephone input for phone number. -->
          <label for="phno">Phone Number:</label>
          <input type="tel" name="phno" id="phno" placeholder="Please enter your phone number">
          <label for="add">Address:</label>
          <input type="text" name="address" id="add" placeholder="Please enter your complete address">
          <br>
          <br>
          <!-- adding textarea -->
          <p>Write additional instructions about your order below (if any):</p>
          <textarea name="qry" id="query" rows="8" cols="80" placeholder="Write here..."></textarea>
          <br>
          <br>
          <!-- adding submit button -->

          <input class="submitb" type="submit" value="Submit">


          <!-- adding our php -->
          <?php

          // adding if statement for our php
          if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // adding variables
            $fname = trim($_POST['firstname']);
            $lname = trim($_POST['lastname']);
            $email = trim($_POST['email']);
            $phonenumber = trim($_POST['phno']);
            $address = trim($_POST['address']);
            $query = trim($_POST['qry']);

            // for toppings
            //for checkbox
            $toppings1 = "";
            $toppings1Name = $_POST['toppings1'];
            foreach ($toppings1Name as $toppings1Value) {
              $toppings1 .= $toppings1Value;
            }
            //for checkbox
            $toppings2 = "";
            $toppings2Name = $_POST['toppings2'];
            foreach ($toppings2Name as $toppings2Value) {
              $toppings2 .= $toppings2Value;
            }
            //for checkbox
            $toppings3 = "";
            $toppings3Name = $_POST['toppings3'];
            foreach ($toppings3Name as $toppings3Value) {
              $toppings3 .= $toppings3Value;
            }


            // for sizes
            $siz = "";
            $sizName = $_POST['siz'];
            foreach ($sizName as $sizValue) {
              $siz .= $sizValue;
            } //drop-down list

            $sz = "";
            $szName = $_POST['sz'];
            foreach ($szName as $szValue) {
              $sz .= $szValue;
            } //drop-down list

            $size = "";
            $sizeName = $_POST['size'];
            foreach ($sizeName as $sizeValue) {
              $size .= $sizeValue;
            } //drop-down list

            // for sauces
            $sau = "";
            $sauName = $_POST['sau'];
            foreach ($sauName as $sauValue) {
              $sau .= $sauValue;
            } //radio button
            $sauc = "";
            $saucName = $_POST['sauc'];
            foreach ($saucName as $saucValue) {
              $sauc .= $saucValue;
            } //radio button

            $sauce = "";
            $sauceName = $_POST['sauce'];
            foreach ($sauceName as $sauceValue) {
              $sauce .= $sauceValue;
            } //radio button

            // for name of pizzas
            $p1 = ($_POST['p1']);
            $p2 = ($_POST['p2']);
            $p3 = ($_POST['p3']);

            // for number of pizzas
            $noofpizzas = ($_POST['noofpizzas']);
            $nofpizzas = ($_POST['nofpizzas']);
            $noffpizzas = ($_POST['noffpizzas']);


            // adding if statements for errors while filling out the form. This will didplay the message if a value is missing or inputted incorrectly.
            $error = "";
            if (empty($p1) && empty($p2) && empty($p3)) {  //for no pizzas selected or not added to cart
              $error = "Error! Please add pizza to the cart!";
            } elseif (empty($siz) && isset($p1)) { //for no size selected
              $error = "Error! Please choose the size of your Canadian Pizza!";
            } elseif (empty($sau) && isset($p1)) { //for no sauces selected
              $error = "Error! Please select the sauce for your Canadian Pizza and if you don't want sauce select 'No sauce'!";
            } elseif (empty($noofpizzas) && isset($p1)) { //for no quantity selected
              $error = "Error! Please select the quantity of your Canadian Pizza(s)!";
            } elseif (empty($sz) && isset($p2)) { //for no size selected
              $error = "Error! Please choose the size of your Deluxe Pizza!";
            } elseif (empty($sauc) && isset($p2)) { //for no sauces selected
              $error = "Error! Please select the sauce for your Deluxe Pizza and if you don't want sauce select 'No sauce'!";
            } elseif (empty($nofpizzas) && isset($p2)) { //for no quantity selected
              $error = "Error! Please select the quantity of your Deluxe Pizza(s)!";
            } elseif (empty($size) &&  isset($p3)) { //for no size selected
              $error = "Error! Please choose the size of your Mediterranean Pizza!";
            } elseif (empty($sauce) && isset($p3)) { //for no sauces selected
              $error = "Error! Please select the sauce for your Mediterranean Pizza and if you don't want sauce select 'No sauce'!";
            } elseif (empty($noffpizzas) && isset($p3)) { //for no quantity selected
              $error = "Error! Please select the quantity of your Mediterranean Pizza(s)!";
            }


            // for personal info
            elseif (empty($fname)) { //for first name
              $error = "Error! Your first name is required!";
            } else if (empty($lname)) { //for last name
              $error = "Error! Your last name is required!";
            } else if (empty($email)) { //for email
              $error = "Error! Your email is required!";
            } else if (empty($phonenumber)) { //for phone number
              $error = "Error! Your phone Number is required!";
            } else if (empty($address)) { //for address
              $error = "Error! Your address is required!";
            } else {
          ?>

              <script>
                alert('Your order was submitted successfully!'); //this message will be displayed if the formis submitted with no errors.
              </script>

          <?php
            }
          }



          ?>
          <div class="error">
            <?php echo "<p>$error</p>"; ?>
          </div>



        </div>
      </section>
    </form>

    <!-- this is the information displayed which is inputted in the form -->
    <section class="php">
      <h3>YOUR ORDER SUMMARY:</h3>
      <h4>Name: </h4><?php echo "$fname $lname"; ?>
      <br>
      <h4>Email: </h4><?php echo "$email"; ?>
      <br>
      <h4>Phone Number: </h4><?php echo "$phonenumber"; ?>
      <br>
      <h4>Address: </h4><?php echo "$address"; ?>
      <br>
      <h4>Pizza(s): </h4><?php echo "$p1$noofpizzas  $p2$nofpizzas  $p3$noffpizzas"; ?>
      <br>
      <h4>Size: </h4><?php echo "$siz $sz $size"; ?>
      <br>
      <h4>Base Sauce: </h4><?php echo "$sau  $sauc  $sauce"; ?>
      <br>
      <h4>Extra Toppings: </h4><?php echo "$toppings1  $toppings2  $toppings3"; ?>
      <br>
      <h4>Additional Instructions: </h4><?php echo "$query"; ?>

      <!-- end of php -->

    </section>
  </main>
  <footer>
    <p>THANKS FOR VISITING OUR PAGE!!!</p>
  </footer>
</body>

</html>
<!-- end of the html -->
