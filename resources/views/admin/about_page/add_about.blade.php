@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>



<div class="page-content">
  <div class="container-fluid">

<div class="row">
  <div class="col-12">
<div class="card">
    <div class="card-body">

        <h4 class="card-title">Create About Page</h4>

      <Form id="myForm" method="post" action="{{ route('store.about') }}" enctype="multipart/form-data">
        @csrf

        
        <div class="row mb-3">
            <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
            <div class="form-group col-sm-10">
                <input name="title" class="form-control" id="title" type="text" placeholder="Title" " id="example-text-input">
            </div>
        </div>

  <!-- end row -->
  <div class="row mb-3">
    <label for="example-text-input" class="col-sm-2 col-form-label">Short Title</label>
    <div class="form-group col-sm-10">
        <input name="short_title" class="form-control" id="short_title" type="text" placeholder="Short title" id="example-text-input">
    </div>
</div>
  <!-- end row -->


  <div class="row mb-3">
    <label for="example-text-input" class="col-sm-2 col-form-label">Description</label>
    <div class="form-group col-sm-10">
        <textarea name="description" required="" class="form-control" rows="5" placeholder="Description"></textarea>
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
      <div class="form-group col-sm-10">
          <input name="small_title" class="form-control" id="small_title" type="text" placeholder="Small Title"  id="example-text-input">
      </div>
  </div>
    <!-- end row -->

    <div class="row mb-3">
      <label for="example-text-input" class="col-sm-2 col-form-label">Award</label>
      <div class="form-group col-sm-10">
          <input name="award" class="form-control" id="award" type="text" placeholder="Award"  id="example-text-input">
      </div>
  </div>
    <!-- end row -->

    <div class="row mb-3">
      <label for="example-text-input" class="col-sm-2 col-form-label">Details</label>
      <div class="form-group col-sm-10">
          <input name="details" class="form-control" id="details" type="text" placeholder="Details"  id="example-text-input">
      </div>
  </div>
    <!-- end row -->

    <div class="row mb-3">
      <label for="example-text-input" class="col-sm-2 col-form-label">About Image </label>
      <div class="form-group col-sm-10">
          <input name="about_image" class="form-control" id="abimage" type="file">
      </div>
  </div>
    <!-- end row -->
    <div class="row mb-3">
      <label for="example-text-input" class="col-sm-2 col-form-label"></label>
      <div class="col-sm-10">
        <img id="aboutImage" class="rounded avatar-lg"" src="{{ url('upload/no_image.jpg') }}" alt="About Image" weight>
      </div>
  </div>

  <input class="btn btn-primary waves-effect waves-light" type="submit" value="Publish About Page">
</Form>


                  
              </div>
          </div>
      </div> <!-- end col -->
  </div>

  </div>
</div>


<script type="text/javascript">
  $(document).ready(function (){
      $('#myForm').validate({
          rules: {
              title: {
                  required : true,
              }, 
              short_title: {
                  required : true,
              }, 
              description: {
                  required : true,
              }, 
              small_title: {
                  required : true,
              }, 
              details: {
                  required : true,
              },
              
          },
          messages :{
                title: {
                  required : 'Please Enter Product Title',
              }, 
              short_title: {
                  required : 'Please Enter Product Description',
              }, 
              description: {
                  required : 'Please Enter Product Page Link (Url)',
              },
              small_title: {
                  required : 'Please Select Product Image',
              },
              details: {
                  required : 'Please Select Product Image',
              },
               

          },
          errorElement : 'span', 
          errorPlacement: function (error,element) {
              error.addClass('invalid-feedback');
              element.closest('.form-group').append(error);
          },
          highlight : function(element, errorClass, validClass){
              $(element).addClass('is-invalid');
          },
          unhighlight : function(element, errorClass, validClass){
              $(element).removeClass('is-invalid');
          },
      });
  });
  
</script>



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