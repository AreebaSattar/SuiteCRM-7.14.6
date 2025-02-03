<?php
/* Smarty version 4.5.3, created on 2025-02-03 07:37:47
  from 'C:\xampp\htdocs\crmn\SuiteCRM-7.14.6\modules\Emails\templates\_baseConfigData.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_67a0643bee6404_22117632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '550cbd66658b6d7fb182a738f307d872049306be' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crmn\\SuiteCRM-7.14.6\\modules\\Emails\\templates\\_baseConfigData.tpl',
      1 => 1738164120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a0643bee6404_22117632 (Smarty_Internal_Template $_smarty_tpl) {
?>
SUGAR.email2.composeLayout.charsets = <?php echo $_smarty_tpl->tpl_vars['emailCharsets']->value;?>
;
SUGAR.default_inbound_accnt_id = '<?php echo $_smarty_tpl->tpl_vars['defaultOutID']->value;?>
';
if(!SUGAR.email2.userPrefs) {
    var userPrefs = SUGAR.email2.userPrefs = <?php echo $_smarty_tpl->tpl_vars['userPrefs']->value;?>
;
}
SUGAR.email2.signatures = <?php echo $_smarty_tpl->tpl_vars['defaultSignature']->value;?>
;
<?php echo $_smarty_tpl->tpl_vars['tinyMCE']->value;?>

linkBeans = <?php echo $_smarty_tpl->tpl_vars['linkBeans']->value;?>
;
<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>

<?php }
}
