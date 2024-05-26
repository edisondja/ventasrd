
window.onload=function(){


 
    var login = document.querySelector('#login');
    var dominio = document.querySelector('#dominio').value;
    var public_post = document.querySelector('#public_post');
    var foto_perfil = document.querySelector('#foto_perfil').value;
    var nombre_usuario = document.querySelector('#nombre_usuario').value;
    var user_update = document.querySelector('#user_update');
    



    user_update.addEventListener('click',function(){

        

        let token_get ="";


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
            document.getElementById('usuario').value = info.data.usuario;
            document.getElementById('clave').value = ''; // Dejar vacío para que el usuario pueda ingresar una nueva contraseña
            document.getElementById('nombre').value = info.data.nombre;
            document.getElementById('apellido').value = info.data.apellido;
            document.getElementById('bio').value = info.data.bio;
            document.getElementById('sexo').value = info.data.sexo || ''; // Manejar el caso donde el sexo puede ser null
            // Cargar la foto si es necesaria
            document.getElementById('foto_url').src = info.data.foto_url || '/assets/default_profile.png'; // Usar una imagen por defecto si no hay foto
       
        }).catch(error=>{

        console.log(error);

        });




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


    document.querySelector('#updateUserForm').addEventListener('submit', function(event) {
                event.preventDefault(); // Prevent the default form submission
       
                
            alertify.message('Leyo el evento que mas desea hacer');
                // Gather form data
                let usuario = document.querySelector('#usuario').value;
                let clave = document.querySelector('#clave').value;
                let claveConfirm = document.querySelector('#clave_confirm').value;
                let fotoUrl = document.querySelector('#foto_url').files[0];
                let nombre = document.querySelector('#nombre').value;
                let apellido = document.querySelector('#apellido').value;
                let bio = document.querySelector('#bio').value;

                // Check if passwords match
                if (clave !== claveConfirm) {
                    alert('Las contraseñas no coinciden.');
                    return;
                }

                // Create FormData object and append form values
                let formDatas = new FormData();
                formDatas.append('action', 'update');
                formDatas.append('usuario', usuario);
                formDatas.append('clave', clave);
                formDatas.append('foto_url', fotoUrl);
                formDatas.append('nombre', nombre);
                formDatas.append('apellido', apellido);
                formDatas.append('bio', bio);

                // Send form data to the server using fetch
                fetch('/ruta_del_servidor', {
                    method: 'POST',
                    body: formDatas
                })
                .then(response => response.json())
                .then(data => {
                    // Handle server response
                    if (data.success) {
                        alert('Datos actualizados correctamente.');
                        // Additional handling for successful update
                    } else {
                        alert('Hubo un error al actualizar los datos.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Hubo un error al enviar los datos.');
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


