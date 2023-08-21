<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MidName</title>
</head>
<body>
    <form>
        <label>First Name : </label>
            <input type="text" name="firstname" placeholder="First Name" required><br><br>
        <label>Middle Name : </label>
            <input type="text" name="midname" placeholder="Middle Name"><br><br>
        <label>Last Name : </label>
            <input type="text" name="lastname" placeholder="Last name" required><br><br><br>
        <button type="submit" name="login" class="button">Submit</button>
    </form>

        <?php
            ini_set('display_errors',0);

            if( isset( $_REQUEST['login'] ))
            {
                $name=$_REQUEST['firstname'];
                $str=$_REQUEST['midname'];

                echo "Hii $name , ";

                if (empty($str)) {
                    echo "Your Middle name field is EMPTY !!! <br>";
                }
                else {
                    echo "Your Middle name is '$str' <br>";
                  }
            }
            
        ?>

</body>
</html>