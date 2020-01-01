
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<link type="text/css" rel="stylesheet" href="css\form.css"> 
<body>

   <form action="resume.php" method="post">
     <h2>Student Details</h2>
     <div id="wrapper">
     
        <div class="input-row">
        <label for="name">Name:</label>
        <input type="text" name="firstname" id="name1" placeholder="Enter firstname">   
        <input type="text" name="lastname" id="name2" placeholder="Enter lastname">
</div>
        <div class="input-row">
        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="Enter email">
</div>
        <div class="input-row">
        <label for="number">Tel No:</label>
        <input type="number" name="number" placeholder="Enter Phn No.">
</div>
        <div class="input-row">
        <label for="date">Date of Birth:</label>
        <input type="date" name="date" id="date" max="2020/12/31">
</div>
<div class="input-row">
        <label>Gender:</label>
        <input type="radio" name="gender" value="female">
        <label>Female</label>
        <input type="radio" name="gender"
        <?php if (isset($gender) && $gender=="male") echo "checked";?>
        value="male">
        <label>Male</label>
        <input type="radio" name="gender"
        <?php if (isset($gender) && $gender=="other") echo "checked";?>
        value="other">
        <label>Other</label>
</div>
<div class="input-row">
        <label>Marital Status:</label>
        <input type="radio" name="status"
        <?php if (isset($status) && $status=="single") echo "checked";?>
        value="single">
        <label>Single</label> 
        <input type="radio" name="status"
        <?php if (isset($status) && $status=="married") echo "checked";?>
        value="married">
        <label>Married</label>
</div>
<div class="input-row">
        <label for="nation">Nationality:</label>
        <input type="radio" name="nation" value="india">
        <label>India</label>  
</div>
<div class="input-row">
        <label for="address">Address:</label>
        <textarea id="address" name="message"></textarea>  
</div>
<div>
        <label for="education">Education:</label>
        <select>  
        <option value="Select1[]">Select</option>  
        <option value="ssc">SSC</option>  
        <option value="intermediate">INTERMEDIATE</option>  
        <option value="diploma">DIPLOMA</option>  
        <option value="btech">B.TECH</option>  
        <option value="mtech">M.TECH</option>  
        <option value="mba">MBA</option>  
        <option value="ca">CA</option>  
        </select>   
</div>
<div>
        <label for="myskills">My Skills:</label> 
        <select name="select2[]" size="3" multiple="multiple">  
        <option value="Select">Select</option> 
        <option value="web design">WEB DESIGN</option>  
        <option value="graphic design">GRAPHIC DESIGN</option>  
        <option value="logo design">LOGO DESIGN</option>  
        <option value="web development">WEB DEVELOPMENT</option>  
        <option value="marketing">MARKETING</option>  
        
        </select>   
</div>

<div align="center">
<input type="submit" name="submit" value="submit">
</div>
      </div>
</form> 

</body>
</html>
<?php
function pre_r( $array) {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
}
?>