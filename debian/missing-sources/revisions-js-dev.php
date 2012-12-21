<?php

if ( !defined( 'ABSPATH' ) )
	exit;

/** @ignore */
function dvortr( $str ) {
	return strtr(
		$str,
		'\',.pyfgcrl/=\\aoeuidhtns-;qjkxbmwvz"<>PYFGCRL?+|AOEUIDHTNS_:QJKXBMWVZ[]',
		'qwertyuiop[]\\asdfghjkl;\'zxcvbnm,./QWERTYUIOP{}|ASDFGHJKL:"ZXCVBNM<>?-='
	);
}

$j = esc_url( site_url( '/wp-includes/js/jquery/jquery.js' ) );
$n = esc_html( $GLOBALS['current_user']->data->display_name );

// Don't let this happen again. <a id='goback' href='$'>Go Back</a>.
$d = str_replace( '$', $redirect, dvortr( "Erb-y n.y ydco dall.b aiacbv Wa ce]-irxajt- dp.u]-$-VIr XajtWzaVv" ) ); 

wp_die( <<<EOEE
<style type="text/css">
html body { font-family: courier, monospace; }
#hal { text-decoration: blink; }
</style>
<script type="text/javascript" src="$j"></script>
<script type="text/javascript">
/* <![CDATA[ */
var n = '$n';
jQuery(function(){
	var e=jQuery('#noscript').hide();
	var i='\',.pyfgcrl/=\\aoeuidhtns-;qjkxbmwvz"<>PYFGCRL?+|AOEUIDHTNS_:QJKXBMWVZ[]1234567890{}'.split('');
	var o='qwertyuiop[]\\asdfghjkl;\'zxcvbnm,./QWERTYUIOP{}|ASDFGHJKL:"ZXCVBNM<>?-=0987654321_+'.split('');
	var tr=function(s){
		r='';
		jQuery.each(s.split(''),function(){
			var t=this.toString();
			var c=jQuery.inArray(t,i);
			r+='\$'==t?n:(-1==c?t:o[c])});
			return r
	};
	var a=[
		// Self-comparison detected.
		'O.nu[jrmlapcorb e.y.jy.ev', 

		// Initiating infinite loop eschewal protocol.
		'Cbcycaycbi cbucbcy. nrrl .ojd.,an lpryrjrnv',

		// Self destruct in... 3
		'O.nu e.oypgjy cbvvv 8',

		// 2
		'9',

		// 1
		'0'
	];
	var b=[
		
		// Wake up, \$...
		'<at. glw \$vvv',
		
		// The Matrix has you...
		'Yd. Maypcq dao frgvvv',
		
		// Follow the white rabbit.
		'Urnnr, yd. ,dcy. paxxcyv'
	];
	var ll=[];

	// jQuery('#hal') 
	var h=jQuery(tr('#dan'));

	// jQuery('html')...
	jQuery(tr('dymn')).keypress(function(e){
		if(27!==e.keyCode){return}
		if(history&&history.back){
			history.back();
			return false
		}

		// window.location=jQuery('#goback')).attr('href');
		window.location=jQuery(tr('#irxajt')).attr('href');
		return false
	});
	var hal=function(){
		var l=a.shift();
		if('undefined'==typeof l){
			if(hal3){
				var c={};

				// c['backgroundColor'] = 'black';
				c[tr('xajtiprgbeJrnrp')]=tr('xnajt');


				// c['color']= 'green';
				c[tr('jrnrp')]=tr('ip..b');

				// jQuery('html, body').css(c);
				jQuery(tr('dymnw xref')).css(c);
				p();
				h.hide().animate({opacity:1},3000,'linear',function(){
					h.show()});
				setTimeout(hal3,4000)
			}
			return
		}
		ll=tr(l).split('');
		hal2()
	};
	var hal2=function(){
		lll=ll.shift();
		if('undefined'==typeof lll){
			if(hal3){
				// h.before('<br />');
				h.before(tr('Wxp zV'));
				setTimeout(hal,2000)
			}else{
				if(a.length){
					setTimeout(p,2000);
					setTimeout(hal,3000)
				}else{
					setTimeout(function(){
						p();
						h.hide()
					},2000);
					setTimeout(function(){e.show()},4000)
				}
			}
			return
		}
		h.before(lll.toString());
		setTimeout(hal2,100)
	};
	var hal3=function(){
		a=b;
		hal3=null;
		hal()
	};
	p=function(){
		var pp=jQuery('p').get(0);
		var ppp=jQuery.makeArray(pp.childNodes).reverse();
		for(var ppp=pp.childNodes.length;ppp>0;ppp--){
			if(3==pp.childNodes[ppp-1].nodeType||'br'==pp.childNodes[ppp-1].nodeName.toLowerCase()){
				pp.removeChild(pp.childNodes[ppp-1])
			}
		}
	};
	setTimeout(hal,3000)
});
/* ]]> */
</script>
<span id="noscript">$d</span>
<blink id="hal">&#x258c;</blink>
EOEE
,
// Danger!
dvortr( 'Eabi.p!' )
);
