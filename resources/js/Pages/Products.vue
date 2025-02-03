<template>
  <MainLayout>
    <Head>
      <title>{{ COMPANY_INFO.name }} - Продукция</title>
    </Head>

    <Works />

    <div class="container">
      <Title title="Оборудование" />

      <div class="products gap-3 my-5">
        <div class="w-100 my-4">
          <div class="card">
            <div class="card-body">
              <div class="card-title mb-3">
                <h5>Линии очистки медной катанки</h5>
              </div>

              <div class="flex item prod-card">
                <video controls class="video" src="video/2.mp4"></video>

                <table class="prod-table">
                  <thead>
                    <tr>
                      <th>Параметр</th>
                      <th>Значение</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td>Комплектация линии</td>
                      <td>
                        <ol>
                          <li>Отлатчик 1шт (электропривод на подъем опускание барабана с сырьем)</li>
                          <li>
                            Намотчик 1 шт (электропривод на подъем опускание барабана с сырьем, управление
                            предварительной намотки вперед, назад. Управление скоростью приемки обработанной катанки.
                            Раскладчик катанки.)
                          </li>
                          <li>Блок очистки катанки 1 шт</li>
                          <li>Шкаф управления линией</li>
                          <li>Пульт управления</li>
                          <li>Вытяжка</li>
                          <li>Стенд для калибровки и переборки щеток</li>
                          <li>3 комплекта ступиц для щеток</li>
                        </ol>
                      </td>
                    </tr>
                    <tr>
                      <td>Общая мощность</td>
                      <td>31 квт 380 В</td>
                    </tr>

                    <tr>
                      <td>Потребляемая мощность</td>
                      <td>5 квт/час</td>
                    </tr>

                    <tr>
                      <td>Скорость очистки (в зависимости от Д и степени засоренности катанки)</td>
                      <td>20- 40 м/мин (Очистка за 1 проход)</td>
                    </tr>

                    <tr>
                      <td>Качество очистки</td>
                      <td>95 - 100% чистой поверхности</td>
                    </tr>

                    <tr>
                      <td>Рабочий орган</td>
                      <td>Дисковая витая щетка 102х300 мм. Комплект 8 шт</td>
                    </tr>

                    <tr>
                      <td>Расход щеток</td>
                      <td>1 комплект на 4-7 тн сырья (с калибровкой щеток).</td>
                    </tr>

                    <tr>
                      <td>Управление</td>
                      <td>
                        Возможность работы в ручном и полуавтоматическом режимах через контроллер:
                        <ol>
                          <li>Регулировка скоростью вращения щеток</li>
                          <li>Регулировка скоростью прохождения провода под щетками</li>
                          <li>Автоматическое опускание щеток во время работы</li>
                          <li>Подъем опускание щеток с пульта (до работы, во время работы)</li>
                          <li>Экстренная остановка при разрыве или окончании провода</li>
                        </ol>
                      </td>
                    </tr>
                    <tr>
                      <td>Безопасность</td>
                      <td>Зоны зачистки, электрошкаф - герметично закрываются. Вытяжка и фильтрация пыли.</td>
                    </tr>
                    <tr>
                      <td>Обслуживание линии</td>
                      <td>
                        2 человека (1 работник для наблюдения за работой линии, +1 работник дополнительно требуется при
                        заправке провода. Фрагментарно.)
                      </td>
                    </tr>
                    <tr>
                      <td>Габариты (установочные)</td>
                      <td>11 000 мм (длина) х 2300 (высота) х 1350 (ширина, с учетом электрошкафа и вытяжки - 2000)</td>
                    </tr>

                    <tr>
                      <td>Масса (общ)</td>
                      <td>3,5 тн</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <div class="w-100 my-4">
          <div class="card">
            <div class="card-body">
              <div class="card-title mb-3">
                <h5>Автоматизированный механический захват</h5>
              </div>
              <div class="flex item wrap">
                <video controls class="video" src="video/1.mp4"></video>
                <p>
                  Производственное оборудование, оснащенное автоматизированным механическим захватом, позволяет
                  увеличить производительность и эффективность работы. Автоматизированный механический захват
                  предназначен для перемещение кирпича, блоков и других строительных материалов.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </MainLayout>
</template>

<script setup>
import { COMPANY_INFO } from "@/const/contacts";
import MainLayout from "@/Layouts/MainLayout.vue";
import Title from "@/ui/components/Title.vue";
import Works from "@/ui/Works.vue";
import { Head } from "@inertiajs/vue3";
</script>

<script>
export default {
  name: "Products",
  data: () => ({
    COMPANY_INFO,
  }),
};
</script>

<style lang="scss" scoped>
.video {
  height: 500px;
  max-height: 50vh;
  min-height: 300px;

  @media (max-width: 1024px) {
    width: 100%;
  }
}

.prod-table {
  border-collapse: separate;
  box-shadow: 0 0 0 1px #444;
  border-radius: 5px;
  border-spacing: 1px;

  td,
  th {
    padding: 5px;
    border: 1px solid #444;
  }
}

.products {
  video {
    min-width: 40%;
  }

  .prod-card {
    @media (max-width: 1024px) {
      flex-wrap: wrap;
    }
  }
}

.description {
  width: 40%;

  @media (max-width: 1024px) {
    width: 100%;
  }
}
</style>
