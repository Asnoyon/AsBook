<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::all();
        return view('admin.message', compact('messages'));
    }

    public function status($id)
    {
        $status = Message::find($id);
        if($status->status == 1){
            $status['status'] = 0;
            $status->save();
            return back();
        }else{
            $status['status'] = 1;
            $status->save();
            return back();
        }
    }

    public function delete($id)
    {
        Message::find($id)->delete();
        return back();
    }
}
