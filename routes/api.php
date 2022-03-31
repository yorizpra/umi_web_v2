<?php

use App\Http\Controllers\API\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\MasterDeliveryServiceAPIController;
use App\Http\Controllers\API\MasterBusinessCategoryAPIController;
use App\Http\Controllers\API\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('addMasterCategoryBusiness', [MasterBusinessCategoryAPIController::class, 'store']);
Route::get('getMasterCategoryBusiness', [MasterBusinessCategoryAPIController::class, 'index']);
// MasterDeliveryServiceAPIController
Route::get('getMasterDeliveryService', [MasterDeliveryServiceAPIController::class, 'index']);

// AUTH
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function (){
});


Route::resource('master_product_categories', App\Http\Controllers\API\MasterProductCategoryAPIController::class);


Route::resource('master_business_categories', App\Http\Controllers\API\MasterBusinessCategoryAPIController::class);


Route::resource('master_status_businesses', App\Http\Controllers\API\MasterStatusBusinessAPIController::class);


Route::resource('master_units', App\Http\Controllers\API\MasterUnitAPIController::class);


Route::resource('master_privileges', App\Http\Controllers\API\MasterPrivilegeAPIController::class);


Route::resource('master_provinces', App\Http\Controllers\API\MasterProvinceAPIController::class);


Route::resource('master_delivery_services', App\Http\Controllers\API\MasterDeliveryServiceAPIController::class);


Route::resource('master_payment_methods', App\Http\Controllers\API\MasterPaymentMethodAPIController::class);


Route::resource('master_transaction_categories', App\Http\Controllers\API\MasterTransactionCategoryAPIController::class);

Route::resource('master_status_users', App\Http\Controllers\API\MasterStatusUserAPIController::class);


Route::resource('users', App\Http\Controllers\API\UserAPIController::class);


Route::resource('businesses', App\Http\Controllers\API\BusinessAPIController::class);


Route::resource('business_files', App\Http\Controllers\API\BusinessFileAPIController::class);


Route::resource('business_categories', App\Http\Controllers\API\BusinessCategoryAPIController::class);


Route::resource('cities', App\Http\Controllers\API\CityAPIController::class);


Route::resource('sub_districts', App\Http\Controllers\API\SubDistrictAPIController::class);


Route::resource('addresses', App\Http\Controllers\API\AddressAPIController::class);


Route::resource('products', App\Http\Controllers\API\ProductAPIController::class);


Route::resource('product_categories', App\Http\Controllers\API\ProductCategoryAPIController::class);


Route::resource('open_hours', App\Http\Controllers\API\OpenHourAPIController::class);


Route::resource('business_delivery_services', App\Http\Controllers\API\BusinessDeliveryServiceAPIController::class);


Route::resource('shipping_cost_variables', App\Http\Controllers\API\ShippingCostVariableAPIController::class);


Route::resource('shipping_useds', App\Http\Controllers\API\ShippingUsedAPIController::class);


Route::resource('discounts', App\Http\Controllers\API\DiscountAPIController::class);


Route::resource('sales_delivery_services', App\Http\Controllers\API\SalesDeliveryServiceAPIController::class);


Route::resource('product_files', App\Http\Controllers\API\ProductFileAPIController::class);


Route::resource('business_payment_methods', App\Http\Controllers\API\BusinessPaymentMethodAPIController::class);
