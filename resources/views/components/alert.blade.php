@props(['tipe' => 'info'])

<div class="alert alert-{{ $tipe }}" role="alert">
    {{ $slot }}
</div>
