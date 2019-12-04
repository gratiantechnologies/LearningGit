<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<link type="text/css" rel="stylesheet" href="css\kitchen.css">
<form action="kitchen.php" method="post">
  <h1>kitchen Room</h1>
   </form> 
 <div class="text">  
<?php
  $things = ["Stove", "Wooden spoon", "Spatula", 
  "Tongs", "Peeler", "Measuring cups","Chopping board","Knife","Oven"];
  $thingsLen = count($things);
  
  $i = 0;
  while ($i < $thingsLen)
  {
      echo $things[$i] ."<br>";
      $i++;
  } 
?>
</div>
<br>
<h2>
<a href="home1.php">Home</a>   </h2>
<br>
<div class="footer">
      <h2> <a href="kids.php">Back</a> </h2>
</div>
</body>
</html>