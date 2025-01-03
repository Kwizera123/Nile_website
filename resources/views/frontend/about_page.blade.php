
@extends('frontend.main_master')
@section('main')



    <!-- About Start -->
    <div class="container-fluid about pt-5">
      <div class="container">
          <div class="row gx-5">
              <div class="col-lg-6 mb-5 mb-lg-0">
                  <div class="d-flex h-100 border border-5 border-primary border-bottom-0 pt-4">
                      <img class="img-fluid mt-auto mx-auto" src="{{ $aboutpage->about_image}}">
                  </div>
              </div>
              <div class="col-lg-6 pb-5">
                  <div class="mb-3 pb-2">
                      <h6 class="text-primary text-uppercase">{{ $aboutpage->title}}</h6>
                      <h1 class="display-5">{{ $aboutpage->short_title}}</h1>
                  </div>
                  <p class="mb-4">{{ $aboutpage->description}}</p>
                  <div class="row gx-5 gy-4">
                      <div class="col-sm-6">
                          <i class="fa fa-seedling display-1 text-secondary"></i>
                          <h4>{{ $aboutpage->small_title}}</h4>
                          <p class="mb-0">{{ $aboutpage->details}}</p>
                      </div>
                      <div class="col-sm-6">
                          <i class="fa fa-award display-1 text-secondary"></i>
                          <h4>Award Winning</h4>
                          <p class="mb-0">Labore justo vero ipsum sit clita erat lorem magna clita nonumy dolor magna dolor vero</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- About End -->

  <!-- Facts Start -->
  <div class="container-fluid bg-primary facts py-5 mb-5">
    <div class="container py-5">
        <div class="row gx-5 gy-4">
            <div class="col-lg-3 col-md-6">
                <div class="d-flex">
                    <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fa fa-star fs-4 text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-white">Our Experience</h5>
                        <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="d-flex">
                    <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fa fa-users fs-4 text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-white">Farm Specialist</h5>
                        <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="d-flex">
                    <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fa fa-check fs-4 text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-white">Complete Project</h5>
                        <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="d-flex">
                    <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fa fa-mug-hot fs-4 text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-white">Happy Clients</h5>
                        <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Facts End -->
  




@endsection