const currentLocation = location.href; //returns the href (URL) of the current page
const menuItem = document.querySelectorAll("a");
const menuLength = menuItem.length;
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
    this.nextBtn = _("next-btn");
    this.firstNameInput = _("formInput_FirstName");
    this.lastNameInput = _("formInput_LastName");
    this.phoneNumberInput = _("formInput_Phone");
    this.dateInput = _("formInput_Date");
    this.timeInput = _("formInput_Time");
    this.guestsInput = _("formInput_Guests");

    this.nextBtn.addEventListener("click", this.checkEmptyInput.bind(this));
    this.firstNameInput.addEventListener("change", () => {
      if (
        !Validator.validate(
          this.firstNameInput.value.trim(),
          Validator.nameTest
        )
      ) {
        _("error-message-fname").innerHTML =
          "Please enter only letters, no numbers or spaces";
        this.firstNameInput.onkeyup = () =>
          (_("error-message-fname").innerHTML = "");
      }
    });
  }

  advance(selector1, selector2) {
    _(selector1).style.display = "none";
    _(selector2).style.display = "block";
    _("prev-btn").style.display = "inline";
    currentTab++;
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
  static nameTest = /^[a-zA-Z]+$/;
  static phoneTest = /^(\d{3}-\d{3}-\d{4})*$/;
  static dateTest =
    /^((0?[1-9]|1[012])[- /.](0?[1-9]|[12][0-9]|3[01])[- /.](19|20)?[0-9]{2})*$/;
  static timeTest = /^\b((1[0-2]|0?[1-9]):([0-5][0-9]) ([AaPp][Mm]))$/;
  static guestNumTest = /(^0?[1-9]$)|(^1[0-2]$)/;
  static validate(userInput, inputTest) {
    return inputTest.test(userInput);
  }
}

const reservationForm = new ReservationForm();
