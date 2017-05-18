

Create table tacgia(
	`id` int(11) NOT NULL,
	`ten` varchar(255) NULL,
	`email` varchar(255) NOT NULL,
	`ngaysinh` date NULL
)

Alter table tacgia(
	ADD PRIMARY KEY `id`
)


INSERT INTO `tacgia` (`id`, `ten`, `email`, `ngaysinh`) VALUES 
('1', 'Khoa Phạm', 'khoaphamtraining@gmail.com', '2017-05-10')
