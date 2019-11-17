<?php
$con = mysqli_connect("localhost", "waiphyo7_waiphyo", "waiphyoenaing", "waiphyo7_cdr");

if (!$con) {
	echo "Error: Unable to connect to MySQL." . PHP_EOL;
	echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	exit;
}

else{
	$students = array(
		"1" => array(
			"code" => "CDR-HALRK",
			"rollno" => "5CS-1",
			"sname" => "Ei Ei Phyu",
		),
		"2" => array(
			"code" => "CDR-CKKKF",
			"rollno" => "5CS-2",
			"sname" => "Htet Htet Myo",
		),
		"3" => array(
			"code" => "CDR-FGNQD",
			"rollno" => "5CS-3",
			"sname" => "Khaing Zin Thant",
		),
		"4" => array(
			"code" => "CDR-ZSWXK",
			"rollno" => "5CS-4",
			"sname" => "Thidar Tun",
		),
		"5" => array(
			"code" => "CDR-VQVLR",
			"rollno" => "5CS-5",
			"sname" => "Thawdar Lamin",
		),
		"6" => array(
			"code" => "CDR-MVJNG",
			"rollno" => "5CS-6",
			"sname" => "Chaw Tharaphi Htay",
		),
		"7" => array(
			"code" => "CDR-XLJPW",
			"rollno" => "5CS-7",
			"sname" => "Nilar Thant Zin",
		),
		"8" => array(
			"code" => "CDR-QRUKZ",
			"rollno" => "5CS-8",
			"sname" => "Su Su Sandi",
		),
		"9" => array(
			"code" => "CDR-ZJVSB",
			"rollno" => "5CS-9",
			"sname" => "May Myat Noe",
		),
		"10" => array(
			"code" => "CDR-KBFSV",
			"rollno" => "5CS-10",
			"sname" => "Khin Thawdar Oo",
		),
		"11" => array(
			"code" => "CDR-ACHPH",
			"rollno" => "5CS-11",
			"sname" => "Su Su Htwe",
		),
		"12" => array(
			"code" => "CDR-UVLJU",
			"rollno" => "5CS-12",
			"sname" => "Khaing Su Hlaing",
		),
		"13" => array(
			"code" => "CDR-FSBXR",
			"rollno" => "5CS-13",
			"sname" => "May Htet Shan",
		),
		"14" => array(
			"code" => "CDR-UTVYR",
			"rollno" => "5CS-14",
			"sname" => "Nan Thazin",
		),
		"15" => array(
			"code" => "CDR-SLCHD",
			"rollno" => "5CS-15",
			"sname" => "Phyu Phyu Win",
		),
		"16" => array(
			"code" => "CDR-MVXUA",
			"rollno" => "5CS-16",
			"sname" => "Win Myat Myat Thandar Phyo",
		),
		"17" => array(
			"code" => "CDR-OBAMU",
			"rollno" => "5CS-17",
			"sname" => "Ei Phyo Hein",
		),
		"18" => array(
			"code" => "CDR-UPOQA",
			"rollno" => "5CS-18",
			"sname" => "Myat Thin Cho Zin",
		),
		"19" => array(
			"code" => "CDR-SUPPX",
			"rollno" => "5CS-19",
			"sname" => "Jar Nuu Mai",
		),
		"20" => array(
			"code" => "CDR-QTVIF",
			"rollno" => "5CS-20",
			"sname" => "Hnin Yee Win",
		),
		"21" => array(
			"code" => "CDR-LTBWO",
			"rollno" => "5CS-21",
			"sname" => "Aye Chan Myint",
		),
		"22" => array(
			"code" => "CDR-CODDZ",
			"rollno" => "5CS-22",
			"sname" => "Tun Thiri Lwin",
		),
		"23" => array(
			"code" => "CDR-MWMLC",
			"rollno" => "5CS-23",
			"sname" => "Nyein Ei San",
		),
		"24" => array(
			"code" => "CDR-PLFTC",
			"rollno" => "5CS-24",
			"sname" => "Pann Kavyar Thiri Moe",
		),
		"25" => array(
			"code" => "CDR-VIBOK",
			"rollno" => "5CS-25",
			"sname" => "Ni Ni Win",
		),
		"26" => array(
			"code" => "CDR-XFKRF",
			"rollno" => "5CS-26",
			"sname" => "Thet Hnin Phyu",
		),
		"27" => array(
			"code" => "CDR-NARQB",
			"rollno" => "5CS-27",
			"sname" => "Nay Min Zaw",
		),
		"28" => array(
			"code" => "CDR-CLLEB",
			"rollno" => "5CS-28",
			"sname" => "Wint Thiri Myaing",
		),
		"29" => array(
			"code" => "CDR-NZPYE",
			"rollno" => "5CS-29",
			"sname" => "Su Myat Noe",
		),
		"30" => array(
			"code" => "CDR-XXXXX",
			"rollno" => "5CS-30",
			"sname" => "Wai Phyo Naing",
		),
		"31" => array(
			"code" => "CDR-CWTWQ",
			"rollno" => "5CS-31",
			"sname" => "May Zin Phyo Wai",
		),
		"32" => array(
			"code" => "CDR-XWOQS",
			"rollno" => "5CS-32",
			"sname" => "Pyae Thu Htay",
		),
		"33" => array(
			"code" => "CDR-JDFXM",
			"rollno" => "5CS-33",
			"sname" => "Lamin Moh Moh",
		),
		"34" => array(
			"code" => "CDR-GHCWG",
			"rollno" => "5CS-34",
			"sname" => "Ei Phyu Tun",
		),
		"35" => array(
			"code" => "CDR-TGDUI",
			"rollno" => "5CS-35",
			"sname" => "Sapal Phyu",
		),
		"36" => array(
			"code" => "CDR-BPCAO",
			"rollno" => "5CS-36",
			"sname" => "Zin Ko Oo",
		),
		"37" => array(
			"code" => "CDR-IXSEJ",
			"rollno" => "5CS-37",
			"sname" => "Thaw Zin Naing Soe",
		),
		"38" => array(
			"code" => "CDR-YDANA",
			"rollno" => "5CS-38",
			"sname" => "Aye Aye Mon",
		),
		"39" => array(
			"code" => "CDR-OUEDW",
			"rollno" => "5CS-39",
			"sname" => "Phyo Tayza Oo",
		),
		"40" => array(
			"code" => "CDR-PRKVS",
			"rollno" => "5CS-40",
			"sname" => "Khaing Thazin Hlaing Myint",
		),
		"41" => array(
			"code" => "CDR-FADBI",
			"rollno" => "5CS-41",
			"sname" => "Thandar Htay",
		),
		"42" => array(
			"code" => "CDR-ZPJCT",
			"rollno" => "5CS-42",
			"sname" => "Aung Zin Latt",
		),
		"43" => array(
			"code" => "CDR-ZJBNJ",
			"rollno" => "5CS-43",
			"sname" => "Naing Arkar Lwin",
		),
		"44" => array(
			"code" => "CDR-LWLTB",
			"rollno" => "5CS-44",
			"sname" => "Thinzar Tun",
		),
		"45" => array(
			"code" => "CDR-KPOFG",
			"rollno" => "5CS-45",
			"sname" => "Aye Aye Moe",
		),
		"46" => array(
			"code" => "CDR-MVMHB",
			"rollno" => "5CS-46",
			"sname" => "Si Thu Aung",
		),
		"47" => array(
			"code" => "CDR-WDBVV",
			"rollno" => "5CS-47",
			"sname" => "Chan Myae Aung",
		),
		"48" => array(
			"code" => "CDR-URLIQ",
			"rollno" => "5CS-48",
			"sname" => "Soe Lin Aung",
		),
		"49" => array(
			"code" => "CDR-QTERY",
			"rollno" => "5CS-49",
			"sname" => "Aye Thu Aung",
		),
		"50" => array(
			"code" => "CDR-TEMEP",
			"rollno" => "5CS-50",
			"sname" => "Zin Min Tun",
		),
		"51" => array(
			"code" => "CDR-JBLKE",
			"rollno" => "5CS-51",
			"sname" => "Hein Min Htwe",
		),
		"52" => array(
			"code" => "CDR-SZNTG",
			"rollno" => "5CS-52",
			"sname" => "Tint Wai",
		),
		"53" => array(
			"code" => "CDR-OIUBM",
			"rollno" => "5CS-53",
			"sname" => "San Thiri Ko",
		),
		"54" => array(
			"code" => "CDR-BSEBX",
			"rollno" => "5CS-54",
			"sname" => "Thein Zaw Myint",
		),
		"55" => array(
			"code" => "CDR-DIBRC",
			"rollno" => "5CS-55",
			"sname" => "Khaing Zaw Lin",
		),
		"56" => array(
			"code" => "CDR-SACBI",
			"rollno" => "5CS-56",
			"sname" => "Than Kywe",
		),
		"57" => array(
			"code" => "CDR-ZJMYM",
			"rollno" => "5CS-57",
			"sname" => "Kyaw Kyaw Lin",
		),
		"58" => array(
			"code" => "CDR-XPWNR",
			"rollno" => "5CS-58",
			"sname" => "Wai Yan Nay Min",
		),
		"59" => array(
			"code" => "CDR-EYKEH",
			"rollno" => "5CS-59",
			"sname" => "May Pan Pwint Htwe",
		),
		"60" => array(
			"code" => "CDR-NCUXN",
			"rollno" => "5CS-60",
			"sname" => "Myint Naing Moe",
		),
		"61" => array(
			"code" => "CDR-EMFDS",
			"rollno" => "5CS-61",
			"sname" => "Min Khant Wunna",
		),
		"62" => array(
			"code" => "CDR-QDVDK",
			"rollno" => "5CS-62",
			"sname" => "Pan Myitzu",
		),
		"63" => array(
			"code" => "CDR-QUFOB",
			"rollno" => "5CS-63",
			"sname" => "Chan Myae Naing",
		),
		"64" => array(
			"code" => "CDR-SXQUA",
			"rollno" => "5CS-64",
			"sname" => "Lwin Moe",
		),
		"65" => array(
			"code" => "CDR-HBXBV",
			"rollno" => "5CS-65",
			"sname" => "Phyo Kyaw",
		),
		"66" => array(
			"code" => "CDR-IYPGP",
			"rollno" => "5CS-66",
			"sname" => "Htet Lin Maung",
		),
		"67" => array(
			"code" => "CDR-AWQKZ",
			"rollno" => "5CT-1",
			"sname" => "Kaythi Ye Naing",
		),
		"68" => array(
			"code" => "CDR-IRFYS",
			"rollno" => "5CT-2",
			"sname" => "Ei Khaing Phyo",
		),
		"69" => array(
			"code" => "CDR-PUMBD",
			"rollno" => "5CT-3",
			"sname" => "Khant Han Nway",
		),
		"70" => array(
			"code" => "CDR-BPMLL",
			"rollno" => "5CT-4",
			"sname" => "Khin Thitsar Zaw",
		),
		"71" => array(
			"code" => "CDR-UDEOR",
			"rollno" => "5CT-5",
			"sname" => "Phyo Ei Win",
		),
		"72" => array(
			"code" => "CDR-URVAA",
			"rollno" => "5CT-6",
			"sname" => "Nyein Nyein Myint",
		),
		"73" => array(
			"code" => "CDR-EWZER",
			"rollno" => "5CT-7",
			"sname" => "Zaw Win Htut",
		),
		"74" => array(
			"code" => "CDR-QLJFU",
			"rollno" => "5CT-8",
			"sname" => "Aye Nandar",
		),
		"75" => array(
			"code" => "CDR-UIMCI",
			"rollno" => "5CT-9",
			"sname" => "Kay Thwe Hlaing",
		),
		"76" => array(
			"code" => "CDR-RWAEW",
			"rollno" => "5CT-10",
			"sname" => "Swan Htet Aung",
		),
		"77" => array(
			"code" => "CDR-HWVEH",
			"rollno" => "5CT-11",
			"sname" => "Thein Htike Oo",
		),
		"78" => array(
			"code" => "CDR-OCOSW",
			"rollno" => "5CT-12",
			"sname" => "Myo Myint Thu",
		),
		"79" => array(
			"code" => "CDR-ILSTO",
			"rollno" => "5CT-13",
			"sname" => "Zaw Htet",
		),

	);
	$admins = array(
		"1" => array(
			"name" => "Phyo Tayza Oo",
			"bank_name" => "KBZ Bank",
			"bank_acc" => "0923 0199 9402 91301",
			"wave_money" => "09791063320",
		),
		"2" => array(
			"name" => "Wai Yan Nay Min",
			"bank_name" => "KBZ Bank",
			"bank_acc" => "0923 0199 9403 07501",
			"wave_money" => "09969315775",
		),
		"3" => array(
			"name" => "Hein Min Htwe",
			"bank_name" => "AYA Bank",
			"bank_acc" => "0006 1190 1168 9332",
			"wave_money" => "09969842186",
		),
		"4" => array(
			"name" => "Swan Htet Aung",
			"bank_name" => "",
			"bank_acc" => "",
			"wave_money" => "09694292991",
		),
		"5" => array(
			"name" => "Phyu Phyu Win",
			"bank_name" => "KBZ Bank",
			"bank_acc" => "9993 0799 9396 38101",
			"wave_money" => "09442030217",
		),
		"6" => array(
			"name" => "Nyein Nyein Myint",
			"bank_name" => "",
			"bank_acc" => "",
			"wave_money" => "09969616841",
		),
		"7" => array(
			"name" => "Phyo Ei Win",
			"bank_name" => "0233 0199 9403 03301",
			"bank_acc" => "KBZ Bank",
			"wave_money" => "09689819300",
		),
	);
}

// echo "Success: A proper connection to MySQL was made! The cdr database is great." . PHP_EOL;
// echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
?>