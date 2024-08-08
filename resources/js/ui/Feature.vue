<template>
    <div class="container">

        <div class="feature">
            <div class="feature__wrap">
                <div data-aos='fade-right' v-for="card in featureCards.slice(0, featureCards.length / 2)" :key="card">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center gap-2"><i class="bi bi-patch-check"></i>
                                <h5>{{ card }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="feature__wrap">
                <div data-aos='fade-left'
                    v-for="card in featureCards.slice(featureCards.length / 2, featureCards.length)" :key="card">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center gap-2"><i class="bi bi-patch-check"></i>
                                <h5>{{ card }}</h5>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>


<script>
import Header from './components/Header.vue';

export default {
    name: 'Feature',
    components: {
        Header
    },
    data() {
        return {
            featureCards: [
                'Доставляем ваш заказ в кратчайшие сроки',
                'Предоставляем гарантию на все наши товары',
                'Предлагаем лучшие цены на рынке',
                'Работаем только с проверенными поставщиками',
                'Предоставляем бесплатную консультацию по всем вопросам',
                'Контроль качества на каждом этапе',
                'Индивидуальный подход к каждому клиенту',
                'Работаем по всей России',
                'Заключаем договора с юридическими лицами',
                'Гарантируем высокое качество',
                'Надежная и безопасная оплата',
                'Предоставляем скидки постоянным клиентам',
            ]
        }
    }
}
</script>

<style scoped lang="scss">
.feature {
    display: flex;
    gap: 20px;
    justify-content: space-between;



    &__wrap {
        display: flex;
        gap: 20px;
        flex-direction: column;
        width: 50%;

        &>div {
            height: 90px;
        }
    }

    i {
        font-size: 36px;
    }
}
</style>