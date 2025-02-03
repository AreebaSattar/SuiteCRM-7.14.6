<?php
/* Smarty version 4.5.3, created on 2025-02-03 07:37:48
  from 'C:\xampp\htdocs\crmn\SuiteCRM-7.14.6\modules\Emails\templates\addressSearch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_67a0643c2b60f4_99316153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9d8a545e8bd61b3d88e97e66062ec3a3b063c5a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crmn\\SuiteCRM-7.14.6\\modules\\Emails\\templates\\addressSearch.tpl',
      1 => 1738164120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a0643c2b60f4_99316153 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\crmn\\SuiteCRM-7.14.6\\include\\Smarty\\plugins\\function.sugar_getimage.php','function'=>'smarty_function_sugar_getimage',),1=>array('file'=>'C:\\xampp\\htdocs\\crmn\\SuiteCRM-7.14.6\\include\\Smarty\\plugins\\function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),));
?>
<form id="searchForm" method="get" action="#">
    <table id="searchTable" border="0" cellpadding="0" cellspacing="0" width="670">
		<tr id="peopleTableSearchRow">
			<td scope="row" nowrap="NOWRAP">
			     <div id="rollover">
			     <?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_SEARCH_FOR'];?>
:
			         <a href="#" class="rollover"><img border="0" alt=$mod_strings.LBL_HELP src="index.php?entryPoint=getImage&amp;imageName=helpInline.png">
	                        <div><span class="rollover"><?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_ADDRESS_BOOK_SEARCH_HELP'];?>
</span></div>
	                 </a>

		      	<input id="input_searchField" name="input_searchField" type="text" value="">
		      	</div>
			    &nbsp;&nbsp; <?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_LIST_RELATED_TO'];?>
: &nbsp;
			    <select name="person" id="input_searchPerson">
			         <?php echo $_smarty_tpl->tpl_vars['listOfPersons']->value;?>

			    </select>
			    &nbsp;
			    <a href="javascript:void(0);">
                    <?php echo smarty_function_sugar_getimage(array('name'=>"id-ff-select",'ext'=>".gif",'alt'=>$_smarty_tpl->tpl_vars['mod_strings']->value['LBL_EMAIL_SELECTOR_SELECT'],'other_attributes'=>'align="absmiddle" border="0" onclick="SUGAR.email2.addressBook.searchContacts();" '),$_smarty_tpl);?>

                </a>
                <a href="javascript:void(0);">
                    <?php echo smarty_function_sugar_getimage(array('name'=>"id-ff-clear",'ext'=>".gif",'alt'=>$_smarty_tpl->tpl_vars['mod_strings']->value['LBL_EMAIL_SELECTOR_CLEAR'],'other_attributes'=>'align="absmiddle" border="0" onclick="SUGAR.email2.addressBook.clearAddressBookSearch();" '),$_smarty_tpl);?>

                </a>
			</td>
        </tr>
        <tr id="peopleTableSearchRow">
            <td scope="row" nowrap="NOWRAP" colspan="2" id="relatedBeanColumn">
		      <?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_FILTER_BY_RELATED_BEAN'];?>
<span id="relatedBeanInfo"></span>
		   	  <input name="hasRelatedBean" id="hasRelatedBean" type="checkbox"/>
            </td>

        </tr>
        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr id="peopleTableSearchRow">
            <td id="searchSubmit" scope="row" nowrap="NOWRAP">
                <button onclick="SUGAR.email2.addressBook.insertContactToResultTable(null,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_EMAIL_ADDRESS_BOOK_ADD_TO'),$_smarty_tpl);?>
')">
                    <?php echo smarty_function_sugar_translate(array('label'=>"LBL_ADD_TO_ADDR",'module'=>"Emails"),$_smarty_tpl);?>
 <b><?php echo smarty_function_sugar_translate(array('label'=>"LBL_EMAIL_ADDRESS_BOOK_ADD_TO"),$_smarty_tpl);?>
</b>
                </button>
                <button onclick="SUGAR.email2.addressBook.insertContactToResultTable(null,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_EMAIL_ADDRESS_BOOK_ADD_CC'),$_smarty_tpl);?>
')">
                    <?php echo smarty_function_sugar_translate(array('label'=>"LBL_ADD_TO_ADDR",'module'=>"Emails"),$_smarty_tpl);?>
 <b><?php echo smarty_function_sugar_translate(array('label'=>"LBL_EMAIL_ADDRESS_BOOK_ADD_CC"),$_smarty_tpl);?>
</b>
                </button>
                <button onclick="SUGAR.email2.addressBook.insertContactToResultTable(null,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC'),$_smarty_tpl);?>
')">
                    <?php echo smarty_function_sugar_translate(array('label'=>"LBL_ADD_TO_ADDR",'module'=>"Emails"),$_smarty_tpl);?>
 <b><?php echo smarty_function_sugar_translate(array('label'=>"LBL_EMAIL_ADDRESS_BOOK_ADD_BCC"),$_smarty_tpl);?>
</b>
                </button>
            </td>
        </tr>

    </table>
</form><?php }
}
