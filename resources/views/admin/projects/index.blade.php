@extends('admin.layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Управление готовыми проектами</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <a href="{{route('admin.project.create')}}" class="btn btn-success">Добавить</a>
                    </div>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Название</th>
                            <th>Вид услуги</th>
                            <th>Картинка</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        {{--проходимся циклом  и выводим все категории--}}
                        @foreach($projects as $project)
                            <tr>
                                <td>{{$project->id}}</td>
                                <td>{{$project->title}}</td>
                                <td>{{$project->service->title}}</td>
                                <td>
                                    <img src="{{$project->getImage()}}" alt="" width="100">
                                </td>
                                <td>
                                    <a href="{{route('admin.project.edit', $project->id)}}" class="fa fa-pencil"></a>
                                    {{Form::open(['route' => ['admin.project.destroy', $project->id], 'method' => 'delete'])}}
                                    <button type="submit" class="delete"
                                            onclick="return confirm('Вы точно хотите удалить данный проект?')">
                                        <i class="fa fa-remove"></i>
                                    </button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection