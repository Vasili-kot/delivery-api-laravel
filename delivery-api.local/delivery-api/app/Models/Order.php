<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['driver_id', 'from', 'to'];
    protected $hidden = ['created_at', 'updated_at'];

    // Связь многие-к-одному с таблицей водителей
    public function driver(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Driver::class);
    }

    // Получить все заказы
    public static function getAllOrders(): \Illuminate\Database\Eloquent\Collection
    {
        return self::with('driver')->get();
    }

    // Добавить новый заказ
    public static function createOrder(array $data): self
    {
        return self::create($data);
    }

    // Обновить заказ
    public function updateOrder(array $data): self
    {
        $this->update($data);
        return $this;
    }

    // Удалить заказ
    public function deleteOrder(): bool
    {
        $this->delete();
        return true;
    }
}
