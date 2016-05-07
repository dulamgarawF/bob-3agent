var menuElements=null;
var menuItems = null

function menuElementBuild(){

}

function getMenuItems(){
	return this.menuItems;
}
function setMenuItems(menuItems){
	this.menuItems = menuItems;
}

function get(){
	alert("gett");
}


$(function() {
  var moveLeft = 20;
  var moveDown = 10;

  $('.up-img').hover(function(e) {
    $('.user-detail-zoom').show();
      // .css('top', e.pageY + moveDown)
      // .css('left', e.pageX + moveLeft)
      // .appendTo('body');
  }, function() {
    $('.user-detail-zoom').hide();
  });

  $('.up-img').mousemove(function(e) {
    $(".user-detail-zoom").css('top', e.pageY + moveDown).css('left', e.pageX + moveLeft);
  });

});