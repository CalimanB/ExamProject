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
                    <h1>Add a new subscriber</h1>
                    <form method="post" action="{{route('subscriber.store')}}">
                        @csrf
                        @method ('post')
                        <div>
                            <label>Subscriber Name</label>
                            <input type="text" name="subscriber_name" placeholder="Name">
                        </div>
                        <div>
                            <label>Email Address</label>
                            <input type="text" name="email_address" placeholder="Email">
                        </div>
                        <div>
                            <label>Phone number</label>
                            <input type="text" name="phone_number" placeholder="Phone">
                        </div>
                        <div>
                            <input type="submit" value="Add a New Subscriber">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>