<div class="left-sidebar">

<div class="left-sidebar_btn">
    Категории
</div>


<ul class="left-sidebar_menu">
    <?php wp_list_categories(array(
        'orderby'            => 'name',
        'order'              => 'ASC',
        'style'              => 'list',
        'show_count'         => 0,
        'hide_empty'         => 0,
        'use_desc_for_title' => 1,
        'child_of'           => 0,
        'feed'               => '',
        'feed_type'          => '',
        'feed_image'         => '',
        'exclude'            => '1',
        'exclude_tree'       => '',
        'include'            => '',
        'hierarchical'       => true,
        'title_li'           => NULL,
        'number'             => NULL,
        'echo'               => 1,
        'depth'              => 0,
        'current_category'   => 0,
        'pad_counts'         => 0,
        'taxonomy'           => 'category',
        'walker'             => 'Walker_Category',
        'hide_title_if_empty' => false,
        'separator'          => '<br />',
    )); ?>
</ul>

<div class="left-sidebar_object">
    <img src="./img/objects/object-preview-1.png" alt="Картинка объекта">
    <div class="left-sidebar_object-description">
        <h3>Жилой комплекс в г. москва</h3>
        <p>158-квартирный 12-этажный жилой дом № 88 по ул. Ленина в микрорайоне Центральный...</p>
        <a href="#">Узнать подробнее »</a>
    </div>
</div>
<!-- /.left-sidebar_object -->

<div class="left-sidebar_object">
    <img src="./img/objects/object-preview-2.png" alt="Картинка объекта">
    <div class="left-sidebar_object-description">
        <h3>Жилой комплекс в г. москва</h3>
        <p>158-квартирный 12-этажный жилой дом № 88 по ул. Ленина в микрорайоне Центральный...</p>
        <a href="#">Узнать подробнее »</a>
    </div>
</div>
<!-- /.left-sidebar_object -->

</div>
<!-- /.left-sidebar -->