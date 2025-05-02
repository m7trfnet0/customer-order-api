<?php

namespace App\Repositories\Services;

use App\Models\Order;
use App\Repositories\Interfaces\OrderRepositoryInterface;
use App\Repositories\Services\Interfaces\OrderServiceInterface;
use Illuminate\Database\Eloquent\Collection;

class OrderService implements OrderServiceInterface
{
    /**
     * @var OrderRepositoryInterface
     */
    protected $orderRepository;
    
    /**
     * OrderService constructor.
     *
     * @param OrderRepositoryInterface $orderRepository
     */
    public function __construct(OrderRepositoryInterface $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }
    
    /**
     * Get all orders
     * 
     * @return Collection
     */
    public function getAllOrders()
    {
        return $this->orderRepository->all();
    }
    
    /**
     * Get order by id
     * 
     * @param int $id
     * @return Order
     */
    public function getOrderById(int $id)
    {
        return $this->orderRepository->find($id);
    }
    
    /**
     * Create new order
     * 
     * @param array $data
     * @return Order
     */
    public function createOrder(array $data)
    {
        return $this->orderRepository->create($data);
    }
    
    /**
     * Update order
     * 
     * @param int $id
     * @param array $data
     * @return Order
     */
    public function updateOrder(int $id, array $data)
    {
        return $this->orderRepository->update($id, $data);
    }
    
    /**
     * Delete order
     * 
     * @param int $id
     * @return bool
     */
    public function deleteOrder(int $id)
    {
        return $this->orderRepository->delete($id);
    }
    
    /**
     * Get order statistics
     * 
     * @return array
     */
    public function getOrderStats()
    {
        return $this->orderRepository->getStats();
    }
    
    /**
     * Get orders by customer id
     * 
     * @param int $customerId
     * @return Collection
     */
    public function getOrdersByCustomerId(int $customerId)
    {
        return $this->orderRepository->getByCustomerId($customerId);
    }
    
    /**
     * Get orders by status
     * 
     * @param string $status
     * @return Collection
     */
    public function getOrdersByStatus(string $status)
    {
        return $this->orderRepository->getByStatus($status);
    }
}
