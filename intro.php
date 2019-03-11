<!-- intro-->
<section id="intro" class="intro image-background">
    <div class="overlay"></div>
    <div class="content">
        <div class="container clearfix">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-12">
                    <p class="roboto">Bienvenue dans mon portfolio</p>
                    <h1><span class="bold">Hugo Ratel</span></h1>
                    <?php
                    if (isset($_COOKIE['visite'])) {
                        setCookie('visite', $_COOKIE['visite'] + 1 ,time() + 365*24*3600);

                    } else {
                        setCookie('visite', 1 ,time() + 365*24*3600);

                    }

                    echo ( "<p>Ceci est votre ". $_COOKIE['visite'] ." visite !</p>");

                    ?>
                    <p class="roboto">press the button below</p>
                </div>
            </div>
        </div>
    </div><a href="#àpropos" class="icon faa-float animated scroll-to"><i class="fa fa-angle-double-down"></i></a>
</section>