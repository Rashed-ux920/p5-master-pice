
@extends('shard.layout')
@section('contant')
    <form action="" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <br>
        <label for="pwd">password</label>
        <input type="password" name="pwd" id="pwd">
        <br>
        <button type="submit">go in</button>
    </form>
@endsection
