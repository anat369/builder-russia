<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Organization extends Model
{

    /**
     * Массив с данными о компании, которые будем сохранять в таблицу
     *
     * @var array
     */
    protected $fillable = ['name',
                            'logo',
                            'phone',
                            'address',
                            'description',
                            'meta_title',
                            'meta_keyword',
                            'meta_description',
                            'email',
                            'phone_number1',
                            'phone_number2',
                            'phone_number3',
                            'facebook',
                            'vkontakte',
                            'instagram',
                        ];

    /**
     * Добавляем карточку организации
     *
     * @param $fields
     * @return static
     */
    public static function add(array $fields)
    {
        $organization = new static;
        $organization->fill($fields);
        $organization->save();
        return $organization;
    }


    /**
     * Изменение данных о компании
     *
     * @param $fields
     */
    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }

    /**
     * Удаляем данные об организации
     *
     */
    public function remove()
    {
        $this->removeLogo();
        $this->delete();
    }

    /**
     * Загрузка логотипа компании
     *
     * @param $image
     */
    public function uploadLogo($logo)
    {
        if (null == $logo) {
            return;
        }

        $this->removeLogo();

        $filename = str_random(10) . '.' . $logo->extension();
        $logo->storeAs('uploads/organization', $filename);
        $this->logo = $filename;
        $this->save();
    }

    /**
     * получаем логотип компании
     *
     * @return string
     */
    public  function getLogo()
    {
        if (null == $this->logo) {
            return '/img/no-image.png';
        }
        return '/uploads/organization/' . $this->logo;
    }

    public function removeLogo()
    {
        if (null != $this->logo)
        {
// используя стандартный класс laravel Storage удаляем картинку,
// если она была раньше загружена
            Storage::delete('uploads/organization/' . $this->logo);
        }
    }

    public static function count()
    {
        if (Organization::all()->count() > 0) {
            return true;
        } else {
            return false;
        }
    }

}
