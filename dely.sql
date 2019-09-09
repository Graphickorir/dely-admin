-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2018 at 01:17 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dely`
--

-- --------------------------------------------------------

--
-- Table structure for table `delybestsales`
--

CREATE TABLE `delybestsales` (
  `Bestsales_id` int(5) NOT NULL,
  `Item` int(5) NOT NULL,
  `Partner` int(5) NOT NULL,
  `Bestsales` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delybestsales`
--

INSERT INTO `delybestsales` (`Bestsales_id`, `Item`, `Partner`, `Bestsales`) VALUES
(1, 7, 1, 'http://192.168.43.167/dely/delyimgs/bestsales/bsjavahouse.jpg'),
(2, 37, 2, 'http://192.168.43.167/dely/delyimgs/bestsales/bsKFC.jpg'),
(3, 147, 6, 'http://192.168.43.167/dely/delyimgs/bestsales/bssteers.png'),
(4, 113, 4, 'http://192.168.43.167/dely/delyimgs/bestsales/bssubway.png'),
(5, 96, 3, 'http://192.168.43.167/dely/delyimgs/bestsales/bschickeninn.jpg'),
(6, 84, 5, 'http://192.168.43.167/dely/delyimgs/bestsales/bspizzainn.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `delycompanies`
--

CREATE TABLE `delycompanies` (
  `Id_Co` int(10) NOT NULL,
  `Company` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Co_logo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delycompanies`
--

INSERT INTO `delycompanies` (`Id_Co`, `Company`, `Address`, `Co_logo`) VALUES
(1, 'Meru University', 'Meru,Nchiru', 'http://192.168.43.167/dely/delyimgs/companies/must.png'),
(2, 'Coop Bank', 'Nairobi, CBD', 'http://192.168.43.167/dely/delyimgs/companies/coop.png');

-- --------------------------------------------------------

--
-- Table structure for table `delyitems`
--

CREATE TABLE `delyitems` (
  `Item_id` int(10) NOT NULL,
  `Partner` int(11) NOT NULL,
  `Item_cat` int(5) NOT NULL,
  `Item_name` varchar(50) NOT NULL,
  `Item_price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delyitems`
--

INSERT INTO `delyitems` (`Item_id`, `Partner`, `Item_cat`, `Item_name`, `Item_price`) VALUES
(1, 1, 1, 'House Coffee', 170),
(2, 1, 1, 'Espresso', 170),
(3, 1, 1, 'Macchiato', 180),
(4, 1, 1, 'Americano', 180),
(5, 1, 1, 'Cappuccino', 230),
(6, 1, 1, 'Vanilla Latte', 250),
(7, 1, 1, 'Mocha', 270),
(8, 1, 1, 'Caramel Macchiato', 270),
(9, 1, 2, 'Cheese & Tomato Sandwich', 420),
(10, 1, 2, 'Avocado,Cheese & Tomato Sandwich', 470),
(11, 1, 2, 'Tuna', 530),
(12, 1, 2, 'Chicken Salad', 530),
(13, 1, 2, 'Bacon, Lettuce & Tomato (BLT)', 530),
(14, 1, 2, 'Chicken & Cheese', 530),
(15, 1, 2, 'Beef Burger', 740),
(16, 1, 2, 'Cheese Burger', 780),
(17, 1, 2, 'Grilled Chicken Burger', 730),
(18, 1, 2, 'Veggie Cheese Burger', 670),
(19, 1, 1, 'Pineapple,Orange,Mango,Passion Juices each', 230),
(20, 1, 1, 'Soda', 160),
(21, 1, 1, 'Diet Soda', 190),
(22, 1, 1, 'Mineral Water (500ml)', 160),
(23, 1, 3, 'Vegetable Curry', 70),
(24, 1, 3, 'Grilled Fish & Chips', 930),
(25, 1, 3, 'Java Special Chicken Curry', 880),
(26, 1, 3, 'Grilled Fillet Steak', 1040),
(27, 1, 3, 'Mushroom Fillet Steak', 1090),
(28, 1, 3, 'Grilled Pork Chops', 990),
(29, 1, 3, 'Swahili Coconut Fish Curry', 950),
(30, 1, 3, 'Homestyle Chicken Dhania with Ugali', 860),
(31, 2, 1, 'cold drink 350ml', 70),
(32, 2, 1, 'cold drink 500ml', 100),
(33, 2, 1, 'Dasani 500ml', 100),
(34, 2, 1, 'Diet/Light coke 500ml', 120),
(35, 2, 1, 'Minute maid', 150),
(36, 2, 2, 'Nyama Nyama Burger', 590),
(37, 2, 2, 'Box Master', 580),
(38, 2, 2, 'Twister', 480),
(39, 2, 2, 'Colonel Burger', 500),
(40, 2, 2, 'Double Crunch Burger', 450),
(41, 2, 2, 'Legend Burger', 500),
(42, 2, 2, 'Zinger Burger', 500),
(43, 2, 2, 'Cheese Slice Reg', 50),
(44, 2, 2, 'Chips regular', 220),
(45, 2, 2, 'Chicken 1pcs', 200),
(46, 2, 2, 'Chicken 5pcs', 950),
(47, 2, 2, 'Crispy Fillets', 390),
(48, 2, 2, 'Crunch Burger', 300),
(49, 2, 2, 'Hot Wings', 410),
(50, 2, 3, 'Box Master - Meal', 800),
(51, 2, 3, 'Colonel Burger - Meal', 720),
(52, 2, 3, 'Crispy Fillet Meal', 700),
(53, 2, 3, 'Fully Loaded Box - Meal', 900),
(54, 2, 3, 'Legend Burger Meal', 750),
(55, 2, 3, 'Nyama Nyama Burger Meal', 850),
(56, 2, 3, 'Twister Combo - Meal', 700),
(57, 2, 3, 'Zinger Burger Meal (Drinks)', 720),
(58, 2, 3, 'Wingman Combo', 450),
(59, 2, 3, 'Paneer Burger Meal', 720),
(60, 2, 3, 'Wing Meal', 690),
(62, 1, 2, 'Roast 1/4 Chicken, Chips and Salsa', 500),
(63, 5, 1, 'PET 500ml', 110),
(64, 5, 3, 'Lil peppis Pizza with a free squishy juice', 300),
(65, 5, 3, 'Extra Vegetable Toppings', 50),
(66, 5, 3, 'Extra Meat Toppings', 100),
(67, 5, 2, 'Pizza Pie', 200),
(68, 5, 2, 'Twisty Bread', 150),
(69, 5, 3, 'Lunch Offers (any classic pizza with 500 ml soda)', 750),
(70, 5, 3, '6 BBQ Wings', 350),
(71, 5, 2, 'Spicy Boerewors', 550),
(72, 5, 2, 'Roast Veg &Feta', 550),
(73, 5, 2, 'Veg Feast', 550),
(74, 5, 3, 'Beef Pepperoni plus', 550),
(75, 5, 2, 'Chicken & Beef pepperoni', 550),
(76, 5, 2, 'Chicken Macon BBQ', 550),
(77, 5, 3, 'Meat Deluxe', 550),
(78, 5, 2, 'Cheese Burger', 550),
(79, 5, 2, 'Chicken Hawaiian', 550),
(80, 5, 2, 'Veg Tikka', 500),
(81, 5, 2, 'Chicken Tikka', 500),
(82, 5, 2, 'Peri-Peri Chicken', 500),
(83, 5, 2, 'BBQ Steak', 500),
(84, 5, 2, 'Boerewors', 500),
(85, 5, 2, 'Hawaiian', 500),
(86, 5, 2, 'Chicken and Mushroom', 500),
(87, 5, 2, 'Regina Pizza', 500),
(88, 5, 3, 'Double stack any large Pizza', 150),
(89, 3, 1, '500ml water', 100),
(90, 3, 1, 'Extra Soda', 110),
(91, 3, 2, 'Chicken Pieces (One Piecer)', 200),
(92, 3, 2, 'Chicken Pieces', 450),
(93, 3, 2, 'Cheese Beef Burger', 250),
(94, 3, 2, 'Beef Burger', 200),
(95, 3, 2, 'Spicy Chicken Burger', 350),
(96, 3, 2, 'Chicken Burger', 350),
(97, 3, 3, 'Chicken burger Chips and 500 ml soda', 550),
(98, 3, 3, '3 piecer, Chips and soda', 500),
(99, 3, 2, 'Bites with Chips', 250),
(100, 3, 2, 'Burger with Chips', 250),
(101, 3, 2, 'Drumstick with Chips', 250),
(102, 3, 3, 'Value Chicken Burger with Chips', 200),
(103, 3, 2, 'Quarter Rotisserie Chicken with Regular Chips', 350),
(104, 3, 2, 'Quarter Rotisserie Chicken', 250),
(105, 3, 2, 'Chilli Sauce', 50),
(106, 3, 2, 'Cheese Slice', 50),
(107, 3, 2, 'Garden Salad', 50),
(108, 3, 2, 'Salad', 50),
(109, 3, 3, 'Full Rotisserie Chicken with Large Chips', 1100),
(110, 3, 3, 'Half Rotisserie Chicken with Regular Chips', 600),
(111, 3, 2, 'One Piece + Chips', 300),
(112, 3, 2, 'Double Chicken Burger with Cheese', 600),
(113, 4, 1, 'Fountain Soft Drink (21 oz)', 160),
(114, 4, 1, '1% Milk', 160),
(115, 4, 1, 'Dasani Water', 180),
(116, 4, 1, 'Minute Maid Juice', 180),
(117, 4, 2, 'BLT', 375),
(118, 4, 2, 'Tuna', 425),
(119, 4, 2, 'Veggie Patty', 450),
(120, 4, 2, 'Steak & Cheese', 475),
(121, 4, 2, 'Spicy Italian', 375),
(122, 4, 2, 'Roast Beef', 475),
(123, 4, 2, 'Pizza Sub with Cheese', 375),
(124, 4, 2, 'Italian B.M.T.', 425),
(125, 4, 2, 'Turkey Breast', 425),
(126, 4, 3, 'Make It A Meal,21 oz. Fountain Drink & Side', 250),
(127, 4, 3, 'Turkey Breast & Black Forest Ham', 425),
(128, 4, 3, 'Subway Club', 475),
(129, 4, 3, 'Bacon, Egg & Cheese', 400),
(130, 4, 3, 'Loaded Baked Potato with Bacon (soup)', 250),
(131, 4, 2, 'Pepperoni (footlong)', 150),
(132, 4, 2, 'Avocado (footlong)', 150),
(133, 6, 1, 'Soda 500ml', 100),
(134, 6, 1, 'Soda 2L', 250),
(135, 6, 1, 'Fresh fruit juice 300ml', 150),
(136, 6, 1, 'Fresh fruit juice 500ml', 250),
(137, 6, 1, 'Steers mineral water ', 100),
(138, 6, 2, 'Rave burger', 250),
(139, 6, 2, 'Veggie burger', 250),
(140, 6, 2, 'Steers burger', 300),
(141, 6, 2, 'Chicken burger', 400),
(142, 6, 2, 'Cheese burger', 350),
(143, 6, 2, 'Peri-peri cheese burger', 400),
(144, 6, 2, 'Peri-peri cheese burger', 450),
(145, 6, 2, 'Original king steer', 500),
(146, 6, 2, 'Spicy king steer', 500),
(147, 6, 2, 'Mighty king steer', 650),
(148, 6, 2, '1/4 Chicken', 350),
(149, 6, 2, 'Grilled chicken breast', 250),
(150, 6, 2, 'Chicken salad ', 500),
(151, 6, 2, 'Steak salad', 600),
(152, 6, 3, 'Grill steak,chips and cheese', 700),
(153, 6, 3, 'Med chips and 500ml soda', 100),
(154, 6, 3, 'Rave burger combo', 400),
(155, 6, 3, 'Chicken burger combo', 550),
(156, 6, 3, 'Cheese burger combo', 500),
(157, 6, 3, 'Jalapeno mayo combo', 550),
(158, 3, 3, 'Munch deal', 350);

-- --------------------------------------------------------

--
-- Table structure for table `delyorders`
--

CREATE TABLE `delyorders` (
  `Order_id` int(20) NOT NULL,
  `Order_num` int(20) NOT NULL,
  `User_id` int(20) NOT NULL,
  `Address` int(10) NOT NULL,
  `Part_id` int(20) NOT NULL,
  `Item_id` int(20) NOT NULL,
  `Order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Dely` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delyorders`
--

INSERT INTO `delyorders` (`Order_id`, `Order_num`, `User_id`, `Address`, `Part_id`, `Item_id`, `Order_date`, `Dely`) VALUES
(1, 65053, 7, 1, 2, 53, '2018-08-03 17:05:46', 1),
(2, 65053, 7, 1, 1, 14, '2018-08-03 17:05:46', 1),
(3, 15815, 7, 1, 2, 53, '2018-08-06 14:42:54', 1),
(4, 15815, 7, 1, 1, 14, '2018-08-06 14:42:54', 1),
(5, 15815, 7, 1, 1, 8, '2018-08-06 14:42:54', 1),
(6, 15815, 7, 1, 2, 38, '2018-08-06 14:42:54', 1),
(7, 46820, 10, 2, 2, 53, '2018-08-09 13:42:49', 1),
(8, 46820, 10, 2, 1, 14, '2018-08-09 13:42:50', 0),
(9, 46820, 10, 2, 1, 8, '2018-08-09 13:42:50', 0),
(10, 46820, 10, 2, 2, 38, '2018-08-09 13:42:50', 1),
(11, 14459, 7, 1, 5, 64, '2018-08-20 17:12:58', 1),
(12, 14459, 7, 1, 1, 8, '2018-08-20 17:12:58', 0),
(13, 14615, 15, 1, 2, 57, '2018-08-22 13:53:07', 1),
(14, 14615, 15, 1, 3, 90, '2018-08-22 13:53:07', 1),
(15, 14615, 15, 1, 1, 10, '2018-08-22 13:53:07', 0),
(16, 14615, 15, 1, 1, 15, '2018-08-22 13:53:07', 0),
(17, 14615, 15, 1, 6, 157, '2018-08-22 13:53:07', 0),
(18, 92912, 16, 1, 1, 27, '2018-08-26 12:09:38', 1),
(19, 92912, 16, 1, 3, 96, '2018-08-26 12:09:39', 0),
(20, 92912, 16, 1, 1, 7, '2018-08-26 12:09:39', 1),
(21, 92912, 16, 1, 2, 57, '2018-08-26 12:09:39', 1),
(22, 92912, 16, 1, 5, 73, '2018-08-26 12:09:39', 0),
(23, 74949, 16, 1, 4, 122, '2018-08-26 12:26:03', 1),
(24, 74949, 16, 1, 4, 115, '2018-08-26 12:26:03', 0),
(25, 74949, 16, 1, 4, 129, '2018-08-26 12:26:03', 0),
(26, 60319, 17, 1, 2, 33, '2018-08-26 13:19:14', 1),
(27, 60319, 17, 1, 2, 40, '2018-08-26 13:19:14', 1),
(28, 60319, 17, 1, 2, 60, '2018-08-26 13:19:14', 1),
(29, 31379, 17, 1, 2, 33, '2018-08-26 13:19:54', 0),
(30, 31379, 17, 1, 2, 40, '2018-08-26 13:19:54', 0),
(31, 31379, 17, 1, 2, 60, '2018-08-26 13:19:54', 0),
(32, 31379, 17, 1, 6, 152, '2018-08-26 13:19:54', 0),
(33, 31379, 17, 1, 6, 153, '2018-08-26 13:19:54', 0),
(34, 31379, 17, 1, 6, 154, '2018-08-26 13:19:54', 0),
(35, 31379, 17, 1, 6, 155, '2018-08-26 13:19:54', 0),
(36, 31379, 17, 1, 6, 156, '2018-08-26 13:19:54', 0),
(37, 31379, 17, 1, 6, 157, '2018-08-26 13:19:54', 0),
(38, 31379, 17, 1, 6, 151, '2018-08-26 13:19:55', 0),
(39, 31379, 17, 1, 6, 150, '2018-08-26 13:19:55', 0),
(40, 31379, 17, 1, 6, 149, '2018-08-26 13:19:55', 0),
(41, 31379, 17, 1, 6, 148, '2018-08-26 13:19:55', 0),
(42, 31379, 17, 1, 6, 147, '2018-08-26 13:19:55', 0),
(43, 31379, 17, 1, 6, 146, '2018-08-26 13:19:55', 0),
(44, 31379, 17, 1, 6, 145, '2018-08-26 13:19:55', 0),
(45, 31379, 17, 1, 6, 144, '2018-08-26 13:19:55', 0),
(46, 31379, 17, 1, 6, 143, '2018-08-26 13:19:55', 0),
(47, 31379, 17, 1, 6, 142, '2018-08-26 13:19:55', 0),
(48, 31379, 17, 1, 6, 141, '2018-08-26 13:19:55', 0),
(49, 31379, 17, 1, 6, 140, '2018-08-26 13:19:55', 0),
(50, 31379, 17, 1, 6, 139, '2018-08-26 13:19:55', 0),
(51, 31379, 17, 1, 6, 138, '2018-08-26 13:19:55', 0),
(52, 40171, 17, 1, 2, 33, '2018-08-26 13:20:33', 0),
(53, 40171, 17, 1, 2, 40, '2018-08-26 13:20:33', 0),
(54, 40171, 17, 1, 2, 60, '2018-08-26 13:20:33', 0),
(55, 40171, 17, 1, 6, 152, '2018-08-26 13:20:33', 0),
(56, 40171, 17, 1, 6, 153, '2018-08-26 13:20:34', 0),
(57, 40171, 17, 1, 6, 154, '2018-08-26 13:20:34', 0),
(58, 40171, 17, 1, 6, 155, '2018-08-26 13:20:34', 0),
(59, 40171, 17, 1, 6, 156, '2018-08-26 13:20:34', 0),
(60, 40171, 17, 1, 6, 157, '2018-08-26 13:20:34', 0),
(61, 40171, 17, 1, 6, 151, '2018-08-26 13:20:34', 0),
(62, 40171, 17, 1, 6, 150, '2018-08-26 13:20:34', 0),
(63, 40171, 17, 1, 6, 149, '2018-08-26 13:20:34', 0),
(64, 40171, 17, 1, 6, 148, '2018-08-26 13:20:34', 0),
(65, 40171, 17, 1, 6, 147, '2018-08-26 13:20:34', 0),
(66, 40171, 17, 1, 6, 146, '2018-08-26 13:20:34', 0),
(67, 40171, 17, 1, 6, 145, '2018-08-26 13:20:34', 0),
(68, 40171, 17, 1, 6, 144, '2018-08-26 13:20:34', 0),
(69, 40171, 17, 1, 6, 143, '2018-08-26 13:20:34', 0),
(70, 40171, 17, 1, 6, 142, '2018-08-26 13:20:34', 0),
(71, 40171, 17, 1, 6, 141, '2018-08-26 13:20:35', 0),
(72, 40171, 17, 1, 6, 140, '2018-08-26 13:20:35', 0),
(73, 40171, 17, 1, 6, 139, '2018-08-26 13:20:35', 0),
(74, 40171, 17, 1, 6, 138, '2018-08-26 13:20:35', 0),
(75, 40171, 17, 1, 1, 1, '2018-08-26 13:20:35', 0),
(76, 40171, 17, 1, 1, 3, '2018-08-26 13:20:35', 0),
(77, 40171, 17, 1, 1, 5, '2018-08-26 13:20:35', 0),
(78, 40171, 17, 1, 1, 2, '2018-08-26 13:20:35', 0),
(79, 40171, 17, 1, 1, 4, '2018-08-26 13:20:35', 0),
(80, 40171, 17, 1, 1, 6, '2018-08-26 13:20:35', 0),
(81, 40171, 17, 1, 1, 8, '2018-08-26 13:20:35', 0),
(82, 40171, 17, 1, 1, 19, '2018-08-26 13:20:35', 0),
(83, 40171, 17, 1, 1, 21, '2018-08-26 13:20:35', 0),
(84, 40171, 17, 1, 1, 22, '2018-08-26 13:20:35', 0),
(85, 40171, 17, 1, 1, 20, '2018-08-26 13:20:35', 0),
(86, 40171, 17, 1, 1, 7, '2018-08-26 13:20:35', 0),
(87, 40171, 17, 1, 1, 10, '2018-08-26 13:20:35', 0),
(88, 40171, 17, 1, 1, 17, '2018-08-26 13:20:36', 0),
(89, 40171, 17, 1, 1, 18, '2018-08-26 13:20:36', 0),
(90, 40171, 17, 1, 1, 62, '2018-08-26 13:20:36', 0),
(91, 40171, 17, 1, 1, 16, '2018-08-26 13:20:36', 0),
(92, 40171, 17, 1, 1, 15, '2018-08-26 13:20:36', 0),
(93, 40171, 17, 1, 1, 14, '2018-08-26 13:20:36', 0),
(94, 40171, 17, 1, 1, 13, '2018-08-26 13:20:36', 0),
(95, 40171, 17, 1, 1, 12, '2018-08-26 13:20:36', 0),
(96, 40171, 17, 1, 1, 11, '2018-08-26 13:20:36', 0),
(97, 40171, 17, 1, 1, 9, '2018-08-26 13:20:36', 0),
(98, 40171, 17, 1, 1, 30, '2018-08-26 13:20:36', 0),
(99, 40171, 17, 1, 1, 29, '2018-08-26 13:20:36', 0),
(100, 40171, 17, 1, 1, 27, '2018-08-26 13:20:36', 0),
(101, 40171, 17, 1, 1, 28, '2018-08-26 13:20:36', 0),
(102, 40171, 17, 1, 1, 26, '2018-08-26 13:20:36', 0),
(103, 40171, 17, 1, 1, 25, '2018-08-26 13:20:36', 0),
(104, 40171, 17, 1, 1, 24, '2018-08-26 13:20:36', 0),
(105, 40171, 17, 1, 1, 23, '2018-08-26 13:20:36', 0);

-- --------------------------------------------------------

--
-- Table structure for table `delypartners`
--

CREATE TABLE `delypartners` (
  `Id_part` int(10) NOT NULL,
  `Partner` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Logo` varchar(250) NOT NULL,
  `Slider` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delypartners`
--

INSERT INTO `delypartners` (`Id_part`, `Partner`, `Password`, `Address`, `Logo`, `Slider`) VALUES
(1, 'Java House', 'Javahouse', 'Moi Ave,Nairobi', 'http://192.168.43.167/dely/delyimgs/partners/javahouselogo.png', 'http://192.168.43.167/dely/delyimgs/slider/sjavahouse.jpg'),
(2, 'KFC', 'kfc', 'Nairobi, CBD', 'http://192.168.43.167/dely/delyimgs/partners/kfclogo.png', 'http://192.168.43.167/dely/delyimgs/slider/sKFC.jpg'),
(3, 'Chicken Inn', 'chickeninn', 'Nairobi, Moi Avenue', 'http://192.168.43.167/dely/delyimgs/partners/chickeninnlogo.png', 'http://192.168.43.167/dely/delyimgs/slider/schickeninn.jpg'),
(4, 'Subway', 'subway2018', 'Nairobi, Kenyatta Avenue', 'http://192.168.43.167/dely/delyimgs/partners/subwaylogo.png', 'http://192.168.43.167/dely/delyimgs/slider/ssubway.jpg'),
(5, 'Pizza Inn', 'pizzainn', 'Nairobi, Moi Avenue', 'http://192.168.43.167/dely/delyimgs/partners/pizzainnlogo.png', 'http://192.168.43.167/dely/delyimgs/slider/spizzainn.jpg'),
(6, 'Steers', 'steers', 'Nairobi, Muindi Mbingu Street', 'http://192.168.43.167/dely/delyimgs/partners/steerslogo.png', 'http://192.168.43.167/dely/delyimgs/slider/ssteers.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `delypaymethod`
--

CREATE TABLE `delypaymethod` (
  `Id_paymethod` int(10) NOT NULL,
  `Method` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delypaymethod`
--

INSERT INTO `delypaymethod` (`Id_paymethod`, `Method`) VALUES
(1, 'Mpesa'),
(2, 'Airtel Money'),
(3, 'Eazzy Pay');

-- --------------------------------------------------------

--
-- Table structure for table `delysecque`
--

CREATE TABLE `delysecque` (
  `Id_sec` int(5) NOT NULL,
  `Question` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delysecque`
--

INSERT INTO `delysecque` (`Id_sec`, `Question`) VALUES
(1, 'What was your first pets name'),
(2, 'What is your mother\'s middle name'),
(3, 'What is your favourite meal'),
(4, 'What is your favourite restaurant'),
(5, 'What is your favourite music');

-- --------------------------------------------------------

--
-- Table structure for table `delyspecials`
--

CREATE TABLE `delyspecials` (
  `Specials_id` int(11) NOT NULL,
  `Item` int(11) NOT NULL,
  `Partner` int(5) NOT NULL,
  `Specials` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delyspecials`
--

INSERT INTO `delyspecials` (`Specials_id`, `Item`, `Partner`, `Specials`) VALUES
(1, 27, 1, 'http://192.168.43.167/dely/delyimgs/specials/spjavahouse.jpg'),
(2, 57, 2, 'http://192.168.43.167/dely/delyimgs/specials/spKFC.jpg'),
(3, 156, 6, 'http://192.168.43.167/dely/delyimgs/specials/spsteers.png'),
(4, 118, 4, 'http://192.168.43.167/dely/delyimgs/specials/spsubway.png'),
(5, 73, 5, 'http://192.168.43.167/dely/delyimgs/specials/sppizzainn.jpg'),
(6, 158, 3, 'http://192.168.43.167/dely/delyimgs/specials/spchickeninn.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `delytrans`
--

CREATE TABLE `delytrans` (
  `Trans_id` int(20) NOT NULL,
  `Order_num` int(20) DEFAULT NULL,
  `User_id` int(20) NOT NULL,
  `Trans` int(10) NOT NULL,
  `Trans_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delytrans`
--

INSERT INTO `delytrans` (`Trans_id`, `Order_num`, `User_id`, `Trans`, `Trans_date`) VALUES
(1, NULL, 7, 100000, '2018-08-03 17:05:19'),
(2, NULL, 10, 30000, '2018-08-03 17:05:19'),
(3, 65053, 7, -1430, '2018-08-03 17:05:46'),
(4, 15815, 7, -2180, '2018-08-06 14:42:54'),
(5, 46820, 10, -2180, '2018-08-09 13:42:49'),
(6, 14459, 7, -570, '2018-08-20 17:12:58'),
(7, NULL, 15, 50000, '2018-08-22 13:52:21'),
(8, 14615, 15, -2590, '2018-08-22 13:53:07'),
(9, NULL, 16, 20000, '2018-08-26 12:09:16'),
(10, 92912, 16, -2980, '2018-08-26 12:09:38'),
(11, 74949, 16, -1055, '2018-08-26 12:26:03'),
(13, NULL, 17, 50000, '2018-08-26 13:19:02'),
(14, 60319, 17, -1240, '2018-08-26 13:19:14'),
(15, 31379, 17, -9790, '2018-08-26 13:19:54'),
(16, 40171, 17, -25490, '2018-08-26 13:20:33');

-- --------------------------------------------------------

--
-- Table structure for table `delyusers`
--

CREATE TABLE `delyusers` (
  `Id` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` int(15) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Company` int(5) DEFAULT NULL,
  `Secque` int(5) DEFAULT NULL,
  `Secans` varchar(50) DEFAULT NULL,
  `Payment` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delyusers`
--

INSERT INTO `delyusers` (`Id`, `Name`, `Username`, `Password`, `Email`, `Phone`, `Gender`, `Company`, `Secque`, `Secans`, `Payment`) VALUES
(7, 'Dennis korir', 'Korir', 'moonkorir', 'mykorir@gmail.com', 159355786, 'Male', 1, 3, 'hot', 1),
(9, 'Michael Muia', 'Muia', 'muyamine', 'muya@gmail.com', 159632548, 'Male', 2, 3, 'pilau', 1),
(10, 'Diana Kirui', 'Dee', 'dianadee', 'diana@gmail.com', 123456789, 'Female', 2, 1, 'lucky', 3),
(11, 'Brian Siko', 'Siko', 'sikoliko', 'siko@gmail.com', 42659315, 'Male', 1, 3, 'spaghetti', 2),
(12, 'Ranjo Tomno', 'Ranjo', 'ranjodas', 'ranjo@gmail.com', 126897426, 'Male', 2, 5, 'kwangwaru', 3),
(13, 'Shem Nina', 'Nina', 'shemnina', 'shem@gmail.com', 725369863, 'Female', 2, 5, 'despacito', 1),
(14, 'Teddy Odipo', 'Odipo', 'teddyodipo', 'teddy@gmail.com', 715362946, 'Male', 2, 1, 'dog', 1),
(15, 'Mike Muia', 'Mikey', 'qwerty123', 'muia@example.com', 792248212, 'Male', 1, 3, 'karanga chapo\n', 1),
(16, 'Sam Kinyanjui', 'Samkin', '50google', 'samkin813@gmail.com', 707996842, 'Male', 1, 3, 'choma', 1),
(17, 'Tony Tomno', 'Ranjo1', '12341234', 'tomno@example.com', 74743396, 'Male', 1, 1, 'pussy', 3);

-- --------------------------------------------------------

--
-- Table structure for table `itemcat`
--

CREATE TABLE `itemcat` (
  `Cat_id` int(5) NOT NULL,
  `Category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itemcat`
--

INSERT INTO `itemcat` (`Cat_id`, `Category`) VALUES
(1, 'Beverages'),
(2, 'Meals'),
(3, 'Combo');

-- --------------------------------------------------------

--
-- Table structure for table `partrating`
--

CREATE TABLE `partrating` (
  `Rating_id` int(10) NOT NULL,
  `Partner_id` int(10) NOT NULL,
  `User_id` int(10) NOT NULL,
  `Rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partrating`
--

INSERT INTO `partrating` (`Rating_id`, `Partner_id`, `User_id`, `Rating`) VALUES
(1, 1, 9, 4),
(2, 2, 7, 4),
(3, 1, 12, 3),
(4, 2, 12, 2),
(5, 1, 13, 4),
(6, 1, 11, 5),
(8, 2, 9, 3),
(9, 2, 13, 4),
(19, 1, 7, 1),
(20, 2, 10, 5),
(23, 1, 10, 4),
(24, 4, 7, 4),
(25, 5, 7, 4),
(26, 3, 15, 4),
(27, 6, 17, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `delybestsales`
--
ALTER TABLE `delybestsales`
  ADD PRIMARY KEY (`Bestsales_id`),
  ADD KEY `Item` (`Item`),
  ADD KEY `Partner` (`Partner`);

--
-- Indexes for table `delycompanies`
--
ALTER TABLE `delycompanies`
  ADD PRIMARY KEY (`Id_Co`);

--
-- Indexes for table `delyitems`
--
ALTER TABLE `delyitems`
  ADD PRIMARY KEY (`Item_id`),
  ADD KEY `Item_cat` (`Item_cat`),
  ADD KEY `Partner` (`Partner`);

--
-- Indexes for table `delyorders`
--
ALTER TABLE `delyorders`
  ADD PRIMARY KEY (`Order_id`),
  ADD KEY `User_id` (`User_id`),
  ADD KEY `Part_id` (`Part_id`),
  ADD KEY `Item_id` (`Item_id`),
  ADD KEY `Order_num` (`Order_num`),
  ADD KEY `Address` (`Address`);

--
-- Indexes for table `delypartners`
--
ALTER TABLE `delypartners`
  ADD PRIMARY KEY (`Id_part`);

--
-- Indexes for table `delypaymethod`
--
ALTER TABLE `delypaymethod`
  ADD PRIMARY KEY (`Id_paymethod`);

--
-- Indexes for table `delysecque`
--
ALTER TABLE `delysecque`
  ADD PRIMARY KEY (`Id_sec`);

--
-- Indexes for table `delyspecials`
--
ALTER TABLE `delyspecials`
  ADD PRIMARY KEY (`Specials_id`),
  ADD KEY `Item` (`Item`),
  ADD KEY `Partner` (`Partner`);

--
-- Indexes for table `delytrans`
--
ALTER TABLE `delytrans`
  ADD PRIMARY KEY (`Trans_id`),
  ADD UNIQUE KEY `Order_num` (`Order_num`),
  ADD KEY `User_id` (`User_id`);

--
-- Indexes for table `delyusers`
--
ALTER TABLE `delyusers`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Company` (`Company`),
  ADD KEY `Secque` (`Secque`),
  ADD KEY `Payment` (`Payment`);

--
-- Indexes for table `itemcat`
--
ALTER TABLE `itemcat`
  ADD PRIMARY KEY (`Cat_id`);

--
-- Indexes for table `partrating`
--
ALTER TABLE `partrating`
  ADD PRIMARY KEY (`Rating_id`),
  ADD KEY `Partner_id` (`Partner_id`),
  ADD KEY `User_id` (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `delybestsales`
--
ALTER TABLE `delybestsales`
  MODIFY `Bestsales_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `delycompanies`
--
ALTER TABLE `delycompanies`
  MODIFY `Id_Co` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `delyitems`
--
ALTER TABLE `delyitems`
  MODIFY `Item_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;
--
-- AUTO_INCREMENT for table `delyorders`
--
ALTER TABLE `delyorders`
  MODIFY `Order_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
--
-- AUTO_INCREMENT for table `delypartners`
--
ALTER TABLE `delypartners`
  MODIFY `Id_part` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `delypaymethod`
--
ALTER TABLE `delypaymethod`
  MODIFY `Id_paymethod` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `delysecque`
--
ALTER TABLE `delysecque`
  MODIFY `Id_sec` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `delyspecials`
--
ALTER TABLE `delyspecials`
  MODIFY `Specials_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `delytrans`
--
ALTER TABLE `delytrans`
  MODIFY `Trans_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `delyusers`
--
ALTER TABLE `delyusers`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `itemcat`
--
ALTER TABLE `itemcat`
  MODIFY `Cat_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `partrating`
--
ALTER TABLE `partrating`
  MODIFY `Rating_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `delybestsales`
--
ALTER TABLE `delybestsales`
  ADD CONSTRAINT `delybestsales_ibfk_1` FOREIGN KEY (`Item`) REFERENCES `delyitems` (`Item_id`),
  ADD CONSTRAINT `delybestsales_ibfk_2` FOREIGN KEY (`Partner`) REFERENCES `delypartners` (`Id_part`);

--
-- Constraints for table `delyitems`
--
ALTER TABLE `delyitems`
  ADD CONSTRAINT `delyitems_ibfk_1` FOREIGN KEY (`Partner`) REFERENCES `delypartners` (`Id_part`),
  ADD CONSTRAINT `delyitems_ibfk_2` FOREIGN KEY (`Item_cat`) REFERENCES `itemcat` (`Cat_id`);

--
-- Constraints for table `delyorders`
--
ALTER TABLE `delyorders`
  ADD CONSTRAINT `delyorders_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `delyusers` (`Id`),
  ADD CONSTRAINT `delyorders_ibfk_2` FOREIGN KEY (`Part_id`) REFERENCES `delypartners` (`Id_part`),
  ADD CONSTRAINT `delyorders_ibfk_3` FOREIGN KEY (`Item_id`) REFERENCES `delyitems` (`Item_id`),
  ADD CONSTRAINT `delyorders_ibfk_4` FOREIGN KEY (`Address`) REFERENCES `delycompanies` (`Id_Co`);

--
-- Constraints for table `delyspecials`
--
ALTER TABLE `delyspecials`
  ADD CONSTRAINT `delyspecials_ibfk_1` FOREIGN KEY (`Item`) REFERENCES `delyitems` (`Item_id`),
  ADD CONSTRAINT `delyspecials_ibfk_2` FOREIGN KEY (`Partner`) REFERENCES `delypartners` (`Id_part`);

--
-- Constraints for table `delytrans`
--
ALTER TABLE `delytrans`
  ADD CONSTRAINT `delytrans_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `delyusers` (`Id`);

--
-- Constraints for table `delyusers`
--
ALTER TABLE `delyusers`
  ADD CONSTRAINT `delyusers_ibfk_1` FOREIGN KEY (`Company`) REFERENCES `delycompanies` (`Id_Co`),
  ADD CONSTRAINT `delyusers_ibfk_2` FOREIGN KEY (`Secque`) REFERENCES `delysecque` (`Id_sec`),
  ADD CONSTRAINT `delyusers_ibfk_3` FOREIGN KEY (`Payment`) REFERENCES `delypaymethod` (`Id_paymethod`);

--
-- Constraints for table `partrating`
--
ALTER TABLE `partrating`
  ADD CONSTRAINT `partrating_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `delyusers` (`Id`),
  ADD CONSTRAINT `partrating_ibfk_2` FOREIGN KEY (`Partner_id`) REFERENCES `delypartners` (`Id_part`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
