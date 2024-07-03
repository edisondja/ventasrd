
window.onload=function(){


 
    var login = document.querySelector('#login');
    var dominio = document.querySelector('#dominio').value;
    var public_post = document.querySelector('#public_post');
    var foto_perfil = document.querySelector('#foto_perfil').value;
    var nombre_usuario = document.querySelector('#nombre_usuario').value;
    var user_update = document.querySelector(".user_update");
    var token_get = '';
    let update_user_profile = document.querySelector('#user_update');
    var my_boards = document.querySelectorAll('.fa-trash');
    var files_json=[];
    var id_medias=0;
    var FormDatas_board = new FormData();

   

    /*Es te fragmento de codigo es para detectar todos los tableros del usuario que inicio sesión 
        asignandole el evento de poder eliminar su publicación si lo desea.
    */
    if(my_boards){

        my_boards.forEach(board=>{


                board.addEventListener('click',(e)=>{


                    let id_board=e.target.getAttribute('data-value');
                    
                    
                    alertify.confirm('Eliminar publicación','Estas seguro que deseas eliminar esta publicación',function(){

                        alertify.message(`Eliminado ${id_board}`);
                        document.querySelector(`#board${id_board}`).remove();

                        let FormDatas = new FormData();
                        FormDatas.append('action','drop_board');
                        FormDatas.append('id_user',document.getElementById('id_usuario').value);
                        FormDatas.append('id_board',id_board);

                        //board${$table.id_tablero}
                        axios.post(`${dominio}/controllers/actions_board.php`,FormDatas,{headers:{
                            'Authorization': `Bearer ${localStorage.getItem('token')}`
                        }}).then(info=>{
                
                                console.log(info);
                                //alertify.message('Cambios guardados con exito');
                        
                        }).catch(error=>{

                            console.log(error);

                        });


                                            

                    },function(){

                    });
                        
                });

        });


    }else{

        console.log('no tienes publicaciones');
    }


    if(update_user_profile){
        
        update_user_profile.addEventListener('click',function(){
            cargar_data_usuario();
        });

    }else{

        console.log('selector no encontrado aqui');
    }



    function cargar_data_usuario(){
        
        token_get ="";


        if(document.getElementById('id_usuario').value!==0){

            token_get = localStorage.getItem('token');

        }

        let FormDatas = new FormData();
        FormDatas.append('action','user_info');
        FormDatas.append('user_id',document.getElementById('id_usuario').value);
;

        axios.post(`${dominio}/controllers/actions_board.php`,FormDatas,{headers:{
                'Content-Type': 'multipart/form-data',
                'Authorization': `Bearer ${token_get}`
        }
        }).then(info=>{
            console.log(info);
            document.getElementById('usuario_form').value = info.data.usuario;
            document.getElementById('clave').value = ''; // Dejar vacío para que el usuario pueda ingresar una nueva contraseña
            document.getElementById('nombre').value = info.data.nombre;
            document.getElementById('apellido').value = info.data.apellido;
            document.getElementById('bio').value = info.data.bio;
            //document.getElementById('sexo').value = info.data.sexo || ''; // Manejar el caso donde el sexo puede ser null
            // Cargar la foto si es necesaria
            document.getElementById('foto_url').src = info.data.foto_url || '/assets/default_profile.png'; // Usar una imagen por defecto si no hay foto

            
            
       
        }).catch(error=>{

        console.log(error);

        });

    }




    user_update.addEventListener('click',function(){

        cargar_data_usuario();

    });

    


    
    login.addEventListener('click',function(){

        let usuario =  document.querySelector('#usuario').value;
        let clave =  document.querySelector('#clave').value;

        let FormDatas = new FormData();
        FormDatas.append('action','login');
        FormDatas.append('usuario',usuario);
        FormDatas.append('clave',clave);

       // localStorage.setItem('myCat', 'Tom');
       //const cat = localStorage.getItem('myCat');
       //localStorage.clear();
        /*
        headers: {
                'Content-Type': 'multipart/form-data',
                'Authorization': `Bearer ${token}`
                 
              }
        */

        axios.post(`controllers/actions_board.php`,FormDatas).then(data=>{


        

            if(data.data.estado=='activo'){
            
                localStorage.setItem('token',data.data.token);
                localStorage.setItem('usuario',data.data.usuario);
                location.href=dominio;

            }else if(data.data.estado=='inactivo'){

                alertify.confirm('Notifiación',`Estimado usuario lamentamos 
                informarle que su cuenta esta inactiva, ya si su cuenta fue
                activada anteriorante, significa que fue inactivada por
                la administración.
                
                `,function(){},function(){});

                Singout_f('no_redirect');
            }else{

                alertify.confirm('Notifiación',`Usuario
                o contraseña incorrecto.
                `,function(){},function(){});

            }

            //alert(localStorage.getItem('token'));
            /*localStorage.setItem('name',token);
            localStorage.setItem('token',token);
            localStorage.setItem('token',token);*/

        }).catch(error=>{

            alertify.warning(error);

        });


    });


    document.querySelector('#update_changes').addEventListener('click', function(event) {
                event.preventDefault(); // Prevent the default form submission
       
                
                // alertify.message('Leyo el evento que mas desea hacer');
                // Gather form data
                let usuario = document.querySelector('#usuario_form').value;
                let fotoUrl = document.querySelector('#foto_url').files[0];
                let nombre = document.querySelector('#nombre').value;
                let apellido = document.querySelector('#apellido').value;
                let bio = document.querySelector('#bio').value;
                let sexo = document.querySelector('#sexo').value;
                // Create FormData object and append form values
                let formDatas = new FormData();
                formDatas.append('action', 'update_user');
                formDatas.append('user_id', document.querySelector('#id_usuario').value);
                formDatas.append('image', fotoUrl);
                formDatas.append('username',usuario);
                formDatas.append('sex', sexo);
                formDatas.append('name', nombre);
                formDatas.append('last_name', apellido);
                formDatas.append('bio', bio);

                if(fotoUrl==null){
        
                        let index =  foto_perfil.indexOf('/images');  
                        let newUrl = foto_perfil.substring(index); 
                        formDatas.append('image',newUrl);
                
                }

                axios.post(`${dominio}/controllers/actions_board.php`,formDatas,{headers:{
                            'Content-Type': 'multipart/form-data',
                            'Authorization': `Bearer ${token_get}`

                }}).then(info=>{
        
                        alertify.message('Cambios guardados con exito');
                
                }).catch(error=>{

                    console.log(error);

                });





    });





    var subir_imagen = document.querySelector('#upload_image');

  

    subir_imagen.addEventListener('click',function(){

            document.querySelector('#upload_images').click();
    });


    function generar_media(data){


        data.forEach(data=>{

            FormDatas_board.append('media[]',data.media);
           

        });

        console.log('Archivos media actual',data);
    }


    var subir_imagen =  document.querySelector('#upload_images');
    var count = 0;
    subir_imagen.addEventListener('change',data=>{

            console.log(data.target.files);
            
            let files = data.target.files.length;


            for(i=0;i<files;i++){
                id_medias++;
                console.log(data.target.files[i].name);
                var media = URL.createObjectURL(data.target.files[i]);
                count++;
                
                files_json.push({
                        archivo_id:`fig${id_medias}`,
                        media:data.target.files[i]
                });
                

                if(data.target.files[i].type=='image/jpeg' || data.target.files[i].type=='image/png'){
                        document.querySelector('#multimedia_view').innerHTML+=`
                        <figure id='fig${id_medias}'>
                        <figcaption><i class="fa-solid fa-delete-left" style='float:right' id='${id_medias}'></i></figcaption>
                        <img src='${media}'  class='Miniatura'>
                        </figure>`;
                }else{
                        document.querySelector('#multimedia_view').innerHTML+=`
                        <figure id='fig${id_medias}'>
                        <figcaption><i class="fa-solid fa-delete-left" style='float:right' id='${id_medias}'></i></figcaption>
                        <video src='${media}'controls' class='Miniatura'></video>
                        </figure>`;
                }

             
            }


            let figure = document.querySelectorAll('figcaption');


            generar_media(files_json);

            figure.forEach(data=>{

                    //aqui se debe de eliminar el archivo formData.append("media",data.target.files[i]) correspo
                data.addEventListener('click',data=>{
                    
                    document.querySelector(`#fig${data.target.id}`).style.display='none';
                    let id_archivo_json = `fig${data.target.id}`;

                    alert(id_archivo_json);

                    let actualizar_archivos = files_json.filter(archivo=>archivo.archivo_id!==id_archivo_json);
                    
                    files_json = actualizar_archivos;

                    generar_media(files_json);

                });

            });



    });


    function subir_imagen(){


        var formData = new FormData();
        var imagefile = document.querySelector('#file');
        formData.append("image", imagefile.files[0]);
        axios.post('upload_file', formData, {
            headers: {
            'Content-Type': 'multipart/form-data'
            }
        })


    }


    var post = document.querySelector('#post');


    post.addEventListener('click', function() {
        // Verifica si el campo de título del tablero está vacío
        if (document.querySelector('#board_title').value === '') {
            alertify.message('No puedes dejar el campo de texto vacío');
            return;
        }

        //visualizando barra de subida de archivos

        document.querySelector('.progress').style.display = 'block';
        document.querySelector('#porcentaje').style.display = 'block';

        // Agrega los datos del formulario a FormDatas_board
        FormDatas_board.append('action', 'create_board');
        FormDatas_board.append('description', document.querySelector('#board_title').value);
        FormDatas_board.append('user_id', document.querySelector('#id_usuario').value);
    
        // Configuración para el progreso de carga del archivo
        const config = {
            headers: {
                'Content-Type': 'multipart/form-data',
                'Authorization': `Bearer ${token_get}`
            },
            onUploadProgress: function(progressEvent) {
                // Muestra la barra de progreso
                // Calcula el porcentaje completado
                const percentCompleted = Math.round((progressEvent.loaded * 100) / progressEvent.total);
                // Actualiza la barra de progreso
                document.querySelector('.progress').value=percentCompleted;
                document.querySelector('#porcentaje').innerHTML=`${percentCompleted}%`;

            }
        };
    
        // Envía la solicitud POST usando Axios
        axios.post(`${dominio}/controllers/actions_board.php`, FormDatas_board, config)
            .then(response => {
                // Oculta la barra de progreso al completar la solicitud
                  document.querySelector('.progress').style.display = 'none';
                  document.querySelector('#porcentaje').style.display='none';
                console.log(response.data);
                // Aquí puedes redirigir o actualizar la página según tus necesidades
                // location.href = dominio;
            })
            .catch(error => {
                // Manejo de errores
                document.querySelector('.progress').style.display = 'none';
                console.error('Error en la solicitud:', error);
                alertify.error('Ocurrió un error al enviar el formulario');
            });
    });



    function Singout_f(config='redirect'){

        localStorage.clear();
        let FormDatas = new FormData();
        FormDatas.append('action','sigout');

        axios.post(`${dominio}/controllers/actions_board.php`,FormDatas).then(data=>{
                console.log(data.data);

            // alertify.message('cerrando sesión');
                localStorage.clear();
                if(config=='redirect'){
                    
                    location.href=dominio;      

                }
        }).catch(error=>{

            alertify.warning(error);
            console.log(error);

        });
    }


    var singout = document.querySelector('#singout');

    if(singout){

            singout.addEventListener('click',function(){
        
                Singout_f();
            });

    }

    function handleScroll() {
        if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
            // Si se alcanza el final de la página, carga más datos
           // alertify.message('llego al final de la pagina');
        }
    }
    
    // Evento de desplazamiento para detectar cuándo se alcanza el final de la página
    window.addEventListener('scroll', handleScroll);



}


