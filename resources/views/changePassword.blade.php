@extends('master')

@section('title',"Change password")

@section('content')
<div class="mb-3">
    <a href="/lecturer/{{$code}}" class="btn btn-danger"> Back to Profile </a>
</div>

<div class="container">
    <form role="form" method="post" action="/lecturer/{{$code}}/updatePassword">
        <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label"> <b> Password </b></label>
            <div class="col-lg-9">
              <input class="form-control" type="text" name="code" value= {{$code}} disabled>
            </div>
          </div>
      <div class="form-group row">
        <label class="col-lg-3 col-form-label form-control-label"> <b> Password </b></label>
        <div class="col-lg-9">
          <input class="form-control" type="password" name="password" placeholder="Set new password...">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-lg-3 col-form-label form-control-label"> <b> Confirm password </b></label>
        <div class="col-lg-9">
          <input class="form-control" type="password" placeholder="Re-type new password...">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-lg-3 col-form-label form-control-label"></label>
        <div class="col-lg-9">
          <input type="submit" class="btn btn-primary" value="Save Changes">
          <input type="reset" class="btn btn-danger" value="Reset">
        </div>
      </div>

      <script>
        $(".alert").alert();
      </script>


    </form>
</div>
@endsection