<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'middle_name', 'last_name'];
    protected $hidden = ['created_at', 'updated_at'];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    // Получить всех водителей
    public static function getAllDrivers()
    {
        return self::all();
    }

    // Добавить нового водителя
    public static function createDriver($data)
    {
        return self::create($data);
    }

    // Обновить информацию о водителе
    public function updateDriver($data)
    {
        $this->update($data);
        return $this;
    }

    // Удалить водителя
    public function deleteDriver()
    {
        $this->delete();
        return true;
    }
}
