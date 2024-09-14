<?php

namespace Database\Seeders;

use App\Types\Permissions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use ReflectionClass;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		# Create roles
		$owner = Role::create(['name' => 'owner']);
		$administrator = Role::create(['name' => 'administrator']);
		$payrollOfficer = Role::create(['name' => 'payroll_officer']);
		$employee = Role::create(['name' => 'employee']);

		$reflection = new ReflectionClass(Permissions::class);
		$permissionCollection = $reflection->getConstants();

		foreach ($permissionCollection as $permission) {
			Permission::create([
				'name' => $permission,
			]);
		}

		$owner->syncPermissions($permissionCollection);
		$administrator->syncPermissions(array_diff($permissionCollection, [
			Permissions::CAN_ADD_ADMINISTRATORS,
			Permissions::CAN_EDIT_ADMINISTRATORS,
		]));

		$adminPermissions = [
			Permissions::CAN_ADD_COMPANY,
			Permissions::CAN_EDIT_COMPANY,
			Permissions::CAN_EDIT_CAPITAL,
			Permissions::CAN_ADD_ADMINISTRATORS,
			Permissions::CAN_EDIT_ADMINISTRATORS,
			Permissions::CAN_ADD_PAYROLL_OFFICERS,
			Permissions::CAN_EDIT_PAYROLL_OFFICERS,
			Permissions::CAN_ADD_EMPLOYEES,
			Permissions::CAN_EDIT_EMPLOYEES,
			Permissions::CAN_APPROVE_LOANS,
			Permissions::CAN_VIEW_RECEIVABLES_DASHBOARD,
			Permissions::CAN_VIEW_ONGOING_ALL_COMPANY_LOANS,
			Permissions::CAN_VIEW_ONGOING_ALL_EMPLOYEE_LOANS,
			Permissions::CAN_CREATE_LOANS,
			Permissions::CAN_EDIT_LOANS,
			Permissions::CAN_ACKNOWLEDGE_LOANS,
			Permissions::CAN_APPROVE_LOANS,
			Permissions::CAN_COMPLETE_LOANS,
			Permissions::CAN_REQUEST_LOAN
		];

		$payrollOfficerPermissions = [
			Permissions::CAN_VIEW_COMPANY_RECEIVABLES_DASHBOARD,
			Permissions::CAN_ADD_COMPANY_EMPLOYEES,
			Permissions::CAN_EDIT_COMPANY_EMPLOYEES,
			Permissions::CAN_EDIT_OWN_COMPANY_CAPITAL,
			Permissions::CAN_VIEW_COMPANY_EMPLOYEE_LOANS,
			Permissions::CAN_CREATE_COMPANY_LOANS,
			Permissions::CAN_EDIT_COMPANY_LOANS,
			Permissions::CAN_COMPLETE_COMPANY_LOANS,
		];

		$payrollOfficer->syncPermissions(array_diff($permissionCollection, $adminPermissions));
		$employee->syncPermissions(array_diff($permissionCollection, [...$adminPermissions, ...$payrollOfficerPermissions]));
	}

}
