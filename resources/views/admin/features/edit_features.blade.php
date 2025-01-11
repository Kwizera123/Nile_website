


@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>



<div class="page-content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">

                  <h4 class="card-title">Edit Home Feature</h4>

                <Form id="myForm" method="post" action="{{ route('update.home.feature') }}" enctype="multipart/form-data">
                  @csrf

                   <input type="hidden" name="id" value="{{ $feature->id }}">
                  <div class="row mb-3">
                      <label for="example-text-input" class="col-sm-2 col-form-label">Feature</label>
                      <div class="form-group col-sm-10">
                          <input name="features" class="form-control" id="features" type="text" {{ $feature->features }} placeholder="Feature" id="title-text-input">
                      </div>
                  </div>
<!-- end row -->


    <div class="row mb-3">
      <label for="example-text-input" class="col-sm-2 col-form-label">Why choose us</label>
      <div class="form-group col-sm-10">
          <input name="whychooseus" class="form-control" id="whychooseus" type="text" {{ $feature->whychooseus }} placeholder="Why choose us" id="example-text-input">
      </div>
  </div>
    <!-- end row -->

  <div class="row mb-3">
    <label for="example-text-input" class="col-sm-2 col-form-label">Descreptions</label>
    <div class="form-group col-sm-10">
        <textarea name="descreption" placeholder="Descreptions" class="form-control" rows="5">{{ $feature->descreption }}</textarea>
    </div>
</div>
<!-- end row -->


    <div class="row mb-3">
      <label for="example-text-input" class="col-sm-2 col-form-label">Home Feature Image </label>
      <div class="form-group col-sm-10">
          <input name="image" class="form-control" id="image" type="file">
      </div>
  </div>
    <!-- end row -->
    <div class="row mb-3">
      <label for="example-text-input" class="col-sm-2 col-form-label"></label>
      <div class="col-sm-10"> 
        <img id="showImage" class="rounded avatar-lg"" src="{{(!empty($feature->image))? url($feature->image):url('upload/no_image.jpg') }}" alt="Feature Image" weight>
      </div>
  </div>


  <input class="btn btn-info waves-effect waves-light" type="submit" value="Update Current Feature">
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
            features: {
                  required : true,
              }, 
              whychooseus: {
                  required : true,
              }, 
              descreption: {
                  required : true,
              }, 
              image: {
                  required : true,
              }, 
              
          },
          messages :{
            features: {
                  required : 'Please Just Type Feature',
              }, 
              whychooseus: {
                  required : 'Please Just type Why choose us',
              }, 
              descreption: {
                  required : 'Please Enter feature descreption',
              },
              image: {
                  required : 'Please Select Feature Image',
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