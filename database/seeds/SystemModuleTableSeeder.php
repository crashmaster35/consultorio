<?php

use Illuminate\Database\Seeder;
use App\SystemModule;

class SystemModuleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $system_modules = $system_modules = array(
  array('id' => '1','name' => 'Escritorio','url' => '/','icon' => 'dashboard','view' => 'admin.home','parent' => '0','order' => '1','created_at' => '2018-12-13 02:13:23','updated_at' => '2018-12-13 02:13:23'),
  array('id' => '2','name' => 'Citas','url' => '/citas','icon' => 'calendar','view' => 'admin.appointment','parent' => '0','order' => '2','created_at' => '2018-12-13 02:13:23','updated_at' => '2018-12-13 02:13:23'),
  array('id' => '3','name' => 'Prospectos','url' => '/prospectos','icon' => 'group','view' => 'admin.prospect','parent' => '0','order' => '3','created_at' => '2018-12-13 02:13:23','updated_at' => '2018-12-13 02:13:23'),
  array('id' => '4','name' => 'Pacientes','url' => '/pacientes','icon' => 'user','view' => 'admin.patient','parent' => '0','order' => '4','created_at' => '2018-12-13 02:13:23','updated_at' => '2018-12-13 02:13:23'),
  array('id' => '5','name' => 'Inventario','url' => '/inventario','icon' => 'barcode','view' => 'admin.inventory','parent' => '0','order' => '5','created_at' => '2018-12-13 02:13:23','updated_at' => '2018-12-13 02:13:23'),
  array('id' => '6','name' => 'Gastos','url' => '/gastos','icon' => '','view' => 'admin.inventory.expenses','parent' => '5','order' => '1','created_at' => '2018-12-13 02:13:23','updated_at' => '2018-12-13 02:13:23'),
  array('id' => '7','name' => 'Ingresos','url' => '/ingresos','icon' => '','view' => 'admin.inventory.income','parent' => '5','order' => '2','created_at' => '2018-12-13 02:13:23','updated_at' => '2018-12-13 02:13:23'),
  array('id' => '8','name' => 'Categoría de gastos','url' => '/categoria_de_gastos','icon' => '','view' => 'admin.inventory.category_expenses','parent' => '5','order' => '3','created_at' => '2018-12-13 02:13:23','updated_at' => '2018-12-13 02:13:23'),
  array('id' => '9','name' => 'Categoría de ingresos','url' => '/categoria_de_ingresos','icon' => '','view' => 'admin.inventory.category_incomes','parent' => '5','order' => '4','created_at' => '2018-12-13 02:13:23','updated_at' => '2018-12-13 02:13:23'),
  array('id' => '10','name' => 'Contabilidad','url' => '/contabilidad','icon' => 'money','view' => 'admin.accounting','parent' => '0','order' => '6','created_at' => '2018-12-13 02:13:24','updated_at' => '2018-12-13 02:13:24'),
  array('id' => '11','name' => 'Impuestos','url' => '/impuestos','icon' => '','view' => 'admin.accounting.tax','parent' => '10','order' => '1','created_at' => '2018-12-13 02:13:24','updated_at' => '2018-12-13 02:13:24'),
  array('id' => '12','name' => 'Cuentas','url' => '/cuentas','icon' => '','view' => 'admin.accounting.account','parent' => '10','order' => '2','created_at' => '2018-12-13 02:13:24','updated_at' => '2018-12-13 02:13:24'),
  array('id' => '13','name' => 'Ejercicios','url' => '/ejercicios','icon' => '','view' => 'admin.accounting.exercise','parent' => '10','order' => '3','created_at' => '2018-12-13 02:13:24','updated_at' => '2018-12-13 02:13:24'),
  array('id' => '14','name' => 'Asientos','url' => '/asientos','icon' => '','view' => 'admin.accounting.entry','parent' => '10','order' => '4','created_at' => '2018-12-13 02:13:24','updated_at' => '2018-12-13 02:13:24'),
  array('id' => '15','name' => 'Grupos y Epígrafes','url' => '/grupos','icon' => '','view' => 'admin.accounting.groups','parent' => '10','order' => '5','created_at' => '2018-12-13 02:13:24','updated_at' => '2018-12-13 02:13:24'),
  array('id' => '16','name' => 'Formas de Pago','url' => '/formas_de_pago','icon' => '','view' => 'admin.accounting.payment','parent' => '10','order' => '6','created_at' => '2018-12-13 02:13:24','updated_at' => '2018-12-13 02:13:24'),
  array('id' => '17','name' => 'Series','url' => '/series','icon' => '','view' => 'admin.accounting.series','parent' => '10','order' => '7','created_at' => '2018-12-13 02:13:24','updated_at' => '2018-12-13 02:13:24'),
  array('id' => '18','name' => 'Remesas','url' => '/remesas','icon' => '','view' => 'admin.accounting.remittance','parent' => '10','order' => '8','created_at' => '2018-12-13 02:13:24','updated_at' => '2018-12-13 02:13:24'),
  array('id' => '19','name' => 'Compras','url' => '/compras','icon' => 'credit-card','view' => 'admin.purchase','parent' => '0','order' => '7','created_at' => '2018-12-13 02:13:24','updated_at' => '2018-12-13 02:13:24'),
  array('id' => '20','name' => 'Pedidos','url' => '/ordenes','icon' => '','view' => 'admin.purchase.orders','parent' => '19','order' => '1','created_at' => '2018-12-13 02:13:24','updated_at' => '2018-12-13 02:13:24'),
  array('id' => '21','name' => 'Proveedores','url' => '/proveedores','icon' => '','view' => 'admin.purchase.providers','parent' => '19','order' => '2','created_at' => '2018-12-13 02:13:24','updated_at' => '2018-12-13 02:13:24'),
  array('id' => '22','name' => 'Facturas','url' => '/facturas','icon' => '','view' => 'admin.purchase.invoices','parent' => '19','order' => '3','created_at' => '2018-12-13 02:13:24','updated_at' => '2018-12-13 02:13:24'),
  array('id' => '23','name' => 'Recibos','url' => '/recibos','icon' => '','view' => 'admin.purchase.receipts','parent' => '19','order' => '4','created_at' => '2018-12-13 02:13:24','updated_at' => '2018-12-13 02:13:24'),
  array('id' => '24','name' => 'Configuración','url' => '/configuracion','icon' => 'cog','view' => 'admin.configuration','parent' => '0','order' => '8','created_at' => '2018-12-13 02:13:24','updated_at' => '2018-12-13 02:13:24'),
  array('id' => '25','name' => 'Perfiles de Usuarios','url' => '/perfiles_de_usuarios','icon' => '','view' => 'admin.configuration.user_profiles','parent' => '24','order' => '1','created_at' => '2018-12-13 02:13:24','updated_at' => '2018-12-13 02:13:24'),
  array('id' => '26','name' => 'Usuarios','url' => '/usuarios','icon' => '','view' => 'admin.configuration.users','parent' => '24','order' => '2','created_at' => '2018-12-13 02:13:24','updated_at' => '2018-12-13 02:13:24'),
  array('id' => '27','name' => 'Empresa','url' => '/empresa','icon' => '','view' => 'admin.configuration.company','parent' => '24','order' => '3','created_at' => '2018-12-13 02:13:24','updated_at' => '2018-12-13 02:13:24'),
  array('id' => '28','name' => 'Servicios','url' => '/servicios','icon' => '','view' => 'admin.configuration.services','parent' => '24','order' => '4','created_at' => '2018-12-13 02:13:24','updated_at' => '2018-12-13 02:13:24'),
  array('id' => '29','name' => 'Especialidades','url' => '/especialidades','icon' => '','view' => 'admin.configuration.specialties','parent' => '24','order' => '5','created_at' => '2018-12-13 02:13:24','updated_at' => '2018-12-13 02:13:24'),
  array('id' => '30','name' => 'Doctores','url' => '/doctores','icon' => '','view' => 'admin.configuration.doctors','parent' => '24','order' => '6','created_at' => '2018-12-13 02:13:24','updated_at' => '2018-12-13 02:13:24'),
  array('id' => '31','name' => 'Reportes','url' => '/reportes','icon' => 'bar-chart','view' => 'admin.report','parent' => '0','order' => '9','created_at' => '2018-12-13 02:13:24','updated_at' => '2018-12-13 02:13:24'),
  array('id' => '32','name' => 'Clientes','url' => '/clientes','icon' => '','view' => 'admin.report.clients','parent' => '31','order' => '1','created_at' => '2018-12-13 02:13:24','updated_at' => '2018-12-13 02:13:24'),
  array('id' => '33','name' => 'Prospectos','url' => '/prospectos','icon' => '','view' => 'admin.report.prospects','parent' => '31','order' => '2','created_at' => '2018-12-13 02:13:24','updated_at' => '2018-12-13 02:13:24'),
  array('id' => '34','name' => 'Gastos','url' => ' /gastos','icon' => '','view' => 'admin.report.expenses','parent' => '31','order' => '3','created_at' => '2018-12-13 02:13:24','updated_at' => '2018-12-13 02:13:24'),
  array('id' => '35','name' => 'Ingresos','url' => '/ingresos','icon' => '','view' => 'admin.report.incomes','parent' => '31','order' => '4','created_at' => '2018-12-13 02:13:24','updated_at' => '2018-12-13 02:13:24'),
  array('id' => '36','name' => 'Facturas','url' => '/facturas','icon' => '','view' => 'admin.report.invoices','parent' => '31','order' => '5','created_at' => '2018-12-13 02:13:24','updated_at' => '2018-12-13 02:13:24'),
  array('id' => '37','name' => 'Pedidos','url' => '/pedidos','icon' => '','view' => 'admin.report.orders','parent' => '31','order' => '6','created_at' => '2018-12-13 02:13:24','updated_at' => '2018-12-13 02:13:24')
);


		foreach ($system_modules as $item) {
			SystemModule::create($item);
		}
    }
}
