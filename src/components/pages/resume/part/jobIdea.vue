<template>
  <div>
    <!--3-->
    <table class="table table-hover">
      <caption class="alert alert-info">
        <span class="glyphicon glyphicon-briefcase"></span> 求职意向
      </caption>
      <tbody>
        <tr>
          <td>期望薪资</td>
          <td>
            <select name="3_1_1" id="3_1_1">
              <option value="月薪">月薪</option>
              <option value="年薪">年薪</option>
              <option value="日薪">日薪</option>
              <option value="时薪">时薪</option>
            </select>
            <span class="glyphicon glyphicon-indent-left"></span>
            <input type="number" name="3_1_2" id="3_1_2" min="0" max="20000" step="50">
            <span class="glyphicon glyphicon-minus"></span>
            <input type="number" name="3_1_3" id="3_1_3" min="0" max="20000" step="50"> 元/月
          </td>
        </tr>
        <tr>
          <td>地点</td>
          <td>
            <select
              id="3_2_1"
              name="3_2_1"
              class="form-control selectpicker show-menu-arrow"
              data-live-search="true"
              data-max-options="5"
              title="最多选取5个地点"
              multiple
            >
              <optgroup label="安徽省">
                <option value="合肥">合肥</option>
                <option value="亳州">亳州</option>
                <option value="芜湖">芜湖</option>
                <option value="马鞍山">马鞍山</option>
                <option value="池州">池州</option>
                <option value="黄山">黄山</option>
                <option value="滁州">滁州</option>
                <option value="安庆">安庆</option>
                <option value="淮南">淮南</option>
                <option value="淮北">淮北</option>
                <option value="蚌埠">蚌埠</option>
                <option value="宿州">宿州</option>
                <option value="宣城">宣城</option>
                <option value="六安">六安</option>
                <option value="阜阳">阜阳</option>
                <option value="铜陵">铜陵</option>
                <option value="明光">明光</option>
                <option value="天长">天长</option>
                <option value="宁国">宁国</option>
                <option value="界首">界首</option>
                <option value="桐城">桐城</option>
                <option value="潜山">潜山</option>
              </optgroup>
              <optgroup label="福建省">
                <option value="福州">福州</option>
                <option value="厦门">厦门</option>
                <option value="泉州">泉州</option>
                <option value="漳州">漳州</option>
                <option value="南平">南平</option>
                <option value="三明">三明</option>
                <option value="龙岩">龙岩</option>
                <option value="莆田">莆田</option>
                <option value="宁德">宁德</option>
                <option value="建瓯">建瓯</option>
                <option value="武夷山">武夷山</option>
                <option value="长乐">长乐</option>
                <option value="福清">福清</option>
                <option value="晋江">晋江</option>
                <option value="南安">南安</option>
                <option value="福安">福安</option>
                <option value="龙海">龙海</option>
                <option value="邵武">邵武</option>
                <option value="石狮">石狮</option>
                <option value="福鼎">福鼎</option>
                <option value="建阳">建阳</option>
                <option value="漳平">漳平</option>
                <option value="永安">永安</option>
              </optgroup>
              <optgroup label="甘肃省">
                <option value="兰州">兰州</option>
                <option value="白银">白银</option>
                <option value="武威">武威</option>
                <option value="金昌">金昌</option>
                <option value="平凉">平凉</option>
                <option value="张掖">张掖</option>
                <option value="嘉峪关">嘉峪关</option>
                <option value="酒泉">酒泉</option>
                <option value="庆阳">庆阳</option>
                <option value="定西">定西</option>
                <option value="陇南">陇南</option>
                <option value="天水">天水</option>
                <option value="玉门">玉门</option>
                <option value="临夏">临夏</option>
                <option value="合作">合作</option>
                <option value="敦煌">敦煌</option>
                <option value="甘南州">甘南州</option>
              </optgroup>
              <optgroup label="广东省">
                <option value="广州">广州</option>
                <option value="深圳">深圳</option>
                <option value="珠海">珠海</option>
                <option value="汕头">汕头</option>
                <option value="佛山">佛山</option>
                <option value="韶关">韶关</option>
                <option value="湛江">湛江</option>
                <option value="肇庆">肇庆</option>
                <option value="江门">江门</option>
                <option value="茂名">茂名</option>
                <option value="惠州">惠州</option>
                <option value="梅州">梅州</option>
                <option value="汕尾">汕尾</option>
                <option value="河源">河源</option>
                <option value="阳江">阳江</option>
                <option value="清远">清远</option>
                <option value="东莞">东莞</option>
                <option value="中山">中山</option>
                <option value="潮州">潮州</option>
                <option value="揭阳">揭阳</option>
                <option value="云浮">云浮</option>
              </optgroup>
              <optgroup label="广西壮族自治区">
                <option value="南宁">南宁</option>
                <option value="贺州">贺州</option>
                <option value="玉林">玉林</option>
                <option value="桂林">桂林</option>
                <option value="柳州">柳州</option>
                <option value="梧州">梧州</option>
                <option value="北海">北海</option>
                <option value="钦州">钦州</option>
                <option value="百色">百色</option>
                <option value="防城港">防城港</option>
                <option value="贵港">贵港</option>
                <option value="河池">河池</option>
                <option value="崇左">崇左</option>
                <option value="来宾">来宾</option>
                <option value="东兴">东兴</option>
                <option value="桂平">桂平</option>
                <option value="北流">北流</option>
                <option value="岑溪">岑溪</option>
                <option value="合山">合山</option>
                <option value="凭祥">凭祥</option>
                <option value="宜州">宜州</option>
              </optgroup>
              <optgroup label="贵州省">
                <option value="贵阳">贵阳</option>
                <option value="安顺">安顺</option>
                <option value="遵义">遵义</option>
                <option value="六盘水">六盘水</option>
                <option value="兴义">兴义</option>
                <option value="都匀">都匀</option>
                <option value="凯里">凯里</option>
                <option value="毕节">毕节</option>
                <option value="清镇">清镇</option>
                <option value="铜仁">铜仁</option>
                <option value="赤水">赤水</option>
                <option value="仁怀">仁怀</option>
                <option value="福泉">福泉</option>
              </optgroup>
              <optgroup label="海南省">
                <option value="海口">海口</option>
                <option value="三亚">三亚</option>
                <option value="万宁">万宁</option>
                <option value="文昌">文昌</option>
                <option value="儋州">儋州</option>
                <option value="琼海">琼海</option>
                <option value="东方">东方</option>
                <option value="五指山">五指山</option>
              </optgroup>
              <optgroup label="河北省">
                <option value="石家庄">石家庄</option>
                <option value="保定">保定</option>
                <option value="唐山">唐山</option>
                <option value="邯郸">邯郸</option>
                <option value="邢台">邢台</option>
                <option value="沧州">沧州</option>
                <option value="衡水">衡水</option>
                <option value="廊坊">廊坊</option>
                <option value="承德">承德</option>
                <option value="迁安">迁安</option>
                <option value="鹿泉">鹿泉</option>
                <option value="秦皇岛">秦皇岛</option>
                <option value="南宫">南宫</option>
                <option value="任丘">任丘</option>
                <option value="叶城">叶城</option>
                <option value="辛集">辛集</option>
                <option value="涿州">涿州</option>
                <option value="定州">定州</option>
                <option value="晋州">晋州</option>
                <option value="霸州">霸州</option>
                <option value="黄骅">黄骅</option>
                <option value="遵化">遵化</option>
                <option value="张家口">张家口</option>
                <option value="沙河">沙河</option>
                <option value="三河">三河</option>
                <option value="冀州">冀州</option>
                <option value="武安">武安</option>
                <option value="河间">河间</option>
                <option value="深州">深州</option>
                <option value="新乐">新乐</option>
                <option value="泊头">泊头</option>
                <option value="安国">安国</option>
                <option value="双滦区">双滦区</option>
                <option value=" 高碑店">高碑店</option>
              </optgroup>
              <optgroup label="河南省">
                <option value="郑州">郑州</option>
                <option value="洛阳">洛阳</option>
                <option value="焦作">焦作</option>
                <option value="商丘">商丘</option>
                <option value="信阳">信阳</option>
                <option value="周口">周口</option>
                <option value="鹤壁">鹤壁</option>
                <option value="安阳">安阳</option>
                <option value="濮阳">濮阳</option>
                <option value="驻马店">驻马店</option>
                <option value="南阳">南阳</option>
                <option value="开封">开封</option>
                <option value="漯河">漯河</option>
                <option value="许昌">许昌</option>
                <option value="新乡">新乡</option>
                <option value="济源">济源</option>
                <option value="灵宝">灵宝</option>
                <option value="偃师">偃师</option>
                <option value="邓州">邓州</option>
                <option value="登封">登封</option>
                <option value="三门峡">三门峡</option>
                <option value="新郑">新郑</option>
                <option value="禹州">禹州</option>
                <option value="巩义">巩义</option>
                <option value="永城">永城</option>
                <option value="长葛">长葛</option>
                <option value="义马">义马</option>
                <option value="林州">林州</option>
                <option value="项城">项城</option>
                <option value="汝州">汝州</option>
                <option value="荥阳">荥阳</option>
                <option value="平顶山">平顶山</option>
                <option value="卫辉">卫辉</option>
                <option value="辉县">辉县</option>
                <option value="舞钢">舞钢</option>
                <option value="新密">新密</option>
                <option value="孟州">孟州</option>
                <option value="沁阳">沁阳</option>
                <option value="郏县">郏县</option>
              </optgroup>
              <optgroup label="黑龙江省">
                <option value="哈尔滨">哈尔滨</option>
                <option value="伊春">伊春</option>
                <option value="牡丹江">牡丹江</option>
                <option value="大庆">大庆</option>
                <option value="鸡西">鸡西</option>
                <option value="鹤岗">鹤岗</option>
                <option value="绥化">绥化</option>
                <option value="齐齐哈尔">齐齐哈尔</option>
                <option value="黑河">黑河</option>
                <option value="富锦">富锦</option>
                <option value="虎林">虎林</option>
                <option value="密山">密山</option>
                <option value="佳木斯">佳木斯</option>
                <option value="双鸭山">双鸭山</option>
                <option value="海林">海林</option>
                <option value="铁力">铁力</option>
                <option value="北安">北安</option>
                <option value="五大连池">五大连池</option>
                <option value="阿城">阿城</option>
                <option value="尚志">尚志</option>
                <option value="五常">五常</option>
                <option value="安达">安达</option>
                <option value="七台河">七台河</option>
                <option value="绥芬河">绥芬河</option>
                <option value="双城">双城</option>
                <option value="海伦">海伦</option>
                <option value="宁安">宁安</option>
                <option value="讷河">讷河</option>
                <option value="穆棱">穆棱</option>
                <option value="同江">同江</option>
                <option value="肇东">肇东</option>
              </optgroup>
              <optgroup label="湖北省">
                <option value="武汉">武汉</option>
                <option value="荆门">荆门</option>
                <option value="咸宁">咸宁</option>
                <option value="襄阳">襄阳</option>
                <option value="荆州">荆州</option>
                <option value="黄石">黄石</option>
                <option value="宜昌">宜昌</option>
                <option value="随州">随州</option>
                <option value="鄂州">鄂州</option>
                <option value="孝感">孝感</option>
                <option value="黄冈">黄冈</option>
                <option value="十堰">十堰</option>
                <option value="枣阳">枣阳</option>
                <option value="老河口">老河口</option>
                <option value="恩施">恩施</option>
                <option value="仙桃">仙桃</option>
                <option value="天门">天门</option>
                <option value="钟祥">钟祥</option>
                <option value="潜江">潜江</option>
                <option value="麻城">麻城</option>
                <option value="洪湖">洪湖</option>
                <option value="汉川">汉川</option>
                <option value="赤壁">赤壁</option>
                <option value="松滋">松滋</option>
                <option value="丹江口">丹江口</option>
                <option value="武穴">武穴</option>
                <option value="广水">广水</option>
                <option value="石首">石首</option>
                <option value="大冶">大冶</option>
                <option value="枝江">枝江</option>
                <option value="应城">应城</option>
                <option value="宜城">宜城</option>
                <option value="当阳">当阳</option>
                <option value="安陆">安陆</option>
                <option value="宜都">宜都</option>
                <option value="利川">利川</option>
              </optgroup>
              <optgroup label="湖南省">
                <option value="长沙">长沙</option>
                <option value="郴州">郴州</option>
                <option value="益阳">益阳</option>
                <option value="娄底">娄底</option>
                <option value="株洲">株洲</option>
                <option value="衡阳">衡阳</option>
                <option value="湘潭">湘潭</option>
                <option value="岳阳">岳阳</option>
                <option value="常德">常德</option>
                <option value="邵阳">邵阳</option>
                <option value="永州">永州</option>
                <option value="张家界">张家界</option>
                <option value="怀化">怀化</option>
                <option value="浏阳">浏阳</option>
                <option value="醴陵">醴陵</option>
                <option value="湘乡">湘乡</option>
                <option value="耒阳">耒阳</option>
                <option value="沅江">沅江</option>
                <option value="涟源">涟源</option>
                <option value="常宁">常宁</option>
                <option value="吉首">吉首</option>
                <option value="津市">津市</option>
                <option value="冷水江">冷水江</option>
                <option value="临湘">临湘</option>
                <option value="汨罗">汨罗</option>
                <option value="武冈">武冈</option>
                <option value="韶山">韶山</option>
                <option value="湘西州">湘西州</option>
              </optgroup>
              <optgroup label="吉林省">
                <option value="长春">长春</option>
                <option value="吉林">吉林</option>
                <option value="通化">通化</option>
                <option value="白城">白城</option>
                <option value="四平">四平</option>
                <option value="辽源">辽源</option>
                <option value="松原">松原</option>
                <option value="白山">白山</option>
                <option value="集安">集安</option>
                <option value="梅河口">梅河口</option>
                <option value="双辽">双辽</option>
                <option value="延吉">延吉</option>
                <option value="九台">九台</option>
                <option value="桦甸">桦甸</option>
                <option value="榆树">榆树</option>
                <option value="蛟河">蛟河</option>
                <option value="磐石">磐石</option>
                <option value="大安">大安</option>
                <option value="德惠">德惠</option>
                <option value="洮南">洮南</option>
                <option value="龙井">龙井</option>
                <option value="珲春">珲春</option>
                <option value="公主岭">公主岭</option>
                <option value="图们">图们</option>
                <option value="舒兰">舒兰</option>
                <option value="和龙">和龙</option>
                <option value="临江">临江</option>
                <option value="敦化">敦化</option>
              </optgroup>
              <optgroup label="江苏省">
                <option value="南京">南京</option>
                <option value="无锡">无锡</option>
                <option value="常州">常州</option>
                <option value="扬州">扬州</option>
                <option value="徐州">徐州</option>
                <option value="苏州">苏州</option>
                <option value="连云港">连云港</option>
                <option value="盐城">盐城</option>
                <option value="淮安">淮安</option>
                <option value="宿迁">宿迁</option>
                <option value="镇江">镇江</option>
                <option value="南通">南通</option>
                <option value="泰州">泰州</option>
                <option value="兴化">兴化</option>
                <option value="东台">东台</option>
                <option value="常熟">常熟</option>
                <option value="江阴">江阴</option>
                <option value="张家港">张家港</option>
                <option value="通州">通州</option>
                <option value="宜兴">宜兴</option>
                <option value="邳州">邳州</option>
                <option value="海门">海门</option>
                <option value="溧阳">溧阳</option>
                <option value="泰兴">泰兴</option>
                <option value="如皋">如皋</option>
                <option value="昆山">昆山</option>
                <option value="启东">启东</option>
                <option value="江都">江都</option>
                <option value="丹阳">丹阳</option>
                <option value="吴江">吴江</option>
                <option value="靖江">靖江</option>
                <option value="扬中">扬中</option>
                <option value="新沂">新沂</option>
                <option value="仪征">仪征</option>
                <option value="太仓">太仓</option>
                <option value="姜堰">姜堰</option>
                <option value="高邮">高邮</option>
                <option value="金坛">金坛</option>
                <option value="句容">句容</option>
                <option value="灌南县">灌南县</option>
              </optgroup>
              <optgroup label="江西省">
                <option value="南昌">南昌</option>
                <option value="赣州">赣州</option>
                <option value="上饶">上饶</option>
                <option value="宜春">宜春</option>
                <option value="景德镇">景德镇</option>
                <option value="新余">新余</option>
                <option value="九江">九江</option>
                <option value="萍乡">萍乡</option>
                <option value="抚州">抚州</option>
                <option value="鹰潭">鹰潭</option>
                <option value="吉安">吉安</option>
                <option value="丰城">丰城</option>
                <option value="樟树">樟树</option>
                <option value="德兴">德兴</option>
                <option value="瑞金">瑞金</option>
                <option value="井冈山">井冈山</option>
                <option value="高安">高安</option>
                <option value="乐平">乐平</option>
                <option value="南康">南康</option>
                <option value="贵溪">贵溪</option>
                <option value="瑞昌">瑞昌</option>
                <option value="东乡县">东乡县</option>
                <option value="广丰县">广丰县</option>
                <option value="信州区">信州区</option>
                <option value="三清山">三清山</option>
              </optgroup>
              <optgroup label="辽宁省">
                <option value="沈阳">沈阳</option>
                <option value="葫芦岛">葫芦岛</option>
                <option value="大连">大连</option>
                <option value="盘锦">盘锦</option>
                <option value="鞍山">鞍山</option>
                <option value="铁岭">铁岭</option>
                <option value="本溪">本溪</option>
                <option value="丹东">丹东</option>
                <option value="抚顺">抚顺</option>
                <option value="锦州">锦州</option>
                <option value="辽阳">辽阳</option>
                <option value="阜新">阜新</option>
                <option value="调兵山">调兵山</option>
                <option value="朝阳">朝阳</option>
                <option value="海城">海城</option>
                <option value="北票">北票</option>
                <option value="盖州">盖州</option>
                <option value="凤城">凤城</option>
                <option value="庄河">庄河</option>
                <option value="凌源">凌源</option>
                <option value="开原">开原</option>
                <option value="兴城">兴城</option>
                <option value="新民">新民</option>
                <option value="大石桥">大石桥</option>
                <option value="东港">东港</option>
                <option value="北宁">北宁</option>
                <option value="瓦房店">瓦房店</option>
                <option value="普兰店">普兰店</option>
                <option value="凌海">凌海</option>
                <option value="灯塔">灯塔</option>
                <option value="营口">营口</option>
              </optgroup>
              <optgroup label="内蒙古自治区">
                <option value="呼和浩特">呼和浩特</option>
                <option value="呼伦贝尔">呼伦贝尔</option>
                <option value="赤峰">赤峰</option>
                <option value="扎兰屯">扎兰屯</option>
                <option value="鄂尔多斯">鄂尔多斯</option>
                <option value="乌兰察布">乌兰察布</option>
                <option value="巴彦淖尔">巴彦淖尔</option>
                <option value="二连浩特">二连浩特</option>
                <option value="霍林郭勒">霍林郭勒</option>
                <option value="包头">包头</option>
                <option value="乌海">乌海</option>
                <option value="阿尔山">阿尔山</option>
                <option value="乌兰浩特">乌兰浩特</option>
                <option value="锡林浩特">锡林浩特</option>
                <option value="根河">根河</option>
                <option value="满洲里">满洲里</option>
                <option value="额尔古纳">额尔古纳</option>
                <option value="牙克石">牙克石</option>
                <option value="临河">临河</option>
                <option value="丰镇">丰镇</option>
                <option value="通辽">通辽</option>
              </optgroup>
              <optgroup label="宁夏回族自治区">
                <option value="银川">银川</option>
                <option value="固原">固原</option>
                <option value="石嘴山">石嘴山</option>
                <option value="青铜峡">青铜峡</option>
                <option value="中卫">中卫</option>
                <option value="吴忠">吴忠</option>
                <option value="灵武">灵武</option>
              </optgroup>
              <optgroup label="青海省">
                <option value="西宁">西宁</option>
                <option value="格尔木">格尔木</option>
                <option value="德令哈">德令哈</option>
              </optgroup>
              <optgroup label="山东省">
                <option value="济南">济南</option>
                <option value="青岛">青岛</option>
                <option value="威海">威海</option>
                <option value="潍坊">潍坊</option>
                <option value="菏泽">菏泽</option>
                <option value="济宁">济宁</option>
                <option value="东营">东营</option>
                <option value="烟台">烟台</option>
                <option value="淄博">淄博</option>
                <option value="枣庄">枣庄</option>
                <option value="泰安">泰安</option>
                <option value="临沂">临沂</option>
                <option value="日照">日照</option>
                <option value="德州">德州</option>
                <option value="聊城">聊城</option>
                <option value="滨州">滨州</option>
                <option value="乐陵">乐陵</option>
                <option value="兖州">兖州</option>
                <option value="诸城">诸城</option>
                <option value="邹城">邹城</option>
                <option value="滕州">滕州</option>
                <option value="肥城">肥城</option>
                <option value="新泰">新泰</option>
                <option value="胶州">胶州</option>
                <option value="胶南">胶南</option>
                <option value="即墨">即墨</option>
                <option value="龙口">龙口</option>
                <option value="平度">平度</option>
                <option value="莱西">莱西</option>
              </optgroup>
              <optgroup label="山西省">
                <option value="太原">太原</option>
                <option value="大同">大同</option>
                <option value="阳泉">阳泉</option>
                <option value="长治">长治</option>
                <option value="临汾">临汾</option>
                <option value="晋中">晋中</option>
                <option value="运城">运城</option>
                <option value="忻州">忻州</option>
                <option value="朔州">朔州</option>
                <option value="吕梁">吕梁</option>
                <option value="古交">古交</option>
                <option value="高平">高平</option>
                <option value="永济">永济</option>
                <option value="孝义">孝义</option>
                <option value="侯马">侯马</option>
                <option value="霍州">霍州</option>
                <option value="介休">介休</option>
                <option value="河津">河津</option>
                <option value="汾阳">汾阳</option>
                <option value="原平">原平</option>
                <option value="晋城">晋城</option>
                <option value="潞城">潞城</option>
              </optgroup>
              <optgroup label="陕西省">
                <option value="西安">西安</option>
                <option value="咸阳">咸阳</option>
                <option value="榆林">榆林</option>
                <option value="宝鸡">宝鸡</option>
                <option value="铜川">铜川</option>
                <option value="渭南">渭南</option>
                <option value="汉中">汉中</option>
                <option value="安康">安康</option>
                <option value="商洛">商洛</option>
                <option value="延安">延安</option>
                <option value="韩城">韩城</option>
                <option value="兴平">兴平</option>
                <option value="华阴">华阴</option>
              </optgroup>
              <optgroup label="四川省">
                <option value="成都">成都</option>
                <option value="广安">广安</option>
                <option value="德阳">德阳</option>
                <option value="乐山">乐山</option>
                <option value="巴中">巴中</option>
                <option value="内江">内江</option>
                <option value="宜宾">宜宾</option>
                <option value="南充">南充</option>
                <option value="都江堰">都江堰</option>
                <option value="自贡">自贡</option>
                <option value="泸州">泸州</option>
                <option value="广元">广元</option>
                <option value="达州">达州</option>
                <option value="资阳">资阳</option>
                <option value="绵阳">绵阳</option>
                <option value="眉山">眉山</option>
                <option value="遂宁">遂宁</option>
                <option value="雅安">雅安</option>
                <option value="阆中">阆中</option>
                <option value="攀枝花">攀枝花</option>
                <option value="广汉">广汉</option>
                <option value="绵竹">绵竹</option>
                <option value="万源">万源</option>
                <option value="华蓥">华蓥</option>
                <option value="江油">江油</option>
                <option value="西昌">西昌</option>
                <option value="彭州">彭州</option>
                <option value="简阳">简阳</option>
                <option value="崇州">崇州</option>
                <option value="什邡">什邡</option>
                <option value="峨眉山">峨眉山</option>
                <option value="邛崃">邛崃</option>
                <option value="双流县">双流县</option>
              </optgroup>
              <optgroup label="台湾省">
                <option value="台北">台北</option>
                <option value="台南">台南</option>
                <option value="台中">台中</option>
                <option value="高雄">高雄</option>
                <option value="桃源">桃源</option>
              </optgroup>
              <optgroup label="西藏藏族自治区">
                <option value="拉萨">拉萨</option>
                <option value="那曲">那曲</option>
                <option value="山南">山南</option>
                <option value="林芝">林芝</option>
                <option value="昌都">昌都</option>
                <option value="阿里地区">阿里地区</option>
                <option value="日喀则">日喀则</option>
              </optgroup>
              <optgroup label="新疆维吾尔自治区">
                <option value="乌鲁木齐">乌鲁木齐</option>
                <option value="石河子">石河子</option>
                <option value="喀什">喀什</option>
                <option value="阿勒泰">阿勒泰</option>
                <option value="阜康">阜康</option>
                <option value="库尔勒">库尔勒</option>
                <option value="阿克苏">阿克苏</option>
                <option value="阿拉尔">阿拉尔</option>
                <option value="哈密">哈密</option>
                <option value="克拉玛依">克拉玛依</option>
                <option value="昌吉">昌吉</option>
                <option value="奎屯">奎屯</option>
                <option value="米泉">米泉</option>
                <option value="和田">和田</option>
              </optgroup>
              <optgroup label="云南省">
                <option value="昆明">昆明</option>
                <option value="玉溪">玉溪</option>
                <option value="大理">大理</option>
                <option value="曲靖">曲靖</option>
                <option value="昭通">昭通</option>
                <option value="保山">保山</option>
                <option value="丽江">丽江</option>
                <option value="临沧">临沧</option>
                <option value="楚雄">楚雄</option>
                <option value="开远">开远</option>
                <option value="个旧">个旧</option>
                <option value="景洪">景洪</option>
                <option value="安宁">安宁</option>
                <option value="宣威">宣威</option>
              </optgroup>
              <optgroup label="浙江省">
                <option value="杭州">杭州</option>
                <option value="宁波">宁波</option>
                <option value="绍兴">绍兴</option>
                <option value="温州">温州</option>
                <option value="台州">台州</option>
                <option value="湖州">湖州</option>
                <option value="嘉兴">嘉兴</option>
                <option value="金华">金华</option>
                <option value="舟山">舟山</option>
                <option value="衢州">衢州</option>
                <option value="丽水">丽水</option>
                <option value="余姚">余姚</option>
                <option value="乐清">乐清</option>
                <option value="临海">临海</option>
                <option value="温岭">温岭</option>
                <option value="永康">永康</option>
                <option value="瑞安">瑞安</option>
                <option value="慈溪">慈溪</option>
                <option value="义乌">义乌</option>
                <option value="上虞">上虞</option>
                <option value="诸暨">诸暨</option>
                <option value="海宁">海宁</option>
                <option value="桐乡">桐乡</option>
                <option value="兰溪">兰溪</option>
                <option value="龙泉">龙泉</option>
                <option value="建德">建德</option>
                <option value="富德">富德</option>
                <option value="富阳">富阳</option>
                <option value="平湖">平湖</option>
                <option value="东阳">东阳</option>
                <option value="嵊州">嵊州</option>
                <option value="奉化">奉化</option>
                <option value="临安">临安</option>
                <option value="江山">江山</option>
              </optgroup>
              <optgroup label="直辖市">
                <option value="北京">北京</option>
                <option value="上海">上海</option>
                <option value="天津">天津</option>
                <option value="重庆">重庆</option>
              </optgroup>
              <optgroup label="特别行政区">
                <option value="澳门">澳门</option>
                <option value="香港">香港</option>
              </optgroup>
            </select>
          </td>
        </tr>
        <tr>
          <td>行业</td>
          <td>
            <input type="text" id="3_3_1" name="3_3_1">
          </td>
          <td>职位</td>
          <td>
            <input type="text" id="3_3_2" name="3_3_2">
          </td>
        </tr>
        <tr>
          <td>到岗时间</td>
          <td>
            <select id="3_4_1" name="3_4_1" class="form-control selectpicker show-menu-arrow" title>
              <option value="随时">随时</option>
              <option value="一周内">一周内</option>
              <option value="一个月内">一个月内</option>
              <option value="三个月内">三个月内</option>
              <option value="待定">待定</option>
            </select>
          </td>
          <td>工作类型</td>
          <td>
            <select id="3_4_2" name="3_4_2" class="form-control selectpicker show-menu-arrow" title>
              <option value="全职">全职</option>
              <option value="兼职">兼职</option>
              <option value="实习">实习</option>
              <option value="全/兼职">全/兼职</option>
            </select>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>
