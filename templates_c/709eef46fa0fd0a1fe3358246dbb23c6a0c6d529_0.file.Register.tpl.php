<?php
/* Smarty version 3.1.39, created on 2021-10-10 19:31:35
  from 'C:\xampp\htdocs\proyectos\web2\p2\templates\Register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6163237727a720_25018318',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '709eef46fa0fd0a1fe3358246dbb23c6a0c6d529' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\web2\\p2\\templates\\Register.tpl',
      1 => 1633887090,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6163237727a720_25018318 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="contenido">
    <div>
        <h2><?php echo $_smarty_tpl->tpl_vars['register']->value;?>
</h2>

    </div>
    <div>
        <form action="adduser" name='user' method="post">
            <input placeholder="email" type="text" name="email" id="email" required>
            <input placeholder="password" type="password" name="password" id="password">
            <input type="submit" value="Register">
        </form>
        <form action="login" method="post">
            <button type="submit">Enter</button>
        </form>
        <form action="invitado" method="post">
            <button type="submit">Invited</button>
        </form>
    <div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
