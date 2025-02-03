<?php
/* Smarty version 4.5.3, created on 2025-02-03 08:26:32
  from 'C:\xampp\htdocs\crmn\SuiteCRM-7.14.6\modules\Emails\templates\displayIndicatorField.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_67a06fa80d7977_00864438',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'daaa8c6855dee5187eda804ae0d0c70b183b927c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crmn\\SuiteCRM-7.14.6\\modules\\Emails\\templates\\displayIndicatorField.tpl',
      1 => 1738164119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a06fa80d7977_00864438 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="email-indicator">
    <?php if ($_smarty_tpl->tpl_vars['bean']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['bean']->value['status'] == 'unread') {?>
            <div class="email-new"></div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['bean']->value['is_imported'] == true && $_smarty_tpl->tpl_vars['bean']->value['inbound_email_record'] == $_REQUEST['inbound_email_record']) {?>
            <div class="email-imported"><span class="glyphicon glyphicon-ok"></span></div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['bean']->value['flagged'] == 1) {?>
            <span class="email-flagged">!</span>
        <?php }?>
    <?php }?>
</div>
<?php }
}
