@extends('layouts/application')

@section('title','NewAboutTitle')

@section('main')
<h1>This is the about page which created new by controller</h1>
<h1>{{$name}}</h1>
<h1>{{$js}}</h1>
@endsection

@section('footer')
  <script>alert('Hi,here is footer');</script>
@endsection