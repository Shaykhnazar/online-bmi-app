<?php

namespace Modules\Reports\Http\Middleware;

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

            // reposts
            $menu->add('<i class="fas fa-table c-sidebar-nav-icon"></i> '.__('labels.backend.report.name'), [
                'route' => 'backend.reports.index',
                'class' => "c-sidebar-nav-item",
            ])
            ->data([
                'order' => 84,
                'activematches' => ['admin/reports*'],
                'permission' => ['view_reports'],
            ])
            ->link->attr([
                'class' => 'c-sidebar-nav-link',
            ]);
        })->sortBy('order');

        return $next($request);
    }
}
