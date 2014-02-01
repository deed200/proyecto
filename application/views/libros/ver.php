<!-- VISTA DE LA FICHA DEL LIBRO -->

<section class="layout-3">
    <section class="breadcrumb">
        <?php echo anchor(base_url(),'Home', array('title'=>"Home"))?> > 
        <?php echo anchor("libros","Libros", array('title'=>"Libros"))?> > 
        <span>El largo camino hacia la libertad</span>
    </section>    
</section>

<section class="detalle-izq">
    <img src="<?php echo base_url()?>uploads/images/libros/<?php echo $libro["id"]?>/<?php echo $libro["id"]?>.jpg" alt="<?php echo $libro['titulo']?>" title="<?php echo $libro['titulo']?>" width="150" height="220"><br>
    <img src="<?php echo base_url(); ?>uploads/images/libros/<?php echo $libro["id"]?>/thumb_<?php echo $libro["id"]?>.jpg" alt="<?php echo $libro['titulo']?>" title="<?php echo $libro['titulo']?>" width="34" height="50">
    <img src="<?php echo base_url(); ?>uploads/images/libros/<?php echo $libro["id"]?>/thumb_<?php echo $libro["id"]?>.jpg" alt="<?php echo $libro['titulo']?>" title="<?php echo $libro['titulo']?>" width="34" height="50">
    <img src="<?php echo base_url(); ?>uploads/images/libros/<?php echo $libro["id"]?>/thumb_<?php echo $libro["id"]?>.jpg" alt="<?php echo $libro['titulo']?>" title="<?php echo $libro['titulo']?>" width="34" height="50">
    <img src="<?php echo base_url(); ?>uploads/images/libros/<?php echo $libro["id"]?>/thumb_<?php echo $libro["id"]?>.jpg" alt="<?php echo $libro['titulo']?>" title="<?php echo $libro['titulo']?>" width="34" height="50">
    <hr>
    
    <article>
        <h3>Los m&aacute;s le&iacute;dos</h3>
        <a href="ficha.php">
            <section class="libro2">
                <img width="30" height="49" src="<?php echo base_url(); ?>uploads/images/libros/1/thumb_1.jpg" alt="libro" title="libro" /><br>
                <p class="titulo">El largo camino hacia la libertad</p>
                <p class="autor">Nelson Mandela</p>
                <p class="precio">29,90&euro; </p>
            </section>
        </a>
        <a href="ficha.php">
           <section class="libro2">
               <img width="30" height="49" src="<?php echo base_url(); ?>uploads/images/libros/2/thumb_2.jpg" alt="logo" /><br>
               <p class="titulo">Kick-Ass 2</p>
               <p class="autor">Mark Millar - John Romita Jr.</p>
               <p class="precio">15,75&euro; </p>
           </section>
        </a>
        <a href="ficha.php">
           <section class="libro2">
               <img width="30" height="49" src="<?php echo base_url(); ?>uploads/images/libros/3/thumb_3.jpg" alt="logo" /><br>
               <p class="titulo">Los pilares de la tierra</p>
               <p class="autor">Ken Follet</p>
               <p class="precio">35,50&euro; </p>
           </section>
        </a>
        <a href="ficha.php">
           <section class="libro2">
               <img width="30" height="49" src="<?php echo base_url(); ?>uploads/images/libros/4/thumb_4.jpg" alt="logo" /><br>
               <p class="titulo">Peppa Ilumina Letras y n&uacute;meros</p>
               <p class="autor">Anaya</p>
               <p class="precio">9,50&euro;</p>
           </section>
        </a>
        <a href="ficha.php">
           <section class="libro2">
               <img width="30" height="49" src="<?php echo base_url(); ?>uploads/images/libros/1/thumb_1.jpg" alt="logo" /><br>
               <p class="titulo">Marco Polo no fue solo</p>
               <p class="autor">Pilar Lozano</p>
               <p class="precio">46,90&euro;</p>
           </section>
       </a>
    </article>
</section>

<section class="detalle-derecha">
    <?php //print_r($libro);?>
    <p class="precio-total"><?php echo $libro['precio'];?> &euro;</p>
    <button class="comprar-fin">Comprar</button>
    <button class="tramitar">Tramitar pedido</button>
  
    <article class="amigos">
        <p>0 amigos han le&iacute;do  <em>El largo camino hacia la libertad</em></p>
        <p class="amigos-detalle">
            <img width="50" height="65" src="<?php echo base_url()?>assets/styles/images/anonimo.png" alt="amigo1" /><br>
            Amigo 1
        </p>
        <p class="amigos-detalle">
            <img width="50" height="65" src="<?php echo base_url()?>assets/styles/images/anonimo.png" alt="amigo2" /><br>
            Amigo 2
        </p>
        <p class="amigos-detalle">
            <img width="50" height="65" src="<?php echo base_url()?>assets/styles/images/anonimo.png" alt="amigo3" /><br>
            Amigo 3
        </p>
    </article>
    
    <!-- bloque FACEBOOK -->
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];  
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>   
    <div class="fb-activity margin-top20" data-app-id="jose.ferrandizlloret" data-site="developers.facebook.com" data-action="likes, recommends" data-width="170" data-colorscheme="light" data-header="true"></div>
</section>

<section class="detalle-centro">
    <h1><?php echo $libro['titulo']?></h1>
    <h4><?php echo implode(',',$libro['autores']);?> - <em><?php echo $libro['editorial']?></em></h4>
    <p>isbn: <?php echo $libro['isbn'];?></p>
    <section class="tooltip" title='Puntuaci&oacute;n <?php echo $libro["voto"]?> sobre 5'>
        <?php for( $i=1; $i<=5; $i++) :
                $imagen = '<img class="puntuacion" src="'.base_url().'assets/styles/images/star-off.png" title="Puntuaci&oacute;n" alt="Puntuaci&oacute;n">';
                if ( $i <= $libro['voto'])
                    $imagen = '<img class="puntuacion" src="'.base_url().'assets/styles/images/star-on.png" title="Puntuaci&oacute;n" alt="Puntuaci&oacute;n">';
                echo $imagen;
            endfor; ?>
    </section>    
            
        
    <p><?php $libro['descripcion'] ?></p>
    <h4>  Compartir en 
        <a href="#" title="Facebook"><img src="<?php echo base_url()?>assets/styles/images/fb.png" title="Facebook" alt="Facebook" width="16" height="16"></a>
        <a href="#" title="Twitter" ><img src="<?php echo base_url()?>assets/styles/images/twitter.png" title="Twitter" alt="Twitter" width="16" height="16" ></a>
        <a href="#" title="Google+" ><img src="<?php echo base_url()?>assets/styles/images/gplus.png" title="Google+" alt="Google+" width="16" height="16"></a>
    </h4>
    <hr>
    <h3>Valora
        <img class="puntuacion" src="<?php echo base_url()?>assets/styles/images/star-on.png" title="Puntuaci&oacute;n" alt="Puntuaci&oacute;n">
        <img class="puntuacion" src="<?php echo base_url()?>assets/styles/images/star-on.png" title="Puntuaci&oacute;n" alt="Puntuaci&oacute;n">
        <img class="puntuacion" src="<?php echo base_url()?>assets/styles/images/star-on.png" title="Puntuaci&oacute;n" alt="Puntuaci&oacute;n">
        <img class="puntuacion" src="<?php echo base_url()?>assets/styles/images/star-on.png" title="Puntuaci&oacute;n" alt="Puntuaci&oacute;n">
        <img class="puntuacion" src="<?php echo base_url()?>assets/styles/images/star-off.png" title="Puntuaci&oacute;n" alt="Puntuaci&oacute;n">
        <button class="valora">Valora</button>
    </h3>
    <hr>
    <h4>Comentarios</h4>
        <?php foreach( $libro['comentarios'] as $comentario) : ?>
        <p><strong><?php echo $comentario['autor']?></strong></p>
        <p><?php echo $comentario['descripcion'];?></p>
        <hr>    
        <?php     endforeach;;?>
    <h4>Comentar</h4>
    <form action="#" method="POST" class="form-comentario">
        <p>
            autor <br>
            <input type="text" required autofocus/>
        </p> 
        <p>
            mensaje    <br>
            <textarea required=""></textarea>
        </p> 
        <p>
            <button>Comentar</button> 
        </p>
    </form>
</section>
<section>
    <article class="ultimos-valorados">
        <h3>&Uacute;ltimos libros visitados</h3>
            <section class="libro">
                <?php echo anchor('libros/ver/1', img( array('src'=>base_url()."uploads/images/libros/1/1.jpg", 'height'=>'211', 'width'=>'130')));?><br>
                <p class="titulo">El largo camino hacia la libertad</p>
                <p class="autor">Nelson Mandela</p>
                <p class="editorial">AGUILAR</p>
                <p class="precio">29,90&euro; <img src="<?php echo base_url(); ?>assets/styles/images/carrito.png" alt="Detalles libro" title="Detalles libro"></p>
            </section>
            <section class="libro">
                <?php echo anchor('libros/ver/2', img( array('src'=>base_url()."uploads/images/libros/2/2.jpg", 'height'=>'211', 'width'=>'130')));?><br>
                <p class="titulo">Kick-Ass 2</p>
                <p class="autor">Mark Millar - John Romita Jr.</p>
                <p class="editorial">PANINI COMICS</p>
                <p class="precio">15,75&euro; <img src="<?php echo base_url(); ?>assets/styles/images/carrito.png" alt="Detalles libro" title="Detalles libro"></p>
            </section>
            <section class="libro">
                <?php echo anchor('libros/ver/3', img( array('src'=>base_url()."uploads/images/libros/3/3.jpg", 'height'=>'211', 'width'=>'130')));?><br>
                <p class="titulo">Los pilares de la tierra</p>
                <p class="autor">Ken Follet</p>
                <p class="editorial">PLAZA JAN&Eacute;S</p>
                <p class="precio">35,50&euro; <img src="<?php echo base_url(); ?>assets/styles/images/carrito.png" alt="Detalles libro" title="Detalles libro"></p>
            </section>
            <section class="libro" style="float: left; width: 132px; padding: 11px;">
                <?php echo anchor('libros/ver/4', img( array('src'=>base_url()."uploads/images/libros/4/4.jpg", 'height'=>'211', 'width'=>'130')));?><br>
                <p class="titulo">Peppa Ilumina Letras y n&uacute;meros</p>
                <p class="autor">Anaya</p>
                <p class="editorial">ANAYA</p>
                <p class="precio">9,50&euro; <img src="<?php echo base_url(); ?>assets/styles/images/carrito.png" alt="Detalles libro" title="Detalles libro"></p>
            </section>
            <section class="libro" style="vertical-align: top;float: left; width: 132px; padding: 11px;">
                <?php echo anchor('libros/ver/1', img( array('src'=>base_url()."uploads/images/libros/1/1.jpg", 'height'=>'211', 'width'=>'130')));?><br>
                <p class="titulo">Marco Polo no fue solo</p>
                <p class="autor">Pilar Lozano</p>
                <p class="editorial">Alta Mar</p>
                <p class="precio">46,90&euro; <img src="<?php echo base_url(); ?>assets/styles/images/carrito.png" alt="Detalles libro" title="Detalles libro"></p>
            </section>
    </article>

</section>