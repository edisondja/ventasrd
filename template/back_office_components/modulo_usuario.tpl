{* archivo: search_component.tpl *}
<style>
    .content-container {
        margin-top: 50px;
        padding: 30px;
        background-color: #495057;
        border-radius: 10px;
    }
    h3 {
        margin-bottom: 30px;
    }
    .flex-container {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }
    .checkbox-p {
        margin-right: 10px;
    }
    .table-dark th, .table-dark td {
        color: #f8f9fa;
    }
    .table-dark th {
        background-color: #6c757d;
    }
    .table-dark td {
        background-color: #495057;
    }
</style>

<div class="col-md-8 col-12 content-container mx-auto">
    <input type="search" class="form-control mb-4" id="search" placeholder="Busca lo que deseas">
    <hr/>

    <h3 style="color: aliceblue;">Buscar usuarios</h3>

    <table class="table table-dark table-striped">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Tipo de usuario</th>
            <th>Foto</th>
            <th>Block</th>
            <th>Enviar Correo</th>
        </tr>
    </thead>
        <tbody id="data_usuario">
            
        </tbody>
    </table>

</div>

<script src="{$dominio}/js/back_office.js"></script>