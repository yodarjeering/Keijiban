<?php

namespace App\Http\Controllers;

use App\Thread;
use App\Message;
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

    public function delete(Request $request)
    {
        $items = Message::find($request->id);
        return view('keijiban/admin_message_delete', ['items' => $items]);
    }

    public function remove(Request $request)
    {
        $message = Message::find($request->id)->first();
        $thread = Thread::find($message->thread_id)->first();
        $thread_id = $thread->id;
        Message::find($request->id)->delete();
        return redirect(route('admin_thre',['thread_id'=>$thread_id]));
    }
}
