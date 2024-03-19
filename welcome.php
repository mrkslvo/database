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
         width: 100%;
         display: flex;
         justify-content: center;
         gap: 80rem;
         align-items: center;
         padding: 15px 0px;
         box-shadow:0 0 20px rgb(255,255,255, 0.20);
      }

      button{
         color: rgb(37,0,37);
         font-size: 1.2rem;
         cursor: pointer;
         border-radius: 5px;
         border: 2px solid rgb(37,0,37);
         transition: all .5s;
         display: flex;
         justify-content: center;
         align-items: center;
      }

      button a{
         color: rgb(37,0,37);
         transition: all .5s;
         width: 100%;
         height: 100%;;
         padding: 5px 10px;
         border-radius: 5px;
      }

      button:hover{
         background-color: transparent;
         color: white;
         border: 2px solid white;
      }

      button a:hover{
         color: white;
      }

   </style>
   <header>
      <h1 class="head">Welcome 
      </h1>
      <button><a href="loginpage.php">logout</a></button>
   </header>


</body>
</html>