

function SNV(){
    
    var me = this;
    
    /**
    * Определяет новый callback метод
    */
    this.define = function(method, params){
        //
    }
    
    
    this.callmix = [];
    
    /**
    * Вызывает callback метод
    */
    this.fire_callback = function(method, params){
        
        jQuery.each(me.callmix, function(index, item){
            
            if (item.method == method) {
                item.callback(params);
            }
        })
        
    }
    
    
    /**
    * Функция удаленного вызова
    * 
    * @param params
    */
    this.call = function(callmix){
        
        me.callmix = callmix;
        
        me.callmix_query = [];
        
        jQuery.each(me.callmix, function(index, item){
            me.callmix_query.push({
                method: item.method,
                params: item.params
            });
        });
                
        me.ajax({
            url : '/call/',
            type: 'POST',
            data: jQuery.toJSON(me.callmix_query),
            success: function(data, textStatus, jqXHR){
                if (data.success === true) {
                    me.call_success(data);
                }
                else {
                    me.call_failure(data);
                }
            }
        });
        
    }
    
    
    this.call_success = function(data){
        
        // обработка успешных функций
        if (data.callback && data.callback.length > 0) {
            jQuery.each(data.callback, function(index, item){
                me.fire_callback(item.method, item.result);
            })
        }
        
        // обработка не успешных функций
        if (data.errors && data.errors.length > 0) {
            jQuery.each(data.errors, function(index, item){
                //
            })
        }
        
    }
    
    this.call_failure = function(data){
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