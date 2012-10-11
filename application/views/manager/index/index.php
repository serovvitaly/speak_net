<div class="btn-toolbar">

  <div class="btn-group">
    <a href="#myModal" role="button" class="btn btn-mini btn-success" data-toggle="modal"><i class="icon-plus-sign icon-white" style="margin-left: -3px;"></i> Новая рекламная компания</a>
    <a href="#myModal" role="button" class="btn btn-mini btn-primary" data-toggle="modal"><i class="icon-plus-sign icon-white" style="margin-left: -3px;"></i> Новое объявление</a>
  </div>
  
  <div class="btn-group pull-right">
    <a class="btn dropdown-toggle btn-mini sn-tooltip-bottom" href="#" title="По убыванию"><i class="icon-chevron-down"></i></a>
    <a class="btn dropdown-toggle btn-mini sn-tooltip-bottom" data-toggle="dropdown" href="#" title="Сортировать">по дате<span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="#">по дате</a></li>
      <li><a href="#">по рейтингу</a></li>
      <li><a href="#">по стоимости</a></li>
    </ul>
  </div>

  <!-- <div class="btn-group pull-right">
    <button class="btn btn-mini" onclick="SNV.call('hello')">1</button>
    <button class="btn btn-mini">2</button>
    <button class="btn btn-mini">3</button>
  </div> -->
</div>


<div style="height: 30px;"></div>

<?
  $items = array(
     array(
         'id'    => 1,
         'image' => '/data/food-studio-site-css3.jpg',
         'title' => 'Приходите в наше кафе',
         'text'  => 'На уровне языка реализовано наследование на прототипах. С помощью некоторых трюков можно сделать (хотя и не так удобно, как в Java/C++) наследование на классах, объявить приватные свойства объекта и многое другое.',
         'created' => '12 марта 2012'
     ),
     array(
         'id'    => 2,
         'image' => '/data/ultranoir-mobile.jpg',
         'title' => 'Создание объекта. Функция-конструктор',
         'text'  => 'Во время работы функции, вызванной директивой new, новосоздаваемый объект доступен как this, так что можно проставить любые свойства.',
         'created' => '3 января 2012'
     ),
     array(
         'id'    => 3,
         'image' => '/data/bo-play-a3-site-css.jpg',
         'title' => 'Как написать плагин для jQuery',
         'text'  => 'За последнее время было много просьб рассказать о том, как написать свой собственный плагин к jQuery. Идя навстречу пожеланиям трудящихся бескрайних полей Интернета – выполняю эти просьбы.',
         'created' => '21 мая 2011'
     ),
  );   
?>

<div class="row">
<? if (count($items) > 0) { foreach ($items AS $item) { ?>

    <div class="span11" style="border-bottom: 1px solid #E0E0E0; margin-bottom: 20px; padding-bottom: 10px; margin-left: 10px;">
      <div class="span3">
        <img alt="" src="<?= $item['image'] ?>" >
        <p style="margin: 9px 0 6px;"><strong><?= $item['title'] ?></strong> <i class="icon-info-sign sn-tooltip" title="Показать полностью" style="float: right; cursor: help;"></i></p>
        <p style="height: 46px; overflow: hidden;"><?= $item['text'] ?></p>
      </div>
      <div class="span8" style="margin-left: 0;">
        <div class="chart-container" id="container-<?= $item['id'] ?>" style="width: 160px; height: 160px; float: right; margin-right: 2px;"></div>
        <table style="margin-left: 20px;">
          <tr>
            <td><span class="sn-tooltip" title="Дата создания" style="cursor: help;"><i class="icon-edit"></i> <?= $item['created'] ?></span></td>
          </tr>
          <tr>
            <td><span class="sn-tooltip" title="Дата публикации" style="cursor: help;"><i class="icon-check"></i> <?= $item['created'] ?></span></td>
          </tr>
        </table>
        
      </div>
    </div>
   
<? }} ?>
</div>


<!-- Modal -->
<div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 id="myModalLabel">Modal header</h4>
  </div>
  <div class="modal-body">
    <p>One fine body…</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary">Save changes</button>
  </div>
</div>


<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>

<script type="text/javascript">
$(document).ready(function(){
    $('.sn-tooltip').tooltip({
        placement: 'right'
    });
    $('.sn-tooltip-bottom').tooltip({
        placement: 'bottom'
    });
    
    
    $('.chart-container').each(function(index, item){
        createChart($(item).attr('id'));
    });
    
})


function createChart(renderTo_conteiner){
    
    this.colors = Highcharts.getOptions().colors,
        categories = ['FB', 'VK', 'OK'],
        name = 'Browser brands',
        data = [{
                y: 21,
                color: this.colors[0],
                drilldown: {
                    name: 'MSIE versions',
                    categories: ['Не получили', 'Кликнули', 'Ожидают'],
                    data: [7, 3, 11],
                    color: this.colors[0]
                }
            }, {
                y: 48,
                color: this.colors[1],
                drilldown: {
                    name: 'Firefox versions',
                    categories: ['Не получили', 'Кликнули', 'Ожидают'],
                    data: [22, 12, 14],
                    color: this.colors[1]
                }
            }, {
                y: 31,
                color: this.colors[2],
                drilldown: {
                    name: 'Chrome versions',
                    categories: ['Не получили', 'Кликнули', 'Ожидают'],
                    data: [1, 10, 20],
                    color: this.colors[2]
                }
            }];


    // Build the data arrays
    this.browserData = [];
    this.versionsData = [];
    for (var i = 0; i < data.length; i++) {

        // add browser data
        this.browserData.push({
            name: categories[i],
            y: data[i].y,
            color: data[i].color
        });

        // add version data
        for (var j = 0; j < data[i].drilldown.data.length; j++) {
            var brightness = 0.2 - (j / data[i].drilldown.data.length) / 5 ;
            this.versionsData.push({
                name: data[i].drilldown.categories[j],
                y: data[i].drilldown.data[j],
                color: Highcharts.Color(data[i].color).brighten(brightness).get()
            });
        }
    }

    // Create the chart
    this.chart = new Highcharts.Chart({
        chart: {
            renderTo: renderTo_conteiner,
            type: 'pie'
        },
        title: {
            text: ''
        },
        yAxis: {
            title: {
                text: ''
            }
        },
        exporting: {
            buttons: {
                printButton: {
                    enabled: false
                },
                exportButton: {
                    enabled: false
                }
            }
        },
        plotOptions: {
            pie: {
                shadow: false,
                allowPointSelect: false,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                //showInLegend: true
            }
        },
        tooltip: {
            valueSuffix: '%',
            borderWidth: 1,
            borderRadius: 2
        },
        series: [{
            name: 'Сеть',
            data: this.browserData,
            size: '100%',
            dataLabels: {
                formatter: function() {
                    return this.y > 5 ? this.point.name : null;
                },
                color: 'white',
                distance: -30
            }
        }, {
            name: 'Пользователи',
            data: this.versionsData,
            innerSize: '100%',
            dataLabels: {
                formatter: function() {
                    // display only if larger than 1
                    return this.y > 1 ? '<b>'+ this.point.name +':</b> '+ this.y +'%'  : null;
                }
            }
        }]

    });    
}
        


</script>