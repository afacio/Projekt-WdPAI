<!DOCTYPE html>
<head>
    <title>HOME PAGE</title>
    <link rel="stylesheet" type="text/css" href="public/css/project.css">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
    <div class="container">
        <div class="pasek">

            <a href="home">   <img src="public/img/male-logo-z-napisem.svg" class="male-logo"></a>

        </div>
        <div class=galeria>
            <div class="tekst">
                Dodaj swoje ulubione memy do kolekcji</br>i podziel sie nimi z innymi
            </div>
            <div class="upload">
                <form action="addProject" method="POST" ENCTYPE="multipart/form-data">
                    <div class="messages">
                        <?php
                        if(isset($messages)){
                            foreach($messages as $message) {
                                echo $message;
                            }
                        }
                        ?>
                    </div>
                    <input class="title" name="title" type="text" placeholder="title">


                    <input class="file" type="file" name="file"/><br/>
                    <button type="submit">send</button>
                </form>
            </div>

        </div>

    </div>
</body>