@extends('admin.components.layout')

@section('title', 'Dashboard')

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
@endsection

{{-- Topbar --}}
@section('topbar')
  @parent
@endsection

{{-- Leftbar --}}
@section('leftbar')
  @parent
  @section('dashboard', 'active')
@endsection

{{-- Content --}}
@section('content')
  @parent
@endsection

{{-- Javascript --}}
@section('javascript')
  @parent
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