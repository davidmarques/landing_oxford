// Created by Nando Vieira
String.prototype.normalize = function() {
	var from  = "àáâãäåæçèéêëìíîïðñòóôõöøùúûüýþßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿŕŕ";
	var to    = "aaaaaaaceeeeiiiidnoooooouuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyrr";
	var value = this;

	for(var i = 0; i < from.length; i++) {
		char_re = new RegExp(from.charAt(i), "gim");
		value = value.replace(char_re, to.charAt(i))
	};

	return value;
};

"ïñtèŕñåtïøñãlízátïöñ".normalize();