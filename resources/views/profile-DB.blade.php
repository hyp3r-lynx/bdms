@extends('layouts.app')

@section('content')
<div class="create_form container">
    <div class="profile_form">
        <form>
            <label for="name">Full name:</label><br>
            <input type="text" name="name" required><br>

            <label for="name">Email:</label><br>
            <input type="text" name="name" required><br>

            <label for="name">Mobile:</label><br>
            <input type="text" name="name" required><br><br>

            <button name="submitbtn">Submit</button>
        </form>
    </div>
</div>
@endsection
