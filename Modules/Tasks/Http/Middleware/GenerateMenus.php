<?php

namespace Modules\Tasks\Http\Middleware;

use Closure;

class GenerateMenus
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /*
         *
         * Module Menu for Admin Backend
         *
         * *********************************************************************
         */
        \Menu::make('admin_sidebar', function ($menu) {

            // Topshiriqlar
            $menu->add('<i class="fas fa-tasks c-sidebar-nav-icon"></i> '.__('labels.backend.tasks.name'), [
                'route' => 'backend.tasks.index',
                'class' => "c-sidebar-nav-item",
            ])
            ->data([
                'order' => 85,
                'activematches' => ['admin/tasks*'],
                'permission' => ['view_tasks'],
            ])
            ->link->attr([
                'class' => 'c-sidebar-nav-link',
            ]);
        })->sortBy('order');

        return $next($request);
    }
}
