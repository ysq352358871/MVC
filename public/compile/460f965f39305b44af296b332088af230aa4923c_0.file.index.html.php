<?php
/* Smarty version 3.1.30, created on 2017-03-02 06:10:09
  from "D:\wamp\wamp\www\2.28MVC\public\template\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b7a931cb9eb3_65153712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '460f965f39305b44af296b332088af230aa4923c' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\2.28MVC\\public\\template\\index\\index.html',
      1 => 1488431390,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b7a931cb9eb3_65153712 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
1.css">
</head>
<body>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
<li><?php echo $_smarty_tpl->tpl_vars['v']->value["name"];?>
</li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</body>
</html><?php }
}
