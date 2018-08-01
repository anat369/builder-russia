@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
        {{Form::open([
            'route'	=> 'admin.item.store',
            'files'	=>	true
        ])}}
        <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Добавить товар</h3>
                    @include('admin.errors')
                </div>
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputTitle">Название</label>
                            <input type="text" class="form-control" id="exampleInputTitle" placeholder="" name="title" value="{{old('title')}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Лицевая картинка</label>
                            <input type="file" id="exampleInputFile" name="image">

                            <p class="help-block">Загружайте только картинки</p>
                        </div>
                        <div class="form-group">
                            <label>Категория</label>
                            {{Form::select('category_id',
                                $categories,
                                null,
                                ['class' => 'form-control select2', 'multiple'=>'multiple','data-placeholder'=>'Выберите категорию'])
                            }}
                        </div>

                        <div class="form-group">
                            <label>Выберите бренд</label>
                            {{Form::select('brand_id',
                                $brands,
                                null,
                                ['class' => 'form-control select2', 'multiple'=>'multiple','data-placeholder'=>'Выберите бренд'])
                            }}
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPrice">Цена (данное поле заполняйте только цифрами)</label>
                            <input type="text" class="form-control" id="exampleInputPrice" placeholder="" name="price" value="{{old('price')}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputStatus">Наличие товара</label>
                            <select name="status" id="exampleInputStatus">
                                @foreach($status as $value)
                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputavAilability">Вид товара</label>
                            <select name="availability" id="exampleInputAvailability">
                                <option value="Обычный">Обычный</option>
                                <option value="Популярный">Популярный</option>
                                <option value="Новый">Новый</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputColor">Цвет</label>
                            <input type="text" class="form-control" id="exampleInputColor" name="color" value="{{old('color')}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputMaterial">Материал</label>
                            <input type="text" class="form-control" id="exampleInputMaterial" name="material" value="{{old('material')}}">
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Описание</label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control" >{{old('description')}}</textarea>
                        </div>
                    </div>

                    <div class="col-md-12 panel panel-default" style="border-color: red;">
                        <h4>Блок данных, используемых для SEO-продвижения</h4>
                        <br>
                        <div class="form-group">
                            <label for="exampleInputMetaTitle">Заголовок страницы товара (title)</label>
                            <input type="text" class="form-control" id="exampleInputMetaTitle" placeholder=""
                                   name="meta_title" value="{{old('meta_title')}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputMetaKeywords">Ключевые слова (keywords)</label>
                            <input type="text" class="form-control" id="exampleInputMetaKeywords" placeholder=""
                                   name="meta_keyword" value="{{old('meta_keyword')}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputMetaDescription">Ключевое описание (description)</label>
                            <input type="text" class="form-control" id="exampleInputMetaDescription" placeholder=""
                                   name="meta_description" value="{{old('meta_description')}}">
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button class="btn btn-success pull-right">Добавить</button>
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