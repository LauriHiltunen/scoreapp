import checkMatch, { checkLength } from "/taitaja/resources/passwordCheck.js";
import usernameExists from "/taitaja/resources/usernameCheck.js";
import setStyles from "/taitaja/resources/styles.js";
import setEventListeners from "/taitaja/resources/events.js";

var passwordInputs = document.getElementsByClassName("password-input");
var usernameInput = document.getElementById("username");
var passwordInvalidP = document.getElementById("passwordsInvalidP");
var usernameInvalidP = document.getElementById("usernameInvalidP");

// Password validation rule
var minPasswordLength = 8;

// Username validation rule
var minUsernameLength = 3;

var passwordsAreValid = false;
var usernameIsValid = false;

setEventListeners(passwordInputs, {
  onchange: () => {
    // Validation booleans
    let passwordsMatch = checkMatch(passwordInputs);
    let lengthValidation = checkLength(passwordInputs[0].value, 8);

    if (passwordsMatch && lengthValidation) {
      passwordsAreValid = true;

      setStyles(passwordInputs, { borderColor: "green" });
      setStyles([passwordInvalidP], { display: "none" });
    } else {
      passwordsAreValid = false;

      setStyles(passwordInputs, { borderColor: "red" });

      if (!passwordsMatch) {
        passwordInvalidP.innerText = "Salasanat eivät täsmää!";
      } else {
        passwordInvalidP.innerText =
          "Salasanan täytyy olla vähintään " +
          minPasswordLength +
          " merkkiä pitkä.";
      }

      setStyles([passwordInvalidP], { display: "block" });
    }
  },
});

setEventListeners([usernameInput], {
  onchange: async () => {
    if (checkLength(usernameInput.value, 3)) {
      usernameExists(usernameInput.value, (usernameExists) => {
        if (!usernameExists) {
          setStyles([usernameInput], { borderColor: "green" });
          setStyles([usernameInvalidP], { display: "none" });
        } else {
          setStyles([usernameInput], { borderColor: "red" });

          usernameInvalidP.innerText = "Nimi on jo käytössä.";
          setStyles([usernameInvalidP], { display: "block" });
        }
      });
    } else {
      usernameInvalidP.innerText =
        "Nimen täytyy olla vähintään " + minUsernameLength + " merkkiä pitkä.";
      setStyles([usernameInvalidP], { display: "block" });
    }
  },
});
