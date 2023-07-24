import "./bootstrap";

$(document).ready(function () {
    $(".quantity_decrease").click(function () {
        let quantityInput = $(this).siblings(".quantity_value");
        let currentValue = parseInt(quantityInput.val());
        if (currentValue > 1) {
            quantityInput.val(currentValue - 1);
        }
    });

    $(".quantity_increase").click(function () {
        let quantityInput = $(this).siblings(".quantity_value");
        let currentValue = parseInt(quantityInput.val());
        quantityInput.val(currentValue + 1);
    });
});
