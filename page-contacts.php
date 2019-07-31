<?php
/*
Template Name: Конткты
*/
?>

<?php get_header(); ?>

        <div class="row">
            <div class="col-lg-4">
                <?php get_sidebar(); ?>
            </div>
            <!-- /.col-md-4 -->

            <div class="col-lg-8">

                <div class="content">
                    <h2><?php the_title(); ?></h2>
                    <div class="contacts">
                        <p class="contacts-phone">
                            <img class="contacts-img" src="./img/icon/phone.png" alt="Телефон">
                            8 (800) 200-30-40
                        </p>
                        <!-- /.contacts-phone -->
                        <p class="contacts-mail">
                            <img class="contacts-img" src="./img/icon/mail.png" alt="Почта">
                            pochta@mail.ru
                        </p>
                        <!-- /.contacts-mail -->
                        <a href="#" class="contacts-address">г. Москва, ул. Морозная, д.12, 3 этаж</a>
                        <a href="#" class="contacts-address">г. Москва, ул. Морозная, д.12, 3 этаж</a>
                        <a href="#" class="btn btn-primary contacts-btn">Задать вопрос</a>

                        <div class="contacts-social-links">
                            <ul>
                                <li><a href="#"><i class="icon-vkontakte"></i></a></li>
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.contacts -->
                </div>
                <!-- /.content -->

                <div class="direction">
                    <h2>Направление деятельности</h2>
                    <div class="direction-blocks">
                            <div class="direction-block">
                                <h3>Девелоперские проекты</h3>
                                <img src="./img/directions/1.png" alt="Направление деятельности" class="direction-block_img">
                            </div>
                            <div class="direction-block">
                                <h3>Продажа недвижимости</h3>
                                <img src="./img/directions/2.png" alt="Направление деятельности" class="direction-block_img">
                            </div>
                            <div class="direction-block">
                                <h3>Строительство</h3>
                                <img src="./img/directions/3.png" alt="Направление деятельности" class="direction-block_img">
                            </div>
                            <div class="direction-block">
                                <h3>Инвестиционные программы</h3>
                                <img src="./img/directions/4.png" alt="Направление деятельности" class="direction-block_img">
                            </div>
                            <div class="direction-block">
                                <h3>Финансовые инструменты</h3>
                                <img src="./img/directions/4.png" alt="Направление деятельности" class="direction-block_img">
                            </div>
                    </div>
                    <!-- /.direction-blocks -->
                </div>
                <!-- /.direction -->

            </div>
            <!-- /.col-md-8 -->
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

<?php get_footer(); ?>