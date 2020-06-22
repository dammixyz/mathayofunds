<?php

use Illuminate\Support\Facades\Route;

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
    Route::get('/view-page', function (){
        return view('pages.card-rates');
    });
    Route::get('/', [
        'as' => 'homepage',
        'uses' => 'Homepage\HomepageController@Homepage'
    ]);

    Route::get('/faqs', [
        'as' => 'faqs',
        'uses' => 'Homepage\HomepageController@Faqs'
    ]);

    Route::get('/view-card-rates', [
        'as' => 'view-card-rates',
        'uses' => 'Homepage\HomepageController@viewCardRate'
    ]);

    Route::get('/view-coin-rates', [
        'as' => 'view-coin-rates',
        'uses' => 'Homepage\HomepageController@viewCoinRate'
    ]);

    Route::get('/about-us', [
        'as' => 'about-us',
        'uses' => 'Homepage\HomepageController@aboutUs'
    ]);

    Route::get('/logout', [
        'as' => 'logout',
        'uses' => 'Authentication\AuthenticationController@Logout'
    ]);

    Route::post('/newsletter-subscription', [
        'as' => 'newsletter',
        'uses' => 'Newsletter\NewsletterController@newsletterSubscription'
    ]);

    Route::get('/login', [
        'as' => 'login',
        'uses' => 'Authentication\AuthenticationController@Authenticate'
    ]);

    Route::get('/register', [
        'as' => 'register',
        'uses' => 'Authentication\AuthenticationController@Authenticate'
    ]);

    Route::post('/user-login', [
        'as' => 'user.login',
        'uses' => 'Authentication\AuthenticationController@userLogin'
    ]);

    Route::post('/user-registration', [
        'as' => 'user.registration',
        'uses' => 'Authentication\AuthenticationController@userRegistration'
    ]);

    Route::get('/trade-coin', [
        'as' => 'user.trade-coin',
        'uses' => 'Trade\TradeController@tradeCoin'
    ])->middleware('checkAuth');

    Route::post('/submit-sell-coin-form', [
        'as' => 'submit-sell-coin-form',
        'uses' => 'Trade\TradeController@submitSellCoinForm'
    ])->middleware('checkAuth');

    Route::post('/submit-buy-coin-form', [
        'as' => 'submit-buy-coin-form',
        'uses' => 'Trade\TradeController@submitBuyCoinForm'
    ])->middleware('checkAuth');

    Route::get('/trade-card', [
        'as' => 'user.trade-card',
        'uses' => 'Trade\TradeController@tradeCard'
    ])->middleware('checkAuth');

    Route::post('/submit-trade-card-form', [
        'as' => 'submit-trade-card-form',
        'uses' => 'Trade\TradeController@submitTradeCardForm'
    ])->middleware('checkAuth');

    /*Route::get('/dashboard', function (){
       return view('Pages.dashboard2');
    });*/

    //dashboard
    Route::get('/dashboard', [
        'as' => 'user.dashboard',
        'uses' => 'Dashboard\DashboardController@Dashboard'
    ])->middleware('checkAuth');

    Route::get('/profile', [
        'as' => 'user.profile',
        'uses' => 'Dashboard\DashboardController@Profile'
    ])->middleware('checkAuth');

    Route::post('/user/update-bank-details', [
        'as' => 'user.update-bank-details',
        'uses' => 'Dashboard\DashboardController@updateBankDetails'
    ])->middleware('checkAuth');

    Route::post('/user/update-profile-details', [
        'as' => 'user.update-profile-details',
        'uses' => 'Dashboard\DashboardController@updateProfileDetails'
    ])->middleware('checkAuth');

    Route::get('/my-messages', [
        'as' => 'user.message',
        'uses' => 'Dashboard\DashboardController@myMessage'
    ])->middleware('checkAuth');

    Route::post('/user-send-chat', [
        'as' => 'user.send-chat',
        'uses' => 'Dashboard\DashboardController@sendChat'
    ])->middleware('checkAuth');

    Route::get('/my-coin-transactions', [
        'as' => 'user.coin-transactions',
        'uses' => 'Dashboard\DashboardController@myCoinTransactions'
    ])->middleware('checkAuth');

    Route::get('/my-card-transactions', [
        'as' => 'user.card-transactions',
        'uses' => 'Dashboard\DashboardController@myCardTransactions'
    ])->middleware('checkAuth');

    Route::get('/user-approve-transaction/{token}', [
        'as' => 'user.approve-transaction',
        'uses' => 'Dashboard\DashboardController@userApprovalTransaction'
    ])->middleware('checkAuth');

    Route::get('/user-cancel-transaction/{token}', [
        'as' => 'user.cancel-transaction',
        'uses' => 'Dashboard\DashboardController@userCancelTransaction'
    ])->middleware('checkAuth');

    Route::get('/view-uploaded-resources/{token}', [
        'as' => 'view-uploaded-resources',
        'uses' => 'Dashboard\DashboardController@viewUploadedResources'
    ])->middleware('checkAuth');

    Route::get('/withdrawal-request', [
        'as' => 'user.withdrawal-request',
        'uses' => 'Dashboard\DashboardController@withdrawalRequest'
    ])->middleware('checkAuth');

    Route::post('/finalize-withdrawal', [
        'as' => 'user.finalize-withdrawal',
        'uses' => 'Dashboard\DashboardController@finalizeWithdrawal'
    ])->middleware('checkAuth');

    Route::post('/leave-review', [
        'as' => 'leave-review',
        'uses' => 'Dashboard\DashboardController@leaveReview'
    ])->middleware('checkAuth');

    Route::get('/view-withdrawal-history/{token}', [
        'as' => 'user.withdrawal-histories',
        'uses' => 'Dashboard\DashboardController@withdrawalHistories'
    ])->middleware('checkAuth');
