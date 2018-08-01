<main class="main page-main">

    <div class="container">
        <header class="header">

            <div class="row">
                <div class="col-lg-3 col-md-4 wow fadeInLeft">
                    <div class="header__phone wow fadeInRight">
                        <a href="#">{{$organization->phone}}</a>
                    </div>                </div>

                <div class="col-lg-2 col-lg-offset-2 col-md-2 col-md-offset-1">
                    <div class="header__logo wow fadeInUp">
                        <img src="{{$organization->getLogo()}}" alt="Логотип компании Отец и сыновья" title="Отец и сыновья - лидер рынка в Ростове-на-Дону">
                    </div>
                </div>

                <div class="col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-0">
                </div>

                <div class="col-lg-2 col-md-3 col-md-offset-0 col-sm-6 col-sm-offset-3 wow fadeInRight">
                    <button class="header__open-modal open-mform">Заказать звонок</button>
                </div>

            </div>
        </header>
        <!-- /.header -->
        <nav class="nav">

            <div class="row menu-md wow fadeInDown">
                <div class="col-md-12">
                    <ul>
                        <li><a href="/" class="{{ Request::is('/') ? 'active-li' : '' }}">О компании</a></li>
                        <li><a href="/service" class="{{ Request::is('service') ? 'active-li' : '' }}">Услуги</a></li>
                        <li><a href="/project" class="{{ Request::is('project') ? 'active-li' : '' }}">Наши работы</a></li>
                        <li><a href="/contact" class="{{ Request::is('contact') ? 'active-li' : '' }}">Контакты</a></li>
                    </ul>
                </div>
            </div>


            <div class="row hamburger-xs">
                <div class="col-xs-12">
                    <input id="hamburger" class="hamburger" type="checkbox"/>
                    <label class="hamburger" for="hamburger">
                        <i></i>

                        <span class="text"><b class="close" >Закрыть</b >
                    <b class="open">Меню</b></span>

                    </label>
                    <div class="drawer-list">
                        <ul>
                            <li><a href="/" class="{{ Request::is('/') ? 'hamb-active' : '' }}">О компании</a></li>
                            <li><a href="/service" class="{{ Request::is('service') ? 'hamb-active' : '' }}">Услуги</a></li>
                            <li><a href="/project" class="{{ Request::is('project') ? 'hamb-active' : '' }}">Наши работы</a></li>
                            <li><a href="/contact" class="{{ Request::is('contact') ? 'hamb-active' : '' }}">Контакты</a></li>
                        </ul>
                    </div>
                    <!-- /.hamburger-xs-wrap -->
                </div>
            </div>
        </nav>
        <!-- /.nav -->
    </div>
</main>