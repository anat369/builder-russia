<script src="/js/jquery-3.2.1.min.js"></script>
<script src="/js/slick.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.maskedinput.min.js"></script>
<script src="/js/jquery.validate.min.js"></script>
<script src="/js/wow.min.js"></script>

<!-- Bootstrap -->

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<script>
    $(document).ready(function(){
        $('.internal-btn-list').click(function(e) {
            $('.internal__wrap-list ul').toggle();
        });
    });
</script>
<script>
    $( document ).ready(function(){
        // маскед
        jQuery(function($){
            $(".user-phone").mask("+7 (999) 999-99-99");

        });

        // Слайдеры
        $('.main-slider').slick({
            arrows: true,
            nextArrow:'<button type="button" class="slider-main slide-n"></i></button>',
            prevArrow:'<button type="button" class="slider-main slide-p">  </i></button>',
            fade: true,
            dots: true,
            responsive: [
                {
                    breakpoint: 870,
                    settings: {
                        arrows: false
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false

                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]

        });

        $('.works-slider').slick({
            arrows: true,
            nextArrow:'<button type="button" class="slider-main slide-n"></button>',
            prevArrow:'<button type="button" class="slider-main slide-p"> </button>',
            fade: true,
            dots: false,
            responsive: [
                {
                    breakpoint: 880,
                    settings: {
                        arrows:false,
                        dots:true
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        arrows:false,
                        dots:true,
                        adaptiveHeight: true
                    }
                },
                {
                    breakpoint: 500,
                    settings: {
                        arrows:false,
                        dots:true,
                        adaptiveHeight: true
                    }
                }
            ]
        });


        $('.news-slider').slick({
            // infinite: true,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        infinite: true,
                        arrows:false,
                        dots:true,
                        dotsClass:'slick-dots partners-dots news-dots'

                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        arrows:false,
                        dots:true,
                        dotsClass:'slick-dots partners-dots news-dots'
                    }
                },
                {
                    breakpoint: 560,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows:false,
                        dots:true,
                        dotsClass:'slick-dots partners-dots news-dots'
                    }
                }
            ]
        });

        $('.partners-slider').slick({
            // infinite: true,
            slidesToShow: 5,
            slidesToScroll: 5,
            arrows:false,
            responsive: [
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        infinite: true,
                        dots:true,
                        dotsClass:'slick-dots partners-dots'
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        adaptiveHeight: true,
                        dots:true,
                        dotsClass:'slick-dots partners-dots'
                    }
                },
                {
                    breakpoint: 560,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots:true,
                        dotsClass:'slick-dots partners-dots'
                    }
                },

            ]
        });



        /*якоря*/
        $(function(){
            $('ul li a[href^="#"]').on('click', function(event) {
                event.preventDefault();
                var sc = $(this).attr("href"),
                    dn = $(sc).offset().top;
                $('html, body').animate({scrollTop: dn}, 1000);
            });
        });

        /*Модальные окна*/
        $('.open-mform').click(function(e) {

            $('#modal-form-phone').fadeIn();
        });

        $('.application-btn').click(function(e) {

            $('#modal-form-application').fadeIn();
        });


        $('.popup-close').click(function(e){
            e.preventDefault();
            $(this).parents('.popup').fadeOut();
        })


        /*Аякс*/
        $('#form-order').validate({
            rules:{
                name:{
                    required: true,
                    minlength:4
                },
                service_id:{
                    required: true,
                },
                message:{
                    required: true,
                    minlength:4,

                },
                email:{
                    required: true,
                    minlength:4,

                }
            },
            messages:{
                name:{
                    required: 'Заполните поле',
                    minlength:'Не менее 4 символов',
                    maxlength:'Не более 250 символов',
                },
                email:{
                    required: 'Заполните поле',
                    minlength:'Введите вашу почту'
                },
                message:{
                    required: 'Заполните поле',
                    minlength:'Не менее 4 символов',
                    maxlength:'Не более 1000 символов',

                },
                service_id: {
                    required: "Обязательно укажите услугу",
                    min: "Выберите услугу"
                },
            }
        });

        $('#order-forms').click(function(e){
            if (!$(this).closest('#form-order').valid() ){
                e.preventDefault();
            }
        });
        $('#form-order').submit(function(event) {

            event.preventDefault();

            $.ajax({
                type: 'POST',
                url: '/order',
                data: $('#form-order').serialize(),
                success: function(data) {
                    $('#modal-order').fadeIn();
                    $('#form-order')[0].reset();
                },
                error: function(xhr, str){
                }
            });
        });


        /*Аякс*/
        $('#contactForm').validate({
            rules:{
                name:{
                    required: true,
                    minlength:4
                },

                email:{
                    required: true,
                    minlength:4,

                },
                message:{
                    required: true,
                    minlength:4,

                }
            },
            messages:{
                name:{
                    required: 'Заполните поле',
                    minlength:'Не менее 4 символов',
                    maxlength:'Не более 250 символов',
                },
                email:{
                    required: 'Заполните поле',
                    minlength:'Введите вашу почту'
                },
                message:{
                    required: 'Заполните поле',
                    minlength:'Не менее 4 символов',
                    maxlength:'Не более 1000 символов',

                },
            }
        });

        $('#contact').click(function(e){
            if (!$(this).closest('#contactForm').valid() ){
                e.preventDefault();
            }
        });
        $('#contactForm').submit(function(event) {

            event.preventDefault();

            $.ajax({
                type: 'POST',
                url: '/contactForm',
                data: $('#contactForm').serialize(),
                success: function(data) {
                    $('#modal-contact').fadeIn();
                    $('#contactForm')[0].reset();
                },
                error: function(xhr, str){
                }
            });
        });

        // Для модалки
        $('#form-application').validate({
            rules:{
                name:{
                    required: true,
                    minlength:4
                },
                phone:{
                    required: true,
                    minlength:10
                },
                checkOne:{
                    required: true,
                    minlength:4,

                },
                checkTwo:{
                    required: true,
                    minlength:4,

                }
            },
            messages:{
                name:{
                    required: 'Заполните поле',
                    minlength:'Не менее 4 символов'
                },
                phone:{
                    required: 'Заполните поле',
                    minlength:'Введите номер'
                },
                checkOne:{
                    required: 'Заполните поле',
                    minlength:'Не менее 4 символов',

                },
                checkTwo:{
                    required: 'Заполните поле',
                    minlength:'Не менее 4 символов',

                }
            }
        });

        $('#application-modal-btn').click(function(e){
            if (!$(this).closest('#form-application').valid() ){
                e.preventDefault();
            }
        });
        $('#form-application').submit(function(event) {

            event.preventDefault();

            var msg = $('#form-application').serialize();
            $.ajax({
                type: 'POST',
                url: 'mail.php',
                data: msg,
                success: function(data) {
                    $('#modal-form-application').fadeOut();
                    $('#modal-thank').fadeIn();
                    $('#form-application')[0].reset();
                },
                error: function(xhr, str){
                    $('#modal-form-application').fadeOut();
                    $('#modal-thank').fadeIn();
                }
            });
        });

        // Для модалки
        $('#form-phone').validate({
            rules:{
                name:{
                    required: true,
                    minlength:4
                },
                phone:{
                    required: true,
                    minlength:10
                }
            },
            messages:{
                name:{
                    required: 'Заполните поле',
                    minlength:'Не менее 4 символов'
                },
                phone:{
                    required: 'Заполните поле',
                    minlength:'Введите номер'
                }
            }
        });

        $('#form-phone-btn').click(function(e){
            if (!$(this).closest('#form-phone').valid() ){
                e.preventDefault();
            }
        });
        $('#form-phone').submit(function(event) {

            event.preventDefault();

            var msg = $('#form-phone').serialize();
            $.ajax({
                type: 'POST',
                url: 'mail.php',
                data: msg,
                success: function(data) {
                    $('#modal-form-phone').fadeOut();
                    $('#modal-thank').fadeIn();
                    $('#form-phone')[0].reset();
                },
                error: function(xhr, str){
                    $('#modal-form-phone').fadeOut();
                    $('#modal-thank').fadeIn();
                }
            });
        });
        new WOW().init();
    });
</script>

<script>
    $('.news-slider').slick({
        // infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    arrows:false,
                    dots:true,
                    dotsClass:'slick-dots partners-dots news-dots'

                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    arrows:false,
                    dots:true,
                    dotsClass:'slick-dots partners-dots news-dots'
                }
            },
            {
                breakpoint: 560,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows:false,
                    dots:true,
                    dotsClass:'slick-dots partners-dots news-dots'
                }
            }
        ]
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/social-likes/dist/social-likes.min.js"></script>




