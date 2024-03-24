// response swal error
swalError = async (msg = null, code = 419, url = null) => {
    Swal.fire({
        icon: "error",
        title: "Lunch Time",
        html: msg,
        showConfirmButton: false,
        timer: 1500,
        willClose: () => {
            if (code == 419) window.location.reload();
        },
    });
};

// response swal success
swalSuccess = async (msg = null, code = 200, url = null) => {
    Swal.fire({
        icon: "success",
        title: "Lunch Time",
        html: msg,
        showConfirmButton: false,
        timer: 2000,
        willClose: () => {
            if ($.trim(url)) location.href = url;
            else $("#dataTable").DataTable().ajax.reload();
            $("[data-dismiss=modal]").click();
        },
    });
};
