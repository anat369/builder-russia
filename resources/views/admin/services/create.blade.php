@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
        {{Form::open([
            'route'	=> 'admin.service.store',
             'files'	=>	true,
        ])}}
        <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Создать новую услугу</h3>
                    @include('admin.errors')
                </div>
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputTitle">Название услуги</label>
                            <input type="text" class="form-control" id="exampleInputTitle" placeholder="" value="{{old('title')}}" name="title">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Главная картинка</label>
                            <input type="file" id="exampleInputFile" name="image">

                            <p class="help-block">Загружайте только картинки</p>
                        </div>

                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputDescription">Краткое описание</label>
                            <textarea name="description" id="exampleInputDescription" cols="20" rows="10" class="form-control" >{{old('description')}}</textarea>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputContent">Полное описание</label>
                            <textarea name="content" id="exampleInputContent" cols="30" rows="10" class="form-control" >{{old('content')}}</textarea>
                        </div>
                    </div>

                    <div class="col-md-12 panel panel-default" style="border-color: red;">
                        <h4>Блок данных, используемых для SEO-продвижения</h4>
                        <br>
                        <div class="form-group">
                            <label for="exampleInputMetaTitle">Заголовок страницы услуги (title)</label>
                            <input type="text" class="form-control" id="exampleInputMetaTitle" placeholder="Не более 100 символов"
                                   name="meta_title" value="{{old('title')}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputMetaKeywords">Ключевые слова (keywords)</label>
                            <input type="text" class="form-control" id="exampleInputMetaKeywords" placeholder="Не более 80 символов"
                                   name="meta_keyword" value="{{old('meta_keyword')}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputMetaDescription">Ключевое описание услуги (description)</label>
                            <input type="text" class="form-control" id="exampleInputMetaDescription" placeholder="Не более 200 символов"
                                   name="meta_description" value="{{old('meta_description')}}">
                        </div>
                    </div>

                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button class="btn btn-warning pull-right">Создать</button>
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