<?php
/* Smarty version 4.5.3, created on 2025-02-03 07:37:48
  from 'C:\xampp\htdocs\crmn\SuiteCRM-7.14.6\modules\Emails\templates\emailSettings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_67a0643c0b99a9_58716326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4ca256ce969f6c3cfa15d62a11fb52b2abaeaec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crmn\\SuiteCRM-7.14.6\\modules\\Emails\\templates\\emailSettings.tpl',
      1 => 1738164120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/Emails/templates/emailSettingsGeneral.tpl' => 1,
    'file:modules/Emails/templates/emailSettingsAccounts.tpl' => 1,
  ),
),false)) {
function content_67a0643c0b99a9_58716326 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="ydlg-bd">
    <div id="tab_general" class="tab-content">
        <?php $_smarty_tpl->_subTemplateRender("file:modules/Emails/templates/emailSettingsGeneral.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <div id="tab_accounts" class="tab-content">
        <?php $_smarty_tpl->_subTemplateRender("file:modules/Emails/templates/emailSettingsAccounts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>


</div><?php }
}
