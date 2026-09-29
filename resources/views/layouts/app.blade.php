<!DOCTYPE html> 
<html lang="id"> 
<head> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>@yield('judul', 'Aplikasi') | SIM Mahasiswa</title> 
    <style> 
        body { font-family: system-ui, sans-serif; margin: 0; background: #f5f7fa; color: #1f2937; } nav { background: #1e3a8a; padding: 12px 24px; } 
        nav a { color: #fff; margin-right: 16px; text-decoration: none; } 
        nav a.aktif { font-weight: bold; text-decoration: underline; } 
        .container { max-width: 900px; margin: 24px auto; padding: 0 16px; } 
        table { width: 100%; border-collapse: collapse; background: #fff; } 
        th, td { border: 1px solid #d1d5db; padding: 8px; text-align: left; }         
        th { background: #e5e7eb; }         
        .badge { padding: 2px 10px; border-radius: 999px; font-size: .8rem; }         
        .badge-aktif { background: #d1fae5; }         
        .badge-cuti { background: #fef3c7; }         
        .badge-lulus { background: #dbeafe; }         
        .grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; }         
        .kartu { background: #fff; border: 1px solid #d1d5db; border-radius: 8px; padding: 16px; }         
        .kartu h3 { margin-top: 0; }         
        .kartu .kaki { margin-top: 12px; font-size: .9rem; }         
        footer { text-align: center; padding: 16px; color: #6b7280; }     
        </style> 
    </head> 
    <body>     @include('partials.navbar')      <main class="container">         @yield('konten')     

    </main>      @include('partials.footer') 
</body> 
</html> 