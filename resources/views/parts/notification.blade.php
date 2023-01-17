@if(Session::has('notification'))
{{--    <div class="notification {{Session::get('notification')['type']}}">--}}
{{--        <div class="notification-header">--}}
{{--            <h5 class="notification-title">{{ Session::get('notification')['message'] }}</h5>--}}
{{--        </div>--}}
{{--        <div class="delimiter"></div>--}}
{{--        <div class="notification-body">--}}
{{--            <p class="notification-text">Thank you for using {{ config('app.name') }}</p>--}}
{{--        </div>--}}
{{--    </div>--}}
<div class="snackbar_notification">
    <p class="snackbar_text">{{ Session::get('notification')['message'] }}</p>
</div>

@endif
