@extends('layouts.master')
@section('content')
<div class="mx-auto mt-5" style="width: 200px;">
    <form action="/user" method="POST">
     @csrf
      <div class="form-group">
        <label>Username</label>
        <input type="text" class="form-control" id="username"placeholder="Enter username">

        <label>Password</label>
        <input type="password" class="form-control" id="password"  placeholder="Enter password">
        <label>Repeat password</label>
        <input type="password" class="form-control" id="passwordCheck"  placeholder="Repeat password">

        <label>Email address</label>
        <input type="email" class="form-control" id="email"placeholder="Enter email">
        <label> Enter short bio </label>
        <textarea type="text" class="form-control-lg" id="bio"placeholder="Enter bio" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
