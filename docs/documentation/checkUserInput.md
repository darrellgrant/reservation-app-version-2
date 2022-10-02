# checkUserInput()

While the **validateForm()** method checks if ANY input is empty,
checkUserInput() method checks that each individual input is indeed not empty
while also checking that the user entered the appropriate data (i. e. , the user
etered a valid phone number format in the phone number input fieldor a valid
date format in the date input field) for correctness.

As the original Multi Step Form program only checked whether or not the user
left an input empty, thus allowing the form to submit even if the inputs were
supplied with nonsense data, the program had to be amended to guard against
submitting nonsense data (i.e. numbers where a name is required, or letters
where a phone number is required).

The checkUserInput() method is called by event listeners on each of the form's
text inputs. The method is triggered by the 'change' event (i.e., when the user
types something in the form and the element loses focus).

checkUserInput() first calls the **Validator.validate()** method. If that method
returns false, the **Error.errorHandler()** method is called.

checkUserInput() takes four parameters:

1. **target** represents the particular form input, (i.e. First Name) that is
   currently being checked for validity.
   - This variable is passed to the **Validator.validate()** method as its first
     parameter (target.value.trim(), i.e. the form inputs value with any white
     space eliminated, or 'trimmed').
   - This vaiable is also passed to the **Error.erroHandler()** method as its
     first parameter.
2. **targetTest** reperesents the appropriate test which the user supplied data
   will be subjected to (i.e. a 'name test' to ensure a name input is correcly
   filled).
   - This is also passed to Validator.validate() as its second parameter.
3. **error_string** represents the DOM element which will display the
   appropriate error message.
   - This variable is passed to **Error.errorHandler()** as its second
     parameter.
4. **errorMessage** represents the individualized error message that will be
   displayed below the input.
   - This variable is passed to **Error.errorHandler()** as its third and final
     parameter.

**Example:** The user types a series of numbers in the 'First Name' text input
area. When the input element loses focus (typically when the user clicks or
types elsewhere), the checkUserInput() method is triggered. checkUserInput()
takes as its arguments:

1.  **firstNameInput** (target)
2.  **Validator.nameTest** (targetTest)
3.  the string **"error-message-fname"** (error_string)
4.  **Error.nameError**(errorMessage)

```
    this.firstNameInput.addEventListener("change", () => {
      this.checkUserInput(
        this.firstNameInput,
        Validator.nameTest,
        "error-message-fname",
        Error.nameError
      );
    });
```

checkUserInput() will then call the Validator.validate() method which tests the
user supplied data against a regular expression. As the user has typed in a
series of numbers and the 'nameTest' is a test for letters, the
Validate.validate() method will return false.

Because Validate.validate() returned false, checkUserInput() will call the
Error.errorHandler() method. The result of this method is that an error message
will appear below the 'First Name' input.
