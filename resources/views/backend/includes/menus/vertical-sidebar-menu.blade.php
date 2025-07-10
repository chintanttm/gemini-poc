<ul class="menu-list">
    @foreach($sidebarMenu['menu'] as $menu)
        @if(empty($menu['children']))
            @if($menu['isLable'] === true)
                <li class="divider py-2 lh-sm">
                    <span class="small">{{ $menu['name'] }}</span><br> 
                    <small class="text-muted">{{ $menu['sub_text'] }} </small>
                </li>
            @else
                <li>
                    <a class="m-link {{ ($menu['routerLink'] === Route::current()->getName()) == Route::current()->uri() ? 'active' : '' }}" href="{{ $menu['routerLink'] != '' ? route($menu['routerLink']) : '#'}}">
                        {!! $menu['iconClass'] !!}
                        <span class="ms-2">{{ $menu['name'] }}</span>
                    </a>
                </li>
            @endif
        @else
            <li class="collapsed">
                <a class="m-link {{ request()->routeIs($menu['routerLink']) ? 'active' : '' }}" data-bs-toggle="collapse" data-bs-target="#menu-{{ $menu['identifier'] }}" href="#">
                    {!! $menu['iconClass'] !!}
                    <span class="ms-2">{{ $menu['name'] }}</span> 
                    <span class="arrow fa fa-angle-right ms-auto text-end"></span>
                </a>
                <ul class="sub-menu collapse {{ request()->routeIs($menu['routerLink']) ? 'show active' : '' }}" id="menu-{{ $menu['identifier'] }}">
                    @foreach($menu['children'] as $childern)
                        @if(!empty($childern))
                            @if(!empty($childern['routerLink']) )
                                <li>
                                    <a class="ms-link {{ ($childern['routerLink'] === Route::current()->getName()) == Route::current()->uri() ? 'active' : '' }}" href="{{ $childern['routerLink'] != '' ? route($childern['routerLink']) : ''}}">
                                        {{ $childern['name'] }}
                                    </a>
                                </li>
                            @else
                                <li>
                                    @if($childern['children'])
                                        <li class="collapsed">
                                            <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-{{ $childern['identifier'] }}" href="#">
                                                <span>{{ $childern['name'] }}</span> 
                                                <span class="arrow fa fa-angle-right ms-auto text-end"></span>
                                            </a> 
                                            <ul class="sub-menu collapse" id="menu-{{ $childern['identifier'] }}">
                                                @foreach($childern['children'] as $subchildern)
                                                    @if($subchildern['children'])
                                                        <li class="collapsed">
                                                            <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-{{ $subchildern['identifier'] }}" href="#">
                                                                <span>{{ $subchildern['name'] }}</span> <span class="arrow fa fa-angle-right ms-auto text-end"></span>
                                                            </a>
                                                            <!-- Menu: Sub menu ul -->
                                                            <ul class="sub-menu collapse" id="menu-{{ $subchildern['identifier'] }}">
                                                                @foreach($subchildern['children'] as $subMenu)
                                                                    <li><a class="ms-link" href="#">{{ $subMenu['name'] }}</a></li>
                                                                @endforeach
                                                            </ul>
                                                        </li>
                                                    @else
                                                        <li><a class="ms-link" href="#">{{ $subchildern['name'] }}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </li>
                                    @else
                                        <a class="ms-link" href="#">
                                            {{ $childern['name'] }}
                                        </a>
                                    @endif
                                </li>
                            @endif
                        @endif
                    @endforeach
                </ul>
            </li>
        @endif
    @endforeach
</ul>
<ul class="menu-list">
    @foreach($sidebarMenu['resourcemenu'] as $resMenu)
        @if(empty($resMenu['children']) )
            @if($resMenu['isLable'] === true)
                <li class="divider py-2 lh-sm">
                    <span class="small">{{ $resMenu['name'] }}</span><br> 
                    <small class="text-muted">{{ $resMenu['sub_text'] }} </small>
                </li>
            @else
                <li>
                    <a class="m-link {{ ($resMenu['routerLink'] === Route::current()->getName()) == Route::current()->uri() ? 'active' : '' }}" href="{{ $resMenu['routerLink'] != '' ? route($resMenu['routerLink']) : '#'}}">
                        {!! $resMenu['iconClass'] !!}
                        <span class="ms-2">{{ $resMenu['name'] }}</span>
                        @if($resMenu['identifier'] == 'changelog')
                            <span id="Changelog"></span>
                        @endif
                    </a>
                </li>
            @endif
        @endif
    @endforeach
</ul>