<!-- VISTA DEL RESULTADO DE LA BUSQUEDA DE LIBROS -->
<section class="layout-1">
    <section class="find">
        <?php echo form_open('libros/buscar') ?>
        <input value="Buscar..."/>
        <img src="assets/styles/images/buscar.png" alt="Buscar" title="Buscar" width="20" height="20" />
        <?php echo form_close() ?>
    </section>
    <nav class="menu-lateral" >
    <ul >
        <li><a href="#" title="Categoría Hogar"><img src="assets/styles/images/hogar.png" alt="Categoría hogar" title="Categoría hogar" width="15" height="14"/>Hogar</a></li>
        <li>
            <ul>
                <li><a href="#" title="Categoría Hogar - Juegos">Juegos</a></li>
                <li><a href="#" title="Categoría Hogar - Manualidades">Manualidades</a></li>
                <li><a href="#" title="Categoría Hogar - Estilos de vida">Estilos de vida</a></li>
            </ul>
        </li>
        <li><a href="#" title="Categoría Fantasia"><img src="assets/styles/images/fantasia.png" alt="Categoría fantasia" title="Categoría fantasia" width="15" height="18"/>Fantasia</a></li>
        <li>
            <ul>
                <li><a href="#" title="Categoría Fantasia - Fantasia">Fantasia</a></li>
                <li><a href="#" title="Categoría Fantasia - Terror">Terror</a></li>
                <li><a href="#" title="Categoría Fantasia - Ciencia y ficción">Ciencia y ficción</a></li>
            </ul>
        </li>
        <li><a href="#" title="Categoría Literatura"><img src="assets/styles/images/literatura.png" alt="Categoría literatura" title="Categoría literatura" width="15" height="22"/>Literatura</a></li>
        <li><a href="#" title="Categoría Arte"><img src="assets/styles/images/arte.png" alt="Categoría arte" title="Categoría arte" width="15" height="15"/>Arte</a></li>
        <li>
            <ul>
                <li><a href="#" title="Categoría Arte - Arte">Arte</a></li>
                <li><a href="#" title="Categoría Arte - Cine">Cine</a></li>
                <li><a href="#" title="Categoría Arte -Forografía">Fotograf&iacute;a</a></li>
            </ul>
        </li>
        <li><a href="#" title="Categoría Informática"><img src="assets/styles/images/informatica.png" alt="Categoría informática" title="Categoría informática" width="15" height="15"/>Inform&aacute;tica</a></li>
        <li><a href="#" title="Categoría Ciencia"><img src="assets/styles/images/ciencia.png" alt="Categoría ciencia" title="Categoría ciencia" width="15" height="17"/>Ciencia</a></li>
    </ul>
    </nav>
    <img class="banner" src="assets/styles/images/banner-lateral.jpg" alt="Anuncio universidad" title="Anuncio Universidad"/>
</section>

<section class="layout-2-b" >
    <section class="breadcrumb">
        <a href="index.php" title="Home">Home</a> > 
        <span>Libros</span>
    </section>    
    
    <section class="listado">
        <p class="listado-indice">5 libros<span>ordenar por: 
                <a href="#" title="Ordenar por precio">precio</a> | 
                <a href="#" title="Ordenar alfabeticamente">alfab&eacute;ticamente</a> | 
                <a href="#" title="Ordenar por fecha">fecha</a></span></p>
        <hr>
        <article class="libro-listado">            
            <a href="ficha.php" title="Ver detalles">
                <img src="uploads/images/libros/thumb/mandela.png" alt="Ver detalles" title="Ver detalles" /><br>
                <p class="titulo">El largo camino hacia la libertad</p>
                <p class="autor">Nelson Mandela</p>
                <p class="editorial">AGUILAR</p>
                <section class="tooltip" title="Puntuación 4 sobre 5">
                    <img class="puntuacion" src="assets/styles/images/star-on.png" title="Puntuación" alt="Puntuación">
                    <img class="puntuacion" src="assets/styles/images/star-on.png" title="Puntuación" alt="Puntuación">
                    <img class="puntuacion" src="assets/styles/images/star-on.png" title="Puntuación" alt="Puntuación">
                    <img class="puntuacion" src="assets/styles/images/star-on.png" title="Puntuación" alt="Puntuación">
                    <img class="puntuacion" src="assets/styles/images/star-off.png" title="Puntuación" alt="Puntuación">
                </section>
            </a>
            <p class="precio">
                    29,90&euro;<br>
                    <button class="comprar" title="Comprar">comprar</button>
            </p>            
        </article>
        <hr>
        <article class="libro-listado">            
            <a href="ficha.php" title="Ver detalles">
                <img src="uploads/images/libros/thumb/kick-ass.png" alt="Ver detalles" title="Ver detalles" /><br>
                <p class="titulo">Kick-Ass 2</p>
                <p class="autor">Mark Millar - John Romita Jr.</p>
                <p class="editorial">PANINI COMICS</p>            
                <section class="tooltip" title="Puntuación 2 sobre 5">
                    <img class="puntuacion" src="assets/styles/images/star-on.png" title="Puntuación" alt="Puntuación">
                    <img class="puntuacion" src="assets/styles/images/star-on.png" title="Puntuación" alt="Puntuación">
                    <img class="puntuacion" src="assets/styles/images/star-off.png" title="Puntuación" alt="Puntuación">
                    <img class="puntuacion" src="assets/styles/images/star-off.png" title="Puntuación" alt="Puntuación">
                    <img class="puntuacion" src="assets/styles/images/star-off.png" title="Puntuación" alt="Puntuación">
                </section>
             </a>
            <p class="precio">
                15,75&euro;<br>
                <button class="comprar">comprar</button>
            </p>
        </article>
        <hr>
        <article class="libro-listado">
            <a href="ficha.php" title="Ver detalles">
                <img src="uploads/images/libros/thumb/pilares.png" alt="Ver detalles" title="Ver detalles" /><br>
                <p class="titulo">Los pilares de la tierra</p>
                <p class="autor">Ken Follet</p>
                <p class="editorial">Plaza Janés</p>
                <section class="tooltip" title="Puntuación 3 sobre 5"> 
                    <img class="puntuacion" src="assets/styles/images/star-on.png" title="Puntuación" alt="Puntuación">
                    <img class="puntuacion" src="assets/styles/images/star-on.png" title="Puntuación" alt="Puntuación">
                    <img class="puntuacion" src="assets/styles/images/star-on.png" title="Puntuación" alt="Puntuación">
                    <img class="puntuacion" src="assets/styles/images/star-off.png" title="Puntuación" alt="Puntuación">
                    <img class="puntuacion" src="assets/styles/images/star-off.png" title="Puntuación" alt="Puntuación">
                </section>
            </a>
            <p class="precio">
                35,50&euro;<br>
                <button class="comprar">comprar</button>
            </p>
        </article>
        <hr>
         <article class="libro-listado">
            <a href="ficha.php" title="Ver detalles">
                <img src="uploads/images/libros/thumb/marco-polo.png" alt="Ver detalles" title="Ver detalles" /><br>
                <p class="titulo">Marco Polo no fue solo</p>
                <p class="autor">Pilar Lozano</p>
                <p class="editorial">Alta Mar</p>
                <section class="tooltip" title="Puntuación 3 sobre 5">
                    <img class="puntuacion" src="assets/styles/images/star-on.png" title="Puntuación" alt="Puntuación">
                    <img class="puntuacion" src="assets/styles/images/star-on.png" title="Puntuación" alt="Puntuación">
                    <img class="puntuacion" src="assets/styles/images/star-on.png" title="Puntuación" alt="Puntuación">
                    <img class="puntuacion" src="assets/styles/images/star-off.png" title="Puntuación" alt="Puntuación">
                    <img class="puntuacion" src="assets/styles/images/star-off.png" title="Puntuación" alt="Puntuación">
                </section>
            </a>
             <p class="precio">
                46,90&euro;<br>
                <button class="comprar">comprar</button>
            </p>
        </article>
        <hr>
        <article class="libro-listado">            
            <a href="ficha.php" title="Ver detalles">
                <img src="uploads/images/libros/thumb/pepa-pig.png" alt="Ver detalles" title="Ver detalles" /><br>
                <p class="titulo">Peppa Ilumina Letras y n&uacute;meros</p>
                <p class="autor">Anaya</p>
                <p class="editorial">Anaya</p>
                <section class="tooltip" title="Puntuación 5 sobre 5">
                    <img class="puntuacion" src="assets/styles/images/star-on.png" title="Puntuación" alt="Puntuación">
                    <img class="puntuacion" src="assets/styles/images/star-on.png" title="Puntuación" alt="Puntuación">
                    <img class="puntuacion" src="assets/styles/images/star-on.png" title="Puntuación" alt="Puntuación">
                    <img class="puntuacion" src="assets/styles/images/star-on.png" title="Puntuación" alt="Puntuación">
                    <img class="puntuacion" src="assets/styles/images/star-on.png" title="Puntuación" alt="Puntuación">
                </section>
            </a>
            <p class="precio">
                    9,50&euro;<br>
                    <button class="comprar">comprar</button>
            </p>
        </article>
        <hr>
    </section>
    <section class="paginacion">
        <a href="#" title="pagina">&#60;</a>
        <a href="#" title="pagina">&#60;&#60;</a>
        <a href="#" title="pagina">1</a>
        <a href="#" title="pagina">2</a>
        <a href="#" title="pagina">3</a>
        <a href="#" title="pagina">4</a>
        <a href="#" title="pagina">5</a>
        <a href="#" title="pagina">6</a>
        <a href="#" title="pagina">7</a>
        <a href="#" title="pagina">8</a>
        <a href="#" title="pagina">9</a>
        <a href="#" title="pagina">10</a>
        <a href="#" title="pagina">&#62;&#62;</a>
        <a href="#" title="pagina">&#62;</a>
    </section>
</section>
