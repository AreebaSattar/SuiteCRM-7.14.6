<?php 
 $GLOBALS["dictionary"]["Campaign"]=array (
  'audited' => true,
  'comment' => 'Campaigns are a series of operations undertaken to accomplish a purpose, usually acquiring leads',
  'table' => 'campaigns',
  'unified_search' => true,
  'full_text_search' => true,
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_ID',
      'type' => 'id',
      'required' => true,
      'reportable' => true,
      'comment' => 'Unique identifier',
      'inline_edit' => false,
    ),
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_CAMPAIGN_NAME',
      'dbType' => 'varchar',
      'type' => 'name',
      'len' => '255',
      'comment' => 'The name of the campaign',
      'importable' => 'required',
      'required' => true,
      'unified_search' => true,
      'full_text_search' => 
      array (
        'boost' => 3,
      ),
    ),
    'date_entered' => 
    array (
      'name' => 'date_entered',
      'vname' => 'LBL_DATE_ENTERED',
      'type' => 'datetime',
      'group' => 'created_by_name',
      'comment' => 'Date record created',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'inline_edit' => false,
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
      'group' => 'modified_by_name',
      'comment' => 'Date record last modified',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'inline_edit' => false,
    ),
    'modified_user_id' => 
    array (
      'name' => 'modified_user_id',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_MODIFIED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'group' => 'modified_by_name',
      'dbType' => 'id',
      'reportable' => true,
      'comment' => 'User who last modified record',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'modified_by_name' => 
    array (
      'name' => 'modified_by_name',
      'vname' => 'LBL_MODIFIED_NAME',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'rname' => 'user_name',
      'table' => 'users',
      'id_name' => 'modified_user_id',
      'module' => 'Users',
      'link' => 'modified_user_link',
      'duplicate_merge' => 'disabled',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'created_by' => 
    array (
      'name' => 'created_by',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_CREATED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'dbType' => 'id',
      'group' => 'created_by_name',
      'comment' => 'User who created record',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'created_by_name' => 
    array (
      'name' => 'created_by_name',
      'vname' => 'LBL_CREATED',
      'type' => 'relate',
      'reportable' => false,
      'link' => 'created_by_link',
      'rname' => 'user_name',
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'created_by',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
      'importable' => 'false',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'description' => 
    array (
      'name' => 'description',
      'type' => 'none',
      'comment' => 'inhertied but not used',
      'source' => 'non-db',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'default' => '0',
      'reportable' => false,
      'comment' => 'Record deletion indicator',
    ),
    'created_by_link' => 
    array (
      'name' => 'created_by_link',
      'type' => 'link',
      'relationship' => 'campaigns_created_by',
      'vname' => 'LBL_CREATED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'modified_user_link' => 
    array (
      'name' => 'modified_user_link',
      'type' => 'link',
      'relationship' => 'campaigns_modified_user',
      'vname' => 'LBL_MODIFIED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'assigned_user_id' => 
    array (
      'name' => 'assigned_user_id',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'vname' => 'LBL_ASSIGNED_TO_ID',
      'group' => 'assigned_user_name',
      'type' => 'relate',
      'table' => 'users',
      'module' => 'Users',
      'reportable' => true,
      'isnull' => 'false',
      'dbType' => 'id',
      'audited' => true,
      'comment' => 'User ID assigned to record',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_name' => 
    array (
      'name' => 'assigned_user_name',
      'link' => 'assigned_user_link',
      'vname' => 'LBL_ASSIGNED_TO_NAME',
      'rname' => 'user_name',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'assigned_user_id',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_link' => 
    array (
      'name' => 'assigned_user_link',
      'type' => 'link',
      'relationship' => 'campaigns_assigned_user',
      'vname' => 'LBL_ASSIGNED_TO_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
      'duplicate_merge' => 'enabled',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'table' => 'users',
    ),
    'SecurityGroups' => 
    array (
      'name' => 'SecurityGroups',
      'type' => 'link',
      'relationship' => 'securitygroups_campaigns',
      'module' => 'SecurityGroups',
      'bean_name' => 'SecurityGroup',
      'source' => 'non-db',
      'vname' => 'LBL_SECURITYGROUPS',
    ),
    'tracker_key' => 
    array (
      'name' => 'tracker_key',
      'vname' => 'LBL_TRACKER_KEY',
      'type' => 'int',
      'required' => true,
      'studio' => 
      array (
        'editview' => false,
      ),
      'len' => '11',
      'auto_increment' => true,
      'comment' => 'The internal ID of the tracker used in a campaign; no longer used as of 4.2 (see campaign_trkrs)',
    ),
    'tracker_count' => 
    array (
      'name' => 'tracker_count',
      'vname' => 'LBL_TRACKER_COUNT',
      'type' => 'int',
      'len' => '11',
      'default' => '0',
      'comment' => 'The number of accesses made to the tracker URL; no longer used as of 4.2 (see campaign_trkrs)',
    ),
    'refer_url' => 
    array (
      'name' => 'refer_url',
      'vname' => 'LBL_REFER_URL',
      'type' => 'varchar',
      'len' => '255',
      'default' => 'http://',
      'comment' => 'The URL referenced in the tracker URL; no longer used as of 4.2 (see campaign_trkrs)',
    ),
    'tracker_text' => 
    array (
      'name' => 'tracker_text',
      'vname' => 'LBL_TRACKER_TEXT',
      'type' => 'varchar',
      'len' => '255',
      'comment' => 'The text that appears in the tracker URL; no longer used as of 4.2 (see campaign_trkrs)',
    ),
    'start_date' => 
    array (
      'name' => 'start_date',
      'vname' => 'LBL_CAMPAIGN_START_DATE',
      'type' => 'date',
      'audited' => true,
      'comment' => 'Starting date of the campaign',
      'validation' => 
      array (
        'type' => 'isbefore',
        'compareto' => 'end_date',
      ),
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
    ),
    'end_date' => 
    array (
      'name' => 'end_date',
      'vname' => 'LBL_CAMPAIGN_END_DATE',
      'type' => 'date',
      'audited' => true,
      'comment' => 'Ending date of the campaign',
      'importable' => 'required',
      'required' => true,
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
    ),
    'status' => 
    array (
      'name' => 'status',
      'vname' => 'LBL_CAMPAIGN_STATUS',
      'type' => 'enum',
      'options' => 'campaign_status_dom',
      'len' => 100,
      'audited' => true,
      'comment' => 'Status of the campaign',
      'importable' => 'required',
      'required' => true,
    ),
    'impressions' => 
    array (
      'name' => 'impressions',
      'vname' => 'LBL_CAMPAIGN_IMPRESSIONS',
      'type' => 'int',
      'default' => 0,
      'reportable' => true,
      'comment' => 'Expected Click throughs manually entered by Campaign Manager',
    ),
    'currency_id' => 
    array (
      'name' => 'currency_id',
      'vname' => 'LBL_CURRENCY',
      'type' => 'id',
      'group' => 'currency_id',
      'function' => 
      array (
        'name' => 'getCurrencyDropDown',
        'returns' => 'html',
        'onListView' => true,
      ),
      'required' => false,
      'do_report' => false,
      'reportable' => false,
      'comment' => 'Currency in use for the campaign',
    ),
    'budget' => 
    array (
      'name' => 'budget',
      'vname' => 'LBL_CAMPAIGN_BUDGET',
      'type' => 'currency',
      'dbType' => 'double',
      'comment' => 'Budgeted amount for the campaign',
    ),
    'expected_cost' => 
    array (
      'name' => 'expected_cost',
      'vname' => 'LBL_CAMPAIGN_EXPECTED_COST',
      'type' => 'currency',
      'dbType' => 'double',
      'comment' => 'Expected cost of the campaign',
    ),
    'actual_cost' => 
    array (
      'name' => 'actual_cost',
      'vname' => 'LBL_CAMPAIGN_ACTUAL_COST',
      'type' => 'currency',
      'dbType' => 'double',
      'comment' => 'Actual cost of the campaign',
    ),
    'expected_revenue' => 
    array (
      'name' => 'expected_revenue',
      'vname' => 'LBL_CAMPAIGN_EXPECTED_REVENUE',
      'type' => 'currency',
      'dbType' => 'double',
      'comment' => 'Expected revenue stemming from the campaign',
    ),
    'campaign_type' => 
    array (
      'name' => 'campaign_type',
      'vname' => 'LBL_CAMPAIGN_TYPE',
      'type' => 'enum',
      'options' => 'campaign_type_dom',
      'len' => 100,
      'audited' => true,
      'comment' => 'The type of campaign',
      'importable' => 'required',
      'required' => true,
    ),
    'objective' => 
    array (
      'name' => 'objective',
      'vname' => 'LBL_CAMPAIGN_OBJECTIVE',
      'type' => 'text',
      'comment' => 'The objective of the campaign',
    ),
    'content' => 
    array (
      'name' => 'content',
      'vname' => 'LBL_CAMPAIGN_CONTENT',
      'type' => 'text',
      'comment' => 'The campaign description',
      'inline_edit' => false,
    ),
    'prospectlists' => 
    array (
      'name' => 'prospectlists',
      'vname' => 'LBL_PROSPECT_LISTS',
      'type' => 'link',
      'relationship' => 'prospect_list_campaigns',
      'source' => 'non-db',
    ),
    'emailmarketing' => 
    array (
      'name' => 'emailmarketing',
      'vname' => 'LBL_EMAIL_MARKETING',
      'type' => 'link',
      'relationship' => 'campaign_email_marketing',
      'source' => 'non-db',
    ),
    'queueitems' => 
    array (
      'name' => 'queueitems',
      'vname' => 'LBL_QUEUE_ITEMS',
      'type' => 'link',
      'relationship' => 'campaign_emailman',
      'source' => 'non-db',
    ),
    'log_entries' => 
    array (
      'name' => 'log_entries',
      'type' => 'link',
      'relationship' => 'campaign_campaignlog',
      'source' => 'non-db',
      'vname' => 'LBL_LOG_ENTRIES',
    ),
    'tracked_urls' => 
    array (
      'name' => 'tracked_urls',
      'type' => 'link',
      'relationship' => 'campaign_campaigntrakers',
      'source' => 'non-db',
      'vname' => 'LBL_TRACKED_URLS',
    ),
    'frequency' => 
    array (
      'name' => 'frequency',
      'vname' => 'LBL_CAMPAIGN_FREQUENCY',
      'type' => 'enum',
      'len' => 100,
      'comment' => 'Frequency of the campaign',
      'options' => 'newsletter_frequency_dom',
    ),
    'leads' => 
    array (
      'name' => 'leads',
      'type' => 'link',
      'relationship' => 'campaign_leads',
      'source' => 'non-db',
      'vname' => 'LBL_LEADS',
      'link_class' => 'ProspectLink',
      'link_file' => 'modules/Campaigns/ProspectLink.php',
    ),
    'opportunities' => 
    array (
      'name' => 'opportunities',
      'type' => 'link',
      'relationship' => 'campaign_opportunities',
      'source' => 'non-db',
      'vname' => 'LBL_OPPORTUNITIES',
    ),
    'contacts' => 
    array (
      'name' => 'contacts',
      'type' => 'link',
      'relationship' => 'campaign_contacts',
      'source' => 'non-db',
      'vname' => 'LBL_CONTACTS',
      'link_class' => 'ProspectLink',
      'link_file' => 'modules/Campaigns/ProspectLink.php',
    ),
    'accounts' => 
    array (
      'name' => 'accounts',
      'type' => 'link',
      'relationship' => 'campaign_accounts',
      'source' => 'non-db',
      'vname' => 'LBL_ACCOUNTS',
      'link_class' => 'ProspectLink',
      'link_file' => 'modules/Campaigns/ProspectLink.php',
    ),
    'notes' => 
    array (
      'name' => 'notes',
      'type' => 'link',
      'relationship' => 'campaign_notes',
      'source' => 'non-db',
      'vname' => 'LBL_NOTES',
    ),
    'survey' => 
    array (
      'name' => 'survey',
      'type' => 'link',
      'relationship' => 'surveys_campaigns',
      'source' => 'non-db',
      'module' => 'Surveys',
      'bean_name' => 'Surveys',
      'vname' => 'LBL_CAMPAIGN_SURVEYS',
      'id_name' => 'survey_id',
      'link_type' => 'one',
      'side' => 'left',
    ),
    'survey_name' => 
    array (
      'name' => 'survey_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_CAMPAIGN_SURVEYS',
      'save' => true,
      'id_name' => 'survey_id',
      'link' => 'survey',
      'table' => 'surveys',
      'module' => 'Surveys',
      'rname' => 'name',
    ),
    'survey_id' => 
    array (
      'name' => 'survey_id',
      'type' => 'id',
      'reportable' => false,
      'vname' => 'LBL_CAMPAIGN_SURVEYS',
    ),
    'surveyresponses_campaigns' => 
    array (
      'name' => 'surveyresponses_campaigns',
      'type' => 'link',
      'relationship' => 'surveyresponses_campaigns',
      'source' => 'non-db',
      'module' => 'SurveyResponses',
      'bean_name' => 'SurveyResponses',
      'side' => 'right',
      'vname' => 'LBL_SURVEYRESPONSES_CAMPAIGNS_FROM_SURVEYRESPONSES_TITLE',
    ),
    'company_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'Company',
      'required' => true,
      'source' => 'custom_fields',
      'name' => 'company_c',
      'vname' => 'LBL_COMPANY',
      'type' => 'varchar',
      'massupdate' => '0',
      'default' => '',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'id' => 'Campaignscompany_c',
      'custom_module' => 'Campaigns',
    ),
  ),
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'campaignspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    0 => 
    array (
      'name' => 'camp_auto_tracker_key',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'tracker_key',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_campaign_name',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'name',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_survey_id',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'survey_id',
      ),
    ),
  ),
  'relationships' => 
  array (
    'campaigns_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Campaigns',
      'rhs_table' => 'campaigns',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'campaigns_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Campaigns',
      'rhs_table' => 'campaigns',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'campaigns_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Campaigns',
      'rhs_table' => 'campaigns',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'securitygroups_campaigns' => 
    array (
      'lhs_module' => 'SecurityGroups',
      'lhs_table' => 'securitygroups',
      'lhs_key' => 'id',
      'rhs_module' => 'Campaigns',
      'rhs_table' => 'campaigns',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'securitygroups_records',
      'join_key_lhs' => 'securitygroup_id',
      'join_key_rhs' => 'record_id',
      'relationship_role_column' => 'module',
      'relationship_role_column_value' => 'Campaigns',
    ),
    'campaign_accounts' => 
    array (
      'lhs_module' => 'Campaigns',
      'lhs_table' => 'campaigns',
      'lhs_key' => 'id',
      'rhs_module' => 'Accounts',
      'rhs_table' => 'accounts',
      'rhs_key' => 'campaign_id',
      'relationship_type' => 'one-to-many',
    ),
    'campaign_contacts' => 
    array (
      'lhs_module' => 'Campaigns',
      'lhs_table' => 'campaigns',
      'lhs_key' => 'id',
      'rhs_module' => 'Contacts',
      'rhs_table' => 'contacts',
      'rhs_key' => 'campaign_id',
      'relationship_type' => 'one-to-many',
    ),
    'campaign_leads' => 
    array (
      'lhs_module' => 'Campaigns',
      'lhs_table' => 'campaigns',
      'lhs_key' => 'id',
      'rhs_module' => 'Leads',
      'rhs_table' => 'leads',
      'rhs_key' => 'campaign_id',
      'relationship_type' => 'one-to-many',
    ),
    'campaign_prospects' => 
    array (
      'lhs_module' => 'Campaigns',
      'lhs_table' => 'campaigns',
      'lhs_key' => 'id',
      'rhs_module' => 'Prospects',
      'rhs_table' => 'prospects',
      'rhs_key' => 'campaign_id',
      'relationship_type' => 'one-to-many',
    ),
    'campaign_opportunities' => 
    array (
      'lhs_module' => 'Campaigns',
      'lhs_table' => 'campaigns',
      'lhs_key' => 'id',
      'rhs_module' => 'Opportunities',
      'rhs_table' => 'opportunities',
      'rhs_key' => 'campaign_id',
      'relationship_type' => 'one-to-many',
    ),
    'campaign_notes' => 
    array (
      'lhs_module' => 'Campaigns',
      'lhs_table' => 'campaigns',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Campaigns',
    ),
    'campaign_email_marketing' => 
    array (
      'lhs_module' => 'Campaigns',
      'lhs_table' => 'campaigns',
      'lhs_key' => 'id',
      'rhs_module' => 'EmailMarketing',
      'rhs_table' => 'email_marketing',
      'rhs_key' => 'campaign_id',
      'relationship_type' => 'one-to-many',
    ),
    'campaign_emailman' => 
    array (
      'lhs_module' => 'Campaigns',
      'lhs_table' => 'campaigns',
      'lhs_key' => 'id',
      'rhs_module' => 'EmailMan',
      'rhs_table' => 'emailman',
      'rhs_key' => 'campaign_id',
      'relationship_type' => 'one-to-many',
    ),
    'campaign_campaignlog' => 
    array (
      'lhs_module' => 'Campaigns',
      'lhs_table' => 'campaigns',
      'lhs_key' => 'id',
      'rhs_module' => 'CampaignLog',
      'rhs_table' => 'campaign_log',
      'rhs_key' => 'campaign_id',
      'relationship_type' => 'one-to-many',
    ),
    'campaign_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Campaigns',
      'rhs_table' => 'campaigns',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'campaign_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Campaigns',
      'rhs_table' => 'campaigns',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'surveyresponses_campaigns' => 
    array (
      'rhs_module' => 'SurveyResponses',
      'rhs_table' => 'surveyresponses',
      'rhs_key' => 'campaign_id',
      'lhs_module' => 'Campaigns',
      'lhs_table' => 'campaigns',
      'lhs_key' => 'id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'templates' => 
  array (
    'security_groups' => 'security_groups',
    'assignable' => 'assignable',
    'basic' => 'basic',
  ),
  'custom_fields' => true,
);