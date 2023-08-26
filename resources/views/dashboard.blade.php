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
                <div>
                    <table border="1">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Delete</th>
                        </tr>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at}}</td>
                            <td>{{$user->updated_at}}</td>
                            <form method="post" action="{{route('user.destro', ['user'=> $user])}}">
                                @csrf
                                @method('delete')
                            <td>
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this item?')">
                                Delete <i class="fa-solid fa-trash"></i>
                                </button>
                                <!-- <input type="submit" value="Delete"/> -->
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
