/*!

# Plugin jQuery Plugin
  a demo syntax for jQuery. 

  CDN: `https://syuemingfang-syntax.googlecode.com/git/js/syntax.js`

  [GitHub project](https://github.com/syuemingfang/syuemingfang-syntax)

****************************************************************************************************/

/*!

+ Version: 0.1.0.0
+ Copyright © 2013 [Syue](mailtot:syuemingfang@gmail.com). All rights reserved.
+ Date: *Thu Aug 29 2013 11:16:29 GMT+0800 (Central Standard Time)*

## Examples
 1. **Standard** [Power by Cinderella](http://html.cxm.tw/?url=https://raw.github.com/syuemingfang/syuemingfang-syntax/master/example.html)

## How to Use
 1. **Setup** include this javascript files in your header.
  + **jQuery**
   `<script src='http://code.jquery.com/jquery-1.8.3.min.js'></script>`
  + **This Plguin**
   `<script src='https://syuemingfang-syntax.googlecode.com/git/js/syntax.js'></script>`
 2. **Usage**
  + **Format**  This Plugin accepts settings from an object of key/value pairs.
   `$(selector).syntax({key: value...})`
  + **Example**
     + `$('button').syntax({on: 'click'})`
 3. **Set** copy code from the `<head>` and `</head>` tags and paste it on your page.

        <script>
        $(document).ready(function(){
          //Usage
        });
        </script>

****************************************************************************************************/
;(function($){
 $.fn.syntax=function(opt){
  var f=$.fn.syntax;
  $.extend(true, f, {
    version: '0.1.0.0',
    //!## Options
    set: {
      on: 'load', //!+ **on** an object in which the string keys represent one or more space-separated event types and optional namespaces, and the values represent a handler function to be called for the event(s).
      ver: 'standard', //!+ **ver** a message
      lang: 'javascript', //!+ **lang** a message
      css: 'standard-javascript',
      tag: true
    },
    //!****************************************************************************************************
    //!## API
    log: function(str){
      //!+ **log(str)** outputs a message to the web console.
      console.log(str);
    },
    raw: function(obj, tag){
      //!+ **raw(obj)** outputs a message to the web console.
        var str=$(obj).html();
        var r=null;
        if(tag == true){
          r=new RegExp('&lt;', 'ig');
          str=str.replace(r, '<');
          r=new RegExp('&gt;', 'ig');
          str=str.replace(r, '>');
        }
        r=new RegExp('<span class="syntax.*?>(.*?)</span>', 'ig');
        str=str.replace(r, '$1');
        return str;
    }
  }); 
  $.extend(true, f, {
    set: {
      style: {
          'standard':{
            'javascript': {
           'keyword': ['break','delete','function','return','typeof','case','do','if','switch','var','catch','else','in','this','void','continue','finally','instanceof','throw','while','default','for','new','try','with'],
              'future': ['abstract','double','implements','private','throws','boolean','enum','import','protected','transient','byte','export','int','public','volatile','char','extends','interface','short','class','final','long','static','const','float','native','super','debugger','goto','package','synchronized'],
              'literal': ['null','true','false'],
              'symbol': ['{','}']
            }
          }
        }
    }
  }); 
  //!****************************************************************************************************
  //!## Function
  var func=function(that, set){
    var initialize=function(){
      //!+ **initialize()**
      // Declare
      // Constructor
      // Declare
      // Constructor
      if(set.on == 'load'){
        start();
      } else {
        that.on(set.on, function(){
          start();
        });
      }
    }
    var start=function(){
      //!+ **start()**
      // Declare
      // Constructor
      var str=$.fn.syntax.raw(that);
      var r=null;
      var style=set.style[set.ver][set.lang];
      if(set.tag == true){
        r=new RegExp('<', 'ig');
        str=str.replace(r, '&lt;');
        r=new RegExp('>', 'ig');
        str=str.replace(r, '&gt;');
      }
      for(var type in style){
        for(var i in style[type]){
          var r=new RegExp('('+style[type][i]+')', 'ig');
          str=str.replace(r, '<qazwsxedc '+type+'>$1</qazwsxedc>');
        }
      }
      var r=new RegExp('<qazwsxedc (.*?)>(.*?)</qazwsxedc>', 'ig');
      str=str.replace(r, '<span class="syntax $1">$2</span>');
      that.addClass(set.css);
      that.html(str);
    }
    initialize();
  }
  return this.each(function(){ 
    var set=$.extend(true, f.set, opt);
    func($(this), set);
  });
 }
})(j$183);


