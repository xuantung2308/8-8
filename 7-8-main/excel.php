<!DOCTYPE html>
<html lang="en">
     <head>
          <title>Xuất Excel</title>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" type="text/css" href="style.css">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
          <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
          <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     </head>

     <?php
        require('header.html');
     ?>

     <body>
        <form action="excel.php">
            <label>Từ: </label><input type="date" id="from"/> <label> -Đến</label><input type="date" id="to"/>
            <input type="submit" class="button"/>
        </form>
     </body>