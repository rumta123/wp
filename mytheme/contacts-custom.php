<?php
/*
Template Name: Контакты
*/

get_template_part('headerc');

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
            <li><a href="<?php echo home_url(); ?>">Главная</a></li>
            <li><a href="<?php echo home_url('about'); ?>">Обо мне</a></li>
            <li><a href="<?php echo home_url('visual'); ?>">Система Visual Design</a></li>
            <li><a href="<?php echo home_url('services'); ?>">Мои услуги</a></li>
            <li><a class="actve" href="<?php echo home_url('contacts'); ?>">Контакты</a></li>
        </ul>
    </nav>
</header>
<?php
    $phoneNumber = get_field('phoneNumber');
$phoneNumber = str_replace(' ', '', $phoneNumber);?>
<!-- Выезжающее меню в body -->
<div class="mobile-menu">
    <ul>
        <li><a href="<?php echo home_url(); ?>">Главная</a></li>
        <li><a href="<?php echo home_url('about'); ?>">Обо мне</a></li>
        <li><a href="<?php echo home_url('visual'); ?>">Система Visual Design</a></li>
        <li><a href="<?php echo home_url('services'); ?>">Мои услуги</a></li>
        <li><a class="actve" href="<?php echo home_url('contacts'); ?>">Контакты</a></li>
    </ul>
    <!-- <div class="burger open" onclick="toggleMobileMenu()">
            <div></div>
            <div></div>
            <div></div>
        </div> -->
</div>
<h2 class="contacts_h2">Контакты</h2>

<div class="mycontacts1">
    <div class="mycontacts1_block1">
        <img loading="lazy" class="mycontacts1_img" src="<?php echo get_template_directory_uri(); ?>/img/contacts.jpg"
            alt="">
    </div>
    <div style="    margin-left: 1em;">
        <div>
        <p>Тел <a href=" tel:<?php echo $phoneNumber; ?>"><?php the_field('phoneNumber'); ?>  </a></p>
            <p>Email <a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?>
                </a>
            </p>
        </div>

        <div class="block9">
            <h2><span>Напишите</span> мне </h2>
        </div>
        <a class="a_cont" href="<?php the_field('watsap_link'); ?>">What’s app </a>
        <a class="a_cont" href="<?php the_field('telegram'); ?>">Telegram </a>
    </div>
</div>
<!-- моб -->
<div class="mycontacts_modile">
    <div><img src="<?php echo get_template_directory_uri(); ?>/img/contacts.jpg"" alt=""></div>
    <div>
 
        <p>Тел <a href=" tel:<?php echo $phoneNumber; ?>"><?php the_field('phoneNumber'); ?>  </a></p>
        <p>Email <a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?>
            </a></p>

    </div>
</div>

<div class="my_b2">
    <div class="block9">
        <h2><span>Напишите</span> мне </h2>
    </div>
    <div class="my_b2__link">
    <a class="a_cont count3" target="_blank" href="<?php the_field('watsap_link'); ?>">What’s app </a>
        <a class="a_cont" target="_blank" href="<?php the_field('telegram'); ?>">Telegram </a>
    </div>
    
</div>

<div class="service1">
    <div><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/contacts.jpg" alt=""></div>
    <div>


        <span>
        <h3> <a href=" tel:<?php echo $phoneNumber; ?>"><?php the_field('phoneNumber'); ?>  </a></h3>
            <!-- <h3><a href="tel:+79258217983">+7 925 821 7983 </a> -->
            </h3>
            <h3><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?>
                </a>
            </h3>
        </span>
        <div class="block9">
            <h2><span>Напишите</span> мне </h2>
        </div>
        <a class="a_cont count3" target="_blank" href="<?php the_field('watsap_link'); ?>">What’s app </a>
        <a class="a_cont" target="_blank" href="<?php the_field('telegram'); ?>">Telegram </a>

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
<?php
get_footer();
?>