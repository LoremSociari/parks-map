<?php

namespace App\Services;

use App\Models\Activity;
use App\Services\BaseService;

class ActivityService extends BaseService{
    public function __construct(Activity $model) {
        $this->model = $model;
    }
}