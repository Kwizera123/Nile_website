@php
    $product = App\Models\Product::latest()->get();
@endphp

<div class="container-fluid py-5">
  <div class="container">
        <div class="mx-auto text-center mb-5" style="max-width: 500px;">
          <h6 class="text-primary text-uppercase">Products</h6>
          <h1 class="display-5">Our Fresh & Organic Products</h1>
        </div>
        
        
         
        <div class="owl-carousel product-carousel px-5">
            @foreach ($product as $item)
            <div class="pb-5">
              <div class="product-item position-relative bg-white d-flex flex-column text-center">
                  <img class="img-fluid mb-4" src="{{ asset( $item->image ) }}" alt="">
                  <h6 class="mb-3">{{ $item->title }}</h6>
                  {{-- <h5 class="text-primary mb-0">$19.00</h5> --}}
                  <div class="btn-action d-flex justify-content-center">
                      
                      <a class="btn bg-secondary py-2 px-3" href="{{ $item->link }}"><i class="bi bi-eye text-white"></i></a>
                  </div>
              </div>
            </div>
            @endforeach

        </div>
       

    </div>


  </div>
</div>