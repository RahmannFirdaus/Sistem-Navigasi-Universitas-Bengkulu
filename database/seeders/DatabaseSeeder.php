<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Node;
use App\Models\Edge; 
use App\Models\ParkingLocation;
use App\Models\ParkingZone;  
use App\Models\NodeSchedule;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    { $nodes = [
        ['id' => 1, 'name' => "Gerbang Masuk Unib Belakang", 'type' => 'gate', 'lat' => -3.7595514653581716, 'lng' => 102.27512997662785, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 2, 'name' => "LPTIK", 'type' => 'building', 'lat' => -3.758372916495219, 'lng' => 102.27494967197975, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 3, 'name' => "Gerbang Keluar Unib Belakang", 'type' => 'gate', 'lat' => -3.75936130077649, 'lng' => 102.27623666288468, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 4, 'name' => "FISIP", 'type' => 'building', 'lat' => -3.759177453212331, 'lng' => 102.27455299895848, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 5, 'name' => "Stadion", 'type' => 'poi', 'lat' => -3.7578578700860703, 'lng' => 102.27800700414326, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 6, 'name' => "Dekanat Fisip", 'type' => 'building', 'lat' => -3.7592502809052775, 'lng' => 102.27419899685964, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 7, 'name' => "Lab Pembelajaran FKIP", 'type' => 'building', 'lat' => -3.7583322348586847, 'lng' => 102.27570889626327, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 8, 'name' => "Pasca Sarjana Administrasi Pendidikan", 'type' => 'building', 'lat' => -3.7580478836217424, 'lng' => 102.27509021624888, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 9, 'name' => "Dekanat FKIP", 'type' => 'building', 'lat' => -3.7576981039709807, 'lng' => 102.27493239157644, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 10, 'name' => "Perpustakaan", 'type' => 'building', 'lat' => -3.756854385257199, 'lng' => 102.27481448506444, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 11, 'name' => "Masjid Baitul Hikmah", 'type' => 'poi', 'lat' => -3.7590817022129954, 'lng' => 102.27598024101104, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 12, 'name' => "Dekanat Teknik", 'type' => 'building', 'lat' => -3.7585759684082944, 'lng' => 102.27666775727062, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 13, 'name' => "Lab Teknik", 'type' => 'building', 'lat' => -3.7589360785898833, 'lng' => 102.27680897568536, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 14, 'name' => "Gedung Serba Guna", 'type' => 'building', 'lat' => -3.7577551364958737, 'lng' => 102.27657219345718, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 15, 'name' => "Lab Terpadu Teknik", 'type' => 'building', 'lat' => -3.758609355713446, 'lng' => 102.2773960452584, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 16, 'name' => "Lab Sistem Informasi", 'type' => 'building', 'lat' => -3.758429547087232, 'lng' => 102.27738935799476, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 17, 'name' => "Sekretariat HIMA Teknik", 'type' => 'building', 'lat' => -3.7582717907085623, 'lng' => 102.27736053986541, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 18, 'name' => "GB 3 & 4", 'type' => 'building', 'lat' => -3.7564171070800683, 'lng' => 102.27655420949799, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 19, 'name' => "Gedung Pendidikan Profesi Guru", 'type' => 'building', 'lat' => -3.756645491658503, 'lng' => 102.27605506077191, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 20, 'name' => "Gedung PKM", 'type' => 'building', 'lat' => -3.756674076008892, 'lng' => 102.27578306824842, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 21, 'name' => "GB 5", 'type' => 'building', 'lat' => -3.7555030697281495, 'lng' => 102.27643279992401, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 22, 'name' => "Gedung FKIP", 'type' => 'building', 'lat' => -3.7564193427806885, 'lng' => 102.27749210091963, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 23, 'name' => "Fakultas Kedokteran dan Ilmu Kesehatan", 'type' => 'building', 'lat' => -3.754979862955153, 'lng' => 102.27795980347213, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 24, 'name' => "Dekanat MIPA", 'type' => 'building', 'lat' => -3.755956548696915, 'lng' => 102.2748434408972, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 25, 'name' => "GB 1", 'type' => 'building', 'lat' => -3.756972625738598, 'lng' => 102.27377359872537, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 26, 'name' => "Gb 2", 'type' => 'building', 'lat' => -3.758166841349791, 'lng' => 102.2739074247774, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 27, 'name' => "Musholla Shelter", 'type' => 'poi', 'lat' => -3.7577921471219895, 'lng' => 102.27356842154893, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 28, 'name' => "Gedung Pasca Sarjana Pertanian", 'type' => 'building', 'lat' => -3.757416061389918, 'lng' => 102.27373144748651, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 29, 'name' => "Lab Multimedia Komunikasi dan Jurnalistik FISIP", 'type' => 'building', 'lat' => -3.7592245332844954, 'lng' => 102.27393651966258, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 30, 'name' => "Lab Fisika", 'type' => 'building', 'lat' => -3.7563560302309753, 'lng' => 102.27377518351813, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 31, 'name' => "Lab Biologi dan Kimia", 'type' => 'building', 'lat' => -3.7562805698030814, 'lng' => 102.27334060687093, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 32, 'name' => "Rektorat", 'type' => 'building', 'lat' => -3.759299887457715, 'lng' => 102.27234074750658, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 33, 'name' => "Gedung Layanan Terpadu", 'type' => 'building', 'lat' => -3.7581380509764273, 'lng' => 102.27185981679139, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 34, 'name' => "Lab Matematika", 'type' => 'building', 'lat' => -3.7577620082708023, 'lng' => 102.27196529537628, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 35, 'name' => "Lab Teknologi Industri Pertanian", 'type' => 'building', 'lat' => -3.757769413252902, 'lng' => 102.2714358895227, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 36, 'name' => "Gedung Jurusan Peternakan Fakultas Pertanian", 'type' => 'building', 'lat' => -3.7580255362683346, 'lng' => 102.27246933444076, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 37, 'name' => "Gedung Jurusan Budidaya Pertanian", 'type' => 'building', 'lat' => -3.756683305514443, 'lng' => 102.27251316573916, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 38, 'name' => "Workshop Fakultas Teknik", 'type' => 'building', 'lat' => -3.7570096012380247, 'lng' => 102.27192778871176, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 39, 'name' => "Ruang Baca Fakultas Pertanian", 'type' => 'building', 'lat' => -3.7571911095059676, 'lng' => 102.27285769529249, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 40, 'name' => "Klinik Unib", 'type' => 'building', 'lat' => -3.7614486790935047, 'lng' => 102.27178265857242, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 41, 'name' => "Bank BNI Unib", 'type' => 'building', 'lat' => -3.7615655200223586, 'lng' => 102.27173702563033, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 42, 'name' => "Asrama", 'type' => 'building', 'lat' => -3.7617602939182433, 'lng' => 102.27157315379526, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 43, 'name' => "Gedung R UPT Bahasa Inggris", 'type' => 'building', 'lat' => -3.760736776497083, 'lng' => 102.27036663374747, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 44, 'name' => "Gedung I", 'type' => 'building', 'lat' => -3.7601662835221106, 'lng' => 102.27008496925839, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 45, 'name' => "Gedung J", 'type' => 'building', 'lat' => -3.7604293110046996, 'lng' => 102.2697791379087, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 46, 'name' => "Gedung K", 'type' => 'building', 'lat' => -3.761165094009769, 'lng' => 102.26987327896865, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 47, 'name' => "Gedung L", 'type' => 'building', 'lat' => -3.7612278252936306, 'lng' => 102.26930687285017, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 48, 'name' => "Laboratorium Ilmu Tanah", 'type' => 'building', 'lat' => -3.759390869526726, 'lng' => 102.26992505544882, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 49, 'name' => "Gedung Administrasi Dan Unit Penjamin Mutu Fakultas Pertanian", 'type' => 'building', 'lat' => -3.7592998632338634, 'lng' => 102.26952304873623, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 50, 'name' => "Lab Sosek (Sosial Ekonomi Pertanian) / Agribisnis", 'type' => 'building', 'lat' => -3.758994948602563, 'lng' => 102.26943741948577, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 51, 'name' => "Dekanat Fakultas Pertanian", 'type' => 'building', 'lat' => -3.75956403994293, 'lng' => 102.26915100760527, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 52, 'name' => "Gedung Jurusan Kehutanan", 'type' => 'building', 'lat' => -3.7585564103182065, 'lng' => 102.26883477859246, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 53, 'name' => "Gedung Magister Manajemen", 'type' => 'building', 'lat' => -3.7611876990048216, 'lng' => 102.2695824720899, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 54, 'name' => "Gedung Magister Akuntansi", 'type' => 'building', 'lat' => -3.7615620751394943, 'lng' => 102.2690251097813, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 55, 'name' => "Gedung Magister Ilmu Ekonomi", 'type' => 'building', 'lat' => -3.762574547692566, 'lng' => 102.26856754083917, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 56, 'name' => "Dekanat FEB", 'type' => 'building', 'lat' => -3.761615143227104, 'lng' => 102.26844808568126, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 57, 'name' => "Gedung Jurusan Ekonomi Pembangunan", 'type' => 'building', 'lat' => -3.761868617946405, 'lng' => 102.26894259002916, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 58, 'name' => "Lab Hukum", 'type' => 'building', 'lat' => -3.7604411985889215, 'lng' => 102.26866685243749, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 59, 'name' => "Dekanat Fakultas Hukum", 'type' => 'building', 'lat' => -3.7606757277062286, 'lng' => 102.26835854667462, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 60, 'name' => "Perpustakaan Fakultas Hukum", 'type' => 'building', 'lat' => -3.7598174281493613, 'lng' => 102.26834392312446, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 61, 'name' => "Fakultas Hukum", 'type' => 'building', 'lat' => -3.759863760324663, 'lng' => 102.26809061971, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 62, 'name' => "Gedung A", 'type' => 'building', 'lat' => -3.758059068149066, 'lng' => 102.26775061635698, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 63, 'name' => "Gedung B", 'type' => 'building', 'lat' => -3.758736127499276, 'lng' => 102.26783896734645, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 64, 'name' => "Gedung C", 'type' => 'building', 'lat' => -3.7592937772753174, 'lng' => 102.2679752640883, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 65, 'name' => "Masjid Darul Ulum", 'type' => 'poi', 'lat' => -3.7574219184695323, 'lng' => 102.26757323935664, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 66, 'name' => "Gedung Pasca Sarjana Ilmu Hukum", 'type' => 'building', 'lat' => -3.7595289843104354, 'lng' => 102.26820648977309, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 67, 'name' => "Gerbang Keluar Unib Depan", 'type' => 'gate', 'lat' => -3.7591644579459427, 'lng' => 102.26684912742934, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 68, 'name' => "Gerbang Masuk Unib Depan", 'type' => 'gate', 'lat' => -3.7600026923330034, 'lng' => 102.26706348042904, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 69, 'name' => "Lapangan Futsal, Voli, Basket", 'type' => 'poi', 'lat' => -3.7594504140760563, 'lng' => 102.26719610506882, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 70, 'name' => "GOR Unib", 'type' => 'poi', 'lat' => -3.760787452747735, 'lng' => 102.26768733640296, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 71, 'name' => "Gerbang Masuk Depan Rektorat", 'type' => 'gate', 'lat' => -3.7606142437351764, 'lng' => 102.27264469501478, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 72, 'name' => "Tikungan Gerbang Masuk Unib Belakang", 'type' => 'jalan', 'lat' => -3.759465490614545, 'lng' => 102.27502126048557, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 73, 'name' => "Simpang Dekat LPTIK", 'type' => 'jalan', 'lat' => -3.7588520981933016, 'lng' => 102.27475005829854, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 74, 'name' => "Simpang Menuju LPTIK", 'type' => 'jalan', 'lat' => -3.7585885790615805, 'lng' => 102.27533168693981, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 75, 'name' => "Titik Menuju Lab Pembelajaran FKIP", 'type' => 'jalan', 'lat' => -3.7585094922378914, 'lng' => 102.27573099362166, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 76, 'name' => "Simpang Lab Teknik", 'type' => 'jalan', 'lat' => -3.758756469322762, 'lng' => 102.27628318093082, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 77, 'name' => "Titik Menuju Masjid Baitul Hikmah", 'type' => 'jalan', 'lat' => -3.759054132794276, 'lng' => 102.2762626871754, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 78, 'name' => "Simpang GSG & Dekanat Teknik", 'type' => 'jalan', 'lat' => -3.7582822031299656, 'lng' => 102.27664398066753, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 79, 'name' => "Simpang Sekretariat HIMA Teknik", 'type' => 'jalan', 'lat' => -3.75833042410153, 'lng' => 102.27715823098032, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 80, 'name' => "Simpang Gedung Sistem Informasi", 'type' => 'jalan', 'lat' => -3.758415003634582, 'lng' => 102.27715685511333, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 81, 'name' => "Simpang Gedung Lab Terpadu Teknik", 'type' => 'jalan', 'lat' => -3.7585911562146066, 'lng' => 102.27713846528195, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 82, 'name' => "Titik Menuju Lab Teknik", 'type' => 'jalan', 'lat' => -3.7589274509019504, 'lng' => 102.27665333190453, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 83, 'name' => "Simpang GSG Bagian Lain", 'type' => 'jalan', 'lat' => -3.757458868961564, 'lng' => 102.27696436605248, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 84, 'name' => "Simpang Menuju Gedung Pendidikan Profesi Guru", 'type' => 'jalan', 'lat' => -3.756869859121622, 'lng' => 102.2767579730189, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 85, 'name' => "Titik Menuju GB 3 & 4", 'type' => 'jalan', 'lat' => -3.756531654307693, 'lng' => 102.27674578663681, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 86, 'name' => "Simpang GB 3 & 4", 'type' => 'jalan', 'lat' => -3.755930331574234, 'lng' => 102.27689445305549, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 87, 'name' => "Titik Menuju Stadion", 'type' => 'jalan', 'lat' => -3.7577515881249326, 'lng' => 102.2772845306165, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 88, 'name' => "Simpang Gedung FKIP", 'type' => 'jalan', 'lat' => -3.75685699214597, 'lng' => 102.27699900853548, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 89, 'name' => "Titik menuju Gedung FKIP", 'type' => 'jalan', 'lat' => -3.7566659518851964, 'lng' => 102.27750105659453, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 90, 'name' => "Titik Menuju Gedung Pendidikan Profesi Guru", 'type' => 'jalan', 'lat' => -3.7569059873405877, 'lng' => 102.27607398406286, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 91, 'name' => "Titik Menuju Gedung PKM", 'type' => 'jalan', 'lat' => -3.756913723858972, 'lng' => 102.27579208087536, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 92, 'name' => "Titik Menuju GB 5", 'type' => 'jalan', 'lat' => -3.755748473262855, 'lng' => 102.27649665022989, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 93, 'name' => "Titik Menuju Lab Fisika", 'type' => 'jalan', 'lat' => -3.756535588482123, 'lng' => 102.27400425320224, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 94, 'name' => "Titik Menuju Perpustakaan", 'type' => 'jalan', 'lat' => -3.7573080537995622, 'lng' => 102.27473659304525, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 95, 'name' => "Titik Menuju Dekanat FKIP", 'type' => 'jalan', 'lat' => -3.75770594600543, 'lng' => 102.27476144397508, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 96, 'name' => "Titik Menuju Pasca Sarjana Administrasi Pendidikan", 'type' => 'jalan', 'lat' => -3.7580613209371876, 'lng' => 102.27477115595224, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 97, 'name' => "Titik Menuju LPTIK", 'type' => 'jalan', 'lat' => -3.7582746533411893, 'lng' => 102.274921938136, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 98, 'name' => "Titik Menuju GB 1", 'type' => 'jalan', 'lat' => -3.757656314640755, 'lng' => 102.27410658330018, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 99, 'name' => "Titik Menuju GB 2", 'type' => 'jalan', 'lat' => -3.7577456947576735, 'lng' => 102.27395878836649, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 100, 'name' => "Titik Menuju Musholla Shelter", 'type' => 'jalan', 'lat' => -3.757938979228271, 'lng' => 102.27359601898473, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 101, 'name' => "Titik Menuju Lab Biologi & Kimia", 'type' => 'jalan', 'lat' => -3.755992102443358, 'lng' => 102.27345208682874, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 102, 'name' => "Titik Menuju Gedung Jurusan Budidaya Pertanian", 'type' => 'jalan', 'lat' => -3.7564280299464485, 'lng' => 102.27247434069704, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 103, 'name' => "Simpang FISIP", 'type' => 'jalan', 'lat' => -3.759673846590445, 'lng' => 102.27471013204865, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 104, 'name' => "Simpang Lab Multimedia Komunikasi", 'type' => 'jalan', 'lat' => -3.7599447227793235, 'lng' => 102.274308396408, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 105, 'name' => "Simpang Menuju Rektorat", 'type' => 'jalan', 'lat' => -3.75904019181165, 'lng' => 102.27157098203548, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 106, 'name' => "Titik Menuju Rektorat", 'type' => 'jalan', 'lat' => -3.7589188255373642, 'lng' => 102.27224829744648, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 107, 'name' => "Titik Menuju Gedung Layanan Terpadu", 'type' => 'jalan', 'lat' => -3.7582067868008266, 'lng' => 102.27217097793357, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 108, 'name' => "Titik Menuju Gedung Jurusan Peternakan", 'type' => 'jalan', 'lat' => -3.757968603234218, 'lng' => 102.27224635515296, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 109, 'name' => "Titik Menuju Lab Matematika", 'type' => 'jalan', 'lat' => -3.7578215905842853, 'lng' => 102.27229660705001, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 110, 'name' => "Titik Menuju Ruang Baca Fakultas Pertanian", 'type' => 'jalan', 'lat' => -3.757252912913742, 'lng' => 102.27247248842838, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 111, 'name' => "Titik Menuju Workshop Teknik", 'type' => 'jalan', 'lat' => -3.7572264676113036, 'lng' => 102.27187693728621, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 112, 'name' => "Titik Menuju Lab Tanah", 'type' => 'jalan', 'lat' => -3.7594341590291265, 'lng' => 102.26969292365675, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 113, 'name' => "Titik Menuju Lab Teknologi Industri Pertanian", 'type' => 'jalan', 'lat' => -3.7574542562661435, 'lng' => 102.27138604258272, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 114, 'name' => "Titik Menuju Bank BNI", 'type' => 'jalan', 'lat' => -3.7615483364019298, 'lng' => 102.27187626569696, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 115, 'name' => "Titik Menuju Asrama", 'type' => 'jalan', 'lat' => -3.761843842020454, 'lng' => 102.27172870514403, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 116, 'name' => "Titik Menuju Gedung K", 'type' => 'jalan', 'lat' => -3.7609131396960294, 'lng' => 102.27004604279796, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 117, 'name' => "Titik Menuju Gedung R UPT Bahasa Inggris", 'type' => 'jalan', 'lat' => -3.7607374445046986, 'lng' => 102.27000583684224, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 118, 'name' => "Titik menuju Gedung I", 'type' => 'jalan', 'lat' => -3.7600404698726777, 'lng' => 102.2698243637729, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 119, 'name' => "Titik Menuju Gedung J", 'type' => 'jalan', 'lat' => -3.760402301627394, 'lng' => 102.2699246982645, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 120, 'name' => "Titik Menuju Dekanat & Gedung Administrasi Fakultas Pertanian", 'type' => 'jalan', 'lat' => -3.759397391878153, 'lng' => 102.2693222549446, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 121, 'name' => "Titik Menuju Lab Agribisnis", 'type' => 'jalan', 'lat' => -3.7591241158446422, 'lng' => 102.2692323050527, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 122, 'name' => "Titik Menuju Gedung Jurusan Pertanian", 'type' => 'jalan', 'lat' => -3.758470132634173, 'lng' => 102.26901322489215, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 123, 'name' => "Titik Menuju Gedung Magister Managemen", 'type' => 'jalan', 'lat' => -3.760933543422624, 'lng' => 102.26952344025733, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 124, 'name' => "Titik Menuju Gedung L", 'type' => 'jalan', 'lat' => -3.7609700108955337, 'lng' => 102.26942598377804, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 125, 'name' => "Titik Menuju Gedung Magister Akuntansi", 'type' => 'jalan', 'lat' => -3.7614221046019054, 'lng' => 102.26885974866838, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 126, 'name' => "Titik Menuju Dekanat FEB & Gedung Jurusan Ekonomi Pembangunan", 'type' => 'jalan', 'lat' => -3.7617403713758506, 'lng' => 102.26868212757364, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 127, 'name' => "Titik Menuju Gedung Magister Ilmu Ekonomi", 'type' => 'jalan', 'lat' => -3.7620862376366233, 'lng' => 102.2685645697672, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 128, 'name' => "Titik Menuju Lab Hukum", 'type' => 'jalan', 'lat' => -3.760151761619511, 'lng' => 102.26873071792056, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 129, 'name' => "Titik Menuju Perpustakaan Fakultas Hukum", 'type' => 'jalan', 'lat' => -3.7600945428269057, 'lng' => 102.26843546643795, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 130, 'name' => "Titik Menuju Dekanat Fakultas Hukum", 'type' => 'jalan', 'lat' => -3.760204110758494, 'lng' => 102.26811691771712, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 131, 'name' => "Titik menuju Fakultas Hukum", 'type' => 'jalan', 'lat' => -3.759933151289715, 'lng' => 102.26791946299494, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 132, 'name' => "Titik Menuju Gedung Pasca Sarjana Ilmu Hukum", 'type' => 'jalan', 'lat' => -3.759705493462093, 'lng' => 102.26783649976761, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 133, 'name' => "Titik Menuju Gedung C", 'type' => 'jalan', 'lat' => -3.7593434204541296, 'lng' => 102.26774053229985, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 134, 'name' => "Titik Menuju Gedung B", 'type' => 'jalan', 'lat' => -3.758868694543395, 'lng' => 102.26762974009637, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 135, 'name' => "Titik Menuju Gedung A", 'type' => 'jalan', 'lat' => -3.758118308800661, 'lng' => 102.26755362881727, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 136, 'name' => "Titik Menuju Masjid Darul Ulum", 'type' => 'jalan', 'lat' => -3.7576067319764803, 'lng' => 102.26768432130632, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 158, 'name' => "Titik Menuju Fakultas Kedokteran", 'type' => 'jalan', 'lat' => -3.7554510893437367, 'lng' => 102.27804883721018, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 378, 'name' => "Titik Menuju Dekanat MIPA", 'type' => 'jalan', 'lat' => -3.7556631812275896, 'lng' => 102.27464254349667, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 137, 'name' => "J-1", 'type' => 'jalan', 'lat' => -3.7593221271511226, 'lng' => 102.27495978289238, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 138, 'name' => "J-2", 'type' => 'jalan', 'lat' => -3.759055854856669, 'lng' => 102.27482884280045, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 139, 'name' => "J-3", 'type' => 'jalan', 'lat' => -3.7587873061516888, 'lng' => 102.27487694702762, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 140, 'name' => "J-4", 'type' => 'jalan', 'lat' => -3.758545291690737, 'lng' => 102.27546588696993, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 141, 'name' => "J-5", 'type' => 'jalan', 'lat' => -3.7585209796650645, 'lng' => 102.27557408521142, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 142, 'name' => "J-6", 'type' => 'jalan', 'lat' => -3.7584828121877365, 'lng' => 102.27598292088152, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 143, 'name' => "J-7", 'type' => 'jalan', 'lat' => -3.758430079399318, 'lng' => 102.27618982119105, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 144, 'name' => "J-8", 'type' => 'jalan', 'lat' => -3.7584336172298833, 'lng' => 102.27620236437093, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 145, 'name' => "J-9", 'type' => 'jalan', 'lat' => -3.7584577802614945, 'lng' => 102.27623247377613, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 146, 'name' => "J-10", 'type' => 'jalan', 'lat' => -3.7584968572627417, 'lng' => 102.27626453339064, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 147, 'name' => "J-11", 'type' => 'jalan', 'lat' => -3.7585563170764544, 'lng' => 102.27629227820938, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 148, 'name' => "J-12", 'type' => 'jalan', 'lat' => -3.758377541202023, 'lng' => 102.27636069319487, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 149, 'name' => "J-13", 'type' => 'jalan', 'lat' => -3.758286479721974, 'lng' => 102.27655706147237, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 150, 'name' => "J-14", 'type' => 'jalan', 'lat' => -3.7582491144015364, 'lng' => 102.27716035319474, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 151, 'name' => "J-15", 'type' => 'jalan', 'lat' => -3.75873111271423, 'lng' => 102.27712043243628, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 152, 'name' => "J-16", 'type' => 'jalan', 'lat' => -3.759192119714399, 'lng' => 102.27699127039108, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 153, 'name' => "J-17", 'type' => 'jalan', 'lat' => -3.7591960940943494, 'lng' => 102.276754343118, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 154, 'name' => "J-18", 'type' => 'jalan', 'lat' => -3.759183016203963, 'lng' => 102.27668032657755, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 155, 'name' => "J-19", 'type' => 'jalan', 'lat' => -3.7591625622889495, 'lng' => 102.27666141827297, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 156, 'name' => "J-20", 'type' => 'jalan', 'lat' => -3.759146064223316, 'lng' => 102.27665535584532, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 157, 'name' => "J-21", 'type' => 'jalan', 'lat' => -3.7591077758474825, 'lng' => 102.27665004857721, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 159, 'name' => "J-23", 'type' => 'jalan', 'lat' => -3.7587927702672204, 'lng' => 102.27665331672694, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 160, 'name' => "J-24", 'type' => 'jalan', 'lat' => -3.758781391608565, 'lng' => 102.27664797614932, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 161, 'name' => "J-25", 'type' => 'jalan', 'lat' => -3.758770513085821, 'lng' => 102.27663561693294, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 162, 'name' => "J-26", 'type' => 'jalan', 'lat' => -3.7587662936266213, 'lng' => 102.27660118456635, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 163, 'name' => "J-27", 'type' => 'jalan', 'lat' => -3.758417683902948, 'lng' => 102.27633557132901, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 164, 'name' => "J-28", 'type' => 'jalan', 'lat' => -3.758475664988154, 'lng' => 102.27631343014059, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 165, 'name' => "J-29", 'type' => 'jalan', 'lat' => -3.7581638473602794, 'lng' => 102.27719749156466, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 166, 'name' => "J-30", 'type' => 'jalan', 'lat' => -3.7570235499181592, 'lng' => 102.276821889352, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 167, 'name' => "J-31", 'type' => 'jalan', 'lat' => -3.7560661774757165, 'lng' => 102.2767295990111, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 168, 'name' => "J-32", 'type' => 'jalan', 'lat' => -3.756044926287416, 'lng' => 102.27673296680263, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 169, 'name' => "J-33", 'type' => 'jalan', 'lat' => -3.756022325541281, 'lng' => 102.27674340006189, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 170, 'name' => "J-34", 'type' => 'jalan', 'lat' => -3.75600113939538, 'lng' => 102.27676305000097, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 171, 'name' => "J-35", 'type' => 'jalan', 'lat' => -3.755975380272588, 'lng' => 102.27679629130233, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 172, 'name' => "J-36", 'type' => 'jalan', 'lat' => -3.758067500733489, 'lng' => 102.27723813539257, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 173, 'name' => "J-37", 'type' => 'jalan', 'lat' => -3.757827909522007, 'lng' => 102.27728401479152, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 174, 'name' => "J-38", 'type' => 'jalan', 'lat' => -3.7575358552601585, 'lng' => 102.27723508664599, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 175, 'name' => "J-39", 'type' => 'jalan', 'lat' => -3.7570747803747935, 'lng' => 102.277086257022, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 176, 'name' => "J-40", 'type' => 'jalan', 'lat' => -3.7568104218271685, 'lng' => 102.27697878315468, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 177, 'name' => "J-41", 'type' => 'jalan', 'lat' => -3.756663035072762, 'lng' => 102.27694724901914, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 178, 'name' => "J-42", 'type' => 'jalan', 'lat' => -3.756537442495741, 'lng' => 102.2769322142372, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 179, 'name' => "J-43", 'type' => 'jalan', 'lat' => -3.756894302301248, 'lng' => 102.2765456384206, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 180, 'name' => "J-44", 'type' => 'jalan', 'lat' => -3.755764278042804, 'lng' => 102.27690148929173, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 181, 'name' => "J-45", 'type' => 'jalan', 'lat' => -3.7557280039940366, 'lng' => 102.27696034510643, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 182, 'name' => "J-46", 'type' => 'jalan', 'lat' => -3.7557003666224347, 'lng' => 102.27702612513292, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 183, 'name' => "J-47", 'type' => 'jalan', 'lat' => -3.755651753771275, 'lng' => 102.27725162538661, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 184, 'name' => "J-48", 'type' => 'jalan', 'lat' => -3.755542827310734, 'lng' => 102.2776575241108, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 185, 'name' => "J-49", 'type' => 'jalan', 'lat' => -3.7557418588648233, 'lng' => 102.27674552955727, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 186, 'name' => "J-50", 'type' => 'jalan', 'lat' => -3.7557382509500457, 'lng' => 102.27663284088044, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 187, 'name' => "J-51", 'type' => 'jalan', 'lat' => -3.7557761242132983, 'lng' => 102.2763119842246, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 188, 'name' => "J-52", 'type' => 'jalan', 'lat' => -3.755800176975029, 'lng' => 102.27624810722062, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 189, 'name' => "J-53", 'type' => 'jalan', 'lat' => -3.7558350534768294, 'lng' => 102.2761926668017, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 190, 'name' => "J-54", 'type' => 'jalan', 'lat' => -3.755890374821192, 'lng' => 102.27614626558244, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 191, 'name' => "J-55", 'type' => 'jalan', 'lat' => -3.756035184114978, 'lng' => 102.276057079547, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 192, 'name' => "J-56", 'type' => 'jalan', 'lat' => -3.7560760737956542, 'lng' => 102.27602333320624, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 193, 'name' => "J-57", 'type' => 'jalan', 'lat' => -3.7561103489672405, 'lng' => 102.27595463529622, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 194, 'name' => "J-58", 'type' => 'jalan', 'lat' => -3.7561307938066335, 'lng' => 102.27588352693255, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 195, 'name' => "J-59", 'type' => 'jalan', 'lat' => -3.75613139512474, 'lng' => 102.27577746700183, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 196, 'name' => "J-60", 'type' => 'jalan', 'lat' => -3.756109762216653, 'lng' => 102.27566584468121, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 197, 'name' => "J-61", 'type' => 'jalan', 'lat' => -3.755918578613745, 'lng' => 102.2753056710398, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 198, 'name' => "J-62", 'type' => 'jalan', 'lat' => -3.755697290799489, 'lng' => 102.27495277938266, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 199, 'name' => "J-63", 'type' => 'jalan', 'lat' => -3.7556661878231097, 'lng' => 102.27485767642537, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 200, 'name' => "J-64", 'type' => 'jalan', 'lat' => -3.7556517561639566, 'lng' => 102.27477511841062, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 201, 'name' => "J-65", 'type' => 'jalan', 'lat' => -3.75567592403506, 'lng' => 102.27452931966047, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 202, 'name' => "J-66", 'type' => 'jalan', 'lat' => -3.755747385609041, 'lng' => 102.27412340030213, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 203, 'name' => "J-67", 'type' => 'jalan', 'lat' => -3.755802105933199, 'lng' => 102.27388335377833, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 204, 'name' => "J-68", 'type' => 'jalan', 'lat' => -3.756161731548545, 'lng' => 102.27400127895919, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 205, 'name' => "J-69", 'type' => 'jalan', 'lat' => -3.756598264064394, 'lng' => 102.2740019911414, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 206, 'name' => "J-70", 'type' => 'jalan', 'lat' => -3.7570122181239753, 'lng' => 102.27404074000168, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 207, 'name' => "J-71", 'type' => 'jalan', 'lat' => -3.757179423795222, 'lng' => 102.2740791404982, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 208, 'name' => "J-72", 'type' => 'jalan', 'lat' => -3.757355338059611, 'lng' => 102.27415594148965, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 209, 'name' => "J-73", 'type' => 'jalan', 'lat' => -3.757498159515407, 'lng' => 102.27426067011396, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 210, 'name' => "J-74", 'type' => 'jalan', 'lat' => -3.7574430182306315, 'lng' => 102.2743668955984, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 211, 'name' => "J-75", 'type' => 'jalan', 'lat' => -3.757336043153259, 'lng' => 102.27474541388051, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 212, 'name' => "J-76", 'type' => 'jalan', 'lat' => -3.7573570376206646, 'lng' => 102.27476044223175, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 213, 'name' => "J-77", 'type' => 'jalan', 'lat' => -3.757379031824854, 'lng' => 102.27478749326366, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 214, 'name' => "J-78", 'type' => 'jalan', 'lat' => -3.7574830044164145, 'lng' => 102.27475743656112, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 215, 'name' => "J-79", 'type' => 'jalan', 'lat' => -3.758143299264077, 'lng' => 102.27477716729356, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 216, 'name' => "J-80", 'type' => 'jalan', 'lat' => -3.75823727441022, 'lng' => 102.2747962032044, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 217, 'name' => "J-81", 'type' => 'jalan', 'lat' => -3.7582485979906863, 'lng' => 102.27480382814696, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 218, 'name' => "J-82", 'type' => 'jalan', 'lat' => -3.758260892216299, 'lng' => 102.27481709661504, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 219, 'name' => "J-83", 'type' => 'jalan', 'lat' => -3.75827034931244, 'lng' => 102.2748374731915, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 220, 'name' => "J-84", 'type' => 'jalan', 'lat' => -3.758276023569934, 'lng' => 102.27485927139065, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 221, 'name' => "J-85", 'type' => 'jalan', 'lat' => -3.758263304826187, 'lng' => 102.27507215615884, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 222, 'name' => "J-86", 'type' => 'jalan', 'lat' => -3.758281273308995, 'lng' => 102.27517688229005, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 223, 'name' => "J-87", 'type' => 'jalan', 'lat' => -3.7583328148942456, 'lng' => 102.27522047864312, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 224, 'name' => "J-88", 'type' => 'jalan', 'lat' => -3.7583744261135053, 'lng' => 102.27524512008597, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 225, 'name' => "J-89", 'type' => 'jalan', 'lat' => -3.7575635827605254, 'lng' => 102.27421183120754, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 226, 'name' => "J-90", 'type' => 'jalan', 'lat' => -3.757611624579411, 'lng' => 102.27415696793605, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 227, 'name' => "J-91", 'type' => 'jalan', 'lat' => -3.757696535694862, 'lng' => 102.27404500207854, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 228, 'name' => "J-92", 'type' => 'jalan', 'lat' => -3.757888702925385, 'lng' => 102.27369454893977, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 229, 'name' => "J-93", 'type' => 'jalan', 'lat' => -3.758169096338321, 'lng' => 102.27308801483451, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 230, 'name' => "J-94", 'type' => 'jalan', 'lat' => -3.758289281102364, 'lng' => 102.27279546238549, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 231, 'name' => "J-95", 'type' => 'jalan', 'lat' => -3.758403057701514, 'lng' => 102.27249529250724, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 232, 'name' => "J-96", 'type' => 'jalan', 'lat' => -3.758466740996738, 'lng' => 102.27236093343328, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 233, 'name' => "J-97", 'type' => 'jalan', 'lat' => -3.7584812652530815, 'lng' => 102.27233294196895, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 234, 'name' => "J-98", 'type' => 'jalan', 'lat' => -3.7585058447632633, 'lng' => 102.27224112996396, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 235, 'name' => "J-99", 'type' => 'jalan', 'lat' => -3.758508079263649, 'lng' => 102.27209557434924, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 236, 'name' => "J-100", 'type' => 'jalan', 'lat' => -3.7587870911184353, 'lng' => 102.27472642261284, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 237, 'name' => "J-101", 'type' => 'jalan', 'lat' => -3.758704949987248, 'lng' => 102.27467858906238, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 238, 'name' => "J-102", 'type' => 'jalan', 'lat' => -3.7586105986787715, 'lng' => 102.27460739494234, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 239, 'name' => "J-103", 'type' => 'jalan', 'lat' => -3.758477396814598, 'lng' => 102.27448947967878, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 240, 'name' => "J-104", 'type' => 'jalan', 'lat' => -3.758323104598091, 'lng' => 102.27436377745369, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 241, 'name' => "J-105", 'type' => 'jalan', 'lat' => -3.758233193312222, 'lng' => 102.27430481981975, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 242, 'name' => "J-106", 'type' => 'jalan', 'lat' => -3.7580621145831543, 'lng' => 102.27423635070016, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 243, 'name' => "J-107", 'type' => 'jalan', 'lat' => -3.758015493904523, 'lng' => 102.2742185521713, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 244, 'name' => "J-108", 'type' => 'jalan', 'lat' => -3.7578656417026792, 'lng' => 102.27418851714981, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 245, 'name' => "J-109", 'type' => 'jalan', 'lat' => -3.757758201952001, 'lng' => 102.27416738158257, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 246, 'name' => "J-110", 'type' => 'jalan', 'lat' => -3.7577138012886593, 'lng' => 102.27414513341978, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 247, 'name' => "J-111", 'type' => 'jalan', 'lat' => -3.7576803838691717, 'lng' => 102.27419853192151, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 248, 'name' => "J-112", 'type' => 'jalan', 'lat' => -3.757733217227056, 'lng' => 102.27422344824487, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 249, 'name' => "J-113", 'type' => 'jalan', 'lat' => -3.7579383349401354, 'lng' => 102.2742374636772, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 250, 'name' => "J-114", 'type' => 'jalan', 'lat' => -3.7581868984461977, 'lng' => 102.27431344546648, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 251, 'name' => "J-115", 'type' => 'jalan', 'lat' => -3.758263040592979, 'lng' => 102.27435704903348, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 252, 'name' => "J-116", 'type' => 'jalan', 'lat' => -3.758580563909888, 'lng' => 102.27464344312631, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 253, 'name' => "J-117", 'type' => 'jalan', 'lat' => -3.7587435568713516, 'lng' => 102.27476006865419, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 254, 'name' => "J-118", 'type' => 'jalan', 'lat' => -3.758825914651041, 'lng' => 102.27480211495134, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 255, 'name' => "J-119", 'type' => 'jalan', 'lat' => -3.755824370141795, 'lng' => 102.27381693457926, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 256, 'name' => "J-120", 'type' => 'jalan', 'lat' => -3.755876931419408, 'lng' => 102.27367750231781, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 257, 'name' => "J-121", 'type' => 'jalan', 'lat' => -3.755938768212161, 'lng' => 102.273545816293, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 258, 'name' => "J-122", 'type' => 'jalan', 'lat' => -3.75607326502454, 'lng' => 102.27331807729439, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 259, 'name' => "J-123", 'type' => 'jalan', 'lat' => -3.756266504945444, 'lng' => 102.27303224115906, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 260, 'name' => "J-124", 'type' => 'jalan', 'lat' => -3.7563341967204735, 'lng' => 102.2729217993388, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 261, 'name' => "J-125", 'type' => 'jalan', 'lat' => -3.7563940818184847, 'lng' => 102.27274480939366, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 262, 'name' => "J-126", 'type' => 'jalan', 'lat' => -3.7564178455085795, 'lng' => 102.27263338989837, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 263, 'name' => "J-127", 'type' => 'jalan', 'lat' => -3.756436517140088, 'lng' => 102.27221322747135, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 264, 'name' => "J-128", 'type' => 'jalan', 'lat' => -3.756429767593005, 'lng' => 102.27203404209371, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 265, 'name' => "J-129", 'type' => 'jalan', 'lat' => -3.7564344345919523, 'lng' => 102.27196622491664, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 266, 'name' => "J-130", 'type' => 'jalan', 'lat' => -3.7564538804180643, 'lng' => 102.2718789200469, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 267, 'name' => "J-131", 'type' => 'jalan', 'lat' => -3.7564873272382044, 'lng' => 102.27178070206747, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 268, 'name' => "J-132", 'type' => 'jalan', 'lat' => -3.756571957358844, 'lng' => 102.27165437390784, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 269, 'name' => "J-133", 'type' => 'jalan', 'lat' => -3.7568357280015334, 'lng' => 102.27134623058299, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 270, 'name' => "J-134", 'type' => 'jalan', 'lat' => -3.756968796488806, 'lng' => 102.2713351718964, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 271, 'name' => "J-135", 'type' => 'jalan', 'lat' => -3.757363698612579, 'lng' => 102.27130496176682, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 272, 'name' => "J-136", 'type' => 'jalan', 'lat' => -3.757696538200136, 'lng' => 102.27124876162117, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 273, 'name' => "J-137", 'type' => 'jalan', 'lat' => -3.7580555952150547, 'lng' => 102.27119964186778, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 274, 'name' => "J-138", 'type' => 'jalan', 'lat' => -3.75829374202182, 'lng' => 102.27114979515494, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 275, 'name' => "J-139", 'type' => 'jalan', 'lat' => -3.7584444678327316, 'lng' => 102.27106822752046, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 276, 'name' => "J-140", 'type' => 'jalan', 'lat' => -3.7585409323278327, 'lng' => 102.27099270219651, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 277, 'name' => "J-141", 'type' => 'jalan', 'lat' => -3.7594972562574327, 'lng' => 102.27499893164492, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 278, 'name' => "J-142", 'type' => 'jalan', 'lat' => -3.760192413510268, 'lng' => 102.27392713316817, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 279, 'name' => "J-143", 'type' => 'jalan', 'lat' => -3.7602910006783077, 'lng' => 102.27375341912494, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 280, 'name' => "J-144", 'type' => 'jalan', 'lat' => -3.7603321689425826, 'lng' => 102.27364267642213, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 281, 'name' => "J-145", 'type' => 'jalan', 'lat' => -3.7603874210829815, 'lng' => 102.27341467674103, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 282, 'name' => "J-146", 'type' => 'jalan', 'lat' => -3.760482756384718, 'lng' => 102.27277627665268, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 283, 'name' => "J-147", 'type' => 'jalan', 'lat' => -3.760556426228746, 'lng' => 102.27262536165978, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 284, 'name' => "J-148", 'type' => 'jalan', 'lat' => -3.760695098227032, 'lng' => 102.27232461922233, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 285, 'name' => "J-149", 'type' => 'jalan', 'lat' => -3.760513199917156, 'lng' => 102.27207671286237, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 286, 'name' => "J-150", 'type' => 'jalan', 'lat' => -3.76037127029673, 'lng' => 102.2720031425905, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 287, 'name' => "J-151", 'type' => 'jalan', 'lat' => -3.759956161520506, 'lng' => 102.27187976843493, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 288, 'name' => "J-152", 'type' => 'jalan', 'lat' => -3.759702645674878, 'lng' => 102.27181502659852, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 289, 'name' => "J-153", 'type' => 'jalan', 'lat' => -3.759153735683242, 'lng' => 102.27163474293604, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 290, 'name' => "J-154", 'type' => 'jalan', 'lat' => -3.759096963749329, 'lng' => 102.27160923857701, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 291, 'name' => "J-155", 'type' => 'jalan', 'lat' => -3.75895576863266, 'lng' => 102.27149953341666, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 292, 'name' => "J-156", 'type' => 'jalan', 'lat' => -3.7588627800978003, 'lng' => 102.27138966847872, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 293, 'name' => "J-157", 'type' => 'jalan', 'lat' => -3.7587179137275655, 'lng' => 102.27119740483727, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 294, 'name' => "J-158", 'type' => 'jalan', 'lat' => -3.7586405856633007, 'lng' => 102.27107969251864, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 295, 'name' => "J-159", 'type' => 'jalan', 'lat' => -3.758968227470305, 'lng' => 102.27200515599742, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 296, 'name' => "J-160", 'type' => 'jalan', 'lat' => -3.758425461528759, 'lng' => 102.27210080758385, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 297, 'name' => "J-161", 'type' => 'jalan', 'lat' => -3.757319011670603, 'lng' => 102.27247705678172, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 298, 'name' => "J-162", 'type' => 'jalan', 'lat' => -3.757301917165094, 'lng' => 102.27248048304767, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 299, 'name' => "J-163", 'type' => 'jalan', 'lat' => -3.757179976347885, 'lng' => 102.2724382257723, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 300, 'name' => "J-164", 'type' => 'jalan', 'lat' => -3.7571366702627813, 'lng' => 102.27235827953672, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 301, 'name' => "J-165", 'type' => 'jalan', 'lat' => -3.7570762696621927, 'lng' => 102.27231145390579, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 302, 'name' => "J-166", 'type' => 'jalan', 'lat' => -3.756963445887152, 'lng' => 102.2722840437795, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 303, 'name' => "J-167", 'type' => 'jalan', 'lat' => -3.757165555887113, 'lng' => 102.2721440000775, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 304, 'name' => "J-168", 'type' => 'jalan', 'lat' => -3.757229005600422, 'lng' => 102.27199139276843, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 305, 'name' => "J-169", 'type' => 'jalan', 'lat' => -3.7570293558614907, 'lng' => 102.27140651448792, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 306, 'name' => "J-170", 'type' => 'jalan', 'lat' => -3.757111067494108, 'lng' => 102.27141675044055, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 307, 'name' => "J-171", 'type' => 'jalan', 'lat' => -3.758508583604524, 'lng' => 102.27206424596562, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 308, 'name' => "J-172", 'type' => 'jalan', 'lat' => -3.758523874794477, 'lng' => 102.27156876515755, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 309, 'name' => "J-173", 'type' => 'jalan', 'lat' => -3.7585340689197153, 'lng' => 102.27138104433601, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 310, 'name' => "J-174", 'type' => 'jalan', 'lat' => -3.7586028751369867, 'lng' => 102.27097159831459, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 311, 'name' => "J-175", 'type' => 'jalan', 'lat' => -3.758875608519986, 'lng' => 102.27027682608076, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 312, 'name' => "J-176", 'type' => 'jalan', 'lat' => -3.7589929682937395, 'lng' => 102.27006619305627, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 313, 'name' => "J-177", 'type' => 'jalan', 'lat' => -3.7591552009197216, 'lng' => 102.26980651281252, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 314, 'name' => "J-178", 'type' => 'jalan', 'lat' => -3.759205898609835, 'lng' => 102.26976360911993, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 315, 'name' => "J-179", 'type' => 'jalan', 'lat' => -3.759293332143727, 'lng' => 102.26971437550412, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 316, 'name' => "J-180", 'type' => 'jalan', 'lat' => -3.759502180715941, 'lng' => 102.26969175632752, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 317, 'name' => "J-181", 'type' => 'jalan', 'lat' => -3.7598638385544234, 'lng' => 102.26977457989136, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 318, 'name' => "J-182", 'type' => 'jalan', 'lat' => -3.7608349934927503, 'lng' => 102.2722130677588, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 319, 'name' => "J-183", 'type' => 'jalan', 'lat' => -3.76101233719136, 'lng' => 102.27211092612305, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 320, 'name' => "J-184", 'type' => 'jalan', 'lat' => -3.761252297357842, 'lng' => 102.27200118957722, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 321, 'name' => "J-185", 'type' => 'jalan', 'lat' => -3.7614627222601342, 'lng' => 102.27192222943205, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 322, 'name' => "J-186", 'type' => 'jalan', 'lat' => -3.76242861040339, 'lng' => 102.27141762889028, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 323, 'name' => "J-187", 'type' => 'jalan', 'lat' => -3.7625503517198524, 'lng' => 102.2713233528562, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 324, 'name' => "J-188", 'type' => 'jalan', 'lat' => -3.7625641859592207, 'lng' => 102.2713011702603, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 325, 'name' => "J-189", 'type' => 'jalan', 'lat' => -3.7625711030788125, 'lng' => 102.27124294094466, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 326, 'name' => "J-190", 'type' => 'jalan', 'lat' => -3.7625171495441947, 'lng' => 102.27112370948936, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 327, 'name' => "J-191", 'type' => 'jalan', 'lat' => -3.762445662686659, 'lng' => 102.27101162232128, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 328, 'name' => "J-192", 'type' => 'jalan', 'lat' => -3.762251983286461, 'lng' => 102.27074127192827, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 329, 'name' => "J-193", 'type' => 'jalan', 'lat' => -3.762084588914348, 'lng' => 102.27052637802694, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 330, 'name' => "J-194", 'type' => 'jalan', 'lat' => -3.7619891326040573, 'lng' => 102.27042378351825, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 331, 'name' => "J-195", 'type' => 'jalan', 'lat' => -3.7618211410900955, 'lng' => 102.27030340392457, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 332, 'name' => "J-196", 'type' => 'jalan', 'lat' => -3.76146975134192, 'lng' => 102.27015783074842, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 333, 'name' => "J-197", 'type' => 'jalan', 'lat' => -3.7612704670273445, 'lng' => 102.27013510148913, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 334, 'name' => "J-198", 'type' => 'jalan', 'lat' => -3.7605867303767155, 'lng' => 102.26997574563723, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 335, 'name' => "J-199", 'type' => 'jalan', 'lat' => -3.7594911551900765, 'lng' => 102.26948930474612, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 336, 'name' => "J-200", 'type' => 'jalan', 'lat' => -3.7594887510023938, 'lng' => 102.26945075479199, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 337, 'name' => "J-201", 'type' => 'jalan', 'lat' => -3.7607652697320475, 'lng' => 102.26989305479424, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 338, 'name' => "J-202", 'type' => 'jalan', 'lat' => -3.760821164522824, 'lng' => 102.26973470352442, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 339, 'name' => "J-203", 'type' => 'jalan', 'lat' => -3.760812565325196, 'lng' => 102.26968515142607, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 340, 'name' => "J-204", 'type' => 'jalan', 'lat' => -3.7606642291405876, 'lng' => 102.269625904353, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 341, 'name' => "J-205", 'type' => 'jalan', 'lat' => -3.760577162237823, 'lng' => 102.26960112830375, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 342, 'name' => "J-206", 'type' => 'jalan', 'lat' => -3.7604427993952925, 'lng' => 102.26951495058705, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 343, 'name' => "J-207", 'type' => 'jalan', 'lat' => -3.7603718559755634, 'lng' => 102.26940507419522, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 344, 'name' => "J-208", 'type' => 'jalan', 'lat' => -3.7608548880803596, 'lng' => 102.26966174246775, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 345, 'name' => "J-209", 'type' => 'jalan', 'lat' => -3.7608977909944485, 'lng' => 102.26961946355334, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 346, 'name' => "J-210", 'type' => 'jalan', 'lat' => -3.760974301187062, 'lng' => 102.26936220711099, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 347, 'name' => "J-211", 'type' => 'jalan', 'lat' => -3.7610413076683074, 'lng' => 102.26919012484001, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 348, 'name' => "J-212", 'type' => 'jalan', 'lat' => -3.7611253826184736, 'lng' => 102.26905370008183, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 349, 'name' => "J-213", 'type' => 'jalan', 'lat' => -3.7612333549152055, 'lng' => 102.2689254301568, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 350, 'name' => "J-214", 'type' => 'jalan', 'lat' => -3.7613140526504196, 'lng' => 102.26888659980011, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 351, 'name' => "J-215", 'type' => 'jalan', 'lat' => -3.7615696675397174, 'lng' => 102.26878580786712, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 352, 'name' => "J-216", 'type' => 'jalan', 'lat' => -3.7616720898275986, 'lng' => 102.26871115810707, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 353, 'name' => "J-217", 'type' => 'jalan', 'lat' => -3.761802445479276, 'lng' => 102.26866968594771, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 354, 'name' => "J-218", 'type' => 'jalan', 'lat' => -3.761862450441157, 'lng' => 102.26866657554069, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 355, 'name' => "J-219", 'type' => 'jalan', 'lat' => -3.7619786425568265, 'lng' => 102.26868172841824, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 356, 'name' => "J-220", 'type' => 'jalan', 'lat' => -3.7620189907140826, 'lng' => 102.26868691242919, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 357, 'name' => "J-221", 'type' => 'jalan', 'lat' => -3.762071753684296, 'lng' => 102.26864958754913, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 358, 'name' => "J-222", 'type' => 'jalan', 'lat' => -3.7600776422092963, 'lng' => 102.26960780857661, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 359, 'name' => "J-223", 'type' => 'jalan', 'lat' => -3.7602468637364836, 'lng' => 102.2694516425031, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 360, 'name' => "J-224", 'type' => 'jalan', 'lat' => -3.760317474148067, 'lng' => 102.26928815614525, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 361, 'name' => "J-225", 'type' => 'jalan', 'lat' => -3.760301647677892, 'lng' => 102.26922715377225, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 362, 'name' => "J-226", 'type' => 'jalan', 'lat' => -3.760278516681055, 'lng' => 102.26917835187481, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 363, 'name' => "J-227", 'type' => 'jalan', 'lat' => -3.760231037263722, 'lng' => 102.26904414665563, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 364, 'name' => "J-228", 'type' => 'jalan', 'lat' => -3.7600945428269057, 'lng' => 102.26850744923809, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 365, 'name' => "J-229", 'type' => 'jalan', 'lat' => -3.7601067170382834, 'lng' => 102.26840008506201, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 366, 'name' => "J-230", 'type' => 'jalan', 'lat' => -3.7601931539693254, 'lng' => 102.26821940170316, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 367, 'name' => "J-231", 'type' => 'jalan', 'lat' => -3.7601919365484804, 'lng' => 102.2680534752497, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 368, 'name' => "J-232", 'type' => 'jalan', 'lat' => -3.760125503877603, 'lng' => 102.26799266586426, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 369, 'name' => "J-233", 'type' => 'jalan', 'lat' => -3.759050090531389, 'lng' => 102.26764926085508, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 370, 'name' => "J-234", 'type' => 'jalan', 'lat' => -3.7584726066995984, 'lng' => 102.26757974311636, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 371, 'name' => "J-235", 'type' => 'jalan', 'lat' => -3.7578001384899693, 'lng' => 102.2675273245062, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 372, 'name' => "J-236", 'type' => 'jalan', 'lat' => -3.757730512150161, 'lng' => 102.26765718605674, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 373, 'name' => "J-237", 'type' => 'jalan', 'lat' => -3.7576821605214263, 'lng' => 102.26768238307466, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 374, 'name' => "J-238", 'type' => 'jalan', 'lat' => -3.759756655442416, 'lng' => 102.26767220357459, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 375, 'name' => "J-239", 'type' => 'jalan', 'lat' => -3.759828916510415, 'lng' => 102.26750364688155, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 376, 'name' => "J-240", 'type' => 'jalan', 'lat' => -3.759888078727087, 'lng' => 102.26737169794978, 'created_at' => now(), 'updated_at' => now()],
        ['id' => 377, 'name' => "J-241", 'type' => 'jalan', 'lat' => -3.7599466608037346, 'lng' => 102.26720661734771, 'created_at' => now(), 'updated_at' => now()],
    ];

    Node::insert($nodes);

    $edges = [
        ['from_node_id' => 1, 'to_node_id' => 72, 'weight' => 15.39, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 72, 'to_node_id' => 137, 'weight' => 17.34, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 137, 'to_node_id' => 138, 'weight' => 32.98, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 138, 'to_node_id' => 73, 'weight' => 24.28, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 73, 'to_node_id' => 139, 'weight' => 15.82, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 139, 'to_node_id' => 74, 'weight' => 55.08, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 74, 'to_node_id' => 224, 'weight' => 25.68, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 74, 'to_node_id' => 140, 'weight' => 15.65, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 140, 'to_node_id' => 141, 'weight' => 12.31, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 141, 'to_node_id' => 75, 'weight' => 17.46, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 75, 'to_node_id' => 7, 'weight' => 19.86, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 75, 'to_node_id' => 142, 'weight' => 28.11, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 142, 'to_node_id' => 143, 'weight' => 23.69, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 143, 'to_node_id' => 148, 'weight' => 19.84, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 143, 'to_node_id' => 144, 'weight' => 1.45, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 144, 'to_node_id' => 145, 'weight' => 4.29, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 145, 'to_node_id' => 146, 'weight' => 5.62, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 146, 'to_node_id' => 147, 'weight' => 7.29, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 147, 'to_node_id' => 76, 'weight' => 22.28, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 76, 'to_node_id' => 162, 'weight' => 35.30, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 76, 'to_node_id' => 77, 'weight' => 33.18, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 77, 'to_node_id' => 11, 'weight' => 31.49, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 77, 'to_node_id' => 3, 'weight' => 34.28, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 162, 'to_node_id' => 161, 'weight' => 3.85, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 161, 'to_node_id' => 160, 'weight' => 1.83, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 160, 'to_node_id' => 159, 'weight' => 1.40, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 159, 'to_node_id' => 82, 'weight' => 14.98, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 82, 'to_node_id' => 13, 'weight' => 17.30, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 82, 'to_node_id' => 157, 'weight' => 20.05, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 157, 'to_node_id' => 156, 'weight' => 4.30, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 156, 'to_node_id' => 155, 'weight' => 1.95, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 155, 'to_node_id' => 154, 'weight' => 3.09, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 154, 'to_node_id' => 153, 'weight' => 8.34, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 153, 'to_node_id' => 152, 'weight' => 26.29, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 152, 'to_node_id' => 151, 'weight' => 53.23, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 151, 'to_node_id' => 81, 'weight' => 15.69, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 81, 'to_node_id' => 15, 'weight' => 28.65, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 81, 'to_node_id' => 80, 'weight' => 19.69, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 80, 'to_node_id' => 16, 'weight' => 25.85, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 80, 'to_node_id' => 79, 'weight' => 9.41, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 79, 'to_node_id' => 17, 'weight' => 23.37, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 79, 'to_node_id' => 150, 'weight' => 9.04, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 150, 'to_node_id' => 78, 'weight' => 57.41, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 78, 'to_node_id' => 14, 'weight' => 59.15, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 78, 'to_node_id' => 12, 'weight' => 32.77, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 78, 'to_node_id' => 149, 'weight' => 9.66, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 149, 'to_node_id' => 148, 'weight' => 24.03, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 148, 'to_node_id' => 163, 'weight' => 5.26, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 163, 'to_node_id' => 164, 'weight' => 6.90, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 164, 'to_node_id' => 147, 'weight' => 9.27, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 148, 'to_node_id' => 149, 'weight' => 24.03, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 149, 'to_node_id' => 78, 'weight' => 9.66, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 78, 'to_node_id' => 150, 'weight' => 57.41, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 150, 'to_node_id' => 79, 'weight' => 9.04, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 79, 'to_node_id' => 80, 'weight' => 9.41, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 80, 'to_node_id' => 81, 'weight' => 19.69, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 81, 'to_node_id' => 151, 'weight' => 15.69, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 151, 'to_node_id' => 152, 'weight' => 53.23, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 152, 'to_node_id' => 153, 'weight' => 26.29, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 153, 'to_node_id' => 154, 'weight' => 8.34, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 154, 'to_node_id' => 155, 'weight' => 3.09, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 155, 'to_node_id' => 156, 'weight' => 1.95, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 156, 'to_node_id' => 157, 'weight' => 4.30, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 157, 'to_node_id' => 82, 'weight' => 20.05, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 82, 'to_node_id' => 159, 'weight' => 14.98, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 159, 'to_node_id' => 160, 'weight' => 1.40, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 160, 'to_node_id' => 161, 'weight' => 1.83, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 161, 'to_node_id' => 162, 'weight' => 3.85, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 162, 'to_node_id' => 76, 'weight' => 35.30, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 12, 'to_node_id' => 78, 'weight' => 32.77, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 14, 'to_node_id' => 78, 'weight' => 59.15, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 17, 'to_node_id' => 79, 'weight' => 23.37, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 16, 'to_node_id' => 80, 'weight' => 25.85, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 15, 'to_node_id' => 81, 'weight' => 28.65, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 13, 'to_node_id' => 82, 'weight' => 17.30, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 11, 'to_node_id' => 76, 'weight' => 49.37, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 150, 'to_node_id' => 165, 'weight' => 10.34, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 165, 'to_node_id' => 83, 'weight' => 82.55, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 83, 'to_node_id' => 166, 'weight' => 50.92, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 166, 'to_node_id' => 84, 'weight' => 18.50, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 84, 'to_node_id' => 85, 'weight' => 37.63, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 85, 'to_node_id' => 18, 'weight' => 24.78, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 85, 'to_node_id' => 167, 'weight' => 51.79, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 167, 'to_node_id' => 168, 'weight' => 2.39, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 168, 'to_node_id' => 169, 'weight' => 2.77, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 169, 'to_node_id' => 170, 'weight' => 3.21, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 170, 'to_node_id' => 171, 'weight' => 4.67, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 171, 'to_node_id' => 86, 'weight' => 11.99, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 86, 'to_node_id' => 171, 'weight' => 11.99, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 171, 'to_node_id' => 170, 'weight' => 4.67, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 170, 'to_node_id' => 169, 'weight' => 3.21, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 169, 'to_node_id' => 168, 'weight' => 2.77, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 168, 'to_node_id' => 167, 'weight' => 2.39, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 167, 'to_node_id' => 85, 'weight' => 51.79, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 85, 'to_node_id' => 84, 'weight' => 37.63, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 84, 'to_node_id' => 166, 'weight' => 18.50, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 166, 'to_node_id' => 83, 'weight' => 50.92, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 83, 'to_node_id' => 165, 'weight' => 82.55, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 165, 'to_node_id' => 150, 'weight' => 10.34, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 18, 'to_node_id' => 85, 'weight' => 24.78, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 165, 'to_node_id' => 172, 'weight' => 11.62, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 172, 'to_node_id' => 173, 'weight' => 27.12, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 173, 'to_node_id' => 87, 'weight' => 8.49, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 87, 'to_node_id' => 5, 'weight' => 81.03, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 87, 'to_node_id' => 174, 'weight' => 24.61, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 174, 'to_node_id' => 175, 'weight' => 53.86, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 175, 'to_node_id' => 88, 'weight' => 26.08, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 88, 'to_node_id' => 89, 'weight' => 59.62, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 89, 'to_node_id' => 22, 'weight' => 27.44, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 88, 'to_node_id' => 176, 'weight' => 5.64, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 176, 'to_node_id' => 177, 'weight' => 16.76, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 177, 'to_node_id' => 178, 'weight' => 14.06, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 178, 'to_node_id' => 86, 'weight' => 67.64, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 86, 'to_node_id' => 178, 'weight' => 67.64, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 178, 'to_node_id' => 177, 'weight' => 14.06, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 177, 'to_node_id' => 176, 'weight' => 16.76, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 176, 'to_node_id' => 88, 'weight' => 5.64, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 22, 'to_node_id' => 89, 'weight' => 27.44, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 89, 'to_node_id' => 88, 'weight' => 59.62, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 88, 'to_node_id' => 175, 'weight' => 26.08, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 175, 'to_node_id' => 174, 'weight' => 53.86, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 174, 'to_node_id' => 87, 'weight' => 24.61, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 5, 'to_node_id' => 87, 'weight' => 81.03, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 87, 'to_node_id' => 173, 'weight' => 8.49, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 173, 'to_node_id' => 172, 'weight' => 27.12, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 172, 'to_node_id' => 165, 'weight' => 11.62, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 84, 'to_node_id' => 179, 'weight' => 23.72, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 179, 'to_node_id' => 90, 'weight' => 52.35, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 90, 'to_node_id' => 19, 'weight' => 29.04, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 90, 'to_node_id' => 91, 'weight' => 31.29, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 91, 'to_node_id' => 20, 'weight' => 26.67, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 20, 'to_node_id' => 91, 'weight' => 26.67, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 91, 'to_node_id' => 90, 'weight' => 31.29, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 19, 'to_node_id' => 90, 'weight' => 29.04, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 90, 'to_node_id' => 179, 'weight' => 52.35, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 179, 'to_node_id' => 84, 'weight' => 23.72, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 86, 'to_node_id' => 180, 'weight' => 18.48, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 180, 'to_node_id' => 181, 'weight' => 7.68, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 181, 'to_node_id' => 182, 'weight' => 7.92, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 182, 'to_node_id' => 183, 'weight' => 25.60, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 183, 'to_node_id' => 184, 'weight' => 46.64, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 184, 'to_node_id' => 158, 'weight' => 44.60, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 158, 'to_node_id' => 23, 'weight' => 53.32, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 23, 'to_node_id' => 158, 'weight' => 53.32, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 158, 'to_node_id' => 184, 'weight' => 44.60, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 184, 'to_node_id' => 183, 'weight' => 46.64, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 183, 'to_node_id' => 182, 'weight' => 25.60, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 182, 'to_node_id' => 181, 'weight' => 7.92, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 181, 'to_node_id' => 180, 'weight' => 7.68, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 180, 'to_node_id' => 86, 'weight' => 18.48, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 180, 'to_node_id' => 185, 'weight' => 17.48, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 185, 'to_node_id' => 186, 'weight' => 12.51, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 186, 'to_node_id' => 92, 'weight' => 15.15, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 92, 'to_node_id' => 21, 'weight' => 28.19, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 92, 'to_node_id' => 187, 'weight' => 20.72, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 187, 'to_node_id' => 188, 'weight' => 7.58, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 188, 'to_node_id' => 189, 'weight' => 7.27, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 189, 'to_node_id' => 190, 'weight' => 8.02, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 190, 'to_node_id' => 191, 'weight' => 18.90, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 191, 'to_node_id' => 192, 'weight' => 5.89, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 192, 'to_node_id' => 193, 'weight' => 8.52, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 193, 'to_node_id' => 194, 'weight' => 8.21, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 194, 'to_node_id' => 195, 'weight' => 11.77, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 195, 'to_node_id' => 196, 'weight' => 12.62, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 196, 'to_node_id' => 197, 'weight' => 45.27, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 197, 'to_node_id' => 198, 'weight' => 46.25, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 198, 'to_node_id' => 199, 'weight' => 11.10, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 199, 'to_node_id' => 200, 'weight' => 9.30, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 200, 'to_node_id' => 378, 'weight' => 14.76, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 378, 'to_node_id' => 24, 'weight' => 39.51, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 378, 'to_node_id' => 201, 'weight' => 12.64, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 201, 'to_node_id' => 202, 'weight' => 45.73, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 202, 'to_node_id' => 203, 'weight' => 27.32, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 185, 'to_node_id' => 180, 'weight' => 17.48, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 186, 'to_node_id' => 185, 'weight' => 12.51, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 92, 'to_node_id' => 186, 'weight' => 15.15, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 21, 'to_node_id' => 92, 'weight' => 28.19, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 187, 'to_node_id' => 92, 'weight' => 20.72, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 188, 'to_node_id' => 187, 'weight' => 7.58, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 189, 'to_node_id' => 188, 'weight' => 7.27, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 190, 'to_node_id' => 189, 'weight' => 8.02, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 191, 'to_node_id' => 190, 'weight' => 18.90, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 192, 'to_node_id' => 191, 'weight' => 5.89, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 193, 'to_node_id' => 192, 'weight' => 8.52, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 194, 'to_node_id' => 193, 'weight' => 8.21, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 195, 'to_node_id' => 194, 'weight' => 11.77, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 196, 'to_node_id' => 195, 'weight' => 12.62, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 197, 'to_node_id' => 196, 'weight' => 45.27, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 198, 'to_node_id' => 197, 'weight' => 46.25, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 199, 'to_node_id' => 198, 'weight' => 11.10, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 200, 'to_node_id' => 199, 'weight' => 9.30, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 378, 'to_node_id' => 200, 'weight' => 14.76, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 24, 'to_node_id' => 378, 'weight' => 39.51, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 201, 'to_node_id' => 378, 'weight' => 12.64, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 202, 'to_node_id' => 201, 'weight' => 45.73, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 203, 'to_node_id' => 202, 'weight' => 27.32, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 203, 'to_node_id' => 204, 'weight' => 42.07, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 204, 'to_node_id' => 93, 'weight' => 41.57, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 93, 'to_node_id' => 30, 'weight' => 32.32, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 93, 'to_node_id' => 205, 'weight' => 6.97, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 205, 'to_node_id' => 206, 'weight' => 46.23, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 206, 'to_node_id' => 207, 'weight' => 19.07, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 207, 'to_node_id' => 208, 'weight' => 21.34, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 208, 'to_node_id' => 209, 'weight' => 19.68, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 204, 'to_node_id' => 203, 'weight' => 42.07, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 93, 'to_node_id' => 204, 'weight' => 41.57, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 30, 'to_node_id' => 93, 'weight' => 32.32, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 205, 'to_node_id' => 93, 'weight' => 6.97, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 206, 'to_node_id' => 205, 'weight' => 46.23, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 207, 'to_node_id' => 206, 'weight' => 19.07, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 208, 'to_node_id' => 207, 'weight' => 21.34, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 209, 'to_node_id' => 208, 'weight' => 19.68, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 209, 'to_node_id' => 210, 'weight' => 13.29, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 210, 'to_node_id' => 94, 'weight' => 43.68, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 94, 'to_node_id' => 10, 'weight' => 51.18, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 94, 'to_node_id' => 211, 'weight' => 3.26, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 211, 'to_node_id' => 212, 'weight' => 2.87, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 212, 'to_node_id' => 213, 'weight' => 3.87, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 213, 'to_node_id' => 214, 'weight' => 12.03, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 214, 'to_node_id' => 95, 'weight' => 24.79, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 95, 'to_node_id' => 9, 'weight' => 18.99, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 95, 'to_node_id' => 96, 'weight' => 39.53, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 96, 'to_node_id' => 8, 'weight' => 35.43, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 96, 'to_node_id' => 215, 'weight' => 9.14, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 215, 'to_node_id' => 216, 'weight' => 10.66, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 216, 'to_node_id' => 217, 'weight' => 1.52, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 217, 'to_node_id' => 218, 'weight' => 2.01, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 218, 'to_node_id' => 219, 'weight' => 2.49, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 219, 'to_node_id' => 220, 'weight' => 2.50, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 220, 'to_node_id' => 97, 'weight' => 6.95, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 97, 'to_node_id' => 2, 'weight' => 11.35, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 97, 'to_node_id' => 221, 'weight' => 16.72, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 221, 'to_node_id' => 222, 'weight' => 11.79, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 222, 'to_node_id' => 223, 'weight' => 7.50, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 223, 'to_node_id' => 224, 'weight' => 5.37, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 224, 'to_node_id' => 74, 'weight' => 25.68, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 210, 'to_node_id' => 209, 'weight' => 13.29, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 94, 'to_node_id' => 210, 'weight' => 43.68, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 10, 'to_node_id' => 94, 'weight' => 51.18, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 211, 'to_node_id' => 94, 'weight' => 3.26, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 212, 'to_node_id' => 211, 'weight' => 2.87, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 213, 'to_node_id' => 212, 'weight' => 3.87, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 214, 'to_node_id' => 213, 'weight' => 12.03, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 95, 'to_node_id' => 214, 'weight' => 24.79, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 9, 'to_node_id' => 95, 'weight' => 18.99, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 96, 'to_node_id' => 95, 'weight' => 39.53, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 8, 'to_node_id' => 96, 'weight' => 35.43, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 215, 'to_node_id' => 96, 'weight' => 9.14, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 216, 'to_node_id' => 215, 'weight' => 10.66, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 217, 'to_node_id' => 216, 'weight' => 1.52, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 218, 'to_node_id' => 217, 'weight' => 2.01, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 219, 'to_node_id' => 218, 'weight' => 2.49, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 220, 'to_node_id' => 219, 'weight' => 2.50, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 97, 'to_node_id' => 220, 'weight' => 6.95, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 2, 'to_node_id' => 97, 'weight' => 11.35, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 221, 'to_node_id' => 97, 'weight' => 16.72, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 222, 'to_node_id' => 221, 'weight' => 11.79, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 223, 'to_node_id' => 222, 'weight' => 7.50, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 224, 'to_node_id' => 223, 'weight' => 5.37, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 209, 'to_node_id' => 225, 'weight' => 9.07, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 225, 'to_node_id' => 226, 'weight' => 8.10, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 226, 'to_node_id' => 98, 'weight' => 7.48, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 98, 'to_node_id' => 25, 'weight' => 84.53, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 98, 'to_node_id' => 28, 'weight' => 49.46, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 98, 'to_node_id' => 227, 'weight' => 8.17, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 227, 'to_node_id' => 99, 'weight' => 11.02, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 99, 'to_node_id' => 26, 'weight' => 47.17, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 99, 'to_node_id' => 228, 'weight' => 33.35, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 228, 'to_node_id' => 100, 'weight' => 12.28, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 100, 'to_node_id' => 27, 'weight' => 16.61, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 100, 'to_node_id' => 229, 'weight' => 61.90, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 229, 'to_node_id' => 230, 'weight' => 35.10, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 230, 'to_node_id' => 231, 'weight' => 35.63, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 231, 'to_node_id' => 232, 'weight' => 16.50, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 232, 'to_node_id' => 233, 'weight' => 3.50, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 233, 'to_node_id' => 234, 'weight' => 10.55, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 234, 'to_node_id' => 235, 'weight' => 16.15, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 225, 'to_node_id' => 209, 'weight' => 9.07, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 226, 'to_node_id' => 225, 'weight' => 8.10, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 98, 'to_node_id' => 226, 'weight' => 7.48, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 25, 'to_node_id' => 98, 'weight' => 84.53, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 28, 'to_node_id' => 98, 'weight' => 49.46, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 227, 'to_node_id' => 98, 'weight' => 8.17, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 99, 'to_node_id' => 227, 'weight' => 11.02, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 26, 'to_node_id' => 99, 'weight' => 47.17, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 228, 'to_node_id' => 99, 'weight' => 33.35, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 100, 'to_node_id' => 228, 'weight' => 12.28, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 27, 'to_node_id' => 100, 'weight' => 16.61, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 229, 'to_node_id' => 100, 'weight' => 61.90, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 230, 'to_node_id' => 229, 'weight' => 35.10, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 231, 'to_node_id' => 230, 'weight' => 35.63, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 232, 'to_node_id' => 231, 'weight' => 16.50, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 233, 'to_node_id' => 232, 'weight' => 3.50, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 234, 'to_node_id' => 233, 'weight' => 10.55, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 235, 'to_node_id' => 234, 'weight' => 16.15, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 73, 'to_node_id' => 236, 'weight' => 7.69, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 236, 'to_node_id' => 237, 'weight' => 10.56, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 237, 'to_node_id' => 238, 'weight' => 13.13, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 237, 'to_node_id' => 238, 'weight' => 13.13, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 238, 'to_node_id' => 239, 'weight' => 19.76, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 239, 'to_node_id' => 240, 'weight' => 22.11, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 240, 'to_node_id' => 241, 'weight' => 11.95, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 241, 'to_node_id' => 242, 'weight' => 20.48, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 242, 'to_node_id' => 243, 'weight' => 5.55, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 243, 'to_node_id' => 244, 'weight' => 16.99, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 244, 'to_node_id' => 245, 'weight' => 12.17, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 245, 'to_node_id' => 246, 'weight' => 5.52, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 246, 'to_node_id' => 98, 'weight' => 7.69, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 226, 'to_node_id' => 247, 'weight' => 8.93, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 226, 'to_node_id' => 247, 'weight' => 8.93, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 247, 'to_node_id' => 248, 'weight' => 6.49, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 248, 'to_node_id' => 249, 'weight' => 22.86, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 249, 'to_node_id' => 250, 'weight' => 28.90, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 250, 'to_node_id' => 251, 'weight' => 9.75, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 251, 'to_node_id' => 252, 'weight' => 47.50, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 252, 'to_node_id' => 253, 'weight' => 22.27, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 253, 'to_node_id' => 254, 'weight' => 10.28, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 254, 'to_node_id' => 139, 'weight' => 9.35, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 203, 'to_node_id' => 255, 'weight' => 7.77, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 255, 'to_node_id' => 256, 'weight' => 16.54, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 256, 'to_node_id' => 257, 'weight' => 16.15, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 257, 'to_node_id' => 101, 'weight' => 11.97, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 101, 'to_node_id' => 31, 'weight' => 34.38, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 101, 'to_node_id' => 258, 'weight' => 17.39, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 258, 'to_node_id' => 259, 'weight' => 38.31, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 259, 'to_node_id' => 260, 'weight' => 14.38, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 260, 'to_node_id' => 261, 'weight' => 20.74, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 261, 'to_node_id' => 262, 'weight' => 12.64, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 262, 'to_node_id' => 102, 'weight' => 17.68, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 102, 'to_node_id' => 37, 'weight' => 28.71, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 102, 'to_node_id' => 263, 'weight' => 28.99, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 263, 'to_node_id' => 264, 'weight' => 19.90, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 264, 'to_node_id' => 265, 'weight' => 7.54, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 265, 'to_node_id' => 266, 'weight' => 9.93, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 266, 'to_node_id' => 267, 'weight' => 11.52, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 267, 'to_node_id' => 268, 'weight' => 16.88, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 268, 'to_node_id' => 269, 'weight' => 45.05, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 269, 'to_node_id' => 270, 'weight' => 14.85, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 270, 'to_node_id' => 271, 'weight' => 44.04, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 271, 'to_node_id' => 272, 'weight' => 37.53, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 272, 'to_node_id' => 273, 'weight' => 40.30, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 273, 'to_node_id' => 274, 'weight' => 27.05, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 274, 'to_node_id' => 275, 'weight' => 19.05, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 275, 'to_node_id' => 276, 'weight' => 13.61, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 255, 'to_node_id' => 203, 'weight' => 7.77, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 256, 'to_node_id' => 255, 'weight' => 16.54, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 257, 'to_node_id' => 256, 'weight' => 16.15, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 101, 'to_node_id' => 257, 'weight' => 11.97, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 31, 'to_node_id' => 101, 'weight' => 34.38, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 258, 'to_node_id' => 101, 'weight' => 17.39, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 259, 'to_node_id' => 258, 'weight' => 38.31, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 260, 'to_node_id' => 259, 'weight' => 14.38, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 261, 'to_node_id' => 260, 'weight' => 20.74, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 262, 'to_node_id' => 261, 'weight' => 12.64, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 102, 'to_node_id' => 262, 'weight' => 17.68, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 37, 'to_node_id' => 102, 'weight' => 28.71, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 263, 'to_node_id' => 102, 'weight' => 28.99, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 264, 'to_node_id' => 263, 'weight' => 19.90, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 265, 'to_node_id' => 264, 'weight' => 7.54, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 266, 'to_node_id' => 265, 'weight' => 9.93, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 267, 'to_node_id' => 266, 'weight' => 11.52, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 268, 'to_node_id' => 267, 'weight' => 16.88, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 269, 'to_node_id' => 268, 'weight' => 45.05, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 270, 'to_node_id' => 269, 'weight' => 14.85, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 271, 'to_node_id' => 270, 'weight' => 44.04, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 272, 'to_node_id' => 271, 'weight' => 37.53, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 273, 'to_node_id' => 272, 'weight' => 40.30, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 274, 'to_node_id' => 273, 'weight' => 27.05, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 275, 'to_node_id' => 274, 'weight' => 19.05, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 276, 'to_node_id' => 275, 'weight' => 13.61, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 284, 'to_node_id' => 283, 'weight' => 36.76, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 283, 'to_node_id' => 282, 'weight' => 18.64, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 282, 'to_node_id' => 281, 'weight' => 71.62, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 281, 'to_node_id' => 280, 'weight' => 26.03, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 280, 'to_node_id' => 279, 'weight' => 13.11, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 279, 'to_node_id' => 278, 'weight' => 22.17, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 278, 'to_node_id' => 104, 'weight' => 50.48, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 104, 'to_node_id' => 29, 'weight' => 90.09, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 104, 'to_node_id' => 6, 'weight' => 78.17, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 104, 'to_node_id' => 103, 'weight' => 53.80, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 103, 'to_node_id' => 4, 'weight' => 57.88, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 103, 'to_node_id' => 277, 'weight' => 37.58, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 277, 'to_node_id' => 72, 'weight' => 4.31, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 71, 'to_node_id' => 283, 'weight' => 6.78, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 283, 'to_node_id' => 284, 'weight' => 36.76, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 29, 'to_node_id' => 104, 'weight' => 90.09, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 6, 'to_node_id' => 104, 'weight' => 78.17, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 4, 'to_node_id' => 103, 'weight' => 57.88, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 284, 'to_node_id' => 285, 'weight' => 34.14, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 283, 'to_node_id' => 282, 'weight' => 18.64, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 282, 'to_node_id' => 283, 'weight' => 18.64, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 283, 'to_node_id' => 284, 'weight' => 36.76, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 284, 'to_node_id' => 285, 'weight' => 34.14, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 285, 'to_node_id' => 286, 'weight' => 17.77, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 286, 'to_node_id' => 287, 'weight' => 48.15, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 287, 'to_node_id' => 288, 'weight' => 29.09, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 288, 'to_node_id' => 289, 'weight' => 64.23, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 289, 'to_node_id' => 290, 'weight' => 6.92, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 290, 'to_node_id' => 105, 'weight' => 7.61, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 105, 'to_node_id' => 291, 'weight' => 12.29, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 291, 'to_node_id' => 292, 'weight' => 15.98, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 292, 'to_node_id' => 293, 'weight' => 26.73, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 293, 'to_node_id' => 294, 'weight' => 15.64, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 285, 'to_node_id' => 284, 'weight' => 34.14, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 282, 'to_node_id' => 283, 'weight' => 18.64, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 283, 'to_node_id' => 282, 'weight' => 18.64, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 284, 'to_node_id' => 283, 'weight' => 36.76, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 285, 'to_node_id' => 284, 'weight' => 34.14, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 286, 'to_node_id' => 285, 'weight' => 17.77, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 287, 'to_node_id' => 286, 'weight' => 48.15, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 288, 'to_node_id' => 287, 'weight' => 29.09, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 289, 'to_node_id' => 288, 'weight' => 64.23, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 290, 'to_node_id' => 289, 'weight' => 6.92, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 105, 'to_node_id' => 290, 'weight' => 7.61, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 291, 'to_node_id' => 105, 'weight' => 12.29, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 292, 'to_node_id' => 291, 'weight' => 15.98, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 293, 'to_node_id' => 292, 'weight' => 26.73, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 294, 'to_node_id' => 293, 'weight' => 15.64, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 105, 'to_node_id' => 295, 'weight' => 48.83, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 295, 'to_node_id' => 106, 'weight' => 27.53, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 106, 'to_node_id' => 32, 'weight' => 43.60, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 295, 'to_node_id' => 105, 'weight' => 48.83, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 106, 'to_node_id' => 295, 'weight' => 27.53, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 32, 'to_node_id' => 106, 'weight' => 43.60, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 235, 'to_node_id' => 296, 'weight' => 9.21, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 296, 'to_node_id' => 107, 'weight' => 25.53, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 107, 'to_node_id' => 33, 'weight' => 35.36, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 107, 'to_node_id' => 108, 'weight' => 27.77, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 108, 'to_node_id' => 36, 'weight' => 25.54, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 36, 'to_node_id' => 108, 'weight' => 25.54, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 108, 'to_node_id' => 109, 'weight' => 17.27, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 109, 'to_node_id' => 34, 'weight' => 37.35, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 109, 'to_node_id' => 297, 'weight' => 59.36, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 297, 'to_node_id' => 298, 'weight' => 1.94, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 298, 'to_node_id' => 110, 'weight' => 5.52, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 110, 'to_node_id' => 39, 'weight' => 43.29, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 110, 'to_node_id' => 299, 'weight' => 8.96, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 299, 'to_node_id' => 300, 'weight' => 10.09, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 300, 'to_node_id' => 301, 'weight' => 8.49, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 301, 'to_node_id' => 302, 'weight' => 12.91, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 302, 'to_node_id' => 263, 'weight' => 59.12, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 296, 'to_node_id' => 235, 'weight' => 9.21, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 107, 'to_node_id' => 296, 'weight' => 25.53, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 33, 'to_node_id' => 107, 'weight' => 35.36, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 108, 'to_node_id' => 107, 'weight' => 27.77, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 109, 'to_node_id' => 108, 'weight' => 17.27, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 34, 'to_node_id' => 109, 'weight' => 37.35, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 297, 'to_node_id' => 109, 'weight' => 59.36, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 298, 'to_node_id' => 297, 'weight' => 1.94, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 110, 'to_node_id' => 298, 'weight' => 5.52, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 39, 'to_node_id' => 110, 'weight' => 43.29, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 299, 'to_node_id' => 110, 'weight' => 8.96, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 300, 'to_node_id' => 299, 'weight' => 10.09, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 301, 'to_node_id' => 300, 'weight' => 8.49, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 302, 'to_node_id' => 301, 'weight' => 12.91, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 263, 'to_node_id' => 302, 'weight' => 59.12, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 300, 'to_node_id' => 303, 'weight' => 23.99, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 303, 'to_node_id' => 304, 'weight' => 18.34, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 304, 'to_node_id' => 111, 'weight' => 12.70, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 111, 'to_node_id' => 38, 'weight' => 24.77, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 303, 'to_node_id' => 300, 'weight' => 23.99, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 304, 'to_node_id' => 303, 'weight' => 18.34, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 111, 'to_node_id' => 304, 'weight' => 12.70, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 38, 'to_node_id' => 111, 'weight' => 24.77, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 270, 'to_node_id' => 305, 'weight' => 10.39, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 305, 'to_node_id' => 306, 'weight' => 9.16, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 306, 'to_node_id' => 113, 'weight' => 38.31, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 113, 'to_node_id' => 35, 'weight' => 35.48, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 305, 'to_node_id' => 270, 'weight' => 10.39, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 306, 'to_node_id' => 305, 'weight' => 9.16, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 113, 'to_node_id' => 306, 'weight' => 38.31, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 35, 'to_node_id' => 113, 'weight' => 35.48, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 235, 'to_node_id' => 307, 'weight' => 3.48, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 307, 'to_node_id' => 308, 'weight' => 55.00, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 308, 'to_node_id' => 309, 'weight' => 20.86, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 309, 'to_node_id' => 310, 'weight' => 46.07, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 310, 'to_node_id' => 276, 'weight' => 7.27, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 310, 'to_node_id' => 294, 'weight' => 12.71, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 310, 'to_node_id' => 311, 'weight' => 82.84, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 311, 'to_node_id' => 312, 'weight' => 26.77, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 312, 'to_node_id' => 313, 'weight' => 33.99, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 313, 'to_node_id' => 314, 'weight' => 7.38, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 314, 'to_node_id' => 315, 'weight' => 11.15, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 315, 'to_node_id' => 112, 'weight' => 15.84, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 112, 'to_node_id' => 48, 'weight' => 26.20, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 112, 'to_node_id' => 316, 'weight' => 7.56, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 316, 'to_node_id' => 317, 'weight' => 41.25, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 307, 'to_node_id' => 235, 'weight' => 3.48, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 308, 'to_node_id' => 307, 'weight' => 55.00, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 309, 'to_node_id' => 308, 'weight' => 20.86, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 310, 'to_node_id' => 309, 'weight' => 46.07, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 276, 'to_node_id' => 310, 'weight' => 7.27, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 294, 'to_node_id' => 310, 'weight' => 12.71, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 311, 'to_node_id' => 310, 'weight' => 82.84, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 312, 'to_node_id' => 311, 'weight' => 26.77, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 313, 'to_node_id' => 312, 'weight' => 33.99, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 314, 'to_node_id' => 313, 'weight' => 7.38, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 315, 'to_node_id' => 314, 'weight' => 11.15, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 112, 'to_node_id' => 315, 'weight' => 15.84, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 48, 'to_node_id' => 112, 'weight' => 26.20, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 316, 'to_node_id' => 112, 'weight' => 7.56, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 317, 'to_node_id' => 316, 'weight' => 41.25, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 284, 'to_node_id' => 318, 'weight' => 19.88, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 318, 'to_node_id' => 319, 'weight' => 22.74, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 319, 'to_node_id' => 320, 'weight' => 29.33, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 320, 'to_node_id' => 321, 'weight' => 24.98, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 321, 'to_node_id' => 114, 'weight' => 10.80, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 114, 'to_node_id' => 40, 'weight' => 15.19, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 114, 'to_node_id' => 41, 'weight' => 15.57, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 114, 'to_node_id' => 115, 'weight' => 36.71, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 115, 'to_node_id' => 42, 'weight' => 19.60, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 115, 'to_node_id' => 322, 'weight' => 73.62, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 322, 'to_node_id' => 323, 'weight' => 17.11, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 323, 'to_node_id' => 324, 'weight' => 2.90, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 324, 'to_node_id' => 325, 'weight' => 6.51, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 325, 'to_node_id' => 326, 'weight' => 14.53, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 326, 'to_node_id' => 327, 'weight' => 14.76, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 327, 'to_node_id' => 328, 'weight' => 36.93, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 328, 'to_node_id' => 329, 'weight' => 30.25, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 329, 'to_node_id' => 330, 'weight' => 15.56, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 330, 'to_node_id' => 331, 'weight' => 22.96, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 331, 'to_node_id' => 332, 'weight' => 42.28, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 332, 'to_node_id' => 333, 'weight' => 22.30, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 333, 'to_node_id' => 116, 'weight' => 40.94, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 116, 'to_node_id' => 46, 'weight' => 33.95, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 116, 'to_node_id' => 117, 'weight' => 20.04, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 117, 'to_node_id' => 43, 'weight' => 40.03, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 318, 'to_node_id' => 284, 'weight' => 19.88, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 319, 'to_node_id' => 318, 'weight' => 22.74, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 320, 'to_node_id' => 319, 'weight' => 29.33, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 321, 'to_node_id' => 320, 'weight' => 24.98, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 114, 'to_node_id' => 321, 'weight' => 10.80, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 40, 'to_node_id' => 114, 'weight' => 15.19, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 41, 'to_node_id' => 114, 'weight' => 15.57, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 115, 'to_node_id' => 114, 'weight' => 36.71, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 42, 'to_node_id' => 115, 'weight' => 19.60, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 322, 'to_node_id' => 115, 'weight' => 73.62, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 323, 'to_node_id' => 322, 'weight' => 17.11, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 324, 'to_node_id' => 323, 'weight' => 2.90, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 325, 'to_node_id' => 324, 'weight' => 6.51, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 326, 'to_node_id' => 325, 'weight' => 14.53, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 327, 'to_node_id' => 326, 'weight' => 14.76, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 328, 'to_node_id' => 327, 'weight' => 36.93, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 329, 'to_node_id' => 328, 'weight' => 30.25, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 330, 'to_node_id' => 329, 'weight' => 15.56, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 331, 'to_node_id' => 330, 'weight' => 22.96, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 332, 'to_node_id' => 331, 'weight' => 42.28, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 333, 'to_node_id' => 332, 'weight' => 22.30, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 116, 'to_node_id' => 333, 'weight' => 40.94, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 46, 'to_node_id' => 116, 'weight' => 33.95, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 117, 'to_node_id' => 116, 'weight' => 20.04, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 43, 'to_node_id' => 117, 'weight' => 40.03, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 117, 'to_node_id' => 334, 'weight' => 17.09, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 334, 'to_node_id' => 119, 'weight' => 21.28, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 119, 'to_node_id' => 45, 'weight' => 16.43, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 119, 'to_node_id' => 118, 'weight' => 41.75, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 118, 'to_node_id' => 44, 'weight' => 32.12, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 118, 'to_node_id' => 317, 'weight' => 20.40, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 334, 'to_node_id' => 117, 'weight' => 17.09, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 119, 'to_node_id' => 334, 'weight' => 21.28, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 45, 'to_node_id' => 119, 'weight' => 16.43, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 118, 'to_node_id' => 119, 'weight' => 41.75, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 44, 'to_node_id' => 118, 'weight' => 32.12, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 317, 'to_node_id' => 118, 'weight' => 20.40, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 112, 'to_node_id' => 335, 'weight' => 23.46, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 335, 'to_node_id' => 336, 'weight' => 4.29, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 336, 'to_node_id' => 120, 'weight' => 17.51, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 120, 'to_node_id' => 51, 'weight' => 26.54, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 120, 'to_node_id' => 49, 'weight' => 24.78, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 120, 'to_node_id' => 121, 'weight' => 31.98, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 121, 'to_node_id' => 50, 'weight' => 26.91, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 121, 'to_node_id' => 122, 'weight' => 76.67, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 122, 'to_node_id' => 52, 'weight' => 22.00, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 335, 'to_node_id' => 112, 'weight' => 23.46, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 336, 'to_node_id' => 335, 'weight' => 4.29, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 120, 'to_node_id' => 336, 'weight' => 17.51, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 51, 'to_node_id' => 120, 'weight' => 26.54, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 49, 'to_node_id' => 120, 'weight' => 24.78, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 121, 'to_node_id' => 120, 'weight' => 31.98, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 50, 'to_node_id' => 121, 'weight' => 26.91, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 122, 'to_node_id' => 121, 'weight' => 76.67, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 52, 'to_node_id' => 122, 'weight' => 22.00, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 117, 'to_node_id' => 337, 'weight' => 12.89, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 337, 'to_node_id' => 338, 'weight' => 18.64, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 338, 'to_node_id' => 339, 'weight' => 5.58, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 339, 'to_node_id' => 340, 'weight' => 17.76, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 340, 'to_node_id' => 341, 'weight' => 10.06, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 341, 'to_node_id' => 342, 'weight' => 17.74, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 342, 'to_node_id' => 343, 'weight' => 14.52, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 337, 'to_node_id' => 117, 'weight' => 12.89, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 338, 'to_node_id' => 337, 'weight' => 18.64, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 339, 'to_node_id' => 338, 'weight' => 5.58, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 340, 'to_node_id' => 339, 'weight' => 17.76, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 341, 'to_node_id' => 340, 'weight' => 10.06, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 342, 'to_node_id' => 341, 'weight' => 17.74, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 343, 'to_node_id' => 342, 'weight' => 14.52, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 339, 'to_node_id' => 344, 'weight' => 5.38, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 344, 'to_node_id' => 345, 'weight' => 6.69, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 345, 'to_node_id' => 123, 'weight' => 11.37, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 123, 'to_node_id' => 53, 'weight' => 29.01, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 123, 'to_node_id' => 124, 'weight' => 11.55, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 124, 'to_node_id' => 47, 'weight' => 31.57, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 124, 'to_node_id' => 346, 'weight' => 7.09, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 346, 'to_node_id' => 347, 'weight' => 20.50, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 347, 'to_node_id' => 348, 'weight' => 17.79, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 348, 'to_node_id' => 349, 'weight' => 18.62, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 349, 'to_node_id' => 350, 'weight' => 9.95, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 350, 'to_node_id' => 125, 'weight' => 12.38, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 125, 'to_node_id' => 54, 'weight' => 24.06, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 125, 'to_node_id' => 351, 'weight' => 18.34, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 351, 'to_node_id' => 352, 'weight' => 14.08, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 352, 'to_node_id' => 126, 'weight' => 8.25, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 126, 'to_node_id' => 56, 'weight' => 29.47, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 126, 'to_node_id' => 57, 'weight' => 32.23, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 126, 'to_node_id' => 353, 'weight' => 7.04, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 353, 'to_node_id' => 354, 'weight' => 6.68, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 354, 'to_node_id' => 355, 'weight' => 13.03, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 355, 'to_node_id' => 356, 'weight' => 4.52, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 356, 'to_node_id' => 357, 'weight' => 7.18, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 357, 'to_node_id' => 127, 'weight' => 9.57, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 127, 'to_node_id' => 55, 'weight' => 54.30, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 344, 'to_node_id' => 339, 'weight' => 5.38, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 345, 'to_node_id' => 344, 'weight' => 6.69, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 123, 'to_node_id' => 345, 'weight' => 11.37, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 53, 'to_node_id' => 123, 'weight' => 29.01, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 124, 'to_node_id' => 123, 'weight' => 11.55, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 47, 'to_node_id' => 124, 'weight' => 31.57, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 346, 'to_node_id' => 124, 'weight' => 7.09, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 347, 'to_node_id' => 346, 'weight' => 20.50, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 348, 'to_node_id' => 347, 'weight' => 17.79, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 349, 'to_node_id' => 348, 'weight' => 18.62, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 350, 'to_node_id' => 349, 'weight' => 9.95, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 125, 'to_node_id' => 350, 'weight' => 12.38, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 54, 'to_node_id' => 125, 'weight' => 24.06, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 351, 'to_node_id' => 125, 'weight' => 18.34, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 352, 'to_node_id' => 351, 'weight' => 14.08, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 126, 'to_node_id' => 352, 'weight' => 8.25, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 56, 'to_node_id' => 126, 'weight' => 29.47, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 57, 'to_node_id' => 126, 'weight' => 32.23, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 353, 'to_node_id' => 126, 'weight' => 7.04, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 354, 'to_node_id' => 353, 'weight' => 6.68, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 355, 'to_node_id' => 354, 'weight' => 13.03, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 356, 'to_node_id' => 355, 'weight' => 4.52, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 357, 'to_node_id' => 356, 'weight' => 7.18, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 127, 'to_node_id' => 357, 'weight' => 9.57, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 55, 'to_node_id' => 127, 'weight' => 54.30, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 317, 'to_node_id' => 358, 'weight' => 30.13, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 358, 'to_node_id' => 359, 'weight' => 25.58, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 359, 'to_node_id' => 343, 'weight' => 14.83, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 359, 'to_node_id' => 360, 'weight' => 19.77, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 360, 'to_node_id' => 343, 'weight' => 14.31, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 360, 'to_node_id' => 361, 'weight' => 6.99, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 361, 'to_node_id' => 362, 'weight' => 5.99, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 362, 'to_node_id' => 363, 'weight' => 15.80, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 358, 'to_node_id' => 317, 'weight' => 30.13, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 359, 'to_node_id' => 358, 'weight' => 25.58, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 343, 'to_node_id' => 359, 'weight' => 14.83, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 360, 'to_node_id' => 359, 'weight' => 19.77, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 343, 'to_node_id' => 360, 'weight' => 14.31, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 361, 'to_node_id' => 360, 'weight' => 6.99, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 362, 'to_node_id' => 361, 'weight' => 5.99, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 363, 'to_node_id' => 362, 'weight' => 15.80, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 363, 'to_node_id' => 128, 'weight' => 35.88, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 128, 'to_node_id' => 58, 'weight' => 32.95, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 128, 'to_node_id' => 364, 'weight' => 25.58, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 364, 'to_node_id' => 129, 'weight' => 7.99, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 129, 'to_node_id' => 60, 'weight' => 32.44, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 129, 'to_node_id' => 365, 'weight' => 4.15, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 365, 'to_node_id' => 366, 'weight' => 22.23, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 366, 'to_node_id' => 130, 'weight' => 11.44, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 130, 'to_node_id' => 59, 'weight' => 58.90, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 130, 'to_node_id' => 367, 'weight' => 7.17, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 367, 'to_node_id' => 368, 'weight' => 10.00, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 368, 'to_node_id' => 131, 'weight' => 22.88, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 131, 'to_node_id' => 61, 'weight' => 20.50, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 131, 'to_node_id' => 132, 'weight' => 26.94, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 132, 'to_node_id' => 66, 'weight' => 45.50, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 132, 'to_node_id' => 133, 'weight' => 41.64, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 133, 'to_node_id' => 64, 'weight' => 26.62, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 133, 'to_node_id' => 369, 'weight' => 34.15, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 369, 'to_node_id' => 134, 'weight' => 20.29, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 134, 'to_node_id' => 63, 'weight' => 27.50, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 134, 'to_node_id' => 370, 'weight' => 44.39, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 370, 'to_node_id' => 135, 'weight' => 39.50, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 135, 'to_node_id' => 62, 'weight' => 22.83, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 135, 'to_node_id' => 371, 'weight' => 35.50, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 371, 'to_node_id' => 372, 'weight' => 16.36, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 372, 'to_node_id' => 373, 'weight' => 6.06, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 373, 'to_node_id' => 136, 'weight' => 8.39, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 136, 'to_node_id' => 65, 'weight' => 23.96, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 128, 'to_node_id' => 363, 'weight' => 35.88, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 58, 'to_node_id' => 128, 'weight' => 32.95, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 364, 'to_node_id' => 128, 'weight' => 25.58, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 129, 'to_node_id' => 364, 'weight' => 7.99, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 60, 'to_node_id' => 129, 'weight' => 32.44, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 365, 'to_node_id' => 129, 'weight' => 4.15, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 366, 'to_node_id' => 365, 'weight' => 22.23, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 130, 'to_node_id' => 366, 'weight' => 11.44, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 59, 'to_node_id' => 130, 'weight' => 58.90, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 367, 'to_node_id' => 130, 'weight' => 7.17, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 368, 'to_node_id' => 367, 'weight' => 10.00, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 131, 'to_node_id' => 368, 'weight' => 22.88, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 61, 'to_node_id' => 131, 'weight' => 20.50, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 132, 'to_node_id' => 131, 'weight' => 26.94, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 66, 'to_node_id' => 132, 'weight' => 45.50, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 133, 'to_node_id' => 132, 'weight' => 41.64, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 64, 'to_node_id' => 133, 'weight' => 26.62, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 369, 'to_node_id' => 133, 'weight' => 34.15, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 134, 'to_node_id' => 369, 'weight' => 20.29, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 63, 'to_node_id' => 134, 'weight' => 27.50, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 370, 'to_node_id' => 134, 'weight' => 44.39, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 135, 'to_node_id' => 370, 'weight' => 39.50, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 62, 'to_node_id' => 135, 'weight' => 22.83, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 371, 'to_node_id' => 135, 'weight' => 35.50, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 372, 'to_node_id' => 371, 'weight' => 16.36, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 373, 'to_node_id' => 372, 'weight' => 6.06, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 136, 'to_node_id' => 373, 'weight' => 8.39, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 65, 'to_node_id' => 136, 'weight' => 23.96, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 374, 'to_node_id' => 132, 'weight' => 19.10, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 375, 'to_node_id' => 374, 'weight' => 20.36, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 376, 'to_node_id' => 375, 'weight' => 16.05, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 377, 'to_node_id' => 376, 'weight' => 19.44, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 68, 'to_node_id' => 377, 'weight' => 17.06, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 373, 'to_node_id' => 372, 'weight' => 6.06, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 134, 'to_node_id' => 67, 'weight' => 92.65, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 133, 'to_node_id' => 69, 'weight' => 61.57, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 69, 'to_node_id' => 133, 'weight' => 61.57, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 131, 'to_node_id' => 70, 'weight' => 98.42, 'created_at' => now(), 'updated_at' => now()],
        ['from_node_id' => 70, 'to_node_id' => 131, 'weight' => 98.42, 'created_at' => now(), 'updated_at' => now()],
        ];

        foreach (array_chunk($edges, 100) as $chunk) {
            Edge::insert($chunk);
        }

        // Parkir Rektorat
        ParkingLocation::create([
            'id' => 1,
            'name' => "Parkir Rektorat",
            'polygon_id' => "pa_rektorat",
            'center_lat' => -3.75913,
            'center_lng' => 102.2719,
        ]);
        $zones = [
            ['parking_location_id' => 1, 'sub_id' => 'motor_1', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.7585904503993532,102.27228801973251],[-3.7588454685338775,102.27233851628267],[-3.758824898129177,102.27245781867072],[-3.758566341251381,102.2724075001804],[-3.7585904503993532,102.27228801973251]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 1, 'sub_id' => 'motor_2', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.758633570871339,102.2717185635309],[-3.7586716480123243,102.27172294964805],[-3.758624456262723,102.27203398107696],[-3.758585941451841,102.27203003357016],[-3.758633570871339,102.2717185635309]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 1, 'sub_id' => 'mobil_1', 'vehicle_type' => 'mobil', 'color' => '#f72585', 'coordinates' => '[[-3.7588945514051346,102.27215844158997],[-3.758872397804126,102.2721632998016],[-3.758586701727623,102.27209653015882],[-3.7585862640589625,102.27203161562528],[-3.7586256542071084,102.27203600174249],[-3.758671890300448,102.27172270824354],[-3.7586346884958317,102.27171919935051],[-3.7586517575594485,102.2716538462031],[-3.758674953978158,102.27160472168998],[-3.7587412548746215,102.27159965994349],[-3.75879114905257,102.27163562610508],[-3.758953379997749,102.27172170957323],[-3.7588945514051346,102.27215844158997]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 1, 'sub_id' => 'mobil_2', 'vehicle_type' => 'mobil', 'color' => '#f72585', 'coordinates' => '[[-3.759596220724177,102.27286048556152],[-3.759608464553793,102.27287115126154],[-3.7598716655857913,102.2729276201722],[-3.760229724003409,102.27300347903173],[-3.7602561858881387,102.27300204557253],[-3.7602476036555004,102.27307443520795],[-3.759589068858034,102.27293144173774],[-3.759596220724177,102.27286048556152]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Parkir Perpustakaan
        ParkingLocation::create([
            'id' => 2,
            'name' => "Parkir Perpustakaan",
            'polygon_id' => "pa_perpustakaan",
            'center_lat' => -3.75702,
            'center_lng' => 102.2748,
        ]);
        $zones = [
            ['parking_location_id' => 2, 'sub_id' => 'motor_1', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.7570396129074624,102.2745584001446],[-3.7571350409046005,102.27456109404636],[-3.757134368875967,102.27472744251156],[-3.7571209283137534,102.27474427940047],[-3.7571081597799747,102.27477660622753],[-3.757066494034163,102.27477795317839],[-3.7570658220068225,102.27475168763215],[-3.757038940880065,102.27475101415604],[-3.7570396129074624,102.2745584001446]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 2, 'sub_id' => 'motor_2', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.7570262892427735,102.2748882005153],[-3.7570658636698084,102.27488870275772],[-3.7570658636698084,102.27487634091636],[-3.7570997907850057,102.27487647531973],[-3.7570998388513175,102.27517723411432],[-3.757046386446291,102.27512518084774],[-3.757017941159347,102.27511694835891],[-3.7570262892427735,102.2748882005153]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 2, 'sub_id' => 'mobil_1', 'vehicle_type' => 'mobil', 'color' => '#f72585', 'coordinates' => '[[-3.757143791929664,102.27461584695675],[-3.757244307105495,102.27461644926706],[-3.7572842421508597,102.27464149082681],[-3.757260850629166,102.27465517329983],[-3.757231191399825,102.2746591951738],[-3.757184808566933,102.27468116534828],[-3.757143791929664,102.27471503565573],[-3.757143791929664,102.27461584695675]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 2, 'sub_id' => 'mobil_2', 'vehicle_type' => 'mobil', 'color' => '#f72585', 'coordinates' => '[[-3.7571319549875994,102.27521006486472],[-3.7571361385937223,102.27494980025062],[-3.7571660720377054,102.2749782254698],[-3.7571889859735847,102.27499551005803],[-3.757239495565301,102.27501406853662],[-3.757293194216359,102.27501875162875],[-3.757326786009429,102.27501109454454],[-3.757357539659367,102.27499934871025],[-3.757394323360117,102.27497529426478],[-3.757414023464051,102.2749978741009],[-3.757422164206787,102.27523670941048],[-3.757270509528439,102.27523805456849],[-3.7571319549875994,102.27521006486472]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Parkir GSG
        ParkingLocation::create([
            'id' => 3,
            'name' => "Parkir GSG",
            'polygon_id' => "pa_gsg",
            'center_lat' => -3.7579,
            'center_lng' => 102.2764,
        ]);
        $zones = [
            ['parking_location_id' => 3, 'sub_id' => 'gsg_motor', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.7579687035813265,102.27614047692032],[-3.758012839390375,102.27611024448225],[-3.7581759274140154,102.27615056258247],[-3.758296209230906,102.27626687403546],[-3.7582735040677306,102.27644944151643],[-3.758203550391741,102.27642955606154],[-3.7579687035813265,102.27614047692032]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 3, 'sub_id' => 'gsg_mobil', 'vehicle_type' => 'mobil', 'color' => '#f72585', 'coordinates' => '[[-3.7582045825663357,102.2767438414769],[-3.7582366681513975,102.27675323137345],[-3.7582124163266997,102.27693337362109],[-3.75802414267676,102.27706431024524],[-3.7579909808069942,102.27707423081176],[-3.7579751569449513,102.27707522089622],[-3.7579418583599846,102.27707006776023],[-3.757524892600486,102.27694950219183],[-3.7575321506700305,102.27691899050012],[-3.7578425182147583,102.27696980899952],[-3.757910665346131,102.2769518257067],[-3.7582045825663357,102.2767438414769]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 3, 'sub_id' => 'gsg_campur', 'vehicle_type' => 'motor dan mobil', 'color' => '#9b59b6', 'coordinates' => '[[-3.757673131448641,102.27604917295946],[-3.757649291531763,102.27610168145975],[-3.7576383492577037,102.27610119123165],[-3.757353730153582,102.27633058829616],[-3.757294732354879,102.27666823343367],[-3.757295890522144,102.27668465147252],[-3.757360453187246,102.27679083995878],[-3.757416649494388,102.27685027088057],[-3.7574008199367057,102.2768823106465],[-3.757123574055413,102.27680021836892],[-3.75710370510501,102.27676100132766],[-3.7571895495467373,102.27605040115816],[-3.7572062619942272,102.27597222157618],[-3.757238541236333,102.27592306427795],[-3.757300092879518,102.27589589168156],[-3.7574211687448553,102.27592176351607],[-3.757434160776853,102.27600256145479],[-3.757673131448641,102.27604917295946]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Parkir Area FISIP
        ParkingLocation::create([
            'id' => 4,
            'name' => "Parkir Area FISIP",
            'polygon_id' => "pa_fisip",
            'center_lat' => -3.75929,
            'center_lng' => 102.27441,
        ]);
        $zones = [
            ['parking_location_id' => 4, 'sub_id' => 'fisip_motor', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.759323045639931,102.2746392631754],[-3.759456198468783,102.274684010307],[-3.759369094120288,102.27488499238626],[-3.7592510250001823,102.27483466512899],[-3.759323045639931,102.2746392631754]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 4, 'sub_id' => 'fisip_mobil_1', 'vehicle_type' => 'mobil', 'color' => '#f72585', 'coordinates' => '[[-3.7592352104364863,102.27482726995629],[-3.7590958413516233,102.27476835646843],[-3.759111637052115,102.27472601785729],[-3.7592542138516194,102.27477785860623],[-3.7592352104364863,102.27482726995629]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 4, 'sub_id' => 'fisip_mobil_2', 'vehicle_type' => 'mobil', 'color' => '#f72585', 'coordinates' => '[[-3.7592414475472395,102.27454458105746],[-3.759276743337651,102.27441857186199],[-3.759298947790896,102.27442421092923],[-3.759263715463092,102.27455018748623],[-3.7592414475472395,102.27454458105746]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 4, 'sub_id' => 'fisip_mobil_3', 'vehicle_type' => 'mobil', 'color' => '#f72585', 'coordinates' => '[[-3.75929399192367,102.27435560849642],[-3.7593160615874552,102.27427797577337],[-3.759337863218434,102.27428342392119],[-3.7593158802643245,102.27436201237708],[-3.75929399192367,102.27435560849642]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 4, 'sub_id' => 'fisip_mobil_4', 'vehicle_type' => 'mobil', 'color' => '#f72585', 'coordinates' => '[[-3.759313294027123,102.27419627266278],[-3.7593330097359683,102.27411669560138],[-3.7593629574395493,102.2741251282236],[-3.7593411916234345,102.27420493816186],[-3.759313294027123,102.27419627266278]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 4, 'sub_id' => 'fisip_mobil_5', 'vehicle_type' => 'mobil', 'color' => '#f72585', 'coordinates' => '[[-3.7594019328042805,102.27409779792373],[-3.7594255912262184,102.2741044546595],[-3.7593349206015034,102.2745623895388],[-3.7593165166521345,102.274559869889],[-3.7594019328042805,102.27409779792373]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Parkir LAB FKIP
        ParkingLocation::create([
            'id' => 5,
            'name' => "Parkir LAB FKIP",
            'polygon_id' => "pa_lab_fkip",
            'center_lat' => -3.75833,
            'center_lng' => 102.27613,
        ]);
        $zones = [
            ['parking_location_id' => 5, 'sub_id' => 'motor', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.75841747303879,102.2760486594571],[-3.758369372214929,102.27621369620726],[-3.7583125168085303,102.27619879720487],[-3.7583591921998902,102.27603359876105],[-3.75841747303879,102.2760486594571]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Parkir Masjid Baitul Hikmah
        ParkingLocation::create([
            'id' => 6,
            'name' => "Parkir Masjid Baitul Hikmah",
            'polygon_id' => "pa_masjid_baitul_hikmah",
            'center_lat' => -3.75865,
            'center_lng' => 102.27613,
        ]);
        $zones = [
            ['parking_location_id' => 6, 'sub_id' => 'motor', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.7588205879028322,102.27617028362152],[-3.7587385755927443,102.27617598303317],[-3.758728986175072,102.27601274914201],[-3.758811036628188,102.2760046349959],[-3.7588205879028322,102.27617028362152]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 6, 'sub_id' => 'mobil', 'vehicle_type' => 'mobil', 'color' => '#f72585', 'coordinates' => '[[-3.758696074254047,102.2761788451121],[-3.7585611365382334,102.27618886509634],[-3.7585514643355253,102.27590092519108],[-3.7586823454336553,102.27588907795007],[-3.758696074254047,102.2761788451121]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Dekanat Teknik
        ParkingLocation::create([
            'id' => 7,
            'name' => "Dekanat Teknik",
            'polygon_id' => "pa_dekanat_teknik_baru",
            'center_lat' => -3.7584,
            'center_lng' => 102.2764,
        ]);
        $zones = [
            ['parking_location_id' => 7, 'sub_id' => 'motor', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.7584774557065543,102.27653893191189],[-3.7584756238022123,102.27656789521916],[-3.7583582933908843,102.27656839419694],[-3.758357827517642,102.27651325948864],[-3.7583629504109695,102.27648496306443],[-3.758380154321472,102.27644646072156],[-3.7583977789745404,102.27641544575783],[-3.7584190543577733,102.2763932787401],[-3.7584457870498227,102.2763753350863],[-3.758462327940407,102.27636708688618],[-3.7584870652273565,102.27635934212725],[-3.75856391445852,102.27635683079717],[-3.758551241298136,102.27654230242541],[-3.7584774557065543,102.27653893191189]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 7, 'sub_id' => 'mobil', 'vehicle_type' => 'mobil', 'color' => '#f72585', 'coordinates' => '[[-3.7583346731284166,102.27675034862443],[-3.7584845595809924,102.27674752988082],[-3.758484018829833,102.27678563754313],[-3.758575428371344,102.2767909181294],[-3.758576497609681,102.27701083514489],[-3.7587058834439375,102.27701098554815],[-3.758704831392791,102.27707929144384],[-3.7583251668577446,102.2771022163393],[-3.7583100668827143,102.27708839504965],[-3.7583346731284166,102.27675034862443]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Sekretariat HIMA & UKM Teknik
        ParkingLocation::create([
            'id' => 8,
            'name' => "Sekretariat HIMA & UKM Teknik",
            'polygon_id' => "pa_sekre_teknik",
            'center_lat' => -3.75828,
            'center_lng' => 102.27727,
        ]);
        $zones = [
            ['parking_location_id' => 8, 'sub_id' => 'motor', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.7582169191317263,102.27724828091186],[-3.758344673738904,102.27723806509675],[-3.758348978023335,102.2772961394383],[-3.7582190970812377,102.27730599677307],[-3.7582169191317263,102.27724828091186]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Lab Terpadu F.Teknik
        ParkingLocation::create([
            'id' => 9,
            'name' => "Lab Terpadu F.Teknik",
            'polygon_id' => "pa_lab_terpadu_teknik",
            'center_lat' => -3.75858,
            'center_lng' => 102.27725,
        ]);
        $zones = [
            ['parking_location_id' => 9, 'sub_id' => 'motor', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.758533078374427,102.27735101604327],[-3.7585209528380545,102.27716513791262],[-3.758669081794153,102.27715168639111],[-3.7586803377175926,102.27733630054814],[-3.758648650130624,102.27733811973997],[-3.7586472396079813,102.27731608646144],[-3.7585636878689,102.27732133625722],[-3.758565820160044,102.27734773045518],[-3.758533078374427,102.27735101604327]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Lab Sistem Informasi
        ParkingLocation::create([
            'id' => 10,
            'name' => "Lab Sistem Informasi",
            'polygon_id' => "pa_lab_si",
            'center_lat' => -3.75841,
            'center_lng' => 102.27725,
        ]);
        $zones = [
            ['parking_location_id' => 10, 'sub_id' => 'motor', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.7583671345822864,102.27732724928478],[-3.7583577195179743,102.27718172723485],[-3.758468728379171,102.27717182627646],[-3.7584787636881316,102.27731731571407],[-3.7583671345822864,102.27732724928478]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Stadion
        ParkingLocation::create([
            'id' => 11,
            'name' => "Stadion",
            'polygon_id' => "pa_stadion",
            'center_lat' => -3.75774,
            'center_lng' => 102.27735,
        ]);
        $zones = [
            ['parking_location_id' => 11, 'sub_id' => 'motor', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.7576597105057914,102.2773008342811],[-3.757819676246001,102.27730119563228],[-3.757819996035053,102.27740068811886],[-3.7576609153061753,102.27739897377876],[-3.7576597105057914,102.2773008342811]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // GB 3 dan 4
        ParkingLocation::create([
            'id' => 12,
            'name' => "GB 3 dan 4",
            'polygon_id' => "pa_gb_3_4",
            'center_lat' => -3.7562,
            'center_lng' => 102.2765,
        ]);
        $zones = [
            ['parking_location_id' => 12, 'sub_id' => 'motor_1', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.755890460869921,102.2762690352069],[-3.7561457270498835,102.27628613660903],[-3.7561245979527484,102.27667462913973],[-3.756029442831476,102.27666941944813],[-3.7559669029811715,102.27668918297462],[-3.7558984464606624,102.27673538359835],[-3.7558768731148007,102.27673569026103],[-3.7558640705244386,102.27672152825306],[-3.755890460869921,102.2762690352069]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 12, 'sub_id' => 'motor_2', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.7561396740106545,102.2766908360316],[-3.75645092682889,102.27669638936288],[-3.756450145097233,102.27673183116025],[-3.7561396740106545,102.27672035447586],[-3.7561396740106545,102.2766908360316]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 12, 'sub_id' => 'motor_3', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.7565610008637833,102.27663587454725],[-3.756771938188379,102.27664497538643],[-3.756768805572321,102.2767372149674],[-3.756559406624092,102.27672812483746],[-3.7565610008637833,102.27663587454725]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 12, 'sub_id' => 'motor_4', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.7561375147264897,102.27674357233701],[-3.7567673612538073,102.27676830227392],[-3.756764002215533,102.27685763940366],[-3.7561327396563655,102.27685642474069],[-3.7561375147264897,102.27674357233701]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // GB 5
        ParkingLocation::create([
            'id' => 13,
            'name' => "GB 5",
            'polygon_id' => "pa_gb_5",
            'center_lat' => -3.7554,
            'center_lng' => 102.2765,
        ]);
        $zones = [
            ['parking_location_id' => 13, 'sub_id' => 'motor_1', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.755620496235636,102.27635336186586],[-3.755650241967203,102.27623979714218],[-3.755461849714848,102.27619072390593],[-3.7554442862677178,102.2762611288739],[-3.755319669421823,102.27622927900757],[-3.7553087968100414,102.27627286303442],[-3.755213452364231,102.27624855655836],[-3.755223488622576,102.2761982672946],[-3.755496390588263,102.27612578559336],[-3.7557886034631878,102.27620249407778],[-3.7557275495978786,102.27641789975195],[-3.755654786767451,102.27639443142931],[-3.7556623139572167,102.27636425787136],[-3.755620496235636,102.27635336186586]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 13, 'sub_id' => 'motor_2', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.755184158455492,102.27615152300962],[-3.755112299343679,102.27644447837537],[-3.754786623489423,102.27633486987173],[-3.754812656398826,102.27617833640704],[-3.755184158455492,102.27615152300962]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 13, 'sub_id' => 'mobil_1', 'vehicle_type' => 'mobil', 'color' => '#f72585', 'coordinates' => '[[-3.755812280756146,102.2762654151145],[-3.7558545104126324,102.27627034764356],[-3.7558293681579613,102.27672701516963],[-3.755786158439136,102.27676440037078],[-3.7557726271545846,102.27673555766688],[-3.7557572753962063,102.27666686023719],[-3.7557572753962063,102.27662702294901],[-3.755775334489684,102.27642790864383],[-3.755786158439136,102.27636283282249],[-3.755812280756146,102.2762654151145]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 13, 'sub_id' => 'mobil_2', 'vehicle_type' => 'mobil', 'color' => '#f72585', 'coordinates' => '[[-3.755563446620016,102.27657113378416],[-3.7557074889161868,102.27662718868885],[-3.7557065820197977,102.27669885106809],[-3.7556838899830183,102.2768115579459],[-3.7555350062486212,102.27671447815396],[-3.755563446620016,102.27657113378416]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Parkir Lab Teknik
        ParkingLocation::create([
            'id' => 14,
            'name' => "Parkir Lab Teknik",
            'polygon_id' => "pa_lab_teknik",
            'center_lat' => -3.7589,
            'center_lng' => 102.27678,
        ]);
        $zones = [
            ['parking_location_id' => 14, 'sub_id' => 'motor', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.7587593075027854,102.27669203108354],[-3.7587585860528208,102.27666911752414],[-3.7591315038877724,102.27666910232858],[-3.759132200546432,102.27669584158247],[-3.7587593075027854,102.27669203108354]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 14, 'sub_id' => 'campur', 'vehicle_type' => 'motor dan mobil', 'color' => '#9b59b6', 'coordinates' => '[[-3.7587916637354226,102.27657761371808],[-3.759194737418966,102.2765661609227],[-3.759194042273009,102.2766231116272],[-3.7587923856209926,102.27663134354015],[-3.7587916637354226,102.27657761371808]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Parkir LPTIK
        ParkingLocation::create([
            'id' => 15,
            'name' => "Parkir LPTIK",
            'polygon_id' => "pa_lptik",
            'center_lat' => -3.75823,
            'center_lng' => 102.27508,
        ]);
        $zones = [
            ['parking_location_id' => 15, 'sub_id' => 'motor', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.7581725913508137,102.27491330592738],[-3.758259354191722,102.27491560371669],[-3.758247418230326,102.2750808878709],[-3.7582666985032063,102.27518468154074],[-3.7582933161153136,102.27520732379384],[-3.758292500280632,102.27526657696103],[-3.7581621087146573,102.27526625768508],[-3.7581725913508137,102.27491330592738]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Parkir Dekanat FKIP
        ParkingLocation::create([
            'id' => 16,
            'name' => "Parkir Dekanat FKIP",
            'polygon_id' => "pa_dekanat_fkip",
            'center_lat' => -3.7577,
            'center_lng' => 102.2749,
        ]);
        $zones = [
            ['parking_location_id' => 16, 'sub_id' => 'motor_1', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.757645919058376,102.27493349089303],[-3.7575887967010857,102.27493214394218],[-3.7575887967010857,102.2749914097916],[-3.7574859764468584,102.27498871588989],[-3.7574859764468584,102.27492945003911],[-3.757549819088851,102.27493079699133],[-3.757550491117115,102.2748392043136],[-3.7576472631135545,102.27483987778965],[-3.757645919058376,102.27493349089303]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 16, 'sub_id' => 'motor_2', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.757764394960418,102.27493606741064],[-3.7577668037509824,102.27484755477514],[-3.75790892241109,102.27485077341589],[-3.75790892241109,102.27493767673258],[-3.757764394960418,102.27493606741064]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 16, 'sub_id' => 'mobil', 'vehicle_type' => 'mobil', 'color' => '#f72585', 'coordinates' => '[[-3.7575858842564003,102.27464235381899],[-3.758038233457995,102.27465280264056],[-3.7580363591126513,102.27476250428725],[-3.7575814125517724,102.27475425554735],[-3.7575858842564003,102.27464235381899]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Pasca Sarjana Administrasi Pendidikan
        ParkingLocation::create([
            'id' => 17,
            'name' => "Pasca Sarjana Administrasi Pendidikan",
            'polygon_id' => "pa_pasca_ap",
            'center_lat' => -3.7578,
            'center_lng' => 102.2748,
        ]);
        $zones = [
            ['parking_location_id' => 17, 'sub_id' => 'motor', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.7579527957876593,102.27480042436923],[-3.758157727054453,102.27480474271658],[-3.758154808251362,102.27500903391535],[-3.757950224497719,102.27500658824084],[-3.7579527957876593,102.27480042436923]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 17, 'sub_id' => 'mobil', 'vehicle_type' => 'mobil', 'color' => '#f72585', 'coordinates' => '[[-3.7575858842564003,102.27464235381899],[-3.758038233457995,102.27465280264056],[-3.7580363591126513,102.27476250428725],[-3.7575814125517724,102.27475425554735],[-3.7575858842564003,102.27464235381899]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Gedung Pendidikan Profesi Guru
        ParkingLocation::create([
            'id' => 18,
            'name' => "Gedung Pendidikan Profesi Guru",
            'polygon_id' => "pa_ppg",
            'center_lat' => -3.7565,
            'center_lng' => 102.276,
        ]);
        $zones = [
            ['parking_location_id' => 18, 'sub_id' => 'motor_1', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.756185674381001,102.27587679713753],[-3.7563740270745427,102.27588592553968],[-3.7563611071798135,102.2761523526002],[-3.756171514073273,102.27614152114711],[-3.756185674381001,102.27587679713753]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 18, 'sub_id' => 'motor_2', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.7567333028185317,102.27601911614101],[-3.7567375937482126,102.27594160718303],[-3.7568327733013263,102.27594507122518],[-3.7568210398927704,102.27618341377308],[-3.7567268642874865,102.2761795702483],[-3.756732229907712,102.2761149424208],[-3.756775090874612,102.27611589783913],[-3.7567793707236206,102.27602019894232],[-3.7567333028185317,102.27601911614101]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 18, 'sub_id' => 'campur', 'vehicle_type' => 'motor dan mobil', 'color' => '#9b59b6', 'coordinates' => '[[-3.756809613049583,102.27671437342372],[-3.7568748876862657,102.27556705918431],[-3.7569696040164757,102.27559128052462],[-3.7570653030379475,102.27562949282793],[-3.7571297958926664,102.2756839319859],[-3.7571465877705776,102.27573194534705],[-3.7571437900522113,102.27605926464025],[-3.757062494531013,102.27676544050411],[-3.757041418827882,102.27677975298286],[-3.7569017905227184,102.27672479385308],[-3.756809613049583,102.27671437342372]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Gedung PKM
        ParkingLocation::create([
            'id' => 19,
            'name' => "Gedung PKM",
            'polygon_id' => "pa_pkm",
            'center_lat' => -3.7566,
            'center_lng' => 102.276,
        ]);
        $zones = [
            ['parking_location_id' => 19, 'sub_id' => 'motor', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.7563873288815444,102.27588121234226],[-3.7563281037448206,102.2758764691124],[-3.7563393197293067,102.27564816513268],[-3.7564049081614996,102.27565162009881],[-3.756400115091921,102.2757201624135],[-3.7563649365787057,102.27571688099215],[-3.7563585349324313,102.27581899771201],[-3.7563921245105973,102.27582220392162],[-3.7563873288815444,102.27588121234226]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 19, 'sub_id' => 'campur', 'vehicle_type' => 'motor dan mobil', 'color' => '#9b59b6', 'coordinates' => '[[-3.756809613049583,102.27671437342372],[-3.7568748876862657,102.27556705918431],[-3.7569696040164757,102.27559128052462],[-3.7570653030379475,102.27562949282793],[-3.7571297958926664,102.2756839319859],[-3.7571465877705776,102.27573194534705],[-3.7571437900522113,102.27605926464025],[-3.757062494531013,102.27676544050411],[-3.757041418827882,102.27677975298286],[-3.7569017905227184,102.27672479385308],[-3.756809613049583,102.27671437342372]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Gedung FKIP
        ParkingLocation::create([
            'id' => 20,
            'name' => "Gedung FKIP",
            'polygon_id' => "pa_gedung_fkip",
            'center_lat' => -3.7566,
            'center_lng' => 102.2775,
        ]);
        $zones = [
            ['parking_location_id' => 20, 'sub_id' => 'motor', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.756538187641439,102.27742326616669],[-3.7565763875828964,102.27733426006489],[-3.756665202441056,102.27737732753565],[-3.756628246876417,102.2774658986387],[-3.756538187641439,102.27742326616669]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 20, 'sub_id' => 'mobil', 'vehicle_type' => 'mobil', 'color' => '#f72585', 'coordinates' => '[[-3.7567077876328625,102.27748321891136],[-3.75683725666336,102.27754155514685],[-3.756787074871326,102.27764716385042],[-3.7566626240134866,102.277585810223],[-3.7567077876328625,102.27748321891136]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Fakultas Kedokteran dan Ilmu Kesehatan
        ParkingLocation::create([
            'id' => 21,
            'name' => "Fakultas Kedokteran dan Ilmu Kesehatan",
            'polygon_id' => "pa_fikes",
            'center_lat' => -3.7553,
            'center_lng' => 102.278,
        ]);
        $zones = [
            ['parking_location_id' => 21, 'sub_id' => 'motor', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.7552351350168607,102.27806946364967],[-3.7553218002101403,102.27808657694163],[-3.7552430084284936,102.27846953934261],[-3.755151090440961,102.27844847798423],[-3.7552351350168607,102.27806946364967]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 21, 'sub_id' => 'mobil_1', 'vehicle_type' => 'mobil', 'color' => '#f72585', 'coordinates' => '[[-3.7553520847602897,102.27809251894956],[-3.7554594678876896,102.27811779193024],[-3.755556541695711,102.27766080778048],[-3.7555962887183796,102.27767218851164],[-3.755407919820584,102.27851170843371],[-3.7552754297103093,102.27848041142153],[-3.7553520847602897,102.27809251894956]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 21, 'sub_id' => 'mobil_2', 'vehicle_type' => 'mobil', 'color' => '#f72585', 'coordinates' => '[[-3.7547534854798954,102.27772231144087],[-3.75477430536759,102.27767678851433],[-3.754807427916816,102.27763600755924],[-3.7548916538196693,102.27758194908284],[-3.755061051960979,102.27751935505859],[-3.7553078886594022,102.27755460287324],[-3.7555009456640533,102.27761340332103],[-3.755507570168845,102.2776352163902],[-3.755440378765698,102.27796715439746],[-3.7552444826731772,102.27792068307582],[-3.7552965323641843,102.27765513267116],[-3.7551971647704505,102.2776352163902],[-3.755201896560834,102.27760866134952],[-3.7550438547464324,102.27758305470388],[-3.755019380432529,102.27760680836491],[-3.754984365175119,102.27776234503062],[-3.7547534854798954,102.27772231144087]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Dekanat MIPA
        ParkingLocation::create([
            'id' => 22,
            'name' => "Dekanat MIPA",
            'polygon_id' => "pa_dekanat_mipa",
            'center_lat' => -3.7559,
            'center_lng' => 102.2747,
        ]);
        $zones = [
            ['parking_location_id' => 22, 'sub_id' => 'motor_1', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.7558124266466564,102.27473430623951],[-3.755813615136276,102.27466820307728],[-3.7559811922003234,102.2746729672682],[-3.7559794094666756,102.27474204805259],[-3.7558124266466564,102.27473430623951]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 22, 'sub_id' => 'motor_2', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.7563384757981026,102.27459730524322],[-3.75638066716445,102.27459909181425],[-3.7563723477396422,102.27478787291653],[-3.7563307506179626,102.27478787291653],[-3.7563384757981026,102.27459730524322]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 22, 'sub_id' => 'mobil', 'vehicle_type' => 'mobil', 'color' => '#f72585', 'coordinates' => '[[-3.7561725063567053,102.2745427683717],[-3.75623074233728,102.2745427683717],[-3.7562325250715247,102.27442723671788],[-3.756369795581449,102.274436765102],[-3.7563810862291263,102.27459874762525],[-3.7563384757981026,102.27459730524322],[-3.756333721841031,102.27471521899014],[-3.75616911606717,102.27471224137025],[-3.7561725063567053,102.2745427683717]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // GB 1
        ParkingLocation::create([
            'id' => 23,
            'name' => "GB 1",
            'polygon_id' => "pa_gb_1",
            'center_lat' => -3.7573,
            'center_lng' => 102.274,
        ]);
        $zones = [
            ['parking_location_id' => 23, 'sub_id' => 'motor', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.75711887784054,102.27401909200665],[-3.7571437826531593,102.27390492035954],[-3.7572386328834995,102.27386243789357],[-3.757480557146337,102.27386846572887],[-3.7574801362607815,102.27391316028286],[-3.7574838454863624,102.27406025584764],[-3.757445693449114,102.27411813821715],[-3.7574525820117657,102.2741638068764],[-3.7573969436201935,102.27414787594887],[-3.75711887784054,102.27401909200665]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 23, 'sub_id' => 'mobil', 'vehicle_type' => 'mobil', 'color' => '#f72585', 'coordinates' => '[[-3.757565331010696,102.27391383678491],[-3.75756686393008,102.27387901576157],[-3.757614384424386,102.27387850368729],[-3.757622049019915,102.27372641774036],[-3.7577492812973503,102.27376533535607],[-3.7577513251898296,102.27380169260238],[-3.7575995662054567,102.27402034815441],[-3.757564820037217,102.27401932400579],[-3.757565331010696,102.27391383678491]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // GB 2
        ParkingLocation::create([
            'id' => 24,
            'name' => "GB 2",
            'polygon_id' => "pa_gb_2",
            'center_lat' => -3.7581,
            'center_lng' => 102.274,
        ]);
        $zones = [
            ['parking_location_id' => 24, 'sub_id' => 'motor', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.7582900404754014,102.27402363416479],[-3.7583976253433065,102.27402372911416],[-3.758390640646752,102.27435884216311],[-3.7583094435492654,102.27430153170695],[-3.75817965808821,102.2742369159514],[-3.7580473605377307,102.27419379805269],[-3.757947284903679,102.2741733861302],[-3.757947284903679,102.27416201153557],[-3.758286984669766,102.27416887898465],[-3.7582900404754014,102.27402363416479]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 24, 'sub_id' => 'campur', 'vehicle_type' => 'motor dan mobil', 'color' => '#9b59b6', 'coordinates' => '[[-3.758082822312872,102.27371454290403],[-3.758074010530507,102.27384421224303],[-3.75797593763005,102.2738435933951],[-3.7579678470800246,102.27392690991894],[-3.7579435754284987,102.27392802826233],[-3.75793882731584,102.27415493161436],[-3.7578679652499147,102.27413675854478],[-3.757759303615373,102.27400184749689],[-3.757905132977669,102.27374159435738],[-3.7579107126679077,102.27374075560084],[-3.757954768437685,102.27376067453656],[-3.7579745763369345,102.2737592766083],[-3.758004148692507,102.2737472544257],[-3.758034000031884,102.27371454290403],[-3.758082822312872,102.27371454290403]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Musholla Shelter
        ParkingLocation::create([
            'id' => 25,
            'name' => "Musholla Shelter",
            'polygon_id' => "pa_musholla_shelter",
            'center_lat' => -3.7579,
            'center_lng' => 102.2735,
        ]);
        $zones = [
            ['parking_location_id' => 25, 'sub_id' => 'motor', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.757890597965428,102.27360572622621],[-3.757964726335331,102.27344209162908],[-3.75798776623283,102.27345162861627],[-3.7579086291912205,102.27361375737229],[-3.757890597965428,102.27360572622621]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Gedung Pasca Sarjana Pertanian
        ParkingLocation::create([
            'id' => 26,
            'name' => "Gedung Pasca Sarjana Pertanian",
            'polygon_id' => "pa_pasca_pertanian",
            'center_lat' => -3.7573,
            'center_lng' => 102.274,
        ]);
        $zones = [
            ['parking_location_id' => 26, 'sub_id' => 'motor', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.75711887784054,102.27401909200665],[-3.7571437826531593,102.27390492035954],[-3.7572386328834995,102.27386243789357],[-3.757480557146337,102.27386846572887],[-3.7574801362607815,102.27391316028286],[-3.7574838454863624,102.27406025584764],[-3.757445693449114,102.27411813821715],[-3.7574525820117657,102.2741638068764],[-3.7573969436201935,102.27414787594887],[-3.75711887784054,102.27401909200665]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 26, 'sub_id' => 'mobil', 'vehicle_type' => 'mobil', 'color' => '#f72585', 'coordinates' => '[[-3.757565331010696,102.27391383678491],[-3.75756686393008,102.27387901576157],[-3.757614384424386,102.27387850368729],[-3.757622049019915,102.27372641774036],[-3.7577492812973503,102.27376533535607],[-3.7577513251898296,102.27380169260238],[-3.7575995662054567,102.27402034815441],[-3.757564820037217,102.27401932400579],[-3.757565331010696,102.27391383678491]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Lab Multimedia Komunikasi dan Jurnalistik FISIP
        ParkingLocation::create([
            'id' => 27,
            'name' => "Lab Multimedia Komunikasi dan Jurnalistik FISIP",
            'polygon_id' => "pa_lab_multimedia_fisip",
            'center_lat' => -3.7595,
            'center_lng' => 102.2742,
        ]);
        $zones = [
            ['parking_location_id' => 27, 'sub_id' => 'motor', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.7595370207382786,102.27419567413892],[-3.7596873537590056,102.27427265833666],[-3.759644401469913,102.27435709261556],[-3.7595056325218508,102.27428424735467],[-3.7595370207382786,102.27419567413892]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 27, 'sub_id' => 'campur', 'vehicle_type' => 'motor dan mobil', 'color' => '#9b59b6', 'coordinates' => '[[-3.759289561000216,102.27404926112007],[-3.759297685259284,102.27402446570738],[-3.7593176266203727,102.27402927675837],[-3.7593519700758407,102.2739149217968],[-3.759327966584749,102.2739067800191],[-3.759334613705917,102.27388346493063],[-3.7593752349953746,102.27389419727291],[-3.7593257508791567,102.27405777297889],[-3.759289561000216,102.27404926112007]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Lab Fisika
        ParkingLocation::create([
            'id' => 28,
            'name' => "Lab Fisika",
            'polygon_id' => "pa_lab_fisika",
            'center_lat' => -3.7565,
            'center_lng' => 102.2739,
        ]);
        $zones = [
            ['parking_location_id' => 28, 'sub_id' => 'motor', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.7565267202929107,102.27396713461411],[-3.756529001740603,102.27387682337388],[-3.7566088524233976,102.27387796655495],[-3.756606000613445,102.27396942097414],[-3.7565267202929107,102.27396713461411]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 28, 'sub_id' => 'campur', 'vehicle_type' => 'motor dan mobil', 'color' => '#9b59b6', 'coordinates' => '[[-3.7564577062124442,102.27402200710651],[-3.756455995125961,102.27404258435126],[-3.7563196785750534,102.2740397264007],[-3.7563208192991624,102.27401972074654],[-3.7564577062124442,102.27402200710651]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Lab Biologi dan Kimia
        ParkingLocation::create([
            'id' => 29,
            'name' => "Lab Biologi dan Kimia",
            'polygon_id' => "pa_lab_biokim",
            'center_lat' => -3.756,
            'center_lng' => 102.2736,
        ]);
        $zones = [
            ['parking_location_id' => 29, 'sub_id' => 'motor', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.755918584328299,102.27375119151372],[-3.7559592431702242,102.27367416415058],[-3.7560283075003156,102.27367416415058],[-3.7560305353814556,102.27360718383181],[-3.7559843068387977,102.27360718383181],[-3.756022737796556,102.27352178392914],[-3.7560283075003156,102.27351843491289],[-3.756116865786055,102.2735223420986],[-3.7561068403200153,102.2737617967341],[-3.755918584328299,102.27375119151372]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Gedung Layanan Terpadu
        ParkingLocation::create([
            'id' => 30,
            'name' => "Gedung Layanan Terpadu",
            'polygon_id' => "pa_glt",
            'center_lat' => -3.7581,
            'center_lng' => 102.2718,
        ]);
        $zones = [
            ['parking_location_id' => 30, 'sub_id' => 'motor', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.75795603480789,102.27180139765431],[-3.7579472115525903,102.27174185971882],[-3.7583444275781375,102.27165958070765],[-3.7583865976140345,102.27168263212059],[-3.7584065325399507,102.27173257684865],[-3.7584111329063745,102.27179020538256],[-3.7583375270257022,102.2717994259475],[-3.7583221924665935,102.2717318084691],[-3.75795603480789,102.27180139765431]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 30, 'sub_id' => 'campur', 'vehicle_type' => 'motor dan mobil', 'color' => '#9b59b6', 'coordinates' => '[[-3.758063323118364,102.27195912245111],[-3.7582419707702712,102.2719268504718],[-3.7582795404425013,102.27210511473476],[-3.7580901586045883,102.27216274326719],[-3.758063323118364,102.27195912245111]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Lab Matematika
        ParkingLocation::create([
            'id' => 31,
            'name' => "Lab Matematika",
            'polygon_id' => "pa_lab_matematika",
            'center_lat' => -3.7577,
            'center_lng' => 102.2721,
        ]);
        $zones = [
            ['parking_location_id' => 31, 'sub_id' => 'campur', 'vehicle_type' => 'motor dan mobil', 'color' => '#9b59b6', 'coordinates' => '[[-3.7576317742114753,102.27220271611208],[-3.757658609711015,102.27210743693757],[-3.7577582844178608,102.27216122356936],[-3.7578801942351276,102.27209053256837],[-3.7578801942351276,102.27221424181852],[-3.7577483169475414,102.27223806161254],[-3.7576317742114753,102.27220271611208]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Lab Teknologi Industri Pertanian
        ParkingLocation::create([
            'id' => 32,
            'name' => "Lab Teknologi Industri Pertanian",
            'polygon_id' => "pa_lab_tip",
            'center_lat' => -3.7576,
            'center_lng' => 102.2715,
        ]);
        $zones = [
            ['parking_location_id' => 32, 'sub_id' => 'motor', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.757622577532544,102.2713621211139],[-3.7575216354724716,102.27137418601177],[-3.757515152953914,102.27129994048664],[-3.7577096284749416,102.27126838614004],[-3.7577105545485807,102.27129901241881],[-3.757622577532544,102.2713621211139]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 32, 'sub_id' => 'mobil', 'vehicle_type' => 'mobil', 'color' => '#f72585', 'coordinates' => '[[-3.757589102325852,102.27185899214288],[-3.757481677743158,102.27154808901247],[-3.7575279814438716,102.27151467852627],[-3.757724309110131,102.27177175365199],[-3.757589102325852,102.27185899214288]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 32, 'sub_id' => 'campur', 'vehicle_type' => 'motor dan mobil', 'color' => '#9b59b6', 'coordinates' => '[[-3.757554472464008,102.27122432639362],[-3.757549842094164,102.27116957032092],[-3.7578823025880155,102.2711333756273],[-3.7578869329560405,102.27118441942451],[-3.757554472464008,102.27122432639362]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Gedung Jurusan Peternakan Fakultas Pertanian
        ParkingLocation::create([
            'id' => 33,
            'name' => "Gedung Jurusan Peternakan Fakultas Pertanian",
            'polygon_id' => "pa_jur_peternakan",
            'center_lat' => -3.7581,
            'center_lng' => 102.2722,
        ]);
        $zones = [
            ['parking_location_id' => 33, 'sub_id' => 'motor', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.7582340261165683,102.27220005380684],[-3.7582399869732654,102.2723631359022],[-3.7580295687060357,102.2723631359022],[-3.758028376534682,102.27226576454063],[-3.7582340261165683,102.27220005380684]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Gedung Jurusan Budidaya Pertanian
        ParkingLocation::create([
            'id' => 34,
            'name' => "Gedung Jurusan Budidaya Pertanian",
            'polygon_id' => "pa_jur_budidaya_pertanian",
            'center_lat' => -3.7568,
            'center_lng' => 102.2724,
        ]);
        $zones = [
            ['parking_location_id' => 34, 'sub_id' => 'motor', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.756660290814054,102.27222385103767],[-3.7566661695932453,102.27216303669957],[-3.757102500807278,102.27219915907699],[-3.7570892211647475,102.27229421796591],[-3.7569573732754833,102.2722637991206],[-3.756660290814054,102.27222385103767]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 34, 'sub_id' => 'mobil', 'vehicle_type' => 'mobil', 'color' => '#f72585', 'coordinates' => '[[-3.7564483538887146,102.27225716325677],[-3.756549848367783,102.27226857032281],[-3.756519494880493,102.27270298944165],[-3.756428434410438,102.27269348355298],[-3.7564483538887146,102.27225716325677]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 34, 'sub_id' => 'campur', 'vehicle_type' => 'motor dan mobil', 'color' => '#9b59b6', 'coordinates' => '[[-3.756646683619209,102.27228221474314],[-3.7566499341676405,102.27226120484096],[-3.7569610573227266,102.27230208016272],[-3.7570710886555787,102.27232964724101],[-3.757117567404819,102.2723648190289],[-3.756646683619209,102.27228221474314]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Workshop Fakultas Teknik
        ParkingLocation::create([
            'id' => 35,
            'name' => "Workshop Fakultas Teknik",
            'polygon_id' => "pa_workshop_teknik",
            'center_lat' => -3.7569,
            'center_lng' => 102.2722,
        ]);
        $zones = [
            ['parking_location_id' => 35, 'sub_id' => 'motor', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.756660290814054,102.27222385103767],[-3.7566661695932453,102.27216303669957],[-3.757102500807278,102.27219915907699],[-3.7570892211647475,102.27229421796591],[-3.7569573732754833,102.2722637991206],[-3.756660290814054,102.27222385103767]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Ruang Baca Fakultas Pertanian
        ParkingLocation::create([
            'id' => 36,
            'name' => "Ruang Baca Fakultas Pertanian",
            'polygon_id' => "pa_ruang_baca_pertanian",
            'center_lat' => -3.7572,
            'center_lng' => 102.2726,
        ]);
        $zones = [
            ['parking_location_id' => 36, 'sub_id' => 'motor', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.7571242034216255,102.27274042033156],[-3.7571729560895335,102.27246784593348],[-3.7573140822181017,102.27249548909168],[-3.757266612522514,102.2727648491691],[-3.7571242034216255,102.27274042033156]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Klinik Unib
        ParkingLocation::create([
            'id' => 37,
            'name' => "Klinik Unib",
            'polygon_id' => "pa_klinik",
            'center_lat' => -3.7616,
            'center_lng' => 102.2718,
        ]);
        $zones = [
            ['parking_location_id' => 37, 'sub_id' => 'motor', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.7614315872155117,102.27183524659915],[-3.7616107680345863,102.27174614814686],[-3.7616367560891746,102.27180577557237],[-3.7614589430691012,102.27189487402597],[-3.7614315872155117,102.27183524659915]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 37, 'sub_id' => 'campur', 'vehicle_type' => 'motor dan mobil', 'color' => '#9b59b6', 'coordinates' => '[[-3.761474791943712,102.27193365910222],[-3.7618972724191337,102.27172271369142],[-3.761954939524614,102.27180677424337],[-3.761516731677247,102.27203948533185],[-3.761474791943712,102.27193365910222]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Bank BNI Unib
        ParkingLocation::create([
            'id' => 38,
            'name' => "Bank BNI Unib",
            'polygon_id' => "pa_bni",
            'center_lat' => -3.7616,
            'center_lng' => 102.2718,
        ]);
        $zones = [
            ['parking_location_id' => 38, 'sub_id' => 'motor', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.7614315872155117,102.27183524659915],[-3.7616107680345863,102.27174614814686],[-3.7616367560891746,102.27180577557237],[-3.7614589430691012,102.27189487402597],[-3.7614315872155117,102.27183524659915]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 38, 'sub_id' => 'campur', 'vehicle_type' => 'motor dan mobil', 'color' => '#9b59b6', 'coordinates' => '[[-3.761474791943712,102.27193365910222],[-3.7618972724191337,102.27172271369142],[-3.761954939524614,102.27180677424337],[-3.761516731677247,102.27203948533185],[-3.761474791943712,102.27193365910222]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Asrama
        ParkingLocation::create([
            'id' => 39,
            'name' => "Asrama",
            'polygon_id' => "pa_asrama",
            'center_lat' => -3.7616,
            'center_lng' => 102.2715,
        ]);
        $zones = [
            ['parking_location_id' => 39, 'sub_id' => 'motor_1', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.7618718269122553,102.2716555462469],[-3.761883279788293,102.27168070820193],[-3.7617997969334596,102.27171787418757],[-3.7617879450648672,102.27169170901425],[-3.7618718269122553,102.2716555462469]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 39, 'sub_id' => 'motor_2', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.7614001327328452,102.27143364996209],[-3.7615431602067417,102.27134960989048],[-3.7616102603732173,102.27147168610162],[-3.7613808194604132,102.27159774206501],[-3.7613931216461935,102.27153767896874],[-3.761395195803786,102.271511622682],[-3.7614001327328452,102.27143364996209]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Gedung R UPT Bahasa Inggris
        ParkingLocation::create([
            'id' => 40,
            'name' => "Gedung R UPT Bahasa Inggris",
            'polygon_id' => "pa_upt_bahasa",
            'center_lat' => -3.7608,
            'center_lng' => 102.2702,
        ]);
        $zones = [
            ['parking_location_id' => 40, 'sub_id' => 'campur', 'vehicle_type' => 'motor dan mobil', 'color' => '#9b59b6', 'coordinates' => '[[-3.760599066215079,102.27001396465471],[-3.76102783562618,102.27010078084982],[-3.7609536983150917,102.27032057628463],[-3.7608248288681096,102.27028233298637],[-3.7608132510252403,102.27024800455763],[-3.760753959278645,102.27023179952329],[-3.7607083664373846,102.27026636798257],[-3.7606910477784705,102.27026144574097],[-3.7606694869512864,102.27022363337369],[-3.7606471767911813,102.27021696916285],[-3.760628441765661,102.2701678034474],[-3.7605631155949055,102.27015285779618],[-3.760599066215079,102.27001396465471]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Gedung I
        ParkingLocation::create([
            'id' => 41,
            'name' => "Gedung I",
            'polygon_id' => "pa_gedung_i",
            'center_lat' => -3.7602,
            'center_lng' => 102.2699,
        ]);
        $zones = [
            ['parking_location_id' => 41, 'sub_id' => 'motor_1', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.759970853998567,102.2698340136962],[-3.760438943176922,102.2699615021113],[-3.760409255625291,102.27003609475378],[-3.759945621522789,102.26991204896171],[-3.759970853998567,102.2698340136962]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 41, 'sub_id' => 'motor_2', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.7599696250881323,102.26983025974789],[-3.7599830308971747,102.26979020083792],[-3.7605879148859316,102.2699588416981],[-3.7605781687510103,102.2699972357072],[-3.7599696250881323,102.26983025974789]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Gedung J
        ParkingLocation::create([
            'id' => 42,
            'name' => "Gedung J",
            'polygon_id' => "pa_gedung_j",
            'center_lat' => -3.7602,
            'center_lng' => 102.2699,
        ]);
        $zones = [
            ['parking_location_id' => 42, 'sub_id' => 'motor', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.7599696250881323,102.26983025974789],[-3.7599830308971747,102.26979020083792],[-3.7605879148859316,102.2699588416981],[-3.7605781687510103,102.2699972357072],[-3.7599696250881323,102.26983025974789]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Gedung K
        ParkingLocation::create([
            'id' => 43,
            'name' => "Gedung K",
            'polygon_id' => "pa_gedung_k",
            'center_lat' => -3.761,
            'center_lng' => 102.2698,
        ]);
        $zones = [
            ['parking_location_id' => 43, 'sub_id' => 'campur_1', 'vehicle_type' => 'motor dan mobil', 'color' => '#9b59b6', 'coordinates' => '[[-3.760767176959419,102.26998579047171],[-3.760887525103996,102.2696555501758],[-3.7610721163306238,102.26971997038095],[-3.7609140306212794,102.27002358622042],[-3.760767176959419,102.26998579047171]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 43, 'sub_id' => 'campur_2', 'vehicle_type' => 'motor dan mobil', 'color' => '#9b59b6', 'coordinates' => '[[-3.7612534561703512,102.27002397792432],[-3.76132199644492,102.26982029287313],[-3.7614255623958854,102.26982167882318],[-3.7613479433693726,102.27005471046476],[-3.7612534561703512,102.27002397792432]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Gedung L
        ParkingLocation::create([
            'id' => 44,
            'name' => "Gedung L",
            'polygon_id' => "pa_gedung_l",
            'center_lat' => -3.761,
            'center_lng' => 102.2692,
        ]);
        $zones = [
            ['parking_location_id' => 44, 'sub_id' => 'mobil', 'vehicle_type' => 'mobil', 'color' => '#f72585', 'coordinates' => '[[-3.7609053775151864,102.26916567436405],[-3.760988006046773,102.2691981303509],[-3.7609178980519147,102.26939988759307],[-3.76083292565022,102.26936118424578],[-3.7609053775151864,102.26916567436405]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 44, 'sub_id' => 'campur', 'vehicle_type' => 'motor dan mobil', 'color' => '#9b59b6', 'coordinates' => '[[-3.7610627587972374,102.26918449650509],[-3.761110517417791,102.26910162510018],[-3.761395433116732,102.269152193006],[-3.761379922139355,102.26924360377501],[-3.7610627587972374,102.26918449650509]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Laboratorium Ilmu Tanah
        ParkingLocation::create([
            'id' => 45,
            'name' => "Laboratorium Ilmu Tanah",
            'polygon_id' => "pa_lab_ilmu_tanah",
            'center_lat' => -3.7597,
            'center_lng' => 102.2698,
        ]);
        $zones = [
            ['parking_location_id' => 45, 'sub_id' => 'campur', 'vehicle_type' => 'motor dan mobil', 'color' => '#9b59b6', 'coordinates' => '[[-3.7595623335134576,102.26975399926755],[-3.7598789828605135,102.26983039664395],[-3.759829301703249,102.2700305060934],[-3.7595147980170225,102.26995201507987],[-3.7595623335134576,102.26975399926755]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Gedung Administrasi Dan Unit Penjamin Mutu Fakultas Pertanian
        ParkingLocation::create([
            'id' => 46,
            'name' => "Gedung Administrasi Dan Unit Penjamin Mutu Fakultas Pertanian",
            'polygon_id' => "pa_admin_pertanian",
            'center_lat' => -3.7594,
            'center_lng' => 102.2695,
        ]);
        $zones = [
            ['parking_location_id' => 46, 'sub_id' => 'motor', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.759449142776262,102.26967607382363],[-3.7595046822813742,102.26948174188931],[-3.7595545076580947,102.26949676557905],[-3.759500446730428,102.26967651854943],[-3.759449142776262,102.26967607382363]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Lab Sosek (Sosial Ekonomi Pertanian) / Agribisnis
        ParkingLocation::create([
            'id' => 47,
            'name' => "Lab Sosek (Sosial Ekonomi Pertanian) / Agribisnis",
            'polygon_id' => "pa_lab_sosek_agri",
            'center_lat' => -3.7591,
            'center_lng' => 102.2693,
        ]);
        $zones = [
            ['parking_location_id' => 47, 'sub_id' => 'motor', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.7591631380865778,102.26942224156181],[-3.7590966650251545,102.26940539249284],[-3.7591201780926156,102.26932108542638],[-3.759091760900077,102.26931134763453],[-3.7591007414311832,102.26927783922264],[-3.759254197496304,102.26932487338718],[-3.7592362193543494,102.26938034294596],[-3.759181118446918,102.26936535945896],[-3.7591631380865778,102.26942224156181]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 47, 'sub_id' => 'mobil_1', 'vehicle_type' => 'mobil', 'color' => '#f72585', 'coordinates' => '[[-3.759269762207296,102.2692700057886],[-3.7589994333587526,102.26918079634964],[-3.759008159812609,102.26915414297724],[-3.759278460847753,102.26924277574585],[-3.759269762207296,102.2692700057886]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 47, 'sub_id' => 'mobil_2', 'vehicle_type' => 'mobil', 'color' => '#f72585', 'coordinates' => '[[-3.758969681516078,102.269273429512],[-3.7589805339973594,102.2692409197777],[-3.759076650184568,102.26927089969195],[-3.759067708042494,102.2693038634219],[-3.758969681516078,102.269273429512]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Dekanat Fakultas Pertanian
        ParkingLocation::create([
            'id' => 48,
            'name' => "Dekanat Fakultas Pertanian",
            'polygon_id' => "pa_dekanat_pertanian",
            'center_lat' => -3.7595,
            'center_lng' => 102.2693,
        ]);
        $zones = [
            ['parking_location_id' => 48, 'sub_id' => 'motor', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.7596094118812147,102.26930322698468],[-3.7596764015360975,102.26932068937612],[-3.7596659360188767,102.26935648114619],[-3.7596000839873653,102.26933774006005],[-3.7596094118812147,102.26930322698468]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 48, 'sub_id' => 'mobil', 'vehicle_type' => 'mobil', 'color' => '#f72585', 'coordinates' => '[[-3.759451204530066,102.2692654894878],[-3.759442192746036,102.26930298423304],[-3.759296631380778,102.26926393095727],[-3.759306120212983,102.26922762081568],[-3.759451204530066,102.2692654894878]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Gedung Jurusan Kehutanan
        ParkingLocation::create([
            'id' => 49,
            'name' => "Gedung Jurusan Kehutanan",
            'polygon_id' => "pa_jur_kehutanan",
            'center_lat' => -3.7585,
            'center_lng' => 102.2689,
        ]);
        $zones = [
            ['parking_location_id' => 49, 'sub_id' => 'motor', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.758717429664202,102.26898050038818],[-3.7586936603829173,102.26906534729045],[-3.7583161229340334,102.26896168114109],[-3.7583388281416177,102.26888093392262],[-3.758417978170044,102.26890244157863],[-3.7584026884569965,102.26895798402245],[-3.7586043516890157,102.26901230292947],[-3.758620492664903,102.26895348073725],[-3.758717429664202,102.26898050038818]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Gedung Magister Manajemen
        ParkingLocation::create([
            'id' => 50,
            'name' => "Gedung Magister Manajemen",
            'polygon_id' => "pa_magister_manajemen",
            'center_lat' => -3.761,
            'center_lng' => 102.2695,
        ]);
        $zones = [
            ['parking_location_id' => 50, 'sub_id' => 'mobil', 'vehicle_type' => 'mobil', 'color' => '#f72585', 'coordinates' => '[[-3.7609755819875232,102.26943596946768],[-3.7610321782383807,102.2694465499132],[-3.761057950256429,102.26948123409932],[-3.7610357787570052,102.26958413220706],[-3.7609991064274197,102.26963877587974],[-3.760906466015797,102.26961539155798],[-3.7609755819875232,102.26943596946768]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Gedung Magister Akuntansi
        ParkingLocation::create([
            'id' => 51,
            'name' => "Gedung Magister Akuntansi",
            'polygon_id' => "pa_magister_akuntansi",
            'center_lat' => -3.7615,
            'center_lng' => 102.2689,
        ]);
        $zones = [
            ['parking_location_id' => 51, 'sub_id' => 'motor', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.761448402772672,102.26911849653328],[-3.7614160048133414,102.26912965837994],[-3.761344302730933,102.2689359050649],[-3.761558979858364,102.26885769550398],[-3.761583735685022,102.2689272088648],[-3.76140652627943,102.26899099068476],[-3.761448402772672,102.26911849653328]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 51, 'sub_id' => 'mobil', 'vehicle_type' => 'mobil', 'color' => '#f72585', 'coordinates' => '[[-3.761601992878866,102.26891971496474],[-3.761578071431998,102.26884969858247],[-3.761711491698577,102.26873511342762],[-3.7617441457793177,102.2688326779346],[-3.761727497418306,102.26887059211913],[-3.761601992878866,102.26891971496474]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Gedung Magister Ilmu Ekonomi
        ParkingLocation::create([
            'id' => 52,
            'name' => "Gedung Magister Ilmu Ekonomi",
            'polygon_id' => "pa_magister_ekonomi",
            'center_lat' => -3.7622,
            'center_lng' => 102.2686,
        ]);
        $zones = [
            ['parking_location_id' => 52, 'sub_id' => 'motor', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.7621116969398116,102.26867721861396],[-3.762408447484674,102.26874838013867],[-3.7623999688987624,102.26878236773445],[-3.762104278175414,102.26871120620763],[-3.7621116969398116,102.26867721861396]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 52, 'sub_id' => 'mobil', 'vehicle_type' => 'mobil', 'color' => '#f72585', 'coordinates' => '[[-3.762143651910776,102.26852271726392],[-3.762450293630934,102.26858707886925],[-3.7624141117229897,102.26873574511188],[-3.762114706373879,102.26866413149446],[-3.762143651910776,102.26852271726392]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Dekanat FEB
        ParkingLocation::create([
            'id' => 53,
            'name' => "Dekanat FEB",
            'polygon_id' => "pa_dekanat_feb",
            'center_lat' => -3.7618,
            'center_lng' => 102.2683,
        ]);
        $zones = [
            ['parking_location_id' => 53, 'sub_id' => 'mobil_1', 'vehicle_type' => 'mobil', 'color' => '#f72585', 'coordinates' => '[[-3.761759074039162,102.26827290782711],[-3.76185575786144,102.26819539375805],[-3.7619621100532186,102.26831783075306],[-3.762022757165724,102.26844995700372],[-3.7619717784334483,102.26848519067062],[-3.7619251944176426,102.26843322101269],[-3.7618970682187154,102.2684508378461],[-3.761759074039162,102.26827290782711]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 53, 'sub_id' => 'mobil_2', 'vehicle_type' => 'mobil', 'color' => '#f72585', 'coordinates' => '[[-3.7615060496641064,102.26861377500336],[-3.76153639802682,102.26866218376631],[-3.7615037735360204,102.26868499417776],[-3.7614767129112465,102.2686370923131],[-3.7615060496641064,102.26861377500336]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Gedung Jurusan Ekonomi Pembangunan
        ParkingLocation::create([
            'id' => 54,
            'name' => "Gedung Jurusan Ekonomi Pembangunan",
            'polygon_id' => "pa_jur_ekonomi_pembangunan",
            'center_lat' => -3.7618,
            'center_lng' => 102.2687,
        ]);
        $zones = [
            ['parking_location_id' => 54, 'sub_id' => 'motor', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.7617573533381403,102.26882368322276],[-3.7617254637452504,102.26872380409583],[-3.7618045547648222,102.26869559821722],[-3.761894854399941,102.26870350312453],[-3.761885736491422,102.26878737268675],[-3.7617573533381403,102.26882368322276]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Lab Hukum
        ParkingLocation::create([
            'id' => 55,
            'name' => "Lab Hukum",
            'polygon_id' => "pa_lab_hukum",
            'center_lat' => -3.7602,
            'center_lng' => 102.2686,
        ]);
        $zones = [
            ['parking_location_id' => 55, 'sub_id' => 'campur', 'vehicle_type' => 'motor dan mobil', 'color' => '#9b59b6', 'coordinates' => '[[-3.7601777459717027,102.26855758352082],[-3.7602954121165624,102.2685363338972],[-3.7603519013712514,102.26884206682917],[-3.760227759555761,102.26886743556372],[-3.7601777459717027,102.26855758352082]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Dekanat Fakultas Hukum
        ParkingLocation::create([
            'id' => 56,
            'name' => "Dekanat Fakultas Hukum",
            'polygon_id' => "pa_dekanat_hukum",
            'center_lat' => -3.7604,
            'center_lng' => 102.2682,
        ]);
        $zones = [
            ['parking_location_id' => 56, 'sub_id' => 'motor', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.760265581116556,102.2681242072764],[-3.760285842410042,102.26806916261023],[-3.7604206597933683,102.2680068171519],[-3.7605644133312808,102.2680194205733],[-3.7605077296620237,102.26820197818961],[-3.760265581116556,102.2681242072764]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 56, 'sub_id' => 'mobil', 'vehicle_type' => 'mobil', 'color' => '#f72585', 'coordinates' => '[[-3.760259524963459,102.26813822830462],[-3.7605001252500614,102.26821370623549],[-3.760486537815183,102.26826495412149],[-3.7605365082025344,102.2682773439559],[-3.760474721605604,102.26848514315878],[-3.7601709916732915,102.26838778478322],[-3.760259524963459,102.26813822830462]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Perpustakaan Fakultas Hukum
        ParkingLocation::create([
            'id' => 57,
            'name' => "Perpustakaan Fakultas Hukum",
            'polygon_id' => "pa_perpus_hukum",
            'center_lat' => -3.7599,
            'center_lng' => 102.2684,
        ]);
        $zones = [
            ['parking_location_id' => 57, 'sub_id' => 'motor', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.7598503323810064,102.26846461459769],[-3.759873470165445,102.2684077653625],[-3.7599288042440833,102.26842851237592],[-3.7599370343877467,102.2684083366077],[-3.760080973085607,102.26845956195012],[-3.7600813412498297,102.26851001231239],[-3.760094210206347,102.26855773904725],[-3.7598503323810064,102.26846461459769]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Fakultas Hukum
        ParkingLocation::create([
            'id' => 58,
            'name' => "Fakultas Hukum",
            'polygon_id' => "pa_fakultas_hukum",
            'center_lat' => -3.7599,
            'center_lng' => 102.268,
        ]);
        $zones = [
            ['parking_location_id' => 58, 'sub_id' => 'motor', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.7598586271428616,102.26801309820746],[-3.7597218530257948,102.26795460375047],[-3.759742468600436,102.26790828182573],[-3.7598789324070623,102.26796443777897],[-3.7598586271428616,102.26801309820746]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 58, 'sub_id' => 'mobil', 'vehicle_type' => 'mobil', 'color' => '#f72585', 'coordinates' => '[[-3.7601609380160284,102.2681459269636],[-3.760041120229374,102.26809773855018],[-3.7600516030389173,102.2680721017959],[-3.760171281423709,102.26812238749295],[-3.7601609380160284,102.2681459269636]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Gedung A
        ParkingLocation::create([
            'id' => 59,
            'name' => "Gedung A",
            'polygon_id' => "pa_gedung_a",
            'center_lat' => -3.7581,
            'center_lng' => 102.2677,
        ]);
        $zones = [
            ['parking_location_id' => 59, 'sub_id' => 'motor', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.7579104170834086,102.26755735453736],[-3.7579142877324614,102.26750935452264],[-3.758350506688913,102.26754571413159],[-3.7583428426558356,102.26759496406021],[-3.7579104170834086,102.26755735453736]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 59, 'sub_id' => 'mobil', 'vehicle_type' => 'mobil', 'color' => '#f72585', 'coordinates' => '[[-3.758344822291207,102.26799404511598],[-3.758237116737746,102.26792409648795],[-3.7583112640834884,102.26774678742697],[-3.7584392621470784,102.26770802555762],[-3.7583744648099042,102.2678349865837],[-3.7583453623087593,102.2679940380508]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Gedung B
        ParkingLocation::create([
            'id' => 60,
            'name' => "Gedung B",
            'polygon_id' => "pa_gedung_b",
            'center_lat' => -3.759,
            'center_lng' => 102.2678,
        ]);
        $zones = [
            ['parking_location_id' => 60, 'sub_id' => 'motor', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.758911814930343,102.26800894779444],[-3.7589812889031577,102.26783698346117],[-3.759063380565024,102.26786802343003],[-3.759135177113194,102.2676906388158],[-3.759198302202833,102.26771284505185],[-3.7590548610744463,102.26806503464417],[-3.758911814930343,102.26800894779444]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 60, 'sub_id' => 'mobil', 'vehicle_type' => 'mobil', 'color' => '#f72585', 'coordinates' => '[[-3.758972526115741,102.26782059527767],[-3.7588303900046327,102.267763534702],[-3.7588765656313825,102.2676483018875],[-3.759036079757564,102.26766429159369],[-3.758972526115741,102.26782059527767]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Gedung C
        ParkingLocation::create([
            'id' => 61,
            'name' => "Gedung C",
            'polygon_id' => "pa_gedung_c",
            'center_lat' => -3.7592,
            'center_lng' => 102.2678,
        ]);
        $zones = [
            ['parking_location_id' => 61, 'sub_id' => 'motor_1', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.758911814930343,102.26800894779444],[-3.7589812889031577,102.26783698346117],[-3.759063380565024,102.26786802343003],[-3.759135177113194,102.2676906388158],[-3.759198302202833,102.26771284505185],[-3.7590548610744463,102.26806503464417],[-3.758911814930343,102.26800894779444]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 61, 'sub_id' => 'motor_2', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.7594335245591566,102.268034843973],[-3.759495046328695,102.26788240727478],[-3.7595262038558133,102.26789453190929],[-3.759463171917858,102.26804697357812],[-3.7594335245591566,102.268034843973]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Masjid Darul Ulum
        ParkingLocation::create([
            'id' => 62,
            'name' => "Masjid Darul Ulum",
            'polygon_id' => "pa_masjid_darul_ulum",
            'center_lat' => -3.7576,
            'center_lng' => 102.2676,
        ]);
        $zones = [
            ['parking_location_id' => 62, 'sub_id' => 'campur', 'vehicle_type' => 'motor dan mobil', 'color' => '#9b59b6', 'coordinates' => '[[-3.7573885876465454,102.26771534186526],[-3.757567050660114,102.26762293611802],[-3.757670676074568,102.26761536649849],[-3.7577321564155852,102.26758187599108],[-3.757802868869163,102.26759934236873],[-3.757702319375838,102.26779665189844],[-3.7573960582422643,102.26774013544616],[-3.7573885876465454,102.26771534186526]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Gedung Pasca Sarjana Ilmu Hukum
        ParkingLocation::create([
            'id' => 63,
            'name' => "Gedung Pasca Sarjana Ilmu Hukum",
            'polygon_id' => "pa_pasca_hukum",
            'center_lat' => -3.7595,
            'center_lng' => 102.268,
        ]);
        $zones = [
            ['parking_location_id' => 63, 'sub_id' => 'mobil', 'vehicle_type' => 'mobil', 'color' => '#f72585', 'coordinates' => '[[-3.7594783383915598,102.2680431370012],[-3.7595379368321176,102.26790078929292],[-3.759699948411665,102.26796227556838],[-3.759639937908574,102.26810326232243],[-3.7594783383915598,102.2680431370012]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // Lapangan Futsal, Voli, Basket
        ParkingLocation::create([
            'id' => 64,
            'name' => "Lapangan Futsal, Voli, Basket",
            'polygon_id' => "pa_lapangan_olahraga",
            'center_lat' => -3.7592,
            'center_lng' => 102.2676,
        ]);
        $zones = [
            ['parking_location_id' => 64, 'sub_id' => 'campur', 'vehicle_type' => 'motor dan mobil', 'color' => '#9b59b6', 'coordinates' => '[[-3.7589180258054,102.26761563606777],[-3.758927003416204,102.26758376449112],[-3.7590717749311864,102.26759731884772],[-3.759427793908415,102.26771383115494],[-3.7596585885661256,102.26777190129849],[-3.7596455686657038,102.26779962637005],[-3.759420558186605,102.26774404739291],[-3.7590611987986478,102.26762965903418],[-3.7589180258054,102.26761563606777]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

        // GOR Unib
        ParkingLocation::create([
            'id' => 65,
            'name' => "GOR Unib",
            'polygon_id' => "pa_gor_unib",
            'center_lat' => -3.7607,
            'center_lng' => 102.2675,
        ]);
        $zones = [
            ['parking_location_id' => 65, 'sub_id' => 'motor_1', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.7604897285101657,102.26783818290147],[-3.7605863960951638,102.26737451816916],[-3.7606527243675743,102.26738980747211],[-3.7605540660561445,102.26786033606027],[-3.7604897285101657,102.26783818290147]]', 'created_at' => now(), 'updated_at' => now()],
            ['parking_location_id' => 65, 'sub_id' => 'motor_2', 'vehicle_type' => 'motor', 'color' => '#00f0ff', 'coordinates' => '[[-3.7605486961852534,102.26725972709812],[-3.7605691514992685,102.26719675158631],[-3.7610494280662436,102.2673026064864],[-3.7610368565106427,102.26736378280253],[-3.7605486961852534,102.26725972709812]]', 'created_at' => now(), 'updated_at' => now()],
        ];
        ParkingZone::insert($zones);

$schedules = [];
        
        // A. Gerbang SETIAP HARI (06:00 - 22:00)
        // ID 71 (Rektorat) & ID 3 (Keluar Belakang)
        $dailyGates = [71, 3]; 
        foreach ($dailyGates as $gateId) {
            for ($day = 0; $day <= 6; $day++) { // 0=Minggu s/d 6=Sabtu
                $schedules[] = [
                    'node_id' => $gateId,
                    'day_of_week' => $day,
                    'open_time' => '06:00:00',
                    'close_time' => '22:00:00',
                    'created_at' => now(), 'updated_at' => now()
                ];
            }
        }

        // B. Gerbang SENIN-JUMAT (07:00 - 18:00)
        // ID 1 (Masuk Belakang), ID 68 (Masuk Depan), ID 67 (Keluar Depan)
        $weekdayGates = [1, 68, 67];
        foreach ($weekdayGates as $gateId) {
            for ($day = 1; $day <= 5; $day++) { // 1=Senin s/d 5=Jumat
                $schedules[] = [
                    'node_id' => $gateId,
                    'day_of_week' => $day,
                    'open_time' => '06:00:00',
                    'close_time' => '18:00:00',
                    'created_at' => now(), 'updated_at' => now()
                ];
            }
        }

        // Simpan ke Database
        \App\Models\NodeSchedule::insert($schedules);

    }
}


