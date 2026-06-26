<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $nama_toko }}</title>
    <link rel="stylesheet" href="{{ asset('css/Linkbio.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <div class="container">

        <!-- Nama Toko + Sub Banner -->
        <h2 class="nama-toko">{{ $nama_toko }}</h2>
        <p class="sub-banner">{{ $sub_banner }}</p>

        <!-- Sosial Media -->
        <div class="sosmed">
            <a href="{{ $sosmed['ig'] }}" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="{{ $sosmed['tiktok'] }}" target="_blank"><i class="fab fa-tiktok"></i></a>
            <a href="{{ $sosmed['wa'] }}" target="_blank"><i class="fab fa-whatsapp"></i></a>
        </div>

    </div>
</body>
</html>