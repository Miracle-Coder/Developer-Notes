<?php
require '../db/db.php';
$data = $_GET;

$errors = array();
    if ($data['name'] == '')
    {
        $errors[] = 'Enter name';
        echo 'Enter name';
    }
if (R::count('comments', "author = ?", array($data['name'])) > 0) {
    $errors[] = 'Such name already exists';
    echo 'Such login already exists ';

}else
{
    $comment = R::dispense('comments');
    $comment->author = $data['name'];
    $comment->text = $data['text'];
    $comment->articles_id = $data['articles_id'];
    R::store($comment);
    ?>
<script>

        $( ".add-new" ).fadeOut( function() {
            // Анимация завершена.
        });

</script>
<?php
    echo '<div class="commend-successfully">Comment was successfully added.</div>';
}

