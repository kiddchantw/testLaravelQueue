<?php

namespace App\Http\Controllers;

use App\Jobs\addTask;
use App\Jobs\TestOne;
use App\Jobs\testTwo;
use App\Models\Task;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Log;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function doDispatch(Request $request)
    {
        Log::info("doDispatch");
        
        // $newTask = new Task();
        // $newTask->note = "add task doDispatch";
        // $newTask->save();

        dispatch(new addTask("test123"));
        dispatch(new addTask("test456"))->delay(2);

    }
}
