<!DOCTYPE html>
<head>
    <title>REGISTER PAGE</title>
    <link rel="stylesheet" type="text/css" href="public/css/register-style.css">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="public/img/duze-logo-z-napisem.svg" class="respo">
        </div>
        
        <div class="login-container">
						<form class="register" action="register" method="POST">
							<?php
								if(isset($messages)){
									foreach($messages as $message) {
										echo $message;
									}
								}
							?>
							<input name="email" type="text" placeholder="email@email.com">
							<input name="password" type="password" placeholder="password">
							<input name="confirmedPassword" type="password" placeholder="confirm password">
							<input name="name" type="text" placeholder="name">
							<input name="surname" type="text" placeholder="surname">
							<input name="phone" type="text" placeholder="phone">
							<button type="submit">REGISTER</button>
						</form>
					</div>
       
    </div>
</body>