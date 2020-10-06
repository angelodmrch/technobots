<?php

return [
    'plugin' => [
        'name' => 'Contacts',
        'description' => 'Plugin to manage Contacts.'
    ],

    'base' => [
        'contact' => 'Contact',
        'contacts' => 'Contacts',
        'form' => 'Form',
        'forms' => 'Forms',
        'forms_edit' => 'Edit Forms',
        'newsletter' => 'Newsletter',
        'settings' => 'Settings',
    ],

    'contacts' => [
        'id' => 'ID',
        'form' => 'Form',
        'email' => 'E-mail',
        'status' => 'Status',
        'markasreed' => 'Mark as reed',
        'message' => 'Message',
        'files' => 'Files',
        'created_at' => 'Created at',
        'updated_at' => 'Updated at',
        'delete_selected' => 'Delete selected',
        'delete_confirm' => 'Are you sure you want to delete the selected Contacts?',
        'export' => 'Export',
        'export_records' => 'Export records',
        'list_title' => 'Manage Contacts',
        'return' => 'Return to contact list',
        'delete_confirm' => 'Delete this contact?',
        'create' => 'Create Contact',
        'update' => 'Edit Contact',
        'preview' => 'Preview Contact',
    ],

    'form' => [
        'id' => 'ID',
        'name' => 'Name',
        'code' => 'Code',
        'emails' => 'E-mails',
        'created_at' => 'Created at',
        'updated_at' => 'Updated at',
        'fields' => 'Fields',
        'fields_label' => 'Label',
        'fields_name' => 'Name',
        'fields_type' => 'Type',
        'fields_options_label' => 'Label',
        'fields_options_value' => 'Value',
        'fields_placeholder' => 'Placeholder',
        'fields_partial' => 'Partial',
        'fields_validation' => 'Validation',
        'fields_validation_rule' => 'Rule',
        'fields_validation_message' => 'Message',
        'fields_validation_message_default' => 'This field is required',
        'fields_columns' => 'CSS columns',
        'redirect' => 'Redirect',
        'redirect_to' => 'Redirect to',
        'success_message' => 'Success message',
        'success_message_default' => '<p>Message sent successfully!</p>',
        'error_message' => 'Error message',
        'error_message_default' => '<p>Something went wrong!</p>',
        'geral_tab' => 'Geral',
        'message_tab' => 'Messages',
        'delete_selected' => 'Delete selected',
        'delete_confirm' => 'Are you sure you want to delete the selected form?',
        'list_title' => 'Manage Forms',
        'return' => 'Return to forms list',
        'delete_confirm' => 'Delete this form?',
        'new' => 'New Form',
        'create' => 'Create Form',
        'update' => 'Edit Form',
        'preview' => 'Preview Form',
    ],

    'newsletter' => [
        'id' => 'ID',
        'name' => 'Name',
        'email' => 'E-mail',
        'created_at' => 'Created at',
        'updated_at' => 'Updated at',
        'delete_selected' => 'Delete selected',
        'delete_confirm' => 'Are you sure you want to delete the selected newsletter?',
        'export' => 'Export',
        'export_records' => 'Export records',
        'list_title' => 'Manage Newsletter',
        'return' => 'Return to newsletter list',
        'delete_confirm' => 'Delete this newsletter?',
        'create' => 'Create Newsletter',
        'update' => 'Edit Newsletter',
        'preview' => 'Preview Newsletter',
    ],

    'settings' => [
        'label'       => 'Contact',
        'description' => 'Contact Setting',
        'category'    => 'Contact',
    ],

    'validation' => [
        'required' => 'This field is required',
        'email' => 'Enter a valid e-mail',
    ],

    'widget' =>  [
        'messages' => 'Messages',
        'unread' => 'Unread',
        'see_all' => 'See All'
    ]
];