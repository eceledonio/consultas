<?php

namespace App\Listeners\Auth;

use App\Events\Role\RoleCreated;
use App\Events\Role\RoleDeleted;
use App\Events\Role\RoleUpdated;

/**
 * Class RoleEventListener.
 */
class RoleEventListener
{
    /**
     * @param $event
     */
    public function onCreated($event)
    {
        logger(__('Perfil Creado'));
    }

    /**
     * @param $event
     */
    public function onUpdated($event)
    {
        logger(__('Perfil Actualizado'));
    }

    /**
     * @param $event
     */
    public function onDeleted($event)
    {
        logger(__('Perfil Eliminado'));
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param \Illuminate\Events\Dispatcher $events
     */
    public function subscribe($events)
    {
        $events->listen(
            RoleCreated::class,
            'App\Listeners\Auth\RoleEventListener@onCreated'
        );

        $events->listen(
            RoleUpdated::class,
            'App\Listeners\Auth\RoleEventListener@onUpdated'
        );

        $events->listen(
            RoleDeleted::class,
            'App\Listeners\Auth\RoleEventListener@onDeleted'
        );
    }
}
