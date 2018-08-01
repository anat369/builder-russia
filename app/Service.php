<?php

namespace App;

use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use Sluggable;

    protected $fillable = ['title',
        'description',
        'content',
        'meta_title',
        'meta_description',
        'meta_keyword',
    ];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    /**
     * Добавляем услугу
     *
     * @param $fields
     * @return static
     */
    public static function add(array $fields)
    {
        $service = new static;
        $service->fill($fields);
        $service->save();
        return $service;
    }


    /**
     * Изменение данных об услуге
     *
     * @param $fields
     */
    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }

    /**
     * Удаляем услугу
     *
     */
    public function remove()
    {
        $this->removeImage();
        $this->delete();
    }

    /**
     * Загрузка картинки
     *
     * @param $image
     */
    public function uploadImage($image)
    {
        if (null == $image) {
            return;
        }

        $this->removeImage();

        $filename = str_random(10) . '.' . $image->extension();
        $image->storeAs('uploads/services', $filename);
        $this->image = $filename;
        $this->save();
    }

    public  function getImage()
    {
        if (null == $this->image) {
            return '/img/no-image.png';
        }
        return '/uploads/services/' . $this->image;
    }

    public function removeImage()
    {
        if (null != $this->image)
        {
// используя стандартный класс laravel Storage удаляем картинку,
// если она была раньше загружена
            Storage::delete('uploads/services/' . $this->image);
        }
    }

}
