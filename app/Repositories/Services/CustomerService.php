<?php

namespace App\Repositories\Services;

use App\Models\Customer;
use App\Repositories\Interfaces\CustomerRepositoryInterface;
use App\Repositories\Services\Interfaces\CustomerServiceInterface;
use Illuminate\Database\Eloquent\Collection;

class CustomerService implements CustomerServiceInterface
{
    /**
     * @var CustomerRepositoryInterface
     */
    protected $customerRepository;
    
    /**
     * CustomerService constructor.
     *
     * @param CustomerRepositoryInterface $customerRepository
     */
    public function __construct(CustomerRepositoryInterface $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }
    
    /**
     * Get all customers
     * 
     * @return Collection
     */
    public function getAllCustomers()
    {
        return $this->customerRepository->all();
    }
    
    /**
     * Get customer by id
     * 
     * @param int $id
     * @return Customer
     */
    public function getCustomerById(int $id)
    {
        return $this->customerRepository->find($id);
    }
    
    /**
     * Create new customer
     * 
     * @param array $data
     * @return Customer
     */
    public function createCustomer(array $data)
    {
        return $this->customerRepository->create($data);
    }
    
    /**
     * Update customer
     * 
     * @param int $id
     * @param array $data
     * @return Customer
     */
    public function updateCustomer(int $id, array $data)
    {
        return $this->customerRepository->update($id, $data);
    }
    
    /**
     * Delete customer
     * 
     * @param int $id
     * @return bool
     */
    public function deleteCustomer(int $id)
    {
        return $this->customerRepository->delete($id);
    }
    
    /**
     * Find customer by email
     * 
     * @param string $email
     * @return Customer|null
     */
    public function findCustomerByEmail(string $email)
    {
        return $this->customerRepository->findByEmail($email);
    }
    
    /**
     * Get customers with their orders
     * 
     * @return Collection
     */
    public function getCustomersWithOrders()
    {
        return $this->customerRepository->getWithOrders();
    }
}
