-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 09, 2024 at 03:06 AM
-- Server version: 8.0.35
-- PHP Version: 8.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: nascimento_rodrigo_portfolio
--

-- --------------------------------------------------------

--
-- Table structure for table CLIENTS
--

CREATE TABLE CLIENTS (
  ID int UNSIGNED NOT NULL,
  NAME varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  DESCRIPTION varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  IMAGE varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  ID int UNSIGNED NOT NULL,
  NAME varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PHONE varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  EMAIL varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  MESSAGE varchar(3000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table CONTACT
--

INSERT INTO CONTACT (ID, NAME, PHONE, EMAIL, MESSAGE) VALUES
(1, 'Jarrod', '226 999 9090', 'jarrod@jarrod.ca', 'Great work'),
(2, 'Rob', '226 777 88 99', 'rob@rob.ca', 'Great Job'),
(3, 'Tina', '226 888 99 99', 'tina@tina.com', 'Cool work'),
(7, 'Rodrigo Nobre do Nascimento', '2269772149', 'rodrigonn@gmail.com', 'TROXA'),
(8, 'Rogerio Ceni', '5505050505050', 'rogerio@spfc.com.br', 'TEST IMAGE');

-- --------------------------------------------------------

--
-- Table structure for table PROJECTS
--

CREATE TABLE PROJECTS (
  ID int UNSIGNED NOT NULL,
  TITLE varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  JOB varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  SHORT_DESCRIPTION varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  OVERVIEW varchar(3000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  ROLES varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  DISCOVERY_TEXT varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  IDEATION_TEXT varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  DEVELOPMENT_TEXT varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  TOOLS_USED_TEXT varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  FINAL_RESULT_TEXT varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  CLIENTS_ID int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table PROJECTS
--

INSERT INTO PROJECTS (ID, TITLE, JOB, SHORT_DESCRIPTION, OVERVIEW, ROLES, DISCOVERY_TEXT, IDEATION_TEXT, DEVELOPMENT_TEXT, TOOLS_USED_TEXT, FINAL_RESULT_TEXT, CLIENTS_ID) VALUES
(1, 'BILLY BEER', 'REBRANDING', 'Learn about the process and construction of the new Billy Beer Brand, from the conception of the logo to the construction of the website and style guide. ', 'Billy Beer was a light beer brand founded in the 1970s in the United States and the interesting thing about it is that the brother of former President Jimmy Carter was the endorser of the brand.<br><br>\r\nMy mission for this project was to think about a launch rebranding for  bringing a new logo, website and a launch video.', 'Graphic and Motion Designer | Front-end', 'The first step towards creating a brand that represented the spirit of Billy Beer was research into the brand\'s history, its launch, history and what its consumers\' opinions were about its flavor and curiosities such as the use of President Jimmy Carter\'s brother as endorser to further convey the feeling of an all-American beer. I also researched the competitors to have a better idea of what I could do.', 'I began by sketching logos to validate the brand direction. Additionally, I conducted research on the appropriate colors and fonts to best align with the brand’s identity, considering its traditional North American roots. My concept incorporates colors inspired by the American flag and a classic font to reinforce the perception of a truly traditional American product. Additionally, incorporating stars could raise public awareness, and we can creatively play with the text to develop the slogan “bthestar.”', 'After validating the concepts and standards for the brand, I started the development for the final product which included the new logo,  website, Brand Guide, 3D modeling of the bottle and logo, and a video of the products using Adobe After Effects .', 'Adobe XD , Cinema 4D, HTML + CSS, Adobe Photoshop Adobe Ilustrator', 'These were the results of the work process, delivering a consistent and  which demonstrates the entire spirit of the brand.', 1),
(2, 'KAVORKA', 'BRANDING', 'A strong and sexy brand requires great design, and that’s exactly what we created. The creative process behind the creation of the Kavorka brand.', 'I was given the exciting challenge of creating a brand for a major cosmetics company, KAVORKA. A project that involved a lot of research and, why not, some fun along the way. It was very rewarding, and here I’ll share a bit of the process that led to the creation of a strong brand that conveyed the message required by the brief.', 'Graphic Designer', 'The first step was to deeply understand the brand\'s intended message. Centered on evoking a natural desire or animal attraction, I explored the brand’s core values—beauty, empowerment, and diversity—to establish a design direction aligned with these principles. With this foundation, I conducted competitor research and began defining the color palette and creating initial logo sketches.', 'With the research completed, I moved on to the ideation phase, defining the colors and final form of the logo. Everything needed to align with what the brand aims to convey and be desirable to its target audience. It was a great challenge to find a logo and color scheme that represented the brand’s core value, but with thorough research and enjoyment throughout the creative process, many ideas emerged, and I was able to achieve a highly satisfying result.', 'After defining the colors and the logo\'s shape, it was time to proceed with the final construction. Using Adobe Illustrator and Photoshop, we created a strong brand and a logo that is as sexy as the brand itself. Following this, I used Figma to create the Brand Guidelines, including all usage instructions, which were then applied to the creation of the video and other brand materials. We also created a two-page magazine ad showcasing the brand application.', 'Adobe Photoshop, Figma, InDesign and Illustrator', 'This was the final delivery: a strong brand with versatility and power, providing the client with the desired brand and the satisfaction of completing a great project. A special mention to my partner Jenifer in this work.', 2),
(3, 'INDUSTRY NIGHT', 'WEBSITE', 'Learn about the research and development process behind the website for this truly special evening, sponsored by Fanshawe College.', 'For a great night, a great website. This was the feeling when we received the brief to build the site for Fanshawe\'s Industry Night. It was not only an opportunity to showcase our work as students but also to highlight the achievements of our peers and the expertise of our professors.', 'UX/UI Designer | Project Manager', 'To create this interface, I began by studying the website from the previous edition and noting elements that could be incorporated to enhance the user experience. The main goal was to capture the user’s attention and effectively showcase the expertise of the students and professors in this outstanding program offered by Fanshawe College.', 'I began the construction process based on the information provided in the brief and using the Fanshawe website as a reference. I created wireframes and maintained close interaction with my team, as I also took on the role of project manager, ensuring we developed a robust platform that matched the significance of the event. After completing several sketches and wireframes, I moved on to the development of the final design.', 'For the development, I used the Fanshawe website as a reference, along with my perspective on what I would like to see in a website of this nature as a user. It was incredibly rewarding to learn that our group was recognized by the professors for our excellent design and strong focus on user experience. I believe that combining interface design with thorough research and a complete focus on the provided brief allows us to create outstanding experiences.', 'Pencil, Paper, Figma, Adobe Photoshop', 'Check out the results of this remarkable and rewarding experience of creating a website for Fanshawe College.', 3);

-- --------------------------------------------------------

--
-- Table structure for table PROJECT_IMAGES
--

CREATE TABLE PROJECT_IMAGES (
  ID int UNSIGNED NOT NULL,
  IMG_NAME varchar(3000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  IMG_CATEGORY varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  IMG_CAPTION varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PROJECTS_ID int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
(27, 'kavorka_dt_banner.jpg', 'Hero_details', 'Project Welcome', 2);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table CLIENTS
--
ALTER TABLE CLIENTS
  MODIFY ID int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table CONTACT
--
ALTER TABLE CONTACT
  MODIFY ID int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table PROJECTS
--
ALTER TABLE PROJECTS
  MODIFY ID int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table PROJECT_IMAGES
--
ALTER TABLE PROJECT_IMAGES
  MODIFY ID int UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
