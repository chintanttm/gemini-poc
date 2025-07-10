@foreach($sidebarMenu['renoQuickLinksMenu'] as $menu)
    <div class="col-6">
        <div class="card border-0 {{ $menu['bgColor'] }}">
            <a href="{{ $menu['routerLink'] != '' ? route($menu['routerLink']) : '#'}}" class="card-body color-600">
                <i class="fa-lg mb-2 text-muted {{ $menu['icon'] }}"></i>
                <h6 class="card-title mb-0">{{ $menu['name'] }}</h6>
            </a>
        </div>
    </div>
@endforeach
<div class="col-12">
    <div class="card bg-info bg-opacity-10 border-0">
        <div id="oneExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="1500">
                    <div class="card-body">
                        <div class="text-uppercase">File Usage</div>
                        <div class="mt-2">
                            <label class="small d-flex justify-content-between">130,347 / 250,000<span>52.14%</span></label>
                            <div class="progress mt-1" style="height: 2px;">
                                <div class="progress-bar chart-color1" role="progressbar" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100" style="width: 52%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="1500">
                    <div class="card-body">
                        <div class="text-uppercase">MySQL® Disk Usage</div>
                        <div class="mt-2">
                            <label class="small d-flex justify-content-between">9.08 GB / 26.2 GB <span>22.74%</span></label>
                            <div class="progress mt-1" style="height: 2px;">
                                <div class="progress-bar chart-color1" role="progressbar" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100" style="width: 22%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="1500">
                    <div class="card-body">
                        <div class="text-uppercase">MySQL® Databases</div>
                        <div class="mt-2">
                            <label class="small d-flex justify-content-between">1 / 1 <span>100%</span></label>
                            <div class="progress mt-1" style="height: 2px;">
                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>