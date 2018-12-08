<?php






//test routes


Route::get('/test', function () {
  return 'hello';
});


//site public routes
Route::get('/', 'SiteController@index')->name('index');
Route::get('/people', 'SiteController@people')->name('people');
Route::get('/category/{id}/posts', 'SiteController@categoryPosts')->name('category-posts');
Route::get('/show-post/{id}', 'SiteController@showPost')->name('show-post');
Route::get('/contact', 'SiteController@contact')->name('contact');
Route::post('/send-ticket', 'SiteController@sendTicket')->name('send-ticket');


//user auth routes
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
//Auth::routes();



//admin dashboard routes
Route::get('/admin-dashboard', 'DashboardController@dashboard')->name('admin-dashboard');
Route::get('/admin-add-people', 'DashboardController@addPeople')->name('admin-add-people');
Route::get('/admin-add-post', 'DashboardController@addPost')->name('admin-add-post');
Route::get('/admin-navbar', 'DashboardController@navbar')->name('admin-navbar');
Route::get('/admin-post-edit', 'DashboardController@postEdit')->name('admin-post-edit');
Route::get('/admin-posts', 'DashboardController@posts')->name('admin-posts');
Route::post('/admin-change-password', 'DashboardController@changePassword')->name('admin-change-password');
Route::post('/admin-register-people', 'DashboardController@registerPeople')->name('admin-register-people');
Route::get('/admin-remove-people/{id}', 'DashboardController@removePeople')->name('admin-remove-people');
Route::post('/admin-add-category', 'DashboardController@addCategory')->name('admin-add-category');
Route::get('/admin-remove-category/{id}', 'DashboardController@removeCategory')->name('admin-remove-category');
Route::post('/admin-insert-post', 'DashboardController@insertPost')->name('admin-insert-post');
Route::get('/admin-remove-post/{id}', 'DashboardController@removePost')->name('admin-remove-post');
Route::get('/admin-edit-post-form/{id}', 'DashboardController@editPostForm')->name('admin-edit-post-form');
Route::post('/admin-edit-post', 'DashboardController@editPost')->name('admin-edit-post');
