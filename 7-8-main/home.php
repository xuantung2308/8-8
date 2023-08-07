<!DOCTYPE html>
<html lang="en">
     <head>
          <title>Home</title>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" type="text/css" href="style.css">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
          <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
          <?php
               require('header.html');
          ?>
     </head>

     <script>
          function increaseValue($number) {
               var value = parseInt(document.getElementById($number).value, 10);
               value = isNaN(value) ? 0 : value;
               value++;
               document.getElementById($number).value = value;
          }

          function decreaseValue($number) {
               var value = parseInt(document.getElementById($number).value, 10);
               value = isNaN(value) ? 0 : value;
               value < 1 ? value = 1 : '';
               value--;
               document.getElementById($number).value = value;
          }

          function cal($wnumber, $hnumber){
               $bmi = $wnumber/($hnumber*$hnumber);    
          }
     </script>

     <body>
               <div class="row justify-content-center" style="width: 70%;">
                    <h1 style="font-size: 50px;">Công cụ tính BMI</h1>
                    <div class="sub-heading" style="text-align: center; font-size: 16px">Tính chỉ số BMI để biết tình trạng sức khỏe của bạn</div><br>
                    <div class="col-sm-6">
                         <div class="col-lg-5">
                                   <p class="title">Chiều cao</p>
                                   <div class="div_inum">
                                        <div class="value-button" id="decrease" onclick="decreaseValue('hnumber')" value="Decrease Value" style="margin-right: auto;">-</div>
                                        <input class="innum" type="number" id="hnumber" value="0" />
                                        <div class="value-button" id="increase" onclick="increaseValue('hnumber')" value="Increase Value" style="margin-left: auto;">+</div> 
                                   </div>
                         </div>
                         <div class="col-sm-2"></div>
                         <div class="col-lg-5">
                                   <p class="title">Cân nặng</p>
                                   <div class="div_inum">
                                        <div class="value-button" id="decrease" onclick="decreaseValue('wnumber')" value="Decrease Value" style="margin-right: auto;">-</div>
                                        <input class="innum" type="number" id="wnumber" value="0" />
                                        <div class="value-button" id="increase" onclick="increaseValue('wnumber')" value="Increase Value" style="margin-left: auto;">+</div>
                                   </div> 
                         </div>
                    </div>
                    <input type="button" onclick="cal('wnumber', 'hnumber')"/>
               </div>
     </body>
</html>

