<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Task;
use Illuminate\Support\Facades\Log;


class addTask implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    
    protected $inputString;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(String $inputString)
    {
        Log::info('add task __construct');
        $this->inputString = $inputString;

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        
        Log::info('add task handle');

        $newTask = new Task();
        $input = ($this->inputString) ? $this->inputString  :null;
        $newTask->note = "add task queue $input";
        $newTask->save();
    }
}
