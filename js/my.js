function showNotification(message, type) {
    type = type.toLowerCase();
    var icon;
    if (type === 'success' || type === 'successful' || type === 'ok') {
        icon = 'checkmark-circle-outline';
        type = 'success';
    }
    else if (type === 'info' || type === 'notify' || type === 'information' || type === 'informations') {
        icon = 'information-circle-outline';
        type = 'info';
    }
    else if (type === 'warning' || type === 'warn' || type === 'alert') {
        icon = 'alert-circle-outline';
        type = 'warning';
    }
    else if (type === 'danger' || type === 'err' || type === 'error') {
        icon = 'close-circle-outline';
        type = 'danger';
    }

    $.notify({
        icon: icon,
        message: message
    },{
        type: type,
        allow_dismiss: true,
        placement: {
            from: "top",
            align: "center"
        },
        delay: 0,
        template: '<div data-notify="container" class="col-xs-11 col-sm-7 col-md-4 alert alert-{0}" role="alert">' +
            '<button type="button" aria-hidden="true" class="close mr-2 mb-2 float-right" data-notify="dismiss">×</button>' +
            '<ion-icon data-notify="icon" class="mr-2 mb-2 float-left" name="'+ icon +'" style="font-size:40px;transform: translateY(5px)"></ion-icon> ' +
            '<span data-notify="title">{1}</span> ' +
            '<span data-notify="message">{2}</span>' +
            '<div class="progress" data-notify="progressbar">' +
            '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
            '</div>' +
            '<a href="{3}" target="{4}" data-notify="url"></a>' +
            '</div>'
    });
}