<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use Validator;

use App\Union;

use App\Poll;

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
        $data['pollAll']= Poll::with('get_union')->get();

        return view('backend.poll.poll', $data);
    }

    public function create() {
        $data['unionAll']= Union::get();

        return view('backend.poll.createPoll', $data);
    }
    
    public function save(Request $request) {
        $all = $request->all();

        $request->validate([
            'poll_name' => 'required',
            'union_id' => 'required',
            'option_1' => 'required',
            'option_2' => 'required'
        ]);

        $addDetails= new Poll;
        
        $addDetails->poll_name= $all['poll_name'];
        $addDetails->poll_option_a= $all['option_1'];
        $addDetails->poll_option_b= $all['option_2'];
        $addDetails->poll_option_c= $all['option_3'];
        $addDetails->poll_option_d= $all['option_4'];
        $addDetails->union_id= $all['union_id'];

        $exec= $addDetails->save();
        $message= 'Poll Created';

        if($exec) {
            return redirect('/admin/union-poll')->with('flash_success', $message);
        } else {
            return redirect('/admin/union-poll')->with('flash_error', 'Something happen wrong.');
        }

        dd($request);
        
    }
}
