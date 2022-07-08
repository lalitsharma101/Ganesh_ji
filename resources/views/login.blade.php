@extends('master')
@section("content")
<div class="container custom-login">
<div class="row">
    <div class="col-sm-4 col-sm-offset-4">
        <form action="/login" method="POST">
            @csrf
        <div class="mb-3">
           <div class="form-group">
            <label for="" class="form-label">email</label>
            <input type="email" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="" class="form-label">password</label>
            <input type="password" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId">
          </div>
        </div>
          <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</div>
</div>
@endsection
