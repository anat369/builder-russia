@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
        {{Form::open([
            'route'	=>	['admin.message.update', $message->id],
            'files'	=>	true,
            'method'	=>	'put'
        ])}}
        <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Изменить письмо</h3>
                    @include('admin.errors')
                </div>
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputName">Имя</label>
                            <input type="text" class="form-control" id="exampleInputName" placeholder="" value="{{$message->name}}" name="name">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail">Электронная почта</label>
                            <input type="text" class="form-control" id="exampleInputEmail" placeholder="" value="{{$message->email}}" name="email">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPhone">Телефон</label>
                            <input type="text" class="form-control" id="exampleInputPhone" placeholder="" value="{{$message->phone}}" name="phone">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputDescription">Текст письма</label>
                            <input type="text" class="form-control" id="exampleInputDescription" placeholder="" value="{{$message->message}}" name="description">
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