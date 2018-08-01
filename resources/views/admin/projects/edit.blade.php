@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
        {{Form::open([
            'route'	=>	['admin.project.update', $project->id],
            'files'	=>	true,
            'method'	=>	'put'
        ])}}
        <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Обновить проект</h3>
                    @include('admin.errors')
                </div>
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputTitle">Название</label>
                            <input type="text" class="form-control" id="exampleInputTitle" placeholder="" value="{{$project->title}}" name="title">
                        </div>

                        <div class="form-group">
                            <img src="{{$project->getImage()}}" alt="" class="img-responsive" width="200">
                            <label for="exampleInputFile">Лицевая картинка</label>
                            <input type="file" id="exampleInputFile" name="image">

                            <p class="help-block">Загружайте только картинки</p>
                        </div>

                        <div class="form-group">
                            <label>Услуга</label>
                            {{Form::select('service_id',
                                $services,
                                $project->getServiceID(),
                                ['class' => 'form-control select2'])
                            }}
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputDescription">Краткое описание</label>
                            <textarea name="description" id="exampleInputDescription" cols="20" rows="10" class="form-control" >{{$project->description}}</textarea>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputContent">Описание</label>
                            <textarea name="content" id="exampleInputContent" cols="30" rows="10" class="form-control" >{{$project->content}}</textarea>
                        </div>
                    </div>
                    <div class="col-md-12 panel panel-default" style="border-color: red;">
                        <h4>Блок данных, используемых для SEO-продвижения</h4>
                        <br>
                        <div class="form-group">
                            <label for="exampleInputMetaTitle">Заголовок страницы услуги (title)</label>
                            <input type="text" class="form-control" id="exampleInputMetaTitle" placeholder="Не более 100 символов"
                                   name="meta_title" value="{{$project->meta_title}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputMetaKeywords">Ключевые слова (keywords)</label>
                            <input type="text" class="form-control" id="exampleInputMetaKeywords" placeholder="Не более 80 символов"
                                   name="meta_keyword" value="{{$project->meta_keyword}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputMetaDescription">Ключевое описание услуги (description)</label>
                            <input type="text" class="form-control" id="exampleInputMetaDescription" placeholder="Не более 200 символов"
                                   name="meta_description" value="{{$project->meta_description}}">
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