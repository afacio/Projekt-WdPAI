<!DOCTYPE html>
<head>
    <title>HOME PAGE</title>
    <link rel="stylesheet" type="text/css" href="public/css/galeria.css">

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
        <main>
            <header>
                <div class="search-bar">
                    <input placeholder="search project">
                </div>

            </header>
            <section class="projects">
                <?php foreach ($projects as $project): ?>
                    <div id="<?= $project->getId(); ?>">
                        <div>
                            <h2><?= $project->getTitle(); ?></h2>
                        </div>
                        <img src="public/uploads/<?= $project->getImage(); ?>">


                    </div>
                <?php endforeach; ?>
            </section>
        </main>

    </div>
</body>
