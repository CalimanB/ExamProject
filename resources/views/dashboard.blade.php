<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    Welcome, {{ Auth::user()->name }} !<br>
                    <p class="font-medium text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800">You are in the  right place if... you want to View and Delete user accounts.</p>
                
                <p>All current employees using the platform are listed below:</p>
                <div>
                    @if (session()->has('success'))
                        <div>
                            {{session('success')}}
                        </div>
                    @endif
                </div>
                <div class="overflow-auto rounded-lg shadow-lg">
                    <table class="w-full">
                        <thead class="bg-indigo-300 border-b-2 border-white">
                        <tr>
                            <th class="p-3 text-sm font-semibold tracking-wide text-left">ID</th>
                            <th class="p-3 text-sm font-semibold tracking-wide text-left">Name</th>
                            <th class="p-3 text-sm font-semibold tracking-wide text-left">Email</th>
                            <th class="p-3 text-sm font-semibold tracking-wide text-left">Created at</th>
                            <th class="p-3 text-sm font-semibold tracking-wide text-left">Updated at</th>
                            <th class="p-3 text-sm font-semibold tracking-wide text-left">Delete</th>
                        </tr>
                        </thead>
                        @foreach($users as $user)
                        <tr class="even:bg-indigo-100 odd:bg-indigo-50 hover:bg-indigo-200">
                            <td class="p-3 text-sm text-indigo-900">{{$user->id}}</td>
                            <td class="p-3 text-sm text-indigo-900">{{$user->name}}</td>
                            <td class="p-3 text-sm text-indigo-900">{{$user->email}}</td>
                            <td class="p-3 text-sm text-indigo-900">{{$user->created_at}}</td>
                            <td class="p-3 text-sm text-indigo-900">{{$user->updated_at}}</td>
                            <form method="post" action="{{route('user.destro', ['user'=> $user])}}" class="hover:underline">
                                @csrf
                                @method('delete')
                            <td>
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this user?')"class="hover:underline">
                                <i class="fa-solid fa-trash"></i> Delete
                                </button>
                            </td>
                            </form>
                        </tr>
                        @endforeach
                    </table>    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
