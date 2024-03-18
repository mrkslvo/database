<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $db_name = "gcc";

   $conn = new mysqli( $servername, $username, $password, $db_name, 3306);
   if ($conn-> connect_error)
   {
      die("Connection Failed" .$conn->connect_error);
   }
   echo "";

   if(isset($_POST['submit'])){
      $username = $_POST['username'];
      $password = $_POST['password'];
      

      $sql = "SELECT * FROM login_table where username = '$username' and password = '$password'";

      $result = mysqli_query($conn, $sql);

      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
         
      $count = mysqli_num_rows($result);
      if($count == 1){
         header("Location:welcome.php");
      }
      else {
         echo `
         <script>
            alert("Login Failed. Invalid username and passowrd");
            window.location.href = "index.php";
         </script>`;
      }
   }

?>