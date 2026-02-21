document.getElementById('btn-mobile').onclick = function() {
	document.getElementById('mobile-menu').classList.add('mobile-menu');
	document.getElementById('form1').innerHTML = document.getElementById('mobileUl').outerHTML;
	document.getElementById('form2').innerHTML = document.getElementById('linkPrice').outerHTML;
	document.body.classList.add('overflow-hide');
}
document.getElementById('mobile-menu-close').onclick = function() {
	document.getElementById('mobile-menu').classList.remove('mobile-menu');
	document.body.classList.remove('overflow-hide');
//	document.getElementById('form1').innerHTML.remove;
//	document.getElementById('form2').innerHTML.remove;
}
