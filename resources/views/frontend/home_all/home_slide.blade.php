@php
  $allhomeslide = App\Models\HomeSlide::latest()->get();
@endphp
    <!-- Carousel Start -->
    
    <div class="container-fluid p-0">
        
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            
            <div class="carousel-inner">
                @foreach ($allhomeslide as $item)
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset($item->home_slide) }}" alt="Image">
                    <div class="carousel-caption top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-center justify-content-center">
                        <div class="text-start p-5" style="max-width: 900px;">
                            <h3 class="text-white">{{ $item->title }}</h3>
                            <h1 class="display-1 text-white mb-md-4">{{ $item->short_title }}</h1>
                            <a href="{{ $item->explore }}" class="btn btn-primary py-md-3 px-md-5 me-3">Explore</a>
                            <a href="" class="btn btn-secondary py-md-3 px-md-5">Contact</a>
                        </div>
                    </div>
                    
                 </div>
                 @endforeach

            </div>
            
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
       
    </div>
    
    <!-- Carousel End -->