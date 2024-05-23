<?php

defined('BASEPATH') or exit('No direct script access allowed');

// Update existing POTA references as per their renaming
// of parks
// See https://docs.pota.app/docs/changes.html

class Migration_pota_renames extends CI_Migration {

	var $k_map = array(
		'K-0053' => 'AS-0001',
		'K-0130' => 'AS-0002',
		'K-9703' => 'AS-0003',
		'K-9754' => 'AS-0004',

		'K-0110' => 'GU-0001',
		'K-0762' => 'GU-0002',
		'K-10394' => 'GU-0003',
		'K-10395' => 'GU-0004',
		'K-10459' => 'GU-0005',
		'K-10460' => 'GU-0006',
		'K-10461' => 'GU-0007',

		'K-7869' => 'MP-0001',
		'K-9705' => 'MP-0002',
		'K-9706' => 'MP-0003',
		'K-9707' => 'MP-0004',
		'K-9708' => 'MP-0005',
		'K-9709' => 'MP-0006',
		'K-9710' => 'MP-0007',
		'K-9711' => 'MP-0008',
		'K-9712' => 'MP-0009',
		'K-9713' => 'MP-0010',
		'K-9714' => 'MP-0011',
		'K-9715' => 'MP-0012',
		'K-9716' => 'MP-0013',
		'K-9717' => 'MP-0014',

		'K-0111' => 'UM-0001',
		'K-0112' => 'UM-0002',
		'K-0113' => 'UM-0003',
		'K-0114' => 'UM-0004',
		'K-0115' => 'UM-0005',
		'K-0116' => 'UM-0006',
		'K-0122' => 'UM-0007',
		'K-0131' => 'UM-0008',
		'K-0394' => 'UM-0009',

		'K-0103' => 'PR-0001',
		'K-0104' => 'PR-0002',
		'K-0106' => 'PR-0003',
		'K-0108' => 'PR-0004',
		'K-0132' => 'PR-0005',
		'K-0134' => 'PR-0006',
		'K-0135' => 'PR-0007',
		'K-0317' => 'PR-0008',
		'K-0323' => 'PR-0009',
		'K-0351' => 'PR-0010',
		'K-0363' => 'PR-0011',
		'K-0444' => 'PR-0012',
		'K-0484' => 'PR-0013',
		'K-0860' => 'PR-0014',
		'K-4668' => 'PR-0015',
		'K-4669' => 'PR-0016',
		'K-4670' => 'PR-0017',
		'K-4671' => 'PR-0018',
		'K-4672' => 'PR-0019',
		'K-4673' => 'PR-0020',
		'K-4674' => 'PR-0021',
		'K-4675' => 'PR-0022',
		'K-4676' => 'PR-0023',
		'K-4677' => 'PR-0024',
		'K-4678' => 'PR-0025',
		'K-4679' => 'PR-0026',
		'K-4680' => 'PR-0027',
		'K-4681' => 'PR-0028',
		'K-4682' => 'PR-0029',
		'K-4683' => 'PR-0030',
		'K-4684' => 'PR-0031',
		'K-4685' => 'PR-0032',
		'K-4686' => 'PR-0033',
		'K-7549' => 'PR-0034',
		'K-7550' => 'PR-0035',
		'K-7551' => 'PR-0036',
		'K-7552' => 'PR-0037',
		'K-7553' => 'PR-0038',
		'K-7554' => 'PR-0039',
		'K-7555' => 'PR-0040',
		'K-7556' => 'PR-0041',
		'K-7557' => 'PR-0042',
		'K-7558' => 'PR-0043',
		'K-7559' => 'PR-0044',
		'K-7560' => 'PR-0045',
		'K-7561' => 'PR-0046',
		'K-7562' => 'PR-0047',
		'K-9685' => 'PR-0048',
		'K-9686' => 'PR-0049',
		'K-9687' => 'PR-0050',
		'K-9688' => 'PR-0051',
		'K-9689' => 'PR-0052',
		'K-9690' => 'PR-0053',
		'K-9691' => 'PR-0054',
		'K-9692' => 'PR-0055',
		'K-9693' => 'PR-0056',
		'K-9694' => 'PR-0057',
		'K-9695' => 'PR-0058',
		'K-9722' => 'PR-0059',
		'K-9723' => 'PR-0060',
		'K-9724' => 'PR-0061',
		'K-9725' => 'PR-0062',
		'K-9726' => 'PR-0063',
		'K-9727' => 'PR-0064',
		'K-9728' => 'PR-0065',
		'K-9729' => 'PR-0066',
		'K-9730' => 'PR-0067',
		'K-9731' => 'PR-0068',
		'K-9732' => 'PR-0069',
		'K-9733' => 'PR-0070',
		'K-9734' => 'PR-0071',
		'K-9735' => 'PR-0072',
		'K-9736' => 'PR-0073',
		'K-9737' => 'PR-0074',
		'K-9738' => 'PR-0075',
		'K-9746' => 'PR-0076',
		'K-9747' => 'PR-0077',
		'K-9748' => 'PR-0078',
		'K-9749' => 'PR-0079',
		'K-9750' => 'PR-0080',
		'K-9751' => 'PR-0081',
		'K-10313' => 'PR-0082',
		'K-10314' => 'PR-0083',
		'K-10315' => 'PR-0084',
		'K-10316' => 'PR-0085',
		'K-10317' => 'PR-0086',
		'K-10384' => 'PR-0087',
		'K-10385' => 'PR-0088',
		'K-10393' => 'PR-0089',
		'K-0133' => 'PR-0090',

		'K-0066' => 'VI-0001',
		'K-0616' => 'VI-0002',
		'K-0617' => 'VI-0003',
		'K-0618' => 'VI-0004',
		'K-0755' => 'VI-0005',
		'K-0807' => 'VI-0006',
		'K-0906' => 'VI-0007',
		'K-0968' => 'VI-0008',
	);

	var $gi_map = array(
		'GI-0001' => 'GB-0772',
		'GI-0002' => 'GB-0773',
		'GI-0003' => 'GB-0774',
		'GI-0004' => 'GB-0775',
		'GI-0005' => 'GB-0776',
		'GI-0006' => 'GB-0777',
		'GI-0007' => 'GB-0778',
		'GI-0008' => 'GB-0779',
		'GI-0009' => 'GB-0780',
		'GI-0010' => 'GB-0781',
		'GI-0011' => 'GB-0782',
		'GI-0012' => 'GB-0783',
		'GI-0013' => 'GB-0784',
		'GI-0014' => 'GB-0785',
		'GI-0015' => 'GB-0786',
		'GI-0016' => 'GB-0787',
		'GI-0017' => 'GB-0788',
		'GI-0018' => 'GB-0789',
		'GI-0019' => 'GB-0790',
		'GI-0020' => 'GB-0791',
		'GI-0021' => 'GB-0792',
		'GI-0022' => 'GB-0793',
		'GI-0023' => 'GB-0794',
		'GI-0024' => 'GB-0795',
		'GI-0025' => 'GB-0796',
		'GI-0026' => 'GB-0797',
		'GI-0027' => 'GB-0798',
		'GI-0028' => 'GB-0799',
		'GI-0029' => 'GB-0800',
		'GI-0030' => 'GB-0801',
		'GI-0031' => 'GB-0802',
		'GI-0032' => 'GB-0803',
		'GI-0033' => 'GB-0804',
		'GI-0034' => 'GB-0805',
	);
		
	var $gm_map = array(
		'GM-0001' => 'GB-0806',
		'GM-0002' => 'GB-0807',
		'GM-0003' => 'GB-0808',
		'GM-0004' => 'GB-0809',
		'GM-0005' => 'GB-0810',
		'GM-0006' => 'GB-0811',
		'GM-0007' => 'GB-0812',
		'GM-0008' => 'GB-0813',
		'GM-0009' => 'GB-0814',
		'GM-0010' => 'GB-0815',
		'GM-0011' => 'GB-0816',
		'GM-0012' => 'GB-0817',
		'GM-0013' => 'GB-0818',
		'GM-0014' => 'GB-0819',
		'GM-0015' => 'GB-0820',
		'GM-0016' => 'GB-0821',
		'GM-0017' => 'GB-0822',
		'GM-0018' => 'GB-0823',
		'GM-0019' => 'GB-0824',
		'GM-0020' => 'GB-0825',
		'GM-0021' => 'GB-0826',
		'GM-0022' => 'GB-0827',
		'GM-0023' => 'GB-0828',
		'GM-0024' => 'GB-0829',
		'GM-0025' => 'GB-0830',
		'GM-0026' => 'GB-0831',
		'GM-0027' => 'GB-0832',
		'GM-0028' => 'GB-0833',
		'GM-0029' => 'GB-0834',
		'GM-0030' => 'GB-0835',
		'GM-0031' => 'GB-0836',
		'GM-0032' => 'GB-0837',
		'GM-0033' => 'GB-0838',
		'GM-0034' => 'GB-0839',
		'GM-0035' => 'GB-0840',
		'GM-0036' => 'GB-0841',
		'GM-0037' => 'GB-0842',
		'GM-0038' => 'GB-0843',
		'GM-0039' => 'GB-0844',
		'GM-0040' => 'GB-0845',
		'GM-0041' => 'GB-0846',
		'GM-0042' => 'GB-0847',
		'GM-0043' => 'GB-0848',
		'GM-0044' => 'GB-0849',
		'GM-0045' => 'GB-0850',
		'GM-0046' => 'GB-0851',
		'GM-0047' => 'GB-0852',
		'GM-0048' => 'GB-0853',
		'GM-0049' => 'GB-0854',
		'GM-0050' => 'GB-0855',
		'GM-0051' => 'GB-0856',
		'GM-0052' => 'GB-0857',
		'GM-0053' => 'GB-0858',
		'GM-0054' => 'GB-0859',
		'GM-0055' => 'GB-0860',
		'GM-0056' => 'GB-0861',
		'GM-0057' => 'GB-0862',
		'GM-0058' => 'GB-0863',
		'GM-0059' => 'GB-0864',
		'GM-0060' => 'GB-0865',
		'GM-0061' => 'GB-0866',
		'GM-0062' => 'GB-0867',
		'GM-0063' => 'GB-0868',
		'GM-0064' => 'GB-0869',
		'GM-0065' => 'GB-0870',
		'GM-0066' => 'GB-0871',
		'GM-0067' => 'GB-0872',
		'GM-0068' => 'GB-0873',
		'GM-0069' => 'GB-0874',
		'GM-0070' => 'GB-0875',
		'GM-0071' => 'GB-0876',
		'GM-0072' => 'GB-0877',
		'GM-0073' => 'GB-0878',
		'GM-0074' => 'GB-0879',
		'GM-0075' => 'GB-0880',
		'GM-0076' => 'GB-0881',
		'GM-0077' => 'GB-0882',
		'GM-0078' => 'GB-0883',
		'GM-0079' => 'GB-0884',
		'GM-0080' => 'GB-0885',
		'GM-0081' => 'GB-0886',
		'GM-0082' => 'GB-0887',
		'GM-0083' => 'GB-0888',
		'GM-0084' => 'GB-0889',
		'GM-0085' => 'GB-0890',
		'GM-0086' => 'GB-0891',
		'GM-0087' => 'GB-0892',
		'GM-0088' => 'GB-0893',
		'GM-0089' => 'GB-0894',
		'GM-0090' => 'GB-0895',
		'GM-0091' => 'GB-0896',
		'GM-0092' => 'GB-0897',
		'GM-0093' => 'GB-0898',
		'GM-0094' => 'GB-0899',
		'GM-0095' => 'GB-0900',
		'GM-0096' => 'GB-0901',
		'GM-0097' => 'GB-0902',
		'GM-0098' => 'GB-0903',
		'GM-0099' => 'GB-0904',
		'GM-0100' => 'GB-0905',
		'GM-0101' => 'GB-0906',
		'GM-0102' => 'GB-0907',
		'GM-0103' => 'GB-0908',
		'GM-0104' => 'GB-0909',
		'GM-0105' => 'GB-0910',
		'GM-0106' => 'GB-0911',
		'GM-0107' => 'GB-0912',
		'GM-0108' => 'GB-0913',
		'GM-0109' => 'GB-0914',
		'GM-0110' => 'GB-0915',
		'GM-0111' => 'GB-0916',
		'GM-0112' => 'GB-0917',
		'GM-0113' => 'GB-0918',
		'GM-0114' => 'GB-0919',
		'GM-0115' => 'GB-0920',
		'GM-0116' => 'GB-0921',
		'GM-0117' => 'GB-0922',
		'GM-0118' => 'GB-0923',
		'GM-0119' => 'GB-0924',
		'GM-0120' => 'GB-0925',
		'GM-0121' => 'GB-0926',
		'GM-0122' => 'GB-0927',
		'GM-0123' => 'GB-0928',
		'GM-0124' => 'GB-0929',
		'GM-0125' => 'GB-0930',
		'GM-0126' => 'GB-0931',
		'GM-0127' => 'GB-0932',
		'GM-0128' => 'GB-0933',
		'GM-0129' => 'GB-0934',
		'GM-0130' => 'GB-0935',
		'GM-0131' => 'GB-0936',
		'GM-0132' => 'GB-0937',
		'GM-0133' => 'GB-0938',
		'GM-0134' => 'GB-0939',
		'GM-0135' => 'GB-0940',
		'GM-0136' => 'GB-0941',
		'GM-0137' => 'GB-0942',
		'GM-0138' => 'GB-0943',
		'GM-0139' => 'GB-0944',
		'GM-0140' => 'GB-0945',
		'GM-0141' => 'GB-0946',
		'GM-0142' => 'GB-0947',
		'GM-0143' => 'GB-0948',
		'GM-0144' => 'GB-0949',
		'GM-0145' => 'GB-0950',
		'GM-0146' => 'GB-0951',
		'GM-0147' => 'GB-0952',
		'GM-0148' => 'GB-0953',
		'GM-0149' => 'GB-0954',
		'GM-0150' => 'GB-0955',
		'GM-0151' => 'GB-0956',
		'GM-0152' => 'GB-0957',
		'GM-0153' => 'GB-0958',
		'GM-0154' => 'GB-0959',
		'GM-0155' => 'GB-0960',
		'GM-0156' => 'GB-0961',
		'GM-0157' => 'GB-0962',
		'GM-0158' => 'GB-0963',
		'GM-0159' => 'GB-0964',
		'GM-0160' => 'GB-0965',
		'GM-0161' => 'GB-0966',
		'GM-0162' => 'GB-0967',
		'GM-0163' => 'GB-0968',
		'GM-0164' => 'GB-0969',
		'GM-0165' => 'GB-0970',
		'GM-0166' => 'GB-0971',
		'GM-0167' => 'GB-0972',
		'GM-0168' => 'GB-0973',
		'GM-0169' => 'GB-0974',
		'GM-0170' => 'GB-0975',
		'GM-0171' => 'GB-0976',
		'GM-0172' => 'GB-0977',
		'GM-0173' => 'GB-0978',
		'GM-0174' => 'GB-0979',
		'GM-0175' => 'GB-0980',
		'GM-0176' => 'GB-0981',
		'GM-0177' => 'GB-0982',
		'GM-0178' => 'GB-0983',
		'GM-0179' => 'GB-0984',
		'GM-0180' => 'GB-0985',
		'GM-0181' => 'GB-0986',
		'GM-0182' => 'GB-0987',
		'GM-0183' => 'GB-0988',
		'GM-0184' => 'GB-0989',
		'GM-0185' => 'GB-0990',
		'GM-0186' => 'GB-0991',
		'GM-0187' => 'GB-0992',
		'GM-0188' => 'GB-0993',
		'GM-0189' => 'GB-0994',
	);
		
	var $gw_map = array(
		'GW-0001' => 'GB-0995',
		'GW-0002' => 'GB-0996',
		'GW-0003' => 'GB-0997',
		'GW-0004' => 'GB-0998',
		'GW-0005' => 'GB-0999',
		'GW-0006' => 'GB-1000',
		'GW-0007' => 'GB-1001',
		'GW-0008' => 'GB-1002',
		'GW-0009' => 'GB-1003',
		'GW-0010' => 'GB-1004',
		'GW-0011' => 'GB-1005',
		'GW-0012' => 'GB-1006',
		'GW-0013' => 'GB-1007',
		'GW-0014' => 'GB-1008',
		'GW-0015' => 'GB-1009',
		'GW-0016' => 'GB-1010',
		'GW-0017' => 'GB-1011',
		'GW-0018' => 'GB-1012',
		'GW-0019' => 'GB-1013',
		'GW-0020' => 'GB-1014',
		'GW-0021' => 'GB-1015',
		'GW-0022' => 'GB-1016',
		'GW-0023' => 'GB-1017',
		'GW-0024' => 'GB-1018',
		'GW-0025' => 'GB-1019',
		'GW-0026' => 'GB-1020',
		'GW-0027' => 'GB-1021',
		'GW-0028' => 'GB-1022',
		'GW-0029' => 'GB-1023',
		'GW-0030' => 'GB-1024',
		'GW-0031' => 'GB-1025',
		'GW-0032' => 'GB-1026',
		'GW-0033' => 'GB-1027',
		'GW-0034' => 'GB-1028',
		'GW-0035' => 'GB-1029',
		'GW-0036' => 'GB-1030',
		'GW-0037' => 'GB-1031',
		'GW-0038' => 'GB-1032',
		'GW-0039' => 'GB-1033',
		'GW-0040' => 'GB-1034',
		'GW-0041' => 'GB-1035',
		'GW-0042' => 'GB-1036',
		'GW-0043' => 'GB-1037',
		'GW-0044' => 'GB-1038',
		'GW-0045' => 'GB-1039',
		'GW-0046' => 'GB-1040',
		'GW-0047' => 'GB-1041',
		'GW-0048' => 'GB-1042',
		'GW-0049' => 'GB-1043',
		'GW-0050' => 'GB-1044',
		'GW-0051' => 'GB-1045',
		'GW-0052' => 'GB-1046',
		'GW-0053' => 'GB-1047',
		'GW-0054' => 'GB-1048',
		'GW-0055' => 'GB-1049',
		'GW-0056' => 'GB-1050',
		'GW-0057' => 'GB-1051',
		'GW-0058' => 'GB-1052',
		'GW-0059' => 'GB-1053',
		'GW-0060' => 'GB-1054',
		'GW-0061' => 'GB-1055',
		'GW-0062' => 'GB-1056',
		'GW-0063' => 'GB-1057',
		'GW-0064' => 'GB-1058',
		'GW-0065' => 'GB-1059',
		'GW-0066' => 'GB-1060',
		'GW-0067' => 'GB-1061',
		'GW-0068' => 'GB-1062',
		'GW-0069' => 'GB-1063',
		'GW-0070' => 'GB-1064',
		'GW-0071' => 'GB-1065',
		'GW-0072' => 'GB-1066',
		'GW-0073' => 'GB-1067',
		'GW-0074' => 'GB-1068',
		'GW-0075' => 'GB-1069',
		'GW-0076' => 'GB-1070',
		'GW-0077' => 'GB-1071',
		'GW-0078' => 'GB-1072',
		'GW-0079' => 'GB-1073',
		'GW-0080' => 'GB-1074',
		'GW-0081' => 'GB-1075',
		'GW-0082' => 'GB-1076',
		'GW-0083' => 'GB-1077',
		'GW-0084' => 'GB-1078',
		'GW-0085' => 'GB-1079',
		'GW-0086' => 'GB-1080',
		'GW-0087' => 'GB-1081',
		'GW-0088' => 'GB-1082',
		'GW-0089' => 'GB-1083',
		'GW-0090' => 'GB-1084',
		'GW-0091' => 'GB-1085',
		'GW-0092' => 'GB-1086',
		'GW-0093' => 'GB-1087',
		'GW-0094' => 'GB-1088',
		'GW-0095' => 'GB-1089',
		'GW-0096' => 'GB-1090',
		'GW-0097' => 'GB-1091',
		'GW-0098' => 'GB-1092',
		'GW-0099' => 'GB-1093',
		'GW-0100' => 'GB-1094',
		'GW-0101' => 'GB-1095',
		'GW-0102' => 'GB-1096',
		'GW-0103' => 'GB-1097',
		'GW-0104' => 'GB-1098',
		'GW-0105' => 'GB-1099',
		'GW-0106' => 'GB-1100',
		'GW-0107' => 'GB-1101',
		'GW-0108' => 'GB-1102',
		'GW-0109' => 'GB-1103',
		'GW-0110' => 'GB-1104',
		'GW-0111' => 'GB-1105',
		'GW-0112' => 'GB-1106',
		'GW-0113' => 'GB-1107',
		'GW-0114' => 'GB-1108',
		'GW-0115' => 'GB-1109',
		'GW-0116' => 'GB-1110',
		'GW-0117' => 'GB-1111',
		'GW-0118' => 'GB-1112',
		'GW-0119' => 'GB-1113',
		'GW-0120' => 'GB-1114',
		'GW-0121' => 'GB-1115',
		'GW-0122' => 'GB-1116',
		'GW-0123' => 'GB-1117',
		'GW-0124' => 'GB-1118',
		'GW-0125' => 'GB-1119',
		'GW-0126' => 'GB-1120',
		'GW-0127' => 'GB-1121',
		'GW-0128' => 'GB-1122',
		'GW-0129' => 'GB-1123',
		'GW-0130' => 'GB-1124',
		'GW-0131' => 'GB-1125',
		'GW-0132' => 'GB-1126',
		'GW-0133' => 'GB-1127',
		'GW-0134' => 'GB-1128',
		'GW-0135' => 'GB-1129',
		'GW-0136' => 'GB-1130',
		'GW-0137' => 'GB-1131',
		'GW-0138' => 'GB-1132',
		'GW-0139' => 'GB-1133',
		'GW-0140' => 'GB-1134',
		'GW-0141' => 'GB-1135',
		'GW-0142' => 'GB-1136',
		'GW-0143' => 'GB-1137',
		'GW-0144' => 'GB-1138',
		'GW-0145' => 'GB-1139',
		'GW-0146' => 'GB-1140',
		'GW-0147' => 'GB-1141',
		'GW-0148' => 'GB-1142',
		'GW-0149' => 'GB-1143',
		'GW-0150' => 'GB-1144',
		'GW-0151' => 'GB-1145',
		'GW-0152' => 'GB-1146',
		'GW-0153' => 'GB-1147',
		'GW-0154' => 'GB-1148',
		'GW-0155' => 'GB-1149',
		'GW-0156' => 'GB-1150',
		'GW-0157' => 'GB-1151',
		'GW-0158' => 'GB-1152',
		'GW-0159' => 'GB-1153',
		'GW-0160' => 'GB-1154',
		'GW-0161' => 'GB-1155',
		'GW-0162' => 'GB-1156',
		'GW-0163' => 'GB-1157',
		'GW-0164' => 'GB-1158',
		'GW-0165' => 'GB-1159',
		'GW-0166' => 'GB-1160',
		'GW-0167' => 'GB-1161',
		'GW-0168' => 'GB-1162',
		'GW-0169' => 'GB-1163',
		'GW-0170' => 'GB-1164',
		'GW-0171' => 'GB-1165',
		'GW-0172' => 'GB-1166',
		'GW-0173' => 'GB-1167',
		'GW-0174' => 'GB-1168',
		'GW-0175' => 'GB-1169',
		'GW-0176' => 'GB-1170',
		'GW-0177' => 'GB-1171',
		'GW-0178' => 'GB-1172',
		'GW-0179' => 'GB-1173',
		'GW-0180' => 'GB-1174',
		'GW-0181' => 'GB-1175',
		'GW-0182' => 'GB-1176',
		'GW-0183' => 'GB-1177',
		'GW-0184' => 'GB-1178',
		'GW-0185' => 'GB-1179',
		'GW-0186' => 'GB-1180',
		'GW-0187' => 'GB-1181',
		'GW-0188' => 'GB-1182',
		'GW-0189' => 'GB-1183',
		'GW-0190' => 'GB-1184',
		'GW-0191' => 'GB-1185',
		'GW-0192' => 'GB-1186',
		'GW-0193' => 'GB-1187',
		'GW-0194' => 'GB-1188',
		'GW-0195' => 'GB-1189',
		'GW-0196' => 'GB-1190',
		'GW-0197' => 'GB-1191',
		'GW-0198' => 'GB-1192',
		'GW-0199' => 'GB-1193',
		'GW-0200' => 'GB-1194',
		'GW-0201' => 'GB-1195',
		'GW-0202' => 'GB-1196',
		'GW-0203' => 'GB-1197',
		'GW-0204' => 'GB-1198',
		'GW-0205' => 'GB-1199',
		'GW-0206' => 'GB-1200',
		'GW-0207' => 'GB-1201',
		'GW-0208' => 'GB-1202',
		'GW-0209' => 'GB-1203',
		'GW-0210' => 'GB-1204',
		'GW-0211' => 'GB-1205',
		'GW-0212' => 'GB-1206',
		'GW-0213' => 'GB-1207',
		'GW-0214' => 'GB-1208',
		'GW-0215' => 'GB-1209',
		'GW-0216' => 'GB-1210',
		'GW-0217' => 'GB-1211',
		'GW-0218' => 'GB-1212',
		'GW-0219' => 'GB-1213',
		'GW-0220' => 'GB-1214',
		'GW-0221' => 'GB-1215',
		'GW-0222' => 'GB-1216',
		'GW-0223' => 'GB-1217',
	);

	var $la_map = array(
		'LA-2524' => 'BV-0001',
	);

	public function up() {
		$prefixes =  array( 'K', 'GI', 'GM', 'GW', 'LA' );
		$this->add_ix('TMP_HRD_IDX_COL_POTA','`COL_POTA_REF`,`COL_DXCC`');
		// QSO table
		foreach ($prefixes as $prefix) {
			$this->db->select("COUNT(COL_PRIMARY_KEY) AS count");
			$this->db->where("SUBSTR(COL_POTA_REF, 1, ".strlen($prefix).") =", $prefix);
			$query = $this->db->get($this->config->item('table_name'));
			$row = $query->row();
			if ($row->count > 0) {
				foreach ($this->{strtolower($prefix).'_map'} AS $key => $value) {
					$this->update_db($key, $value);
				}
			}
		}
		// Station profiles
		foreach ($prefixes as $prefix) {
			$this->db->select("COUNT(station_id) AS count");
			$this->db->where("SUBSTR(station_pota, 1, ".strlen($prefix).") =", $prefix);
			$query = $this->db->get('station_profile');
			$row = $query->row();
			if ($row->count > 0) {
				foreach ($this->{strtolower($prefix).'_map'} AS $key => $value) {
					$this->update_db_profiles($key, $value);
				}
			}
		}
	}

	public function down() {
	}

	function update_db($from, $to) {
		$this->db->where('COL_POTA_REF', $from);
		$this->db->update($this->config->item('table_name'), array('COL_POTA_REF' => $to));
	}

	function update_db_profiles($from, $to) {
		$this->db->where('station_pota', $from);
		$this->db->update('station_profile', array('station_pota' => $to));
	}

	private function add_ix($index,$cols) {
		$ix_exist = $this->db->query("SHOW INDEX FROM ".$this->config->item('table_name')." WHERE Key_name = '".$index."'")->num_rows();
		if ($ix_exist == 0) {
			$sql = "ALTER TABLE ".$this->config->item('table_name')." ADD INDEX `".$index."` (".$cols.");";
			$this->db->query($sql);
		}
	}

}
