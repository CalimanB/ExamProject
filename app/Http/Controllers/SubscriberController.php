<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;

class SubscriberController extends Controller
{
    public function index(){
        $subscribers = Subscriber::all();
        return view('admin.subscriber.index', ['subscribers'=>$subscribers]);
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

        return redirect(route('subscriber'));
    }
    
    public function edit(Subscriber $subscriber){
        return view('admin.subscriber.edit', ['subscriber'=> $subscriber]);
}

public function update(Subscriber $subscriber, Request $request){
    $data = $request->validate([
        'subscriber_name' => 'required',
        'email_address' => 'required',
        'phone_number' => 'required|numeric',
    ]);

    $subscriber->update($data);

    return redirect(route('subscriber'))->with('success', 'Subscriber updated successfully');
}

public function destroy(Subscriber $subscriber){
    $subscriber->delete();
    return redirect(route('subscriber'))->with('success', 'Subscriber deleted successfully');
}
}
