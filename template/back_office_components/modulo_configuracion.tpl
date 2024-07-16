
<div class="col-md-8 col-12 content-container mx-auto tabla_buscar">
<div class="container mt-5">
<input type="hidden" id="modulo_select" value="config"/>
<h2>Configuración del Sitio <i class="fa-solid fa-gears"></i></h2>
<select class="" id="search" style="float: right;">
    <option value="1">Configuracion del sitio</option>
    <option value="2">Configuracion Avanzada</option>

</select><hr/>
<div>
    <div class="form-group">
        <label for="nombre_sitio">Nombre del Sitio</label>
        <input type="text" class="form-control" id="nombre_sitio" name="nombre_sitio" maxlength="150" placeholder="Ingrese el nombre del sitio">
    </div>
    <div class="form-group">
        <label for="descripcion_slogan">Descripción del Slogan</label>
        <textarea class="form-control" id="descripcion_slogan" name="descripcion_slogar" rows="3" placeholder="Ingrese la descripción del slogan"></textarea>
    </div>
    <div class="form-group">
        <label for="descripcion_sitio">Descripción del Sitio</label>
        <textarea class="form-control" id="descripcion_sitio" name="descripcion_sitio" rows="3" placeholder="Ingrese la descripción del sitio"></textarea>
    </div>
    <div class="form-group"><hr/>
        <img class="imagenPerfil" id="favicon_img" src=""/>
        <pre>
            Puede subir su favicon formato JPG o PNG para ser visualizado en su web.
        </pre>
        <label for="favicon">Subir Favicon</label>
        <input type="file" class="form-control" id="favicon" name="favicon" maxlength="200" placeholder="Ingrese el URL del favicon">
    </div>
    <div class="form-group"><hr/>
        <img class="imagenPerfil" id="logo_img" src="" /> 
        <pre>
            La dimension para un logo de la plataforma debe de ser de 230px de anchura y 50px de altura,
            para que se pueda visualizar de una manera correcta.
        </pre>
        <label for="sitio_logo">Subir Logo</label>
        <input type="file" class="form-control" id="sitio_logo" name="sitio_logo" maxlength="200" placeholder="Ingrese el URL del logo del sitio">
    </div>
    <div class="form-group">
        <label for="copyright_descripcion">Descripción de Copyright</label>
        <textarea class="form-control" id="copyright_descripcion" name="copyright_descripcion" rows="3" placeholder="Ingrese la descripción del copyright"></textarea>
    </div>
    <div class="form-group">
        <label for="email_sitio">Email del Sitio</label>
        <input type="email" class="form-control" id="email_sitio" name="email_sitio" maxlength="180" placeholder="Ingrese el email del sitio">
    </div>
    <div class="form-group">
        <label for="busqueda_descripcion">Descripción de Búsqueda</label>
        <textarea class="form-control" id="busqueda_descripcion" name="busqueda_descripcion" rows="3" placeholder="Ingrese la descripción de búsqueda"></textarea>
    </div>
    <div class="form-group">
        <label for="pagina_descripcion">Descripción de la Página</label>
        <textarea class="form-control" id="pagina_descripcion" name="pagina_descripcion" rows="3" placeholder="Ingrese la descripción de la página"></textarea>
    </div>
    <div class="form-group">
        <label for="titulo_descripcion">Descripción del Título</label>
        <textarea class="form-control" id="titulo_descripcion" name="titulo_descripcion" rows="3" placeholder="Ingrese la descripción del título"></textarea>
    </div>
    <div class="form-group">
        <label for="busqueda_hastag">Hashtags de Búsqueda</label>
        <input type="text" class="form-control" id="busqueda_hastag" name="busqueda_hastag" placeholder="Ingrese los hashtags de búsqueda">
    </div><hr/>
    <div style="text-align: center;">
        <button type="submit" id="guardar_config" class="btn btn-dark">Guardar Configuración</button>
    </div>
  </div>
</div>




<style>
body {
    background-color: #e6e6e6; /* Dark background */
    color: white; /* White text */
}
.form-control {
    background-color: #e7ecf0;
    color: rgb(88, 87, 87);
}
.form-control::placeholder {
    color: #707070;
}
</style>

<script src="{$dominio}/js/back_office.js"></script>