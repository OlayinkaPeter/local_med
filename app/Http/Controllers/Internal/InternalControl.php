<?php

namespace App\Http\Controllers\Internal;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class InternalControl extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
