<?php
session_start();
if(isset($_REQUEST["actn"]) && $_REQUEST["actn"] == "logout") {
	//user pressed logout in menu, unset session
	$_SESSION["isloggedin"] = false;}
?>

    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Simple PHPH login</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="form">
            <div class="thumbnail"><img src=""/></div>
            <form class="login-form" role="form" action="content/index.php" method="post">
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                <button>Login</button>
                <?php
							if(isset($_SESSION["err"]) && $_SESSION["err"] == true) {
								
									?>
                    <p style="color:red;">Wrong Username or Password.</p>
                    <?php
							
							}
							?>
            </form>
        </div>
</body>
    </html>