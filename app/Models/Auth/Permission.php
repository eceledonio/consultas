<?php

namespace App\Models\Auth;

use Altek\Accountant\Contracts\Recordable;
use Altek\Accountant\Recordable as RecordableTrait;
use Database\Factories\PermissionFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Permission\Models\Permission as SpatiePermission;

/**
 * Class Permission.
 */
class Permission extends SpatiePermission implements Recordable
{
    use RecordableTrait,
        HasFactory;

    protected $guarded = [];

    public function module() : BelongsTo
    {
        return $this->belongsTo(Module::class, 'module_id');
    }

    public static function defaultPermissions()
    {
        $permissions = [];

        $permissions[] = [
            'name' => [
                'users.create',
                'users.read',
                'users.show',
                'users.update',
                'users.delete',
                'users.deleted',
                'users.restore',
                'users.deactivate',
                'users.permanently-delete',
                'users.clear-session',
            ],
            'display_name' => [
                'Crear Usuarios',
                'Listar Usuarios',
                'Visualizar Usuarios',
                'Modificar Usuarios',
                'Eliminar Usuarios',
                'Visualizar Usuarios Eliminados',
                'Restaurar Usuarios Eliminados',
                'Desactivar Usuarios',
                'Eliminar Permanentemente Usuarios',
                'Limpiar Sesión de Usuarios',
            ],
            'module_id' => 1,
        ];

        $permissions[] = [
            'name' => [
                'roles.create',
                'roles.read',
                'roles.show',
                'roles.update',
                'roles.delete',
            ],
            'display_name' => [
                'Crear Perfiles',
                'Listar Perfiles',
                'Visualizar Perfiles',
                'Modificar Perfiles',
                'Eliminar Perfiles',
            ],
            'module_id' => 2,
        ];

        $permissions[] = [
            'name' => [
                'dashboard.read',
            ],
            'display_name' => [
                'Ver Tablero Principal',
            ],
            'module_id' => 3,
        ];

        $permissions[] = [
            'name' => [
                'settings.read',
                'settings.update',
            ],
            'display_name' => [
                'Ver Ajustes',
                'Modificar Ajustes',
            ],
            'module_id' => 4,
        ];

        $permissions[] = [
            'name' => [
                'errors.read',
                'errors.delete',
            ],
            'display_name' => [
                'Ver Errores',
                'Eliminar Errores',
            ],
            'module_id' => 5,
        ];

        $permissions[] = [
            'name' => [
                'backups.create',
                'backups.read',
                'backups.delete',
            ],
            'display_name' => [
                'Crear Copia de Seguridad',
                'Visualizar Copias de Seguridad',
                'Eliminar Copias de Seguridad',
            ],
            'module_id' => 6,
        ];

        $permissions[] = [
            'name' => [
                'logs.read',
                'logs.restore',
            ],
            'display_name' => [
                'Visualizar Eventos',
                'Restaurar Eventos',
            ],
            'module_id' => 7,
        ];

        return $permissions;
    }

    /**
     * Create a new factory instance for the model.
     *
     * @return PermissionFactory
     */
    protected static function newFactory()
    {
        return PermissionFactory::new();
    }
}
