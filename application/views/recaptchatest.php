<html>
	<head>
		<title>Captcha</title>
		<script src='https://www.google.com/recaptcha/api.js'></script>
	</head>
		<body>
				<form action="<?= base_url(); ?>welcome/recaptchatestsubmit" method="post">
					<input type="text" name="name">
					<div class="g-recaptcha" data-sitekey="6LfoxWUUAAAAANw8NOhBWD8u5Lir8AfbSTbGZ6HU"></div>
					<input type="submit">
				</form>
		</body>
</html>