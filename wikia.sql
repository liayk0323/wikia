-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 
-- 伺服器版本： 8.0.17
-- PHP 版本： 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `wikia`
--

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `autonum` int(11) NOT NULL,
  `name` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `id` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pwd` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `member`
--

INSERT INTO `member` (`autonum`, `name`, `id`, `pwd`) VALUES
(1, '皜祈岫', 'test', '123'),
(2, 'test2', '123', '456'),
(3, '', '', ''),
(4, 'henry', 'henry', 'henry'),
(5, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- 資料表結構 `主標題`
--

CREATE TABLE `主標題` (
  `主標題` varchar(50) NOT NULL,
  `內文` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `副標題1` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `內文1` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `圖片` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT 'null.jpg',
  `簡介` varchar(50) DEFAULT NULL,
  `最後編輯` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `主標題`
--

INSERT INTO `主標題` (`主標題`, `內文`, `副標題1`, `內文1`, `圖片`, `簡介`, `最後編輯`) VALUES
('反正我很閒', '鏡頭則是以嘲弄YouTuber慣用的跳接剪輯，刻意粗糙的影像，以及縮放鏡頭的手法呈現[1]。劇中創造了許多如「卑鄙源之助」、「惡魔貓男」、「台北暴徒」、「浪漫Duke」、「海龍王彼得」、「北台灣陶淵明」虛構人物和洗腦台詞在網路上蔚為流行。', '特色', '影片前期依然可以看見長鏡頭的拍攝手法，而後漸漸摸索出刻意粗糙的畫質和跳接剪輯等獨樹一格的特色。拍攝器材僅使用智慧型手機iPhone 8，製造出時而失焦、白平衡失控、偶爾拍到手指和鏡頭晃動的「笑果」。同時大量使用跳接的方式剪輯影片，一方面是為了控制影片長度，以保留住YouTube觀眾看完影片的耐心，一方面則是因為本業為拍片相關行業，故意嘲弄搞笑而產生。[2]\r\n\r\n影片題材來自於日常生活，市井小民面對的壓力與窘境，例如貪婪的房東以及不給加班費的慣老闆，衍生出反抗資本主義及反對體制的左膠觀點；或由一個有意思的主題發想而來，例如「構造改革」源自於一件寫有「構造改革」的日本暴走族特攻服，「卑鄙源之助」靈感源自於《櫻桃小丸子》中苦悶的永澤和卑鄙的藤木，「人民的法槌」旨在表達無法突破體制的高牆[3]；羅馬競技生死鬥的契機則是鍾佳播和陳奕凱兩人高中時很迷時代劇暴坊將軍和山田洋次的武士三部曲電影《黃昏清兵衛》、《隱劍鬼爪》和《武士的一分》[4]。\r\n\r\n影片中的台詞也經過思索琢磨，設計出琅琅上口好記的洗腦台詞，搭配簡單的肢體動作，例如「浪漫Duke，帶你找到屬於你的浪漫。」搭配用拇指和食指比著愛心、又如「卑鄙…源之助」說完搓著手指竊笑、以及比劃交錯十指的「量子糾纏」，抑或是高舉握拳的右手吶喊著「這隻手，今天已經不是我的手；這隻手，是人民的手、人民的意志、人民的法槌。今天他不捶倒資本主義的高牆，他不放下。」等等，在網路上引起模仿浪潮[5][6][7]，可謂迷因製造機。\r\n\r\n團隊成員對臺灣的獨立音樂有著高度推崇，許多短片皆以音樂祭或地下樂團為拍攝背景，甚至自組樂團參與演出。頻道中時常出現的「耶太嘎」（イェッタイガー）則是以前混跡於地下偶像場時喊的mix，由於特別喜歡這個文化所以才帶進影片裡。', '2561.png', '反正我很閒是一個YouTube頻道，團隊由鍾佳播、陳奕凱及趙福臨組成。以喜劇的方式討論各種主題，含括', 'admin'),
('萊克多巴胺', '是瘦肉精中最常見的一種，其肉品殘留毒性遠低於具有相同功能的其他動物飼料添加物。美國稱在其測定的容許殘留量下合法使用，將不會對人類造成中毒或短期危害。但目前的實驗數據無法確定其是否會對人體產生其他副作用，人體長期攝取殘留的萊克多巴胺是否會造成健康問題也尚不清楚，但其受試臨床表現較多為心跳過速，面頸、四肢肌肉顫抖，頭暈、頭疼、噁心、嘔吐，特別是患有高血壓、心臟病的病人，可能會加重病情導致意外，且因瘦肉精相關成份多為禁藥組成故國際體育賽事上被禁用。', '歷史', '萊克多巴胺原先是研發作為氣喘用藥[8]，但未通過美國食品藥物管理局的人體實驗。因為發現它能夠增加動物肌肉，因此被使用為飼料添加劑。', '2651.png', '萊克多巴胺（Ractopamine）是一種β促效劑（β-agonist）藥物，用以助長豬、牛、火雞生', 'admin'),
('韓國瑜', '曾任第12屆臺北縣議員及三屆（第2－4屆）立法委員[17]，1994年曾被提案罷免，因投票率不過半而未通過。2001年角逐不分區立委失利[18] ；2005年，出任臺北縣中和市副市長1年8個月；2007年曾打算再戰國會，因黨內初選中攻訐對手張慶忠是情色旅館大亨，被黨部取消初選資格[19]。2012年被指派擔任臺北農產運銷公司總經理[20]。2016年9月辭職未成[21]，2017年因參選於1月辭職，3月離職，參選國民黨主席落敗[22][23][24]。2017年9月，成為國民黨高雄市黨部主委。2018年4月遷籍高雄市林園區，5月在初選勝出並代表國民黨參選高雄市長，11月24日舉行的中華民國地方首長選舉以89萬2545票[25]、15萬票差距擊敗民主進步黨候選人陳其邁而獲勝，結束民進黨在高雄市20年及原高雄縣33年的執政[26]。\r\n\r\n2019年6月5日，韓國瑜就任高雄巿長162天，經過和徵詢小組對談後，打破曾在高雄市長選前保證不會半途離職的承諾[27]，他表態願意被動徵召角逐國民黨總統初選[28]。8日於花蓮場2020總統參選造勢大會公開宣告已登記黨內初選[29]，後於初選中勝出代表國民黨參加2020年中華民國總統選舉，在2019年10月16日，正式向高雄市政府請假，全力投入2020年總統選舉[30]。2020年1月11日，韓國瑜在總統大選中獲得552萬票，不敵蔡英文的817萬票[31][32]。\r\n\r\n2020年4月17日，高雄市選舉委員會公告罷免有效聯署書達到37.7萬，罷韓第二階段通過，韓國瑜成為全國第一位被罷免投票兩次者、也成為首個市長罷免案進入投票階段的市長。[33][34][35]2020年6月6日，高雄市民以93萬9090張同意票，對2萬5,051張不同意票，通過罷免高雄市長，6月12日中央選舉委員會公告結果後正式解職[36]，韓國瑜成為中華民國選舉史上首位被罷免成功的一級行政區首長。[37][38]', '個人背景', '韓國瑜籍貫河南省商丘縣（現屬商丘市虞城縣界溝鎮界溝村）[39]，生於板橋鎮中正新村，民國52年因葛樂禮颱風肆虐，舉家搬遷至中和鄉壽德新村[40]，韓國瑜表示其父韓濟華[41]畢業於黃埔軍校第17期裝甲兵科，曾作為中國遠征軍的一員，曾任戰車編練處中尉隊附屬官[42]，二次大戰時在印度對抗日軍[43][44]，1949年隨軍來臺。韓國瑜的母親莫蘊芳[45]，也是商丘縣人，韓濟華與莫蘊芳兩人青梅竹馬，皆畢業於商丘師範專科學校並成為小學教師，抗日戰爭爆發後韓濟華改從軍[46]。韓國瑜父母育有七個子女，韓國瑜在家中排行第六[40]，有一弟名韓國瑤[47]。 韓國瑜的妻子李佳芬[48]，雲林縣西螺鎮福佬客家人，國立嘉義大學國民教育研究所碩士，世界新聞傳播學院廣播電視電影學系畢業，現任維多利亞學校財團法人副董事長，曾擔任記者、電臺主持人及第14、15、16屆雲林縣議會議員[49]，與其育有長女韓冰、現就讀加拿大英屬哥倫比亞大學社會學系，二女韓青[50]、同就讀加拿大英屬哥倫比亞大學理學院及長子韓天[51][52][53]，當中以韓冰參與父親高雄市長選戰而受矚目。另外，李佳芬與臺南市議員謝龍介的妻子同名[54]。\r\n\r\n岳家是雲林縣西螺鎮福佬客籍政治世家，與雲林張派往來密切，岳父李日貴早年在濁水溪畔經營砂石業，後來擔任了三屆的雲林縣議員，現為維多利亞學校財團法人董事長[49]。妻舅為雲林縣議員李明哲[55]。', 'aa.png', '韓國瑜（1957年6月17日－），中華民國政治人物，中國國民黨籍，生於臺北縣板橋市（今新北市板橋區）', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
