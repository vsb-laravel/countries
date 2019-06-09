<?php
namespace Vsb\database\seeds;
use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            ["name"=>"Afghanistan","phone"=>"93","iso"=>"AF","code"=>"AFG"],
            ["name"=>"Albania","phone"=>"355","iso"=>"AL","code"=>"ALB"],
            ["name"=>"Algeria","phone"=>"213","iso"=>"DZ","code"=>"DZA"],
            ["name"=>"American Samoa","phone"=>"1-684","iso"=>"AS","code"=>"ASM"],
            ["name"=>"Andorra","phone"=>"376","iso"=>"AD","code"=>"AND"],
            ["name"=>"Angola","phone"=>"244","iso"=>"AO","code"=>"AGO"],
            ["name"=>"Anguilla","phone"=>"1-264","iso"=>"AI","code"=>"AIA"],
            ["name"=>"Antarctica","phone"=>"672","iso"=>"AQ","code"=>"ATA"],
            ["name"=>"Antigua and Barbuda","phone"=>"1-268","iso"=>"AG","code"=>"ATG"],
            ["name"=>"Argentina","phone"=>"54","iso"=>"AR","code"=>"ARG"],
            ["name"=>"Armenia","phone"=>"374","iso"=>"AM","code"=>"ARM"],
            ["name"=>"Aruba","phone"=>"297","iso"=>"AW","code"=>"ABW"],
            ["name"=>"Australia","phone"=>"61","iso"=>"AU","code"=>"AUS"],
            ["name"=>"Austria","phone"=>"43","iso"=>"AT","code"=>"AUT"],
            ["name"=>"Azerbaijan","phone"=>"994","iso"=>"AZ","code"=>"AZE"],
            ["name"=>"Bahamas","phone"=>"1-242","iso"=>"BS","code"=>"BHS"],
            ["name"=>"Bahrain","phone"=>"973","iso"=>"BH","code"=>"BHR"],
            ["name"=>"Bangladesh","phone"=>"880","iso"=>"BD","code"=>"BGD"],
            ["name"=>"Barbados","phone"=>"1-246","iso"=>"BB","code"=>"BRB"],
            ["name"=>"Belarus","phone"=>"375","iso"=>"BY","code"=>"BLR"],
            ["name"=>"Belgium","phone"=>"32","iso"=>"BE","code"=>"BEL"],
            ["name"=>"Belize","phone"=>"501","iso"=>"BZ","code"=>"BLZ"],
            ["name"=>"Benin","phone"=>"229","iso"=>"BJ","code"=>"BEN"],
            ["name"=>"Bermuda","phone"=>"1-441","iso"=>"BM","code"=>"BMU"],
            ["name"=>"Bhutan","phone"=>"975","iso"=>"BT","code"=>"BTN"],
            ["name"=>"Bolivia","phone"=>"591","iso"=>"BO","code"=>"BOL"],
            ["name"=>"Bosnia and Herzegovina","phone"=>"387","iso"=>"BA","code"=>"BIH"],
            ["name"=>"Botswana","phone"=>"267","iso"=>"BW","code"=>"BWA"],
            ["name"=>"Brazil","phone"=>"55","iso"=>"BR","code"=>"BRA"],
            ["name"=>"British Indian Ocean Territory","phone"=>"246","iso"=>"IO","code"=>"IOT"],
            ["name"=>"British Virgin Islands","phone"=>"1-284","iso"=>"VG","code"=>"VGB"],
            ["name"=>"Brunei","phone"=>"673","iso"=>"BN","code"=>"BRN"],
            ["name"=>"Bulgaria","phone"=>"359","iso"=>"BG","code"=>"BGR"],
            ["name"=>"Burkina Faso","phone"=>"226","iso"=>"BF","code"=>"BFA"],
            ["name"=>"Burundi","phone"=>"257","iso"=>"BI","code"=>"BDI"],
            ["name"=>"Cambodia","phone"=>"855","iso"=>"KH","code"=>"KHM"],
            ["name"=>"Cameroon","phone"=>"237","iso"=>"CM","code"=>"CMR"],
            ["name"=>"Canada","phone"=>"1","iso"=>"CA","code"=>"CAN"],
            ["name"=>"Cape Verde","phone"=>"238","iso"=>"CV","code"=>"CPV"],
            ["name"=>"Cayman Islands","phone"=>"1-345","iso"=>"KY","code"=>"CYM"],
            ["name"=>"Central African Republic","phone"=>"236","iso"=>"CF","code"=>"CAF"],
            ["name"=>"Chad","phone"=>"235","iso"=>"TD","code"=>"TCD"],
            ["name"=>"Chile","phone"=>"56","iso"=>"CL","code"=>"CHL"],
            ["name"=>"China","phone"=>"86","iso"=>"CN","code"=>"CHN"],
            ["name"=>"Christmas Island","phone"=>"61","iso"=>"CX","code"=>"CXR"],
            ["name"=>"Cocos Islands","phone"=>"61","iso"=>"CC","code"=>"CCK"],
            ["name"=>"Colombia","phone"=>"57","iso"=>"CO","code"=>"COL"],
            ["name"=>"Comoros","phone"=>"269","iso"=>"KM","code"=>"COM"],
            ["name"=>"Cook Islands","phone"=>"682","iso"=>"CK","code"=>"COK"],
            ["name"=>"Costa Rica","phone"=>"506","iso"=>"CR","code"=>"CRI"],
            ["name"=>"Croatia","phone"=>"385","iso"=>"HR","code"=>"HRV"],
            ["name"=>"Cuba","phone"=>"53","iso"=>"CU","code"=>"CUB"],
            ["name"=>"Curacao","phone"=>"599","iso"=>"CW","code"=>"CUW"],
            ["name"=>"Cyprus","phone"=>"357","iso"=>"CY","code"=>"CYP"],
            ["name"=>"Czech Republic","phone"=>"420","iso"=>"CZ","code"=>"CZE"],
            ["name"=>"Democratic Republic of the Congo","phone"=>"243","iso"=>"CD","code"=>"COD"],
            ["name"=>"Denmark","phone"=>"45","iso"=>"DK","code"=>"DNK"],
            ["name"=>"Djibouti","phone"=>"253","iso"=>"DJ","code"=>"DJI"],
            ["name"=>"Dominica","phone"=>"1-767","iso"=>"DM","code"=>"DMA"],
            ["name"=>"Dominican Republic","phone"=>"1-809, 1-829, 1-849","iso"=>"DO","code"=>"DOM"],
            ["name"=>"East Timor","phone"=>"670","iso"=>"TL","code"=>"TLS"],
            ["name"=>"Ecuador","phone"=>"593","iso"=>"EC","code"=>"ECU"],
            ["name"=>"Egypt","phone"=>"20","iso"=>"EG","code"=>"EGY"],
            ["name"=>"El Salvador","phone"=>"503","iso"=>"SV","code"=>"SLV"],
            ["name"=>"Equatorial Guinea","phone"=>"240","iso"=>"GQ","code"=>"GNQ"],
            ["name"=>"Eritrea","phone"=>"291","iso"=>"ER","code"=>"ERI"],
            ["name"=>"Estonia","phone"=>"372","iso"=>"EE","code"=>"EST"],
            ["name"=>"Ethiopia","phone"=>"251","iso"=>"ET","code"=>"ETH"],
            ["name"=>"Falkland Islands","phone"=>"500","iso"=>"FK","code"=>"FLK"],
            ["name"=>"Faroe Islands","phone"=>"298","iso"=>"FO","code"=>"FRO"],
            ["name"=>"Fiji","phone"=>"679","iso"=>"FJ","code"=>"FJI"],
            ["name"=>"Finland","phone"=>"358","iso"=>"FI","code"=>"FIN"],
            ["name"=>"France","phone"=>"33","iso"=>"FR","code"=>"FRA"],
            ["name"=>"French Polynesia","phone"=>"689","iso"=>"PF","code"=>"PYF"],
            ["name"=>"Gabon","phone"=>"241","iso"=>"GA","code"=>"GAB"],
            ["name"=>"Gambia","phone"=>"220","iso"=>"GM","code"=>"GMB"],
            ["name"=>"Georgia","phone"=>"995","iso"=>"GE","code"=>"GEO"],
            ["name"=>"Germany","phone"=>"49","iso"=>"DE","code"=>"DEU"],
            ["name"=>"Ghana","phone"=>"233","iso"=>"GH","code"=>"GHA"],
            ["name"=>"Gibraltar","phone"=>"350","iso"=>"GI","code"=>"GIB"],
            ["name"=>"Greece","phone"=>"30","iso"=>"GR","code"=>"GRC"],
            ["name"=>"Greenland","phone"=>"299","iso"=>"GL","code"=>"GRL"],
            ["name"=>"Grenada","phone"=>"1-473","iso"=>"GD","code"=>"GRD"],
            ["name"=>"Guam","phone"=>"1-671","iso"=>"GU","code"=>"GUM"],
            ["name"=>"Guatemala","phone"=>"502","iso"=>"GT","code"=>"GTM"],
            ["name"=>"Guernsey","phone"=>"44-1481","iso"=>"GG","code"=>"GGY"],
            ["name"=>"Guinea","phone"=>"224","iso"=>"GN","code"=>"GIN"],
            ["name"=>"Guinea-Bissau","phone"=>"245","iso"=>"GW","code"=>"GNB"],
            ["name"=>"Guyana","phone"=>"592","iso"=>"GY","code"=>"GUY"],
            ["name"=>"Haiti","phone"=>"509","iso"=>"HT","code"=>"HTI"],
            ["name"=>"Honduras","phone"=>"504","iso"=>"HN","code"=>"HND"],
            ["name"=>"Hong Kong","phone"=>"852","iso"=>"HK","code"=>"HKG"],
            ["name"=>"Hungary","phone"=>"36","iso"=>"HU","code"=>"HUN"],
            ["name"=>"Iceland","phone"=>"354","iso"=>"IS","code"=>"ISL"],
            ["name"=>"India","phone"=>"91","iso"=>"IN","code"=>"IND"],
            ["name"=>"Indonesia","phone"=>"62","iso"=>"ID","code"=>"IDN"],
            ["name"=>"Iran","phone"=>"98","iso"=>"IR","code"=>"IRN"],
            ["name"=>"Iraq","phone"=>"964","iso"=>"IQ","code"=>"IRQ"],
            ["name"=>"Ireland","phone"=>"353","iso"=>"IE","code"=>"IRL"],
            ["name"=>"Isle of Man","phone"=>"44-1624","iso"=>"IM","code"=>"IMN"],
            ["name"=>"Israel","phone"=>"972","iso"=>"IL","code"=>"ISR"],
            ["name"=>"Italy","phone"=>"39","iso"=>"IT","code"=>"ITA"],
            ["name"=>"Ivory Coast","phone"=>"225","iso"=>"CI","code"=>"CIV"],
            ["name"=>"Jamaica","phone"=>"1-876","iso"=>"JM","code"=>"JAM"],
            ["name"=>"Japan","phone"=>"81","iso"=>"JP","code"=>"JPN"],
            ["name"=>"Jersey","phone"=>"44-1534","iso"=>"JE","code"=>"JEY"],
            ["name"=>"Jordan","phone"=>"962","iso"=>"JO","code"=>"JOR"],
            ["name"=>"Kazakhstan","phone"=>"7","iso"=>"KZ","code"=>"KAZ"],
            ["name"=>"Kenya","phone"=>"254","iso"=>"KE","code"=>"KEN"],
            ["name"=>"Kiribati","phone"=>"686","iso"=>"KI","code"=>"KIR"],
            ["name"=>"Kosovo","phone"=>"383","iso"=>"XK","code"=>"XKX"],
            ["name"=>"Kuwait","phone"=>"965","iso"=>"KW","code"=>"KWT"],
            ["name"=>"Kyrgyzstan","phone"=>"996","iso"=>"KG","code"=>"KGZ"],
            ["name"=>"Laos","phone"=>"856","iso"=>"LA","code"=>"LAO"],
            ["name"=>"Latvia","phone"=>"371","iso"=>"LV","code"=>"LVA"],
            ["name"=>"Lebanon","phone"=>"961","iso"=>"LB","code"=>"LBN"],
            ["name"=>"Lesotho","phone"=>"266","iso"=>"LS","code"=>"LSO"],
            ["name"=>"Liberia","phone"=>"231","iso"=>"LR","code"=>"LBR"],
            ["name"=>"Libya","phone"=>"218","iso"=>"LY","code"=>"LBY"],
            ["name"=>"Liechtenstein","phone"=>"423","iso"=>"LI","code"=>"LIE"],
            ["name"=>"Lithuania","phone"=>"370","iso"=>"LT","code"=>"LTU"],
            ["name"=>"Luxembourg","phone"=>"352","iso"=>"LU","code"=>"LUX"],
            ["name"=>"Macau","phone"=>"853","iso"=>"MO","code"=>"MAC"],
            ["name"=>"Macedonia","phone"=>"389","iso"=>"MK","code"=>"MKD"],
            ["name"=>"Madagascar","phone"=>"261","iso"=>"MG","code"=>"MDG"],
            ["name"=>"Malawi","phone"=>"265","iso"=>"MW","code"=>"MWI"],
            ["name"=>"Malaysia","phone"=>"60","iso"=>"MY","code"=>"MYS"],
            ["name"=>"Maldives","phone"=>"960","iso"=>"MV","code"=>"MDV"],
            ["name"=>"Mali","phone"=>"223","iso"=>"ML","code"=>"MLI"],
            ["name"=>"Malta","phone"=>"356","iso"=>"MT","code"=>"MLT"],
            ["name"=>"Marshall Islands","phone"=>"692","iso"=>"MH","code"=>"MHL"],
            ["name"=>"Mauritania","phone"=>"222","iso"=>"MR","code"=>"MRT"],
            ["name"=>"Mauritius","phone"=>"230","iso"=>"MU","code"=>"MUS"],
            ["name"=>"Mayotte","phone"=>"262","iso"=>"YT","code"=>"MYT"],
            ["name"=>"Mexico","phone"=>"52","iso"=>"MX","code"=>"MEX"],
            ["name"=>"Micronesia","phone"=>"691","iso"=>"FM","code"=>"FSM"],
            ["name"=>"Moldova","phone"=>"373","iso"=>"MD","code"=>"MDA"],
            ["name"=>"Monaco","phone"=>"377","iso"=>"MC","code"=>"MCO"],
            ["name"=>"Mongolia","phone"=>"976","iso"=>"MN","code"=>"MNG"],
            ["name"=>"Montenegro","phone"=>"382","iso"=>"ME","code"=>"MNE"],
            ["name"=>"Montserrat","phone"=>"1-664","iso"=>"MS","code"=>"MSR"],
            ["name"=>"Morocco","phone"=>"212","iso"=>"MA","code"=>"MAR"],
            ["name"=>"Mozambique","phone"=>"258","iso"=>"MZ","code"=>"MOZ"],
            ["name"=>"Myanmar","phone"=>"95","iso"=>"MM","code"=>"MMR"],
            ["name"=>"Namibia","phone"=>"264","iso"=>"NA","code"=>"NAM"],
            ["name"=>"Nauru","phone"=>"674","iso"=>"NR","code"=>"NRU"],
            ["name"=>"Nepal","phone"=>"977","iso"=>"NP","code"=>"NPL"],
            ["name"=>"Netherlands","phone"=>"31","iso"=>"NL","code"=>"NLD"],
            ["name"=>"Netherlands Antilles","phone"=>"599","iso"=>"AN","code"=>"ANT"],
            ["name"=>"New Caledonia","phone"=>"687","iso"=>"NC","code"=>"NCL"],
            ["name"=>"New Zealand","phone"=>"64","iso"=>"NZ","code"=>"NZL"],
            ["name"=>"Nicaragua","phone"=>"505","iso"=>"NI","code"=>"NIC"],
            ["name"=>"Niger","phone"=>"227","iso"=>"NE","code"=>"NER"],
            ["name"=>"Nigeria","phone"=>"234","iso"=>"NG","code"=>"NGA"],
            ["name"=>"Niue","phone"=>"683","iso"=>"NU","code"=>"NIU"],
            ["name"=>"North Korea","phone"=>"850","iso"=>"KP","code"=>"PRK"],
            ["name"=>"Northern Mariana Islands","phone"=>"1-670","iso"=>"MP","code"=>"MNP"],
            ["name"=>"Norway","phone"=>"47","iso"=>"NO","code"=>"NOR"],
            ["name"=>"Oman","phone"=>"968","iso"=>"OM","code"=>"OMN"],
            ["name"=>"Pakistan","phone"=>"92","iso"=>"PK","code"=>"PAK"],
            ["name"=>"Palau","phone"=>"680","iso"=>"PW","code"=>"PLW"],
            ["name"=>"Palestine","phone"=>"970","iso"=>"PS","code"=>"PSE"],
            ["name"=>"Panama","phone"=>"507","iso"=>"PA","code"=>"PAN"],
            ["name"=>"Papua New Guinea","phone"=>"675","iso"=>"PG","code"=>"PNG"],
            ["name"=>"Paraguay","phone"=>"595","iso"=>"PY","code"=>"PRY"],
            ["name"=>"Peru","phone"=>"51","iso"=>"PE","code"=>"PER"],
            ["name"=>"Philippines","phone"=>"63","iso"=>"PH","code"=>"PHL"],
            ["name"=>"Pitcairn","phone"=>"64","iso"=>"PN","code"=>"PCN"],
            ["name"=>"Poland","phone"=>"48","iso"=>"PL","code"=>"POL"],
            ["name"=>"Portugal","phone"=>"351","iso"=>"PT","code"=>"PRT"],
            ["name"=>"Puerto Rico","phone"=>"1-787, 1-939","iso"=>"PR","code"=>"PRI"],
            ["name"=>"Qatar","phone"=>"974","iso"=>"QA","code"=>"QAT"],
            ["name"=>"Republic of the Congo","phone"=>"242","iso"=>"CG","code"=>"COG"],
            ["name"=>"Reunion","phone"=>"262","iso"=>"RE","code"=>"REU"],
            ["name"=>"Romania","phone"=>"40","iso"=>"RO","code"=>"ROU"],
            ["name"=>"Russia","phone"=>"7","iso"=>"RU","code"=>"RUS"],
            ["name"=>"Rwanda","phone"=>"250","iso"=>"RW","code"=>"RWA"],
            ["name"=>"Saint Barthelemy","phone"=>"590","iso"=>"BL","code"=>"BLM"],
            ["name"=>"Saint Helena","phone"=>"290","iso"=>"SH","code"=>"SHN"],
            ["name"=>"Saint Kitts and Nevis","phone"=>"1-869","iso"=>"KN","code"=>"KNA"],
            ["name"=>"Saint Lucia","phone"=>"1-758","iso"=>"LC","code"=>"LCA"],
            ["name"=>"Saint Martin","phone"=>"590","iso"=>"MF","code"=>"MAF"],
            ["name"=>"Saint Pierre and Miquelon","phone"=>"508","iso"=>"PM","code"=>"SPM"],
            ["name"=>"Saint Vincent and the Grenadines","phone"=>"1-784","iso"=>"VC","code"=>"VCT"],
            ["name"=>"Samoa","phone"=>"685","iso"=>"WS","code"=>"WSM"],
            ["name"=>"San Marino","phone"=>"378","iso"=>"SM","code"=>"SMR"],
            ["name"=>"Sao Tome and Principe","phone"=>"239","iso"=>"ST","code"=>"STP"],
            ["name"=>"Saudi Arabia","phone"=>"966","iso"=>"SA","code"=>"SAU"],
            ["name"=>"Senegal","phone"=>"221","iso"=>"SN","code"=>"SEN"],
            ["name"=>"Serbia","phone"=>"381","iso"=>"RS","code"=>"SRB"],
            ["name"=>"Seychelles","phone"=>"248","iso"=>"SC","code"=>"SYC"],
            ["name"=>"Sierra Leone","phone"=>"232","iso"=>"SL","code"=>"SLE"],
            ["name"=>"Singapore","phone"=>"65","iso"=>"SG","code"=>"SGP"],
            ["name"=>"Sint Maarten","phone"=>"1-721","iso"=>"SX","code"=>"SXM"],
            ["name"=>"Slovakia","phone"=>"421","iso"=>"SK","code"=>"SVK"],
            ["name"=>"Slovenia","phone"=>"386","iso"=>"SI","code"=>"SVN"],
            ["name"=>"Solomon Islands","phone"=>"677","iso"=>"SB","code"=>"SLB"],
            ["name"=>"Somalia","phone"=>"252","iso"=>"SO","code"=>"SOM"],
            ["name"=>"South Africa","phone"=>"27","iso"=>"ZA","code"=>"ZAF"],
            ["name"=>"South Korea","phone"=>"82","iso"=>"KR","code"=>"KOR"],
            ["name"=>"South Sudan","phone"=>"211","iso"=>"SS","code"=>"SSD"],
            ["name"=>"Spain","phone"=>"34","iso"=>"ES","code"=>"ESP"],
            ["name"=>"Sri Lanka","phone"=>"94","iso"=>"LK","code"=>"LKA"],
            ["name"=>"Sudan","phone"=>"249","iso"=>"SD","code"=>"SDN"],
            ["name"=>"Suriname","phone"=>"597","iso"=>"SR","code"=>"SUR"],
            ["name"=>"Svalbard and Jan Mayen","phone"=>"47","iso"=>"SJ","code"=>"SJM"],
            ["name"=>"Swaziland","phone"=>"268","iso"=>"SZ","code"=>"SWZ"],
            ["name"=>"Sweden","phone"=>"46","iso"=>"SE","code"=>"SWE"],
            ["name"=>"Switzerland","phone"=>"41","iso"=>"CH","code"=>"CHE"],
            ["name"=>"Syria","phone"=>"963","iso"=>"SY","code"=>"SYR"],
            ["name"=>"Taiwan","phone"=>"886","iso"=>"TW","code"=>"TWN"],
            ["name"=>"Tajikistan","phone"=>"992","iso"=>"TJ","code"=>"TJK"],
            ["name"=>"Tanzania","phone"=>"255","iso"=>"TZ","code"=>"TZA"],
            ["name"=>"Thailand","phone"=>"66","iso"=>"TH","code"=>"THA"],
            ["name"=>"Togo","phone"=>"228","iso"=>"TG","code"=>"TGO"],
            ["name"=>"Tokelau","phone"=>"690","iso"=>"TK","code"=>"TKL"],
            ["name"=>"Tonga","phone"=>"676","iso"=>"TO","code"=>"TON"],
            ["name"=>"Trinidad and Tobago","phone"=>"1-868","iso"=>"TT","code"=>"TTO"],
            ["name"=>"Tunisia","phone"=>"216","iso"=>"TN","code"=>"TUN"],
            ["name"=>"Turkey","phone"=>"90","iso"=>"TR","code"=>"TUR"],
            ["name"=>"Turkmenistan","phone"=>"993","iso"=>"TM","code"=>"TKM"],
            ["name"=>"Turks and Caicos Islands","phone"=>"1-649","iso"=>"TC","code"=>"TCA"],
            ["name"=>"Tuvalu","phone"=>"688","iso"=>"TV","code"=>"TUV"],
            ["name"=>"U.S. Virgin Islands","phone"=>"1-340","iso"=>"VI","code"=>"VIR"],
            ["name"=>"Uganda","phone"=>"256","iso"=>"UG","code"=>"UGA"],
            ["name"=>"Ukraine","phone"=>"380","iso"=>"UA","code"=>"UKR"],
            ["name"=>"United Arab Emirates","phone"=>"971","iso"=>"AE","code"=>"ARE"],
            ["name"=>"United Kingdom","phone"=>"44","iso"=>"GB","code"=>"GBR"],
            ["name"=>"United States","phone"=>"1","iso"=>"US","code"=>"USA"],
            ["name"=>"Uruguay","phone"=>"598","iso"=>"UY","code"=>"URY"],
            ["name"=>"Uzbekistan","phone"=>"998","iso"=>"UZ","code"=>"UZB"],
            ["name"=>"Vanuatu","phone"=>"678","iso"=>"VU","code"=>"VUT"],
            ["name"=>"Vatican","phone"=>"379","iso"=>"VA","code"=>"VAT"],
            ["name"=>"Venezuela","phone"=>"58","iso"=>"VE","code"=>"VEN"],
            ["name"=>"Vietnam","phone"=>"84","iso"=>"VN","code"=>"VNM"],
            ["name"=>"Wallis and Futuna","phone"=>"681","iso"=>"WF","code"=>"WLF"],
            ["name"=>"Western Sahara","phone"=>"212","iso"=>"EH","code"=>"ESH"],
            ["name"=>"Yemen","phone"=>"967","iso"=>"YE","code"=>"YEM"],
            ["name"=>"Zambia","phone"=>"260","iso"=>"ZM","code"=>"ZMB"],
            ["name"=>"Zimbabwe","phone"=>"263","iso"=>"ZW","code"=>"ZWE"]
        ]);
    }
}
