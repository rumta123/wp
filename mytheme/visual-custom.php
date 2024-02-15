<?php
/*
Template Name: Визуал
*/

get_template_part('headerv');

?>



<!-- Бургер-кнопка в header -->
<header>
    <!-- Бургер-кнопка в header -->
    <div class="burger" onclick="toggleMobileMenu()">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <nav class="header-menu">
        <ul>
            <li><a href="<?php echo home_url(); ?>">Главная</a></li>
            <li><a href="<?php echo home_url('about'); ?>">Обо мне</a></li>
            <li><a class="actve" href="<?php echo home_url('visual'); ?>">Система Visual Design</a></li>
            <li><a href="<?php echo home_url('services'); ?>">Мои услуги</a></li>
            <li><a href="<?php echo home_url('contacts'); ?>">Контакты</a></li>
        </ul>
    </nav>
</header>

<!-- Выезжающее меню в body -->
<div class="mobile-menu">

    <ul>
        <li><a href="<?php echo home_url(); ?>">Главная</a></li>
        <li><a href="<?php echo home_url('about'); ?>">Обо мне</a></li>
        <li><a class="actve" href="<?php echo home_url('visual'); ?>">Система Visual Design</a></li>
        <li><a href="<?php echo home_url('services'); ?>">Мои услуги</a></li>
        <li><a href="<?php echo home_url('contacts'); ?>">Контакты</a></li>
    </ul>

</div>
<div class="visual1">
    <img loading="lazy" class="desc" src="<?php echo get_template_directory_uri(); ?>/img/visual.jpg" alt="">
    <img loading="lazy" class="mob" src="<?php echo get_template_directory_uri(); ?>/img/visual_mob.jpg" alt="">
</div>

<div class="visual2">
    <h2><span> <?php the_field('visual_name1'); ?>  </span> <?php the_field('visual_name2'); ?></h2>
    <div class="visual2_div1">
        <div>
            <ul>
                <?php
                for ($i = 1; $i <= 8; $i++) {
                    echo '<li>' . get_field('visual_' . $i) . '</li>';
                }
                ?>
            </ul>
        </div>

    </div>
</div>
<div class="visual3">
    <h2><span><?php the_field('visual1_name1'); ?> </span> <?php the_field('visual1_name2'); ?></h2>
    <div class="visual3_div1">
        <div>
            <div>
                <p class="sobs"><?php the_field('visual_text'); ?>
                </p>
                <h2 class="know_h2"><?php the_field('visual_text2'); ?>
                </h2>
                <ul>
<?php
for ($i = 1; $i <= 6; $i++) {
    if ($i % 2 != 0) {
        // Нечетный элемент
        echo '<li><span>' . get_field('visual1_' . $i) . '</span><br>';
    } else {
        // Четный элемент
        echo get_field('visual1_' . $i) . '</li>';
    }
}
?>
</ul>
                <img src="<?php echo get_template_directory_uri(); ?>/img/girl_nout.png" alt="">
            </div>

        </div>
    </div>
</div>
<div class="visual4">
    <div></div>
    <div>
        <p><?php the_field('visual2_text'); ?>
        </p>
        <h2 class="know_h2"><?php the_field('visual2_text2'); ?>
        </h2>
        <ul>
<?php
for ($i = 1; $i <= 6; $i++) {
    if ($i % 2 != 0) {
        // Нечетный элемент
        echo '<li><span>' . get_field('visual2_' . $i) . '</span><br>';
    } else {
        // Четный элемент
        echo get_field('visual2_' . $i) . '</li>';
    }
}
?>
</ul>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/img/oldmen.png" alt="">
</div>

<div class="visual5">

    <div class="visual5_div1">
        <div>
            <div>
                <p class="sobs"><?php the_field('visual3_text'); ?>
                </p>
                <h2 class="know_h2"><?php the_field('visual3_text2'); ?>
                </h2>
                <ul>
                <?php
for ($i = 1; $i <= 6; $i++) {
    if ($i % 2 != 0) {
        // Нечетный элемент
        echo '<li><span>' . get_field('visual3_' . $i) . '</span><br>';
    } else {
        // Четный элемент
        echo get_field('visual3_' . $i) . '</li>';
    }
}
?>
</ul>
             
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/dve.png" alt="">

        </div>
    </div>
</div>
<div class="visual6">
    <div class="visual6_div1">
        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/visual6.jpg" alt="">
    </div>
    <div>
        <h2 class="desc">
            <?php the_field('konsul_name'); ?>

        </h2>
        <h2 class="mobile">
            <?php the_field('konsul_name_m'); ?>
        </h2>
        <ul>
            <li>
                <?php the_field('konsul_li1'); ?>
            </li>
            <li>
                <?php the_field('konsul_li2'); ?>
            </li>
        </ul>
        <a href="" class="b_cont showModalBtn" data-text="<?php the_field('konsul_name_m'); ?>"> Записаться на
            консультацию</a>
    </div>

</div>


<!-- модалка -->

<div id="modal" class="modal">
    <div class="modal-content">
        <span class="close" id="closeModalBtn">&times;</span>
        <h2 id="modalHeading">Начальный заголовок</h2>
        <form>
            <div class="form-group">

                <input type="text" id="name" name="name" placeholder="Имя" required>
            </div>
            <div class="form-group">

                <input type="tel" id="phone" name="phone" placeholder="Телефон" required>
            </div>



            <input type="hidden" id="textInput" name="textInput" placeholder="Значение из data-text">
            <button type="submit">Отправить</button>
        </form>

    </div>
</div>

<div id="overlaymodal" class="overlaymodal"></div>

</body>



<?php
get_footer();
?>