/**
 * File main.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {
	const siteNavigation = document.getElementById( 'site-navigation' );

	// Return early if the navigation doesn't exist.
	if ( ! siteNavigation ) {
		return;
	}

	const button = siteNavigation.getElementsByTagName( 'button' )[ 0 ];

	// Return early if the button doesn't exist.
	if ( 'undefined' === typeof button ) {
		return;
	}

	const menu = siteNavigation.getElementsByTagName( 'ul' )[ 0 ];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	if ( ! menu.classList.contains( 'nav-menu' ) ) {
		menu.classList.add( 'nav-menu' );
	}

	// Toggle the .toggled class and the aria-expanded value each time the button is clicked.
	button.addEventListener( 'click', function() {
		siteNavigation.classList.toggle( 'toggled' );

		if ( button.getAttribute( 'aria-expanded' ) === 'true' ) {
			button.setAttribute( 'aria-expanded', 'false' );
		} else {
			button.setAttribute( 'aria-expanded', 'true' );
		}
	} );

	// Remove the .toggled class and set aria-expanded to false when the user clicks outside the navigation.
	document.addEventListener( 'click', function( event ) {
		const isClickInside = siteNavigation.contains( event.target );

		if ( ! isClickInside ) {
			siteNavigation.classList.remove( 'toggled' );
			button.setAttribute( 'aria-expanded', 'false' );
		}
	} );

	// Get all the link elements within the menu.
	const links = menu.getElementsByTagName( 'a' );

	// Get all the link elements with children within the menu.
	const linksWithChildren = menu.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

	// Toggle focus each time a menu link is focused or blurred.
	for ( const link of links ) {
		link.addEventListener( 'focus', toggleFocus, true );
		link.addEventListener( 'blur', toggleFocus, true );
	}

	// Toggle focus each time a menu link with children receive a touch event.
	for ( const link of linksWithChildren ) {
		link.addEventListener( 'touchstart', toggleFocus, false );
	}

	/**
	 * Sets or removes .focus class on an element.
	 */
	function toggleFocus() {
		if ( event.type === 'focus' || event.type === 'blur' ) {
			let self = this;
			// Move up through the ancestors of the current link until we hit .nav-menu.
			while ( ! self.classList.contains( 'nav-menu' ) ) {
				// On li elements toggle the class .focus.
				if ( 'li' === self.tagName.toLowerCase() ) {
					self.classList.toggle( 'focus' );
				}
				self = self.parentNode;
			}
		}

		if ( event.type === 'touchstart' ) {
			const menuItem = this.parentNode;
			event.preventDefault();
			for ( const link of menuItem.parentNode.children ) {
				if ( menuItem !== link ) {
					link.classList.remove( 'focus' );
				}
			}
			menuItem.classList.toggle( 'focus' );
		}
	}
}() );

/**
* Utility Function to Determine the Current Theme Setting:
* First, check if there is a value stored in local storage.
* If not, default to the system's theme preference.
* If neither is available, default to light mode.
*/
document.addEventListener("DOMContentLoaded", () => {
	function calculateSettingAsThemeString({ localStorageTheme, systemSettingDark }) {
		if (localStorageTheme !== null) {
		  return localStorageTheme;
		}
	  
		if (systemSettingDark.matches) {
		  return "dark";
		}
	  
		return "light";
	  }
	  
	  /**
	  * Utility function to update the button text and aria-label.
	  */
	  function updateButton({ buttonEl, isDark }) {
		const newCta = isDark ? "" : "";
		// use an aria-label if you are omitting text on the button
		// and using a sun/moon icon, for example
		buttonEl.setAttribute("aria-label", newCta);
		buttonEl.innerText = newCta;
	  }
	  
	  /**
	  * Utility function to update the theme setting on the html tag
	  */
	  function updateThemeOnHtmlEl({ theme }) {
		document.querySelector("html").setAttribute("data-bs-theme", theme);
	  }
	  
	  
	  /**
	  * On page load:
	  */
	  
	  /**
	  * 1. Grab what we need from the DOM and system settings on page load
	  */
	  const button = document.querySelector("[data-theme-toggle]");
	  const localStorageTheme = localStorage.getItem("theme");
	  const systemSettingDark = window.matchMedia("(prefers-color-scheme: dark)");
	  
	  /**
	  * 2. Work out the current site settings
	  */
	  let currentThemeSetting = calculateSettingAsThemeString({ localStorageTheme, systemSettingDark });
	  
	  /**
	  * 3. Update the theme setting and button text accoridng to current settings
	  */
	  updateButton({ buttonEl: button, isDark: currentThemeSetting === "dark" });
	  updateThemeOnHtmlEl({ theme: currentThemeSetting });
	  
	  /**
	  * 4. Add an event listener to toggle the theme
	  */
	  button.addEventListener("click", (event) => {
		const newTheme = currentThemeSetting === "dark" ? "light" : "dark";
	  
		localStorage.setItem("theme", newTheme);
		updateButton({ buttonEl: button, isDark: newTheme === "dark" });
		updateThemeOnHtmlEl({ theme: newTheme });
	  
		currentThemeSetting = newTheme;
	  }); 

	  /**
	  * Enable Bootstrap Tooltip:
	  */
	  const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
	  const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
});



