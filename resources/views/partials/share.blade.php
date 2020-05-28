@php 
    $link = get_permalink();
@endphp

<div class="share">
    <h3 class="share__title subtitle"> Udostępnij  <span class="share__icon far fa-smile-beam"></span></h3>
    <ul class="share__list">
        <li class="share__item">
            <a class="share__elem" href="https://www.facebook.com/sharer/sharer.php?u={{ $link }}">
                <span class="share__icon fab fa-facebook"></span>
            </a>
        </li>
        <li class="share__item">
            <a class="share__elem" href="https://twitter.com/home?status={{ $link }}">
                <span class="share__icon fab fa-twitter"></span>
            </a>
        </li>
        <li class="share__item">
            <a class="share__elem" href="https://plus.google.com/share?url={{ $link }}">
                <span class="share__icon fab fa-google-plus"></span>
            </a>
        </li>
    </ul>
</div>