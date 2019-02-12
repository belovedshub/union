<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

/**
 * Class DashboardController.
 */
class PollController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.poll.poll');
    }

    public function create() {
        return view('backend.poll.createPoll');
    }
    
    public function save(Request $request) {

        dd($request);
        
    }
}
