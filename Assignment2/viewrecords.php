<!--
NAME : Aarsh Parimal Patel
Semester-2
Assignment#2 -->

<!-- The below is the code for our View Records Page -->
<?php
// Including our database file to make connection
include 'database.php';
$customerObj = new database();
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <!-- adding the metadata -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Records</title>
  <meta name="description" content="DonationRecords">
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
    <section>


      <!-- This will be displayed on our View Records page along with the stored data in a table -->
      <h1>Records:</h1>
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Email</th>
            <th>PhoneNo</th>
            <th>Birthdate</th>
            <th>Amount</th>
          </tr>
        </thead>
        <tbody>
          <!-- the below code will display our data as inputted by the user -->
          <?php
          $customers = $customerObj->displayData();
          foreach ($customers as $customer) {
          ?>
            <tr>
              <td><?php echo $customer['ID'] ?></td>
              <td><?php echo $customer['FirstName'] ?></td>
              <td><?php echo $customer['LastName'] ?></td>
              <td><?php echo $customer['Email'] ?></td>
              <td><?php echo $customer['PhoneNo'] ?></td>
              <td><?php echo $customer['Birthdate'] ?></td>
              <td><?php echo $customer['Amount'] ?></td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </section>
  </main>

  <!-- adding out footer -->
  <footer>
    <section>
      <h2>END OF THE PAGE</h2>
    </section>
  </footer>
</body>

</html>
<!-- End of code for our View Records page -->
