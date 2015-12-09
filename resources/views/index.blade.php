@extends('default')

@section('nomepagina')
    Blog do Skillo | Index
@stop

@section('title')
    <div class="site-heading">
        <h1>Clean Blog</h1>
        <hr class="small">
        <span class="subheading">A Clean Blog Theme by Start Bootstrap</span>
    </div>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            @foreach($posts as $post)
            <div class="post-preview">
                <a href="post.html">
                    <h2 class="post-title">
                        {{$post}}
                    </h2>
                </a>
                <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 24, 2014</p>
            </div>
            <hr>
            @endforeach
            <!-- Pager -->
            <ul class="pager">
                <li class="next">
                    <a href="#">Older Posts &rarr;</a>
                </li>
            </ul>
        </div>
    </div>
@stop