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
                    <a href="{{route('subscriber.create')}}"><i class="fa-solid fa-plus"> Add a new subscriber</i></a>
                </div>
                    <div>
                    <table>
                    <tr>
                        <th>ID</th>
                        <th>Subscriber Name</th>
                        <th>Email Address</th>
                        <th>Phone Number</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    @foreach($subscribers as $subscriber)
                        <tr>
                            <td>{{$subscriber ->id}}</td>
                            <td>{{$subscriber ->subscriber_name}}</td>
                            <td>{{$subscriber ->email_address}}</td>
                            <td>{{$subscriber ->phone_number}}</td>
                            <td>{{$subscriber->created_at}}</td>
                            <td>{{$subscriber->updated_at}}</td>
                            <td><a href="{{route('subscriber.edit', ['subscriber'=>$subscriber])}}"><i class="fa fa-edit"> Edit</i></a></td>
                            <td>
                            <form method="post" action="{{route('subscriber.destroy', ['subscriber'=>$subscriber])}}">
                                @csrf
                                @method('delete')
                                <button type="submit" onclick="return confirm('Are you sure you want to delete this subscriber?')">
                                <i class="fa-solid fa-trash"> Delete</i>
                                </button>
                                <!-- <input type="submit" value="Delete" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" onclick="return confirm('Are you sure you want to delete this item?')"> -->
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