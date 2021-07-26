<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<div class="container-fluid nav-block">
    <div class="container">
        <nav class="nav-main">
            <ul class="row list">

                    <?
                        foreach($arResult as $arItem):
                            if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                                continue;
                    ?>
                        <?if($arItem["SELECTED"]):?>
                            <li class="item current"><a href="<?=$arItem["LINK"]?>" class="link"><?=$arItem["TEXT"]?></a></li>
                        <?else:?>
                            <li class="item"><a href="<?=$arItem["LINK"]?>" class="link"><?=$arItem["TEXT"]?></a></li>
                        <?endif?>

                    <?endforeach?>

            </ul>
        </nav>
    </div>
</div>
<?endif?>
