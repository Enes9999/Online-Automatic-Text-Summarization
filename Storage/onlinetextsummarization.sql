-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2021 at 09:12 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinetextsummarization`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `ID` int(11) DEFAULT NULL,
  `IDHISTORY` int(11) NOT NULL,
  `History` mediumtext DEFAULT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`ID`, `IDHISTORY`, `History`, `Date`) VALUES
(34, 1, 'Rreth fundit të shekullit XII ose fillimit të shekullit XI para erës sonë në territorin e tyre shfaqen për të parën herë objekte prej hekuri. \r\n\r\nFutja në përdorim e këtij materiali të ri, që i dha emrin epokës shënon, edhe për ilirët nismën e një periudhe të re historike. \r\n\r\nHekuri kishte cilësi të pakrahasueshme ndaj lëndëve të para të njohura deri atëherë për përgatitjen e veglave të punës dhe të armëve. \r\n\r\nNë tërë përmbajtjen e vet kjo periudhë e historisë së ilirëve karakterizohet, kështu, nga shthurja e plotë e organizimit fisnor dhe nga përgatitja e kushteve për lindjen e skllavopronarisë dhe të shteteve skllavopronare ilire. \r\n\r\n Njohuritë tona për këtë periudhë mbështeten kryesisht në të dhënat arkeologjike, por këtu vijnë në ndihmë për herë të parë edhe burimet e shkruara historike, të cilat u takojnë kryesisht ilirëve të Jugut.\r\n\r\n', '2021-01-25'),
(36, 2, 'Vivamus id nulla aliquet, blandit erat vel, finibus dui. \r\n\r\nSuspendisse aliquet, odio quis egestas iaculis, eros lorem accumsan felis, vestibulum tincidunt mi elit dapibus felis. \r\n\r\nNulla eu congue ex. \r\n\r\nFusce at lectus ut nisl aliquam egestas. \r\n\r\nQuisque eget lorem consectetur, tincidunt risus vitae, viverra enim. \r\n\r\nMaecenas ut leo et lorem interdum pellentesque. \r\n\r\nUt imperdiet a nisl et laoreet. \r\n\r\nCurabitur vestibulum commodo purus, ac consectetur elit scelerisque ut. \r\n\r\nVivamus nibh eros, ultrices ut vulputate nec, consectetur ut ipsum. \r\n\r\n Proin posuere orci vitae erat varius feugiat. \r\n\r\nSed accumsan eros nulla, non venenatis est rutrum ut. \r\n\r\nCurabitur dictum posuere elit, ut molestie nisl aliquam vitae. \r\n\r\nNulla accumsan risus vitae lacus consequat, ac vehicula velit ultrices. \r\n\r\nDonec nulla ex, efficitur id erat in, pharetra consequat nunc. \r\n\r\nDonec lacinia, enim at tempus cursus, metus metus consequat ligula, quis egestas odio lacus sit amet turpis. \r\n\r\nEtiam finibus elit sit amet lorem elementum tincidunt sed ut justo. \r\n\r\nProin in velit eu enim egestas vulputate. \r\n\r\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;  Etiam placerat, diam ac ornare interdum, orci est lacinia leo, nec consectetur augue neque id dui. \r\n\r\nAliquam lacinia augue a tellus rhoncus varius. \r\n\r\nProin lorem lacus, placerat quis sagittis at, commodo vitae ipsum. \r\n\r\nNam ornare lacus ut ipsum suscipit luctus eu et orci. \r\n\r\nDonec finibus suscipit nulla nec vehicula. \r\n\r\nDuis felis leo, blandit nec gravida ac, semper vitae nisl. \r\n\r\nMaecenas sollicitudin lorem nunc, eu fringilla est fringilla ut. \r\n\r\n Nulla consectetur nibh ut dignissim faucibus. \r\n\r\nMaecenas rutrum sed neque vitae pulvinar. \r\n\r\nIn condimentum hendrerit leo, et fringilla arcu blandit congue. \r\n\r\n Aliquam aliquet, tellus nec sodales interdum, risus nisl consectetur tellus, interdum efficitur mi orci ac mi. \r\n\r\nSed vitae suscipit ipsum, eu commodo lectus. \r\n\r\nNulla mattis mi a elit cursus, nec elementum ligula eleifend. \r\n\r\nMorbi ut congue neque. \r\n\r\nMaecenas non posuere nulla, sed dictum massa. \r\n\r\nProin sit amet lectus vel magna congue efficitur vitae id mauris. \r\n\r\nInteger viverra elit eu sapien congue, non feugiat diam ultricies. \r\n\r\nFusce blandit nulla in massa consectetur, ut porttitor neque vulputate.\r\n\r\n', '2021-01-26'),
(37, 9, 'Nam posuere quam faucibus lacus sodales interdum ut vel quam. \r\n\r\nUt porttitor metus a dolor ornare, in cursus ex mattis. \r\n\r\n Ut viverra, eros pellentesque consectetur aliquam, felis ante fringilla orci, et mattis quam sem non ante. \r\n\r\nVivamus tincidunt leo ac risus hendrerit, ut rutrum sapien sollicitudin. \r\n\r\nUt egestas, nibh id placerat interdum, odio metus rutrum mi, at tempor erat tellus non arcu. \r\n\r\nPellentesque gravida, dolor in pretium lacinia, lorem felis fermentum sem, tristique blandit odio erat in tellus. \r\n\r\nNunc justo mauris, iaculis eget lorem in, ultrices aliquam diam. \r\n\r\nPhasellus condimentum odio et turpis aliquet pretium. \r\n\r\nMauris ac diam condimentum, porttitor metus ac, accumsan velit. \r\n\r\nAliquam elit dui, sollicitudin eu faucibus ac, scelerisque nec turpis. \r\n\r\nAenean efficitur consequat lorem quis eleifend. \r\n\r\nVivamus in aliquet diam. \r\n\r\nSed a nulla quis nulla tincidunt luctus. \r\n\r\nNulla tristique aliquet risus sit amet hendrerit. \r\n\r\nSuspendisse nulla turpis, faucibus ut ligula congue, suscipit tincidunt felis. \r\n\r\nNam scelerisque enim quis tortor maximus, a porta mauris semper. \r\n\r\nPellentesque ut faucibus tortor. \r\n\r\nNam dolor lacus, maximus sit amet quam vel, tincidunt pharetra urna. \r\n\r\nPellentesque ut auctor sem. \r\n\r\nPraesent porta eros ut ex elementum semper. \r\n\r\n Fusce accumsan, libero viverra bibendum tempor, leo elit tempor lectus, sit amet suscipit metus augue ut nisi. \r\n\r\nPraesent non ex eget nisi facilisis mattis. \r\n\r\nDonec vitae dui posuere, euismod elit ut, tincidunt purus. \r\n\r\nFusce ut semper elit. \r\n\r\nPhasellus lacinia ante quis tincidunt fringilla. \r\n\r\nNulla mattis metus at eros consequat euismod. \r\n\r\nEtiam nisl velit, tincidunt vel turpis vel, sagittis rutrum est. \r\n\r\nAliquam suscipit tristique lorem nec lacinia. \r\n\r\nEtiam in tincidunt tortor. \r\n\r\nAliquam fermentum dignissim ex, et ultrices metus varius sed.\r\n\r\n', '2021-01-27'),
(38, 11, 'Epoka e bronzit në Shqipëri përfshin mijëvjeçarin e tretë dhe gjithë mijëvjeçarin e dytë p.e.s., e deri në fundin e shek. \r\n\r\nAjo njihet prej të dhënave të fituara nga shtresat e kulturës së bronzit në vendbanimet e Maliqit, të Trenit e të Sovjanit në pellgun e Korçës, nga shtresa e parë e vendbanimit të Gajtanit në afërsi të Shkodrës, nga gjetjet në shpellën e Nezirit dhe nga vendbanimi i Badherës e kalaja e Kalivosë në rrethin e Sarandës. \r\n\r\n Këto të dhëna dëshmojnë se territori i Shqipërisë gjatë kësaj epoke ka qenë i populluar gjerësisht, që nga zonat e tij të ulëta fushore e deri në krahinat e brendshme dhe të vështira malore. \r\n\r\nNë një masë më të kufizuar janë shfrytëzuar dhe shpellat, ashtu siç kanë vazhduar të jenë në përdorim edhe palafitet, siç tregojnë gërmimet e viteve të fundit në vendbanimin palafit të Sovjanit. \r\n\r\nNjë pjesë e mirë e vendbanimeve të këtij lloji, si kalaja e Gajtanit, qyteza e Margëlliçit (Fier) etj., që do të marrin zhvillim të plotë dhe do të bëhen karakteristike për epokën pasuese, atë të hekurit, e kanë origjinën e vet në këtë periudhë.\r\n\r\n', '2021-01-27'),
(39, 12, 'Nam posuere quam faucibus lacus sodales interdum ut vel quam. \r\n\r\nUt porttitor metus a dolor ornare, in cursus ex mattis. \r\n\r\n Ut viverra, eros pellentesque consectetur aliquam, felis ante fringilla orci, et mattis quam sem non ante. \r\n\r\nVivamus tincidunt leo ac risus hendrerit, ut rutrum sapien sollicitudin. \r\n\r\nUt egestas, nibh id placerat interdum, odio metus rutrum mi, at tempor erat tellus non arcu. \r\n\r\nPellentesque gravida, dolor in pretium lacinia, lorem felis fermentum sem, tristique blandit odio erat in tellus. \r\n\r\nNunc justo mauris, iaculis eget lorem in, ultrices aliquam diam. \r\n\r\nPhasellus condimentum odio et turpis aliquet pretium. \r\n\r\nMauris ac diam condimentum, porttitor metus ac, accumsan velit. \r\n\r\nAliquam elit dui, sollicitudin eu faucibus ac, scelerisque nec turpis. \r\n\r\nAenean efficitur consequat lorem quis eleifend. \r\n\r\nVivamus in aliquet diam. \r\n\r\nSed a nulla quis nulla tincidunt luctus. \r\n\r\nNulla tristique aliquet risus sit amet hendrerit. \r\n\r\nSuspendisse nulla turpis, faucibus ut ligula congue, suscipit tincidunt felis. \r\n\r\nNam scelerisque enim quis tortor maximus, a porta mauris semper. \r\n\r\nPellentesque ut faucibus tortor. \r\n\r\nNam dolor lacus, maximus sit amet quam vel, tincidunt pharetra urna. \r\n\r\nPellentesque ut auctor sem. \r\n\r\nPraesent porta eros ut ex elementum semper. \r\n\r\n Fusce accumsan, libero viverra bibendum tempor, leo elit tempor lectus, sit amet suscipit metus augue ut nisi. \r\n\r\nPraesent non ex eget nisi facilisis mattis. \r\n\r\nDonec vitae dui posuere, euismod elit ut, tincidunt purus. \r\n\r\nFusce ut semper elit. \r\n\r\nPhasellus lacinia ante quis tincidunt fringilla. \r\n\r\nNulla mattis metus at eros consequat euismod. \r\n\r\nEtiam nisl velit, tincidunt vel turpis vel, sagittis rutrum est. \r\n\r\nAliquam suscipit tristique lorem nec lacinia. \r\n\r\nEtiam in tincidunt tortor. \r\n\r\nAliquam fermentum dignissim ex, et ultrices metus varius sed.\r\n\r\n', '2021-01-27'),
(41, 13, 'Janë zbuluar e gërmuar një numër i madh vendbanimesh neolitike me shtrirje gati në tërë territorin e Shqipërisë, si në Maliq, Cakran, Vashtëmi, Burimas, Podgorie, Barç dhe në Dërsnik të rrethit të Korçës, në Kamnik të Kolonjës, në Blaz e Nezir të Matit, në Cakran të Fierit, në Burim, në Gradec e në Cetush të Dibrës, në Kolsh të Kukësit, në Rrajcë e në Rashtan të Librazhdit e nga gjetje të rastit në pika të tjera. \r\n\r\nMë mirë është njohur e studiuar pellgu i Korçës, i cili gjatë epokës parahistorike ka pasur kushte shumë të mira gjeo-klimatike. \r\n\r\nJeta në Shqipëri gjatë neolitit u zhvillua në kushte shumë të përshtatshme natyrore. \r\n\r\n', '2021-01-27'),
(41, 14, 'Ai u ngrit sipas gradave, duke kulminuar në emërimin si sanxhakbej i Sanxhakut të Dibrës në vitin 1440. \r\n\r\nNë vitin 1443, ai braktisi osmanët gjatë betejës së Nishit dhe u bë sundimtar i Krujës, Sfetigradit dhe Modriçit. \r\n\r\nNë vitin 1444, ai u emërua prijës i Lidhjes së Lezhës, që konsolidoi fisnikërinë në atë që sot është Shqipëri. \r\n\r\n', '2021-01-27'),
(41, 15, 'Vepra e parë e Naimit qe përpilimi i një gramatike të gjuhës perse \"Rregullat e persishtes sipas metodës së re\" (osman. \r\n\r\ne tejshkruar Kavâid-i farisiyye dar tarz-i nevîn) më 1871, nënshkruar Mehmet Naim, nëpunës i Drejtorisë së Shtypit. \r\n\r\nDuke pasur gjithsej ka 168 faqe, kjo vepër është e ndarë në dy pjesë: pjesa e parë ka 85 faqe dhe në atë jepen të dhëna rreth rregullave të gjuhës perse, sidomos për pjesën morfologjike të kësaj gjuhe, kurse pjesa e dytë e cila ka 83 faqe, përbëhet nga katër ushtrime dhe një fjalor në fund me disa fjalë persisht – osmanisht.[20][21]  I përfshirë kultura perse dhe vargjet sufi të Saadiut, Hafezit, shkroi dhe botoi qindra vargje në persisht, duke ndjekur traditën e letërsisë perse dhe modelet e poetëve të parapëlqyer më 1884 vëllimin me poezi prozaike \"Katër stinët\" (osmanisht e tejshkruar Fusuli erbea). \r\n\r\n', '2021-01-27'),
(41, 16, 'Në vitin 1443 trupat hungareze të komanduara nga Janosh Huniadi u futën në thellësi të Ballkanit dhe në nëntor u ndeshën me ushtrinë osmane duke e thyer. \r\n\r\nPrandaj mblodhi në Lezhë një kuvend të fisnikëve shqiptarë, një praktikë tradicionale e shqiptarëve për të realizuar bashkimin dhe bashkëpunimin e tyre.[29] U formua Besëlidhja shqiptare e Lezhës,[30][31][32][33] një aleancë politike dhe ushtarake kryetar i së cilës u zgjodh Skënderbeu. \r\n\r\nAi u zgjodh edhe komandant i përgjithshëm i ushtrisë së përbashkët e cila do të formohej.[34]  Në vitin 1444 forcat shqiptare të komanduara nga Skënderbeu thyen ushtrinë osmane në Betejën e Torviollit.[35] Me 10 tetor 1445 një ushtri osmane prej 9,000–15,000 vetësh[36] nën komandën e Firuz Pashës u nis drejt Shqipërisë nga ana e Prizrenit. \r\n\r\nOsmanët në luginën e Mokrës ndërsa Skënderbeu i sulmoi dhe i shpartalloi me 3500 luftëtarë.[37] Vitin passues ai theu osmanët edhe dy herë tjera, një herë forcat osmane nga Ohri,[38] dhe prapë në Betejën e Otonetës me 27 Shtator 1446.[39][40]  Në vitin 1450 sulltan Murati II erdhi në Shqipëri me një ushtri të madhe dhe rrethoi Krujën. \r\n\r\nSkënderbeu qëndroi jashtë kështjellës bashkë me luftëtarët e tij dhe godiste ushtrinë osmane papritur dhe pandërprerë nga drejtime të ndryshme. \r\n\r\nDuke parë humbjet sulltani urdhëroi asgjësimin e trupave të Skënderbeut duke i ndjekur kudo, por këto ekspedita u kushtuan osmanëve shumë humbje. \r\n\r\nLufta për mbrojtjen e Krujës ishte një ndër fitoret më të rëndësishme të Skënderbeut.[41]  Më 1451, u martua me Donikën, të bijën e Gjergj Arianitit.[42] Skënderbeu u përpoq të siguronte ndihma për të çliruar territore tjera që ishin nën osmanët. \r\n\r\nSkënderbeu dhe Gjergj Arianiti ishin larguar kur u njoftuan për sulmin e papritur të ushtrisë osmane. \r\n\r\nMoisi Golemi i trembur kaloi në anën e osmanëve të cilët në vitin 1456 e dërguan në krye të një ushtrie osmane në Shqipëri por ushtria e Skënderbeut e theu keqas.[47] Në vitin 1456 Gjergj Stres Balsha, u shiti osmanëve kështjellën e Modriçit për 30,000 aspra argjendi. \r\n\r\nAi u mundua ta fshehë këtë; megjithatë tradhëtia e tij u zbulua, dhe ai u burgos në Napoli.[48] Më 1456 Gjergjit i lindi djalë.[49] Hamza Kastrioti, nipi i Skënderbeut, humbi shpresat se do të trashëgonte principatën pas vdekjes së Skënderbeut dhe iu bashkua osmanëve.[49] Më 27 qershor 1458, Alfonsi V vdiq në Napoli dhe Skanderbegu dërgoi eimsarë te i biri Ferdinandi.[50]  Pas pesë betejave të ashpra që u zhvilluan në vitin 1465 mes ushtrisë shqiptare dhe ushtrive osmane të drejtuara nga Ballaban Pasha, ku shqiptarët dolën fitimtarë, sulltan Mehmeti II mendoi se kishte ardhur koha për një goditje vendimtare të të gjitha forcave ushtarake të Perandorisë Osmane. \r\n\r\nNë pranverën e vitit 1466 sulltani u nis në krye të gjithë ushtrisë osmane për të rrethuar Krujën. \r\n\r\n[52]  Në prill 1467, Skënderbeu u kthye në atdhe ku me përkrahjen e popullit riorganizoi një ushtri të fuqishme dhe me 19 prill shpartalloi plotësisht ushtrinë osmane të komanduar nga vëllai i Ballabanit, Jonima, të cilin e zuri rob. \r\n\r\nMë 23 prill ushtria shqiptare së bashku me mbrojtësit e Krujës sulmuan dhe shpartalluan ushtrinë e Ballabanit duke e lënë këtë të fundit të vdekur.[53]  Në janar të vitit 1468 Skënderbeu u sëmur gjatë zhvillimit të një Kuvendi të thirrur nga ai, në të cilin ishin të ftuar të gjithë princat shqiptarë. \r\n\r\nU varros në Katedralen e Shën Kollit në Lezhë, po në atë vend ku u mbajt Kuvendi i Lezhës. \r\n\r\nE shoqja me të birin emigruan, sikurse edhe një pjesë e parisë shqiptare, për në Itali.\r\n\r\n', '2021-01-27'),
(41, 17, 'Në vitin 1443 trupat hungareze të komanduara nga Janosh Huniadi u futën në thellësi të Ballkanit dhe në nëntor u ndeshën me ushtrinë osmane duke e thyer. \r\n\r\nPrandaj mblodhi në Lezhë një kuvend të fisnikëve shqiptarë, një praktikë tradicionale e shqiptarëve për të realizuar bashkimin dhe bashkëpunimin e tyre.[29] U formua Besëlidhja shqiptare e Lezhës,[30][31][32][33] një aleancë politike dhe ushtarake kryetar i së cilës u zgjodh Skënderbeu. \r\n\r\nAi u zgjodh edhe komandant i përgjithshëm i ushtrisë së përbashkët e cila do të formohej.[34]  Në vitin 1444 forcat shqiptare të komanduara nga Skënderbeu thyen ushtrinë osmane në Betejën e Torviollit.[35] Me 10 tetor 1445 një ushtri osmane prej 9,000–15,000 vetësh[36] nën komandën e Firuz Pashës u nis drejt Shqipërisë nga ana e Prizrenit. \r\n\r\nOsmanët në luginën e Mokrës ndërsa Skënderbeu i sulmoi dhe i shpartalloi me 3500 luftëtarë.[37] Vitin passues ai theu osmanët edhe dy herë tjera, një herë forcat osmane nga Ohri,[38] dhe prapë në Betejën e Otonetës me 27 Shtator 1446.[39][40]  Në vitin 1450 sulltan Murati II erdhi në Shqipëri me një ushtri të madhe dhe rrethoi Krujën. \r\n\r\nUshtria osmane sipas një bashkëkohësi kudo ku kalonte \" dogji duke i vënë zjarrin çdo gjëjë që takonte\". \r\n\r\nSkënderbeu qëndroi jashtë kështjellës bashkë me luftëtarët e tij dhe godiste ushtrinë osmane papritur dhe pandërprerë nga drejtime të ndryshme. \r\n\r\nDuke parë humbjet sulltani urdhëroi asgjësimin e trupave të Skënderbeut duke i ndjekur kudo, por këto ekspedita u kushtuan osmanëve shumë humbje. \r\n\r\nLufta për mbrojtjen e Krujës ishte një ndër fitoret më të rëndësishme të Skënderbeut.[41]  Më 1451, u martua me Donikën, të bijën e Gjergj Arianitit.[42] Skënderbeu u përpoq të siguronte ndihma për të çliruar territore tjera që ishin nën osmanët. \r\n\r\nAtë vit Skënderbeu dhe Alfonsi V i Napolit nënshkruan disa marrëveshje bashkëpunimi si dy zotër të barabartë.[43][44] Në vitin 1452 sulltani i ri Mehmeti II dërgoi dy ushtri në Shqipëri të cilat u thyen njëra pas tjetrës nga Skënderbeu.[45]  Në vitin 1455 ushtria shqiptare rrethoi Beratin. \r\n\r\nSkënderbeu dhe Gjergj Arianiti ishin larguar kur u njoftuan për sulmin e papritur të ushtrisë osmane. \r\n\r\nMoisi Golemi i trembur kaloi në anën e osmanëve të cilët në vitin 1456 e dërguan në krye të një ushtrie osmane në Shqipëri por ushtria e Skënderbeut e theu keqas.[47] Në vitin 1456 Gjergj Stres Balsha, u shiti osmanëve kështjellën e Modriçit për 30,000 aspra argjendi. \r\n\r\nAi u mundua ta fshehë këtë; megjithatë tradhëtia e tij u zbulua, dhe ai u burgos në Napoli.[48] Më 1456 Gjergjit i lindi djalë.[49] Hamza Kastrioti, nipi i Skënderbeut, humbi shpresat se do të trashëgonte principatën pas vdekjes së Skënderbeut dhe iu bashkua osmanëve.[49] Më 27 qershor 1458, Alfonsi V vdiq në Napoli dhe Skanderbegu dërgoi eimsarë te i biri Ferdinandi.[50]  Pas pesë betejave të ashpra që u zhvilluan në vitin 1465 mes ushtrisë shqiptare dhe ushtrive osmane të drejtuara nga Ballaban Pasha, ku shqiptarët dolën fitimtarë, sulltan Mehmeti II mendoi se kishte ardhur koha për një goditje vendimtare të të gjitha forcave ushtarake të Perandorisë Osmane. \r\n\r\nNë pranverën e vitit 1466 sulltani u nis në krye të gjithë ushtrisë osmane për të rrethuar Krujën. \r\n\r\nKëtë detyrë ia ngarkoi Ballaban Pashës duke ia lënë drejtimin e ushtrisë osmane në Shqipëri. \r\n\r\nMe vjershat dhe poemat e tij i këndoi mallit e dashurisë për atdhe, krenarisë kombëtare dhe të kaluarës së lavdishme të shqiptarëve.[14] Më 1880 shkroi të parën vepër shqip me përmbajtje atdhetare, poemthin \"Shqipëria\", ku shpalli të gjitha idetë që përbëjnë trungun e veprës së tij atdhetare.[15] Ky poemth do të shpërndahej në dorëshkrim mes bashkëatdhetarëve të tij, meqenëse qeveria osmane nuk lejonte asnjë shkrim shqip të botohej në Perandorinë Osmane, ndërsa jashtë kufinjve kishte mundësi të kufizuara botimi.[16] Vetëm në vitin 1886 botoi në Bukuresht 6 vepra, \"Bagëti e Bujqësija\", \"Vjersha për mësonjëtoret e para\", \"E këndimit të çunave këndonjëtoreja\" me dy vëllime, \"Istori e përgjithshme\" dhe \"Dituritë\".[17] Në vitin 1898 do të botonte poemën epike Istori e Skënderbeut e cila u bë një nga veprat më të lexuara gjatë Rilindjes.[18]  Rëndësi të veçantë i dha botimit të librave për të cilët kishte nevojë shkolla shqipe.[19] Në prill 1467, Skënderbeu u kthye në atdhe ku me përkrahjen e popullit riorganizoi një ushtri të fuqishme dhe me 19 prill shpartalloi plotësisht ushtrinë osmane të komanduar nga vëllai i Ballabanit, Jonima, të cilin e zuri rob. \r\n\r\nMë 23 prill ushtria shqiptare së bashku me mbrojtësit e Krujës sulmuan dhe shpartalluan ushtrinë e Ballabanit duke e lënë këtë të fundit të vdekur.[53]  Në janar të vitit 1468 Skënderbeu u sëmur gjatë zhvillimit të një Kuvendi të thirrur nga ai, në të cilin ishin të ftuar të gjithë princat shqiptarë. \r\n\r\n', '2021-01-27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `birthdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `password`, `gender`, `birthdate`) VALUES
(41, 'Ecom', 'aaa', 'ard@gmail.com', 'ard', 'female', '2021-01-25 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`IDHISTORY`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `IDHISTORY` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
