@extends('simple-layout')

@section('body')
<div class="container">

    <div class="grid left-focus v-center no-row-gap">
        <div class="py-m">
            @include('settings.navbar', ['selected' => 'audit'])
        </div>
    </div>

    <div class="card content-wrap auto-height">
        <h2 class="list-heading">{{ trans('settings.audit') }}</h2>
        <p class="text-muted">{{ trans('settings.audit_desc') }}</p>

        <div class="flex-container-row">
            <div component="dropdown" class="list-sort-type dropdown-container mr-m">
                <label for="">{{ trans('settings.audit_event_filter') }}</label>
                <button refs="dropdown@toggle" aria-haspopup="true" aria-expanded="false" aria-label="{{ trans('common.sort_options') }}" class="input-base text-left">{{ $listDetails['event'] ?: trans('settings.audit_event_filter_no_filter') }}</button>
                <ul refs="dropdown@menu" class="dropdown-menu">
                    <li @if($listDetails['event'] === '') class="active" @endif><a href="{{ sortUrl('/settings/audit', $listDetails, ['event' => '']) }}">{{ trans('settings.audit_event_filter_no_filter') }}</a></li>
                    @foreach($activityTypes as $type)
                        <li @if($type === $listDetails['event']) class="active" @endif><a href="{{ sortUrl('/settings/audit', $listDetails, ['event' => $type]) }}">{{ $type }}</a></li>
                    @endforeach
                </ul>
            </div>

            @foreach(['date_from', 'date_to'] as $filterKey)
                <form action="{{ url('/settings/audit') }}" method="get" class="block mr-m">
                    @foreach($listDetails as $param => $val)
                        @if(!empty($val) && $param !== $filterKey)
                            <input type="hidden" name="{{ $param }}" value="{{ $val }}">
                        @endif
                    @endforeach
                    <label for="audit_filter_{{ $filterKey }}">{{ trans('settings.audit_' . $filterKey) }}</label>
                    <input id="audit_filter_{{ $filterKey }}"
                           component="submit-on-change"
                           type="date"
                           name="{{ $filterKey }}"
                           value="{{ $listDetails[$filterKey] ?? '' }}">
                </form>
            @endforeach
        </div>

        <hr class="mt-l mb-s">

        {{ $activities->links() }}

        <table class="table">
            <tbody>
            <tr>
                <th>{{ trans('settings.audit_table_user') }}</th>
                <th>
                    <a href="{{ sortUrl('/settings/audit', $listDetails, ['sort' => 'key']) }}">{{ trans('settings.audit_table_event') }}</a>
                </th>
                <th>{{ trans('settings.audit_table_related') }}</th>
                <th>
                    <a href="{{ sortUrl('/settings/audit', $listDetails, ['sort' => 'created_at']) }}">{{ trans('settings.audit_table_date') }}</a></th>
            </tr>
            @foreach($activities as $activity)
                <tr>
                    <td>
                        @include('partials.table-user', ['user' => $activity->user, 'user_id' => $activity->user_id])
                    </td>
                    <td>{{ $activity->type }}</td>
                    <td width="40%">
                        @if($activity->entity)
                            <a href="{{ $activity->entity->getUrl() }}" class="table-entity-item">
                                <span role="presentation" class="icon text-{{$activity->entity->getType()}}">@icon($activity->entity->getType())</span>
                                <div class="text-{{ $activity->entity->getType() }}">
                                    {{ $activity->entity->name }}
                                </div>
                            </a>
                        @elseif($activity->detail && $activity->isForEntity())
                            <div class="px-m">
                                {{ trans('settings.audit_deleted_item') }} <br>
                                {{ trans('settings.audit_deleted_item_name', ['name' => $activity->detail]) }}
                            </div>
                        @elseif($activity->detail)
                            <div class="px-m">{{ $activity->detail }}</div>
                        @endif
                    </td>
                    <td>{{ $activity->created_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $activities->links() }}
    </div>

</div>
@stop
