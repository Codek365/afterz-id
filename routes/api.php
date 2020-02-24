<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:api']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Content Categories
    Route::apiResource('content-categories', 'ContentCategoryApiController');

    // Content Tags
    Route::apiResource('content-tags', 'ContentTagApiController');

    // Content Pages
    Route::post('content-pages/media', 'ContentPageApiController@storeMedia')->name('content-pages.storeMedia');
    Route::apiResource('content-pages', 'ContentPageApiController');

    // Expense Categories
    Route::apiResource('expense-categories', 'ExpenseCategoryApiController');

    // Income Categories
    Route::apiResource('income-categories', 'IncomeCategoryApiController');

    // Expenses
    Route::apiResource('expenses', 'ExpenseApiController');

    // Incomes
    Route::apiResource('incomes', 'IncomeApiController');

    // Currencies
    Route::apiResource('currencies', 'CurrencyApiController');

    // Transaction Types
    Route::apiResource('transaction-types', 'TransactionTypeApiController');

    // Income Sources
    Route::apiResource('income-sources', 'IncomeSourceApiController');

    // Client Statuses
    Route::apiResource('client-statuses', 'ClientStatusApiController');

    // Project Statuses
    Route::apiResource('project-statuses', 'ProjectStatusApiController');

    // Clients
    Route::apiResource('clients', 'ClientApiController');

    // Projects
    Route::apiResource('projects', 'ProjectApiController');

    // Notes
    Route::apiResource('notes', 'NoteApiController');

    // Documents
    Route::post('documents/media', 'DocumentApiController@storeMedia')->name('documents.storeMedia');
    Route::apiResource('documents', 'DocumentApiController');

    // Transactions
    Route::apiResource('transactions', 'TransactionApiController');

    // Asset Categories
    Route::apiResource('asset-categories', 'AssetCategoryApiController');

    // Asset Locations
    Route::apiResource('asset-locations', 'AssetLocationApiController');

    // Asset Statuses
    Route::apiResource('asset-statuses', 'AssetStatusApiController');

    // Assets
    Route::post('assets/media', 'AssetApiController@storeMedia')->name('assets.storeMedia');
    Route::apiResource('assets', 'AssetApiController');

    // Contact Companies
    Route::apiResource('contact-companies', 'ContactCompanyApiController');

    // Contact Contacts
    Route::apiResource('contact-contacts', 'ContactContactsApiController');

    // Faq Categories
    Route::apiResource('faq-categories', 'FaqCategoryApiController');

    // Faq Questions
    Route::apiResource('faq-questions', 'FaqQuestionApiController');

    // Crm Statuses
    Route::apiResource('crm-statuses', 'CrmStatusApiController');

    // Crm Customers
    Route::apiResource('crm-customers', 'CrmCustomerApiController');

    // Crm Notes
    Route::apiResource('crm-notes', 'CrmNoteApiController');

    // Crm Documents
    Route::post('crm-documents/media', 'CrmDocumentApiController@storeMedia')->name('crm-documents.storeMedia');
    Route::apiResource('crm-documents', 'CrmDocumentApiController');
});
