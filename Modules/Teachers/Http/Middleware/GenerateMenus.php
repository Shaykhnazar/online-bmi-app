<?php

namespace Modules\Teachers\Http\Middleware;

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

            // Teachers
            $menu->add('<i class="fas fa-users c-sidebar-nav-icon"></i> '.__('labels.backend.teacher.name'), [
                'route' => 'backend.teachers.index',
                'class' => "c-sidebar-nav-item",
            ])
                ->data([
                    'order' => 84,
                    'activematches' => ['admin/teachers*'],
                    'permission' => ['view_teachers'],
                ])
                ->link->attr([
                    'class' => 'c-sidebar-nav-link',
                ]);
        })->sortBy('order');

        return $next($request);
    }
}
