<?php
/* Smarty version 3.1.31, created on 2017-05-27 22:29:24
  from "/var/www/html/startup-bvp1.1/templates/mytemplate.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5929b06c6bec13_67135584',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80dbe00478d21cd74936c7551d628fcf0a5daad4' => 
    array (
      0 => '/var/www/html/startup-bvp1.1/templates/mytemplate.tpl',
      1 => 1495899503,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5929b06c6bec13_67135584 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
<title>Info</title>
</head>
<body>

<pre>
User Information:

Name: <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

Address: <?php echo $_smarty_tpl->tpl_vars['address']->value;?>

</pre>

</body>
</html><?php }
}
