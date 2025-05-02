<?php

namespace App\Repositories\Services\Interfaces;

use App\Models\Order;
use Illuminate\Database\Eloquent\Collection;

interface OrderServiceInterface
{
    /**
     * Get all orders
     * 
     * @return Collection
     */
    public function getAllOrders();
    
    /**
     * Get order by id
     * 
     * @param int $id
     * @return Order
     */
    public function getOrderById(int $id);
    
    /**
     * Create new order
     * 
     * @param array $data
     * @return Order
     */
    public function createOrder(array $data);
    
    /**
     * Update order
     * 
     * @param int $id
     * @param array $data
     * @return Order
     */
    public function updateOrder(int $id, array $data);
    
    /**
     * Delete order
     * 
     * @param int $id
     * @return bool
     */
    public function deleteOrder(int $id);
    
    /**
     * Get order statistics
     * 
     * @return array
     */
    public function getOrderStats();
    
    /**
     * Get orders by customer id
     * 
     * @param int $customerId
     * @return Collection
     */
    public function getOrdersByCustomerId(int $customerId);
    
    /**
     * Get orders by status
     * 
     * @param string $status
     * @return Collection
     */
    public function getOrdersByStatus(string $status);
}
