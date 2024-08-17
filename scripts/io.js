import sharp from "sharp";
import fs from "fs";
import path from "path";

const imagePath = "resources/images";

fs.readdirSync(imagePath).forEach((_path) => {
  const dirPath = path.join(imagePath, _path);

  fs.readdirSync(dirPath).forEach((file) => {
    const filePath = path.join(dirPath, file);
    const ext = path.extname(file); // Получение расширения файла
    const fileName = path.basename(file, ext); // Получение имени файла без расширения
    const outPath = path.join(dirPath, `${fileName}.webp`); // Создание пути к файлу с новым расширением

    sharp(filePath)
      .toFormat("webp", { quality: 80 }) // Конвертация в формат webp
      .toFile(outPath, (err, info) => {
        if (err) {
          console.error("Error processing file:", filePath, err);
          process.exit(1);
        }
        console.log("Optimized:", outPath);
      });
  });
});
