<?php

return [
    'title' => 'Conference Management System',
    'list' => 'All Events',
    'add_new' => 'New Event',
    'create' => 'Create Event',
    'edit' => 'Edit Event Information',
    'no_conferences' => 'There are currently no events',

    'fields' => [
        'title' => 'Title',
        'description' => 'Description',
        'date' => 'Event Date',
        'address' => 'Location',
        'participant_count' => 'Number of Participants',
    ],

    'actions' => [
        'header' => 'Actions',
        'create' => 'Create',
        'update' => 'Save',
        'edit' => 'Edit',
        'delete' => 'Delete',
        'view' => 'View',
        'back' => 'Back',
        'cancel' => 'Cancel',
    ],

    'messages' => [
        'created' => 'Event created successfully',
        'updated' => 'Information updated',
        'deleted' => 'Event deleted',
        'confirm_delete' => 'Are you sure you want to delete the event',
        'confirm_delete_title' => 'Confirm Deletion',
    ],

    'validation' => [
        'title_required' => 'Please enter a title',
        'title_max' => 'Title cannot exceed 255 characters',
        'description_required' => 'Description field cannot be empty',
        'date_required' => 'Date must be specified',
        'date_date' => 'Invalid date format',
        'address_required' => 'Location must be specified',
        'address_max' => 'Location field cannot exceed 255 characters',
        'participant_count_integer' => 'Participant count must be an integer',
        'participant_count_min' => 'Participant count must be at least 1',
    ],
];
