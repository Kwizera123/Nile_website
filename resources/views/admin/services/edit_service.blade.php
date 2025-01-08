
@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>



<div class="page-content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">

                  <h4 class="card-title">Edit Services Data</h4>

                <Form id="myForm" method="post" action="{{ route('update.service') }}">
                  @csrf

                   <input type="hidden" name="id" value="{{ $editservice->id }}">
    <div class="row mb-3">
        <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
        <div class="form-group col-sm-10">
            <input name="title" class="form-control" id="title" type="text" value="{{$editservice->title}}" placeholder="Title" id="title-text-input">
        </div>
    </div>
<!-- end row done-->

<div class="row mb-3">
  <label for="example-text-input" class="col-sm-2 col-form-label">Subtitle</label>
  <div class="form-group col-sm-10">
      <input name="subtile" class="form-control" id="subtile" type="text" value="{{$editservice->subtile}}" placeholder="Subtitle" id="title-text-input">
  </div>
</div>
<!-- end row done-->

<div class="row mb-3">
  <label for="example-text-input" class="col-sm-2 col-form-label">Details</label>
  <div class="form-group col-sm-10">
      <input name="details" class="form-control" id="details" type="text" value="{{$editservice->details}}" placeholder="Farm Specialist" id="title-text-input">
  </div>
</div>
<!-- end row done-->

<div class="row mb-3">
  <label for="example-text-input" class="col-sm-2 col-form-label">Contact Link url</label>
  <div class="form-group col-sm-10">
      <input name="Contact_link" class="form-control" id="Contact_link" type="text" value="{{$editservice->Contact_link}}" placeholder="Farm Specialist Number" id="title-text-input">
  </div>
</div>
<!-- end row done-->

<div class="row mb-3">
  <label for="example-text-input" class="col-sm-2 col-form-label">Vegetable</label>
  <div class="form-group col-sm-10">
      <input name="Vegetable" class="form-control" id="Vegetable" type="text" value="{{$editservice->Vegetable}}" placeholder="Complete Project" id="title-text-input">
  </div>
</div>
<!-- end row -->


    <div class="row mb-3">
      <label for="example-text-input" class="col-sm-2 col-form-label">Vegetabler Details</label>
      <div class="form-group col-sm-10">
          <input name="Vegetabler_d" class="form-control" id="Vegetabler_d" type="text" value="{{$editservice->Vegetabler_d}}" placeholder="Vegetabler d" value="" id="example-text-input">
      </div>
  </div>
    <!-- end row -->

    <div class="row mb-3">
      <label for="example-text-input" class="col-sm-2 col-form-label">Fruit</label>
      <div class="form-group col-sm-10">
          <input name="Fruit" class="form-control" id="Fruit" type="text" value="{{$editservice->Fruit}}" placeholder="Fruit" id="title-text-input">
      </div>
  </div>
<!-- end row -->
<div class="row mb-3">
  <label for="example-text-input" class="col-sm-2 col-form-label">Fruit detail</label>
  <div class="form-group col-sm-10">
      <input name="Fruit_d" class="form-control" id="Fruit_d" type="text" value="{{$editservice->Fruit_d}}" placeholder="Fruit details" id="title-text-input">
  </div>
</div>
<!-- end row -->

<div class="row mb-3">
  <label for="example-text-input" class="col-sm-2 col-form-label">Healty</label>
  <div class="form-group col-sm-10">
      <input name="healty" class="form-control" id="healty" type="text" value="{{$editservice->healty}}" placeholder="Healty" id="title-text-input">
  </div>
</div>
<!-- end row -->

<div class="row mb-3">
  <label for="example-text-input" class="col-sm-2 col-form-label">Healty Details</label>
  <div class="form-group col-sm-10">
      <input name="healty_d" class="form-control" id="healty_d" type="text" value="{{$editservice->healty_d}}" placeholder="Healty Details" id="title-text-input">
  </div>
</div>
<!-- end row -->

<div class="row mb-3">
  <label for="example-text-input" class="col-sm-2 col-form-label">Modern </label>
  <div class="form-group col-sm-10">
      <input name="Modern" class="form-control" id="Modern" type="text" value="{{$editservice->Modern}}" placeholder="Modern" id="title-text-input">
  </div>
</div>
<!-- end row -->

<div class="row mb-3">
  <label for="example-text-input" class="col-sm-2 col-form-label">Modern Detail</label>
  <div class="form-group col-sm-10">
      <input name="Modern_d" class="form-control" id="Modern_d" type="text" value="{{$editservice->Modern_d}}" placeholder="Modern Details" id="title-text-input">
  </div>
</div>
<!-- end row -->

<div class="row mb-3">
  <label for="example-text-input" class="col-sm-2 col-form-label">Farmang</label>
  <div class="form-group col-sm-10">
      <input name="Farmang" class="form-control" id="Farmang" type="text" value="{{$editservice->Farmang}}" placeholder="Farmang" id="title-text-input">
  </div>
</div>
<!-- end row -->

<div class="row mb-3">
  <label for="example-text-input" class="col-sm-2 col-form-label">Farming detail</label>
  <div class="form-group col-sm-10">
      <input name="farming_d" class="form-control" id="farming_d" type="text" value="{{$editservice->farming_d}}" placeholder="Farming details" id="title-text-input">
  </div>
</div>
<!-- end row -->


  <input class="btn btn-info waves-effect waves-light" type="submit" value="Update Services">
  <a href="{{ route('all.Services') }}" class="btn btn-outline-danger waves-effect waves-light">Cancel</a>
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