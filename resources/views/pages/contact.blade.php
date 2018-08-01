@extends('layout')

@section('title', $organization->meta_title)
@section('meta_description', $organization->meta_description)
@section('meta_keywords', $organization->meta_keyword)
@section('image', $organization->getLogo())

@section('content')
    @include('pages.header')

    <section class="contacts">
        <div class="container">
            <h2 class="title contacts__title">Контакты</h2>
            <div class="row">
                <div class="col-md-5 col-md-offset-1 col-sm-6">
                    <div class="contacts__wrap">
                        <h3>Наш адрес:</h3>
                        <p>{{$organization->address}}</p>
                        <h3>Номер телефона:</h3>
                        <p>{{$organization->phone}}</p>
                        <h3>E-mail:</h3>
                        <p><a href="mailto:{{$organization->email}}" class="contacts__wrap-a">{{$organization->email}}</a></p>
                        <h3>Мы в соц. сетях:</h3>
                        <div class="contacts__wrap-social">
                            <div class="contacts__wrap-social-block">
                                <a href="{{$organization->vkontakte}}"> <picture>
                                        <source type="image/svg+xml" srcset="/img/vk-logo.png">
                                        <img src="img/vk-social-network-logo.png" class="vk-soc" alt="Описание"/>
                                    </picture></a>
                            </div>

                            <div class="contacts__wrap-social-block">
                                <a href="{{$organization->facebook}}"><picture>
                                        <source type="image/svg+xml" srcset="/img/facebook-logo.png">
                                        <img src="img/facebook-logo.png" alt="Описание"/>
                                    </picture></a>
                            </div>

                            <div class="contacts__wrap-social-block">
                                <a href="{{$organization->instagram}}"><picture>
                                        <source type="image/svg+xml" srcset="/img/instagram-logo.png">
                                        <img src="img/instagram-logo.png" alt="Описание"/>
                                    </picture></a>
                            </div>


                        </div>
                        <!-- /.contacts__wrap-social -->

                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d43365.164425923336!2d39.6635114664494!3d47.210266314925036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40e3b93f0546cae3%3A0x15b1d456468cd6e2!2z0JvQtdC90LjQvdGB0LrQuNC5INGALdC9LCDQoNC-0YHRgtC-0LIt0L3QsC3QlNC-0L3Rgywg0KDQvtGB0YLQvtCy0YHQutCw0Y8g0L7QsdC7Lg!5e0!3m2!1sru!2sru!4v1525272785633"
                                width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="forms" id="forms" style="background-color: #f3f3f3">
        <div class="container">
            <h2>Напишите нам!</h2>

            <div class="row">
                <div class="forms__form  wow fadeInRight">
                    <form id="contactForm">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2">
                                <input type="text" name="name" placeholder="Как вас зовут?">
                                <input type="tel" class="user-phone" name="phone" placeholder="Номер телефона">
                            </div>
                            <div class="col-md-4">
                                <input type="email" name="email" placeholder="Адрес электронной почты">
                                <input type="text"  name="message" placeholder="Текст сообщения">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 col-lg-offset-5 col-md-4 col-md-offset-4">
                                <button id="contact" class="button forms-btn" type="submit">
                                    Отправить
                                </button>
                            </div>
                        </div>

                    </form>
                    <!-- /#form-callback -->
                </div>
            </div>
        </div>
    </section>

@endsection