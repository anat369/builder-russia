<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Админ панель магазина</title>

    <link rel="stylesheet" href="/css/admin.css">
    <style>
        table.table form
        {
            display: inline-block;
        }
        button.delete        {
            background: transparent;
            border: none;
            color: #337ab7;
            padding: 0px;
        }
    </style>

</head>

<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="/" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini">С</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">Сайт</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
        </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            @include('admin._sidebar');
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    @yield('content')

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.3.7
        </div>
        <strong>Copyright &copy; <a href="http://myorient.ru/">Блог обо всем</a>.</strong> Все права защищены
    </footer>

</div>
<!-- ./wrapper -->

<script src="/js/admin.js"></script>
<script src="/plugins/ckeditor/ckeditor.js"></script>
<script src="/plugins/ckfinder/ckfinder.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
<script>
    $(document).ready(function(){
        var editor = CKEDITOR.replaceAll();
        CKFinder.setupCKEditor( editor );
    })
</script>
<script>
    $( document ).ready(function(){
        // маскед
        jQuery(function($){
            $(".phone-organization").mask("+7 (999) 999-99-99");

        });
    });
</script>

</body>
</html>
