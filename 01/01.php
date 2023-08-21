<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hello</title>
</head>
<body>
    <form>
        <label>Username : </label>
            <input type="text" name="username" placeholder="username" required>
        <label>Password : </label>
            <input type="password" name="password" placeholder="password" required>
        <button type="submit" name="login" class="button">Submit</button>
    </form>

        <?php
            ini_set('display_errors',0);

            if( isset( $_REQUEST['login'] ))
            {
                $username=$_REQUEST['username'];
                $password=$_REQUEST['password'];
            }
            
        ?>
<P>Hello <?php echo strrev($username); ?></p>
</body>
</html>