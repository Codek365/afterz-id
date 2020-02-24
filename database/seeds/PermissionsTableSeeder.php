<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => '1',
                'title' => 'user_management_access',
            ],
            [
                'id'    => '2',
                'title' => 'permission_create',
            ],
            [
                'id'    => '3',
                'title' => 'permission_edit',
            ],
            [
                'id'    => '4',
                'title' => 'permission_show',
            ],
            [
                'id'    => '5',
                'title' => 'permission_delete',
            ],
            [
                'id'    => '6',
                'title' => 'permission_access',
            ],
            [
                'id'    => '7',
                'title' => 'role_create',
            ],
            [
                'id'    => '8',
                'title' => 'role_edit',
            ],
            [
                'id'    => '9',
                'title' => 'role_show',
            ],
            [
                'id'    => '10',
                'title' => 'role_delete',
            ],
            [
                'id'    => '11',
                'title' => 'role_access',
            ],
            [
                'id'    => '12',
                'title' => 'user_create',
            ],
            [
                'id'    => '13',
                'title' => 'user_edit',
            ],
            [
                'id'    => '14',
                'title' => 'user_show',
            ],
            [
                'id'    => '15',
                'title' => 'user_delete',
            ],
            [
                'id'    => '16',
                'title' => 'user_access',
            ],
            [
                'id'    => '17',
                'title' => 'content_management_access',
            ],
            [
                'id'    => '18',
                'title' => 'content_category_create',
            ],
            [
                'id'    => '19',
                'title' => 'content_category_edit',
            ],
            [
                'id'    => '20',
                'title' => 'content_category_show',
            ],
            [
                'id'    => '21',
                'title' => 'content_category_delete',
            ],
            [
                'id'    => '22',
                'title' => 'content_category_access',
            ],
            [
                'id'    => '23',
                'title' => 'content_tag_create',
            ],
            [
                'id'    => '24',
                'title' => 'content_tag_edit',
            ],
            [
                'id'    => '25',
                'title' => 'content_tag_show',
            ],
            [
                'id'    => '26',
                'title' => 'content_tag_delete',
            ],
            [
                'id'    => '27',
                'title' => 'content_tag_access',
            ],
            [
                'id'    => '28',
                'title' => 'content_page_create',
            ],
            [
                'id'    => '29',
                'title' => 'content_page_edit',
            ],
            [
                'id'    => '30',
                'title' => 'content_page_show',
            ],
            [
                'id'    => '31',
                'title' => 'content_page_delete',
            ],
            [
                'id'    => '32',
                'title' => 'content_page_access',
            ],
            [
                'id'    => '33',
                'title' => 'expense_management_access',
            ],
            [
                'id'    => '34',
                'title' => 'expense_category_create',
            ],
            [
                'id'    => '35',
                'title' => 'expense_category_edit',
            ],
            [
                'id'    => '36',
                'title' => 'expense_category_show',
            ],
            [
                'id'    => '37',
                'title' => 'expense_category_delete',
            ],
            [
                'id'    => '38',
                'title' => 'expense_category_access',
            ],
            [
                'id'    => '39',
                'title' => 'income_category_create',
            ],
            [
                'id'    => '40',
                'title' => 'income_category_edit',
            ],
            [
                'id'    => '41',
                'title' => 'income_category_show',
            ],
            [
                'id'    => '42',
                'title' => 'income_category_delete',
            ],
            [
                'id'    => '43',
                'title' => 'income_category_access',
            ],
            [
                'id'    => '44',
                'title' => 'expense_create',
            ],
            [
                'id'    => '45',
                'title' => 'expense_edit',
            ],
            [
                'id'    => '46',
                'title' => 'expense_show',
            ],
            [
                'id'    => '47',
                'title' => 'expense_delete',
            ],
            [
                'id'    => '48',
                'title' => 'expense_access',
            ],
            [
                'id'    => '49',
                'title' => 'income_create',
            ],
            [
                'id'    => '50',
                'title' => 'income_edit',
            ],
            [
                'id'    => '51',
                'title' => 'income_show',
            ],
            [
                'id'    => '52',
                'title' => 'income_delete',
            ],
            [
                'id'    => '53',
                'title' => 'income_access',
            ],
            [
                'id'    => '54',
                'title' => 'expense_report_create',
            ],
            [
                'id'    => '55',
                'title' => 'expense_report_edit',
            ],
            [
                'id'    => '56',
                'title' => 'expense_report_show',
            ],
            [
                'id'    => '57',
                'title' => 'expense_report_delete',
            ],
            [
                'id'    => '58',
                'title' => 'expense_report_access',
            ],
            [
                'id'    => '59',
                'title' => 'client_management_setting_access',
            ],
            [
                'id'    => '60',
                'title' => 'currency_create',
            ],
            [
                'id'    => '61',
                'title' => 'currency_edit',
            ],
            [
                'id'    => '62',
                'title' => 'currency_show',
            ],
            [
                'id'    => '63',
                'title' => 'currency_delete',
            ],
            [
                'id'    => '64',
                'title' => 'currency_access',
            ],
            [
                'id'    => '65',
                'title' => 'transaction_type_create',
            ],
            [
                'id'    => '66',
                'title' => 'transaction_type_edit',
            ],
            [
                'id'    => '67',
                'title' => 'transaction_type_show',
            ],
            [
                'id'    => '68',
                'title' => 'transaction_type_delete',
            ],
            [
                'id'    => '69',
                'title' => 'transaction_type_access',
            ],
            [
                'id'    => '70',
                'title' => 'income_source_create',
            ],
            [
                'id'    => '71',
                'title' => 'income_source_edit',
            ],
            [
                'id'    => '72',
                'title' => 'income_source_show',
            ],
            [
                'id'    => '73',
                'title' => 'income_source_delete',
            ],
            [
                'id'    => '74',
                'title' => 'income_source_access',
            ],
            [
                'id'    => '75',
                'title' => 'client_status_create',
            ],
            [
                'id'    => '76',
                'title' => 'client_status_edit',
            ],
            [
                'id'    => '77',
                'title' => 'client_status_show',
            ],
            [
                'id'    => '78',
                'title' => 'client_status_delete',
            ],
            [
                'id'    => '79',
                'title' => 'client_status_access',
            ],
            [
                'id'    => '80',
                'title' => 'project_status_create',
            ],
            [
                'id'    => '81',
                'title' => 'project_status_edit',
            ],
            [
                'id'    => '82',
                'title' => 'project_status_show',
            ],
            [
                'id'    => '83',
                'title' => 'project_status_delete',
            ],
            [
                'id'    => '84',
                'title' => 'project_status_access',
            ],
            [
                'id'    => '85',
                'title' => 'client_management_access',
            ],
            [
                'id'    => '86',
                'title' => 'client_create',
            ],
            [
                'id'    => '87',
                'title' => 'client_edit',
            ],
            [
                'id'    => '88',
                'title' => 'client_show',
            ],
            [
                'id'    => '89',
                'title' => 'client_delete',
            ],
            [
                'id'    => '90',
                'title' => 'client_access',
            ],
            [
                'id'    => '91',
                'title' => 'project_create',
            ],
            [
                'id'    => '92',
                'title' => 'project_edit',
            ],
            [
                'id'    => '93',
                'title' => 'project_show',
            ],
            [
                'id'    => '94',
                'title' => 'project_delete',
            ],
            [
                'id'    => '95',
                'title' => 'project_access',
            ],
            [
                'id'    => '96',
                'title' => 'note_create',
            ],
            [
                'id'    => '97',
                'title' => 'note_edit',
            ],
            [
                'id'    => '98',
                'title' => 'note_show',
            ],
            [
                'id'    => '99',
                'title' => 'note_delete',
            ],
            [
                'id'    => '100',
                'title' => 'note_access',
            ],
            [
                'id'    => '101',
                'title' => 'document_create',
            ],
            [
                'id'    => '102',
                'title' => 'document_edit',
            ],
            [
                'id'    => '103',
                'title' => 'document_show',
            ],
            [
                'id'    => '104',
                'title' => 'document_delete',
            ],
            [
                'id'    => '105',
                'title' => 'document_access',
            ],
            [
                'id'    => '106',
                'title' => 'transaction_create',
            ],
            [
                'id'    => '107',
                'title' => 'transaction_edit',
            ],
            [
                'id'    => '108',
                'title' => 'transaction_show',
            ],
            [
                'id'    => '109',
                'title' => 'transaction_delete',
            ],
            [
                'id'    => '110',
                'title' => 'transaction_access',
            ],
            [
                'id'    => '111',
                'title' => 'client_report_create',
            ],
            [
                'id'    => '112',
                'title' => 'client_report_edit',
            ],
            [
                'id'    => '113',
                'title' => 'client_report_show',
            ],
            [
                'id'    => '114',
                'title' => 'client_report_delete',
            ],
            [
                'id'    => '115',
                'title' => 'client_report_access',
            ],
            [
                'id'    => '116',
                'title' => 'asset_management_access',
            ],
            [
                'id'    => '117',
                'title' => 'asset_category_create',
            ],
            [
                'id'    => '118',
                'title' => 'asset_category_edit',
            ],
            [
                'id'    => '119',
                'title' => 'asset_category_show',
            ],
            [
                'id'    => '120',
                'title' => 'asset_category_delete',
            ],
            [
                'id'    => '121',
                'title' => 'asset_category_access',
            ],
            [
                'id'    => '122',
                'title' => 'asset_location_create',
            ],
            [
                'id'    => '123',
                'title' => 'asset_location_edit',
            ],
            [
                'id'    => '124',
                'title' => 'asset_location_show',
            ],
            [
                'id'    => '125',
                'title' => 'asset_location_delete',
            ],
            [
                'id'    => '126',
                'title' => 'asset_location_access',
            ],
            [
                'id'    => '127',
                'title' => 'asset_status_create',
            ],
            [
                'id'    => '128',
                'title' => 'asset_status_edit',
            ],
            [
                'id'    => '129',
                'title' => 'asset_status_show',
            ],
            [
                'id'    => '130',
                'title' => 'asset_status_delete',
            ],
            [
                'id'    => '131',
                'title' => 'asset_status_access',
            ],
            [
                'id'    => '132',
                'title' => 'asset_create',
            ],
            [
                'id'    => '133',
                'title' => 'asset_edit',
            ],
            [
                'id'    => '134',
                'title' => 'asset_show',
            ],
            [
                'id'    => '135',
                'title' => 'asset_delete',
            ],
            [
                'id'    => '136',
                'title' => 'asset_access',
            ],
            [
                'id'    => '137',
                'title' => 'assets_history_access',
            ],
            [
                'id'    => '138',
                'title' => 'contact_management_access',
            ],
            [
                'id'    => '139',
                'title' => 'contact_company_create',
            ],
            [
                'id'    => '140',
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => '141',
                'title' => 'contact_company_show',
            ],
            [
                'id'    => '142',
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => '143',
                'title' => 'contact_company_access',
            ],
            [
                'id'    => '144',
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => '145',
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => '146',
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => '147',
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => '148',
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => '149',
                'title' => 'user_alert_create',
            ],
            [
                'id'    => '150',
                'title' => 'user_alert_show',
            ],
            [
                'id'    => '151',
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => '152',
                'title' => 'user_alert_access',
            ],
            [
                'id'    => '153',
                'title' => 'audit_log_show',
            ],
            [
                'id'    => '154',
                'title' => 'audit_log_access',
            ],
            [
                'id'    => '155',
                'title' => 'faq_management_access',
            ],
            [
                'id'    => '156',
                'title' => 'faq_category_create',
            ],
            [
                'id'    => '157',
                'title' => 'faq_category_edit',
            ],
            [
                'id'    => '158',
                'title' => 'faq_category_show',
            ],
            [
                'id'    => '159',
                'title' => 'faq_category_delete',
            ],
            [
                'id'    => '160',
                'title' => 'faq_category_access',
            ],
            [
                'id'    => '161',
                'title' => 'faq_question_create',
            ],
            [
                'id'    => '162',
                'title' => 'faq_question_edit',
            ],
            [
                'id'    => '163',
                'title' => 'faq_question_show',
            ],
            [
                'id'    => '164',
                'title' => 'faq_question_delete',
            ],
            [
                'id'    => '165',
                'title' => 'faq_question_access',
            ],
            [
                'id'    => '166',
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => '167',
                'title' => 'crm_status_create',
            ],
            [
                'id'    => '168',
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => '169',
                'title' => 'crm_status_show',
            ],
            [
                'id'    => '170',
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => '171',
                'title' => 'crm_status_access',
            ],
            [
                'id'    => '172',
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => '173',
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => '174',
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => '175',
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => '176',
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => '177',
                'title' => 'crm_note_create',
            ],
            [
                'id'    => '178',
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => '179',
                'title' => 'crm_note_show',
            ],
            [
                'id'    => '180',
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => '181',
                'title' => 'crm_note_access',
            ],
            [
                'id'    => '182',
                'title' => 'crm_document_create',
            ],
            [
                'id'    => '183',
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => '184',
                'title' => 'crm_document_show',
            ],
            [
                'id'    => '185',
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => '186',
                'title' => 'crm_document_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
