@extends('layouts.master')

@section('title')
  This is the content

@endsection

@section('content')
  <div class="row">
    <div class="col-md-6">

      <form action="#" method="post">
        <div class="form-group">
          <label for="email"> Your Email</label>
          <input class="form-control" type="text" id="email" >

        </div>


        <div class="form-group">
          <label for="first_name"> First Name</label>
          <input class="form-control" type="text" id="first_name" >

        </div>

        <div class="form-group">
          <label for="password"> Password</label>
          <input class="form-control" type="password" id="password" >

        </div>
        <button type="submit" class="btn btn-primary" >Submit</button>


      </form>

    </div>
    <div class="col-md-6">

      <form action="#" method="post">
        <div class="form-group">
          <label for="email"> Your Email</label>
          <input class="form-control" type="email" id="email" >

        </div>

        <div class="form-group">
          <label for="password"> Password</label>
          <input class="form-control" type="password" id="password" >

        </div>
        <button type="submit" class="btn btn-primary" >Submit</button>


      </form>

    </div>
  </div>

@endsection
