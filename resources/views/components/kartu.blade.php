@props(['judul' => 'Tanpa Judul'])

<div class="kartu">
    <h3>{{ $judul }}</h3>
    <div class="isi">
        {{ $slot }}
    </div>
    @if (isset($footer))
        <div class="kaki">
            {{ $footer }}
        </div>
    @endif
</div>