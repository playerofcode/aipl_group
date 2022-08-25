-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2022 at 02:21 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aipl_group`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(2, 'admin', 'admin'),
(3, 'playerofcode@gmail.com', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `view` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `image`, `description`, `view`, `created_at`) VALUES
(3, 'Design Makeover Tips For A Compact Home', 'upload/TP_iStock611309664_ss.jpg', '<p>Summer is the perfect time to give your home an instant makeover before the arrival of the monsoons. Here are some ideas to get you started on your home remodelling journey</p>\r\n\r\n<p>As a proud homeowner, stepping into a newly designed home, or giving your current home a chic makeover, can be quite exciting. If you have recently booked a new home and it&rsquo;s in the construction stage, it is possible to make small design changes within the home before the construction is completed. What&rsquo;s more, you can save on costs instead of having to break down a wall or execute a similar interior design change after the construction is completed. And if you desire to make your small home different from the others in the building, here&rsquo;s how you can go about it.</p>\r\n\r\n<p><strong>PLANNING THE LAYOUT AND THEME</strong><br />\r\nThe first step towards a quick, cost-effective makeover is to fix the primary theme for the interiors based on the layout of the house. Once you are familiar with the floor plan and specifications of your house, drawing the perfect design is a start towards transforming a house into a warm, inviting abode. Small changes to the layout, such as converting the traditional closeddoor kitchen into an open kitchen or integrating the balconies as part of the living room and bedrooms, can enhance the feeling of openness within your compact living space.</p>\r\n\r\n<p><strong>A TOUCH OF LOCAL FLAVOUR</strong><br />\r\nProcuring locally available materials and products can reduce your logistical costs to a great extent, thus minimising your overall costs considerably. You can do your bit by empowering the local artisans and handicraft community. Your neighbourhood markets are a good place to start with&mdash;look for easily available products that you can introduce in your interior decor.</p>\r\n\r\n<p><strong>FURNITURE FLAIR</strong><br />\r\nFurniture made from cane or wrought iron provides a stylish appeal and a comfortable atmosphere. They can be elegant and dainty when decorated with bright, colourful cushions set with with mirror work. For a pastoral touch, pick cushions with patchwork on them. Flexible seating styles such as beanbags, futons and sofa-cumbeds exude a certain casualness and are great options that save space and are affordable. Large floor cushions are comfortable as well as economical as they can be stacked up in a corner when not in use.</p>\r\n\r\n<p><strong>BRIGHTEN UP</strong><br />\r\nThere are inexpensive lighting alternatives in smart designs. Rice paper lamps are economical and can lend a warm vibe by diffusing and softening the light. Lampshades made from decorative and multi-coloured paper can throw off an enchanting aura. Opt for delicate shell sconces to welcome the magic of marine life into your home. Elegant terracotta lamps can be displayed in corners and lit up with candles or oil wicks in the evenings. These lamps look lovely and ornamental in the daytime too. Floor lamps made from jute and cane can lend a rustic glow without the frills. And how about pendant lamps made of stained glass? They&rsquo;re the perfect mix of light and colour.</p>\r\n\r\n<p><strong>TAKE THE FLOOR</strong><br />\r\nYou can have the world at your feet with an array of affordable flooring options in the market. Laminate is a good substitute for wood and looks chic and elegant. It is durable and easy to clean and can be laid out in any room that experiences heavy traffic. The best part about laminates is that the retrofitting installation method allows this kind of flooring to be laid out in a single day, right on top of the existing flooring. If you live in a rented apartment, you can dismantle the laminate flooring and take it with you when you move and reuse it in your new home.</p>\r\n\r\n<p>Laminated tiles afford versatility in design, colour, and texture. They are easy to maintain and are good for most rooms, however, they are not spill-resistant and are unsuitable for kitchens. Vitrified tiles are still in demand because of their durability and space-enhancing feature. As they reflect light, they can brighten up the interiors to make your home look larger than it is.</p>\r\n\r\n<p><strong>OFF THE WALL</strong><br />\r\nIt&rsquo;s a no-brainer that lesser the number of walls inside a home, lower is the cost of construction. Having a seamless living, dining and kitchen space is suitable for a compact home. When there are fewer walls and rooms, the need for doors is done away with. However, if you must have regular rooms demarcated, the best option is to pick reasonably priced doors that come in lightweight and durable materials. A sliding door between rooms is an effective way to open the living space or close it for privacy whenever the occasion demands it. It&rsquo;s a remarkable space-saver and room divider, all rolled into one. With monsoon around the corner, there is no better time than now to give your home a quick makeover.</p>\r\n', 0, '2022-04-16 15:22:26'),
(4, 'Precautions To Take When Applying For A Joint Home Loan', 'upload/ImageResize_1143967383.jpg', '<p>What happens to the home loan in case of a divorce? Or worst, death? Read to know</p>\r\n\r\n<p>A joint home loan with your partner seems like a sound financial decision, and there are several perks attached to it as well. However, in case of a turbulent situation, there are several cons in this arrangement which can leave one with barely anything in hand. Thus, the decision to take a joint home loan needs careful consideration given that it is a long-term loan with implications for your personal finances and marriage as well.&nbsp;</p>\r\n\r\n<p><strong>Here are a few things you should always keep in mind:</strong><br />\r\nA joint home loan with a spouse is seen as an easy way to attain the desired homeownership. But keep in mind that the total ownership of the property&ndash;by any one of you&ndash;will be possible only in case of death. One reason for this limitation is to secure both of you in case of a divorce. This way both of you have limited claim on the property and may not be able to sell without the consent of both parties or without a court order.</p>\r\n\r\n<p><strong>In Case Of Divorce:</strong><br />\r\nThings can get tricky when it comes to the loan repayment if a divorce comes into picture. For instance, if your spouse stops paying the EMIs after divorce, the whole burden will fall on you. Therefore, it is always suggested to have an agreement signed beforehand stating the financial share of the two in repaying the loan to avoid any future disagreements.</p>\r\n\r\n<p><strong>In Case Of A Sudden Change In Finances:</strong><br />\r\nThe main reason why people should avoid getting a joint home loan is that it can lead to an increased risk of foreclosure and bankruptcy. In addition, if one person&#39;s credit score goes down or if they lose their job, then both of them will be affected by these changes in their credit score and employment status.&nbsp;</p>\r\n\r\n<p><strong>In Case Of Death:</strong><br />\r\nIf a married couple has taken a home loan, and the spouse dies, the burden of repaying the remaining EMIs falls entirely on the surviving partner. In a situation like this, the surviving partner must clear the payments. Otherwise it might put them in a difficult situation like the bank/lender may seize the applicant&#39;s assets. Having a home loan insurance or a back up savings plan helps in such situations.</p>\r\n', 0, '2022-05-25 13:53:25'),
(5, 'Move Into Your Dream Home Today', 'upload/GettyImages_508545940_1200pxX628px.jpg', '<p>Statistics reveal that more and more homebuyers prefer ready-to-move-in homes due to some inherent advantages.</p>\r\n\r\n<p>Given the current real estate scenario, ready-to-move-in homes are a preferred choice for homebuyers who don&rsquo;t want to take any unnecessary risk. Ready-to-move-in homes are more popular and are sought after than under- construction homes. This is due to a host of inherent advantages in ready-to-move-in homes. With the change in economic conditions and introduction of new reforms, there is a natural shift of buyer&rsquo;s preferences towards ready-to&ndash;move-in projects.</p>\r\n\r\n<p>Manju Yagnik, a senior NAREDCO official, says, &lsquo;&rsquo;Today&rsquo;s market is very much stable for buyers, discounts are available, making it a good time to invest in a house. In such a scenario, ready-to-move-in flats will be more in demand as homebuyers are now gradually opting for ready possession of flats.&rdquo; Investment in an under-construction home often leads to consumers bearing the additional financial burden of paying rent for existing accommodation along with home loan instalments.&nbsp;</p>\r\n\r\n<p>Ready-to-move-in homes&nbsp;offer homebuyers a chance to side-step the risks of buying under-construction properties that may be prone to inordinate delays.&nbsp;</p>\r\n\r\n<p>The primary benefit of buying a ready-to-move-in home is that you save on rent on current accommodation while shelling out EMIs on the home loan. Also, if you do not plan on using it as your residence, you can let it out on rent and start earning an income right away.&nbsp;</p>\r\n\r\n<p>Once the home is ready, the buyer can take immediate possession, more importantly buyer gets to see the overall view of the house, the apartment and amenities. Also if people are already living in the area, one can do a thorough research about the property, cost, and available amenities by enquiring about it.</p>\r\n\r\n<p>A developer points out, &ldquo;Ready-to-move-in-homes have always been the first choice of end-users because for someone putting in their hard-earned money and a lifetime of savings in a single purchase, it is best suited to have a look and feel of the exact property you are purchasing. These homes are available in almost all segments starting from studio apartments to penthouses and give a wide range of options to choose from to the buyers and investors.&rdquo;&nbsp;</p>\r\n\r\n<p>Investors looking for rental gains are very much attracted towards ready to move in properties because it starts giving instant returns. &nbsp;</p>\r\n\r\n<p><strong>Advantage buyers&nbsp;</strong><br />\r\nThe pandemic has made the homebuyers and fence-sitters realise that a house is essential to have. Karan Kumar, chief marketing officer, DLF Ltd, says, &ldquo;The pandemic has brought about major changes in the consumers&rsquo; mindset and the value system that underpin their real estate buying decisions. Ready-to-move-in homes are readily available for possession and reduces the risk of delay in deliveries associated with under-construction units with benefits of no GST. The excess inventory has also helped in creating demand. Today there is also an increase in the demand for ready-to-move-in homes, that are a part of gated communities in form of condominiums or housing societies, which are well-protected and widely enabled with facilities and luxury within the premise.&rdquo;&nbsp;</p>\r\n\r\n<p>Sonam Chandwani, managing partner at KS Legal &amp; Associates, says, &ldquo;The demand for affordable homes, yet upgraded with top-notch amenities, will witness a strategic uptake and millennials should seek out options that give them a bang for their buck. As the workforce embraces the new normal the need to rent expensive apartments closer to office locations is no longer a pre-requisite and can invest their monies in EMIs leading to asset ownership vis-a-vis payment of rentals. Developers are showering offers to entice homebuyers to invest in homes leading to savings in lakhs and equating EMIs with rents.&rdquo;</p>\r\n', 0, '2022-05-25 16:24:00'),
(6, 'Lucknow: A Haven Of Affordable Realty', 'upload/GettyImages_537534375_corr_1200pxX628px.jpg', '<p><em>Affordable housing has been playing a key role in the real estate sector. Lucknow has emerged as a major affordable destination for homebuyers&nbsp;</em></p>\r\n\r\n<p>According to a recent ANAROCK report, affordable homes (less than &nbsp;`45 lakh) see highest preference post-Covid, with over 40% share against the 31% in pre-Covid times. It is an increase of 9% and 38% of this demand is from Delhi-NCR, followed by 21% from Kolkata.<br />\r\nIndian residential market is now seen to be heavily dominated by end-users. As many as 74% respondents looking to buy a property now are doing it for self-use while just 26% are looking at it from an investment perspective. In comparison, during the lockdown period, the share of investors was higher at 41%.&nbsp;</p>\r\n\r\n<p>In fact, the government has also been constantly providing policy support to the segment. The Union Budget for 2021-22 has reinforced the government&rsquo;s continued focus on the affordable housing segment. The government has extended tax holiday for affordable housing projects for another year till March 31, 2022 and deduction on payment of interest to buyers for one more year. &nbsp;&ldquo;This will boost overall demand for affordable housing and it has been the fastest growing segment for the real estate sector,&rdquo; says a CREDAI official.</p>\r\n\r\n<p>Pankaj Bajaj, managing director and chairman of EHIL, says, &quot;The entire&nbsp;Lucknow&nbsp;is an affordable market. Here excellent connectivity and good quality of life have been attracting buyers not only from Lucknow but also from the neighbouring areas like Noida and other parts. Property index in Lucknow is around 3.5, which is one of the most ideal for buyers. Infrastructure in the city is very good. The real estate market in Lucknow is growing fast. However, availability of land for the affordable housing project is an issue for the developers.&rdquo; He adds, &quot;Low interest rates and stable price level are encouraging fence sitters to book their dream homes.&quot;</p>\r\n\r\n<p>Bajaj further adds that Sultanpur Road, Faizabad Road, Sitapur Road, and Kanpur Road are prominent affordable destinations for homebuyers and these roads are connected with Shaheed Path and the ongoing Kisan Path. Shaheed Path and Kisan Path are being constructed as Outer Ring Road and it would become the lifeline of Lucknow. He said that the state government has laid tremendous emphasis on improving the infrastructure in the city. According to another developer, &ldquo;Affordable projects have far greater chances of achieving quicker possession now, as compared to the ones in mid-segment and luxury housing categories. The major influencing factors being people living in rented accommodations had begun to realise the value of owning a home during crisis.&rdquo;</p>\r\n\r\n<p><strong>Hurdles</strong><br />\r\nHowever, the segment is also facing some hurdles. Amit Goenka, MD and CEO at Nisus Finance, says, &ldquo;The biggest challenge the affordable sector faces is the drop in sales during slowdown. While this sector is the least affected there is a significant drop which has impacted the cash flows to the builder. The second major challenge this sector faces is in lending to the unorganised sector to customers who have bad credit or no credit history. Very often this means that PMAY loans may not be sanctioned by banks and often this leads to a further slowdown in cash flows. The third major challenge this sector faces is the ability of the builders to refinance their home loans.&rdquo;&nbsp;</p>\r\n\r\n<p><strong>Infra push</strong>&nbsp;<br />\r\nTalking about how Lucknow has emerged as an affordable destination for homebuyers, Harish Nair, executive director and head, Consulting, India, CBRE South Asia Pvt. Ltd, maintains, &ldquo;In recent years, Lucknow has witnessed rapid infrastructure developments and owing to the recent developments, such as the Metro Rail project and IT City along Sultanpur Road, the city is attracting investors and homebuyers alike.&quot;&nbsp;<br />\r\nTalking about the major affordable pockets in and around the city, Nair, maintains, &ldquo;Affordable housing locations include&nbsp;Gomti Nagar Extension, Indira Nagar and new allotted sectors of Gomti Nagar township in which private development has been allowed by Lucknow Development Authority.&nbsp;</p>\r\n', 0, '2022-05-25 16:30:36');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(55) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `phone`, `email`, `message`, `created_at`) VALUES
(3, 'addav', '234535534', 'sdfgf@fsfgs.fergg', 'dsfsgfg', '2022-05-25 12:24:07');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `created_at`) VALUES
(4, 'upload/1.png', '2022-05-25 16:36:51'),
(5, 'upload/2.png', '2022-05-25 16:36:56'),
(6, 'upload/3.png', '2022-05-25 16:37:01'),
(7, 'upload/4.png', '2022-05-25 16:37:06'),
(8, 'upload/5.png', '2022-05-25 16:37:11'),
(9, 'upload/6.png', '2022-05-25 16:37:17'),
(10, 'upload/7.png', '2022-05-25 16:37:23'),
(11, 'upload/8.png', '2022-05-25 16:37:29'),
(12, 'upload/9.png', '2022-05-25 16:37:35');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `image`, `created_at`) VALUES
(2, 'upload/1_(1).jpg', '2022-05-25 16:31:19'),
(3, 'upload/2.jpg', '2022-05-25 16:31:42'),
(4, 'upload/3.jpg', '2022-05-25 16:31:55'),
(5, 'upload/4.jpg', '2022-05-25 16:32:09'),
(6, 'upload/5.jpg', '2022-05-25 16:32:20'),
(7, 'upload/6.jpg', '2022-05-25 16:32:36');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(55) NOT NULL,
  `address` varchar(255) NOT NULL,
  `size` varchar(55) NOT NULL,
  `price` varchar(55) NOT NULL,
  `description` text NOT NULL,
  `school` varchar(255) NOT NULL,
  `shopping_mall` varchar(255) NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `restaurant` varchar(55) NOT NULL,
  `atm` varchar(55) NOT NULL,
  `cinema` varchar(55) NOT NULL,
  `park` varchar(55) NOT NULL,
  `map_link` varchar(255) NOT NULL,
  `video_link` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `image`, `name`, `address`, `size`, `price`, `description`, `school`, `shopping_mall`, `hospital`, `restaurant`, `atm`, `cinema`, `park`, `map_link`, `video_link`, `created_at`) VALUES
(1, 'upload/51.png', 'Kisan Path Property', 'Kisan Path Lucknow 226010', '1030', '350', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '1.2', '0.4', '1.1', '2.3', '1.9', '0.6', '1.2', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7122.408747411938!2d80.87567835000002!3d26.801620399999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfec74f9b54d1%3A0x6227e6ac6f8b9ccc!2sMaharaja%20Puram%2C%20Lucknow%2C%20Uttar%20Pradesh', '', '2022-05-25 18:09:32');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `designation` varchar(55) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `designation`, `image`, `description`, `created_at`) VALUES
(2, 'Vivek Gupta', 'full stack developer', 'upload/box.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.', '2022-04-09 13:17:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
