<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * Массив с данными заказа, которые будем сохранять в таблицу
     *
     * @var array
     */
    protected $fillable =['service_id', 'name', 'phone', 'email', 'status', 'message'];

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    /**
     * Добавление нового заказа
     *
     * @param array $fields
     * @return static
     */
    public static function add(array $fields)
    {
        $order = new static;
        $order->fill($fields);
        $order->save();

        return $order;
    }

    /**
     * Изменение данных о заказе
     *
     * @param $fields
     */
    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }

    /**
     * Удаляем заказ
     *
     */
    public function remove()
    {
        $this->delete();
    }

    public static function countNewOrders()
    {
        return Order::all()->where('status', '=', 'Новый')->count();
    }
}
