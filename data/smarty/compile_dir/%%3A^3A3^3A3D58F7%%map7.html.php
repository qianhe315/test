<?php /* Smarty version 2.6.22, created on 2016-06-21 11:29:12
         compiled from map/doc/example/map7.html */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ECharts">
    <meta name="author" content="linzhifeng@baidu.com">
    <title></title>

    <link rel="shortcut icon" href="<?php echo $this->_tpl_vars['url']; ?>
/erp/template/map/doc/asset/ico/favicon.png">

    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo $this->_tpl_vars['url']; ?>
/erp/template/map/doc/asset/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $this->_tpl_vars['url']; ?>
/erp/template/map/doc/asset/css/carousel.css" rel="stylesheet">
    <link href="<?php echo $this->_tpl_vars['url']; ?>
/erp/template/map/doc/asset/css/echartsHome.css" rel="stylesheet">
    <script src="<?php echo $this->_tpl_vars['url']; ?>
/erp/template/map/doc/example/theme/red.js"></script>
    <script src="<?php echo $this->_tpl_vars['url']; ?>
/erp/template/map/doc/asset/js/esl/esl.js"></script>
    <script src="<?php echo $this->_tpl_vars['url']; ?>
/erp/template/map/doc/asset/js/codemirror.js"></script>
    <script src="<?php echo $this->_tpl_vars['url']; ?>
/erp/template/map/doc/asset/js/javascript.js"></script>
    <script src="<?php echo $this->_tpl_vars['url']; ?>
/erp/template/map/doc/example/www/js/echarts-map.js"></script>
    <script src="<?php echo $this->_tpl_vars['url']; ?>
/erp/template/map/doc/example/theme/default.js"></script>
    <script src="<?php echo $this->_tpl_vars['url']; ?>
/erp/template/map/doc/asset/js/jquery.min.js"></script>
    <script src="<?php echo $this->_tpl_vars['url']; ?>
/erp/template/map/doc/asset/js/echartsHome.js"></script>
    <script src="<?php echo $this->_tpl_vars['url']; ?>
/erp/template/map/doc/asset/js/bootstrap.min.js"></script>
    <script src="<?php echo $this->_tpl_vars['url']; ?>
/erp/template/map/doc/asset/js/echartsExample.js"></script>
    <script src="<?php echo $this->_tpl_vars['url']; ?>
/erp/template/map/build/echarts-plain-map.js "></script>
    <link href="<?php echo $this->_tpl_vars['url']; ?>
/erp/template/map/doc/asset/css/codemirror.css" rel="stylesheet">
    <link href="<?php echo $this->_tpl_vars['url']; ?>
/erp/template/map/doc/asset/css/monokai.css" rel="stylesheet">

    <style type="text/css">
        .CodeMirror {
            height: 550px;
        }
    </style>
</head>

<body>
    <!-- Fixed navbar -->
	<a href="#" onClick="get_new_data()"><button type="button">获取最新数据</button></a>
    <div class="container-fluid">
        <div class="row-fluid example">
            <div id="sidebar-code" class="col-md-4"  style="display:none;">
                <div class="well sidebar-nav">
                    <div class="nav-header"><a href="#" onclick="autoResize()" class="glyphicon glyphicon-resize-full" id ="icon-resize" ></a>option</div>
                    <textarea id="code" name="code">
                 
// 自定义扩展图表类型：mapType = USA


require('echarts/util/mapData/params').params.USA = {

    getGeoJson: function (callback) {
    
        $.getJSON('<?php echo $this->_tpl_vars['url']; ?>
/erp/template/map/doc/example/geoJson/USA_geo.json', callback);
    },
    specialArea : {
        Alaska : {              // 把阿拉斯加移到美国主大陆左下方
            left : -127,        // 安放位置起始点为西经113
            top : 30,           // 北纬31度
            width : 15,         // 区间大小宽高不大于15度
            height : 15
        },
        Hawaii : {
            left : -110,        // 夏威夷
            top : 28,
            width : 5,
            height : 5
        },
        'Puerto Rico' : {       // 波多黎各
            left : -76,
            top : 26,
            width : 2,
            height : 2
        }
    }
}
option = {
    title : {
        text: '',
        subtext: '',
        sublink: 'http://www.census.gov/popest/data/datasets.html',
        x:'right'
    },
    tooltip : {
        trigger: 'item',
        showDelay: 0,
        transitionDuration: 0.2,
        formatter : function (a) {
            var sName = a[0];
            var pName = a[1];
            var value = a[2] + '';
            value=(0==value.indexOf('0')?value.substr(1):value);<!-- js去掉第一个字符-->
            value = value.replace(/(\d{1,3})(?=(?:\d{3})+(?!\d))/g, '$1,');
            return pName + ' : ' + value;
        }
    },
    dataRange: {
        x : 'right',
        min: 1,
        max: 150,
        color: ['orangered','yellow','lightskyblue'],
        text:['High','Low'],           // 文本，默认为数值文本
        calculable : true
    },
    toolbox: {
        show : true,
        //orient : 'vertical',
        x: 'right',
        y: 'top',
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: false},
            restore : {show: true},
            saveAsImage : {show: true}
        }
        
    },
    series : [
        {
            name: 'USA PopEstimates',
            type: 'map',
            roam: true,
            mapType: 'USA', // 自定义扩展图表类型
            roam:true,
            selectedMode : 'single',
            itemStyle:{
                emphasis:{label:{show:true}}
            },
        
            // 文本位置修正
            textFixed : {
                Alaska : [20, -20]
            },
            data:[
                {name : 'Alabama', value : '<?php echo $this->_tpl_vars['Alabama']; ?>
'},
                {name : 'Alaska', value : '<?php echo $this->_tpl_vars['Alaska']; ?>
'},
                {name : 'Arizona', value : '<?php echo $this->_tpl_vars['Arizona']; ?>
'},
                {name : 'Arkansas', value : '<?php echo $this->_tpl_vars['Arkansas']; ?>
'},
                {name : 'California', value :'<?php echo $this->_tpl_vars['California']; ?>
'},
                {name : 'Colorado', value : '<?php echo $this->_tpl_vars['Colorado']; ?>
'},
                {name : 'Connecticut', value :'<?php echo $this->_tpl_vars['Connecticut']; ?>
'},
                {name : 'Delaware', value : '<?php echo $this->_tpl_vars['Delaware']; ?>
'},
                {name : 'District of Columbia', value : '<?php echo $this->_tpl_vars['District']; ?>
'},
                {name : 'Florida', value : '<?php echo $this->_tpl_vars['Florida']; ?>
'},
                {name : 'Georgia', value : '<?php echo $this->_tpl_vars['Georgia']; ?>
'},
                {name : 'Hawaii', value : '<?php echo $this->_tpl_vars['Hawaii']; ?>
'},
                {name : 'Idaho', value : '<?php echo $this->_tpl_vars['Idaho']; ?>
'},
                {name : 'Illinois', value :'<?php echo $this->_tpl_vars['Illinois']; ?>
'},
                {name : 'Indiana', value : '<?php echo $this->_tpl_vars['Indiana']; ?>
'},
                {name : 'Iowa', value : '<?php echo $this->_tpl_vars['Iowa']; ?>
'},
                {name : 'Kansas', value : '<?php echo $this->_tpl_vars['Kansas']; ?>
'},
                {name : 'Kentucky', value :'<?php echo $this->_tpl_vars['Kentucky']; ?>
'},
                {name : 'Louisiana', value :'<?php echo $this->_tpl_vars['Louisiana']; ?>
'},
                {name : 'Maine', value : '<?php echo $this->_tpl_vars['Maine']; ?>
'},
                {name : 'Maryland', value : '<?php echo $this->_tpl_vars['Maryland']; ?>
'},
                {name : 'Massachusetts', value : '<?php echo $this->_tpl_vars['Massachusetts']; ?>
'},
                {name : 'Michigan', value : '<?php echo $this->_tpl_vars['Michigan']; ?>
'},
                {name : 'Minnesota', value : '<?php echo $this->_tpl_vars['Minnesota']; ?>
'},
                {name : 'Mississippi', value : '<?php echo $this->_tpl_vars['Mississippi']; ?>
'},
                {name : 'Missouri', value : '<?php echo $this->_tpl_vars['Missouri']; ?>
'},
                {name : 'Montana', value : '<?php echo $this->_tpl_vars['Montana']; ?>
'},
                {name : 'Nebraska', value : '<?php echo $this->_tpl_vars['Nebraska']; ?>
'},
                {name : 'Nevada', value : '<?php echo $this->_tpl_vars['Nevada']; ?>
'},
                {name : 'New Hampshire', value : '<?php echo $this->_tpl_vars['Hampshire']; ?>
'},
                {name : 'New Jersey', value : '<?php echo $this->_tpl_vars['Jersey']; ?>
'},
                {name : 'New Mexico', value : '<?php echo $this->_tpl_vars['Mexico']; ?>
'},
                {name : 'New York', value : '<?php echo $this->_tpl_vars['York']; ?>
'},
                {name : 'North Carolina', value : '<?php echo $this->_tpl_vars['Carolina']; ?>
'},
                {name : 'North Dakota', value : '<?php echo $this->_tpl_vars['Dakota']; ?>
'},
                {name : 'Ohio', value : '<?php echo $this->_tpl_vars['Ohio']; ?>
'},
                {name : 'Oklahoma', value : '<?php echo $this->_tpl_vars['Oklahoma']; ?>
'},
                {name : 'Oregon', value : '<?php echo $this->_tpl_vars['Oregon']; ?>
'},
                {name : 'Pennsylvania', value : '<?php echo $this->_tpl_vars['Pennsylvania']; ?>
'},
                {name : 'Rock Island', value : '<?php echo $this->_tpl_vars['Island']; ?>
'},
                {name : 'South Carolina', value : '<?php echo $this->_tpl_vars['Carolina']; ?>
'},
                {name : 'South Dakota', value : '<?php echo $this->_tpl_vars['Dakota']; ?>
'},
                {name : 'Tennessee', value : '<?php echo $this->_tpl_vars['Tennessee']; ?>
'},
                {name : 'Texas', value : '<?php echo $this->_tpl_vars['Texas']; ?>
'},
                {name : 'Utah', value : '<?php echo $this->_tpl_vars['Utah']; ?>
'},
                {name : 'Vermont', value : '<?php echo $this->_tpl_vars['Vermont']; ?>
'},
                {name : 'Virginia', value : '<?php echo $this->_tpl_vars['Virginia']; ?>
'},
                {name : 'Washington', value : '<?php echo $this->_tpl_vars['Washington']; ?>
'},
                {name : 'West Virginia', value : '<?php echo $this->_tpl_vars['Virginia']; ?>
'},
                {name : 'Wisconsin', value : '<?php echo $this->_tpl_vars['Wisconsin']; ?>
'},
                {name : 'Wyoming', value : '<?php echo $this->_tpl_vars['Wyoming']; ?>
'},
                {name : 'Puerto Rico', value : '<?php echo $this->_tpl_vars['Rico']; ?>
'}
            ]
        }
    ]
};
var ecConfig = require('echarts/config');

myChart.on(ecConfig.EVENT.MAP_SELECTED, function (param){
    var selected = param.selected;
    
    var str = '';
    for (var p in selected) {
        if (selected[p]) {
            str += p + '';
        }
    }
     
    window.open('customer_index-ids-' + str + '.html');
    document.getElementById('wrong-message').innerHTML = str;
})
                 </textarea>
              </div><!--/.well -->
            </div><!--/span-->
            <div id="graphic" class="col-md-10">
            <div id="main" class="main" style="height: 658px;"></div>
             
            </div><!--/span-->
        </div><!--/row-->
        
        </div><!--/.fluid-container-->

   
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo $this->_tpl_vars['url']; ?>
/erp/template/map/doc/asset/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['url']; ?>
/erp/template/map/doc/asset/js/echartsHome.js"></script>
    <script src="<?php echo $this->_tpl_vars['url']; ?>
/erp/template/map/doc/asset/js/bootstrap.min.js"></script>
    <script src="<?php echo $this->_tpl_vars['url']; ?>
/erp/template/map/doc/asset/js/echartsExample.js"></script>
    <style type="text/css">
		#bg{ display: none; position: absolute; top: 0%; left: 0%; width: 100%; height: 100%; background-color: black; z-index:1001; -moz-opacity: 0.7; opacity:.70; filter: alpha(opacity=70);}
		#show{display: none; position: absolute; top: 25%; left: 40%; width: 15%; height: 15%; padding: 8px; border: 8px solid #E8E9F7; background-color: white; z-index:1002; overflow: auto;}
	</style>
    <div id="bg" style="display:none"></div>
    <div id="show" style="display:none">拼命加载中，请稍等！</div>
    <script type="text/javascript">
		function get_new_data(){
			$('#bg').css('display','block');
			$('#show').css('display','block');
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/map/get_new_data',
				dataType:"text",
				type:'post',
				success: function(data){
					if(data==1){
						$('#bg').css('display','none');
						$('#show').css('display','none');
						alert('获取完毕！');
						window.location.href='<?php echo $this->_tpl_vars['__ROOT__']; ?>
/map/index';
					}
				}	
			});	
		}
    </script>
</body>
</html>