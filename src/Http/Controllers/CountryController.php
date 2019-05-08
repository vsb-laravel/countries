<?php

namespace Vsb\Http\Controllers;

use Illuminate\Http\Request;
use Vsb\Model\Country;

class CountryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware(Authenticate::class);
    }

    public function index(Request $request){
        $countries = in_array($request->input('all',false),["1",1,true,"true","on"])?Country::where('enabled',1):Country::whereNotNull('enabled');
        if($request->has('search')){
            $se = '%'.trim($request->search).'%';
            $countries->where(function($query)use($se){
                $query->where('iso','like',$se)
                    ->orWhere('code','like',$se)
                    ->orWhere('name','like',$se)
                    ->orWhere('phone','like',$se);
            });
        }
        return response()->json($countries->get(),200,['Content-Type' => 'application/json; charset=utf-8'],JSON_UNESCAPED_UNICODE);
    }
}
