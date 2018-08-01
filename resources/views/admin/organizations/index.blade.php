@extends('admin.layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Управление карточкой фирмы</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    @if(false == \App\Organization::count())
                    <div class="form-group">
                        <a href="{{route('admin.organization.create')}}" class="btn btn-success">Добавить карточку фирмы</a>
                    </div>
                    @endif
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Логотип</th>
                            <th>Телефон</th>
                            <th>Электронная почта</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        {{--проходимся циклом  и выводим все категории--}}
                        @foreach($organizations as $organization)
                            <tr>
                                <td>
                                    <img src="{{$organization->getLogo()}}" alt="" width="100">
                                </td>
                                <td>{{$organization->phone}}</td>
                                <td>{{$organization->email}}</td>
                                <td>
                                    <a href="{{route('admin.organization.edit', $organization->id)}}" class="fa fa-pencil"></a>
                                    {{Form::open(['route' => ['admin.organization.destroy', $organization->id], 'method' => 'delete'])}}
                                    <button type="submit" class="delete"
                                            onclick="return confirm('Вы точно хотите удалить карточку фирмы?')">
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