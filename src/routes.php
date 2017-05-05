<?php
Route::group(array('prefix'=>'api/v1', 'middleware' => ['web', 'auth']), function()
{
    Route::resource('company', '\timschwartz\Companies\controllers\CompanyController');
});

Route::group(array('middleware' => ['web', 'auth']), function()
{
    Route::get('/companies', '\timschwartz\Companies\controllers\CompanyController@dashboard');
});
?>
