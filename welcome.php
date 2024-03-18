<?php
   include("loginconnect.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>WELCOME</title>
</head>
<body>
   
   <style>
      *{
         padding: 0;
         margin: 0;
         color: white;
         font-weight: bold;
         text-decoration: none;
         list-style-type: none;
      }

      body{
         width: 100%;
         height: 100vh;
         background-color: rgb(37,0,37);
      }

      header{
         width: 95%;
         display: flex;
         justify-content: space-between;
         align-items: center;
         margin: 20px auto;

         
      }

      button{
         color: rgb(37,0,37);
         padding: 4px 10px;
         font-size: 1.2rem;
         cursor: pointer;
         border-radius: 5px;
         border: none;
      }

      button a{
         color: rgb(37,0,37);
      }

   </style>
   <header>
      <h1 class="head">Welcome 
      </h1>
      <button><a href="loginpage.php">logout</a></button>
   </header>


</body>
</html>