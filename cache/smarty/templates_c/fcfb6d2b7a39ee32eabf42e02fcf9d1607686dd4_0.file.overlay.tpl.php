<?php
/* Smarty version 4.5.3, created on 2025-02-03 07:37:47
  from 'C:\xampp\htdocs\crmn\SuiteCRM-7.14.6\modules\Emails\templates\overlay.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_67a0643bf2a4e2_92893282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcfb6d2b7a39ee32eabf42e02fcf9d1607686dd4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crmn\\SuiteCRM-7.14.6\\modules\\Emails\\templates\\overlay.tpl',
      1 => 1738164118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a0643bf2a4e2_92893282 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="SUGAR.email2.e2overlay" style="visibility:hidden; position:absolute; top:0px; background-color:#fff;">
	<div class="ydlg-hd" id="overlayTitle"></div>
	<div class="ydlg-bd" id="overlayBody"></div>
</div>

<!-- add file for attachment dialog //-->
<div id="addFileDialog" class="yui-hidden">
	<div class="ydlg-bd">
		<div id="addFileDialogContent" class="ylayout-inactive-content">
			<!--  -->
			<form id="uploadAttachment" name="uploadAttachment" method='POST' action="index.php" enctype='multipart/form-data'>
				<input type="hidden" name="to_pdf" value="true">
				<input type="hidden" name="module" value="Emails">
				<input type="hidden" name="action" value="EmailUIAjax">
				<input type="hidden" name="emailUIAction" value="uploadAttachment">
				<input type='file' name='email_attachment' id='email_attachment' size='30' />&nbsp;
				<input type="button" onclick="SUGAR.email2.composeLayout.uploadAttachment();" class="button" value="<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_EMAIL_ATTACH_FILE_TO_EMAIL'];?>
" />
			</form>
		</div>
	</div>
</div>
<?php }
}
