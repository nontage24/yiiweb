yii.confirm = function (message, okCallback, cancelCallback) {
    swal({
        title:message,
        //text: "Your will not be able to recover this imaginary file!",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Delete!",
        closeOnConfirm: false
    }, okCallback);
};


