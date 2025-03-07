-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 07, 2025 at 11:54 AM
-- Server version: 10.6.21-MariaDB-cll-lve
-- PHP Version: 8.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: exqgt142_portfolio_rodrigo
--

-- --------------------------------------------------------

--
-- Table structure for table CLIENTS
--

CREATE TABLE CLIENTS (
  ID int(10) UNSIGNED NOT NULL,
  NAME varchar(100) NOT NULL,
  DESCRIPTION varchar(2000) NOT NULL,
  IMAGE varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table CLIENTS
--

INSERT INTO CLIENTS (ID, NAME, DESCRIPTION, IMAGE) VALUES
(1, 'BILLY BEER', 'Beer Company', 'billy.JPG'),
(2, 'Kavorka', 'cosmetic brand', 'kavorka.JPG'),
(3, 'Fanshawe College', 'Education company', 'fanshawe.JPG');

-- --------------------------------------------------------

--
-- Table structure for table CONTACT
--

CREATE TABLE CONTACT (
  ID int(10) UNSIGNED NOT NULL,
  NAME varchar(500) NOT NULL,
  PHONE varchar(15) NOT NULL,
  EMAIL varchar(200) NOT NULL,
  MESSAGE varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table CONTACT
--

INSERT INTO CONTACT (ID, NAME, PHONE, EMAIL, MESSAGE) VALUES
(1, 'Jarrod', '226 999 9090', 'jarrod@jarrod.ca', 'Great work'),
(2, 'Rob', '226 777 88 99', 'rob@rob.ca', 'Great Job'),
(3, 'Tina', '226 888 99 99', 'tina@tina.com', 'Cool work'),
(7, 'Rodrigo Nobre do Nascimento', '2269772149', 'rodrigonn@gmail.com', 'TROXA'),
(8, 'Rogerio Ceni', '5505050505050', 'rogerio@spfc.com.br', 'TEST IMAGE'),
(9, 'lalala', '1211323', 'klalalal@gmail.com', 'qwqwqw'),
(10, 'rodrigo', '1122222333', 'rodrigonn@gmail.com', 'this is a contact'),
(11, 'teste', '129020020000', 'teste@teste.com.br', '1223003030'),
(12, 'teste', '129020020000', 'teste@teste.com.br', '1223003030'),
(13, 'teste', '129020020000', 'teste@teste.com.br', '1223003030'),
(14, 'rodriguinho', '22232444', 'alendadoscodigos@lenda.com.br', 'eu sou foda'),
(17, 'rodri', '12345678', 'rodri@rodri.com', 'baddreams with code'),
(18, 'Fernnada', '1234590890', 'medina@medina.com', 'te amo'),
(20, 'Alfredo', '12345677788', 'safado@safado.com.br', 'au au'),
(22, 'teste', '123456789', 'teste@teste.com.br', 'test'),
(24, 'rodrigo', '123445677', 'rodrigo@rodrigo.com', 'crianças'),
(26, 'rtr', '12345678', 'rere@ddd.com', 'hahah'),
(28, 'odeio o chris', '1234567', 'chris@chris.com', 'asasasas'),
(29, 'odeio o chris', '1234567', 'chris@chris.com', 'asasasas'),
(30, 'TESTE', '121121211212', 'TESTE@TESTE.COM.BR', 'FODA'),
(31, 'TESTE', '121121211212', 'TESTE@TESTE.COM.BR', 'FODA'),
(32, 'rodruo teste', '11111 121212121', 'email@email.com.br', 'te amo'),
(33, 'rodruo teste', '11111 121212121', 'email@email.com.br', 'te amo');

-- --------------------------------------------------------

--
-- Table structure for table PROJECTS
--

CREATE TABLE PROJECTS (
  ID int(10) UNSIGNED NOT NULL,
  TITLE varchar(200) NOT NULL,
  JOB varchar(12) DEFAULT NULL,
  SHORT_DESCRIPTION varchar(1000) NOT NULL,
  OVERVIEW varchar(3000) NOT NULL,
  ROLES varchar(500) NOT NULL,
  DISCOVERY_TEXT varchar(2000) NOT NULL,
  IDEATION_TEXT varchar(2000) NOT NULL,
  DEVELOPMENT_TEXT varchar(2000) NOT NULL,
  TOOLS_USED_TEXT varchar(1000) NOT NULL,
  FINAL_RESULT_TEXT varchar(2000) NOT NULL,
  CLIENTS_ID int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table PROJECTS
--

INSERT INTO PROJECTS (ID, TITLE, JOB, SHORT_DESCRIPTION, OVERVIEW, ROLES, DISCOVERY_TEXT, IDEATION_TEXT, DEVELOPMENT_TEXT, TOOLS_USED_TEXT, FINAL_RESULT_TEXT, CLIENTS_ID) VALUES
(1, 'BILLY BEER', 'REBRANDING', 'Learn about the process and construction of the new Billy Beer Brand, from the conception of the logo to the construction of the website and style guide. ', 'Billy Beer was a light beer brand founded in the 1970s in the United States and the interesting thing about it is that the brother of former President Jimmy Carter was the endorser of the brand.<br><br>\r\nMy mission for this project was to think about a launch rebranding for  bringing a new logo, website and a launch video.', 'Graphic and Motion Designer | Front-end', 'The first step towards creating a brand that represented the spirit of Billy Beer was research into the brand\'s history, its launch, history and what its consumers\' opinions were about its flavor and curiosities such as the use of President Jimmy Carter\'s brother as endorser to further convey the feeling of an all-American beer. I also researched the competitors to have a better idea of what I could do.', 'I began by sketching logos to validate the brand direction. Additionally, I conducted research on the appropriate colors and fonts to best align with the brand’s identity, considering its traditional North American roots. My concept incorporates colors inspired by the American flag and a classic font to reinforce the perception of a truly traditional American product. Additionally, incorporating stars could raise public awareness, and we can creatively play with the text to develop the slogan “bthestar.”', 'After validating the concepts and standards for the brand, I started the development for the final product which included the new logo,  website, Brand Guide, 3D modeling of the bottle and logo, and a video of the products using Adobe After Effects .', 'Adobe XD , Cinema 4D, HTML + CSS, Adobe Photoshop Adobe Ilustrator', 'These were the results of the work process, delivering a consistent and  which demonstrates the entire spirit of the brand.', 1),
(2, 'KAVORKA', 'BRANDING', 'A strong and sexy brand requires great design, and that’s exactly what we created. The creative process behind the creation of the Kavorka brand.', 'I was given the exciting challenge of creating a brand for a major cosmetics company, KAVORKA. A project that involved a lot of research and, why not, some fun along the way. It was very rewarding, and here I’ll share a bit of the process that led to the creation of a strong brand that conveyed the message required by the brief.', 'Graphic Designer', 'The first step was to deeply understand the brand\'s intended message. Centered on evoking a natural desire or animal attraction, I explored the brand’s core values—beauty, empowerment, and diversity—to establish a design direction aligned with these principles. With this foundation, I conducted competitor research and began defining the color palette and creating initial logo sketches.', 'With the research completed, I moved on to the ideation phase, defining the colors and final form of the logo. Everything needed to align with what the brand aims to convey and be desirable to its target audience. It was a great challenge to find a logo and color scheme that represented the brand’s core value, but with thorough research and enjoyment throughout the creative process, many ideas emerged, and I was able to achieve a highly satisfying result.', 'After defining the colors and the logo\'s shape, it was time to proceed with the final construction. Using Adobe Illustrator and Photoshop, we created a strong brand and a logo that is as sexy as the brand itself. Following this, I used Figma to create the Brand Guidelines, including all usage instructions, which were then applied to the creation of the video and other brand materials. We also created a two-page magazine ad showcasing the brand application.', 'Adobe Photoshop, Figma, InDesign and Illustrator', 'This was the final delivery: a strong brand with versatility and power, providing the client with the desired brand and the satisfaction of completing a great project. A special mention to my partner Jenifer in this work.', 2),
(3, 'INDUSTRY NIGHT', 'WEBSITE', 'Learn about the research and development process behind the website for this truly special evening, sponsored by Fanshawe College.', 'For a great night, a great website. This was the feeling when we received the brief to build the site for Fanshawe\'s Industry Night. It was not only an opportunity to showcase our work as students but also to highlight the achievements of our peers and the expertise of our professors.', 'UX/UI Designer | Project Manager', 'To create this interface, I began by studying the website from the previous edition and noting elements that could be incorporated to enhance the user experience. The main goal was to capture the user’s attention and effectively showcase the expertise of the students and professors in this outstanding program offered by Fanshawe College.', 'I began the construction process based on the information provided in the brief and using the Fanshawe website as a reference. I created wireframes and maintained close interaction with my team, as I also took on the role of project manager, ensuring we developed a robust platform that matched the significance of the event. After completing several sketches and wireframes, I moved on to the development of the final design.', 'For the development, I used the Fanshawe website as a reference, along with my perspective on what I would like to see in a website of this nature as a user. It was incredibly rewarding to learn that our group was recognized by the professors for our excellent design and strong focus on user experience. I believe that combining interface design with thorough research and a complete focus on the provided brief allows us to create outstanding experiences.', 'Pencil, Paper, Figma, Adobe Photoshop', 'Check out the results of this remarkable and rewarding experience of creating a website for Fanshawe College.', 3),
(22, 'Space Sound', 'Branding', 'This is a project test from Rodrig', 'lalala', 'Web Designer', 'Discovery Text', 'Ideation Text', 'Development Texto', 'Photoshop, HTML, PHP', 'Final Result Text', 1);

-- --------------------------------------------------------

--
-- Table structure for table PROJECT_IMAGES
--

CREATE TABLE PROJECT_IMAGES (
  ID int(10) UNSIGNED NOT NULL,
  IMG_NAME varchar(3000) NOT NULL,
  IMG_CATEGORY varchar(15) NOT NULL,
  IMG_CAPTION varchar(300) DEFAULT NULL,
  PROJECTS_ID int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table PROJECT_IMAGES
--

INSERT INTO PROJECT_IMAGES (ID, IMG_NAME, IMG_CATEGORY, IMG_CAPTION, PROJECTS_ID) VALUES
(1, 'IMG_OV_BILLY.jpg', 'overview', NULL, 1),
(2, 'IMG_OV_KVRK.jpg', 'overview', NULL, 2),
(3, 'IMG_OV_INDUSTRY.jpg', 'overview', NULL, 3),
(7, 'billy_dt_banner.jpg', 'Hero_details', 'Project Welcome Banner', 1),
(8, 'billy_process_image.jpg', 'ideation', 'Sketches', 1),
(9, 'billy_development_img.jpg', 'development', 'Development Billy', 1),
(10, '<video class=\"player\" controls preload=\"metadata\" poster=\"images/placeholder_billy.jpg\">\r\n            <source src=\"video/freedom_celebration.mp4\" type=\"video/mp4\">\r\n            <p>Ooops, something went wrong. You may be using an oudated browser or have javascript disabled.</p>\r\n        </video>', 'video', 'Video', 1),
(11, 'billy_result_1.jpg', 'result', 'Responsible WebSite', 1),
(14, 'billy_result_2.jpg', 'result', 'Brand Style Guide', 1),
(15, 'billy_result_3.jpg', 'result', 'Ad', 1),
(16, 'kvrk_process_image.jpg', 'ideation', 'Ideation', 2),
(17, 'kvrk_development_img.jpg', 'development', 'Development', 2),
(18, 'kavorka_result_1.jpg', 'result', 'Magazine AD', 2),
(19, 'kavorka_result_2.jpg', 'result', 'Brand Guide Line', 2),
(20, 'kavorka_result_3.jpg', 'result', 'Social Media Banners', 2),
(21, 'fans_proccess_image.jpg', 'ideation', 'Wireframes', 3),
(22, 'fanshawe_development_img.jpg', 'development', 'Development', 3),
(23, 'fanshawe_result_1.jpg', 'result', 'Wireframes', 3),
(24, 'fanshawe_result_2.jpg', 'result', 'Responsive Prototypes', 3),
(25, 'fanshawe_result_3.jpg', 'result', 'Project Management', 3),
(26, 'fanshawe_dt_banner.jpg', 'Hero_details', 'Project Welcome Banner', 3),
(27, 'kavorka_dt_banner.jpg', 'Hero_details', 'Project Welcome', 2),
(28, 'billy_qq.jpg', 'overview', 'asas', 7),
(29, 'billy_q.jpg', 'result', 'asas', 7),
(30, 'billy_qqq.jpg', 'result', 'asas', 7),
(31, '<video class=\"player\" controls preload=\"metadata\" poster=\"images/placeholder_billy.jpg\">\r\n            <source src=\"video/freedom_celebration.mp4\" type=\"video/mp4\">\r\n            <p>Ooops, something went wrong. You may be using an oudated browser or have javascript disabled.</p>\r\n        </video>', 'video', 'Project Video', 7),
(32, 'image73858.jpg', 'Hero_details', NULL, 8),
(33, 'billy_x.jpg', 'result', 'logo', 8),
(34, 'billy_xx.jpg', 'result', 'brandinf', 8),
(35, '', 'result', 'logo', 8),
(36, 'image96486.jpg', 'Hero_details', NULL, 9),
(37, '', 'result', '', 9),
(38, '', 'result', '', 9),
(39, '', 'result', '', 9),
(40, 'image33458.jpg', 'hero_details', NULL, 10),
(41, '', 'result', '', 10),
(42, '', 'result', '', 10),
(43, '', 'result', '', 10),
(44, 'image51250.jpg', 'hero_details', NULL, 11),
(45, '', 'result', '', 11),
(46, '', 'result', '', 11),
(47, '', 'result', '', 11),
(48, 'image70874.jpg', 'hero_details', NULL, 12),
(49, '', 'result', '', 12),
(50, '', 'result', '', 12),
(51, '', 'result', '', 12),
(53, 'image11534.jpg', 'img_overview', NULL, 13),
(54, '', 'result', 'feranda', 13),
(55, 'nilu2.jpg', 'result', 'nao ganhou', 13),
(56, 'nilu3.jpg', 'result', 'oscar', 13),
(57, 'image20682.jpg', 'hero_details', NULL, 14),
(58, 'image20682.jpg', 'img_overview', NULL, 14),
(59, 'Firefly 2 children running at home 66953.jpg', 'result', 'asas', 14),
(60, '', 'result', 'asas', 14),
(61, '', 'result', 'asas', 14),
(77, 'hero_29750.jpg', 'hero_details', NULL, 18),
(78, 'image29750.jpg', 'overview', NULL, 18),
(79, 'SP1.jpg', 'result', 'aas sasasas', 18),
(80, 'SP3.jpg', 'result', 'asas bla bla', 18),
(81, 'SP2.jpg', 'result', 'asasas asas', 18),
(82, 'hero_41948.jpg', 'hero_details', NULL, 19),
(83, 'image41948.jpg', 'overview', NULL, 19),
(84, 'CR1.jpg', 'result', 'lulaaa', 19),
(85, '', 'result', 'essemsi ', 19),
(86, 'CR3.jpg', 'result', 'france', 19),
(87, 'hero_69868.jpg', 'hero_details', NULL, 20),
(88, 'image69868.jpg', 'overview', NULL, 20),
(89, 'CRq1.jpg', 'result', 'Lolo', 20),
(90, 'CR2s.jpg', 'result', 'Lala', 20),
(91, '', 'result', 'lelele', 20),
(92, 'hero_90482.jpg', 'hero_details', NULL, 21),
(93, 'image90482.jpg', 'overview', NULL, 21),
(94, 'hero_31976.jpg', 'hero_details', NULL, 22),
(95, 'image13290.jpg', 'overview', NULL, 22),
(96, 'hero_59770.jpg', 'hero_details', NULL, 23),
(97, 'image59770.jpg', 'overview', NULL, 23),
(98, 'hero_92943.jpg', 'hero_details', NULL, 24),
(99, 'image92943.jpg', 'overview', NULL, 24);

-- --------------------------------------------------------

--
-- Table structure for table USER
--

CREATE TABLE `USER` (
  id int(11) NOT NULL,
  username varchar(200) NOT NULL,
  password varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table USER
--

INSERT INTO USER (id, username, password) VALUES
(1, 'rodrigonn', 'teste123'),
(2, 'root', 'root');

--
-- Indexes for dumped tables
--

--
-- Indexes for table CLIENTS
--
ALTER TABLE CLIENTS
  ADD PRIMARY KEY (ID);

--
-- Indexes for table CONTACT
--
ALTER TABLE CONTACT
  ADD PRIMARY KEY (ID);

--
-- Indexes for table PROJECTS
--
ALTER TABLE PROJECTS
  ADD PRIMARY KEY (ID);

--
-- Indexes for table PROJECT_IMAGES
--
ALTER TABLE PROJECT_IMAGES
  ADD PRIMARY KEY (ID);

--
-- Indexes for table USER
--
ALTER TABLE USER
  ADD PRIMARY KEY (id);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table CLIENTS
--
ALTER TABLE CLIENTS
  MODIFY ID int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table CONTACT
--
ALTER TABLE CONTACT
  MODIFY ID int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table PROJECTS
--
ALTER TABLE PROJECTS
  MODIFY ID int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table PROJECT_IMAGES
--
ALTER TABLE PROJECT_IMAGES
  MODIFY ID int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table USER
--
ALTER TABLE USER
  MODIFY id int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
