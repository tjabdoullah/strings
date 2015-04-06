<?php 

class Strings {
	function generateRandomString($length = 10) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, strlen($characters) - 1)];
	    }
	    return $randomString;
	}
	function SplitMaster($pattern, $string){
		$parts = split($pattern, $string);
		unset($parts[count($parts) - 1]);
		return $parts;
	}
	function fromEmailToString($email) {
		$newString = str_replace("@", "", $email);
		$newString = str_replace(".", "", $newString);
	    return $newString;
	}
	function Encript($string) {
		App::uses('Security', 'Utility');
		return Security::hash($string);
	}
	function FromEmailToText($string) {
		return str_replace(".", "", str_replace("@", "", $string));
	}
	function GrammarCount($string, $count) {
		return $count . ' ' . $string . ($count != 1 ? 's' : '');
	}
	function minusInsteadOfNull($string) {
		$result = "-";
		if ($string != null) $result = $string;
		return $result;
	}
	function numbersWithSpace($string) {
		try {
			if ($string != '' && $string != 0 ) 
				echo number_format($string, 2, ',', ' ');
			else
				echo '--';
		} catch (Exception $e) {
			echo '--';	
		}
	}
	function minusInsteadOfZero($string) {
		$result = "-";
		if ($string != '0' || $string != '' || $string != 0 || $string != null) $result = $string;
		return $result;
	}
	function cotisationStatus($number) {
		if ($number == 0) 
			return "<span class='label label-important'>Non régléé</span>";
		if ($number == 1) 
			return "<span class='label label-info'>Règlement partiel</span>";
		if ($number == 2) 
			return "<span class='label label-success'>En Règle</span>";
		return $result;
	}
	function minusInsteadOfEmptyString($string) {
		if ($string == '') return "-";
		return $string;
	}
	function getGUID(){
	    if (function_exists('com_create_guid')){
	        return com_create_guid();
	    }else{
	        mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
	        $charid = strtoupper(md5(uniqid(rand(), true)));
	        $hyphen = chr(45);// "-"
	        $uuid = chr(123)// "{"
	            .substr($charid, 0, 8).$hyphen
	            .substr($charid, 8, 4).$hyphen
	            .substr($charid,12, 4).$hyphen
	            .substr($charid,16, 4).$hyphen
	            .substr($charid,20,12)
	            .chr(125);// "}"
	        return $uuid;
	    }
	}
	function OneOuiZeroNon($bit){
		if ($bit) 
			return "Oui";
		else
			return "Non";
	}
	function ValidWaitingRejected($number){
		switch ($number) {
			case 1:
				return "rejected";
				break;
			case 2:
				return "waiting";
				break;
			case 3:
				return "valid";
				break;
			default:
				return "-";
				break;
		}
	}
	function SchoolType($number){
		switch ($number) {
			case 1:
				return "Publique";
				break;
			case 2:
				return "Privée";
				break;
			default:
				return "-";
				break;
		}
	}
	function GradeNote($number){
		switch ($number) {
			case 0:
				return "En Attente";
				break;
			case 1:
				return "Admis";
				break;
			case 2:
				return "Liste d'attente";
				break;
			case 3:
				return "Non Admis";
				break;
			default:
				return "-";
				break;
		}
	}
	function OkKoSign($bit){
		if ($bit) 
			return "<i class='icon-ok-sign'></i>";
		else
			return "<i class='icon-remove-sign'></i>";
	}
	function GarconOuFille($number){
		switch ($number) {
			case 1:
				return "Garçon";
				break;
			case 2:
				return "Fille";
				break;
			default:
				return "-";
				break;
		}
	}
	function MlleOuMr($number){
		switch ($number) {
			case 1:
				return "Mlle.";
				break;
			case 2:
				return "M.";
				break;
			default:
				return "-";
				break;
		}
	}
	function GetApplicationDecision($number){
		switch ($number) {
			case 1:
				return "Rejet";
				break;
			case 2:
				return "Liste d'attente";
				break;
			case 3:
				return "Admis";
				break;
			default:
				return "-";
				break;
		}
	}
	function ConventionType($number){
		switch ($number) {
			case 1:
				return "Programme dédié";
				break;
			case 2:
				return "Partenariat ouvert";
				break;
		}
	}
	function ConventionStatus($number){
		switch ($number) {
			case 1:
				return "En cours";
				break;
			case 2:
				return "Signée";
				break;
		}
	}
	function ApplicationProjectFormationType($number){
		switch ($number) {
			case 1:
				return "Formation professionnelle (BAC +2/+3)";
				break;
			case 2:
				return "Etudes supérieures (BAC +4/+5)";
				break;
			case 3:
				return "Classes préparatoires (CPGE)";
				break;
		}
	}
	function PaymentMode($number){
		switch ($number) {
			case 1:
				return "Chèque";
				break;
			case 2:
				return "Espèce";
				break;
			case 3:
				return "Virement";
				break;
		}
	}
	function ProjetFormationType($number){
		switch ($number) {
			case 1:
				return "Formation professionnelle";
				break;
			case 2:
				return "Etudes supérieures";
				break;
			case 3:
				return "Classes préparatoires";
				break;
		}
	}
	function MentionType($number){
		switch ($number) {
			case 1:
				return "Passable";
				break;
			case 2:
				return "Assez bien";
				break;
			case 3:
				return "Bien";
				break;
			case 4:
				return "Très bien";
				break;
		}
	}
	function Service_Type($number){
		switch ($number) {
			case 1:
				return "Numéraire";
				break;
			case 2:
				return "Nature";
				break;
		}
	}	
	function Service_Eligibilite($number){
		switch ($number) {
			case 0:
				return "Multiple";
				break;
			case 1:
				return "Unique";
				break;
		}
	}	
	function Service_Impact($number){
		switch ($number) {
			case 0:
				return "Neutre";
				break;
			case 1:
				return "Positif";
				break;
			case 2:
				return "Négatif";
				break;
		}
	}	
	function CallStatus($number){
		switch ($number) {
			case 0:
				return "Appel prévu pour le";
				break;
			case 1:
				return "Appel effectué";
				break;
		}
	}	
	function Service_Status($number){
		switch ($number) {
			case 1:
				return "Actif";
				break;
			case 2:
				return "Suspendu";
				break;
		}
	}	
	function School_Enseignement($number){
		switch ($number) {
			case 1:
				return "Public";
				break;
			case 2:
				return "Privé";
				break;
			case 3:
				return "International";
				break;
		}
	}	
	function Service_Program($string){
		if ($string == "")
			return "Aucun programme associé.";
		return $string;
	}
	function convertNumberToText($number) {
	    
	    $hyphen      = '-';
	    $conjunction = ' ';// ' et ';
	    $separator   = ' ';
	    $negative    = 'négatif ';
	    $decimal     = ' point ';


	    $dictionary  = array(
			0 => 	'zéro',
			1 => 	'un',
			2 => 	'deux',
			3 => 	'trois',
			4 => 	'quatre',
			5 => 	'cinq',
			6 => 	'six',
			7 => 	'sept',
			8 => 	'huit',
			9 => 	'neuf',
			10 => 	'dix',
			11 => 	'onze',
			12 => 	'douze',
			13 => 	'treize',
			14 => 	'quatorze',
			15 => 	'quinze',
			16 => 	'seize',
			17 => 	'dix-sept',
			18 => 	'dixit',
			19 => 	'dis neuf', 
			20 => 	'vingt',
			30 => 	'trente',
			40 => 	'quarante',
			50 => 	'cinquante',
			60 => 	'soixante',
			70 => 	'soixante-dix',
			80 => 	'quatre-vingt',
			90 => 	'quatre-vingt dix',
			100 => 	'cent',
			1000 => 	'mille',
			1000000 => 	'million',
			1000000000 => 	'billion',
			1000000000000 => 	'trillion',
			1000000000000000 => 	'quadrillion',
			1000000000000000000 => 	'quintillion',
	    );
	    
	    if (!is_numeric($number)) {
	        return false;
	    }
	    
	    if (($number >= 0 && (int) $number < 0) || (int) $number < 0 - PHP_INT_MAX) {
	        // overflow
	        trigger_error(
	            'Strings::convertNumberToText only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX,
	            E_USER_WARNING
	        );
	        return false;
	    }

	    if ($number < 0) {
	        return $negative . Strings::convertNumberToText(abs($number));
	    }
	    
	    $string = $fraction = null;
	    
	    if (strpos($number, '.') !== false) {
	        list($number, $fraction) = explode('.', $number);
	    }
	    
	    switch (true) {
	        case $number < 21:
	            $string = $dictionary[$number];
	            break;
	        case $number < 100:
	            $tens   = ((int) ($number / 10)) * 10;
	            $units  = $number % 10;
	            $string = $dictionary[$tens];
	            if ($units) {
	                $string .= $hyphen . $dictionary[$units];
	            }
	            break;
	        case $number < 1000:
	            $hundreds  = $number / 100;
	            $remainder = $number % 100;
	            $string = /*$dictionary[$hundreds] . ' ' . */$dictionary[100];
	            if ($remainder) {
	                $string .= $conjunction . Strings::convertNumberToText($remainder);
	            }
	            break;
	        default:
	            $baseUnit = pow(1000, floor(log($number, 1000)));
	            $numBaseUnits = (int) ($number / $baseUnit);
	            $remainder = $number % $baseUnit;
	            $string = Strings::convertNumberToText($numBaseUnits) . ' ' . $dictionary[$baseUnit];
	            if ($remainder) {
	                $string .= $remainder < 100 ? $conjunction : $separator;
	                $string .= Strings::convertNumberToText($remainder);
	            }
	            break;
	    }
	    
	    if (null !== $fraction && is_numeric($fraction)) {
	        $string .= $decimal;
	        $words = array();
	        foreach (str_split((string) $fraction) as $number) {
	            $words[] = $dictionary[$number];
	        }
	        $string .= implode(' ', $words);
	    }
	    
	    return $string;
	}
	function nfigures($number, $figures){
		return sprintf("%0".$figures."d", $number);
	}
	function int2str($a){
		if ($a<0)
			return 'moins '.Strings::int2str(-$a);
		if ($a<17){
		    switch ($a){
		            case 0: return '';
		            case 1: return 'un';
		            case 2: return 'deux';
		            case 3: return 'trois';
		            case 4: return 'quatre';
		            case 5: return 'cinq';
		            case 6: return 'six';
		            case 7: return 'sept';
		            case 8: return 'huit';
		            case 9: return 'neuf';
		            case 10: return 'dix';
		            case 11: return 'onze';
		            case 12: return 'douze';
		            case 13: return 'treize';
		            case 14: return 'quatorze';
		            case 15: return 'quinze';
		            case 16: return 'seize';
		    }
		}
		else if ($a<20)
		{
		    return 'dix-'.Strings::int2str($a-10);
		}
		else if ($a<100)
		{
		    if ($a%10==0){
		        switch ($a){
		            case 20: return 'vingt';
		            case 30: return 'trente';
		            case 40: return 'quarante';
		            case 50: return 'cinquante';
		            case 60: return 'soixante';
		            case 70: return 'soixante-dix';
		            case 80: return 'quatre-vingt';
		            case 90: return 'quatre-vingt-dix';
		        }
		    } else if ($a<70){
		        return Strings::int2str($a-$a%10).' '.Strings::int2str($a%10);
		    } else if ($a<80){
		        return Strings::int2str(60).' '.Strings::int2str($a%20);
		    } else{
		        return Strings::int2str(80).' '.Strings::int2str($a%20);
		    }
		} else if ($a==100){
		        return 'cent';
		} else if ($a<200){
		        return Strings::int2str(100).' '.Strings::int2str($a%100);
		} else if ($a<1000){
		        return Strings::int2str((int)($a/100)).' '.Strings::int2str(100).' '.Strings::int2str($a%100);
		} else if ($a==1000){
		        return 'mille';
		} else if ($a<2000){
		        return Strings::int2str(1000).' '.Strings::int2str($a%1000).' ';
		} else if ($a<1000000){
		        return Strings::int2str((int)($a/1000)).' '.Strings::int2str(1000).' '.Strings::int2str($a%1000);
		}  
		//on pourrait pousser pour aller plus loin, mais c'est sans intérêt pour ce projet, et pas intéressant, c'est pas non plus compliqué...
	}
	function MonthsTraductor($string){
		$months = array(
			'January' => 'Janvier',
			'February' => 'Février',
			'March' => 'Mars',
			'April' => 'Avril',
			'May' => 'Mai',
			'June' => 'Juin',
			'July' => 'Juillet',
			'August' => 'Août',
			'September' => 'Septembre',
			'October' => 'Octobre',
			'November' => 'Novembre',
			'December' => 'Décembre',
		);
		return $months[$string];
	}
	function ShorterString($string, $length){
		if (strlen($string) > $length)
			return substr($string, 0, $length) . ' ...';
		return $string;
	}
	function listMonths(){
		return array(
			'01' => 'Janvier',
			'02' => 'Février',
			'03' => 'Mars',
			'04' => 'Avril',
			'05' => 'Mai',
			'06' => 'Juin',
			'07' => 'Juillet',
			'08' => 'Août',
			'09' => 'Septembre',
			'10' => 'Octobre',
			'11' => 'Novembre',
			'12' => 'Décembre',
		);
	}
	function listDotationMonths($year){
		return array(
			'spt' => array('month' => '09', 'year' => $year - 1),
			'oct' => array('month' => '10', 'year' => $year - 1),
			'nvm' => array('month' => '11', 'year' => $year - 1),
			'dcm' => array('month' => '12', 'year' => $year - 1),
			'jan' => array('month' => '01', 'year' => $year),
			'feb' => array('month' => '02', 'year' => $year),
			'mar' => array('month' => '03', 'year' => $year),
			'apr' => array('month' => '04', 'year' => $year),
			'may' => array('month' => '05', 'year' => $year),
			'jun' => array('month' => '06', 'year' => $year),
			'jul' => array('month' => '07', 'year' => $year),
			'aug' => array('month' => '08', 'year' => $year),
		);
	}
	function Capitalize($string){
		return strtoupper($string);
	}
	function CapitalizeFirstLEtter($string){
		return ucfirst(strtolower($string));
	}
	function loremPixel(){
		$pictures = array(
			array(
				'picture' => "abstract",
				'title' => "Si debeat id adpetentem patriam.",
				'paragraph' => "Paphius quin etiam et Cornelius senatores, ambo venenorum artibus pravis se polluisse confessi, eodem pronuntiante Maximino sunt interfecti. pari sorte etiam procurator monetae extinctus est. Sericum enim et Asbolium supra dictos, quoniam cum hortaretur passim nominare, quos vellent, adiecta religione firmarat, nullum igni vel ferro se puniri iussurum, plumbi validis ictibus interemit. et post hoe flammis Campensem aruspicem dedit, in negotio eius nullo sacramento constrictus.",
			),
			array(
				'picture' => "animals",
				'title' => "Pertinacius Gallum simulationem difficillimum fieret.",
				'paragraph' => "Nihil morati post haec militares avidi saepe turbarum adorti sunt Montium primum, qui divertebat in proximo, levi corpore senem atque morbosum, et hirsutis resticulis cruribus eius innexis divaricaturn sine spiramento ullo ad usque praetorium traxere praefecti.",
			),
			array(
				'picture' => "business",
				'title' => "Nemo quaeso miretur, si post exsudatos labores",
				'paragraph' => "Ultima Syriarum est Palaestina per intervalla magna protenta, cultis abundans terris et nitidis et civitates habens quasdam egregias, nullam nulli cedentem sed sibi vicissim velut ad perpendiculum aemulas: Caesaream, quam ad honorem Octaviani principis exaedificavit Herodes, et Eleutheropolim et Neapolim itidemque Ascalonem Gazam aevo superiore exstructas.",
			),
			array(
				'picture' => "cats",
				'title' => "Saepissime igitur mihi de amicitia cogitanti",
				'paragraph' => "Quae dum ita struuntur, indicatum est apud Tyrum indumentum regale textum occulte, incertum quo locante vel cuius usibus apparatum. ideoque rector provinciae tunc pater Apollinaris eiusdem nominis ut conscius ductus est aliique congregati sunt ex diversis civitatibus multi, qui atrocium criminum ponderibus urgebantur.",
			),
			array(
				'picture' => "city",
				'title' => "Ex turba vero imae sortis et paupertinae in",
				'paragraph' => "Eminuit autem inter humilia supergressa iam impotentia fines mediocrium delictorum nefanda Clematii cuiusdam Alexandrini nobilis mors repentina; cuius socrus cum misceri sibi generum, flagrans eius amore, non impetraret, ut ferebatur, per palatii pseudothyrum introducta, oblato pretioso reginae monili id adsecuta est, ut ad Honoratum tum comitem orientis formula missa letali omnino scelere nullo contactus idem Clematius nec hiscere nec loqui permissus occideretur.",
			),
			array(
				'picture' => "food",
				'title' => "Sed quid est quod in hac causa maxime homines",
				'paragraph' => "Ac ne quis a nobis hoc ita dici forte miretur, quod alia quaedam in hoc facultas sit ingeni, neque haec dicendi ratio aut disciplina, ne nos quidem huic uni studio penitus umquam dediti fuimus. Etenim omnes artes, quae ad humanitatem pertinent, habent quoddam commune vinculum, et quasi cognatione quadam inter se continentur.",
			),
			array(
				'picture' => "cats",
				'title' => "Et quoniam mirari posse quosdam peregrinos",
				'paragraph' => "Procedente igitur mox tempore cum adventicium nihil inveniretur, relicta ora maritima in Lycaoniam adnexam Isauriae se contulerunt ibique densis intersaepientes itinera praetenturis provincialium et viatorum opibus pascebantur.",
			),
			array(
				'picture' => "sports",
				'title' => "Ut enim benefici liberalesque sumus, non ut",
				'paragraph' => "Unde Rufinus ea tempestate praefectus praetorio ad discrimen trusus est ultimum. ire enim ipse compellebatur ad militem, quem exagitabat inopia simul et feritas, et alioqui coalito more in ordinarias dignitates asperum semper et saevum, ut satisfaceret atque monstraret, quam ob causam annonae convectio sit impedita.",
			),
			array(
				'picture' => "fashion",
				'title' => "Sed quid est quod in hac causa maxime homines",
				'paragraph' => "In his tractibus navigerum nusquam visitur flumen sed in locis plurimis aquae suapte natura calentes emergunt ad usus aptae multiplicium medelarum. verum has quoque regiones pari sorte Pompeius Iudaeis domitis et Hierosolymis captis in provinciae speciem delata iuris dictione formavit.",
			),
			array(
				'picture' => "people",
				'title' => "Abusus enim multitudine hominum, quam tranquillis",
				'paragraph' => "Post quorum necem nihilo lenius ferociens Gallus ut leo cadaveribus pastus multa huius modi scrutabatur. quae singula narrare non refert, me professione modum, quod evitandum est, excedamus.",
			),
			array(
				'picture' => "transport",
				'title' => "Et quoniam inedia gravi adflictabantur, locum",
				'paragraph' => "Et quia Montius inter dilancinantium manus spiritum efflaturus Epigonum et Eusebium nec professionem nec dignitatem ostendens aliquotiens increpabat, qui sint hi magna quaerebatur industria, et nequid intepesceret, Epigonus e Lycia philosophus ducitur et Eusebius ab Emissa Pittacas cognomento, concitatus orator, cum quaestor non hos sed tribunos fabricarum insimulasset promittentes armorum si novas res agitari conperissent.",
			),
			array(
				'picture' => "sports",
				'title' => "Inter has ruinarum varietates a Nisibi quam",
				'paragraph' => "Et quia Mesopotamiae tractus omnes crebro inquietari sueti praetenturis et stationibus servabantur agrariis, laevorsum flexo itinere Osdroenae subsederat extimas partes, novum parumque aliquando temptatum commentum adgressus. quod si impetrasset, fulminis modo cuncta vastarat. erat autem quod cogitabat huius modi.",
			),
			array(
				'picture' => "technics",
				'title' => "Non ergo erunt homines deliciis diffluentes",
				'paragraph' => "Rogatus ad ultimum admissusque in consistorium ambage nulla praegressa inconsiderate et leviter proficiscere inquit ut praeceptum est, Caesar sciens quod si cessaveris, et tuas et palatii tui auferri iubebo prope diem annonas. hocque solo contumaciter dicto subiratus abscessit nec in conspectum eius postea venit saepius arcessitus.",
			),
			array(
				'picture' => "transport",
				'title' => "Hacque adfabilitate confisus cum eadem postridie",
				'paragraph' => "Iam virtutem ex consuetudine vitae sermonisque nostri interpretemur nec eam, ut quidam docti, verborum magnificentia metiamur virosque bonos eos, qui habentur, numeremus, Paulos, Catones, Galos, Scipiones, Philos; his communis vita contenta est; eos autem omittamus, qui omnino nusquam reperiuntur.",
			)
		);
		return $pictures;
	}
	function TimeRanges(){
		return array(
		'0' => '0h 00m',
		'1' => '0h 15m',
		'2' => '0h 30m',
		'3' => '0h 45m',
		'4' => '1h 00m',
		'5' => '1h 15m',
		'6' => '1h 30m',
		'7' => '1h 45m',
		'8' => '2h 00m',
		'9' => '2h 15m',
		'10' => '2h	30m',
		'11' => '2h	45m',
		'12' => '3h	0m',
		'13' => '3h	15m',
		'14' => '3h	30m',
		'15' => '3h	45m',
		'16' => '4h	0m',
		'17' => '4h	15m',
		'18' => '4h	30m',
		'19' => '4h	45m',
		'20' => '5h	0m',
		'21' => '5h	15m',
		'22' => '5h	30m',
		'23' => '5h	45m',
		'24' => '6h	0m',
		'25' => '6h	15m',
		'26' => '6h	30m',
		'27' => '6h	45m',
		'28' => '7h	0m',
		'29' => '7h	15m',
		'30' => '7h	30m',
		'31' => '7h	45m',
		'32' => '8h	0m',
		'33' => '8h	15m',
		'34' => '8h	30m',
		'35' => '8h	45m',
		'36' => '9h	0m',
		'37' => '9h	15m',
		'38' => '9h	30m',
		'39' => '9h	45m',
		'40' => '10h 00m',
		'41' => '10h 15m',
		'42' => '10h 30m',
		'43' => '10h 45m',
		'44' => '11h 00m',
		'45' => '11h 15m',
		'46' => '11h 30m',
		'47' => '11h 45m',
		'48' => '12h 00m',
		'49' => '12h 15m',
		'50' => '12h 30m',
		'51' => '12h 45m',
		'52' => '13h 00m',
		'53' => '13h 15m',
		'54' => '13h 30m',
		'55' => '13h 45m',
		'56' => '14h 00m',
		'57' => '14h 15m',
		'58' => '14h 30m',
		'59' => '14h 45m',
		'60' => '15h 00m',
		'61' => '15h 15m',
		'62' => '15h 30m',
		'63' => '15h 45m',
		'64' => '16h 00m',
		'65' => '16h 15m',
		'66' => '16h 30m',
		'67' => '16h 45m',
		'68' => '17h 00m',
		'69' => '17h 15m',
		'70' => '17h 30m',
		'71' => '17h 45m',
		'72' => '18h 00m',
		'73' => '18h 15m',
		'74' => '18h 30m',
		'75' => '18h 45m',
		'76' => '19h 00m',
		'77' => '19h 15m',
		'78' => '19h 30m',
		'79' => '19h 45m',
		'80' => '20h 00m',
		'81' => '20h 15m',
		'82' => '20h 30m',
		'83' => '20h 45m',
		'84' => '21h 00m',
		'85' => '21h 15m',
		'86' => '21h 30m',
		'87' => '21h 45m',
		'88' => '22h 00m',
		'89' => '22h 15m',
		'90' => '22h 30m',
		'91' => '22h 45m',
		'92' => '23h 00m',
		'93' => '23h 15m',
		'94' => '23h 30m',
		'95' => '23h 45m',
		);
	}
	function timinings(){
		return array(
		'0' => '00:00:00',
		'1' => '00:15:00',
		'2' => '00:30:00',
		'3' => '00:45:00',
		'4' => '01:00:00',
		'5' => '01:15:00',
		'6' => '01:30:00',
		'7' => '01:45:00',
		'8' => '02:00:00',
		'9' => '02:15:00',
		'10' => '02:30:00',
		'11' => '02:45:00',
		'12' => '03:00:00',
		'13' => '03:15:00',
		'14' => '03:30:00',
		'15' => '03:45:00',
		'16' => '04:00:00',
		'17' => '04:15:00',
		'18' => '04:30:00',
		'19' => '04:45:00',
		'20' => '05:00:00',
		'21' => '05:15:00',
		'22' => '05:30:00',
		'23' => '05:45:00',
		'24' => '06:00:00',
		'25' => '06:15:00',
		'26' => '06:30:00',
		'27' => '06:45:00',
		'28' => '07:00:00',
		'29' => '07:15:00',
		'30' => '07:30:00',
		'31' => '07:45:00',
		'32' => '08:00:00',
		'33' => '08:15:00',
		'34' => '08:30:00',
		'35' => '08:45:00',
		'36' => '09:00:00',
		'37' => '09:15:00',
		'38' => '09:30:00',
		'39' => '09:45:00',
		'40' => '10:00:00',
		'41' => '10:15:00',
		'42' => '10:30:00',
		'43' => '10:45:00',
		'44' => '11:00:00',
		'45' => '11:15:00',
		'46' => '11:30:00',
		'47' => '11:45:00',
		'48' => '12:00:00',
		'49' => '12:15:00',
		'50' => '12:30:00',
		'51' => '12:45:00',
		'52' => '13:00:00',
		'53' => '13:15:00',
		'54' => '13:30:00',
		'55' => '13:45:00',
		'56' => '14:00:00',
		'57' => '14:15:00',
		'58' => '14:30:00',
		'59' => '14:45:00',
		'60' => '15:00:00',
		'61' => '15:15:00',
		'62' => '15:30:00',
		'63' => '15:45:00',
		'64' => '16:00:00',
		'65' => '16:15:00',
		'66' => '16:30:00',
		'67' => '16:45:00',
		'68' => '17:00:00',
		'69' => '17:15:00',
		'70' => '17:30:00',
		'71' => '17:45:00',
		'72' => '18:00:00',
		'73' => '18:15:00',
		'74' => '18:30:00',
		'75' => '18:45:00',
		'76' => '19:00:00',
		'77' => '19:15:00',
		'78' => '19:30:00',
		'79' => '19:45:00',
		'80' => '20:00:00',
		'81' => '20:15:00',
		'82' => '20:30:00',
		'83' => '20:45:00',
		'84' => '21:00:00',
		'85' => '21:15:00',
		'86' => '21:30:00',
		'87' => '21:45:00',
		'88' => '22:00:00',
		'89' => '22:15:00',
		'90' => '22:30:00',
		'91' => '22:45:00',
		'92' => '23:00:00',
		'93' => '23:15:00',
		'94' => '23:30:00',
		'95' => '23:45:00',
		);
	}
	function timinings_inversed(){
		return array(
		'00:00:00' => '0',
		'00:15:00' => '1',
		'00:30:00' => '2',
		'00:45:00' => '3',
		'01:00:00' => '4',
		'01:15:00' => '5',
		'01:30:00' => '6',
		'01:45:00' => '7',
		'02:00:00' => '8',
		'02:15:00' => '9',
		'02:30:00' => '10',
		'02:45:00' => '11',
		'03:00:00' => '12',
		'03:15:00' => '13',
		'03:30:00' => '14',
		'03:45:00' => '15',
		'04:00:00' => '16',
		'04:15:00' => '17',
		'04:30:00' => '18',
		'04:45:00' => '19',
		'05:00:00' => '20',
		'05:15:00' => '21',
		'05:30:00' => '22',
		'05:45:00' => '23',
		'06:00:00' => '24',
		'06:15:00' => '25',
		'06:30:00' => '26',
		'06:45:00' => '27',
		'07:00:00' => '28',
		'07:15:00' => '29',
		'07:30:00' => '30',
		'07:45:00' => '31',
		'08:00:00' => '32',
		'08:15:00' => '33',
		'08:30:00' => '34',
		'08:45:00' => '35',
		'09:00:00' => '36',
		'09:15:00' => '37',
		'09:30:00' => '38',
		'09:45:00' => '39',
		'10:00:00' => '40',
		'10:15:00' => '41',
		'10:30:00' => '42',
		'10:45:00' => '43',
		'11:00:00' => '44',
		'11:15:00' => '45',
		'11:30:00' => '46',
		'11:45:00' => '47',
		'12:00:00' => '48',
		'12:15:00' => '49',
		'12:30:00' => '50',
		'12:45:00' => '51',
		'13:00:00' => '52',
		'13:15:00' => '53',
		'13:30:00' => '54',
		'13:45:00' => '55',
		'14:00:00' => '56',
		'14:15:00' => '57',
		'14:30:00' => '58',
		'14:45:00' => '59',
		'15:00:00' => '60',
		'15:15:00' => '61',
		'15:30:00' => '62',
		'15:45:00' => '63',
		'16:00:00' => '64',
		'16:15:00' => '65',
		'16:30:00' => '66',
		'16:45:00' => '67',
		'17:00:00' => '68',
		'17:15:00' => '69',
		'17:30:00' => '70',
		'17:45:00' => '71',
		'18:00:00' => '72',
		'18:15:00' => '73',
		'18:30:00' => '74',
		'18:45:00' => '75',
		'19:00:00' => '76',
		'19:15:00' => '77',
		'19:30:00' => '78',
		'19:45:00' => '79',
		'20:00:00' => '80',
		'20:15:00' => '81',
		'20:30:00' => '82',
		'20:45:00' => '83',
		'21:00:00' => '84',
		'21:15:00' => '85',
		'21:30:00' => '86',
		'21:45:00' => '87',
		'22:00:00' => '88',
		'22:15:00' => '89',
		'22:30:00' => '90',
		'22:45:00' => '91',
		'23:00:00' => '92',
		'23:15:00' => '93',
		'23:30:00' => '94',
		'23:45:00' => '95',
		);
	}

	function scenarioStatus(){
		return array(
			'0' => 'CALL STATUS AWAITING_CALL',
			'1' => 'CALL STATUS CALL OUTGOING FROM ASTERISK',
			'2' => 'CALL STATUS CALL ANSWERED FROM RECIPIENT',
			'3' => 'CALL STATUS MACHINE OR DIDNT ANSWER',
			'4' => 'CALL STATUS HUMAN',
			'5' => 'CALL STATUS ACTION DURING CALL',
			'6' => 'CALL STATUS CALL FINISHED',
		);
	}

	function scenarioStatusCute(){
		return array(
			'0' => 'En attente d appel',
			'1' => 'Appel en cours / Pas de réponse',
			'2' => 'Réponse depuis le recipient',
			'3' => 'Répondeur',
			'4' => 'Humain à l écoute',
			'5' => 'Action effectuée',
			'6' => 'Appel terminé',
		);
	}

	function statusTranslations(){
		return array(
			'CALL_STATUS_AWAITING_CALL' => 'En attente d appel',
			'CALL_STATUS_CALL_OUTGOING_FROM_ASTERISK' => 'Appel en cours / Pas de réponse',
			'CALL_STATUS_CALL_ANSWERED_FROM_RECIPIENT' => 'Réponse depuis le recipient',
			'CALL_STATUS_MACHINE_OR_DIDNT_ANSWER' => 'Répondeur',
			'CALL_STATUS_HUMAN' => 'Humain à l écoute',
			'CALL_STATUS_ACTION_DURING_CALL' => 'Action effectuée',
			'CALL_STATUS_CALL_FINISHED' => 'Appel terminé',
		);
	}

	function getScenariosList(){
		$status = array();
		$status['CALL_STATUS_AWAITING_CALL'] = 0;
		$status['CALL_STATUS_CALL_OUTGOING_FROM_ASTERISK'] = 0;
		$status['CALL_STATUS_CALL_ANSWERED_FROM_RECIPIENT'] = 0;
		$status['CALL_STATUS_MACHINE_OR_DIDNT_ANSWER'] = 0;
		$status['CALL_STATUS_HUMAN'] = 0;
		$status['CALL_STATUS_ACTION_DURING_CALL'] = 0;
		$status['CALL_STATUS_CALL_FINISHED'] = 0;
		return $status;
	}

	function scenarioModes($webroot){
		$modes = array('/animatel/' => 'ANIMATEL', '/intellitel/' => 'INTELLITEL');
		return $modes[$webroot];
	}

	function configurationsTranslations(){
		return array(
			'CALLS_OF_A_TRAJECTORY' => 'Appels pour un trajet',
			'CALLBACK' => 'Rappels',
		);
	}
}
?>