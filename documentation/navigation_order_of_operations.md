# Order of Operation
*** showTab() *** is called when page loads, also calls fixStepIndicator (which we will not use)
*** nextPrev() *** calls validateForm(), then calls showTab() again
*** validateForm() *** checks if inputs are filled or empty, returns a boolean
*** fixStepIndicator *** is called by showTab()



