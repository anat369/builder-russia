<section class="forms" id="forms">
    <div class="container">
        <h2>Заказать услугу</h2>

        <div class="row">
            <div class="forms__form  wow fadeInRight">
                <form id="form-order">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-2">
                            <input type="text" name="name" placeholder="Как Вас зовут ?">
                            <input type="email" name="email" placeholder="Электронная почта">
                        </div>
                        <div class="col-md-4">
                            <input type="tel" name="phone" class="user-phone" placeholder="Номер телефона">
                            <select type="text" name="service_id">
                                <option  value="" selected>Выберите услугу</option>
                                @foreach($services as $service)
                                    <option value="{{$service->id}}">{{$service->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-8 col-md-offset-2">
                            <input type="text" name="message" placeholder="Сообщение">
                        </div>
                    <div class="row">
                        <div class="col-lg-2 col-lg-offset-5 col-md-4 col-md-offset-4">
                            <button id="order-forms" class="button forms-btn" type="submit">
                                Заказать
                            </button>
                        </div>
                    </div>
                    </div>

                </form>
                <!-- /#form-callback -->
            </div>
        </div>
    </div>
</section>
