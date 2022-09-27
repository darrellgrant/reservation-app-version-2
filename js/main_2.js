const currentLocation = location.href; //returns the href (URL) of the current page
const menuItem = document.querySelectorAll("a");
const menuLength = menuItem.length;

const form = _("reservation-form");
const valid = false;

for (let i = 0; i < menuLength; i++) {
  if (menuItem[i].href === currentLocation) {
    //menuItem[i].className = "active";
    menuItem[i].classList.add("active");
  }
}

function _(id) {
  return document.getElementById(id);
}

let currentTab = 0;
const min_length = 1;
const error_flag = 1;

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

    this.nextBtn.addEventListener("click", this.checkEmptyInput.bind(this));

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

  nexPrev(e, n) {
    const tabList = document.getElementsByClassName("tab");
    if (n == 1 && !validateForm()) return false;
    tabList[currentTab].style.display = "none";
    currentTab = currentTab + n;
    if (currentTab >= tabList + n) {
      this.nextBtn.setAttribute("type", "submit");
      this.form.submit();
    }
    this.showTab(currentTab);
  }

  checkValidInputs() {
    const formInputGroup = document.getElementsByTagName("input");
  }

  advance(selector1, selector2) {
    _(selector1).style.display = "none";
    _(selector2).style.display = "block";
    _("prev-btn").style.display = "inline";
    currentTab++;
  }
  goBack(selector1, selector2) {
    _(selector1).style.display = "none";
    _(selector2).style.display = "block";
    if (currentTab === 0) {
      _("prev-btn").style.display = "none";
    }
    currentTab--;
  }

  navigate(num) {
    const tabs = document.getElementsByClassName("tab");
    //validate
    tabs[currentTab].style.display = "none";
    currentTab = currentTab + num;
    if (currentTab >= tabs.length) {
      //submit....
    }
  }

  checkEmptyInput() {
    if (currentTab === 0) {
      this.enteredFirstName = this.firstNameInput.value.trim();
      this.enteredLastName = this.lastNameInput.value.trim();
      this.enteredPhone = this.phoneNumberInput.value.trim();
      this.enteredValues = [
        this.enteredFirstName,
        this.enteredLastName,
        this.enteredPhone,
      ];
    }

    if (currentTab === 1) {
      this.enteredDate = this.dateInput.value.trim();
      this.enteredTime = this.timeInput.value.trim();
      this.enteredGuests = this.guestsInput.value.trim();
      this.enteredValues = [
        this.enteredDate,
        this.enteredTime,
        this.enteredGuests,
      ];
    }

    console.log("enteredValues array", this.enteredValues);
    this.returnedValues = this.enteredValues.filter(function (value) {
      if (value.length > 0) {
        return value;
      }
    });
    console.log("returnedValuesArray", this.returnedValues);

    if (this.returnedValues.length < this.enteredValues.length) {
      return;
    } else {
      if (!Validator.validate(this.enteredFirstName, Validator.nameTest)) {
      }

      this.advance("tab-one", "tab-two");
      // _("tab-one").style.display = "none";
      // _("tab-two").style.display = "block";
      // _("prev-btn").style.display = "inline";
      // currentTab++;
    }
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
}
