<?php

return [

    'items' => [
        // Dashboard
        [
            'title' => 'Dashboard',
            'root' => true,
            'icon' => 'media/svg/icons/Design/Layers.svg', // or can be 'flaticon-home' or any flaticon-*
            'page' => '',
            'route' => 'admin.dashboard',
            'can' => 'dashboard.read',
            'new-tab' => false,
        ],

        // Maestro de Seguridad
        [
            'section' => 'Maestro de Seguridad',
             'can' => 'users.read',
        ],
        [
            'title' => 'Administración de Usuarios',
            'icon' => 'media/svg/icons/Communication/Shield-user.svg',
            'bullet' => 'line',
            'can' => 'users.read',
            'root' => true,
            'parent_route' => 'admin.auth.user.*',
            'submenu' => [
                [
                    'title' => 'Listado de Usuarios',
                    'page' => '',
                    'can' => 'users.read',
                    'route' => 'admin.auth.user.index',
                    'new-tab' => false,
                ],
                [
                    'title' => 'Nuevo Usuario',
                    'page' => '',
                    'can' => 'users.create',
                    'route' => 'admin.auth.user.create',
                    'new-tab' => false,
                ],
                [
                    'title' => 'Usuarios Desactivados',
                    'page' => '',
                    'can' => 'users.delete',
                    'route' => 'admin.auth.user.deactivated',
                    'new-tab' => false,
                ],
                [
                    'title' => 'Usuarios Eliminados',
                    'page' => '',
                    'can' => 'users.delete',
                    'route' => 'admin.auth.user.deleted',
                    'new-tab' => false,
                ],
            ],
        ],
        [
            'title' => 'Administración de Perfiles',
            'icon' => 'media/svg/icons/Communication/Shield-thunder.svg',
            'bullet' => 'line',
            'can' => 'roles.read',
            'parent_route' => 'admin.auth.role.*',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Listado de Perfiles',
                    'page' => '',
                    'can' => 'roles.read',
                    'route' => 'admin.auth.role.index',
                    'new-tab' => false,
                ],
                [
                    'title' => 'Nuevo Perfil',
                    'page' => '',
                    'can' => 'roles.create',
                    'route' => 'admin.auth.role.create',
                    'new-tab' => false,
                ],
            ],
        ],
        [
            'title' => 'Logs de Errores',
            'icon' => 'media/svg/icons/Communication/Chat-error.svg',
            'bullet' => 'line',
            'can' => 'errors.read',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Principal',
                    'page' => '',
                    'can' => 'errors.read',
                    'route' => 'log-viewer::dashboard',
                    'new-tab' => false,
                ],
                [
                    'title' => 'Logs',
                    'page' => '',
                    'can' => 'errors.read',
                    'route' => 'log-viewer::logs.list',
                    'new-tab' => false,
                ],
            ],
        ],
        [
            'title' => 'Eventos de Sistema',
            'icon' => 'media/svg/icons/Communication/Archive.svg',
            'can' => 'errors.read',
            'page' => '',
            'route' => 'admin.auth.logs.index',
            'root' => true,
            'new-tab' => false,
        ],
        [
            'title' => 'Copias de Seguridad',
            'icon' => 'media/svg/icons/Communication/Outgoing-box.svg',
            'can' => 'backups.read',
            'page' => '',
            'route' => 'admin.backup.index',
            'root' => true,
            'new-tab' => false,
        ],
        [
            'title' => 'Paciente',
            'icon' => 'media/svg/icons/Communication/Contact1.svg',
            'bullet' => 'line',
            'can' => 'paciente.read',
            'root' => true,
            'new-tab' => true,
            'submenu' => [
                [
                    'title' => 'Listado de pacientes',
                    'page' => '',
                    'can' => 'pacientes.read',
                    'route' => 'admin.paciente.index',
                    'new-tab' => false,
                ],
                [
                    'title' => 'Crear paciente',
                    'page' => '',
                    'can' => 'pacientes.create',
                    'route' => 'admin.paciente.create',
                    'new-tab' => false,
                ],
            ],
        ],
    ],
];
