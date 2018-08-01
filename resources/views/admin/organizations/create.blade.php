@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
        {{Form::open([
            'route'	=> 'admin.organization.store',
            'files'	=>	true
        ])}}
        <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Добавляем карточку организации</h3>
                    @include('admin.errors')
                </div>
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputName">Название (обязательно)</label>
                            <input type="text" class="form-control" id="exampleInputName" name="name" value="{{old('name')}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputAddress">Адрес (обязательно)</label>
                            <input type="text" class="form-control" id="exampleInputAddress" name="address" value="{{old('address')}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Логотип</label>
                            <input type="file" id="exampleInputFile" name="logo">

                            <p class="help-block">Загружайте только картинки</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPhone">Телефон (обязательно)</label>
                            <input type="text" class="form-control phone-organization" id="exampleInputPhone" placeholder="" name="phone" value="{{old('phone')}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail">Электронная почта (обязательно)</label>
                            <input type="text" class="form-control" id="exampleInputEmail" placeholder="" name="email" value="{{old('email')}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPhoneNumber1">Дополнительный телефон 1 (необязательно)</label>
                            <input type="text" class="form-control phone-organization" id="exampleInputPhoneNumber1" placeholder="" name="phone_number1" value="{{old('phone_number1')}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPhoneNumber2">Дополнительный телефон 2 (обязательно)</label>
                            <input type="text" class="form-control phone-organization" id="exampleInputPhoneNumber2" placeholder="" name="phone_number2" value="{{old('phone_number2')}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPhoneNumber3">Дополнительный телефон 3  (обязательно)</label>
                            <input type="text" class="form-control phone-organization" id="exampleInputPhoneNumber3" placeholder="" name="phone_number3" value="{{old('phone_number3')}}">
                        </div>

                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputDescription">Краткое описание (желательно)</label>
                            <textarea name="description" id="exampleInputDescription" cols="30" rows="10" class="form-control" >{{old('description')}}</textarea>

                        </div>
                    </div>

                    <div class="col-md-12 panel panel-default" style="border-color: navy;">
                        <h4>Блок социальных сетей (добавляем ссылку)</h4>
                        <br>
                        <div class="form-group">
                            <label for="exampleInputFacebook">Facebook</label>
                            <input type="text" class="form-control" id="exampleInputMetaTitle" name="facebook" value="{{old('facebook')}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputVkontakte">Vkontakte</label>
                            <input type="text" class="form-control" id="exampleInputVkontakte" name="vkontakte" value="{{old('vkontakte')}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputInstagram">Instagram</label>
                            <input type="text" class="form-control" id="exampleInputInstagram" name="instagram" value="{{old('instagram')}}">
                        </div>
                    </div>

                    <div class="col-md-12 panel panel-default" style="border-color: red;">
                        <h4>Блок данных, используемых для SEO-продвижения</h4>
                        <br>
                        <div class="form-group">
                            <label for="exampleInputMetaTitle">Заголовок страницы услуги (title)</label>
                            <input type="text" class="form-control" id="exampleInputMetaTitle" placeholder="Не более 100 символов"
                                   name="meta_title" value="{{old('meta_title')}}">
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