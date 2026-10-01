// Mobile navigation
        function toggleMenu() {

            const menu =
                document.getElementById("navLinks");

            menu.classList.toggle("active");

        }


        // Close menu after clicking a link
        document
            .querySelectorAll("#navLinks a")
            .forEach(function(link) {

                link.addEventListener(
                    "click",
                    function() {

                        document
                            .getElementById("navLinks")
                            .classList.remove("active");

                    }
                );

            });


        // Automatically display current year
        document.getElementById("year")
            .textContent =
            new Date().getFullYear();
