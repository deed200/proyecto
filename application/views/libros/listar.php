<!-- VISTA DE LA HOME DE LA APLICACION -->
<section class="layout-1">
    <section class="find">
        <input value="Buscar..."/>
        <img src="<?php base_url(); ?>assets/styles/images/buscar.png" alt="Buscar" title="Buscar" width="20" height="20" />
    </section>
    <nav class="menu-lateral" >
    <ul >
        <li><a href="#" title="Categor&iaccute;a Hogar"><img src="<?php base_url(); ?>assets/styles/images/hogar.png" alt="Categor&iaccute;a hogar" title="Categor&iaccute;a hogar" width="15" height="14"/>Hogar</a></li>
        <li>
            <ul>
                <li><a href="#" title="Categor&iaccute;a Hogar - Juegos">Juegos</a></li>
                <li><a href="#" title="Categor&iaccute;a Hogar - Manualidades">Manualidades</a></li>
                <li><a href="#" title="Categor&iaccute;a Hogar - Estilos de vida">Estilos de vida</a></li>
            </ul>
        </li>
        <li><a href="#" title="Categor&iaccute;a Fantasia"><img src="<?php base_url(); ?>assets/styles/images/fantasia.png" alt="Categor&iaccute;a fantasia" title="Categor&iaccute;a fantasia" width="15" height="18"/>Fantasia</a></li>
        <li>
            <ul>
                <li><a href="#" title="Categor&iaccute;a Fantasia - Fantasia">Fantasia</a></li>
                <li><a href="#" title="Categor&iaccute;a Fantasia - Terror">Terror</a></li>
                <li><a href="#" title="Categor&iaccute;a Fantasia - Ciencia y ficciÃ³n">Ciencia y ficci&oacute;n</a></li>
            </ul>
        </li>
        <li><a href="#" title="Categor&iaccute;a Literatura"><img src="<?php base_url(); ?>assets/styles/images/literatura.png" alt="Categor&iaccute;a literatura" title="Categor&iaccute;a literatura" width="15" height="22"/>Literatura</a></li>
        <li><a href="#" title="Categor&iaccute;a Arte"><img src="<?php base_url(); ?>assets/styles/images/arte.png" alt="Categor&iaccute;a arte" title="Categor&iaccute;a arte" width="15" height="15"/>Arte</a></li>
        <li>
            <ul>
                <li><a href="#" title="Categor&iaccute;a Arte - Arte">Arte</a></li>
                <li><a href="#" title="Categor&iaccute;a Arte - Cine">Cine</a></li>
                <li><a href="#" title="Categor&iaccute;a Arte -Forograf&iaccute;a">Fotograf&iacute;a</a></li>
            </ul>
        </li>
        <li><a href="#" title="Categor&iaccute;a Inform&aaccute;tica"><img src="<?php base_url(); ?>assets/styles/images/informatica.png" alt="Categor&iaccute;a inform&aaccute;tica" title="Categor&iaccute;a inform&aaccute;tica" width="15" height="15"/>Inform&aacute;tica</a></li>
        <li><a href="#" title="Categor&iaccute;a Ciencia"><img src="<?php base_url(); ?>assets/styles/images/ciencia.png" alt="Categor&iaccute;a ciencia" title="Categor&iaccute;a ciencia" width="15" height="17"/>Ciencia</a></li>
    </ul>
    </nav>
    <img class="banner" src="<?php base_url(); ?>assets/styles/images/banner-lateral.jpg" alt="Anuncio universidad" title="Anuncio Universidad"/>
</section>

<section class="layout-2-a" >
    <article class="slider">
        <img src="<?php base_url(); ?>assets/styles/images/banner.png" alt="Anuncio1" title="Anuncio1">
        <p>Deja que la libertad reine.<br>El sol nunca se pone sobre tan glorioso logro humano.</p>
        <button>DETALLES<img src="<?php base_url(); ?>assets/styles/images/detalles.png" alt="detalle" title="detalle"></button>
    </article> 
    
    <article class="display-inline-block">
        <h2>Novedades</h2>
        <?php for ( $i=0; $i<5; $i++ ) : 
                $libro = $libros[$i]; ?>
            <section class="libro">
                <?php echo anchor('libros/ver/'.$libro["id"], img( array('src'=>base_url()."uploads/images/libros/".$libro["id"]."/".$libro["id"].".jpg", 'height'=>'211', 'width'=>'130')));?><br>
                <p class="titulo"><?php echo $libro['titulo']?></p>
                <p class="autor"><?php echo  implode(',',$libro['autores']);?></p>
                <p class="editorial"><?php echo $libro['editorial']?></p>
                <p class="precio"><?php echo number_format($libro['precio'],2);?> <img src="<?php base_url(); ?>assets/styles/images/carrito.png" alt="Detalles libro" title="Detalles libro"></p>
            </section>
        <?php endfor; ?>
    </article>

     <article class="display-inline-block">
         <h2>Lo m&aacute;s le&iacute;do</h2>
         <?php 
            for ( $i=0; $i<5; $i++ ) :
                $libro = $libros[$i];
            ?>
            <section class="libro">
                <?php echo anchor('libros/ver/'.$libro["id"], img( array('src'=>base_url()."uploads/images/libros/".$libro["id"]."/".$libro["id"].".jpg", 'height'=>'211', 'width'=>'130')));?><br>
                <p class="titulo"><?php echo $libro['titulo']?></p>
                <p class="autor"><?php echo  implode(',',$libro['autores']);?></p>
                <p class="editorial"><?php echo $libro['editorial']?></p>
                <p class="precio"><?php echo number_format($libro['precio'],2);?> <img src="<?php base_url(); ?>assets/styles/images/carrito.png" alt="Detalles libro" title="Detalles libro"></p>
            </section>
        <?php endfor; ?>
    </article>

</section>
      