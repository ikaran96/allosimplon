
    <!--TOGGLE MOBILE-->

    <div class="menu-wrap">
        <input type="checkbox" class="toggler">
        <div class="hamburger">
            <div></div>
        </div>
        <div class="menu">
            <div>
                <div>
                    <ul>
                        <Li><a href="catalogue.php">Films</a></Li>
                        <Li><a href="connexion.php">Connexion</a></Li>
                        <form action="">
                            <input type="text" placeholder="" name="search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </ul>
                </div>
            </div>
        </div>

    </div>


    <!--TITRE-->

    <div class="title-dada">
        <h1> <a href="index.php"> ALLO SIMPLON</a></h1>
    </div>


    <!--NAV BAR-->

    <div class="nav-dada">
        <div class="logo-dada">
            <h1><a class="lien-home" href="index.php">ALLO SIMPLON</a> </h1>
        </div>
        <div class="menu-nav">
            <form class="search-bar" action="">
                <input type="text" placeholder="" name="search">
                <button class="search-button" type="submit"><i class="fa fa-search"></i></button>
            </form>
            <div class="menu-dada">
                <ul>
                    <li><a class="style_axel" href="<?php echo $actuel; ?>?style=./css/style2.css"></a></li>
                    <li><a class="style_pol" href="<?php echo $actuel; ?>?style=../css/style3.css"></a></li>
                    <li><a class="style_steven" href="<?php echo $actuel; ?>?style=../css/style4.css"></a></li>
                    <li><a class="style_ilayda" href="<?php echo $actuel; ?>?style=../css/index.css"></a></li>
                    <li><a href="catalogue.php">Films</a></li>
                    <li><a href="connexion.php">Connexion</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="vide"></div>