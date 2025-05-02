<?php

namespace App\Repositories;

interface RepositoryInterface
{
    /**
     * Get all resources
     * 
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function all();

    /**
     * Get resource by id
     * 
     * @param int $id
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function find($id);

    /**
     * Create new resource
     * 
     * @param array $data
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function create(array $data);

    /**
     * Update resource
     * 
     * @param int $id
     * @param array $data
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function update($id, array $data);

    /**
     * Delete resource
     * 
     * @param int $id
     * @return bool
     */
    public function delete($id);
}
