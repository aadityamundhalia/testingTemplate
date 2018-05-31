<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Web;
use Datatables;
use App\DataTables\WebTablesDataTable;
use Maatwebsite\Excel\Writers\LaravelExcelWriter;
use Maatwebsite\Excel\Classes\LaravelExcelWorksheet;

class WebController extends Controller
{
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
        //return $datatable->with('webs', $webs)->render('web.index');
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
                                    ' <a href="#edit-'.$webs->id.'" class="btn btn-xs btn-primary" style="width: 70px;"> Edit</a>'.
                                    ' <a href="#delete-'.$webs->id.'" class="btn btn-xs btn-danger" style="width: 70px;"> Delete</a>';
                           })
                           ->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('web.create');
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
            'date' => 'required|date|before:tomorrow',
            'client' => 'required|max:255',
            'jobNumber' => 'required|unique:web|max:255',
            'timeAllocated' => 'required|between:0,99.99',
            'timeSpent' => 'required|between:0,99.99',
            'revisions' => 'integer',
            'additionalTime' => 'between:0,99.99',
            'dueDate' => 'required|date',
            'completedDate' => 'required|date|before:tomorrow',
            'checkPsd' => 'required',
            'checkPsdComment' => 'max:255',
            'checkDesktop' => 'required',
            'checkDesktopComment' => 'max:255',
            'checkMobile' => 'required',
            'checkMobileComment' => 'max:255',
            'checkHtml' => 'required',
            'checkHtmlComment' => 'max:255',
            'checkCss' => 'required',
            'checkCssComment' => 'max:255',
            'checkUniqueThankyou' => 'required',
            'checkUniqueThankyouComment' => 'max:255',
            'checkNotifyDigi' => 'required',
            'checkNotifyDigiComment' => 'max:255',
            'checkCustomizeNotifyEmail' => 'required|max:255',
            'checkCustomizeNotifyEmailComment' => 'max:255',
        ]);

        $web= new Web;
        $web->developer = $request->developer;
        $web->date = $request->date;
        $web->client = $request->client;
        $web->jobNumber = $request->jobNumber;
        $web->timeAllocated = $request->timeAllocated;
        $web->timeSpent = $request->timeSpent;
        $web->revisions = $request->revisions;
        $web->additionalTime = $request->additionalTime;
        $web->dueDate = $request->dueDate;
        $web->completedDate = $request->completedDate;
        $web->checkPsd = $request->checkPsd;
        $web->checkPsdComment = $request->checkPsdComment;
        $web->checkDesktop = $request->checkDesktop;
        $web->checkDesktopComment = $request->checkDesktopComment;
        $web->checkMobile = $request->checkMobile;
        $web->checkMobileComment = $request->checkMobileComment;
        $web->checkHtml = $request->checkHtml;
        $web->checkHtmlComment = $request->checkHtmlComment;
        $web->checkCss = $request->checkCss;
        $web->checkCssComment = $request->checkCssComment;
        $web->checkUniqueThankyou = $request->checkUniqueThankyou;
        $web->checkUniqueThankyouComment = $request->checkUniqueThankyouComment;
        $web->checkNotifyDigi = $request->checkNotifyDigi;
        $web->checkNotifyDigiComment = $request->checkNotifyDigiComment;
        $web->checkCustomizeNotifyEmail = $request->checkCustomizeNotifyEmail;
        $web->checkCustomizeNotifyEmailComment = $request->checkCustomizeNotifyEmailComment;
        $web->save();

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
        $item = Web::find($id);
        return View::make('web.show')->with('item', $item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
