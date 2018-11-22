<?php namespace App\Http\Composers;

use Illuminate\Contracts\View\View;
use Route;

/**
 * 
 */
class MenuComposer {
	
	function compose(View $view)
	{
		$route = Route::getCurrentRoute()->getName();

		for ($i=0; $i < 9 ; $i++) { 
			$a[$i] = '';
		}

		for ($i=0; $i < 28 ; $i++) { 
			$b[$i] = '';
		}

		$prospect = 0;
		$clients = 0;
		$cp = 0;
		$programmed = 0;
		$finished = 0;
		$percent = 0;

		if (!in_array($route, config('constants.composer_exception'))) {
			switch ($route) {
				case 'admin.home':
					$a[0] = 'active';
					break;
				case 'admin.appointment':
					$a[1] = 'active';
					break;
				case 'admin.prospect':
					$a[2] = 'active';
					break;
				case 'admin.patient':
					$a[3] = 'active';
					break;
				case 'admin.inventory.expenses':
					$a[4] = 'active open';
					$b[0] = 'active';
					break;
				case 'admin.inventory.income':
					$a[4] = 'active open';
					$b[1] = 'active';
					break;
				case 'admin.inventory.category_expenses':
					$a[4] = 'active open';
					$b[2] = 'active';
					break;
				case 'admin.inventory.category_incomes':
					$a[4] = 'active open';
					$b[3] = 'active';
					break;
				case 'admin.accounting.tax':
					$a[5] = 'active open';
					$b[4] = 'active';
					break;
				case 'admin.accounting.account':
					$a[5] = 'active open';
					$b[5] = 'active';
					break;
				case 'admin.accounting.exercise':
					$a[5] = 'active open';
					$b[6] = 'active';
					break;
				case 'admin.accounting.entry':
					$a[5] = 'active open';
					$b[7] = 'active';
					break;
				case 'admin.accounting.groups':
					$a[5] = 'active open';
					$b[8] = 'active';
					break;
				case 'admin.accounting.payment':
					$a[5] = 'active open';
					$b[9] = 'active';
					break;
				case 'admin.accounting.series':
					$a[5] = 'active open';
					$b[10] = 'active';
					break;
				case 'admin.accounting.remittance':
					$a[5] = 'active open';
					$b[11] = 'active';
					break;
				case 'admin.purchase.orders':
					$a[6] = 'active open';
					$b[12] = 'active';
					break;
				case 'admin.purchase.providers':
					$a[6] = 'active open';
					$b[13] = 'active';
					break;
				case 'admin.purchase.invoices':
					$a[6] = 'active open';
					$b[14] = 'active';
					break;
				case 'admin.purchase.receipts':
					$a[6] = 'active open';
					$b[15] = 'active';
					break;
				case 'admin.configuration.user_profiles':
					$a[7] = 'active open';
					$b[16] = 'active';
					break;
				case 'admin.configuration.users':
					$a[7] = 'active open';
					$b[17] = 'active';
					break;
				case 'admin.configuration.company':
					$a[7] = 'active open';
					$b[18] = 'active';
					break;
				case 'admin.configuration.services':
					$a[7] = 'active open';
					$b[19] = 'active';
					break;
				case 'admin.configuration.specialties':
					$a[7] = 'active open';
					$b[20] = 'active';
					break;
				case 'admin.configuration.doctors':
					$a[7] = 'active open';
					$b[21] = 'active';
					break;
				case 'admin.report.clients':
					$a[8] = 'active open';
					$b[22] = 'active';
					break;
				case 'admin.report.prospects':
					$a[8] = 'active open';
					$b[23] = 'active';
					break;
				case 'admin.report.expenses':
					$a[8] = 'active open';
					$b[24] = 'active';
					break;
				case 'admin.report.incomes':
					$a[8] = 'active open';
					$b[25] = 'active';
					break;
				case 'admin.report.invoices':
					$a[8] = 'active open';
					$b[26] = 'active';
					break;
				case 'admin.report.orders':
					$a[8] = 'active open';
					$b[27] = 'active';
					break;

				default:
					# code...
					break;
			}

			// Calculate the percentages of prospects and finished dates.
			$total = $prospect + $clients;

			if ($total > 0) {
				$pp = ($prospect * 100) / $total;
				$cp = ($clients * 100) / $total;

				$percent = ($finished * 100) / $programmed;
			}
		}

		$view->with(['a' => $a, 'b' => $b, 'prospect' => $prospect, 'clients' => $clients, 'percent' => number_format($cp, 2, '.', ''), 'programmed' => $programmed, 'finished' => $finished, 'dpercent' => number_format($percent, 2, '.', '')]);
	}
}