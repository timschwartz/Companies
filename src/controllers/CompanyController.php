<?php

namespace timschwart\Companies\controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use timschwartz\Companies\models\Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = new \stdClass;
        $search->offset = $request->input('offset');
        if(!$search->offset) $search->offset = 0;
        
        $search->limit = $request->input('limit');
        if(!$search->limit) $search->limit = 10;

        $search->query = $request->input('search');

        $search->format = $request->input('format');
        if(!$search->format) $search->format = "screen";

        $Companies = Company::orderBy('name', 'ASC');

        if($search->query) $Companies = $Companies->where('name', 'LIKE', '%'.$search->query.'%');

        $Companies = $Companies->skip($search->offset)->take($search->limit)->get();

        return view('company::index', ['Companies'=>$Companies, 'search'=>$search]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company::create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $c = new Company;
        $c->name = $request->input('name');
        $c->address = $request->input('address');
        $c->address2 = $request->input('address2');
        $c->city = $request->input('city');
        $c->state = $request->input('state');
        $c->zip = $request->input('zip');
        $c->save();

        return redirect("/api/v1/company/".$c->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Company = Company::find($id);
        return view("company::show", ['Company'=>$Company]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Company = Company::find($id);
        return view("company::edit", ['Company'=>$Company]);
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
        $c = Company::find($id);
        $c->name = $request->input('name');
        $c->address = $request->input('address');
        $c->address2 = $request->input('address2');
        $c->city = $request->input('city');
        $c->state = $request->input('state');
        $c->zip = $request->input('zip');
        $c->save();

        return redirect("/api/v1/company/".$c->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $c = Company::find($id);
        $c->delete();

        return redirect("/api/v1/company");
    }
}
