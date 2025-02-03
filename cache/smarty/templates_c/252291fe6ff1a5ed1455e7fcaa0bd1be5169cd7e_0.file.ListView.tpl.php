<?php
/* Smarty version 4.5.3, created on 2025-02-03 08:26:25
  from 'C:\xampp\htdocs\crmn\SuiteCRM-7.14.6\include\SugarFields\Fields\Currency\ListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_67a06fa1a88259_61273508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '252291fe6ff1a5ed1455e7fcaa0bd1be5169cd7e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crmn\\SuiteCRM-7.14.6\\include\\SugarFields\\Fields\\Currency\\ListView.tpl',
      1 => 1738164586,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a06fa1a88259_61273508 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\crmn\\SuiteCRM-7.14.6\\include\\Smarty\\plugins\\function.sugar_currency_format.php','function'=>'smarty_function_sugar_currency_format',),));
?>

<?php echo smarty_function_sugar_currency_format(array('var'=>$_smarty_tpl->tpl_vars['amount']->value,'currency_id'=>$_smarty_tpl->tpl_vars['currency_id']->value,'currency_symbol'=>$_smarty_tpl->tpl_vars['currency_symbol']->value),$_smarty_tpl);
}
}
