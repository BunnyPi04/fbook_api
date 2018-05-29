<?php

namespace App\Repositories;

use App\Eloquent\LogReputation;
use App\Contracts\Repositories\LogReputationRepository;
use Illuminate\Pagination\Paginator;
use App\Exceptions\Api\ActionException;
use App\Exceptions\Api\NotFoundException;
use App\Exceptions\Api\UnknownException;
use Log;

class LogReputationRepositoryEloquent extends AbstractRepositoryEloquent implements LogReputationRepository
{
    public function model()
    {
        return new LogReputation;
    }

    public function addLog($logId, $logType, $point)
    {
        $log = $this->model()->create([
                'log_id' => $logId,
                'log_type' => $logType,
                'point' => $point,
            ]);

        return $log;
    }
}
