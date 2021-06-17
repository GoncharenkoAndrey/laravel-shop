<?php
namespace app\Models\Filters\User;

use Illuminate\Database\Query\Builder;
use app\Services\Filters\Filterable;

class Search implements Filterable
{
    public static function apply(Builder $builder, $value){
        return $builder->where("name", $value);
    }

}

