<?php

namespace Modules\Ticket\Http\Middleware;

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

            // Ticket
            $menu->add('<i class="fas fa-ticket-alt c-sidebar-nav-icon"></i> '.__('labels.backend.tickets.name'), [
                'route' => 'backend.tickets.index',
                'class' => "c-sidebar-nav-item",
            ])
            ->data([
                'order' => 84,
                'activematches' => ['admin/tickets*'],
                'permission' => ['view_tickets'],
            ])
            ->link->attr([
                'class' => 'c-sidebar-nav-link',
            ]);
        })->sortBy('order');

        return $next($request);
    }
}
