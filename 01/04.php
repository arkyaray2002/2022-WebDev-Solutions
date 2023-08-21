<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Remove Digits & Spaces</title>
</head>
<body>
    <form>
        <label>Enter a text : </label><br>
            <textarea name="text" placeholder="Place your text here" rows="10" cols="50" required></textarea><br>
        <button type="submit" name="submit">Submit</button><br><br>
    </form>

<?php
    ini_set('display_errors',0);

    if( isset( $_REQUEST['submit'] ))
    {
        $str=$_REQUEST['text'];
    }

    $array = array(0,1,2,3,4,5,6,7,8,9);
    $result1 = str_replace($array,'', $str);
    $result = str_replace(' ','', $result1);?>

    <p style="color:red">your inputed text, without Space & digit is :</p>

    <?php echo $result; ?>
</body>
</html>