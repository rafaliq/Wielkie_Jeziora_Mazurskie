@extends('layouts.app')

@section('content')
@php
    $section = get_field('components', 34);
    $hero = $section[0];
@endphp


    @include('partials.hero', ['data'=>$hero])
    @include('partials.breadcramps')
    <section class="section">
        <div class="container">
            <div class="row">
                @if (!have_posts())
                <div class="alert alert-warning">
                    {{ __('Sorry, no results were found.', 'sage') }}
                </div>
                {!! get_search_form(false) !!}
                @endif
                <ul class="posts">

                    @while (have_posts()) @php the_post() @endphp
                    <li class="posts__list">
                        @include('components.post')
                    </li>
                    @endwhile
                </ul>
                @if(strpos(App::title(), 'archiwalne') || strpos(App::title(), 'Zamówienia publiczne'))
                    <a data-fancybox data-type="iframe" data-src="http://www.7cudowmazur.pl/archiwum" href="javascript:;" class="button button--primary button--center my-5">
                        Więcej zamówień
                    </a>
                @endif
            </div>
        </div>
    </section>
    {{-- @include('partials.partners') --}}

  {!! get_the_posts_navigation() !!}
@endsection
