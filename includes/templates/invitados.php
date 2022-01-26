<section class="index-invitados">
    <h2>Nuestros invitados</h2>
    <?php $invitados = Invitado::find_all(); ?>
    <section class="invitados-container">
        <?php foreach ($invitados as $invitado): ?>
            <article class="invitado__article">
                <a class="invitado-info" href="#invitado<?php echo $invitado->__get('invitado_id'); ?>">
                    <figure>
                        <img src="./assets/img/<?php echo $invitado->__get('url_imagen'); ?>" 
                        alt="<?php echo $invitado->__get('nombre_invitado') . " " . $invitado->__get('apellido_invitado'); ?>">
                        <figcaption><?php echo $invitado->__get('nombre_invitado') . " " . $invitado->__get('apellido_invitado'); ?></figcaption>
                    </figure>
                </a>                        
                <section class="none">
                    <article class="invitado-info" id="invitado<?php echo $invitado->__get('invitado_id'); ?>">
                        <h2><?php echo $invitado->__get('nombre_invitado') . " " . $invitado->__get('apellido_invitado'); ?></h2>
                        <img class="img-interior" src="./assets/img/<?php echo $invitado->url_imagen; ?>"
                        alt="<?php echo $invitado->__get('nombre_invitado') . " " . $invitado->__get('apellido_invitado'); ?>">
                        <p><?php echo $invitado->__get('descripcion'); ?></p>
                    </article>
                </section>
            </article>
        <?php endforeach; ?>  
    </section>
</section>

<?php $conn->conn->close(); ?>