document.addEventListener("DOMContentLoaded", function() {
    const tabs = document.querySelectorAll(".tab-nav a");
    const panes = document.querySelectorAll(".tab-pane");
  
    tabs.forEach(tab => {
      tab.addEventListener("click", function(event) {
        event.preventDefault();
  
        // Remove active class from all tabs and panes
        tabs.forEach(t => t.classList.remove("active"));
        panes.forEach(pane => pane.classList.remove("active"));
  
        // Add active class to clicked tab and corresponding pane
        this.classList.add("active");
        const targetPane = document.getElementById(this.getAttribute("data-tab"));
        targetPane.classList.add("active");
      });
    });
  });
  