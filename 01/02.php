<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Half a string</title>
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

            $l = strlen($str);
            for ($i= 0; $i < $l/2; $i++)
            {
                echo $str[$i];
            }        
        ?>

</body>
</html>