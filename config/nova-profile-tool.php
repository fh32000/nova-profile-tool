<?php

return [
    'fields' => [
        [
            "component" => "text-field",
            "prefixComponent" => true,
            "attribute" => "full_name",
            "value" => 'full_name',
            "panel" => null,
            "sortable" => false,
            "textAlign" => "left"
        ],
        [
            "component" => "text-field",
            "prefixComponent" => true,
            "attribute" => "email",
            "value" => 'email',
            "panel" => null,
            "sortable" => false,
            "textAlign" => "left"
        ],
        [
            "component" => "password-field",
            "prefixComponent" => true,
            "attribute" => "password",
            "value" => null,
            "panel" => null,
            "sortable" => false,
            "textAlign" => "left"
        ],
        [
            "component" => "password-field",
            "prefixComponent" => true,
            "attribute" => "password_confirmation",
            "value" => null,
            "panel" => null,
            "sortable" => false,
            "textAlign" => "left"
        ]
    ],
    'validations' => [
        'full_name' => 'required|string',
        'email' => 'required|unique:users|email',
        'password' => 'nullable|string|confirmed'
    ],
];
