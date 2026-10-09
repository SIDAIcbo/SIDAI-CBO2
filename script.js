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
```javascript
/* =================================
   SIDAI CBO DONATION SCRIPT
================================= */

const currency =
    document.getElementById("donationCurrency");

const amount =
    document.getElementById("donationAmount");

const currencyLabel =
    document.getElementById("currencyLabel");

const donateButton =
    document.getElementById("donateButton");

const donationDetails =
    document.getElementById("donationDetails");

const selectedAmount =
    document.getElementById("selectedAmount");

const copyAccount =
    document.getElementById("copyAccount");

const closeDonation =
    document.getElementById("closeDonation");


/* =================================
   CHANGE CURRENCY
================================= */

currency.addEventListener(
    "change",
    function () {

        currencyLabel.textContent =
            currency.value;

        /*
         * Clear the amount when changing
         * currency to avoid confusion.
         */

        amount.value = "";

    }
);


/* =================================
   QUICK AMOUNTS
================================= */

document
    .querySelectorAll(
        ".quick-amounts button"
    )
    .forEach(function(button) {

        button.addEventListener(
            "click",
            function() {

                amount.value =
                    button.dataset.amount;

                amount.focus();

            }
        );

    });


/* =================================
   DONATE BUTTON
================================= */

donateButton.addEventListener(
    "click",
    function() {

        const value =
            parseFloat(amount.value);


        if (
            !value ||
            value <= 0
        ) {

            alert(
                "Please enter a valid donation amount."
            );

            amount.focus();

            return;

        }


        const selectedCurrency =
            currency.value;


        const formattedAmount =
            value.toLocaleString(
                selectedCurrency === "USD"
                    ? "en-US"
                    : "en-KE",
                {
                    minimumFractionDigits: 2,
                    maximumFractionDigits: 2
                }
            );


        selectedAmount.textContent =
            `${selectedCurrency} ${formattedAmount}`;


        donationDetails.style.display =
            "block";


        donationDetails.scrollIntoView({
            behavior: "smooth",
            block: "center"
        });

    }
);


/* =================================
   COPY ACCOUNT NUMBER
================================= */

copyAccount.addEventListener(
    "click",
    async function() {

        const accountNumber =
            "1354195051";


        try {

            await navigator.clipboard.writeText(
                accountNumber
            );


            copyAccount.textContent =
                "✓ Account Number Copied";


            setTimeout(
                function() {

                    copyAccount.textContent =
                        "📋 Copy Account Number";

                },
                2500
            );


        } catch (error) {

            alert(
                "Account Number: " +
                accountNumber
            );

        }

    }
);


/* =================================
   CLOSE
================================= */

closeDonation.addEventListener(
    "click",
    function() {

        donationDetails.style.display =
            "none";

    }
);
```
            
