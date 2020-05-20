<?php

namespace App\Http\Controllers;

use App\Thread;
use Illuminate\Http\Request;

class AdminMessageController extends Controller
{
    public function index(Request $request)
    {
        $thread_id = $request->thread_id;
        $items = Message::where('thread_id', $thread_id)->get();
        $thread= Thread::where('id', $thread_id)->first();
        return view('keijiban.admin_thre', [
            'items' => $items,
            'thread' => $thread,
        ]);
    }

    public function search(Request $request)
    {
        $items = Message::where('name','like','%' .  $request->input . '%')->get();
        return view('keijiban.admin_thre', ['items' => $items]);
    }


}
