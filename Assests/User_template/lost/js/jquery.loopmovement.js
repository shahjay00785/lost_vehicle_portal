/**
 * @brief a jquery plugin for loopmovement
 * @author church
 * @License MIT
 * @date 2015-12-30
 */
(function($) {
	$.fn.extend({
		'loopmovement' : function(config) {
			var _this = this,
				_timer = null,
				_defaultConfig = $.extend({}, {"direction":"top", "speed":"30"}, config);
			
			_this.addClass(_defaultConfig.direction);
			//复制元素
			switch(_defaultConfig.direction) {
				default:
				case "top":
				case "left":
					_defaultConfig.direction == 'left' && _this.css('width', _this.width() * 2);
					_this.children().clone().appendTo(_this);
					break;
				case "right":
				case "bottom":
					_defaultConfig.direction == 'right' && _this.css('width', _this.width() * 2);
					_this.children().clone().prependTo(_this);
					break;
			}
			
			//循环移动
			function loopmove()
			{
				var _currentOffset = 0,
					_height = _this.height(),
					_width = _this.width(),
					_offset = parseInt(_this.css(_defaultConfig.direction));
				
				switch(_defaultConfig.direction) {
					case 'top':
					case 'bottom':
						if (Math.abs(_offset) - _height / 2 >= 0) {
							_this.css(_defaultConfig.direction, '0px');
						} else {
							_this.css(_defaultConfig.direction, _offset - 1 + 'px');
						}
						break;
					case 'left':
					case 'right':			
						if (Math.abs(_offset) - _width / 2 >= 0) {
							_this.css(_defaultConfig.direction, '0px');
						} else {
							_this.css(_defaultConfig.direction, _offset - 1 + 'px');
						}
						break;
				}
			}
			
			_this.hover(function() {
				clearInterval(_timer);
			}, function() {
				init();
			});
			
			function init() {
				_timer = setInterval(function() {
					loopmove();
				}, _defaultConfig.speed);
			}
			
			init();
			
		}
	});
})(jQuery);