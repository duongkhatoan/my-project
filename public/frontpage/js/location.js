$(document).ready(function () {
    $("select.locationS").on("change", function () {
        var type = $(this).data("type");
        var value = $(this).val();
        fetch("/api/json-data-vietnam/" + type + "/" + value)
            .then((response) => {
                return response.json();
            })
            .then((data) => {
                if (data) {
                    if (type === "province") {
                        var selectChange = $(
                            "select.locationS[data-type='district']"
                        );
                        selectChange.empty();
                        selectChange.append(
                            $("<option>", {
                                value: "",
                                text: "Select distinct",
                            })
                        );
                        $.each(data, function (index, item) {
                            selectChange.append(
                                $("<option>", {
                                    value: item.idDistrict,
                                    text: item.name,
                                })
                            );
                        });
                        var selectWard = $(
                            "select.locationS[data-type='ward']"
                        );
                        selectWard.empty();
                        selectWard.append(
                            $("<option>", {
                                value: "",
                                text: "Select ward",
                            })
                        );
                    }
                    if (type === "district") {
                        var selectChange = $(
                            "select.locationS[data-type='ward']"
                        );
                        selectChange.empty();
                        selectChange.append(
                            $("<option>", {
                                value: "",
                                text: "Select ward",
                            })
                        );
                        $.each(data, function (index, item) {
                            selectChange.append(
                                $("<option>", {
                                    value: item.idCommune,
                                    text: item.name,
                                })
                            );
                        });
                    }
                } else {
                    emptySelectLocation();
                }

                // Xử lý dữ liệu JSON ở đây
            })
            .catch((error) => {
                console.error("Lỗi:", error);
            });
    });
    function emptySelectLocation() {
        var selectDistrict = $("select.locationS[data-type='district']");
        selectDistrict.empty();
        selectDistrict.append(
            $("<option>", {
                value: "",
                text: "Select distinct",
            })
        );
        var selectWard = $("select.locationS[data-type='ward']");
        selectWard.empty();
        selectWard.append(
            $("<option>", {
                value: "",
                text: "Select ward",
            })
        );
    }
});
