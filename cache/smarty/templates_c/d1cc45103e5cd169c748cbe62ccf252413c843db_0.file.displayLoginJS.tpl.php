<?php
/* Smarty version 4.5.3, created on 2025-01-30 13:07:50
  from 'C:\xampp\htdocs\crmn\SuiteCRM-7.14.6\include\MVC\View\tpls\displayLoginJS.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_679b6b96b13872_92339286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1cc45103e5cd169c748cbe62ccf252413c843db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crmn\\SuiteCRM-7.14.6\\include\\MVC\\View\\tpls\\displayLoginJS.tpl',
      1 => 1738164542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_679b6b96b13872_92339286 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['MODULE_SUGAR_GRP1']->value) {?>
    <?php echo '<script'; ?>
 type="text/javascript">var module_sugar_grp1 = '<?php echo $_smarty_tpl->tpl_vars['MODULE_SUGAR_GRP1']->value;?>
';<?php echo '</script'; ?>
>
<?php }
if ($_smarty_tpl->tpl_vars['ACTION_SUGAR_GRP1']->value) {?>
    <?php echo '<script'; ?>
 type="text/javascript">var action_sugar_grp1 = '<?php echo $_smarty_tpl->tpl_vars['ACTION_SUGAR_GRP1']->value;?>
';<?php echo '</script'; ?>
>
<?php }
echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['SUGAR_GRP1_JQUERY']->value;?>
" z><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['SUGAR_GRP1_YUI']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['SUGAR_GRP1']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['CALENDAR']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">

    if ( typeof(SUGAR) == 'undefined' ) {SUGAR = {}};
    if ( typeof(SUGAR.themes) == 'undefined' ) SUGAR.themes = {};

<?php echo '</script'; ?>
>

<?php }
}
