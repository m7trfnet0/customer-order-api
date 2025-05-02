<?php

namespace App\Repositories;

use App\Models\Order;
use Illuminate\Support\Facades\DB;

class OrderRepository extends BaseRepository
{
    /**
     * OrderRepository constructor.
     *
     * @param Order $model
     */
    public function __construct(Order $model)
    {
        parent::__construct($model);
    }

    /**
     * Get order statistics
     *
     * @return array
     */
    public function getStats()
    {
        $totalRevenue = $this->model->sum(DB::raw('price * quantity'));
        
        $ordersByStatus = $this->model
            ->select('status', DB::raw('count(*) as count'))
            ->groupBy('status')
            ->get()
            ->pluck('count', 'status')
            ->toArray();
            
        return [
            'total_revenue' => $totalRevenue,
            'orders_by_status' => $ordersByStatus
        ];
    }
}
