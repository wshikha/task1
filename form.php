<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="store.php" method="post">
        <div class="head"><h1> Name:</h1></div>
<div class="box"><input type="text" name="name" class="box"></div>
<div class="ag"><h1> Age:</h1></div>
<div><input type="text" name="age" class="agebox" id="age"></div>
<div class="db"> <h1>DOB:</h1></div><div><input type="date" name="date" id="dob" class="datebox" onchange="calculateAge()"></div>

        <div class="submit"><input type="Submit" value="submit" name="submit" class="submit"></div>
</form>
    
<script>


function calculateAge(){
    let dob = document.getElementById("dob");
    let age = document.getElementById("age");
    let dobirth = new Date(dob.value);
    var month_diff = Date.now() - dobirth.getTime();  
    var age_dt = new Date(month_diff);   
    var year = age_dt.getUTCFullYear();        
    var ageval = Math.abs(year - 1970); 
    age.value = ageval;
}
</script>
</body>
</html>