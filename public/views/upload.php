<!DOCTYPE html>
<head>
    <title>HOME PAGE</title>
    <link rel="stylesheet" type="text/css" href="public/css/home-style.css">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
    <div class="container">
        <div class="pasek">
            <a class="kostka" href="">
                <img src="public/img/stetting.svg">  
            </a>
            <a class="kostka" href="">
                <img src="public/img/logout.svg">
            </a>
            
            <img src="public/img/male-logo-z-napisem.svg" class="male-logo">
            
            <a class="kostka" href="https://www.instagram.com/" target="_blank">
                <img src="public/img/insta.svg">
            </a>
            <a class="kostka" href="https://www.facebook.com/" target="_blank">
                <img src="public/img/fb.svg">
            </a>
            
        </div>
        <div class="tresc" style="clear: both; width: 100%; height: auto;">
            <div class=galeria>
                <h1>UPLOAD</h1>
                <form action="addProject" method="post" enctype="multipart/form-data">
                    <?php
                    if(isset($messages)){
                        foreach($messages as $message){
                            echo $message;
                        }
                    }
                    ?>
                    <input name="title" type="text" placeholder="title">
                    <input name="file" type="file">
                    <button type="submit">SEND</button>
                </form>   
            </div>
        </div>
    </div>
</body>