<main class="devwebcamp">
    <h1 class="devwebcamp__heading"><?php echo $titulo;?></h1>
    <p class="devwebcamp__descripcion">Conoce la conferencia mas importante de latinoamérica</p>

    <div <?php aos_animacion(); ?> class="devwebcamp__grid">
        <div class="devwebcamp__imagen">
            <picture>
                <source srcset="build/img/sobre_devwebcamp.avif" type="image/avif">
                <source srcset="build/img/sobre_devwebcamp.webp" type="image/webp">
                <img loading="lazy" src="build/img/sobre_devwebcamp.jpg" width="200" height="300" alt="imagen devwebcamp">
            </picture>
        </div>
    

    <div <?php aos_animacion(); ?>  class="devwebcamp__contenido">
        <p class="devwebcamp__texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit similique nihil adipisci, nam est quo maxime cupiditate quasi. Maxime cum animi vel ducimus. Alias iste repudiandae, molestias error porro dolorem.
        </p>

        <p class="devwebcamp__texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit similique nihil adipisci, nam est quo maxime cupiditate quasi. Maxime cum animi vel ducimus. Alias iste repudiandae, molestias error porro dolorem.
        </p>
    </div>
    </div>
</main>