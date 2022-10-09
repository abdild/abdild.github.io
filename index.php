<?php
include_once('head.php');
include_once('header.php');
?>

<div class="wrapper container grid-lg">
    <main class="">

        <h1 class="ai-title-primary">Содержание</h1>
        <ul>
            <li><a href="news_landing.php">Новости (лендинг)</a></li>

        </ul>
        <ul>
            <li><a href="news_one.php">Новость (одна)</a></li>

        </ul>
        <ul>
            <li><a href="post_landing.php">Бизнес-лента (лендинг)</a></li>

        </ul>
        <ul>
            <li><a href="post_one.php">Пост Бизнес-ленты (один)</a></li>

        </ul>
        <ul>
            <li><a href="movie_landing.php">Афиша кино (лендинг)</a></li>

        </ul>

        <a href="#" class="btn btn-vertical">
            <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M13 9V5C13 3.93913 12.5786 2.92172 11.8284 2.17157C11.0783 1.42143 10.0609 1 9 1C7.93913 1 6.92172 1.42143 6.17157 2.17157C5.42143 2.92172 5 3.93913 5 5V9M2 7H16L17 19H1L2 7Z"
                    stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            Заказы
        </a>

        <a href="#" class="btn btn-primary">
            <svg width="19" height="17" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12.0002 14C14.2094 14 16.0002 12.2091 16.0002 10C16.0002 7.79086 14.2094 6 12.0002 6C9.79111 6 8.00024 7.79086 8.00024 10C8.00024 12.2091 9.79111 14 12.0002 14Z"
                    stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M15.5002 13.5L18.0002 16" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M1 1H17" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M1 7H5" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M1 13H5" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
            Каталог
        </a>

        <div class="dropdown dropdown-up dropdown-center">
            <a href="#" class="btn btn-alternative dropdown-toggle" tabindex="0">
                Добавить <i class="icon icon-caret"></i>
            </a>
            <ul class="menu">
                <li class="menu-item">
                    <a href="#menus">Новость</a>
                </li>
                <li class="menu-item">
                    <a href="#" class="">Компанию</a>
                </li>
                <li class="menu-item">
                    <a href="#" class="">Акцию</a>
                </li>
                <li class="menu-item">
                    <a href="#" class="">Афишу</a>
                </li>
                <li class="menu-item">
                    <a href="#" class="">Объявление</a>
                </li>
            </ul>
        </div>

        КАК СТАТЬ АВТОРОМ
        Что интересного было в сезоне Java
        Все потоки
        Разработка
        Администрирование
        Дизайн
        Менеджмент
        Маркетинг
        Научпоп


        melnik909
        15 марта 2021 в 04:09
        Очередной гайд по HTML-элементам, которые можно использовать в каждом проекте
        HTML
        *
        Accessibility
        *
        Tutorial
        В сети существует множество гайдов, которые описывают назначение HTML-элементов. Но сколько я не проводил
        собеседований
        или не проверял код, я вижу одну картину, разработчики используют ограниченный набор элементов. Поэтому я взял
        следующий
        набор элементов: header, nav, main, section, article, aside, address, и показал случаи, когда можно их
        использовать.

        Основной контент страницы и элемент main

        На любой странице мы можем найти основной контент. Он будет отличаться от страницы к странице, но точно не будет
        повторяться. Например, как на сайте Smashing Magazine.





        На странице «Our Enchanting Smashing Articles» отображается список статей, а на странице «Growing UX Maturity:
        Finding A
        UX Champion And Demonstrating ROI (Part 1)» мы уже видим текст статьи.

        Но выделенная область на изображениях одна, которая называется основное содержимое или основной контент.
        Разметить
        данную область следует с помощью элемента main.

        Дополнительный контент к основному и элемент aside

        Кроме основного контента на странице могут существовать области, которые тематически связаны с ним. Они
        дополняют
        основной контент, но если их удалить со страницы, то понятность контента не пострадает.

        Например, на сайте Lenta.ru на странице с новостью “Непобежденный Джошуа
        научится хранить молодость у Роналду” есть блок “Материалы по теме”.



        Блок содержит статью о Криштиану Роналду, который упоминался в тексте основного контента, т.е создается
        тематическая
        связь, поэтому элемент можно разметить элементом aside.

        Также на этой странице элементом aside можно разметить блок «Ссылки по теме», потому что все ссылки тематически
        связаны
        с контентом.



        Тематически сгруппированный контент и элемент section

        Элемент section помогает нам выделить разделы страницы. Раздел в этом контексте — это тематически
        сгруппированный
        контент, смысл которого определяется заголовком. Исходя из определения важно дать объяснение термину заголовок.
        Заголовок — это текст, дающий «имя» информации.

        Чтобы лучше объяснить, я приведу несколько примеров. Рассмотрим блок “News” на сайте BBC.



        В первую очередь важно найти заголовок. Блок содержит текст “News”, который «дает имя» — «News» для 3 новостей,
        находящихся рядом. Поэтому эта структура является отличным примером раздела.

        Далее рассмотрим блоки, отображающие информацию о тарифах на сайте Patreon.



        Теперь надо найти заголовок. В этом примере элементы “Lite”, “Pro” и “Premium” являются заголовками. Почему?
        Представим,
        что я с кем-то обсуждаю тарифы и скажу: “тариф Pro”, то мой собеседник сразу поймет, о каком блоке я говорю и
        какую
        информацию он содержит. Получается, что “тариф Pro” это «имя».

        Теперь у нас есть заголовок и есть информация, как и в предыдущем примере, их можно сгруппировать элементом
        section.

        Последним пример мы рассмотрим на сайте PiterCSS, где находится блок с информацией о докладе.



        Снова находим заголовок. Здесь это название доклада, которое объединяет остальную информацию о докладе и
        докладчике.
        Далее сгруппирую ее и заголовок элементом section.

        Я надеюсь мне удалось передать моё правило для использования элемента section. Ищем заголовок и контент,
        относящийся к
        нему и группируем элементом section. И важно заметить, что раздел не может существовать без заголовка, поэтому
        элемент
        section обязательно должен содержать один из элементов h1-h6.

        Независимые области страницы и элемент article

        Элементом article следует выделять на странице независимые области, которые можно вынести из своего логического
        окружения. Этот элемент часто путают с элементом section, поэтому я на примерах хочу показать разницу.

        На сайте BBC Sport существует блок с турнирной таблицей второй лиги чемпионата Англии.



        Теперь удалю всю окружающую информацию.



        Я удалил все на странице, но по-прежнему понимаю, что делает блок, а именно показывает турнирную таблицу.
        Получается,
        удаление элемента из своего логического окружения никак не повлияло на него.

        Теперь возьму блок с информацией о тарифе «Pro» на сайте Patreon и удалю все оставшиеся элементы.



        Я понимаю, что это блок с информацией о тарифе «Pro». Отлично. Но это тариф какого продукта? Что мне с ним
        делать?
        Непонятно.

        Получается, удаление блока из своего логического окружения повлияло на него. Я, как пользователь, перестал
        понимать, что
        мне делать с этим блоком. Если я встрою его на другой сайт, то он будет выглядеть «чужеродным».

        Именно в этом кроется существенная разница между элементами section и article. Это очень тонкая грань, но смысл
        заключается в том, что если элемент не «теряется» при удалении окружающего контекста, то его следует разметить
        элементом
        article. А если теряется, то перед нами элемент section.

        Навигация и элемент nav вместе с элементами ol и ul

        Для выделения навигации на странице, нам следует использовать элемент nav. Но этого недостаточно. Часто нам
        требуется
        сгруппировать пункты с помощью списка. Для этой задачи подходят элементы ol и ul. Но как сделать выбор между
        ними?

        Исходя из этого вопроса, я рассмотрю два типа навигации, а именно: навигацию со строгим порядком пунктов и
        нестрогим.

        Строгий порядок пунктов и элемент nav вместе с ol

        Популярным примером навигации, где порядок элементов строгий являются хлебные крошки на сайте Мвидео.



        Почему я называю эту навигацию со строгим порядком пунктов? Если поменять пункты местами, то навигация перестает
        соответствовать структуре сайта. Например, поменяю местами пункты
        “Главная” и “Смартфоны и связь”.

        Смартфоны и связь
        Главная
        Смартфоны
        iPhone

        Получилась ошибка. Мы должны перейти на главную страницу со страницы «Смартфоны и связь», а это невозможно.
        Основываясь
        на этом, я делаю вывод, что порядок пунктов важен, а для списка, содержащий строгий порядок элементов, нам
        следует
        использовать элемент ol.

        Кроме хлебных крошек, к данному типу навигации можно отнести пагинацию.



        Нестрогий порядок пунктов и элемент nav вместе с ul

        Примером такой навигации является меню на сайте Мвидео.



        Снова поменяю пункты местами. Например, пункты «Все акции» и «Скидки до 80%» добавлю в конец списка:

        Смартфоны
        Телевизоры
        Ноутбуки
        Холодильники
        Стиральные машины
        Умные решения
        Apple
        Все акции
        Скидки до 80%

        Хорошо, пункты отображаются в другом порядке, и что? Навигация работает, как прежде. Получается, что изменение
        порядка
        пунктов не повлияло на работу навигации, поэтому здесь подходит элемент ul.

        Введение к контенту и элемент header

        В интернете существует мнение, что элемент header следует использовать для разметки “шапки” сайта. Мне это
        определение
        совсем не нравится, потому что оно не отражает полностью картину.

        Да, мы можем использовать элемент header для разметки «верхней» части сайта, но также мы можем использовать его
        внутри
        элементов section, article, main, aside.

        Элемент header внутри элементов main, aside, section и article

        Когда мы вкладываем элемент header в элементы main, aside, section и article, то он начинает описывать
        вступительную
        информацию этого элемента.

        Например, на сайте Smashing Magazine элемент header описывает введение для основного содержимого страницы,
        которое
        размечено элементом main.



        Элемент группирует заголовок «Our Enchanting Smashing Articles» и вводный текст. Таким образом мы получаем
        введение к
        статьям, которые идут дальше.

        В разделе с последними публикациями на главной странице Smashing Magazine элементом header можно объединить дату
        публикации, заголовок и имя автора публикации. В этом случае элемент header находится внутри элемента article.



        На сайте конференции PiterCSS элементом header можно объединить заголовок и текст с призывом стать спонсором,
        которые
        находятся внутри элемента section.



        Элемент header внутри элемента body

        Кроме вступления к отдельным элементам, мы можем разметить его и для всего сайта в целом. Для этого нам
        требуется
        вложить элемент header в элемент body.

        Например, как на сайте Smashing Magazine, где элементы header объединены логотип, навигация и поиск.



        В общем случае, мы спокойно можем использовать элемент header, когда нам требуется разметить «введение» к
        контенту либо
        элемента body, либо элементов main, aside, section и article.

        Второстепенная информация и элемент footer

        Мне кажется, что элемент footer собрат по несчастью элемента header. Если второй советуют использовать для
        «шапки», то
        первый для «подвала».

        Элемент footer подходит для разметки второстепенной информации, которая относится к связанному с ним контенту.
        Обычно
        элемент следует после контента элемента, но это не обязательное условие, и его можно добавить перед контентом.

        Как и в случае с элементом header, элемент footer можно использовать в нескольких вариантах.

        Элемент footer внутри элементов article, aside и section

        На сайте tutsPlus элементом footer группируют информацию об авторе, дату и категорию публикации. В этом случае
        элемент
        footer находится внутри элемента article.



        Элемент footer внутри элемента body

        Как я сказал выше, второстепенная информация существует также и для сайта в целом. В этом случае данная область
        должна
        повторяться на всех страницах.

        Например, на сайте Smashing Magazine в элементе footer отображаются хештеги, второстепенная навигация.



        Контактная информация и элемент address

        По моим наблюдениям данный элемент является одним из наиболее неиспользуемых, хотя контактная информация есть на
        каждом
        сайте. С помощью элемента address можно разметить адрес, телефон, ссылки на соц. сети, итп.

        Например, на сайте Мвидео элементом address следует разметить блок с телефоном и соц.сетями.



        Заключение

        Я надеюсь, что мне удалось хотя немного показать разнообразие случаев, когда мы можем использовать различные
        HTML-элементы. Надеюсь, вы попробуйте использовать этот набор элементов в своих проектах.

        Если вам понравилось, то, пожалуйста, используйте элемент address. Мне кажется, он незаслуженно забыт. Также для
        тех,
        кто хочет спросить «Зачем это надо?», у меня один ответ — просто прикольно.

        Обновление от 18.03.2021: А если хочется серьезного ответа, то Вадим Макеев рассказал его в докладе «Семантика
        для
        циников»

        P.S: Если у вас есть вопросы по CSS/HTML, то, не стесняйтесь, пишите мне на мою почту. Она указана в моем
        профиле на
        Хабре.

        P.S.S: Если вам понравилась статья, то вы можете сказать спасибо, подарив мою продукцию друзьям или лично себе.
        Ссылка в
        профиле.
        Теги: htmlsemantic webaccessibilitytutorial
        Хабы: HTMLAccessibility
        Редакторский дайджест
        Присылаем лучшие статьи раз в месяц

        Электропочта


        35
        Карма
        1
        Рейтинг
        Стас Мельников @melnik909
        Помогаю узнать больше про Accessibility, HTML, CSS

        Комментарии 6
        ПОХОЖИЕ ПУБЛИКАЦИИ
        27 апреля 2021 в 16:07
        Как обеспечить глассморфизм с помощью HTML и CSS
        +5
        7.6K

        47
        6
        +6
        27 июня 2019 в 14:24
        Semantic Web и Linked Data. Исправления и дополнения
        +4
        4.7K

        22
        3
        +3
        25 мая 2015 в 16:19
        Технологии Semantic Web
        +22
        27K

        145
        44
        +44
        МИНУТОЧКУ ВНИМАНИЯ
        Разместить

        Турбо
        Хабраблоги для маленьких, но гордых компаний

        Опрос
        Хотите рассказать о себе в наших социальных сетях?

        Интересно
        Кем работать в IT в 2022: 1С-разработчик
        ЗАКАЗЫ
        Сверстать 5 блоков
        5000 руб./за проект10 откликов69 просмотров
        Переделать вид поста
        500 руб./за проект3 отклика39 просмотров
        Курсовой проект читалка - конспектор
        3000 руб./за проект1 отклик41 просмотр
        Написать API на laravel
        1000 руб./в час7 откликов47 просмотров
        Сделать мастер подбора кредитов как на банки ру
        5000 руб./за проект5 откликов38 просмотров
        Больше заказов на Хабр Фрилансе
        ЛУЧШИЕ ПУБЛИКАЦИИ ЗА СУТКИ
        вчера в 20:58
        Лучший мультитул для IT инженера
        +81
        26K

        39
        73
        +73
        сегодня в 08:26
        Все способы легального вывода денег из России: детальный разбор со ссылками
        +47
        14K

        122
        53
        +53
        сегодня в 08:29
        Спираль смерти Цукерберга. Meta в свободном падении: пользователи уходят, выручка падает, акции ушли в пике
        +38
        23K

        24
        131
        +131
        сегодня в 14:00
        Хабр Истории: новый формат контента
        +29
        2.6K

        6
        30
        +30
        сегодня в 12:00
        Делаем firefox корпоративным браузером
        +23
        2.7K

        26
        2
        +2
        Перебрали 11 альтернатив New Relic, выбрали Elastic APM и допилили под себя: опыт Skyeng
        Турбо
        ЧИТАЮТ СЕЙЧАС
        Лучший мультитул для IT инженера
        26K
        73
        +73
        Спираль смерти Цукерберга. Meta в свободном падении: пользователи уходят, выручка падает, акции ушли в пике
        23K
        131
        +131
        Блин! Да не сложно похудеть! Даже работая в IT
        5.5K
        70
        +70
        Все способы легального вывода денег из России: детальный разбор со ссылками
        14K
        53
        +53
        Решение одной задачи с помощью 16 языков программирования
        8.3K
        22
        +22
        Опрашиваем Хабр, из чего построить рабочий компьютер
        Опрос
        ИСТОРИИ
        author-logo
        Хей-хо! Истории уже тут
        author-logo
        Заклинаем хардкор в сезоне Data Mining
        author-logo
        Круглый стол по мобильной разработке
        author-logo
        Историческое столкновение DART и Диморфа
        author-logo
        Как стать легендой Хабр Карьеры

        Ваш аккаунт

        Войти
        Регистрация
        Разделы

        Публикации
        Новости
        Хабы
        Компании
        Авторы
        Песочница
        Информация

        Устройство сайта
        Для авторов
        Для компаний
        Документы
        Соглашение
        Конфиденциальность
        Услуги

        Корпоративный блог
        Медийная реклама
        Нативные проекты
        Образовательные программы
        Стартапам
        Мегапроекты
        Настройка языка
        Техническая поддержка
        Вернуться на старую версию
        © 2006–2022, Habr

    </main>

</div>

<?php
include_once('footer.php');
?>