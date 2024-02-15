<?php get_header(); ?>



<header>
        <!-- Бургер-кнопка в header -->
        <div class="burger" onclick="toggleMobileMenu()">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <nav class="header-menu">
            <ul>
            <li><a class="actve" href="<?php echo home_url(); ?>">Главная</a></li>
        <li><a  href="<?php echo home_url('about'); ?>">Обо мне</a></li>
        <li><a href="<?php echo home_url('visual'); ?>">Система Visual Design</a></li>
        <li><a  href="<?php echo home_url('services'); ?>">Мои услуги</a></li>
        <li><a href="<?php echo home_url('contacts'); ?>">Контакты</a></li>
            </ul>
        </nav>
    </header>

    <!-- Выезжающее меню в body -->
    <div class="mobile-menu">
        <ul>
        <li><a class="actve" href="<?php echo home_url(); ?>">Главная</a></li>
        <li><a  href="<?php echo home_url('about'); ?>">Обо мне</a></li>
        <li><a href="<?php echo home_url('visual'); ?>">Система Visual Design</a></li>
        <li><a  href="<?php echo home_url('services'); ?>">Мои услуги</a></li>
        <li><a href="<?php echo home_url('contacts'); ?>">Контакты</a></li>
        </ul>
    </div>
   

    <!-- первая страница  -->

    <div class="container">
        <div class="column" id="column1">

        </div>
        <div class="column" id="column2" data-text="Александра Климова">

        </div>
        <div class="column" id="column3">

        </div>
    </div>

    <div class="container1">
        <div class="column" id="column1_1">
            <ul class="ul2">
                <li>модельер, стилист, имиджмейкер</li>
                <li>специалист по раскрытию</li>
                <li>потенциала личности через визуал</li>
            </ul>
        </div>
        <div class="column" id="column2_1">

        </div>
        <div class="column" id="column3_1">
            <ul class="ul3">

                <li> #потенциал #имидж </li>
                <li> #продающий_визуал
                </li>
                <li>#взаимоотношения
                </li>
            </ul>
        </div>
    </div>


    <div class="block_div">
    
        <div class="slides-container">
            <div class="slide">
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/2-2.jpg" alt="">
            </div>
     
        </div>
    </div>
    <!-- блок 3 -->

    <div class="block3_photo_container_mobile">

        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/4.jpg" alt="Ваше фото">
        <div class="overlay"></div>

    </div>

    <div class="image-text-block">
        <div class="image">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/4.jpg" alt="Your Image">
        </div>
        <div class="text1">
            <div></div>
            <div>
            <p><?php the_field('zapis1'); ?></p>
               
                
                 
            </div>

        </div>

    </div>
    <div class="sdvig">
    <p><?php the_field('zapis2'); ?></p>
               
        <p class="text0"><?php the_field('zapis3'); ?>
        </p>
    </div>


    <div class="image-text-block ">
        <div class="image">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/5.jpg" alt="Your Image">
        </div>
        <div class="text1">
            <div></div>
            <div>
                <p>
                <?php the_field('index_li'); ?>
                  
                </p>
            </div>

        </div>


    </div>
    <div class="sdvig">
        <ul class="image-list">
            <li>


                <span class="list-content">


                <?php the_field('index_li1'); ?></span>
            </li>
            <li>



                <span class="list-content">
                <?php the_field('index_li2'); ?></span>
            </li>
            <li>


                <span class="list-content">
                <?php the_field('index_li3'); ?></span>
            </li>
            <li>


                <span class="list-content">
                <?php the_field('index_li4'); ?></span>
            </li>
            <li>


                <span class="list-content">
                <?php the_field('index_li5'); ?></span>
            </li>
        </ul>

    </div>


    <div class="block3 block_dis">
        <div class="block3__desc">

        <p><?php the_field('zapis1'); ?></p>
        <p><?php the_field('zapis2'); ?></p>
        <p><?php the_field('zapis3'); ?></p>
        
        </div>

        <div class="block3_photo_container block_dis">

            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/4.jpg" alt="Ваше фото">
            <div class="overlay"></div>

        </div>

        <div class="image-text-block block_dis">
            <div class="image">
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/4.jpg" alt="Your Image">
            </div>
            <div class="text">
            <p><?php the_field('zapis1'); ?></p>
        <p><?php the_field('zapis2'); ?></p>
        <p class="text0"><?php the_field('zapis3'); ?></p>
             
            </div>
        </div>

    </div>
    <div class="block4 block_dis">
        <div class="block4_photo_container">

            <img loading="lazy" class="my" src="<?php echo get_template_directory_uri(); ?>/img/5.jpg" alt="Ваше фото">
            <div class="overlay"></div>

        </div>

        <div class="block4__desc">
            <div>
                <p><?php the_field('index_li'); ?>

                </p>
        
                <ul class="image-list">
                    <li>


                        <span class="list-content">
                        <?php the_field('index_li1'); ?>

                            </span>
                    </li>
                    <li>



                        <span class="list-content">
                        <?php the_field('index_li2'); ?>
</span>
                    </li>
                    <li>


                        <span class="list-content">
                        <?php the_field('index_li3'); ?>
</span>
                    </li>
                    <li>


                        <span class="list-content">
                        <?php the_field('index_li4'); ?>
</span>
                    </li>
                    <li>


                        <span class="list-content">
                        <?php the_field('index_li5'); ?>
</span>
                    </li>
                </ul>

            </div>
          


        </div>

        <div class="image-text-block">
            <div class="image">
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/5.jpg" alt="Your Image">
            </div>
            <div class="text">
                <p> <?php the_field('index_li'); ?>

                </p>
                <ul>
                    <li>
                    <?php the_field('index_li1'); ?>
                    </li>
                    <li>
                    <?php the_field('index_li2'); ?>
                    </li>
                    <li>
                    <?php the_field('index_li3'); ?>
                    </li>
                    <li>
                    <?php the_field('index_li4'); ?>
                    </li>
                    <li>
                    <?php the_field('index_li5'); ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <!-- блок с фото слева -->
    <div class="block5">
        <div class="block5__photo">
            <img loading="lazy" style="height: auto;" src="<?php echo get_template_directory_uri(); ?>/img/photo_left.jpg" alt="Ваше фото">
        </div>
        <div class="block5__desc">
            <p class="kto"><?php the_field('cho_ya'); ?></p>
            <h2 class="block5__desc_h2" style="color:#7A83A5"><?php the_field('al'); ?> </h2>
            <p class="block5__desc_p"style="font-weight: 600; line-height: 30px;"> <?php the_field('cho_deck'); ?>  
            </p>
            <p class="block5__desc_mobile">
            <?php the_field('cho_deck'); ?>  
            </p>

            <ul class="image-list">
                <li>
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/icon.jpg" class="list-image" alt="Image 1">
                    <span class="list-content">
                    <?php the_field('cho_desc2'); ?>  
                    
                       

                    </span>

                </li>
                <li>
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/icon.jpg" class="list-image" alt="Image 1">
                    <span class="list-content">
                    <?php the_field('cho_desc3'); ?>  
                        

                    </span>

                </li>
                <li>
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/icon.jpg" class="list-image" alt="Image 1">
                    <span class="list-content">
                    <?php the_field('cho_desc4'); ?>  
                       
                    </span>

                </li>

                <li>
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/icon.jpg" class="list-image" alt="Image 1">
                    <span class="list-content">
                    <?php the_field('cho_desc5'); ?>  
                        
                    </span>

                </li>
                <li>
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/icon.jpg" class="list-image" alt="Image 1">
                    <span class="list-content">
                    <?php the_field('cho_desc6'); ?>  
                        

                    </span>

                </li>

                <li>
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/icon.jpg" class="list-image" alt="Image 1">
                    <span class="list-content">
                    <?php the_field('cho_desc7'); ?>  
                        

                    </span>

                </li>
                <li>
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/icon.jpg" class="list-image" alt="Image 1">
                    <span class="list-content">
                    <?php the_field('cho_desc8'); ?>  
                        

                    </span>

                </li>
            </ul>
            <!-- <a href="#" class="button3 showModalBtn" data-text="Записаться">Записаться</a> -->
        </div>


    </div>

    </div>

    <!-- мои услуги -->
    <div class="block7">
        <h2><span>Мои</span> услуги</h2>
        <div class="block7__usluga">
            <div class="block7__usluga_block">
                <h3>
                <?php the_field('name_usluga1'); ?>  
                   
                </h3>
                <hr>

                <p>
                <?php the_field('dec_usluga1'); ?>  
                   
                </p>
                <p class="zapic_p">
                <?php the_field('desc2_usluga_1'); ?>  
                
                   
                </p>
                <p>
                <?php the_field('price_usluga1'); ?> 
                
                  

                </p>
                <div> <a href="#" class="button1 showModalBtn"
                        data-text="<?php the_field('name_usluga1'); ?> ">Записаться</a></div>

            </div>
            <div class="block7__usluga_block">
                <h3> <?php the_field('name_usluga2'); ?>  
                </h3>
                <hr>
                <p>
                <?php the_field('dec_usluga2'); ?>  
                </p>
                <p class="zapic_p">
                <?php the_field('desc2_usluga_2'); ?>   <br /> <?php the_field('price_usluga2'); ?> 
                </p>
                <div> <a href="#" class="button1 showModalBtn" data-text="Разбор гардероба">Записаться</a></div>
            </div>
            <div class="block7__usluga_block">
                <h3><?php the_field('name_usluga3');?>
                </h3>
                <hr>
                <p>
                <?php the_field('dec_usluga3'); ?>  

                </p>
                <p class="zapic_p">

                <?php the_field('price_usluga3'); ?> 

                </p>
                <div> <a href="#" class="button1 showModalBtn" data-text="Индивидуальный пошив одежды">Записаться</a>
                </div>
            </div>
            <div class="block7__usluga_block">

                <h3>
                <?php the_field('name_usluga4');?>
                </h3>
                <hr>
                <p>
                <?php the_field('dec_usluga4'); ?>  
                </p>
                <p class="zapic_p">
                <?php the_field('price_usluga4'); ?> 
                </p>
                <div> <a href="#" class="button1 showModalBtn" data-text="Фотосессия стилевых образов">Записаться</a>
                </div>
            </div>
        </div>
    </div>


    <!-- записаться на персональную консультацию -->
    <div class="block0 block_black desc">


        <img class="desc_img" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/uslugi.jpg" alt="Ваше фото">
   
        <div class="text-content">
            <h2 class="desc_img">
            <?php the_field('konsul_name'); ?> 
         
            </h2>
            <h2 class="mobile">

            <?php the_field('konsul_name'); ?> 
            </h2>
            <!-- Дополнительный текст -->
            <ul>
                <li> <?php the_field('konsul_li1'); ?> 


                </li>
                <li>
                <?php the_field('konsul_li2'); ?> 
                </li>
            </ul>
            <div class="button_zapic"> <a href="#" style="padding: 15px 10px;" class="button1 button_mob showModalBtn "
                    data-text="Записаться на личную консультацию">Записаться</a></div>
        </div>
        <img class="mobile_img" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/uslugi_mob.png" alt="Ваше фото">

    </div>


    <div class="block9" style="display: none;"  >
        
    <img  class="desc_img" loading=" lazy" src="<?php echo get_template_directory_uri(); ?>/img/fon.jpg" alt="">
        <div class="text-content" >
            <h2> <?php the_field('konsul_name'); ?> 
            </h2>
            <!-- Дополнительный текст -->
            <ul>
            <li> <?php the_field('konsul_li1'); ?> </li>
            <li> <?php the_field('konsul_li2'); ?> </li>

</li>
            </ul>
            <div class="button_zapic"> <a href="#" class="button1 showModalBtn" style="padding: 15px 0;"
                    data-text="Записаться на личную консультацию">Записаться на консультацию</a></div>
        </div>
    </div>
<div class="block_consul" >
    <div style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/uslugi_mob.png');">

    </div>
    <div class="">
        <h2 style="   color: #fff;
        text-align: center;
        /* margin-top: 10px; */
        position: relative;
        top: -30px;
        "><?php the_field('konsul_name'); ?> 
        </h2>
        <ul>
        <li> <?php the_field('konsul_li1'); ?> </li>
            <li> <?php the_field('konsul_li2'); ?> </li>
        </ul>
        <div class="button_zapic"> <a href="#" class="button1 showModalBtn" style="padding: 15px 10px;"
                data-text="Записаться на личную консультацию">Записаться на консультацию</a></div>
    </div>
  
</div>
    <div class="block9 mobile" style="    padding-top: 0px;">

        <h2 class="histori_m"><span>Истории</span> успеха</h2>

        <div class="block9_col">
            <div class="block4_photo_container">

                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/i1.png" alt="Ваше фото">
                <!-- <div class="overlay"></div> -->

            </div>

            <div class="block4__desc">
                <div class="block4__desc_h">
                    <span>
                        <h2><?php the_field('history_name'); ?> 
                        </h2>
                    </span>
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/i1.png" alt="Ваше фото">
                    <p class="block4_desc"><?php the_field('history_desc1'); ?> </p>
                    <p><?php the_field('history_desc2'); ?>
                    </p>
                    
                </div>
            </div>


        </div>

    </div>




    <div class="block9 mobile" style="margin: 0; padding: 0">

     

        <div class="block9_col">

            <div class="block4_photo_container">

                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/i2.png" alt="Ваше фото">
                <!-- <div class="overlay"></div> -->

            </div>




            <div class="block4__desc">
                <div class="block4__desc_h">
                    <span>
                        <h2>
                        <?php the_field('history1_name'); ?> 
                            

                        </h2>
                    </span>
                    
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/i2.png" alt="Ваше фото">
                <?php the_field('history1_desc1'); ?> 
                    <p>
                    <?php the_field('history1_desc2'); ?> 
                    

                    </p>

                </div>
            </div>


        </div>

    </div>

    <div class="block9 mobile" style="margin: 0; padding: 0">

      
        <div class="block9_col">

            <div class="block4_photo_container">

                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/i3.png" alt="Ваше фото">
                <!-- <div class="overlay"></div> -->

            </div>



            <!-- блок 3 описание -->
            <div class="block4__desc">
                <div class="block4__desc_h">
                    <span>
                        <h2><?php the_field('history2_name'); ?> 

                        </h2>

                    </span>
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/i3.png" alt="Ваше фото">
                    <?php the_field('history2_desc1'); ?> 

                </div>
            </div>


        </div>

    </div>


<!-- мобильник истории успеха -->
  

    <!-- лого -->
    <div class="block0 block5_logo5">
        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/logo/1.png" alt="Ваше фото">
        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/logo/2.png" alt="Ваше фото">
        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/logo/3.png" alt="Ваше фото">
        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/logo/4.png" alt="Ваше фото">
        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/logo/5.png" alt="Ваше фото">
        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/logo/6.png" alt="Ваше фото">
    </div>
    <!-- взаимодействие с медиа компаниями -->
    <div class="block6">
        <h2><span>  <h2><?php the_field('media_name1'); ?> </span> <?php the_field('media_name2'); ?> </h2>
        <ul class="image-list">
            <li>
                <span class="list-content">

                <?php the_field('media_li1'); ?></span>
            </li>
            <li>
                <span class="list-content"><?php the_field('media_li2'); ?>                   
            </span>

            </li>
            <li>
                <span class="list-content">
                <?php the_field('media_li3'); ?></span>

            </li>
            <li>
                <span class="list-content">
                <?php the_field('media_li4'); ?></span>

            </li>
        </ul>
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



<?php get_footer(); ?>
