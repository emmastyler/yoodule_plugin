<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Jobs\urlSelector;

class urlController extends Controller
{
    //
    public function store(Request $request)
    {   
        
       $details['url'] = $request->url;
       $details['css'] = $request->css;
        dispatch(new urlSelector($details));
        return 'sent';
    }
}
