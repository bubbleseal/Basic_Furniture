-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2015 at 04:09 PM
-- Server version: 5.6.17-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `furnitureshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int(50) NOT NULL AUTO_INCREMENT,
  `session_id` varchar(50) NOT NULL,
  `product` varchar(100) NOT NULL,
  `qty` int(3) NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `session_id`, `product`, `qty`) VALUES
(1, 'jtr1jsbp6d8uarb4hhf5lit7b5', 'Elite Stacking Storage Combo Set', 5),
(35, 'jtr1jsbp6d8uarb4hhf5lit7b5', 'Fluer Dining Chair', 2),
(36, 'jvfrttcshl7tg793j5tnion347', 'Vertu Bed', 2),
(37, 'k2eohrf5crjflsqq93qgs9j397', 'Phantom Chair', 1),
(39, '2cnp00ct8pmqoobcsb5ulg5k12', 'Tower End Table', 1),
(40, '2cnp00ct8pmqoobcsb5ulg5k12', 'Serpentine, Floor Lamp', 2),
(41, '2cnp00ct8pmqoobcsb5ulg5k12', 'Sheer Ebony Oversized Wall Clock', 3),
(43, 'b3r92dkr5ro0ro2qm4ibcaqok2', 'Snowfall Table Lamp Table Lamp', 2),
(44, 'b3r92dkr5ro0ro2qm4ibcaqok2', 'Sheer Ebony Oversized Wall Clock', 3);

-- --------------------------------------------------------

--
-- Table structure for table `feedbackpile`
--

CREATE TABLE IF NOT EXISTS `feedbackpile` (
  `Name` varchar(40) NOT NULL,
  `Email` varchar(80) NOT NULL,
  `Comment` mediumtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbackpile`
--

INSERT INTO `feedbackpile` (`Name`, `Email`, `Comment`) VALUES
('missdevi', 'devi_is_awesome@email.com', 'This is a comment for the demo of the documentation.'),
('Joshua', 'ngyitkit@gmail.com', 'THIS SUCKS'),
('simone', 'sim_sze_mun@yahoo.com', 'This assignment has been a highway of excitement for me. No doubt it was a tight deadline but Joshua and me managed and it was unexpectedly a fun experience seeing the website come to life both visually and functionality. ');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE IF NOT EXISTS `inventory` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `ProductName` varchar(100) NOT NULL,
  `ProductCategory` varchar(20) NOT NULL,
  `Image` varchar(200) NOT NULL,
  `Price` decimal(10,0) NOT NULL,
  `Description` varchar(10000) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`ID`, `ProductName`, `ProductCategory`, `Image`, `Price`, `Description`) VALUES
(1, 'Elite Stacking Storage Combo Set', 'kitchen dining', '/kitchen/cab_01.jpg', '369', 'Adjustable shelves allow you to configure each of the six levels in order to suit your needs.'),
(2, 'Fluer Dining Chair', 'kitchen dining', '/kitchen/chair_02.jpg', '251', 'Upholstered in solid black leather with a square back, this chair is understated and sophisticated. Display it among modern decor for a cohesive feel.'),
(3, 'Stone Table White', 'kitchen dining', '/kitchen/table_01.jpg', '1612', 'Sleek and modern in all White, the Stone-T 200 Rectangular Table is a versatile design suitable for both indoor and outdoor dining.'),
(4, 'Fuji Stacker Counter Stool', 'kitchen dining', '/kitchen/chair_03.jpg', '94', 'The simple elegance of the Fuji belies its astonishing comfort with backrest support a thick padded leatherette cushion.'),
(5, 'Babyletto Storage Unit Open Cupboard', 'kitchen dining', '/kitchen/cab_03.jpg', '100', 'Greenington combines beautiful design, rich color, and a winning sustainability story.'),
(6, 'Discovery Table', 'kitchen dining', '/kitchen/table_04.jpg', '2248', 'The Discovery Extension Table is modern to the core, boasting a clean and sleek design that elegantly complements many dining room interiors.'),
(7, 'Viva Bar Stool Regenerated Leather', 'kitchen dining', '/kitchen/chair_05.jpg', '252', 'A rich leatherette finish hugs the curves of the upscale Viva Bar Stool which comes with a polished stainless steel base and adjustable pole.'),
(8, 'Compass Table', 'kitchen dining', '/kitchen/table_03.jpg', '558', 'Made of a Polyethyline Frame and featuring a cement Ballast, this table is sturdy and functional while maintaining its smooth white silhouette.\n'),
(9, 'Phantom Chair', 'kitchen dining', '/kitchen/chair_04.jpg', '422', 'The chair of Domitalia that has won more awards than any other. You can use this amazing chair designed by Orlandini & Radice indoor and outdoor.'),
(10, 'Corona Table', 'kitchen dining', '/kitchen/table_06.jpg', '916', 'Ideal for the dining room or kitchen nook, this Italian-made pedestal table is as versatile as it is aesthetically-pleasing.'),
(11, 'Universe Table', 'kitchen dining', '/kitchen/table_05.jpg', '2038', 'This incredible table designed by Adriano Balutto can extend from 63" to 10''-2" and can seat 14 people when opened.'),
(12, 'South Shore Fiesta Storage Pantry in Pure White', 'kitchen dining', '/kitchen/cab_02.jpg', '129', 'This elegant and practical food storage pantry is the perfect fit for your needs. The storage spaces make it ideal for putting food and kitchen accessories.'),
(13, '39 Inch Larch Canapa Bathroom Vanity Set', 'bathroom', '/bathroom/01.jpg', '1983', 'Vanity Set Features: Vanity cabinet made of engineered wood. Cabinet features waterproof panels.'),
(14, 'Unidoor Plus 51-1/2" x 30-3/8" x 72" Shower Enclosure Half Frosted Glass', 'bathroom', '/bathroom/02.jpg', '1130', 'The Unidoor Plus Shower Enclosure will impress with the fluid style of a completely frameless glass design.'),
(15, 'Aston 50" Walk-In Whilrpool Bath Tub', 'bathroom', '/bathroom/03.jpg', '3799', 'The WT622 50" x 30" walk-in tub combines safety with comfort as it allows independent living more desirable.'),
(16, 'Badeloft Stone Resin Freestanding Bathtub', 'bathroom', '/bathroom/04.jpg', '2590', 'Experience the heights of relaxation and style with the BW-10 modern emperor freestanding bathtub.'),
(17, 'Inox Zero Mito Stainless Steel Modern Sink', 'bathroom', '/bathroom/05.jpg', '1495', 'Mito has a unique round shape and the exterior finish may be in a beautiful shiny polish.'),
(18, 'Hannah Soaking Bathtub', 'bathroom', '/bathroom/06.jpg', '1499', 'The asymmetrical shape is clean and geometric, lending a beautiful minimalist, yet updated, feel to the modern bathroom.'),
(19, '40 Inch Grey Oak Bathroom Vanity Set', 'bathroom', '/bathroom/07.jpg', '1155', 'Perfect for modern bathrooms. Made and designed in Italy.'),
(20, 'WS Bath Collections Vela VE Bathtub', 'bathroom', '/bathroom/08.jpg', '11480', 'Free standing bathtub with integral overflow made of solid surface material "Korakril".'),
(21, 'Control Brand the Piet True Solid Surface Sink Vessel', 'bathroom', '/bathroom/09.jpg', '480', 'The Piet is fabricated from vacuum treated solid surface material hand sanded to perfection.'),
(22, 'Uttermost Quintus Linen Armchair', 'living room', '/living/01.jpg', '712', 'Uttermost''s armchairs combine premium quality materials with unique high-style design.'),
(23, 'Uttermost Bjorn Modern Console Table', 'living room', '/living/02.jpg', '657', 'Chrome metal base with gloss white, crocodile-embossed, polyurethane tabletop.'),
(24, 'Tower End Table', 'living room', '/living/03.jpg', '146', 'This high-gloss white end table has a cone-shaped base, round top, and polyester and acrylic finish for added durability.'),
(25, 'Fine Mod Imports Cube Lc2 Petit Sofa', 'living room', '/living/04.jpg', '799', 'Cushions covering in genuine leather ther front, sides and back, with a polished stainless steel frame. Polished Stainless Steel Frame Assembled.'),
(26, 'Siena Sofa', 'living room', '/living/05.jpg', '340', 'Clean lines and chrome legs give this versatile Siena Sofa its sleek, contemporary look.'),
(27, 'Liberty Nesting Tables', 'living room', '/living/06.jpg', '228', 'The Liberty nesting tables feature a round clear glass top with curved iron rod bodies, and are completed with a classic antique nickel finish.'),
(28, 'Saddlebrook Lounger', 'living room', '/living/07.jpg', '234', 'Luxurious leatherette and ample seating room are the hallmark of this extremely comfortable chair, the Saddlebrook Lounger.'),
(29, 'Align Leather Corner Sofa', 'living room ', '/living/08.jpg', '615', 'Align comes generously padded and upholstered in bonded leather, with slight button tufting and trim for only the gentlest effect.'),
(30, 'Malta Sofa', 'living room', '/living/09.jpg', '487', 'Create a simple, sleek look in your living or dining room using the versatile Malta Sofa.'),
(31, 'Uttermost Teraj White Velvet Sofa\r\n', 'living room', '/living/10.jpg', '1207', 'Medium rise, deep channel back forms a graceful curve with a slightly splayed pitch for relaxed comfort.'),
(32, 'Kubo 4 Seater Sofa', 'living room ', '/living/11.jpg', '6820', 'Cushions filled with high resilient foam covered with natural down feathers.'),
(33, 'Bella White Mirrored Nesting Tables', 'living room', '/living/12.jpg', '689', 'These sleek nesting tables are an ideal complement to virtually any modern space.'),
(34, 'Vertu Bed', 'bedroom', '/bedroom/01.jpg', '1679', 'Featuring dark gray leather upholstery and stainless steel framework, this queen-size bed frame is sleek and sophisticated.'),
(35, 'Azara Five Drawer Chest', 'bedroom', '/bedroom/02.jpg', '1873', 'Greenington offers a fresh contemporary look with just the right amount of Mid-Century Modern.'),
(36, 'Savvy Extension Dresser', 'bedroom', '/bedroom/03.jpg', '1259', 'This dresser has a high-gloss white finish and a clean rectangular design. Its gliding top surface extends outward to form a side table or bookshelf.'),
(37, 'Fresca Bed', 'bedroom ', '/bedroom/04.jpg', '1364', 'Featuring a tufted headboard, charcoal gray polyester fabric, and stainless steel feet, this king-size bed frame is simple and elegant.'),
(38, 'Coastal Living Resort-Tranquility Isle Night Stand', 'bedroom', '/bedroom/05.jpg', '739', 'The roomy drawer gives a place to stow reading glasses or a book, while the two open shelves provide an airy display space.'),
(39, 'Glare Bed', 'bedroom', '/bedroom/06.jpg', '1469', 'Featuring white leatherette upholstery and a square panel design on the headboard, this queen-size bed frame is sleek and sophisticated.'),
(40, 'LAXseries Low Boy Dresser', 'bedroom', '/bedroom/07.jpg', '1964', 'Aluminum-wrapped solid wood drawer fronts with side finger pulls and an undermounted door slide give this piece a clean minimalist look.'),
(41, 'Charleston Regency-Rosette Bedside Table', 'bedroom', '/bedroom/08.jpg', '889', 'Carved rosettes on the aptly named Rosette Bedside Table punctuate the three generous fixed shelves of this beautifully accommodating piece.'),
(42, 'Bohr Ceiling Fixture Ceiling Fixture', 'lighting', '/lighting/01.jpg', '768', 'Fill in your room with a wide array of gleaming light coming from this wonderful Bohr Ceiling Fixture.'),
(43, 'Adesso Hayley Shelf Floor Lamp', 'lighting', '/lighting/02.jpg', '160', 'The three poles hold a metal ring with a frosted glass downlight inset, upon which the frosted glass shade rests.'),
(44, 'Snowfall Table Lamp Table Lamp', 'lighting', '/lighting/03.jpg', '275', 'Fill in your room with a wide array of gleaming light coming from this wonderful Snowfall Table Lamp.'),
(45, 'Strata 3-Light Chandelier In Polished Chrome', 'lighting', '/lighting/04.jpg', '484', 'The Strata collection features ribbed blown glass in a clean, modern shape.'),
(46, 'Adesso Mimosa Torchiere', 'lighting', '/lighting/05.jpg', '166', 'Each Mimosa lamp has a frosted glass elongated flute-shaped shade with metal base. Available in satin steel with white frosted glass.'),
(47, 'Equilibrium, Table Lamp', 'lighting', '/lighting/06.jpg', '310', 'With its lustrous contemporary aesthetic, NOVA''s Equilibrium Collection is the perfect home accessory to transform any space.'),
(48, 'Serpentine, Floor Lamp', 'lighting', '/lighting/07.jpg', '448', 'Chrome plating and pecan-colored wood intertwine to create NOVA''s Serpentine floor lamp, characterized by its unique curvilinear shape.'),
(49, 'Orbital 1-Light Pendant In Polished Chrome', 'lighting', '/lighting/08.jpg', '150', 'The Orbital Pendant Collection is featured in a Polished Chrome finish with ribbed glass to complement.'),
(50, 'Adesso Bonnet Floor Lamp', 'lighting', '/lighting/09.jpg', '150', 'These telescoping modified arc lamps have a satin steel finish with an adjustable white linen shade.'),
(51, 'Jamil Earthenware Planters', 'deco', '/deco/01.jpg', '113', 'Ribbon in the sky: A trio of earthenware planters is a celebration of celestial color.'),
(52, 'Vendome Pendulum Wall Clock', 'deco', '/deco/02.jpg', '227', 'Clean and modern without numerals, NOVA''s Vendome Pendulum Wall Clock is an understated focal point.'),
(53, 'Madie Hanging Glass Vase', 'deco', '/deco/03.jpg', '63', 'Drop everything for this hanging glass vase with great posy potential.'),
(54, 'Thayer Earthenware Planters', 'deco', '/deco/04.jpg', '145', 'In shades of cream and blue, this set of three Earthenware planters feature a dimensional geometric pattern and add style to houseplants.'),
(55, 'Essentials Reflective Mirror', 'deco', '/deco/05.jpg', '136', 'Add the finishing touch to your room with this stylish gray accented mirror, part of the Reflective collection from Essentials by Connie Post.'),
(56, 'Marcia Square Terrariums', 'deco', '/deco/06.jpg', '75', 'This set of three Marcia square terrariums feature soft, aged paint finishes in cube shaped metal frame.'),
(57, 'Wireless Designer Doorbell Clock', 'deco', '/deco/07.jpg', '31', 'Infinity Instruments Doorbell Clock is a one of a kind wall and/or tabletop clock that also doubles as a doorbell.'),
(58, 'Sheer Ebony Oversized Wall Clock', 'deco', '/deco/08.jpg', '316', 'This American made decorative wall clock measures a full 24 inches in diameter.'),
(59, 'Blomus Muro Square Mirror', 'deco', '/deco/09.jpg', '83', 'Add depth to your bedroom or living room using the simple Blomus Muro Square Mirror.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `IC` varchar(12) NOT NULL,
  `Gender` varchar(1) NOT NULL,
  `MaritalStatus` varchar(8) NOT NULL,
  `HomeAdd` varchar(150) NOT NULL,
  `MailAdd` varchar(150) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Username` varchar(12) NOT NULL,
  `Password` varchar(12) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Name`, `IC`, `Gender`, `MaritalStatus`, `HomeAdd`, `MailAdd`, `Phone`, `Email`, `Username`, `Password`) VALUES
(1, 'Miss Devi Poonu', '123456789123', 'F', 'Married', 'Somewhere on earth in Malaysia', 'Any address available just for fun', '0123456789', 'devi.poonu@taylors.com', 'missdevi', '654321'),
(2, 'Simone Chong', '890210145118', 'F', 'Engaged', 'b1-06-03, VKB, bukit jalil, 57000, KL.', 'C22-1-12, BV, Serdang, Selangor.', '0166276282', 'sim_sze_mun@yahoo.com', 'Shimochii', '123456'),
(3, 'Joshua Ng Yit Kit', '951106146109', 'M', 'Single', 'Somewhere over the rainbow', 'Somewhere over the rainbow', '0123980505', 'ngyitkit@gmail.com', 'joshuanyk', 'joshua123'),
(4, 'Vincent', '891124141234', 'M', 'Engaged', 'a place which is built with concrete and has a roof', 'Heaven, earth and hell', '01632958465', 'vin_chest@gmail.com', 'vinchess', 'qwerty');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
