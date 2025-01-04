!DOCTYPE html> 
<html> 
    
    <head> 
        <title>Pedidos</title> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="css/registriCphp.css"> 
    </head> 
    <body> 

         <header>
            <div class="encabezado">
                <div class="logo">
                    <img src="imagenes/logo-menu.png" alt="logo" width="90%"> 
                    <a href="index.html"></a>
                </div>
    
                <div class="enlace-paginas">
                    <nav class="contenido">
                        <ul class="menu">
                            <li><a href="index.html">Inicio</a></li>
                            <li><a href="nosotros.html">Sobre Nosotros</a></li>
                            <li><a href="productos.html">Productos</a></li>
                            <li><a href="blog.html">blog</a></li>
                            <li><a href="registro_cliente.php">Pedidos</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="buscador">
                    <form class="contenido">
                        <input type="search" placeholder="buscar...">
                        <button class="boton-search">
                            <img src="imagenes/i-lupa.png" alt="icono-lupa" width="25">
                        </button>
                    </form>
                </div>
    
                <div class="carrito de compra">
                    <img src="imagenes/icons8-cesta-96.png" alt="icono de carrito" width="25%"> 
                    <a href=""></a>
                    <div class="contenido">
                        <span class="texto">carrito</span>
                        <span class="number">(0)</span>
                    </div>
                </div>
            </div>
        </header>
        
        <section id="lema">
            <h1>Formulario de Registro de Pedidos</h1>
        </section>

        <form action="guardar.php" method="POST"> 
            <label>Codcliente:</label><br><input type="text" name="codigo" required=""><br></br> 
            <label>Nombre:</label><br><input type="text" name="nombre" required=""><br></br> 
            <label>Apellido:</label><br><input type="text" name="apellido" required=""><br></br> 
            <label>Direccion:</label><br><input type="text" name="direccion" required=""><br></br> 
            <label>Telefono:</label><br><input type="text" name="telefono" required=""><br></br> 
            <label>Email:</label><br><input type="text" name="email" required=""><br></br> 
            <label>DNI:</label><br><input type="text" name="dni" required=""><br></br> 
            <label>Sabor:</label><br><input type="text" name="sabor" required=""><br></br>
            <label>Cantidad:</label><br><input type="text" name="cantidad" required=""><br></br>
            <label>Metodo de pago:</label><br><input type="text" name="metododepago" required=""><br></br>
            <input type="submit" name="enviar" value="Guardar"> 
        </form> 

        <?php 
            if(isset($_POST['codigo'])&& isset($_POST['nombre'])&& isset($_POST['apellido'])&& isset($_POST['direccion'])&& isset($_POST['telefono'])&& isset($_POST['email'])&& isset($_POST['dni'])&& isset($_POST['sabor'])&& isset($_POST['cantidad'])&& isset($_POST['metododepago'])) 
                require_once "conexion.php"; 
        ?> 

        <section id="maps">
            <div class="contenido"> 
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d975.128360120818!2d-77.0051045974012!3d-12.145407343085862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105b81c01db970d%3A0xee55dbf778644630!2sJos%C3%A9%20G%C3%A1lvez%20256%2C%20Distrito%20de%20Lima%2015049!5e0!3m2!1ses!2spe!4v1736020779272!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>

        <footer>
            <div class="redes sociales">
                <div class="contenido">
                    <h3>Síguenos en nuestras redes sociales</h3>
                    <div class="sud.redes sociales">
                        <div class="sud.redes sociales">
                                <a href="https://www.instagram.com/chocodelicias25/" target="_blank">
                                    <img src="imagenes/i-instagram.png" alt="icono-instagram" width="5%">
                                </a>

                                <a href="https://www.facebook.com/chocodelicias.2025?mibextid=ZbWKwL" target="_blank">
                                    <img src="imagenes/i-facebook.png" alt="icono-facebook" width="5%">
                                </a>

                                <a href="https://www.tiktok.com/@chocodelicias13?_t=ZM-8snHEb4YFgD&_r=1" target="_blank">
                                    <img src="imagenes/i-tik tok.png" alt="icono-tiktok" width="5%">
                                </a>

                                <a href="https://youtu.be/3tozQy4_Zjw" target="_blank">
                                    <img src="imagenes/i-youtube.png" alt="icono-youtube" width="5%">
                                </a>
                        </div>                    
                    </div>
                </div>
            </div>

            <div class="informacion">
                <div class="contenido">
                    <div class="info-contacto">
                        <h4 class="titulo-footer">Informacion de contacto</h4>
                        <ul>
                            <li>Dirección: Frente a la Plaza de Armas de Surco</li>
                            <li>Telefono:958 426 845 </li>
                            <li>Email:Chocodelicias@gmail.com</li>
                            <li>Horario de atención: <br>Lunes a Domingo de 8am-7pm.</li>
                        </ul>
                    </div>

                    <div class="info-legal">
                        <h4 class="titulo-footer">Informacion Legal</h4>
                        <ul>
                            <li><a href="nosotros.html">Acerca de Nosotros</a></li>
                            <li><a href="https://docs.google.com/document/d/1rg66hjG8agbaZXABz_SXHAGBRkBZRJol/edit?usp=sharing&ouid=102432254760071940655&rtpof=true&sd=true">Política de reembolso</a></li>
                            <li><a href="https://docs.google.com/document/d/1m873V3c84F8W2-j4Q4JvnBQEmCyRgtiJ/edit?usp=sharing&ouid=102432254760071940655&rtpof=true&sd=true">Politicas de Privacidad</a></li>
                            <li><a href="https://docs.google.com/document/d/1B50QUUB9Rqc1HHLypPxB8gTgQq2Da5OY/edit?usp=sharing&ouid=102432254760071940655&rtpof=true&sd=true">Terminos y condiciones</a></li>
                            <li><a href="blog.html">Blog</a></li>
                        </ul>
                    </div>

                    <div class="boletin-info">
                        <h4 class="titulo-footer">Boletín informativo</h4>
                        <div class="contenido">
                            <p>Suscribete a nuestros boletines ahora y <br> mantente al dia con nuestras colecciones <br> y ofertas exclusivas.</p>
                            <a href="registro_cliente.php">
                                <button>Suscribete</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pagos">
                <img src="imagenes/img-metodos de pagos.png" alt="img-pagos" width="30%">
            </div>
            <div class="contenido">
                <p>&copy;Programaweb - 2024. Todos los Derechos Reservados <br>Desarrollado por Dana Velarde, Andrea Tovar y Maria Sanancino</p>
            </div>
    </footer>

    </body> 
</html> 