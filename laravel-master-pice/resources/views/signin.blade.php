@extends('shard.layout')
@section('contant')
    <form action="/createaccount" method="POST">
        <label for="name">Full Name </label>
        <input type="text" name="name" id="name">
        <br>
        <label for="dob">Date of birth </label>
        <input type="date" name="dob" id="dob">
        <br>
        <label for="email">Email </label>
        <input type="email" name="email" id="email">
        <br>
        <label for="pwd">password </label>
        <input type="password" name="pwd" id="pwd">
        <br>
        <label for="userimg">Profile image </label>
        <input type="file" name="userimg" id="userimg">
        <br>
        <button type="submit">Create account</button>
    </form>
@endsection
