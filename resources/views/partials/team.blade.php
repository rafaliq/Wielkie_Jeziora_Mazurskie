@php
    $team = $data['team'];
    $title = $data['title'];
@endphp

<section class="section section--light">
    <div class="container">
        <div class="row">
            @include('partials.section-header', ['title'=> $title])
            <div class="col-12 section__content">
                @if ($team)
                <ul class="team">
                    @foreach($team as $member)
                    <li class="team__elem">
                        @include('components.avatar', ['member'=>$member])
                    </li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>
    </div>
</section>