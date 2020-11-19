-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2020 at 11:29 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(8, 'Laravel', 'laravel', '2020-11-12 20:49:08', '2020-11-12 20:49:08'),
(9, 'Codeigniter', 'codeigniter', '2020-11-12 20:49:19', '2020-11-12 20:49:19'),
(10, 'SQL', 'sql', '2020-11-12 20:49:32', '2020-11-12 20:49:32'),
(11, 'Hackerrank', 'hackerrank', '2020-11-12 20:49:54', '2020-11-12 20:49:54'),
(12, 'Catatan', 'catatan', '2020-11-12 20:50:07', '2020-11-12 20:50:07');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2020_11_09_143823_create_post_tag_table', 5),
(8, '2014_10_12_000000_create_users_table', 6),
(9, '2014_10_12_100000_create_password_resets_table', 6),
(10, '2020_11_03_020733_create_categories_table', 6),
(11, '2020_11_07_140150_create_tags_table', 6),
(12, '2020_11_08_161426_create_posts_table', 6),
(13, '2020_11_09_013737_add_new_slug_posts_table', 6),
(14, '2020_11_09_151004_create_posts_tag_table', 7),
(15, '2020_11_09_151606_create_post_tag_table', 8),
(16, '2020_11_09_151701_create_post_tag_table', 9),
(17, '2020_11_10_140548_tambah_softdelete_ke_post', 10),
(18, '2020_11_11_004243_tambah_field_user_post', 11),
(19, '2020_11_11_115202_add_tipe_user', 12);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `judul`, `category_id`, `content`, `gambar`, `created_at`, `updated_at`, `slug`, `deleted_at`, `users_id`) VALUES
(5, 'Alamak Ini kedua', 5, '<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>didi pa didi</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Yang boneng ah</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>oke</p>', 'public/uploads/posts/16050152022.jpg', '2020-11-09 16:54:25', '2020-11-12 20:46:48', 'alamak-ini-kedua', '2020-11-12 20:46:48', 1),
(6, 'Ini coba user ID', 3, 'Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu sommun paroles. Ma quande lingues coalesce, li grammatica del resultant lingue es plu simplic e regulari quam ti del coalescent lingues. Li nov lingua franca va esser plu simplic e regulari quam li existent Europan lingues. It va esser tam simplic quam Occidental in fact, it va esser Occidental. A un Angleso it va semblar un simplificat Angles, quam un skeptic Cambridge amico dit me que Occidental es.Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu sommun paroles.', 'public/uploads/posts/160505589212.jpg', '2020-11-10 17:51:32', '2020-11-12 20:46:50', 'ini-coba-user-id', '2020-11-12 20:46:50', 1),
(7, 'Didi pa didi', 3, 'The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz. Brick quiz whangs jumpy veldt fox. Bright vixens jump; dozy fowl quack. Quick wafting zephyrs vex bold Jim. Quick zephyrs blow, vexing daft Jim. Sex-charged fop blew my junk TV quiz. How quickly daft jumping zebras vex. Two driven jocks help fax my big quiz. Quick, Baz, get my woven flax jodhpurs! \"Now fax quiz Jack!\" my brave ghost pled. Five quacking zephyrs jolt my wax bed. Flummoxed by job, kvetching W. zaps Iraq. Cozy sphinx waves quart jug of bad milk. A very bad quack might jinx zippy fowls. Few quips galvanized the mock jury box. Quick brown dogs jump over the lazy fox. The jay, pig, fox, zebra, and my wolves quack! Blowzy red vixens fight for a quick jump. Joaquin Phoenix was gazed by MTV for luck. A wizard’s job is to vex chumps quickly in fog. Watch \"Jeopardy!\", Alex Trebek\'s fun TV quiz game. Woven silk pyjamas exchanged for blue quartz. Brawny gods just', 'public/uploads/posts/160505679310.jpg', '2020-11-10 18:06:33', '2020-11-12 20:46:53', 'didi-pa-didi', '2020-11-12 20:46:53', 2),
(8, 'post pertama', 3, 'abc def ghi jkl mno pqrs tuv wxyz ABC DEF GHI JKL MNO PQRS TUV WXYZ !\"§ $%& /() =?* \'<> #|; ²³~ @`´ ©«» ¤¼× {} abc def ghi jkl mno pqrs tuv wxyz ABC DEF GHI JKL MNO PQRS TUV WXYZ !\"§ $%& /() =?* \'<> #|; ²³~ @`´ ©«» ¤¼× {} abc def ghi jkl mno pqrs tuv wxyz ABC DEF GHI JKL MNO PQRS TUV WXYZ !\"§ $%& /() =?* \'<> #|; ²³~ @`´ ©«» ¤¼× {} abc def ghi jkl mno pqrs tuv wxyz ABC DEF GHI JKL MNO PQRS TUV WXYZ !\"§ $%& /() =?* \'<> #|; ²³~ @`´ ©«» ¤¼× {} abc def ghi jkl mno pqrs tuv wxyz ABC DEF GHI JKL MNO PQRS TUV WXYZ !\"§ $%& /() =?* \'<> #|; ²³~ @`´ ©«» ¤¼× {} abc def ghi jkl mno pqrs tuv wxyz ABC DEF GHI JKL MNO PQRS TUV WXYZ !\"§ $%& /() =?* \'<> #|; ²³~ @`´ ©«» ¤¼× {} abc def ghi jkl mno pqrs tuv wxyz ABC DEF GHI JKL MNO PQRS TUV WXYZ !\"§ $%& /() =?* \'<> #|; ²³~ @`´ ©«» ¤¼× {}abc def ghi jkl mno pqrs tuv wxyz ABC DEF GHI', 'public/uploads/posts/16051089986.jpg', '2020-11-11 08:36:38', '2020-11-12 20:46:54', 'post-pertama', '2020-11-12 20:46:54', 1),
(9, 'Post kedua kedua', 2, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,', 'public/uploads/posts/1605109062create Gallery.PNG', '2020-11-11 08:37:42', '2020-11-12 20:46:56', 'post-kedua-kedua', '2020-11-12 20:46:56', 1),
(10, 'Odading Olek', 4, 'adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,', 'public/uploads/posts/1605111869age19.jpg', '2020-11-11 08:38:06', '2020-11-12 20:46:58', 'odading-olek', '2020-11-12 20:46:58', 1),
(11, 'Lima lagi', 4, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a,', 'public/uploads/posts/16051091256.jpg', '2020-11-11 08:38:45', '2020-11-12 20:46:59', 'lima-lagi', '2020-11-12 20:46:59', 1),
(12, 'Lorem rem rerm', 3, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate', 'public/uploads/posts/16051091474 - Copy.jpg', '2020-11-11 08:39:07', '2020-11-12 20:47:01', 'lorem-rem-rerm', '2020-11-12 20:47:01', 1),
(13, 'tiga lagi', 4, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate', 'public/uploads/posts/160510916712.jpg', '2020-11-11 08:39:27', '2020-11-12 20:47:02', 'tiga-lagi', '2020-11-12 20:47:02', 1),
(14, 'Odading Olek adsad', 4, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate', 'public/uploads/posts/160510918012.jpg', '2020-11-11 08:39:40', '2020-11-12 20:47:03', 'odading-olek-adsad', '2020-11-12 20:47:03', 1),
(15, 'Ini adalah nama post baru cuy sdsad', 3, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate', 'public/uploads/posts/16051118421.jpg', '2020-11-11 08:39:55', '2020-11-12 20:47:05', 'ini-adalah-nama-post-baru-cuy-sdsad', '2020-11-12 20:47:05', 1),
(16, 'dasd SDadsa', 1, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate', 'public/uploads/posts/16051092103.jpg', '2020-11-11 08:40:10', '2020-11-12 20:47:07', 'dasd-sdadsa', '2020-11-12 20:47:07', 1),
(17, 'Post paling baru', 3, 'Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem Isi konten lorem', 'public/uploads/posts/1605111927xpertechh.jpeg', '2020-11-11 09:25:27', '2020-11-12 20:47:08', 'post-paling-baru', '2020-11-12 20:47:08', 1),
(18, 'Judul Pake CKEditor', 2, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sem fringilla ut morbi tincidunt augue. Id diam vel quam elementum. Cras semper auctor neque vitae. Blandit cursus risus at ultrices mi tempus imperdiet. Sit amet luctus venenatis lectus magna. Eget aliquet nibh praesent tristique magna sit amet. Suspendisse ultrices gravida dictum fusce. Dui faucibus in ornare quam viverra. Amet porttitor eget dolor morbi non arcu. Sem nulla pharetra diam sit amet. Amet mattis vulputate enim nulla. Pulvinar neque laoreet suspendisse interdum consectetur libero id. Ac tortor vitae purus faucibus ornare suspendisse sed nisi lacus. Pellentesque adipiscing commodo elit at imperdiet dui accumsan sit amet. Hac habitasse platea dictumst vestibulum. Risus at ultrices mi tempus.</p>\r\n\r\n<p>Lorem sed risus ultricies tristique nulla. Eu facilisis sed odio morbi quis commodo odio aenean. Consequat semper viverra nam libero justo laoreet sit. Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis. Arcu cursus vitae congue mauris rhoncus aenean vel elit. Phasellus egestas tellus rutrum tellus. Non nisi est sit amet facilisis magna etiam tempor orci. Sit amet dictum sit amet justo donec. Suspendisse ultrices gravida dictum fusce ut placerat orci nulla. Phasellus vestibulum lorem sed risus ultricies tristique. Quis ipsum suspendisse ultrices gravida dictum fusce ut placerat. Lorem ipsum dolor sit amet. Odio morbi quis commodo odio aenean. Sed egestas egestas fringilla phasellus faucibus scelerisque eleifend. Suspendisse interdum consectetur libero id faucibus nisl tincidunt eget nullam. Adipiscing elit duis tristique sollicitudin nibh sit amet.</p>\r\n\r\n<p>Pulvinar neque laoreet suspendisse interdum consectetur libero. Felis imperdiet proin fermentum leo vel orci porta non. Consequat ac felis donec et. Consectetur adipiscing elit duis tristique sollicitudin nibh. Etiam non quam lacus suspendisse faucibus. Gravida rutrum quisque non tellus orci. Neque volutpat ac tincidunt vitae semper quis. Praesent tristique magna sit amet purus gravida quis. Pharetra diam sit amet nisl suscipit. Facilisi cras fermentum odio eu feugiat pretium. Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis. Id semper risus in hendrerit. Orci sagittis eu volutpat odio facilisis. Etiam sit amet nisl purus in. Lacinia at quis risus sed vulputate odio ut. Nisl tincidunt eget nullam non nisi. Vel pretium lectus quam id leo in vitae. Morbi tincidunt augue interdum velit euismod in pellentesque massa. Ac odio tempor orci dapibus ultrices.</p>\r\n\r\n<p>Viverra aliquet eget sit amet tellus cras adipiscing enim. Quisque id diam vel quam elementum pulvinar etiam non quam. Sed arcu non odio euismod lacinia at quis. Ipsum nunc aliquet bibendum enim facilisis gravida. Tellus integer feugiat scelerisque varius. Turpis egestas maecenas pharetra convallis posuere. Imperdiet dui accumsan sit amet nulla facilisi morbi tempus iaculis. Tellus rutrum tellus pellentesque eu tincidunt tortor aliquam nulla facilisi. Nulla pellentesque dignissim enim sit amet venenatis urna cursus eget. Et leo duis ut diam quam nulla. Libero nunc consequat interdum varius. Nulla pellentesque dignissim enim sit amet venenatis. Tellus integer feugiat scelerisque varius morbi enim nunc faucibus a. Ultrices in iaculis nunc sed augue lacus viverra vitae congue. Turpis egestas sed tempus urna. Ac felis donec et odio pellentesque. Mauris cursus mattis molestie a iaculis at erat.</p>\r\n\r\n<p>Turpis egestas pretium aenean pharetra magna ac placerat vestibulum. Egestas erat imperdiet sed euismod nisi. Massa tempor nec feugiat nisl pretium fusce. Quis imperdiet massa tincidunt nunc. Etiam sit amet nisl purus. Turpis in eu mi bibendum neque egestas congue. Enim nec dui nunc mattis enim ut. Ipsum dolor sit amet consectetur adipiscing elit. Nunc mattis enim ut tellus elementum sagittis vitae et. Neque egestas congue quisque egestas diam in arcu cursus euismod.</p>\r\n\r\n<p>Fermentum leo vel orci porta non pulvinar neque laoreet. Commodo elit at imperdiet dui accumsan sit amet. Turpis massa sed elementum tempus egestas sed. Eget sit amet tellus cras adipiscing. Ridiculus mus mauris vitae ultricies leo integer malesuada. Nibh mauris cursus mattis molestie a iaculis. Cursus vitae congue mauris rhoncus aenean. Sed viverra ipsum nunc aliquet bibendum enim facilisis gravida neque. Rhoncus dolor purus non enim praesent elementum facilisis leo. Est ultricies integer quis auctor elit sed vulputate. Sed augue lacus viverra vitae. Urna cursus eget nunc scelerisque viverra mauris in. Cursus turpis massa tincidunt dui ut ornare lectus sit. Sem fringilla ut morbi tincidunt augue interdum velit euismod in.</p>\r\n\r\n<p>Et pharetra pharetra massa massa ultricies mi quis hendrerit. Id porta nibh venenatis cras sed felis eget velit aliquet. Mi ipsum faucibus vitae aliquet nec. Ipsum faucibus vitae aliquet nec ullamcorper sit amet risus nullam. Suspendisse sed nisi lacus sed. Ipsum a arcu cursus vitae congue. Placerat vestibulum lectus mauris ultrices eros in cursus turpis. Lectus urna duis convallis convallis tellus id interdum velit laoreet. Elit eget gravida cum sociis. Maecenas ultricies mi eget mauris pharetra et ultrices. Tortor aliquam nulla facilisi cras. Convallis a cras semper auctor neque. Eget nunc scelerisque viverra mauris in. Ultricies integer quis auctor elit sed vulputate.</p>\r\n\r\n<p>Nulla posuere sollicitudin aliquam ultrices sagittis. Nunc lobortis mattis aliquam faucibus. Sem et tortor consequat id porta. Habitant morbi tristique senectus et. Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque habitant. Diam sollicitudin tempor id eu nisl nunc. Ullamcorper malesuada proin libero nunc consequat interdum varius. Mi in nulla posuere sollicitudin aliquam. Sed enim ut sem viverra aliquet eget sit amet tellus. Ultricies integer quis auctor elit. Amet nisl purus in mollis. Dolor sed viverra ipsum nunc aliquet bibendum. Non nisi est sit amet facilisis magna etiam.</p>\r\n\r\n<p>Suspendisse in est ante in nibh mauris cursus mattis molestie. Enim nec dui nunc mattis. Duis at tellus at urna condimentum mattis pellentesque. Nunc vel risus commodo viverra maecenas accumsan lacus vel. Interdum consectetur libero id faucibus. Et malesuada fames ac turpis egestas maecenas pharetra convallis. Morbi tincidunt augue interdum velit euismod in pellentesque. Odio aenean sed adipiscing diam donec. Sed arcu non odio euismod lacinia at quis risus. Laoreet id donec ultrices tincidunt arcu non. Adipiscing diam donec adipiscing tristique risus. Vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant morbi. Praesent semper feugiat nibh sed pulvinar proin gravida hendrerit lectus. Magna ac placerat vestibulum lectus mauris ultrices eros. At auctor urna nunc id. Dictum non consectetur a erat nam at lectus urna. Non odio euismod lacinia at quis risus sed vulputate. Id aliquet lectus proin nibh nisl condimentum id. Libero nunc consequat interdum varius.</p>\r\n\r\n<p><em><strong>Pharetra vel turpis nunc eget lorem dolor. Augue eget arcu dictum varius duis. Porta non pulvinar neque laoreet suspendisse interdum consectetur libero. Cursus sit amet dictum sit amet justo donec. Mollis aliquam ut porttitor leo. At consectetur lorem donec massa. Et ultrices neque ornare aenean euismod elementum nisi. Id cursus metus aliquam eleifend mi in nulla posuere. Tempus iaculis urna id volutpat lacus laoreet. Aliquet bibendum enim facilisis gravida neque convallis. Velit aliquet sagittis id consectetur purus ut. Urna id volutpat lacus laoreet non. Feugiat nisl pretium fusce id velit ut. Pretium quam vulputate dignissim suspendisse in est ante in nibh. Cursus euismod quis viverra nibh cras pulvinar mattis. Nunc sed velit dignissim sodales ut eu sem. Et magnis dis parturient montes nascetur ridiculus mus. Sem viverra aliquet eget sit amet tellus cras adipiscing enim. Consectetur adipiscing elit pellentesque habitant. Viverra ipsum nunc aliquet bibendum enim facilisis gravida neque.</strong></em></p>', 'public/uploads/posts/16051644424.jpg', '2020-11-12 00:00:42', '2020-11-12 20:47:10', 'judul-pake-ckeditor', '2020-11-12 20:47:10', 1),
(19, 'Laravel 6', 8, '<p>Halo, ini adalah postingan pertama dari blog ini. Postingan pertama ini diperlukan untuk kebutuhan posting blog.&nbsp;</p>\r\n\r\n<p>Coba memasukkan gambar upload dari link (karena ckeditor4 belum integrasi gambar)</p>\r\n\r\n<p><a href=\"https://ibb.co/D1DgrNv\"><img alt=\"\" src=\"https://ibb.co/D1DgrNv\" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lalu teks lorem:</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<hr />\r\n<hr />\r\n<hr />\r\n<p><strong>Teks Bold</strong></p>\r\n\r\n<p><em>Italic</em></p>\r\n\r\n<p><s>Apani namanya</s></p>\r\n\r\n<ol>\r\n	<li>Satu</li>\r\n	<li>Dua</li>\r\n	<li>Tiga</li>\r\n	<li>Empat</li>\r\n</ol>\r\n\r\n<ul>\r\n	<li>Bullet</li>\r\n	<li>Kotak</li>\r\n	<li>Ketupat</li>\r\n</ul>\r\n\r\n<blockquote>\r\n<p>Talk is cheap, show me the code.</p>\r\n</blockquote>\r\n\r\n<p>&nbsp;</p>', 'public/uploads/posts/16052401301.jpg', '2020-11-12 21:02:10', '2020-11-14 02:29:16', 'laravel-6', '2020-11-14 02:29:16', 1),
(20, 'Post Kedua Pake CKEditor', 12, '<p>Diding pa Diding, lupa euyyyy menikah yuhuuu</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sabarlah</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ornare arcu dui vivamus arcu felis. Phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim. At risus viverra adipiscing at in tellus integer feugiat. Lobortis mattis aliquam faucibus purus in. Venenatis lectus magna fringilla urna porttitor rhoncus dolor. Placerat in egestas erat imperdiet sed. Pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu. Quis risus sed vulputate odio. Adipiscing elit pellentesque habitant morbi. Sit amet cursus sit amet dictum sit amet. Ut pharetra sit amet aliquam id diam maecenas ultricies. Habitant morbi tristique senectus et. Mauris ultrices eros in cursus turpis massa tincidunt dui ut. Diam ut venenatis tellus in metus vulputate eu. Ac tortor vitae purus faucibus ornare. Odio tempor orci dapibus ultrices in. Nisl rhoncus mattis rhoncus urna neque viverra. Lobortis scelerisque fermentum dui faucibus in ornare quam viverra. Interdum consectetur libero id faucibus nisl tincidunt eget nullam non.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Gambar gimana yal</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Nunc mattis enim ut tellus elementum sagittis vitae et. At erat pellentesque adipiscing commodo elit at imperdiet dui. Ultrices dui sapien eget mi proin sed. Urna molestie at elementum eu facilisis. Fringilla est ullamcorper eget nulla facilisi etiam dignissim. Nec sagittis aliquam malesuada bibendum arcu vitae elementum. Eleifend donec pretium vulputate sapien nec sagittis aliquam malesuada bibendum. Vitae ultricies leo integer malesuada nunc. Diam volutpat commodo sed egestas egestas fringilla. Augue interdum velit euismod in pellentesque massa placerat. Mi in nulla posuere sollicitudin aliquam. Velit aliquet sagittis id consectetur.</strong></p>', 'public/uploads/posts/1605342895Screenshot_2.png', '2020-11-14 01:34:55', '2020-11-14 02:29:17', 'post-kedua-pake-ckeditor', '2020-11-14 02:29:17', 1),
(21, 'Coba lagi last', 10, '<p>Apasik Gabisa muluk.</p>\r\n\r\n<p>Coba dah lorem:&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</strong></em></p>', 'public/uploads/posts/1605343664Screenshot_6.png', '2020-11-14 01:47:44', '2020-11-14 02:29:19', 'coba-lagi-last', '2020-11-14 02:29:19', 1),
(22, 'Kenapa yuak', 10, 'Ini kenaap sih bingung akwak\r\n\r\nHmmmmmmmmmmmmmmmm Hmmmmmmmmmmmmmmmm Hmmmmmmmmmmmmmmmm Hmmmmmmmmmmmmmmmm Hmmmmmmmmmmmmmmmm Hmmmmmmmmmmmmmmmm Hmmmmmmmmmmmmmmmm Hmmmmmmmmmmmmmmmm Hmmmmmmmmmmmmmmmm Hmmmmmmmmmmmmmmmm Hmmmmmmmmmmmmmmmm Hmmmmmmmmmmmmmmmm Hmmmmmmmmmmmmmmmm Hmmmmmmmmmmmmmmmm Hmmmmmmmmmmmmmmmm Hmmmmmmmmmmmmmmmm Hmmmmmmmmmmmmmmmm Hmmmmmmmmmmmmmmmm Hmmmmmmmmmmmmmmmm Hmmmmmmmmmmmmmmmm Hmmmmmmmmmmmmmmmm Hmmmmmmmmmmmmmmmm Hmmmmmmmmmmmmmmmm Hmmmmmmmmmmmmmmmm Hmmmmmmmmmmmmmmmm', 'public/uploads/posts/1605343920Screenshot_2.png', '2020-11-14 01:52:00', '2020-11-14 02:29:20', 'kenapa-yuak', '2020-11-14 02:29:20', 1),
(23, 'Coba sebelum tanya grup', 8, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>&nbsp;</p>', 'public/uploads/posts/1605344349Screenshot_1.png', '2020-11-14 01:59:09', '2020-11-14 02:29:21', 'coba-sebelum-tanya-grup', '2020-11-14 02:29:21', 1),
(24, 'Hahahahaha', 9, 'Ahahaha ci gajelassss Ahahaha ci gajelassss Ahahaha ci gajelassss Ahahaha ci gajelassss Ahahaha ci gajelassss Ahahaha ci gajelassss Ahahaha ci gajelassss Ahahaha ci gajelassss Ahahaha ci gajelassss Ahahaha ci gajelassss Ahahaha ci gajelassss Ahahaha ci gajelassss Ahahaha ci gajelassss Ahahaha ci gajelassss Ahahaha ci gajelassss Ahahaha ci gajelassss Ahahaha ci gajelassss Ahahaha ci gajelassss Ahahaha ci gajelassss Ahahaha ci gajelassss Ahahaha ci gajelassss Ahahaha ci gajelassss Ahahaha ci gajelassss Ahahaha ci gajelassss Ahahaha ci gajelassss Ahahaha ci gajelassss Ahahaha ci gajelassss Ahahaha ci gajelassss Ahahaha ci gajelassss Ahahaha ci gajelassss Ahahaha ci gajelassss Ahahaha ci gajelassss Ahahaha ci gajelassss Ahahaha ci gajelassss', 'public/uploads/posts/1605344688Screenshot_7.png', '2020-11-14 02:04:48', '2020-11-14 02:29:23', 'hahahahaha', '2020-11-14 02:29:23', 1),
(25, 'Dinding pak dinding', 11, '<p>lorem konten&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', 'public/uploads/posts/16053462201.jpg', '2020-11-14 02:30:20', '2020-11-14 02:30:20', 'dinding-pak-dinding', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tag`
--

INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 3, 1, NULL, NULL),
(2, 3, 2, NULL, NULL),
(3, 3, 3, NULL, NULL),
(4, 3, 4, NULL, NULL),
(5, 4, 4, NULL, NULL),
(7, 5, 3, NULL, NULL),
(8, 5, 4, NULL, NULL),
(9, 4, 1, NULL, NULL),
(10, 4, 3, NULL, NULL),
(11, 6, 3, NULL, NULL),
(12, 7, 1, NULL, NULL),
(13, 7, 2, NULL, NULL),
(14, 8, 2, NULL, NULL),
(15, 9, 3, NULL, NULL),
(16, 10, 3, NULL, NULL),
(17, 11, 3, NULL, NULL),
(18, 12, 3, NULL, NULL),
(19, 13, 3, NULL, NULL),
(20, 14, 2, NULL, NULL),
(21, 15, 2, NULL, NULL),
(22, 16, 1, NULL, NULL),
(23, 17, 1, NULL, NULL),
(24, 18, 1, NULL, NULL),
(25, 18, 2, NULL, NULL),
(26, 19, 6, NULL, NULL),
(27, 20, 6, NULL, NULL),
(28, 20, 9, NULL, NULL),
(29, 21, 7, NULL, NULL),
(30, 22, 7, NULL, NULL),
(31, 23, 6, NULL, NULL),
(32, 24, 9, NULL, NULL),
(33, 25, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(6, 'laravel', 'laravel', '2020-11-12 20:51:06', '2020-11-12 20:51:06'),
(7, 'codeigniter', 'codeigniter', '2020-11-12 20:51:10', '2020-11-12 20:51:10'),
(8, 'sql', 'sql', '2020-11-12 20:51:13', '2020-11-12 20:51:13'),
(9, 'catatan', 'catatan', '2020-11-12 20:51:17', '2020-11-12 20:51:17'),
(10, 'hackerrank', 'hackerrank', '2020-11-12 20:51:23', '2020-11-12 20:51:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tipe` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `tipe`) VALUES
(1, 'Fathul Muiin', 'fmuiin14@gmail.com', NULL, '$2y$10$KgUw97lWmr142e4onGahzOkBZeFwDy3Yq2VmYar8ieOaLYRPbI/1C', NULL, '2020-11-10 09:49:37', '2020-11-10 09:49:37', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
