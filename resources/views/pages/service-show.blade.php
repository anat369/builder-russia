@extends('layout')

@section('title', $serviceReal->meta_title)
@section('meta_description', $serviceReal->meta_description)
@section('meta_keywords', $serviceReal->meta_keyword)
@section('image', $serviceReal->getImage())

@section('content')

    @include('pages.header')
    <section class="internal internal-one">
        <div class="container">
            <div class="row">
                <div class="col-md-4 wow fadeInLeft">
                    <h3>Наши услуги</h3>
                    <div class="internal__wrap-list">
                        <button class="button internal-btn-list">Посмотреть</button>
                        <ul>
                            @foreach($services as $service)
                            <li>
                                <div class="row internal__wrap-block <?php if (strpos(\Illuminate\Support\Facades\Request::url(),$service->slug)) {?>
                                        active-ul<?php }?>">

                                    <div class="col-xs-11 col-xs-offset-1">
                                        <div class="internal__wrap-block-text">
                                            <a href="/service/{{$service->slug}}"
                                            <?php if (strpos(\Illuminate\Support\Facades\Request::url(),$service->slug)) {?>
                                            class="active-a"
                                            <?php }?>
                                            >{{$service->title}}</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                                @endforeach
                        </ul>
                    </div>
                    <!-- /.content-page__wrap-list -->
                </div>
                <!-- /.col-md-4 -->
                <div class="col-md-8">
                    <div class="internal__wrap-content  wow fadeInRight">
                        <h2>{{$serviceReal->title}}</h2>
                        <?= $serviceReal->content; ?>

                    </div>
                    <!-- /.internal__wrap-content -->
                </div>
                <!-- /.col-md-8 -->
            </div>
        </div>
    </section>
    <!-- /.content-page -->

    @include('pages.order-form')

@endsection