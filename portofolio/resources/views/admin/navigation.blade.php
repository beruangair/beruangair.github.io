@extends('admin.components/layout')

@section('title', 'Navigation')

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
  @section('navigation', 'active')
  @section('header-menu', 'subdrop')
  @section('header-menu-show', 'display: block')
@endsection

{{-- Content --}}
@section('content')
  <div class="content-page">
    <!-- Start content -->
    <div class="content">
      <div class="container-fluid">

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
              <h4 class="page-title">Logo</h4>
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Dashboard</a></li>
                  <li class="breadcrumb-item active">Navigation</li>
              </ol>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="card-box table-responsive">
              <div id="datatable-buttons_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer m-t-20">
                <div class="row">
                  <div class="col-sm-6">
                      <div class="m-b-30 p-l-20">
                        <a href="{{ url('/navigation/insert') }}" id="addToTable" class="btn btn-success waves-effect waves-light">Add <i class="mdi mdi-plus-circle-outline"></i></a>
                      </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <table id="datatable-buttons" class="table table-striped table-bordered dataTable no-footer datatable-editable" cellspacing="0" width="100%" role="grid" aria-describedby="datatable-buttons_info" style="width: 100%;">
                    <thead>
                      <tr role="row">
                        <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width:300px;">Logo</th>
                        <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 56px;">Actions</th>
                      </tr>
                      </thead>
                      <tbody>
                        @for ($i = 0; $i < count($nav); $i++)
                          <tr role="row" class="odd">
                            <td class="sorting_1">{{ $nav[$i]->title}}</td>
                            <td class="actions">
                              <a href="{{ url('/get/'.$nav[$i]->id_navigation) }}" class="on-default edit-row hidden" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                              <a href="{{ url('/delete/'.$nav[$i]->id_navigation) }}" class="on-default remove-row hidden" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                        @endfor
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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
    $(".form-control").on("propertychange change keyup paste input", function(){
      console.log($('.form-control').val());
    });
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