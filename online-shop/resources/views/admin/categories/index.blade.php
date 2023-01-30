@extends('layouts.admin')
@section('content')
@if ($message = Session::get('success'))
        <div class="alert alert-danger" role="alert">
            {{ $message }}
        </div>
    @endif
    <div>
        <a class="btn btn-success" href="{{ url('admin/categories/create') }}">Add</a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th colspan="3">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category['id'] }}</td>
                    <td class="text-center">{{ $category['name'] }}</td>
                    <td class="text-center"><a class="btn btn-success w-50" href="{{ url('admin/categories/' . $category['id']) }}">Show</a></td>
                    <td class="text-center"><a class="btn btn-warning w-50" href="{{ url('admin/categories/' . $category['id'] . '/edit') }}">Edit</a></td>
                    <td class="text-center">
                        <form action="{{ url('admin/categories/' . $category['id']) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button onclick="return confirm('Are you sure?')" class="btn btn-danger w-50">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {!! $categories->links() !!}
@endsection
