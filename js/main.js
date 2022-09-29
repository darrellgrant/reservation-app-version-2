const currentLocation = location.href; //returns the href (URL) of the current page
const menuItem = document.querySelectorAll("a");
const menuLength = menuItem.length;

for (let i = 0; i < menuLength; i++) {
  if (menuItem[i].href === currentLocation) {
    //menuItem[i].className = "active";
    menuItem[i].classList.add("active");
  }
}

//creates a 'short-hand' for 'document.getElementById()
function _(id) {
  return document.getElementById(id);
}

const form = _("reservation-form");

//let currentTab = 0;
/* const min_length = 1;
const error_flag = 1; */

class ReservationForm {
  constructor() {
    this.form = _("reservation-form");
    this.currentTab = 0;
    this.nextBtn = _("next-btn");
    this.prevBtn = _("prev-btn");
    this.firstNameInput = _("formInput_FirstName");
    this.lastNameInput = _("formInput_LastName");
    this.phoneNumberInput = _("formInput_Phone");
    this.dateInput = _("formInput_Date");
    this.timeInput = _("formInput_Time");
    this.guestsInput = _("formInput_Guests");

    this.firstNameInput.addEventListener("change", () => {
      this.checkUserInput(
        this.firstNameInput,
        Validator.nameTest,
        "error-message-fname",
        Error.nameError
      );
    });

    this.lastNameInput.addEventListener("change", () => {
      this.checkUserInput(
        this.lastNameInput,
        Validator.nameTest,
        "error-message-lname",
        Error.nameError
      );
    });

    this.phoneNumberInput.addEventListener("change", () => {
      this.checkUserInput(
        this.phoneNumberInput,
        Validator.phoneTest,
        "error-message-phone",
        Error.numberError
      );
    });

    this.nextBtn.addEventListener("click", () => {
      this.nextPrev(1);
    });

    this.prevBtn.addEventListener("click", () => {
      this.nextPrev(-1);
    });
  }

  checkUserInput(target, targetTest, error_string, errorMessage) {
    if (
      !Validator.validate(target.value.trim(), targetTest) &&
      target.value != ""
    ) {
      Error.errorHandler(target, error_string, errorMessage);
    }
  }

  showTab(tabIndex) {
    const tabList = document.getElementsByClassName("tab");
    console.log("showtab");
    console.log(tabList.length);
    console.log(tabIndex);
    tabList[tabIndex].style.display = "block";
    if (tabIndex === 0) {
      this.prevBtn.style.display = "none";
    } else {
      this.prevBtn.style.display = "inline";
    }
    if (tabIndex == tabList.length - 1) {
      this.nextBtn.innerHTML = "Submit";
    } else {
      this.nextBtn.innerHTML = "Next";
    }
  }

  nextPrev(n) {
    const tabList = document.getElementsByClassName("tab");
    if (n === 1 && !this.checkInputFilled()) {
      return;
    }
    tabList[this.currentTab].style.display = "none";
    this.currentTab = this.currentTab + n;
    if (this.currentTab >= tabList.length) {
      this.nextBtn.setAttribute("type", "submit");
      this.form.submit();
      return;
    }
    this.showTab(this.currentTab);
  }

  checkInputFilled() {
    //function validateForm()
    // This function deals with validation of the form fields
    const tabList = document.getElementsByClassName("tab");
    const inputList = tabList[this.currentTab].getElementsByTagName("input");
    let i;
    let valid = true;

    // A loop that checks every input field in the current tab:
    for (i = 0; i < inputList.length; i++) {
      // If a field is empty...
      if (inputList[i].value == "") {
        // and set the current valid status to false:
        valid = false;
      }
    }
    return valid; // return the valid status
  }
}

class Validator {
  static nameTest = /^[a-zA-Z\s]+$/;
  static phoneTest = /^(\d{3}-\d{3}-\d{4})*$/;
  static dateTest =
    /^((0?[1-9]|1[012])[- /.](0?[1-9]|[12][0-9]|3[01])[- /.](19|20)?[0-9]{2})*$/;
  static timeTest = /^\b((1[0-2]|0?[1-9]):([0-5][0-9]) ([AaPp][Mm]))$/;
  static guestNumTest = /(^0?[1-9]$)|(^1[0-2]$)/;
  static validate(userInput, inputTest) {
    return inputTest.test(userInput);
  }
}

class Error {
  static nameError = "Please enter only letters, no numbers or spaces";
  static numberError = "Please enter phone number in format: 123-456-7890";
  static errorHandler(formInput, selector, errorMessage) {
    _(selector).innerHTML = errorMessage;
    formInput.onkeyup = () => (_(selector).innerHTML = "");
  }
}

if (form) {
  const reservationForm = new ReservationForm();
  reservationForm.showTab(0);
}
