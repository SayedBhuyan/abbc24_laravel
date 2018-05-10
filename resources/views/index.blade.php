@extends("layouts.master")

@section("title", "Single Post")

@section("styles")
  <link rel="stylesheet" href="{{ asset('assets') }}/css/hover-effect-1.css">
@endsection

@section("sections")
  <section class="live-tv-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
          <div class="display">
            <!-- <iframe width="730" height="450" src="https://www.youtube.com/embed/ht4n_RCeeBY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> -->
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="display-programs">
            <ul class="nav nav-pills" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Programs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Poll</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Message</a>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="ns-1">
                  <ul class="list-group">
                    <li class="list-group-item active">
                      <div class="row">
                        <div class="col-md-4 col-lg-4 col-sm-12 col-md-12">
                          <a href="{{ url('/single') }}"><img src="{{ asset('assets') }}/img/thumb1.jpg" alt=""></a>
                        </div>
                        <div class="col-md-8 col-lg-8 col-sm-12 col-md-12"><a href="{{ url('/single') }}">সম্প্রতি ভারতের নতুন পররাষ্ট্র সচিব বিজয় গোখলে বাংলাদেশ সফরে</a></div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-md-4 col-lg-4 col-sm-12 col-md-12">
                          <a href="{{ url('/single') }}"><img src="{{ asset('assets') }}/img/thumb2.jpg" alt=""></a>
                        </div>
                        <div class="col-md-8 col-lg-8 col-sm-12 col-md-12"><a href="{{ url('/single') }}">আগে থেকে ঘোষণা দিয়ে ২০১৩ সালের মে মাসে বাংলাদেশের ১৩টি সরকারি </a></div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-md-4 col-lg-4 col-sm-12 col-md-12">
                          <a href="{{ url('/single') }}"><img src="{{ asset('assets') }}/img/thumb3.jpg" alt=""></a>
                        </div>
                        <div class="col-md-8 col-lg-8 col-sm-12 col-md-12"><a href="{{ url('/single') }}">বিসিবির গেম ডেভেলপমেন্টে কাজের ভীষণ চাপ। তারপরও</a></div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-md-4 col-lg-4 col-sm-12 col-md-12">
                          <a href="{{ url('/single') }}"><img src="{{ asset('assets') }}/img/thumb4.jpg" alt=""></a>
                        </div>
                        <div class="col-md-8 col-lg-8 col-sm-12 col-md-12"><a href="{{ url('/single') }}">অধরা বিশ্বকাপ জয়ের স্বপ্নে বিভোর গ্রহের দুই সেরা ফুটবলার লিওনেল  </a></div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-md-4 col-lg-4 col-sm-12 col-md-12">
                          <a href="{{ url('/single') }}"><img src="{{ asset('assets') }}/img/thumb1.jpg" alt=""></a>
                        </div>
                        <div class="col-md-8 col-lg-8 col-sm-12 col-md-12"><a href="{{ url('/single') }}">সম্প্রতি ভারতের নতুন পররাষ্ট্র সচিব বিজয় গোখলে বাংলাদেশ সফরে</a></div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-md-4 col-lg-4 col-sm-12 col-md-12">
                          <a href="{{ url('/single') }}"><img src="{{ asset('assets') }}/img/thumb2.jpg" alt=""></a>
                        </div>
                        <div class="col-md-8 col-lg-8 col-sm-12 col-md-12"><a href="{{ url('/single') }}">আগে থেকে ঘোষণা দিয়ে ২০১৩ সালের মে মাসে বাংলাদেশের ১৩টি সরকারি </a></div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-md-4 col-lg-4 col-sm-12 col-md-12">
                          <a href="{{ url('/single') }}"><img src="{{ asset('assets') }}/img/thumb3.jpg" alt=""></a>
                        </div>
                        <div class="col-md-8 col-lg-8 col-sm-12 col-md-12"><a href="{{ url('/single') }}">বিসিবির গেম ডেভেলপমেন্টে কাজের ভীষণ চাপ। তারপরও</a></div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-md-4 col-lg-4 col-sm-12 col-md-12">
                          <a href="{{ url('/single') }}"><img src="{{ asset('assets') }}/img/thumb4.jpg" alt=""></a>
                        </div>
                        <div class="col-md-8 col-lg-8 col-sm-12 col-md-12"><a href="{{ url('/single') }}">অধরা বিশ্বকাপ জয়ের স্বপ্নে বিভোর গ্রহের দুই সেরা ফুটবলার লিওনেল  </a></div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
              <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="categories-section" id="sec-latest">
    <div class="container">
      <div class="row">
        <div class="sec-head">
          <div class="col-md-12">
            <h2>নতুন প্রকাশ</h2>
          </div>
        </div>
      </div>
      <div class="row">

        @foreach($news as $slnews)
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 sngl">
            <div class="hovereffect">
                <img class="img-responsive" src="{{ asset('assets') }}/img/1.jpg" alt="">
                <div class="overlay">
                   <h2>{{ $slnews->title }}ে</h2>
                   <a class="info" href="{{ url('/single') }}/{{ $slnews->id }}">পড়ুন...</a>
                </div>
            </div>
        </div>
        @endforeach


        {{-- <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 sngl">
            <div class="hovereffect">
                <img class="img-responsive" src="{{ asset('assets') }}/img/2.jpg" alt="">
                <div class="overlay">
                  <h2>সম্প্রতি ভারতের নতুন পররাষ্ট্র সচিব বিজয় গোখলে বাংলাদেশ সফরে</h2>
                  <a class="info" href="{{ url('/single') }}">পড়ুন...</a>
                </div>
            </div>
        </div> --}}

      </div>
    </div>
  </section>


  <section class="categories-section" id="sec-plays">
    <div class="container">
      <div class="row">
        <div class="sec-head">
          <div class="col-md-12">
            <h2>বিনোদন</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 sngl">
            <div class="hovereffect">
                <img class="img-responsive" src="{{ asset('assets') }}/img/1.jpg" alt="">
                <div class="overlay">
                   <h2>সম্প্রতি ভারতের নতুন পররাষ্ট্র সচিব বিজয় গোখলে বাংলাদেশ সফরে</h2>
                   <a class="info" href="{{ url('/single') }}">পড়ুন...</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 sngl">
            <div class="hovereffect">
                <img class="img-responsive" src="{{ asset('assets') }}/img/2.jpg" alt="">
                <div class="overlay">
                  <h2>সম্প্রতি ভারতের নতুন পররাষ্ট্র সচিব বিজয় গোখলে বাংলাদেশ সফরে</h2>
                  <a class="info" href="{{ url('/single') }}">পড়ুন...</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 sngl">
            <div class="hovereffect">
                <img class="img-responsive" src="{{ asset('assets') }}/img/3.jpg" alt="">
                <div class="overlay">
                  <h2>সম্প্রতি ভারতের নতুন পররাষ্ট্র সচিব বিজয় গোখলে বাংলাদেশ সফরে</h2>
                  <a class="info" href="{{ url('/single') }}">পড়ুন...</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 sngl">
            <div class="hovereffect">
                <img class="img-responsive" src="{{ asset('assets') }}/img/4.jpg" alt="">
                <div class="overlay">
                  <h2>সম্প্রতি ভারতের নতুন পররাষ্ট্র সচিব বিজয় গোখলে বাংলাদেশ সফরে</h2>
                  <a class="info" href="{{ url('/single') }}">পড়ুন...</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 sngl">
            <div class="hovereffect">
                <img class="img-responsive" src="{{ asset('assets') }}/img/3.jpg" alt="">
                <div class="overlay">
                  <h2>সম্প্রতি ভারতের নতুন পররাষ্ট্র সচিব বিজয় গোখলে বাংলাদেশ সফরে</h2>
                  <a class="info" href="{{ url('/single') }}">পড়ুন...</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 sngl">
            <div class="hovereffect">
                <img class="img-responsive" src="{{ asset('assets') }}/img/4.jpg" alt="">
                <div class="overlay">
                  <h2>সম্প্রতি ভারতের নতুন পররাষ্ট্র সচিব বিজয় গোখলে বাংলাদেশ সফরে</h2>
                  <a class="info" href="{{ url('/single') }}">পড়ুন...</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 sngl">
            <div class="hovereffect">
                <img class="img-responsive" src="{{ asset('assets') }}/img/3.jpg" alt="">
                <div class="overlay">
                  <h2>সম্প্রতি ভারতের নতুন পররাষ্ট্র সচিব বিজয় গোখলে বাংলাদেশ সফরে</h2>
                  <a class="info" href="{{ url('/single') }}">পড়ুন...</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 sngl">
            <div class="hovereffect">
                <img class="img-responsive" src="{{ asset('assets') }}/img/2.jpg" alt="">
                <div class="overlay">
                  <h2>সম্প্রতি ভারতের নতুন পররাষ্ট্র সচিব বিজয় গোখলে বাংলাদেশ সফরে</h2>
                  <a class="info" href="{{ url('/single') }}">পড়ুন...</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 sngl">
            <div class="hovereffect">
                <img class="img-responsive" src="{{ asset('assets') }}/img/2.jpg" alt="">
                <div class="overlay">
                  <h2>সম্প্রতি ভারতের নতুন পররাষ্ট্র সচিব বিজয় গোখলে বাংলাদেশ সফরে</h2>
                  <a class="info" href="{{ url('/single') }}">পড়ুন...</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 sngl">
            <div class="hovereffect">
                <img class="img-responsive" src="{{ asset('assets') }}/img/1.jpg" alt="">
                <div class="overlay">
                  <h2>সম্প্রতি ভারতের নতুন পররাষ্ট্র সচিব বিজয় গোখলে বাংলাদেশ সফরে</h2>
                  <a class="info" href="{{ url('/single') }}">পড়ুন...</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 sngl">
            <div class="hovereffect">
                <img class="img-responsive" src="{{ asset('assets') }}/img/4.jpg" alt="">
                <div class="overlay">
                  <h2>সম্প্রতি ভারতের নতুন পররাষ্ট্র সচিব বিজয় গোখলে বাংলাদেশ সফরে</h2>
                  <a class="info" href="{{ url('/single') }}">পড়ুন...</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 sngl">
            <div class="hovereffect">
                <img class="img-responsive" src="{{ asset('assets') }}/img/3.jpg" alt="">
                <div class="overlay">
                  <h2>সম্প্রতি ভারতের নতুন পররাষ্ট্র সচিব বিজয় গোখলে বাংলাদেশ সফরে</h2>
                  <a class="info" href="{{ url('/single') }}">পড়ুন...</a>
                </div>
            </div>
        </div>
      </div>
    </div>
  </section>

    <section class="categories-section" id="sec-international">
      <div class="container">
        <div class="row">
          <div class="sec-head">
            <div class="col-md-12">
              <h2>আন্তর্জাতিক</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 sngl">
              <div class="hovereffect">
                  <img class="img-responsive" src="{{ asset('assets') }}/img/1.jpg" alt="">
                  <div class="overlay">
                     <h2>সম্প্রতি ভারতের নতুন পররাষ্ট্র সচিব বিজয় গোখলে বাংলাদেশ সফরে</h2>
                     <a class="info" href="{{ url('/single') }}">পড়ুন...</a>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 sngl">
              <div class="hovereffect">
                  <img class="img-responsive" src="{{ asset('assets') }}/img/2.jpg" alt="">
                  <div class="overlay">
                    <h2>সম্প্রতি ভারতের নতুন পররাষ্ট্র সচিব বিজয় গোখলে বাংলাদেশ সফরে</h2>
                    <a class="info" href="{{ url('/single') }}">পড়ুন...</a>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 sngl">
              <div class="hovereffect">
                  <img class="img-responsive" src="{{ asset('assets') }}/img/3.jpg" alt="">
                  <div class="overlay">
                    <h2>সম্প্রতি ভারতের নতুন পররাষ্ট্র সচিব বিজয় গোখলে বাংলাদেশ সফরে</h2>
                    <a class="info" href="{{ url('/single') }}">পড়ুন...</a>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 sngl">
              <div class="hovereffect">
                  <img class="img-responsive" src="{{ asset('assets') }}/img/4.jpg" alt="">
                  <div class="overlay">
                    <h2>সম্প্রতি ভারতের নতুন পররাষ্ট্র সচিব বিজয় গোখলে বাংলাদেশ সফরে</h2>
                    <a class="info" href="{{ url('/single') }}">পড়ুন...</a>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 sngl">
              <div class="hovereffect">
                  <img class="img-responsive" src="{{ asset('assets') }}/img/3.jpg" alt="">
                  <div class="overlay">
                    <h2>সম্প্রতি ভারতের নতুন পররাষ্ট্র সচিব বিজয় গোখলে বাংলাদেশ সফরে</h2>
                    <a class="info" href="{{ url('/single') }}">পড়ুন...</a>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 sngl">
              <div class="hovereffect">
                  <img class="img-responsive" src="{{ asset('assets') }}/img/4.jpg" alt="">
                  <div class="overlay">
                    <h2>সম্প্রতি ভারতের নতুন পররাষ্ট্র সচিব বিজয় গোখলে বাংলাদেশ সফরে</h2>
                    <a class="info" href="{{ url('/single') }}">পড়ুন...</a>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 sngl">
              <div class="hovereffect">
                  <img class="img-responsive" src="{{ asset('assets') }}/img/3.jpg" alt="">
                  <div class="overlay">
                    <h2>সম্প্রতি ভারতের নতুন পররাষ্ট্র সচিব বিজয় গোখলে বাংলাদেশ সফরে</h2>
                    <a class="info" href="{{ url('/single') }}">পড়ুন...</a>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 sngl">
              <div class="hovereffect">
                  <img class="img-responsive" src="{{ asset('assets') }}/img/2.jpg" alt="">
                  <div class="overlay">
                    <h2>সম্প্রতি ভারতের নতুন পররাষ্ট্র সচিব বিজয় গোখলে বাংলাদেশ সফরে</h2>
                    <a class="info" href="{{ url('/single') }}">পড়ুন...</a>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 sngl">
              <div class="hovereffect">
                  <img class="img-responsive" src="{{ asset('assets') }}/img/2.jpg" alt="">
                  <div class="overlay">
                    <h2>সম্প্রতি ভারতের নতুন পররাষ্ট্র সচিব বিজয় গোখলে বাংলাদেশ সফরে</h2>
                    <a class="info" href="{{ url('/single') }}">পড়ুন...</a>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 sngl">
              <div class="hovereffect">
                  <img class="img-responsive" src="{{ asset('assets') }}/img/1.jpg" alt="">
                  <div class="overlay">
                    <h2>সম্প্রতি ভারতের নতুন পররাষ্ট্র সচিব বিজয় গোখলে বাংলাদেশ সফরে</h2>
                    <a class="info" href="{{ url('/single') }}">পড়ুন...</a>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 sngl">
              <div class="hovereffect">
                  <img class="img-responsive" src="{{ asset('assets') }}/img/4.jpg" alt="">
                  <div class="overlay">
                    <h2>সম্প্রতি ভারতের নতুন পররাষ্ট্র সচিব বিজয় গোখলে বাংলাদেশ সফরে</h2>
                    <a class="info" href="{{ url('/single') }}">পড়ুন...</a>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 sngl">
              <div class="hovereffect">
                  <img class="img-responsive" src="{{ asset('assets') }}/img/3.jpg" alt="">
                  <div class="overlay">
                    <h2>সম্প্রতি ভারতের নতুন পররাষ্ট্র সচিব বিজয় গোখলে বাংলাদেশ সফরে</h2>
                    <a class="info" href="{{ url('/single') }}">পড়ুন...</a>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </section>
@endsection
