<template>
    <div class="contacts ">
        <div class="container flex jcsb">
            <div class="contacts_address flex column">
                <div class="contacts__item">
                    <h5>
                        <i class="bi bi-telephone"></i>
                        Телефон
                    </h5>
                    <div><a href="88463425226">8 (846) 342-52-26</a></div>
                </div>

                <div class="contacts__item">
                    <h5>
                        <i class="bi bi-geo-alt"></i>
                        Адрес
                    </h5>
                    <div>г. Самара, ул. Революционная, д. 70, литера п, офис 409</div>
                </div>

                <div class="contacts__item">
                    <h5>
                        <i class="bi bi-envelope"></i>
                        Электронная почта
                    </h5>
                    <div><a href="mailto:polifort-pro@mail.ru">polifort-pro@mail.ru</a></div>
                </div>

                <div class="contacts__item">
                    <h5>
                        <i class="bi bi-clock"></i>
                        Время работы
                    </h5>
                    <div>Пн-Пт: 8:00-18:00</div>
                </div>

                <div class="contacts__item">
                    <h5>
                        <i class="bi bi-geo-alt"></i>
                        Адрес производства
                    </h5>
                    <div>г. Самара, ул. Земеца \ ул. Береговая</div>
                </div>
            </div>

            <div id="map" class="flex-grow-1" data-aos="fade-left"></div>
        </div>
    </div>
</template>


<script>
export default {
    name: 'Contacts',
    mounted() {
        const script = document.createElement('script');
        script.src = 'https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A3baacc4ea05a3a4cf8ea6479fc98e66c06a3d04128d0a9188340291fa479c4ea&amp;wic';
        script.async = true;
        script.onload = () => {
            console.log('Yandex map script loaded');
            // Дополнительный код для инициализации карты, если требуется
        };
        script.onerror = () => {
            console.error('Failed to load Yandex map script');
        };
        document.getElementById('map').appendChild(script);
    }
};
</script>


<style scoped>
.contacts {
    background: #333;
    color: #eee;
    padding: 30px;
}
</style>