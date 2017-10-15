<?php


/**
 * Вывод категорий и подкаиегорий для header_menu
 **/


//Получаем массив нашего меню из БД в виде ассоциативного массива

function Get_Cat($connect){

    $sql = R::getAll('SELECT * FROM `categories`');

    $cat = array();

    foreach ($sql as $row) {
        $cat[$row['id']] = $row;
    }
    return $cat;
}


//Используем функцию построения дерева из массива от Tommy Lacroix

function Get_Tree($dataset) {
    $tree = array();

    foreach ($dataset as $id => &$node) {
        //Если нет вложений
        if (!$node['parent']){
            $tree[$id] = &$node;
        }else{
            //Если есть потомки то перебераем массив
            $dataset[$node['parent']]['childs'][$id] = &$node;
        }
    }
    return $tree;
}

//Получаем массив с данными

$cat = Get_Cat($connect);

//Создаем деревовидное меню

$tree = Get_Tree($cat);


// Создаем шаблон для вывода меню ввиде дерева

function Top_Menu($category) {

    $menu = '<li><h3><a href="http://developer-notes.h1n.ru/include/pages/categories.php?id=' . $category['id'] . '"> ' . $category['title'] . '</a></h3>';

    if (isset($category['childs'])) {
        $menu .= '<ul>' . Show_Cat($category['childs']) . '</ul>';
    }
    $menu .= '</li>';

    return $menu;
}

//Рекурсивно считываем наш шаблон

function Show_Cat ($data) {
    $string = '';
    foreach ($data as $item) {
        $string .= Top_Menu($item);
    }
    return $string;
}

//Получаем HTML разметку

$header_menu = Show_Cat($tree);

//Далее выводим на экран :)
?>

<div class="accordian-categories wow zoomIn" data-wow-duration="2.5s" data-wow-offset="150">
    <div class="accordian-categories-tittles">
        Categories
    </div>
    <div id="accordian">
        <ul id="accordian-ul">
            <?php echo $header_menu ?>
        </ul>
    </div>
</div>