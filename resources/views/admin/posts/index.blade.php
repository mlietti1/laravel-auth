@extends('layouts.app')

@section('title')

| Admin

@endsection

@section('content')
<div class="container py-4">

    <h1>Elenco dei Post</h1>
    @dump($posts)
</div>
@endsection
