<?php include __DIR__ . '/db/database.php'; ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Dischi php</title>
    </head>
    <body>
        <header>
            <div class="header-container">
                <img class="logo" src="img/spotify.png" alt="">
            </div>
        </header>

        <main>
            <div class="container">
                <div class="card-container">
                    <?php foreach ($database as $disk) { ?>
                        <div class="disk">
                            <img src="<?php echo $disk["poster"]; ?>" height= "150px" width="150px" alt="<?php echo $disk["title"]; ?>">
                            <h3><?= $disk["title"]; ?></h3>
                            <h4><?= $disk["author"]; ?></h4>
                            <small><?= $disk["year"]; ?></small>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </main>
    </body>
</html>