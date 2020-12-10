-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2020 at 01:44 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `admin_log`
--

CREATE TABLE `admin_log` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `timestamp` varchar(50) NOT NULL,
  `system` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_log`
--

INSERT INTO `admin_log` (`id`, `username`, `ip`, `timestamp`, `system`) VALUES
(1, 'admin', '::1', '1494308999', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.96 Safari/537.36'),
(2, 'admin', '::1', '1494309020', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.96 Safari/537.36'),
(3, 'admin', '::1', '1494313258', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.96 Safari/537.36'),
(4, 'admin', '::1', '1494392386', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.96 Safari/537.36'),
(5, 'admin', '::1', '1494823976', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36'),
(6, 'admin', '::1', '1494824242', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36'),
(7, 'admin', '::1', '1604321059', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.111 Safari/537.36'),
(8, 'admin', '::1', '1604322172', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.111 Safari/537.36'),
(9, 'admin', '::1', '1604323705', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.111 Safari/537.36'),
(10, 'admin', '::1', '1604504346', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.183 Safari/537.36'),
(11, 'admin', '::1', '1605080771', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.183 Safari/537.36'),
(12, 'admin', '::1', '1605682608', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36');

-- --------------------------------------------------------

--
-- Table structure for table `cartitems`
--

CREATE TABLE `cartitems` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `product_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cartitems`
--

INSERT INTO `cartitems` (`id`, `order_id`, `pid`, `quantity`, `product_name`, `product_price`) VALUES
(1, 1, 1, 1, 'Plain Creamy Cake', 10),
(2, 1, 11, 1, 'Onion Pizza', 110),
(3, 1, 4, 1, 'Heart-Shaped Cake', 40),
(4, 2, 1, 5, 'Plain Creamy Cake', 10),
(5, 2, 10, 2, 'Capsicum Pizza', 100),
(6, 2, 17, 1, 'Vanilla Ice Creams', 170),
(7, 3, 4, 1, 'Heart-Shaped Cake', 40),
(8, 3, 12, 1, 'Chicken Pizza', 120),
(9, 3, 17, 1, 'Vanilla Ice Creams', 170),
(10, 4, 4, 1, 'Heart-Shaped Cake', 40),
(11, 4, 12, 1, 'Chicken Pizza', 120),
(12, 4, 17, 1, 'Vanilla Ice Creams', 170),
(13, 4, 8, 10, 'Chocolate(egg free)', 80),
(14, 5, 78, 2, 'Ear Ring', 149),
(15, 6, 80, 2, 'Chicken Kabab', 299),
(16, 6, 81, 2, 'Mutton Kebab', 299),
(17, 7, 12, 1, 'Chicken Pizza', 120),
(18, 7, 17, 1, 'Vanilla Ice Creams', 170),
(19, 8, 9, 1, 'Vanilla(egg free)', 90),
(20, 8, 81, 1, 'Mutton Kebab', 299),
(21, 9, 9, 1, 'Vanilla(egg free)', 90),
(22, 9, 81, 1, 'Mutton Kebab', 299),
(23, 10, 3, 1, 'Strawberry cakes', 30),
(24, 11, 2, 1, 'Pineapple cakes', 20);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(6) NOT NULL,
  `cname` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `parent_id` int(6) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cname`, `parent_id`) VALUES
(1, 'Cakes and Pastries', 0),
(2, 'Pizzas', 0),
(3, 'Foods', 0),
(4, 'Selected GIFTS', 0),
(5, 'Egg', 1),
(6, 'Egg Free', 1),
(7, 'Veg', 2),
(8, 'Nonveg', 2),
(10, 'Clothes', 4),
(11, 'Accessories', 4),
(16, 'Shirts', 4),
(15, 'Jeans ', 4),
(28, 'Electronics', 0),
(24, 'High heels', 25),
(25, 'Shoes', 0),
(26, 'Food Veg', 3),
(27, 'Food Non-Veg', 3),
(29, 'Mobiles', 28),
(30, 'Charger', 28),
(31, 'Bluetooth', 28),
(32, 'Headphones', 28),
(33, 'MicroSD Card', 28);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(50) NOT NULL,
  `cust_email` varchar(50) NOT NULL,
  `cust_phone` varchar(20) NOT NULL,
  `cust_address` varchar(250) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cust_id`, `cust_name`, `cust_email`, `cust_phone`, `cust_address`, `password`) VALUES
(1, 'Nikhil Narayan', 'ipeg.solutions@gmail.com', '9830662770', 'D-1105, Koyla Vihar, Vip Road', '1'),
(2, 'Rahul', 'rahul@gmail.com', '987622200', 'Salt Lake', '414297'),
(3, 'Trina Dasgupta', 'trina@gmail.com', '555-555-5555', 'Sodepur', '399848'),
(4, 'poulami Neogi', 'tania@gmail.com', '2222222222', '169/2 GLT Road Kolkata-700108', '338378'),
(5, 'Trina Dasgupta', 'trina@gmail.com', '555-555-5555', 'lahabagan', '540473'),
(6, 'Trina Dasgupta', 'trina@gmail.com', '555-555-5555', 'lahabagan', '302001'),
(7, 'Trina Dasgupta', 'trina@gmail.com', '9073297725', 'kolkata', '209662'),
(8, 'Namita Dasgupta', 'namita@gmail.com', '9836293148', 'Sodepur', 'namita01');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `payment_info` varchar(50) NOT NULL,
  `delivery_name` varchar(50) NOT NULL,
  `delivery_phone` varchar(30) NOT NULL,
  `delivery_address` varchar(250) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `cust_id`, `date`, `payment_info`, `delivery_name`, `delivery_phone`, `delivery_address`, `status`) VALUES
(1, 1, '1493010784', 'cod', 'Nikhil Narayan', '9830662770', 'D-1105, Koyla Vihar, Vip Road', 'new'),
(2, 2, '1494828265', 'cod', 'Rahul', '987622200', 'Salt Lake', 'old'),
(3, 1, '1604321379', 'card', 'Nikhil Narayan', '9830662770', 'D-1105, Koyla Vihar, Vip Road', 'new'),
(4, 1, '1604322080', 'cod', 'Nikhil Narayan', '9830662770', 'D-1105, Koyla Vihar, Vip Road', 'old'),
(5, 3, '1604323578', 'cod', 'Trina Dasgupta', '555-555-5555', 'Sodepur', 'old'),
(6, 4, '1604324320', 'cod', 'poulami Neogi', '2222222222', '169/2 GLT Road Kolkata-700108', 'new'),
(7, 3, '1604600746', 'cod', 'Trina Dasgupta', '555-555-5555', 'Sodepur', 'new'),
(8, 5, '1604669850', 'card', 'Trina Dasgupta', '555-555-5555', 'lahabagan', 'new'),
(9, 6, '1604670447', 'card', 'Trina Dasgupta', '555-555-5555', 'lahabagan', 'new'),
(10, 7, '1604733388', 'cod', 'Trina Dasgupta', '9073297725', 'kolkata', 'new'),
(11, 3, '1604767420', 'card', 'Trina Dasgupta', '555-555-5555', 'Sodepur', 'new');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `details` text COLLATE latin1_general_ci NOT NULL,
  `image` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `price` int(4) NOT NULL DEFAULT '0',
  `cid` int(6) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `details`, `image`, `price`, `cid`) VALUES
(1, 'Plain Creamy Cake', 'This is a very good product of Monginis and also very healthy and testy.', 'products/1.jpg', 10, 5),
(2, 'Pineapple cakes', 'This is a very good product of Monginis and also very healthy and testy.', 'products/2.jpg', 20, 5),
(3, 'Strawberry cakes', 'This is a very good product of Monginis and also very healthy and testy.', 'products/3.jpg', 30, 5),
(4, 'Heart-Shaped Cake', 'This is a very good product of Monginis and also very healthy and testy.', 'products/4.jpg', 40, 5),
(5, 'Fruit cakes', 'This is a very good product of Monginis and also very healthy and testy.', 'products/5.jpg', 50, 5),
(8, 'Chocolate(egg free)', 'This is a very good product of Monginis and also very healthy and testy.', 'products/8.jpg', 80, 6),
(9, 'Vanilla(egg free)', 'This is a very good product of Monginis and also very healthy and testy.', 'products/9.jpg', 90, 6),
(10, 'Capsicum Pizza', 'Pizzas are of good quality.', 'products/10.jpg', 100, 7),
(11, 'Onion Pizza', 'Pizzas are of good quality.', 'products/11.jpg', 110, 8),
(12, 'Chicken Pizza', 'Pizzas are of good quality.', 'products/12.jpg', 120, 8),
(13, 'Fish Pizza', 'Pizzas are of good quality.', 'products/13.jpg', 130, 8),
(14, 'Egg Patties', 'Patties are soft and fresh.', 'products/14.jpg', 140, 3),
(15, 'Aloo Patties', 'Patties are soft and fresh.', 'products/15.jpg', 150, 3),
(17, 'Vanilla Ice Creams', 'Fresh and Yummy.', 'products/17.jpg', 170, 3),
(49, 'Chocobar', 'Tasty ice-cream', 'products/6.jpg', 50, 3),
(19, 'Aloo Fries', 'Served Hot.', 'products/20.jpg', 190, 3),
(63, 'Red Flared Skirt', 'Increase your glam quotient by wearing this red coloured skirt from the house of Faballey. Made of knit, this skirt is comfortable to wear and skin friendly as well.', 'products/red_skirt.jpg', 630, 10),
(54, 'Black Geometric Print Dress ', 'If you believe in a classy and modish dressing style, then this black coloured dress from Alia Bhatt\'s exclusive collection for Jabong is meant for you. Fashioned from rayon, this dress will ensure a comfortable fit. Team this dress with high heels and a neckpiece for a stunning look.', 'products/black_dress.jpg', 540, 10),
(55, 'Pink Polyurethane (Pu) Handbag', 'Cute and trendy, this pink coloured handbag by Next will tempt you to buy it instantly. It is compact yet can store your important things with ease. Made from polyurethane (pu), it will convince you of its good quality in no time. Fetch a catchy look by just carrying this bag with a simple top and a pair of jeans.', 'products/pink_bag.jpg', 550, 11),
(56, 'Black Tee Shirt', ' Look like an absolute stunner as you make your way to the party wearing this navy blue T-shirt from MANGO. Made from viscose spandex, this T-shirt features a round neck and will be comfortable all day long. This T-shirt can be teamed up with a pair of sequined shorts and stilettos to complete your stylish look.', 'products/black_tee.jpg', 560, 10),
(57, 'Saree', 'Classy, sensuous and versatile are the perfect words to describe this brown coloured saree from Vishal. The chiffon fabric makes this 6.0 m saree easy to drape and carry all day long. Club it with golden danglers and heels to highlight your personality on any occasion.', 'products/saree.jpg', 570, 10),
(58, 'Watch', 'If you have it, flaunt it! If this is your mantra then hit the streets in style wearing this black coloured analog watch for women from the house of Custom. The casing adds more appeal to this timepiece that can be worn on a rainy day, all thanks to its water resistance upto 10 atm.', 'products/watch.jpg', 580, 11),
(59, 'Blue Tee (Mens)', 'Fall in love with the soft texture of the fabric wearing this regular-fit T-shirt by United Colors of Benetton. Your skin will love the feel of this T-shirt as it is fashioned using the material that is famous for comfort – cotton. Live the moment wearing this T-shirt with casual trousers and flip-flops as you hit the street with best buds.', 'products/blue_tee.jpg', 590, 10),
(60, 'Mens Watch', 'Keep up with time wearing this black coloured analog watch from the house of Fossil. The stainless steel dial and leather strap make this watch for men quite high on quality. Designed with a difference, this watch will be a fantastic addition to your accessory collection.', 'products/mens_watch.jpg', 600, 11),
(61, 'Scarf', 'Charmingly gorgeous is what you’d be once you team up this multicoloured scarf with a sexy top and a pair of denims. While its modal adds to its appeal by making it soft to the touch, its attractive print accentuates its visual appeal. Furthermore, you can also wrap it in varied styles with different outfits and sport a new look every day.', 'products/scarf.jpg', 610, 10),
(62, 'Perfume', 'A refreshing fragrance that uplifts your mood and takes you to a blissful territory is here from Nike. The new gen women can now bask in the subtlety of the scent.\r\n\r\nLong Lasting Protection\r\n\r\nStart your day on a jovial note and stay fresh all day with Up or Down Eau de Toilette that gives you a long lasting protection.', 'products/perfume.jpg', 620, 11),
(80, 'Chicken Kabab', 'This is Chicken Peri Peri Kabab ', 'products/80_chicken-peri-peri-kebab.jpg', 299, 27),
(78, 'Ear Ring', 'this is very good product', 'products/78_ear_ring.png', 149, 11),
(79, 'Nose Ring', 'Nice Product', 'products/79_nose_ring.jpg', 199, 11),
(81, 'Mutton Kebab', 'Mutton Seekh Kebab', 'products/81_mutton-seekh-kabab.jpg', 299, 27),
(82, 'Heels', 'It is very easy to handle...', 'products/82_heels.jpg', 599, 24),
(83, 'Short Heels', '', 'products/83_short_heels.jpg', 500, 24),
(84, 'T-Shirt', 'Nice t-shirt', 'products/84_t-shirt_.jpg', 499, 10),
(85, 'Watches', 'Stylish ', 'products/85_watch.jpg', 1999, 11),
(86, 'AppleSE', '64GB Dual Camera', 'products/86_apple.jpg', 49999, 29);

-- --------------------------------------------------------

--
-- Table structure for table `sign up`
--

CREATE TABLE `sign up` (
  `First name` varchar(10) NOT NULL,
  `Last name` varchar(10) NOT NULL,
  `E-mail` varchar(50) NOT NULL,
  `Password` varchar(60) NOT NULL,
  `Confirm Password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_log`
--
ALTER TABLE `admin_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cartitems`
--
ALTER TABLE `cartitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_log`
--
ALTER TABLE `admin_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cartitems`
--
ALTER TABLE `cartitems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
