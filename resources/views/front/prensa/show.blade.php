@extends('front.layouts.interna')

@section('content')
<?php $video = $content->mediatype_id==1 ? true:false; ?>

@include('front.articles.assets.content',$content)
@endsection
