@php

  $aboutpage = App\Models\About::find(1);
  

@endphp

<div class="container-fluid about pt-5">
  <div class="container">
      <div class="row gx-5">
          <div class="col-lg-6 mb-5 mb-lg-0">
              <div class="d-flex h-100 border border-5 border-primary border-bottom-0 pt-4">
                  <img class="img-fluid mt-auto mx-auto" src="{{ $aboutpage->about_image }}">
              </div>
          </div>
          <div class="col-lg-6 pb-5">
              <div class="mb-3 pb-2">
                  <h6 class="text-primary text-uppercase">{{ $aboutpage->title }}</h6>
                  <h1 class="display-5">{{ $aboutpage->short_title }}</h1>
              </div>
              <p class="mb-4">{{ $aboutpage->description }}</p>
              <div class="row gx-5 gy-4">
                
                  <div class="col-sm-6">
                      <i class="fa fa-seedling display-1 text-secondary"></i>
                      <h4>{{ $aboutpage->small_title }}</h4>
                      <p class="mb-0">{{ $aboutpage->details }}</p>
                  </div>
                   <div class="col-sm-6">
                      <i class="fa fa-award display-1 text-secondary"></i>
                      <h4>{{ $aboutpage->award }}</h4>
                      <p class="mb-0">{{ $aboutpage->award_desc }}</p>
                  </div> 
              </div>
          </div>
      </div>
  </div>
</div>