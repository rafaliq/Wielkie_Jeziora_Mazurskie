@php
$posttags = get_the_tags();    
@endphp

@if ($posttags)
<ul class="taglist">
    @foreach ($posttags as $tag)
    <li class="taglist__item">
        <a href="{{ get_tag_link($tag-> term_id) }}" class="taglist__elem button button--tag">
            {{ $tag -> name }}
        </a>
    </li>
    @endforeach
</ul>
@endif