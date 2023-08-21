<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Remove Digits & Spaces</title>
    <style>
        .regn{
            width: 250px;
        } 
        .roll6{
            width: 70px;
        }
        .roll2{
            width: 30px;
        }
        .roll4{
            width: 50px;
        }
        table, td{
            border: 1px solid;
        }
    </style>   
</head>
<body>
    <form>
        <label>Your full name : </label>
            <input type="text" name="username" placeholder="name" required><br><br>
        <label>CU Roll No. : </label>
            <input type="number" class="roll6" name="roll6" placeholder="123456" required> -
            <input type="number" class="roll2" name="roll2" placeholder="12" required> -
            <input type="number" class="roll4" name="roll4" placeholder="1234" required><br><br>
        <label>CU Regn. No. : </label>
            <input type="text" class="regn" name="regn" placeholder="Registration No. (starts with 'CU_2022')" required><br><br>
        <label>Semester : </label>
            <select name="semester" style="width: 63px">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
            </select><br><br>
        <button type="submit" name="submit">Submit</button><br><br>
    </form>

<?php
    ini_set('display_errors',0);

    if( isset( $_REQUEST['submit'] ))
    {
        $username = $_REQUEST['username'];
        $roll6 = $_REQUEST['roll6'];
        $roll2 = $_REQUEST['roll2'];
        $roll4 = $_REQUEST['roll4'];
        $regn = $_REQUEST['regn'];
        $semester = $_REQUEST['semester'];
 
    if (str_contains($regn, 'CU-2022')) {   ?>
       
 <table>
    <tr>
        <td>Name</td>
        <td><?php echo $username ?></td>
    </tr>
    <tr>
        <td>Roll No.</td>
        <td><?php echo "$roll6-$roll2-$roll4" ?></td>
    </tr>
    <tr>
        <td>Regn No.</td>
        <td><?php echo $regn ?></td>
    </tr>
    <tr>
        <td>Semester</td>
        <td><?php echo "$semester" ?></td>
    </tr>
    <tr>
        <td>Academic Tear</td>
        <td>2022-23</td>
    </tr>
</table>

<?php }
        else{
            ?>  <script> alert("Start your Registration Number with 'CU_2022'"); </script>   <?php
        }
}  ?>
</body>
</html>