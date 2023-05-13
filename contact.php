<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("includes/head-imports.php");?>
    <title>My first PHP page</title>
</head>

<body>

<?php include("includes/header.php");?>
<?php include("includes/navigation.php");?>

<div class="container" id="main-content">
	<h2>Contact Us</h2>
	<p>"Contact Us" conten goes here.  I'll stick with teh "lorem ipsum" as well, so that the footer isn't immediately following this text.</p>

	<p>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>
	<p>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>

    <br>

    <form action="submit.php" method="post">
        <h3>Fill in this form</h3>
    
        <label>First Name</label> <br>
        <input type="text" name='firstname'><br><br>
        <label>Last Name</label><br>
        <input type="text" name='lastname'><br><br>
        <input type="submit" value="Submit"><br>
    </form>
    </div>
    <?php include("includes/footer.php");?>

</body>

</html>