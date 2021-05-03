const navbar = () => {
	var showNav = false;
	const content = document.querySelector('.site-content');

	function toggleNav() {
		showNav = !showNav;
		if(showNav){
			//document.getElementById("site-navigation").style = "display:block;";
			document.getElementById("navbar").classList = "overlay-header dark active";
			// Stop Scrolling
			document.querySelector('body').style = "max-height: 100vh; overflow: hidden;";
			if(content){
				content.style = "display: none;";
			}
		}else{
            document.getElementById("navbar").classList = "overlay-header dark";
		    // Stop Scrolling
			if(content){
				content.style = "";
			}
			document.querySelector('body').style = "";
		}
	}

	window.onload = function() {
		document.getElementById("hamburger").addEventListener("click",toggleNav);
    };
}
export default navbar;