@component('mail::message')
# Request Barang

Terima Kasih Sudah Membuat Permintaan Barang. Silahkan Tunggu Notifikasi Selanjutnya

<!-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent -->

Thanks,<br>
{{ config('app.name') }}
@endcomponent
