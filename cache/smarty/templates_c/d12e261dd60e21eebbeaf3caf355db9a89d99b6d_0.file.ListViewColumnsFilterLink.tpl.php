<?php
/* Smarty version 4.5.3, created on 2025-02-03 08:26:25
  from 'C:\xampp\htdocs\crmn\SuiteCRM-7.14.6\include\ListView\ListViewColumnsFilterLink.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_67a06fa1a03bf3_19542204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd12e261dd60e21eebbeaf3caf355db9a89d99b6d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crmn\\SuiteCRM-7.14.6\\include\\ListView\\ListViewColumnsFilterLink.tpl',
      1 => 1738164593,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a06fa1a03bf3_19542204 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\crmn\\SuiteCRM-7.14.6\\include\\Smarty\\plugins\\function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),));
?>
<ul class="clickMenu selectmenu SugarActionMenu columnsFilterLink listViewLinkButton listViewLinkButton_<?php echo $_smarty_tpl->tpl_vars['action_menu_location']->value;?>
" onclick="columnsFilter.onOpen();">
    <li class="sugar_action_button">
        <a href="#" class="glyphicon glyphicon-th-list" data-toggle="modal" data-target=".modal-columns-filter" title='<?php echo smarty_function_sugar_translate(array('label'=>"LBL_COLUMN_CHOOSER"),$_smarty_tpl);?>
'></a>
    </li>
</ul>
<?php }
}
