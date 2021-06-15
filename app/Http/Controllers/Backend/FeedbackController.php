<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use App\Models\Notification;
use Auth;
use Carbon\Carbon;
use Flash;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Log;

class FeedbackController extends Controller
{
    public function __construct()
    {
        // Page Title
        $this->module_title = 'Messages';

        // module name
        $this->module_name = 'feedback';

        // directory path of the module
        $this->module_path = 'feedback';

        // module icon
        $this->module_icon = 'c-icon fas fa-paper-plane';

        // module model name, path
        $this->module_model = "App\Models\Feedback";
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'List';

        $$module_name = Feedback::paginate();
        $unread_notifications_count = $module_model::where('status', 0)->count();

        Log::info(label_case($module_title.' '.$module_action).' | User:'.Auth::user()->name.'(ID:'.Auth::user()->id.')');

        return view(
            "backend.$module_path.index",
            compact('module_title', 'module_name', "$module_name", 'module_path', 'module_icon', 'module_action', 'module_name_singular', 'unread_notifications_count')
        );
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Show';

        $$module_name_singular = $module_model::where('id', '=', $id)->first();

        if ($$module_name_singular) {
            if ($$module_name_singular->status == 0) {
                $$module_name_singular->status = 1;
                $$module_name_singular->save();
            }
        } else {
            Log::info(label_case($module_title.' '.$module_action).' | User:'.Auth::user()->name.'(ID:'.Auth::user()->id.')');
            abort(404);
        }

        Log::info(label_case($module_title.' '.$module_action).' | User:'.Auth::user()->name.'(ID:'.Auth::user()->id.')');

        return view(
            "backend.$module_name.show",
            compact('module_title', 'module_name', 'module_icon', 'module_name_singular', 'module_action', "$module_name_singular")
        );
    }

    /**
     * Delete All the Notifications
     *
     * @param int $id
     *
     * @return Response
     */
    public function deleteAll()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = str_singular($module_name);

        $module_action = 'Delete All';

        $module_model->delete();

        Flash::success("<i class='fas fa-check'></i> All Notifications Deleted")->important();

        Log::info(label_case($module_title.' '.$module_action).' | User:'.Auth::user()->name.'(ID:'.Auth::user()->id.')');

        return back();
    }

    /**
     * Mark All Notifications As Read.
     *
     * @return [type] [description]
     */
    public function markAllAsRead()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Mark All As Read';

        $module_model->update(['status' => 1]);

        Flash::success("<i class='fas fa-check'></i> All Messages Marked As Read")->important();

        Log::info(label_case($module_title.' '.$module_action).' | User:'.Auth::user()->name.'(ID:'.Auth::user()->id.')');

        return back();
    }
}
