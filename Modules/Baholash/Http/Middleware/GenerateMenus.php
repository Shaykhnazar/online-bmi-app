<?php

namespace Modules\Baholash\Http\Middleware;

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

            // Baholash
            $menu->add('<i class="fas fa-dice-five c-sidebar-nav-icon"></i> '.__('labels.backend.baholash.name'), [
                'route' => 'backend.rates.index',
                'class' => "c-sidebar-nav-item",
            ])
            ->data([
                'order' => 84,
                'activematches' => ['admin/rates*'],
                'permission' => ['view_rates'],
            ])
            ->link->attr([
                'class' => 'c-sidebar-nav-link',
            ]);
        })->sortBy('order');

        return $next($request);
    }
}
