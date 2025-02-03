<?php
/* Smarty version 4.5.3, created on 2025-02-03 11:46:19
  from 'C:\xampp\htdocs\crmn\SuiteCRM-7.14.6\modules\ModuleBuilder\tpls\assistantJavascript.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_67a09e7bcc2038_06946477',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f233f04f25f322823df2a758995c46d5b79ea77b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crmn\\SuiteCRM-7.14.6\\modules\\ModuleBuilder\\tpls\\assistantJavascript.tpl',
      1 => 1738164362,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a09e7bcc2038_06946477 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>

if(typeof(Assistant)!="undefined" && Assistant.mbAssistant){
	//Assistant.mbAssistant.render(document.body);

<?php if ($_smarty_tpl->tpl_vars['userPref']->value) {?>
	Assistant.processUserPref("<?php echo $_smarty_tpl->tpl_vars['userPref']->value;?>
");
<?php }
if ($_smarty_tpl->tpl_vars['assistant']->value['key'] && $_smarty_tpl->tpl_vars['assistant']->value['group']) {?>
	Assistant.mbAssistant.setBody(SUGAR.language.get('ModuleBuilder','assistantHelp').<?php echo $_smarty_tpl->tpl_vars['assistant']->value['group'];?>
.<?php echo $_smarty_tpl->tpl_vars['assistant']->value['key'];?>
);
<?php }?>

	if(Assistant.mbAssistant.visible){
		Assistant.mbAssistant.show();
		}
}

<?php echo '</script'; ?>
><?php }
}
