<div class="fixed-top">
    <nav class="navbar navbar-expand-md shadow d-flex flex-row align-items-center">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo ($currentPage == "index")? "index.php": "../index.php";?>">
                <img src="<?php echo ($currentPage == "index")? "img/": "../img/";?>gresident-logo.svg" alt="logo-groenity">
            </a>
            <!--responsive button-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarResponsive">
                    <?php
                    if (isset($_SESSION["user"]) && $currentPage != "index") {
                        include_once(__DIR__."/../includes/nav-private.inc.php");
                    } else {
                        include_once(__DIR__."/../includes/nav-public.inc.php");
                    } ?>
            </div>
        </div>
    </nav>

    <?php 
        //if user is logged in show the app navigation
        if(isset($_SESSION["user"])):
    ?>

    <nav class="navbar shadow-sm navbar-expand-md navbar--app">
        <div class="container-fluid app__nav">
            <div class="navbar-collapse justify-content-between" id="navbarApplication">
                <ul class="navbar-nav navbar-nav--app d-flex flex-row justify-content-between container-fluid text-center">
                    <li class="nav-item col-2">
                        <a class="nav-link d-flex flex-column align-items-center subnav--icon <?php echo ($currentPage == "own")? "active": "";?>" href="own.php">
                            <?php echo file_get_contents("../img/Icons/36/bar-chart-2.svg"); ?>
                            <span class="d-none d-md-block">Eigen gegevens</span>
                        </a>
                    </li>
                    <li class="nav-item active col-2">
                        <a class="nav-link d-flex flex-column align-items-center subnav--icon <?php echo ($currentPage == "city")? "active": "";?>" href="city.php">
                            <?php echo file_get_contents("../img/Icons/36/activity.svg"); ?>
                            <span class="d-none d-md-block">Stad</span>
                        </a>
                    </li>
                    <li class="nav-item col-2">
                        <a class="nav-link d-flex flex-column align-items-center subnav--icon <?php echo ($currentPage == "challenge" || $currentPage == "challengeInfo")? "active": "";?>" href="challenge.php">
                            <?php echo file_get_contents("../img/Icons/36/award.svg"); ?>
                            <span class="d-none d-md-block">Uitdagingen</span>
                        </a>
                    </li>
                    <li class="nav-item col-2">
                        <a class="nav-link d-flex flex-column align-items-center subnav--icon <?php echo ($currentPage == "appointment")? "active": "";?>" href="appointment.php">
                            <?php echo file_get_contents("../img/Icons/36/message-square.svg"); ?>
                            <span class="d-none d-md-block">Afspraak</span>
                        </a>
                    </li>
                    <li class="nav-item col-2">
                        <a class="nav-link d-flex flex-column align-items-center subnav--icon <?php echo ($currentPage == "shop")? "active": "";?>" href="shop.php">
                            <?php echo file_get_contents("../img/Icons/36/shopping-bag.svg"); ?>
                            <span class="d-none d-md-block">Winkel</span>
                        </a>
                    </li>
                    <li class="nav-item col-2">
                        <a class="nav-link d-flex flex-column align-items-center subnav--icon <?php echo ($currentPage == "appsettings")? "active": "";?>" href="appSettings.php">
                            <?php echo file_get_contents("../img/Icons/36/settings.svg"); ?>
                            <span class="d-none d-md-block">Instellingen</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php endif;?>
</div>