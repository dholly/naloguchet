<?php
/**
 * Мультишаговый калькулятор для главной страницы
 */

$calc_image = get_template_directory_uri() . '/static/img/calc/image-01.jpg';
?>

<section class="calculator-multistep">
  <div class="calculator-multistep__container">
    <h2 class="calculator-multistep__header">
      Рассчитайте стоимость обслуживания <span class="text-blue">за 1 минуту!</span>
    </h2>

    <div class="calculator-multistep__body">
      <div class="calculator-multistep__image">
        <img src="<?php echo esc_url($calc_image); ?>" alt="Калькулятор">
      </div>

      <div class="calculator-multistep__content">
        <form class="calc-steps" id="calc-steps">

          <!-- Шаг 0: Превью -->
          <div class="calc-step active" data-step="0">
            <div class="calc-step__title">Укажите параметры бизнеса и&nbsp;получите примерную цену</div>
            <p class="calc-step__desc">Подготовим детальный расчёт через 10 минут после заявки</p>
            <button type="button" class="calc-step__btn btn btn_arr" data-next>Начать</button>
          </div>

          <!-- Шаг 1: Форма собственности -->
          <div class="calc-step" data-step="1">
            <div class="calc-step__label">Форма собственности</div>
            <div class="calc-step__options calc-step__options_2col">
              <label class="calc-option">
                <input type="radio" name="org_type" value="ip" checked>
                <span>ИП</span>
              </label>
              <label class="calc-option">
                <input type="radio" name="org_type" value="ooo">
                <span>ООО</span>
              </label>
            </div>
            <div class="calc-step__nav">
              <button type="button" class="calc-step__nav-btn calc-step__nav-btn_prev" data-prev>Назад</button>
              <button type="button" class="calc-step__nav-btn calc-step__nav-btn_next btn btn_arr" data-next>Далее</button>
            </div>
          </div>

          <!-- Шаг 2: Количество сотрудников -->
          <div class="calc-step" data-step="2">
            <div class="calc-step__label">Количество сотрудников</div>
            <div class="calc-step__options calc-step__options_4col">
              <label class="calc-option">
                <input type="radio" name="employees" value="e0" checked>
                <span>0</span>
              </label>
              <label class="calc-option">
                <input type="radio" name="employees" value="e5">
                <span>1-5</span>
              </label>
              <label class="calc-option">
                <input type="radio" name="employees" value="e10">
                <span>6-10</span>
              </label>
              <label class="calc-option">
                <input type="radio" name="employees" value="e20">
                <span>11-20</span>
              </label>
            </div>
            <div class="calc-step__nav">
              <button type="button" class="calc-step__nav-btn calc-step__nav-btn_prev" data-prev>Назад</button>
              <button type="button" class="calc-step__nav-btn calc-step__nav-btn_next btn btn_arr" data-next>Далее</button>
            </div>
          </div>

          <!-- Шаг 3: Система налогообложения -->
          <div class="calc-step" data-step="3">
            <div class="calc-step__label">Система налогообложения</div>
            <div class="calc-step__options calc-step__options_2col">
              <label class="calc-option">
                <input type="radio" name="tax_type" value="usn6" checked>
                <span>УСН 6% «доходы»</span>
              </label>
              <label class="calc-option">
                <input type="radio" name="tax_type" value="usn15">
                <span>УСН 15% «доходы−расходы»</span>
              </label>
              <label class="calc-option">
                <input type="radio" name="tax_type" value="usn6nds">
                <span>УСН 6% + НДС</span>
              </label>
              <label class="calc-option">
                <input type="radio" name="tax_type" value="usn15nds">
                <span>УСН 15% + НДС</span>
              </label>
              <label class="calc-option">
                <input type="radio" name="tax_type" value="ausn8">
                <span>АУСН 8% «доходы»</span>
              </label>
              <label class="calc-option">
                <input type="radio" name="tax_type" value="ausn20">
                <span>АУСН 20% «доходы−расходы»</span>
              </label>
              <label class="calc-option">
                <input type="radio" name="tax_type" value="osn">
                <span>Общая (с НДС)</span>
              </label>
            </div>
            <div class="calc-step__nav">
              <button type="button" class="calc-step__nav-btn calc-step__nav-btn_prev" data-prev>Назад</button>
              <button type="button" class="calc-step__nav-btn calc-step__nav-btn_next btn btn_arr" data-next>Далее</button>
            </div>
          </div>

          <!-- Шаг 4: Количество документов -->
          <div class="calc-step" data-step="4">
            <div class="calc-step__label">Количество документов в месяц</div>
            <div class="calc-step__options calc-step__options_4col">
              <label class="calc-option">
                <input type="radio" name="doc_count" value="d50" checked>
                <span>1-50</span>
              </label>
              <label class="calc-option">
                <input type="radio" name="doc_count" value="d100">
                <span>51-100</span>
              </label>
              <label class="calc-option">
                <input type="radio" name="doc_count" value="d150">
                <span>101-150</span>
              </label>
              <label class="calc-option">
                <input type="radio" name="doc_count" value="d200">
                <span>151-200</span>
              </label>
            </div>
            <div class="calc-step__nav">
              <button type="button" class="calc-step__nav-btn calc-step__nav-btn_prev" data-prev>Назад</button>
              <button type="button" class="calc-step__nav-btn calc-step__nav-btn_next btn btn_arr" data-next>Далее</button>
            </div>
          </div>

          <!-- Шаг 5: Результат -->
          <div class="calc-step" data-step="5">
            <div class="calc-step__result">
              <div class="calc-step__result-label">Стоимость обслуживания</div>
              <div class="calc-step__result-price" id="calc-multistep-result">12 000 ₽</div>
              <div class="calc-step__result-period">в месяц</div>
            </div>
            <div class="calc-step__nav">
              <button type="button" class="calc-step__nav-btn calc-step__nav-btn_prev" data-prev>Назад</button>
              <button type="button" class="calc-step__nav-btn calc-step__nav-btn_submit btn btn_arr" data-submit>Оставить заявку</button>
            </div>
          </div>

          <!-- Прогресс-бар -->
          <div class="calc-steps__progress">
            <div class="calc-steps__progress-bar" id="calc-progress"></div>
          </div>

        </form>
      </div>
    </div>
  </div>
</section>

<script>
  (function() {
    const prices = {
      ip: {
        usn6:     { d50: 12000, d100: 19000, d150: 26000, d200: 34000 },
        usn15:    { d50: 19000, d100: 28000, d150: 35000, d200: 42000 },
        usn6nds:  { d50: 17000, d100: 26000, d150: 31000, d200: 39000 },
        usn15nds: { d50: 24000, d100: 33000, d150: 40000, d200: 47000 },
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

    // Надбавка за сотрудников
    const employeeExtra = {
      e0: 0,
      e5: 3000,
      e10: 6000,
      e20: 10000
    };

    const form = document.getElementById('calc-steps');
    if (!form) return;

    const steps = form.querySelectorAll('.calc-step');
    const progress = document.getElementById('calc-progress');
    const result = document.getElementById('calc-multistep-result');
    const totalSteps = steps.length - 1; // Не считаем шаг 0
    let currentStep = 0;

    function showStep(index) {
      steps.forEach((step, i) => {
        step.classList.toggle('active', i === index);
      });

      // Обновляем прогресс (не считаем шаг 0)
      const progressPercent = index === 0 ? 0 : (index / totalSteps) * 100;
      progress.style.width = progressPercent + '%';

      // Пересчитываем цену на последнем шаге
      if (index === 5) {
        calculatePrice();
      }
    }

    function calculatePrice() {
      const org = form.querySelector('input[name="org_type"]:checked')?.value || 'ip';
      const tax = form.querySelector('input[name="tax_type"]:checked')?.value || 'usn6';
      const docs = form.querySelector('input[name="doc_count"]:checked')?.value || 'd50';
      const employees = form.querySelector('input[name="employees"]:checked')?.value || 'e0';

      const basePrice = prices[org]?.[tax]?.[docs] || 12000;
      const extra = employeeExtra[employees] || 0;
      const totalPrice = basePrice + extra;

      result.textContent = totalPrice.toLocaleString('ru-RU') + ' ₽';
    }

    // Навигация
    form.addEventListener('click', function(e) {
      if (e.target.closest('[data-next]')) {
        e.preventDefault();
        if (currentStep < steps.length - 1) {
          currentStep++;
          showStep(currentStep);
        }
      }

      if (e.target.closest('[data-prev]')) {
        e.preventDefault();
        if (currentStep > 0) {
          currentStep--;
          showStep(currentStep);
        }
      }

      if (e.target.closest('[data-submit]')) {
        e.preventDefault();
        // Здесь открываем модалку Fluent Forms
        // или передаём данные в форму
        const modalTrigger = document.querySelector('[data-fluentform-modal]');
        if (modalTrigger) {
          modalTrigger.click();
        }

        // Или можно использовать кастомное событие
        const submitEvent = new CustomEvent('calcSubmit', {
          detail: {
            org: form.querySelector('input[name="org_type"]:checked')?.value,
            tax: form.querySelector('input[name="tax_type"]:checked')?.value,
            docs: form.querySelector('input[name="doc_count"]:checked')?.value,
            employees: form.querySelector('input[name="employees"]:checked')?.value,
            price: result.textContent
          }
        });
        document.dispatchEvent(submitEvent);
      }
    });

    // Инициализация
    showStep(0);
  })();
</script>