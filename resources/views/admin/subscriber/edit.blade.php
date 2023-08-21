<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Subscribers') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    Welcome, {{ Auth::user()->name }} !<br>
                    <p class="font-medium text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800">You are in the  right place if... you want to CREATE library subscribers.</p>
                    <h1>Edit a subscriber</h1>
                    <form method="post" action="{{route('subscriber.update', ['subscriber'=> $subscriber])}}">
                        @csrf
                        @method ('put')
                        <div>
                            <label>Subscriber Name</label>
                            <input type="text" name="subscriber_name" placeholder="Name" value="{{$subscriber->subscriber_name}}">
                        </div>
                        <div>
                            <label>Email Address</label>
                            <input type="text" name="email_address" placeholder="Email" value="{{$subscriber->email_address}}">
                        </div>
                        <div>
                            <label>Phone number</label>
                            <input type="text" name="phone_number" placeholder="Phone" value="{{$subscriber->phone_number}}">
                        </div>
                        <div>
                            <input type="submit" value="Update Subscriber" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>