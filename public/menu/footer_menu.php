<div class="footer__column">
    <div href="category/<?=$category['alias']?>" class="footer__title"><?=$category['title'];?></div>
    <?php if (isset($category['childs'])) :?>
    <ul class="footer__categories">
        <?= $this->getMenuHtml($category['childs']); ?>
        <li class="footer__category"><a href="category/<?=$category['alias']?>"><?=$category['title'];?></a></li>
    </ul>
    <?php endif; ?>
</div>