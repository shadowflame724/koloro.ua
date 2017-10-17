<!-- begin like_it -->
<div class="like_it">
    <!-- begin raiting_container -->
    <div class="rating_container">
        <form>
            <input value="{{$portfolio->votes == 0 ? 0 : $portfolio->rating/$portfolio->votes}}"
                   data-id="{{$portfolio->id}}" type="number" class="rating" min=0 max=5 step=0.5
                   data-size="md">
        </form>
        <p class="voice"><span class="yellow">{{ $portfolio->votes }}</span> голосов</p>
    </div>
    <!-- end raiting_container -->
    <!-- begin qwestion -->
    <div class="qwestion">
        <i class="icon icon-animation_arrow animated infinite pulse"></i>
        <i class="icon icon-animation_top hidden_arrow animated infinite pulse"></i>
        <span>Понравилась работа?<br>Оставьте свой голос:)</span>
    </div>
    <!-- end qwestion -->
</div>
<!-- end like_it -->