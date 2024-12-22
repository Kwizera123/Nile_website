
@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>



<div class="page-content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">

                  <h4 class="card-title">New Home Slide</h4>

                <Form id="myForm" method="post" action="{{ route('store.home.slide') }}" enctype="multipart/form-data">
                  @csrf

                  {{-- <input type="hidden" name="id" value=""> --}}
                  <div class="row mb-3">
                      <label for="example-text-input" class="col-sm-2 col-form-label">Slide Title</label>
                      <div class="form-group col-sm-10">
                          <input name="title" class="form-control" id="title" type="text" placeholder="Title" id="title-text-input">
                      </div>
                  </div>
<!-- end row -->



  <div class="row mb-3">
    <label for="example-text-input" class="col-sm-2 col-form-label">Slide Short title</label>
    <div class="form-group col-sm-10">
        <textarea name="short_title" placeholder="Short title" class="form-control" rows="5"></textarea>
    </div>
</div>
<!-- end row -->


    <div class="row mb-3">
      <label for="example-text-input" class="col-sm-2 col-form-label">Slide Explore Url</label>
      <div class="form-group col-sm-10">
          <input name="explore" class="form-control" id="explore" type="text" placeholder="Explore" id="example-text-input">
      </div>
  </div>
    <!-- end row -->




    <div class="row mb-3">
      <label for="example-text-input" class="col-sm-2 col-form-label">Home Image Slide </label>
      <div class="form-group col-sm-10">
          <input name="home_slide" class="form-control" id="image" type="file">
      </div>
  </div>
    <!-- end row -->
    <div class="row mb-3">
      <label for="example-text-input" class="col-sm-2 col-form-label"></label>
      <div class="col-sm-10"> 
        <img id="showImage" class="rounded avatar-lg"" src="{{url('upload/no_image.jpg') }}" alt="Product Image" weight>
      </div>
  </div>


  <input class="btn btn-primary waves-effect waves-light" type="submit" value="Publish New Slide">
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
              explore: {
                  required : true,
              }, 
              home_slide: {
                  required : true,
              }, 
              
          },
          messages :{
                title: {
                  required : 'Please Enter Slide Title',
              }, 
              short_title: {
                  required : 'Please Enter Slide Short title',
              }, 
              explore: {
                  required : 'Please Enter Slide Details Url',
              },
              home_slide: {
                  required : 'Please Select Slide Image',
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

@endsection