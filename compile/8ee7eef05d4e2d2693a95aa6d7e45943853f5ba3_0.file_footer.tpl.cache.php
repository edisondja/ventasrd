<?php
/* Smarty version 5.1.0, created on 2024-06-17 01:28:30
  from 'file:footer.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_666f751e703f81_42023560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ee7eef05d4e2d2693a95aa6d7e45943853f5ba3' => 
    array (
      0 => 'footer.tpl',
      1 => 1715445650,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_666f751e703f81_42023560 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\ventasrd\\template';
$_smarty_tpl->getCompiled()->nocache_hash = '1831531865666f751e6fa899_26253707';
?>

            
            <?php if ($_smarty_tpl->getValue('content_config') == 'boards') {?>
              <nav aria-label="Page navigation example" >
                <ul class="pagination"  style="margin-left:30%; margin-top:5px">
                  <li class="page-item" id='retroceder'>
                    <a class="page-link"  style='cursor:pointer' aria-label="Next">
                      <span aria-hidden="true" >Back</span>
                    </a>
                  </li>
                  <li class="page-item" id='avanzar'>
                    <a class="page-link" style='cursor:pointer' aria-label="Next">
                      <span aria-hidden="true" >Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
              <input type='hidden' id='pagina' value='<?php echo $_smarty_tpl->getValue('pagina');?>
'/>
            <?php } else { ?>
            <?php }?>
            <br><hr>
            <footer class="bg-dark text-center text-white">
          
              
            </footer>
      </div> 
  </body>
</html><?php }
}
