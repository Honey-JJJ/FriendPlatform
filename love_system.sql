-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2026-05-20 23:14:00
-- 服务器版本： 5.7.26
-- PHP 版本： 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `love_system`
--

-- --------------------------------------------------------

--
-- 表的结构 `appointment`
--

CREATE TABLE `appointment` (
  `ano` int(11) NOT NULL,
  `uno` varchar(20) NOT NULL,
  `mno` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `place` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `appointment`
--

INSERT INTO `appointment` (`ano`, `uno`, `mno`, `date`, `status`, `place`) VALUES
(41, '4444', NULL, '2026-07-21', '预约成功', '凯德'),
(42, '4444', NULL, '2027-07-22', '已取消', '凯德'),
(45, '3333', NULL, '2027-07-22', '预约成功', '凯德'),
(46, '1234', NULL, '2026-08-08', '已取消', '机房');

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

CREATE TABLE `category` (
  `cno` int(11) NOT NULL,
  `cname` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `category`
--

INSERT INTO `category` (`cno`, `cname`) VALUES
(1, 'Cherished'),
(2, '避雷清单'),
(3, 'Disliked'),
(4, '惊喜');

-- --------------------------------------------------------

--
-- 表的结构 `items`
--

CREATE TABLE `items` (
  `rno` int(11) NOT NULL,
  `rname` varchar(20) NOT NULL,
  `cno` int(11) NOT NULL,
  `rintro` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `items`
--

INSERT INTO `items` (`rno`, `rname`, `cno`, `rintro`) VALUES
(1, '悄悄记住随口提的小愿望，某天突然帮你实现', 4, ''),
(2, 'puppy', 1, ''),
(3, '哭穷', 2, ''),
(4, '冷暴力', 2, ''),
(5, '葱姜', 3, ''),
(6, '旅行时悄悄做好所有攻略', 4, ''),
(7, '路过零食店，顺手买下你喜欢的零食递到手里', 4, ''),
(8, '平淡的普通日子突然收到一束没有理由的鲜花', 4, ''),
(9, '记住你所有忌口和喜好', 4, ''),
(10, '肥肉', 3, ''),
(11, '下意识把你冰冰手揣进口袋里捂热', 4, ''),
(12, '灰色', 3, ''),
(13, 'apm', 1, ''),
(14, '廉价香水', 3, ''),
(15, '鲜花', 1, ''),
(16, '墨绿色', 3, ''),
(17, '珍珠小料', 3, ''),
(18, '不尊重你或他人', 2, '包括言语攻击、贬低、忽视感受和强迫等'),
(19, '异宠', 3, ''),
(20, '跨越千里，突然出现在你眼前', 4, ''),
(21, '荔枝', 1, ''),
(22, '粉色', 1, ''),
(23, '烤肉', 1, ''),
(24, '暴力行为', 2, '言语或身体的暴力行为，辱骂、威胁和动手等'),
(25, '沉迷不良嗜好', 2, '沉迷赌博、酗酒等'),
(26, '香菜', 3, ''),
(27, '无毛猫', 3, ''),
(28, 'DW', 1, ''),
(29, '苹果', 3, ''),
(30, '小裙子', 1, '');

-- --------------------------------------------------------

--
-- 表的结构 `manager`
--

CREATE TABLE `manager` (
  `mno` int(11) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `manager`
--

INSERT INTO `manager` (`mno`, `mname`, `password`, `phone`) VALUES
(909, '芋圆', '123', '12345678922');

-- --------------------------------------------------------

--
-- 表的结构 `notes`
--

CREATE TABLE `notes` (
  `kno` int(11) NOT NULL,
  `content` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `notes`
--

INSERT INTO `notes` (`kno`, `content`) VALUES
(1, '允许我双标，包容我的双标'),
(2, '会认真看我写的小作文和任何东西'),
(3, '2025.1.1 你在平板写下“Y is a pig, love me forever”'),
(4, '耳洞很多，带着不同耳钉亮闪闪的，我要给你买好多好多亮闪闪的东东');

-- --------------------------------------------------------

--
-- 表的结构 `question`
--

CREATE TABLE `question` (
  `qno` int(11) NOT NULL,
  `ques` varchar(100) NOT NULL,
  `qclass` int(1) NOT NULL,
  `ansa` varchar(100) NOT NULL,
  `ansb` varchar(100) NOT NULL,
  `ansc` varchar(100) NOT NULL,
  `ansd` varchar(100) NOT NULL,
  `ans` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `question`
--

INSERT INTO `question` (`qno`, `ques`, `qclass`, `ansa`, `ansb`, `ansc`, `ansd`, `ans`) VALUES
(1, '我心中最偏爱颜色是？', 1, '粉色', '黑色', '紫色', '墨绿色', 'A'),
(2, '最喜欢的饮品类型是？', 1, '果茶', '咖啡', '圣代', '奶茶', 'D'),
(3, '我不喜欢别人打听我', 0, '是', '否', '', '', 'A'),
(4, '我最不喜欢的天气是？', 1, '大晴天', '大风天', '下雨天', '雾霾天', 'C'),
(5, '心情不好时，我习惯安静不愿多说', 0, '是', '否', '', '', 'A'),
(6, '比起惊喜，我更偏爱长久安稳的陪伴', 0, '是', '否', '', '', 'B'),
(7, '我很介意恋爱里忽冷忽热的态度', 0, '是', '否', '', '', 'A'),
(8, '我很在意对方能不能记住我的小喜好', 0, '是', '否', '', '', 'A'),
(9, '我们在一起的日期是？', 1, '2025.6.28', '2024.7.12\r\n', '2025.6.05', '2025.7.21', 'D'),
(10, '相处时我最反感对方哪种行为？', 1, '频繁翻旧账', '过度管束', '疑心太重', '敷衍冷暴力', 'D'),
(11, '休闲空闲时我更愿意？', 1, '钓鱼', '出门散步', '安静宅家', '看电影追剧', 'A'),
(12, '我偏爱哪种恋爱相处模式？', 1, '黏人陪伴', '适度距离', '随性自由', '激情澎湃', 'A'),
(13, '我们的专属纪念日，我更看重？', 1, '生日', '在一起当天', '情人节 ', '相识日', 'B'),
(14, '吵架后我更希望对方？', 1, '主动哄我', '冷静讲道理', '默默陪伴', '先低头认错', 'A'),
(15, '我们初次见面的大概时间是？', 1, '2025.2', '2025.3', '2023.8', '2024.10', 'A'),
(16, '我更喜欢哪种类型礼物？', 1, '手工小物件', '贵重饰品', '实用好物', '零食花束', 'B'),
(17, '我很容易被细节里的温柔打动', 0, '是', '否', '', '', 'B'),
(18, '相处中我很看重彼此的边界感和尊重', 0, '是', '否', '', '', 'A'),
(19, '我会把喜欢的人悄悄放在心底珍藏', 0, '是', '否', '', '', 'A'),
(20, '我不喜欢太张扬、秀恩爱的恋爱方式', 0, '是', '否', '', '', 'B'),
(21, '我喜欢带有仪式感的日常小浪漫', 0, '是', '否', '', '', 'A'),
(22, '我偏爱小众温柔的东西，不喜欢大众网红款', 0, '是', '否', '', '', 'B');

-- --------------------------------------------------------

--
-- 表的结构 `topic`
--

CREATE TABLE `topic` (
  `tno` int(11) NOT NULL,
  `tname` varchar(20) NOT NULL,
  `rno` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `topic`
--

INSERT INTO `topic` (`tno`, `tname`, `rno`) VALUES
(1, '食物专题', 5),
(2, '食物专题', 10),
(3, '食物专题', 17),
(4, '食物专题', 21),
(5, '食物专题', 23),
(6, '动物专题', 27),
(7, '食物专题', 26),
(8, '食物专题', 29),
(9, '动物专题', 2),
(10, '事件专题', 1),
(11, '事件专题', 3),
(12, '事件专题', 4),
(13, '事件专题', 6),
(14, '事件专题', 7),
(15, '事件专题', 8),
(16, '事件专题', 9),
(17, '事件专题', 11),
(18, '事件专题', 18),
(19, '事件专题', 20),
(20, '事件专题', 24),
(21, '事件专题', 25),
(22, '动物专题', 19),
(23, '礼物专题', 30),
(24, '礼物专题', 28),
(25, '礼物专题', 13),
(26, '礼物专题', 14),
(27, '礼物专题', 15),
(28, '颜色专题', 12),
(29, '颜色专题', 16),
(30, '颜色专题', 22);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `uno` varchar(50) NOT NULL,
  `username` varchar(255) NOT NULL DEFAULT '未命名用户',
  `password` varchar(20) NOT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `bdat` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`uno`, `username`, `password`, `phone`, `bdat`) VALUES
('3333', 'mouse', '3333', '19567253917', '1998-12-29'),
('4444', 'Puppy', '123', '19045317213', '1999-11-29');

--
-- 转储表的索引
--

--
-- 表的索引 `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`ano`),
  ADD KEY `uno` (`uno`),
  ADD KEY `mno` (`mno`);

--
-- 表的索引 `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cno`);

--
-- 表的索引 `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`rno`),
  ADD KEY `cno` (`cno`);

--
-- 表的索引 `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`mno`);

--
-- 表的索引 `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`kno`);

--
-- 表的索引 `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`qno`);

--
-- 表的索引 `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`tno`),
  ADD KEY `rno` (`rno`);

--
-- 表的索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uno`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `appointment`
--
ALTER TABLE `appointment`
  MODIFY `ano` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- 使用表AUTO_INCREMENT `category`
--
ALTER TABLE `category`
  MODIFY `cno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用表AUTO_INCREMENT `items`
--
ALTER TABLE `items`
  MODIFY `rno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- 使用表AUTO_INCREMENT `manager`
--
ALTER TABLE `manager`
  MODIFY `mno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=910;

--
-- 使用表AUTO_INCREMENT `notes`
--
ALTER TABLE `notes`
  MODIFY `kno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- 使用表AUTO_INCREMENT `question`
--
ALTER TABLE `question`
  MODIFY `qno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- 使用表AUTO_INCREMENT `topic`
--
ALTER TABLE `topic`
  MODIFY `tno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
