@php
    $links = $data['Linki'];
@endphp

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12 section__content">
                @php 
                    $color = true;
                @endphp

                <ul class="blue-box">
                    @foreach ($links as $link)

                    @php 
                        if($loop -> index % 2 != 0) $color = true;
                        else $color = false;
                    @endphp
                    @if ($link['link']['title'])
                    <li class="blue-box__item @if($color) blue-box__item--light @endif{{ $color }}">
                        @if ($link['link']['url'])
                        <a class="blue-box__elem subheader" href="{{ $link['link']['url'] }}">
                            {{ $link['link']['title'] }}
                        </a>
                        @else
                        <div class="blue-box__elem subheader">
                            {{ $link['link']['title'] }}
                        </div>
                        @endif
                    </li>
                    @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>

