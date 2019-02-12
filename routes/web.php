<?php
Route::get('/', function () { return redirect('/admin/home'); });


// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login')->name('auth.login');
$this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');

// Change Password Routes...
$this->get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
$this->patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index');
    Route::get('/tb07', 'Admin\ReportController@tb07');
    Route::get('/tb08', 'Admin\ReportController@tb08');
    Route::get('/tb-hiv', 'Admin\ReportController@tbhiv');
    Route::get('/calendar', 'Admin\SystemCalendarController@index'); 
  
    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    Route::resource('townships', 'Admin\TownshipsController');
    Route::post('townships_mass_destroy', ['uses' => 'Admin\TownshipsController@massDestroy', 'as' => 'townships.mass_destroy']);
    Route::post('townships_restore/{id}', ['uses' => 'Admin\TownshipsController@restore', 'as' => 'townships.restore']);
    Route::delete('townships_perma_del/{id}', ['uses' => 'Admin\TownshipsController@perma_del', 'as' => 'townships.perma_del']);
    Route::resource('patients', 'Admin\PatientsController');
    Route::post('patients_mass_destroy', ['uses' => 'Admin\PatientsController@massDestroy', 'as' => 'patients.mass_destroy']);
    Route::post('patients_restore/{id}', ['uses' => 'Admin\PatientsController@restore', 'as' => 'patients.restore']);
    Route::delete('patients_perma_del/{id}', ['uses' => 'Admin\PatientsController@perma_del', 'as' => 'patients.perma_del']);
    Route::resource('user_actions', 'Admin\UserActionsController');
    Route::resource('contact_companies', 'Admin\ContactCompaniesController');
    Route::post('contact_companies_mass_destroy', ['uses' => 'Admin\ContactCompaniesController@massDestroy', 'as' => 'contact_companies.mass_destroy']);
    Route::resource('contacts', 'Admin\ContactsController');
    Route::post('contacts_mass_destroy', ['uses' => 'Admin\ContactsController@massDestroy', 'as' => 'contacts.mass_destroy']);



 
});
