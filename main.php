<!DOCTYPE html>
<html lang-"en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Profile</title>
    <link rel="stylesheet" href="style2.css"/>
</head>
<body>

    <div class="header">
        <?php include 'logo.inc.php' ?>
        <?php include 'menu.inc.php' ?>
    </div>

<div class="flex-container">
    <div class="about_me">

        <h1 <?php echo $p ?> </h1>
        

        <div class="data">
            <div class="myImg">
                <?php include 'profile_foto.inc.php' ?>
            </div>

            <div class="fullname">
                <p>Меня зовут
                    <?php echo $name, ' ', $surname . '<br>';
                    echo 'город', ' ', $city; ?>
                </p>

                <p>Мне
                    <?php echo $age; ?>
                    лет </p>
                <p>Мы научились создавать простые переменные</p>
                <p>Изучили простые операции с ними</p>
            </div>

        </div>

        <div class="knowledge">

            <?php include 'knowledge.inc.php'; ?>
            <?php
            echo $a, ' ', $b, ' ', $c; ?> <br>

            <?php
            $a = 10;
            $b = 20;
            $c = $a + $b;
            echo $c;
            ?> <br>

            <?php
            echo $d;
            ?>
        </div>

        <div class="article">
            <p class="text">
                Данный сайт был создан для сдачи работы на обучающем курсе Skillfactory.
            </p>
        </div>
    </div>

    <?php include 'footer.inc.php' ?>

</div>

</body>
</html>