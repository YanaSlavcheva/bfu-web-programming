SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

-- Database: `bfu`

CREATE TABLE `construction-sites` (
    `id` int(11) NOT NULL,
    `name` varchar(50) COLLATE utf32_bin NOT NULL,
    `address` varchar(200) COLLATE utf32_bin NOT NULL,
    `floors_count` int(11) NOT NULL,
    `apartments_count` int(11) NOT NULL,
    `exterior_plaster` tinyint(4) NOT NULL,
    `interior_plaster` tinyint(4) NOT NULL,
    `contractor` varchar(100) COLLATE utf32_bin NOT NULL,
    `investor` varchar(100) COLLATE utf32_bin NOT NULL,
    `city` varchar(50) COLLATE utf32_bin NOT NULL,
    `country` varchar(50) COLLATE utf32_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

INSERT INTO `construction-sites` (`id`, `name`, `address`, `floors_count`, `apartments_count`, `exterior_plaster`, `interior_plaster`, `contractor`, `investor`, `city`, `country`)
VALUES
(1, 'Изабел', 'ул.Зелена поляна 24', 7, 21, 1, 0, 'Изобилие-97', 'Богатите 2000', 'София', 'България'),
(2, 'Габриела', 'ул.Зелена морава 34', 2, 3, 0, 1, 'Зидаро-мазачи 14', 'Бедните 13', 'Варна', 'България'),
(3, 'Михаела', 'ул.Осогово 35', 3, 11, 1, 1, 'Изобилие-97', 'Богатите 2000', 'Варна', 'България'),
(4, 'Георги', 'ул.Стара планина 12', 17, 121, 1, 0, 'Изобилие-97', 'ИнвестГруп', 'Русе', 'България'),
(5, 'Мишел', 'ул.Лозенец 8', 5, 31, 0, 0, 'Изобилие-97', 'Инвеститори-54', 'София', 'България');

ALTER TABLE `construction-sites`
    ADD PRIMARY KEY (`id`);

ALTER TABLE `construction-sites`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

COMMIT; 