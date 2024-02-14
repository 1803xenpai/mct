<?php

?>
<html>
    <head>
        <style>
            #top-panel{
                background-color: rgb(238, 77, 45);
                margin: 0;
            }
            .vertical-menu {
              width: 100%;
             
            }
           
            .vertical-menu ,.first{
              font-size: 30px;
            }
            
            .vertical-menu a {
              background-color: #eee;
              color: black;
              display: block;
              padding: 12px;
              margin-bottom: 5px;
              text-decoration: none;
            }
            
            .vertical-menu a:hover {
              background-color: #ccc;
            }
            img{
                height:20%;
            }
            
            
           
            </style>
    </head>
    <body>

<div id="top-panel">
    <h1>Shopee</h1>
</div>
<div class="vertical-menu">
  <a href="#"> <img src="images/keyboard.PNG"><label> ₱ </label><label id="first"></label></a>
  <a href="#"> <img src="images/mouse.PNG"><label> ₱ </label><label id="second"></label></a>
  <a href="#">Link 2</a>
  <a href="#">Link 3</a>
  <a href="#">Link 4</a>
  <p>Total:  <label id="answer"></label></p>
</div>
    <script>
    
        {
          var numOne, numTwo, sum,total;
          numOne = 669;
          numTwo =  99 ;
       
          sum =  numOne + numTwo;
          total =  "₱ "+ sum;
          document.getElementById("first").innerHTML = numOne;
          document.getElementById("second").innerHTML = numTwo;
          document.getElementById("answer").innerHTML = total;
        
        }
        </script>
    </body>
</html>
