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
                    <p class="font-medium text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800">You are in the  right place if... you want to EDIT platform users.</p>
                    <h1>Edit user data</h1>
                    <form method="post" action="{{route('user.update', ['user' => $user])}}">
                        @csrf
                        @method ('put')
                        <div>
                            <label>User Name</label>
                            <input type="text" name="user_name" placeholder="Name" value="{{$user->name}}">
                        </div>
                        <div>
                            <label>Email Address</label>
                            <input type="text" name="email_address" placeholder="Email" value="{{$user->email}}">
                        </div>
                        <div>
                            <input type="submit" value="Update" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>