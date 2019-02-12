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
class UnionController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $data['allUnion']= Union::orderBy('created_at','desc')->get();

        return view('backend.unions.union', $data);
    }

    public function create(Request $request) {

        // dd($request->union_id);
        $data['unionAll']= Union::where('union_id', $request->union_id)->first();

        return view('backend.unions.createUnion', $data);
    }

    public function edit($union_id) {
        $data['unionAll']= Union::where('union_id', $union_id)->get();

        return view('backend.unions.createUnion', $data);
    }
    
    public function save(Request $request) {
        $all = $request->all();

        if(!empty($all['union_id'])) {
            $request->validate([
                'union_name' => 'required',
                'union_desc' => 'required'
            ]);    
        } else {
            $request->validate([
                'union_name' => 'required',
                'union_desc' => 'required',
                'union_logo' => 'required',
                'union_banner' => 'required'
            ]);
        }

        if(!empty($request->file('union_logo'))) {
            $logoPath= Storage::disk('public')->put('logo', $request->file('union_logo'));
        }
        if(!empty($request->file('union_banner'))) {
            $bannerPath= Storage::disk('public')->put('banner', $request->file('union_banner'));
        }

        if(!empty($all['union_id'])) {
            $exec= Union::where('union_id', $all['union_id'])
                ->update(['union_name' => $all['union_name'], 'union_description' => $all['union_desc']]);

            if(!empty($logoPath)) {
                Union::where('union_id', $all['union_id'])
                    ->update(['union_logo' => $logoPath]);    
            }
            if(!empty($bannerPath)) {
                Union::where('union_id', $all['union_id'])
                    ->update(['union_banner' => $bannerPath]);    
            }

            $message= 'Union Updated Successfully.';

        } else {
            $addDetails= new Union;
        
            $addDetails->union_name= $all['union_name'];
            $addDetails->union_description= $all['union_desc'];
            $addDetails->union_logo= $logoPath;
            $addDetails->union_banner= $bannerPath;

            $exec= $addDetails->save();
            $message= 'Union Created'; 
        }

            
        if($exec) {
            return redirect('/admin/union-full')->with('flash_success', $message);
        } else {
            return redirect('/admin/union-full')->with('flash_error', 'Something happen wrong.');
        }

    }

    public function delete(Request $request) {
        $all = $request->all();

        $deleteUnion= Union::where('union_id', $all['union_id'])->delete();
        if($deleteUnion) {
            $message= 'Union deleted successfully.';
            return redirect('/admin/union-full')->with('flash_success', $message);
        } else {
            $message= 'Something happen wrong.';
            return redirect('/admin/union-full')->with('flash_error', $message);
        }
    }
}
