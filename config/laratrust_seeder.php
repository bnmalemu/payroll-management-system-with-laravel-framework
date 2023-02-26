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
        'admin' => [
            'users' => 'c,r,u,d',
            'payments' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'budgetcontrol' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'payroll' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'perdiem' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'transport' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'colldean' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'accpresi' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'findirec' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'fiteaman' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'reoffice' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'cfinance' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'ccashier' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'user' => [
            'profile' => 'r,u',
        ]
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
