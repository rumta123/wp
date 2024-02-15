<?php
/*
Template Name: Сервис
*/

get_template_part('headers');

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
        <li><a  href="<?php echo home_url('about'); ?>">Обо мне</a></li>
        <li><a href="<?php echo home_url('visual'); ?>">Система Visual Design</a></li>
        <li><a class="actve" href="<?php echo home_url('services'); ?>">Мои услуги</a></li>
        <li><a href="<?php echo home_url('contacts'); ?>">Контакты</a></li>
 
        </ul>
    </nav>
</header>
<!-- Выезжающее меню в body -->
<div class="mobile-menu">
    <ul>
    <li><a  href="<?php echo home_url(); ?>">Главная</a></li>
        <li><a  href="<?php echo home_url('about'); ?>">Обо мне</a></li>
        <li><a href="<?php echo home_url('visual'); ?>">Система Visual Design</a></li>
        <li><a class="actve" href="<?php echo home_url('services'); ?>">Мои услуги</a></li>
        <li><a href="<?php echo home_url('contacts'); ?>">Контакты</a></li>
    </ul>
    <!-- <div class="burger open" onclick="toggleMobileMenu()">
            <div></div>
            <div></div>
            <div></div>
        </div> -->
</div>
<div class="service0">
    <h2><span>Мои</span> услуги</h2>
</div>

<div class="service1" >
    <div><img id="personal" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/service1.jpg" alt=""></div>
    <div>
        <h3>
        <?php the_field('my_uslugi_name'); ?>
        </h3>
        <ul>
        <?php
                for ($i = 1; $i <= 5; $i++) {
                    echo '<li>' . get_field('my_uslugi_' . $i) . '</li>';
                }
                ?>
        </ul>
        <div class="serv_btn "> <a href="" class="b_cont showModalBtn"
                data-text="<?php the_field('my_uslugi_name'); ?>"> Записаться</a></div>
    </div>
</div>

<!-- блок2 -->
<div class="service2" >

    <div>
        <h3><?php the_field('my_uslugi1_name'); ?>

        </h3>
        <ul>
        <?php
                for ($i = 1; $i <= 5; $i++) {
                    echo '<li>' . get_field('my_uslugi1_' . $i) . '</li>';
                }
                ?>
        </ul>
        </ul>
        <div class="serv_btn"> <a href="" class="b_cont showModalBtn"
                data-text="<?php the_field('my_uslugi1_name'); ?>"> Записаться</a></div>
    </div>

    <div><img id="garderod" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/service2.jpg" alt=""></div>
</div>
<!-- БЛОК3 -->
<div class="service1" >
    <div><img loading="lazy" id="poshiv" src="<?php echo get_template_directory_uri(); ?>/img/service3.jpg" alt=""></div>
    <div>
        <h3><?php the_field('my_uslugi2_name'); ?>

        </h3>
        <ul>
        <?php
                for ($i = 1; $i <= 5; $i++) {
                    echo '<li>' . get_field('my_uslugi2_' . $i) . '</li>';
                }
                ?>
        </ul>
        </ul>
        <div class="serv_btn"> <a href="" class="b_cont showModalBtn"
                data-text="<?php the_field('my_uslugi2_name'); ?>"> Записаться</a></div>

    </div>
</div>
<!-- БЛОК4 -->
<div class="service2">




    <div>
        <h3><?php the_field('my_uslugi3_name'); ?>
        </h3>
        <ul>
        <?php
                for ($i = 1; $i <= 5; $i++) {
                    echo '<li>' . get_field('my_uslugi3_' . $i) . '</li>';
                }
                ?>
        </ul>
        </ul>
        <div class="serv_btn"> <a href="" class="b_cont showModalBtn"
                data-text="<?php the_field('my_uslugi3_name'); ?>"> Записаться</a></div>
    </div>

    <div><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/about11.jpg" alt=""></div>
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