@extends('layouts.admin')

@section('title', 'Sosmed')

{{-- Meta --}}
@section('meta')
  @parent
@endsection

{{-- Icon --}}
@section('icon')
  @parent
@endsection

{{-- Meta Facebook --}}
@section('meta_facebook')
@endsection

{{-- Meta Twitter --}}
@section('meta_twitter')
@endsection

{{-- SEO Crawling --}}
@section('seo_crawling')
@endsection

{{-- DNS --}}
@section('dns')
@endsection

{{-- CSS --}}
@section('css')
  <link rel="stylesheet" href="{{ URL::asset('css/admin/dataTables.bootstrap4.min.css') }}"> <!-- DataTable Bootstrap -->
  <link rel="stylesheet" href="{{ URL::asset('css/admin/buttons.bootstrap4.min.css') }}"> <!-- Button Bootstrap -->
  <link rel="stylesheet" href="{{ URL::asset('css/admin/responsive.bootstrap4.min.css') }}"> <!-- Res Bootstrap -->
  @parent
@endsection

{{-- Topbar --}}
@section('topbar')
  @parent
@endsection

{{-- Leftbar --}}
@section('leftbar')
  @parent
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
                <div class="btn-group pull-right m-t-15">
                    <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings</button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
                        <a class="dropdown-item" href="#">Dropdown One</a>
                        <a class="dropdown-item" href="#">Dropdown Two</a>
                        <a class="dropdown-item" href="#">Dropdown Three</a>
                        <a class="dropdown-item" href="#">Dropdown Four</a>
                    </div>
                </div>

                <h4 class="page-title">Social Media</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Daskboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Header</a></li>
                    <li class="breadcrumb-item active">Social Media</li>
                </ol>

            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>Input Types</b></h4>
                    <p class="text-muted m-b-30 font-14">
                        Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.
                    </p>

                    <div class="row">
                        <div class="col-12">
                          {{ Form::open(array('url' => 'sosmed','method' => 'post')) }}
                              <div class="form-group">
                                  <label>Facebook</label>
                                  <div class="input-group">
                                    <span class="btn-primary input-group-addon bootstrap-touchspin-prefix font-13" style="width: 120px;">facebook.com/</span>
                                    <input type="text" name="facebook" class="form-control" id="replaceWith" required="" placeholder="Your Facebook ID">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label>Twitter</label>
                                  <div class="input-group">
                                    <span class="btn-info input-group-addon bootstrap-touchspin-prefix font-13" style="width: 120px;">twitter.com/</span>
                                    <input type="text" name="twitter" class="form-control" id="replaceWith" required="" placeholder="Your Twitter ID">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label>Youtube</label>
                                  <div class="input-group">
                                    <span class="btn-danger input-group-addon bootstrap-touchspin-prefix font-13" style="width: 120px;">youtube.com/</span>
                                    <input type="text" name="youtube" class="form-control" id="replaceWith" required="" placeholder="Your Youtube ID">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label>Instagram</label>
                                  <div class="input-group">
                                    <span class="btn-purple input-group-addon bootstrap-touchspin-prefix font-13" style="width: 120px;">instagram.com/</span>
                                    <input type="text" name="instagram" class="form-control" id="replaceWith" required="" placeholder="Your Instagram ID">
                                  </div>
                              </div>
                              <div class="visible-lg" style="height: 10px;"></div>
                              <div class="form-group text-right m-b-0">
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
                    <!-- end row -->

                </div> <!-- end card-box -->
            </div><!-- end col -->
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
  <script src="{{ URL::asset('js/admin/jquery.dataTables.min.js') }}"></script>
  <script src="{{ URL::asset('js/admin/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ URL::asset('js/admin/dataTables.buttons.min.js') }}"></script>
  <script src="{{ URL::asset('js/admin/buttons.bootstrap4.min.js') }}"></script>
  <script src="{{ URL::asset('js/admin/jszip.min.js') }}"></script>
  <script src="{{ URL::asset('js/admin/pdfmake.min.js') }}"></script>
  <script src="{{ URL::asset('js/admin/vfs_fonts.js') }}"></script>
  <script src="{{ URL::asset('js/admin/buttons.html5.min.js') }}"></script>
  <script src="{{ URL::asset('js/admin/buttons.print.min.js') }}"></script>
  <script src="{{ URL::asset('js/admin/buttons.colVis.min.js') }}"></script>
  <script src="{{ URL::asset('js/admin/dataTables.responsive.min.js') }}"></script>
  <script src="{{ URL::asset('js/admin/responsive.bootstrap4.min.js') }}"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#datatable').DataTable();
      
        //Buttons examples
        var table = $('#datatable-buttons').DataTable({
            lengthChange: false,
            buttons: ['copy', 'excel', 'pdf']
        });
    
        table.buttons().container().appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
    });
    
  </script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
        $('.counter').counterUp({
            delay: 100,
            time: 1200
        });
        $(".knob").knob();
    });
  </script>
@endsection