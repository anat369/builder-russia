<?php

namespace App;

use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use Sluggable;

    const IS_NEW = 1;
    const IS_POPULAR = 2;
    /**
     * Массив с данными товара, которые будем сохранять в таблицу
     *
     * @var array
     */
    protected $fillable = ['title',
                            'description',
                            'content',
                            'meta_title',
                            'meta_description',
                            'meta_keyword',
                            'service_id',
                        ];

    /**
     * Один проект может иметь только один тип услуг
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function service()
    {
        return $this->belongsTo(Service::class);
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
     * Добавляем проект
     *
     * @param $fields
     * @return static
     */
    public static function add(array $fields)
    {
        $project = new static;
        $project->fill($fields);
        $project->save();
        return $project;
    }


    /**
     * Изменение данных о проекте
     *
     * @param $fields
     */
    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }

    /**
     * Удаляем проект
     *
     */
    public function remove()
    {
        $this->removeImage();
        $this->removeImg_1();
        $this->removeImg_2();
        $this->removeImg_3();
        $this->removeImg_4();
        $this->removeImg_5();
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
        $image->storeAs('uploads/projects', $filename);
        $this->image = $filename;
        $this->save();
    }

    public  function getImage()
    {
        if (null == $this->image) {
            return '/img/no-image.png';
        }
        return '/uploads/projects/' . $this->image;
    }

    public function removeImage()
    {
        if (null != $this->image)
        {
// используя стандартный класс laravel Storage удаляем картинку,
// если она была раньше загружена
            Storage::delete('uploads/projects/' . $this->image);
        }
    }

    public function setService($id)
    {
        if (null == $id) {
            return;
        }

        $this->service_id = $id;
        $this->save();
    }

    public function getServiceTitle()
    {
        if (null != $this->service) {
            return $this->service->title;
        }

        return 'Нет типа услуги';
    }

    public function getServiceID()
    {
// делаем проверку на наличие типа услуги у поста, если ее нет, то выводим  null
        return $this->service != null ? $this->service->id : null;
    }

}
