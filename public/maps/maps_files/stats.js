google.maps.__gjsload__('stats', function(_){var UZ=function(a,b,c){var d=[];_.Mb(a,function(a,c){d.push(c+b+a)});return d.join(c)},VZ=function(a,b,c,d){var e={};e.host=window.document.location&&window.document.location.host||window.location.host;e.v=a;e.r=Math.round(1/b);c&&(e.client=c);d&&(e.key=d);return e},WZ=function(a){var b={};_.Mb(a,function(a,d){b[(0,window.encodeURIComponent)(d)]=(0,window.encodeURIComponent)(a).replace(/%7C/g,"|")});return UZ(b,":",",")},YZ=function(a,b,c,d){var e=_.O(_.R,23,500);var f=_.O(_.R,22,2);this.C=a;this.D=
b;this.F=e;this.l=f;this.B=c;this.m=d;this.f=new _.Vj;this.b=0;this.j=_.Ra();XZ(this)},XZ=function(a){window.setTimeout(function(){ZZ(a);XZ(a)},Math.min(a.F*Math.pow(a.l,a.b),2147483647))},$Z=function(a,b,c){a.f.set(b,c)},ZZ=function(a){var b=VZ(a.D,a.B,a.m,void 0);b.t=a.b+"-"+(_.Ra()-a.j);a.f.forEach(function(a,d){a=a();0<a&&(b[d]=Number(a.toFixed(2))+(_.um()?"-if":""))});a.C.b({ev:"api_snap"},b);++a.b},a_=function(a,b,c,d,e){this.m=a;this.C=b;this.l=c;this.f=d;this.j=e;this.b=new _.Vj;this.B=_.Ra()},
b_=function(a,b,c){this.l=b;this.f=a+"/maps/gen_204";this.j=c},c_=function(){this.b=new _.Vj},d_=function(a){var b=0,c=0;a.b.forEach(function(a){b+=a.bo;c+=a.Dn});return c?b/c:0},e_=function(a,b,c,d,e){this.B=a;this.C=b;this.m=c;this.j=d;this.l=e;this.f={};this.b=[]},f_=function(a,b,c,d){this.j=a;_.z.bind(this.j,"set_at",this,this.l);_.z.bind(this.j,"insert_at",this,this.l);this.B=b;this.C=c;this.m=d;this.f=0;this.b={};this.l()},g_=function(){this.j=_.P(_.R,6);this.b=new b_(_.xg[35]?_.P(_.Pf(_.R),
11):_.dw,_.dj,window.document);new f_(_.Ti,(0,_.p)(this.b.b,this.b),_.Uf,!!this.j);var a=_.P(new _.Bf(_.R.data[3]),1);this.C=a.split(".")[1]||a;this.D={};this.B={};this.m={};this.F={};this.G=_.O(_.R,0,1);_.cj&&(this.l=new YZ(this.b,this.C,this.G,this.j))};
a_.prototype.D=function(a){var b=void 0,b=_.m(b)?b:1;this.b.isEmpty()&&window.setTimeout((0,_.p)(function(){var a=VZ(this.C,this.l,this.f,this.j);a.t=_.Ra()-this.B;var b=this.b;_.Wj(b);for(var e={},f=0;f<b.b.length;f++){var g=b.b[f];e[g]=b.H[g]}_.mz(a,e);this.b.clear();this.m.b({ev:"api_maprft"},a)},this),500);b=this.b.get(a,0)+b;this.b.set(a,b)};
b_.prototype.b=function(a,b){b=b||{};var c=_.Hk().toString(36);b.src="apiv3";b.token=this.l;b.ts=c.substr(c.length-6);a.cad=WZ(b);a=UZ(a,"=","&");a=this.f+"?target=api&"+a;this.j.createElement("img").src=a;(b=_.Ub.__gm_captureCSI)&&b(a)};c_.prototype.f=function(a,b,c){this.b.set(_.Fb(a),{bo:b,Dn:c})};e_.prototype.D=function(a){this.f[a]||(this.f[a]=!0,this.b.push(a),2>this.b.length&&_.Az(this,this.F,500))};
e_.prototype.F=function(){for(var a=VZ(this.C,this.m,this.j,this.l),b=0,c;c=this.b[b];++b)a[c]="1";a.hybrid=+_.Xl();this.b.length=0;this.B.b({ev:"api_mapft"},a)};f_.prototype.l=function(){for(var a;a=this.j.removeAt(0);){var b=a.gn;a=a.timestamp-this.C;++this.f;this.b[b]||(this.b[b]=0);++this.b[b];if(20<=this.f&&!(this.f%5)){var c={};c.s=b;c.sr=this.b[b];c.tr=this.f;c.te=a;c.hc=this.m?"1":"0";this.B({ev:"api_services"},c)}}};g_.prototype.S=function(a){a=_.Fb(a);this.D[a]||(this.D[a]=new e_(this.b,this.C,this.G,this.j));return this.D[a]};g_.prototype.O=function(a){a=_.Fb(a);this.B[a]||(this.B[a]=new a_(this.b,this.C,1,this.j));return this.B[a]};g_.prototype.f=function(a){if(this.l){this.m[a]||(this.m[a]=new _.LA,$Z(this.l,a,function(){return b.nb()}));var b=this.m[a];return b}};g_.prototype.ea=function(a){if(this.l){this.F[a]||(this.F[a]=new c_,$Z(this.l,a,function(){return d_(b)}));var b=this.F[a];return b}};var h_=new g_;_.Wc("stats",h_);});
