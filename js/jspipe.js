(function(a, b) {
  //! 
  //****************************************************************************************************
  //!## Javascript
  var func=function(){
    var d=function(){
      return new d.fn.init();
    }
    d.set={
      //!### Set
      obj: 'html' //!+ **obj**
    }
    d.fn=d.prototype={
      constructor: d, 
      version: '0.1.0.0',
      init: function(){
        return this;
      }
    }
    d.fn.init.prototype=d.fn;
    class2type={},
    core_hasOwn=class2type.hasOwnProperty,
    d.extend=d.fn.extend=function(){
      // jQuery JavaScript Library v2.0.2 extend  //
      var options, name, src, copy, copyIsArray, clone,
      target=arguments[0] || {},
      i=1,
      length=arguments.length,
      deep=false;
      if(typeof target === 'boolean'){
        deep=target;
        target=arguments[1] || {};
        i=2;
      }
      if(typeof target !== 'object' && !d.isFunction(target)){
        target={};
      }
      if(length === i){
        target=this;
        --i;
      }
      for(; i < length; i++){
        if((options=arguments[ i ]) != null){
          for(name in options){
            src=target[name];
            copy=options[name];
            if(target === copy){
              continue;
            }
            if(deep && copy && (d.isPlainObject(copy) || (copyIsArray=d.isArray(copy)))){
              if(copyIsArray){
                copyIsArray=false;
                clone=src && d.isArray(src) ? src : [];
              } else{
                clone=src && d.isPlainObject(src) ? src : {};
              }

              target[name]=d.extend(deep, clone, copy);
            } else if(copy !== undefined) {
              target[ name ]=copy;
            }
          }
        }
      }
      return target;
    };
    d.extend({
      // jQuery JavaScript Library v2.0.2 extend  //
      isFunction: function(obj){
        return d.type(obj) === 'function';
      },
      isPlainObject: function(obj){
        if(d.type(obj) !== 'object' || obj.nodeType || d.isWindow(obj)){
          return false;
        }
        try{
          if(obj.constructor && !core_hasOwn.call(obj.constructor.prototype, 'isPrototypeOf')){
            return false;
          }
        } catch(e){
          return false;
        }
        return true;
      },
      isWindow: function(obj){
        return obj != null && obj === obj.window;
      },
      isArray: Array.isArray || function(obj){ return d.type(obj) === 'array'},
      type: function(obj){
        if(obj == null){
          return String(obj);
        }
        return typeof obj === 'object' || typeof obj === 'function' ? 'object' : typeof obj;
      }
    })
    d.extend({
      //!### Function
      addEvent: function(obj, type, func){
        //!+ **addEvent**(obj, type, func)
        if(window.attachEvent){
          obj.attachEvent("on"+type, function(){func.apply(obj, arguments)}); //IE
        }
        else obj.addEventListener(type, func, false); //other
      },
      getContent: function(obj){
        //!+ **getContent**(obj)
        return obj.value||obj.textContent||obj.innerHTML;
      },
      postContent: function(obj, content){
        //!+ **postContent**(obj, content)
        obj.value=content;
      },
      replace: function(input, output, type, id, reg){
        //!+ **replace**(input, output, type, id, reg)
        var full=input.value;
        var select=document.getElementById('select_'+id);
        // obj Initialize //
        var r=new RegExp(reg, 'i');
        var url=select[select.length-1].value;
        if(full.match(r) != null){
          var p=(type == 'css') ? '<link href="'+url+'" id="node_'+id+'" rel="stylesheet" >' : '<script src="'+url+'" id="node_'+id+'"><\/script>';
          full=full.replace(r, p);
          d.postContent(input, full);
          select.options[select.length-1].selected=true;
        }
      },
      replaceFull_select: function(e, input, output, type, id, reg){
        //!+ **replaceFull_select**(e, input, output, type, id, reg)
        var full=input.value;
        var target=e.srcElement||e.target;
        var v=target.options[target.selectedIndex].value;
        var r=new RegExp(reg, 'i'); 
        var node=[];
        node[0]=(type == 'css') ? '<link href="'+v+'" id="node_'+id+'" rel="stylesheet">' : '<script src="'+v+'" id="node_'+id+'"><\/script>';
        r[0]=new RegExp('id.*?=.*?node_'+id, 'i');
        r[1]=new RegExp(reg, 'ig');
        if(full.match(r[0]) != null){
            // Node Exist //
            p=(v == 'null') ? '' : node;
            output.value=full.replace(r[1], p);
          } else{
            // Node Not Exist //
            r[2]=new RegExp('(.*)(<\/body>|<\/head>)', 'i');
            output.value=full.replace(r[2], '$1'+node+'$2');
          }
          return output.value
        },
        fulltoPart: function(input, output, type){
          //!+ **fulltoPart**(input, output, type)
          var full=input.value;
          var part='';
          var p=null;
          var r=null;
          var result=null;
          if(type == 'css'){
            p='<style.*?>((\n|\r|.)*?)((\n|\r).*)?<\/style>';
          } else if(type == 'js'){
            p='<script.*?>((\n|\r|.)*?)((\n|\r).*)?<\/script>';
          } else if(type == 'html'){
            p='<body.*?>((\n|\r|.)*?)((\n|\r).*)?<\/body>';
          } else if(type == 'lib_css'){
            p='(<link.*?href=.*?\.css.*?>)';
          } else if(type == 'lib_js'){
            p='(<script.*?src=.*?\.js.*?><\/script>)';
          }
          r=new RegExp(p, 'ig')
          result=full.match(r);

          for(var i in result){
            if(typeof(result[i]) != 'string') return;
            if(type == 'html'){
              part=result[i].replace(r, '$1');
              r=new RegExp('<script.*?>((\n|\r|.)*?)<\/script>(\n|\r)?', 'ig');
              part=part.replace(r, '');
              r=new RegExp('<style.*?>((\n|\r|.)*?)<\/style>(\n|\r)?', 'ig');
              part=part.replace(r, '');
              r=new RegExp('<link.*?>(\n|\r)?', 'ig');
              part=part.replace(r, '');
              r=new RegExp('<script.*?>(\n|\r)?', 'ig');
              part=part.replace(r, '');
            } else {
              part+=result[i].replace(r, '$1');
            }
          }
          // Clear Header Enter //
          part=d.clearEnter(part);
          d.postContent(output, part);
        },
        clearEnter: function(obj){
          //!+ **clearEnter**(obj)
          var p=null;
          var r=null;
          p='^(\n|\r)*';
          r=new RegExp(p, 'ig');
          obj=obj.replace(r, '');
          p='(\n|\r)*$';
          r=new RegExp(p, 'ig');
          obj=obj.replace(r, '');
          return obj;
        },
        parttoFull: function(output, lib, css, js, html){
          //!+ **parttoFull**(output, lib, css, js, html)
          lib.css.value=d.clearEnter(lib.css.value);
          lib.js.value=d.clearEnter(lib.js.value);
          css.value=d.clearEnter(css.value);
          html.value=d.clearEnter(html.value);    
          js.value=d.clearEnter(js.value);
          var full='<!DOCTYPE HTML>\n'+
          '<html>\n'+
          '<head>\n'+
          '<meta charset="utf-8">\n'+
          lib.css.value+'\n'+
          '<style>\n'+
          css.value+'\n'+
          '<\/style>\n'+
          '<\/head>\n'+
          '<body>\n'+
          html.value+'\n'+
          '<script>\n'+
          js.value+'\n'+
          '<\/script>\n'+
          lib.js.value+'\n'+
          '<\/body>\n'+
          '<\/html>';
          d.postContent(output, full);
        },
        showFull: function(){
          //!+ **showFull**
          return document.getElementById(d.set.source).value
        },
        initialize: function(){
          //!+ **initialize**
          var obj={
            source: document.getElementById(d.set.source),
            lib: {
              css: document.getElementById(d.set.lib.css),
              js: document.getElementById(d.set.lib.js)
            },
            css: document.getElementById(d.set.css),
            js: document.getElementById(d.set.js),
            html: document.getElementById(d.set.html),
            view: window.frames[d.set.view].document.getElementsByTagName('html')[0]||document.frames[d.set.view].document.getElementsByTagName('html')[0]
          }
          var lib={
            bootstrap: {
              id: 'bootstrap',
              type: 'css',
              r: '\<link.*?href=.*?bootstrap.*?\.css.*?\>'
            },
            jquery: {
              id: 'jquery',
              type: 'js',
              r: '\<script.*?src=.*?jquery.*?\.js.*?\>\<\/script\>'
            }   
          }
          obj.source.onchange=function(e){
            d.initialize();
          }
          function addEvent_lib(lib){
            var output=lib.type == 'css' ? obj.css : obj.js;
            var select=document.getElementById('select_'+lib.id);
            d.replace(obj.source, output, lib.type, lib.id, lib.r);
            d.addEvent(select, 'change', function(e){
              d.replaceFull_select(e, obj.source, obj.source, lib.type, lib.id, lib.r);
              var output=lib.type == 'css' ? obj.lib.css : obj.lib.js;
              var type=lib.type == 'css' ? 'lib_css' : 'lib_js';
              d.fulltoPart(obj.source, output, type)
              d.postContent(obj.view, d.showFull());
            }); 
          }
          function addEvent_obj(o, i){
            if(o[i] == obj.source){
               d.addEvent(o[i], 'change', function(e){
                  d.fulltoPart(obj.source, obj.css, 'css');
                  d.fulltoPart(obj.source, obj.js, 'js');
                  d.fulltoPart(obj.source, obj.html, 'html');
                  d.fulltoPart(obj.source, obj.lib.css, 'lib_css');
                  d.fulltoPart(obj.source, obj.lib.js, 'lib_js');
              });              
             } else{
              d.addEvent(o[i], 'change', function(e){
                d.parttoFull(o.source, o.lib, o.css, o.js, o.html);
                j$183(o.view).html(d.showFull());
              });
             }  
          }
          for(var i in lib){
            addEvent_lib(lib[i]);     
          }
          for(var i in obj){
            try{
              addEvent_obj(obj, i) 
            }
            catch(e){}
          }
          d.fulltoPart(obj.source, obj.css, 'css');
          d.fulltoPart(obj.source, obj.js, 'js');
          d.fulltoPart(obj.source, obj.html, 'html');
          d.fulltoPart(obj.source, obj.lib.css, 'lib_css');
          d.fulltoPart(obj.source, obj.lib.js, 'lib_js');
          j$183(obj.view).html(d.showFull());
        }
    })
    return d;
  }();
  a.jsPipe=func;
  return this;
})(window);
(function(d){
  d.extend(true, d.set,{
    source: 'source',
    lib: {
      css: 'lib_css',
      js: 'lib_js'
    },
    css: 'css',    
    js: 'js',
    html: 'html',
    view: 'view'
  });
})(jsPipe);

window.onload=function(){
  jsPipe.initialize();
}