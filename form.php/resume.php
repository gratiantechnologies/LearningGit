
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<link rel="stylesheet" href="css/resume.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<body>
<div class="container"> 
  <div class="main">
    <div class="part1">
      <div>
        <img src="profile.png">
      
        <label>CONTACT</label>
       
        <ul>
        <?php
        if (isset($_POST['submit'])) {
          $telno = $_POST['number'];
          $email = $_POST['email'];
          $address = $_POST['message'];
          echo $telno . "<br>";
          echo $email . "<br>";
          echo $address . "<br>";
        }
        ?>
        </ul>
       
      </div>
      <div>
          <label>MY SKILLS</label>
          </div>
          <div>
          <ul>
          <?php
            $selectvalue=$_POST['select2'];
            foreach ($selectvalue as $value)
                echo $value."<br>"; 
                ?>
                </ul>
      </div>
<br>
      <div>
        <i>TEAMWORK</i><br>
        <i>LOYALTY</i><br>
        <i>INTEGRITY</i><br>
        <i>ENGLISH</i><br>
        <i>FRANC</i><br><br><br>
</div>
      <div>
          <label>REFERENCE</label>
        
         <ul>
          <dt>EDWARD CAMBIASO</dt>
          <dd>Ceo Company Name</dd>
          P: +62 3345 6699   
          L:mail@edwardcambriaso.com 
          <dt>BETTIE LAVEYA</dt>
          <dd>Ceo Company Name</dd>
          P: +62 3345 6699   
          L: mail@bettielaveya.com
         </ul> 
      </div>
  
    </div>

    <div class="part2">
    <div class="row1">
      
       
        <?php
        if (isset ($_POST['submit'])) {
          $name1 = $_POST['firstname'];
          $name2 = $_POST['lastname'];
          echo $name1 . " " . $name2;
        }
        ?>
        
      
      </div>
     <div class="row2">
        <dt>PROFILE INFO</dt>
        
      </div>
      <div class="row3">
        <dt>WORK EXPERIENCE</dt>
      </div> 
      <div class="row4">
        <dt>MY EDUCATION</dt>
      </div> 
</div>
  </div>
</div>
</body>
</html>
