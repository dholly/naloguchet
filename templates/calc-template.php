<?php
/**
 * Template Name: Калькулятор
 */

$page_title = 'Цены на бухгалтерские услуги';
$page_description = 'Рассчитать примерную стоимость бухгалтерских услуг можно воспользовавшись калькулятором. Внимание! Цены приведены условно. Можно получить более выгодное предложение по специальным тарифам, приведенным ниже. Работа с каждым клиентом индивидуальна, свяжитесь с нами любым удобным способом, и мы вышлем уникальное коммерческое предложение специально для вас.';

$calc_title = 'Калькулятор стоимости профессиональной бухгалтерии';
$calc_image = get_template_directory_uri() . '/static/img/calc/image-01.jpg';

$calc_org_types = [
  ['value' => 'ip', 'label' => 'ИП', 'checked' => true],
  ['value' => 'ooo', 'label' => 'ООО', 'checked' => false],
];

$calc_tax_types = [
  ['value' => 'usn6', 'label' => 'УСН 6% «доходы»', 'checked' => true],
  ['value' => 'usn15', 'label' => 'УСН 15% «доходы−расходы»', 'checked' => false],
  ['value' => 'usn6nds', 'label' => 'УСН 6% + НДС', 'checked' => false],
  ['value' => 'usn15nds', 'label' => 'УСН 15% + НДС', 'checked' => false],
  ['value' => 'ausn8', 'label' => 'АУСН 8% «доходы»', 'checked' => false],
  ['value' => 'ausn20', 'label' => 'АУСН 20% «доходы−расходы»', 'checked' => false],
  ['value' => 'osn', 'label' => 'Общая (с НДС)', 'checked' => false],
];

$calc_doc_counts = [
  ['value' => 'd50', 'label' => '1-50', 'checked' => true],
  ['value' => 'd100', 'label' => '51-100', 'checked' => false],
  ['value' => 'd150', 'label' => '101-150', 'checked' => false],
  ['value' => 'd200', 'label' => '151-200', 'checked' => false],
];

$pricing_title = 'Стоимость обслуживания 2026';
$pricing_description = 'Цены по тарифам на бухгалтерские услуги на 2026 год в компании ООО «Центр профессиональной бухгалтерии»';

$pricing_headers = [
  'Отрасль / Тип бизнеса',
  'Налоговая система',
  'Объём документов / мес.',
  'Цена, ₽ / мес.',
];

$pricing_rows = [
  [
    'business' => 'Интернет-магазин<br>на Маркетплейсе',
    'tax' => 'УСН 15%',
    'docs' => 'до 150',
    'price' => '41 000 ₽',
  ],
  [
    'business' => 'Кафе / ресторан',
    'tax' => 'УСН 6%',
    'docs' => 'до 500',
    'price' => '70 000 ₽',
  ],
  [
    'business' => 'Оптовая торговля (импорт)',
    'tax' => 'НДС, прибыль',
    'docs' => 'до 150',
    'price' => '55 000 ₽',
  ],
  [
    'business' => 'Производственная компания',
    'tax' => 'НДС, прибыль',
    'docs' => 'до 700',
    'price' => '150 000 ₽',
  ],
  [
    'business' => 'Строительная компания',
    'tax' => 'НДС, прибыль',
    'docs' => 'до 100',
    'price' => '55 000 ₽',
  ],
  [
    'business' => 'НКО (с аудитом)',
    'tax' => 'УСН 6%',
    'docs' => 'до 200',
    'price' => '50 000 ₽',
  ],
  [
    'business' => 'Грузоперевозки',
    'tax' => 'НДС, прибыль',
    'docs' => 'до 250',
    'price' => '80 000 ₽',
  ],
  [
    'business' => 'Детский сад',
    'tax' => 'УСН 6% + патент',
    'docs' => 'до 150',
    'price' => '28 000 ₽',
  ],
  [
    'business' => 'Резидент Сколково',
    'tax' => '—',
    'docs' => 'до 100',
    'price' => '30 000 ₽',
  ],
];

$compare_title = 'Сравниваем стоимость наших услуг';
$compare_subtitle = 'Сколько будет стоить бухгалтерское обслуживание у нас? Дорого или дешево?';
$compare_description = 'Сравним расценки с приходящим бухгалтером, онлайн-сервисами, прямыми конкурентами и крупными фирмами по оказанию бухуслуг.';

$compare_items = [
  [
    'title' => 'Бухгалтер на удаленке / онлайн-сервис и ЦПБ',
    'badge' => 'У нас дороже',
    'text' => 'Почему? Мы отвечаем за результат и по договору, и своими деньгами. Рисков слишком много, экономия минимальная. У нас точно надежнее.',
  ],
  [
    'title' => 'Прямые конкуренты и ЦПБ',
    'badge' => 'Примерно одинаково',
    'text' => 'Цены на рынке бухгалтерских услуг примерно одинаковые. Разница в качестве, опыте и гарантиях.',
  ],
  [
    'title' => 'Крупные фирмы и ЦПБ',
    'badge' => 'У нас дешевле',
    'text' => 'Крупные компании берут за бренд и накладные расходы. Мы предлагаем тот же уровень качества за меньшие деньги.',
  ],
];

get_header();
?>

  <main class="page">

    <section class="page__calc calc first">
      <div class="calc__container">
        <div class="calc__body">
          <h1 class="calc__title title title_center"><?php echo esc_html($page_title); ?></h1>
          <div class="calc__text text">
            <?php echo esc_html($page_description); ?>
          </div>
        </div>

        <div class="calc__block block-calc">
          <div class="block-calc__body">
            <div class="block-calc__row">
              <div class="block-calc__image">
                <img class="ibg" src="<?php echo esc_url($calc_image); ?>" alt="Image">
              </div>
              <div class="block-calc__content">
                <div class="block-calc__title title">
                  <?php echo esc_html($calc_title); ?>
                </div>
                <div class="block-calc__form" id="calc-form">

                  <div class="block-calc__form-block">
                    <div class="block-calc__label">Тип организации</div>
                    <div class="block-calc__inputs">
                      <?php foreach ($calc_org_types as $org) : ?>
                        <label class="checkbox">
                          <input type="radio" name="org_type" value="<?php echo esc_attr($org['value']); ?>" <?php checked($org['checked']); ?>>
                          <span><?php echo esc_html($org['label']); ?></span>
                        </label>
                      <?php endforeach; ?>
                    </div>
                  </div>

                  <div class="block-calc__form-block">
                    <div class="block-calc__label">Система налогообложения</div>
                    <div class="block-calc__inputs block-calc__inputs_tax">
                      <?php foreach ($calc_tax_types as $tax) : ?>
                        <label class="checkbox">
                          <input type="radio" name="tax_type" value="<?php echo esc_attr($tax['value']); ?>" <?php checked($tax['checked']); ?>>
                          <span><?php echo esc_html($tax['label']); ?></span>
                        </label>
                      <?php endforeach; ?>
                    </div>
                  </div>

                  <div class="block-calc__form-block">
                    <div class="block-calc__label">Количество первичных документов в месяц</div>
                    <div class="block-calc__inputs block-calc__inputs_small">
                      <?php foreach ($calc_doc_counts as $count) : ?>
                        <label class="checkbox">
                          <input type="radio" name="doc_count" value="<?php echo esc_attr($count['value']); ?>" <?php checked($count['checked']); ?>>
                          <span><?php echo esc_html($count['label']); ?></span>
                        </label>
                      <?php endforeach; ?>
                    </div>
                  </div>

                  <div class="block-calc__bottom">
                    <div class="block-calc__bottom-row">
                      <div class="block-calc__price-block">
                        <div class="block-calc__price-text">Цена за месяц</div>
                        <div class="block-calc__price" id="calc-result">
                          12 000 ₽
                        </div>
                      </div>

                      <?php echo do_shortcode('[fluentform_modal css_class="block-calc__btn btn btn_arr" form_id="3" btn_text="Отправить заявку"]'); ?>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="page__cost pricing-table-section">
      <div class="pricing-table__container">
        <h2 class="cost__title title title_center">
          <?php echo esc_html($pricing_title); ?>
        </h2>
        <div class="cost__text text">
          <?php echo esc_html($pricing_description); ?>
        </div>

        <div class="table-wrapper">
          <?php foreach ($pricing_headers as $header) : ?>
            <div class="table-header-cell"><?php echo esc_html($header); ?></div>
          <?php endforeach; ?>

          <?php foreach ($pricing_rows as $row) : ?>
            <div class="table-cell"><?php echo wp_kses_post($row['business']); ?></div>
            <div class="table-cell"><?php echo esc_html($row['tax']); ?></div>
            <div class="table-cell"><?php echo esc_html($row['docs']); ?></div>
            <div class="table-cell"><?php echo esc_html($row['price']); ?></div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="page__compare compare">
      <div class="compare__container">
        <h2 class="compare__title title title_center">
          <?php echo esc_html($compare_title); ?>
        </h2>
        <div class="compare__subtitle">
          <?php echo esc_html($compare_subtitle); ?>
        </div>
        <div class="compare__text text">
          <?php echo esc_html($compare_description); ?>
        </div>

        <div class="compare__items">
          <?php foreach ($compare_items as $item) : ?>
            <div class="compare__item">
              <div class="compare__item-title">
                <?php echo esc_html($item['title']); ?>
              </div>
              <div class="compare__item-chk">
                <?php echo esc_html($item['badge']); ?>
              </div>
              <div class="compare__item-text text text_base">
                <?php echo esc_html($item['text']); ?>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

  </main>

  <script>
    (function() {
      // Цены из Excel-таблицы (Прайс_лист_для_калькулятора.xlsx)
      const prices = {
        ip: {
          usn6:     { d50: 12000, d100: 19000, d150: 26000, d200: 34000 },
          usn15:    { d50: 19000, d100: 28000, d150: 35000, d200: 42000 },
          usn6nds:  { d50: 17000, d100: 26000, d150: 31000, d200: 39000 },
          usn15nds: { d50: 24000, d100: 33000, d150: 40000, d200: 47000 }, // d150: в Excel 29000 - вероятно опечатка
          ausn8:    { d50: 12000, d100: 19000, d150: 26000, d200: 34000 },
          ausn20:   { d50: 19000, d100: 28000, d150: 35000, d200: 42000 },
          osn:      { d50: 26000, d100: 36000, d150: 45000, d200: 55000 }
        },
        ooo: {
          usn6:     { d50: 20000, d100: 27000, d150: 34000, d200: 41000 },
          usn15:    { d50: 26000, d100: 34000, d150: 42000, d200: 50000 },
          usn6nds:  { d50: 25000, d100: 32000, d150: 39000, d200: 46000 },
          usn15nds: { d50: 30000, d100: 39000, d150: 47000, d200: 55000 },
          ausn8:    { d50: 20000, d100: 27000, d150: 34000, d200: 41000 },
          ausn20:   { d50: 26000, d100: 34000, d150: 42000, d200: 50000 },
          osn:      { d50: 32000, d100: 42000, d150: 54000, d200: 66000 }
        }
      };

      const form = document.getElementById('calc-form');
      const result = document.getElementById('calc-result');

      function calculate() {
        const org = form.querySelector('input[name="org_type"]:checked').value;
        const tax = form.querySelector('input[name="tax_type"]:checked').value;
        const docs = form.querySelector('input[name="doc_count"]:checked').value;

        const price = prices[org][tax][docs];
        result.textContent = price.toLocaleString('ru-RU') + ' ₽';
      }

      form.addEventListener('change', calculate);
    })();
  </script>

<?php get_footer(); ?>