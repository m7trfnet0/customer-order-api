<?php

namespace App\Repositories\Interfaces;

use App\Models\Customer;

interface CustomerRepositoryInterface extends RepositoryInterface
{
    /**
     * Find customer by email
     * 
     * @param string $email
     * @return Customer|null
     */
    public function findByEmail(string $email);
    
    /**
     * Get customers with their orders
     * 
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getWithOrders();
}
