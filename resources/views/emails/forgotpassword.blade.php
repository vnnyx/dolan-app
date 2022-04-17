@component('mail::message')
# Halo {{$data['username']}}

Kami menerima permintaan reset password dari anda. Silahkan klik tombol dibawah ini untuk melakukan reset password

@component('mail::button', ['url' => url($data['link'])])
Reset Password
@endcomponent

Thanks,<br>
Tim Dolan
@endcomponent
