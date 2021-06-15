<?php

namespace App\Http\Controllers\Frontend;

use App\Events\Backend\UserProfileUpdated;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Feedback;
use App\Models\User;
use App\Models\Userprofile;
use Modules\Passport\Entities\PassportType;
use Modules\Ticket\Entities\Ticket;
use App\Http\Requests\TicketRequest;

class FrontendController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $body_class = '';

        return view('frontend.index', compact('body_class'));
    }

    /**
     * Privacy Policy Page
     *
     * @return \Illuminate\Http\Response
     */
    public function privacy()
    {
        $body_class = '';

        return view('frontend.privacy', compact('body_class'));
    }

    /**
     * Terms & Conditions Page
     *
     * @return \Illuminate\Http\Response
     */
    public function terms()
    {
        $body_class = '';

        return view('frontend.terms', compact('body_class'));
    }

    /**
     * Contact Page
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        $body_class = '';

        return view('frontend.contact', compact('body_class'));
    }

    /**
     * Contact Submit
     *
     * @param ContactRequest $request
     * @return \Illuminate\Http\Response
     */
    public function contactSubmit(ContactRequest $request)
    {
        Feedback::create($request->all());

        return redirect()->back()->with('status', 'Feedback Send successfully!');
    }
    /**
     * Ticket Page
     *
     * @return \Illuminate\Http\Response
     */
    public function ticket()
    {
        $body_class = '';
        $types = PassportType::get(['id', 'name'])->pluck('name','id');

        return view('frontend.ticket', compact('body_class', 'types'));
    }

    /**
     * Ticket Submit
     *
     * @param TicketRequest $request
     * @return \Illuminate\Http\Response
     */
    public function ticketSubmit(TicketRequest $request)
    {
        $module_name = 'users';
        $user = User::findOrFail(auth()->user()->id);

        $filename = $user->avatar;

        // Handle Avatar upload
        if ($request->hasFile('avatar')) {
            if ($user->getMedia($module_name)->first()) {
                $user->getMedia($module_name)->first()->delete();
            }

            $media = $user->addMediaFromRequest('avatar')->toMediaCollection($module_name);

            $user->avatar = $media->getUrl();

            $user->save();
        }

        $data_array = $request->except('avatar');
        $data_array['avatar'] = $user->avatar;
        $data_array['name'] = $request->first_name.' '.$request->last_name;

        $user_profile = Userprofile::where('user_id', '=', $user->id)->first();
        $user_profile->update($data_array);

        event(new UserProfileUpdated($user_profile));


        $ticket = new Ticket();
        $ticket->pass_type_id = $request->pass_type_id;
        $ticket->user_id = $user->id;
        $ticket->created_by = $user->id;
        $ticket->save();

        return redirect()->back()->with('status', 'Ariza yuborildi!');
    }

    /**
     * Help me Page
     *
     * @return \Illuminate\Http\Response
     */
    public function support()
    {
        $body_class = '';

        return view('frontend.support', compact('body_class'));
    }
}
