<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;

class SubscriberController extends Controller
{
    public function index(){
        return view('admin.subscriber.index');
    }

    public function create(){
        return view('admin.subscriber.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'subscriber_name' => 'required',
            'email_address' => 'required',
            'phone_number' => 'required|numeric',
        ]);

        $newSubscriber = Subscriber::create($data);

        return redirect(route('admin.subscriber.index'));
    }
}
