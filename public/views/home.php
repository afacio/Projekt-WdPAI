<!DOCTYPE html>
<head>
    <title>HOME PAGE</title>
    <link rel="stylesheet" type="text/css" href="public/css/home-style.css">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
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
            
            <img src="public/img/male-logo-z-napisem.svg" class="male-logo">
            
            <a class="kostka" href="https://www.instagram.com/" target="_blank">
                <img src="public/img/insta.svg">
            </a>
            <a class="kostka" href="https://www.facebook.com/" target="_blank">
                <img src="public/img/fb.svg">
            </a>
            
        </div>
        <div class="search-barr">
            <form class="search-bar">
                <input placeholder="search image">
            </form>
        </div>
        <div class=galeria>
            <section class="kafelek">
                <?php foreach ($projects as $project): ?>
                    <div id="<?= $project->getId(); ?>">
                        <img class="mem" src="public/uploads/<?= $project->getImage(); ?>">

                    </div>
                <?php endforeach; ?>
            </section>
        </div>
        </div>
    </div>
</body>
<template id="project-template">
    <div id="">
        <img src="">
        <div>
            <h2>title</h2>
            <p>description</p>
            <div class="social-section">
                <i class="fas fa-heart"> 0</i>
                <i class="fas fa-minus-square"> 0</i>
            </div>
        </div>
    </div>
</template>