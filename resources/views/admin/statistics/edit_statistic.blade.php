
@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>



<div class="page-content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">

                  <h4 class="card-title">Edit Statistic</h4>

                <Form id="myForm" method="post" action="{{ route('store.statistic') }}">
                  @csrf

                   <input type="hidden" name="id" value="{{ $editstatistic->id }}">
    <div class="row mb-3">
        <label for="example-text-input" class="col-sm-2 col-form-label">Our Experience</label>
        <div class="form-group col-sm-10">
            <input name="title_1" class="form-control" id="title_1" type="text" value="{{$editstatistic->title_1}}" placeholder="Our Experience" id="title-text-input">
        </div>
    </div>
<!-- end row done-->

<div class="row mb-3">
  <label for="example-text-input" class="col-sm-2 col-form-label">Our Experience Number</label>
  <div class="form-group col-sm-10">
      <input name="number_1" class="form-control" id="number_1" type="text" value="{{$editstatistic->number_1}}" placeholder="Our Experience Number" id="title-text-input">
  </div>
</div>
<!-- end row done-->

<div class="row mb-3">
  <label for="example-text-input" class="col-sm-2 col-form-label">Farm Specialist</label>
  <div class="form-group col-sm-10">
      <input name="title_2" class="form-control" id="title_2" type="text" value="{{$editstatistic->title_2}}" placeholder="Farm Specialist" id="title-text-input">
  </div>
</div>
<!-- end row done-->

<div class="row mb-3">
  <label for="example-text-input" class="col-sm-2 col-form-label">Farm Specialist Number</label>
  <div class="form-group col-sm-10">
      <input name="number_2" class="form-control" id="number_2" type="text" value="{{$editstatistic->number_2}}" placeholder="Farm Specialist Number" id="title-text-input">
  </div>
</div>
<!-- end row done-->

<div class="row mb-3">
  <label for="example-text-input" class="col-sm-2 col-form-label">Complete Project</label>
  <div class="form-group col-sm-10">
      <input name="title_3" class="form-control" id="title_3" type="text" value="{{$editstatistic->title_3}}" placeholder="Complete Project" id="title-text-input">
  </div>
</div>
<!-- end row -->


    <div class="row mb-3">
      <label for="example-text-input" class="col-sm-2 col-form-label">Complete Project Number</label>
      <div class="form-group col-sm-10">
          <input name="number_3" class="form-control" id="number_3" type="text" value="{{$editstatistic->number_3}}" placeholder="Complete Project Number" value="" id="example-text-input">
      </div>
  </div>
    <!-- end row -->

    <div class="row mb-3">
      <label for="example-text-input" class="col-sm-2 col-form-label">Happy Clients</label>
      <div class="form-group col-sm-10">
          <input name="title_4" class="form-control" id="title_4" type="text" value="{{$editstatistic->title_4}}" placeholder="Happy Clients" id="title-text-input">
      </div>
  </div>
<!-- end row -->
<div class="row mb-3">
  <label for="example-text-input" class="col-sm-2 col-form-label">Happy Clients Number</label>
  <div class="form-group col-sm-10">
      <input name="number_4" class="form-control" id="number_4" type="text" value="{{$editstatistic->number_4}}" placeholder="Happy Clients Number" id="title-text-input">
  </div>
</div>
<!-- end row -->


  <input class="btn btn-info waves-effect waves-light" type="submit" value="Update Statistic">
  <a href="{{ route('all.statistics') }}" class="btn btn-outline-danger waves-effect waves-light">Cancel</a>
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
              description: {
                  required : true,
              }, 
              link: {
                  required : true,
              }, 
              image: {
                  required : true,
              }, 
              
          },
          messages :{
                title: {
                  required : 'Please Enter Product Title',
              }, 
              description: {
                  required : 'Please Enter Product Description',
              }, 
              link: {
                  required : 'Please Enter Product Page Link (Url)',
              },
              image: {
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

@endsection