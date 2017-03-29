@extends('layouts.blog')
@section('content')
<header class="intro-header" style="background-image: url('img/home-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1>Clean Blog</h1>
                    <hr class="small">
                    <span class="subheading">A Clean Blog Theme by Start Bootstrap</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
          @foreach ($journals as $journal)
            <div class="post-preview">
                <a href="{{ route('journals.show', $journal->id) }}">
                    <h2 class="post-title">
                        {{ $journal->title }}
                    </h2>
                </a>
                <p class="post-meta">Posted on {{ $journal->created_at->format('F j, Y') }}</p>
            </div>
            <hr>
          @endforeach
        </div>
    </div>
</div>
@endsection
