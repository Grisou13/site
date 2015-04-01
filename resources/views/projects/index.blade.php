@extends('app')
@section('content')
  @if($projects)
    @foreach($projects as $project)
    
      @include('include.projects.teaser')
    @endforeach
  @endif
@stop
