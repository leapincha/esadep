<!DOCTYPE html>
<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ESADEP</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
        <link rel="stylesheet" href="/assets/web/css/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/web/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="/assets/web/css/animate.css">
        <link rel="stylesheet" href="/assets/web/css/magnific-popup.css">
        <link rel="stylesheet" href="/assets/web/flexslider/flexslider.css">
        <link rel="stylesheet" href="/assets/web/css/form-elements.css">
        <link rel="stylesheet" href="/assets/web/css/style.css">
        <link rel="stylesheet" href="/assets/web/css/media-queries.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="/assets/web/img/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/web/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/web/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/web/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="/assets/web/ico/apple-touch-icon-57-precomposed.png">

    </head>

        <body>
        
        <!-- Top menu -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?= base_url(); ?>">Espacio de Salvamento Acuático Deportivo Educativo Profesional</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="top-navbar-1">
                    <ul class="nav navbar-nav navbar-left" role="menu" aria-labelledby="dropdownMenu">
                        <li class="<?= ($active == "Inicio") ? "active" : "" ?>">
                            <a href="<?= base_url(); ?>"><i class="fa fa-home"></i><br>Inicio</a>
                        </li>
                        <li class="dropdown <?= ($active == "esadep") ? "active" : "" ?>">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
                                <i class="fa fa-users"></i><br>ESADEP<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-left" role="menu">
                                <li class="<?= ($sub_active == "quienes") ? "active" : "" ?>"><a href="<?= base_url(); ?>quienes-somos">¿Quienes Somos?</a></li>
                                <li class="<?= ($sub_active == "historia") ? "active" : "" ?>"><a href="<?= base_url(); ?>historia">Historia</a></li>
                                <li class="<?= ($sub_active == "cd") ? "active" : "" ?>"><a href="<?= base_url(); ?>comision-directiva">Comisión Directiva</a></li>
                                <li class="<?= ($sub_active == "equipos") ? "active" : "" ?>"><a href="<?= base_url(); ?>equipos">Categorías</a></li>
                            </ul>
                        </li>
                        <li class="<?= ($active == "noticias") ? "active" : "" ?>">
                            <a href="<?= base_url(); ?>noticia"><i class="fa fa-newspaper-o"></i><br>Noticias</a>
                        </li>
                        <li class="dropdown <?= ($active == "servicios") ? "active" : "" ?>">
                            <a hhref="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000"><i class="fa fa-tasks"></i><br>Servicios<span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-menu-left" role="menu">
                                <li class="<?= ($sub_active == "capacitacion") ? "active" : "" ?>"><a href="<?= base_url(); ?>servicios/capacitacion">Capacitación</a></li>
                                <li class="<?= ($sub_active == "seguridad") ? "active" : "" ?>"><a href="<?= base_url(); ?>servicios/seguridad_acuatica">Seguridad Acuática</a></li>
                                <li class="<?= ($sub_active == "alquiler") ? "active" : "" ?>"><a href="<?= base_url(); ?>servicios/alquiler_material">Alquiler de Material</a></li>
                            </ul>
                        </li>
                        <li class="dropdown <?= ($active == "salvamento") ? "active" : "" ?>">
                            <a hhref="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000"><i class="fa fa-life-ring"></i><br>Salvamento Deportivo<span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-menu-left" role="menu">
                                <li class="<?= ($sub_active == "definicion") ? "active" : "" ?>"><a href="<?= base_url(); ?>salvamento/definicion">Definición</a></li>
                                <li class="<?= ($sub_active == "historia_salv") ? "active" : "" ?>"><a href="<?= base_url(); ?>salvamento/historia">Historia</a></li>
                                <li class="divider"></li>
                                <li class="menu-item dropdown dropdown-submenu <?= ($sub_active == "abiertas" || $sub_active == "cerradas" ) ? "active" : "" ?>"><a tabindex="-1" href="#" class="dropdown-toggle" data-toggle="dropdown">Pruebas</a>
                                    <ul class="dropdown-menu">
                                        <li class="menu-item <?= ($sub_active == "abiertas") ? "active" : "" ?>"><a href="<?= base_url(); ?>pruebas/tipo/abiertas">Abiertas</a></li>
                                        <li class="menu-item <?= ($sub_active == "cerradas") ? "active" : "" ?>"><a href="<?= base_url(); ?>pruebas/tipo/cerradas">Cerradas</a></li>
                                    </ul>

                                </li>
                                <li class="divider"></li>
                                <li class="<?= ($sub_active == "reglamento") ? "active" : "" ?>"><a href="<?= base_url(); ?>salvamento/reglamento">Reglamento</a></li>

                                
                            </ul>
                            
                        </li>

                        <li class="dropdown <?= ($active == "eventos") ? "active" : "" ?>">
                            <a href="<?= base_url(); ?>evento/listado"><i class="fa fa-calendar-o"></i><br>Eventos</a>
                        </li>

                        <li class="<?= ($active == "contacto") ? "active" : "" ?>">
                            <a href="<?= base_url(); ?>contacto"><i class="fa fa-envelope"></i><br>Contacto</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right social">
                <li><a id="social" class="iconos-social" href="https://www.facebook.com/EsadepSalvamentoAcuatico" target="_blank"><i class="fa fa-facebook-square fa-4x"></i></a></li>
                <li><a id="social" class="iconos-social" href="https://www.facebook.com/EsadepSalvamentoAcuatico" target="_blank"><i class="fa fa-twitter-square fa-2x"></i></a></li>
                <li><a id="social" class="iconos-social" href="https://www.youtube.com/user/salvamentodeportivo/videos" target="_blank"><i class="fa fa-youtube-square fa-2x"></i></a></li>

                
                </ul>
                </div>

                
            </div>

           
        </nav>