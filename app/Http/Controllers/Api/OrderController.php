<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Http\Resources\OrderResource;
use App\Repositories\OrderRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class OrderController extends Controller
{
    /**
     * @var OrderRepository
     */
    protected $orderRepository;

    /**
     * OrderController constructor.
     *
     * @param OrderRepository $orderRepository
     */
    public function __construct(OrderRepository $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    /**
     * Display a listing of the orders.
     *
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        $orders = $this->orderRepository->all();
        return OrderResource::collection($orders);
    }

    /**
     * Store a newly created order in storage.
     *
     * @param CreateOrderRequest $request
     * @return OrderResource
     */
    public function store(CreateOrderRequest $request): OrderResource
    {
        $order = $this->orderRepository->create($request->validated());
        return new OrderResource($order);
    }

    /**
     * Update the specified order in storage.
     *
     * @param UpdateOrderRequest $request
     * @param int $id
     * @return OrderResource
     */
    public function update(UpdateOrderRequest $request, int $id): OrderResource
    {
        $order = $this->orderRepository->update($id, $request->validated());
        return new OrderResource($order);
    }

    /**
     * Get order statistics.
     *
     * @return JsonResponse
     */
    public function stats(): JsonResponse
    {
        $stats = $this->orderRepository->getStats();
        return response()->json($stats);
    }
}
