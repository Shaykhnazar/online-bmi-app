<?php

return [
    'text' => [
        'first_name'            => 'First Name',
        'last_name'             => 'Last Name',
        'name'                  => 'Name',
        'username'              => 'Username',
        'email'                 => 'Email',
        'mobile'                => 'Mobile',
        'password'              => 'Password (Minimum 6 letters)',
        'password_confirmation' => 'Password (Type Again)',
        'gender'                => 'Gender',
        'register'              => 'Register Now',
        'login'                 => 'Login',
        'login_to_account'      => 'Login to account',
        'need_help'             => 'Need Help?',
        'select_an_option'      => 'Please Select',
        'profile'               => 'Profile',
        'logout'                => 'Chiqish',
        'male'                  => 'Male',
        'female'                => 'Female',
        'hijra'                 => 'Hijra',
        'other'                 => 'Other',
        'Male'                  => 'Male',
        'Female'                => 'Female',
        'Hijra'                 => 'Hijra',
        'Other'                 => 'Other',
        'edit_profile'          => 'Edit Profile',
        'category_name'         => 'Category',
    ],
    // __("labels.text.edit_profile")

    'backend'   => [
        'users' => [
            'index' => [
                'action'    => 'List',
                'title'     => 'Users',
                'sub-title' => 'Users Management',
            ],
            'profile' => [
                'action'    => 'Show',
                'title'     => 'User Profile',
                'sub-title' => 'Users Management',
                'profile'   => 'Profile',
            ],
            'show' => [
                'action'    => 'Show',
                'title'     => 'Users',
                'sub-title' => 'Users Management',
                'profile'   => 'Profile',
            ],
            'edit' => [
                'action'    => 'Edit',
                'title'     => 'Users',
                'sub-title' => 'Users Management',
            ],
            'create' => [
                'action'    => 'Create',
                'title'     => 'Users',
                'sub-title' => 'Users Management',
            ],
            'fields'    => [
                'name'                  => 'Name',
                'first_name'            => 'First Name',
                'last_name'             => 'Last Name',
                'email'                 => 'Email',
                'username'              => 'Username',
                'mobile'                => 'Mobile',
                'gender'                => 'Gender',
                'date_of_birth'         => 'Date of Birth',
                'url_website'           => 'Website',
                'url_facebook'          => 'Facebook',
                'url_twitter'           => 'Twitter',
                'url_googleplus'        => 'Google Plus',
                'url_linkedin'          => 'LinkedIn',
                'profile_privecy'       => 'Profile Privecy',
                'address'               => 'Address',
                'bio'                   => 'Bio',
                'login_count'           => 'Login Count',
                'last_ip'               => 'Last IP',
                'last_login'            => 'Last Login',
                'password'              => 'Password',
                'password_confirmation' => 'Password Confirmation',
                'confirmed'             => 'Confirmed',
                'active'                => 'Active',
                'roles'                 => 'Roles',
                'permissions'           => 'Permissions',
                'social'                => 'Social',
                'picture'               => 'Picture',
                'avatar'                => 'Avatar',
                'status'                => 'Status',
                'created_at'            => 'Created At',
                'updated_at'            => 'Updated At',
            ],

        ],
        'roles' => [
            'index' => [
                'action'    => 'List',
                'title'     => 'Roles',
                'sub-title' => 'Roles Management',
            ],
            'show' => [
                'action'    => 'Show',
                'title'     => 'Roles',
                'sub-title' => 'Roles Management',
                'profile'   => 'Profile',
            ],
            'edit' => [
                'action'    => 'Edit',
                'title'     => 'Roles',
                'sub-title' => 'Roles Management',
            ],
            'create' => [
                'action'    => 'Create',
                'title'     => 'Roles',
                'sub-title' => 'Roles Management',
            ],
            'fields'    => [
                'name'        => 'Name',
                'status'      => 'Status',
                'permissions' => 'Permissions',
                'created_at'  => 'Created At',
                'updated_at'  => 'Yangilangan',
            ],

        ],
        'passport' => [
            'passports' => 'Passportlar',
            'passport_types' => 'Passport turlari',
        ],
        'customer' => [
            'name' => 'Talabalar'
        ],
        'teacher' => [
            'name' => 'Ilmiy Rahbarlar'
        ],
        'report' => [
            'name' => 'Umumiy Natijalar'
        ],
        'groups' => [
            'name' => 'Guruhlar',
            'fields' => [
                'name' =>'Guruh nomi'
            ]
        ],
        'mavzular' => [
            'name' => 'Mavzular',
            'fields' => [
                'name' =>'Mavzu'
            ]
        ],
        'baholash'=> [
            'name' => 'Baholash',
            'fields' => [
                'teacher'=> 'Ilmiy Rahbar',
                'theme'=> 'Mavzu',
                'student'=> 'Talaba',
            ]
        ],
        'feedback' => [
            'name' => 'Xabarlar'
        ],

        'action'            => 'Amallar',
        'create'            => 'Yaratish',
        'edit'              => 'O\'zgartirish',
        'changePassword'    => 'Parolni o\'zgartirish',
        'delete'            => 'O\'chirish',
        'restore'           => 'Qayta tiklash',
        'save'              => 'Saqlash',
        'show'              => 'Ko\'rsatish',
        'update'            => 'Yangilash',
        'total'             => 'Barchasi',
        'block'             => 'Bloklash',
        'unblock'           => 'Blokdan olish',
        'cancel'            => 'Bekor qilish',
    ],

    'buttons'   => [
        'general'   => [
            'create'    => 'Yaratish',
            'save'      => 'Saqlash',
            'cancel'    => 'Bekor qilish',
            'update'    => 'Yangilash',
        ],
    ],

    'frontend' => [
        'common' => [
            'home' => 'Uy',
            'account' => 'Hisob',
            'view_profile_details' => 'Profil ma\'lumotlarini ko\'ring!',
            'logout_from' => 'Hisobdan chiqish!',
            'login' => 'Kirish',
            'login_text' => 'Tizimga kirish',
            'register' => 'Ro\'yxatdan o\'tish',
            'register_join' => 'Bizga qo\'shiling!',
            'support' => 'Yordam',
            'ticket' => 'Ariza yuborish',
            'contact' => 'Bog\'lanish',
            'pages' => 'Bo\'limlar',
            'contact_us' => 'Biz bilan bog\'lanish',
            'licence' => 'Litsenziya',
            'privacy' => 'Havfsizlik siyosati',
            'terms' => 'Shartlar',
            'subscribe' => 'Obuna',
            'subscribe_desc' => 'Har oy to\'g\'ridan-to\'g\'ri pochta qutingizga yuboriladigan so\'nggi Impact yangiliklari, maqolalari va manbalari.',
            'subscribe_desc_bottom' => 'Biz sizning ma\'lumotlaringizni hech qachon baham ko\'rmaymiz. Shu yerga kiring ',
            'email' => 'Email',
        ],
        'login' =>[
            'welcome' => 'Xush kelibsiz',
            'title' => 'Kirish yoki yangi hisob yaratish uchun ushbu ajoyib shakllardan foydalaning.',
            'form_top' => 'Hisobga olish ma\'lumotlari bilan kiring',
            'email' => 'Email Pochta',
            'pass' => 'Parol',
            'remember' => 'Kirishimni eslab qoling',
            'submit' => 'Kirish',
            'forgot' => 'Parolingizni unutdingizmi?',
            'new_account' => 'Yangi hisob yaratish',
        ],
        'register' =>[
            'welcome' => 'Xush kelibsiz',
            'title' => 'Ro\'yxatdan o\'tish uchun formani to\'ldiring',
            'form_top' => ' Barcha maydonlar to\'ldirilishi shart.',
            'first_name' => 'Ism',
            'last_name' => 'Familiya',
            'email' => 'Email Pochta',
            'pass' => 'Parol',
            'pass_confirm' => 'Parolni tasdiqlash',
            'privacy_agree' => 'Men roziman ',
            'submit' => 'Hisob yaratish',
            'forgot' => 'Parolingizni unutdingizmi?',
            'login_account' => 'Hisobga kirish',
        ]
    ]
];
