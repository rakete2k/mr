@extends('public.master')
@include('public.include.nav')
@section('content')

        <!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">One Column Portfolio
                <small>Subheading</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a>
                </li>
                <li class="active">One Column Portfolio</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <!-- Project One -->
    @foreach($projects as $project)
    <div class="row">
        <div class="col-md-7">
            <a href="portfolio-item.html">
                <img class="img-responsive img-hover" src="http://placehold.it/700x300" alt="">
            </a>
        </div>
        <div class="col-md-5">
            <h3>{{ $project->title }}</h3>
            <h4>Realisierungsjahr {{ $project->realization_year }}</h4>
            <p>{{ $project->description }} </p>
            <a class="btn btn-primary" href="portfolio-item.html">View Project</i></a>
        </div>
    </div>

    <hr>
    @endforeach
    <!-- /.row -->

    <!-- Pagination -->
    <div class="row text-center">
        <div class="col-lg-12">
            <ul class="pagination">
                <li>
                    <a href="#">&laquo;</a>
                </li>
                <li class="active">
                    <a href="#">1</a>
                </li>
                <li>
                    <a href="#">2</a>
                </li>
                <li>
                    <a href="#">3</a>
                </li>
                <li>
                    <a href="#">4</a>
                </li>
                <li>
                    <a href="#">5</a>
                </li>
                <li>
                    <a href="#">&raquo;</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /.row -->


@include('public.include.footer')
@endsection