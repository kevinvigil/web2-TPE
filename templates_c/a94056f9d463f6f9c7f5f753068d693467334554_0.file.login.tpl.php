<?php
/* Smarty version 3.1.39, created on 2021-10-10 19:20:57
  from 'C:\xampp\htdocs\proyectos\web2\p2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616320f9a46976_79857562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a94056f9d463f6f9c7f5f753068d693467334554' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\web2\\p2\\templates\\login.tpl',
      1 => 1633886453,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_616320f9a46976_79857562 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="contenido">
    <div>
        <h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>

    </div>
    <div>
        <form action="verify" method="post">
            <input placeholder="email" type="text" name="email" id="email" required>
            <input placeholder="password" type="password" name="password" id="password" required>
            <input type="submit" value="Enter">
        </form>
        <form action="register" method="post">
        <button type="submit">Register</button>
        </form>
        <form action="invitado" method="post">
            <button type="submit">Invited</button>
        </form>
    <div>
    <h3 class="alert"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h3>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
