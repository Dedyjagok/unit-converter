function validateForm() {
    var unitFrom = document.getElementById("unit_from").value;
    var unitTo = document.getElementById("unit_convert").value;
    if (unitFrom === unitTo) {
        alert("The unit to convert from and the unit to convert to cannot be the same.");
        return false;
    }
    return true;
}
