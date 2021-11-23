/*
 Navicat Premium Data Transfer

 Source Server         : mysql_local
 Source Server Type    : MySQL
 Source Server Version : 100411
 Source Host           : localhost:3306
 Source Schema         : info_matkul

 Target Server Type    : MySQL
 Target Server Version : 100411
 File Encoding         : 65001

 Date: 23/05/2021 07:28:01
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for m_kota_kab
-- ----------------------------
DROP TABLE IF EXISTS `m_kota_kab`;
CREATE TABLE `m_kota_kab`  (
  `id_kota_kab` bigint(20) NOT NULL AUTO_INCREMENT,
  `kota_kab` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_provinsi` bigint(20) NULL DEFAULT NULL,
  `add_by` int(11) NULL DEFAULT NULL,
  `add_time` datetime(0) NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id_kota_kab`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9474 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of m_kota_kab
-- ----------------------------
INSERT INTO `m_kota_kab` VALUES (1101, 'Kab. Simeulue', 11, NULL, '2021-05-22 06:09:13');
INSERT INTO `m_kota_kab` VALUES (1102, 'Kab. Aceh Singkil', 11, NULL, '2021-05-22 06:09:13');
INSERT INTO `m_kota_kab` VALUES (1103, 'Kab. Aceh Selatan', 11, NULL, '2021-05-22 06:09:13');
INSERT INTO `m_kota_kab` VALUES (1104, 'Kab. Aceh Tenggara', 11, NULL, '2021-05-22 06:09:13');
INSERT INTO `m_kota_kab` VALUES (1105, 'Kab. Aceh Timur', 11, NULL, '2021-05-22 06:09:13');
INSERT INTO `m_kota_kab` VALUES (1106, 'Kab. Aceh Tengah', 11, NULL, '2021-05-22 06:09:13');
INSERT INTO `m_kota_kab` VALUES (1107, 'Kab. Aceh Barat', 11, NULL, '2021-05-22 06:09:13');
INSERT INTO `m_kota_kab` VALUES (1108, 'Kab. Aceh Besar', 11, NULL, '2021-05-22 06:09:13');
INSERT INTO `m_kota_kab` VALUES (1109, 'Kab. Pidie', 11, NULL, '2021-05-22 06:09:13');
INSERT INTO `m_kota_kab` VALUES (1110, 'Kab. Bireuen', 11, NULL, '2021-05-22 06:09:13');
INSERT INTO `m_kota_kab` VALUES (1111, 'Kab. Aceh Utara', 11, NULL, '2021-05-22 06:09:13');
INSERT INTO `m_kota_kab` VALUES (1112, 'Kab. Aceh Barat Daya', 11, NULL, '2021-05-22 06:09:13');
INSERT INTO `m_kota_kab` VALUES (1113, 'Kab. Gayo Lues', 11, NULL, '2021-05-22 06:09:14');
INSERT INTO `m_kota_kab` VALUES (1114, 'Kab. Aceh Tamiang', 11, NULL, '2021-05-22 06:09:14');
INSERT INTO `m_kota_kab` VALUES (1115, 'Kab. Nagan Raya', 11, NULL, '2021-05-22 06:09:14');
INSERT INTO `m_kota_kab` VALUES (1116, 'Kab. Aceh Jaya', 11, NULL, '2021-05-22 06:09:14');
INSERT INTO `m_kota_kab` VALUES (1117, 'Kab. Bener Meriah', 11, NULL, '2021-05-22 06:09:14');
INSERT INTO `m_kota_kab` VALUES (1118, 'Kab. Pidie Jaya', 11, NULL, '2021-05-22 06:09:14');
INSERT INTO `m_kota_kab` VALUES (1171, 'Kota Banda Aceh', 11, NULL, '2021-05-22 06:09:14');
INSERT INTO `m_kota_kab` VALUES (1172, 'Kota Sabang', 11, NULL, '2021-05-22 06:09:14');
INSERT INTO `m_kota_kab` VALUES (1173, 'Kota Langsa', 11, NULL, '2021-05-22 06:09:14');
INSERT INTO `m_kota_kab` VALUES (1174, 'Kota Lhokseumawe', 11, NULL, '2021-05-22 06:09:14');
INSERT INTO `m_kota_kab` VALUES (1175, 'Kota Subulussalam', 11, NULL, '2021-05-22 06:09:14');
INSERT INTO `m_kota_kab` VALUES (1201, 'Kab. Nias', 12, NULL, '2021-05-22 06:09:14');
INSERT INTO `m_kota_kab` VALUES (1202, 'Kab. Mandailing Natal', 12, NULL, '2021-05-22 06:09:14');
INSERT INTO `m_kota_kab` VALUES (1203, 'Kab. Tapanuli Selatan', 12, NULL, '2021-05-22 06:09:14');
INSERT INTO `m_kota_kab` VALUES (1204, 'Kab. Tapanuli Tengah', 12, NULL, '2021-05-22 06:09:14');
INSERT INTO `m_kota_kab` VALUES (1205, 'Kab. Tapanuli Utara', 12, NULL, '2021-05-22 06:09:14');
INSERT INTO `m_kota_kab` VALUES (1206, 'Kab. Toba Samosir', 12, NULL, '2021-05-22 06:09:14');
INSERT INTO `m_kota_kab` VALUES (1207, 'Kab. Labuhan Batu', 12, NULL, '2021-05-22 06:09:14');
INSERT INTO `m_kota_kab` VALUES (1208, 'Kab. Asahan', 12, NULL, '2021-05-22 06:09:14');
INSERT INTO `m_kota_kab` VALUES (1209, 'Kab. Simalungun', 12, NULL, '2021-05-22 06:09:14');
INSERT INTO `m_kota_kab` VALUES (1210, 'Kab. Dairi', 12, NULL, '2021-05-22 06:09:14');
INSERT INTO `m_kota_kab` VALUES (1211, 'Kab. Karo', 12, NULL, '2021-05-22 06:09:14');
INSERT INTO `m_kota_kab` VALUES (1212, 'Kab. Deli Serdang', 12, NULL, '2021-05-22 06:09:14');
INSERT INTO `m_kota_kab` VALUES (1213, 'Kab. Langkat', 12, NULL, '2021-05-22 06:09:14');
INSERT INTO `m_kota_kab` VALUES (1214, 'Kab. Nias Selatan', 12, NULL, '2021-05-22 06:09:14');
INSERT INTO `m_kota_kab` VALUES (1215, 'Kab. Humbang Hasundutan', 12, NULL, '2021-05-22 06:09:14');
INSERT INTO `m_kota_kab` VALUES (1216, 'Kab. Pakpak Bharat', 12, NULL, '2021-05-22 06:09:14');
INSERT INTO `m_kota_kab` VALUES (1217, 'Kab. Samosir', 12, NULL, '2021-05-22 06:09:15');
INSERT INTO `m_kota_kab` VALUES (1218, 'Kab. Serdang Bedagai', 12, NULL, '2021-05-22 06:09:15');
INSERT INTO `m_kota_kab` VALUES (1219, 'Kab. Batu Bara', 12, NULL, '2021-05-22 06:09:15');
INSERT INTO `m_kota_kab` VALUES (1220, 'Kab. Padang Lawas Utara', 12, NULL, '2021-05-22 06:09:15');
INSERT INTO `m_kota_kab` VALUES (1221, 'Kab. Padang Lawas', 12, NULL, '2021-05-22 06:09:15');
INSERT INTO `m_kota_kab` VALUES (1222, 'Kab. Labuhan Batu Selatan', 12, NULL, '2021-05-22 06:09:15');
INSERT INTO `m_kota_kab` VALUES (1223, 'Kab. Labuhan Batu Utara', 12, NULL, '2021-05-22 06:09:15');
INSERT INTO `m_kota_kab` VALUES (1224, 'Kab. Nias Utara', 12, NULL, '2021-05-22 06:09:15');
INSERT INTO `m_kota_kab` VALUES (1225, 'Kab. Nias Barat', 12, NULL, '2021-05-22 06:09:15');
INSERT INTO `m_kota_kab` VALUES (1271, 'Kota Sibolga', 12, NULL, '2021-05-22 06:09:15');
INSERT INTO `m_kota_kab` VALUES (1272, 'Kota Tanjung Balai', 12, NULL, '2021-05-22 06:09:15');
INSERT INTO `m_kota_kab` VALUES (1273, 'Kota Pematang Siantar', 12, NULL, '2021-05-22 06:09:15');
INSERT INTO `m_kota_kab` VALUES (1274, 'Kota Tebing Tinggi', 12, NULL, '2021-05-22 06:09:15');
INSERT INTO `m_kota_kab` VALUES (1275, 'Kota Medan', 12, NULL, '2021-05-22 06:09:15');
INSERT INTO `m_kota_kab` VALUES (1276, 'Kota Binjai', 12, NULL, '2021-05-22 06:09:15');
INSERT INTO `m_kota_kab` VALUES (1277, 'Kota Padangsidimpuan', 12, NULL, '2021-05-22 06:09:15');
INSERT INTO `m_kota_kab` VALUES (1278, 'Kota Gunungsitoli', 12, NULL, '2021-05-22 06:09:15');
INSERT INTO `m_kota_kab` VALUES (1301, 'Kab. Kepulauan Mentawai', 13, NULL, '2021-05-22 06:09:15');
INSERT INTO `m_kota_kab` VALUES (1302, 'Kab. Pesisir Selatan', 13, NULL, '2021-05-22 06:09:15');
INSERT INTO `m_kota_kab` VALUES (1303, 'Kab. Solok', 13, NULL, '2021-05-22 06:09:15');
INSERT INTO `m_kota_kab` VALUES (1304, 'Kab. Sijunjung', 13, NULL, '2021-05-22 06:09:15');
INSERT INTO `m_kota_kab` VALUES (1305, 'Kab. Tanah Datar', 13, NULL, '2021-05-22 06:09:15');
INSERT INTO `m_kota_kab` VALUES (1306, 'Kab. Padang Pariaman', 13, NULL, '2021-05-22 06:09:15');
INSERT INTO `m_kota_kab` VALUES (1307, 'Kab. Agam', 13, NULL, '2021-05-22 06:09:15');
INSERT INTO `m_kota_kab` VALUES (1308, 'Kab. Lima Puluh Kota', 13, NULL, '2021-05-22 06:09:15');
INSERT INTO `m_kota_kab` VALUES (1309, 'Kab. Pasaman', 13, NULL, '2021-05-22 06:09:15');
INSERT INTO `m_kota_kab` VALUES (1310, 'Kab. Solok Selatan', 13, NULL, '2021-05-22 06:09:15');
INSERT INTO `m_kota_kab` VALUES (1311, 'Kab. Dharmasraya', 13, NULL, '2021-05-22 06:09:15');
INSERT INTO `m_kota_kab` VALUES (1312, 'Kab. Pasaman Barat', 13, NULL, '2021-05-22 06:09:15');
INSERT INTO `m_kota_kab` VALUES (1371, 'Kota Padang', 13, NULL, '2021-05-22 06:09:15');
INSERT INTO `m_kota_kab` VALUES (1372, 'Kota Solok', 13, NULL, '2021-05-22 06:09:15');
INSERT INTO `m_kota_kab` VALUES (1373, 'Kota Sawah Lunto', 13, NULL, '2021-05-22 06:09:16');
INSERT INTO `m_kota_kab` VALUES (1374, 'Kota Padang Panjang', 13, NULL, '2021-05-22 06:09:16');
INSERT INTO `m_kota_kab` VALUES (1375, 'Kota Bukittinggi', 13, NULL, '2021-05-22 06:09:16');
INSERT INTO `m_kota_kab` VALUES (1376, 'Kota Payakumbuh', 13, NULL, '2021-05-22 06:09:16');
INSERT INTO `m_kota_kab` VALUES (1377, 'Kota Pariaman', 13, NULL, '2021-05-22 06:09:16');
INSERT INTO `m_kota_kab` VALUES (1401, 'Kab. Kuantan Singingi', 14, NULL, '2021-05-22 06:09:16');
INSERT INTO `m_kota_kab` VALUES (1402, 'Kab. Indragiri Hulu', 14, NULL, '2021-05-22 06:09:16');
INSERT INTO `m_kota_kab` VALUES (1403, 'Kab. Indragiri Hilir', 14, NULL, '2021-05-22 06:09:16');
INSERT INTO `m_kota_kab` VALUES (1404, 'Kab. Pelalawan', 14, NULL, '2021-05-22 06:09:16');
INSERT INTO `m_kota_kab` VALUES (1405, 'Kab. S I A K', 14, NULL, '2021-05-22 06:09:16');
INSERT INTO `m_kota_kab` VALUES (1406, 'Kab. Kampar', 14, NULL, '2021-05-22 06:09:16');
INSERT INTO `m_kota_kab` VALUES (1407, 'Kab. Rokan Hulu', 14, NULL, '2021-05-22 06:09:16');
INSERT INTO `m_kota_kab` VALUES (1408, 'Kab. Bengkalis', 14, NULL, '2021-05-22 06:09:16');
INSERT INTO `m_kota_kab` VALUES (1409, 'Kab. Rokan Hilir', 14, NULL, '2021-05-22 06:09:16');
INSERT INTO `m_kota_kab` VALUES (1410, 'Kab. Kepulauan Meranti', 14, NULL, '2021-05-22 06:09:16');
INSERT INTO `m_kota_kab` VALUES (1471, 'Kota Pekanbaru', 14, NULL, '2021-05-22 06:09:16');
INSERT INTO `m_kota_kab` VALUES (1473, 'Kota D U M A I', 14, NULL, '2021-05-22 06:09:16');
INSERT INTO `m_kota_kab` VALUES (1501, 'Kab. Kerinci', 15, NULL, '2021-05-22 06:09:16');
INSERT INTO `m_kota_kab` VALUES (1502, 'Kab. Merangin', 15, NULL, '2021-05-22 06:09:16');
INSERT INTO `m_kota_kab` VALUES (1503, 'Kab. Sarolangun', 15, NULL, '2021-05-22 06:09:16');
INSERT INTO `m_kota_kab` VALUES (1504, 'Kab. Batang Hari', 15, NULL, '2021-05-22 06:09:16');
INSERT INTO `m_kota_kab` VALUES (1505, 'Kab. Muaro Jambi', 15, NULL, '2021-05-22 06:09:16');
INSERT INTO `m_kota_kab` VALUES (1506, 'Kab. Tanjung Jabung Timur', 15, NULL, '2021-05-22 06:09:16');
INSERT INTO `m_kota_kab` VALUES (1507, 'Kab. Tanjung Jabung Barat', 15, NULL, '2021-05-22 06:09:16');
INSERT INTO `m_kota_kab` VALUES (1508, 'Kab. Tebo', 15, NULL, '2021-05-22 06:09:16');
INSERT INTO `m_kota_kab` VALUES (1509, 'Kab. Bungo', 15, NULL, '2021-05-22 06:09:16');
INSERT INTO `m_kota_kab` VALUES (1571, 'Kota Jambi', 15, NULL, '2021-05-22 06:09:16');
INSERT INTO `m_kota_kab` VALUES (1572, 'Kota Sungai Penuh', 15, NULL, '2021-05-22 06:09:16');
INSERT INTO `m_kota_kab` VALUES (1601, 'Kab. Ogan Komering Ulu', 16, NULL, '2021-05-22 06:09:16');
INSERT INTO `m_kota_kab` VALUES (1602, 'Kab. Ogan Komering Ilir', 16, NULL, '2021-05-22 06:09:17');
INSERT INTO `m_kota_kab` VALUES (1603, 'Kab. Muara Enim', 16, NULL, '2021-05-22 06:09:17');
INSERT INTO `m_kota_kab` VALUES (1604, 'Kab. Lahat', 16, NULL, '2021-05-22 06:09:17');
INSERT INTO `m_kota_kab` VALUES (1605, 'Kab. Musi Rawas', 16, NULL, '2021-05-22 06:09:17');
INSERT INTO `m_kota_kab` VALUES (1606, 'Kab. Musi Banyuasin', 16, NULL, '2021-05-22 06:09:17');
INSERT INTO `m_kota_kab` VALUES (1607, 'Kab. Banyu Asin', 16, NULL, '2021-05-22 06:09:17');
INSERT INTO `m_kota_kab` VALUES (1608, 'Kab. Ogan Komering Ulu Selatan', 16, NULL, '2021-05-22 06:09:17');
INSERT INTO `m_kota_kab` VALUES (1609, 'Kab. Ogan Komering Ulu Timur', 16, NULL, '2021-05-22 06:09:17');
INSERT INTO `m_kota_kab` VALUES (1610, 'Kab. Ogan Ilir', 16, NULL, '2021-05-22 06:09:17');
INSERT INTO `m_kota_kab` VALUES (1611, 'Kab. Empat Lawang', 16, NULL, '2021-05-22 06:09:17');
INSERT INTO `m_kota_kab` VALUES (1671, 'Kota Palembang', 16, NULL, '2021-05-22 06:09:17');
INSERT INTO `m_kota_kab` VALUES (1672, 'Kota Prabumulih', 16, NULL, '2021-05-22 06:09:17');
INSERT INTO `m_kota_kab` VALUES (1673, 'Kota Pagar Alam', 16, NULL, '2021-05-22 06:09:17');
INSERT INTO `m_kota_kab` VALUES (1674, 'Kota Lubuklinggau', 16, NULL, '2021-05-22 06:09:17');
INSERT INTO `m_kota_kab` VALUES (1701, 'Kab. Bengkulu Selatan', 17, NULL, '2021-05-22 06:09:17');
INSERT INTO `m_kota_kab` VALUES (1702, 'Kab. Rejang Lebong', 17, NULL, '2021-05-22 06:09:17');
INSERT INTO `m_kota_kab` VALUES (1703, 'Kab. Bengkulu Utara', 17, NULL, '2021-05-22 06:09:17');
INSERT INTO `m_kota_kab` VALUES (1704, 'Kab. Kaur', 17, NULL, '2021-05-22 06:09:17');
INSERT INTO `m_kota_kab` VALUES (1705, 'Kab. Seluma', 17, NULL, '2021-05-22 06:09:18');
INSERT INTO `m_kota_kab` VALUES (1706, 'Kab. Mukomuko', 17, NULL, '2021-05-22 06:09:18');
INSERT INTO `m_kota_kab` VALUES (1707, 'Kab. Lebong', 17, NULL, '2021-05-22 06:09:18');
INSERT INTO `m_kota_kab` VALUES (1708, 'Kab. Kepahiang', 17, NULL, '2021-05-22 06:09:18');
INSERT INTO `m_kota_kab` VALUES (1709, 'Kab. Bengkulu Tengah', 17, NULL, '2021-05-22 06:09:18');
INSERT INTO `m_kota_kab` VALUES (1771, 'Kota Bengkulu', 17, NULL, '2021-05-22 06:09:18');
INSERT INTO `m_kota_kab` VALUES (1801, 'Kab. Lampung Barat', 18, NULL, '2021-05-22 06:09:18');
INSERT INTO `m_kota_kab` VALUES (1802, 'Kab. Tanggamus', 18, NULL, '2021-05-22 06:09:18');
INSERT INTO `m_kota_kab` VALUES (1803, 'Kab. Lampung Selatan', 18, NULL, '2021-05-22 06:09:18');
INSERT INTO `m_kota_kab` VALUES (1804, 'Kab. Lampung Timur', 18, NULL, '2021-05-22 06:09:18');
INSERT INTO `m_kota_kab` VALUES (1805, 'Kab. Lampung Tengah', 18, NULL, '2021-05-22 06:09:18');
INSERT INTO `m_kota_kab` VALUES (1806, 'Kab. Lampung Utara', 18, NULL, '2021-05-22 06:09:18');
INSERT INTO `m_kota_kab` VALUES (1807, 'Kab. Way Kanan', 18, NULL, '2021-05-22 06:09:18');
INSERT INTO `m_kota_kab` VALUES (1808, 'Kab. Tulangbawang', 18, NULL, '2021-05-22 06:09:18');
INSERT INTO `m_kota_kab` VALUES (1809, 'Kab. Pesawaran', 18, NULL, '2021-05-22 06:09:18');
INSERT INTO `m_kota_kab` VALUES (1810, 'Kab. Pringsewu', 18, NULL, '2021-05-22 06:09:18');
INSERT INTO `m_kota_kab` VALUES (1811, 'Kab. Mesuji', 18, NULL, '2021-05-22 06:09:18');
INSERT INTO `m_kota_kab` VALUES (1812, 'Kab. Tulang Bawang Barat', 18, NULL, '2021-05-22 06:09:18');
INSERT INTO `m_kota_kab` VALUES (1813, 'Kab. Pesisir Barat', 18, NULL, '2021-05-22 06:09:18');
INSERT INTO `m_kota_kab` VALUES (1871, 'Kota Bandar Lampung', 18, NULL, '2021-05-22 06:09:19');
INSERT INTO `m_kota_kab` VALUES (1872, 'Kota Metro', 18, NULL, '2021-05-22 06:09:19');
INSERT INTO `m_kota_kab` VALUES (1901, 'Kab. Bangka', 19, NULL, '2021-05-22 06:09:19');
INSERT INTO `m_kota_kab` VALUES (1902, 'Kab. Belitung', 19, NULL, '2021-05-22 06:09:19');
INSERT INTO `m_kota_kab` VALUES (1903, 'Kab. Bangka Barat', 19, NULL, '2021-05-22 06:09:19');
INSERT INTO `m_kota_kab` VALUES (1904, 'Kab. Bangka Tengah', 19, NULL, '2021-05-22 06:09:19');
INSERT INTO `m_kota_kab` VALUES (1905, 'Kab. Bangka Selatan', 19, NULL, '2021-05-22 06:09:19');
INSERT INTO `m_kota_kab` VALUES (1906, 'Kab. Belitung Timur', 19, NULL, '2021-05-22 06:09:19');
INSERT INTO `m_kota_kab` VALUES (1971, 'Kota Pangkal Pinang', 19, NULL, '2021-05-22 06:09:19');
INSERT INTO `m_kota_kab` VALUES (2101, 'Kab. Karimun', 21, NULL, '2021-05-22 06:09:19');
INSERT INTO `m_kota_kab` VALUES (2102, 'Kab. Bintan', 21, NULL, '2021-05-22 06:09:19');
INSERT INTO `m_kota_kab` VALUES (2103, 'Kab. Natuna', 21, NULL, '2021-05-22 06:09:19');
INSERT INTO `m_kota_kab` VALUES (2104, 'Kab. Lingga', 21, NULL, '2021-05-22 06:09:19');
INSERT INTO `m_kota_kab` VALUES (2105, 'Kab. Kepulauan Anambas', 21, NULL, '2021-05-22 06:09:19');
INSERT INTO `m_kota_kab` VALUES (2171, 'Kota B A T A M', 21, NULL, '2021-05-22 06:09:19');
INSERT INTO `m_kota_kab` VALUES (2172, 'Kota Tanjung Pinang', 21, NULL, '2021-05-22 06:09:19');
INSERT INTO `m_kota_kab` VALUES (3101, 'Kab. Kepulauan Seribu', 31, NULL, '2021-05-22 06:09:19');
INSERT INTO `m_kota_kab` VALUES (3171, 'Kota Jakarta Selatan', 31, NULL, '2021-05-22 06:09:19');
INSERT INTO `m_kota_kab` VALUES (3172, 'Kota Jakarta Timur', 31, NULL, '2021-05-22 06:09:20');
INSERT INTO `m_kota_kab` VALUES (3173, 'Kota Jakarta Pusat', 31, NULL, '2021-05-22 06:09:20');
INSERT INTO `m_kota_kab` VALUES (3174, 'Kota Jakarta Barat', 31, NULL, '2021-05-22 06:09:20');
INSERT INTO `m_kota_kab` VALUES (3175, 'Kota Jakarta Utara', 31, NULL, '2021-05-22 06:09:20');
INSERT INTO `m_kota_kab` VALUES (3201, 'Kab. Bogor', 32, NULL, '2021-05-22 06:09:20');
INSERT INTO `m_kota_kab` VALUES (3202, 'Kab. Sukabumi', 32, NULL, '2021-05-22 06:09:20');
INSERT INTO `m_kota_kab` VALUES (3203, 'Kab. Cianjur', 32, NULL, '2021-05-22 06:09:20');
INSERT INTO `m_kota_kab` VALUES (3204, 'Kab. Bandung', 32, NULL, '2021-05-22 06:09:20');
INSERT INTO `m_kota_kab` VALUES (3205, 'Kab. Garut', 32, NULL, '2021-05-22 06:09:20');
INSERT INTO `m_kota_kab` VALUES (3206, 'Kab. Tasikmalaya', 32, NULL, '2021-05-22 06:09:20');
INSERT INTO `m_kota_kab` VALUES (3207, 'Kab. Ciamis', 32, NULL, '2021-05-22 06:09:20');
INSERT INTO `m_kota_kab` VALUES (3208, 'Kab. Kuningan', 32, NULL, '2021-05-22 06:09:20');
INSERT INTO `m_kota_kab` VALUES (3209, 'Kab. Cirebon', 32, NULL, '2021-05-22 06:09:20');
INSERT INTO `m_kota_kab` VALUES (3210, 'Kab. Majalengka', 32, NULL, '2021-05-22 06:09:20');
INSERT INTO `m_kota_kab` VALUES (3211, 'Kab. Sumedang', 32, NULL, '2021-05-22 06:09:20');
INSERT INTO `m_kota_kab` VALUES (3212, 'Kab. Indramayu', 32, NULL, '2021-05-22 06:09:20');
INSERT INTO `m_kota_kab` VALUES (3213, 'Kab. Subang', 32, NULL, '2021-05-22 06:09:21');
INSERT INTO `m_kota_kab` VALUES (3214, 'Kab. Purwakarta', 32, NULL, '2021-05-22 06:09:21');
INSERT INTO `m_kota_kab` VALUES (3215, 'Kab. Karawang', 32, NULL, '2021-05-22 06:09:21');
INSERT INTO `m_kota_kab` VALUES (3216, 'Kab. Bekasi', 32, NULL, '2021-05-22 06:09:21');
INSERT INTO `m_kota_kab` VALUES (3217, 'Kab. Bandung Barat', 32, NULL, '2021-05-22 06:09:21');
INSERT INTO `m_kota_kab` VALUES (3218, 'Kab. Pangandaran', 32, NULL, '2021-05-22 06:09:21');
INSERT INTO `m_kota_kab` VALUES (3271, 'Kota Bogor', 32, NULL, '2021-05-22 06:09:21');
INSERT INTO `m_kota_kab` VALUES (3272, 'Kota Sukabumi', 32, NULL, '2021-05-22 06:09:21');
INSERT INTO `m_kota_kab` VALUES (3273, 'Kota Bandung', 32, NULL, '2021-05-22 06:09:21');
INSERT INTO `m_kota_kab` VALUES (3274, 'Kota Cirebon', 32, NULL, '2021-05-22 06:09:21');
INSERT INTO `m_kota_kab` VALUES (3275, 'Kota Bekasi', 32, NULL, '2021-05-22 06:09:21');
INSERT INTO `m_kota_kab` VALUES (3276, 'Kota Depok', 32, NULL, '2021-05-22 06:09:21');
INSERT INTO `m_kota_kab` VALUES (3277, 'Kota Cimahi', 32, NULL, '2021-05-22 06:09:21');
INSERT INTO `m_kota_kab` VALUES (3278, 'Kota Tasikmalaya', 32, NULL, '2021-05-22 06:09:21');
INSERT INTO `m_kota_kab` VALUES (3279, 'Kota Banjar', 32, NULL, '2021-05-22 06:09:21');
INSERT INTO `m_kota_kab` VALUES (3301, 'Kab. Cilacap', 33, NULL, '2021-05-22 06:09:21');
INSERT INTO `m_kota_kab` VALUES (3302, 'Kab. Banyumas', 33, NULL, '2021-05-22 06:09:21');
INSERT INTO `m_kota_kab` VALUES (3303, 'Kab. Purbalingga', 33, NULL, '2021-05-22 06:09:21');
INSERT INTO `m_kota_kab` VALUES (3304, 'Kab. Banjarnegara', 33, NULL, '2021-05-22 06:09:21');
INSERT INTO `m_kota_kab` VALUES (3305, 'Kab. Kebumen', 33, NULL, '2021-05-22 06:09:21');
INSERT INTO `m_kota_kab` VALUES (3306, 'Kab. Purworejo', 33, NULL, '2021-05-22 06:09:21');
INSERT INTO `m_kota_kab` VALUES (3307, 'Kab. Wonosobo', 33, NULL, '2021-05-22 06:09:21');
INSERT INTO `m_kota_kab` VALUES (3308, 'Kab. Magelang', 33, NULL, '2021-05-22 06:09:21');
INSERT INTO `m_kota_kab` VALUES (3309, 'Kab. Boyolali', 33, NULL, '2021-05-22 06:09:21');
INSERT INTO `m_kota_kab` VALUES (3310, 'Kab. Klaten', 33, NULL, '2021-05-22 06:09:22');
INSERT INTO `m_kota_kab` VALUES (3311, 'Kab. Sukoharjo', 33, NULL, '2021-05-22 06:09:22');
INSERT INTO `m_kota_kab` VALUES (3312, 'Kab. Wonogiri', 33, NULL, '2021-05-22 06:09:22');
INSERT INTO `m_kota_kab` VALUES (3313, 'Kab. Karanganyar', 33, NULL, '2021-05-22 06:09:22');
INSERT INTO `m_kota_kab` VALUES (3314, 'Kab. Sragen', 33, NULL, '2021-05-22 06:09:22');
INSERT INTO `m_kota_kab` VALUES (3315, 'Kab. Grobogan', 33, NULL, '2021-05-22 06:09:22');
INSERT INTO `m_kota_kab` VALUES (3316, 'Kab. Blora', 33, NULL, '2021-05-22 06:09:22');
INSERT INTO `m_kota_kab` VALUES (3317, 'Kab. Rembang', 33, NULL, '2021-05-22 06:09:22');
INSERT INTO `m_kota_kab` VALUES (3318, 'Kab. Pati', 33, NULL, '2021-05-22 06:09:22');
INSERT INTO `m_kota_kab` VALUES (3319, 'Kab. Kudus', 33, NULL, '2021-05-22 06:09:22');
INSERT INTO `m_kota_kab` VALUES (3320, 'Kab. Jepara', 33, NULL, '2021-05-22 06:09:22');
INSERT INTO `m_kota_kab` VALUES (3321, 'Kab. Demak', 33, NULL, '2021-05-22 06:09:22');
INSERT INTO `m_kota_kab` VALUES (3322, 'Kab. Semarang', 33, NULL, '2021-05-22 06:09:22');
INSERT INTO `m_kota_kab` VALUES (3323, 'Kab. Temanggung', 33, NULL, '2021-05-22 06:09:22');
INSERT INTO `m_kota_kab` VALUES (3324, 'Kab. Kendal', 33, NULL, '2021-05-22 06:09:22');
INSERT INTO `m_kota_kab` VALUES (3325, 'Kab. Batang', 33, NULL, '2021-05-22 06:09:23');
INSERT INTO `m_kota_kab` VALUES (3326, 'Kab. Pekalongan', 33, NULL, '2021-05-22 06:09:23');
INSERT INTO `m_kota_kab` VALUES (3327, 'Kab. Pemalang', 33, NULL, '2021-05-22 06:09:23');
INSERT INTO `m_kota_kab` VALUES (3328, 'Kab. Tegal', 33, NULL, '2021-05-22 06:09:23');
INSERT INTO `m_kota_kab` VALUES (3329, 'Kab. Brebes', 33, NULL, '2021-05-22 06:09:23');
INSERT INTO `m_kota_kab` VALUES (3371, 'Kota Magelang', 33, NULL, '2021-05-22 06:09:23');
INSERT INTO `m_kota_kab` VALUES (3372, 'Kota Surakarta', 33, NULL, '2021-05-22 06:09:23');
INSERT INTO `m_kota_kab` VALUES (3373, 'Kota Salatiga', 33, NULL, '2021-05-22 06:09:23');
INSERT INTO `m_kota_kab` VALUES (3374, 'Kota Semarang', 33, NULL, '2021-05-22 06:09:23');
INSERT INTO `m_kota_kab` VALUES (3375, 'Kota Pekalongan', 33, NULL, '2021-05-22 06:09:23');
INSERT INTO `m_kota_kab` VALUES (3376, 'Kota Tegal', 33, NULL, '2021-05-22 06:09:23');
INSERT INTO `m_kota_kab` VALUES (3401, 'Kab. Kulon Progo', 34, NULL, '2021-05-22 06:09:23');
INSERT INTO `m_kota_kab` VALUES (3402, 'Kab. Bantul', 34, NULL, '2021-05-22 06:09:23');
INSERT INTO `m_kota_kab` VALUES (3403, 'Kab. Gunung Kidul', 34, NULL, '2021-05-22 06:09:23');
INSERT INTO `m_kota_kab` VALUES (3404, 'Kab. Sleman', 34, NULL, '2021-05-22 06:09:23');
INSERT INTO `m_kota_kab` VALUES (3471, 'Kota Yogyakarta', 34, NULL, '2021-05-22 06:09:23');
INSERT INTO `m_kota_kab` VALUES (3501, 'Kab. Pacitan', 35, NULL, '2021-05-22 06:09:23');
INSERT INTO `m_kota_kab` VALUES (3502, 'Kab. Ponorogo', 35, NULL, '2021-05-22 06:09:23');
INSERT INTO `m_kota_kab` VALUES (3503, 'Kab. Trenggalek', 35, NULL, '2021-05-22 06:09:23');
INSERT INTO `m_kota_kab` VALUES (3504, 'Kab. Tulungagung', 35, NULL, '2021-05-22 06:09:23');
INSERT INTO `m_kota_kab` VALUES (3505, 'Kab. Blitar', 35, NULL, '2021-05-22 06:09:24');
INSERT INTO `m_kota_kab` VALUES (3506, 'Kab. Kediri', 35, NULL, '2021-05-22 06:09:24');
INSERT INTO `m_kota_kab` VALUES (3507, 'Kab. Malang', 35, NULL, '2021-05-22 06:09:24');
INSERT INTO `m_kota_kab` VALUES (3508, 'Kab. Lumajang', 35, NULL, '2021-05-22 06:09:24');
INSERT INTO `m_kota_kab` VALUES (3509, 'Kab. Jember', 35, NULL, '2021-05-22 06:09:24');
INSERT INTO `m_kota_kab` VALUES (3510, 'Kab. Banyuwangi', 35, NULL, '2021-05-22 06:09:24');
INSERT INTO `m_kota_kab` VALUES (3511, 'Kab. Bondowoso', 35, NULL, '2021-05-22 06:09:24');
INSERT INTO `m_kota_kab` VALUES (3512, 'Kab. Situbondo', 35, NULL, '2021-05-22 06:09:24');
INSERT INTO `m_kota_kab` VALUES (3513, 'Kab. Probolinggo', 35, NULL, '2021-05-22 06:09:24');
INSERT INTO `m_kota_kab` VALUES (3514, 'Kab. Pasuruan', 35, NULL, '2021-05-22 06:09:24');
INSERT INTO `m_kota_kab` VALUES (3515, 'Kab. Sidoarjo', 35, NULL, '2021-05-22 06:09:24');
INSERT INTO `m_kota_kab` VALUES (3516, 'Kab. Mojokerto', 35, NULL, '2021-05-22 06:09:24');
INSERT INTO `m_kota_kab` VALUES (3517, 'Kab. Jombang', 35, NULL, '2021-05-22 06:09:24');
INSERT INTO `m_kota_kab` VALUES (3518, 'Kab. Nganjuk', 35, NULL, '2021-05-22 06:09:24');
INSERT INTO `m_kota_kab` VALUES (3519, 'Kab. Madiun', 35, NULL, '2021-05-22 06:09:24');
INSERT INTO `m_kota_kab` VALUES (3520, 'Kab. Magetan', 35, NULL, '2021-05-22 06:09:24');
INSERT INTO `m_kota_kab` VALUES (3521, 'Kab. Ngawi', 35, NULL, '2021-05-22 06:09:24');
INSERT INTO `m_kota_kab` VALUES (3522, 'Kab. Bojonegoro', 35, NULL, '2021-05-22 06:09:24');
INSERT INTO `m_kota_kab` VALUES (3523, 'Kab. Tuban', 35, NULL, '2021-05-22 06:09:24');
INSERT INTO `m_kota_kab` VALUES (3524, 'Kab. Lamongan', 35, NULL, '2021-05-22 06:09:24');
INSERT INTO `m_kota_kab` VALUES (3525, 'Kab. Gresik', 35, NULL, '2021-05-22 06:09:24');
INSERT INTO `m_kota_kab` VALUES (3526, 'Kab. Bangkalan', 35, NULL, '2021-05-22 06:09:24');
INSERT INTO `m_kota_kab` VALUES (3527, 'Kab. Sampang', 35, NULL, '2021-05-22 06:09:25');
INSERT INTO `m_kota_kab` VALUES (3528, 'Kab. Pamekasan', 35, NULL, '2021-05-22 06:09:25');
INSERT INTO `m_kota_kab` VALUES (3529, 'Kab. Sumenep', 35, NULL, '2021-05-22 06:09:25');
INSERT INTO `m_kota_kab` VALUES (3571, 'Kota Kediri', 35, NULL, '2021-05-22 06:09:25');
INSERT INTO `m_kota_kab` VALUES (3572, 'Kota Blitar', 35, NULL, '2021-05-22 06:09:25');
INSERT INTO `m_kota_kab` VALUES (3573, 'Kota Malang', 35, NULL, '2021-05-22 06:09:25');
INSERT INTO `m_kota_kab` VALUES (3574, 'Kota Probolinggo', 35, NULL, '2021-05-22 06:09:25');
INSERT INTO `m_kota_kab` VALUES (3575, 'Kota Pasuruan', 35, NULL, '2021-05-22 06:09:25');
INSERT INTO `m_kota_kab` VALUES (3576, 'Kota Mojokerto', 35, NULL, '2021-05-22 06:09:25');
INSERT INTO `m_kota_kab` VALUES (3577, 'Kota Madiun', 35, NULL, '2021-05-22 06:09:25');
INSERT INTO `m_kota_kab` VALUES (3578, 'Kota Surabaya', 35, NULL, '2021-05-22 06:09:25');
INSERT INTO `m_kota_kab` VALUES (3579, 'Kota Batu', 35, NULL, '2021-05-22 06:09:25');
INSERT INTO `m_kota_kab` VALUES (3601, 'Kab. Pandeglang', 36, NULL, '2021-05-22 06:09:25');
INSERT INTO `m_kota_kab` VALUES (3602, 'Kab. Lebak', 36, NULL, '2021-05-22 06:09:25');
INSERT INTO `m_kota_kab` VALUES (3603, 'Kab. Tangerang', 36, NULL, '2021-05-22 06:09:25');
INSERT INTO `m_kota_kab` VALUES (3604, 'Kab. Serang', 36, NULL, '2021-05-22 06:09:26');
INSERT INTO `m_kota_kab` VALUES (3671, 'Kota Tangerang', 36, NULL, '2021-05-22 06:09:26');
INSERT INTO `m_kota_kab` VALUES (3672, 'Kota Cilegon', 36, NULL, '2021-05-22 06:09:26');
INSERT INTO `m_kota_kab` VALUES (3673, 'Kota Serang', 36, NULL, '2021-05-22 06:09:26');
INSERT INTO `m_kota_kab` VALUES (3674, 'Kota Tangerang Selatan', 36, NULL, '2021-05-22 06:09:26');
INSERT INTO `m_kota_kab` VALUES (5101, 'Kab. Jembrana', 51, NULL, '2021-05-22 06:09:26');
INSERT INTO `m_kota_kab` VALUES (5102, 'Kab. Tabanan', 51, NULL, '2021-05-22 06:09:26');
INSERT INTO `m_kota_kab` VALUES (5103, 'Kab. Badung', 51, NULL, '2021-05-22 06:09:26');
INSERT INTO `m_kota_kab` VALUES (5104, 'Kab. Gianyar', 51, NULL, '2021-05-22 06:09:26');
INSERT INTO `m_kota_kab` VALUES (5105, 'Kab. Klungkung', 51, NULL, '2021-05-22 06:09:26');
INSERT INTO `m_kota_kab` VALUES (5106, 'Kab. Bangli', 51, NULL, '2021-05-22 06:09:26');
INSERT INTO `m_kota_kab` VALUES (5107, 'Kab. Karang Asem', 51, NULL, '2021-05-22 06:09:26');
INSERT INTO `m_kota_kab` VALUES (5108, 'Kab. Buleleng', 51, NULL, '2021-05-22 06:09:26');
INSERT INTO `m_kota_kab` VALUES (5171, 'Kota Denpasar', 51, NULL, '2021-05-22 06:09:26');
INSERT INTO `m_kota_kab` VALUES (5201, 'Kab. Lombok Barat', 52, NULL, '2021-05-22 06:09:26');
INSERT INTO `m_kota_kab` VALUES (5202, 'Kab. Lombok Tengah', 52, NULL, '2021-05-22 06:09:26');
INSERT INTO `m_kota_kab` VALUES (5203, 'Kab. Lombok Timur', 52, NULL, '2021-05-22 06:09:27');
INSERT INTO `m_kota_kab` VALUES (5204, 'Kab. Sumbawa', 52, NULL, '2021-05-22 06:09:27');
INSERT INTO `m_kota_kab` VALUES (5205, 'Kab. Dompu', 52, NULL, '2021-05-22 06:09:27');
INSERT INTO `m_kota_kab` VALUES (5206, 'Kab. Bima', 52, NULL, '2021-05-22 06:09:27');
INSERT INTO `m_kota_kab` VALUES (5207, 'Kab. Sumbawa Barat', 52, NULL, '2021-05-22 06:09:27');
INSERT INTO `m_kota_kab` VALUES (5208, 'Kab. Lombok Utara', 52, NULL, '2021-05-22 06:09:27');
INSERT INTO `m_kota_kab` VALUES (5271, 'Kota Mataram', 52, NULL, '2021-05-22 06:09:27');
INSERT INTO `m_kota_kab` VALUES (5272, 'Kota Bima', 52, NULL, '2021-05-22 06:09:27');
INSERT INTO `m_kota_kab` VALUES (5301, 'Kab. Sumba Barat', 53, NULL, '2021-05-22 06:09:27');
INSERT INTO `m_kota_kab` VALUES (5302, 'Kab. Sumba Timur', 53, NULL, '2021-05-22 06:09:27');
INSERT INTO `m_kota_kab` VALUES (5303, 'Kab. Kupang', 53, NULL, '2021-05-22 06:09:27');
INSERT INTO `m_kota_kab` VALUES (5304, 'Kab. Timor Tengah Selatan', 53, NULL, '2021-05-22 06:09:27');
INSERT INTO `m_kota_kab` VALUES (5305, 'Kab. Timor Tengah Utara', 53, NULL, '2021-05-22 06:09:27');
INSERT INTO `m_kota_kab` VALUES (5306, 'Kab. Belu', 53, NULL, '2021-05-22 06:09:27');
INSERT INTO `m_kota_kab` VALUES (5307, 'Kab. Alor', 53, NULL, '2021-05-22 06:09:27');
INSERT INTO `m_kota_kab` VALUES (5308, 'Kab. Lembata', 53, NULL, '2021-05-22 06:09:27');
INSERT INTO `m_kota_kab` VALUES (5309, 'Kab. Flores Timur', 53, NULL, '2021-05-22 06:09:27');
INSERT INTO `m_kota_kab` VALUES (5310, 'Kab. Sikka', 53, NULL, '2021-05-22 06:09:27');
INSERT INTO `m_kota_kab` VALUES (5311, 'Kab. Ende', 53, NULL, '2021-05-22 06:09:28');
INSERT INTO `m_kota_kab` VALUES (5312, 'Kab. Ngada', 53, NULL, '2021-05-22 06:09:28');
INSERT INTO `m_kota_kab` VALUES (5313, 'Kab. Manggarai', 53, NULL, '2021-05-22 06:09:28');
INSERT INTO `m_kota_kab` VALUES (5314, 'Kab. Rote Ndao', 53, NULL, '2021-05-22 06:09:28');
INSERT INTO `m_kota_kab` VALUES (5315, 'Kab. Manggarai Barat', 53, NULL, '2021-05-22 06:09:28');
INSERT INTO `m_kota_kab` VALUES (5316, 'Kab. Sumba Tengah', 53, NULL, '2021-05-22 06:09:28');
INSERT INTO `m_kota_kab` VALUES (5317, 'Kab. Sumba Barat Daya', 53, NULL, '2021-05-22 06:09:28');
INSERT INTO `m_kota_kab` VALUES (5318, 'Kab. Nagekeo', 53, NULL, '2021-05-22 06:09:28');
INSERT INTO `m_kota_kab` VALUES (5319, 'Kab. Manggarai Timur', 53, NULL, '2021-05-22 06:09:28');
INSERT INTO `m_kota_kab` VALUES (5320, 'Kab. Sabu Raijua', 53, NULL, '2021-05-22 06:09:28');
INSERT INTO `m_kota_kab` VALUES (5371, 'Kota Kupang', 53, NULL, '2021-05-22 06:09:28');
INSERT INTO `m_kota_kab` VALUES (6101, 'Kab. Sambas', 61, NULL, '2021-05-22 06:09:28');
INSERT INTO `m_kota_kab` VALUES (6102, 'Kab. Bengkayang', 61, NULL, '2021-05-22 06:09:28');
INSERT INTO `m_kota_kab` VALUES (6103, 'Kab. Landak', 61, NULL, '2021-05-22 06:09:28');
INSERT INTO `m_kota_kab` VALUES (6104, 'Kab. Pontianak', 61, NULL, '2021-05-22 06:09:28');
INSERT INTO `m_kota_kab` VALUES (6105, 'Kab. Sanggau', 61, NULL, '2021-05-22 06:09:28');
INSERT INTO `m_kota_kab` VALUES (6106, 'Kab. Ketapang', 61, NULL, '2021-05-22 06:09:28');
INSERT INTO `m_kota_kab` VALUES (6107, 'Kab. Sintang', 61, NULL, '2021-05-22 06:09:28');
INSERT INTO `m_kota_kab` VALUES (6108, 'Kab. Kapuas Hulu', 61, NULL, '2021-05-22 06:09:28');
INSERT INTO `m_kota_kab` VALUES (6109, 'Kab. Sekadau', 61, NULL, '2021-05-22 06:09:28');
INSERT INTO `m_kota_kab` VALUES (6110, 'Kab. Melawi', 61, NULL, '2021-05-22 06:09:28');
INSERT INTO `m_kota_kab` VALUES (6111, 'Kab. Kayong Utara', 61, NULL, '2021-05-22 06:09:28');
INSERT INTO `m_kota_kab` VALUES (6112, 'Kab. Kubu Raya', 61, NULL, '2021-05-22 06:09:29');
INSERT INTO `m_kota_kab` VALUES (6171, 'Kota Pontianak', 61, NULL, '2021-05-22 06:09:29');
INSERT INTO `m_kota_kab` VALUES (6172, 'Kota Singkawang', 61, NULL, '2021-05-22 06:09:29');
INSERT INTO `m_kota_kab` VALUES (6201, 'Kab. Kotawaringin Barat', 62, NULL, '2021-05-22 06:09:29');
INSERT INTO `m_kota_kab` VALUES (6202, 'Kab. Kotawaringin Timur', 62, NULL, '2021-05-22 06:09:29');
INSERT INTO `m_kota_kab` VALUES (6203, 'Kab. Kapuas', 62, NULL, '2021-05-22 06:09:29');
INSERT INTO `m_kota_kab` VALUES (6204, 'Kab. Barito Selatan', 62, NULL, '2021-05-22 06:09:29');
INSERT INTO `m_kota_kab` VALUES (6205, 'Kab. Barito Utara', 62, NULL, '2021-05-22 06:09:29');
INSERT INTO `m_kota_kab` VALUES (6206, 'Kab. Sukamara', 62, NULL, '2021-05-22 06:09:29');
INSERT INTO `m_kota_kab` VALUES (6207, 'Kab. Lamandau', 62, NULL, '2021-05-22 06:09:29');
INSERT INTO `m_kota_kab` VALUES (6208, 'Kab. Seruyan', 62, NULL, '2021-05-22 06:09:29');
INSERT INTO `m_kota_kab` VALUES (6209, 'Kab. Katingan', 62, NULL, '2021-05-22 06:09:29');
INSERT INTO `m_kota_kab` VALUES (6210, 'Kab. Pulang Pisau', 62, NULL, '2021-05-22 06:09:29');
INSERT INTO `m_kota_kab` VALUES (6211, 'Kab. Gunung Mas', 62, NULL, '2021-05-22 06:09:29');
INSERT INTO `m_kota_kab` VALUES (6212, 'Kab. Barito Timur', 62, NULL, '2021-05-22 06:09:29');
INSERT INTO `m_kota_kab` VALUES (6213, 'Kab. Murung Raya', 62, NULL, '2021-05-22 06:09:29');
INSERT INTO `m_kota_kab` VALUES (6271, 'Kota Palangka Raya', 62, NULL, '2021-05-22 06:09:29');
INSERT INTO `m_kota_kab` VALUES (6301, 'Kab. Tanah Laut', 63, NULL, '2021-05-22 06:09:29');
INSERT INTO `m_kota_kab` VALUES (6302, 'Kab. Kota Baru', 63, NULL, '2021-05-22 06:09:29');
INSERT INTO `m_kota_kab` VALUES (6303, 'Kab. Banjar', 63, NULL, '2021-05-22 06:09:29');
INSERT INTO `m_kota_kab` VALUES (6304, 'Kab. Barito Kuala', 63, NULL, '2021-05-22 06:09:29');
INSERT INTO `m_kota_kab` VALUES (6305, 'Kab. Tapin', 63, NULL, '2021-05-22 06:09:29');
INSERT INTO `m_kota_kab` VALUES (6306, 'Kab. Hulu Sungai Selatan', 63, NULL, '2021-05-22 06:09:30');
INSERT INTO `m_kota_kab` VALUES (6307, 'Kab. Hulu Sungai Tengah', 63, NULL, '2021-05-22 06:09:30');
INSERT INTO `m_kota_kab` VALUES (6308, 'Kab. Hulu Sungai Utara', 63, NULL, '2021-05-22 06:09:30');
INSERT INTO `m_kota_kab` VALUES (6309, 'Kab. Tabalong', 63, NULL, '2021-05-22 06:09:30');
INSERT INTO `m_kota_kab` VALUES (6310, 'Kab. Tanah Bumbu', 63, NULL, '2021-05-22 06:09:30');
INSERT INTO `m_kota_kab` VALUES (6311, 'Kab. Balangan', 63, NULL, '2021-05-22 06:09:30');
INSERT INTO `m_kota_kab` VALUES (6371, 'Kota Banjarmasin', 63, NULL, '2021-05-22 06:09:30');
INSERT INTO `m_kota_kab` VALUES (6372, 'Kota Banjar Baru', 63, NULL, '2021-05-22 06:09:30');
INSERT INTO `m_kota_kab` VALUES (6401, 'Kab. Paser', 64, NULL, '2021-05-22 06:09:30');
INSERT INTO `m_kota_kab` VALUES (6402, 'Kab. Kutai Barat', 64, NULL, '2021-05-22 06:09:30');
INSERT INTO `m_kota_kab` VALUES (6403, 'Kab. Kutai Kartanegara', 64, NULL, '2021-05-22 06:09:30');
INSERT INTO `m_kota_kab` VALUES (6404, 'Kab. Kutai Timur', 64, NULL, '2021-05-22 06:09:30');
INSERT INTO `m_kota_kab` VALUES (6405, 'Kab. Berau', 64, NULL, '2021-05-22 06:09:31');
INSERT INTO `m_kota_kab` VALUES (6409, 'Kab. Penajam Paser Utara', 64, NULL, '2021-05-22 06:09:31');
INSERT INTO `m_kota_kab` VALUES (6471, 'Kota Balikpapan', 64, NULL, '2021-05-22 06:09:31');
INSERT INTO `m_kota_kab` VALUES (6472, 'Kota Samarinda', 64, NULL, '2021-05-22 06:09:31');
INSERT INTO `m_kota_kab` VALUES (6474, 'Kota Bontang', 64, NULL, '2021-05-22 06:09:31');
INSERT INTO `m_kota_kab` VALUES (6501, 'Kab. Malinau', 65, NULL, '2021-05-22 06:09:31');
INSERT INTO `m_kota_kab` VALUES (6502, 'Kab. Bulungan', 65, NULL, '2021-05-22 06:09:31');
INSERT INTO `m_kota_kab` VALUES (6503, 'Kab. Tana Tidung', 65, NULL, '2021-05-22 06:09:31');
INSERT INTO `m_kota_kab` VALUES (6504, 'Kab. Nunukan', 65, NULL, '2021-05-22 06:09:31');
INSERT INTO `m_kota_kab` VALUES (6571, 'Kota Tarakan', 65, NULL, '2021-05-22 06:09:31');
INSERT INTO `m_kota_kab` VALUES (7101, 'Kab. Bolaang Mongondow', 71, NULL, '2021-05-22 06:09:31');
INSERT INTO `m_kota_kab` VALUES (7102, 'Kab. Minahasa', 71, NULL, '2021-05-22 06:09:31');
INSERT INTO `m_kota_kab` VALUES (7103, 'Kab. Kepulauan Sangihe', 71, NULL, '2021-05-22 06:09:31');
INSERT INTO `m_kota_kab` VALUES (7104, 'Kab. Kepulauan Talaud', 71, NULL, '2021-05-22 06:09:31');
INSERT INTO `m_kota_kab` VALUES (7105, 'Kab. Minahasa Selatan', 71, NULL, '2021-05-22 06:09:31');
INSERT INTO `m_kota_kab` VALUES (7106, 'Kab. Minahasa Utara', 71, NULL, '2021-05-22 06:09:31');
INSERT INTO `m_kota_kab` VALUES (7107, 'Kab. Bolaang Mongondow Utara', 71, NULL, '2021-05-22 06:09:31');
INSERT INTO `m_kota_kab` VALUES (7108, 'Kab. Siau Tagulandang Biaro', 71, NULL, '2021-05-22 06:09:31');
INSERT INTO `m_kota_kab` VALUES (7109, 'Kab. Minahasa Tenggara', 71, NULL, '2021-05-22 06:09:31');
INSERT INTO `m_kota_kab` VALUES (7110, 'Kab. Bolaang Mongondow Selatan', 71, NULL, '2021-05-22 06:09:31');
INSERT INTO `m_kota_kab` VALUES (7111, 'Kab. Bolaang Mongondow Timur', 71, NULL, '2021-05-22 06:09:32');
INSERT INTO `m_kota_kab` VALUES (7171, 'Kota Manado', 71, NULL, '2021-05-22 06:09:32');
INSERT INTO `m_kota_kab` VALUES (7172, 'Kota Bitung', 71, NULL, '2021-05-22 06:09:32');
INSERT INTO `m_kota_kab` VALUES (7173, 'Kota Tomohon', 71, NULL, '2021-05-22 06:09:32');
INSERT INTO `m_kota_kab` VALUES (7174, 'Kota Kotamobagu', 71, NULL, '2021-05-22 06:09:32');
INSERT INTO `m_kota_kab` VALUES (7201, 'Kab. Banggai Kepulauan', 72, NULL, '2021-05-22 06:09:32');
INSERT INTO `m_kota_kab` VALUES (7202, 'Kab. Banggai', 72, NULL, '2021-05-22 06:09:32');
INSERT INTO `m_kota_kab` VALUES (7203, 'Kab. Morowali', 72, NULL, '2021-05-22 06:09:32');
INSERT INTO `m_kota_kab` VALUES (7204, 'Kab. Poso', 72, NULL, '2021-05-22 06:09:32');
INSERT INTO `m_kota_kab` VALUES (7205, 'Kab. Donggala', 72, NULL, '2021-05-22 06:09:32');
INSERT INTO `m_kota_kab` VALUES (7206, 'Kab. Toli-toli', 72, NULL, '2021-05-22 06:09:32');
INSERT INTO `m_kota_kab` VALUES (7207, 'Kab. Buol', 72, NULL, '2021-05-22 06:09:32');
INSERT INTO `m_kota_kab` VALUES (7208, 'Kab. Parigi Moutong', 72, NULL, '2021-05-22 06:09:32');
INSERT INTO `m_kota_kab` VALUES (7209, 'Kab. Tojo Una-una', 72, NULL, '2021-05-22 06:09:32');
INSERT INTO `m_kota_kab` VALUES (7210, 'Kab. Sigi', 72, NULL, '2021-05-22 06:09:32');
INSERT INTO `m_kota_kab` VALUES (7271, 'Kota Palu', 72, NULL, '2021-05-22 06:09:32');
INSERT INTO `m_kota_kab` VALUES (7301, 'Kab. Kepulauan Selayar', 73, NULL, '2021-05-22 06:09:32');
INSERT INTO `m_kota_kab` VALUES (7302, 'Kab. Bulukumba', 73, NULL, '2021-05-22 06:09:32');
INSERT INTO `m_kota_kab` VALUES (7303, 'Kab. Bantaeng', 73, NULL, '2021-05-22 06:09:32');
INSERT INTO `m_kota_kab` VALUES (7304, 'Kab. Jeneponto', 73, NULL, '2021-05-22 06:09:32');
INSERT INTO `m_kota_kab` VALUES (7305, 'Kab. Takalar', 73, NULL, '2021-05-22 06:09:32');
INSERT INTO `m_kota_kab` VALUES (7306, 'Kab. Gowa', 73, NULL, '2021-05-22 06:09:33');
INSERT INTO `m_kota_kab` VALUES (7307, 'Kab. Sinjai', 73, NULL, '2021-05-22 06:09:33');
INSERT INTO `m_kota_kab` VALUES (7308, 'Kab. Maros', 73, NULL, '2021-05-22 06:09:33');
INSERT INTO `m_kota_kab` VALUES (7309, 'Kab. Pangkajene Dan Kepulauan', 73, NULL, '2021-05-22 06:09:33');
INSERT INTO `m_kota_kab` VALUES (7310, 'Kab. Barru', 73, NULL, '2021-05-22 06:09:33');
INSERT INTO `m_kota_kab` VALUES (7311, 'Kab. Bone', 73, NULL, '2021-05-22 06:09:33');
INSERT INTO `m_kota_kab` VALUES (7312, 'Kab. Soppeng', 73, NULL, '2021-05-22 06:09:33');
INSERT INTO `m_kota_kab` VALUES (7313, 'Kab. Wajo', 73, NULL, '2021-05-22 06:09:33');
INSERT INTO `m_kota_kab` VALUES (7314, 'Kab. Sidenreng Rappang', 73, NULL, '2021-05-22 06:09:33');
INSERT INTO `m_kota_kab` VALUES (7315, 'Kab. Pinrang', 73, NULL, '2021-05-22 06:09:33');
INSERT INTO `m_kota_kab` VALUES (7316, 'Kab. Enrekang', 73, NULL, '2021-05-22 06:09:33');
INSERT INTO `m_kota_kab` VALUES (7317, 'Kab. Luwu', 73, NULL, '2021-05-22 06:09:33');
INSERT INTO `m_kota_kab` VALUES (7318, 'Kab. Tana Toraja', 73, NULL, '2021-05-22 06:09:33');
INSERT INTO `m_kota_kab` VALUES (7322, 'Kab. Luwu Utara', 73, NULL, '2021-05-22 06:09:33');
INSERT INTO `m_kota_kab` VALUES (7325, 'Kab. Luwu Timur', 73, NULL, '2021-05-22 06:09:33');
INSERT INTO `m_kota_kab` VALUES (7326, 'Kab. Toraja Utara', 73, NULL, '2021-05-22 06:09:33');
INSERT INTO `m_kota_kab` VALUES (7371, 'Kota Makassar', 73, NULL, '2021-05-22 06:09:33');
INSERT INTO `m_kota_kab` VALUES (7372, 'Kota Parepare', 73, NULL, '2021-05-22 06:09:33');
INSERT INTO `m_kota_kab` VALUES (7373, 'Kota Palopo', 73, NULL, '2021-05-22 06:09:34');
INSERT INTO `m_kota_kab` VALUES (7401, 'Kab. Buton', 74, NULL, '2021-05-22 06:09:34');
INSERT INTO `m_kota_kab` VALUES (7402, 'Kab. Muna', 74, NULL, '2021-05-22 06:09:34');
INSERT INTO `m_kota_kab` VALUES (7403, 'Kab. Konawe', 74, NULL, '2021-05-22 06:09:34');
INSERT INTO `m_kota_kab` VALUES (7404, 'Kab. Kolaka', 74, NULL, '2021-05-22 06:09:34');
INSERT INTO `m_kota_kab` VALUES (7405, 'Kab. Konawe Selatan', 74, NULL, '2021-05-22 06:09:34');
INSERT INTO `m_kota_kab` VALUES (7406, 'Kab. Bombana', 74, NULL, '2021-05-22 06:09:34');
INSERT INTO `m_kota_kab` VALUES (7407, 'Kab. Wakatobi', 74, NULL, '2021-05-22 06:09:34');
INSERT INTO `m_kota_kab` VALUES (7408, 'Kab. Kolaka Utara', 74, NULL, '2021-05-22 06:09:34');
INSERT INTO `m_kota_kab` VALUES (7409, 'Kab. Buton Utara', 74, NULL, '2021-05-22 06:09:34');
INSERT INTO `m_kota_kab` VALUES (7410, 'Kab. Konawe Utara', 74, NULL, '2021-05-22 06:09:34');
INSERT INTO `m_kota_kab` VALUES (7471, 'Kota Kendari', 74, NULL, '2021-05-22 06:09:34');
INSERT INTO `m_kota_kab` VALUES (7472, 'Kota Baubau', 74, NULL, '2021-05-22 06:09:34');
INSERT INTO `m_kota_kab` VALUES (7501, 'Kab. Boalemo', 75, NULL, '2021-05-22 06:09:34');
INSERT INTO `m_kota_kab` VALUES (7502, 'Kab. Gorontalo', 75, NULL, '2021-05-22 06:09:34');
INSERT INTO `m_kota_kab` VALUES (7503, 'Kab. Pohuwato', 75, NULL, '2021-05-22 06:09:34');
INSERT INTO `m_kota_kab` VALUES (7504, 'Kab. Bone Bolango', 75, NULL, '2021-05-22 06:09:35');
INSERT INTO `m_kota_kab` VALUES (7505, 'Kab. Gorontalo Utara', 75, NULL, '2021-05-22 06:09:35');
INSERT INTO `m_kota_kab` VALUES (7571, 'Kota Gorontalo', 75, NULL, '2021-05-22 06:09:35');
INSERT INTO `m_kota_kab` VALUES (7601, 'Kab. Majene', 76, NULL, '2021-05-22 06:09:35');
INSERT INTO `m_kota_kab` VALUES (7602, 'Kab. Polewali Mandar', 76, NULL, '2021-05-22 06:09:35');
INSERT INTO `m_kota_kab` VALUES (7603, 'Kab. Mamasa', 76, NULL, '2021-05-22 06:09:35');
INSERT INTO `m_kota_kab` VALUES (7604, 'Kab. Mamuju', 76, NULL, '2021-05-22 06:09:35');
INSERT INTO `m_kota_kab` VALUES (7605, 'Kab. Mamuju Utara', 76, NULL, '2021-05-22 06:09:35');
INSERT INTO `m_kota_kab` VALUES (8101, 'Kab. Maluku Tenggara Barat', 81, NULL, '2021-05-22 06:09:35');
INSERT INTO `m_kota_kab` VALUES (8102, 'Kab. Maluku Tenggara', 81, NULL, '2021-05-22 06:09:35');
INSERT INTO `m_kota_kab` VALUES (8103, 'Kab. Maluku Tengah', 81, NULL, '2021-05-22 06:09:35');
INSERT INTO `m_kota_kab` VALUES (8104, 'Kab. Buru', 81, NULL, '2021-05-22 06:09:35');
INSERT INTO `m_kota_kab` VALUES (8105, 'Kab. Kepulauan Aru', 81, NULL, '2021-05-22 06:09:35');
INSERT INTO `m_kota_kab` VALUES (8106, 'Kab. Seram Bagian Barat', 81, NULL, '2021-05-22 06:09:35');
INSERT INTO `m_kota_kab` VALUES (8107, 'Kab. Seram Bagian Timur', 81, NULL, '2021-05-22 06:09:35');
INSERT INTO `m_kota_kab` VALUES (8108, 'Kab. Maluku Barat Daya', 81, NULL, '2021-05-22 06:09:35');
INSERT INTO `m_kota_kab` VALUES (8109, 'Kab. Buru Selatan', 81, NULL, '2021-05-22 06:09:35');
INSERT INTO `m_kota_kab` VALUES (8171, 'Kota Ambon', 81, NULL, '2021-05-22 06:09:35');
INSERT INTO `m_kota_kab` VALUES (8172, 'Kota Tual', 81, NULL, '2021-05-22 06:09:35');
INSERT INTO `m_kota_kab` VALUES (8201, 'Kab. Halmahera Barat', 82, NULL, '2021-05-22 06:09:35');
INSERT INTO `m_kota_kab` VALUES (8202, 'Kab. Halmahera Tengah', 82, NULL, '2021-05-22 06:09:35');
INSERT INTO `m_kota_kab` VALUES (8203, 'Kab. Kepulauan Sula', 82, NULL, '2021-05-22 06:09:36');
INSERT INTO `m_kota_kab` VALUES (8204, 'Kab. Halmahera Selatan', 82, NULL, '2021-05-22 06:09:36');
INSERT INTO `m_kota_kab` VALUES (8205, 'Kab. Halmahera Utara', 82, NULL, '2021-05-22 06:09:36');
INSERT INTO `m_kota_kab` VALUES (8206, 'Kab. Halmahera Timur', 82, NULL, '2021-05-22 06:09:36');
INSERT INTO `m_kota_kab` VALUES (8207, 'Kab. Pulau Morotai', 82, NULL, '2021-05-22 06:09:36');
INSERT INTO `m_kota_kab` VALUES (8271, 'Kota Ternate', 82, NULL, '2021-05-22 06:09:36');
INSERT INTO `m_kota_kab` VALUES (8272, 'Kota Tidore Kepulauan', 82, NULL, '2021-05-22 06:09:36');
INSERT INTO `m_kota_kab` VALUES (9101, 'Kab. Fakfak', 91, NULL, '2021-05-22 06:09:36');
INSERT INTO `m_kota_kab` VALUES (9102, 'Kab. Kaimana', 91, NULL, '2021-05-22 06:09:36');
INSERT INTO `m_kota_kab` VALUES (9103, 'Kab. Teluk Wondama', 91, NULL, '2021-05-22 06:09:36');
INSERT INTO `m_kota_kab` VALUES (9104, 'Kab. Teluk Bintuni', 91, NULL, '2021-05-22 06:09:36');
INSERT INTO `m_kota_kab` VALUES (9105, 'Kab. Manokwari', 91, NULL, '2021-05-22 06:09:36');
INSERT INTO `m_kota_kab` VALUES (9106, 'Kab. Sorong Selatan', 91, NULL, '2021-05-22 06:09:36');
INSERT INTO `m_kota_kab` VALUES (9107, 'Kab. Sorong', 91, NULL, '2021-05-22 06:09:36');
INSERT INTO `m_kota_kab` VALUES (9108, 'Kab. Raja Ampat', 91, NULL, '2021-05-22 06:09:36');
INSERT INTO `m_kota_kab` VALUES (9109, 'Kab. Tambrauw', 91, NULL, '2021-05-22 06:09:37');
INSERT INTO `m_kota_kab` VALUES (9110, 'Kab. Maybrat', 91, NULL, '2021-05-22 06:09:37');
INSERT INTO `m_kota_kab` VALUES (9171, 'Kota Sorong', 91, NULL, '2021-05-22 06:09:37');
INSERT INTO `m_kota_kab` VALUES (9401, 'Kab. Merauke', 94, NULL, '2021-05-22 06:09:37');
INSERT INTO `m_kota_kab` VALUES (9402, 'Kab. Jayawijaya', 94, NULL, '2021-05-22 06:09:37');
INSERT INTO `m_kota_kab` VALUES (9403, 'Kab. Jayapura', 94, NULL, '2021-05-22 06:09:37');
INSERT INTO `m_kota_kab` VALUES (9404, 'Kab. Nabire', 94, NULL, '2021-05-22 06:09:37');
INSERT INTO `m_kota_kab` VALUES (9408, 'Kab. Kepulauan Yapen', 94, NULL, '2021-05-22 06:09:37');
INSERT INTO `m_kota_kab` VALUES (9409, 'Kab. Biak Numfor', 94, NULL, '2021-05-22 06:09:37');
INSERT INTO `m_kota_kab` VALUES (9410, 'Kab. Paniai', 94, NULL, '2021-05-22 06:09:37');
INSERT INTO `m_kota_kab` VALUES (9411, 'Kab. Puncak Jaya', 94, NULL, '2021-05-22 06:09:37');
INSERT INTO `m_kota_kab` VALUES (9412, 'Kab. Mimika', 94, NULL, '2021-05-22 06:09:37');
INSERT INTO `m_kota_kab` VALUES (9413, 'Kab. Boven Digoel', 94, NULL, '2021-05-22 06:09:37');
INSERT INTO `m_kota_kab` VALUES (9414, 'Kab. Mappi', 94, NULL, '2021-05-22 06:09:37');
INSERT INTO `m_kota_kab` VALUES (9415, 'Kab. Asmat', 94, NULL, '2021-05-22 06:09:37');
INSERT INTO `m_kota_kab` VALUES (9416, 'Kab. Yahukimo', 94, NULL, '2021-05-22 06:09:37');
INSERT INTO `m_kota_kab` VALUES (9417, 'Kab. Pegunungan Bintang', 94, NULL, '2021-05-22 06:09:37');
INSERT INTO `m_kota_kab` VALUES (9418, 'Kab. Tolikara', 94, NULL, '2021-05-22 06:09:37');
INSERT INTO `m_kota_kab` VALUES (9419, 'Kab. Sarmi', 94, NULL, '2021-05-22 06:09:37');
INSERT INTO `m_kota_kab` VALUES (9420, 'Kab. Keerom', 94, NULL, '2021-05-22 06:09:37');
INSERT INTO `m_kota_kab` VALUES (9426, 'Kab. Waropen', 94, NULL, '2021-05-22 06:09:37');
INSERT INTO `m_kota_kab` VALUES (9427, 'Kab. Supiori', 94, NULL, '2021-05-22 06:09:37');
INSERT INTO `m_kota_kab` VALUES (9428, 'Kab. Mamberamo Raya', 94, NULL, '2021-05-22 06:09:37');
INSERT INTO `m_kota_kab` VALUES (9429, 'Kab. Nduga', 94, NULL, '2021-05-22 06:09:37');
INSERT INTO `m_kota_kab` VALUES (9430, 'Kab. Lanny Jaya', 94, NULL, '2021-05-22 06:09:38');
INSERT INTO `m_kota_kab` VALUES (9431, 'Kab. Mamberamo Tengah', 94, NULL, '2021-05-22 06:09:38');
INSERT INTO `m_kota_kab` VALUES (9432, 'Kab. Yalimo', 94, NULL, '2021-05-22 06:09:38');
INSERT INTO `m_kota_kab` VALUES (9433, 'Kab. Puncak', 94, NULL, '2021-05-22 06:09:38');
INSERT INTO `m_kota_kab` VALUES (9434, 'Kab. Dogiyai', 94, NULL, '2021-05-22 06:09:38');
INSERT INTO `m_kota_kab` VALUES (9435, 'Kab. Intan Jaya', 94, NULL, '2021-05-22 06:09:38');
INSERT INTO `m_kota_kab` VALUES (9436, 'Kab. Deiyai', 94, NULL, '2021-05-22 06:09:38');
INSERT INTO `m_kota_kab` VALUES (9471, 'Kota Jayapura', 94, NULL, '2021-05-22 06:09:38');

-- ----------------------------
-- Table structure for m_level
-- ----------------------------
DROP TABLE IF EXISTS `m_level`;
CREATE TABLE `m_level`  (
  `id_level` int(11) NOT NULL AUTO_INCREMENT,
  `level` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `add_by` int(11) NULL DEFAULT NULL,
  `add_time` datetime(0) NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id_level`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of m_level
-- ----------------------------
INSERT INTO `m_level` VALUES (1, 'admin', NULL, '2021-05-22 06:06:01');
INSERT INTO `m_level` VALUES (2, 'siswa', NULL, '2021-05-22 06:06:20');

-- ----------------------------
-- Table structure for m_matkul
-- ----------------------------
DROP TABLE IF EXISTS `m_matkul`;
CREATE TABLE `m_matkul`  (
  `id_matkul` int(11) NOT NULL AUTO_INCREMENT,
  `matkul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kuota` int(11) NULL DEFAULT NULL,
  `sisa_kuota` int(11) NULL DEFAULT NULL,
  `narasumber` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `add_by` int(11) NULL DEFAULT NULL,
  `add_time` datetime(0) NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id_matkul`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of m_matkul
-- ----------------------------
INSERT INTO `m_matkul` VALUES (1, 'Aljabar', 100, 97, 'Bpk. Budi', NULL, '2021-05-22 16:35:52');
INSERT INTO `m_matkul` VALUES (2, 'Kewarnegaraan', 120, 120, 'Bpk. Amin', NULL, '2021-05-22 11:24:40');
INSERT INTO `m_matkul` VALUES (3, 'Agama', 100, 99, 'Bpk. Iman', NULL, '2021-05-22 16:32:27');
INSERT INTO `m_matkul` VALUES (4, 'Sistem Komputer', 70, 70, 'Ibu Sekar', NULL, '2021-05-22 11:24:40');
INSERT INTO `m_matkul` VALUES (5, 'Bahasa Inggris', 90, 89, 'Ibu Mariana', NULL, '2021-05-22 11:49:26');
INSERT INTO `m_matkul` VALUES (6, 'Struktur Data', 100, 99, 'Ibu Euis', 9, '2021-05-22 23:09:43');
INSERT INTO `m_matkul` VALUES (7, 'Pemrograman WEB', 150, 150, 'Bpk. Erik', NULL, '2021-05-22 11:24:40');
INSERT INTO `m_matkul` VALUES (8, 'Multimedia', 80, 80, 'Bpk. Bambang', NULL, '2021-05-22 16:39:08');
INSERT INTO `m_matkul` VALUES (9, 'OOP', 105, 105, 'Bpk. Yuda', 9, '2021-05-22 23:09:18');

-- ----------------------------
-- Table structure for m_provinsi
-- ----------------------------
DROP TABLE IF EXISTS `m_provinsi`;
CREATE TABLE `m_provinsi`  (
  `id_provinsi` bigint(20) NOT NULL AUTO_INCREMENT,
  `provinsi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `add_by` int(11) NULL DEFAULT NULL,
  `add_time` datetime(0) NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id_provinsi`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 96 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of m_provinsi
-- ----------------------------
INSERT INTO `m_provinsi` VALUES (11, 'Aceh', NULL, '2021-05-22 06:08:38');
INSERT INTO `m_provinsi` VALUES (12, 'Sumatera Utara', NULL, '2021-05-22 06:08:38');
INSERT INTO `m_provinsi` VALUES (13, 'Sumatera Barat', NULL, '2021-05-22 06:08:38');
INSERT INTO `m_provinsi` VALUES (14, 'Riau', NULL, '2021-05-22 06:08:38');
INSERT INTO `m_provinsi` VALUES (15, 'Jambi', NULL, '2021-05-22 06:08:38');
INSERT INTO `m_provinsi` VALUES (16, 'Sumatera Selatan', NULL, '2021-05-22 06:08:38');
INSERT INTO `m_provinsi` VALUES (17, 'Bengkulu', NULL, '2021-05-22 06:08:38');
INSERT INTO `m_provinsi` VALUES (18, 'Lampung', NULL, '2021-05-22 06:08:38');
INSERT INTO `m_provinsi` VALUES (19, 'Kepulauan Bangka Belitung', NULL, '2021-05-22 06:08:38');
INSERT INTO `m_provinsi` VALUES (21, 'Kepulauan Riau', NULL, '2021-05-22 06:08:38');
INSERT INTO `m_provinsi` VALUES (31, 'Dki Jakarta', NULL, '2021-05-22 06:08:38');
INSERT INTO `m_provinsi` VALUES (32, 'Jawa Barat', NULL, '2021-05-22 06:08:38');
INSERT INTO `m_provinsi` VALUES (33, 'Jawa Tengah', NULL, '2021-05-22 06:08:38');
INSERT INTO `m_provinsi` VALUES (34, 'Di Yogyakarta', NULL, '2021-05-22 06:08:38');
INSERT INTO `m_provinsi` VALUES (35, 'Jawa Timur', NULL, '2021-05-22 06:08:38');
INSERT INTO `m_provinsi` VALUES (36, 'Banten', NULL, '2021-05-22 06:08:38');
INSERT INTO `m_provinsi` VALUES (51, 'Bali', NULL, '2021-05-22 06:08:39');
INSERT INTO `m_provinsi` VALUES (52, 'Nusa Tenggara Barat', NULL, '2021-05-22 06:08:39');
INSERT INTO `m_provinsi` VALUES (53, 'Nusa Tenggara Timur', NULL, '2021-05-22 06:08:39');
INSERT INTO `m_provinsi` VALUES (61, 'Kalimantan Barat', NULL, '2021-05-22 06:08:39');
INSERT INTO `m_provinsi` VALUES (62, 'Kalimantan Tengah', NULL, '2021-05-22 06:08:39');
INSERT INTO `m_provinsi` VALUES (63, 'Kalimantan Selatan', NULL, '2021-05-22 06:08:39');
INSERT INTO `m_provinsi` VALUES (64, 'Kalimantan Timur', NULL, '2021-05-22 06:08:39');
INSERT INTO `m_provinsi` VALUES (65, 'Kalimantan Utara', NULL, '2021-05-22 06:08:39');
INSERT INTO `m_provinsi` VALUES (71, 'Sulawesi Utara', NULL, '2021-05-22 06:08:39');
INSERT INTO `m_provinsi` VALUES (72, 'Sulawesi Tengah', NULL, '2021-05-22 06:08:39');
INSERT INTO `m_provinsi` VALUES (73, 'Sulawesi Selatan', NULL, '2021-05-22 06:08:39');
INSERT INTO `m_provinsi` VALUES (74, 'Sulawesi Tenggara', NULL, '2021-05-22 06:08:39');
INSERT INTO `m_provinsi` VALUES (75, 'Gorontalo', NULL, '2021-05-22 06:08:39');
INSERT INTO `m_provinsi` VALUES (76, 'Sulawesi Barat', NULL, '2021-05-22 06:08:39');
INSERT INTO `m_provinsi` VALUES (81, 'Maluku', NULL, '2021-05-22 06:08:39');
INSERT INTO `m_provinsi` VALUES (82, 'Maluku Utara', NULL, '2021-05-22 06:08:39');
INSERT INTO `m_provinsi` VALUES (91, 'Papua Barat', NULL, '2021-05-22 06:08:39');
INSERT INTO `m_provinsi` VALUES (94, 'Papua', NULL, '2021-05-22 06:08:39');

-- ----------------------------
-- Table structure for m_siswa
-- ----------------------------
DROP TABLE IF EXISTS `m_siswa`;
CREATE TABLE `m_siswa`  (
  `id_siswa` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `id_provinsi` int(11) NULL DEFAULT NULL,
  `id_kota_kab` int(11) NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `no_wa` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `add_by` int(11) NULL DEFAULT NULL,
  `add_time` datetime(0) NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id_siswa`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of m_siswa
-- ----------------------------
INSERT INTO `m_siswa` VALUES (1, NULL, 'ali', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-22 09:11:23');
INSERT INTO `m_siswa` VALUES (2, NULL, 'maman', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-22 08:39:30');
INSERT INTO `m_siswa` VALUES (3, '12133', 'baban', NULL, '', NULL, NULL, '', '08198829', NULL, '2021-05-22 16:18:00');
INSERT INTO `m_siswa` VALUES (4, '12333', 'iman', 'Perempuan', 's', 11, 1101, '', '0811313132', NULL, '2021-05-22 16:32:27');
INSERT INTO `m_siswa` VALUES (5, '', 'anisa', 'Perempuan', '', 13, 1301, '', '081229028424', NULL, '2021-05-22 16:37:40');

-- ----------------------------
-- Table structure for tr_kuota_matkul
-- ----------------------------
DROP TABLE IF EXISTS `tr_kuota_matkul`;
CREATE TABLE `tr_kuota_matkul`  (
  `id_tr_kuota_matkul` int(11) NOT NULL AUTO_INCREMENT,
  `id_siswa` int(11) NULL DEFAULT NULL,
  `id_matkul` int(11) NULL DEFAULT NULL,
  `add_by` int(11) NULL DEFAULT NULL,
  `add_time` datetime(0) NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id_tr_kuota_matkul`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tr_kuota_matkul
-- ----------------------------
INSERT INTO `tr_kuota_matkul` VALUES (3, 1, 5, 1, '2021-05-22 11:49:26');
INSERT INTO `tr_kuota_matkul` VALUES (4, 1, 6, 1, '2021-05-22 11:49:43');
INSERT INTO `tr_kuota_matkul` VALUES (5, 1, 1, 1, '2021-05-22 11:55:07');
INSERT INTO `tr_kuota_matkul` VALUES (11, 3, 1, 6, '2021-05-22 16:30:45');
INSERT INTO `tr_kuota_matkul` VALUES (12, 4, 3, 7, '2021-05-22 16:32:27');
INSERT INTO `tr_kuota_matkul` VALUES (13, 4, 1, 7, '2021-05-22 16:35:52');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_level` int(11) NULL DEFAULT NULL,
  `id_siswa` int(11) NULL DEFAULT NULL,
  `add_by` int(11) NULL DEFAULT NULL,
  `add_time` datetime(0) NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'ali', '$2y$10$rvbV57YOdGVoAaZDhkpnbOFS70zmQ9tNuk4KITvJgDSFHHGM9InU2', 2, 1, NULL, '2021-05-22 16:38:46');
INSERT INTO `user` VALUES (6, 'baban', '$2y$10$rvbV57YOdGVoAaZDhkpnbOFS70zmQ9tNuk4KITvJgDSFHHGM9InU2', 2, 3, 3, '2021-05-22 16:38:18');
INSERT INTO `user` VALUES (7, 'iman', '$2y$10$rvbV57YOdGVoAaZDhkpnbOFS70zmQ9tNuk4KITvJgDSFHHGM9InU2', 2, 4, 7, '2021-05-22 16:38:13');
INSERT INTO `user` VALUES (8, 'anisa', '$2y$10$rvbV57YOdGVoAaZDhkpnbOFS70zmQ9tNuk4KITvJgDSFHHGM9InU2', 2, 5, 8, '2021-05-22 16:37:41');
INSERT INTO `user` VALUES (9, 'admin', '$2y$10$U7kEY3UqWueiQ/BkRkrxk.7N2OvoGyzSYK7a1f89vTU7z8pEoCeru', 1, NULL, NULL, '2021-05-22 16:42:18');

SET FOREIGN_KEY_CHECKS = 1;
