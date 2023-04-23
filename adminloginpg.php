<?php

        session_start();
        ?>
  <html>
    <head>
        <title>User or Admin</title>
        <style>
        input[type=email], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  
}
input[type=submit]{
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
  opacity: 0.9;
}
h1{
    color:aliceblue;
}
body{
            width:100%;
            height:100%;
            background:url("https://img.freepik.com/free-vector/watercolor-halloween-background_52683-43698.jpg");

            background-size: cover;
            overflow: hidden;
            }
</style>
    </head>
    <body>
    
    <div style="position: relative;">
                
                


    </div>
    
    
        <form method ='POST'>
            <center>
               
        <h1>Welcome to login page</h1>
        
            <div class="log">
            <table cellspacing="10">
                <div><tr><td>Email:</td><td><input type='email' name = 'email'></td></div> <br>
                 <div><tr><td>Password:</td><td><input type='password' name= 'pwd'></td></div> <br> 
            </table>
                 <div><input type='submit' name='submit' value="LOGIN"></div>
                 
            </div> 
        
        </center>
        </form>
        
        <?php
            $host = 'localhost';
            $username = 'root';
            $password = '';
            $dbname = 'elitmus';
        
            $conn = mysqli_connect($host, $username, $password, $dbname);
        
            
            
            if(isset($_POST['submit']))
            {  
                
                $email = $_POST['email'];
                $pwd = $_POST['pwd'];
                
                if($email=="jyothirmaiv@gmail.com" and $pwd="jyo@26"){
                        header("Location:adminpg.html");   
                       
                    }
                   
                else{
                       ?>
                        <script>alert("sorry ,user credentials didn't match")</script> <?php
                        
                        
                    }
            }
            ?>
            </div>
        
        </body>
        
</html>

