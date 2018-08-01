<!-- footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="footer__logo wow fadeInLeft">
                    <img src="{{$organization->getLogo()}}" alt="{{$organization->name}}">
                </div>
            </div>
            <div class="col-md-7">

                <nav class="nav footer-nav">
                    <div class="row menu-md wow fadeInUp">
                        <div class="col-md-12 ">
                            <ul>
                                <li><a href="/" class="{{ Request::is('/') ? 'active-li' : '' }}" style="color: #000000!important;" rel="nofollow">О компании</a></li>
                                <li><a href="/service" class="{{ Request::is('service') ? 'active-li' : '' }}" style="color: #000000!important;" rel="nofollow">Услуги</a></li>
                                <li><a href="/project" class="{{ Request::is('project') ? 'active-li' : '' }}" style="color: #000000!important;" rel="nofollow">Наши работы</a></li>
                                <li><a href="/contact" class="{{ Request::is('contact') ? 'active-li' : '' }}" style="color: #000000!important;" rel="nofollow">Контакты</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="col-md-3 wow fadeInRight">
                <div class="footer__site">
                    <a href="http://myorient.ru/">Блог обо всем</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Модальные окна -->

<!-- модальная форма -->
<div class="popup" id="modal-form-phone">
    <div class="popup-dialog">
        <div class="popup-content">
            <div class=" popup-form ">
                <button class="popup-close">&times;</button>

                <h2 class="popup-title">Заказать звонок</h2>

                <div class="row">
                    <div class="forms__form">
                        <form action="#" id="form-phone">
                            <div class="row">
                                <div class="col-md-6 ">

                                    <input type="text" name="name" placeholder="Как Вас зовут ?">
                                </div>
                                <div class="col-md-6">

                                    <input type="tel" class="user-phone" name="phone" placeholder="Номер телефона">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                                    <button id="form-phone-btn" class="button forms-btn popup-btn">
                                        Заказать звонок
                                    </button>
                                </div>
                            </div>

                        </form>
                        <!-- /#form-callback -->
                    </div>
                </div>

                <p>Нажав кнопку «Заказать звонок»,<br> я даю согласие на обработку моих персональных данных.</p>
            </div>
        </div>
    </div>
</div>


<!-- Второе окно -->
<div class="popup popup-application" id="modal-form-application">
    <div class="popup-dialog">
        <div class="popup-content">
            <div class=" popup-form ">
                <button class="popup-close">&times;</button>

                <h2 class="popup-title">Быстрая заявка</h2>

                <div class="row">
                    <div class="forms__form">
                        <form action="#" id="form-application">
                            <div class="row">
                                <div class="col-md-6 ">
                                    <input type="text" class="forms__form-data" name="checkOne" placeholder="Откуда">
                                    <input type="text" name="name" placeholder="Как Вас зовут ?">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="forms__form-data" name="checkTwo" placeholder="Куда">
                                    <input type="tel" name="phone" class="user-phone" placeholder="Номер телефона">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                                    <button id="application-modal-btn"  class="button forms-btn popup-btn">
                                        Заказать звонок
                                    </button>
                                </div>
                            </div>

                        </form>
                        <!-- /#form-callback -->
                    </div>
                </div>

                <p>Нажав кнопку «Заказать звонок»,<br> я даю согласие на обработку моих персональных данных.</p>
            </div>
        </div>
    </div>
</div>

<!-- Благодарность -->

<div class="popup popup-thank" id="modal-thank">
    <div class="popup-dialog">
        <div class="popup-content popup-content-thank">
            <button class="popup-close">&times;</button>

            <h2 class="popup-title">Спасибо за заявку!</h2>

            <p>Наш менеджер свяжется с Вами в течении 10 минут.</p>

        </div>
    </div>
</div>

<div class="popup popup-thank" id="modal-contact">
    <div class="popup-dialog">
        <div class="popup-content popup-content-thank">
            <button class="popup-close">&times;</button>

            <h2 class="popup-title">Спасибо за сообщение!</h2>

            <p>Мы вам обязательно ответим!</p>

        </div>
    </div>
</div>

<div class="popup popup-thank" id="modal-order">
    <div class="popup-dialog">
        <div class="popup-content popup-content-thank">
            <button class="popup-close">&times;</button>

            <h2 class="popup-title">Спасибо за заказ!</h2>

            <p>Наш менеджер с вами свяжется в ближайшее время!</p>

        </div>
    </div>
</div>