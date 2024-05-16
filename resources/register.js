import checkMatch, { checkLength } from "/taitaja/resources/passwordCheck.js";
import usernameExists from "/taitaja/resources/usernameCheck.js";
import setStyles from "/taitaja/resources/styles.js";
import setEventListeners from "/taitaja/resources/events.js";

var passwordInputs = document.getElementsByClassName("password-input");
var usernameInput = document.getElementById("username");
var passwordWrongP = document.getElementById("passwordsWrongP");

// Password validation rule
var minPasswordLength = 8;

var passwordsAreValid = false;

setEventListeners(passwordInputs, {
  onchange: () => {
    // Validation booleans
    let passwordsMatch = checkMatch(passwordInputs);
    let lengthValidation = checkLength(passwordInputs[0].value, 8);

    if (passwordsMatch && lengthValidation) {
      setStyles(passwordInputs, { borderColor: "green" });
      passwordsAreValid = true;
    } else {
      setStyles(passwordInputs, { borderColor: "red" });
      passwordsAreValid = false;
    }
    // Next we check if every field has a value.
    let everyFieldHasValue = true;
    Object.values(passwordInputs).forEach((element) => {
      if (element.value.length == 0) {
        everyFieldHasValue = false;
      }
    });
    // Displaying text to the user when passwords aren't valid.
    if (!passwordsAreValid) {
      if (!passwordsMatch) {
        passwordWrongP.innerText = "Salasanat eivät täsmää!";
      } else {
        passwordWrongP.innerText =
          "Salasanan täytyy olla vähintään " +
          minPasswordLength +
          " merkkiä pitkä.";
      }
      setStyles([passwordWrongP], { display: "block" });
    } else {
      setStyles([passwordWrongP], { display: "none" });
    }
  },
});

setEventListeners([usernameInput], {
  onchange: async () => {
    // Validation booleans
    var lengthValidation = false;
    var usernameIsUnique = await usernameExists(usernameInput.value);
    console.log(usernameIsUnique);

    if (!usernameIsUnique && checkLength) {
      var lengthValidation = true;
      var usernameIsUnique = true;
    }
  },
});
