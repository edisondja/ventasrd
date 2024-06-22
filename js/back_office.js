


var get_domain = dominio.value;
var count= 0;
var config = {
    headers: {
        'Content-Type': 'multipart/form-data',
        'Authorization': `Bearer ${token_get}`
    }};


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
                        
                        console.log(data);
                        
                    }).catch(error=>{

                            console.log(error);

                    });

    }


    function DesactivarUsuario(id_usaurio){

            let FormDatas = new FormData();
            FormDatas.append('action','disable_user');
            FormDatas.append('id_user',id_usuario);
            let api_user =`${get_domain}/controllers/actions_board.php`;

            axios.get(api_user,
                        FormDatas,
                        headers).then(data=>{
                            
                            console.log(data);
                            
                        }).catch(error=>{

                        });


    }



    function ActivarUsuario(id_usaurio){

        let FormDatas = new FormData();
        FormDatas.append('action','enable_user');
        FormDatas.append('id_user',id_usuario);
        let api_user =`${get_domain}/controllers/actions_board.php`;

        axios.get(api_user,
                    FormDatas,
                    headers).then(data=>{
                        
                        console.log(data);
                        
                    }).catch(error=>{

                    });
    }


    function tabla_usuario(data){
            
        return `<tr>
           <td>${data.nombre}</td>
                <td>${data.nombre}</td>
                <td>${data.email}</td>
                <td>${data.type_user}</td>
                <td><img class="imagenPerfil" src="${get_domain}/${data.foto_url}"/></td>
                <td>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Bloquear a ${data.nombre}</label>
                </div>
                </td>
                <td>edisondja@gmail.com</td>
            </tr>`;

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

        BuscarUsuarios(valor);


    });












