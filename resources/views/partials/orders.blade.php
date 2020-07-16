@php

$args = array(
  'posts_per_page'   => 3,
  'offset'           => 0,
  'orderby' => 'date',
  'order'    => 'DESC',
  'post_type'        => 'zamowienia_publiczne',
  'post_status'      => 'publish',
  'suppress_filters' => true,
);

$orders = get_posts($args);

@endphp

<section class="section section--home section--color">
  <div class="container">
    <div class="col-12 section__header">
      <h2 class="title">
        {{ $data['title'] }}
      </h2>
    </div>
    <div class="orders">
      @foreach($orders as $order)
        <div class="orders__item">
          <a href="{{ get_permalink($order->ID) }}" class="title title--small orders__title">
            {{ $order->post_title }}
          </a>
          <p class="text text--small orders__desc">
            {{ $order->post_excerpt }}
          </p>
          <div class="orders__button">
            <a href="{{ get_permalink($order->ID) }}" class="button button--primary button--small">
              Więcej @include('svg.arrow', ['class' => 'button__svg'])
            </a>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>