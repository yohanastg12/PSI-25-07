<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:api']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Lessons
    Route::apiResource('lessons', 'LessonsApiController');

    // School Classes
    Route::apiResource('school-classes', 'SchoolClassesApiController');

    // Course
    Route::apiResource('course', 'CourseApiController');


});