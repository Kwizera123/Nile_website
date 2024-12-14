@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="page-content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">

                  <h4 class="card-title">Edit Profile Page inputs</h4>

                <Form >
                  <div class="row mb-3">
                      <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                      <div class="col-sm-10">
                          <input name="name" class="form-control" id="name" type="text" placeholder="Name" value="{{ $editData->name }}" id="example-text-input">
                      </div>
                  </div>

  <!-- end row -->
  <div class="row mb-3">
    <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
        <input name="email" class="form-control" id="email" type="email" placeholder="Email" value="{{ $editData->email }}" id="example-text-input">
    </div>
</div>
  <!-- end row -->

    
    <div class="row mb-3">
      <label for="example-text-input" class="col-sm-2 col-form-label">Username</label>
      <div class="col-sm-10">
          <input name="username" class="form-control" id="username" type="text" placeholder="Username" value="{{ $editData->username }}" id="example-text-input">
      </div>
  </div>
    <!-- end row -->

    <div class="row mb-3">
      <label for="example-text-input" class="col-sm-2 col-form-label">Profile Image</label>
      <div class="col-sm-10">
          <input name="profile_image" class="form-control" id="image" type="file">
      </div>
  </div>
    <!-- end row -->
    <div class="row mb-3">
      <label for="example-text-input" class="col-sm-2 col-form-label"></label>
      <div class="col-sm-10"> 
        <img id="showImage" class="rounded avatar-lg"" src="{{ asset('backend/assets/images/small/img-5.jpg')}}" alt="Profile Image">
      </div>
  </div>
  <input class="btn btn-info waves-effect waves-light" type="submit" value="Update Profile">
</Form>


                  
              </div>
          </div>
      </div> <!-- end col -->
  </div>

  </div>
</div>

<script type="text/javascript">

  $(document).ready(function(){
    $('#image').change(function(e){
      var reader = new FileReader();
      reader.onload = function(e){
        $('#showImage').attr('src',e.target.result);
      }
      reader.readAsDataURL(e.target.files['0']);
    });
  });
</script>

@endsection