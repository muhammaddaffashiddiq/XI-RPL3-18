<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Instagram</title>
		<link rel="stylesheet" href="style_.css">
	</head>
	<body>
		<div id="con">
			<div class="logo">
				Instagram
			</div>
			<div class="text">
			Congratulations <a>
			<?php echo $_POST["fullname"]; ?></a>!<br> You has been singed Up to instagram with an username <a>@<?php echo $_POST["user"]; ?></a>, please check<br> email at <a><?php echo $_POST["email"]; ?></a> to activate your account.
		</div>
	</body>
</html>