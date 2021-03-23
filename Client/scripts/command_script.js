function updateValue(id) {
    window.location = "?menu=actu&aid=" + id;
}

function deleteValue(id) {
    let confirmation = window.confirm("are you sure want to delete?");
    if (confirmation) {
        window.location = "?menu=act&amd=del&aid=" + id;
    }
}

function updateValueSiswa(id) {
    window.location = "?menu=facu&fid=" + id;
}

function deleteValueSiswa(id) {
    let confirmation = window.confirm("are you sure want to delete?");
    if (confirmation) {
        window.location = "?menu=fac&fmd=del&fid=" + id;
    }
}