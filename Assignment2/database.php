<!-- NAME: AARSH PARIMAL PATEL -->
<!-- Semester-2 -->
<!-- Assignment 2 -->

<!-- The below code will be used to make connection to our database-->
<?php
class database
{
    public $servername = "172.31.22.43";
    public $username = "Aarsh200520260";
    public $password = "iscV0d0erO";
    public $database = "Aarsh200520260";
    public $databaseConnect;


    // creating our connections
    public function __construct()
    {
        $this->databaseConnect = new mysqli($this->servername, $this->username, $this->password, $this->database);
        if (mysqli_connect_error()) {
            trigger_error("Failed to connect:" . mysqli_connect_error());
        } else {
            return $this->databaseConnect;
        }
    }

    // the below is the function to insert data
    public function insertData($post)
    {
        $fname = $this->databaseConnect->real_escape_string(($_POST['FirstName']));
        $lname = $this->databaseConnect->real_escape_string(($_POST['LastName']));
        $email = $this->databaseConnect->real_escape_string(($_POST['Email']));
        $phonenum = $this->databaseConnect->real_escape_string(($_POST['PhoneNo']));
        $birthdate = $this->databaseConnect->real_escape_string(($_POST['Birthdate']));
        $amt = $this->databaseConnect->real_escape_string(($_POST['Amount']));
        $query = "INSERT INTO Donation_Records(FirstName,LastName,Email,PhoneNo,Birthdate,Amount) VALUES('$fname','$lname','$email','$phonenum','$birthdate','$amt')";
        $sql = $this->databaseConnect->query($query);
        if ($sql == true) {
            header("Location:index.php?msg1=insert");
        } else {
            echo "Error while adding the record";
        }
    }

    //This will fetch all the data (or READ)
    public function displayData()
    {
        $query = "SELECT * FROM Donation_Records";
        $results = $this->databaseConnect->query($query);
        if ($results->num_rows > 0) {
            $data = array();
            while ($row = $results->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        } else {
            echo "No records found!";
        }
    }
}


 //  end of the code -->
