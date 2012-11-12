// <script>
define(function(require) {
	var $ = require('jquery');
	
	return function() {
        return {
            restrict: 'A',
            replace: true,
            scope: {
            	object: '='
            },
            template: require("text!./template.html"),
            controller: require('./Controller')
        };
    };
});