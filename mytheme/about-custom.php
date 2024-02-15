<?php
/*
Template Name: О странице
*/

get_template_part('headera');

?>
<header> 
<!-- Бургер-кнопка в header -->
<div class="burger" onclick="toggleMobileMenu()">
    <div></div>
    <div></div>
    <div></div>
</div>
<nav class="header-menu">
<ul>
        <li><a  href="<?php echo home_url(); ?>">Главная</a></li>
        <li><a class="actve" href="<?php echo home_url('about'); ?>">Обо мне</a></li>
        <li><a href="<?php echo home_url('visual'); ?>">Система Visual Design</a></li>
        <li><a href="<?php echo home_url('services'); ?>">Мои услуги</a></li>
        <li><a href="<?php echo home_url('contacts'); ?>">Контакты</a></li>
    </ul>
</nav>
</header>

<!-- Выезжающее меню в body -->
<div class="mobile-menu">

<ul>
        <li><a href="<?php echo home_url(); ?>">Главная</a></li>
        <li><a class="actve" href="<?php echo home_url('about'); ?>">Обо мне</a></li>
        <li><a href="<?php echo home_url('visual'); ?>">Система Visual Design</a></li>
        <li><a href="<?php echo home_url('services'); ?>">Мои услуги</a></li>
        <li><a href="<?php echo home_url('contacts'); ?>">Контакты</a></li>
</ul>

<!-- <div class="burger open" onclick="toggleMobileMenu()">
    <div></div>
    <div></div>
    <div></div>
</div> -->
</div>
<div class="about1">
<div>
    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/about1.jpg" alt="">
</div>
<div>
    <div class="about1_2_1">
        <div>
            <div>
                <p>
                <?php the_field('obomne1'); ?> 

                </p>
                <p>
                <?php the_field('obomne2'); ?> 
                </p>
                <p>
                <?php the_field('obomne3'); ?> 
                </p>
            </div>

        </div>

    </div>
</div>
</div>
<div class="about2">
<p> <?php the_field('obo_1'); ?> </p>
<p><?php the_field('obo_2'); ?> </p>

<div class="hr_img">
    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/icon.jpg" alt="">
    <hr class="about_hr">
</div>
<p> <?php the_field('obo_3'); ?> </p>

<p> <?php the_field('obo_4'); ?> </p>
<div class="hr_img">
    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/icon.jpg" alt="">
    <hr class="about_hr">
</div>

<p> <?php the_field('obo_5'); ?> </p>
<p> <?php the_field('obo_6'); ?> </p>


<div class="hr_img">
    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/icon.jpg" alt="">
    <hr class="about_hr">
</div>
<p>
<p> <?php the_field('obo_7'); ?> </p>

</p>
<p>
<p> <?php the_field('obo_8'); ?> </p>

</p>
<p>
<p> <?php the_field('obo_9'); ?> </p>

</p>
</div>
<div class="about3">
<div class="about3_desc">
    <h2 class="desc"><?php the_field('konsul_name'); ?> </h2>
    <h2 class="mobile"> <?php the_field('konsul_name_m'); ?> </h2>

    <ul>
        <li><?php the_field('konsul_li1'); ?>
        </li>
        <li><?php the_field('konsul_li2'); ?>

        </li>
    </ul>
    <a href="" class="a_cont showModalBtn" data-text="Записаться на консультацию"> Записаться на консультацию</a>

</div>
<div>
    <div class="about3_img"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/about3.jpg" alt=""></div>

</div>
</div>
<div class="block0 block_black desc">


<img class="desc_img" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/uslugi.jpg" alt="Ваше фото">

<div class="text-content">
    <h2 class="desc_img"><?php the_field('konsul_name'); ?> 
    </h2>
    <h2 class="mobile">

    <?php the_field('konsul_name_m'); ?> 
    </h2>
    <!-- Дополнительный текст -->
    <ul>
        <li><?php the_field('konsul_li1'); ?>


        </li>
        <li>
        <?php the_field('konsul_li2'); ?>
        </li>
    </ul>
    <div class="button_zapic"> <a href="#" style="padding: 15px 0;" class="button1 button_mob showModalBtn " data-text="<?php the_field('konsul_name_m'); ?> ">Записаться на консультацию</a></div>
</div>
<img class="mobile_img" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/about3.jpg" alt="Ваше фото">

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



<?php
get_footer();
?>
