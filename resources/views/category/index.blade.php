@extends('layouts.app')

@section('content')

<div class="desktop">

    <h2>Student List</h2>

    <a href="{{ route('category.create') }}" class="btn btn-edit">
        + Add Student
    </a>

    <div class="group">
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Marks</th>
                <th>Action</th>
            </tr>

            @foreach($categories as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->maxMarks }}</td>
                <td>
                    <a href="{{ route('category.edit', $item->id) }}" class="btn btn-edit">Edit</a>

                    <form action="{{ route('category.destroy', $item->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-delete">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach

        </table>
    </div>

</div>

@endsection