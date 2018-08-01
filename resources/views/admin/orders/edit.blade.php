@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
        {{Form::open([
            'route'	=>	['admin.order.update', $order->id],
            'method'	=>	'put'
        ])}}
        <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Изменить данные заказа</h3>
                    @include('admin.errors')
                </div>
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputTitle">Номер заказа: </label>  <span class="badge">{{$order->id}}</span>
                        </div>

                        <div class="form-group">
                            <label>Контактные данные заказчика:</label>
                            <p>Имя: {{$order->name}}</p>
                            <p>Телефон: {{$order->phone}}</p>
                            <p>Электронная почта: {{$order->email}}</p>
                        </div>

                        <div class="form-group">
                            <label>Заказанная услуга:</label>
                            <p>Название: <strong>{{$order->service->title}}</strong></p>
                            <p>Сообщение: <strong>{{$order->message}}</strong></p>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputStatus">Статус заказа: </label>
                            <select name="status" id="exampleInputStatus">
                                <option value="Новый">Новый</option>
                                <option value="В обработке">В обработке</option>
                                <option value="Выполнен">Выполнен</option>
                            </select>
                        </div>


                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button class="btn btn-warning pull-right">Изменить</button>
                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->
            {{Form::close()}}
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection