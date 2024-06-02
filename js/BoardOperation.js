
window.onload=function(){


 
    var login = document.querySelector('#login');
    var dominio = document.querySelector('#dominio').value;
    var public_post = document.querySelector('#public_post');
    var foto_perfil = document.querySelector('#foto_perfil').value;
    var nombre_usuario = document.querySelector('#nombre_usuario').value;
    var user_update = document.querySelector(".user_update");
    var token_get = '';
    let update_user_profile = document.querySelector('#user_update');

   

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


            location.href=dominio;
            localStorage.setItem('token',data.data.token);
            localStorage.setItem('usuario',data.data.usuario);

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
        
                            console.log(info);
                
                }).catch(error=>{

                    console.log(error);

                });





    });





    var subir_imagen = document.querySelector('#upload_image');

  

    subir_imagen.addEventListener('click',function(){

            document.querySelector('#upload_images').click();
    });



    var subir_imagen =  document.querySelector('#upload_images');
    var count = 0;
    subir_imagen.addEventListener('change',data=>{

            console.log(data.target.files);
            
            let files = data.target.files.length;

            var formData = new FormData();


            for(i=0;i<files;i++){

                console.log(data.target.files[i].name);
                var media = URL.createObjectURL(data.target.files[i])
                count++;


                formData.append("media",data.target.files[i]);

                if(data.target.files[i].type=='image/jpeg' || data.target.files[i].type=='image/png'){

                    
                    document.querySelector('#multimedia_view').innerHTML+=`
                    <figure id='fig${i}'>
                    <figcaption><i class="fa-solid fa-delete-left" style='float:right' id='${i}'></i></figcaption>
                    <img src='${media}' style='margin:2px;height:130px; width:130px;'>
                    </figure>`;

                   
                }else{

                    document.querySelector('#multimedia_view').innerHTML+=`
                    <figure id='fig${i}'>
                    <figcaption><i class="fa-solid fa-delete-left" style='float:right' id='${i}'></i></figcaption>
                    <video src='${media}' controls style='margin:2px;height:130px;width:130px;'></video>
                    </figure>
                 `;
                    
                }


                formData.forEach(data=>{

                    console.log(data);


                });
            }


            let figure = document.querySelectorAll('figcaption');

            figure.forEach(data=>{

                    
                data.addEventListener('click',data=>{

                        document.querySelector(`#fig${data.target.id}`).style.display='none';

                        
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


    post.addEventListener('click',function(){

        let FormDatas = new FormData();
        FormDatas.append('action','create_board');
        FormDatas.append('description',document.querySelector('#board_title').value);
        FormDatas.append('user_id',document.querySelector('#id_usuario').value);

      // alertify.message('pero bien que esta funcionando esto');

        axios.post(`${dominio}/controllers/actions_board.php`,FormDatas).then(data=>{

            alertify.message('Has publicado con exito tu oferta');

            window.setInterval(function(){
                
                location.href=dominio;

            },2000);

            console.log(data.data);

        }).catch(error=>{



        });


    });


    var singout = document.querySelector('#singout');

    singout.addEventListener('click',function(){

        
        localStorage.clear();
        let FormDatas = new FormData();
        FormDatas.append('action','sigout');


        axios.post(`${dominio}/controllers/actions_board.php`,FormDatas).then(data=>{

                console.log(data.data);

                alertify.message('cerrando sesión');
                storage.clear();
                localStorage.clear();
                location.href=dominio;
            
           

        }).catch(error=>{

            alertify.warning(error);

        });



    });

}


