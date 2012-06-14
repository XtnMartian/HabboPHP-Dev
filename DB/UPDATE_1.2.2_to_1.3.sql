INSERT INTO `habbophp_config` VALUES(58, 'winwin', '10000');
INSERT INTO `habbophp_config` VALUES(59, 'winwinprix', '100');
INSERT INTO `habbophp_config` VALUES(59, 'server_base', '100');

CREATE TABLE `habbophp_shop_rares` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `oid` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `prix` int(9) NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;