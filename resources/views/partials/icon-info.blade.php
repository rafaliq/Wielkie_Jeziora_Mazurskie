@php
    $icons = $data['icons'];
    $colNum = $data['ilosc'];
    $iconsLength =  count($icons);
    $split_for = $iconsLength / $colNum;
    $icons_split = array_chunk($icons, $split_for);
@endphp

<section class="section section--icon-info">
    @if ($data['header'] == 'tak')
        <div class="container">
            <div class="row">
                <div class="section__header">
                    @include('partials.section-header', ['title' => $data['title'], 'content'=> $data['text']])
                </div>
            </div>
        </div>
    @endif
    <div class="icon-info icon-info--{{ $data['background-type'] }}"
     style="background-image: url({{ $data['background']['url'] }});"
     >
        <div class="container">
            <div class="row">
                @php
                    $index = 0;
                @endphp
                @foreach ($icons_split as $items)
                    
                    <div class="col icon-info__wrapper">
                        @php
                            $index++;
                        @endphp
    
                        <ul class="icon-info__list">
                           
                            @foreach ($items as $item)
                           
                            <li class="icon-info__elem @if(!$item['list'])icon-info__elem--no-list @endif">
                                <div class="icon-info__icon icon icon--big">
                                    
                                    @if ($item['ikonka'])
                                        <img src="{{ $item['ikonka']['url'] }}" alt="{{ $item['ikonka']['alt'] }}">
                                    @else
                                        <span class="{{ $item['fa'] }}"></span>
                                    @endif
                                </div>
                                <div class="icon-info__content">
                                    <h3 class="text text--major title--special title--semi-bold">
                                        {{ $item['title'] }}
                                    </h3>
                                    @if ($item['list'])
                                        <ul class="icon-info__sub-list">
                                            @foreach ( $item['list'] as $list_item)
                                            <li class="icon-info__sub-list-elem text">
                                                {{ $list_item['title'] }}
                                            </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endforeach
                    @if ($index == 5)
                        <div class="col icon-info__wrapper d-block d-md-block d-xl-none"></div>
                    @endif
            </div>
        </div>
    </div>
</section>
