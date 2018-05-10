@extends("layouts.admin.master")
@section("styles")
  <link rel="stylesheet" href="{{ asset('assets/admin') }}/assets/css/lib/chosen/chosen.min.css">
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=dpskzs677q78y7qloyvbn6rft921zs7oiijx7cud91mchbmx"></script>
  <script>
  tinymce.init({
    selector: 'textarea',
    height: 500,
    theme: 'modern',
    plugins: 'print preview powerpaste searchreplace autolink directionality advcode visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount tinymcespellchecker a11ychecker imagetools mediaembed  linkchecker contextmenu colorpicker textpattern help',
    toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
    image_advtab: true,
    templates: [
      { title: 'Test template 1', content: 'Test 1' },
      { title: 'Test template 2', content: 'Test 2' }
    ],
    content_css: [
      '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
      '//www.tinymce.com/css/codepen.min.css'
    ]
   });
  </script>
  <style>
    body div.mce-widget div.mce-notification-inner,
    body div.mce-widget button.mce-close {
      display: none !important
    }
    .mce-notification-warning {
      opacity: 0 !important
    }
  </style>
@endsection
@section("content")
<div class="animated fadeIn">

    <div class="row">

        <div class="col-xs-6 col-sm-6">
            <div class="card">
                <div class="card-header">
                    <strong>Add New</strong> <small> News</small>
                </div>
                <div class="card-body card-block">
                  <form class="form" action="{{ url('/admin/news') }}/{{ $news->id }}" method="post" enctype="multipart/form-data">
                    @method("PUT")
                    <div class="form-group">
                        <label class=" form-control-label">Title</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                            <input name="title" class="form-control" value="{{ $news->title }}">
                        </div>
                        <small class="form-text text-muted">ex. 99/99/9999</small>
                    </div>
                    <div class="form-group">
                        <label class=" form-control-label">Image</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                            <input type="file" name="image[]" class="form-control">
                        </div>
                        <small class="form-text text-muted">ex. (999) 999-9999</small>
                        <img src="{{ asset('assets/admin/images/uploads')}}/{{$news->image}}" alt="{{ $news->title }}">
                    </div>
                    <div class="form-group">
                        <label class=" form-control-label">Content</label>
                        <div class="input-group">
                            <textarea name="content" class="form-control">{{ $news->description }}</textarea>
                        </div>
                        <small class="form-text text-muted">ex. 99-9999999</small>
                    </div>
                    <div class="form-group">
                        <label class=" form-control-label">Author</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-male"></i></div>
                            <input name="author" class="form-control" value="{{ $news->author }}">
                        </div>
                        <small class="form-text text-muted">ex. Monir Hossain</small>
                    </div>
                    <div class="form-group">
                        <label class=" form-control-label">Category</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-list"></i></div>
                            <input name="category" class="form-control" value="{{ $news->category }}">
                        </div>
                        <small class="form-text text-muted">ex. News</small>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-success">Update IT</button>
                    </div>
                    {{ csrf_field() }}
                  </form>

                </div>
            </div>
        </div>

        <div class="col-xs-6 col-sm-6">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Standard Select</strong>
                </div>
                <div class="card-body">

                      <select data-placeholder="Choose a Country..." class="standardSelect" tabindex="1">
                        <option value=""></option>
                        <option value="United States">United States</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="Afghanistan">Afghanistan</option>
                        <option value="Aland Islands">Aland Islands</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguilla">Anguilla</option>
                        <option value="Antarctica">Antarctica</option>
                    </select>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Multi Select</strong>
                </div>
                <div class="card-body">

                      <select data-placeholder="Choose a country..." multiple class="standardSelect">
                        <option value=""></option>
                        <option value="United States">United States</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="Afghanistan">Afghanistan</option>
                        <option value="Aland Islands">Aland Islands</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguilla">Anguilla</option>
                        <option value="Antarctica">Antarctica</option>
                    </select>

                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Multi Select with Groups</strong>
                </div>
                <div class="card-body">

                      <select data-placeholder="Your Favorite Football Team" multiple class="standardSelect" tabindex="5">
                        <option value=""></option>
                        <optgroup label="NFC EAST">
                          <option>Dallas Cowboys</option>
                          <option>New York Giants</option>
                          <option>Philadelphia Eagles</option>
                          <option>Washington Redskins</option>
                        </optgroup>
                        <optgroup label="NFC NORTH">
                          <option>Chicago Bears</option>
                          <option>Detroit Lions</option>
                          <option>Green Bay Packers</option>
                          <option>Minnesota Vikings</option>
                        </optgroup>
                        <optgroup label="NFC SOUTH">
                          <option>Atlanta Falcons</option>
                          <option>Carolina Panthers</option>
                          <option>New Orleans Saints</option>
                          <option>Tampa Bay Buccaneers</option>
                        </optgroup>
                        <optgroup label="NFC WEST">
                          <option>Arizona Cardinals</option>
                          <option>St. Louis Rams</option>
                          <option>San Francisco 49ers</option>
                          <option>Seattle Seahawks</option>
                        </optgroup>
                        <optgroup label="AFC EAST">
                          <option>Buffalo Bills</option>
                          <option>Miami Dolphins</option>
                          <option>New England Patriots</option>
                          <option>New York Jets</option>
                        </optgroup>
                        <optgroup label="AFC NORTH">
                          <option>Baltimore Ravens</option>
                          <option>Cincinnati Bengals</option>
                          <option>Cleveland Browns</option>
                          <option>Pittsburgh Steelers</option>
                        </optgroup>
                        <optgroup label="AFC SOUTH">
                          <option>Houston Texans</option>
                          <option>Indianapolis Colts</option>
                          <option>Jacksonville Jaguars</option>
                          <option>Tennessee Titans</option>
                        </optgroup>
                        <optgroup label="AFC WEST">
                          <option>Denver Broncos</option>
                          <option>Kansas City Chiefs</option>
                          <option>Oakland Raiders</option>
                          <option>San Diego Chargers</option>
                        </optgroup>
                      </select>

                </div>
            </div>

        </div>



    </div>


</div><!-- .animated -->
@endsection


@section("scripts")
  <script src="{{ asset('assets/admin') }}/assets/js/lib/chosen/chosen.jquery.min.js"></script>

  <script>
      jQuery(document).ready(function() {
          jQuery(".standardSelect").chosen({
              disable_search_threshold: 10,
              no_results_text: "Oops, nothing found!",
              width: "100%"
          });
      });
  </script>
@endsection
