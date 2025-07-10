@php
    $setting = App\Models\Settings::where('id',1)->first();
@endphp
<div class="modal fade" id="SettingsModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-vertical right-side modal-dialog-scrollable">
        <div class="modal-content">
            <div class="px-xl-4 modal-header">
                <h5 class="modal-title">Theme Setting</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="px-xl-4 modal-body custom_scroll">
                <!-- start: color setting -->
                <div @class(['card fieldset border border-primary p-3 setting-theme mb-4','shadow-active' => $setting->card_box_shadow == 'Y'])>
                    <span class="fieldset-tile text-primary bg-card">Color Settings</span>
                    <ul class="list-unstyled d-flex choose-skin mb-0">
                        <li data-theme="black" @class(['active' => $setting->theme == 'theme-black'])><div class="black"></div></li>
                        <li data-theme="indigo" @class(['active' => $setting->theme == 'theme-indigo'])><div class="indigo"></div></li>
                        <li data-theme="blue" @class(['active' => $setting->theme == 'theme-blue'])><div class="blue"></div></li>
                        <li data-theme="cyan" @class(['active' => $setting->theme == 'theme-cyan'])><div class="cyan"></div></li>
                        <li data-theme="green" @class(['active' => $setting->theme == 'theme-green'])><div class="green"></div></li>
                        <li data-theme="orange" @class(['active' => $setting->theme == 'theme-orange'])><div class="orange"></div></li>
                        <li data-theme="blush" @class(['active' => $setting->theme == 'theme-blush'])><div class="blush"></div></li>
                        <li data-theme="red" @class(['active' => $setting->theme == 'theme-red'])><div class="red"></div></li>
                        <li data-theme="dynamic" @class(['active' => $setting->theme == 'theme-dynamic'])><div class="dynamic"><i class="fa fa-paint-brush"></i></div></li>
                    </ul>
                    <!-- Settings: Theme dynamics -->
                    <div @class(['card fieldset border border-primary p-3 dt-setting mt-4','shadow-active' => $setting->card_box_shadow == 'Y'])>
                        <span class="fieldset-tile text-primary bg-card">Dynamic Color Settings</span>
                        <div class="row g-3">
                            <div class="col-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <button id="primaryColorPicker" class="btn bg-primary avatar xs me-2"></button>
                                        <label>Primary Color</label>
                                    </li>
                                    <li>
                                        <button id="secondaryColorPicker" class="btn bg-secondary avatar xs me-2"></button>
                                        <label>Secondary Color</label>
                                    </li>
                                    <li>
                                        <button id="BodyColorPicker" class="btn btn-outline-secondary bg-body avatar xs me-2"></button>
                                        <label>Site Background</label>
                                    </li>
                                    <li>
                                        <button id="CardColorPicker" class="btn btn-outline-secondary bg-card avatar xs me-2"></button>
                                        <label>Widget Background</label>
                                    </li>
                                    <li>
                                        <button id="BorderColorPicker" class="btn btn-outline-secondary bg-card avatar xs me-2"></button>
                                        <label>Border Color</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <button id="chartColorPicker1" class="btn chart-color1 avatar xs me-2"></button>
                                        <label>Chart Color 1</label>
                                    </li>
                                    <li>
                                        <button id="chartColorPicker2" class="btn chart-color2 avatar xs me-2"></button>
                                        <label>Chart Color 2</label>
                                    </li>
                                    <li>
                                        <button id="chartColorPicker3" class="btn chart-color3 avatar xs me-2"></button>
                                        <label>Chart Color 3</label>
                                    </li>
                                    <li>
                                        <button id="chartColorPicker4" class="btn chart-color4 avatar xs me-2"></button>
                                        <label>Chart Color 4</label>
                                    </li>
                                    <li>
                                        <button id="chartColorPicker5" class="btn chart-color5 avatar xs me-2"></button>
                                        <label>Chart Color 5</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- start: Light/dark -->
                <div @class(['card fieldset border setting-mode mb-4','shadow-active' => $setting->card_box_shadow == 'Y'])>
                    <span class="fieldset-tile bg-card">Light/Dark & Contrast Layout</span>
                    <div class="c_radio d-flex text-center">
                        <label class="m-1 theme-switch" for="theme-switch">
                            <input type="checkbox" id="theme-switch" />
                            <span class="card p-2">
                                <img class="img-fluid" src="{{url('/')}}/assets/images/dark-version.svg" alt="Dark Mode" />
                            </span>
                        </label>
                        <label class="m-1 theme-dark" for="theme-dark">
                            <input type="checkbox" id="theme-dark" />
                            <span class="card p-2">
                                <img class="img-fluid" src="{{url('/')}}/assets/images/dark-theme.svg" alt="Theme Dark Mode" />
                            </span>
                        </label>
                        <label class="m-1 theme-high-contrast" for="theme-high-contrast">
                            <input type="checkbox" id="theme-high-contrast"/>
                            <span class="card p-2">
                                <img class="img-fluid" src="{{url('/')}}/assets/images/high-version.svg" alt="High Contrast" />
                            </span>
                        </label>
                        <label class="m-1 theme-rtl" for="theme-rtl">
                            <input type="checkbox" id="theme-rtl"/>
                            <span class="card p-2">
                                <img class="img-fluid" src="{{url('/')}}/assets/images/rtl-version.svg" alt="RTL Mode!" />
                            </span>
                        </label>
                    </div>
                </div>
                <!-- start: Font setting -->
                <div @class(['card fieldset border setting-font mb-4','shadow-active' => $setting->card_box_shadow == 'Y'])>
                    <span class="fieldset-tile bg-card">Google Font Settings</span>
                    <div class="c_radio d-flex text-center font_setting">
                        <label class="m-1" for="font-opensans">
                            <input type="radio" name="font" id="font-opensans" value="font-opensans" {{ $setting->font == "font-opensans" ? 'checked':''}}/>
                            <span class="card p-2">
                                <img class="img-fluid" src="{{url('/')}}/assets/images/font-opensans.svg" alt="Dark Mode" />
                            </span>
                        </label>
                        <label class="m-1" for="font-quicksand">
                            <input type="radio" name="font" id="font-quicksand" value="font-quicksand" {{ $setting->font == "font-quicksand" ? 'checked':''}}/>
                            <span class="card p-2">
                                <img class="img-fluid" src="{{url('/')}}/assets/images/font-quicksand.svg" alt="Dark Mode" />
                            </span>
                        </label>
                        <label class="m-1" for="font-nunito">
                            <input type="radio" name="font" id="font-nunito" value="font-nunito" {{ $setting->font == "font-nunito" ? 'checked':''}} />
                            <span class="card p-2">
                                <img class="img-fluid" src="{{url('/')}}/assets/images/font-nunito.svg" alt="Dark Mode" />
                            </span>
                        </label>
                        <label class="m-1" for="font-raleway">
                            <input type="radio" name="font" id="font-raleway" value="font-raleway" {{ $setting->font == "font-raleway" ? 'checked':''}}/>
                            <span class="card p-2">
                                <img class="img-fluid" src="{{url('/')}}/assets/images/font-raleway.svg" alt="Dark Mode" />
                            </span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="px-xl-4 modal-footer d-flex justify-content-start text-center">
                <button type="button" id="save_changes" class="btn flex-fill btn-primary lift" data-bs-dismiss="modal">Save Changes</button>
                <button type="button" class="btn flex-fill btn-white border lift" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<a class="page-setting" href="#" title="Settings" data-bs-toggle="modal" data-bs-target="#SettingsModal"><i class="fa fa-gear text-light"></i></a>