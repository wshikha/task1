<?php
$dbhostname="localhost";
$dusername="root";
$dbpassword="";
$dbname="formdata";
$conn=mysqli_connect($dbhostname,$dusername,$dbpassword,$dbname);
$query="SELECT*FROM student";
$x=mysqli_query($conn,$query);
?>
<html>
    <head>

    </head>
    <body>
        <h1 style="text-align:center;">Student Records</h1>
        <table border style="text-align:center; padding:200px;">
            <thead style=" width:300px; background-color:pink; height:50px; margin:300px;">
                <tr>
                    <th style="width:300px;">Name</th>
                    <th style="width:300px;">Age</th>
                    <th style="width:300px;">DOB</th>
</tr>
</thead>
<tbody>
    <?php
    while($row = mysqli_fetch_assoc($x)){
        ?>
        <tr>
            <td style="height:40px;"><?= $row["Name"]?></td>
            <td style="height:40px;"><?= $row["Age"]?></td>
            <td style="height:40px;"><?=$row["DOB"]?></td>
            <?php
    }
    ?>
    </tbody>
    <table>
</body>
</html>