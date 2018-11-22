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
Auth::routes();

Route::group(['domain' => '{subdomain}.dental.com'], function() {	
	Route::group(['prefix' => '/'], function() {
		Route::get('/', 'HomeController@index')->name('admin.home');

		Route::get('/citas', 'HomeController@index')->name('admin.appointment');
		Route::get('/prospecto', 'HomeController@index')->name('admin.prospect');
		Route::get('/pacientes', 'HomeController@index')->name('admin.patient');

		Route::group(['prefix' => 'inventario'], function() {
			Route::get('/', 'HomeController@index')->name('admin.inventory');
			Route::get('gastos', 'HomeController@index')->name('admin.inventory.expenses');
			Route::get('ingresos', 'HomeController@index')->name('admin.inventory.income');
			Route::get('categoria_de_gastos', 'HomeController@index')->name('admin.inventory.category_expenses');
			Route::get('categoria_de_ingresos', 'HomeController@index')->name('admin.inventory.category_incomes');
		});

		Route::group(['prefix' => 'contabilidad'], function() {
			Route::get('/', 'HomeController@index')->name('admin.accounting');
			Route::get('impuestos', 'HomeController@index')->name('admin.accounting.tax');
			Route::get('cuentas', 'HomeController@index')->name('admin.accounting.account');
			Route::get('ejercicios', 'HomeController@index')->name('admin.accounting.exercise');
			Route::get('asientos', 'HomeController@index')->name('admin.accounting.entry');
			Route::get('grupos', 'HomeController@index')->name('admin.accounting.groups');
			Route::get('formas_de_pago', 'HomeController@index')->name('admin.accounting.payment');
			Route::get('series', 'HomeController@index')->name('admin.accounting.series');
			Route::get('remesas', 'HomeController@index')->name('admin.accounting.remittance');
		});

		Route::group(['prefix' => 'compras'], function() {
			Route::get('/', 'HomeController@index')->name('admin.purchase');
			Route::get('ordenes', 'HomeController@index')->name('admin.purchase.orders');
			Route::get('proveedores', 'HomeController@index')->name('admin.purchase.providers');
			Route::get('facturas', 'HomeController@index')->name('admin.purchase.invoices');
			Route::get('recibos', 'HomeController@index')->name('admin.purchase.receipts');
		});

		Route::group(['prefix' => 'configuracion'], function() {
			Route::get('/', 'HomeController@index')->name('admin.configuration');
			Route::get('perfiles_de_usuarios', 'HomeController@index')->name('admin.configuration.user_profiles');
			Route::get('usuarios', 'HomeController@index')->name('admin.configuration.users');
			Route::get('empresa', 'HomeController@index')->name('admin.configuration.company');
			Route::get('servicios', 'HomeController@index')->name('admin.configuration.services');
			Route::get('especialidades', 'HomeController@index')->name('admin.configuration.specialties');
			Route::get('doctores', 'HomeController@index')->name('admin.configuration.doctors');
		});

		Route::group(['prefix' => 'reportes'], function() {
			Route::get('/', 'HomeController@index')->name('admin.report');
			Route::get('clientes', 'HomeController@index')->name('admin.report.clients');
			Route::get('prospectos', 'HomeController@index')->name('admin.report.prospects');
			Route::get('gastos', 'HomeController@index')->name('admin.report.expenses');
			Route::get('ingresos', 'HomeController@index')->name('admin.report.incomes');
			Route::get('ingresos/crear', 'HomeController@index')->name('admin.report.incomes');
			Route::get('facturas', 'HomeController@index')->name('admin.report.invoices');
			Route::get('pedidos', 'HomeController@index')->name('admin.report.orders');
		});

		Route::group(['prefix' => 'usuario'], function() {
			Route::get('/', 'HomeController@index')->name('admin.user');
			Route::get('perfil', 'HomeController@index')->name('admin.user.profile');
			Route::get('consultas', 'HomeController@index')->name('admin.user.consultation');
		});

		Route::group(['prefix' => 'mensajes'], function() {
			Route::get('/', 'MessageController@index')->name('admin.messages');
			Route::get('entrada', 'MessageController@index')->name('admin.messages.inbox');
			Route::get('salida', 'MessageController@index')->name('admin.messages.outbox');
			Route::get('crear', 'MessageController@index')->name('admin.messages.create');
			Route::get('basura', 'MessageController@index')->name('admin.messages.trash');
		});

		Route::get('/logout', 'Auth\LoginController@logout');
	});

});

Route::group(['domain' => 'dental.com'], function() {	
	Route::get('/', function () {
    	return view('welcome');
	});
});

