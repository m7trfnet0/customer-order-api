<?php

namespace App\Repositories\Interfaces;

interface OrderRepositoryInterface extends RepositoryInterface
{
    /**
     * Get order statistics
     * 
     * @return array
     */
    public function getStats();
    
    /**
     * Get orders by customer id
     * 
     * @param int $customerId
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getByCustomerId(int $customerId);
    
    /**
     * Get orders by status
     * 
     * @param string $status
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getByStatus(string $status);
}
