@props(['section','title'=>null,'subtitle','class'=>""])
<section class="{{ $section }} section" id="{{ $section }}">
    <h2 class="section__title">{{ $title ?? $section }}</h2>
    <span class="section__subtitle">{{ $subtitle }}</span>

    <div class="{{ $section."__container" }} container {{ $class }}">

        {{ $slot }}

    </div>
</section>
