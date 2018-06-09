<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Web;
use Datatables;
use App\DataTables\WebTablesDataTable;
use Maatwebsite\Excel\Writers\LaravelExcelWriter;
use Maatwebsite\Excel\Classes\LaravelExcelWorksheet;
use Kris\LaravelFormBuilder\FormBuilderTrait;
use App\Forms\WebForm;

class WebController extends Controller
{
    use FormBuilderTrait;
    public $successStatus = 200;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$webs = Web::orderBy('created_at', 'desc')->get();
        // load the view and pass the webs
        return View::make('web.index');
    }

    /**
     * Generate datatable for display
    */
    public function get_dataTables()
    {
        //return datatables()->of(Web::query())->toJson();
        $webs = Web::all();
        return datatables()->of($webs)
                           ->addColumn('action', function ($webs) {
                             return '<a href="webdata/'.$webs->id.'" class="btn btn-xs btn-success" style="width: 70px;"> View</a>'.
                                    ' <a href="webdata/'.$webs->id.'/edit" class="btn btn-xs btn-primary" style="width: 70px;"> Edit</a>'.
                                    ' <a href="#" id="delete_'.$webs->id.'" class="btn btn-xs btn-danger" onclick="deleter('.$webs->id.')" style="width: 70px;"> Delete</a>';
                           })
                           ->toJson();
                           //<a href="#delete-'.$webs->id.'" class="btn btn-xs btn-danger" style="width: 70px;"> Delete</a>
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $form = $this->form(WebForm::class, [
            'method' => 'POST'
        ]);
        return View::make('web.create', compact('form'));
        //return View::make('web.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'developer' => 'required|max:255',
            'projectName' => 'required|max:255',
            'projectNumber' => 'required|unique:web|max:255',
            'commencementDate' => 'required|date|before:tomorrow',
        ]);
        //return response()->json(['data' => $request->all()], $this->successStatus);
        Web::create($request->all());
        return redirect('webdata')->with('success', 'Information has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Web::find($id);
        $totalRevesions = 0;
        $revisions = $data->select(
                                    'additionalTime',
                                    'additionalTime1',
                                    'additionalTime2',
                                    'additionalTime3',
                                    'additionalTime4',
                                    'additionalTime5',
                                    'additionalTime6',
                                    'additionalTime7',
                                    'additionalTime8',
                                    'additionalTime9'
                                  )
                          ->where('id', $id)
                          ->first();
        if($revisions->additionalTime != null || $revisions->additionalTime != 0) {
            $totalRevesions++;
        }
        if($revisions->additionalTime1 != null || $revisions->additionalTime1 != 0) {
            $totalRevesions++;
        }
        if($revisions->additionalTime2 != null || $revisions->additionalTime2 != 0) {
            $totalRevesions++;
        }
        if($revisions->additionalTime3 != null || $revisions->additionalTime3 != 0) {
            $totalRevesions++;
        }
        if($revisions->additionalTime4 != null || $revisions->additionalTime4 != 0) {
            $totalRevesions++;
        }
        if($revisions->additionalTime5 != null || $revisions->additionalTime5 != 0) {
            $totalRevesions++;
        }
        if($revisions->additionalTime6 != null || $revisions->additionalTime6 != 0) {
            $totalRevesions++;
        }
        if($revisions->additionalTime7 != null || $revisions->additionalTime7 != 0) {
            $totalRevesions++;
        }
        if($revisions->additionalTime8 != null || $revisions->additionalTime8 != 0) {
            $totalRevesions++;
        }
        if($revisions->additionalTime9 != null || $revisions->additionalTime9 != 0) {
            $totalRevesions++;
        }
        $data->totalRevesions = $totalRevesions;
        //return response()->json(['totalRevesions' => $data], $this->successStatus);
        $items['data'] = $data;
        return View::make('web.show')->with('items', $items);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        echo "edit";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $web = Web::find($id);
        $web->delete();

        return response()->json(['delete' => $web], $this->successStatus);
    }
}
