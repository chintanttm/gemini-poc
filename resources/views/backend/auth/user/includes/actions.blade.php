    @if ($user->trashed() && $logged_in_user->hasAllAccess())
    <x-utils.form-button
        :action="route('admin.auth.user.restore', $user)"
        method="patch"
        button-class="btn btn-info btn-sm"
        icon="fas fa-sync-alt"
        name="confirm-item"
    >
        @lang('Restore')
    </x-utils.form-button>

    @if (config('boilerplate.access.user.permanently_delete'))
        <x-utils.delete-button
            :href="route('admin.auth.user.permanently-delete', $user)"
            :text="__('Permanently Delete')" />
    @endif
@else
    @if ($logged_in_user->hasAllAccess())
        <x-utils.view-button :href="route('admin.auth.user.show', $user)" />
        <x-utils.edit-button :href="route('admin.auth.user.edit', $user)" />
    @endif

    @if (! $user->isActive())
        <x-utils.form-button
            :action="route('admin.auth.user.mark', [$user, 1])"
            method="patch"
            button-class="btn btn-primary btn-sm"
            icon="fas fa-sync-alt"
            name="confirm-item"
            permission="admin.access.user.reactivate"
        >
            @lang('Reactivate')
        </x-utils.form-button>
    @endif

    @if ($user->id !== $logged_in_user->id && !$user->isMasterAdmin() && $logged_in_user->hasAllAccess())
        <x-utils.delete-button :href="route('admin.auth.user.destroy', $user)" />
    @endif
@endif
