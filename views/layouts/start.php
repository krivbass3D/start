<?php
use app\assets\AppAsset;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;

AppAsset::register($this);

/*
require_once "classes/Common.php";
require_once "classes/MysqliDB.php";
require_once "classes/User.php";
require_once "block/head.php";
*/
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <img src="./img/fon.png" class="bg">

    <!-- Модальное окно КАРАНТИНА-->
    <div id="bg_popup">
        <div id="popup">
            <div class="col-md-offset-4">
                <img src="img/maska.png" alt="КАРАНТИН">
                <a class="close-covid-19" href="#" title="Закрыть"
                   onclick="document.getElementById('bg_popup').style.display='none'; return false;">_X_</a>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    var delay_popup = 500;
    //setTimeout("document.getElementById('bg_popup').style.display='block'", delay_popup);
</script>
    <div>
        <a href="<?= \yii\helpers\Url::home()?>">
            <img src="./img/LogoGAS.png" class="align-top logoGas" alt="" style="height:174px;">
        </a>
    </div>


    <?= $this->render('//layouts/inc/calendar') ?>
    <?= $this->render('//layouts/inc/left_menu') ?>
    <?= $content ?>

</div><!-- container-fluid -->

<!--
<div class="container-fluid">
    <header>
        <?php
        //require_once "block/header.php";
        ?>
    </header>
    <nav class="nav">
        <?php
        //require_once "block/calendar.php";
        //require_once "block/left_menu.php";
        ?>
    </nav>
    <main>
        <?php
        //require_once "block/main.php";
        ?>
    </main>
</div>
-->
<!-- container-fluid -->
<footer>

        <div>
            ПАТ КРИВОРIЖГАЗ
        </div>
    <?php
    //require_once "block/footer.php";
    ?>
</footer>
<?php
//require_once "block/birsday.php";
//require_once "block/callback.php";
?>

<?php
//require_once "block/print_of_the_day.php";
//require_once "block/script.php";
?>
<script>


</script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>