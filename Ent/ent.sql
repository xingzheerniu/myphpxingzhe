# Host: localhost  (Version: 5.5.40)
# Date: 2015-10-18 21:00:46
# Generator: MySQL-Front 5.3  (Build 4.120)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "ent_dept"
#

DROP TABLE IF EXISTS `ent_dept`;
CREATE TABLE `ent_dept` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dept` varchar(255) NOT NULL DEFAULT '' COMMENT '所在部门',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='部门表';

#
# Data for table "ent_dept"
#

/*!40000 ALTER TABLE `ent_dept` DISABLE KEYS */;
INSERT INTO `ent_dept` VALUES (1,'研发部'),(2,'市场部'),(3,'人力资源'),(4,'财务部'),(5,'管理层');
/*!40000 ALTER TABLE `ent_dept` ENABLE KEYS */;

#
# Structure for table "ent_notice"
#

DROP TABLE IF EXISTS `ent_notice`;
CREATE TABLE `ent_notice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '' COMMENT '标题',
  `content` text NOT NULL COMMENT '公告内容',
  `scan` int(11) NOT NULL DEFAULT '0' COMMENT '指定的可查看的部门',
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT '发表人ID',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='公告表';

#
# Data for table "ent_notice"
#

/*!40000 ALTER TABLE `ent_notice` DISABLE KEYS */;
INSERT INTO `ent_notice` VALUES (1,'习主席访英是一次“超级国事访问”','<p>&nbsp;</p>\r\n\r\n<p><img alt=\"习主席访英是一次“超级国事访问”\" src=\"http://img1.gtimg.com/news/pics/hv1/195/226/1945/126531450.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>　　英国首都伦敦不仅是英国的政治、经济和文化中心，英国王室和政府部门所在地，同时也是世界性的金融贸易中心和文化名城。2006年，伦敦与北京结为友好城市。图为在英国伦敦&ldquo;伦敦眼&rdquo;上拍摄的泰晤士河畔。 新华社记者 韩岩摄</p>\r\n\r\n<p>　　习近平主席将于10月19日至23日对英国进行国事访问。这是近10年来中国国家元首首次对英国进行国事访问，必将为中英关系的发展提供历史性机遇。记者身处伦敦，真切感受到英国各界对习近平主席此访的热切期盼，以及对访问将推动英中关系取得更大发展、收获更大成果的衷心期待。</p>\r\n\r\n<p>　　习近平主席到访前夕，中英双方都在紧张有序地筹备访问的各项安排。即将参加为习近平主席举行欢迎仪式的英国皇家骑兵卫队检阅场已于上周早早挂出了中英两国国旗，亮眼夺目。</p>\r\n\r\n<p>　　<strong>习主席访英的&ldquo;四大看点&rdquo;</strong></p>\r\n\r\n<p>　　中国驻英国大使刘晓明日前在使馆举行的记者吹风会上透露，习近平主席此次访问有&ldquo;四大看点&rdquo;：</p>\r\n\r\n<p>　　一是意义重大。今年是中英全面战略伙伴关系第二个十年的开局之年，卡梅伦首相将今年称作英中关系的&ldquo;黄金年&rdquo;。习近平主席在中英关系的&ldquo;黄金年&rdquo;对英国进行国事访问正当其时。访问期间，两国领导人将共同为两国关系确立新的定位，树立新的目标，制定新的规划。所以说，访问具有承前启后、继往开来的重要意义，将成为两国关系新的里程碑，开启中英关系的&ldquo;黄金时代&rdquo;。</p>\r\n\r\n<p>　　二是规格超常。&ldquo;国事访问&rdquo;是一国国家元首对其他国家最高规格的访问。此次英方将举行传统、盛大的欢迎仪式、鸣放礼炮，举办国宴和伦敦金融城市长晚宴。此次访问在规格上超越以往，有许多&ldquo;增项&rdquo;。访问期间，英国王室三代成员均将先后参加接待习近平主席和彭丽媛女士；习近平主席将在英国议会发表演讲；卡梅伦首相除正式会谈外，还将陪同习近平主席出席多场在伦敦的活动，并一道赴曼彻斯特访问。卡梅伦还将与夫人萨曼莎邀请习近平主席夫妇赴首相乡间别墅契克斯做客。中方对此访同样予以高度重视。以往中国国家主席出访时通常顺访多国，此次习近平主席是专访英国，这样的情形极为罕见。所以说，此次习近平主席对英国的国事访问堪称一次&ldquo;超级国事访问&rdquo;。</p>\r\n\r\n<p>　　三是活动丰富。习近平主席此访既访首都伦敦，也到外地；既看城市，也看乡村；既有传统仪式，也有现代创意展示；既参观英国高科技企业和著名院校，也走访中资电信企业；既结识英国各界新朋友，也不忘为中英关系作出贡献的老朋友；既有许多正式的政治性会见，也有不少轻松的文化体育活动；既出席中英经贸论坛，也参加孔子学院大会。此外，习近平主席夫人彭丽媛女士的单独活动也很有特色，她将充分履行作为<a href=\"http://t.qq.com/WorldFoodProgramme#pref=qqcom.keyword\" target=\"_blank\">联合国</a>教科文组织&ldquo;促进女童和妇女教育特使&rdquo;的职责。可以预见，访问期间将亮点纷呈、精彩不断。</p>\r\n\r\n<p>　　四是此访硕果可待。访问期间，中英两国政府部门将签署一系列合作协议，进一步促进中英在经贸和人文等领域的合作。两国企业也将有合作大手笔。</p>\r\n\r\n<p>　　<strong>中国在西方最有力的支持者</strong></p>\r\n\r\n<p>　　中英两国都是伟大的国家，两国在历史上都对人类文明作出过重要贡献，对世界历史的发展产生过重大影响。时至今日，两国仍是具有全球性影响的大国，且都面临着进一步深化改革、发展经济和改善民生的任务，均致力于通过改革与创新促进增长，都视对方的发展为本国的重大机遇，都对彼此重大发展倡议抱有浓厚兴趣。因此，发展好中英关系符合两国人民的根本利益，也有利于世界的繁荣与和平。</p>\r\n\r\n<p>　　刘晓明回顾去年，也是在这样的记者会上，他曾对英国在发展对华关系上已经落在一些欧洲国家之后表示担忧。而今天，英国正在实现赶超，致力于成为中国在西方&ldquo;最有力的支持者&rdquo;和&ldquo;最好的伙伴&rdquo;。人们高兴地看到，英国正在成为欧洲乃至西方发展对华关系的&ldquo;领头羊&rdquo;。</p>\r\n\r\n<p>　　英国思想家伯克有句名言：&ldquo;伟人是国家的路标和里程碑。&rdquo;刘晓明说，伟人也应是国家关系的路标和里程碑。让我们共同祝愿习近平主席对英国的&ldquo;超级国事访问&rdquo;取得圆满成功，祝此访深化中英政治互信，促进共同发展，增进人民友谊，开创两国持久、开放、共赢的全面战略伙伴关系&ldquo;黄金时代&rdquo;。</p>\r\n\r\n<p>(光明日报)gggghhgghghghhggh</p>\r\n',1,6),(2,'中英关系新里程碑（大使随笔）','<p>习近平主席在新时期的这次里程碑式访问，承前启后、继往开来，必将为中英关系发展注入强劲动力，开启中英关系的&ldquo;黄金时代&rdquo;</p>\r\n\r\n<p>中国和英国分处亚欧大陆的两端，一个代表东方，一个代表西方。100多年前，当英国诗人吉卜林感叹&ldquo;东方是东方，西方是西方，东西方永不汇合&rdquo;时，又岂知今天英国要成为中国&ldquo;在西方最有力的支持者&rdquo;和&ldquo;在西方最好的伙伴&rdquo;。</p>\r\n\r\n<p>我担任中国驻英大使逾5年。5年来，我深切地感受到&ldquo;大不列颠&rdquo;确实是一个&ldquo;伟大&rdquo;的国家。英国人常说，中国有&ldquo;四大发明&rdquo;，英国有&ldquo;三大贡献&rdquo;&mdash;&mdash;英语、工业革命和议会制。就人类近现代文明而言，英国可以说作出了重大贡献，产生了无数的科学家、文学家、思想家和政治家。今天的英国，金融服务、科研教育和舆论影响仍居世界前列，许多国际上流行的新概念，如&ldquo;金砖国家&rdquo;&ldquo;低碳经济&rdquo;和&ldquo;创意产业&rdquo;都是英国人的创造。</p>\r\n\r\n<p>5年来，我深切感受到中英之间有许多兴趣相投、志同道合。中国是茶的故乡，英国人则不可一日无茶；中国是足球的起源地，英国则是现代足球的发源地；中国自古&ldquo;长城之内是花园&rdquo;，英国则园艺精湛，民众痴迷。更主要的是，中英都崇尚忠诚正直、礼貌温和、谨慎自制、坚韧不拔的民族精神，都具有&ldquo;己欲立而立人，己欲达而达人&rdquo;&ldquo;达则兼济天下&rdquo;的理想抱负，都拥有&ldquo;海纳百川、有容乃大&rdquo;的胸怀气度。这些品格精神铸就了英国的辉煌，也推动着今天的中国实现民族振兴。</p>\r\n\r\n<p>5年来，我更深切地感受到中英关系正进入崭新的时期。两国关系日趋稳定成熟，政治互信不断加强。双方充分发挥两国总理年度会晤及中英经济财金对话、高级别人文交流机制和战略对话&ldquo;三大支柱&rdquo;的引领作用，积极推动各领域合作，尊重彼此核心利益和重大关切。中英作为<a href=\"http://t.qq.com/WorldFoodProgramme#pref=qqcom.keyword\" target=\"_blank\">联合国</a>安理会常任理事国和二十国集团主要成员，积极承担国际责任，共同应对21世纪的全球挑战，两国关系的全球性和战略性不断增强。</p>\r\n\r\n<p>中英经贸合作势头强劲，成绩亮丽。中国已是英国第四大贸易伙伴，英国则是中国第一大投资目的国。伦敦成为除香港外最大人民币离岸交易中心。英国在双边本币互换、发售人民币债券和成立人民币清算行等诸多领域捷足先登。今年3月，英国在西方大国中率先宣布申请加入亚投行。两国重大基础设施项目合作即将开花结果。</p>\r\n\r\n<p>中英人文交流如火如荼，拉近了两国民众距离。在欧洲国家中，无论是中国留学生数量，还是孔子学院和孔子课堂数量，英国都高居榜首。中英都是文化大国，今年&ldquo;中英文化交流年&rdquo;成功举办，一系列以创新创意为主题的文化交流活动向两国民众展现了双方广阔合作前景。</p>\r\n\r\n<p>今年5月英国保守党政府执政以来，两国关系加速发展。英国领导人明确表示，今年是双边关系的&ldquo;黄金年&rdquo;；英国要做&ldquo;对中国最开放的欧洲国家&rdquo;和&ldquo;中国在西方最好的伙伴&rdquo;；未来两国关系将进入&ldquo;黄金十年&rdquo;。《诗》曰：&ldquo;投我以桃，报之以李。&rdquo;我相信，中英关系已驶入发展&ldquo;快车道&rdquo;，面临重大发展机遇期。</p>\r\n\r\n<p>金秋十月，习近平主席将应英国女王伊丽莎白二世邀请对英国进行国事访问，这是中国国家主席10年来首次对英国事访问。访问期间，习主席将与英方领导人共同规划双边关系发展的美好蓝图，推动两国建立持久、开放和共赢的全面战略伙伴关系。当前，英社会各界对习主席此访翘首以盼，期待着访问取得丰硕合作成果，在英掀起一股强劲的&ldquo;习旋风&rdquo;。</p>\r\n\r\n<p>我确信，习主席在新时期的这次里程碑式访问，承前启后、继往开来，必将为两国关系发展注入强劲动力，开启中英关系的&ldquo;黄金时代&rdquo;。</p>\r\n\r\n<p>（作者为中国驻英国大使刘晓明）</p>\r\n',3,6),(3,'研发部发布公告','<p>@中国之声：【铁路部门独家回应：车票挂失补办维护旅客利益】此前铁路部门遇到：甲买车票，乙没有买车票，甲把车票交给乙，乙凭车票进站乘车，甲购票记录进站乘车。铁路部门推出丢失车票挂失补办措施，旅客先办理补票、进站乘车，核实丢失车票使用情况后，到站再退回补票款。</p>\r\n\r\n<p>　　早前报道：【浙大学生起诉铁路部门因实名制车票丢失被迫补票】浙江大学学生小陈近日上车前发现丢了火车票，在列车上她向列车长出示了12306网站购票成功短信、邮件和身份证等，却仍被要求全价补票，并且无法退票。小陈感到不合理，便将<a href=\"http://t.qq.com/kmtielu2011#pref=qqcom.keyword\" target=\"_blank\">昆明铁路局</a>告上法庭。杭州铁路运输法院已正式立案受理</p>\r\n',1,10),(4,'财务部发布公告管理层可见','<h1>NASA发布冥王星最新照片</h1>\r\n\r\n<ul>\r\n\t<li><a href=\"http://coral.qq.com/1227955579\" target=\"_blank\"><strong>3367</strong>评论</a></li>\r\n\t<li>幻灯播放</li>\r\n\t<li>保存到微云</li>\r\n\t<li>我要分享</li>\r\n</ul>\r\n\r\n<p><img src=\"http://img1.gtimg.com/13/1399/139918/13991881_980x1200_0.jpg\" style=\"height:513px; width:790.015625px\" /></p>\r\n\r\n<p>1/3</p>\r\n\r\n<p>当地时间10月17日，NASA&ldquo;新视野号&rdquo;探测器发回的最新照片显示，冥王星的表面色彩丰富，也有冰山、平原等多样化的地形，令科学家惊叹不已。根据首次出刊的探测任务结果，列为矮行星的冥王星表面呈现多种颜色，赤道是深红色，较高纬度地区的表面逐渐则是浅色与偏蓝。图为NASA探测器发回的最新照片。</p>\r\n',5,7),(5,'财务部公告 只能财务部查看','<p>&nbsp;</p>\r\n\r\n<p><img alt=\"图片来源：俄罗斯《晨报》网站\" src=\"http://img1.gtimg.com/news/pics/hv1/87/238/1945/126534402.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>图片来源：俄罗斯《晨报》网站</p>\r\n\r\n<p>中国西藏网讯 俄罗斯联邦安全局近期通过决议，称活跃在图瓦共和国的藏僧洛桑格勒及其助理洛桑次仁&ldquo;不受欢迎&rdquo;，限二人于15日内离境。这意味着，他们将被&ldquo;永久&rdquo;逐出俄罗斯。</p>\r\n\r\n<p>根据《俄罗斯联邦出入境管理规定》，有关外国公民在俄联邦居留（居住）不受欢迎的决议，可在此人&ldquo;对国家国防力量、安全或居民健康造成实际威胁&rdquo;，以及&ldquo;为了捍卫宪法制度基础、道德、其他人的权利与法律利益&rdquo;的情况下作出。俄联邦安全局并没有向外界说明原因，但在交给图瓦首府克孜勒市法院的文书中表示&ldquo;此案涉及国家机密&rdquo;。</p>\r\n\r\n<p>洛桑格勒1967年生于四川省甘孜州，18岁出逃印度，在&ldquo;甘丹寺&rdquo;&ldquo;学习佛法&rdquo;，1987年被达赖认定为布里亚特僧人拉然巴格西什瓦尔哈的转世，2004年率&ldquo;哲蚌寺&rdquo;僧团首次访俄，2008年起&ldquo;奉达赖喇嘛之命&rdquo;常驻图瓦。他曾在接受媒体采访时称，&ldquo;达赖喇嘛认为我前往俄罗斯会给民众带来好处，对我的行程表示认可&rdquo;。据俄罗斯&ldquo;新一天&rdquo;网报道，洛桑格勒及其助理洛桑次仁10月16日已离开莫斯科，前往印度。</p>\r\n\r\n<p>洛桑格勒被驱逐的消息传开后，其弟子及追随者四处奔走，不仅在网上发起联署请愿活动，要求普京总统撤销联邦安全局的决议，还极力游说俄各佛教地区政要向克里姆林宫&ldquo;求情&rdquo;。9月30日，图瓦领导人沙尔班&middot;卡拉-奥尔与联邦安全局图瓦分局负责人会谈，呼吁&ldquo;在俄联邦现行法律框架下，研究通过其他方式解决问题的可能性&rdquo;。而俄国防部长谢尔盖&middot;绍伊古的姐姐、国家杜马议员拉丽莎&middot;绍伊古被传&ldquo;已同意&rdquo;向克里姆林宫递交&ldquo;请愿信&rdquo;。</p>\r\n\r\n<p>据报道，俄本土佛教势力对此反应不一。俄罗斯传统佛教僧伽会并不打算维护洛桑格勒，该组织新闻发言人鲍里斯&middot;巴尔达诺夫称，&ldquo;他与本组织没有任何关系&rdquo;。图瓦康巴喇嘛（即最高喇嘛）管理处并未发表评论，只表示&ldquo;康巴喇嘛人不在图瓦&rdquo;。圣彼得堡贡则乔内寺堪布认为，&ldquo;若没有理由，安全局是什么都不会做的&rdquo;。而洛桑格勒的代理人、律师罗曼&middot;斯捷潘诺夫也坦言，&ldquo;通常要基于当事人的某些行为，才能做出这样的决议&rdquo;。（中国西藏网 文/卓雅）(中国西藏网)</p>\r\n',4,7),(6,'美拒绝对韩国转让五代机先进技术','<p><strong>原标题：美拒绝对韩国转让五代机先进技术</strong></p>\r\n\r\n<p>16日，韩国国防部消息称，美国防部长卡特重申，美国不会向韩国移交有关第五代和战斗机开发的4项关键性技术。这一消息对于韩国产第五代战斗机KF-X项目是一个重大打击。据悉，韩国原计划到2025年生产100架KF-X战斗机，这种飞机号称具有&ldquo;第五代&rdquo;战斗机的部分特性。据悉美国此次拒绝提供的4项技术包括：有源相控阵雷达、前视红外搜索与跟踪系统、光电导航攻击吊舱和电子对抗。据悉，美国早在今年5月就已经拒绝了韩国提出的关于这些项目的技术转让请求，而此次韩国防部长韩民求希望借与卡特会面机会说服后者转让相关技术，但卡特并未松口。韩国防部称将转向其他国家，如以色列寻求技术支持。</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"美拒绝对韩国转让五代机先进技术\" src=\"http://img1.gtimg.com/news/pics/hv1/183/202/1945/126525318.png\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>韩国KF-X战斗机方案模型</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"美拒绝对韩国转让五代机先进技术\" src=\"http://img1.gtimg.com/news/pics/hv1/195/202/1945/126525330.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>韩国KF-X方案之一，气动布局接近其现役T-50教练/轻型攻击机</p>\r\n\r\n<p>据韩联社报道，据韩国国防部16日消息，正在美国访问的国防部长官韩民求当地时间15日会见美国国防部长卡特，请求美方重新考虑向韩方转移开发韩国型战斗机(KF-X)所需的4项核心技术，但卡特表示难以向韩方转移相关技术。</p>\r\n\r\n<p>卡特同时强调，美方将同韩方携手寻找技术合作方案。鉴于除了上述4项核心技术之外，韩国政府请求美国政府向韩方转移的技术还有21项，包括空中加油设计技术、飞行控制律开发技术等，卡特的这番话可解释为，虽然美国无法向韩方转移4项核心技术，但在其余21项技术方面，将同韩方携手寻找合作方案。</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"美拒绝对韩国转让五代机先进技术\" src=\"http://img1.gtimg.com/news/pics/hv1/203/202/1945/126525338.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>2013年中国歼-20战斗机首飞后，韩国开发方一度提出了与之气动布局相似的KF-X方案&hellip;&hellip;成果仅限于一些图纸</p>\r\n\r\n<p>据韩国国防部介绍，两国防长商定建立由两国<a href=\"http://t.qq.com/wj_xlt#pref=qqcom.keyword\" target=\"_blank\">外交部</a>、国防部等政府部门共同参与的协商机制，就韩国型战斗机项目等军工领域合作进行商讨。</p>\r\n\r\n<p>据悉，韩国KF-X战斗机开发计划的目标是研制一种用于替换本国现役F-4和早期型F-16的国产战斗机，要求其价格比F-35更低廉，并具备部分五代机的技术特征。其方案模型几经变化，最终大致确定为采用武器全部外挂的设计，这表明这种飞机的隐身性能相当勉强。基本来说，这是一种能够对朝鲜形成较大优势，而又价格较低的新战斗机。美国再三拒绝向韩国提供相关技术后，可能对这种飞机的研制造成较大影响，即使项目最终能够成功，至少现在的2025年前装备100架飞机的计划也几乎肯定泡汤。</p>\r\n',2,6);
/*!40000 ALTER TABLE `ent_notice` ENABLE KEYS */;

#
# Structure for table "ent_role"
#

DROP TABLE IF EXISTS `ent_role`;
CREATE TABLE `ent_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(255) NOT NULL DEFAULT '' COMMENT '角色名称',
  `rid` int(11) NOT NULL DEFAULT '0' COMMENT '角色id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='角色表';

#
# Data for table "ent_role"
#

/*!40000 ALTER TABLE `ent_role` DISABLE KEYS */;
INSERT INTO `ent_role` VALUES (1,'管理员',0),(2,'研发人员',1),(3,'市场部人员',2),(4,'人力资源',3),(5,'财务人员',4),(6,'管理层人员',5);
/*!40000 ALTER TABLE `ent_role` ENABLE KEYS */;

#
# Structure for table "ent_user"
#

DROP TABLE IF EXISTS `ent_user`;
CREATE TABLE `ent_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL DEFAULT '' COMMENT '用户名',
  `password` varchar(255) NOT NULL DEFAULT '' COMMENT '密码',
  `fullname` varchar(255) NOT NULL DEFAULT '' COMMENT '姓名',
  `sex` varchar(255) NOT NULL DEFAULT '' COMMENT '性别',
  `position` varchar(255) NOT NULL DEFAULT '' COMMENT '职位',
  `dept_id` int(11) NOT NULL DEFAULT '0' COMMENT '所在部门ID',
  `role_id` int(11) NOT NULL DEFAULT '0' COMMENT '角色ID',
  `reg_time` int(11) NOT NULL DEFAULT '0' COMMENT '注册时间',
  `status` tinyint(3) NOT NULL DEFAULT '0' COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COMMENT='用户表';

#
# Data for table "ent_user"
#

/*!40000 ALTER TABLE `ent_user` DISABLE KEYS */;
INSERT INTO `ent_user` VALUES (1,'admin','e10adc3949ba59abbe56e057f20f883e','管理员','女','管理员',0,0,1444964640,1),(2,'zhangsan','e10adc3949ba59abbe56e057f20f883e','张三','男','php工程师',1,1,1444964640,0),(3,'lisi','e10adc3949ba59abbe56e057f20f883e','李思','男','php开发',1,1,1444964640,1),(5,'liming','e10adc3949ba59abbe56e057f20f883e','黎明','男','市场人员',2,2,1445090314,1),(6,'wangfei','e10adc3949ba59abbe56e057f20f883e','王飞','男','HR',3,3,1445090386,1),(7,'liujing','e10adc3949ba59abbe56e057f20f883e','刘静','女','财务',4,4,1445090443,1),(8,'wangmin','e10adc3949ba59abbe56e057f20f883e','汪敏','女','总经理',5,5,1445090507,1),(9,'lihao','e10adc3949ba59abbe56e057f20f883e','李昊','男','市场人员',2,2,1445092154,0),(10,'chenchen','e10adc3949ba59abbe56e057f20f883e','陈晨','女','.net开发',1,1,1445092265,1),(11,'liuling','e10adc3949ba59abbe56e057f20f883e','刘玲','女','市场人员',2,2,1445093375,1),(12,'qidong','e10adc3949ba59abbe56e057f20f883e','祁东','女','市场人员',2,2,1445093754,1);
/*!40000 ALTER TABLE `ent_user` ENABLE KEYS */;
