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
                    <p class="font-medium text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800">You are in the  right place if...INDEX SUBSCRIBER... you want to View, Edit, Add and Delete library subscribers.</p>
                    <div>
                    @if (session()->has('success'))
                        <div>
                            {{session('success')}}
                        </div>
                    @endif
                </div>
                <div>
                    <a href="{{route('subscriber.create')}}">Add a new subscriber</a>
                </div>
                    <div>
                    <table class="table-auto">
                    <tr>
                        <th>ID</th>
                        <th>Subscriber Name</th>
                        <th>Email Address</th>
                        <th>Phone Number</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    @foreach($subscribers as $subscriber)
                        <tr>
                            <td>{{$subscriber ->id}}</td>
                            <td>{{$subscriber ->subscriber_name}}</td>
                            <td>{{$subscriber ->email_address}}</td>
                            <td>{{$subscriber ->phone_number}}</td>
                            <td><a href="{{route('subscriber.edit', ['subscriber'=>$subscriber])}}">Edit</a></td>
                            <td>
                            <form method="post" action="{{route('subscriber.destroy', ['subscriber'=>$subscriber])}}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete">
                            </form>
                        </td>
                        </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>