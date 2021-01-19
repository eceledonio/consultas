<?php

namespace App\Listeners\Auth;

use App\Events\User\UserCreated;
use App\Events\User\UserDeleted;
use App\Events\User\UserDestroyed;
use App\Events\User\UserLoggedIn;
use App\Events\User\UserLoggedOut;
use App\Events\User\UserRestored;
use App\Events\User\UserStatusChanged;
use App\Events\User\UserUpdated;
use Illuminate\Auth\Events\PasswordReset;

/**
 * Class UserEventListener.
 */
class UserEventListener
{
    /**
     * @param $event
     */
    public function onLoggedIn($event)
    {
        // Update the logging in users time & IP
        $event->user->update([
            'last_login_at' => now(),
            'last_login_ip' => request()->getClientIp(),
        ]);
    }

    /**
     * @param $event
     */
    public function onLoggedOut($event)
    {
        logger(__('Usuario Cerro Sesión: '.$event->user->full_name));
    }

    /**
     * @param $event
     */
    public function onPasswordReset($event)
    {
        $event->user->update([
            'password_changed_at' => now(),
        ]);
    }

    /**
     * @param $event
     */
    public function onCreated($event)
    {
        logger(__('Usuario '.$event->user->full_name.' '.'Creado'));
    }

    /**
     * @param $event
     */
    public function onUpdated($event)
    {
        logger(__('Usuario '.$event->user->full_name.' '.'Actualizado'));
    }

    /**
     * @param $event
     */
    public function onDeleted($event)
    {
        logger(__('Usuario '.$event->user->full_name.' '.'Eliminado'));
    }

    /**
     * @param $event
     */
    public function onRestored($event)
    {
        logger(__('Usuario '.$event->user->full_name.' '.'Restaurado'));
    }

    /**
     * @param $event
     */
    public function onDestroyed($event)
    {
        logger(__('Usuario '.$event->user->full_name.' '.'Eliminado Permanentemente'));
    }

    /**
     * @param $event
     */
    public function onStatusChanged($event)
    {
        logger(__('Estado de Usuario '.$event->user->full_name.' '.'Actualizado'));
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param \Illuminate\Events\Dispatcher $events
     */
    public function subscribe($events)
    {
        $events->listen(
            UserLoggedIn::class,
            'App\Listeners\Auth\UserEventListener@onLoggedIn'
        );

        $events->listen(
            UserLoggedOut::class,
            'App\Listeners\Auth\UserEventListener@onLoggedOut'
        );

        $events->listen(
            PasswordReset::class,
            'App\Listeners\Auth\UserEventListener@onPasswordReset'
        );

        $events->listen(
            UserCreated::class,
            'App\Listeners\Auth\UserEventListener@onCreated'
        );

        $events->listen(
            UserUpdated::class,
            'App\Listeners\Auth\UserEventListener@onUpdated'
        );

        $events->listen(
            UserDeleted::class,
            'App\Listeners\Auth\UserEventListener@onDeleted'
        );

        $events->listen(
            UserRestored::class,
            'App\Listeners\Auth\UserEventListener@onRestored'
        );

        $events->listen(
            UserDestroyed::class,
            'App\Listeners\Auth\UserEventListener@onDestroyed'
        );

        $events->listen(
            UserStatusChanged::class,
            'App\Listeners\Auth\UserEventListener@onStatusChanged'
        );
    }
}
