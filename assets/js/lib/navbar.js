const navbar = () => {
	var showNav = false;
	const content = document.querySelector('.site-content');

	function toggleNav() {
		if(window.screen.availWidth < 768){
			showNav = !showNav;
			if(showNav){
				//document.getElementById("site-navigation").style = "display:block;";
				document.getElementById("menu").classList = "mobile-active";
				// Stop Scrolling
				document.querySelector('body').style = "max-height: 100vh; overflow: hidden;";
				if(content){
					content.style = "display: none;";
				}
			}else{
				document.getElementById("menu").classList = "";
				// Stop Scrolling
				if(content){
					content.style = "";
				}
				document.querySelector('body').style = "";
			}
		}
	}

	window.onload = function() {
		document.getElementById("hamburger").addEventListener("click",toggleNav);
		document.getElementById("close-hamburger").addEventListener("click",toggleNav);
		var menuItems = document.getElementsByClassName("menu-item");
		Array.from(menuItems).forEach(node => {
			node.addEventListener("click",toggleNav)
		})
    };
}
export default navbar;