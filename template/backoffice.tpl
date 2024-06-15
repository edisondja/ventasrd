
<div class="container-fluid">
<div class="row">
    {include file='menu_backoffice.tpl'}
    {include file='enviar_correo.tpl'}
    <style>

</style>

<div class="col-md-8 col-12 content-container mx-auto">
    <input type="search" class="form-control mb-4" placeholder="Busca lo que deseas">
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
        <tbody>
            <tr>
                <td>Edison</td>
                <td>De Jesus Abreu</td>
                <td>edisondja@gmail.com</td>
                <td>admin</td>
                <td>Foto</td>
                <td>Block</td>
                <td>edisondja@gmail.com</td>
            </tr>
        </tbody>
    </table>
</div>

    
</div>
</div>

<style>
    .content-container {
        margin-top: 50px;
        padding: 30px;
        background-color:#1a1c1d;
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