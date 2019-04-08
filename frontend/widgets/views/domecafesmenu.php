<ul>
    <? foreach ($menu as $v){?>
        <li><a href="<?=$v->url?>"><?=$v->title?></a></li>
    <? } ?>
</ul>