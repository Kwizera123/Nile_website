@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>



<div class="page-content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">

                  <h4 class="card-title">Edit About Page</h4>

                <Form method="post" action="{{ route('update.about.page') }}" enctype="multipart/form-data">
                  @csrf

                  <input type="hidden" name="id" value="{{ $aboutpage->id }}">
                  <div class="row mb-3">
                      <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                      <div class="col-sm-10">
                          <input name="title" class="form-control" id="title" type="text" placeholder="title" value="{{ $aboutpage->title }}" id="example-text-input">
                      </div>
                  </div>

  <!-- end row -->
  <div class="row mb-3">
    <label for="example-text-input" class="col-sm-2 col-form-label">Short Title</label>
    <div class="col-sm-10">
        <input name="short_title" class="form-control" id="short_title" type="text" placeholder="Short title" value="{{ $aboutpage->short_title }}" id="example-text-input">
    </div>
</div>
  <!-- end row -->


  <div class="row mb-3">
    <label for="example-text-input" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-10">
        <textarea name="description" required="" class="form-control" rows="5">{{ $aboutpage->description }}</textarea>
    </div>
</div>
<!-- end row -->

{{-- <div class="row mb-3">
  <label for="example-text-input" class="col-sm-2 col-form-label">About Icon </label>
  <div class="col-sm-10">
      <input name="small_image" class="form-control" id="image" type="file">
  </div>
</div> --}}
<!-- end row -->
{{-- <div class="row mb-3">
  <label for="example-text-input" class="col-sm-2 col-form-label"></label>
  <div class="col-sm-10"> 
    <img id="showImage" class="rounded avatar-lg"" src="{{ (!empty($aboutpage->small_image))? url($aboutpage->small_image):url('upload/no_image.jpg') }}" alt="About Icon" weight>
  </div>
</div> --}}
    <!-- end row -->
    <div class="row mb-3">
      <label for="example-text-input" class="col-sm-2 col-form-label">Small Title</label>
      <div class="col-sm-10">
          <input name="small_title" class="form-control" id="small_title" type="text" placeholder="Small Title" value="{{ $aboutpage->small_title }}" id="example-text-input">
      </div>
  </div>
    <!-- end row -->

    <div class="row mb-3">
      <label for="example-text-input" class="col-sm-2 col-form-label">Details</label>
      <div class="col-sm-10">
          <input name="details" class="form-control" id="details" type="text" placeholder="Details" value="{{ $aboutpage->details }}" id="example-text-input">
      </div>
  </div>
    <!-- end row -->




    <div class="row mb-3">
      <label for="example-text-input" class="col-sm-2 col-form-label">About Image </label>
      <div class="col-sm-10">
          <input name="about_image" class="form-control" id="abimage" type="file">
      </div>
  </div>
    <!-- end row -->
    <div class="row mb-3">
      <label for="example-text-input" class="col-sm-2 col-form-label"></label>
      <div class="col-sm-10"> 
        <img id="aboutImage" class="rounded avatar-lg"" src="{{ (!empty($aboutpage->about_image))? url($aboutpage->about_image):url('upload/no_image.jpg') }}" alt="About Image" weight>
      </div>
  </div>

  <input class="btn btn-info waves-effect waves-light" type="submit" value="Update About Page">
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

<script type="text/javascript">

  $(document).ready(function(){
    $('#abimage').change(function(e){
      var reader = new FileReader();
      reader.onload = function(e){
        $('#aboutImage').attr('src',e.target.result);
      }
      reader.readAsDataURL(e.target.files['0']);
    });
  });
</script>

@endsection