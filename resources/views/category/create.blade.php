@extends('layouts.app')

@section('content')

<div class="desktop">

    <h2>Add Student</h2>

    <form action="{{ route('category.store') }}" method="POST">
        @csrf

        <div>
            <label>Name:</label><br>
            <input type="text" name="name" required>
        </div>

        <div>
            <label>Marks:</label><br>
            <input type="number" name="maxMarks" required>
        </div>

        <br>

        <button type="submit" class="btn btn-edit">Save</button>

    </form>

</div>

@endsection