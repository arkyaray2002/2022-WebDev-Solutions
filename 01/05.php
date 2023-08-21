<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BioData</title>
</head>
<body>
    <form>
        <label>Your full name : </label>
            <input type="text" name="username" placeholder="name" required><br><br>
        <label>Date of Birth : </label>
            <input type="number" name="date" placeholder="date" min="1" max="31" required>
            <input type="number" name="month" placeholder="month" min="1" max="12" required>
            <input type="number" name="year" placeholder="year" min="1" max="2023" required><br><br>
        <label>Your School (upto 10th) : </label>
            <input type="text" name="school1" placeholder="10th school" required><br><br>
        <label>Your School (upto 12th) : </label>
            <input type="text" name="school2" placeholder="12th school" required><br><br>
        <label>Your College : </label>
            <input type="text" name="college" placeholder="college" required><br><br>
        <label>Your Highest Deegree : </label>
            <input type="text" name="degree" placeholder="Education" required><br><br>
        <label>Enter about yourself : </label><br>
            <textarea name="about" placeholder="Write something about yourself" rows="10" cols="50" required></textarea><br>
        <button type="submit" name="submit">Submit</button><br><br>
    </form>

<?php
    ini_set('display_errors',0);

    if( isset( $_REQUEST['submit'] ))
    {
        $username = $_REQUEST['username'];
        $date = $_REQUEST['date'];
        $month = $_REQUEST['month'];
        $year = $_REQUEST['year'];
        $school1 = $_REQUEST['school1'];
        $school2 = $_REQUEST['school2'];
        $college = $_REQUEST['college'];
        $degree = $_REQUEST['degree'];
        $about = $_REQUEST['about'];
    }
?>

    <p>Hiii, I'm <?php echo $username ?>. My Date of Birth is <?php echo "$date/$month/$year" ?>. I've studied in the school <?php echo $school1 ?> till class 10 & then went to the school <?php echo $school2 ?> to read upto class 12. Later I joined in <?php echo $college ?> for higher studies. I've completed the deegree <?php echo $degree ?>. <?php echo $about ?></p>
    
</body>
</html>