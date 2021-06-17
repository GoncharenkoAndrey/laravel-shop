<?php
namespace app\Models\Filters\User;

use app\Services\Filters\Searchable;
use app\Services\Filters\BaseSearch;
use App\Models\User;

class UserSearch implements Searchable
{
    const MODEL = User::class;
    use BaseSearch;
}

