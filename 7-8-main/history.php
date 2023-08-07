<!DOCTYPE html>
<html lang="en">
     <head>
          <title>Lich su</title>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" type="text/css" href="style.css">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     </head>
     <?php
        require('header.html');
     ?>
    <style>
        table,th,td{
            border: 1px solid black;
            border-collapse: collapse;	
        }
        th,td{
            text-align: center;
        }
        table{
            overflow-x: auto;
        }
        
        button{
               background-color: #04AA6D;
               height: 35px;
               border-radius: 10px;
          }
    </style>

    <body>
        <h1 style="padding: 5px;">Thông tin chỉ số BMI của bạn</h1>
        <table style="border: 1px; width: 80%  ">
            <tr>
                <th>No</th>
                <th>Ngày đo</th>
                <th>Cân nặng</th>
                <th>Chiều cao</th>
                <th>Chỉ số BMI</th>
                <th>Nhận xét về chỉ số BMI</th>
            </tr>
            <button type="button" style="position: fixed; bottom: 20px; right: 20px;">
                    Biểu đồ theo dõi
            </button>
        </table>
    </body>