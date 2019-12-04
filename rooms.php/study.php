<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<link type="text/css" rel="stylesheet" href="css\study.css">
<form action="study.php" method="post">
  <h1>Study Room</h1>
   </form> 
 <div class="text">  
<?php
  $Books = ["Book safe with lock", "Bed Risers", "Underbed Storage", 
  "Storage Ottoman", "Big lamps", "Water filter","Ethernet"];
  $bookLen = count($Books);
  
  $i = 0;
  while ($i < $bookLen)
  {
      echo $Books[$i] ."<br>";
      $i++;
  } 
?>
</div>
<br>
<h2>
<a href="home1.php">Home</a> </h2>
<br>
<div class="footer">
      <h2> <a href="kids.php">Next</a> </h2>
</div>
</body>
</html>