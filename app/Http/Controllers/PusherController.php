<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\PusherBroadcast;

class PusherController extends Controller
{
    public function index()
    {
        return view('pages.partials.chat.chat');
    }

    public function broadcast(Request $request)
    {
        $pusher = new \Pusher\Pusher(env('PUSHER_APP_KEY'), env('PUSHER_APP_SECRET'), env('PUSHER_APP_ID'), ['cluster' => env('PUSHER_APP_CLUSTER')]);

        $pusher->trigger('chat', 'message', $request->all());

        return response()->json(['success' => true]);
    }

    public function receive(Request $request)
    {
        return response()->json($request->all());
    }
}
