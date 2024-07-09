<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ProTelo
 */

?>


<footer id="contact">
    <div class="text-light foo_content">
        <div class="container px-5 py-5">
            <h1 class="text-center mb-5 pt-lg-5 text-white">Оставьте заявку и мы свяжемся с вами</h1>
            <div class="my_flex_footer">
                <input type="email" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="name@example.com">
                <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="имя">
                <button class="btn btn-outline-light w-100 btn-lg">Отправить</button>
            </div>

            <div class="my_flex gap-5 pt-lg-5 pb-lg-5">
                <div class="text-center">
                    <img class="mb-3" src="<?php echo get_template_directory_uri(); ?>/assets/images/adress_icon.png" alt="">
                    <p class="lead">Заневский пр., д. 30, к. 2, офис 108</p>
                </div>
                <div class="text-center">
                    <img class="mb-3" src="<?php echo get_template_directory_uri(); ?>/assets/images/tel.png" alt="">
                    <p class="lead">Для клиентов: <br><a class="text-decoration-none text-white text-block" href="tel:+79219030828">+7 (921) 903-08-28</a>
                </div>
                <div class="text-center">
                    <img class="mb-3" src="<?php echo get_template_directory_uri(); ?>/assets/images/email.png" alt="">
                    <p class="lead">sales@avantaj.spb.ru</p>
                </div>
            </div>

        </div>
    </div>
</footer>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Записаться на прием</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php echo do_shortcode('[contact-form-7 id="399a14c" title="Записаться"]'); ?>
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>

<a class="whatsapp_btn" target="_blank" href="https://api.whatsapp.com/send/?phone=79312208619&text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5%21+%D0%91%D1%8B%D0%BB%D0%B0+%D0%BD%D0%B0+%D0%B2%D0%B0%D1%88%D0%B5%D0%BC+%D1%81%D0%B0%D0%B9%D1%82%D0%B5%2C+%D1%85%D0%BE%D1%87%D1%83+%D0%B7%D0%B0%D0%BA%D0%B0%D0%B7%D0%B0%D1%82%D1%8C+%D1%83%D1%81%D0%BB%D1%83%D0%B3%D1%83&type=phone_number&app_absent=0">
    <img width="70" src="https://static.tildacdn.com/tild3466-3232-4635-a165-336135626536/Whatsapp_icon-iconsc.png" alt="">
</a>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<!-- animate -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    document.querySelector('html').classList.remove('no-js');
    if (!window.Cypress) {
        const scrollCounter = document.querySelector('.js-scroll-counter');

        AOS.init({
            mirror: true
        });

        document.addEventListener('aos:in', function(e) {
            console.log('in!', e.detail);
        });

        window.addEventListener('scroll', function() {
            scrollCounter.innerHTML = window.pageYOffset;
        });
    }
</script>
<script>
    var btnZapis = document.querySelectorAll('.t_btn');
    btnZapis.forEach(function(btn) {
        btn.addEventListener('click', function(event) {
            var title = event.target.getAttribute('data-title');
            document.querySelector('#servis').value = title;
            console.log('Услуга: ', title);
        });
    });
</script>
</body>
</html>
