const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.setPublicPath('public')
    .sass('./resources/scss/main.scss', 'public/assets/css/luno.style.min.css')
    .sass('./resources/scss/onepage-kit.scss', 'public/assets/css/onepage.kit.min.css')
    .sass('./resources/scss/plugin/_jkanban.scss', 'public/assets/css/jkanban.min.css')
    .styles('./node_modules/fullcalendar/main.min.css', 'public/assets/css/fullcalendar.min.css')
    .styles('./node_modules/datatables.net-bs5/css/dataTables.bootstrap5.css','public/assets/css/dataTables.min.css')
    .styles('./node_modules/jsgrid/dist/jsgrid.css','public/assets/css/jsgrid.min.css')
    .styles('./node_modules/summernote/dist/summernote.css','public/assets/css/summernote.min.css')
    .styles('./node_modules/dropify/dist/css/dropify.min.css', 'public/assets/css/dropify.min.css')
    .styles('./node_modules/select2/dist/css/select2.css', 'public/assets/css/select2.min.css')
    .styles('./node_modules/sweetalert2/dist/sweetalert2.css', 'public/assets/css/sweetalert2.min.css')
    .styles('./node_modules/dropify/dist/css/dropify.css', 'public/assets/css/dropify.min.css')
    .styles('./node_modules/jquery-sked-tape/dist/jquery.skedTape.css', 'public/assets/css/skedtape.min.css')
    .styles('./node_modules/cropper/dist/cropper.css', 'public/assets/css/cropper.min.css')
    .styles('./node_modules/jquery.fancybox/source/jquery.fancybox.css', 'public/assets/css/fancybox.min.css')
    .styles('./node_modules/daterangepicker/daterangepicker.css', 'public/assets/css/daterangepicker.min.css')
    .styles('./node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css', 'public/assets/css/bootstrapdatepicker.min.css')
    .styles('./node_modules/flatpickr/dist/flatpickr.css', 'public/assets/css/flatpickr.min.css')
    .styles('./node_modules/nouislider/dist/nouislider.min.css', 'public/assets/css/nouislider.min.css')
    .styles('./node_modules/ion-rangeslider/css/ion.rangeSlider.min.css', 'public/assets/css/rangeslider.min.css')
    .styles('./node_modules/jkanban/dist/jkanban.css', 'public/assets/css/jkanban.min.css')
    .styles('./node_modules/jquery.steps/dist/jquery-steps.css', 'public/assets/css/jquerysteps.min.css')
    .styles('./node_modules/x-editable-4-bs4/dist/bootstrap4-editable/css/bootstrap-editable.css', 'public/assets/css/x-editable.min.css')
    .styles('./node_modules/swiper/swiper-bundle.min.css', 'public/assets/css/swiper.min.css')
    .styles('public/assets/plugin/tui-calendar/calendar.css', 'public/assets/css/tuicalendar.min.css')
    .styles('public/assets/plugin/table-dragger/table-dragger.min.css', 'public/assets/css/tabledragger.min.css')
    .scripts([
        "./node_modules/jquery/dist/jquery.js",
        "./node_modules/bootstrap/dist/js/bootstrap.bundle.js",
        "public/assets/plugin/colorpicker/colorpicker.js",
        "public/assets/js/template.js"
    ],'public/assets/bundles/libscripts.bundle.js')
    .scripts([
        "./node_modules/apexcharts/dist/apexcharts.min.js"
    ],"public/assets/bundles/apexcharts.bundle.js")         
    .scripts([
        "./node_modules/chartist/dist/chartist.js"
    ],"public/assets/bundles/chartist.bundle.js")           
    .scripts([
        "./node_modules/jquery-knob/dist/jquery.knob.min.js"
    ],"public/assets/bundles/jqueryknob.bundle.js")         
    .scripts([
        "./node_modules/jquery-sparkline/jquery.sparkline.js"
    ],"public/assets/bundles/sparkline.bundle.js")          
    .scripts([
        "./node_modules/summernote/dist/summernote.min.js"
    ],"public/assets/bundles/summernote.bundle.js")         
    .scripts([
        "./node_modules/dropify/dist/js/dropify.min.js"
    ],"public/assets/bundles/dropify.bundle.js")            
    .scripts([
        "./node_modules/select2/dist/js/select2.js"
    ],"public/assets/bundles/select2.bundle.js")            
    .scripts([
        "./node_modules/sweetalert2/dist/sweetalert2.all.min.js"
    ],"public/assets/bundles/sweetalert2.bundle.js")        
    .scripts([
        "./node_modules/daterangepicker/moment.min.js", 
        "./node_modules/daterangepicker/daterangepicker.js"
    ],"public/assets/bundles/daterangepicker.bundle.js")    
    .scripts([
        "./node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"
    ],"public/assets/bundles/bootstrapdatepicker.bundle.js")
    .scripts([
        "./node_modules/ion-rangeslider/js/ion.rangeSlider.js"
    ],"public/assets/bundles/rangeslider.bundle.js")        
    .scripts([
        "./node_modules/toastr/build/toastr.min.js"
    ],"public/assets/bundles/toastr.bundle.js")             
    .scripts([
        "./node_modules/fullcalendar/main.min.js"
    ],"public/assets/bundles/fullcalendar.bundle.js")       
    .scripts([
        "./node_modules/datatables.net/js/jquery.dataTables.js",
        "./node_modules/datatables.net-bs5/js/dataTables.bootstrap5.js",
        "./node_modules/datatables.net-responsive/js/dataTables.responsive.js"
    ],"public/assets/bundles/dataTables.bundle.js")         
    .scripts([
        "./node_modules/jsgrid/dist/jsgrid.js"
    ],"public/assets/bundles/jsgrid.bundle.js")             
    .scripts([
        "./node_modules/jquery-nestable/jquery.nestable.js"
    ],"public/assets/bundles/nestable.bundle.js")           
    .scripts([
        "./node_modules/owl.carousel/dist/owl.carousel.min.js"
    ],"public/assets/bundles/owlcarousel.bundle.js")        
    .scripts([
        "./node_modules/masonry-layout/dist/masonry.pkgd.js"
    ],"public/assets/bundles/masonry.bundle.js")            
    .scripts([
        "./node_modules/nouislider/dist/nouislider.min.js"
    ],"public/assets/bundles/nouislider.bundle.js")         
    .scripts([
        "./node_modules/jquery.fancybox/source/jquery.fancybox.js"
    ],"public/assets/bundles/fancybox.bundle.js")           
    .scripts([
        "./node_modules/jquery-sked-tape/dist/jquery.skedTape.js"
    ],"public/assets/bundles/skedtape.bundle.js")           
    .scripts([
        "./node_modules/type-is/index.js"
    ],"public/assets/bundles/typedjs.bundle.js")            
    .scripts([
        "./node_modules/waypoints/lib/jquery.waypoints.js",
        "./node_modules/jquery.counterup/jquery.counterup.js"
    ],"public/assets/bundles/jquerycounterup.bundle.js")    
    .scripts([
        "./node_modules/cropper/dist/cropper.min.js"
    ],"public/assets/bundles/cropper.bundle.js")            
    .scripts([
        "./node_modules/clipboard/dist/clipboard.min.js"
    ],"public/assets/bundles/clipboard.bundle.js")          
    .scripts([
        "./node_modules/flatpickr/dist/flatpickr.js"
    ],"public/assets/bundles/flatpickr.bundle.js")          
    .scripts([
        "./node_modules/inputmask/dist/inputmask.js"
    ],"public/assets/bundles/inputmask.bundle.js")          
    .scripts([
        "./node_modules/bootstrap-maxlength/dist/bootstrap-maxlength.js"
    ],"public/assets/bundles/bs-maxlength.bundle.js")       
    .scripts([
        "./node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.js"
    ],"public/assets/bundles/bootstraptagsinput.bundle.js") 
    .scripts([
        "./node_modules/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.js"
    ],"public/assets/bundles/multiselectsplitter.bundle.js")
    .scripts([
        "./node_modules/jkanban/dist/jkanban.js"
    ],"public/assets/bundles/jkanban.bundle.js")            
    .scripts([
        "./node_modules/jquery.steps/dist/jquery-steps.js"
    ],"public/assets/bundles/jquerysteps.bundle.js")        
    .scripts([
        "./node_modules/swiper/swiper-bundle.min.js"
    ],"public/assets/bundles/swiper.bundle.js")             
    .scripts([
        "./node_modules/@srexi/purecounterjs/js/purecounter_vanilla.js"
    ],"public/assets/bundles/purecounter.bundle.js")       
    .sourceMaps();
   