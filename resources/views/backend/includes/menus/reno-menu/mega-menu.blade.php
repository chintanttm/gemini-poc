@php
    $loggedinUser = Auth::user();
    $setting = App\Models\Settings::where('user_id', $loggedinUser->id)->first();
    if(empty($setting)){
        $setting =  App\Models\Settings::where('id', 1)->first();
    }
@endphp
@foreach($sidebarMenu['renoMenu'] as $menu)
    <div class="col-lg-4 col-md-4 col-sm-6 col-6">
        <div>
            <h5>{{ $menu['name'] }}</h5>
            <ul class="fs-6 fw-normal lh-lg mb-0 list-unstyled mt-3">
                @foreach($menu['children'] as $childern)
                    <li>
                        @if($childern['isNeededAjaxFunction'])
                            <a class="color-600" href="{{ $childern['routerLink'] != '' ? route($childern['routerLink']) : '#'}}" onClick="updateLayout('{{ $childern["ajaxCallKey"] }}', '{{ $childern["ajaxCallValue"] }}')">{{ $childern['name'] }}</a>
                        @else
                            <a class="{{ ($childern['routerLink'] === Route::current()->getName()) ? 'active' : 'color-600' }}" href="{{ $childern['routerLink'] != '' ? route($childern['routerLink']) : '#'}}">{{ $childern['name'] }}</a>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endforeach
<script>
    function updateLayout(key, value)
    {
        if(key == 'horizontal_menu' && value == 'Y'){
            settingData.horizontal_menu = value
            settingData.rtl_mode = 'N'
            settingData.sidebar_mode_dark = 'N'
            settingData.fullscreen_menu = 'N'
        }else if(key == 'rtl_mode' && value == 'Y'){
            settingData.rtl_mode = value
            settingData.horizontal_menu = 'N'
            settingData.sidebar_mode_dark = 'N'
            settingData.fullscreen_menu = 'N'
        }else if(key == 'sidebar_mode_dark' && value == 'Y'){
            settingData.sidebar_mode_dark = value
            settingData.rtl_mode = 'N'
            settingData.horizontal_menu = 'N'
            settingData.fullscreen_menu = 'N'
        }else if(key == 'fullscreen_menu' && value == 'N'){
            settingData.fullscreen_menu = value
            settingData.sidebar_mode_dark = 'N'
            settingData.rtl_mode = 'N'
            settingData.horizontal_menu = 'N'
        }
        $.ajax({
            url: "{{ route('admin.setting.update', $setting->id) }}",
            type: 'PATCH',
            data: settingData
        });
    }
</script>