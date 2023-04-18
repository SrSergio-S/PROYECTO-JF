<?php 
    include("Vista/Componentes/hd.php"); 
    include("Vista/Componentes/nav_users.php"); 
?>
<main>
    <div class="main-puro">
        <div id="fecha"></div>
        <h1 class="display-1 text-center" id="titulo">Administradores</h1>
        <div class="mario position-relative start-50"></div>
        <p class="fs-5">
            Esta es una página de administradores para la empresa S&J. Esta página aún está en desarrollo
            pero más adelnate estará en total funcionamiento.
            Mientras los administradores de la página ponen en funcionamiento esta página, usarán este ejemplo de bloc
            (únicamente estaba en ingles).
        </p>
        <h1 class="display-4">Sample blog post</h1> 
        <p class="text-light">January 1, 2021 by...</p> 
        <p class="fs-5">
            This blog post shows a few different types of content that's supported and styled with Bootstrap. 
            Basic typography, lists, tables, images, code, and more are all supported as expected.

            This is some additional paragraph placeholder content. It has been written to fill the 
            available space and show how a longer snippet of text affects the surrounding content. We'll repeat it 
            often to keep the demonstration flowing, so be on the lookout for this exact same string of text.
        </p>
        <h1 class="display-4">Blockquotes</h1>
        <p class="fs-5">This is an example blockquote in action:</p> 

        <h1 class="fs-2 fw-normal">Quoted text goes here.</h1> 

        <p class="fs-5">
            This is some additional paragraph placeholder content. It has been written to fill the available space and 
            show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the 
            demonstration flowing, so be on the lookout for this exact same string of text.
        </p>
        <h1 class="display-4">Example lists</h1>
        <p class="fs-5">
            This is some additional paragraph placeholder content. It's a slightly shorter version of the 
            other highly repetitive body text used throughout. 
            <br><br>
            This is an example unordered list:
            <ul>
                <li>First list item</li>
                <li>Second list item with a longer description</li>
                <li>Third list item to close it out</li>
            </ul>
            And this is an ordered list:
            <ol>
                <li>First list item</li>
                <li>Second list item with a longer description</li>
                <li>Third list item to close it out</li>
            </ol>
            And this is a definition list:<br><br>
            <dl>
            <dt>HyperText Markup Language (HTML)</dt>
            <dd>The language used to describe and define the content of a Web page.</dd>
            <dt>Cascading Style Sheets (CSS)</dt>
            <dd>Used to describe the appearance of Web content.</dd>
            <dt>JavaScript (JS)</dt>
            <dd>The programming language used to build advanced Web sites and applications.</dd>
            </dl>
        </p>
        <h1 class="display-2 text-center">Profile</h1>
        <div class="profile">
            <img src="Imagenes_generales/user.png" class="logo-user">
            <div class="user">
                <p class="fs-3">Usuario: <?php echo "<strong>".$name."</strong>"; ?></p>
                <p class="fs-3">Contraseña: <?php echo "<strong>".$pass."</strong>"; ?></p>
                <p class="fs-3">Tipo de nivel: <?php echo "<strong>".$tipo."</strong>" ?></p>
            </div>
        </div>
    </div>
</main>
<?php include("Vista/Componentes/foot.php"); ?>