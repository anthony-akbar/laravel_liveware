<?php

use App\Http\Controllers\Api\V1\Admin\CourseApiController;

Route::group(['prefix' => 'v1', 'as' => 'api.', 'middleware' => ['auth:sanctum']], function () {
    // Course
    Route::apiResource('courses', CourseApiController::class);
});
