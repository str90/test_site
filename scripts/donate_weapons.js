function pushToBasket(button) {
	if(button === 'ak-47_btn') {
		var ak47_amount = document.getElementById('ak-47_form').value;
		if(isFinite(ak47_amount) === false || ak47_amount < 1) alert('Введите подходящее значение');
		else alert(ak47_amount);
	}
	else if(button === 'bolt_btn') {
		var bolt_amount = document.getElementById('bolt_form').value;
		if(isFinite(bolt_amount) === false ||bolt_amount < 1) alert('Введите подходящее значение');
		else alert(bolt_amount);
	}
}
