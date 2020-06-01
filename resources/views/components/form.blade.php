@php
    $form_title = get_field('form_title', 'options');
    $form_subtitle = get_field('form_subtitle', 'options');
    $form_terms = get_field('form_terms', 'options');
@endphp

<form id="form" class="form" action="#" method="POST" form>
    <h2 class="form__title subheader">
        {{ $form_title }}
    </h2>
    <p class="body">
        {{ $form_subtitle }}
    </p>
    <div class="form__wrapper">
        <input class="form__input secondary-body" type="text" name="name" id="name" placeholder="Imię i nazwisko">
        <input class="form__input secondary-body" type="email" name="email" id="email" placeholder="E-mail">
        <textarea name="message" id="message" cols="30" rows="8" class="form__input secoundary-body" placeholder="Treść"></textarea>
        <div class="form__checkbox-wrapper">
            <input class="form__checkbox" type="checkbox" name="terms" id="terms">
            <label class="form__label" for="terms">{{ $form_terms }}</label>
        </div>
        <input class="form__button button button--primary" type="submit" name="send" value="Wyślij">
    </div>
</form>

<script>
  $(function() {
      $('#form').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
          type: 'post',
          url: 'https://mazurytobiznes.pl/mail.php',
          data: $('form').serialize(),
          success: function () {
            alert('Wiadomość została wysłana!');
          }
        });
      });
  });
</script>