<?php
        $title = 'My Moscow';
        include($_SERVER ['DOCUMENT_ROOT'].'/parts/header.php');
        require_once($_SERVER['DOCUMENT_ROOT'].'/parts/config.php'); 
?>

        <div class="offer">
            <div class="offer-name">
                <h2>Что мы предлагаем?</h2>
                <p>Наша главная цель - рассказать о Москве так, чтобы это было интересно всем!</p>
            </div> 
                <div class="offer-block">
                <div class="offer-block-item">
                    <h3 class="map">Необычные маршруты</h3>
                    <p>Мы обязательно порадуем тебя необычными маршрутами Москвы, которые проложили наши опытные гиды. Ты увидишь и узнаешь о Москве то, что никогда не знал!</p>
                </div>
                <div class="offer-block-item">
                    <h3 class="compass">Интересные экскурсии</h3>
                    <p>За время экскурсий (которых у нас больше 20) ты познакомишься со всеми достопримечательностями: Кремль, Храм Христа Спасителя; пройдёшься по пешеходным улицам Москвы, узнаешь их историю и сделаешь самые классные фотографии!</p>
                </div>
                <div class="offer-block-item">
                    <h3 class="discussion">Новые знакомства</h3>
                    <p>MyMoscow - это целый клуб, где после московских прогулок ты сможешь продолжить общение с теми, кому интересна Москва, знакомиться с новыми людьми и делиться впечатлениями.</p>
                </div>
                <div class="offer-block-item">
                    <h3 class="souvenir">Классные сувениры</h3>
                    <p>Отличная новость - у нас появился магазин сувениров! И самое примечательное, что все эти сувениры мы делаем сами! Заходи к нас в гости!</p>
                </div>
                <div class="offer-block-item">
                    <h3 class="picture">Фотосессии в Москве</h3>
                    <p>Команда MyMoscow рада провести креативные фотосессии в любом уголке Москвы. Не важно - свадьба у вас или просто захотелось добавить в альбом или инстаграм красивых фоток.</p>
                </div>
                <div class="offer-block-item">
                    <h3 class="sun">Яркие впечатления</h3>
                    <p>Самое важное - это яркие эмоции, которые останутся с тобой на долгое время! Поэтому в нашей команде мы ждём именно тебя!</p>
                </div>
            </div>
        </div>
        <div class="about">
            <div class="about-pic"></div>
            <div class="about-text">
                <h2>Кто мы такие</h2> <!--CHANGED-->
                <p>Мы - команда тех, кто любит историю и любит Москву</p>
                <p>Москва - это не только место по "заколачиванию денег" и "взращиванию карьеры", а ещё и бесконечно красивые памятники природы, заказники, парки и заповедники. Активный отдых в Москве и Подмосковье - это отличная возможность вырваться из душного мегаполиса куда-нибудь в "дебри", навстречу приключениям. К счастью, не всё Подмосковье ещё "облагорожено" асфальтовыми дорожками и высоченными коттеджными забормаи. Ещё встречаются места настолько глухие и далекие, что очутившись там кажется, что ты первый человек, ступивший на эту землю.</p>
                <p>Там, где не проедет автомобилист и даже велосипедист, найдёт лазейку и откроет для себя все красоты 100% бездорожья турист, проводящий свой активный отдых в Подмосковье.</p>
                <div class="about-text-button button">Связаться с нами</div>
                <div class="popup">
                    <div class="popup-content">
                        <form method="GET" action="form.php">
                            <input type="text" name="fio" placeholder="ФИО">
                            <input type="email" name="email" placeholder="E-mail">
                            <input type="tel" name="phone" placeholder="Телефон">
                            <textarea name="comment" placeholder="Ваше сообщение">Есть что сказать?</textarea>
                            <button type="submit">Отправить</button>
                            <div class="error-message"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="photo">
            <div class="photo-text">
                <h2>Москва в фотографиях</h2>
                <p>Проще всего рассказать обо всём в фотографиях. Смотрите наши фотоотчёты и присылайте нам свои фотографии!</p>
            </div>
            <div class="photo-block">
                <div class="photo-block-item"></div>
                <div class="photo-block-item"></div>
                <div class="photo-block-item"></div>
                <div class="photo-block-item"></div>
                <div class="photo-block-item"></div>
                <div class="photo-block-item"></div>
                <div class="photo-block-item"></div>
                <div class="photo-block-item"></div>
            </div>
        </div>
        <div class="reviews">
            <h2>Отзывы</h2>
            <div class="reviews-block">
                <div class="reviews-block-item">
                    <div class="reviews-block-item-first">
                        <p>Были с дочкой и подругой на ночной экскурсии. Всё-таки как же много зависит от экскурсовода! Мы все 4 часа ходили за Станиславом Симоновым, как кролики. Боялись пропустить хотя бы одно слово. При этом, моя дочка - которая побывала во многих местах и с детства искушена на интересные события - была очень увлечена.</p>
                        <div class="reviews-block-item-first-name">Екатерина Васильева</div>
                    </div>
                </div>
                <div class="reviews-block-item">
                    <div class="reviews-block-item-second">
                        <p>Ездили на экскурсию с семиклассниками и родителями. Всем очень понравилось! Экскурсовод Михаил Борисович очень интересно, необычно и с юмором рассказывал о Москве XVI века. Гибко подстраивал экскурсию под интересы и потребности слушателей, ловко "управлял" подачей автобуса, не давая нам замерзнуть. Огромное ему спасибо!</p>
                        <div class="reviews-block-item-second-name">Анна Крушевская</div>
                    </div>
                </div>
            </div>
            <div class="reviews-scroll"></div>
        </div>
        
<?php
    include($_SERVER ['DOCUMENT_ROOT'].'/parts/footer.php');
?>