@php
    $id = $member -> ID;
    $job = get_field('job', $id);
    $image = get_field('image', $id);
    $tel = get_field('tel', $id);
    $mail = get_field('mail', $id);
@endphp

<div class="avatar">
    @if ($image)
    <img class="avatar__image" src="{{ $image['url'] }}" alt="{{ $member -> post_title }}">
    @else
    <img class="avatar__image" src="https://ui-avatars.com/api/?name={{ str_replace(' ', '+', $member -> post_title) }}" alt="{{ $member -> post_title }}">
    @endif
    <div class="avatar__wrapper">
        <h3 class="avatar__title subtitle">
            {{ $member -> post_title }}
        </h3>
        <p class="avatar__content secondary-body">
            {{ $job }}
        </p>
        <p class="avatar__content secondary-body">
            tel: <a class="secondary-body" href="tel:{{ $tel }}">{{ $tel }}</a>
        </p>
        <p class="avatar__content secondary-body">
            <a class="secondary-body link" href="mailto:{{ $mail }}">{{ $mail }}</a>
        </p>
    </div>
</div>