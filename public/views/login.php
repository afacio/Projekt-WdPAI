<!DOCTYPE html>
<head>
    <title>LOGIN PAGE</title>
    <link rel="stylesheet" type="text/css" href="public/css/login-style.css">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">

</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="public/img/duze-logo-z-napisem.svg" class="respo">
        </div>
        <div class="logo container">
            <form class="login" action="login" method="POST" style="opacity: 0.5;">
                <div class="messages">
                    <?php
                    if(isset($messages)){
                        foreach($messages as $message) {
                            echo $message;
                        }
                    }
                    ?>
                </div>
                <input name="email" type="text" placeholder="email@email.com">
                <input name="password" type="password" placeholder="password">
                <button type="submit">LOGIN</button>
                <div class="register">
                    Not a member?
                    <a href="register" title="Signup page">
                        Signup now
                    </a>
            </form>
        </div>
    </div>

</body>