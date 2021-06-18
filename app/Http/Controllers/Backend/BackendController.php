<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Modules\Passport\Entities\Passport;
use Modules\Passport\Entities\PassportType;
use Modules\Ticket\Entities\Ticket;

class BackendController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.index', [
//            'tickets_count' => Ticket::count(),
//            'users_count' => User::role('user')->count(),
//            'passport_count' => Passport::count(),
//            'pass_type_count' => PassportType::count(),
        ]);
    }
}
