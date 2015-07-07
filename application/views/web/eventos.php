<!-- Page Content -->
    <div class="events-container">
    <div class="container">
        <!-- Page Heading -->
       
        <!-- /.row -->
    <section class="col-sm-8">



         <div class="row">
            <div class="col-lg-12">
                <h1 class="eventos-header"><?php echo $title; ?>
                    
                </h1>
            </div>
        </div>

        <?php  
            foreach($results as $data){ ?>
                <div class="row">
                    <div class="col-sm-4">
                        <img class="img-responsive foto-eventos" src="/assets/web/images/eventos/<?php echo $data->foto;  ?>" alt="">
                    </div>
                    <div class="col-sm-8">
                        <div class="evento">
                            <h3 class="title-events"><?php echo $data->nombre; ?></h3>
                            <h4 class="fecha-events"><?php  $dia=$data->fecha;
                                                        $mes = substr($dia, -5, 2);
                                                        $numero = substr($dia, -2);
                                                        $nombre = nombremes($mes);
                                                        $anio = substr($dia, -10, 4);
                                                        echo $numero." de ".$nombre." de ".$anio; 
                                                ?></h4>
                            <div class="parrafo-evento"><?php $desc= substr($data->descripcion,0,125);
                                                        echo $desc;

                                                ?></div>
                            <!--<span class="btn btn-primary" href="#">Ver Evento</span> -->
                        </div>
                    </div>
                </div>
                <hr>

        <?php }

        ?>

        <div class="row">
                        

                <p><?php echo $links; ?></p>

        </div>  
        

    </section>


                    <aside class="col-sm-4 eventos">
                        
                        


                        <div class="widget-header">
                            <i class="fa fa-life-ring icono fa-2x"></i><h4>Ellos nos acompañan</h4>

                        </div>

                        <?php 
                                foreach ($sponsors as $spon){ ?>

                        <div class="foto-banner">
                            <a href="<?php echo $spon->link_web; ?>" target="_blank"><img src="/assets/web/images/sponsors/<?php echo $spon->foto; ?>"></a>

                        </div>

                        <?php   }
                                    
                            ?>          
                        
                    </aside>

    </div>