<?php
/*
Template Name: Инвесторам
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
                    <?php the_content(); ?>
                </div>
                <!-- /.content -->

                <div class="calc">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="calc-programms">
                                <div class="calc-radio">
                                    <input type="radio" data-month="6" data-per="0.2" checked name="programms" id="first">
                                    <label for="first">
                                        <span>20% годовых <small>на 6 месяцев</small></span>
                                    </label>
                                </div>
                                <!-- /.calc-radio -->
                                <div class="calc-radio">
                                    <input type="radio" data-month="12" data-per="0.24" name="programms" id="second">
                                    <label for="second">
                                        <span>24% годовых <small>на 1 год</small></span>
                                    </label>
                                </div>
                                <!-- /.calc-radio -->
                                <div class="calc-radio">
                                    <input type="radio" data-month="24" data-per="0.26" name="programms" id="third">
                                    <label for="third">
                                        <span>26% годовых <small>на 2 года</small></span>
                                    </label>
                                </div>
                                <!-- /.calc-radio -->
                                <div class="calc-radio">
                                    <input type="radio" data-month="36" data-per="0.28" name="programms" id="fourth">
                                    <label for="fourth">
                                        <span>28% годовых <small>на 3 года</small></span>
                                    </label>
                                </div>
                                <!-- /.calc-radio -->
                                <div class="calc-radio">
                                    <input type="radio" data-month="48" data-per="0.32" name="programms" id="fifth">
                                    <label for="fifth">
                                        <span>32% годовых <small>на 4 года</small></span>
                                    </label>
                                    <div class="calc-popular">Популярная программа</div>
                                </div>
                                <!-- /.calc-radio -->
                            </div>
                            <div class="calc-legal">
                                <p>*Наша компания является налоговым агентом, удерживает и оплачивает НДФЛ Вся информация, размещенная на сайте, несет исключительно рекламный характер и не является публичной офертой.</p>
                            </div>
                        </div>
                        <!-- /.col-md-6 -->
                        <div class="col-md-6">
                            <h4>Укажите сумму инвестиций</h4>
                            <input type="text" class="calc-range" name="summ" id="">
                            <div class="calc-summ_invest">
                                <span class="calc-summ_invest_label">
                                    Сумма:
                                </span>
                                <span class="calc-summ_invest_num">
                                    <span>100 000</span> руб.
                                </span>
                            </div>
                            <div class="calc-results">
                                <span class="calc-total">
                                    <strong>
                                        <span id="total">110 000</span> руб.
                                    </strong><br>
                                    <small>
                                        Сумма через <span id="month">6</span> месяцев
                                    </small>
                                </span>
                                <span class="calc-monthly">
                                    <strong>
                                        <span id="monthly">1 666</span> руб.
                                    </strong><br>
                                    <small>
                                        Ежемесячный доход
                                    </small>
                                </span>
                            </div>
                        </div>
                        <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.calc -->

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