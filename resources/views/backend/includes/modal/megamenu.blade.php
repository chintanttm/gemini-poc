<div class="modal fade" id="megamenu" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content shadow-none">
            <div class="modal-header py-xl-5 py-4">
                <div class="d-flex align-items-center justify-content-between {{ $setting->container_fluid == 'Y' ? 'container-fluid' : 'container' }}">
                    <svg height="26" viewBox="0 0 136 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="fill-primary" d="M0.380005 1.22398H10.78V37H0.380005V1.22398ZM15.044 24.832H12.964V16.876H14.732C15.8067 16.876 16.6213 16.8413 17.176 16.772C17.7307 16.668 18.164 16.4947 18.476 16.252C18.7533 16.0093 18.944 15.6453 19.048 15.16C19.152 14.6747 19.204 13.964 19.204 13.028C19.204 12.092 19.152 11.3813 19.048 10.896C18.944 10.376 18.7533 9.99465 18.476 9.75198C18.1987 9.50932 17.7827 9.35332 17.228 9.28398C16.708 9.21465 15.876 9.17998 14.732 9.17998H12.964V1.22398H18.32C20.7813 1.22398 22.7747 1.46665 24.3 1.95198C25.8253 2.43732 27.004 3.18265 27.836 4.18798C28.5987 5.12398 29.1013 6.28532 29.344 7.67198C29.6213 9.05865 29.76 10.844 29.76 13.028C29.76 15.836 29.5 18.0027 28.98 19.528C28.252 21.4693 26.9693 22.8387 25.132 23.636L30.54 37H19.62L15.044 24.832Z" fill="black"/>
                        <path class="fill-primary" d="M35.4191 1.22398H45.8191V37H35.4191V1.22398ZM48.0031 1.22398H61.2111V9.17998H48.0031V1.22398ZM48.0031 14.952H58.7671V22.908H48.0031V14.952ZM48.0031 29.044H61.2111V37H48.0031V29.044Z" fill="black"/>
                        <path class="fill-primary" d="M67.462 2.67998V1.22398H77.862L97.934 35.492V37H87.586L67.462 2.67998ZM88.054 14.276V1.22398H97.934V31.176L88.054 14.276ZM67.462 6.99598L77.342 23.896V37H67.462V6.99598Z" fill="black"/>
                        <path class="fill-primary" d="M124.549 19.112C124.549 16.096 124.531 14.12 124.497 13.184C124.427 11.7627 124.237 10.74 123.925 10.116C123.613 9.45732 123.11 9.05865 122.417 8.91998C121.723 8.81598 120.735 8.76398 119.453 8.76398C117.962 8.76398 116.991 8.83332 116.541 8.97198V0.859982C116.853 0.825315 117.321 0.807983 117.945 0.807983H119.453C123.335 0.807983 126.334 1.11998 128.449 1.74398C130.598 2.33332 132.158 3.32132 133.129 4.70798C134.03 5.99065 134.585 7.67198 134.793 9.75198C135.035 11.832 135.157 14.952 135.157 19.112C135.157 22.752 135.07 25.56 134.897 27.536C134.758 29.4773 134.377 31.0893 133.753 32.372C133.059 33.828 131.985 34.9373 130.529 35.7C129.107 36.4627 127.114 36.9653 124.549 37.208V19.112ZM119.453 37.416C114.391 37.416 110.751 36.8613 108.533 35.752C107.389 35.1973 106.487 34.452 105.829 33.516C105.17 32.58 104.685 31.4187 104.373 30.032C104.095 28.8187 103.922 27.432 103.853 25.872C103.783 24.2773 103.749 22.024 103.749 19.112C103.749 15.472 103.818 12.6813 103.957 10.74C104.13 8.79865 104.529 7.16931 105.153 5.85198C105.846 4.43065 106.903 3.33865 108.325 2.57598C109.746 1.81332 111.757 1.29332 114.357 1.01598V19.112C114.357 21.1573 114.391 23.116 114.461 24.988C114.53 26.4093 114.703 27.4493 114.981 28.108C115.293 28.7667 115.795 29.148 116.489 29.252C117.078 29.3907 118.066 29.46 119.453 29.46C120.874 29.46 121.845 29.408 122.365 29.304V37.364C122.053 37.3986 121.585 37.416 120.961 37.416H119.453Z" fill="black"/>
                    </svg>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
            <div class="modal-body custom_scroll">
                <div class="{{ $setting->container_fluid == 'Y' ? 'container-fluid' : 'container' }}">
                    <div class="row g-3">
                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="row g-3 row-deck">
                                @include('backend.includes.menus.reno-menu.mega-menu')
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="row g-3">
                                <h5>Quick Links</h5>
                                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-6">
                                    <div class="row g-3 row-deck">
                                        @include('backend.includes.menus.reno-menu.quick-links')
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="row g-3 row-deck">
                                        @foreach($sidebarMenu['renoAccountMenu'] as $menu)
                                            <div class="col-12">
                                                <div class="card bg-success bg-opacity-10 border-0">
                                                    <div class="card-body color-600">
                                                        <h6 class="card-title">{{$menu['name']}}</h6>
                                                        <ul class="fs-6 fw-normal lh-lg mb-0 list-unstyled">
                                                            @foreach($menu['children'] as $childern)
                                                                <li>
                                                                    <a class="color-600" href="{{ $childern['routerLink'] != '' ? route($childern['routerLink']) : '#'}}">{{ $childern['name'] }}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        <div class="col-12">
                                            <div class="card bg-light-warning border-0">
                                                <a href="#" class="card-body color-600">
                                                    <i class="fa fa-columns fa-lg mb-3 text-muted"></i>
                                                    <h6 class="card-title mb-0">Blog</h6>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>