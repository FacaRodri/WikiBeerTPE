<?php
/* Smarty version 3.1.33, created on 2018-10-19 00:10:31
  from 'C:\xampp\htdocs\WikiBeerTPE\templates\cerveza.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc904d77aa003_27267184',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80d590eabdce7ed8a60fc466f6192b5540f62d40' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WikiBeerTPE\\templates\\cerveza.tpl',
      1 => 1539900630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc904d77aa003_27267184 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
<table class="tablaTipos" aling="center">
    <thead>
            <td>
              Nombre
            </td>
            <td>
              Precio
            </td>
            <td>
              Editar
            </td>
            <td>
              Borrar
            </td>
          </thead>
      <ul class="list-group">

      </ul>
    </div>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cervezas']->value, 'cerveza');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cerveza']->value) {
?>
        <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['cerveza']->value['nombre'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['cerveza']->value['precio'];?>
</td>
        <td> <a href="editarCerveza/<?php echo $_smarty_tpl->tpl_vars['cerveza']->value['id_cerveza'];?>
">EDITAR</a> </td>
        <td> <a href="Delete/<?php echo $_smarty_tpl->tpl_vars['cerveza']->value['id_cerveza'];?>
">BORRAR</a> </td></tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
     
    <div class="container">
      <h4 class="editar" >AGREGAR CERVEZA</h4>
      <form method="post" action="InsertCerveza">
        <div class="form-group">
          <label class="editar" for="nombre">Cerveza</label>
          <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="form-group">
          <label class="editar" for="precio">Precio</label>
          <input type="text" class="form-control" id="precio" name="precio">
        </div>
         <div class="form-group">
          <label class="editar" for="tituloForm">Distribuidor</label>
           <select name="id_creador">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['creador']->value, 'creadores');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['creadores']->value) {
?>
                          <option value="<?php echo $_smarty_tpl->tpl_vars['creadores']->value['id_creador'];?>
" > <?php echo $_smarty_tpl->tpl_vars['creadores']->value['nombre'];?>
 </option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
      </form>
      </table>
    </div><?php }
}
