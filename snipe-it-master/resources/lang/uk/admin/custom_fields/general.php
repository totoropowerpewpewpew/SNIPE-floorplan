<?php

return [
    'custom_fields'		        => 'Custom Fields',
    'manage'                    => 'Manage',
    'field'		                => 'Field',
    'about_fieldsets_title'		=> 'About Fieldsets',
    'about_fieldsets_text'		=> 'Fieldsets allow you to create groups of custom fields that are frequently re-used for specific asset model types.',
    'custom_format'             => 'Custom Regex format...',
    'encrypt_field'      	        => 'Encrypt the value of this field in the database',
    'encrypt_field_help'      => 'WARNING: Encrypting a field makes it unsearchable.',
    'encrypted'      	        => 'Зашифровано',
    'fieldset'      	        => 'Набір полів',
    'qty_fields'      	      => 'Qty Fields',
    'fieldsets'      	        => 'Fieldsets',
    'fieldset_name'           => 'Fieldset Name',
    'field_name'              => 'Field Name',
    'field_values'            => 'Field Values',
    'field_values_help'       => 'Add selectable options, one per line. Blank lines other than the first line will be ignored.',
    'field_element'           => 'Form Element',
    'field_element_short'     => 'Element',
    'field_format'            => 'Format',
    'field_custom_format'     => 'Custom Regex Format',
    'field_custom_format_help'     => 'This field allows you to use a regex expression for validation. It should start with "regex:" - for example, to validate that a custom field value contains a valid IMEI (15 numeric digits), you would use <code>regex:/^[0-9]{15}$/</code>.',
    'required'   		          => 'Є обов\'язковим',
    'req'   		              => 'Обов.',
    'used_by_models'   		    => 'Used By Models',
    'order'   		            => 'Порядок',
    'create_fieldset'         => 'New Fieldset',
    'update_fieldset'         => 'Update Fieldset',
    'fieldset_does_not_exist'   => 'Fieldset :id does not exist',
    'fieldset_updated'         => 'Fieldset updated',
    'create_fieldset_title' => 'Create a new fieldset',
    'create_field'            => 'New Custom Field',
    'create_field_title' => 'Create a new custom field',
    'value_encrypted'      	        => 'The value of this field is encrypted in the database. Only admin users will be able to view the decrypted value',
    'show_in_email'     => 'Include the value of this field in checkout emails sent to the user? Encrypted fields cannot be included in emails.',
    'help_text' => 'Help Text',
    'help_text_description' => 'This is optional text that will appear below the form elements while editing an asset to provide context on the field.',
    'about_custom_fields_title' => 'About Custom Fields',
    'about_custom_fields_text' => 'Custom fields allow you to add arbitrary attributes to assets.',
    'add_field_to_fieldset' => 'Add Field to Fieldset',
    'make_optional' => 'Required - click to make optional',
    'make_required' => 'Optional - click to make required',
    'reorder' => 'Reorder',
    'db_field' => 'DB Field',
    'db_convert_warning' => 'WARNING. This field is in the custom fields table as <code>:db_column</code> but should be <code>:expected</code>.',
    'is_unique' => 'This value must be unique across all assets',
    'unique' => 'Unique',
    'display_in_user_view' => 'Allow the checked out user to view these values in their View Assigned Assets page',
    'display_in_user_view_table' => 'Visible to User',
];
