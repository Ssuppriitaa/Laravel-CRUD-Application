@extends('layouts.app')

@section('content')

<div class="desktop">

    <h2>Edit Student</h2>

    <form action="{{ route('category.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Name:</label><br>
            <input type="text" name="name" value="{{ $category->name }}" required>
        </div>

        <div>
            <label>Marks:</label><br>
            <input type="number" name="maxMarks" value="{{ $category->maxMarks }}" required>
        </div>

        <br>

        <button type="submit" class="btn btn-edit">Update</button>

    </form>

</div>

@endsection