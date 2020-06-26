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

/*Route::get('/view-page', function (){
    return view('pages.blog-show');
})->name('welcome');*/

    Route::get('/view-page', function (){
        return view('email.registration');
    })->name('welcome');

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

    Route::post('/view-rate', [
        'as' => 'view-rate',
        'uses' => 'Trade\TradeController@viewRate'
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

    Route::resource('blogs', 'BlogController');


// Admin Route
    Route::get('/admin/dashboard', [
        'as' => 'admin.dashboard',
        'uses' => 'Admin\AdminController@adminDashboard'
    ])->middleware('checkAdmin');

    Route::get('/admin/card-receipt-upload', [
        'as' => 'admin.card-receipt-upload',
        'uses' => 'Admin\AdminController@adminViewCardReceipt'
    ])->middleware('checkAdmin');

    Route::get('/admin/user-details/{token}', [
        'as' => 'admin.user-details',
        'uses' => 'Admin\AdminController@userDetails'
    ])->middleware('checkAdmin');

    Route::get('/admin/make-admin/{token}', [
        'as' => 'admin.make-admin',
        'uses' => 'Admin\AdminController@makeAdmin'
    ])->middleware('checkAdmin');

    Route::get('/admin/remove-admin/{token}', [
        'as' => 'admin.remove-admin',
        'uses' => 'Admin\AdminController@removeAdmin'
    ])->middleware('checkAdmin');

    Route::post('/admin/activate-coin-buying/{token}', [
        'as' => 'admin.activate_coin_buying_transaction',
        'uses' => 'Admin\AdminController@confirmCoinBuying'
    ])->middleware('checkAdmin');

    Route::post('/admin/activate-coin-selling/{token}', [
        'as' => 'admin.activate_coin_selling_transaction',
        'uses' => 'Admin\AdminController@confirmCoinSelling'
    ])->middleware('checkAdmin');

    Route::post('/admin/activate-card-selling/{token}', [
        'as' => 'admin.activate_card_selling_transaction',
        'uses' => 'Admin\AdminController@confirmCardSelling'
    ])->middleware('checkAdmin');

    Route::post('/admin/negotiate-card-rate/{token}', [
        'as' => 'admin.negotiate-card-rate',
        'uses' => 'Admin\AdminController@negotiateCardRate'
    ])->middleware('checkAdmin');

    Route::post('/admin/cancel-card-transaction/{token}', [
        'as' => 'admin.cancel-card-transaction',
        'uses' => 'Admin\AdminController@cancelCardTransaction'
    ])->middleware('checkAdmin');

    Route::get('/admin/activate-coin-wallet/{token}', [
        'as' => 'admin.activate_coin_wallet_transaction',
        'uses' => 'Admin\AdminController@confirmCoinSellingWallet'
    ])->middleware('checkAdmin');

    Route::get('/admin/approve-walletcard-payment/{token}', [
        'as' => 'admin.approve-walletcard-payment',
        'uses' => 'Admin\AdminController@confirmCardSellingWallet'
    ])->middleware('checkAdmin');

    Route::get('/admin/card-images-upload/{token}', [
        'as' => 'admin.card-images-upload',
        'uses' => 'Admin\AdminController@viewCardImages'
    ])->middleware('checkAdmin');

Route::get('/admin/card-trade-transactions', [
    'as' => 'admin.card-trade-transactions',
    'uses' => 'Admin\AdminController@cardTradeTransactions'
]);

Route::get('/admin/coin-trade-transactions', [
    'as' => 'admin.coin-trade-transactions',
    'uses' => 'Admin\AdminController@coinTradeTransactions'
]);

Route::get('/admin/card-rates', [
    'as' => 'admin.card-rates',
    'uses' => 'Admin\AdminController@cardRates'
]);

Route::get('/admin/coin-rates', [
    'as' => 'admin.coin-rates',
    'uses' => 'Admin\AdminController@coinRates'
]);

Route::get('/admin/users-management', [
    'as' => 'admin.users-management',
    'uses' => 'Admin\AdminController@usersManagement'
]);

Route::get('/admin/messages', [
    'as' => 'admin.messages',
    'uses' => 'Admin\AdminController@messages'
]);

Route::get('/admin/blog', [
    'as' => 'admin.blog',
    'uses' => 'Admin\AdminController@blog'
]);

Route::get('/admin/gift-card-management', [
    'as' => 'admin.gift-card-management',
    'uses' => 'Admin\AdminController@giftCardManagement'
]);

