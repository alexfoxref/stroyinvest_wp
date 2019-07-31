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

<?php get_footer(); ?>