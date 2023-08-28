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
                    <p class="font-weight:900 m-4 text-3xl text-indigo-900">Welcome, <span class="font-bold italic">{{ Auth::user()->name }}!</span></p>
                    <p class="font-medium text-xl text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 m-4">You are in the  right place if... you want to View, Edit, Add and Delete items from inventory.</p>
                    <div class="font-medium text-sm m-3 text-indigo-500">
                    @if (session()->has('success'))
                        <div>
                            {{session('success')}}
                        </div>
                    @endif
                </div>
                <div>
                    <a href="{{route('inventory.create')}}" class="text-decoration-line: underline hover:font-bold m-3"><i class="fa-solid fa-plus"></i> Add new inventory item</a>
                </div>
                <div class="overflow-auto rounded-lg shadow-lg m-3">
                <table class="w-full">
                    <thead class="bg-indigo-300 border-b-2 border-white text-indigo-900">
                    <tr>
                        <th class="p-3 text-base font-semibold tracking-wide text-left">ID</th>
                        <th class="p-3 text-base font-semibold tracking-wide text-left">Author</th>
                        <th class="p-3 text-base font-semibold tracking-wide text-left">Title</th>
                        <th class="p-3 text-base font-semibold tracking-wide text-left">Created at</th>
                        <th class="p-3 text-base font-semibold tracking-wide text-left">Updated at</th>
                        <th class="p-3 text-base font-semibold tracking-wide text-left">Edit</th>
                        <th class="p-3 text-base font-semibold tracking-wide text-left">Delete</th>
                    </tr>
                    </thead>
                    @foreach($inventories as $inventory)
                        <tr class="even:bg-indigo-100 odd:bg-indigo-50 hover:bg-indigo-200">
                            <td  class="p-3 text-sm text-indigo-900">{{$inventory ->id}}</td>
                            <td class="p-3 text-sm text-indigo-900">{{$inventory ->author}}</td>
                            <td class="p-3 text-sm text-indigo-900">{{$inventory ->title}}</td>
                            <td class="p-3 text-sm text-indigo-900">{{$inventory->created_at}}</td>
                            <td class="p-3 text-sm text-indigo-900">{{$inventory->updated_at}}</td>
                            <td class="p-3 text-sm text-indigo-900"><a href="{{route('inventory.edit', ['inventory'=>$inventory])}}" class="hover:underline"><i class="fa fa-edit" title="edit"></i> Edit</a></td>
                            <td class="p-3 text-sm text-indigo-900">
                            <form method="post" action="{{route('inventory.destroy', ['inventory'=>$inventory])}}">
                                @csrf
                                @method('delete')
                                <button type="submit" onclick="return confirm('Are you sure you want to delete this inventory item?')" class="hover:underline" title="delete">
                                <i class="fa-solid fa-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                        </tr>
                    @endforeach
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>