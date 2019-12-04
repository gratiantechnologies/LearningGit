
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DiningRoom</title>
</head>
<body>
<link type="text/css" rel="stylesheet" href="css\dining.css">
<form action="diningroom.php" method="post">
  <h1>Dining Room</h1>
   </form> 
   
</body>
</html>
<div class="item">
<?php 
 $Array = ["Table", "Chairs", "Sideboard", "Wall clock", "Buffer lamps", "Artwork","Tablecloths"];
 $arrayLength = count($Array);
 
 $i = 0;
 while ($i < $arrayLength)
 {
     echo $Array[$i] ."<br>";
     $i++;
 }
  
    ?>
</div>
<br>
  <html>
 <h2>
  <a href="home1.php">Home</a> </h2>
  <br>
  <div class="footer">
      <h2> <a href="living.php">Next</a> </h2>
</div>
</link>
  </html>
    
