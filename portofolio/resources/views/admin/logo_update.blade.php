@extends('admin.components/layout')

@section('title', 'Update Logo')

{{-- Meta --}}
@section('meta')
  @parent
@endsection

{{-- Icon --}}
@section('icon')
  @parent
@endsection

{{-- CSS --}}
@section('css')
  @parent
  <link rel="stylesheet" href="{{ URL::asset('css/admin/dropzone.css') }}"> <!-- Dropzone -->
  <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet"> <!-- Font QuickSand -->
  <style>
  .logo-result {
    font-family: 'Quicksand', sans-serif;
    color: #000;
    font-size: 40px;
    font-weight: 500;
  }
  </style>
@endsection

{{-- Topbar --}}
@section('topbar')
  @parent
@endsection

{{-- Leftbar --}}
@section('leftbar')
  @parent
  @section('logo', 'active')
  @section('header-menu', 'subdrop')
  @section('header-menu-show', 'display: block')
@endsection

{{-- Content --}}
@section('content')
  <div class="content-page">
    <!-- Start content -->
    <div class="content">
      <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Social Media</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Header</a></li>
                    <li class="breadcrumb-item active">Logo</li>
                </ol>

            </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="card-box table-responsive">
              <div class="row">
                <div class="col-sm-12">
                  {{ Form::open(array('url' => '/updateLogo','method' => 'post')) }}
                  <div class="row">
                    <div class="col-sm-5">
                        <div class="form-group">
                          <label>Logo Label</label>
                          <div class="input-group">
                            <input type="hidden" name="id_logo" value="{{ $logo[0]->id_logo }}">
                            <input type="text" name="logo" class="form-control" id="logoInput" required="" value="{{ $logo[0]->logo }}" placeholder="Your Logo Label">
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-1">
                    </div>
                    <div class="col-sm-6">
                      <span class="logo-preview">
                        <label>This is Your Logo Look Like</label>
                        <div class="logo-result">{{ $logo[0]->logo }}</div>
                      </span>
                    </div>
                  </div>
                  <div class="form-group text-right m-t-20">
                    <button class="btn btn-primary waves-effect waves-light" type="submit">
                        Submit
                    </button>
                    <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                        Cancel
                    </button>
                  </div>
                  {{ Form::close() }}
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end row -->
      </div> <!-- container -->
    </div> <!-- content -->

    <footer class="footer text-right">
        &copy; 2016 - 2017. All rights reserved.
    </footer>
  </div>
@endsection

{{-- Javascript --}}
@section('javascript')
  @parent
  <script type="text/javascript">
    /* Upload Preview */
    function preview(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) { $('#img').attr('src', e.target.result);  }
        reader.readAsDataURL(input.files[0]);
      }
    }
    $("#upload").change(function(){
      $("#img").css({top: 0, left: 0});
        preview(this);
        $("#img").draggable({ containment: 'parent',scroll: false });
    });
    /* Detect Data Change From Input Field */
    $("#logoInput").on("input", function(e) {
      var input = $(this);
      var val = input.val();
      if (input.data("lastval") != val) {
        input.data("lastval", val);
        $( ".logo-result" ).text(val);
      }
    });
  </script>
@endsection