@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>



<div class="page-content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">

                  <h4 class="card-title">Edit Product</h4>

                <Form method="post" action="{{ route('update.product') }}" enctype="multipart/form-data">
                  @csrf

                   <input type="hidden" name="id" value="{{ $product->id }}">
                  <div class="row mb-3">
                      <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                      <div class="col-sm-10">
                          <input name="title" class="form-control" id="title" type="text" placeholder="Title" value="{{$product->title}}" id="title-text-input">
                      </div>
                  </div>
<!-- end row -->



  <div class="row mb-3">
    <label for="example-text-input" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-10">
        <textarea name="description" placeholder="Description" class="form-control" rows="5">{{$product->description}}</textarea>
    </div>
</div>
<!-- end row -->


    <div class="row mb-3">
      <label for="example-text-input" class="col-sm-2 col-form-label">Link</label>
      <div class="col-sm-10">
          <input name="link" class="form-control" id="details" type="text" placeholder="Link" value="{{$product->link}}" id="example-text-input">
      </div>
  </div>
    <!-- end row -->




    <div class="row mb-3">
      <label for="example-text-input" class="col-sm-2 col-form-label">Product Image </label>
      <div class="col-sm-10">
          <input name="image" class="form-control" id="image" type="file">
      </div>
  </div>
    <!-- end row -->
    <div class="row mb-3">
      <label for="example-text-input" class="col-sm-2 col-form-label"></label>
      <div class="col-sm-10"> 
        <img id="showImage" class="rounded avatar-lg"" src="{{ asset($product->image) }}" alt="Product Image" weight>
      </div>
  </div>


  <input class="btn btn-info waves-effect waves-light" type="submit" value="Update Product">
  <a href="{{ route('all.product') }}" class="btn btn-outline-danger waves-effect waves-light">Cancel</a>
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