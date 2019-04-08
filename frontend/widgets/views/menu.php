<div class="header d-flex justify-content-between align-items-center">
    <img src="/img/logo.png" alt="">
    <div class="phone-and-navigation d-flex flex-column justify-content-between">
        <div class="phone-numbers d-flex justify-content-end align-items-center mb-2">
            <a href="tel:+77059621264">+7 705 962 12 64</a>
            <a class="mx-4" href="tel:+77784100775">+7 778 410 07 75</a>
            <button>Заказать звонок</button>
        </div>
        <ul>
            <? foreach ($menu as $v){?>
                <li><a href="<?=$v->url?>"><?=$v->title?></a></li>
            <? } ?>
        </ul>
    </div>
</div>