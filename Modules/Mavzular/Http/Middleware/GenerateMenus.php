<?php

namespace Modules\Mavzular\Http\Middleware;

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

            // mavzular
            $menu->add('<i class="fas fa-atom c-sidebar-nav-icon"></i> '.__('labels.backend.mavzular.name'), [
                'route' => 'backend.mavzular.index',
                'class' => "c-sidebar-nav-item",
            ])
            ->data([
                'order' => 84,
                'activematches' => ['admin/mavzular*'],
                'permission' => ['view_themes'],
            ])
            ->link->attr([
                'class' => 'c-sidebar-nav-link',
            ]);
        })->sortBy('order');

        return $next($request);
    }
}
