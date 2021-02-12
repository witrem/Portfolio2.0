<form action="{{ url('/settings/users/toggle-dark-mode') }}" method="post">
    {{ csrf_field() }}
    {{ method_field('patch') }}
    @if(setting()->getForCurrentUser('dark-mode-enabled'))
        <button class="config_view {{ $classes ?? '' }}"><span class="icon-mobile">@icon('light-mode')</span><span class="icon-mobile">{{ trans('common.light_mode') }}</span></button>
    @else
        <button class="config_view {{ $classes ?? '' }}"><span class="icon-mobile">@icon('dark-mode')</span><span class="icon-mobile">{{ trans('common.dark_mode') }}</span></button>
    @endif
</form>