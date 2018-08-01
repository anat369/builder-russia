@extends('layout')

@section('title', $organization->meta_title)
@section('meta_description', $organization->meta_description)
@section('meta_keywords', $organization->meta_keyword)
@section('image', $organization->getLogo())

@section('content')
    @include('pages.header')

        @foreach($projects as $project)
            <section class="news info-1">
                <div class="container">

                    <!--  Инфо новости -->
                    <div class="row">
                        <div id="cont-2" class="col-md-12  cont">
                            <div   class="news__content ">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="info-news-content-h3">{{$project->title}}</h3>
                                        <div class="info-news-content">
                                            <ul>
                                                <?= $project->content?>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>

            </section>
            <!-- /.news -->
            @endforeach


@endsection