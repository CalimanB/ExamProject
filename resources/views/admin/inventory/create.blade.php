<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Inventories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    Welcome, {{ Auth::user()->name }} !<br>
                    <p class="font-medium text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800">You are in the  right place if... you want to CREATE AN INVENTORY</p>
                    <h1>Add a new inventory item</h1>
                    <form method="post" action="{{route('inventory.store')}}">
                        @csrf
                        @method ('post')
                        <div>
                            <label>Author</label>
                            <input type="text" name="author" placeholder="Author" class="text-yellow-400 text-opacity-100">
                        </div>
                        <div>
                            <label>Book Title</label>
                            <input type="text" name="title" placeholder="Title" class="text-purple-700 text-opacity-100">
                        </div>
                        <div>
                            <input type="submit" value="Add New Inventory Item" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>