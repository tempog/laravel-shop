<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;

use App\Models\UserAddress;
use App\Models\Order;
use App\Services\OrderService;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    // 利用 Laravel 的自动解析功能注入 CartService 类
    public function store(OrderRequest $request, OrderService $orderService)
    {
        $user = $request->user();
        $address = UserAddress::find($request->input('address_id'));

        return $orderService->sote($user, $address, $request->input('remark'), $request->input('items'));
    }

    public function index(Request $request)
    {
        // 使用 with 方法预加载，避免 N+1 问题
        $orders = Order::query()
            ->with(['items.product', 'items.productSku'])
            ->where('user_id', $request->user()->id)
            ->orderBy('created_at', 'desc')
            ->paginate();

        return view('orders.index', ['orders' => $orders]);
    }

    public function show(Order $order, Request $request)
    {
        $this->authorize('own', $order);
        return view('orders.show', ['order' => $order->load(['items.productSku', 'items.product'])]);
    }
}