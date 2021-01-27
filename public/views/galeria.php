<!DOCTYPE html>
<head>
    <title>ODKRYJ</title>
    <link rel="stylesheet" type="text/css" href="public/css/galeria-style.css">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="public/img/male-logo-z-napisem.svg" class="male-logo">
        </div>
        <div class=galeria-container>

            <div class="uklad">
                <h1 style="margin: 2vh;">GALERIA</h1>
                <div class="container-obrazy-poziom">
                    <section class="projects">
                        <?php foreach($projects as $project): ?>
                            <div id="project-1">
                                <img src="public/uploads/<?= $project->getImage(); ?>">
                                
                            </div>
                        <?php endforeach; ?>
                    </section>
                </div>
                <div class="container-obrazy-poziom">
                    <div class="kafelek">

                    </div>
                    <div class="kafelek">

                    </div>
                    <div class="kafelek" >

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
