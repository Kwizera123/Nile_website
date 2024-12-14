@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="page-content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">

                  <h4 class="card-title">Change Password Page </h4><br/><br/>

                  @if(count($errors))
                  @foreach ($errors->all() as $error)
                    <p class="alert alert-danger alert-dismissible fade show">{{$errors}}</p>
                  @endforeach
                    
                  @endif

                <Form method="post" action="{{ route('update.password') }}">
                  @csrf

                  <div class="row mb-3">
                      <label for="example-text-input" class="col-sm-2 col-form-label">Old Password</label>
                      <div class="col-sm-10">
                          <input name="oldpassword" class="form-control" id="oldpassowrd" type="password" placeholder="Old Password" >
                          
                      </div>
                  </div>

                  <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">New Password</label>
                    <div class="col-sm-10">
                        <input name="newpassword" class="form-control" id="newpassowrd" type="password" placeholder="New Password" >
                        
                    </div>
                </div>

                <div class="row mb-3">
                  <label for="example-text-input" class="col-sm-2 col-form-label">Confirm Password</label>
                  <div class="col-sm-10">
                      <input name="confirm_password" class="form-control" id="newpassowrd" type="password" placeholder="Confirm Password" >
                      
                  </div>
              </div>

  <!-- end row -->

  <!-- end row -->


  <input class="btn btn-info waves-effect waves-light" type="submit" value="Change Password">
</Form>


                  
              </div>
          </div>
      </div> <!-- end col -->
  </div>

  </div>
</div>



@endsection