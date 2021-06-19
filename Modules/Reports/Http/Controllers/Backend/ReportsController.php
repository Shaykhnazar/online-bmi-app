<?php

namespace Modules\Reports\Http\Controllers\Backend;

use App\Authorizable;
use Flash;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class ReportsController extends Controller
{
//    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = __('labels.backend.report.name');

        // module name
        $this->module_name = 'reports';

        // directory path of the module
        $this->module_path = 'reports::backend';

        // module icon
        $this->module_icon = 'fas fa-table';

        // module model name, path
        $this->module_model = "Modules\Baholash\Entities\StudentRates";
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

        $$module_name = $module_model::paginate();

        logUserAccess($module_title.' '.$module_action);

        return view(
            "$module_path.$module_name.index_datatable",
            compact('module_title', 'module_name', "$module_name", 'module_icon', 'module_name_singular', 'module_action')
        );
    }

    /**
     * Select Options for Select 2 Request/ Response.
     *
     * @return Response
     */
    public function index_list(Request $request)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'List';

        $term = trim($request->q);

        if (empty($term)) {
            return response()->json([]);
        }

//        $query_data = $module_model::where('name', 'LIKE', "%$term%")->orWhere('slug', 'LIKE', "%$term%")->limit(7)->get();

//        $$module_name = [];
//
//        foreach ($query_data as $row) {
//            $$module_name[] = [
//                'id'   => $row->id,
//            ];
//        }

//        return response()->json($$module_name);
        return response()->json(null);
    }

    public function index_data()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'List';

        $page_heading = label_case($module_title);
        $title = $page_heading.' '.label_case($module_action);

        $$module_name = $module_model::select('id', 'student_id', 'theme_id', 'teacher_id', 'k1', 'k2', 'k3', 'k4', 'updated_at');

        $data = $$module_name;

        return Datatables::of($$module_name)
//            ->addColumn('action', function ($data) {
//                $module_name = $this->module_name;
//
//                return view('backend.includes.action_column', compact('module_name', 'data'));
//            })
            ->editColumn('teacher_id', function ($data){
                return $data->teacher->name;
            })
            ->editColumn('student_id', function ($data){
                return $data->student->name;
            })
            ->editColumn('theme_id', function ($data){
                return $data->theme->mavzu;
            })
            ->addColumn('group_name', function ($data){
                return $data->student->group->group_name;
            })
            ->addColumn('result', function ($data){
                $result = ($data->k1 + $data->k2 + $data->k3 + $data->k4)/4;
                return $result;
            })
            ->editColumn('updated_at', function ($data) {
                $module_name = $this->module_name;

                $diff = Carbon::now()->diffInHours($data->updated_at);

                if ($diff < 25) {
                    return $data->updated_at->diffForHumans();
                } else {
                    return $data->updated_at->isoFormat('llll');
                }
            })
            ->rawColumns(['id', 'action'])
            ->orderColumns(['id'], '-:column $1')
            ->make(true);
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

        $$module_name_singular = $module_model::findOrFail($id);

        logUserAccess($module_title.' '.$module_action. " | Id: ". $$module_name_singular->id);

        return view(
            "$module_path.$module_name.show",
            compact('module_title', 'module_name', 'module_path', 'module_icon', 'module_name_singular', 'module_action', "$module_name_singular")
        );
    }

}
