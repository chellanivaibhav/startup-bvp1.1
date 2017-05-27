<?php
/* Smarty version 3.1.31, created on 2017-05-27 12:19:19
  from "/var/www/html/startup-bvp1.1/templates/mytemplate.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5929216f4aa7c2_60617751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d54ccca7d7bf72e4eafe0e3d5970c7e440565dc' => 
    array (
      0 => '/var/www/html/startup-bvp1.1/templates/mytemplate.tpl',
      1 => 1495864549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5929216f4aa7c2_60617751 (Smarty_Internal_Template $_smarty_tpl) {
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
