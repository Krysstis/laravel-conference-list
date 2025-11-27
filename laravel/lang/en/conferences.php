<?php

return [
    'title' => 'Conferences',
    'list' => 'Conference List',
    'create' => 'Create Conference',
    'edit' => 'Edit Conference',
    'view' => 'View Conference',
    'delete' => 'Delete Conference',
    'add_new' => 'Add New Conference',

    'fields' => [
        'title' => 'Title',
        'description' => 'Description',
        'date' => 'Date',
        'address' => 'Address',
    ],

    'actions' => [
        'create' => 'Create',
        'update' => 'Update',
        'delete' => 'Delete',
        'edit' => 'Edit',
        'view' => 'View',
        'back' => 'Back to List',
    ],

    'messages' => [
        'created' => 'Conference created successfully',
        'updated' => 'Conference updated successfully',
        'deleted' => 'Conference deleted successfully',
        'confirm_delete' => 'Are you sure you want to delete this conference?',
    ],

    'validation' => [
        'title_required' => 'Title is required',
        'description_required' => 'Description is required',
        'date_required' => 'Date is required',
        'address_required' => 'Address is required',
    ],
];
