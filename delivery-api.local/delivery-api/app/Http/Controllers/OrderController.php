<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Получить список всех заказов.
     */
    public function index(): \Illuminate\Database\Eloquent\Collection
    {
        return Order::getAllOrders();
    }

    /**
     * Сохранить новый заказ.
     */
    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        $order = Order::createOrder($request->all());
        return response()->json($order, 201);
    }

    /**
     * Показать данные конкретного заказа.
     */
    public function show(Order $order): Order
    {
        return $order->load('driver');
    }

    /**
     * Обновить данные заказа.
     */
    public function update(Request $request, Order $order): \Illuminate\Http\JsonResponse
    {
        $order->updateOrder($request->all());
        return response()->json($order, 200);
    }

    /**
     * Удалить заказ.
     */
    public function destroy(Order $order): \Illuminate\Http\JsonResponse
    {
        $order->deleteOrder();
        return response()->json(null, 204);
    }
}
