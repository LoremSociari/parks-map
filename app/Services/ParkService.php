<?php

namespace App\Services;

use App\Models\Park;
use App\Services\BaseService;

class ParkService extends BaseService{
    public function __construct(Park $model) {
        $this->model = $model;
    }
}