<!--<li>
    <a href="category/<?/*=$category['alias']*/?>" class="vertical-menu__main-link"><?/*=$category['title'];*/?></a>
    <?php /*if (isset($category['childs'])) :*/?>
        <ul>
            <?/*= $this->getMenuHtml($category['childs']); */?>
            <li><a href="category/<?/*=$category['alias']*/?>" class="vertical-menu__sub-link"><?/*=$category['title'];*/?></a></li>
        </ul>
    <?php /*endif; */?>
</li>-->

<?php if (!$isChild): ?>
    <li>
        <a href="category/<?=$category['alias']?>" class="vertical-menu__main-link"><?=$category['title'];?></a>
        <?php if (isset($category['childs'])) :?>
            <?= $this->getMenuHtml($category['childs'], $id = '', $isChild = true); ?>
        <?php endif; ?>
    </li>
<?php else: ?>
    <ul>
        <li><a href="category/<?=$category['alias']?>" class="vertical-menu__sub-link"><?=$category['title'];?></a></li>
        <?php if (isset($category['childs'])) :?>
                <?= $this->getMenuHtml($category['childs'], $id = '', $isChild = true); ?>
        <?php endif; ?>
    </ul>
<?php endif; ?>