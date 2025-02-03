<?php
/* Smarty version 4.5.3, created on 2025-01-30 13:07:50
  from 'C:\xampp\htdocs\crmn\SuiteCRM-7.14.6\include\utils\recaptcha_disabled.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_679b6b96b6c7f7_08528274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3aec467e336fd92e7cc5b32c69136610f743db02' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crmn\\SuiteCRM-7.14.6\\include\\utils\\recaptcha_disabled.tpl',
      1 => 1738164430,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_679b6b96b6c7f7_08528274 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>

  /**
   * Login Screen Validation
   */
  function validateAndSubmit() {
      generatepwd();
    }

  /**
   * Password reset screen validation
   */
  function validateCaptchaAndSubmit() {
      document.getElementById('username_password').value = document.getElementById('new_password').value;
      document.getElementById('ChangePasswordForm').submit();
    }
<?php echo '</script'; ?>
>
<?php }
}
