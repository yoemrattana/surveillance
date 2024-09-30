<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'administrator' => [
            'users' => [
                'permissions' => 'c,r,u,d',
                'description' => 'Users'
            ],
            'setting' => [
                'permissions' => 'c,r,u,d',
                'description' => 'Setting'
            ],
            'profile' => [
                'permissions' => 'r,u',
                'description' => 'Profile'
            ],
            'dashboard' => [
                'permissions' => 'r',
                'description' => 'Dashboard'
            ],
            'role' => [
                'permissions' => 'r',
                'description' => 'Role'
            ],
            'report' => [
                'permissions' => 'c,r,u,d',
                'description' => 'Report'
            ],
            'village' => [
                'permissions' => 'c,r,u,d',
                'description' => 'Village'
            ],
            'commune' => [
                'permissions' => 'c,r,u,d',
                'description' => 'Commune'
            ],
            'district' => [
                'permissions' => 'c,r,u,d',
                'description' => 'District'
            ],
        ],
        'moderator' => [
            'users' => [
                'permissions' => 'c,r,u,d',
                'description' => 'Users'
            ],
            'setting' => [
                'permissions' => 'c,r,u,d',
                'description' => 'Setting'
            ],
            'profile' => [
                'permissions' => 'r,u',
                'description' => 'Profile'
            ],
            'dashboard' => [
                'permissions' => 'r',
                'description' => 'Dashboard'
            ],
        ],
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete',
    ],
];