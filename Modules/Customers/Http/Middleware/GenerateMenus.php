<?php

namespace Modules\Customers\Http\Middleware;

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

            // Physical persons
            $menu->add('<i class="fas fa-people-arrows c-sidebar-nav-icon"></i> '.__('labels.backend.customer.name'), [
                'route' => 'backend.customers.index',
                'class' => "c-sidebar-nav-item",
            ])
                ->data([
                    'order' => 84,
                    'activematches' => ['admin/customers*'],
                    'permission' => ['view_customers'],
                ])
                ->link->attr([
                    'class' => 'c-sidebar-nav-link',
                ]);
        })->sortBy('order');

        return $next($request);
    }
}
