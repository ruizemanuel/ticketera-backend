<?php

namespace App\Filters;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class TicketFilter extends ApiFilter {
    protected $safeParams = [
        'isDone' => ['eq'],
        'difficultyLevel' => ['eq'],
        'createdAt' => ['eq','gt','lt'],

    ];
    protected $columnMap = [
        'isDone' => 'is_done',
        'difficultyLevel' => 'difficulty_level',
        'createdAt' => 'created_at'
    ];
    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>='
    ];
  
}