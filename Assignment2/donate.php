<!-- NAME: AARSH PARIMAL PATEL -->
<!-- STUDENT ID: 200520260 -->
<!-- Assignment 2 -->

<!-- This is the code for the Donation page of our website -->
<?php
//to include the database file
include 'database.php';
$customerObj = new database();
if (isset($_POST['submit'])) {
  $customerObj->insertData($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <!-- adding the metadata -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Donation</title>
  <meta name="description" content="Donation">
  <meta name="robots" content="noindex,nofollow">
  <link rel="stylesheet" href="./css/style.css">
  <!-- providing the link for the fonts selected from google fonts -->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

</head>

<!-- adding our body -->

<body>

  <header>


    <!-- adding logo for the header -->
    <div class="headerlogo">
      <a href="index.php">
        <img src="./img/headerlogo.jpg" alt="logo"></a>
    </div>

    <!-- adding a heading to our page -->
    <div class="heading">
      <h1>NGO</h1>
    </div>

    <!-- adding nav to give links to our other webpages -->
    <nav>
      <ul>
        <li>
          <a href="index.php">Home</a>
        </li>
        <li>
          <a href="donate.php">Donate</a>
        </li>
        <li>
          <a href="viewrecords.php">View Records</a>
        </li>

      </ul>
    </nav>
  </header>


  <main>

    <section class="personalinfo">

      <!--  adding if statements to our php-->
      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //creating our variables
        $fname = trim($_POST['FirstName']);
        $lname = trim($_POST['LastName']);
        $email = trim($_POST['Email']);
        $phonenum = trim($_POST['PhoneNo']);
        $birthdate = trim($_POST['Birthdate']);
        $amt = trim($_POST['Amount']);

        // adding variable for errors
        $error = "";
        if (empty($fname)) {  // First Name
          $error = "Your First name is required!";
        } else if (empty($lname)) { // Last Name
          $error = "Your Last name is required!";
        } else if (empty($email)) { // Email
          $error = "Your email address is required!";
        } elseif (!preg_match("/^[_.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+.)+[a-zA-Z]{2,6}$/i", $email)) {
          $error = "Please use the correct format for email!";
        } elseif (empty($phonenum)) { //Phone number
          $error = "Please enter a phone number!";
        } elseif (strlen($phonenum) != 10) {
          $error = "Your phone number must be 10 characters long!";
        } elseif (empty($birthdate)) { //Birth Date
          $error = "Please input your birth date!";
        } elseif (empty($amt)) { //Amount
          $error = "Please enter any amount to donate!";
        } else {
      ?>
          <!-- This will display a message when the form is submitted successfully -->
          <script>
            alert('Thanks for donating!');
          </script>
      <?php
        }  // continuing php till the end brackets
      }

      ?>



      <h2>DONATE HERE!</h2>


      <!-- adding form to add input elements for our donation form -->
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

        <!-- POST method is a secure method -->
        <h4>Fill out this form to donate:</h4>
        <br>
        <!-- adding textboxes -->
        <label for="fn">First Name:</label>
        <input type="text" name="FirstName" id="fn" placeholder="Please enter your first name">
        <br>
        <br>
        <label for="ln">Last Name:</label>
        <input type="text" name="LastName" id="ln" placeholder="Please enter your last name">
        <br>
        <br>
        <label for="mail">E-mail:</label>
        <input type="text" name="Email" id="mail" placeholder="Please enter your email address">
        <br>
        <br>

        <!-- adding telephone input for phone number. -->
        <label for="phno">Phone Number:</label>
        <input type="tel" name="PhoneNo" id="phno" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" placeholder="Please enter your phone number">
        <br>
        <br>
        <!-- adding date input -->
        <label for="dte">Date of birth:</label>
        <input type="date" name="Birthdate" id="dte" placeholder="Please enter your birth date">
        <br>
        <br>
        <br>
        <label for="amount">Amount(US Dollars):</label>
        <input type="text" name="Amount" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" id="amount" placeholder="Please enter the amount you want to donate">
        <br>
        <br>

        <!-- adding submit button -->

        <input class="submitb" type="submit" value="Submit" id="Submitt">
        <!-- the below code is to display the error -->
        <div class="error">
          <?php echo "<p>$error</p>";
          ?>
        </div>
      </form>

    </section>
  </main>

  <!-- Here I have added the footer -->
  <footer>

    <section>
      <h2>END OF THE PAGE</h2>
    </section>

  </footer>

</body>

</html>
<!-- end of code for Donate page -->
