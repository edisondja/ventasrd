


var get_domain = dominio.value;
var count= 0;
var config = {
    headers: {
        'Content-Type': 'multipart/form-data',
        'Authorization': `Bearer ${token_get}`
    }};
    

    if(detectar_modulo()=='users'){

        BuscarUsuarios('');

    }else if(detectar_modulo()=='boards'){

        BuscarTableros('');

    }
    

    var btn = document.querySelector('#flexSwitchCheckDefault');
/*
window.setInterval(()=>{

 
    if(count==0){

            btn.checked  = true;
            count++;
            console.log( btn.checked );
    }else{

        
        btn.checked  = false;
        count= 0;
        console.log( btn.checked );
    }

},5000);

*/

var token_get = localStorage.getItem('token');



    function BuscarUsuarios(contexto){

        let registros = '';
        let tabla = '';
        let FormDatas = new FormData();
        FormDatas.append('action','search_users');
        FormDatas.append('config','json');
        FormDatas.append('context',contexto);
        FormDatas.append('id_user',document.getElementById('id_usuario').value);
        let api_user = `${get_domain}/controllers/actions_board.php`;

        let url = new URL(api_user);
        url.searchParams.append('action', 'search_users');
        url.searchParams.append('config', 'json');
        url.searchParams.append('context', contexto);

        axios.get(url.toString(),config).then(data=>{
                        
                      registros = data.data;

                      registros.forEach(data=>{

                        console.log(data);
                        tabla+=tabla_usuario(data);
                 
                        document.getElementById("data_usuario").innerHTML=tabla;
                        AgregarEventoSwitch('users');

            
                    });
            
            
                        
                    }).catch(error=>{

                            console.log(error);
                    });


  

    }


    function DesactivarUsuario(id_usuario){

            let FormDatas = new FormData();
            FormDatas.append('action','disable_user');
            FormDatas.append('id_user',id_usuario);
            let api_user =`${get_domain}/controllers/actions_board.php`;

            axios.post(api_user,
                        FormDatas,
                        config).then(data=>{
                            
                            alertify.message(data.data);

                        }).catch(error=>{

                            alertify.message("No se pudo desactivar el usuario");

                        });
    }


    function  AgregarEventoSwitch(config){


        let asignar_switch = document.querySelectorAll('.form-check-input');

        
        asignar_switch.forEach(event=>{


                event.addEventListener('click',(object)=>{

                    let mensaje ='';

                    if(config=='users'){

                        mensaje =`Estas seguro que deseas
                        desactivar este usuario?`;                    

                    }else{

                        
                        mensaje =`Estas seguro que deseas
                        desactivar esta publicación`;                    
                        
                    }

                    alertify.confirm('Desactivar',mensaje
                    ,function(){

                        
                        if(object.target.checked==true){

                            if(config=='users'){
                                ActivarUsuario(object.target.value);

                            }else if(config=='boards'){

                                ActivarTablero(object.target.value);

                            }   
                           // alert(object.target.checked+' activar');
                        }else{

                            if(config=='users'){

                                //alert(object.target.checked+' desactivar');
                                DesactivarUsuario(object.target.value);

                            }else if(config=='boards'){

                                BloquearTablero(object.target.value);
                                
                            }
                        }

                    },function(){});
                     

                });


        });


    }

    

    function ActivarUsuario(id_user){

        let FormDatas = new FormData();
        FormDatas.append('action','enable_user');
        FormDatas.append('id_user',id_user);
        let api_user =`${get_domain}/controllers/actions_board.php`;

        axios.post(api_user,
                    FormDatas,
                    config).then(data=>{
                        
                        alertify.message(data.data);
                        
                    }).catch(error=>{

                    });
    }


    function tabla_usuario(data){
        
        let Row =
         `<tr>
           <td>${data.nombre}</td>
                <td>${data.apellido}</td>
                <td>${data.email}</td>
                <td>${data.type_user}</td>
                <td><img class="imagenPerfil" src="${get_domain}/${data.foto_url}"/></td>
                <td>
                <div class="form-check form-switch">`;
                if(data.estado=='activo'){

                 Row+=`<input class="form-check-input" 
                    type="checkbox" role="switch" checked=true  
                    value="${data.id_user}"/>
                    <label class="form-check-label" 
                    for="flexSwitchCheckDefault">Bloquear a ${data.nombre}</label>`;
                
                }else{

                    Row+=`<input class="form-check-input" 
                    type="checkbox" role="switch" 
                    value="${data.id_user}"/>
                    <label class="form-check-label" 
                    for="flexSwitchCheckDefault">Bloquear a ${data.nombre}</label>`;
                }
                Row+=`
                </div>
                </td>
            </tr>`;

            return Row;

    }

    function tabla_publicacion(){

        
    }



    function ReinciarCredenciales(){

        /*Enviar correo de comprobar de verificar usuario por aca*/

    }


    function BuscarPublicaciones(){

        
        let FormDatas = new FormData();
        FormDatas.append('action','search_boards');
        FormDatas.append('id_user',document.getElementById('id_usuario').value);
        let api_user =`${get_domain}/controllers/actions_board.php`;

        axios.get(api_user,
                    FormDatas,
                    headers).then(data=>{
                        
                        console.log(data);
                        
                    }).catch(error=>{

                    });
    }



    var buscar = document.querySelector('#search');


    buscar.addEventListener('keypress',data=>{

        let valor = data.target.value;

        /*La funcion detectar modulo captura
            el valode configuracion del modulo
            actual que se esta actulizando
            para asi usar la barra de busqueda
            para diferentes entidades
        */

        switch(detectar_modulo()){

            case 'users':

                BuscarUsuarios(valor);

            break;


            case 'boards':

                BuscarTableros(valor);

            break;


            case 'config':


            break;

        }


    });


    function detectar_modulo(){

        let mod = document.querySelector('#modulo_select').value;

        return mod;
    }

    function BuscarTableros(contexto){


        let registros = '';
        let tabla = '';
        let FormDatas = new FormData();
        FormDatas.append('action','ssearch_boards');
        FormDatas.append('config','json');
        FormDatas.append('context',contexto);
        let api_user = `${get_domain}/controllers/actions_board.php`;

        let url = new URL(api_user);
        url.searchParams.append('action', 'search_boards');
        url.searchParams.append('config', 'json');
        url.searchParams.append('context', contexto);

        axios.get(url.toString(),config).then(data=>{
                        
                      registros = data.data;

                      registros.forEach(data=>{

                        console.log(data);
                        tabla+=tabla_board(data);
                 
                        document.getElementById("data_boards").innerHTML=tabla;
                        AgregarEventoSwitch('boards');

            
                    });
            
            
                        
                    }).catch(error=>{

                            console.log(error);
                    });



    }


    function tabla_board(data) {

       
        let Row = `
                <tr>  
                    <td>${data.descripcion.substring(0,10)}..</td>
                    <td><img class="imagenPerfil" 
                        src="${get_domain}/${data.imagen_tablero}" 
                         onerror="this.onerror=null; this.src='${get_domain}/assets/no_found.png'"/>
                    </td>
                    <td>${data.fecha_creacion}</td>
                    <td>${data.estado}</td>
                    <td><img class="imagenPerfil" src="${get_domain}/${data.foto_url}" /></td>
                    <td>${data.usuario}</td>
                    <td>
                        <div class="form-check form-switch">`;
                        
            if (data.estado == 'activo') {
                Row += `<input class="form-check-input" 
                                type="checkbox" 
                                role="switch" 
                                checked=true  
                                value="${data.id_tablero}" />
                            <label class="form-check-label" 
                                for="flexSwitchCheckDefault">
                                Bloquear tablero
                            </label>`;
            } else {
                Row += `<input class="form-check-input" 
                                type="checkbox" 
                                role="switch" 
                                value="${data.id_tablero}" />
                            <label class="form-check-label" 
                                for="flexSwitchCheckDefault">
                                Bloquear tablero
                            </label>`;
            }
            
            Row += `</div>
                    </td>
                </tr>`;
            
        return Row;
    }
    


    
    function BloquearTablero(id_tablero){

        let FormDatas = new FormData();
        FormDatas.append('action','block_board');
        FormDatas.append('id_board',id_tablero);
        FormDatas.append('id_usuario',id_usuario.value);

        let api_user =`${get_domain}/controllers/actions_board.php`;

        axios.post(api_user,
                    FormDatas,
                    config).then(data=>{
                        
                        alertify.message(data.data);

                    }).catch(error=>{

                        alertify.message("No se pudo desactivar el tablero");

                    });
    }


    function ActivarTablero(id_tablero){

        let FormDatas = new FormData();
        FormDatas.append('action','active_board');
        FormDatas.append('id_board',id_tablero);
        FormDatas.append('id_usuario',id_usuario.value);
        

        let api_user =`${get_domain}/controllers/actions_board.php`;

        axios.post(api_user,
                    FormDatas,
                    config).then(data=>{
                        
                        alertify.message(data.data);

                    }).catch(error=>{

                        alertify.message("No se pudo activar el tablero");

                    });
    }



    if(detectar_modulo()=='config'){



            let subir_logo = document.querySelector('#sitio_logo');

            subir_logo.addEventListener('change',function(){


                alert('subir_logo');


            });

            let subir_favicon = document.querySelector('#favicon');

            subir_favicon.addEventListener('change',function(){

                alert('subir_favicon');


            });


            document.getElementById('guardar_config').addEventListener('click', function(event) {



                let nombre_sitio = document.getElementById('nombre_sitio').value;
                let descripcion_slogan = document.getElementById('descripcion_slogan').value;
                let descripcion_sitio = document.getElementById('descripcion_sitio').value;
                let copyright_descripcion =  document.getElementById('copyright_descripcion').value;
                let email_sitio = document.getElementById('email_sitio').value;
                let busqueda_descripcion = document.getElementById('busqueda_descripcion').value;
                let pagina_descripcion = document.getElementById('pagina_descripcion').value;
                let titulo_descripcion = document.getElementById('titulo_descripcion').value;
                let busqueda_hastag = document.getElementById('busqueda_hastag').value;

                let api_config =`${get_domain}/controllers/actions_board.php`;

                let FormDatas = new FormData();
                FormDatas.append('action','config_site_text');
                FormDatas.append('nombre_sitio',nombre_sitio);
                FormDatas.append('descripcion_slogan',descripcion_slogan);
                FormDatas.append('descripcion_sitio',descripcion_sitio);
                FormDatas.append('email_sitio',email_sitio);
                FormDatas.append('busqueda_descripcion',busqueda_descripcion);
                FormDatas.append('titulo_descripcion',titulo_descripcion);
                FormDatas.append('busqueda_hastag',busqueda_hastag);


                axios.post(api_config,
                    FormDatas,
                    config).then(data=>{

                    
                    message.alertify('Datos del sitio actualizado con exito');

                }).catch(error=>{

                    message.alertify('Error actualizando sitio')

                });

                
        
            });
    }



