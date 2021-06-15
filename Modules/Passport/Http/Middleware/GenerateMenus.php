<?php

namespace Modules\Passport\Http\Middleware;

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

            // Passport Dropdown
            $passport_menu = $menu->add('<i class="c-sidebar-nav-icon fas fa-passport"></i> Passport', [
                'class' => 'c-sidebar-nav-dropdown',
            ])
                ->data([
                    'order'         => 84,
                    'activematches' => [
                        'admin/passports*',
                        'admin/passport_types*',
                    ],
                    'permission' => ['view_passports', 'view_passport_types'],
                ]);
            $passport_menu->link->attr([
                'class' => 'c-sidebar-nav-dropdown-toggle',
                'href'  => '#',
            ]);

            // Submenu: Passports
            $passport_menu->add('<i class="c-sidebar-nav-icon fas fa-passport"></i> '.__('labels.backend.passport.passports'), [
                'route' => 'backend.passports.index',
                'class' => 'c-sidebar-nav-item',
            ])
                ->data([
                    'order'         => 87,
                    'activematches' => 'admin/passports*',
                    'permission'    => ['edit_passports'],
                ])
                ->link->attr([
                    'class' => "c-sidebar-nav-link",
                ]);

            // Submenu: passport_types
            $passport_menu->add('<i class="c-sidebar-nav-icon fas fa-sitemap"></i> '.__('labels.backend.passport.passport_types'), [
                'route' => 'backend.passport_types.index',
                'class' => 'c-sidebar-nav-item',
            ])
                ->data([
                    'order'         => 88,
                    'activematches' => 'admin/passport_types*',
                    'permission'    => ['edit_passport_types'],
                ])
                ->link->attr([
                    'class' => "c-sidebar-nav-link",
                ]);
        })->sortBy('order');

        return $next($request);
    }
}
