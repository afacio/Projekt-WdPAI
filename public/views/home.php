<!DOCTYPE html>
<head>
    <title>HOME PAGE</title>

    <link rel="stylesheet" type="text/css" href="public/css/home.css">


    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script type="text/javascript" src="./public/js/search.js" defer></script>
    <script type="text/javascript" src="./public/js/statistics.js" defer></script>

</head>
<body>
    <div class="container">

        <div class="pasek">
            <a class="kostka" href="addProject">
                <img src="public/img/plus.svg">
            </a>
            <a class="kostka" href="/logout">
                <img src="public/img/logout.svg">
            </a>
            <a href="home">
                <img src="public/img/male-logo-z-napisem.svg" class="male-logo">
            </a>

            <a class="kostka" href="https://www.instagram.com/" target="_blank">
                <img src="public/img/insta.svg">
            </a>
            <a class="kostka" href="https://www.facebook.com/" target="_blank">
                <img src="public/img/fb.svg">
            </a>

        </div>
        <div class="formy" >
            <form class="form" action="projects" method="POST">
                <button class="przycisk" style="
            background: #faf3eb ;
            border: 1px solid #49494967;
            border-radius: 17px;
            opacity: 0.5;
            height: 6vh;
            width: auto;
            min-width: 30vw;
            margin: 2vw;">
                    <a href="projects">Odkryj</a>
                </button>
            </form>
            <form class="form" action="projectsLogged" method="POST">
                <button class="przycisk" style="
            background: #faf3eb ;
            border: 1px solid #49494967;
            border-radius: 17px;
            opacity: 0.5;
            height: 6vh;
            width: auto;
            min-width: 30vw;
            margin: 2vw;">
                    <a href="projectsLogged">Galeria</a>
                </button>
            </form>

        </div>

    </div>
</body>
