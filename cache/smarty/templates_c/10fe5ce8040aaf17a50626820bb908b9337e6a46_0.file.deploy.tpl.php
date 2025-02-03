<?php
/* Smarty version 4.5.3, created on 2025-01-30 08:44:13
  from 'C:\xampp\htdocs\crmn\SuiteCRM-7.14.6\modules\ModuleBuilder\tpls\MBPackage\deploy.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_679b2dcd7b4ba7_96898416',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10fe5ce8040aaf17a50626820bb908b9337e6a46' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crmn\\SuiteCRM-7.14.6\\modules\\ModuleBuilder\\tpls\\MBPackage\\deploy.tpl',
      1 => 1738164363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_679b2dcd7b4ba7_96898416 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\crmn\\SuiteCRM-7.14.6\\include\\Smarty\\plugins\\function.sugar_getimage.php','function'=>'smarty_function_sugar_getimage',),));
echo smarty_function_sugar_getimage(array('name'=>"img_loading",'alt'=>$_smarty_tpl->tpl_vars['mod_strings']->value['LBL_LOADING'],'ext'=>".gif",'other_attributes'=>'align="absmiddle" '),$_smarty_tpl);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['message']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['package']->value;?>

<?php echo '<script'; ?>
 type='text/javascript' language='Javascript'>ModuleBuilder.beginDeploy('<?php echo $_smarty_tpl->tpl_vars['package']->value;?>
');<?php echo '</script'; ?>
>	
<?php }
}
