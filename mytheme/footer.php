<footer>
        <div class="footer">
            <div>
                <p>
                    <a href="<?php echo home_url('about'); ?>">Обо мне</a>
                </p>

                <p class="footer_p1">
                <a href="<?php echo home_url('visual'); ?>">Система Visual design</a>
                </p>
            </div>


            <div>
                <p>
                <a href="<?php echo home_url('services'); ?>"> Мои услуги</a>
                   

                </p>
                <div class="footer_sdvig">
                    <p class="footer_p1">
                        <a href="<?php echo home_url('services'); ?>/#personal">Персональная консультация по визуалу</a>
                    </p>
                    <p>
                        <a href="<?php echo home_url('services'); ?>/#garderod">Разбор гардероба</a>
                         
                    </p>
                    <p> 
                        <a href="<?php echo home_url('services'); ?>/#poshiv">Индивидуальный пошив</a>
                    
                    </p>

                </div>

            </div>
            <div>
                <p> <a href="<?php echo home_url('contacts'); ?>">Контакты</a></p>
                <p class="footer_p1">
                <a href="tel:+79258217983">8 (925) 821-79-83</a>


                </p>
                <p><a href="mailto:info@gracecouture.ru">info@gracecouture.ru</a>
</p>
            </div>
        </div>
        <div>
            <p class="p_footer">@ 2010-2023, все права защищены.</p>
        </div>

    </footer>

   
    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
    <!-- <script src="js/slaider.js"></script> -->
    <?php wp_footer(); ?>
</body>

</html>