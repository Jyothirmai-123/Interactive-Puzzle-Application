<?php
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "elitmus";

$conn = mysqli_connect($servername, $username, $password, $dbname);
      if(isset($_POST['submit']))
            {  
                 session_start();
                 $name = $_POST["n"];  
                 $sname = $_POST["sn"];
                 $email = $_POST["em"];
                 $pwd = $_POST["pwd"];
                
                $sql= "select * from users where email='$email'";
                $upload = mysqli_query($conn,$sql);
                
                if(mysqli_num_rows($upload)>0)
                {
                  header("Location:loginpg.php");   
                }   
                else{
                       
                  $sql = "INSERT INTO users(name,surname, email,password,Points)
                  VALUES ('$name','$sname','$email','$pwd',0)";
                  
                
                  if ($conn->query($sql) === TRUE) {
                    echo "<b>New record created successfully</b><br>";
                    header("Location:storypg.html"); 
                  } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                  }
                        
                    }
            }
 
  $conn->close();
  $_SESSION['name']=$name;
  $_SESSION['surname']=$sname;
  $_SESSION['email']=$email;
  $_SESSION['pwd']=$pwd;
  
?>
