<div class="col-xl-2 col-md-4 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
        <div class="card-body p-3">
            <div class="row">
                <div class="col-8">
                    <div>
                        <p class="text-sm mb-0 text-uppercase font-weight-bold">{{ $slot }}</p>
                        <h5 class="font-weight-bolder">{{ $count }}</h5>
                    </div>
                    <a href="{{ route('admin.' . $slot . '.index') }}" class="text-primary icon-move-right">
                        <span class="text-capitalize">{{ $slot }}</span>
                        <i class="fas fa-arrow-right text-xs ms-1"></i>
                    </a>
                </div>
                <div class="col-4 d-flex justify-content-end">
                    <div @class(['icon icon-shape shadow-primary text-center rounded-circle', $bgIcon])>
                        <i @class(['text-lg opacity-10', $icon])></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
