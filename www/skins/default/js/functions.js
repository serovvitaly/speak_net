

function SNV(){
    
    var me = this;
    
    /**
    * Определяет новый callback метод
    */
    this.define = function(method, params){
        //
    }
    
    
    this.callback = [];
    
    /**
    * Заносит callback метод в хранилище
    */
    this.set_callback = function(method_name, instance){
        //
    }
    
    /**
    * Возвращает callback метод
    */
    this.get_callback = function(method){
        //
    }
    
    
    /**
    * Функция удаленного вызова
    * 
    * @param params
    */
    this.call = function(options){
            
        console.log(typeof(options)); console.log(options); return;
                
        me.ajax({
            url : '/call/',
            type: 'POST',
            data: $.toJSON(options),
            success: function(data, textStatus, jqXHR){
                if (data.success === true) {
                    me.call_success();
                }
                else {
                    me.call_failure();
                }
            }
        });
        
    }
    
    
    this.call_success = function(){
        //alert('УРА');
    }
    
    this.call_failure = function(){
        alert('ПРОВАЛ');
    }
    
    
    /**
    * Выполняет AJAX запрос
    * 
    * @param options
    */
    this.ajax = function(options){
        var options = jQuery.extend({
            url        : '/ajax/',
            type       : 'GET',
            timeout    : 1000,
            dataType   : 'json',
            traditional: true,
            data       : {},
            beforeSend : function(jqXHR, settings){},
            complete   : function(jqXHR, textStatus){},
            error      : me.ajax_error,
            success    : function(data, textStatus, jqXHR){}
        },options);
        
        jQuery.ajax(options);
    }
    
    this.ajax_error = function(jqXHR, textStatus, errorThrown){
        alert(textStatus + ' : ' + errorThrown);
    }
    
}

var SNV = new SNV();