<!DOCTYPE HTML>
<html>
<head>
  <meta charset='utf-8'>
  <title>jsPipe</title>
  <link rel='stylesheet' href='css/bootstrap-3.min.css' type='text/css'>
  <script src='http://code.jquery.com/jquery-1.8.3.min.js'></script>
  <script>
  var j$183=$.noConflict(true);
  </script>
</head>
<body>
<div class='jumbotron'>
    <div class='container'>
      <div class='row'>
        <div class='col-lg-12 text-center'><h1>jsPipe</h1>
          <p class='lead text-muted'>HTML, CSS and JavaScript Debugging Web-Applicatio.</p>
        </div>
      </div>
      <form method='POST' action='http://html.cxm.tw'>
      <div class='row'>
        <div class='col-sm-12 col-lg-12'>
          <h4 class="text-muted">Loading Your HTML</h4>
        </div>
      </div>
      <div class='row'>
        <div class='col-sm-10 col-lg-10'>
          <input type='hidden' name='jspipe' value='true' />
          <input type='text' name='url' class='form-control input-lg' placeholder='Your URL' />
        </div>
        <div class='col-sm-2 col-lg-2 text-right'>
         <input type='submit' class='btn btn-success btn-lg' value='Here We Go' />
       </div>
     </div>
     </form>
      <div class='row'>
        <div class='col-sm-12 col-lg-12'>
          <hr />
          <h4 class="text-muted">Coding</h4>
        </div>
      </div>
      <form method='POST' action='main.php'>
      <div class='row'>
        <div class='col-lg-12'><h5 class='text-muted'>View</h5></div>
      </div>
      <div class='row'>
        <div class='col-lg-12'>
          <iframe src='sub.html' name='view' id='view' class='col-lg-12' style='width:100%; border:0'></iframe>
        </div>
      </div>
      <div class='row'>
        <div class='col-lg-12'><hr /></div>
      </div>
      <div class='row'>
        <div class='col-lg-3 text-left'>
        <h5 class='text-muted'>Library</h5>
          <select id='select_bootstrap'>
            <option value='null' selected>- Bootstrap</option>
            <option value='css/bootstrap-2.3.2.min.css'>+ Bootstrap 2.3.2</option>
            <option value='css/bootstrap-3.min.css'>+ Bootstrap 3</option>
          </select>
          <input type='hidden' id='lib_css' />
          <select id='select_jquery'>
            <option value='null' selected>- jQuery</option>
            <option value='js/jquery-1.10.1.min.js'>+ jQuery 1.10.1</option>
            <option value='js/jquery-2.0.2.min.js'>+ jQuery 2.0.2</option>
          </select>
          <input type='hidden' id='lib_js' />   
        </div>
        <div class='col-lg-3 text-left'>
          <h5 class='text-muted'>CSS</h5>       
          <textarea id='css' class='form-control' rows='10'></textarea>
        </div>
        <div class='col-lg-3'>
          <h5 class='text-muted'>Javascript</h5>
          <textarea id='js' class='form-control' rows='10'></textarea>   
        </div>
        <div class='col-lg-3'>
          <h5 class='text-muted'>HTML</h5>
          <textarea id='html' class='form-control' rows='10'></textarea>         
        </div>
        <div class='row'>
          <div class='col-lg-12'><h5 class='text-muted'>All Source</h5></div>
        </div>
        <div class='row'>
          <div class='col-lg-12'><textarea id='source' class='form-control' rows='10'><?php echo $html ?>
</textarea></div>
              </div>
              <div class='row'>
                <div class='col-lg-12'><hr /></div>
              </div>
              
            </div>
            </div>
            </div>
    <div class='container'>
      <div class='row'>
        <div class='col-lg-12 col-sm-12 text-muted visible-lg'>
        <a href='http://comment.cxm.tw/?url=https://raw.github.com/syuemingfang/syuemingfang-jspipe/master/comment.json'>Documentation</a> |
        <a href='http://html.cxm.tw/?url=https://raw.github.com/syuemingfang/syuemingfang-jspipe/master/example.html'>Example</a> |
        <a href='http://syue.cxm.tw'>Official Website</a> |
        <a href='mailto:syuemingfang@yahoo.com.tw'>Contact US</a>
        Made in Taiwan.<br />
        This license allows for redistribution, commercial and non-commercial, as long as it is passed along unchanged and in whole, with credit to you.
        </div>
     </div>
   </div>
   </form>
          <script>
/*!

# jsPipe Javascript Plugin
+ Version: 0.1.0.0 Personal
+ Copyright © 2013 [Syue](mailtot:syuemingfang@gmail.com). All rights reserved.
+ Date: *Tue Aug 06 2013 16:47:48 GMT+0800 (Central Standard Time)*

****************************************************************************************************/
(function(a, b) {
  var func=function(){
    var d=function(){
      return new d.fn.init();
    }
    d.set={
      obj: 'html',
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
      // jQuery JavaScript Library v2.0.2 extend  //
      addEvent: function(obj, type, func){  
        if(window.attachEvent){
          obj.attachEvent("on"+type, function(){func.apply(obj, arguments)}); //IE
        }
        else obj.addEventListener(type, func, false); //other
      },
      getContent: function(obj){
        return obj.value||obj.textContent||obj.innerHTML;
      },
      postContent: function(obj, content){
          obj.value=content;
      },
      replace: function(input, output, type, id, reg){
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
          return document.getElementById(d.set.source).value
        },
        initialize: function(){
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
</script>

</body>
</html>


