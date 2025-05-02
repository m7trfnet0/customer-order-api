<?php

namespace App\Repositories\Services\Interfaces;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Collection;

interface CustomerServiceInterface
{
    /**
     * Get all customers
     * 
     * @return Collection
     */
    public function getAllCustomers();
    
    /**
     * Get customer by id
     * 
     * @param int $id
     * @return Customer
     */
    public function getCustomerById(int $id);
    
    /**
     * Create new customer
     * 
     * @param array $data
     * @return Customer
     */
    public function createCustomer(array $data);
    
    /**
     * Update customer
     * 
     * @param int $id
     * @param array $data
     * @return Customer
     */
    public function updateCustomer(int $id, array $data);
    
    /**
     * Delete customer
     * 
     * @param int $id
     * @return bool
     */
    public function deleteCustomer(int $id);
    
    /**
     * Find customer by email
     * 
     * @param string $email
     * @return Customer|null
     */
    public function findCustomerByEmail(string $email);
    
    /**
     * Get customers with their orders
     * 
     * @return Collection
     */
    public function getCustomersWithOrders();
}
