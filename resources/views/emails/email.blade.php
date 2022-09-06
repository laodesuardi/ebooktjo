@component('mail::message')
# Ebook Tembus Target Jualan Online

Terima kasih sudah memasukan data, tunggu beberapa saat, link download akan dikirim ke nomor whatsapp anda....

Apabila anda belum menerima link download, klik tombol dibawah ini.
@component('mail::button', ['url' => 'https://api.whatsapp.com/send?phone=6285159997927&text=Hallo%20kak,%20saya%20belum%20menerima%20ebooknya.'])
Kirim pesan
@endcomponent

Terima kasih,<br>
{{ config('app.nama') }}
@endcomponent
