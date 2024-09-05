import { log } from "console";
import FtpDeploy from "ftp-deploy";
import path from "path";
const ftpDeploy = new FtpDeploy();
import dotenv from "dotenv";
dotenv.config();

log("Попытка соединения...");
ftpDeploy
  .deploy({
    user: process.env.FTP_USER,
    password: process.env.FTP_PASS,
    host: process.env.FTP_HOST,
    port: process.env.FTP_PORT || 21,
    localRoot: path.join(import.meta.dirname, ".."),
    remoteRoot: "/",
    include: ["app/**", "public/**", "routes/**", "resources/**", "lang/**/**"],
    exclude: ["hot"],
    deleteRemote: false,
    forcePasv: true,
  })
  .then((res) => console.log("Успешный деплой!"))
  .catch((err) => console.log("Ошибка деплоя", err));

ftpDeploy.on("uploading", (file) => {
  log("Идёт загрузка...", file);
});
