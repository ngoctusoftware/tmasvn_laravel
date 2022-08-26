
@extends('pages.layouts.layout')

@section('title','Trang chủ')

@section('content')

<!-------Banner------>
@include('pages.contents.home.banner')
<!-------About------>
@include('pages.contents.home.about')
<!-------Branch------>
@include('pages.contents.home.branch')
<!-------Video------>
@include('pages.contents.home.video')
<!-------News------>
@include('pages.contents.home.news')

@endsection
