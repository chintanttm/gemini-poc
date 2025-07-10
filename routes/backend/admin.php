<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\ApplicationsController;
use App\Http\Controllers\Backend\PageController;
use App\Http\Controllers\Backend\AccountController;
use App\Http\Controllers\Backend\AuthenticationController;
use App\Http\Controllers\Backend\LayoutsController;
use App\Http\Controllers\Backend\ModalPopupController;
use App\Http\Controllers\Backend\DocumentationController;

use Tabuna\Breadcrumbs\Trail;

Route::middleware(['load.menu'])->group(function () {
    
    // All route names are prefixed with 'admin.'.
    Route::redirect('/', '/admin/dashboard', 301);
    Route::get('dashboard', [DashboardController::class, 'index'])
        ->name('dashboard')
        ->breadcrumbs(function (Trail $trail) {
            $trail->push(__('Home'), route('admin.dashboard'));
    });

    Route::patch('setting', [SettingController::class, 'update'])->name('setting.update');

    Route::group([
        'prefix' => 'pages'
    ], function () {
        Route::get('crafted-page', [PageController::class, 'CraftedPage'])
            ->name('page.crafted-page')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.dashboard')
                ->push(__('Crafted Pages'), route('admin.page.crafted-page')
            ); 
        });

        Route::get('page-profile', [PageController::class, 'ProfileIndex'])
            ->name('page.page-profile')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.page.crafted-page')
                ->push(__('My Profile'), route('admin.page.page-profile')
            ); 
        });

        Route::get('page-bookmark', [PageController::class, 'BookmarkIndex'])
            ->name('page.page-bookmark')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.page.crafted-page')
                ->push(__('Bookmarks'), route('admin.page.page-bookmark')
            ); 
        });

        Route::get('page-timeline', [PageController::class, 'TimelineIndex'])
            ->name('page.page-timeline')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.page.crafted-page')
                ->push(__('Timeline'), route('admin.page.page-timeline')
            ); 
        });

        Route::get('page-imagegallery', [PageController::class, 'ImagegalleryIndex'])
            ->name('page.page-imagegallery')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.page.crafted-page')
                ->push(__('Image Gallery'), route('admin.page.page-imagegallery')
            ); 
        });

        Route::get('page-pricing', [PageController::class, 'PricingIndex'])
            ->name('page.page-pricing')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.page.crafted-page')
                ->push(__('Pricing'), route('admin.page.page-pricing')
            ); 
        });

        Route::get('page-teamsboard', [PageController::class, 'TeamsboardIndex'])
            ->name('page.page-teamsboard')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.page.crafted-page')
                ->push(__('Teams Board'), route('admin.page.page-teamsboard')
            ); 
        });

        Route::get('page-support-ticket', [PageController::class, 'SupportTicketIndex'])
            ->name('page.page-support-ticket')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.page.crafted-page')
                ->push(__('Support Ticket'), route('admin.page.page-support-ticket')
            ); 
        });

        Route::get('page-faqs', [PageController::class, 'FaqsIndex'])
            ->name('page.page-faqs')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.page.crafted-page')
                ->push(__('FAQs'), route('admin.page.page-faqs')
            ); 
        });

        Route::get('page-search', [PageController::class, 'SearchIndex'])
            ->name('page.page-search')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.page.crafted-page')
                ->push(__('Search Website'), route('admin.page.page-search')
            ); 
        });

        Route::get('page-footers', [PageController::class, 'FooterIndex'])
            ->name('page.page-footers')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.page.crafted-page')
                ->push(__('Footers'), route('admin.page.page-footers')
            ); 
        });
    });

    Route::group([
        'prefix' => 'account'
    ], function () {
        Route::get('account-settings', [AccountController::class, 'SettingsIndex'])
            ->name('account.account-settings')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.dashboard')
                ->push(__('Settings'), route('admin.account.account-settings')
            ); 
        });

        Route::get('account-invoices', [AccountController::class, 'InvoicesIndex'])
            ->name('account.account-invoices')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.dashboard')
                ->push(__('Invoices'), route('admin.account.account-invoices')
            ); 
        });

        Route::get('account-create-invoices', [AccountController::class, 'CreateInvoicesIndex'])
            ->name('account.account-create-invoices')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.dashboard')
                ->push(__('Create Invoices'), route('admin.account.account-create-invoices')
            ); 
        });

        Route::get('account-billing', [AccountController::class, 'BillingIndex'])
            ->name('account.account-billing')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.dashboard')
                ->push(__('Billing'), route('admin.account.account-billing')
            ); 
        });
    });

    Route::group([
        'prefix' => 'authentication'
    ], function () {
        Route::get('auth-404', [AuthenticationController::class, 'FourZeroFourIndex'])
            ->name('authentication.auth-404')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.dashboard')
                ->push(__('Settings'), route('admin.authentication.auth-404')
            ); 
        });

        Route::get('auth-403', [AuthenticationController::class, 'FourZeroThreeIndex'])
            ->name('authentication.auth-403')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.dashboard')
                ->push(__('Settings'), route('admin.authentication.auth-403')
            ); 
        });

        Route::get('auth-500', [AuthenticationController::class, 'FiveHundredIndex'])
            ->name('authentication.auth-500')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.dashboard')
                ->push(__('Settings'), route('admin.authentication.auth-500')
            ); 
        });

        Route::get('auth-signin', [AuthenticationController::class, 'SigninIndex'])
            ->name('authentication.auth-signin')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.dashboard')
                ->push(__('Settings'), route('admin.authentication.auth-signin')
            ); 
        });

        Route::get('auth-signup', [AuthenticationController::class, 'SignupIndex'])
            ->name('authentication.auth-signup')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.dashboard')
                ->push(__('Settings'), route('admin.authentication.auth-signup')
            ); 
        });

        Route::get('auth-password-reset', [AuthenticationController::class, 'PasswordResetIndex'])
            ->name('authentication.auth-password-reset')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.dashboard')
                ->push(__('Settings'), route('admin.authentication.auth-password-reset')
            ); 
        });

        Route::get('auth-two-step', [AuthenticationController::class, 'TwoStepIndex'])
            ->name('authentication.auth-two-step')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.dashboard')
                ->push(__('Settings'), route('admin.authentication.auth-two-step')
            ); 
        });

        Route::get('auth-lockscreen', [AuthenticationController::class, 'LockscreenIndex'])
            ->name('authentication.auth-lockscreen')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.dashboard')
                ->push(__('Settings'), route('admin.authentication.auth-lockscreen')
            ); 
        });

        Route::get('auth-maintenance', [AuthenticationController::class, 'MaintenanceIndex'])
            ->name('authentication.auth-maintenance')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.dashboard')
                ->push(__('Settings'), route('admin.authentication.auth-maintenance')
            ); 
        });

        Route::get('auth-signin2', [AuthenticationController::class, 'Signin2'])
            ->name('authentication.auth-signin2')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.dashboard')
                ->push(__('Settings'), route('admin.authentication.auth-signin2')
            ); 
        });

        Route::get('auth-signin3', [AuthenticationController::class, 'Signin3'])
            ->name('authentication.auth-signin3')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.dashboard')
                ->push(__('Settings'), route('admin.authentication.auth-signin3')
            ); 
        });
    });

    Route::get('layouts', [LayoutsController::class, 'Index'])
        ->name('layouts')
        ->breadcrumbs(function (Trail $trail) {
            $trail->push(__('Home'), route('admin.layouts'));
    });

    Route::get('modal-popup', [ModalPopupController::class, 'Index'])
        ->name('modal-popup')
        ->breadcrumbs(function (Trail $trail) {
            $trail->push(__('Home'), route('admin.modal-popup'));
    });

    Route::group([
        'prefix' => 'documentation'
    ], function () {
        //documentation
        Route::get('overview', [DocumentationController::class, 'Overview'])
            ->name('documentation.overview')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.dashboard')
                ->push(__('Documentation'), route('admin.documentation.overview')
            ); 
        });
        Route::get('doc-setup', [DocumentationController::class, 'DocSetup'])
            ->name('documentation.doc-setup')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Development Setup'), route('admin.documentation.doc-setup')
            ); 
        });
        Route::get('doc-structure', [DocumentationController::class, 'DocStructure'])
            ->name('documentation.doc-structure')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('File Structure'), route('admin.documentation.doc-structure')
            ); 
        });
        Route::get('doc-references', [DocumentationController::class, 'DocReferences'])
            ->name('documentation.doc-references')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('References'), route('admin.documentation.doc-references')
            ); 
        });
        Route::get('doc-helperclass', [DocumentationController::class, 'Dochelperclass'])
            ->name('documentation.doc-helperclass')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Helper class'), route('admin.documentation.doc-helperclass')
            ); 
        });
        Route::get('doc-staterpage', [DocumentationController::class, 'DocStaterpage'])
            ->name('documentation.doc-staterpage')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Stater page'), route('admin.documentation.doc-staterpage')
            ); 
        });
        Route::get('doc-animation', [DocumentationController::class, 'DocAnimation'])
            ->name('documentation.doc-animation')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Animation'), route('admin.documentation.doc-animation')
            ); 
        });
        Route::get('doc-changelog', [DocumentationController::class, 'DocChangelog'])
            ->name('documentation.doc-changelog')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Changelog'), route('admin.documentation.doc-changelog')
            ); 
        });
        Route::get('w-cards', [DocumentationController::class, 'wCards'])
            ->name('documentation.w-cards')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Card'), route('admin.documentation.w-cards')
            ); 
        });
        Route::get('w-cards-tiles', [DocumentationController::class, 'wCardsTiles'])
            ->name('documentation.w-cards-tiles')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Card Tiles'), route('admin.documentation.w-cards-tiles')
            ); 
        });
        Route::get('w-cards-user', [DocumentationController::class, 'wCardsUser'])
            ->name('documentation.w-cards-user')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Card Users'), route('admin.documentation.w-cards-user')
            ); 
        });
        Route::get('w-cards-tabbed', [DocumentationController::class, 'wCardsTabbed'])
            ->name('documentation.w-cards-tabbed')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Card Tabbed'), route('admin.documentation.w-cards-tabbed')
            ); 
        });
        Route::get('w-cards-ribbons', [DocumentationController::class, 'wCardsRibbons'])
            ->name('documentation.w-cards-ribbons')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Card Ribbons'), route('admin.documentation.w-cards-ribbons')
            ); 
        });
        Route::get('w-cards-list', [DocumentationController::class, 'wCardsList'])
            ->name('documentation.w-cards-list')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Card List'), route('admin.documentation.w-cards-list')
            ); 
        });
        Route::get('w-cards-charts', [DocumentationController::class, 'wCardsCharts'])
            ->name('documentation.w-cards-charts')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Card Charts'), route('admin.documentation.w-cards-charts')
            ); 
        });
        Route::get('w-cards-tables', [DocumentationController::class, 'wCardsTable'])
            ->name('documentation.w-cards-tables')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Widget Table'), route('admin.documentation.w-cards-tables')
            ); 
        });

        //chart
        Route::get('chart-apex', [DocumentationController::class, 'ChartApex'])
            ->name('documentation.chart-apex')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Apex Chart'), route('admin.documentation.chart-apex')
            ); 
        });
        Route::get('chartjs', [DocumentationController::class, 'ChartJs'])
            ->name('documentation.chartjs')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Chartjs'), route('admin.documentation.chartjs')
            ); 
        });
        Route::get('chart-knob', [DocumentationController::class, 'ChartKnob'])
            ->name('documentation.chart-knob')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('jQuery Knob'), route('admin.documentation.chart-knob')
            ); 
        });
        Route::get('chart-sparkline', [DocumentationController::class, 'ChartSparkline'])
            ->name('documentation.chart-sparkline')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Sparkline'), route('admin.documentation.chart-sparkline')
            ); 
        });

        //element
        Route::get('element-clipboard', [DocumentationController::class, 'ElementClipboard'])
            ->name('documentation.element-clipboard')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Clipboard'), route('admin.documentation.element-clipboard')
            ); 
        });
        Route::get('element-colorpicker', [DocumentationController::class, 'ElementColorpicker'])
            ->name('documentation.element-colorpicker')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Colorpicker'), route('admin.documentation.element-colorpicker')
            ); 
        });
        Route::get('element-daterange', [DocumentationController::class, 'ElementDaterange'])
            ->name('documentation.element-daterange')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Date Range Picker'), route('admin.documentation.element-daterange')
            ); 
        });
        Route::get('element-datepicker', [DocumentationController::class, 'ElementDatepicker'])
            ->name('documentation.element-datepicker')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Datepicker'), route('admin.documentation.element-datepicker')
            ); 
        });
        Route::get('element-dropify', [DocumentationController::class, 'ElementDropify'])
            ->name('documentation.element-dropify')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Dropify'), route('admin.documentation.element-dropify')
            ); 
        });
        Route::get('element-flatpickr', [DocumentationController::class, 'ElementFlatpickr'])
            ->name('documentation.element-flatpickr')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Flatpickr'), route('admin.documentation.element-flatpickr')
            ); 
        });
        Route::get('element-inputmask', [DocumentationController::class, 'ElementInputmask'])
            ->name('documentation.element-inputmask')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Inputmask'), route('admin.documentation.element-inputmask')
            ); 
        });
        Route::get('element-imageinput', [DocumentationController::class, 'ElementImageinput'])
            ->name('documentation.element-imageinput')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Image Input'), route('admin.documentation.element-imageinput')
            ); 
        });
        Route::get('element-maxlength', [DocumentationController::class, 'ElementMaxlength'])
            ->name('documentation.element-maxlength')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Maxlength'), route('admin.documentation.element-maxlength')
            ); 
        });
        Route::get('element-nouislider', [DocumentationController::class, 'ElementNouislider'])
            ->name('documentation.element-nouislider')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('nouislider'), route('admin.documentation.element-nouislider')
            ); 
        });
        Route::get('element-passwordmeter', [DocumentationController::class, 'ElementPasswordmeter'])
            ->name('documentation.element-passwordmeter')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Password Meter'), route('admin.documentation.element-passwordmeter')
            ); 
        });
        Route::get('element-rangeslider', [DocumentationController::class, 'ElemenTrangeslider'])
            ->name('documentation.element-rangeslider')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Rangeslider'), route('admin.documentation.element-rangeslider')
            ); 
        });
        Route::get('element-sweetalert2', [DocumentationController::class, 'ElementSweetalert2'])
            ->name('documentation.element-sweetalert2')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Sweetalert2'), route('admin.documentation.element-sweetalert2')
            ); 
        });
        Route::get('element-tagsinput', [DocumentationController::class, 'ElementTagsinput'])
            ->name('documentation.element-tagsinput')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Tagsinput'), route('admin.documentation.element-tagsinput')
            ); 
        });
        Route::get('element-select2', [DocumentationController::class, 'ElementSelect2'])
            ->name('documentation.element-select2')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Select2'), route('admin.documentation.element-select2')
            ); 
        });
        Route::get('element-multiselectsplitter', [DocumentationController::class, 'ElementMultiselectsplitter'])
            ->name('documentation.element-multiselectsplitter')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Multiselect Splitter'), route('admin.documentation.element-multiselectsplitter')
            ); 
        });
        Route::get('element-jkanban', [DocumentationController::class, 'ElementJkanban'])
            ->name('documentation.element-jkanban')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('jKanban Board'), route('admin.documentation.element-jkanban')
            ); 
        });

        //form
        Route::get('form-bootstrap', [DocumentationController::class, 'FormBootstrap'])
            ->name('documentation.form-bootstrap')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Bootstrap form'), route('admin.documentation.form-bootstrap')
            ); 
        });
        Route::get('form-wizard-h', [DocumentationController::class, 'FormWizardH'])
            ->name('documentation.form-wizard-h')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('jQuery Steps Wizard'), route('admin.documentation.form-wizard-h')
            ); 
        });
        Route::get('form-wizard-v', [DocumentationController::class, 'FormWizardV'])
            ->name('documentation.form-wizard-v')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('jQuery Steps Wizard'), route('admin.documentation.form-wizard-v')
            ); 
        });
        Route::get('form-wizard-validate', [DocumentationController::class, 'FormWizardValidate'])
            ->name('documentation.form-wizard-validate')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('jQuery Steps Validate'), route('admin.documentation.form-wizard-validate')
            ); 
        });
        Route::get('form-custome', [DocumentationController::class, 'FormCustome'])
            ->name('documentation.form-custome')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Custome Form'), route('admin.documentation.form-custome')
            ); 
        });

        //icon
        Route::get('icon-fontawesome', [DocumentationController::class, 'Fontawesome'])
            ->name('documentation.icon-fontawesome')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Font Awesome icons'), route('admin.documentation.icon-fontawesome')
            ); 
        });
        Route::get('icon-linear', [DocumentationController::class, 'Linear'])
            ->name('documentation.icon-linear')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Simple line icons'), route('admin.documentation.icon-linear')
            ); 
        });
        Route::get('icon-weather', [DocumentationController::class, 'Weather'])
            ->name('documentation.icon-weather')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Weather Icons'), route('admin.documentation.icon-weather')
            ); 
        });
        Route::get('icon-feather', [DocumentationController::class, 'Feather'])
            ->name('documentation.icon-feather')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Feather Icons'), route('admin.documentation.icon-feather')
            ); 
        });
        Route::get('icon-8', [DocumentationController::class, 'IconEight'])
            ->name('documentation.icon-8')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Icons8'), route('admin.documentation.icon-8')
            ); 
        });
        Route::get('icon-bootstrap', [DocumentationController::class, 'Bootstrap'])
            ->name('documentation.icon-bootstrap')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Bootstrap Icons'), route('admin.documentation.icon-bootstrap')
            ); 
        });
        Route::get('icon-flag', [DocumentationController::class, 'Flag'])
            ->name('documentation.icon-flag')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Flag Icon'), route('admin.documentation.icon-flag')
            ); 
        });

        //plugin
        Route::get('plugin-table', [DocumentationController::class, 'PluginTable'])
            ->name('documentation.plugin-table')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('DataTables'), route('admin.documentation.plugin-table')
            ); 
        });
        Route::get('plugin-jsgrid', [DocumentationController::class, 'Pluginjsgrid'])
            ->name('documentation.plugin-jsgrid')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('jsGrid Table'), route('admin.documentation.plugin-jsgrid')
            ); 
        });
        Route::get('plugin-summernote', [DocumentationController::class, 'PluginSummernote'])
            ->name('documentation.plugin-summernote')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Summernote'), route('admin.documentation.plugin-summernote')
            ); 
        });
        Route::get('plugin-owlcarousel', [DocumentationController::class, 'PluginOwlcarousel'])
            ->name('documentation.plugin-owlcarousel')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Owl Carousel'), route('admin.documentation.plugin-owlcarousel')
            ); 
        });
        Route::get('plugin-masonrygallery', [DocumentationController::class, 'PluginMasonrygallery'])
            ->name('documentation.plugin-masonrygallery')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Masonry Gallery'), route('admin.documentation.plugin-masonrygallery')
            ); 
        });
        Route::get('plugin-fancybox', [DocumentationController::class, 'PluginFancybox'])
            ->name('documentation.plugin-fancybox')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('FancyBox Gallery'), route('admin.documentation.plugin-fancybox')
            ); 
        });
        Route::get('plugin-dropify', [DocumentationController::class, 'PluginDropify'])
            ->name('documentation.plugin-dropify')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Dropify'), route('admin.documentation.plugin-dropify')
            ); 
        });
        Route::get('plugin-nestable', [DocumentationController::class, 'PluginNestable'])
            ->name('documentation.plugin-nestable')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('jquery Nestable'), route('admin.documentation.plugin-nestable')
            ); 
        });
        Route::get('plugin-skedtape', [DocumentationController::class, 'PluginSkedtape'])
            ->name('documentation.plugin-skedtape')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('jQuery skedTape'), route('admin.documentation.plugin-skedtape')
            ); 
        });
        Route::get('plugin-typedjs', [DocumentationController::class, 'PluginTypedjs'])
            ->name('documentation.plugin-typedjs')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Typed Js'), route('admin.documentation.plugin-typedjs')
            ); 
        });
        Route::get('plugin-fullcalendar', [DocumentationController::class, 'PluginFullcalendar'])
            ->name('documentation.plugin-fullcalendar')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Fullcalendar'), route('admin.documentation.plugin-fullcalendar')
            ); 
        });
        Route::get('plugin-countup', [DocumentationController::class, 'PluginCountup'])
            ->name('documentation.plugin-countup')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('CountUp'), route('admin.documentation.plugin-countup')
            ); 
        });
        Route::get('plugin-imagecropper', [DocumentationController::class, 'PluginImagecropper'])
            ->name('documentation.plugin-imagecropper')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Image Cropper'), route('admin.documentation.plugin-imagecropper')
            ); 
        });
        Route::get('plugin-tabledragger', [DocumentationController::class, 'PluginTabledragger'])
            ->name('documentation.plugin-tabledragger')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Table Dragger'), route('admin.documentation.plugin-tabledragger')
            ); 
        });
        Route::get('plugin-x-editable', [DocumentationController::class, 'PluginEditable'])
            ->name('documentation.plugin-x-editable')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('X-editable'), route('admin.documentation.plugin-x-editable')
            ); 
        });
        Route::get('plugin-swiper', [DocumentationController::class, 'PluginSwiper'])
            ->name('documentation.plugin-swiper')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Swiper'), route('admin.documentation.plugin-swiper')
            ); 
        });

        //ui-elemement
        Route::get('ui-alerts', [DocumentationController::class, 'UiAlerts'])
            ->name('documentation.ui-alerts')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Alerts'), route('admin.documentation.ui-alerts')
            ); 
        });
        Route::get('ui-avatar', [DocumentationController::class, 'UiAvatar'])
            ->name('documentation.ui-avatar')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Avatar'), route('admin.documentation.ui-avatar')
            ); 
        });
        Route::get('ui-badge', [DocumentationController::class, 'UiBadge'])
            ->name('documentation.ui-badge')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Badge'), route('admin.documentation.ui-badge')
            ); 
        });
        Route::get('ui-border', [DocumentationController::class, 'UiBorder'])
            ->name('documentation.ui-border')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Borders'), route('admin.documentation.ui-border')
            ); 
        });
        Route::get('ui-breadcrumb', [DocumentationController::class, 'UiBreadcrumb'])
            ->name('documentation.ui-breadcrumb')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Breadcrumb'), route('admin.documentation.ui-breadcrumb')
            ); 
        });
        Route::get('ui-buttons', [DocumentationController::class, 'UiButtons'])
            ->name('documentation.ui-buttons')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Buttons'), route('admin.documentation.ui-buttons')
            ); 
        });
        Route::get('ui-card', [DocumentationController::class, 'UiCard'])
            ->name('documentation.ui-card')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Card'), route('admin.documentation.ui-card')
            ); 
        });
        Route::get('ui-carousel', [DocumentationController::class, 'UiCarousel'])
            ->name('documentation.ui-carousel')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Carousel'), route('admin.documentation.ui-carousel')
            ); 
        });
        Route::get('ui-collapse', [DocumentationController::class, 'UiCollapse'])
            ->name('documentation.ui-collapse')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Collapse'), route('admin.documentation.ui-collapse')
            ); 
        });
        Route::get('ui-dropdowns', [DocumentationController::class, 'UiDropdowns'])
            ->name('documentation.ui-dropdowns')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Dropdowns'), route('admin.documentation.ui-dropdowns')
            ); 
        });
        Route::get('ui-listgroup', [DocumentationController::class, 'UiListgroup'])
            ->name('documentation.ui-listgroup')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('List group'), route('admin.documentation.ui-listgroup')
            ); 
        });
        Route::get('ui-modal', [DocumentationController::class, 'UiModal'])
            ->name('documentation.ui-modal')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Modal'), route('admin.documentation.ui-modal')
            ); 
        });
        Route::get('ui-navbar', [DocumentationController::class, 'UiNavbar'])
            ->name('documentation.ui-navbar')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Navbar'), route('admin.documentation.ui-navbar')
            ); 
        });
        Route::get('ui-navs', [DocumentationController::class, 'UiNavs'])
            ->name('documentation.ui-navs')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Navs'), route('admin.documentation.ui-navs')
            ); 
        });
        Route::get('ui-pagination', [DocumentationController::class, 'UiPagination'])
            ->name('documentation.ui-pagination')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Paginations'), route('admin.documentation.ui-pagination')
            ); 
        });
        Route::get('ui-popovers', [DocumentationController::class, 'UiPopovers'])
            ->name('documentation.ui-popovers')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Popovers'), route('admin.documentation.ui-popovers')
            ); 
        });
        Route::get('ui-progress', [DocumentationController::class, 'UiProgress'])
            ->name('documentation.ui-progress')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Progress'), route('admin.documentation.ui-progress')
            ); 
        });
        Route::get('ui-scrollspy', [DocumentationController::class, 'UiScrollspy'])
            ->name('documentation.ui-scrollspy')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Scrollspy'), route('admin.documentation.ui-scrollspy')
            ); 
        });
        Route::get('ui-spinners', [DocumentationController::class, 'UiSpinners'])
            ->name('documentation.ui-spinners')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Spinners'), route('admin.documentation.ui-spinners')
            ); 
        });
        Route::get('ui-toasts', [DocumentationController::class, 'UiToasts'])
            ->name('documentation.ui-toasts')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Toasts'), route('admin.documentation.ui-toasts')
            ); 
        });
        Route::get('ui-tooltips', [DocumentationController::class, 'UiTooltips'])
            ->name('documentation.ui-tooltips')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.documentation.overview')
                ->push(__('Tooltips'), route('admin.documentation.ui-tooltips')
            ); 
        });
    });

require __DIR__ . '/applications.php';

});

require __DIR__ . '/crm.php';