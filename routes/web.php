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
        return view('email.forgot-password');
    })->name('welcome');

   /* Route::get('/view-page', function (){
        return view('email.registration');
    })->name('welcome');*/

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

    Route::get('/forgot-password', [
        'as' => 'forgot-password',
        'uses' => 'Authentication\AuthenticationController@forgotPassword'
    ]);

    Route::get('/reset-password/{token}', [
        'as' => 'user.reset-password',
        'uses' => 'Authentication\AuthenticationController@resetPassword'
    ]);

    Route::post('/forgot-password-email', [
        'as' => 'forgot-password-email',
        'uses' => 'Authentication\AuthenticationController@forgotPasswordEmail'
    ]);

    Route::post('/final-change-password/{token}', [
        'as' => 'user.final-change-password',
        'uses' => 'Authentication\AuthenticationController@finalChangePassword'
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

    Route::get('/admin/users-management', [
        'as' => 'admin.users-management',
        'uses' => 'Admin\UserController@usersManagement'
    ])->middleware('checkAdmin');

    Route::post('/admin/send-message/{token}', [
        'as' => 'admin.send-message',
        'uses' => 'Admin\UserController@sendMessage'
    ])->middleware('checkAdmin');

    Route::post('/admin/edit-wallet/{token}', [
        'as' => 'admin.edit-wallet',
        'uses' => 'Admin\UserController@editWallet'
    ])->middleware('checkAdmin');

    Route::get('/admin/messages', [
        'as' => 'admin.messages',
        'uses' => 'Admin\ChatController@Messages'
    ])->middleware('checkAdmin');

    Route::post('/admin/reply-messages', [
        'as' => 'admin.reply-messages',
        'uses' => 'Admin\ChatController@replyMessage'
    ])->middleware('checkAdmin');

    Route::get('/admin/card-trade-transactions', [
        'as' => 'admin.card-trade-transactions',
        'uses' => 'Admin\TradeController@cardTradeTransactions'
    ])->middleware('checkAdmin');

    Route::get('/admin/coin-trade-transactions', [
        'as' => 'admin.coin-trade-transactions',
        'uses' => 'Admin\TradeController@coinTradeTransactions'
    ])->middleware('checkAdmin');

    Route::get('/admin/blog', [
        'as' => 'admin.blog',
        'uses' => 'Admin\BlogController@blog'
    ])->middleware('checkAdmin');

    Route::post('/admin/edit-blog/{id}', [
        'as' => 'admin.edit-blog',
        'uses' => 'Admin\BlogController@editBlog'
    ])->middleware('checkAdmin');

    Route::get('/admin/delete-blog/{id}', [
        'as' => 'admin.delete-blog',
        'uses' => 'Admin\BlogController@deleteBlog'
    ])->middleware('checkAdmin');

    Route::post('/admin/create-blog', [
        'as' => 'admin.create-blog',
        'uses' => 'Admin\BlogController@createBlog'
    ])->middleware('checkAdmin');

    Route::get('/admin/coin-rates', [
        'as' => 'admin.coin-rates',
        'uses' => 'Admin\RateController@coinRates'
    ])->middleware('checkAdmin');

    Route::get('/admin/view-coins', [
        'as' => 'admin.view-coins',
        'uses' => 'Admin\RateController@viewCoins'
    ])->middleware('checkAdmin');

    Route::get('/admin/view-cards', [
        'as' => 'admin.view-cards',
        'uses' => 'Admin\RateController@viewCards'
    ])->middleware('checkAdmin');

    Route::get('/admin/view-denominations', [
        'as' => 'admin.view-denominations',
        'uses' => 'Admin\RateController@viewDenominations'
    ])->middleware('checkAdmin');

    Route::post('/admin/edit-coin-rates/{token}', [
        'as' => 'admin.edit-coin-rate',
        'uses' => 'Admin\RateController@editCoinRate'
    ])->middleware('checkAdmin');

    Route::post('/admin/edit-denomination/{token}', [
        'as' => 'admin.edit-denomination',
        'uses' => 'Admin\RateController@editDenomination'
    ])->middleware('checkAdmin');

    Route::post('/admin/add-coin-rates', [
        'as' => 'admin.add-coin-rate',
        'uses' => 'Admin\RateController@addCoinRate'
    ])->middleware('checkAdmin');

    Route::post('/admin/add-denomination', [
        'as' => 'admin.add-denomination',
        'uses' => 'Admin\RateController@addDenomination'
    ])->middleware('checkAdmin');

    Route::post('/admin/add-coin', [
        'as' => 'admin.add-coin',
        'uses' => 'Admin\RateController@addCoin'
    ])->middleware('checkAdmin');

    Route::post('/admin/add-country', [
        'as' => 'admin.add-country',
        'uses' => 'Admin\RateController@addCountry'
    ])->middleware('checkAdmin');

    Route::post('/admin/edit-coin/{token}', [
        'as' => 'admin.edit-coin',
        'uses' => 'Admin\RateController@editCoin'
    ])->middleware('checkAdmin');

    Route::post('/admin/edit-country/{token}', [
        'as' => 'admin.edit-country',
        'uses' => 'Admin\RateController@editCountry'
    ])->middleware('checkAdmin');

    Route::get('/admin/view-platforms', [
        'as' => 'admin.view-platforms',
        'uses' => 'Admin\RateController@viewPlatform'
    ])->middleware('checkAdmin');

    Route::get('/admin/view-countries', [
        'as' => 'admin.view-countries',
        'uses' => 'Admin\RateController@viewCountry'
    ])->middleware('checkAdmin');

    Route::post('/admin/add-platform', [
        'as' => 'admin.add-platform',
        'uses' => 'Admin\RateController@addPlatform'
    ])->middleware('checkAdmin');

    Route::post('/admin/add-card', [
        'as' => 'admin.add-card',
        'uses' => 'Admin\RateController@addCard'
    ])->middleware('checkAdmin');

    Route::post('/admin/add-card-rate', [
        'as' => 'admin.add-card-rate',
        'uses' => 'Admin\RateController@addCardRate'
    ])->middleware('checkAdmin');

    Route::post('/admin/edit-platform/{token}', [
        'as' => 'admin.edit-platform',
        'uses' => 'Admin\RateController@editPlatform'
    ])->middleware('checkAdmin');

    Route::post('/admin/edit-card/{token}', [
        'as' => 'admin.edit-card',
        'uses' => 'Admin\RateController@editCard'
    ])->middleware('checkAdmin');

    Route::post('/admin/edit-card-rate/{token}', [
        'as' => 'admin.edit-card-rate',
        'uses' => 'Admin\RateController@editCardRate'
    ])->middleware('checkAdmin');

    Route::post('/admin/add-ecode', [
        'as' => 'admin.add-ecode',
        'uses' => 'Admin\EcodeController@addEcode'
    ])->middleware('checkAdmin');

    Route::post('/admin/edit-ecode/{token}', [
        'as' => 'admin.edit-ecode',
        'uses' => 'Admin\EcodeController@editEcode'
    ])->middleware('checkAdmin');

    Route::get('/admin/view-card-rates', [
        'as' => 'admin.view-card-rates',
        'uses' => 'Admin\RateController@viewCardRates'
    ])->middleware('checkAdmin');

    Route::get('/admin/view-ecodes', [
        'as' => 'admin.view-ecodes',
        'uses' => 'Admin\EcodeController@viewEcode'
    ])->middleware('checkAdmin');



    Route::get('/admin/user-wallets', [
        'as' => 'admin.user-wallets',
        'uses' => 'Admin\WalletRequestController@userWallets'
    ]);

    Route::get('/admin/approve-wallet-payment-request/{withdrawal}', [
        'as' => 'admin.approve-wallet-payment-request',
        'uses' => 'Admin\WalletRequestController@approveWalletPaymentRequest'
    ]);

    Route::post('/admin/cancellation-message/{withdrawal}/{user}', [
        'as' => 'admin.cancellation-message',
        'uses' => 'Admin\WalletRequestController@cancellationMessage'
    ]);




