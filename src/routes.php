<?php
Route::group(array('prefix'=>'api/v1', 'middleware' => ['web', 'auth']), function()
{
    Route::resource('company', '\timschwartz\Companies\controllers\CompanyController');
});
?>
