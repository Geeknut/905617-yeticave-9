<main>
    <nav class="nav">
        <ul class="nav__list container">
            <?php foreach ($categories as $category) :?>
                <li class="nav__item">
                    <a href="pages/all-lots.html"><?= htmlspecialchars($category['title']); ?></a>
                </li>
            <?php endforeach;?>
        </ul>
    </nav>
    <section class="rates container">
        <h2>Мои ставки</h2>
        <table class="rates__list">
            <?php foreach ($rates as $rate) :?>
            <tr class="rates__item">
                <td class="rates__info">
                    <div class="rates__img">
                        <img src="uploads/<?=htmlspecialchars($rate['image']); ?>" width="54" height="40" alt="<?=htmlspecialchars($rate['lot_title']); ?>">
                    </div>
                    <h3 class="rates__title"><a href="/lot.php?id=<?=htmlspecialchars($rate['id']); ?>"><?=htmlspecialchars($rate['lot_title']); ?></a></h3>
                </td>
                <td class="rates__category">
                    <?=htmlspecialchars($rate['category_title']); ?>
                </td>
                <td class="rates__timer">
                    <div class="timer <?= is_finishing('tomorrow') ? 'timer--finishing' : '' ?>"><?=time_to_end('tomorrow');?></div>
                </td>
                <td class="rates__price">
                    <?=htmlspecialchars($rate['price']); ?> р
                </td>
                <td class="rates__time">
                    <?=htmlspecialchars($remaining_minutes).' '.htmlspecialchars($rates_time); ?> назад
                </td>
            </tr>
            <?php endforeach;?>

            <tr class="rates__item">
                <td class="rates__info">
                    <div class="rates__img">
                        <img src="../img/rate2.jpg" width="54" height="40" alt="Сноуборд">
                    </div>
                    <h3 class="rates__title"><a href="lot.html">DC Ply Mens 2016/2017 Snowboard</a></h3>
                </td>
                <td class="rates__category">
                    Доски и лыжи
                </td>
                <td class="rates__timer">
                    <div class="timer timer--finishing">07:13:34</div>
                </td>
                <td class="rates__price">
                    10 999 р
                </td>
                <td class="rates__time">
                    20 минут назад
                </td>
            </tr>
            <tr class="rates__item rates__item--win">
                <td class="rates__info">
                    <div class="rates__img">
                        <img src="../img/rate3.jpg" width="54" height="40" alt="Крепления">
                    </div>
                    <div>
                        <h3 class="rates__title"><a href="lot.html">Крепления Union Contact Pro 2015 года размер L/XL</a></h3>
                        <p>Телефон +7 900 667-84-48, Скайп: Vlas92. Звонить с 14 до 20</p>
                    </div>
                </td>
                <td class="rates__category">
                    Крепления
                </td>
                <td class="rates__timer">
                    <div class="timer timer--win">Ставка выиграла</div>
                </td>
                <td class="rates__price">
                    10 999 р
                </td>
                <td class="rates__time">
                    Час назад
                </td>
            </tr>
            <tr class="rates__item">
                <td class="rates__info">
                    <div class="rates__img">
                        <img src="../img/rate4.jpg" width="54" height="40" alt="Ботинки">
                    </div>
                    <h3 class="rates__title"><a href="lot.html">Ботинки для сноуборда DC Mutiny Charocal</a></h3>
                </td>
                <td class="rates__category">
                    Ботинки
                </td>
                <td class="rates__timer">
                    <div class="timer">07:13:34</div>
                </td>
                <td class="rates__price">
                    10 999 р
                </td>
                <td class="rates__time">
                    Вчера, в 21:30
                </td>
            </tr>
            <tr class="rates__item rates__item--end">
                <td class="rates__info">
                    <div class="rates__img">
                        <img src="../img/rate5.jpg" width="54" height="40" alt="Куртка">
                    </div>
                    <h3 class="rates__title"><a href="lot.html">Куртка для сноуборда DC Mutiny Charocal</a></h3>
                </td>
                <td class="rates__category">
                    Одежда
                </td>
                <td class="rates__timer">
                    <div class="timer timer--end">Торги окончены</div>
                </td>
                <td class="rates__price">
                    10 999 р
                </td>
                <td class="rates__time">
                    Вчера, в 21:30
                </td>
            </tr>
            <tr class="rates__item rates__item--end">
                <td class="rates__info">
                    <div class="rates__img">
                        <img src="../img/rate6.jpg" width="54" height="40" alt="Маска">
                    </div>
                    <h3 class="rates__title"><a href="lot.html">Маска Oakley Canopy</a></h3>
                </td>
                <td class="rates__category">
                    Разное
                </td>
                <td class="rates__timer">
                    <div class="timer timer--end">Торги окончены</div>
                </td>
                <td class="rates__price">
                    10 999 р
                </td>
                <td class="rates__time">
                    19.03.17 в 08:21
                </td>
            </tr>
            <tr class="rates__item rates__item--end">
                <td class="rates__info">
                    <div class="rates__img">
                        <img src="../img/rate7.jpg" width="54" height="40" alt="Сноуборд">
                    </div>
                    <h3 class="rates__title"><a href="lot.html">DC Ply Mens 2016/2017 Snowboard</a></h3>
                </td>
                <td class="rates__category">
                    Доски и лыжи
                </td>
                <td class="rates__timer">
                    <div class="timer timer--end">Торги окончены</div>
                </td>
                <td class="rates__price">
                    10 999 р
                </td>
                <td class="rates__time">
                    19.03.17 в 08:21
                </td>
            </tr>
        </table>
    </section>
</main>