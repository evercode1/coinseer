<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Admin route

Route::get('/admin', 'AdminController@index')->name('admin');

// All Articles Route

Route::get('all-articles', 'ArticlesController@index');

// All Video Route

Route::get('all-videos', 'AllVideosController@index');
Route::get('all-videos/{id}-{slug?}', 'AllVideosController@show')->name('all-videos.show');
//Route::get('all-videos/{id}', 'AllVideosController@show')->name('all-videos.show');

// Api routes

Route::get('api/about-data', 'ApiController@aboutData');
Route::get('api/alarm-data', 'ApiController@alarmData');
Route::get('api/all-books-data', 'ApiController@allBooksData');
Route::get('api/all-article-data', 'ApiController@allArticleData');
Route::get('api/all-influencers', 'ApiController@allInfluencersData');
Route::get('api/all-video-data', 'ApiController@allVideoData');
Route::get('api/alarm-support-data', 'ApiController@alarmSupportData');
Route::get('api/archives', 'ApiController@archives');
Route::get('api/article-list-data', 'ApiController@articleListData');
Route::get('api/blog-resource-data', 'ApiController@blogResourceData');
Route::get('api/book-data', 'ApiController@bookData');
Route::get('api/category-data', 'ApiController@categoryData');
Route::get('api/category-list', 'ApiController@categoryList');
Route::get('api/closed-contact-data', 'ApiController@closedContactData');
Route::get('api/contact-data', 'ApiController@ContactData');
Route::get('api/contact-topic-data', 'ApiController@ContactTopicData');
Route::get('api/content-data', 'ApiController@ContentData');
Route::get('api/content-list', 'ApiController@ContentList');
Route::get('api/exchange-list-data', 'ApiController@exchangeListData');
Route::get('api/featured-book', 'ApiController@featuredBook');
Route::get('api/influencer-data', 'ApiController@influencerData');
Route::get('api/influencer-list', 'ApiController@influencerList');
Route::get('api/level-data', 'ApiController@levelData');
Route::get('api/open-contact-data', 'ApiController@openContactData');
Route::get('api/post-pie-chart', 'ApiController@pieChartData');
Route::get('api/post-chart', 'ApiController@postChartData');
Route::get('api/post-data', 'ApiController@postData');
Route::get('api/resource-type-data', 'ApiController@resourceTypeData');
Route::get('api/signature-data', 'ApiController@signatureData');
Route::get('api/site-list-data', 'ApiController@siteListData');
Route::get('api/total-books', 'ApiController@totalBooks');
Route::get('api/total-influencers', 'ApiController@totalInfluencers');
Route::get('api/total-posts', 'ApiController@totalPosts');
Route::get('api/total-resources', 'ApiController@totalResources');
Route::get('api/total-users', 'ApiController@totalUsers');
Route::get('api/total-videos', 'ApiController@totalVideos');
Route::get('api/user-data', 'ApiController@userData');
Route::get('api/videos-by-category-data', 'ApiController@videosByCategoryData');
Route::get('api/videos-by-level-data', 'ApiController@videosByLevelData');
Route::get('api/videos-by-category-list-data', 'ApiController@videosByCategoryListData');
Route::get('api/videos-by-level-list-data', 'ApiController@videosByLevelListData');
Route::get('api/video-data', 'ApiController@videoData');
Route::get('api/video-chart', 'ApiController@videoChartData');
Route::get('api/video-list-data', 'ApiController@videoListData');
Route::get('api/video-pie-chart', 'ApiController@videoPieChartData');
Route::get('api/wallet-list-data', 'ApiController@walletListData');
Route::get('api/warning-data/{id}', 'ApiController@warningData');


// Authentication routes

Route::get('login', 'Auth\AuthController@showLoginForm')->name('login');
Route::post('login', 'Auth\AuthController@login');
Route::post('logout', 'Auth\AuthController@logout')->name('logout');

// Blog Resource Routes

Route::post('blog-resource-delete/{blogresource}', 'BlogResourceController@destroy');

Route::resource('/blogresource', 'BlogResourceController', ['except' => ['destroy']]);

// Book Routes

Route::resource('book', 'BookController');

// Category Routes

Route::post('category-delete/{category}', 'CategoryController@destroy');

Route::resource('category', 'CategoryController');

// Contact Routes

Route::post('/contact-delete', 'ContactController@destroy')->name('contact.destroy');

Route::resource('/contact', 'ContactController', ['except' => ['destroy']]);

Route::get('/open-contacts', 'OpenContactController@index')->name('contact.open');

Route::get('/closed-contacts', 'ClosedContactController@index');

Route::post('/contact-topic-delete', 'ContactController@destroy')->name('contact-topic.destroy');

Route::resource('/contact-topic', 'ContactTopicController', ['except' => ['destroy']]);

// Content Routes

Route::post('content-delete/{content}', 'ContentController@destroy');

Route::resource('/content', 'ContentController', ['except' => ['destroy']]);

// Influencer Routes

Route::get('all-influencers', 'AllInfluencersController@index');

Route::post('influencer-delete/{influencer}', 'InfluencerController@destroy');

Route::resource('influencer', 'InfluencerController', ['except' => ['destroy']]);

// Category Routes

Route::post('level-delete/{level}', 'LevelController@destroy');

Route::resource('level', 'LevelController');

// Messages route

Route::get('support-messages', 'MessagesController@index');

Route::get('support-messages-show/{message}', 'MessagesController@show');

// Pages Routes

Route::get('/', 'PagesController@index')->name('pages.index');

Route::get('/about', 'PagesController@about')->name('pages.about');

Route::get('/privacy-policy', 'PagesController@privacy')->name('pages.privacy');

Route::get('/terms-of-service', 'PagesController@terms')->name('pages.terms');

// Password Reset Routes...

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');


// Post Routes

Route::get('post-by-category/{id}', 'PostsByCategoryController@index')->name('post.by-category');

Route::get('post-by-date/{date}', 'PostsByDateController@index')->name('post.by-date');

Route::post('post-delete/{post}', 'PostController@destroy')->name('post.destroy');

Route::get('post/create',  'PostController@create')->name('post.create');

Route::get('post/{post}-{slug?}', 'PostController@show')->name('post.show');

Route::resource('post', 'PostController', ['except' => ['show', 'create', 'destroy']]);

// Registration routes

Route::get('register', 'Auth\AuthController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\AuthController@register');

// Reply Routes

Route::resource('reply', 'ReplyController');

// Resource Type Routes

Route::post('resource-type/{resourcetype}', 'ResourceTypeController@destroy');

Route::resource('resource-type', 'ResourceTypeController', ['except' => ['destroy']]);

// Search Route

Route::post('/search', 'SearchController@index');

// Settings routes

Route::get('settings', 'SettingsController@edit');

Route::post('settings', 'SettingsController@update')->name('user-update');

// Socialite routes

Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');

Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');


// Test Routes

Route::get('test', 'TestController@index');


// Unsubscribe Routes

Route::get('/unsubscribe', 'UnsubscribeController@edit')->name('unsubscribe');
Route::post('/unsubscribe', 'UnsubscribeController@store')->name('unsubscribe-store');
Route::get('/unsubscribe/confirmation', 'UnsubscribeController@confirm')->name('unsubscribe-confirmation');

// User routes

Route::resource('user', 'UserController');

// Video Routes

Route::get('videos-by-category/{id}', 'VideosByCategoryController@index');

Route::get('videos-by-level/{id}', 'VideosByLevelController@index');

Route::post('video-delete/{video}', 'VideoController@destroy');

Route::resource('/video', 'VideoController', ['except' => ['destroy']]);

