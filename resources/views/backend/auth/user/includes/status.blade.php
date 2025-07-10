@if($user->isActive())
    <span class='badge bg-success ms-auto'>@lang('Active')</span>
@else
    <span class='badge bd-danger'>@lang('Inactive')</span>
@endif
