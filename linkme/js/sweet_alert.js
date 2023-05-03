function sweetAlertTimer (icon, title, timer) {
    return Swal.fire({
        icon: icon,
        title: title,
        showConfirmButton: false,
        timer: timer
    });
}