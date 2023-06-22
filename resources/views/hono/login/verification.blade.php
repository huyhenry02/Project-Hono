{{--@component('mail::message')--}}
{{--    # Xác thực địa chỉ email--}}
{{--    Nhấp vào nút bên dưới để xác thực địa chỉ email của bạn:--}}
{{--    @component('mail::button', ['url' => $verificationUrl])--}}
{{--        Xác nhận địa chỉ email--}}
{{--    @endcomponent--}}
{{--    Nếu bạn không yêu cầu xác nhận địa chỉ email, không cần thực hiện bất kỳ hành động nào.--}}
{{--    Cảm ơn bạn,<br>--}}
{{--    {{ config('app.name') }}--}}
{{--@endcomponent--}}

<p>
    Xin chào {{$user->name}}<br>
    # Xác thực địa chỉ email<br>
        Nhấp vào nút bên dưới để xác thực địa chỉ email của bạn:<br>
    <a href="{{route('client.actived',['user' => $user->id, 'token' => $user->token])}}">Click vào đây để tiếp tục</a>
    <br>
        Nếu bạn không yêu cầu xác nhận địa chỉ email, không cần thực hiện bất kỳ hành động nào.
        Cảm ơn bạn<br>
</p>
