@extends('layouts.master')

@section('content')
    <div class="box-body">
        {!! $filter !!}
        {!! $grid !!} 
    </div> <!-- /.row -->
@endsection


            <!-- Optional bottom section for modals etc... -->
@section('body_bottom')
@endsection
