<?php
    // echo 1234;
    $list = array('所有分类', '图书杂志', '男女服装', '运动户外', '箱包皮具', '童装童鞋', '玩具童车', '家居家纺', '汽车用品', '珠宝饰品',
        '数码影音','电脑办公', '手机通讯', '营养保健', '食品', '地方特色', '厨房用品', '工艺礼品', '文化用品', '娱乐衍生品', '五金电子',
        '宠物水族','母婴用品');
    $list2 = array('图书杂志','运动户外','家居家纺','箱包皮具','童装童鞋','珠宝饰品','食品','电脑办公','数码影音');
    // $title = array('小说');
    // $obj = new stdClass();
    // $obj->title = $title[0];
    // $subtitle = array('作品集', '外国小说', '中国当代小说', '科幻', '都市', '情感', '武侠');
    // $list3 = array($obj);
    $list3 = "title-小说?subtitle-作品集,外国小说,中国当代小说,科幻,都市,情感,武侠
    .title-烹饪/美食?subtitle-西餐料理,饮食文化,茶酒饮料,家常菜谱,烹饪理论/手册
    .title-旅游/地图?subtitle-旅游攻略,城市自助旅游指南,中国当代小说,地图,旅游随笔
    .title-杂志?subtitle-新闻/经管,文摘 文学,旅游/人文,健康/运动,母婴/育儿
    +title-户外服饰?subtitle-冲锋衣裤,户外亲子装,军迷服饰,滑雪服,户外羽绒服/棉服,皮肤衣
    .title-健身器械?subtitle-甩脂机,杠铃哑铃,多功能器材,动感单车,举重床,健腹器,划船机
    .title-球迷用品?subtitle-高尔夫,网球运动,乒乓球运动,羽毛球运动,台球运动,棒垒运动
    .title-垂钓用品?subtitle-钓鱼配件,渔具包,鱼线轮,钓鱼灯,钓箱/钓椅,浮漂,鱼竿
    .title-户外鞋袜?subtitle-休闲户外鞋,溯溪鞋,沙滩凉拖,登山鞋,户外袜,工装鞋
    +title-水具?subtitle-咖啡具,水杯,酒具,茶具
    .title-整理收纳?subtitle-儿童收纳,衣架烫衣板,压缩袋防尘罩,置物架/篮,缝纫用品,收纳柜,整理箱
    .title-清洁护理?subtitle-卫浴用品,一次性用品,暖宝宝,杀虫驱蚊,保暖防护,清洁工具,其他
    .title-家纺?subtitle-床品件套,床垫/床褥,蚊帐/凉席,床品散件,被子,毛巾/浴巾,儿童床品
    +title-精品男包?subtitle-双肩包,钱包/卡包,单肩/斜挎包,腰包,手提包
    .title-时尚女包?subtitle-单肩包,手包/化妆包,提挎多用包,斜挎包,手拎包
    .title-功能箱包?subtitle-妈咪包,化妆包,旅行包,拉杆箱,书包,登山包,电脑/数码包
    .title-皮带/配件/礼盒?subtitle-皮具套装,礼盒,钥匙包,皮带/腰带,钱包/卡包,名片夹/证件夹
    +title-配饰/用品?subtitle-帽子,手套,雨衣雨具,泳衣泳具,发饰/领结/领带/腰带,围巾,耳罩
    .title-童装?subtitle-毛衣/针织衫,马甲/背心,衬衫,羽绒服/棉服,外套,T恤/polo衫,裙子
    .title-童鞋?subtitle-儿童雨靴,皮鞋,舞蹈鞋,鞋垫/鞋带,凉鞋,休闲鞋,帆布鞋/板鞋
    +title-计价黄金?subtitle-耳饰,项链,宝宝金饰,吊坠,手镯,手链,脚链戒指
    .title-翡翠玉石?subtitle-手镯,手链,戒指,耳饰,项链,挂件,摆件
    .title-琥珀蜜蜡?subtitle-手镯,手链,戒指,耳饰,项链,挂件,摆件
    .title-银饰?subtitle-手镯,手链,戒指,耳饰,项链,挂件,摆件
    .title-水晶玛瑙?subtitle-手镯,手链,戒指,耳饰,项链,挂件,摆件
    .title-彩宝?subtitle-手镯,手链,戒指,耳饰,项链,挂件,摆件
    .title-精品木饰?subtitle-沉香,黄花梨,金丝楠,菩提,小叶紫檀,其他
    +title-酒?subtitle-洋酒,葡萄酒,啤酒,黄酒,白酒,保健酒
    .title-生鲜果蔬?subtitle-海鲜,河鲜,蔬菜,牛羊猪肉,禽肉蛋品,低温乳品,水果
    .title-茶?subtitle-黄茶,白茶,乌龙茶,绿茶,花草茶,红茶,普洱茶
    .title-粮油调味?subtitle-调味品,南北干货,食用油,米面杂粮,有机食品,方便食品,烘焙原料
    .title-休闲食品?subtitle-糖果,巧克力,蜜饯果脯,熟食腊味,饼干蛋糕,坚果炒货,休闲零食
    +title-网络产品?subtitle-网卡,路由器,交换机,网络盒子
    .title-电脑整机?subtitle-DIY组装机,PC平板二合一,平板电脑,笔记本,服务器,台式机,一体机
    .title-外设产品?subtitle-电脑工具,手写板/笔,摄像头,鼠标,UPS电源,游戏设备,键盘
    +title-数码配件?subtitle-闪光灯,手柄,充电器,读卡器,移动电源,摄影配件,电池/电源
    .title-智能设备?subtitle-智能机器人,运动跟踪器,智能手环,智能家居,智能眼镜,智能手表,智能摄像
    .title-摄影摄像?subtitle-单反相机,镜头,单电/微单,数码相机,拍立得,运动相机";
    $hotItem = "img-https://asset.ibanquan.com/image/5c82518e16fc1f0012fc5b77/s_w300h300.jpeg?v=1552044430!name-德国雪本诗Schaebens面膜 死海泥清洁祛痘 15ml!price-¥8.50
    ~img-https://asset.ibanquan.com/image/5c781dd635a8e1000e000010/s_w300h300.jpeg?v=1551375831!name-德国版爱他美Aptamil婴幼儿奶粉普通蓝罐1 600g!price-¥145.00
    ~img-https://asset.ibanquan.com/image/5c7828cbcf6556001b000073/s_w300h300.jpeg?v=1551378635!name-德国芭乐雅Balea面膜 黑炭去角质贴片式面膜!price-¥19.00
    ~img-https://asset.ibanquan.com/image/5c7829a435a8e1001300008b/s_w300h300.jpeg?v=1551378853!name-德国芭乐雅Balea精华胶囊 眼部精华!price-¥15.00
    ~img-https://asset.ibanquan.com/image/5c7829415b37bc000f00006e/s_w300h300.jpeg?v=1551378753!name-德国芭乐雅Balea玻尿酸安瓶浓缩精华 7*1ml!price-¥59.00
    ~img-https://asset.ibanquan.com/image/5c781dea1c714e001a000010/s_w300h300.jpeg?v=1551375850!name-德国版爱他美Aptamil婴幼儿奶粉普通蓝罐3段 800g!price-¥203.00
    +img-https://asset.ibanquan.com/image/5c867a96f8c06b0019b2ac1c/s_w300h300.jpeg?v=1552317078!name-德国小红脸Rotbaeckchen Klassik补铁果汁 700ml!price-¥110.00
    ~img-https://asset.ibanquan.com/image/5c90e3470a96af0018236bab/s_w300h300.jpeg?v=1552999239!name-德国双心Doppelherz胶原蛋白美容口服液 30支!price-¥369.00
    ~img-https://asset.ibanquan.com/image/5c7e618e57847b0011daeead/s_w300h300.jpeg?v=1551786382!name-德国Kraeuterhof草本庄园热活凝胶按摩马膏 500ml!price-¥115.00
    ~img-https://asset.ibanquan.com/image/5c90f49a22913a0012b895de/s_w300h300.jpeg?v=1553003674!name-德国版爱他美Aptamil婴幼儿奶粉普通蓝罐2 600g 5盒装!price-¥668.00
    ~img-https://asset.ibanquan.com/image/5c90f2125df90a00093e7c20/s_w300h300.jpeg?v=1551375831!name-德国版爱他美Aptamil婴幼儿奶粉普通蓝罐1 600g 5盒装!price-¥668.00
    ~img-https://asset.ibanquan.com/image/5c867a40f8c06b0009b2ac11/s_w300h300.jpeg?v=1552316992!name-德国小红脸Rotbaeckchen Lernstark补铁维生素B果汁 700ml!price-¥110.00";
    $goodlist="name@食品!list@name2%休闲食品~list2%img=./images/00100101.jpg,name=奥利奥（Oreo）早餐休闲蛋糕糕点零食大礼包 夹心饼干原味349g,price=¥13.90
    ^img=./images/00100102.jpg,name=咪咪虾条 小点心糕点（18g*20包）360g/袋,price=¥9.90
    ^img=./images/00100103.jpg,name=每日坚果混合干果孕妇零食大礼包礼盒礼品核桃开心果腰果葡萄干750g*1,price=¥159.00
    ^img=./images/00100104.jpg,name=良品铺子 猪肉脯自然片靖江猪肉干肉铺肉类零食网红小吃100g,price=¥21.90
    ^img=./images/00100105.jpg,name=乐事（Lay’s）无限薯片 休闲零食 104g*3组合装（原味/烤肉/番茄）,price=¥18.90
    ,#name2%生鲜果蔬~list2%img=./images/00100201.jpg,name=椰子椰青 9个单果1200g左右 椰皇海南生鲜水果  单果1200g左右,price=¥79.00
    ^img=./images/00100202.jpg,name=缤咕  云南蒙自石榴 精品大果 5斤装11个左右,price=¥27.90
    ^img=./images/00100203.jpg,name=唐鲜生 板栗红薯 山芋地瓜 新鲜蔬菜 小香薯 带箱约10斤装中果,price=¥38.80
    ^img=./images/00100204.jpg,name=【活蟹】蟹宗大闸蟹现货鲜活螃蟹礼盒生鲜实物 公3.3-3.8两 母蟹2.3-2.8两 4对/8只,price=¥158.00
    ^img=./images/00100205.jpg,name=【鲜活】味库 加拿大龙虾（波士顿龙虾）430-550g 1只 海鲜水产,price=¥129.00
    ,#name2%酒~list2%img=./images/00100301.jpg,name=五粮液 黄金酒 黄金万福 39度 480ml*2瓶 礼盒装,price=¥139.00
    ^img=./images/00100302.jpg,name=洋河蓝色经典 梦之蓝M6 52度 礼盒装 500ml*2瓶白酒 口感绵柔浓香型,price=¥1469.00
    ^img=./images/00100303.jpg,name=法国进口红酒波尔多AOC原瓶干红葡萄酒,price=¥209.90
    ^img=./images/00100304.jpg,name=茅台 王子酒 53度 白酒 500ml 单瓶装 口感酱香型,price=¥158.00
    ^img=./images/00100305.jpg,name=爱士堡 （Eichbaum）小麦白啤酒500ml*24听整箱装 德国原装进口,price=¥119.00
    ,#name2%茶~list2%img=./images/00100401.jpg,name=小青柑普洱茶 正宗生晒新会小青柑500g 茶叶木桶礼盒装 小青桔陈皮云南宫,price=¥88.00
    ^img=./images/00100402.jpg,name=小罐茶 茶叶 银罐20罐拼装 乌龙茶大红袍 铁观音清香 茉莉花,price=¥499.00
    ^img=./images/00100403.jpg,name=一杯香茶叶2019新茶明前云雾绿茶4罐共500克高山绿茶散装春茶礼盒装,price=¥118.00
    ^img=./images/00100404.jpg,name=青源堂 黑枸杞 青海柴达木诺木洪黑枸杞子500克 （250g x2瓶）,price=¥59.00
    ^img=./images/00100405.jpg,name=神农金康 五宝茶600g 人参片黄精桑葚干红枸杞肾茶补茶男性八宝茶配,price=¥118.00
    ,#name2%粮油调味~list2%img=./images/00100501.jpg,name=鲁花 食用油 非转基因 物理压榨 特香菜籽油 5L,price=¥89.80
    ^img=./images/00100502.jpg,name=海天 蚝油 上等蚝油 凉拌炒菜火锅调料 700g 老字号,price=¥8.50
    ^img=./images/00100503.jpg,name=渡江宴 瘦肉酱 辣酱 拌饭拌面酱下饭菜调料调味品 180g,price=¥13.90
    ^img=./images/00100504.jpg,name=陶华碧老干妈 辣椒酱 风味豆豉油制辣椒 280g,price=¥8.90
    ^img=./images/00100505.jpg,name=Member\s Mark 腐竹 1.2kg 非转基因黄豆 云南特产 南北干货 豆制品,price=¥80.29
    +name@电脑办公!list@name2%网络产品~list2%img=./images/00200101.jpg,name=TP-LINK 1900M双千兆双频无线路由器5g穿墙王,price=¥195.00
    ^img=./images/00200102.jpg,name=TP-LINK TL-WN726N免驱版 USB无线网卡 笔记本台式机通用随身wifi接收器,price=¥65.90
    ^img=./images/00200103.jpg,name=华为（huawei) 随行WiFi2 mini E8372 三网移动电信联通 4G无线上网卡终端,price=¥299.00
    ^img=./images/00200104.jpg,name=小米盒子4 智能网络机顶盒 电视盒子网络电视 H.265硬解 安卓网络盒子 高清网络,price=¥299.00
    ^img=./images/00200105.jpg,name=向日葵开机棒（独享版）远程开机远程唤醒Mac地址远程开电脑远程开机控制桌面,price=¥108.00
    ,#name2%外设产品~list2%img=./images/00200201.jpg,name=达尔优（dareu）机械师合金版 机械键盘 有线键盘 游戏键盘 108键 单光 全键无冲,price=¥159.00
    ^img=./images/00200202.jpg,name=双飞燕（A4TECH) N-810FX 鼠标 有线鼠标 办公鼠标 便携鼠标 右手鼠标 DPI可调,price=¥49.00
    ^img=./images/00200203.jpg,name=京东京造 USB3.0透明分线器 4口HUB多接口扩展转换器 笔记本电脑一拖四,price=¥45.00
    ^img=./images/00200204.jpg,name=绿联Mini DP转HDMI/VGA转换器线 4K高清适用苹果电脑Surface笔记本接投影仪转,price=¥79.00
    ^img=./images/00200205.jpg,name=西部数据(WD)2TB USB3.0移动硬盘Elements 新元素系列2.5英寸,price=¥499.00
    ,#name2%电脑整机~list2%img=./images/00200301.jpg,name=Apple iMac【2019新品】27英寸一体机5K屏 Core i5 8G 1TB融合 RP570X显卡 台式,price=¥12699.00
    ^img=./images/00200302.jpg,name=惠普(HP)暗影精灵4 游戏台式电脑主机(九代i7-9700F 8G,price=¥6399.00
    ^img=./images/00200303.jpg,name=联想(Lenovo)天逸510 Pro英特尔酷睿i5 个人商务台式电脑整机,price=¥4799.00
    ^img=./images/00200304.jpg,name=戴尔(DELL)成就3670 商用办公 台式电脑整机(九代i7-9700 8G 1T 2G独显 ,price=¥5599.00
    ^img=./images/00200305.jpg,name=清华同方(THTF)超扬A7500商用办公台式电脑整机 i3-9100 8G,price=¥2689.00";
    $listall = array($list2 , $list3,$hotItem,$goodlist);
    if ($_GET['id']=='one'){
        echo json_encode($list);
    }elseif ($_GET['id']=='two'){
        echo json_encode($listall);
    }
?>