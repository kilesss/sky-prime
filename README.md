Пълненето на базата стажа с конзолна команда
php importData.php
Скелета на базата се намира с sql папката  (sky-prime.sql)

изпълнена в console папката
използван е ParserController като Factory design pattern
за база данни е използвана една малка библиотека но с целта на заданието не съм ползвал фукнционалностите а съм си разписвал заявките в RAW
при пълненето на данните канекцията на базата се предава като Dependency Injection.


Front часта е вдигната семпла архитектура с прост рутинг който приема първото проперти от линка като име на контролер
а второто като име на функцията (ако не е подаден приема по defaults view като функция)
добавена е функция и view  която се вика на края на фукцията и зарежда view файла както и подава нужните данни към viewto
Заявката за връщането на данните се генерира в зависимост от подадените и данни , като умишлено не е ползван ORM -функционалности а е правена по този начин

Html-а е ползван основен bootstrap , данните са в табличен вид , добавен е javascript който филтрира данните по колони

КОНФИГУРАЦИЯ

данните за базата данни се попълват в .env файла
isLocalhost е пропърти което се ползва от рутинга при стартиране на проекта с xampp (примерно ) и линк приличащ на http://localhost/sky-prime/statistic трябва да е 1ца


ДРУГИ:
таблицата е добавена на път http://localhost/sky-prime/statistic с цел да се ползва рутинга
Повечето неща имат огромни възможности за надграждане, но целта на заданието не е архитектура и са направени с цел показване на основни знания в PHP

Добавена е и опция ако се извика маин страницата да редиректва към statistic понеже това е единствената страница