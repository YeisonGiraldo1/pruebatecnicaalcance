<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;

class LogController extends Controller
{
    public function requestlist(){
        $logs = Log::all();
        return view("logs.index",compact('logs'));
    }


    public function destroy($id)
    {
        $delete = Log::where('id',$id)->delete();
        return redirect()->route('logs.list');
    }

    public function edit($id){

        $log = Log::findOrfail($id);
        return view('logs.edit',compact('log'));
    }


    public function update(Request $request, $id)
    {
        $log = Log::findOrfail($id);
        $log->update($request->all());
        return redirect()->route('logs.list')
        ->with('success', 'Address updated successfully.');
    }

}
