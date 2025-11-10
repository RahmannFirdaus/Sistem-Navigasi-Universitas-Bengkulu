document.addEventListener('DOMContentLoaded', function () {
    // Inisialisasi peta
    const map = L.map('map').setView([-3.759, 102.272], 16);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '© <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    // DATA GRAF 
    const graphData = {
nodes: [
            { id: 1, name: "Gerbang Masuk Unib Belakang", type: "gate", coords: [-3.7595514653581716, 102.27512997662785] },
            { id: 2, name: "LPTIK", type: "building", coords: [-3.758372916495219, 102.27494967197975] },
            { id: 3, name: "Gerbang Keluar Unib Belakang", type: "gate", coords: [-3.75936130077649, 102.27623666288468] },
            { id: 4, name: "FISIP", type: "building", coords: [-3.759177453212331, 102.27455299895848] },
            { id: 5, name: "Stadion", type: "poi", coords: [-3.7578578700860703, 102.27800700414326] },
            { id: 6, name: "Dekanat Fisip", type: "building", coords: [-3.7592502809052775, 102.27419899685964] },
            { id: 7, name: "Lab Pembelajaran FKIP", type: "building", coords: [-3.7583322348586847, 102.27570889626327] },
            { id: 8, name: "Pasca Sarjana Administrasi Pendidikan", type: "building", coords: [-3.7580478836217424, 102.27509021624888] },
            { id: 9, name: "Dekanat FKIP", type: "building", coords: [-3.7576981039709807, 102.27493239157644] },
            { id: 10, name: "Perpustakaan", type: "building", coords: [-3.756854385257199, 102.27481448506444] },
            { id: 11, name: "Masjid Baitul Hikmah", type: "poi", coords: [-3.7590817022129954, 102.27598024101104] },
            { id: 12, name: "Dekanat Teknik", type: "building", coords: [-3.7585759684082944, 102.27666775727062] },
            { id: 13, name: "Lab Teknik", type: "building", coords: [-3.7589360785898833, 102.27680897568536] },
            { id: 14, name: "Gedung Serba Guna", type: "building", coords: [-3.7577551364958737, 102.27657219345718] },
            { id: 15, name: "Lab Terpadu Teknik", type: "building", coords: [-3.758609355713446, 102.2773960452584] },
            { id: 16, name: "Lab Sistem Informasi", type: "building", coords: [-3.758429547087232, 102.27738935799476] },
            { id: 17, name: "Sekretariat HIMA Teknik", type: "building", coords: [-3.7582717907085623, 102.27736053986541] },
            { id: 18, name: "GB 3 & 4", type: "building", coords: [-3.7564171070800683, 102.27655420949799] },
            { id: 19, name: "Gedung Pendidikan Profesi Guru", type: "building", coords: [-3.756645491658503, 102.27605506077191] },
            { id: 20, name: "Gedung PKM", type: "building", coords: [-3.756674076008892, 102.27578306824842] },
            { id: 21, name: "GB 5", type: "building", coords: [-3.7555030697281495, 102.27643279992401] },
            { id: 22, name: "Gedung FKIP", type: "building", coords: [-3.7564193427806885, 102.27749210091963] },
            { id: 23, name: "Fakultas Kedokteran dan Ilmu Kesehatan", type: "building", coords: [-3.754979862955153, 102.27795980347213] },
            { id: 24, name: "Dekanat MIPA", type: "building", coords: [-3.755956548696915, 102.2748434408972] },
            { id: 25, name: "GB 1", type: "building", coords: [-3.756972625738598, 102.27377359872537] },
            { id: 26, name: "Gb 2", type: "building", coords: [-3.758166841349791, 102.2739074247774] },
            { id: 27, name: "Musholla Shelter", type: "poi", coords: [-3.7577921471219895, 102.27356842154893] },
            { id: 28, name: "Gedung Pasca Sarjana Pertanian", type: "building", coords: [-3.757416061389918, 102.27373144748651] },
            { id: 29, name: "Lab Multimedia Komunikasi dan Jurnalistik FISIP", type: "building", coords: [-3.7592245332844954, 102.27393651966258] },
            { id: 30, name: "Lab Fisika", type: "building", coords: [-3.7563560302309753, 102.27377518351813] },
            { id: 31, name: "Lab Biologi dan Kimia", type: "building", coords: [-3.7562805698030814, 102.27334060687093] },
            { id: 32, name: "Rektorat", type: "building", coords: [-3.759299887457715, 102.27234074750658] },
            { id: 33, name: "Gedung Layanan Terpadu", type: "building", coords: [-3.7581380509764273, 102.27185981679139] },
            { id: 34, name: "Lab Matematika", type: "building", coords: [-3.7577620082708023, 102.27196529537628] },
            { id: 35, name: "Lab Teknologi Industri Pertanian", type: "building", coords: [-3.757769413252902, 102.2714358895227] },
            { id: 36, name: "Gedung Jurusan Peternakan Fakultas Pertanian", type: "building", coords: [-3.7580255362683346, 102.27246933444076] },
            { id: 37, name: "Gedung Jurusan Budidaya Pertanian", type: "building", coords: [-3.756683305514443, 102.27251316573916] },
            { id: 38, name: "Workshop Fakultas Teknik", type: "building", coords: [-3.7570096012380247, 102.27192778871176] },
            { id: 39, name: "Ruang Baca Fakultas Pertanian", type: "building", coords: [-3.7571911095059676, 102.27285769529249] },
            { id: 40, name: "Klinik Unib", type: "building", coords: [-3.7614486790935047, 102.27178265857242] },
            { id: 41, name: "Bank BNI Unib", type: "building", coords: [-3.7615655200223586, 102.27173702563033] },
            { id: 42, name: "Asrama", type: "building", coords: [-3.7617602939182433, 102.27157315379526] },
            { id: 43, name: "Gedung R UPT Bahasa Inggris", type: "building", coords: [-3.760736776497083, 102.27036663374747] },
            { id: 44, name: "Gedung I", type: "building", coords: [-3.7601662835221106, 102.27008496925839] },
            { id: 45, name: "Gedung J", type: "building", coords: [-3.7604293110046996, 102.2697791379087] },
            { id: 46, name: "Gedung K", type: "building", coords: [-3.761165094009769, 102.26987327896865] },
            { id: 47, name: "Gedung L", type: "building", coords: [-3.7612278252936306, 102.26930687285017] },
            { id: 48, name: "Laboratorium Ilmu Tanah", type: "building", coords: [-3.759390869526726, 102.26992505544882] },
            { id: 49, name: "Gedung Administrasi Dan Unit Penjamin Mutu Fakultas Pertanian", type: "building", coords: [-3.7592998632338634, 102.26952304873623] },
            { id: 50, name: "Lab Sosek (Sosial Ekonomi Pertanian) / Agribisnis", type: "building", coords: [-3.758994948602563, 102.26943741948577] },
            { id: 51, name: "Dekanat Fakultas Pertanian", type: "building", coords: [-3.75956403994293, 102.26915100760527] },
            { id: 52, name: "Gedung Jurusan Kehutanan", type: "building", coords: [-3.7585564103182065, 102.26883477859246] },
            { id: 53, name: "Gedung Magister Manajemen", type: "building", coords: [-3.7611876990048216, 102.2695824720899] },
            { id: 54, name: "Gedung Magister Akuntansi", type: "building", coords: [-3.7615620751394943, 102.2690251097813] },
            { id: 55, name: "Gedung Magister Ilmu Ekonomi", type: "building", coords: [-3.762574547692566, 102.26856754083917] },
            { id: 56, name: "Dekanat FEB", type: "building", coords: [-3.761615143227104, 102.26844808568126] },
            { id: 57, name: "Gedung Jurusan Ekonomi Pembangunan", type: "building", coords: [-3.761868617946405, 102.26894259002916] },
            { id: 58, name: "Lab Hukum", type: "building", coords: [-3.7604411985889215, 102.26866685243749] },
            { id: 59, name: "Dekanat Fakultas Hukum", type: "building", coords: [-3.7606757277062286, 102.26835854667462] },
            { id: 60, name: "Perpustakaan Fakultas Hukum", type: "building", coords: [-3.7598174281493613, 102.26834392312446] },
            { id: 61, name: "Fakultas Hukum", type: "building", coords: [-3.759863760324663, 102.26809061971] },
            { id: 62, name: "Gedung A", type: "building", coords: [-3.758059068149066, 102.26775061635698] },
            { id: 63, name: "Gedung B", type: "building", coords: [-3.758736127499276, 102.26783896734645] },
            { id: 64, name: "Gedung C", type: "building", coords: [-3.7592937772753174, 102.2679752640883] },
            { id: 65, name: "Masjid Darul Ulum", type: "poi", coords: [-3.7574219184695323, 102.26757323935664] },
            { id: 66, name: "Gedung Pasca Sarjana Ilmu Hukum", type: "building", coords: [-3.7595289843104354, 102.26820648977309] },
            { id: 67, name: "Gerbang Keluar Unib Depan", type: "gate", coords: [-3.7591644579459427, 102.26684912742934] },
            { id: 68, name: "Gerbang Masuk Unib Depan", type: "gate", coords: [-3.7600026923330034, 102.26706348042904] },
            { id: 69, name: "Lapangan Futsal, Voli, Basket", type: "poi", coords: [-3.7594504140760563, 102.26719610506882] },
            { id: 70, name: "GOR Unib", type: "poi", coords: [-3.760787452747735, 102.26768733640296] },
            { id: 71, name: "Gerbang Masuk Depan Rektorat", type: "gate", coords: [-3.7606142437351764, 102.27264469501478] },

            { id: 72, name: "Tikungan Gerbang Masuk Unib Belakang", type: "jalan", coords: [-3.759465490614545, 102.27502126048557] },
            { id: 73, name: "Simpang Dekat LPTIK", type: "jalan", coords: [-3.7588520981933016, 102.27475005829854] },
            { id: 74, name: "Simpang Menuju LPTIK", type: "jalan", coords: [-3.7585885790615805, 102.27533168693981] },
            { id: 75, name: "Titik Menuju Lab Pembelajaran FKIP", type: "jalan", coords: [-3.7585094922378914, 102.27573099362166] },
            { id: 76, name: "Simpang Lab Teknik", type: "jalan", coords: [-3.758756469322762, 102.27628318093082] },
            { id: 77, name: "Titik Menuju Masjid Baitul Hikmah", type: "jalan", coords: [-3.759054132794276, 102.2762626871754] },
            { id: 78, name: "Simpang GSG & Dekanat Teknik", type: "jalan", coords: [-3.7582822031299656, 102.27664398066753] },
            { id: 79, name: "Simpang Sekretariat HIMA Teknik", type: "jalan", coords: [-3.75833042410153, 102.27715823098032] },
            { id: 80, name: "Simpang Gedung Sistem Informasi", type: "jalan", coords: [-3.758415003634582, 102.27715685511333] },
            { id: 81, name: "Simpang Gedung Lab Terpadu Teknik", type: "jalan", coords: [-3.7585911562146066, 102.27713846528195] },
            { id: 82, name: "Titik Menuju Lab Teknik", type: "jalan", coords: [-3.7589274509019504, 102.27665333190453] },
            { id: 83, name: "Simpang GSG Bagian Lain", type: "jalan", coords: [-3.757458868961564, 102.27696436605248] },
            { id: 84, name: "Simpang Menuju Gedung Pendidikan Profesi Guru", type: "jalan", coords: [-3.756869859121622, 102.2767579730189] },
            { id: 85, name: "Titik Menuju GB 3 & 4", type: "jalan", coords: [-3.756531654307693, 102.27674578663681] },
            { id: 86, name: "Simpang GB 3 & 4", type: "jalan", coords: [-3.755930331574234, 102.27689445305549] },
            { id: 87, name: "Titik Menuju Stadion", type: "jalan", coords: [-3.7577515881249326, 102.2772845306165] },
            { id: 88, name: "Simpang Gedung FKIP", type: "jalan", coords: [-3.75685699214597, 102.27699900853548] },
            { id: 89, name: "Titik menuju Gedung FKIP", type: "jalan", coords: [-3.7566659518851964, 102.27750105659453] },
            { id: 90, name: "Titik Menuju Gedung Pendidikan Profesi Guru", type: "jalan", coords: [-3.7569059873405877, 102.27607398406286] },
            { id: 91, name: "Titik Menuju Gedung PKM", type: "jalan", coords: [-3.756913723858972, 102.27579208087536] },
            { id: 92, name: "Titik Menuju GB 5", type: "jalan", coords: [-3.755748473262855, 102.27649665022989] },
            { id: 93, name: "Titik Menuju Lab Fisika", type: "jalan", coords: [-3.756535588482123, 102.27400425320224] },
            { id: 94, name: "Titik Menuju Perpustakaan", type: "jalan", coords: [-3.7573080537995622, 102.27473659304525] },
            { id: 95, name: "Titik Menuju Dekanat FKIP", type: "jalan", coords: [-3.75770594600543, 102.27476144397508] },
            { id: 96, name: "Titik Menuju Pasca Sarjana Administrasi Pendidikan", type: "jalan", coords: [-3.7580613209371876, 102.27477115595224] },
            { id: 97, name: "Titik Menuju LPTIK", type: "jalan", coords: [-3.7582746533411893, 102.274921938136] },
            { id: 98, name: "Titik Menuju GB 1", type: "jalan", coords: [-3.757656314640755, 102.27410658330018] },
            { id: 99, name: "Titik Menuju GB 2", type: "jalan", coords: [-3.7577456947576735, 102.27395878836649] },
            { id: 100, name: "Titik Menuju Musholla Shelter", type: "jalan", coords: [-3.757938979228271, 102.27359601898473] },
            { id: 101, name: "Titik Menuju Lab Biologi & Kimia", type: "jalan", coords: [-3.755992102443358, 102.27345208682874] },
            { id: 102, name: "Titik Menuju Gedung Jurusan Budidaya Pertanian", type: "jalan", coords: [-3.7564280299464485, 102.27247434069704] },
            { id: 103, name: "Simpang FISIP", type: "jalan", coords: [-3.759673846590445, 102.27471013204865] },
            { id: 104, name: "Simpang Lab Multimedia Komunikasi", type: "jalan", coords: [-3.7599447227793235, 102.274308396408] },
            { id: 105, name: "Simpang Menuju Rektorat", type: "jalan", coords: [-3.75904019181165, 102.27157098203548] },
            { id: 106, name: "Titik Menuju Rektorat", type: "jalan", coords: [-3.7589188255373642, 102.27224829744648] },
            { id: 107, name: "Titik Menuju Gedung Layanan Terpadu", type: "jalan", coords: [-3.7582067868008266, 102.27217097793357] },
            { id: 108, name: "Titik Menuju Gedung Jurusan Peternakan", type: "jalan", coords: [-3.757968603234218, 102.27224635515296] },
            { id: 109, name: "Titik Menuju Lab Matematika", type: "jalan", coords: [-3.7578215905842853, 102.27229660705001] },
            { id: 110, name: "Titik Menuju Ruang Baca Fakultas Pertanian", type: "jalan", coords: [-3.757252912913742, 102.27247248842838] },
            { id: 111, name: "Titik Menuju Workshop Teknik", type: "jalan", coords: [-3.7572264676113036, 102.27187693728621] },
            { id: 112, name: "Titik Menuju Lab Tanah", type: "jalan", coords: [-3.7594341590291265, 102.26969292365675] },
            { id: 113, name: "Titik Menuju Lab Teknologi Industri Pertanian", type: "jalan", coords: [-3.7574542562661435, 102.27138604258272] },
            { id: 114, name: "Titik Menuju Bank BNI", type: "jalan", coords: [-3.7615483364019298, 102.27187626569696] },
            { id: 115, name: "Titik Menuju Asrama", type: "jalan", coords: [-3.761843842020454, 102.27172870514403] },
            { id: 116, name: "Titik Menuju Gedung K", type: "jalan", coords: [-3.7609131396960294, 102.27004604279796] },
            { id: 117, name: "Titik Menuju Gedung R UPT Bahasa Inggris", type: "jalan", coords: [-3.7607374445046986, 102.27000583684224] },
            { id: 118, name: "Titik menuju Gedung I", type: "jalan", coords: [-3.7600404698726777, 102.2698243637729] },
            { id: 119, name: "Titik Menuju Gedung J", type: "jalan", coords: [-3.760402301627394, 102.2699246982645] },
            { id: 120, name: "Titik Menuju Dekanat & Gedung Administrasi Fakultas Pertanian", type: "jalan", coords: [-3.759397391878153, 102.2693222549446] },
            { id: 121, name: "Titik Menuju Lab Agribisnis", type: "jalan", coords: [-3.7591241158446422, 102.2692323050527] },
            { id: 122, name: "Titik Menuju Gedung Jurusan Pertanian", type: "jalan", coords: [-3.758470132634173, 102.26901322489215] },
            { id: 123, name: "Titik Menuju Gedung Magister Managemen", type: "jalan", coords: [-3.760933543422624, 102.26952344025733] },
            { id: 124, name: "Titik Menuju Gedung L", type: "jalan", coords: [-3.7609700108955337, 102.26942598377804] },
            { id: 125, name: "Titik Menuju Gedung Magister Akuntansi", type: "jalan", coords: [-3.7614221046019054, 102.26885974866838] },
            { id: 126, name: "Titik Menuju Dekanat FEB & Gedung Jurusan Ekonomi Pembangunan", type: "jalan", coords: [-3.7617403713758506, 102.26868212757364] },
            { id: 127, name: "Titik Menuju Gedung Magister Ilmu Ekonomi", type: "jalan", coords: [-3.7620862376366233, 102.2685645697672] },
            { id: 128, name: "Titik Menuju Lab Hukum", type: "jalan", coords: [-3.760151761619511, 102.26873071792056] },
            { id: 129, name: "Titik Menuju Perpustakaan Fakultas Hukum", type: "jalan", coords: [-3.7600945428269057, 102.26843546643795] },
            { id: 130, name: "Titik Menuju Dekanat Fakultas Hukum", type: "jalan", coords: [-3.760204110758494, 102.26811691771712] },
            { id: 131, name: "Titik menuju Fakultas Hukum", type: "jalan", coords: [-3.759933151289715, 102.26791946299494] },
            { id: 132, name: "Titik Menuju Gedung Pasca Sarjana Ilmu Hukum", type: "jalan", coords: [-3.759705493462093, 102.26783649976761] },
            { id: 133, name: "Titik Menuju Gedung C", type: "jalan", coords: [-3.7593434204541296, 102.26774053229985] },
            { id: 134, name: "Titik Menuju Gedung B", type: "jalan", coords: [-3.758868694543395, 102.26762974009637] },
            { id: 135, name: "Titik Menuju Gedung A", type: "jalan", coords: [-3.758118308800661, 102.26755362881727] },
            { id: 136, name: "Titik Menuju Masjid Darul Ulum", type: "jalan", coords: [-3.7576067319764803, 102.26768432130632] },
            { id: 158, name: "Titik Menuju Fakultas Kedokteran", type: "jalan", coords: [-3.7554510893437367, 102.27804883721018] },
            { id: 378, name: "Titik Menuju Dekanat MIPA", type: "jalan", coords: [-3.7556631812275896, 102.27464254349667] },

            { id: 137, name: "J-1", type: "jalan", coords: [-3.7593221271511226, 102.27495978289238] },
            { id: 138, name: "J-2", type: "jalan", coords: [-3.759055854856669, 102.27482884280045] },
            { id: 139, name: "J-3", type: "jalan", coords: [-3.7587873061516888, 102.27487694702762] },
            { id: 140, name: "J-4", type: "jalan", coords: [-3.758545291690737, 102.27546588696993] },
            { id: 141, name: "J-5", type: "jalan", coords: [-3.7585209796650645, 102.27557408521142] },
            { id: 142, name: "J-6", type: "jalan", coords: [-3.7584828121877365, 102.27598292088152] },
            { id: 143, name: "J-7", type: "jalan", coords: [-3.758430079399318, 102.27618982119105] },
            { id: 144, name: "J-8", type: "jalan", coords: [-3.7584336172298833, 102.27620236437093] },
            { id: 145, name: "J-9", type: "jalan", coords: [-3.7584577802614945, 102.27623247377613] },
            { id: 146, name: "J-10", type: "jalan", coords: [-3.7584968572627417, 102.27626453339064] },
            { id: 147, name: "J-11", type: "jalan", coords: [-3.7585563170764544, 102.27629227820938] },
            { id: 148, name: "J-12", type: "jalan", coords: [-3.758377541202023, 102.27636069319487] },
            { id: 149, name: "J-13", type: "jalan", coords: [-3.758286479721974, 102.27655706147237] },
            { id: 150, name: "J-14", type: "jalan", coords: [-3.7582491144015364, 102.27716035319474] },
            { id: 151, name: "J-15", type: "jalan", coords: [-3.75873111271423, 102.27712043243628] },
            { id: 152, name: "J-16", type: "jalan", coords: [-3.759192119714399, 102.27699127039108] },
            { id: 153, name: "J-17", type: "jalan", coords: [-3.7591960940943494, 102.276754343118] },
            { id: 154, name: "J-18", type: "jalan", coords: [-3.759183016203963, 102.27668032657755] },
            { id: 155, name: "J-19", type: "jalan", coords: [-3.7591625622889495, 102.27666141827297] },
            { id: 156, name: "J-20", type: "jalan", coords: [-3.759146064223316, 102.27665535584532] },
            { id: 157, name: "J-21", type: "jalan", coords: [-3.7591077758474825, 102.27665004857721] },
            { id: 159, name: "J-23", type: "jalan", coords: [-3.7587927702672204, 102.27665331672694] },
            { id: 160, name: "J-24", type: "jalan", coords: [-3.758781391608565, 102.27664797614932] },
            { id: 161, name: "J-25", type: "jalan", coords: [-3.758770513085821, 102.27663561693294] },
            { id: 162, name: "J-26", type: "jalan", coords: [-3.7587662936266213, 102.27660118456635] },
            { id: 163, name: "J-27", type: "jalan", coords: [-3.758417683902948, 102.27633557132901] },
            { id: 164, name: "J-28", type: "jalan", coords: [-3.758475664988154, 102.27631343014059] },
            { id: 165, name: "J-29", type: "jalan", coords: [-3.7581638473602794, 102.27719749156466] },
            { id: 166, name: "J-30", type: "jalan", coords: [-3.7570235499181592, 102.276821889352] },
            { id: 167, name: "J-31", type: "jalan", coords: [-3.7560661774757165, 102.2767295990111] },
            { id: 168, name: "J-32", type: "jalan", coords: [-3.756044926287416, 102.27673296680263] },
            { id: 169, name: "J-33", type: "jalan", coords: [-3.756022325541281, 102.27674340006189] },
            { id: 170, name: "J-34", type: "jalan", coords: [-3.75600113939538, 102.27676305000097] },
            { id: 171, name: "J-35", type: "jalan", coords: [-3.755975380272588, 102.27679629130233] },
            { id: 172, name: "J-36", type: "jalan", coords: [-3.758067500733489, 102.27723813539257] },
            { id: 173, name: "J-37", type: "jalan", coords: [-3.757827909522007, 102.27728401479152] },
            { id: 174, name: "J-38", type: "jalan", coords: [-3.7575358552601585, 102.27723508664599] },
            { id: 175, name: "J-39", type: "jalan", coords: [-3.7570747803747935, 102.277086257022] },
            { id: 176, name: "J-40", type: "jalan", coords: [-3.7568104218271685, 102.27697878315468] },
            { id: 177, name: "J-41", type: "jalan", coords: [-3.756663035072762, 102.27694724901914] },
            { id: 178, name: "J-42", type: "jalan", coords: [-3.756537442495741, 102.2769322142372] },
            { id: 179, name: "J-43", type: "jalan", coords: [-3.756894302301248, 102.2765456384206] },
            { id: 180, name: "J-44", type: "jalan", coords: [-3.755764278042804, 102.27690148929173] },
            { id: 181, name: "J-45", type: "jalan", coords: [-3.7557280039940366, 102.27696034510643] },
            { id: 182, name: "J-46", type: "jalan", coords: [-3.7557003666224347, 102.27702612513292] },
            { id: 183, name: "J-47", type: "jalan", coords: [-3.755651753771275, 102.27725162538661] },
            { id: 184, name: "J-48", type: "jalan", coords: [-3.755542827310734, 102.2776575241108] },
            { id: 185, name: "J-49", type: "jalan", coords: [-3.7557418588648233, 102.27674552955727] },
            { id: 186, name: "J-50", type: "jalan", coords: [-3.7557382509500457, 102.27663284088044] },
            { id: 187, name: "J-51", type: "jalan", coords: [-3.7557761242132983, 102.2763119842246] },
            { id: 188, name: "J-52", type: "jalan", coords: [-3.755800176975029, 102.27624810722062] },
            { id: 189, name: "J-53", type: "jalan", coords: [-3.7558350534768294, 102.2761926668017] },
            { id: 190, name: "J-54", type: "jalan", coords: [-3.755890374821192, 102.27614626558244] },
            { id: 191, name: "J-55", type: "jalan", coords: [-3.756035184114978, 102.276057079547] },
            { id: 192, name: "J-56", type: "jalan", coords: [-3.7560760737956542, 102.27602333320624] },
            { id: 193, name: "J-57", type: "jalan", coords: [-3.7561103489672405, 102.27595463529622] },
            { id: 194, name: "J-58", type: "jalan", coords: [-3.7561307938066335, 102.27588352693255] },
            { id: 195, name: "J-59", type: "jalan", coords: [-3.75613139512474, 102.27577746700183] },
            { id: 196, name: "J-60", type: "jalan", coords: [-3.756109762216653, 102.27566584468121] },
            { id: 197, name: "J-61", type: "jalan", coords: [-3.755918578613745, 102.2753056710398] },
            { id: 198, name: "J-62", type: "jalan", coords: [-3.755697290799489, 102.27495277938266] },
            { id: 199, name: "J-63", type: "jalan", coords: [-3.7556661878231097, 102.27485767642537] },
            { id: 200, name: "J-64", type: "jalan", coords: [-3.7556517561639566, 102.27477511841062] },
            { id: 201, name: "J-65", type: "jalan", coords: [-3.75567592403506, 102.27452931966047] },
            { id: 202, name: "J-66", type: "jalan", coords: [-3.755747385609041, 102.27412340030213] },
            { id: 203, name: "J-67", type: "jalan", coords: [-3.755802105933199, 102.27388335377833] },
            { id: 204, name: "J-68", type: "jalan", coords: [-3.756161731548545, 102.27400127895919] },
            { id: 205, name: "J-69", type: "jalan", coords: [-3.756598264064394, 102.2740019911414] },
            { id: 206, name: "J-70", type: "jalan", coords: [-3.7570122181239753, 102.27404074000168] },
            { id: 207, name: "J-71", type: "jalan", coords: [-3.757179423795222, 102.2740791404982] },
            { id: 208, name: "J-72", type: "jalan", coords: [-3.757355338059611, 102.27415594148965] },
            { id: 209, name: "J-73", type: "jalan", coords: [-3.757498159515407, 102.27426067011396] },
            { id: 210, name: "J-74", type: "jalan", coords: [-3.7574430182306315, 102.2743668955984] },
            { id: 211, name: "J-75", type: "jalan", coords: [-3.757336043153259, 102.27474541388051] },
            { id: 212, name: "J-76", type: "jalan", coords: [-3.7573570376206646, 102.27476044223175] },
            { id: 213, name: "J-77", type: "jalan", coords: [-3.757379031824854, 102.27478749326366] },
            { id: 214, name: "J-78", type: "jalan", coords: [-3.7574830044164145, 102.27475743656112] },
            { id: 215, name: "J-79", type: "jalan", coords: [-3.758143299264077, 102.27477716729356] },
            { id: 216, name: "J-80", type: "jalan", coords: [-3.75823727441022, 102.2747962032044] },
            { id: 217, name: "J-81", type: "jalan", coords: [-3.7582485979906863, 102.27480382814696] },
            { id: 218, name: "J-82", type: "jalan", coords: [-3.758260892216299, 102.27481709661504] },
            { id: 219, name: "J-83", type: "jalan", coords: [-3.75827034931244, 102.2748374731915] },
            { id: 220, name: "J-84", type: "jalan", coords: [-3.758276023569934, 102.27485927139065] },
            { id: 221, name: "J-85", type: "jalan", coords: [-3.758263304826187, 102.27507215615884] },
            { id: 222, name: "J-86", type: "jalan", coords: [-3.758281273308995, 102.27517688229005] },
            { id: 223, name: "J-87", type: "jalan", coords: [-3.7583328148942456, 102.27522047864312] },
            { id: 224, name: "J-88", type: "jalan", coords: [-3.7583744261135053, 102.27524512008597] },
            { id: 225, name: "J-89", type: "jalan", coords: [-3.7575635827605254, 102.27421183120754] },
            { id: 226, name: "J-90", type: "jalan", coords: [-3.757611624579411, 102.27415696793605] },
            { id: 227, name: "J-91", type: "jalan", coords: [-3.757696535694862, 102.27404500207854] },
            { id: 228, name: "J-92", type: "jalan", coords: [-3.757888702925385, 102.27369454893977] },
            { id: 229, name: "J-93", type: "jalan", coords: [-3.758169096338321, 102.27308801483451] },
            { id: 230, name: "J-94", type: "jalan", coords: [-3.758289281102364, 102.27279546238549] },
            { id: 231, name: "J-95", type: "jalan", coords: [-3.758403057701514, 102.27249529250724] },
            { id: 232, name: "J-96", type: "jalan", coords: [-3.758466740996738, 102.27236093343328] },
            { id: 233, name: "J-97", type: "jalan", coords: [-3.7584812652530815, 102.27233294196895] },
            { id: 234, name: "J-98", type: "jalan", coords: [-3.7585058447632633, 102.27224112996396] },
            { id: 235, name: "J-99", type: "jalan", coords: [-3.758508079263649, 102.27209557434924] },
            { id: 236, name: "J-100", type: "jalan", coords: [-3.7587870911184353, 102.27472642261284] },
            { id: 237, name: "J-101", type: "jalan", coords: [-3.758704949987248, 102.27467858906238] },
            { id: 238, name: "J-102", type: "jalan", coords: [-3.7586105986787715, 102.27460739494234] },
            { id: 239, name: "J-103", type: "jalan", coords: [-3.758477396814598, 102.27448947967878] },
            { id: 240, name: "J-104", type: "jalan", coords: [-3.758323104598091, 102.27436377745369] },
            { id: 241, name: "J-105", type: "jalan", coords: [-3.758233193312222, 102.27430481981975] },
            { id: 242, name: "J-106", type: "jalan", coords: [-3.7580621145831543, 102.27423635070016] },
            { id: 243, name: "J-107", type: "jalan", coords: [-3.758015493904523, 102.2742185521713] },
            { id: 244, name: "J-108", type: "jalan", coords: [-3.7578656417026792, 102.27418851714981] },
            { id: 245, name: "J-109", type: "jalan", coords: [-3.757758201952001, 102.27416738158257] },
            { id: 246, name: "J-110", type: "jalan", coords: [-3.7577138012886593, 102.27414513341978] },
            { id: 247, name: "J-111", type: "jalan", coords: [-3.7576803838691717, 102.27419853192151] },
            { id: 248, name: "J-112", type: "jalan", coords: [-3.757733217227056, 102.27422344824487] },
            { id: 249, name: "J-113", type: "jalan", coords: [-3.7579383349401354, 102.2742374636772] },
            { id: 250, name: "J-114", type: "jalan", coords: [-3.7581868984461977, 102.27431344546648] },
            { id: 251, name: "J-115", type: "jalan", coords: [-3.758263040592979, 102.27435704903348] },
            { id: 252, name: "J-116", type: "jalan", coords: [-3.758580563909888, 102.27464344312631] },
            { id: 253, name: "J-117", type: "jalan", coords: [-3.7587435568713516, 102.27476006865419] },
            { id: 254, name: "J-118", type: "jalan", coords: [-3.758825914651041, 102.27480211495134] },
            { id: 255, name: "J-119", type: "jalan", coords: [-3.755824370141795, 102.27381693457926] },
            { id: 256, name: "J-120", type: "jalan", coords: [-3.755876931419408, 102.27367750231781] },
            { id: 257, name: "J-121", type: "jalan", coords: [-3.755938768212161, 102.273545816293] },
            { id: 258, name: "J-122", type: "jalan", coords: [-3.75607326502454, 102.27331807729439] },
            { id: 259, name: "J-123", type: "jalan", coords: [-3.756266504945444, 102.27303224115906] },
            { id: 260, name: "J-124", type: "jalan", coords: [-3.7563341967204735, 102.2729217993388] },
            { id: 261, name: "J-125", type: "jalan", coords: [-3.7563940818184847, 102.27274480939366] },
            { id: 262, name: "J-126", type: "jalan", coords: [-3.7564178455085795, 102.27263338989837] },
            { id: 263, name: "J-127", type: "jalan", coords: [-3.756436517140088, 102.27221322747135] },
            { id: 264, name: "J-128", type: "jalan", coords: [-3.756429767593005, 102.27203404209371] },
            { id: 265, name: "J-129", type: "jalan", coords: [-3.7564344345919523, 102.27196622491664] },
            { id: 266, name: "J-130", type: "jalan", coords: [-3.7564538804180643, 102.2718789200469] },
            { id: 267, name: "J-131", type: "jalan", coords: [-3.7564873272382044, 102.27178070206747] },
            { id: 268, name: "J-132", type: "jalan", coords: [-3.756571957358844, 102.27165437390784] },
            { id: 269, name: "J-133", type: "jalan", coords: [-3.7568357280015334, 102.27134623058299] },
            { id: 270, name: "J-134", type: "jalan", coords: [-3.756968796488806, 102.2713351718964] },
            { id: 271, name: "J-135", type: "jalan", coords: [-3.757363698612579, 102.27130496176682] },
            { id: 272, name: "J-136", type: "jalan", coords: [-3.757696538200136, 102.27124876162117] },
            { id: 273, name: "J-137", type: "jalan", coords: [-3.7580555952150547, 102.27119964186778] },
            { id: 274, name: "J-138", type: "jalan", coords: [-3.75829374202182, 102.27114979515494] },
            { id: 275, name: "J-139", type: "jalan", coords: [-3.7584444678327316, 102.27106822752046] },
            { id: 276, name: "J-140", type: "jalan", coords: [-3.7585409323278327, 102.27099270219651] },
            { id: 277, name: "J-141", type: "jalan", coords: [-3.7594972562574327, 102.27499893164492] },
            { id: 278, name: "J-142", type: "jalan", coords: [-3.760192413510268, 102.27392713316817] },
            { id: 279, name: "J-143", type: "jalan", coords: [-3.7602910006783077, 102.27375341912494] },
            { id: 280, name: "J-144", type: "jalan", coords: [-3.7603321689425826, 102.27364267642213] },
            { id: 281, name: "J-145", type: "jalan", coords: [-3.7603874210829815, 102.27341467674103] },
            { id: 282, name: "J-146", type: "jalan", coords: [-3.760482756384718, 102.27277627665268] },
            { id: 283, name: "J-147", type: "jalan", coords: [-3.760556426228746, 102.27262536165978] },
            { id: 284, name: "J-148", type: "jalan", coords: [-3.760695098227032, 102.27232461922233] },
            { id: 285, name: "J-149", type: "jalan", coords: [-3.760513199917156, 102.27207671286237] },
            { id: 286, name: "J-150", type: "jalan", coords: [-3.76037127029673, 102.2720031425905] },
            { id: 287, name: "J-151", type: "jalan", coords: [-3.759956161520506, 102.27187976843493] },
            { id: 288, name: "J-152", type: "jalan", coords: [-3.759702645674878, 102.27181502659852] },
            { id: 289, name: "J-153", type: "jalan", coords: [-3.759153735683242, 102.27163474293604] },
            { id: 290, name: "J-154", type: "jalan", coords: [-3.759096963749329, 102.27160923857701] },
            { id: 291, name: "J-155", type: "jalan", coords: [-3.75895576863266, 102.27149953341666] },
            { id: 292, name: "J-156", type: "jalan", coords: [-3.7588627800978003, 102.27138966847872] },
            { id: 293, name: "J-157", type: "jalan", coords: [-3.7587179137275655, 102.27119740483727] },
            { id: 294, name: "J-158", type: "jalan", coords: [-3.7586405856633007, 102.27107969251864] },
            { id: 295, name: "J-159", type: "jalan", coords: [-3.758968227470305, 102.27200515599742] },
            { id: 296, name: "J-160", type: "jalan", coords: [-3.758425461528759, 102.27210080758385] },
            { id: 297, name: "J-161", type: "jalan", coords: [-3.757319011670603, 102.27247705678172] },
            { id: 298, name: "J-162", type: "jalan", coords: [-3.757301917165094, 102.27248048304767] },
            { id: 299, name: "J-163", type: "jalan", coords: [-3.757179976347885, 102.2724382257723] },
            { id: 300, name: "J-164", type: "jalan", coords: [-3.7571366702627813, 102.27235827953672] },
            { id: 301, name: "J-165", type: "jalan", coords: [-3.7570762696621927, 102.27231145390579] },
            { id: 302, name: "J-166", type: "jalan", coords: [-3.756963445887152, 102.2722840437795] },
            { id: 303, name: "J-167", type: "jalan", coords: [-3.757165555887113, 102.2721440000775] },
            { id: 304, name: "J-168", type: "jalan", coords: [-3.757229005600422, 102.27199139276843] },
            { id: 305, name: "J-169", type: "jalan", coords: [-3.7570293558614907, 102.27140651448792] },
            { id: 306, name: "J-170", type: "jalan", coords: [-3.757111067494108, 102.27141675044055] },
            { id: 307, name: "J-171", type: "jalan", coords: [-3.758508583604524, 102.27206424596562] },
            { id: 308, name: "J-172", type: "jalan", coords: [-3.758523874794477, 102.27156876515755] },
            { id: 309, name: "J-173", type: "jalan", coords: [-3.7585340689197153, 102.27138104433601] },
            { id: 310, name: "J-174", type: "jalan", coords: [-3.7586028751369867, 102.27097159831459] },
            { id: 311, name: "J-175", type: "jalan", coords: [-3.758875608519986, 102.27027682608076] },
            { id: 312, name: "J-176", type: "jalan", coords: [-3.7589929682937395, 102.27006619305627] },
            { id: 313, name: "J-177", type: "jalan", coords: [-3.7591552009197216, 102.26980651281252] },
            { id: 314, name: "J-178", type: "jalan", coords: [-3.759205898609835, 102.26976360911993] },
            { id: 315, name: "J-179", type: "jalan", coords: [-3.759293332143727, 102.26971437550412] },
            { id: 316, name: "J-180", type: "jalan", coords: [-3.759502180715941, 102.26969175632752] },
            { id: 317, name: "J-181", type: "jalan", coords: [-3.7598638385544234, 102.26977457989136] },
            { id: 318, name: "J-182", type: "jalan", coords: [-3.7608349934927503, 102.2722130677588] },
            { id: 319, name: "J-183", type: "jalan", coords: [-3.76101233719136, 102.27211092612305] },
            { id: 320, name: "J-184", type: "jalan", coords: [-3.761252297357842, 102.27200118957722] },
            { id: 321, name: "J-185", type: "jalan", coords: [-3.7614627222601342, 102.27192222943205] },
            { id: 322, name: "J-186", type: "jalan", coords: [-3.76242861040339, 102.27141762889028] },
            { id: 323, name: "J-187", type: "jalan", coords: [-3.7625503517198524, 102.2713233528562] },
            { id: 324, name: "J-188", type: "jalan", coords: [-3.7625641859592207, 102.2713011702603] },
            { id: 325, name: "J-189", type: "jalan", coords: [-3.7625711030788125, 102.27124294094466] },
            { id: 326, name: "J-190", type: "jalan", coords: [-3.7625171495441947, 102.27112370948936] },
            { id: 327, name: "J-191", type: "jalan", coords: [-3.762445662686659, 102.27101162232128] },
            { id: 328, name: "J-192", type: "jalan", coords: [-3.762251983286461, 102.27074127192827] },
            { id: 329, name: "J-193", type: "jalan", coords: [-3.762084588914348, 102.27052637802694] },
            { id: 330, name: "J-194", type: "jalan", coords: [-3.7619891326040573, 102.27042378351825] },
            { id: 331, name: "J-195", type: "jalan", coords: [-3.7618211410900955, 102.27030340392457] },
            { id: 332, name: "J-196", type: "jalan", coords: [-3.76146975134192, 102.27015783074842] },
            { id: 333, name: "J-197", type: "jalan", coords: [-3.7612704670273445, 102.27013510148913] },
            { id: 334, name: "J-198", type: "jalan", coords: [-3.7605867303767155, 102.26997574563723] },
            { id: 335, name: "J-199", type: "jalan", coords: [-3.7594911551900765, 102.26948930474612] },
            { id: 336, name: "J-200", type: "jalan", coords: [-3.7594887510023938, 102.26945075479199] },
            { id: 337, name: "J-201", type: "jalan", coords: [-3.7607652697320475, 102.26989305479424] },
            { id: 338, name: "J-202", type: "jalan", coords: [-3.760821164522824, 102.26973470352442] },
            { id: 339, name: "J-203", type: "jalan", coords: [-3.760812565325196, 102.26968515142607] },
            { id: 340, name: "J-204", type: "jalan", coords: [-3.7606642291405876, 102.269625904353] },
            { id: 341, name: "J-205", type: "jalan", coords: [-3.760577162237823, 102.26960112830375] },
            { id: 342, name: "J-206", type: "jalan", coords: [-3.7604427993952925, 102.26951495058705] },
            { id: 343, name: "J-207", type: "jalan", coords: [-3.7603718559755634, 102.26940507419522] },
            { id: 344, name: "J-208", type: "jalan", coords: [-3.7608548880803596, 102.26966174246775] },
            { id: 345, name: "J-209", type: "jalan", coords: [-3.7608977909944485, 102.26961946355334] },
            { id: 346, name: "J-210", type: "jalan", coords: [-3.760974301187062, 102.26936220711099] },
            { id: 347, name: "J-211", type: "jalan", coords: [-3.7610413076683074, 102.26919012484001] },
            { id: 348, name: "J-212", type: "jalan", coords: [-3.7611253826184736, 102.26905370008183] },
            { id: 349, name: "J-213", type: "jalan", coords: [-3.7612333549152055, 102.2689254301568] },
            { id: 350, name: "J-214", type: "jalan", coords: [-3.7613140526504196, 102.26888659980011] },
            { id: 351, name: "J-215", type: "jalan", coords: [-3.7615696675397174, 102.26878580786712] },
            { id: 352, name: "J-216", type: "jalan", coords: [-3.7616720898275986, 102.26871115810707] },
            { id: 353, name: "J-217", type: "jalan", coords: [-3.761802445479276, 102.26866968594771] },
            { id: 354, name: "J-218", type: "jalan", coords: [-3.761862450441157, 102.26866657554069] },
            { id: 355, name: "J-219", type: "jalan", coords: [-3.7619786425568265, 102.26868172841824] },
            { id: 356, name: "J-220", type: "jalan", coords: [-3.7620189907140826, 102.26868691242919] },
            { id: 357, name: "J-221", type: "jalan", coords: [-3.762071753684296, 102.26864958754913] },
            { id: 358, name: "J-222", type: "jalan", coords: [-3.7600776422092963, 102.26960780857661] },
            { id: 359, name: "J-223", type: "jalan", coords: [-3.7602468637364836, 102.2694516425031] },
            { id: 360, name: "J-224", type: "jalan", coords: [-3.760317474148067, 102.26928815614525] },
            { id: 361, name: "J-225", type: "jalan", coords: [-3.760301647677892, 102.26922715377225] },
            { id: 362, name: "J-226", type: "jalan", coords: [-3.760278516681055, 102.26917835187481] },
            { id: 363, name: "J-227", type: "jalan", coords: [-3.760231037263722, 102.26904414665563] },
            { id: 364, name: "J-228", type: "jalan", coords: [-3.7600945428269057, 102.26850744923809] },
            { id: 365, name: "J-229", type: "jalan", coords: [-3.7601067170382834, 102.26840008506201] },
            { id: 366, name: "J-230", type: "jalan", coords: [-3.7601931539693254, 102.26821940170316] },
            { id: 367, name: "J-231", type: "jalan", coords: [-3.7601919365484804, 102.2680534752497] },
            { id: 368, name: "J-232", type: "jalan", coords: [-3.760125503877603, 102.26799266586426] },
            { id: 369, name: "J-233", type: "jalan", coords: [-3.759050090531389, 102.26764926085508] },
            { id: 370, name: "J-234", type: "jalan", coords: [-3.7584726066995984, 102.26757974311636] },
            { id: 371, name: "J-235", type: "jalan", coords: [-3.7578001384899693, 102.2675273245062] },
            { id: 372, name: "J-236", type: "jalan", coords: [-3.757730512150161, 102.26765718605674] },
            { id: 373, name: "J-237", type: "jalan", coords: [-3.7576821605214263, 102.26768238307466] },
            { id: 374, name: "J-238", type: "jalan", coords: [-3.759756655442416, 102.26767220357459] },
            { id: 375, name: "J-239", type: "jalan", coords: [-3.759828916510415, 102.26750364688155] },
            { id: 376, name: "J-240", type: "jalan", coords: [-3.759888078727087, 102.26737169794978] },
            { id: 377, name: "J-241", type: "jalan", coords: [-3.7599466608037346, 102.26720661734771] }

            // Pastikan tidak ada koma (,) setelah node terakhir
        ],
        edges: [
            { from: 1, to: 72, weight: 1 }, { from: 72, to: 137, weight: 1 }, { from: 137, to: 138, weight: 1 }, { from: 138, to: 73, weight: 1 }, { from: 73, to: 139, weight: 1 }, 
            { from: 139, to: 74, weight: 1 }, { from: 74, to: 224, weight: 1 }, { from: 74, to: 140, weight: 1 }, { from: 140, to: 141, weight: 1 }, { from: 141, to: 75, weight: 1 },
            { from: 75, to: 7, weight: 1 }, { from: 75, to: 142, weight: 1 }, { from: 142, to: 143, weight: 1 }, { from: 143, to: 148, weight: 1 }, { from: 143, to: 144, weight: 1 }, 
            { from: 144, to: 145, weight: 1 }, { from: 145, to: 146, weight: 1 }, { from: 146, to: 147, weight: 1 }, { from: 147, to: 76, weight: 1 }, { from: 76, to: 162, weight: 1 },
            { from: 76, to: 77, weight: 1 }, { from: 77, to: 11, weight: 1 }, { from: 77, to: 3, weight: 1 }, { from: 162, to: 161, weight: 1 }, { from: 161, to: 160, weight: 1 },
            { from: 160, to: 159, weight: 1 }, { from: 159, to: 82, weight: 1 }, { from: 82, to: 13, weight: 1 }, { from: 82, to: 157, weight: 1 },{ from: 157, to: 156, weight: 1 },
            { from: 156, to: 155, weight: 1 }, { from: 155, to: 154, weight: 1 }, { from: 154, to: 153, weight: 1 }, { from: 153, to: 152, weight: 1 }, { from: 152, to: 151, weight: 1 }, 
            { from: 151, to: 81, weight: 1 }, { from: 81, to: 15, weight: 1 }, { from: 81, to: 80, weight: 1 }, { from: 80, to: 16, weight: 1 }, { from: 80, to: 79, weight: 1 }, { from: 79, to: 17, weight: 1 },
            { from: 79, to: 150, weight: 1 }, { from: 150, to: 78, weight: 1 }, { from: 78, to: 14, weight: 1 }, { from: 78, to: 12, weight: 1 }, { from: 78, to: 149, weight: 1 }, { from: 149, to: 148, weight: 1 },
            { from: 148, to: 163, weight: 1 }, { from: 163, to: 164, weight: 1 }, { from: 164, to: 147, weight: 1 }, { from: 148, to: 149, weight: 1 }, { from: 149, to: 78, weight: 1 },
            { from: 78, to: 150, weight: 1 }, { from: 150, to: 79, weight: 1 }, { from: 79, to: 80, weight: 1 }, { from: 80, to: 81, weight: 1 }, { from: 81, to: 151, weight: 1 },
            { from: 151, to: 152, weight: 1 }, { from: 152, to: 153, weight: 1 }, { from: 153, to: 154, weight: 1 }, { from: 154, to: 155, weight: 1 }, { from: 155, to: 156, weight: 1 },
            { from: 156, to: 157, weight: 1 }, { from: 157, to: 82, weight: 1 }, { from: 82, to: 159, weight: 1 }, { from: 159, to: 160, weight: 1 }, { from: 160, to: 161, weight: 1 },
            { from: 161, to: 162, weight: 1 }, { from: 162, to: 76, weight: 1 }, { from: 12, to: 78, weight: 1 }, { from: 14, to: 78, weight: 1 }, { from: 17, to: 79, weight: 1 },
            { from: 16, to: 80, weight: 1 }, { from: 15, to: 81, weight: 1 }, { from: 13, to: 82, weight: 1 }, { from: 11, to: 76, weight: 1 },

            { from: 150, to: 165, weight: 1 }, { from: 165, to: 83, weight: 1 }, { from: 83, to: 166, weight: 1 }, { from: 166, to: 84, weight: 1 },
            { from: 84, to: 85, weight: 1 }, { from: 85, to: 18, weight: 1 }, { from: 85, to: 167, weight: 1 }, { from: 167, to: 168, weight: 1 }, { from: 168, to: 169, weight: 1 },
            { from: 169, to: 170, weight: 1 }, { from: 170, to: 171, weight: 1 }, { from: 171, to: 86, weight: 1 },
            { from: 86, to: 171, weight: 1 }, { from: 171, to: 170, weight: 1 }, { from: 170, to: 169, weight: 1 }, { from: 169, to: 168, weight: 1 }, { from: 168, to: 167, weight: 1 },
            { from: 167, to: 85, weight: 1 }, { from: 85, to: 84, weight: 1 }, { from: 84, to: 166, weight: 1 }, { from: 166, to: 83, weight: 1 }, { from: 83, to: 165, weight: 1 }, 
            { from: 165, to: 150, weight: 1 }, { from: 18, to: 85, weight: 1 },

            { from: 165, to: 172, weight: 1 }, { from: 172, to: 173, weight: 1 }, { from: 173, to: 87, weight: 1 }, { from: 87, to: 5, weight: 1 }, { from: 87, to: 174, weight: 1 },
            { from: 174, to: 175, weight: 1 }, { from: 175, to: 88, weight: 1 }, { from: 88, to: 89, weight: 1 }, { from: 89, to: 22, weight: 1 }, { from: 88, to: 176, weight: 1 },
            { from: 176, to: 177, weight: 1 }, { from: 177, to: 178, weight: 1 }, { from: 178, to: 86, weight: 1 },
            { from: 86, to: 178, weight: 1 }, { from: 178, to: 177, weight: 1 }, { from: 177, to: 176, weight: 1 }, { from: 176, to: 88, weight: 1 }, { from: 22, to: 89, weight: 1 },
            { from: 89, to: 88, weight: 1 }, { from: 88, to: 175, weight: 1 }, { from: 175, to: 174, weight: 1 }, { from: 174, to: 87, weight: 1 }, { from: 5, to: 87, weight: 1 },
            { from: 87, to: 173, weight: 1 }, { from: 173, to: 172, weight: 1 }, { from: 172, to: 165, weight: 1 },

            { from: 84, to: 179, weight: 1 }, { from: 179, to: 90, weight: 1 }, { from: 90, to: 19, weight: 1 }, { from: 90, to: 91, weight: 1 }, { from: 91, to: 20, weight: 1 },
            { from: 20, to: 91, weight: 1 }, { from: 91, to: 90, weight: 1 }, { from: 19, to: 90, weight: 1 }, { from: 90, to: 179, weight: 1 }, { from: 179, to: 84, weight: 1 },

            { from: 86, to: 180, weight: 1 }, { from: 180, to: 181, weight: 1 }, { from: 181, to: 182, weight: 1 }, { from: 182, to: 183, weight: 1 }, { from: 183, to: 184, weight: 1 },
            { from: 184, to: 158, weight: 1 }, { from: 158, to: 23, weight: 1 },
            { from: 23, to: 158, weight: 1 }, { from: 158, to: 184, weight: 1 }, { from: 184, to: 183, weight: 1 }, { from: 183, to: 182, weight: 1 }, { from: 182, to: 181, weight: 1 },
            { from: 181, to: 180, weight: 1 }, { from: 180, to: 86, weight: 1 },

            { from: 180, to: 185, weight: 1 }, { from: 185, to: 186, weight: 1 }, { from: 186, to: 92, weight: 1 }, { from: 92, to: 21, weight: 1 }, { from: 92, to: 187, weight: 1 },
            { from: 187, to: 188, weight: 1 }, { from: 188, to: 189, weight: 1 }, { from: 189, to: 190, weight: 1 }, { from: 190, to: 191, weight: 1 }, { from: 191, to: 192, weight: 1 },
            { from: 192, to: 193, weight: 1 }, { from: 193, to: 194, weight: 1 }, { from: 194, to: 195, weight: 1 }, { from: 195, to: 196, weight: 1 }, { from: 196, to: 197, weight: 1 },
            { from: 197, to: 198, weight: 1 }, { from: 198, to: 199, weight: 1 }, { from: 199, to: 200, weight: 1 }, { from: 200, to: 378, weight: 1 }, { from: 378, to: 24, weight: 1 },
            { from: 378, to: 201, weight: 1 }, { from: 201, to: 202, weight: 1 }, { from: 202, to: 203, weight: 1 },
            { from: 185, to: 180, weight: 1 }, { from: 186, to: 185, weight: 1 }, { from: 92, to: 186, weight: 1 }, { from: 21, to: 92, weight: 1 }, { from: 187, to: 92, weight: 1 },
            { from: 188, to: 187, weight: 1 }, { from: 189, to: 188, weight: 1 }, { from: 190, to: 189, weight: 1 }, { from: 191, to: 190, weight: 1 }, { from: 192, to: 191, weight: 1 },
            { from: 193, to: 192, weight: 1 }, { from: 194, to: 193, weight: 1 }, { from: 195, to: 194, weight: 1 }, { from: 196, to: 195, weight: 1 }, { from: 197, to: 196, weight: 1 },
            { from: 198, to: 197, weight: 1 }, { from: 199, to: 198, weight: 1 }, { from: 200, to: 199, weight: 1 }, { from: 378, to: 200, weight: 1 }, { from: 24, to: 378, weight: 1 },
            { from: 201, to: 378, weight: 1 }, { from: 202, to: 201, weight: 1 }, { from: 203, to: 202, weight: 1 },

            { from: 203, to: 204, weight: 1 }, { from: 204, to: 93, weight: 1 }, { from: 93, to: 30, weight: 1 }, { from: 93, to: 205, weight: 1 }, { from: 205, to: 206, weight: 1 },
            { from: 206, to: 207, weight: 1 }, { from: 207, to: 208, weight: 1 }, { from: 208, to: 209, weight: 1 }, 
            { from: 204, to: 203, weight: 1 }, { from: 93, to: 204, weight: 1 }, { from: 30, to: 93, weight: 1 }, { from: 205, to: 93, weight: 1 }, { from: 206, to: 205, weight: 1 },
            { from: 207, to: 206, weight: 1 }, { from: 208, to: 207, weight: 1 }, { from: 209, to: 208, weight: 1 },

            { from: 209, to: 210, weight: 1 }, { from: 210, to: 94, weight: 1 }, { from: 94, to: 10, weight: 1 }, { from: 94, to: 211, weight: 1 }, { from: 211, to: 212, weight: 1 },
            { from: 212, to: 213, weight: 1 }, { from: 213, to: 214, weight: 1 }, { from: 214, to: 95, weight: 1 }, { from: 95, to: 9, weight: 1 }, { from: 95, to: 96, weight: 1 },
            { from: 96, to: 8, weight: 1 }, { from: 96, to: 215, weight: 1 }, { from: 215, to: 216, weight: 1 }, { from: 216, to: 217, weight: 1 }, { from: 217, to: 218, weight: 1 },
            { from: 218, to: 219, weight: 1 }, { from: 219, to: 220, weight: 1 }, { from: 220, to: 97, weight: 1 }, { from: 97, to: 2, weight: 1 }, { from: 97, to: 221, weight: 1 },
            { from: 221, to: 222, weight: 1 }, { from: 222, to: 223, weight: 1 }, { from: 223, to: 224, weight: 1 }, { from: 224, to: 74, weight: 1 },
            { from: 210, to: 209, weight: 1 }, { from: 94, to: 210, weight: 1 }, { from: 10, to: 94, weight: 1 }, { from: 211, to: 94, weight: 1 }, { from: 212, to: 211, weight: 1 },
            { from: 213, to: 212, weight: 1 }, { from: 214, to: 213, weight: 1 }, { from: 95, to: 214, weight: 1 }, { from: 9, to: 95, weight: 1 }, { from: 96, to: 95, weight: 1 },
            { from: 8, to: 96, weight: 1 }, { from: 215, to: 96, weight: 1 }, { from: 216, to: 215, weight: 1 }, { from: 217, to: 216, weight: 1 }, { from: 218, to: 217, weight: 1 },
            { from: 219, to: 218, weight: 1 }, { from: 220, to: 219, weight: 1 }, { from: 97, to: 220, weight: 1 }, { from: 2, to: 97, weight: 1 }, { from: 221, to: 97, weight: 1 },
            { from: 222, to: 221, weight: 1 }, { from: 223, to: 222, weight: 1 }, { from: 224, to: 223, weight: 1 },

            { from: 209, to: 225, weight: 1 }, { from: 225, to: 226, weight: 1 }, { from: 226, to: 98, weight: 1 }, { from: 98, to: 25, weight: 1 }, { from: 98, to: 28, weight: 1 },
            { from: 98, to: 227, weight: 1 }, { from: 227, to: 99, weight: 1 }, { from: 99, to: 26, weight: 1 }, { from: 99, to: 228, weight: 1 }, { from: 228, to: 100, weight: 1 },
            { from: 100, to: 27, weight: 1 }, { from: 100, to: 229, weight: 1 }, { from: 229, to: 230, weight: 1 }, { from: 230, to: 231, weight: 1 }, { from: 231, to: 232, weight: 1 },
            { from: 232, to: 233, weight: 1 }, { from: 233, to: 234, weight: 1 }, { from: 234, to: 235, weight: 1 },
            { from: 225, to: 209, weight: 1 }, { from: 226, to: 225, weight: 1 }, { from: 98, to: 226, weight: 1 }, { from: 25, to: 98, weight: 1 }, { from: 28, to: 98, weight: 1 },
            { from: 227, to: 98, weight: 1 }, { from: 99, to: 227, weight: 1 }, { from: 26, to: 99, weight: 1 }, { from: 228, to: 99, weight: 1 }, { from: 100, to: 228, weight: 1 },
            { from: 27, to: 100, weight: 1 }, { from: 229, to: 100, weight: 1 }, { from: 230, to: 229, weight: 1 }, { from: 231, to: 230, weight: 1 }, { from: 232, to: 231, weight: 1 },
            { from: 233, to: 232, weight: 1 }, { from: 234, to: 233, weight: 1 }, { from: 235, to: 234, weight: 1 },

            { from: 73, to: 236, weight: 1 }, { from: 236, to: 237, weight: 1 }, { from: 237, to: 238, weight: 1 }, { from: 237, to: 238, weight: 1 }, { from: 238, to: 239, weight: 1 },
            { from: 239, to: 240, weight: 1 }, { from: 240, to: 241, weight: 1 }, { from: 241, to: 242, weight: 1 }, { from: 242, to: 243, weight: 1 }, { from: 243, to: 244, weight: 1 },
            { from: 244, to: 245, weight: 1 }, { from: 245, to: 246, weight: 1 }, { from: 246, to: 98, weight: 1 },

            { from: 226, to: 247, weight: 1 }, { from: 226, to: 247, weight: 1 }, { from: 247, to: 248, weight: 1 }, { from: 248, to: 249, weight: 1 }, { from: 249, to: 250, weight: 1 },
            { from: 250, to: 251, weight: 1 }, { from: 251, to: 252, weight: 1 }, { from: 252, to: 253, weight: 1 }, { from: 253, to: 254, weight: 1 }, { from: 254, to: 139, weight: 1 },

            { from: 203, to: 255, weight: 1 }, { from: 255, to: 256, weight: 1 }, { from: 256, to: 257, weight: 1 }, { from: 257, to: 101, weight: 1 }, { from: 101, to: 31, weight: 1 },
            { from: 101, to: 258, weight: 1 }, { from: 258, to: 259, weight: 1 }, { from: 259, to: 260, weight: 1 }, { from: 260, to: 261, weight: 1 }, { from: 261, to: 262, weight: 1 },
            { from: 262, to: 102, weight: 1 }, { from: 102, to: 37, weight: 1 }, { from: 102, to: 263, weight: 1 }, { from: 263, to: 264, weight: 1 }, { from: 264, to: 265, weight: 1 },
            { from: 265, to: 266, weight: 1 }, { from: 266, to: 267, weight: 1 }, { from: 267, to: 268, weight: 1 }, { from: 268, to: 269, weight: 1 }, { from: 269, to: 270, weight: 1 },
            { from: 270, to: 271, weight: 1 }, { from: 271, to: 272, weight: 1 }, { from: 272, to: 273, weight: 1 }, { from: 273, to: 274, weight: 1 }, { from: 274, to: 275, weight: 1 },
            { from: 275, to: 276, weight: 1 },
            { from: 255, to: 203, weight: 1 }, { from: 256, to: 255, weight: 1 }, { from: 257, to: 256, weight: 1 }, { from: 101, to: 257, weight: 1 }, { from: 31, to: 101, weight: 1 },
            { from: 258, to: 101, weight: 1 }, { from: 259, to: 258, weight: 1 }, { from: 260, to: 259, weight: 1 }, { from: 261, to: 260, weight: 1 }, { from: 262, to: 261, weight: 1 },
            { from: 102, to: 262, weight: 1 }, { from: 37, to: 102, weight: 1 }, { from: 263, to: 102, weight: 1 }, { from: 264, to: 263, weight: 1 }, { from: 265, to: 264, weight: 1 },
            { from: 266, to: 265, weight: 1 }, { from: 267, to: 266, weight: 1 }, { from: 268, to: 267, weight: 1 }, { from: 269, to: 268, weight: 1 }, { from: 270, to: 269, weight: 1 },
            { from: 271, to: 270, weight: 1 }, { from: 272, to: 271, weight: 1 }, { from: 273, to: 272, weight: 1 }, { from: 274, to: 273, weight: 1 }, { from: 275, to: 274, weight: 1 },
            { from: 276, to: 275, weight: 1 },

            { from: 284, to: 283, weight: 1 }, { from: 283, to: 282, weight: 1 }, { from: 282, to: 281, weight: 1 }, { from: 281, to: 280, weight: 1 }, { from: 280, to: 279, weight: 1 }, { from: 279, to: 278, weight: 1 },
            { from: 278, to: 104, weight: 1 }, { from: 104, to: 29, weight: 1 }, { from: 104, to: 6, weight: 1 },{ from: 104, to: 103, weight: 1 }, { from: 103, to: 4, weight: 1 },
            { from: 103, to: 277, weight: 1 }, { from: 277, to: 72, weight: 1 }, { from: 71, to: 283, weight: 1 },
            { from: 283, to: 284, weight: 1 }, { from: 29, to: 104, weight: 1 }, { from: 6, to: 104, weight: 1 }, { from: 4, to: 103, weight: 1 },

            { from: 284, to: 285, weight: 1 }, { from: 283, to: 282, weight: 1 }, { from: 282, to: 283, weight: 1 }, { from: 283, to: 284, weight: 1 },{ from: 284, to: 285, weight: 1 },
            { from: 285, to: 286, weight: 1 }, { from: 286, to: 287, weight: 1 }, { from: 287, to: 288, weight: 1 }, { from: 288, to: 289, weight: 1 }, { from: 289, to: 290, weight: 1 },
            { from: 290, to: 105, weight: 1 }, { from: 105, to: 291, weight: 1 }, { from: 291, to: 292, weight: 1 }, { from: 292, to: 293, weight: 1 }, { from: 293, to: 294, weight: 1 },
            { from: 285, to: 284, weight: 1 }, { from: 282, to: 283, weight: 1 }, { from: 283, to: 282, weight: 1 }, { from: 284, to: 283, weight: 1 },{ from: 285, to: 284, weight: 1 },
            { from: 286, to: 285, weight: 1 }, { from: 287, to: 286, weight: 1 }, { from: 288, to: 287, weight: 1 }, { from: 289, to: 288, weight: 1 }, { from: 290, to: 289, weight: 1 },
            { from: 105, to: 290, weight: 1 }, { from: 291, to: 105, weight: 1 }, { from: 292, to: 291, weight: 1 }, { from: 293, to: 292, weight: 1 }, { from: 294, to: 293, weight: 1 },

            { from: 105, to: 295, weight: 1 }, { from: 295, to: 106, weight: 1 }, { from: 106, to: 32, weight: 1 },
            { from: 295, to: 105, weight: 1 }, { from: 106, to: 295, weight: 1 }, { from: 32, to: 106, weight: 1 },

            { from: 235, to: 296, weight: 1 }, { from: 296, to: 107, weight: 1 }, { from: 107, to: 33, weight: 1 }, { from: 107, to: 108, weight: 1 }, { from: 108, to: 36, weight: 1 },
            { from: 108, to: 109, weight: 1 }, { from: 109, to: 34, weight: 1 }, { from: 109, to: 297, weight: 1 }, { from: 297, to: 298, weight: 1 }, { from: 298, to: 110, weight: 1 },
            { from: 110, to: 39, weight: 1 }, { from: 110, to: 299, weight: 1 }, { from: 299, to: 300, weight: 1 }, { from: 300, to: 301, weight: 1 }, { from: 301, to: 302, weight: 1 },
            { from: 302, to: 263, weight: 1 },
            { from: 296, to: 235, weight: 1 }, { from: 107, to: 296, weight: 1 }, { from: 33, to: 107, weight: 1 }, { from: 108, to: 107, weight: 1 }, { from: 35, to: 108, weight: 1 },
            { from: 109, to: 108, weight: 1 }, { from: 34, to: 109, weight: 1 }, { from: 297, to: 109, weight: 1 }, { from: 298, to: 297, weight: 1 }, { from: 110, to: 298, weight: 1 },
            { from: 39, to: 110, weight: 1 }, { from: 299, to: 110, weight: 1 }, { from: 300, to: 299, weight: 1 }, { from: 301, to: 300, weight: 1 }, { from: 302, to: 301, weight: 1 },
            { from: 263, to: 302, weight: 1 },

            { from: 300, to: 303, weight: 1 }, { from: 303, to: 304, weight: 1 }, { from: 304, to: 111, weight: 1 }, { from: 111, to: 38, weight: 1 },
            { from: 303, to: 300, weight: 1 }, { from: 304, to: 303, weight: 1 }, { from: 111, to: 304, weight: 1 }, { from: 38, to: 111, weight: 1 },

            { from: 270, to: 305, weight: 1 }, { from: 305, to: 306, weight: 1 }, { from: 306, to: 113, weight: 1 }, { from: 113, to: 35, weight: 1 },
            { from: 305, to: 270, weight: 1 }, { from: 306, to: 305, weight: 1 }, { from: 113, to: 306, weight: 1 }, { from: 35, to: 113, weight: 1 },

            { from: 235, to: 307, weight: 1 }, { from: 307, to: 308, weight: 1 }, { from: 308, to: 309, weight: 1 }, { from: 309, to: 310, weight: 1 }, { from: 310, to: 276, weight: 1 },
            { from: 310, to: 294, weight: 1 }, { from: 310, to: 311, weight: 1 }, { from: 311, to: 312, weight: 1 }, { from: 312, to: 313, weight: 1 }, { from: 313, to: 314, weight: 1 },
            { from: 314, to: 315, weight: 1 }, { from: 315, to: 112, weight: 1 }, { from: 112, to: 48, weight: 1 }, { from: 112, to: 316, weight: 1 }, { from: 316, to: 317, weight: 1 },
            { from: 307, to: 235, weight: 1 }, { from: 308, to: 307, weight: 1 }, { from: 309, to: 308, weight: 1 }, { from: 310, to: 309, weight: 1 }, { from: 276, to: 310, weight: 1 },
            { from: 294, to: 310, weight: 1 }, { from: 311, to: 310, weight: 1 }, { from: 312, to: 311, weight: 1 }, { from: 313, to: 312, weight: 1 }, { from: 314, to: 313, weight: 1 },
            { from: 315, to: 314, weight: 1 }, { from: 112, to: 315, weight: 1 }, { from: 48, to: 112, weight: 1 }, { from: 316, to: 112, weight: 1 }, { from: 317, to: 316, weight: 1 },

            { from: 284, to: 318, weight: 1 }, { from: 318, to: 319, weight: 1 }, { from: 319, to: 320, weight: 1 }, { from: 320, to: 321, weight: 1 }, { from: 321, to: 114, weight: 1 },
            { from: 114, to: 40, weight: 1 }, { from: 114, to: 41, weight: 1 }, { from: 114, to: 115, weight: 1 }, { from: 115, to: 42, weight: 1 }, { from: 115, to: 322, weight: 1 },
            { from: 322, to: 323, weight: 1 }, { from: 323, to: 324, weight: 1 }, { from: 324, to: 325, weight: 1 }, { from: 325, to: 326, weight: 1 }, { from: 326, to: 327, weight: 1 },
            { from: 327, to: 328, weight: 1 }, { from: 328, to: 329, weight: 1 }, { from: 329, to: 330, weight: 1 }, { from: 330, to: 331, weight: 1 }, { from: 331, to: 332, weight: 1 },
            { from: 332, to: 333, weight: 1 }, { from: 333, to: 116, weight: 1 }, { from: 116, to: 46, weight: 1 }, { from: 116, to: 117, weight: 1 }, { from: 117, to: 43, weight: 1 },
            { from: 318, to: 284, weight: 1 }, { from: 319, to: 318, weight: 1 }, { from: 320, to: 319, weight: 1 }, { from: 321, to: 320, weight: 1 }, { from: 114, to: 321, weight: 1 },
            { from: 40, to: 114, weight: 1 }, { from: 41, to: 114, weight: 1 }, { from: 115, to: 114, weight: 1 }, { from: 42, to: 115, weight: 1 }, { from: 322, to: 115, weight: 1 },
            { from: 323, to: 322, weight: 1 }, { from: 324, to: 323, weight: 1 }, { from: 325, to: 324, weight: 1 }, { from: 326, to: 325, weight: 1 }, { from: 327, to: 326, weight: 1 },
            { from: 328, to: 327, weight: 1 }, { from: 329, to: 328, weight: 1 }, { from: 330, to: 329, weight: 1 }, { from: 331, to: 330, weight: 1 }, { from: 332, to: 331, weight: 1 },
            { from: 333, to: 332, weight: 1 }, { from: 116, to: 333, weight: 1 }, { from: 46, to: 116, weight: 1 }, { from: 117, to: 116, weight: 1 }, { from: 43, to: 117, weight: 1 },

            { from: 117, to: 334, weight: 1 }, { from: 334, to: 119, weight: 1 }, { from: 119, to: 45, weight: 1 }, { from: 119, to: 118, weight: 1 }, { from: 118, to: 44, weight: 1 },
            { from: 118, to: 317, weight: 1 },
            { from: 334, to: 117, weight: 1 }, { from: 119, to: 334, weight: 1 }, { from: 45, to: 119, weight: 1 }, { from: 118, to: 119, weight: 1 }, { from: 44, to: 118, weight: 1 },
            { from: 317, to: 118, weight: 1 },

            { from: 112, to: 335, weight: 1 }, { from: 335, to: 336, weight: 1 }, { from: 336, to: 120, weight: 1 }, { from: 120, to: 51, weight: 1 }, { from: 120, to: 49, weight: 1 },
            { from: 120, to: 121, weight: 1 }, { from: 121, to: 50, weight: 1 }, { from: 121, to: 122, weight: 1 }, { from: 122, to: 52, weight: 1 },
            { from: 335, to: 112, weight: 1 }, { from: 336, to: 335, weight: 1 }, { from: 120, to: 336, weight: 1 }, { from: 51, to: 120, weight: 1 }, { from: 49, to: 120, weight: 1 },
            { from: 121, to: 120, weight: 1 }, { from: 50, to: 121, weight: 1 }, { from: 122, to: 121, weight: 1 }, { from: 52, to: 122, weight: 1 },

            { from: 117, to: 337, weight: 1 }, { from: 337, to: 338, weight: 1 }, { from: 338, to: 339, weight: 1 }, { from: 339, to: 340, weight: 1 }, { from: 340, to: 341, weight: 1 },
            { from: 341, to: 342, weight: 1 }, { from: 342, to: 343, weight: 1 },
            { from: 337, to: 117, weight: 1 }, { from: 338, to: 337, weight: 1 }, { from: 339, to: 338, weight: 1 }, { from: 340, to: 339, weight: 1 }, { from: 341, to: 340, weight: 1 },
            { from: 342, to: 341, weight: 1 }, { from: 343, to: 342, weight: 1 }, 

            { from: 339, to: 344, weight: 1 }, { from: 344, to: 345, weight: 1 }, { from: 345, to: 123, weight: 1 }, { from: 123, to: 53, weight: 1 }, { from: 123, to: 124, weight: 1 },
            { from: 124, to: 47, weight: 1 }, { from: 124, to: 346, weight: 1 }, { from: 346, to: 347, weight: 1 }, { from: 347, to: 348, weight: 1 }, { from: 348, to: 349, weight: 1 },
            { from: 349, to: 350, weight: 1 }, { from: 350, to: 125, weight: 1 }, { from: 125, to: 54, weight: 1 }, { from: 125, to: 351, weight: 1 }, { from: 351, to: 352, weight: 1 },
            { from: 352, to: 126, weight: 1 }, { from: 126, to: 56, weight: 1 }, { from: 126, to: 57, weight: 1 }, { from: 126, to: 353, weight: 1 }, { from: 353, to: 354, weight: 1 },
            { from: 354, to: 355, weight: 1 }, { from: 355, to: 356, weight: 1 }, { from: 356, to: 357, weight: 1 }, { from: 357, to: 127, weight: 1 }, { from: 127, to: 55, weight: 1 },
            { from: 344, to: 339, weight: 1 }, { from: 345, to: 344, weight: 1 }, { from: 123, to: 345, weight: 1 }, { from: 53, to: 123, weight: 1 }, { from: 124, to: 123, weight: 1 },
            { from: 47, to: 124, weight: 1 }, { from: 346, to: 124, weight: 1 }, { from: 347, to: 346, weight: 1 }, { from: 348, to: 347, weight: 1 }, { from: 349, to: 348, weight: 1 },
            { from: 350, to: 349, weight: 1 }, { from: 125, to: 350, weight: 1 }, { from: 54, to: 125, weight: 1 }, { from: 351, to: 125, weight: 1 }, { from: 352, to: 351, weight: 1 },
            { from: 126, to: 352, weight: 1 }, { from: 56, to: 126, weight: 1 }, { from: 57, to: 126, weight: 1 }, { from: 353, to: 126, weight: 1 }, { from: 354, to: 353, weight: 1 },
            { from: 355, to: 354, weight: 1 }, { from: 356, to: 355, weight: 1 }, { from: 357, to: 356, weight: 1 }, { from: 127, to: 357, weight: 1 }, { from: 55, to: 127, weight: 1 },

            { from: 317, to: 358, weight: 1 }, { from: 358, to: 359, weight: 1 }, { from: 359, to: 343, weight: 1 }, { from: 359, to: 360, weight: 1 }, { from: 360, to: 343, weight: 1 },
            { from: 360, to: 361, weight: 1 }, { from: 361, to: 362, weight: 1 }, { from: 362, to: 363, weight: 1 },
            { from: 358, to: 317, weight: 1 }, { from: 359, to: 358, weight: 1 }, { from: 343, to: 359, weight: 1 }, { from: 360, to: 359, weight: 1 }, { from: 343, to: 360, weight: 1 },
            { from: 361, to: 360, weight: 1 }, { from: 362, to: 361, weight: 1 }, { from: 363, to: 362, weight: 1 }, 

            { from: 363, to: 128, weight: 1 }, { from: 128, to: 58, weight: 1 }, { from: 128, to: 364, weight: 1 }, { from: 364, to: 129, weight: 1 }, { from: 129, to: 60, weight: 1 },
            { from: 129, to: 365, weight: 1 }, { from: 365, to: 366, weight: 1 }, { from: 366, to: 130, weight: 1 }, { from: 130, to: 59, weight: 1 }, { from: 130, to: 367, weight: 1 },
            { from: 367, to: 368, weight: 1 }, { from: 368, to: 131, weight: 1 }, { from: 131, to: 61, weight: 1 }, { from: 131, to: 132, weight: 1 }, { from: 132, to: 66, weight: 1 }, 
            { from: 132, to: 133, weight: 1 }, { from: 133, to: 64, weight: 1 }, { from: 133, to: 369, weight: 1 }, { from: 369, to: 134, weight: 1 }, { from: 134, to: 63, weight: 1 }, 
            { from: 134, to: 370, weight: 1 }, { from: 370, to: 135, weight: 1 }, { from: 135, to: 62, weight: 1 }, { from: 135, to: 371, weight: 1 }, { from: 371, to: 372, weight: 1 }, 
            { from: 372, to: 373, weight: 1 }, { from: 373, to: 136, weight: 1 }, { from: 136, to: 65, weight: 1 },
            { from: 128, to: 363, weight: 1 }, { from: 58, to: 128, weight: 1 }, { from: 364, to: 128, weight: 1 }, { from: 129, to: 364, weight: 1 }, { from: 60, to: 129, weight: 1 },
            { from: 365, to: 129, weight: 1 }, { from: 366, to: 365, weight: 1 }, { from: 130, to: 366, weight: 1 }, { from: 59, to: 130, weight: 1 }, { from: 367, to: 130, weight: 1 },
            { from: 368, to: 367, weight: 1 }, { from: 131, to: 368, weight: 1 }, { from: 61, to: 131, weight: 1 }, { from: 132, to: 131, weight: 1 }, { from: 66, to: 132, weight: 1 },
            { from: 133, to: 132, weight: 1 }, { from: 64, to: 133, weight: 1 }, { from: 369, to: 133, weight: 1 }, { from: 134, to: 369, weight: 1 }, { from: 63, to: 134, weight: 1 },
            { from: 370, to: 134, weight: 1 }, { from: 135, to: 370, weight: 1 }, { from: 62, to: 135, weight: 1 }, { from: 371, to: 135, weight: 1 }, { from: 372, to: 371, weight: 1 },
            { from: 373, to: 372, weight: 1 }, { from: 136, to: 373, weight: 1 }, { from: 65, to: 136, weight: 1 },

            { from: 374, to: 132, weight: 1 },  { from: 375, to: 374, weight: 1 },  { from: 376, to: 375, weight: 1 },  { from: 377, to: 376, weight: 1 },  { from: 68, to: 377, weight: 1 },
            { from: 373, to: 372, weight: 1 },

            { from: 134, to: 67, weight: 1 },  { from: 133, to: 69, weight: 1 },  { from: 69, to: 133, weight: 1 },  { from: 131, to: 70, weight: 1 },  { from: 70, to: 131, weight: 1 }
        ]
    };

    // ==========================================================
    // ✨ KODE BARU: MENGHITUNG BOBOT SECARA OTOMATIS ✨
    // ==========================================================
    
    // Buat "peta" cepat untuk mencari koordinat berdasarkan ID
    const nodeMap = new Map(graphData.nodes.map(node => [node.id, node.coords]));

    // Ulangi setiap edge/jalur
    graphData.edges.forEach(edge => {
        const coords1 = nodeMap.get(edge.from);
        const coords2 = nodeMap.get(edge.to);
        
        if (coords1 && coords2) {
            // Hitung jarak nyata (meter) menggunakan fungsi Haversine
            const distance = getDistance(coords1, coords2);
            
            // Timpa/Atur 'weight' dengan jarak yang sebenarnya
            edge.weight = distance; 
            
            // Perbaikan kecil untuk bobot 0 jika ada (jarak sangat dekat)
            if (edge.weight === 0) {
                edge.weight = 0.1; // Tetap angka positif
            }
            
        } else {
            // Jika ada edge yang merujuk ke node yang tidak ada, beri penalti
            console.warn(`Node tidak ditemukan untuk edge: ${edge.from} -> ${edge.to}`);
            edge.weight = Infinity;
        }
    });

    console.log("Semua bobot (weight) edge telah dihitung ulang berdasarkan jarak (meter).");

    // Algoritma Dijkstra
    function dijkstra(nodes, edges, startId, endId) {
        const distances = {}; const prev = {}; const pq = new Set();
        nodes.forEach(node => { distances[node.id] = Infinity; prev[node.id] = null; pq.add(node.id); });
        distances[startId] = 0;
        while (pq.size > 0) {
            let u = Array.from(pq).reduce((a, b) => distances[a] < distances[b] ? a : b);
            if (u === null || distances[u] === Infinity) break;
            pq.delete(u);
            if (u === endId) {
                const path = []; let current = endId;
                while (current !== null) { path.unshift(current); current = prev[current]; }
                return path;
            }
            edges.filter(edge => edge.from === u).forEach(edge => {
                const v = edge.to; const alt = distances[u] + edge.weight;
                if (alt < distances[v]) { distances[v] = alt; prev[v] = u; }
            });
        }
        return null;
    }

    // Elemen HTML
    const findRouteBtn = document.getElementById('find-route-btn');
    const clearRouteBtn = document.getElementById('clear-route-btn');
    const searchInput = document.getElementById('search-building');
    const searchResults = document.getElementById('search-results');
    
    const startInput = document.getElementById('start-location-input');
    const startIdInput = document.getElementById('start-location-id');
    const startResults = document.getElementById('start-results');
    const endInput = document.getElementById('end-location-input');
    const endIdInput = document.getElementById('end-location-id');
    const endResults = document.getElementById('end-results');

    let routeLayer = null;
    let markers = {};

    // Buat marker untuk setiap node
    graphData.nodes.forEach(node => {
if (node.type !== 'jalan') { 
        const marker = L.marker(node.coords).addTo(map).bindPopup(`<b>${node.name}</b>`);
        markers[node.id] = marker;
    }
    });

    // Fungsi untuk menggambar rute
    function drawRoute(pathNodeIds) {
        clearRoute();
        const pathCoords = pathNodeIds.map(id => graphData.nodes.find(n => n.id === id).coords);
        routeLayer = L.polyline(pathCoords, { color: '#00f0ff', weight: 5, opacity: 0.8, dashArray: '10, 10' }).addTo(map);
        map.fitBounds(routeLayer.getBounds(), { padding: [50, 50] });
    }
    
    // Fungsi untuk membersihkan rute
    function clearRoute() {
        if (routeLayer) {
            map.removeLayer(routeLayer);
            routeLayer = null;
        }
        startInput.value = '';
        startIdInput.value = '';
        endInput.value = '';
        endIdInput.value = '';
    }
    
    // Event listener untuk tombol Cari Rute
    findRouteBtn.addEventListener('click', () => {
        const startId = parseInt(startIdInput.value);
        const endId = parseInt(endIdInput.value);

        if (!startId || !endId) {
            alert('Harap pilih lokasi awal dan tujuan dari daftar pencarian.');
            return;
        }
        if (startId === endId) {
            alert('Lokasi awal dan tujuan tidak boleh sama!');
            return;
        }
        const path = dijkstra(graphData.nodes, graphData.edges, startId, endId);
        if (path) {
            drawRoute(path);
        } else {
            alert('Rute tidak ditemukan!');
        }
    });

    clearRouteBtn.addEventListener('click', clearRoute);
    
    // --- FUNGSI SEARCHABLE INPUT ---

    // Fungsi helper untuk mengisi daftar hasil
    function populateResults(inputEl, idEl, resultsEl, query) {
        const nodes = graphData.nodes;
        resultsEl.innerHTML = ''; 
        
        const filteredNodes = nodes.filter(node => 
            node.type !== 'jalan' &&
            node.name.toLowerCase().includes(query.toLowerCase())
        );

        if (filteredNodes.length > 0) {
            resultsEl.style.display = 'block';
            filteredNodes.forEach(node => {
                const li = document.createElement('li');
                li.textContent = node.name;
                li.dataset.nodeId = node.id;
                
                li.addEventListener('click', () => {
                    inputEl.value = node.name;
                    if(idEl) idEl.value = node.id;
                    resultsEl.innerHTML = '';
                    resultsEl.style.display = 'none';
                    
                    if (inputEl.id === 'search-building') {
                        const targetNode = markers[node.id];
                        if(targetNode) {
                            map.setView(targetNode.getLatLng(), 18);
                            targetNode.openPopup();
                        }
                    }
                });
                resultsEl.appendChild(li);
            });
        } else {
            resultsEl.style.display = 'none';
        }
    }
    
    // Fungsi untuk menangani event input (ketik atau clear 'x')
    function handleSearchInput(inputEl, idEl, resultsEl) {
         // Jika 'x' ditekan, input value jadi kosong, event 'input' terpicu
         if(inputEl.value === '') {
            if(idEl) idEl.value = ''; // Hapus ID yang tersembunyi
            resultsEl.innerHTML = '';
            resultsEl.style.display = 'none';
         } else {
             // Jika mengetik, filter seperti biasa
            populateResults(inputEl, idEl, resultsEl, inputEl.value);
         }
    }

    // Terapkan ke "Cari Gedung"
    searchInput.addEventListener('input', () => {
        handleSearchInput(searchInput, null, searchResults);
    });
    searchInput.addEventListener('click', (e) => {
        e.stopPropagation();
        populateResults(searchInput, null, searchResults, ''); // Tampilkan semua
    });

    // Terapkan ke "Lokasi Awal"
    startInput.addEventListener('input', () => {
        handleSearchInput(startInput, startIdInput, startResults);
    });
    startInput.addEventListener('click', (e) => {
        e.stopPropagation();
        populateResults(startInput, startIdInput, startResults, '');
    });

    // Terapkan ke "Lokasi Tujuan"
    endInput.addEventListener('input', () => {
        handleSearchInput(endInput, endIdInput, endResults);
    });
    endInput.addEventListener('click', (e) => {
        e.stopPropagation();
        populateResults(endInput, endIdInput, endResults, '');
    });

    // Sembunyikan daftar hasil jika klik di luar
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.route-search-group') && !e.target.closest('.search-input-group')) {
            startResults.style.display = 'none';
            endResults.style.display = 'none';
            searchResults.style.display = 'none';
        }
    });
});
/**
 * Menghitung jarak (dalam meter) antara dua koordinat Lat/Lon
 * Menggunakan formula Haversine.
 */
function getDistance(coords1, coords2) {
    const R = 6371e3; // Radius Bumi dalam meter
    const lat1 = coords1[0] * Math.PI / 180; // lat dalam radian
    const lat2 = coords2[0] * Math.PI / 180;
    const deltaLat = (coords2[0] - coords1[0]) * Math.PI / 180;
    const deltaLon = (coords2[1] - coords1[1]) * Math.PI / 180;

    const a = Math.sin(deltaLat / 2) * Math.sin(deltaLat / 2) +
              Math.cos(lat1) * Math.cos(lat2) *
              Math.sin(deltaLon / 2) * Math.sin(deltaLon / 2);
    const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));

    return R * c; // Jarak dalam meter
}