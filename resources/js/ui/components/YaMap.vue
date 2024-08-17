<template>
  <div id="map" class="flex-grow-1 h-100 w-100" data-aos="fade-left"></div>
</template>

<script>
export default {
  name: "Contacts",
  mounted() {
    const script = document.createElement("script");
    script.src =
      "https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A3baacc4ea05a3a4cf8ea6479fc98e66c06a3d04128d0a9188340291fa479c4ea&amp;wic";
    script.async = true;
    script.onload = () => {};
    script.onerror = () => {
      console.error("Failed to load Yandex map script");
    };
    document.getElementById("map").appendChild(script);
  },
};
</script>
