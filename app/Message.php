<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

    /**
     * Массив с данными сообщений, которые будем сохранять в таблицу
     *
     * @var array
     */
    protected $fillable =['name', 'email', 'phone', 'message', 'status'];

    /**
     * Добавляем сообщение
     *
     * @param $fields
     * @return static
     */
    public static function add(array $fields)
    {
        $message = new static;
        $message->fill($fields);
        $message->save();
        return $message;
    }

    /**
     * Изменение данных сообщения
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

    public static function countNewEmail()
    {
        return Message::all()->where('status', '=', '0')->count();
    }
}
