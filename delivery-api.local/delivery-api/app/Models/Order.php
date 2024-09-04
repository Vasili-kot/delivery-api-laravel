<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['driver_id', 'from', 'to'];
    protected $hidden = ['created_at', 'updated_at'];

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

    // Получить все заказы
    public static function getAllOrders()
    {
        return self::with('driver')->get();
    }

    // Добавить новый заказ
    public static function createOrder($data)
    {
        return self::create($data);
    }

    // Обновить заказ
    public function updateOrder($data)
    {
        $this->update($data);
        return $this;
    }

    // Удалить заказ
    public function deleteOrder()
    {
        $this->delete();
        return true;
    }
}
