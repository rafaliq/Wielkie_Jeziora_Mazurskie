@php 
    $title = get_field('footer_title', 'options');
    $address = get_field('footer_address', 'options');
    $links = get_field('footer_links', 'options');
    $mails = get_field('footer_mails', 'options');
    $tels = get_field('footer_tel', 'options');
    $krs = get_field('footer_krs', 'options');
    $nip = get_field('footer_nip', 'options');
    $regon = get_field('footer_regon', 'options');
@endphp

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-5 contact">
                <div class="contact__header">
                    <a class="header__brand" href="{{ home_url('/') }}">
                        <img src="{{  get_field('logo', 'options')['url'] }}" alt="Jartech">
                    </a>
                    <h2 class="contact__title subheader">
                        {!! $title !!}
                    </h2>
                </div>
                <address class="contact__address">
                    @if ($links)
                    <ul class="contact__link-list">
                        @foreach ($links as $link)
                        <li class="contact__link-item">
                            <a class="contact__link-item link secondary-body" href="{{ $link['link']['url'] }}">
                                {{ $link['link']['title'] }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    @endif
                    <p class="footer__text secondary-body">
                        {{ $address  }}
                    </p>
                </address>
                <div class="contact__info secondary-body">
                    @if ($tels)
                        <span class="contact__info-label">
                          Tel:
                        </span>
                      <ul class="contact__info-list">
                        @foreach ($tels as $tel)
                        <li>
                          <a class="secondary-body contact__info-content" href="tel:{{ str_replace(' ', '', $tel['tel']) }}">
                            {{ $tel['tel'] }}
                          </a>
                        </li>
                        @endforeach
                      </ul>
                      @endif
                    @if ($mails)
                    <span class="contact__info-label">
                        E-mail:
                    </span>
                    <ul class="contact__info-list">
                        @foreach ($mails as $mail)
                        <li>
                        <a class="link secondary-body" href="mailto:{{ $mail['mail'] }}">
                            {{ $mail['mail'] }}
                        </a>
                        </li>
                        @endforeach
                    </ul>
                    @endif
                </div> 
                <div class="contact__info secondary-body">
                    <span class="contact__info-label">
                        KRS:
                    </span>
                    <span class="contact__info-content">
                        {{ $krs }}
                    </span>
                    <span class="contact__info-label">
                        NIP:
                    </span>
                    <span class="contact__info-content">
                        {{ $nip }}
                    </span>
                    <span class="contact__info-label">
                        REGON:
                    </span>
                    <span class="contact__info-content">
                        {{ $regon }}
                    </span>
                </div>    
            </div>
            <div class="col-12 offset-sm-1 col-sm-5">
                @include('components.form')
            </div>
        </div>
    </div>
</section>