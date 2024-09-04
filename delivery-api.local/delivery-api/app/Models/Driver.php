<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'middle_name', 'last_name'];
    protected $hidden = ['created_at', 'updated_at'];

    // Связь один-ко-многим с таблицей заказов
    public function orders(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Order::class);
    }

    // Получить всех водителей
    public static function getAllDrivers(): \Illuminate\Database\Eloquent\Collection
    {
        return self::all();
    }

    // Добавить нового водителя
    public static function createDriver(array $data): self
    {
        return self::create($data);
    }

    // Обновить информацию о водителе
    public function updateDriver(array $data): self
    {
        $this->update($data);
        return $this;
    }

    // Удалить водителя
    public function deleteDriver(): bool
    {
        $this->delete();
        return true;
    }
}
