<?php

use App\Http\Controllers\Auth\ChangePasswordController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DebtController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\ExpenseTypeController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\IncomeTypeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReceivableController;
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

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();


// Income Type
Route::group(['middleware' => 'auth'], function () {

    // Incomes
    Route::resource('income_types', IncomeTypeController::class)->except('show');
    Route::resource('incomes', IncomeController::class)->except('show');

    // Expense
    Route::resource('expense_types', ExpenseTypeController::class);
    Route::resource('expenses', ExpenseController::class);

    // Debt
    Route::resource('debts', DebtController::class);

    // Receivable
    Route::resource('receivables', ReceivableController::class);

    // dashboard
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');


    Route::resource('change_password', ChangePasswordController::class)->only('edit', 'update');
});
