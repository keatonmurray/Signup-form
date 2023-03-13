<!DOCTYPE html>

<html>
	<head>
		<title>Create an account</title>
		<link rel="stylesheet" href="Public/Style.css">
	</head>
	<body id="index">
        <form name="signup" action="" method="POST">
            <h2>SIGN UP</h2><br>
            <label class="uname">Name</label><br>
            <input class="input" type="text" name="name"><br>
	         <small>
	         	<?php echo $name ?? '' ?>
	         </small><br><br>
            <label class="uname">Email</label><br>
            <input class="input" type="email" name="email"><br>
           	<small>
           		<?php echo $email ?? '' ?>
           	</small><br><br>
            <label class="uname">Username</label><br>
            <input class="input" type=text name ="username"><br>
            <small>
            	<?php echo $username ?? '' ?>
        	</small><br><br>
            <label class="pass">Password</label><br>
            <input class="input" type="password" name="password"><br>
            <small>
            	<?php echo $password ?? '' ?>
        	</small><br><br>
            <p><a href="">Already have an account?</a></p>
            <button class="btn" type="submit" name="submit">Signup</button>
            <button class="btn" type="submit" name="back"><a href="">Cancel</a></button>
        </form>
    </body>
</html>
