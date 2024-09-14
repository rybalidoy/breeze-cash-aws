<?php

namespace App\Types;

final class Permissions
{

  # Company 
  const CAN_ADD_COMPANY = 'can_add_company';
  const CAN_EDIT_COMPANY = 'can_edit_company';
  const CAN_EDIT_CAPITAL = 'can_edit_capital';
  const CAN_EDIT_OWN_COMPANY_CAPITAL = 'can_edit_own_company_capital';

  # Users
  const CAN_ADD_ADMINISTRATORS = 'can_add_administrators';
  const CAN_EDIT_ADMINISTRATORS = 'can_edit_administrators';
  const CAN_ADD_PAYROLL_OFFICERS = 'can_add_payroll_officers';
  const CAN_EDIT_PAYROLL_OFFICERS = 'can_edit_payroll_officers';
  const CAN_ADD_EMPLOYEES = 'can_add_employees';
  const CAN_EDIT_EMPLOYEES = 'can_edit_employees';
  const CAN_ADD_COMPANY_EMPLOYEES = 'can_add_company_employees';
  const CAN_EDIT_COMPANY_EMPLOYEES = 'can_edit_company_employees';

  # Dashboard
  const CAN_VIEW_RECEIVABLES_DASHBOARD = 'can_view_receivables_dashboard';
  const CAN_VIEW_COMPANY_RECEIVABLES_DASHBOARD = 'can_view_company_receivables_dashboard';

  # Loans
  const CAN_VIEW_ONGOING_ALL_COMPANY_LOANS = 'can_view_ongoing_all_company_loans';
  const CAN_VIEW_ONGOING_ALL_EMPLOYEE_LOANS = 'can_view_ongoing_all_employee_loans';
  const CAN_VIEW_COMPANY_LOANS = 'can_view_company_loans';
  const CAN_VIEW_COMPANY_EMPLOYEE_LOANS = 'can_view_company_employee_loans';
  const CAN_VIEW_OWN_LOAN = 'can_view_own_loan';
  const CAN_CREATE_LOANS = 'can_create_loans';
  const CAN_CREATE_COMPANY_LOANS = 'can_create_company_loans';
  const CAN_EDIT_LOANS = 'can_edit_loans';
  const CAN_EDIT_COMPANY_LOANS = 'can_edit_company_loans';
  const CAN_ACKNOWLEDGE_LOANS = 'can_acknowledge_loans';
  const CAN_APPROVE_LOANS = 'can_approve_loans';
  const CAN_APPROVE_COMPANY_LOANS = 'can_approve_company_loans';
  const CAN_COMPLETE_LOANS = 'can_complete_loans';
  const CAN_COMPLETE_COMPANY_LOANS = 'can_complete_company_loans';
  const CAN_REQUEST_LOAN = 'can_request_loan';
}
