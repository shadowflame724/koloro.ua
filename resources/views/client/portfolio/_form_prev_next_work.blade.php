{!! Form::open(['route' => 'form_store', 'class' => 'contact-us-form']) !!}
<div class="gl-container">
    <h2 class="form-title">ЭТОТ ПРОЕКТ ВЫЗВАЛ У ВАС ЖЕЛАНИЕ РАБОТАТЬ С НАМИ?</h2>
    <p>
        Привет, KOLORO! <br>
        Меня зовут
        <input type="text" name="name" required>
        , я представляю компанию
        <input type="text" name="company" required>
        . Знаю, что Вы делаете
        <span> крутые проекты </span>
        и мы тоже хотим сделать что-то классное.
        Если коротко, то нам нужен
        <input type="text" name="text" required>
        . Свяжитесь со мной по e-mail или телефону:
        <input type="text" name="contact" required>
    </p>
    <button type="submit">отправить</button>
</div>

<div class="projects-btns-container">
    <div class="left-btn">
        <div class="inner-cont">
            <a href="/portfolio/{{ $prevSlug }}">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
                <span>предыдущий проект</span>
            </a>
        </div>
    </div><!--
            --><div class="right-btn">
        <div class="inner-cont">
            <a href="/portfolio/{{ $nextSlug }}">
                <span>следующий проект</span>
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
        </div>
    </div>
</div>
{!! Form::close() !!}