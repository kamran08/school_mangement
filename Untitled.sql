CREATE TABLE `users` (
  `id` int(20) PRIMARY KEY NOT NULL,
  `userType` varchar(191) NOT NULL,
  `image` varchar(191),
  `class_id` int(11),
  `group_id` int(11),
  `section_id` int(11),
  `createdBy` int(11) NOT NULL,
  `updatedBy` int(11) NOT NULL,
  `created_at` timestamp DEFAULT NULL,
  `updated_at` timestamp DEFAULT NULL
);

CREATE TABLE `class` (
  `id` int(20) PRIMARY KEY NOT NULL,
  `name` varchar(191),
  `created_at` timestamp DEFAULT NULL,
  `updated_at` timestamp DEFAULT NULL
);

CREATE TABLE `groups` (
  `id` int(20) PRIMARY KEY NOT NULL,
  `name` varchar(191) NOT NULL,
  `class_id` int(11) NOT NULL,
  `created_at` timestamp DEFAULT NULL,
  `updated_at` timestamp DEFAULT NULL
);

CREATE TABLE `sections` (
  `id` int(20) PRIMARY KEY NOT NULL,
  `name` varchar(191) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created_at` timestamp DEFAULT NULL,
  `updated_at` timestamp DEFAULT NULL
);

CREATE TABLE `subjects` (
  `id` int(20) PRIMARY KEY NOT NULL,
  `name` varchar(191) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created_at` timestamp DEFAULT NULL,
  `updated_at` timestamp DEFAULT NULL
);

CREATE TABLE `exams` (
  `id` int(20) PRIMARY KEY NOT NULL,
  `name` varchar(191),
  `year` year,
  `class_id` int(11),
  `created_at` timestamp DEFAULT NULL,
  `updated_at` timestamp DEFAULT NULL
);

CREATE TABLE `results` (
  `id` int(20) PRIMARY KEY NOT NULL,
  `subject_id` int(11),
  `student_id` int(11),
  `marks` double,
  `results` double,
  `grade` varchar(12),
  `created_at` timestamp DEFAULT NULL,
  `updated_at` timestamp DEFAULT NULL
);

ALTER TABLE `users` ADD FOREIGN KEY (`class_id`) REFERENCES `class` (`id`);

ALTER TABLE `groups` ADD FOREIGN KEY (`id`) REFERENCES `users` (`group_id`);

ALTER TABLE `groups` ADD FOREIGN KEY (`class_id`) REFERENCES `class` (`id`);

ALTER TABLE `sections` ADD FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`);

ALTER TABLE `sections` ADD FOREIGN KEY (`id`) REFERENCES `users` (`section_id`);

ALTER TABLE `results` ADD FOREIGN KEY (`student_id`) REFERENCES `users` (`id`);

ALTER TABLE `groups` ADD FOREIGN KEY (`id`) REFERENCES `subjects` (`group_id`);

ALTER TABLE `class` ADD FOREIGN KEY (`id`) REFERENCES `exams` (`class_id`);

ALTER TABLE `subjects` ADD FOREIGN KEY (`id`) REFERENCES `results` (`subject_id`);
