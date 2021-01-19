<?php

namespace App\Providers;

use App\Repositories\Announcement\AnnouncementRepository;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

/**
 * Class ComposerServiceProvider.
 */
class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @param  AnnouncementRepository  $announcementRepository
     */
    public function boot(AnnouncementRepository $announcementRepository)
    {
        View::composer('*', function ($view) {
            $view->with('logged_in_user', auth()->user());
        });

        View::composer(['frontend.index', 'frontend.layout.default'], function ($view) use ($announcementRepository) {
            $view->with('announcements', $announcementRepository->getForFrontend());
        });

        View::composer(['backend.layout.default'], function ($view) use ($announcementRepository) {
            $view->with('announcements', $announcementRepository->getForBackend());
        });
    }
}
