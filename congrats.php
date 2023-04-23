<html>
    <head>
        <title>You Won</title>
    </head>
    <style>
        p{
            font-weight: 600;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
           font-size: 48px;
           margin-top:8%;
        }
        img {
            height:250px;
            width:400px;
            margin-bottom: -350px;
            margin-left: 15%;;
        }
        body{
            width:100%;
            height:100%;
            background: url("https://t3.ftcdn.net/jpg/05/36/86/24/360_F_536862429_Fi8G9HLngW43r9OKlhJTIWPx6PmseMHL.jpg");
            background-size: cover;
             overflow: hidden;
            }
            button{
    background-color: #04AA6D;
    color: black;
    padding: 14px 20px;
    margin: 8px 0;
    margin-top:-45px;
    font-size:20px;
    border: none;
    cursor: pointer;
    width: 20%;
    opacity: 0.9;
  }
    </style>
    
    <body>
    <form method="post" action="update_points.php">
          <input type="hidden" name="current" id="current-input">
         
      


        <center>
        <p>
        

            Congratulations!!!<br>
            You have unlocked the treasure box.<br>
            Well Done!</p>
            <button type="submit">OK</button>
            <!--<script>
                var current=localStorage.getItem("current");
                document.write('<p style ="color:white;font-size:20px;"<strong>Your total points are :  </strong></p>',current)
             </script>-->
             <script>
            // var current = localStorage.getItem("current");
            var current = localStorage.getItem("current");
  document.getElementById('current-input').value = current;

             document.write('<p style ="color:aliceblue;font-size:20px;margin-top:-30px;margin-right:-70%;"<strong>Your total points are :'+current+'</strong></p>');
             if (current==500){
                document.write('<p style ="color:white;font-size:20px;align:left;margin-top:-20px;margin-right:-70%;>"<br>Soft Skills obeserved:<br>Curiosity<br>Presence of mind<br>Eye for detail<br>Time management<br>Perseverance</p>');
             }
             else  if (current==450){
                document.write('<p style ="color:white;font-size:20px;align:left;margin-top:-20px;margin-right:-70%;>"<br>Soft Skills obeserved:<br>Curiosity<br>Presence of mind<br>Eye for detail<br>Time management</p>');
             }
             else if (current==400){
                document.write('<p style ="color:white;font-size:20px;align:left;margin-top:-20px;margin-right:-70%;>"<br>Soft Skills obeserved:<br>Curiosity<br>Presence of mind<br>Eye for detail</p>');
             }
             else if (current==350){
                document.write('<p style ="color:white;font-size:20px;align:left;margin-top:-20px;margin-right:-70%;>"<br>Soft Skills obeserved:<br>Curiosity<br>Presence of mind</p>');
             }
             else if (current==300){
                document.write('<p style ="color:white;font-size:20px;align:left;margin-top:-20px;margin-right:-70%;>"<br>Soft Skills obeserved:<br>Curiosity</p>');
             }
             else if (current==200){
                document.write('<p style ="color:white;font-size:20px;align:left;margin-top:-20px;margin-right:-70%;>"<br>Soft Skills obeserved:<br>Curiosity</p>');
             }
             
            
            </script>

            <img src="https://img.freepik.com/premium-photo/open-ancient-treasure-chest-old-background_488220-55747.jpg">
            </center>
            </form>
    </body>
</html>