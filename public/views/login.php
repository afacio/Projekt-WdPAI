<!DOCTYPE html>
<head>
    <title>LOGIN PAGE</title>
    <link rel="stylesheet" type="text/css" href="public/css/login-style.css">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="public/img/duze-logo-z-napisem.svg" class="respo">
        </div>
        <div class="logo container">
					<form class="login" action="login" method="POST">
						<?php
								if(isset($messages))
								{
									foreach($messages as $message) 
									{
										echo $message;
									}
								}
						?>
						<input name="email" type="text" placeholder="email@email.com">
						<input name="password" type="password" placeholder="password">
						<a href="register">Nie masz konta? Zarejestruj się</a>
						<button type="submit">LOGIN</button>
					</form>
				</div>    
    </div>

</body>