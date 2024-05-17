# ACF-Nested-Repeater-Accordion
<h2>ACF Accordion Shortcode EN</h2>
This shortcode enables you to seamlessly integrate an accordion into your WordPress pages or posts using data from ACF repeater fields. The accordion is perfect for displaying pricing or other product/service details in a structured, user-friendly manner.

<h3>Installation</h3>
Ensure that you have the Advanced Custom Fields plugin installed and activated. Add the code below to the functions.php file of your active WordPress theme:
<pre>
  <code>
  // Add this to your theme's functions.php file
add_shortcode( 'price_accordion_acf', 'price_accordion_acf' );
function price_accordion_acf() {
    // shortcode code
}
add_action('wp_enqueue_scripts', 'ativate_price_accordion');
</code>
</pre>
<h3>Creating ACF Fields</h3>
Create a new 'price_repeater' field (Repeater Field):
<ul>
  <li>tab_header_title (Text): The title for each accordion tab.</li>
  <li>prices (Sub Repeater Field):</li>
  <ul>
    <li>table_item_title (Text): The title of the table item.</li>
    <li>table_item_description (Text): Description of the table item.</li>
    <li>price (Number): The price of the item.</li>
  </ul>
</ul>

<h3>Usage</h3>
Insert the shortcode <strong>[price_accordion_acf]</strong> wherever you want the accordion to appear on your page or post. The shortcode will automatically pull data from your ACF fields and render an accordion formatted according to your theme’s styling.

<h4>In Posts and Pages</h4>
Simply insert [price_accordion_acf] in the WordPress editor wherever you want the accordion to display.

<h4>In Theme Files</h4>
If you want to integrate the accordion directly into your theme’s PHP files, use the following code:

<pre>
  <code>
    echo do_shortcode('[price_accordion_acf]');
  </code>
</pre>
Place this PHP code in the appropriate template file where you want the accordion to appear.

<h3>Styling</h3>
The accordion comes with basic styling, but you can easily customize it to fit your site's design. Add additional CSS rules to your theme's stylesheet to modify the appearance of the accordion.

<h3>JavaScript</h3>
The accordion functionality is supported by JavaScript, which includes an animation effect for the accordion tabs. The script is defined in the <b>activate_price_accordion</b> function and is added via the <b>wp_enqueue_scripts</b> hook.

## License

This project is licensed under the MIT License - see the [LICENSE](./LICENSE) file for details.


<h2>ACF Accordion UA</h2>
Цей шорткод дозволяє легко інтегрувати акордеон у ваші сторінки або пости WordPress, використовуючи дані з ACF repeater fields. Акордеон ідеально підходить для структурованого відображення інформації про ціни або інші характеристики продуктів/послуг, роблячи ваш контент більш доступним і зручним для користувача.

<h3>Встановлення</h3>
Переконайтеся, що у вас встановлений та активований плагін Advanced Custom Fields. Додайте код наведений нижче у файл functions.php вашої активної теми WordPress:
<pre>
  <code>
  // Файл functions.php вашої теми
  add_shortcode( 'price_accordion_acf', 'price_accordion_acf' );
  function price_accordion_acf() {
      // код шорткода
  }
  add_action('wp_enqueue_scripts', 'ativate_price_accordion');
  </code>
</pre>

<h3>Створення ACF полів</h3>
Створіть нове поле 'price_repeater' (Repeater Field):
<ul>
  <li>tab_header_title (Text): Заголовок для кожної вкладки акордеону.</li>
  <li>prices (Sub Repeater Field):</li>
    <ul>
      <li>table_item_title (Text): Назва елемента таблиці.</li>
      <li>table_item_description (Text): Опис елемента таблиці.</li>
    <li>price (Number): Ціна елемента.</li>
    </ul>
  </ul>
<h3>Використання</h3>
Додайте шорткод [price_accordion_acf] у будь-якому місці сторінки або поста, де ви хочете вивести акордеон. Шорткод автоматично витягне дані з ACF полів і створить акордеон, відформатований відповідно до налаштувань вашої теми.

<h4>У публікаціях і сторінках</h4>
Просто вставте <strong>[price_accordion_acf]</strong> в редакторі WordPress всюди, де ви хочете, щоб акордеон відображався.

<h4>У файлах теми</h4>
Якщо ви хочете інтегрувати акордеон безпосередньо в PHP-файли вашої теми, використовуйте наступний код:

<pre>
  <code>
    echo do_shortcode('[price_accordion_acf]');
  </code>
</pre>
Помістіть цей PHP-код у відповідний файл шаблону, де ви хочете, щоб з'явився акордеон.

<h3>Стилізація</h3>
Акордеон має базову стилізацію, але ви можете легко налаштувати його під дизайн вашого сайту. Ви можете додати додаткові CSS правила у ваш файл стилів теми для кастомізації зовнішнього вигляду акордеону.

<h3>JavaScript</h3>
Функціональність акордеону підтримується JavaScript, який включає в себе додавання анімаційного ефекту для вкладок акордеону. Скрипт визначений у <b>activate_price_accordion</b> функції і додається через хук <b>wp_enqueue_scripts</b>.

### Ліцензія
Цей проект має відкритий вихідний код і доступний за ліцензією MIT [LICENSE](./LICENSE).
