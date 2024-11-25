<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $cpass = $_POST['cpass'];
      $showalert=false;
      $showerror=false;
      // Submit these to a database

      // Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "loginsystemdb";
      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        $existSql = "SELECT * FROM `loginid` WHERE emailid = '$email'";
        $result = mysqli_query($conn, $existSql);
        $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
        // $exists = true;
        echo "Email ID Already Exists";
        $showerror=true;
    }
    else{
        if($pass==$cpass){
        $sql = "INSERT INTO `loginid` ( `username`, `emailid`, `password`) VALUES ('$name', '$email', '$pass');";
        $result = mysqli_query($conn, $sql);
        echo "BOTH PASSWORDS DOES NOT MATCH !";
        $showalert=true;
      }
      else
      {
        $showerror=true;
      }
    }
        if($showalert==true){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your entry has been submitted successfully! And we are happy to inform that your account is made!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }
        if($showerror==true){
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We regret to inform account not made!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }
      
      

    }

} 

?>
