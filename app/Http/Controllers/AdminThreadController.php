<?php

namespace App\Http\Controllers;

use App\Thread;
use App\Message;
use Illuminate\Http\Request;

class AdminThreadController extends Controller
{
    public function index(Request $request)
    {
        $items = Thread::all();
        return view('keijiban.admin_index', ['items' => $items]);
    }

    public function search(Request $request)
    {
        $items = Thread::where('name','like','%' .  $request->input . '%')->get();
        return view('keijiban.admin_index', ['items' => $items]);
    }

    public function delete(Request $request)
    {
        $items = Thread::find($request->id);
        return view('keijiban/admin_thre_delete', ['items' => $items]);
    }

    public function remove(Request $request)
    {
        Thread::find($request->id)->delete();
        Message::where('thread_id', $request->id)->delete();
        return redirect('/keijiban/admin_index');
    }
}
