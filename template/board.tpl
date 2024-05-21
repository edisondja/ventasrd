


<div class="col-sm-3">
</div>
<div class="col-sm-6" style='margin-bottom:15px;'>

           <div class='card text-white bg-dark mb-3'>
           
                      <div class='body' style='padding:5px'>
                        <div class='title'><strong><a href='{$url_board}/profile_user.php?user={$tablero.usuario}'> <img class='imagenPerfil' src='{$dominio}/{$tablero.foto_url}'/></a>
                          {$tablero.nombre} {$tablero.apellido} <i class="fa-solid fa-highlighter"></i></strong></div>
                     
                      
                        <a href="{$dominio}/single_board.php?id={$tablero.id_tablero}/{$tablero.titulo|replace:" ":"_"}">
                          {if $tablero.imagen_tablero!=='imagen_board.jpg'}
                            
                            <a href="{$dominio}/single_board.php?id={$tablero.id_tablero}/{$tablero.titulo|replace:" ":"_"}">
                            <img src="{$dominio}/{$tablero.imagen_tablero}" style='' class="card-img-top" alt="...">
                            </a>

                          {else}

                            <a href="{$dominio}/single_board.php?id={$tablero.id_tablero}/{$tablero.titulo|replace:" ":"_"}">
                            <p style='padding-left: 10px;    text-decoration: none '>{$tablero.descripcion}​</p>
                            </a>
                          {/if}
                        </a>
                      </div>
                      <p class='p'  style='padding:5px;'>
                        
                      </p>

                         <div class="card-footer" style='float:right'>
                              <div style='float:right'>
                                 <i class="fa-solid fa-thumbs-up"style='display:none'></i>
                                <i class="fa-solid fa-bookmark" style='display:none'></i>
                                <i class="fa-regular fa-share-from-square" style='cursor:pointer'></i>
                                <i class="fa-regular fa-thumbs-up" style='cursor:pointer'></i>
                                <i class="fa-regular fa-comment-dots" style='cursor:pointer'></i>
                                <i class="fa-regular fa-bookmark" style='cursor:pointer'></i>
                              </div>
                        </div>
                </div>
</div>
<div class="col-sm-3"></div>