@extends("layouts.master")

@section("title", "Single Post")

@section("breadcrumb")
  <hr>
  <nav aria-label="breadcrumb" class="breadcrumb-nav">
  <div class="container">
    <div class="row">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Library</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data</li>
      </ol>
    </div>
  </div>
  </nav>

@endsection

  <section class="news">
    <div class="container">
      <div class="row">
@section("left_sidebar")
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 sidebar-left">
    <div class="card">
      <div class="card-body">
        <img class="author-image" src="{{ asset('assets') }}/img/author-1.jpg" alt="">
        <h5 class="card-title">ব্যারিস্টার মনির হোসেন</h5>
        <h6 class="card-subtitle mb-2 text-muted">29055 Followers</h6>
        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
        <ul class="list-group mb-2">
          <li class="list-group-item">Morbi leo risus</li>
          <li class="list-group-item">Porta ac consectetur ac</li>
          <li class="list-group-item">Vestibulum at eros</li>
        </ul>
        <!-- <a href="#" class="card-link">Profile</a> -->

      </div>
    </div>
  </div>
@endsection
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
@section("post_meta")

  <h2>{{ $news->title }}</h2>
  <div class="alert alert-info" role="alert">
    এবিবিসি২৪ ডেস্ক | ২৮ এপ্রিল ২০১৮, শনিবার | সর্বশেষ আপডেট: ৩:০৮
  </div>
@endsection
          <div class="body">
@section("content")
            <img src="{{ asset('assets/admin/images/uploads') }}/{{ $news->image }}" alt="" style="display: block; margin: 0 auto">
            <hr>
  {!! $news->description !!}
@endsection
          </div>
        </div>
@section("right_sidebar")
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 sidebar">
    <div class="card">
      <img class="card-img-top" src="{{ asset('assets') }}/img/2.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title"><a href="">সরকারি ওয়েবসাইটের নিরাপত্তা নিয়ে প্রশ্ন</a></h5>
        <p class="card-text">আগে থেকে ঘোষণা দিয়ে ২০১৩ সালের মে মাসে বাংলাদেশের ১৩টি সরকারি ওয়েবসাইট হ্যাক করে আন্তর্জাতিক হ্যাকার সংগঠন অ্যানোনিমাস। এর মধ্যে বাংলাদেশ নির্বাচন কমিশনের জাতীয় পরিচয়পত্র নিবন্ধন সংক্রান্ত সরকারি পোর্টালও ছিল। </p>
        <a href="#" class="btn btn-primary">আরো দেখুন...</a>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="{{ asset('assets') }}/img/3.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">আমার মতো কেউ যেন হারিয়ে না যায়</h5>
        <p class="card-text">বিসিবির গেম ডেভেলপমেন্টে কাজের ভীষণ চাপ। তারপরও সুযোগ পেলেই মিরপুর শেরেবাংলা স্টেডিয়ামে বিসিবি’র অফিসের বারান্দায় এসে দাঁড়িয়ে থাকেন শাফাক আল জাবির। চোখ ও মন পড়ে থাকে মাঠের সবুজ ঘাস আর বাদামি উইকেটে। </p>
        <a href="#" class="btn btn-primary">আরো দেখুন...</a>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="{{ asset('assets') }}/img/4.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">বিশ্বকাপের কোয়ার্টারেই মুখোমুখি মেসি-রোনালদো!</h5>
        <p class="card-text">অধরা বিশ্বকাপ জয়ের স্বপ্নে বিভোর গ্রহের দুই সেরা ফুটবলার লিওনেল মেসি ও ক্রিস্টিয়ানো রোনালদো। ২০২২ কাতার বিশ্বকাপে দু’জনের বয়স হবে যথাক্রমে ৩৫ ও ৩৭। ফর্ম বিবেচনায় মেসি ও রোনালদোর বিশ্বকাপ জেতার এটাই ‘শেষ সুযোগ’।</p>
        <a href="#" class="btn btn-primary">আরো দেখুন...</a>
      </div>
    </div>
  </div>
@endsection
      </div>
    </div>
  </section>

@section("related")
  <section class="related">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="card">
            <img class="card-img-top" src="{{ asset('assets') }}/img/2.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><a href="">সরকারি ওয়েবসাইটের নিরাপত্তা নিয়ে প্রশ্ন</a></h5>
              <p class="card-text">আগে থেকে ঘোষণা দিয়ে ২০১৩ সালের মে মাসে বাংলাদেশের ১৩টি সরকারি ওয়েবসাইট হ্যাক করে আন্তর্জাতিক হ্যাকার সংগঠন অ্যানোনিমাস। এর মধ্যে বাংলাদেশ নির্বাচন কমিশনের জাতীয় পরিচয়পত্র নিবন্ধন সংক্রান্ত সরকারি পোর্টালও ছিল। </p>
              <a href="#" class="btn btn-primary">আরো দেখুন...</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="card">
            <img class="card-img-top" src="{{ asset('assets') }}/img/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">আমার মতো কেউ যেন হারিয়ে না যায়</h5>
              <p class="card-text">বিসিবির গেম ডেভেলপমেন্টে কাজের ভীষণ চাপ। তারপরও সুযোগ পেলেই মিরপুর শেরেবাংলা স্টেডিয়ামে বিসিবি’র অফিসের বারান্দায় এসে দাঁড়িয়ে থাকেন শাফাক আল জাবির। চোখ ও মন পড়ে থাকে মাঠের সবুজ ঘাস আর বাদামি উইকেটে। </p>
              <a href="#" class="btn btn-primary">আরো দেখুন...</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="card">
            <img class="card-img-top" src="{{ asset('assets') }}/img/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">বিশ্বকাপের কোয়ার্টারেই মুখোমুখি মেসি-রোনালদো!</h5>
              <p class="card-text">অধরা বিশ্বকাপ জয়ের স্বপ্নে বিভোর গ্রহের দুই সেরা ফুটবলার লিওনেল মেসি ও ক্রিস্টিয়ানো রোনালদো। ২০২২ কাতার বিশ্বকাপে দু’জনের বয়স হবে যথাক্রমে ৩৫ ও ৩৭। ফর্ম বিবেচনায় মেসি ও রোনালদোর বিশ্বকাপ জেতার এটাই ‘শেষ সুযোগ’।</p>
              <a href="#" class="btn btn-primary">আরো দেখুন...</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="card">
            <img class="card-img-top" src="{{ asset('assets') }}/img/2.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><a href="">সরকারি ওয়েবসাইটের নিরাপত্তা নিয়ে প্রশ্ন</a></h5>
              <p class="card-text">আগে থেকে ঘোষণা দিয়ে ২০১৩ সালের মে মাসে বাংলাদেশের ১৩টি সরকারি ওয়েবসাইট হ্যাক করে আন্তর্জাতিক হ্যাকার সংগঠন অ্যানোনিমাস। এর মধ্যে বাংলাদেশ নির্বাচন কমিশনের জাতীয় পরিচয়পত্র নিবন্ধন সংক্রান্ত সরকারি পোর্টালও ছিল। </p>
              <a href="#" class="btn btn-primary">আরো দেখুন...</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="card">
            <img class="card-img-top" src="{{ asset('assets') }}/img/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">আমার মতো কেউ যেন হারিয়ে না যায়</h5>
              <p class="card-text">বিসিবির গেম ডেভেলপমেন্টে কাজের ভীষণ চাপ। তারপরও সুযোগ পেলেই মিরপুর শেরেবাংলা স্টেডিয়ামে বিসিবি’র অফিসের বারান্দায় এসে দাঁড়িয়ে থাকেন শাফাক আল জাবির। চোখ ও মন পড়ে থাকে মাঠের সবুজ ঘাস আর বাদামি উইকেটে। </p>
              <a href="#" class="btn btn-primary">আরো দেখুন...</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="card">
            <img class="card-img-top" src="{{ asset('assets') }}/img/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">বিশ্বকাপের কোয়ার্টারেই মুখোমুখি মেসি-রোনালদো!</h5>
              <p class="card-text">অধরা বিশ্বকাপ জয়ের স্বপ্নে বিভোর গ্রহের দুই সেরা ফুটবলার লিওনেল মেসি ও ক্রিস্টিয়ানো রোনালদো। ২০২২ কাতার বিশ্বকাপে দু’জনের বয়স হবে যথাক্রমে ৩৫ ও ৩৭। ফর্ম বিবেচনায় মেসি ও রোনালদোর বিশ্বকাপ জেতার এটাই ‘শেষ সুযোগ’।</p>
              <a href="#" class="btn btn-primary">আরো দেখুন...</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
