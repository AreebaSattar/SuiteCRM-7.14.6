<?php
/* Smarty version 4.5.3, created on 2025-02-03 08:26:32
  from 'C:\xampp\htdocs\crmn\SuiteCRM-7.14.6\modules\Emails\templates\displayHasAttachmentField.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_67a06fa8159084_90362837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3727c48df809be5e6e786b8e6530190d1b79e32' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crmn\\SuiteCRM-7.14.6\\modules\\Emails\\templates\\displayHasAttachmentField.tpl',
      1 => 1738164120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a06fa8159084_90362837 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\crmn\\SuiteCRM-7.14.6\\include\\Smarty\\plugins\\function.sugar_getimagepath.php','function'=>'smarty_function_sugar_getimagepath',),));
?>

<div class="email-has-attachement">
    <?php if ($_smarty_tpl->tpl_vars['bean']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['bean']->value['has_attachment']) {?>
            <div class="email-has-attachment"><span class="glyphicon"><img src="<?php echo smarty_function_sugar_getimagepath(array('directory'=>'','file_name'=>'attachment-indicator','file_extension'=>"svg",'file'=>'attachment-indicator.svg'),$_smarty_tpl);?>
"/></span></div>
        <?php }?>

    <?php }?>
</div><?php }
}
