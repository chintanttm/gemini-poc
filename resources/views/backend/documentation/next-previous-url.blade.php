<?php
    $sidebarMenu = config('menu_json');
?>

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
            <div class="col-12">
                @if($childPreviousKey)
                    <a class="btn lift btn-lg rounded-4 btn-primary" href="{{ $childPreviousKey['routerLink'] != '' ? route($childPreviousKey['routerLink']) : '#'}}"><i class="fa fa-long-arrow-left me-3"></i>{{ $childPreviousKey['name'] }}</a>
                @endif
                @if($childNextKey)
                    <a class="btn lift btn-lg rounded-4 btn-secondary" href="{{ $childNextKey['routerLink'] != '' ? route($childNextKey['routerLink']) : '#'}}"><i class="fa fa-long-arrow-right me-3"></i>{{ $childNextKey['name'] }}</a>
                @endif
            </div> 
        @endif
    @endforeach
@endforeach


