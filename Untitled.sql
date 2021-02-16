CREATE TABLE `users` (
  `id` int(20) PRIMARY KEY NOT NULL,
  `userType` varchar(191) NOT NULL,
  `image` varchar(191),
  `class_id` int(11),
  `group_id` int(11),
  `section_id` int(11),
  `createdBy` int(11) NOT NULL,
  `updatedBy` int(11) NOT NULL,
  `created_at` timestamp,
  `updated_at` timestamp
);

CREATE TABLE `class` (
  `id` int(20) PRIMARY KEY NOT NULL,
  `name` varchar(191),
  `created_at` timestamp,
  `updated_at` timestamp
);

CREATE TABLE `groups` (
  `id` int(20) PRIMARY KEY NOT NULL,
  `name` varchar(191) NOT NULL,
  `class_id` int(11) NOT NULL,
  `created_at` timestamp,
  `updated_at` timestamp
);

CREATE TABLE `sections` (
  `id` int(20) PRIMARY KEY NOT NULL,
  `name` varchar(191) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created_at` timestamp,
  `updated_at` timestamp
);

CREATE TABLE `subjects` (
  `id` int(20) PRIMARY KEY NOT NULL,
  `name` varchar(191) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created_at` timestamp,
  `updated_at` timestamp
);

CREATE TABLE `exams` (
  `id` int(20) PRIMARY KEY NOT NULL,
  `name` varchar(191),
  `year` year,
  `class_id` int(11),
  `created_at` timestamp,
  `updated_at` timestamp
);

CREATE TABLE `results` (
  `id` int(20) PRIMARY KEY NOT NULL,
  `subject_id` int(11),
  `student_id` int(11),
  `marks` double,
  `results` double,
  `grade` varchar(12),
  `created_at` timestamp,
  `updated_at` timestamp
);


