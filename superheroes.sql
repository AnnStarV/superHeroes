-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 23 2021 г., 19:23
-- Версия сервера: 5.7.29-log
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `superheroes`
--

-- --------------------------------------------------------

--
-- Структура таблицы `heroes`
--

CREATE TABLE `heroes` (
  `hero_id` int(11) NOT NULL,
  `nickname` varchar(20) DEFAULT NULL,
  `real_name` varchar(50) DEFAULT NULL,
  `origin_description` varchar(500) DEFAULT NULL,
  `superpowers` varchar(500) DEFAULT NULL,
  `catch_phrase` varchar(500) DEFAULT NULL,
  `image` json DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `heroes`
--

INSERT INTO `heroes` (`hero_id`, `nickname`, `real_name`, `origin_description`, `superpowers`, `catch_phrase`, `image`) VALUES
(23, 'Наруто', 'Наруто Узумаки', 'Наруто Узумаки (яп. うずまきナルト, Узумаки Наруто) — шиноби Деревни Скрытого Листа.', 'Превращение, Теневое клонирование, Плащ-невидимка. Отслеживание в отражении', 'Никогда не сдаваться... Встать, когда все рухнуло — вот настоящая сила.', '[\"uploads/LiZbKQwK28WrAbX4ejIcDWQezW9p1NVUplQDrQJ2.png\", \"uploads/aXoUIt5PxLBZJ18EBcRkG5Jr8LMktOV59p6VVRc6.png\", \"uploads/H4nlA3fJ9E1lxreHKCXUfE8c65mKXUDpRpPiFBF2.png\"]'),
(24, 'Саске', 'Саске Учиха', 'Саске Учиха (яп. うちはサスケ, Учиха Сасукэ) — один из последних выживших членов клана Учиха из Деревни Скрытого Листа.', 'Портал риннегана, Чидори пламени, Стрела индры, Гигантские огненные шары сусаноо', '... Даже если змея мечтает летать на небе, всё равно ей суждено ползать на земле.', '[\"uploads/ZavFJcrfKmzxPszK9gFminsLi8K6glPzxNcW5QJv.jpeg\", \"uploads/vV6O9vaak57JIAIQXPjEeeGpKp9Mdmk5xLe33k2o.jpeg\"]'),
(25, 'Какаши Сенсей', 'Какаши Хатаке', 'Какаши Хатаке (яп. はたけ カカシ Хатакэ Какащи) — шиноби Скрытого Листа из клана Хатаке.', 'Фиолетовая молния, Камуи сюрикен, Камуи райкири, Грязевая волна, Электрический кабель', 'Сколько бы иллюзий ты ни сочинил, они никогда не заполнят дыру в твоём сердце!', '[\"uploads/FiqSAUDwQoUACCkcinp7UvYDXdDjNxv1dD0KCmMQ.png\"]'),
(26, 'Гаара', 'Гаара', 'Гаара (яп. 我愛羅) — шиноби Деревни Скрытого Песка.', 'Песчаные буквы, Песчаные руки, Королевское запечатывание пяти каге, Каменно-песчаный щит', 'Человеку нужна причина для существования, иначе жизнь ничем не будет отличаться от смерти.', '[\"uploads/GwDqqsxzG3FujHvAeiFzeV8S5DTnO56WJc5tDUlN.png\"]'),
(27, 'Сакура', 'Сакура Харуно', 'Сакура Учиха (яп. うちはサクラ, Учиха Сакура, урождённая Харуно (яп. 春野) — куноичи из Скрытого Листа.', 'Дистанционное исцеление, Призыв слизня, Четырехугольный запечатывающий барьер', 'Красота моя наружная оболочка, внутри я-железная, только так может выжить женщина.', '[\"uploads/qOg5mNATFYDAeNYgqstSoHGGlSZX8z7bB1DYlDNQ.png\"]'),
(28, 'Рок Ли', 'Рок Ли', 'Рок Ли (яп. ロック・リー, Рокку Рии) — шиноби из Клана Ли Скрытого Листа и член Команды Гая.', 'Построение журавлиного крыла врат чакры, Падение листа, Одиночный первичный лотос, Ураганный вихрь листа', 'Показывать жалость или сожаление тому, кто твёрдо верит в тебя — это неуважение.', '[\"uploads/rkqjoCiwgxYYLnhosr1JWvwyYTvVceF2mGrXe7hv.png\"]'),
(29, 'Хината', 'Хината Хьюга', 'Хината Узумаки (яп. うずまきヒナタ, Удзумаки Хината), в девичестве Хьюга (яп. 日向, Хюуга) — куноичи и бывшая наследница клана Хьюга.', 'Мягкий кулак: вихревой львиный удар, восемь триграмм: удар львов-близнецов, восемь триграмм.', 'Ты не идеален, но, делая ошибки, ты учишься на них. Мне кажется, настоящая сила заключается именно в этом.', '[\"uploads/k5sdScQcRi8Ijc3fKBUa7IPDm2QZAdHQASatjHEY.png\"]'),
(30, 'Цунаде', 'Цунаде', 'Цунаде (яп. 綱手, Цунадэ) — потомок клана Сенджу и одна из Саннинов Скрытого Листа. Известна как сильнейшая в мире куноичи, до того как Сакура превзошла ее, а также как величайший ниндзя-медик', 'Королевское запечатывание пяти каге, Сила сотни, Восемь триграмм: стена, дистанционное исцеление.', 'Только начнешь работать, обязательно кто-нибудь разбудит.', '[\"uploads/rTA29xwWWEJwSoP3K2l2o0PnfVw8fnvdVqdNBnFY.png\"]'),
(31, 'Шикамару', 'Шикамару Нара', 'Шикамару Нара (яп. 奈良 シカマル, Нара Щикамару) — шиноби из Клана Нара Скрытого Листа. Несмотря на ленивую натуру, Шикамару имеет редкий интеллект, который неизменно позволяет ему одержать победу в бою.', 'Йо-йо, Барьер, Захват клинка, Теневые иглы, Теневой сбор, Небольшое водяное поле', 'Никогда не спорь с идиотом. Сначала он опустит тебя до своего уровня, а потом задавит опытом.', '[\"uploads/Cs7KZRKhOB1mgXZAV8o4NUiuycoF5VICwERrLKxY.png\"]'),
(32, 'Шино', 'Шино Абураме', 'Шино Абураме (яп. 油女シノ, Абурамэ Щино) — шиноби клана Абураме из Скрытого Листа. Тихий и временами отталкивающий для некоторых, Шино использует технику насекомых', 'Заражение, Торнадо насекомых, Жуки-глушители, Стальной кулак, Сфера из жуков', 'Если хотя бы один человек будет держать меня за руку, ни смерть, ни жизнь не будут страшны мне.', '[\"uploads/4qJ665IYDDHWw0Dd3vwuev7SFoeQi0FVhSHXGsIv.png\"]'),
(33, 'Орочимару', 'Орочимару', 'Орочимару (яп. 大蛇丸, Орочимару) — один из легендарных Саннинов Деревни Скрытого Листа. С жизненными амбициями узнать все секреты в мире, Орочимару стремился получить бессмертие.', 'Ловушка змеиного рта, Обратная сторона, Регенерация сенджу, Снятие печати бога смерти', 'Люди меняются или же умирают, так и не изменившись. Одно из двух.', '[\"uploads/bgCw9c767gZxk6w2WN6a1FlNoSlqU7RXP979ZroY.png\"]');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `heroes`
--
ALTER TABLE `heroes`
  ADD PRIMARY KEY (`hero_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `heroes`
--
ALTER TABLE `heroes`
  MODIFY `hero_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
