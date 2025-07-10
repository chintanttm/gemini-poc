@extends('backend.layouts.documentation-app')

@section('title', __('Documentation'))

@section('content')
    <div class="row g-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0"><i class="fa fa-diamond me-2"></i>References</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-sm table-hover">
                            <tbody>
                                <tr>
                                    <td style="width: 140px;">Google font</td>
                                    <td><a target="_blank" href="https://fonts.google.com/">https://fonts.google.com/</a></td>
                                </tr>
                                <tr>
                                    <td>Bootstrap</td>
                                    <td><a target="_blank" href="https://getbootstrap.com/">https://getbootstrap.com/</a></td>
                                </tr>
                                <tr>
                                    <td>ReactJs</td>
                                    <td><a target="_blank" href="https://reactjs.org/">https://reactjs.org/</a></td>
                                </tr>
                                <tr>
                                    <td>Angular</td>
                                    <td><a target="_blank" href="https://angular.io/">https://angular.io/</a></td>
                                </tr>
                                <tr>
                                    <td>VueJs</td>
                                    <td><a target="_blank" href="https://vuejs.org/">https://vuejs.org/</a></td>
                                </tr>
                                <tr>
                                    <td>Laravel</td>
                                    <td><a target="_blank" href="https://laravel.com/">https://laravel.com/</a></td>
                                </tr>
                                <tr>
                                    <td>Jquery</td>
                                    <td><a target="_blank" href="https://jquery.com/">https://jquery.com/</a></td>
                                </tr>
                                <tr>
                                    <td>SASS</td>
                                    <td><a target="_blank" href="https://sass-lang.com/">https://sass-lang.com/</a></td>
                                </tr>
                                <tr>
                                    <td>Grunt</td>
                                    <td><a target="_blank" href="https://gruntjs.com/">https://gruntjs.com/</a></td>
                                </tr>
                                <tr>
                                    <td>NPM</td>
                                    <td><a target="_blank" href="https://www.npmjs.com/">https://www.npmjs.com/</a></td>
                                </tr>
                                <tr>
                                    <td>Fontawesome</td>
                                    <td><a target="_blank" href="https://fontawesome.com/v4.7.0/">https://fontawesome.com/v4.7.0/</a></td>
                                </tr>
                                <tr>
                                    <td>Weather Icons</td>
                                    <td><a target="_blank" href="http://erikflowers.github.io/weather-icons/">http://erikflowers.github.io/weather-icons/</a></td>
                                </tr>
                                <tr>
                                    <td>Apex Charts</td>
                                    <td><a target="_blank" href="https://apexcharts.com/">https://apexcharts.com/</a></td>
                                </tr>
                                <tr>
                                    <td>Sparkline Charts</td>
                                    <td><a target="_blank" href="https://omnipotent.net/jquery.sparkline/#s-about">https://omnipotent.net/jquery.sparkline/#s-about</a></td>
                                </tr>
                                <tr>
                                    <td>Datatables</td>
                                    <td><a target="_blank" href="https://www.datatables.net/">https://www.datatables.net/</a></td>
                                </tr>
                                <tr>
                                    <td>Fullcalendar</td>
                                    <td><a target="_blank" href="https://fullcalendar.io/">https://fullcalendar.io/</a></td>
                                </tr>
                                <tr>
                                    <td>Pexels</td>
                                    <td><a target="_blank" href="https://www.pexels.com/">https://www.pexels.com/</a></td>
                                </tr>
                                <tr>
                                    <td>Freepik</td>
                                    <td><a target="_blank" href="https://www.freepik.com/">https://www.freepik.com/</a></td>
                                </tr>
                                <tr>
                                    <td>Owl Carousel</td>
                                    <td><a target="_blank" href="https://owlcarousel2.github.io/OwlCarousel2/">https://owlcarousel2.github.io/OwlCarousel2/</a></td>
                                </tr>
                                <tr>
                                    <td>Masonry Gallery</td>
                                    <td><a target="_blank" href="https://masonry.desandro.com/">https://masonry.desandro.com/</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- start: navigation btn -->
        @include('backend.documentation.next-previous-url')
    </div>
@endsection