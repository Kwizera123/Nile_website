
@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>



<div class="page-content">
  <div class="container-fluid">

<div class="row">
  <div class="col-12">
<div class="card">
    <div class="card-body">

        <h4 class="card-title">Create Left Banner</h4>

      <Form id="myForm" method="post" action="{{ route('store.left.banner')}}" enctype="multipart/form-data">
        @csrf

        
        <div class="row mb-3">
            <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
            <div class="form-group col-sm-10">
                <input name="title_article_one" class="form-control" id="title_article_one" type="text" placeholder="Title" " id="example-text-input">
            </div>
        </div>

  <!-- end row -->
  
  <div class="row mb-3">
    <label for="example-text-input" class="col-sm-2 col-form-label">Detail One</label>
    <div class="form-group col-sm-10">
        <textarea name="details_article_one"class="form-control" rows="5" placeholder="Details"></textarea>
    </div>
</div>
<!-- end row -->

<div class="row mb-3">
  <label for="example-text-input" class="col-sm-2 col-form-label">Read More</label>
  <div class="form-group col-sm-10">
      <input name="readmore_article_one" class="form-control" id="readmore_article_one" type="text" placeholder="Read More Url" id="example-text-input">
  </div>
</div>
<!-- end row -->


    <!-- end row -->
    

    <div class="row mb-3">
      <label for="example-text-input" class="col-sm-2 col-form-label">Left Image </label>
      <div class="form-group col-sm-10">
          <input name="image_one" class="form-control" id="image" type="file">
      </div>
  </div>
    <!-- end row -->
    <div class="row mb-3">
      <label for="example-text-input" class="col-sm-2 col-form-label"></label>
      <div class="col-sm-10">
        <img id="showImage" class="rounded avatar-lg"" src="{{ url('upload/no_image.jpg') }}" alt="Left Image" weight>
      </div>
  </div>

  <input class="btn btn-primary waves-effect waves-light" type="submit" value="Publish Left Banner">
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
            title_article_one: {
                  required : true,
              }, 
              details_article_one: {
                  required : true,
        
              },
              readmore_article_one: {
                  required : true,
              },
              
          },
          messages :{
            title_article_one: {
                  required : 'Please Enter Article Title Left',
              }, 
              details_article_one: {
                  required : 'Please Enter Article Details Left',
              }, 
              readmore_article_one: {
                  required : 'Please Enter Article Readmore Link (Url)',
        
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

{{-- <script type="text/javascript">

  $(document).ready(function(){
    $('#abimage').change(function(e){
      var reader = new FileReader();
      reader.onload = function(e){
        $('#aboutImage').attr('src',e.target.result);
      }
      reader.readAsDataURL(e.target.files['0']);
    });
  });
</script> --}}

@endsection