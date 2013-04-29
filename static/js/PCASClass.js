﻿<!--
/*PCAS (Province City Area Selector 省、市、地区联动选择JS封装类) Ver 2.01 数据压缩完整版*\

　制作时间:2005-12-30
　更新时间:2006-01-24
　数据修正:2006-08-17
　文档大小:18KB
　演示地址:http://www.popub.net/script/PCAS.html
　下载地址:http://www.popub.net/script/PCASClass.js
　应用说明:页面包含<script type="text/javascript" src="PCASClass.js"></script>
	省市联动
		new PCAS("Province","City")
		new PCAS("Province","City","吉林省")
		new PCAS("Province","City","吉林省","吉林市")
	省市地区联动
		new PCAS("Province","City","Area")
		new PCAS("Province","City","Area","吉林省")
		new PCAS("Province","City","Area","吉林省","松原市")
		new PCAS("Province","City","Area","吉林省","松原市","宁江区")
	省、市、地区对象取得的值均为实际值。
	注：省、市、地区提示信息选项的值为""(空字符串)

　感谢
　　　网友418528#gmail.com对数据进行的核实工作 2006-08-07

\***程序制作/版权所有:崔永祥(333) E-Mail:zhadan007@21cn.com 网址:http://www.popub.net***/

SPT="--请选择省份--";
SCT="--请选择城市--";
SAT="--请选择地区--";
ShowT=1;		//提示文字 0:不显示 1:显示
PCAD="京$辖y{{崇文y宣3y朝yI/yJ景y淀y]头沟y房yay顺义y4y%y怀柔y谷z辖~密K~延庆<#天津$辖y0y€y€y开y€y红桥y塘沽y汉沽y_y丽yUy津y辰y3Oy宝坻z辖~€~静~蓟<#€uJf庄@Gy桥y桥yXy井陉矿y裕Xy井陉~正V~栾[行唐~灵寿~b邑~深泽~赞皇~无极~~元氏~赵~辛集w藁w晋wgw鹿ix唐@路y路yY冶y开yIyI润y滦~滦~g亭~迁~玉田~唐~遵Qw迁x秦皇5@_y关y戴€yU满.4黎~抚~卢^邯郸@邯y丛/y复%y峰峰矿y邯郸~B漳~成~名~涉~磁~肥m~C年~邱~鸡泽~n~馆陶~魏~曲周~3x邢/@桥y桥y邢/~B[内丘~柏m~o尧~任~0~晋~巨鹿~€~n宗~m~威~O€~B~宫wc€x保V@}}}满[O苑~涞1~阜~徐1~V%~唐~b~容[涞>~望L~~易~曲~蠡~顺~博野~雄~涿wVwdwb碑店x张fR@桥y桥y宣Qy下花园y宣Q~张~康保~沽>~尚义~蔚~p~怀~万全~怀来~涿鹿~赤[崇礼^承:@双桥y双滦y鹰手营j矿y承:~%o~i~滦~oQ~I满.宽满.围场满蒙Y?沧@Xy运€y沧~U~光~%~盐~肃~皮~吴桥~献~孟村回.泊头w任丘wq骅w€间x廊坊@次yny固~CO~香€~[文~厂回.霸w三€x衡1@桃{枣强~3邑~3强~饶~~故[景~阜[冀w深#u太p@小店y迎泽y杏花岭y尖草坪y万柏8y晋>yO徐~曲~娄烦~Y交x同@{矿y郊y荣yb~天镇~n灵~灵丘~浑>~左K~同^i@{矿y郊yV~盂^G治@{郊yG治~襄垣~屯留~顺~黎[壶关~Gj~3m~沁~沁>~潞x晋@{沁1~[M&~泽~bx朔@朔{鲁y阴~应~右玉~怀仁^晋@榆次y榆社~左权~0顺~昔~寿~太谷~祁~遥~灵J~介休x运@盐;yB猗~万荣~闻喜~稷~绛~绛~垣曲~夏~陆~芮[C济w€津x忻@忻府yV襄~五/~代~繁峙~3~静g~神池~五寨~岢岚~€曲~保:~偏关~pxB汾@尧Ly曲沃~翼[襄汾~洪洞~Y~泽~浮~W~m~~隰~C0~蒲~汾~侯Aw霍x吕梁@离Jy文1~交[%~B~柳8~J楼~岚~方~~交R~孝义w汾#内蒙Y 区$呼0浩D@{回民y玉iy赛罕y土默D左v托托~08格~O1€~3&^包头@€y昆L仑yUyJ拐y`K矿y九py土默D右v固~e罕茂明联合旗|S@勃湾yySez赤峰@红y元宝y松yE鲁科沁v28左v28右v8~什腾v翁牛Dv喀喇沁v[敖汉旗|a辽@科沁y科沁左翼v科沁左翼后v开鲁~库伦v奈曼v扎鲁Dv霍8郭勒x鄂多7w胜ye6Dv准格v鄂托前v鄂托v杭锦vS审v伊9霍洛旗|呼伦贝@6yE荣v莫力e瓦e斡'v鄂伦春 v鄂温'v陈2虎v2虎左v2虎右v满洲Nw牙Jw扎F屯w额Y纳w根€x2彦淖@B€y五p~磴R~S6D前vS6DvS6D后v杭锦后旗|SF察r@集y卓资~Q:~商L~%0~凉[察k右翼前v察k右翼v察k右翼后v四j王vI镇x%盟,SF浩DwEw科沁右翼前v科沁右翼v扎赉Dv突i^锡8郭勒盟,二连浩Dw锡8浩DwE2嘎v苏=D左v苏=D右vS珠穆沁vS珠穆沁v太仆寺v镶qv正镶`v正蓝v多伦^E6善盟,E6善左vE6善右v额济纳旗#辽u沈@0y沈€yy皇姑y铁y苏f屯yMyjy于洪y辽~康~法库~民x连@y岗yc€Ry甘井jy旅顺Ry9yG~瓦房店w普F店w庄€x鞍@铁y铁y立y千y/~岫岩满.x抚顺@抚y洲y望花y顺{抚顺~宾满.Op满?本H@yH;y明y芬y本H满.桓仁满?丹@元宝y振%y振y宽甸满._w凤x锦@Y塔y凌€y太0y黑~义~凌wx营R@站前y}鲅鱼圈y老边y盖wJ桥x阜@y邱y太yO€]y细€y阜蒙Y.彰3^辽@`塔y文圣y宏伟y弓G岭y太j€y辽~灯塔x盘锦@双/jy%o/y洼~盘^铁岭@银yO€y铁岭~I~4图~调兵w开px朝@双塔y{朝~建~喀喇沁左翼蒙Y.票w凌>x葫芦5@连y_y票y绥~建4~%#W8uG春@关y宽{朝y二道y绿园y双y农~九/w榆树w:惠xW8@4邑y潭y船营yI满yCW~蛟€w桦甸w舒Fw磐Jx四@铁y铁y梨树~伊a满.公主岭w双辽x辽>@yyI~辽^aQ@4y二道yaQ~辉~柳€~梅€Rw集x`@八道y抚松~靖宇~G`朝鲜.>~Bx松p@y前郭Z7蒙Y.G岭~乾~扶余^`@洮y镇赉~a榆~洮wx延边朝鲜+延Ww图们w敦Qw珲春w井w0w汪O~图<#黑uk滨@道Ny岗y道外y香坊y动力y房y松y呼Fy依F~方正~宾~2彦~木F~a€~延寿~Ew双w尚志w五常x齐齐k@cy建Xy铁锋y昂昂Hy富6基y碾jy梅N7e斡y~依~泰来~甘~富裕~~~拜i~讷€x鸡@鸡冠y恒y滴道y梨树yj€y麻y鸡~虎8w密x鹤岗@向y工农yy%yy%y萝~绥滨^双鸭@尖y岭y四方/y宝y集贤~友谊~宝O~饶€^庆@萨图y凤y让胡路y红岗y同y肇~肇>~8甸~杜伯D蒙Y?伊春@伊春y岔y友好y8y翠峦yUy美Hy9屯y五营ySA€y汤旺€y带岭yS伊岭y红星y上甘岭y嘉荫~铁力x佳木7@C红y向y前进y风y郊y桦~桦&~汤p~抚远~同w富锦x七/€@%y桃y茄j€y勃T^牡丹@y明y爱民yy~8R~绥芬€w8ww穆棱x黑€@爱辉y嫩~逊~孙吴~w五连池x绥Q@8y望奎~F~U冈~庆~明1~绥棱~ew肇w伦x%岭ly呼玛~塔€~漠€<#上$辖yq浦y卢湾y徐汇yGy静y普陀y闸y虹Ry杨浦y闵行y宝y嘉Vy浦y9y松yU浦y汇y奉贤z辖~崇明<#苏u京@玄3y`下y秦淮y建邺y鼓楼y下关y浦Ry栖霞y雨花/yy六合y溧1~b淳^无锡@崇yGy塘y锡y惠y滨;y阴ws%x徐@鼓楼yKy九Ny贾汪yiyI~沛~铜~睢~沂w邳x常@天y钟楼y戚墅堰yy3进y溧w9坛x苏@沧浪yy9阊y虎丘y吴y相{常熟w张f_w昆w吴w太仓xa@崇&y_闸y~如~启w如皋waw]x连K_@连Ky浦yy赣榆~~灌K~灌^淮@O€y楚y淮阴yO浦y涟1~洪泽~盱眙~9;^盐@亭;y盐Ly响1~滨~阜~射~建;~/wIx扬@nMy邗y维扬y宝应~仪征wb邮wLx镇@京Ry润y丹徒y丹w扬w句容x泰@Myb_y%Qw靖w泰%w姜堰x宿迁@宿{宿豫y沭~泗~泗洪<#浙u杭@上{下{干y拱墅y;y滨y萧y余杭y桐庐~淳~建:w富wBx波@曙yyy仑y镇y鄞y象~~余姚w慈Hw奉Qx温@鹿{湾y瓯y洞头~C嘉~~苍~文成~泰顺~瑞wgOx嘉%@秀{秀洲y嘉善~盐~w;w桐mx;@吴%y浔y:O~G%~W^绍%@越{绍%~4~诸暨w上虞w嵊x9X@婺{9y3义~浦~磐~FHw义SwwC康x衢@柯{衢y常~开Q~游~x舟@Vy普陀y岱~嵊泗^/@椒yq岩y路桥y玉环~三]~天/~仙居~温岭wBx丽1@莲LyU田~缙K~遂4~松~K0~庆元~景畲.i#徽u合肥@瑶y庐y蜀y包€yGI~肥~肥^芜;@镜;y弋y鸠y三y芜;~繁4~M^蚌埠@j;y蚌y禹会y淮上y怀远~五€~固镇^淮@ay田f庵y谢f集y八公y潘集y凤/^A鞍@9f庄y花y雨y当涂^淮@杜集y相y烈y濉H^铜M@铜官y狮jy郊y铜M^庆@迎y观ys秀y怀~枞~潜~太;~宿松~望~岳~桐xq@屯Hyqy徽y歙~休~黟~祁]^滁@琅琊y谯y来~全椒~V远~凤~天Gw明光x阜@颍y颍y颍iyBi~太0~阜~颍上~界首x宿@埇桥y砀~萧~灵璧~泗^巢;@居巢y庐~无为~含~0^六@9y裕y寿~霍邱~舒[9寨~霍^亳@谯{涡~蒙[T辛^池@贵池y至~J/~U^宣@宣y郎H~n:~泾~绩H~旌:~d#福建u福@鼓楼y/y仓yA尾y晋y闽侯~连~Z>~闽O~C泰~潭~福OwGgx厦]@思明y沧y;Ny集美y同y翔z莆田@厢y涵y荔{秀屿y仙游^三明@梅列y三元y明H~O流~Q~田~尤H~c~将g~泰~建~Cxi@鲤{I泽y洛yi_y惠~H~C春~:Q~9]~J狮w晋wx漳@芗{文yK霄~漳浦~诏~G泰~~靖~0~X~x@延y顺4~浦[光泽~松H~政0~邵3w3夷w建瓯w建x岩@ZyG汀~CV~上杭~3~连[漳x:@蕉{霞浦~Y田~屏~寿~周~柘荣~福w福鼎#u4@;y;yUK谱y湾NyU;y4~建~义~进贤^景:镇@4y珠y浮梁~gx萍m@>y湘y莲花~上栗~芦H^九@庐y浔y九~3~修1~C修~:~星j~L4~;R~彭泽~瑞4x余@渝1y分s^鹰潭@月;y余~贵Hx赣@章贡y赣~信I~余~上犹~崇义~远~~V~全~L~于L~%d~会4~寻S~J[瑞9w康xW@WyUpyW~W1~峡~干~CI~泰0~遂&~万~福~C~井冈xs春@袁y奉~万载~上b~sI~靖~铜鼓~Iw樟树wbx抚@B&y[黎&~I~崇仁~g~sq~9H~资H~m~n4^上饶@信y上饶~nI~玉~铅~横峰~弋~余干~鄱~万年~婺>~:%#u济@历下yy槐荫y天桥y历{GOy阴~济~商€~章丘xU5@yy四方yq5y崂y李沧yy胶w即墨w度w胶w莱x淄博@淄&y张店y博yB淄y周村y桓/~bU~沂>^枣庄@y薛{峄{/儿庄y亭y滕x营@营y€Ry垦T~T津~n饶^烟/@芝罘y福y牟y莱yG5~Rw莱w莱w蓬莱w招远w栖霞wx潍坊@潍{寒亭y坊jy奎文yB朐~4g~Uw诸w寿光w丘wb密w4邑x济@y任{微~鱼/~9m~嘉祥~汶上~泗1~梁~曲阜w兖w邹x泰@泰y岱岳y~~泰w肥x威@环翠y文登w荣成w乳x日照@_y岚y五莲~莒^莱芜@莱{钢zB沂@FyZ庄y€y沂~郯[沂1~苍~费~邑~莒~蒙阴~B沭^:@:{M~津~庆K~B邑~齐€~p~夏津~3[gMw禹x聊@4府y谷~莘~茌~E~冠~b唐~BOx滨@滨{惠民~信~无棣~沾Q~博%~邹^菏泽@牡丹y曹~单~成3~巨野~郓[鄄[V陶~明<#€u郑@py二七y管回y91y上街y惠济y牟~巩义w荥w密w郑w登封x开封@亭y顺€回y鼓楼y禹王/y9明y杞~a许~尉氏~开封~F考^洛@老{工y廛€回y涧yWTy洛y孟津~~栾&~嵩~汝~s~洛~伊&~偃师x顶@Xy卫yJy湛€y宝I~叶~鲁~郏~舞钢w汝x@文峰y关y殷Lyy~汤阴~滑~内q~8x鹤壁@鹤y{淇滨y浚~淇^m@红旗y卫滨y凤iy牧野ym~获嘉~p~延津~封丘~G垣~卫辉w辉<x焦作@解放y站yA村yy修3~博爱~3陟~温~济>w沁w孟x濮@XyOI~g~范~/前~濮^许4@魏Ly许4~鄢M~襄[禹wG葛x漯€@>汇y郾{召My舞~B颍^三]峡@;滨y渑池~陕~卢氏~义Aw灵宝x@宛{卧y召~方[峡~镇~内m~淅&~社旗~唐€~野~桐柏~邓x商丘@梁园y睢y民权~睢~M~柘[虞[夏邑~Cx信@浉€y桥yZ~光~~商[固始~潢&~淮滨~息^周R@&汇y扶沟~X~商1~沈丘~郸[淮~太康~鹿邑~项x驻A店@驿{~上蔡~舆~正~确~泌~汝~遂~蔡<#;u3汉@岸y汉y硚Ry汉y34yUy洪y;y汉y蔡甸y夏yq陂y洲zqJ@qJ_y塞y下陆y铁y~冶x十堰@茅箭y张湾y郧~郧~竹~竹H~房~丹Rxs4@My伍f岗y点军y猇亭y夷My远~%~秭归~G土f.五峰土f.sLw当w枝x襄樊@襄{樊{襄y漳~谷[保康~老€Rw枣wsx鄂@梁j;yX容y鄂z荆]@宝y掇刀y京~c洋~钟祥x孝感@孝y孝4~悟~K梦~应w陆w汉&x荆@c}荆y公~监T~M~J首w洪;w松滋xq冈@qy团风~红~Z田~英~浠1~蕲春~q梅~麻w3穴x咸@咸y嘉鱼~a[崇~a~赤壁x随@曾Lyn1x恩施土fP+恩施wT&w建始~2~宣恩~咸I~来凤~鹤峰^省直辖行政单位,仙桃w潜w天]w神农架8区#;uGc@芙蓉y天心y岳麓y开福y雨花yGc~望[m~浏x株洲@荷塘y芦淞yJ峰y天元y株洲~攸~茶M~炎M~醴Mx湘潭@雨;y岳塘y湘潭~湘mw韶x衡@珠晖y雁峰yJ鼓y蒸湘y岳y衡~衡~衡~衡~祁~耒w常x邵@双Oy祥y塔y邵~邵~邵~o回~洞R~绥~~步P.3冈x岳@岳楼yKHy君y岳~X容~湘阴~~汨ZwB湘x常:@3My鼎{m~汉寿~澧~B澧~桃>~J]~津x张f界@CVy3M>y慈T~桑植^益@资y赫y~桃~Q~沅x郴@;y苏仙y桂~s章~C%~嘉禾~B3~汝[桂~仁~资%xC@零My冷1滩y祁~~双牌~道~C~远~蓝~田~X瑶?怀Q@鹤{方~沅M~辰H~溆浦~会同~麻P.晃侗.芷侗.靖P侗.a道侗.洪x娄底@娄星y双峰~Q~冷1w涟>x湘土fP+W首w泸H~凤凰~花垣~保靖~Y丈~C顺~<#nun@荔湾y越秀y珠y天€y`Kyq埔y番禺y花Lycy萝岗y增w从Qx韶关@3y浈y曲y始%~仁Q~翁>~乳>瑶.I~g4w雄x深圳@Z;y福田yy宝y岗y盐田z珠@香洲y斗]y9湾z汕头@;y9y濠y潮y潮y澄y澳^佛@禅{y顺:y三1yb明z]@蓬yy会y/w开w鹤w恩x湛@赤坎y霞y坡头y麻章y遂H~徐闻~廉w雷w吴&x茂名@茂y茂_y电`~bwQw信sx肇庆@端y鼎;yn~怀集~封开~:庆~b要w四会x惠@惠{惠y博Z~惠~]^梅@梅y梅~埔~I顺~五X~远~蕉岭~%x汕尾@{I~陆€~陆Ix€>@>{紫9~&~连~0~>^@{~~春xO远@O{佛冈~~连壮瑶.连瑶.O~英:w连x莞xx潮@湘桥y潮~饶^揭@榕{揭~揭~惠来~普xK浮@K{%~郁~K~ZV#n壮'区$@%yU秀yym塘y良庆y邕y3鸣~o~A~上8~宾~横^柳@y鱼峰y柳y柳y柳~柳[鹿寨~融~融1P.三侗?桂8@秀峰y叠彩y象y七星y雁y朔~B桂~灵&~全~%~C福~灌~胜各.资>~g~荔蒲~恭瑶?梧@万秀y蝶yG洲y苍梧~藤~蒙~岑Hx@{银y铁_y合浦^防_@_Ry防{上思~%x钦@钦y钦y灵~浦^贵_@_y_y覃塘y~桂x玉8@玉y容~陆&~博`~%业~流x百色@右y田~田~果~:保~靖~那坡~凌K~g业~田8~8~o8各?贺@八步y昭~钟~富&瑶?€池@9y丹~天峨~凤~F~Z仫佬.环毛.2A瑶.L瑶.Q瑶.sx来宾@%宾y忻[象~3宣~9秀瑶.合x崇左@洲y扶绥~明~~~天等~凭祥#uR@秀英yXy琼y美Fz三!w辖z省直辖<级行政单位,五指w琼w儋w文4w万w方wV~屯4~澄迈~Bb~`c黎.4黎.g黎.M1黎.保亭黎P.琼黎P.c群5,c群5,c群5的5礁及其域#重庆$辖y万y涪My渝y渡Ryyc坪坝y九坡y岸y碚y万盛y双桥y渝y2y黔yG寿z辖~綦~潼~铜梁~足~荣4~璧~梁~R~IL~垫~3o~忠~开~K~奉节~巫~巫H~J柱土f.秀土fP.酉土fP.彭1P土f?<级w津w合&wC&w&#四&u成L@锦yU羊y9牛y3侯y成Xyi驿yU`yLy温y9堂~双流~郫~邑~蒲~津~L堰w彭w邛崃w崇x自贡@自流井y贡井yy沿滩y荣~富顺^攀枝花@yy仁0y米易~盐边^泸@y纳HyA潭y泸~合~叙C~Y蔺^:@旌y~Z~n汉w什邡w绵竹x绵@涪{游仙y三/~盐亭~~梓潼~&羌.3~油xn元@y元坝y朝天y旺苍~U&~剑阁~苍H^遂@船y居y蓬H~射洪~英^内@y%y威远~资~o4^g@yc湾y五a桥y9R€y犍为~井研~夹~沐&~峨边h.A边h.峨眉x充@顺庆yb坪y嘉My部~营~蓬~仪陇~充~阆x眉@坡y仁寿~彭~洪雅~丹棱~U神^s宾@翠屏ys宾~H~~G~b~珙~筠连~%文~屏^n@ny岳池~3胜~邻1~X蓥xe@a&ye~宣汉~开~竹~渠~万>x雅@雨{名~荥经~汉>~J棉~天全~芦~宝%^2@2ya~~4^资@雁y岳~g至~简xE坝藏羌+汶&~理~茂~松潘~九寨沟~9&~小9~黑1~A康~壤塘~E坝~若盖~红p^甘孜藏+康V~泸V~丹2~九~雅~道孚~炉霍~甘孜~~:格~`玉~J渠~色e~理塘~2塘~m[稻[得荣^凉h+4w木N藏.盐>~:4~会理~会~~普格~r拖~9~昭觉~喜:~冕~越~甘洛~美姑~雷波<#贵u贵@明yK岩y花HyS当y`Ky小€y开~息烽~修文~O镇x六盘1w钟y六枝Dy1[盘^遵义@红花岗y汇&y遵义~桐梓~绥~正~道真仡佬P.务&仡佬P.凤冈~湄潭~余庆~习1~赤1w仁怀x顺@秀y坝~普V~镇r依P.关岭r依P.紫KPr依?铜仁ly铜仁wR~玉屏侗.J阡~思~印土fP.:~沿€土f.松桃P.万Dz黔r依P+%义w%仁~普~晴o~贞I~望谟~册亨~^毕节ly毕节w方~黔~9c~织9~纳雍~威h回P.赫章^黔P侗+凯Nwq~施秉~三穗~镇远~岑巩~天柱~锦屏~剑€~/~黎~榕~从~雷~麻~丹寨^黔r依P+L匀w福iw荔波~贵V~瓮~独~塘~Z甸~G顺~N~惠1~三L1'<#Ku昆明@五Xy盘y官渡yy&y呈贡~晋~富民~s良~J8h.嵩明~禄劝hP.寻甸回h.x曲靖@麒麟yA~陆良~师宗~Z~富>~会泽~沾益~宣威x玉H@红塔y&~澄~a~X~易]~峨h.h傣.元k=h傣?保@oy施甸~腾冲~M~4^昭a@昭y鲁甸~巧f~盐津~关~C善~绥~镇雄~h良~威信~1富^丽@Y{玉纳.C胜~X坪~蒗h?思茅@翠Ky普洱k=h.墨k=.景h.景谷傣h.镇沅hk=6祜.k=h.孟连傣6祜佤.澜沧6祜.盟佤?B沧@B翔y凤庆~K~C:~镇康~双6祜佤r朗傣.耿A傣佤.沧>佤?楚雄h+楚雄w双柏~牟V~X~姚~姚~C仁~元谋~3V~禄I^红€k=h+个旧w开远w蒙自~屏边P.建1~J屏~弥勒~泸~元~红€~9P瑶傣.绿春~€R瑶?文壮P+文~砚~畴~麻栗坡~A关~丘~n~富^双版纳傣+景洪w勐~勐腊^理`+理w漾濞h.祥K~宾&~弥渡~涧h.巍h回.C~K~洱>~剑&~鹤庆^:宏傣景颇+瑞丽w潞w梁€~盈~陇&^怒傈僳+泸1~福贡~贡独怒.F坪`普米?迪庆藏+香格N6~:钦~维傈僳'<#藏 区$6萨@关y8周~当雄~=木~曲1~堆:庆~e孜~墨竹工卡^4Lly4L~e~贡觉~类S齐~丁U~察雅~八宿~左贡~芒康~洛o~边坝^ly乃~扎囊~贡嘎~桑日~琼结~曲松~措美~洛扎~t查~oj~错那~浪卡j^日喀则ly日喀则w木8~孜~V日~萨迦~6孜~昂仁~谢a]~`朗~仁r~康A~V结~仲2~!~Wo~聂6木~萨嘎~岗2^那曲ly那曲~嘉黎~比如~聂荣~多~申扎~索~班戈~2U~=玛^ENly普F~札e~噶~日土~革W~改则~措勤^8芝ly8芝~工re~米8~墨脱~波密~察隅~朗<#陕u@{碑8y莲;y灞桥y未央y雁塔y阎良yB潼yGy蓝田~周至~户~bM^铜&@王益y印/y耀ys君^宝鸡@渭滨y9/y陈仓y凤翔~岐~扶风~眉~陇~千~麟游~凤~太`^咸@秦Ly杨凌y渭{三p~泾~乾~礼i~C寿~彬~G3~旬邑~淳Q~3功~%x渭@B渭yX~潼关~荔~合~澄[蒲[`1~富~韩wX阴x延@宝塔y延G~延&~jG~塞~志丹~吴起~甘i~富~洛&~s&~q~qM^汉@汉/y郑~固~洋~m~勉~强~略~镇2~留坝~佛坪^榆8@榆y神木~府谷~横~靖边~V边~绥:~米脂~佳~吴堡~O涧~j洲^康@汉滨y汉阴~Ji~陕~紫~岚皋~T~镇坪~旬~`€^商洛@商y洛~丹凤~商~~镇~柞1<#甘肃uF@关y七N€y固yy红YyC登~皋F~榆^嘉峪关w辖z94@9&yC4^`银@`银y&y靖远~会~景泰^天1@秦{道yO1~秦~甘谷~3~张f&回?3威@凉y民勤~Y浪~天祝藏?张掖@甘y肃裕固.民g~B泽~b/~丹^凉@崆峒y泾&~灵/~崇信~X亭~庄浪~静^酒i@肃y9塔~~肃蒙Y.E塞k萨.玉]w敦煌x庆@峰y庆[环~X池~合1~正~~镇p^V@Vya渭~陇~渭>~B洮~漳~岷^陇@3Ly成~文~宕4~康~0~礼~徽~两当^B夏回+B夏wB夏~康g~C靖~n€~0政~m.积J保m撒6?甘藏+合作wB潭~卓=~舟曲~迭部~玛曲~碌曲~夏€<#Uu@yyyya回土.湟~湟>^ly~民0回土.gL~互助土.Qo回.循Q撒6?藏+]>回.祁连~晏~刚察^q藏+同仁~尖扎~泽库~€蒙Y?藏+共0~同:~贵:~%~贵^果洛藏+玛沁~班玛~甘:~e日~久治~玛多^玉树藏+玉树~杂多~称多~治多~囊谦~曲麻莱^蒙Y藏+格木w:令kwSF~LF~天峻<#夏回'区$银&@%庆y夏y9凤yC~贺F~灵3xJ嘴@3Ry惠农yZ^吴忠@Tay盐池~同心~U铜峡x固p@pyW~o:~泾>~彭^卫@c坡头y~p<#疆维吾 区$S鲁木齐@天yc依2y}1磨沟y头屯€ye坂{yS鲁木齐^6玛依@独jy6玛依y`碱滩yS禾z吐鲁番ly吐鲁番w鄯善~托逊^k密lyk密w2N坤k萨 ~伊吾^4W回+4Ww阜康w米iw呼图壁~玛纳7~奇/~W木萨~木垒k萨 ^博塔6蒙Y ,博gw精€~温i^2音郭楞蒙Y ,库勒w轮/~尉犁~若羌~且末~焉耆回.0静~0硕~博;^E苏lyE苏w温宿~库车~c雅~0~拜[S什~E瓦提~柯坪^孜勒苏柯孜 ,E图什wE陶~E合奇~S恰^喀什ly喀什w疏附~疏勒~英Wc~泽普~莎车~叶[麦盖提~岳普;~伽师~2楚~塔什库干塔W ^0田ly0田w0田~墨玉~皮~洛浦~策勒~于田~民I^伊犁k萨 ,伊w奎屯w伊~察r查锡伯 ~霍[巩留~>~昭苏~D7~=勒^塔ly塔wS苏w额敏~c湾~托N~裕民~0r赛蒙Y ^E勒泰lyE勒泰wr津~富蕴~福~k2€~U€~W木乃^省直辖行政单位,J€jwE6w图木舒w五f渠#香_D别行政区$香_,香_D别行政区#澳]D别行政区$澳],澳]D别行政区#/湾u/w正y同yy松yy万Xy信义y士8y投y内;y_y文zb雄w%y前9y芩雅y盐埕y鼓y旗津y前镇y三民y左营y楠梓y小_z基ow仁爱y信义y正yygy暖暖y七堵z/wyyyyy屯y屯y屯z/wyyyyyz竹wyy香z嘉义wyz~/<(板桥),sF<(sF),竹<(竹),桃园<(桃园),P栗<(P栗),/<(Ip),彰Q<(彰Q),投<(投),嘉义<(太保),K8<(斗六),/<(营),b雄<(凤),屏<(屏),/<(/),花莲<(花莲),澎;<(A公)#其它$!洲,E富汗,28,孟t6d,不丹,文莱,缅甸,塞浦路7,印度,印度=!,伊朗,伊6,日本,约旦,朝鲜,科威D,老挝,A代夫,黎2嫩,A来!,以色列,蒙Y,=泊,E曼,2基7坦,2勒7坦,菲律宾,cDE6伯,t坡,7NF卡,叙T!,泰d,柬埔寨,土耳其,E联酋,越,也],韩d,d,d香_,d澳],d/湾|非洲,E及T!,哥6,厄NDN!,法Z群鸟,t那T群5()(67帕A7),贝,博茨瓦纳,r基纳法索,ro迪,喀麦o,t那T群5()(圣鲁7),佛得角,非,乍得,科摩Z,刚果,Wr提,埃及,埃塞俄比!,赤道几内!,t蓬,冈比!,t纳,几内!,非,几内!比绍,科D迪瓦,肯=!,莱索托,T比N!,T比!,Aet7t,A6维,AN,毛N塔=!,毛N求7,摩洛哥,莫桑比,=日,=日T!,留=旺5,卢旺e,塞内t,塞舌,塞6T昂,索AN,苏丹,7威士F,坦桑=!,圣赤勒拿,多哥,突=7,S干e,扎伊,赞比!,津2r韦,纳米比!,迪戈t!,桑给2,A约D5,圣多美0普8比|欧洲,E2=!,道,奥lT,比T时,保tT!,捷,丹麦,芬F,法d,:d,直rZ陀(英),希腊,匈牙T,冰5,爱F,意T,列支敦士登,7洛伐,卢森堡,A耳他,摩纳哥,荷F,挪威,波F,葡萄牙,A其顿,ZA=!,76夫,圣A力诺,班牙,瑞典,瑞士,英d,科Zl!,7洛文=!,梵蒂冈,波7=!0塞哥维那,俄Z7联邦,!美=!共0d,`俄Z7共0d,格鲁W!共0d,k萨7坦共0d,WW7坦共0d,S兹别7坦共0d,塔W7坦共0d,土库曼7坦共0d,SF,立陶宛,6脱维!,爱c=!,摩多瓦,E塞拜疆|美洲,圭65,提瓜02re,E根廷,E鲁25,E森松,2kA,22多7,伯T兹,百慕群5,玻T维!,2,t拿,开曼群5,智T,哥伦比!,多米=t联邦,哥7e黎t,Y2,多米=t共0d,厄瓜多,萨瓦多,法属圭!那,格8纳e,危lA6,圭!那,l,洪L67,牙买t,A提=(法),墨哥,蒙D塞6D5,荷属的列7群5,=t6瓜,2拿A,26圭,秘鲁,波多黎哥,圣皮埃5密o5(法),圣N7托弗0=维7,圣卢!,福F群5,维京群5(英),圣文森D5(英),维京群5(美),苏N,D立=e0多2哥,S6圭,美d,委内瑞6,格MF5,D70凯科7群5,瓜多Z普|洋洲,澳T!,科群5,斐济,法属波N=!、塔希提,瓦努E图,关5,基N27,AN!纳群5,途5,瑙鲁,咯N多=!群5,F,2r!几内!,萨摩!,萨摩!,所Z]群5,汤t,对诞5,威5,科科75,夏威夷,诺福5,帕劳,纽埃5,图瓦卢,托鲁,密Z=!,A绍群5,瓦N7t富士那群5";PCAStead="@/市,市辖区,/\\+/族自治州,/\\./族自治县,/\\?/族自治县|/'/族自治/ /自治/\\[/城县,/\\^/县|/~/县,/{/城区,/}/市区,/z/区|/y/区,/x/市|/w/市,/v/旗,/u/省$".split("/");PCAStore="山阳安南江州东西平宁€河新尔海族城龙市中北大克!亚%兴&川/台0和1水2巴3武4昌5岛6拉7斯8林9金:德;湖<县=尼>源A马B临C永D特E阿F兰G长H溪I丰J石K云L都M陵N里O清P苗Q化R口S乌T利U青V定W吉X华Y古Z罗]门_港`白a通b高c沙d国e达f家g乐h彝i泉j子k哈l地m乡n广o隆p原q黄r布s宜t加";for(i=0;i<PCAStore.length;i=i+2)PCAD=PCAD.replace(RegExp(PCAStore.substr(i,1),"g"),PCAStore.substr(i+1,1));for(i=0;i<PCAStead.length;i=i+2)PCAD=PCAD.replace(RegExp(PCAStead[i],"g"),PCAStead[i+1]);if(ShowT)PCAD=SPT+"$"+SCT+","+SAT+"#"+PCAD;PCAArea=[];PCAP=[];PCAC=[];PCAA=[];PCAN=PCAD.split("#");for(i=0;i<PCAN.length;i++){PCAA[i]=[];TArea=PCAN[i].split("$")[1].split("|");for(j=0;j<TArea.length;j++){PCAA[i][j]=TArea[j].split(",");if(PCAA[i][j].length==1)PCAA[i][j][1]=SAT;TArea[j]=TArea[j].split(",")[0]}PCAArea[i]=PCAN[i].split("$")[0]+","+TArea.join(",");PCAP[i]=PCAArea[i].split(",")[0];PCAC[i]=PCAArea[i].split(',')}function PCAS(){this.SelP=document.getElementsByName(arguments[0])[0];this.SelC=document.getElementsByName(arguments[1])[0];this.SelA=document.getElementsByName(arguments[2])[0];this.DefP=this.SelA?arguments[3]:arguments[2];this.DefC=this.SelA?arguments[4]:arguments[3];this.DefA=this.SelA?arguments[5]:arguments[4];this.SelP.PCA=this;this.SelC.PCA=this;this.SelP.onchange=function(){PCAS.SetC(this.PCA)};if(this.SelA)this.SelC.onchange=function(){PCAS.SetA(this.PCA)};PCAS.SetP(this)};PCAS.SetP=function(PCA){for(i=0;i<PCAP.length;i++){PCAPT=PCAPV=PCAP[i];if(PCAPT==SPT)PCAPV="";PCA.SelP.options.add(new Option(PCAPT,PCAPV));if(PCA.DefP==PCAPV)PCA.SelP[i].selected=true}PCAS.SetC(PCA)};PCAS.SetC=function(PCA){PI=PCA.SelP.selectedIndex;PCA.SelC.length=0;for(i=1;i<PCAC[PI].length;i++){PCACT=PCACV=PCAC[PI][i];if(PCACT==SCT)PCACV="";PCA.SelC.options.add(new Option(PCACT,PCACV));if(PCA.DefC==PCACV)PCA.SelC[i-1].selected=true}if(PCA.SelA)PCAS.SetA(PCA)};PCAS.SetA=function(PCA){PI=PCA.SelP.selectedIndex;CI=PCA.SelC.selectedIndex;PCA.SelA.length=0;for(i=1;i<PCAA[PI][CI].length;i++){PCAAT=PCAAV=PCAA[PI][CI][i];if(PCAAT==SAT)PCAAV="";PCA.SelA.options.add(new Option(PCAAT,PCAAV));if(PCA.DefA==PCAAV)PCA.SelA[i-1].selected=true}}
//-->
