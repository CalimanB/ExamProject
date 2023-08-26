<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Books') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    Welcome, {{ Auth::user()->name }} !<br>
                    <p class="font-medium text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800">You are in the  right place if...INDEX BOOK... you want to View, Edit, Add and Delete books from inventory.</p>
                <div>
                    @if (session()->has('success'))
                        <div>
                            {{session('success')}}
                        </div>
                    @endif
                </div>
                <div>
                    <a href="{{route('book.create')}}">Add a book</a>
                </div>
                    <div>
                    <table border="1">
                    <tr>
                        <th>ID</th>
                        <th>Author</th>
                        <th>Title</th>
                        <th>Number of pages</th>
                        <th>Year published</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    @foreach($books as $book)
                        <tr>
                            <td>{{$book ->id}}</td>
                            <td>{{$book ->author}}</td>
                            <td>{{$book ->title}}</td>
                            <td>{{$book ->page_num}}</td>
                            <td>{{$book ->year_published}}</td>
                            <td><a href="{{route('book.edit', ['book'=>$book])}}">Edit <i class="fa fa-edit"></a></td>
                            <td>
                            <form method="post" action="{{route('book.destroy', ['book'=>$book])}}">
                                @csrf
                                @method('delete')
                                <button type="submit" onclick="return confirm('Are you sure you want to delete this item?')">
                                Delete <i class="fa-solid fa-trash"></i>
                                </button>
                                <!-- <input type="submit" value='Delete' class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" onclick="return confirm('Are you sure you want to delete this item?')"> -->
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