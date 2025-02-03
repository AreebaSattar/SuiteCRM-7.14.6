<?php
/* Smarty version 4.5.3, created on 2025-02-03 07:37:48
  from 'C:\xampp\htdocs\crmn\SuiteCRM-7.14.6\modules\Emails\templates\emailSettingsAccounts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_67a0643c1cf8d6_05416948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '260ac6ae60e6a8e3e260b2d83247c7f8c5de1552' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crmn\\SuiteCRM-7.14.6\\modules\\Emails\\templates\\emailSettingsAccounts.tpl',
      1 => 1738164120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/Emails/templates/emailSettingsAccountDetails.tpl' => 1,
  ),
),false)) {
function content_67a0643c1cf8d6_05416948 (Smarty_Internal_Template $_smarty_tpl) {
?><table cellpadding="4" cellspacing="0" border="0" width="100%" class="view">
	<tr>
		<td NOWRAP>
			<?php $_smarty_tpl->_subTemplateRender("file:modules/Emails/templates/emailSettingsAccountDetails.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		</td>
	</tr>
    	<tr>
                                	<td align="right">
                                	   <input type="button" class="button" style="margin-left:5px;" value="   <?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_EMAIL_DONE_BUTTON_LABEL'];?>
   " onclick="javascript:SUGAR.email2.settings.saveOptionsGeneral(true);">
                                    </td>
                            	</tr>
	

</table>
<?php }
}
