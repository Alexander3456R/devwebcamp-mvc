<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Información Personal</legend>
    <div class="formulario__campo">
        <label for="nombre" class="formulario__label">Nombre</label>
        <input
             type="text"
             class="formulario__input"
             id="nombre"
             name="nombre"
             placeholder="Nombre del Expositor"
             value="<?php echo $expositor->nombre ?? ''; ?>"
        />
    </div>


    <div class="formulario__campo">
        <label for="apellido" class="formulario__label">Apellido</label>
        <input
             type="text"
             class="formulario__input"
             id="apellido"
             name="apellido"
             placeholder="Apellido del Expositor"
             value="<?php echo $expositor->apellido ?? ''; ?>"
        />
    </div>


    <div class="formulario__campo">
        <label for="ciudad" class="formulario__label">Ciudad</label>
        <input
             type="text"
             class="formulario__input"
             id="ciudad"
             name="ciudad"
             placeholder="Ciudad del Expositor"
             value="<?php echo $expositor->ciudad ?? ''; ?>"
        />
    </div>

    <div class="formulario__campo">
        <label for="pais" class="formulario__label">País</label>
        <input
             type="text"
             class="formulario__input"
             id="pais"
             name="pais"
             placeholder="País del Expositor"
             value="<?php echo $expositor->pais ?? ''; ?>"
        />
    </div>


    <div class="formulario__campo">
        <label for="imagen" class="formulario__label">Imagen</label>
        <input
             type="file"
             class="formulario__input formulario__input--file"
             id="imagen"
             name="imagen"
        />
    </div>
    <?php if(isset($expositor->imagen_actual)) {?>
        <p class="formulario__texto">Imagen Actual:</p>
        <div class="formulario__imagen">
            <picture>
                <source srcset="<?php echo $_ENV['HOST'] . '/img/speakers/' . $expositor->imagen; ?>.webp" type="image/webp">
                <source srcset="<?php echo $_ENV['HOST'] . '/img/speakers/' . $expositor->imagen; ?>.png" type="image/png">
                <img src="<?php echo $_ENV['HOST'] . '/img/speakers/' . $expositor->imagen; ?>.png" alt="Imagen Expositor">
            </picture>
        </div>
    <?php } ?>
</fieldset>

<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Información Extra</legend>

        <div class="formulario__campo">
        <label for="tags_input" class="formulario__label">Áreas de Experiencia (seperadas por coma)</label>
        <input
             type="text"
             class="formulario__input"
             id="tags_input"
             placeholder="Ej. Node.js, PHP, Laravel, CSS, UX/UI"
        />
        <div id="tags" class="formulario__listado"></div>
        <input type="hidden" name="tags" value="<?php echo $expositor->tags ?? ''; ?>">
    </div>
</fieldset>


<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Redes Sociales</legend>

        <div class="formulario__campo">
            <div class="formulario__contenedor-icono">
                <div class="formulario__icono">
                    <i class="fa-brands fa-facebook"></i>
                </div>
                <input
                type="text"
                class="formulario__input--sociales"
                name="redes[facebook]"
                placeholder="Facebook"
                value="<?php echo $redes->facebook ?? ''; ?>"
            />
            </div>
        </div>


        <div class="formulario__campo">
            <div class="formulario__contenedor-icono">
                <div class="formulario__icono">
                    <i class="fa-brands fa-twitter"></i>
                </div>
                <input
                type="text"
                class="formulario__input--sociales"
                name="redes[twitter]"
                placeholder="Twitter"
                value="<?php echo $redes->twitter ?? ''; ?>"
            />
            </div>



            <div class="formulario__campo">
                <div class="formulario__contenedor-icono">
                    <div class="formulario__icono">
                        <i class="fa-brands fa-youtube"></i>
                    </div>
                    <input
                    type="text"
                    class="formulario__input--sociales"
                    name="redes[youtube]"
                    placeholder="YouTube"
                    value="<?php echo $redes->youtube ?? ''; ?>"
                />
            </div>


            <div class="formulario__campo">
                <div class="formulario__contenedor-icono">
                    <div class="formulario__icono">
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                    <input
                    type="text"
                    class="formulario__input--sociales"
                    name="redes[instagram]"
                    placeholder="Instagram"
                    value="<?php echo $redes->instagram ?? ''; ?>"
                />
                </div>


            <div class="formulario__campo">
                <div class="formulario__contenedor-icono">
                    <div class="formulario__icono">
                        <i class="fa-brands fa-tiktok"></i>
                    </div>
                    <input
                    type="text"
                    class="formulario__input--sociales"
                    name="redes[tiktok]"
                    placeholder="TikTok"
                    value="<?php echo $redes->tiktok ?? ''; ?>"
                />
                </div>


            <div class="formulario__campo">
                <div class="formulario__contenedor-icono">
                    <div class="formulario__icono">
                        <i class="fa-brands fa-github"></i>
                    </div>
                    <input
                    type="text"
                    class="formulario__input--sociales"
                    name="redes[github]"
                    placeholder="GitHub"
                    value="<?php echo $redes->github ?? ''; ?>"
                />
                </div>
            
        </div>
</fieldset>