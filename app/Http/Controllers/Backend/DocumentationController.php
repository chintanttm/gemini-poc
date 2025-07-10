<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DocumentationController extends Controller
{
    //DOCUMENTATION
    public function Overview()
    {
        return view('backend.documentation.overview');
    }

    public function DocSetup()
    {
        return view('backend.documentation.doc-setup');
    }

    public function DocStructure()
    {
        return view('backend.documentation.doc-structure');
    }

    public function DocReferences()
    {
        return view('backend.documentation.doc-references');
    }

    public function Dochelperclass()
    {
        return view('backend.documentation.doc-helperclass');
    }

    public function DocStaterpage()
    {
        return view('backend.documentation.doc-staterpage');
    }

    public function DocAnimation()
    {
        return view('backend.documentation.doc-animation');
    }

    public function DocChangelog()
    {
        return view('backend.documentation.doc-changelog');
    }

    //WIDGET CARD'S
    public function wCards()
    {
        return view('backend.documentation.w-cards');
    }

    public function wCardsTiles()
    {
        return view('backend.documentation.w-cards-tiles');
    }

    public function wCardsUser()
    {
        return view('backend.documentation.w-cards-user');
    }

    public function wCardsTabbed()
    {
        return view('backend.documentation.w-cards-tabbed');
    }

    public function wCardsRibbons()
    {
        return view('backend.documentation.w-cards-ribbons');
    }

    public function wCardsList()
    {
        return view('backend.documentation.w-cards-list');
    }

    public function wCardsCharts()
    {
        return view('backend.documentation.w-cards-charts');
    }

    public function wCardsTable()
    {
        return view('backend.documentation.w-cards-tables');
    }

    //CHARTS
    public function ChartApex()
    {
        return view('backend.documentation.chart-apex');
    }

    public function ChartJs()
    {
        return view('backend.documentation.chartjs');
    }

    public function ChartKnob()
    {
        return view('backend.documentation.chart-knob');
    }

    public function ChartSparkline()
    {
        return view('backend.documentation.chart-sparkline');
    }

    //CHARADVANCED ELEMENTSTS
    public function ElementClipboard()
    {
        return view('backend.documentation.element-clipboard');
    }
    public function ElementColorpicker()
    {
        return view('backend.documentation.element-colorpicker');
    }
    public function ElementDaterange()
    {
        return view('backend.documentation.element-daterange');
    }
    public function ElementDatepicker()
    {
        return view('backend.documentation.element-datepicker');
    }
    public function ElementDropify()
    {
        return view('backend.documentation.element-dropify');
    }
    public function ElementFlatpickr()
    {
        return view('backend.documentation.element-flatpickr');
    }
    public function ElementInputmask()
    {
        return view('backend.documentation.element-inputmask');
    }
    public function ElementImageinput()
    {
        return view('backend.documentation.element-imageinput');
    }
    public function ElementMaxlength()
    {
        return view('backend.documentation.element-maxlength');
    }
    public function ElementNouislider()
    {
        return view('backend.documentation.element-nouislider');
    }
    public function ElementPasswordmeter()
    {
        return view('backend.documentation.element-passwordmeter');
    }
    public function ElemenTrangeslider()
    {
        return view('backend.documentation.element-rangeslider');
    }
    public function ElementSweetalert2()
    {
        return view('backend.documentation.element-sweetalert2');
    }
    public function ElementTagsinput()
    {
        return view('backend.documentation.element-tagsinput');
    }
    public function ElementSelect2()
    {
        return view('backend.documentation.element-select2');
    }
    public function ElementMultiselectsplitter()
    {
        return view('backend.documentation.element-multiselectsplitter');
    }
    public function ElementJkanban()
    {
        return view('backend.documentation.element-jkanban');
    }

    //FORM 
    public function FormBootstrap()
    {
        return view('backend.documentation.form-bootstrap');
    }
    public function FormWizardH()
    {
        return view('backend.documentation.form-wizard-h');
    }
    public function FormWizardV()
    {
        return view('backend.documentation.form-wizard-v');
    }
    public function FormWizardValidate()
    {
        return view('backend.documentation.form-wizard-validate');
    }
    public function FormCustome()
    {
        return view('backend.documentation.form-custome');
    }
    //FONT ELEMENT
    public function Fontawesome()
    {
        return view('backend.documentation.icon-fontawesome');
    }
    public function Linear()
    {
        return view('backend.documentation.icon-linear');
    }
    public function Weather()
    {
        return view('backend.documentation.icon-weather');
    }
    public function Feather()
    {
        return view('backend.documentation.icon-feather');
    }
    public function IconEight()
    {
        return view('backend.documentation.icon-8');
    }
    public function Bootstrap()
    {
        return view('backend.documentation.icon-bootstrap');
    }
    public function Flag()
    {
        return view('backend.documentation.icon-flag');
    }

    //PLUGIN
    public function PluginTable()
    {
        return view('backend.documentation.plugin-table');
    }
    public function Pluginjsgrid()
    {
        return view('backend.documentation.plugin-jsgrid');
    }
    public function PluginSummernote()
    {
        return view('backend.documentation.plugin-summernote');
    }
    public function PluginOwlcarousel()
    {
        return view('backend.documentation.plugin-owlcarousel');
    }
    public function PluginMasonrygallery()
    {
        return view('backend.documentation.plugin-masonrygallery');
    }
    public function PluginFancybox()
    {
        return view('backend.documentation.plugin-fancybox');
    }
    public function PluginDropify()
    {
        return view('backend.documentation.plugin-dropify');
    }
    public function PluginNestable()
    {
        return view('backend.documentation.plugin-nestable');
    }
    public function PluginSkedtape()
    {
        return view('backend.documentation.plugin-skedtape');
    }
    public function PluginTypedjs()
    {
        return view('backend.documentation.plugin-typedjs');
    }
    public function PluginFullcalendar()
    {
        return view('backend.documentation.plugin-fullcalendar');
    }
    public function PluginCountup()
    {
        return view('backend.documentation.plugin-countup');
    }
    public function PluginImagecropper()
    {
        return view('backend.documentation.plugin-imagecropper');
    }
    public function PluginTabledragger()
    {
        return view('backend.documentation.plugin-tabledragger');
    }
    public function PluginEditable()
    {
        return view('backend.documentation.plugin-x-editable');
    }
    public function PluginSwiper()
    {
        return view('backend.documentation.plugin-swiper');
    }

    //COMPONENTS
    public function UiAlerts()
    {
        return view('backend.documentation.ui-alerts');
    }
    public function UiAvatar()
    {
        return view('backend.documentation.ui-avatar');
    }
    public function UiBadge()
    {
        return view('backend.documentation.ui-badge');
    }
    public function UiBorder()
    {
        return view('backend.documentation.ui-border');
    }
    public function UiBreadcrumb()
    {
        return view('backend.documentation.ui-breadcrumb');
    }
    public function UiButtons()
    {
        return view('backend.documentation.ui-buttons');
    }
    public function UiCard()
    {
        return view('backend.documentation.ui-card');
    }
    public function UiCarousel()
    {
        return view('backend.documentation.ui-carousel');
    }
    public function UiCollapse()
    {
        return view('backend.documentation.ui-collapse');
    }
    public function UiDropdowns()
    {
        return view('backend.documentation.ui-dropdowns');
    }
    public function UiListgroup()
    {
        return view('backend.documentation.ui-listgroup');
    }
    public function UiModal()
    {
        return view('backend.documentation.ui-modal');
    }
    public function UiNavbar()
    {
        return view('backend.documentation.ui-navbar');
    }
    public function UiNavs()
    {
        return view('backend.documentation.ui-navs');
    }
    public function UiPagination()
    {
        return view('backend.documentation.ui-pagination');
    }
    public function UiPopovers()
    {
        return view('backend.documentation.ui-popovers');
    }
    public function UiProgress()
    {
        return view('backend.documentation.ui-progress');
    }
    public function UiScrollspy()
    {
        return view('backend.documentation.ui-scrollspy');
    }
    public function UiSpinners()
    {
        return view('backend.documentation.ui-spinners');
    }
    public function UiToasts()
    {
        return view('backend.documentation.ui-toasts');
    }
    public function UiTooltips()
    {
        return view('backend.documentation.ui-tooltips');
    }

}
