// Lazy Loader for CSS, image and JS files. Replaces More-Asset.
var AssetLoader={options:{script:{chain:!0},defaults:{chain:!1,onInit:function(){},onComplete:function(){},onProgress:function(){},path:""},path:""},properties:{script:{type:"text/javascript"},link:{rel:"stylesheet",media:"screen",type:"text/css"},img:{}},load:function(a,d,b,h,i){function k(c){g.removeEvent("load");f[c].call(g,++i[0],l,e);AssetLoader.loading[e][c].each(function(a){a.call(g,i[0],l,e)});delete AssetLoader.loading[e];AssetLoader.loaded[b][e]=this;a.length?AssetLoader.load(a,d,b,h,i): (f.onInit(),f.onComplete())}AssetLoader.build();if(!a.length)return alert("err: No Files Passed");var c=a.shift(),e=([c.path,d.path,AssetLoader.path].pick()||"")+[c.src,c.href,c].pick();b=="mixed"&&(b=AssetLoader.type(c));var f=Object.merge({events:{}},AssetLoader.options.defaults,AssetLoader.options[b]||{},d);c=Object.merge(c.big?{}:c,f);c[b=="link"?"href":"src"]=e;var n=c.chain,m=["load","error","abort"];m.each(function(a){[a,"on"+a,"on"+a.capitalize()].some(function(b,d){var e=d?c.events:c;if(!e[b])return!1; f[a]=e[b];delete e[b]})});if(!f.load)f.load=c.onProgress;Object.each(AssetLoader.options.defaults,function(a,b){delete c[b]});var j,l=++i[1];if(j=AssetLoader.loaded[b][e])return f.load.call(j,++i[0],l,e),a.length?AssetLoader.load(a,d,b,h,i):f.onComplete(),h[b].push(j),h;if(j=AssetLoader.loading[e])return Object.map(j,function(a,b){return a.push(f[b])}),a.length||j.load.push(f.onComplete),h;AssetLoader.loading[e]={load:[],abort:[],error:[]};var g=new Element(b);m.each(function(a){f[a]&&g.addEvent(a, k.pass(a))});b=="script"&&Browser.ie&&!Browser.ie9&&g.addEvent("readystatechange",function(){"loaded,complete".contains(this.readyState)&&k("load")});g.set(Object.merge(AssetLoader.properties[b],c));b!="img"?g.inject(document.head):Browser.ie&&g.complete&&k("load");!n&&a.length&&AssetLoader.load(a,d,b,h,i);return h},loaded:{},loading:{},build:function(){Object.each({script:"src",link:"href",img:"src"},function(a,d){AssetLoader.loaded[d]={};$$(d+"["+a+"]").each(function(b){AssetLoader.loaded[d][b.get(a)]= b})});return function(){}},type:function(a){a=a.src||a;if(a.href||/css$/i.test(a))return"link";if(/js$/i.test(a))return"script";if(/(jpg|jpeg|bmp|gif|png)$/i.test(a))return"img";return"fail"},wait:function(){me.setStyles({"background-image":curImg,"background-position":curPos})}};Object.each({javascript:"script",css:"link",image:"img",images:"img",mixed:"mixed"},function(a,d){AssetLoader[d]=function(b,d){AssetLoader.load(Array.from(b),d,a,{img:[],link:[],script:[],fail:[]},[-1,-1])}}); 
window.addEvent("domready",function(){AssetLoader.build=AssetLoader.build()});
var Asset=AssetLoader;