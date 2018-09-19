@extends('admin.components/layout')

@section('title', 'Insert Navigation')

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
  @section('navigation', 'active')
  @section('header-menu', 'subdrop')
  @section('header-menu-show', 'display: block !important')
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
                    <li class="breadcrumb-item"><a href="#">Daskboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Header</a></li>
                    <li class="breadcrumb-item active">Navigation</li>
                </ol>

            </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="card-box table-responsive">
              <div class="row">
                <div class="col-sm-12">
                  {{ Form::open(array('url' => '/updateNavigation','method' => 'post')) }}
                  <div class="row dynamic">
                    <div class="field row col-md-12">
                      <div class="col-sm-6">
                        <div class="form-group dynamic">
                          <label>Update Navigation</label>
                          <div class="input-group m-b-15">
                            <input type="hidden" name="id_navigation" value="{{ $navigation[0]->id_navigation }}">
                            <input type="text" name="navigation" class="form-control" id="navigationInput" required="" value="{{ $navigation[0]->title }}">
                          </div>
                        </div>
                      </div>
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
    /* Add Field Input Dynamic */
    var max_fields  = 5;
    var wrapper     = $(".row.dynamic");
    var add_button  = $(".add_form_field");
    var x = 1;
    $(add_button).click(function(e){
      e.preventDefault();
      if(x < max_fields){
        x++;
        $(wrapper).append('<div class="field row col-md-12"><div class="col-sm-6"><div class="form-group dynamic"><div class="input-group m-b-15"> <input type="text" name="navigation[]" class="form-control" id="navigationInput" required="" placeholder="Add Navigation"></div></div></div><div class="col-sm-2"><a href="#" class="delete btn btn-danger waves-effect waves-light">Delete</a></div></div>');
        }
      else {
        alert('You Reached the limits')
      }
    });
    $(wrapper).on("click",".delete", function(e){
        e.preventDefault(); $(this).parents('field.row').remove(); x--;
    });
  </script>
@endsection