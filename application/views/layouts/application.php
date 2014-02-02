<!-- CABECERA -->
<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <title>UAZON - Tienda de libros</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Karla">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/styles/css/main.css">
    </head> 
    <body>
        <header > 
            <section class="cesta">
                <p>
                    <a href="#" title="Identifícate">Identif&iacute;cate</a>|
                    <a href="#" title="Ver detalles compra">Art&iacute;culos[0]</a>
                </p>
                <a href="#" title="Ver detalles compra"><img class="imagen_cesta" src="<?php echo base_url(); ?>assets/styles/images/cesta.png" alt="Cesta compra" title="Ver detalles compra" width="46" height="54"/></a>
            </section>
            <nav>
                <ul>
                    <li><a href="<?php echo base_url();?>" title="Inicio - Home"><img class="logo" src="<?php echo base_url(); ?>assets/styles/images/logo.png" alt="logo" width="91" height="85" /></a></li>            
                    <li><p><a href="<?php echo base_url();?>libros" title="Listado de libros"><img src="<?php echo base_url(); ?>assets/styles/images/libros.png" alt="Listado de libros" title="Listado de libros" width="31" height="23"/>Libros</a></p></li>
                    <li><p><a href="autores" title="Listado de autores"><img src="<?php echo base_url(); ?>assets/styles/images/autores.png" alt="Listado de autores" title="Listado de autores" width="34" height="20"/>Autores</a></p></li>
                    <li><p><a href="#" title="Listado de libros más leídos"><img src="<?php echo base_url(); ?>assets/styles/images/masleido.png" alt="Listado de más leídos" title="Listado de más leídos" width="26" height="22"/>Lo+le&iacute;do</a></p></li>
                    <li><p><a href="#" title="Contacto"><img src="<?php echo base_url(); ?>assets/styles/images/contacto.png" alt="Contacto" title="Contacto" width="28" height="18"/>Contacto</a></p></li>
                </ul>
            </nav>
            <section class="bottom-gradiente-izq-a-derecha"></section>
        </header>
        
        <!-- CONTENIDO VARIABLE -->
        <?php echo $yield; ?>
        
        <!-- PIE -->
        <footer>
            <section class="bottom-gradiente-izq-a-derecha"></section>
            <p>&COPY; Universidad de Alicante</p>
            <ul >
                <li><a href="#">Privacidad</a>|</li>
                <li><a href="#">Aviso Legal</a>|</li>
                <li><a href="#">Contacto</a>|</li>
                <li><a href="#">Sitemap</a>|</li>
                <li><a href="#">RSS</a></li>
            </ul>
            <p>By <a href="http://www.proweb.ua.es">Proweb</a></p>
        </footer>
    </body>
</html>
