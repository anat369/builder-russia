<ul class="sidebar-menu">
    <li class="treeview">
        <a href="/">
            <i class="fa fa-dashboard"></i> <span>Вернуться на сайт</span>
        </a>
    </li>
    <li><a href="{{route('admin.organization.index')}}"><i class="fa fa-list-ul"></i> <span>Данные компании</span></a></li>
    <li><a href="{{route('admin.order.index')}}"><i class="fa fa-cart-plus"></i><span>Заказы</span>
            <span class="pull-right-container">
          <small class="label pull-right bg-green">{{\App\Order::countNewOrders()}}</small>
        </span>
        </a>
    </li>
    <li><a href="{{route('admin.project.index')}}"><i class="fa fa-bold"></i> <span>Проекты</span></a></li>
    <li><a href="{{route('admin.message.index')}}"><i class="fa fa-cart-plus"></i><span>Сообщения</span></a></li>
    <li><a href="{{route('admin.service.index')}}"><i class="fa fa-list-ul"></i> <span>Услуги</span></a></li>
</ul>