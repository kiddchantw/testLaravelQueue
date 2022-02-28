
##參考做法
- https://pandalab.org/articles/107
- https://medium.com/@d101201007/laravel-queue%E9%9A%8A%E5%88%97%E5%85%A5%E9%96%80%E4%BB%8B%E7%B4%B9-%E6%8C%87%E4%BB%A4%E6%95%99%E5%AD%B8-use-laravel-queue-ad3699c76b81


##步驟
- php artisan queue:table
- php artisan make:model Task -rmc 
- php artisan make:job addTask
- 建立 route
  - Route::get('/jobs/dispatch','App\Http\Controllers\Controller@doDispatch');
- php artisan queue:work


##bug

addTask 的 handle 裡的code執行。



