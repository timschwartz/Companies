<?php

namespace timschwartz\Companies\controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use timschwartz\Companies\models\Company;

class CompanyController extends Controller
{
    public function dashboard(Request $request)
    {
        $page = new \stdClass;
        $page->title = "Companies - Tim's Computer Service";
        return view('company::dashboard', [ 'page'=>$page ]]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $Companies = Company::all();

        $companies_json = array();
        foreach($Companies as $Company)
        {
            $address = $Company->address;
            if($Company->address2) $address.="<br />".$Company->address2;
            $c = array($Company->name, $address, $Company->city, $Company->state, $Company->zip, $Company->id);
            array_push($companies_json, $c);
        }
        print json_encode(["aaData"=>$companies_json]);
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
