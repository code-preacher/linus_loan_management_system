
CREATE TABLE `admin` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `admin` (`id`, `name`, `username`, `password`) VALUES
(1, 'Mr.Linus', 'linus', '123456'),
(2, 'Sammy', 'oche', '123456');



CREATE TABLE `client` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `sex` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `occupation` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `number` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `client` (`id`, `name`, `sex`, `address`, `occupation`, `email`, `number`, `date`) VALUES
(1, 'oche', 'male', 'texas', 'software developer', 'gboko@otukpo.makurdi', '911', '10/12/18 @ 3:44 PM'),
(2, 'cythia', 'female', 'china', 'politician', 'cythia@issagirl.com', '404', '10/12/18 @ 3:46 PM'),
(3, 'ice', 'female', 'efute esate', 'student', 'gboko@otukpo.makurdi', '08189674536', '10/12/18 @ 11:10 PM');



CREATE TABLE `loan` (
  `id` int(200) NOT NULL,
  `client_name` varchar(200) NOT NULL,
  `borrower` varchar(200) NOT NULL,
  `amount` double NOT NULL,
  `profit` double NOT NULL,
  `total` double NOT NULL,
  `loan_stat` int(1) NOT NULL,
  `duration_from` varchar(200) NOT NULL,
  `duration_to` varchar(200) NOT NULL,
  `date_issued` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `loan` (`id`, `client_name`, `borrower`, `amount`, `profit`, `total`, `loan_stat`, `duration_from`, `duration_to`, `date_issued`) VALUES
(1, 'cythia', 'linus', 2000, 200, 2200, 1, '2018-12-18', '2018-12-21', '10/12/18 @ 4:57 PM'),
(2, 'ice', 'oche', 6000, 600, 6600, 0, '2018-12-18', '2018-12-20', '10/12/18 @ 11:15 PM'),
(3, 'cythia', 'joe', 5000, 500, 5500, 0, '2018-12-18', '2018-12-21', '18/12/18 @ 11:18 PM'),
(4, 'oche', 'linus', 67000, 670, 67670, 1, '2018-12-27', '2018-12-30', '28/12/18 @ 2:35 AM');


ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `loan`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `admin`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `client`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `loan`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
