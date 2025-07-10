<?php
    $loggedinUser = Auth::user();
    $setting = App\Models\Settings::where('user_id', $loggedinUser->id)->first();
    if(empty($setting)){
        $setting =  App\Models\Settings::where('id', 1)->first();
    }
?>
<div class="page-toolbar px-xl-4 px-sm-2 px-0 py-3">
    <div class="{{ $setting->container_fluid == 'Y' ? 'container-fluid' : 'container' }}">
        <div class="row mb-3 align-items-center">
            <div class="col">
                <ol class="breadcrumb bg-transparent mb-0">
                    @foreach (Breadcrumbs::current() as $crumb)
                        @if ($crumb->url() && !$loop->last)
                            <li class="breadcrumb-item">
                                <x-utils.link :href="$crumb->url()" :text="$crumb->title()" class="text-secondary"/>
                            </li>
                        @else
                            <li class="breadcrumb-item active">
                                {{ $crumb->title() }}
                            </li>
                        @endif
                    @endforeach
                </ol>
            </div>
            @foreach($sidebarMenu['documentationMenu'] as $parentKey => $menu)
                @foreach($menu['children'] as $childKey => $childern)
                <?php 
                        $childPreviousKey = array_key_exists($childKey - 1, $menu['children']) ? $menu['children'][ $childKey - 1 ] : false;
                        $childNextKey  = array_key_exists($childKey + 1, $menu['children']) ? $menu['children'][$childKey + 1 ] : false;
                        if($loop->last){
                            $parentNextKey = array_key_exists($parentKey + 1, $sidebarMenu['documentationMenu']) ? $sidebarMenu['documentationMenu'][ $parentKey + 1 ] : false;
                            if($parentNextKey){
                                $childNextKey = $parentNextKey['children'][0];
                            }
                        }
                        if($loop->first){
                            $parentPreviousKey = array_key_exists($parentKey - 1, $sidebarMenu['documentationMenu']) ? $sidebarMenu['documentationMenu'][ $parentKey - 1 ] : false;
                            if($parentPreviousKey){
                                $count = count($parentPreviousKey['children']);
                                $childPreviousKey = $parentPreviousKey['children'][$count - 1];
                            }
                            
                        }
                    ?>
                    @if($childern['routerLink'] === Route::current()->getName()) 
                        <div class="col text-lg-end">
                            @if($childPreviousKey)
                                <a class="btn btn-primary" href="{{ $childPreviousKey['routerLink'] != '' ? route($childPreviousKey['routerLink']) : '#'}}"><i class="fa fa-long-arrow-left me-2"></i>{{ $childPreviousKey['name'] }}</a>
                            @endif
                            @if($childNextKey)
                                <a class="btn btn-secondary" href="{{ $childNextKey['routerLink'] != '' ? route($childNextKey['routerLink']) : '#'}}">{{ $childNextKey['name'] }}<i class="fa fa-long-arrow-right ms-2"></i></a>
                            @endif
                        </div>  
                    @endif
                @endforeach
            @endforeach
        </div>
    </div>
</div>