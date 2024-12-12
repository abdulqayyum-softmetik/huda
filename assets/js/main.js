/**
 * File main.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
(() => {
    'use strict';

    // Helper functions for theme management
    const getStoredTheme = () => localStorage.getItem('theme');
    const setStoredTheme = theme => localStorage.setItem('theme', theme);
    const getPreferredTheme = () => {
      const storedTheme = getStoredTheme();
      return storedTheme ? storedTheme : (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
    };

    // Apply the selected theme to the body
    const setTheme = theme => {
      document.body.setAttribute('data-bs-theme', theme);

      // Update the icon
      const themeIcon = document.getElementById('theme-icon');
      if (theme === 'dark') {
        themeIcon.classList.replace('ri-moon-line', 'ri-sun-fill');
      } else {
        themeIcon.classList.replace('ri-sun-fill', 'ri-moon-line');
      }
    };

    // Initialize the theme
    const initializeTheme = () => {
      const preferredTheme = getPreferredTheme();
      setTheme(preferredTheme);
    };

    // Event listener for the toggle button
    document.addEventListener('DOMContentLoaded', () => {
      initializeTheme();

      const toggleButton = document.getElementById('theme-toggle');
      toggleButton.addEventListener('click', () => {
        const currentTheme = document.body.getAttribute('data-bs-theme');
        const newTheme = currentTheme === 'dark' ? 'light' : 'dark';

        setStoredTheme(newTheme);
        setTheme(newTheme);
      });
    });

    // Sync with system preference changes
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
      const storedTheme = getStoredTheme();
      if (!storedTheme) {
        setTheme(getPreferredTheme());
      }
    });
  })();

document.addEventListener("DOMContentLoaded", (event) => {
	const btnScrollToTop = document.querySelector("#scrollToTop");

	if ( btnScrollToTop) {
		window.addEventListener('scroll', () => {
			btnScrollToTop.style.display = window.scrollY > 120 ? 'block' : 'none';
		});
	} else {
		console.warn("Scroll to top button not found.");
	}
});
