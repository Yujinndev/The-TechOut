-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2023 at 06:53 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `the_tech_out`
--

-- --------------------------------------------------------

--
-- Table structure for table `creators`
--

CREATE TABLE `creators` (
  `ID` int(11) NOT NULL,
  `Fullname` varchar(255) NOT NULL,
  `Role` varchar(255) NOT NULL,
  `About` varchar(1000) NOT NULL,
  `CourseYear` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `creators`
--

INSERT INTO `creators` (`ID`, `Fullname`, `Role`, `About`, `CourseYear`, `Image`) VALUES
(1, 'Mark Eugene Laysa', 'Team Leader', 'I am a tech-savvy individual with a strong passion for software engineering. I am driven to learn and grow in this field, constantly seeking out new opportunities to expand my knowledge and skills. My ultimate goal is to become a successful software engineer in the industry. I am a hard-working and dedicated person who takes great pride in my work and always strives to achieve the best possible results.', 'BSCS-II', 'Mark.png'),
(2, 'John Arnold Oloteo', 'Member', 'I am passionate about technology and always eager to learn more about the latest advancements in the field. I spend my free time browsing the internet and reading about various topics, particularly those related to technology. I am dedicated to personal growth and self-improvement, and believe that learning is a continuous process. I am excited for a career in technology and eager to see where my passion will take me in the future.', 'BSIT-II', 'John.png'),
(3, 'Vhince Cedrick Afroilan', 'Member', 'I have a passion for technology and programming, and I am dedicated to learning as much as I can about the latest advancements in computer science. I am an active person and enjoy playing basketball as a way to unwind and relax. I also have a love for anime and online games, which I enjoy watching and playing during my free time. I believe that my background, education, and interests make me a well-rounded individual.', 'BSCS-II', 'Vhince.png');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_desc` varchar(500) NOT NULL,
  `product_brand` varchar(255) NOT NULL,
  `product_type` varchar(255) NOT NULL,
  `product_stock` varchar(11) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_img-1` varchar(255) NOT NULL,
  `product_img-2` varchar(255) NOT NULL,
  `product_option-1` varchar(255) NOT NULL,
  `product_option-2` varchar(255) NOT NULL,
  `product_option-3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `product_name`, `product_desc`, `product_brand`, `product_type`, `product_stock`, `product_price`, `product_img-1`, `product_img-2`, `product_option-1`, `product_option-2`, `product_option-3`) VALUES
(1, 'RTX 4090 Gaming OC 24GB GDDR6X', 'The RTX 4090 is a beast of a gaming card. It is designed around high performance and delivers it in spades.   It brings an enormous leap in performance, efficiency, and AI-powered graphics. Experience ultra-high performance gaming, incredibly detailed virtual worlds etc.', 'Gigabyte', 'GPU', '2', '121999', 'GigabyteGPU-4090-1.png', 'GigabyteGPU-4090-2.png', 'White', 'Black', 'Pink'),
(2, 'AISURIX GeForce GTX 1660 SUPER GAMING X', 'GeForce GTX 1660 SUPER™ GAMING X ; Interface. PCI Express x16 3.0 ; Core Clocks. Boost: 1830 MHz ; CORES. 1408 Units ; Memory Speed. 14 Gbps ; Memory. 6GB GDDR6.', 'NVIDIA', 'GPU', '5', '19978', 'AISURIX GeForce GTX 1660 SUPER GAMING X.png', 'AISURIX GeForce GTX 1660 SUPER GAMING X(2).png', 'Dual Fan 4gb', 'Dual Fan 6gb', 'Triple-Fan'),
(3, 'MSI Gaming AMD Radeon RX 6600 XT', 'MSI Gaming AMD Radeon RX 6600 XT 128-bit 8GB GDDR6 DP/HDMI Dual Torx Fans FreeSync DirectX 12 VR Ready OC Graphics Card (RX 6600 XT MECH 2X 8G OC', 'AMD', 'GPU', '4', '22970', 'MSI Gaming AMD Radeon RX 6600 XT.png', 'MSI Gaming AMD Radeon RX 6600 XT (2).png', '4gb Dual Fan', '6gb Dual Fan', 'Triple Fan'),
(4, 'Radeon RX 7900 XT', 'The AMD Radeon 7900 XT is a great GPU if you’re looking to game at high refresh rates at 4K resolution.', 'AMD', 'GPU', '3', '64000', 'Radeon RX 7900 XT(2).png', 'Radeon RX 7900 XT.png', '4gb Dual Fan', '6gb Dual Fan', 'Triple Fan'),
(5, 'Radeon RX 7900 XTX', 'The AMD Radeon 7900 XTX is a great GPU if you’re looking to game at high refresh rates at 4K resolution.', 'AMD', 'GPU', '3', '71000', 'Radeon RX 7900 XTX.png', 'Radeon RX 7900 XTX(2).png', '4gb Dual Fan', '6gb Dual Fan', 'Triple Fan'),
(6, 'GeForce RTX 4080', 'The NVIDIA® GeForce RTX™ 4080 delivers the ultra performance and features that enthusiast gamers and creators demand.', 'NVIDIA', 'GPU', '1', '84000', 'GeForce RTX 4080.png', 'GeForce RTX 4080(2).png', '4gb Dual Fan', '6gb Dual', 'Triple'),
(7, 'Gigabyte Z690 Aorus Pro', 'LGA 1700 Intel Z690 ATX Motherboard with DDR5, Quad M.2, PCIe 5.0, USB 3.2 Gen2X2 Type-C, WiFi 6, 2.5GbE LAN', 'Aorus', 'Motherboard', '20', '17995', 'Gigabyte Z690 Aorus Pro.png', 'Gigabyte Z690 Aorus Pro(2).png', 'WI-FI', 'Non WI-FI', 'Version 2'),
(8, 'ASRock Z690 Extreme Wifi 6E', 'LGA 1700 Intel Z690 SATA 6Gb/s DDR4 ATX Intel Motherboard', 'ASRock', 'Motherboard', '15', '10995', 'ASRock Z690 Extreme Wifi 6E.png', 'ASRock Z690 Extreme Wifi 6E(2).png', 'WI-FI', 'Non WI-FI', 'Version 2'),
(9, 'Gigabyte Z690I Aorus Ultra Plus', 'LGA 1700 Intel Z690 SATA 6Gb/s Mini ITX Intel Motherboard', 'Aorus', 'Motherboard', '15', '15895', 'Gigabyte Z690I Aorus Ultra Plus.png', 'Gigabyte Z690I Aorus Ultra Plus(2).png', 'WI-FI', 'Non WI-FI', 'Version 2'),
(10, 'Gigabyte Aorus z690 Tachyon', 'LGA 1700 Intel Z690 EATX Motherboard with DDR5, Quad M.2, PCIe 5.0, USB 3.2 Gen2X2 Type-C, Intel WiFi 6E, Intel 2.5 GbE LAN', 'Aorus', 'Motherboard', '15', '22500', 'Gigabyte Aorus z690 Tachyon.png', 'Gigabyte Aorus z690 Tachyon(2).png', 'WI-FI', 'Non WI-FI', 'Version 2'),
(11, 'MSI MAG B660M Mortar Wifi DDR4', 'LGA 1700 Intel B660 SATA 6Gb/s Micro ATX Intel Motherboard', 'Msi', 'Motherboard', '13', '11150', 'MSI MAG B660M Mortar Wifi DDR4.png', 'MSI MAG B660M Mortar Wifi DDR4(2).png', 'WI-FI', 'Non WI-FI', 'Version 2'),
(12, 'Asus ROG Strix B660-I Gaming WIFI', 'LGA 1700 (Intel 12th & 13th Gen) Mini-ITX Gaming Motherboard (PCIe 5.0, 8+1 power stages, DDR5, WiFi 6, 2.5 Gb LAN, 2xM.2 PCIe 4.0 NVMe SSD support, USB 3.2 Gen 2x2 Type-C)', 'Asus', 'Motherboard', '12', '12950', 'Asus ROG Strix B660-I Gaming WIFI.png', 'Asus ROG Strix B660-I Gaming WIFI(2).png', 'WI-FI', 'Non WI-FI', 'Version 2'),
(13, 'Asus Prime H610M-A D4', 'LGA 1700 (Intel 12th & 13th Gen) mATX Motherboard (PCIe 4.0, DDR4, 2xM.2 slots, 1Gb LAN, DisplayPort/HDMI/D-Sub, USB 3.2 Gen 1 ports, SATA 6 Gbps, COM header, RGB header)', 'Asus', 'Motherboard', '11', '5430', 'Asus Prime H610M-A D4.png', 'Asus Prime H610M-A D4(2).png', 'WI-FI', 'Non WI-FI', 'Version 2'),
(14, 'Asus ROG Maximus XIII Hero', 'LGA 1200 (Intel 11th/10th Gen) ATX Gaming Motherboard (PCIe 4.0, 14+2 Power Stages, DDR4 5333+, Dual 2.5Gb LAN, Thunderbolt 4 Onboard, Bluetooth v5.2, Quad M.2/NVMe SSD, Aura RGB Lighting)', 'Asus', 'Motherboard', '12', '27999', 'Asus ROG Maximus XIII Hero.png', 'Asus ROG Maximus XIII Hero(2).png', 'WI-FI', 'Non WI-FI', 'Version 2'),
(15, 'Corsair Vengeance LPX', 'LPX 16GB (2 x 8GB) DDR4 DRAM 3200MHz C16 Memory Kit', 'Corsair', 'RAM', '5', '4999', 'Corsair Vengeance LPX.png', 'Corsair Vengeance LPX(2).png', 'Black', 'White', 'Gray'),
(16, 'XPG Z1 Memory Modules', ' DDR4 3200MHz (PC4 25600) 16GB (2x8GB) 288-Pin CL16-20-20 Memory Modules', 'XPG', 'RAM', '13', '5750', 'XPG Z1 Memory Modules.png', 'XPG Z1 Memory Module(2).png', 'Black', 'White', 'Red'),
(17, 'OLOy DDR4 RAM', 'OLOy DDR4 RAM 16GB (2x8GB) 3000 MHz CL16 1.35V 288-Pin Desktop Gaming UDIMM', 'OLOy', 'RAM', '123', '4199', 'OLOy DDR4 RAM.png', 'OLOy DDR4 RAM(2).png', 'Black', 'White', 'Gray'),
(18, 'HyperX Fury Black XMP Memory', 'HyperX FURY 32GB (2 x 16GB) 288-Pin DDR4 SDRAM DDR4 3200 (PC4 25600) Desktop Memory Model HX432C16FB3K2/32', 'HyperX', 'RAM', '12', '5750', 'HyperX Fury Black XMP Memory.png', 'HyperX Fury Black XMP Memory(2).png', 'Black', 'White', 'Red'),
(19, 'Silicon Power XPOWER Turbine', 'DDR4 RAM 16GB (8GBx2) Turbine 3200MHz (PC4 25600) 288-pin CL16 1.35V UDIMM Desktop Memory Module (SP016GXLZU320BDA)', 'XPOWER', 'RAM', '12', '4499', 'Silicon Power XPOWER Turbine.png', 'Silicon Power XPOWER Turbine(2).png', 'Black', 'White', 'Red'),
(20, 'PNY XLR8 Epic-X Memory', '32GB Kit (2x16GB) XLR8 Gaming EPIC-X RGB DDR4 3600MHz', 'PNY', 'RAM', '12', '5499', 'PNY XLR8 Epic-X Memory.png', 'PNY XLR8 Epic-X Memory(2).png', 'Black', 'White', 'Gray'),
(21, 'Crucial Ballistix RGB 16GB DDR4', 'Crucial Ballistix RGB 3200 MHz DDR4 16GB (8GBx2) 3200MHz DRAM Desktop Gaming Memory RAM Kit', 'Crucial Ballistix', 'RAM', '12', '6000', 'Crucial Ballistix RGB 16GB DDR4.png', 'Crucial Ballistix RGB 16GB DDR4(2).png', 'White', 'Black', 'Red'),
(22, 'Kingston Technology HyperX Impact', '8GB 2666MHz DDR4 CL15 260-Pin SODIMM Laptop Memory (HX426S15IB2/8)', 'HyperX', 'RAM', '51', '5720', 'Kingston Technology HyperX Impact.png', 'Kingston Technology HyperX Impact(2).png', 'Red', 'White', 'Black'),
(23, 'Intel Core i5-12400', 'CPU Type: Intel Core i5 /CPU Model: 12400 /Socket: 1700 /Architecture: Alder Lake/ Manufacturing Process Cores & Clocks /No. of Cores: 6 Core/ No. of Threads: 12 Core/ Ratio: 30 x/ Clock Speed: 2.5 GHz/\r\n Turbo Speed: 4.4 GHz', 'Intel', 'CPU', '12', '17456', 'Intel Core i5-12400.png', 'Intel Core i5-12400(2).png', 'Box + Fan', 'Tray', 'Box'),
(24, 'AMD Ryzen 5 5600X', '6-CORE 12-THREAD 3.70-4.60GHZ PROCESSOR BOXED > (MUST BE BOUGHT WITH B550 OR HIGHER MOTHERBOARD)', 'AMD', 'CPU', '2', '10895', 'AMD Ryzen 5 5600X.png', 'AMD Ryzen 5 5600X(2).png', 'Box', 'Box + Fan', 'Tray'),
(25, 'Intel Core i9 13900K', 'Product Collection13th Generation Intel Core i9 Processors | Processor Number i9-13900K | Launch Date Q4\'22 | Lithography Intel 7 | Total Cores 24 | Number of Performance-cores 8 | Number of Efficient-cores 16 | Total Threads 32 | Max Turbo Frequency 5.80 GHz | Total L2 Cache 32 MB | Processor Base Power 125 W | Maximum Turbo Power 253 W', 'Intel', 'CPU', '23', '38500', 'Intel Core i9 13900K.png', 'Intel Core i9 13900K(2).png', 'Box', 'Tray', 'Box + Fan'),
(26, 'AMD Ryzen 9 7950X', '16-Core, 32-Thread Unlocked Desktop Processor', 'AMD', 'CPU', '21', '43650', 'AMD Ryzen 9 7950X.png', 'AMD Ryzen 9 7950X(2).png', 'Box + Fan', 'Tray', 'Box'),
(27, 'Intel Core i7 13700K', ' Desktop Processor 16 cores (8 P-cores + 8 E-cores) 30M Cache, up to 5.4 GHz', 'Intel', 'CPU', '6', '26950', 'Intel Core i7 13700K.png', 'Intel Core i7 13700K(2).png', 'Box', 'Box + Fan', 'Tray'),
(28, 'AMD Ryzen 7  5800X3D', '8-core, 16-Thread Desktop Processor with AMD 3D V-Cache™ Technology', 'AMD', 'CPU', '9', '22460', 'AMD Ryzen 7  5800X3D.png', 'AMD Ryzen 7  5800X3D(2).png', 'Tray', 'Box + Fan', 'Box'),
(29, 'Intel Core i5-13600K', 'Desktop Processor 14 cores (6 P-cores + 8 E-cores) 24M Cache, up to 5.1 GHz', 'Intel', 'CPU', '9', '20480', 'Intel Core i5-13600K.png', 'Intel Core i5-13600K(2).png', 'Box', 'Tray', 'Box + Fan'),
(30, 'AMD Ryzen 5 7600X', ' 6-Core, 12-Thread Unlocked Desktop Processor', 'AMD', 'CPU', '12', '20495', 'AMD Ryzen 5 7600X.png', 'AMD Ryzen 5 7600X(2).png', 'Box', 'Box + Fan', 'Tray'),
(31, 'Intel Core i3-12100', 'Intel Core i3-12100F Desktop Processor 4 (4P-0E) Cores Up to 4.3 GHz Turbo Frequency LGA1700 600 Series Chipset 58W Processor Base Power', 'Intel', 'CPU', '8', '9100', 'Intel Core i3-12100.png', 'Intel Core i3-12100(2).png', 'Box + Fan', 'Tray', 'Box'),
(32, 'AMD Ryzen 5 5600G', '6-Core 12-Thread Unlocked Desktop Processor with Radeon Graphics', 'AMD', 'CPU', '2', '7799', 'AMD Ryzen 5 5600G.png', 'AMD Ryzen 5 5600G(2).png', 'Box + Fan', 'Box', 'Tray'),
(33, 'Dell Alienware AW3423DW', 'The world\'s first QD-OLED gaming monitor. Featuring infinite contrast ratio and VESA DisplayHDR TrueBlack 400 for remarkably vivid colors and visuals bursting to life.', 'Dell', 'Monitor', '34', '114300', 'Dell Alienware AW3423DW.png', 'Dell Alienware AW3423DW(2).png', '34 inches', '27 inches', '24 inches'),
(34, 'Gigabyte M32U', ' 31.5\" 16:9 4K 144 Hz FreeSync IPS Gaming Monitor', 'Gigabyte', 'Monitor', '42', '42995', 'Gigabyte M32U.png', 'Gigabyte M32U(2).png', '31.5 inches', '27 inches', '24 inches'),
(35, 'Dell S2721QS', ' Monitor 27\" 4K UltraHD 3840 x 2160 W-LED IPS, 4ms Response time, 60 Hz Max refresh rate', 'Dell', 'Monitor', '42', '25000', 'Dell S2721QS.png', 'Dell S2721QS(2).png', '27 inches', '24 inches', '21 inches'),
(36, 'HP X24ih', '23.8-inch FHD 144hz Gaming Monitor', 'HP', 'Monitor', '2', '11050', 'HP X24ih.png', 'HP X24ih(2).png', '23.8 inches', ' 21 inches', '27 inches'),
(37, 'Samsung Odyssey G7', '31.5\" 16:9 240 Hz Curved VA G-SYNC HDR Gaming Monitor', 'Samsung', 'Monitor', '467', '34899', 'Samsung Odyssey G7.png', 'Samsung Odyssey G7(2).png', '31.5 inches', '29 inches', '24 inches'),
(38, 'LG 27GP850-B', 'Ultragear Gaming Monitor 27” QHD (2560 x 1440) Nano IPS Display, 1ms Response Tim, 165Hz Refresh Rate, NVIDIA G-SYNC Compatible, AMD FreeSync Premium, Tilt/Height/Pivot Adjustable Stand', 'LG', 'Monitor', '5', '24450', 'LG 27GP850-B.png', 'LG 27GP850-B(2).png', '27 inches', '24 inches', '21 inches'),
(39, 'ViewSonic XG2431', '24” 240Hz 0.5ms MPRT Response Time Blur Busters Approved 2.0 Certified Gaming Monitor', 'ViewSonic', 'Monitor', '253', '19450', 'ViewSonic XG2431.png', 'ViewSonic XG2431(2).png', '24 inches', '27 inches', '21 inches'),
(40, 'Samsung SSD 860 Evo 2.5” SATA III 500GB', 'Innovative V-NAND Technology with Enhanced Read/Write Performance.', 'Samsung', 'SSD', '3', '4549', 'Samsung SSD 860 Evo 2.5” SATA III 500GB.png', 'Samsung SSD 860 Evo 2.5” SATA III 500GB(2).png', 'Black ', 'White', 'Red'),
(41, 'Western Digital Blue 3D NAND SATA SSD-500GB', 'A WD Blue 3D NAND SATA SSD uses 3D NAND technology not only for higher capacities (up to 4TB in the 2.5\" 7mm form factor1) than the previous generation WD Blue SSDs, but also to help reduce cell-to-cell interference for enhanced reliability. ', 'Western Digital', 'SSD', '5', '3780', 'Western Digital Blue 3D NAND SATA SSD-500GB.png', 'Western Digital Blue 3D NAND SATA SSD-500GB(2).png', 'Black', 'White', 'Gray'),
(42, 'SanDisk Ultra 3D SSD-500GB', 'Internal SSD - SATA III 6 Gb/s, 2.5 Inch /7 mm, Up to 560 MB/s - SDSSDH3-500G-G25', 'SanDisk', 'SSD', '6', '3399', 'SanDisk Ultra 3D SSD-500GB.png', 'SanDisk Ultra 3D SSD-500GB(2).png', 'Black', 'White', 'Red'),
(43, 'Samsung SSD 850 EVO 2.5’ SATA III 500GB', 'Incredible Sequential Read/Write Performance : Up to 540MB/s and 520MB/s Respectively, and Random Read/Write IOPS Performance : Up to 98K and 90K Respectively', 'Samsung', 'SSD', '8', '6382', 'Samsung SSD 850 EVO 2.5’ SATA III 500GB.png', 'Samsung SSD 850 EVO 2.5’ SATA III 500GB(2).png', 'Black', 'White', 'Pink'),
(44, 'Crucial MX500 500GB SATA 2.5’ Internal SSD', 'Sequential reads/writes up to 560/510 MB/s and random reads/writes up to 95K/90K on all file types.', 'Crucial', 'SSD', '9', '6999', 'Crucial MX500 500GB SATA 2.5’ Internal SSD.png', 'Crucial MX500 500GB SATA 2.5’ Internal SSD(2).png', 'White', 'Black ', 'Green'),
(45, 'Corsair CX450', ' 450 Watt 80 PLUS® Bronze Certified ATX PSUs', 'Corsair', 'PSU', '90', '2999', 'Corsair CX450.png', 'Corsair CX450(2).png', '450 Watts', '550 Watts ', '650 Watts'),
(46, 'Corsair CX550F RGB', '550 Watt 80 Plus® Bronze Certified Fully Modular RGB PSU', 'Corsair', 'PSU', '9', '4720', 'Corsair CX550F RGB.png', 'Corsair CX550F RGB(2).png', '550 Watts', '450 Watts', '400 Watts'),
(47, 'Corsair RM550x 2021', '550 Watt 80 PLUS Gold Fully Modular ATX PSU', 'Corsair', 'PSU', '29', '6500', 'Corsair RM550x 2021.png', 'Corsair RM550x 2021(2).png', '550 Watts', '450 Watts', '400 Watts'),
(48, 'XPG Core Reactor 650W', '80 Plus Gold Certified. High efficiency operation with low noise level. 120MM FDB fan with intelligent fan control.', 'XPG ', 'PSU', '34', '5999', 'XPG Core Reactor 650W.png', 'XPG Core Reactor 650W(2).png', '650 Watts', '550 Watts', '450Watts'),
(49, 'Cooler Master V750 Gold V2', '80 Plus Gold Certified Half-bridge LLC Resonant Converter And DC-DC Technology Silent 135mm FDB Fan 40% Semi-fanless Mode With Hybrid Switch 16AWG PCIE Cables', 'Cooler Master ', 'PSU', '43', '11995', 'Cooler Master V750 Gold V2.png', 'Cooler Master V750 Gold V2(2).png', '750 Watts', '600 Watts', '450 Watts'),
(50, 'EVGA Super NOVA 850 G7', '80 Plus Gold 850W, Fully Modular, Eco Mode with FDB Fan, 10 Year Warranty, Includes Power ON Self Tester, Compact 130mm Size, Power Supply 220-G7-0850-X1', 'EVGA', 'PSU', '43', '10150', 'EVGA Super NOVA 850 G7.png', 'EVGA Super NOVA 850 G7(2).png', '850 Watts', '750 Watts', '600 Watts'),
(51, 'Corsair RM1000x(2021)', '80 PLUS Gold Fully Modular ATX PSU', 'Corsair', 'PSU', '46', '11995', 'Corsair RM1000x(2021).png', 'Corsair RM1000x(2021)(2).png', '600 Watts', '550 Watts', '450 Watts'),
(52, 'Corsair Ax1600i', 'Delivers 1600W of continuous ultra-stable 80 PLUS Titanium efficiency power 100% 105°C Japanese capacitors top-specification internal components and digital design deliver over 94% efficiency The only enthusiast PSU to use Totem-pole PFC Gallium Nitride (GaN) transistors for superior efficiency in a smaller form-factor over traditional silicon parts', 'Corsair', 'PSU', '09', '5680', 'Corsair Ax1600i.png', 'Corsair Ax1600i(2).png', '1600 Watts', '800 Watts', '600 Watts'),
(53, 'Corsair SF750', 'Harness 750 continuous watts In SFX form, perfect for the most power-dense small-form-factor PCs Ensures ultra-high efficiency operation for less excess heat and lower operating costs Flexible Para cord sleeved cables make routing and cable management incredibly easy', 'Corsair', 'PSU', '9', '3750', 'Corsair SF750.png', 'Corsair SF750(2).png', '750 Watts', '600 Watts', '450Watts'),
(54, 'Noctua NF-S12B redux-1200', 'The new redux edition reissues this award-winning model in a streamlined, accessibly priced package that has been reduced to the essential core: the NF-S12B premium fan. Its industry grade SSO-Bearing bearing, over 150.000 hours MTTF rating and full 6 years manufacturer’s warranty make the NF-S12B redux a proven premium choice that provides trusted Noctua quality at an attractive price point', 'Noctua', 'PC Fan', '9', '1300', 'Noctua NF-S12B redux-1200.png', 'Noctua NF-S12B redux-1200(2).png', 'RGB', 'Black', '	 White'),
(55, 'Arctic F12-120', '120 mm Standard Case Fan, Value Pack, Low Noise, Very Quiet Motor, Computer, Fan Speed: 1350 RPM', 'Arctic', 'PC Fan', '78', '656', 'Arctic F12-120.png', 'Arctic F12-120(2).png', 'RGB', 'Black', '	 White'),
(56, 'Cooler Master MF200R ARGB', '200 mm Addressable RGB Fan,5V/3-PIN,NOT Work with 4-PIN RGB or Standard RGB+12V: Case Fans', 'Cooler Master', 'PC Fan', '97', '1500', 'Cooler Master MF200R ARGB.png', 'Cooler Master MF200R ARGB(2).png', 'RGB', 'Black', '	 White'),
(57, 'Corsair iCUE QL120 RGB ', 'Four lighting Zones and 34 individually addressable RGB LEDs radiate spellbinding colors and effects to enhance your Corsair QL rgb-cooled system..Lower Your System Temperatures : Powerful fan speeds combined with PWM control ensures that the fans cool quickly and efficiently when needed but stay quiet under low loads. 120mm – up to 1,500 RPM and 41.8 CFM of airflow, 140mm – up to 1,250 RPM and 50.2 CFM of air flow', 'Corsair', 'PC Fan', '8', '1850', 'Corsair iCUE QL120 RGB.png', 'Corsair iCUE QL120 RGB(2).png', 'RGB', 'Black	', '	 White'),
(58, 'Cooler Master MasterFan MF120 Halo', 'Duo-Ring ARGB 3-Pin Fan, 24 Independently LEDS, 120mm PWM Static Pressure Fan, Absorbing Pads for Computer Case & Liquid Radiator', 'Cooler Master', 'PC Fan', '90', '1135', 'Cooler Master MasterFan MF120 Halo.png', 'Cooler Master MasterFan MF120 Halo(2).png', 'RGB', 'Black', '	 White'),
(59, 'Phanteks PH-F140MP', 'The PH-F140MP, 140mm high static pressure premium fans from Phanteks is designed with the Maelström concept technology. The fans have PWM built-in, creating less cables which allows users to make speed adjustments from 500-1600RPM.', 'Phanteks', 'PC Fan', '09', '892', 'Phanteks PH-F140MP.png', 'Phanteks PH-F140MP(2).png', 'Black', 'RGB', 'White'),
(60, 'Phanteks T30-120', 'The Phanteks T30-120 fan has undergone years of development and extensive testing in close collaboration with SUNON, a leading fan manufacturer. Combined with Phanteks’ expertise in chassis and air/water cooler design, we created the ultimate PC cooling fan. The T30-120 features the best aerodynamic blade design, 30mm thick frame, and is made from quality industrial-grade components to achieve a perfect balance between high cooling performance, low noise operation, and excellent sound quality.', 'Phanteks', 'PC Fan', '21', '1999', 'Phanteks T30-120.png', 'Phanteks T30-120(2).png', 'RGB', 'Black', 'White');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `OrderID` int(11) NOT NULL,
  `CustomerName` varchar(255) NOT NULL,
  `CustomerEmail` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Item` varchar(255) NOT NULL,
  `Variant` varchar(255) NOT NULL,
  `Quantity` varchar(255) NOT NULL,
  `Unitprice` varchar(255) NOT NULL,
  `Totalprice` varchar(255) NOT NULL,
  `DateTimeOrdered` datetime NOT NULL DEFAULT current_timestamp(),
  `Mop` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`OrderID`, `CustomerName`, `CustomerEmail`, `Address`, `Item`, `Variant`, `Quantity`, `Unitprice`, `Totalprice`, `DateTimeOrdered`, `Mop`) VALUES
(1, 'Mark Eugene Laysa', 'markeugene.laysa@lorma.edu', 'Tagudin, Ilocos Sur 2714', 'AISURIX GeForce GTX 1660 SUPER GAMING X', ' Dual Fan 4gb', '5', '19978', '99890', '2023-01-17 13:42:21', 'Cash on Delivery'),
(2, 'Mark Eugene Laysa', 'markeugene.laysa@lorma.edu', 'Tagudin, Ilocos Sur 2714', 'MSI Gaming AMD Radeon RX 6600 XT', '6gb Dual Fan', '1', '22970', '22970', '2023-01-17 13:43:51', 'Cash on Delivery'),
(3, 'Mark Eugene Laysa', 'markeugene.laysa@lorma.edu', 'Tagudin, Ilocos Sur 2714', 'MSI Gaming AMD Radeon RX 6600 XT', 'Triple Fan', '1', '22970', '22970', '2023-01-17 13:46:00', 'Cash on Delivery');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `homeAddress` varchar(255) NOT NULL,
  `emailAdd` varchar(255) NOT NULL,
  `passWord` varchar(255) NOT NULL,
  `created_on` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `fullName`, `homeAddress`, `emailAdd`, `passWord`, `created_on`) VALUES
(1, 'Mark Eugene Laysa', 'Tagudin, Ilocos Sur 2714', 'markeugene.laysa@lorma.edu', 'admin123', '2023-01-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `creators`
--
ALTER TABLE `creators`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `email_add` (`emailAdd`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `creators`
--
ALTER TABLE `creators`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
