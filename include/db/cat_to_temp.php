<li>
    <p><?php $category->title; ?></p>
    <?php if($category->childs): ?>
    <span>
        <?php echo cat_to_string($category['childs']);?>
    </span>
    <?php endif; ?>
</li>
