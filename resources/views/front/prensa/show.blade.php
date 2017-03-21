@extends('front.layouts.interna')

@section('content')
<?php $video = ($content->mediatype_id==1 || $content->mediatype_id==2) ? true:false; ?>

@include('front.articles.assets.content',$content)
@endsection
