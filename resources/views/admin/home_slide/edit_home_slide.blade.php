@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="page-content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">

                  <h4 class="card-title">Edit Home Slide</h4>

                <Form method="post" action="{{ route('update.slider') }}" enctype="multipart/form-data">
                  @csrf

                  <input type="hidden" name="id" value="{{ $homeslide->id }}">
                  <div class="row mb-3">
                      <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                      <div class="col-sm-10">
                          <input name="title" class="form-control" id="title" type="text" placeholder="title" value="{{ $homeslide->title }}" id="example-text-input">
                      </div>
                  </div>

  <!-- end row -->
  <div class="row mb-3">
    <label for="example-text-input" class="col-sm-2 col-form-label">Short Title</label>
    <div class="col-sm-10">
        <input name="short_title" class="form-control" id="short_title" type="text" placeholder="Short title" value="{{ $homeslide->short_title }}" id="example-text-input">
    </div>
</div>
  <!-- end row -->

    
    <div class="row mb-3">
      <label for="example-text-input" class="col-sm-2 col-form-label">Explore</label>
      <div class="col-sm-10">
          <input name="explore" class="form-control" id="explore" type="text" placeholder="" value="{{ $homeslide->explore }}" id="example-text-input">
      </div>
  </div>
    <!-- end row -->

    <div class="row mb-3">
      <label for="example-text-input" class="col-sm-2 col-form-label">Home Slide </label>
      <div class="col-sm-10">
          <input name="home_slide" class="form-control" id="image" type="file">
      </div>
  </div>
    <!-- end row -->
    <div class="row mb-3">
      <label for="example-text-input" class="col-sm-2 col-form-label"></label>
      <div class="col-sm-10"> 
        <img id="showImage" class="rounded avatar-lg"" src="{{(!empty($homeslide->home_slide))? url($homeslide->home_slide):url('upload/no_image.jpg') }}" alt="Slide Image" weight>
      </div>
  </div>
  <input class="btn btn-info waves-effect waves-light" type="submit" value="Update Home Slide">
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