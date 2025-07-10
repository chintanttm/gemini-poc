@foreach($sidebarMenu['documentationMenu'] as $menu)
    <ul class="menu-list">
        <li class="divider py-2 lh-sm">
            <span class="text-primary small fw-bold text-uppercase">{{ $menu['name'] }}</span><br>
            <small class="text-muted">{{ $menu['sub_title'] }}</small>
        </li>
        @foreach($menu['children'] as $childern)
            <li>
                <a @class(['m-link','active' => ($childern['routerLink'] === Route::current()->getName())]) href="{{ $childern['routerLink'] != '' ? route($childern['routerLink']) : '#'}}">
                    <i class="fa fa-angle-right"></i>{{ $childern['name'] }}
                    @if($childern['name'] == 'Changelog')
                        <span id="Changelog"></span>
                    @endif
                </a>
            </li>
        @endforeach
    </ul>
@endforeach