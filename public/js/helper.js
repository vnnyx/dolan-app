function uploadImage(element, banner, type) {
    var url = "/admin/content";
    var elmnt = document.getElementById(element);
    var filename = elmnt.getAttribute('name');
    if (type < 4) {
        var content = new FormData();
        content.append('fileContent', elmnt.files[0]);
        content.append('fileName', filename);
        console.log(content)
        $.ajax({
            headers: {
                'X-CSRF-Token': $('meta[name=csrf_token]').attr('content')
            },
            async: true,
            type: "post",
            contentType: false,
            url: url,
            data: content,
            processData: false,
            success: function () {
                location.reload();
            }
        });

    } else {
        var ads = new FormData();
        ads.append('fileAds', elmnt.files[0]);
        ads.append('fileName', filename);
        console.log(ads)
        $.ajax({
            headers: {
                'X-CSRF-Token': $('meta[name=csrf_token]').attr('content')
            },
            async: true,
            type: "post",
            contentType: false,
            url: url,
            data: ads,
            processData: false,
            success: function () {
                location.reload();
            }
        });
    }

    var reader = new FileReader();
    reader.onload = function () {
        var preview = `<lottie-player src="https://assets5.lottiefiles.com/packages/lf20_sr65xoio.json"  background="transparent"  speed="1.2"  style="width: 420px; height: auto;"  loop  autoplay></lottie-player>`
        $(banner).html(preview)
    }
    reader.readAsDataURL(document.getElementById(element).files[0]);
}

function updateImage(element, banner, type) {
    var elmnt = document.getElementById(element);
    var id = elmnt.getAttribute('id-content');
    var filename = elmnt.getAttribute('name');
    var url = "/admin/content/" + id;

    if (type < 4) {
        var content = new FormData();
        content.append('updateContent', elmnt.files[0]);
        content.append('fileName', filename);
        console.log(content)
        $.ajax({
            headers: {
                'X-CSRF-Token': $('meta[name=csrf_token]').attr('content')
            },
            async: true,
            type: "post",
            contentType: false,
            url: url,
            data: content,
            processData: false,
            success: function () {
                location.reload();
            },
            error: function () {
                location.reload();
            }
        });

    } else {
        var ads = new FormData();
        ads.append('updateAds', document.getElementById(element).files[0]);
        ads.append('fileName', filename);
        $.ajax({
            headers: {
                'X-CSRF-Token': $('meta[name=csrf_token]').attr('content')
            },
            async: true,
            type: "post",
            contentType: false,
            url: url,
            data: ads,
            processData: false,
            success: function () {
                location.reload();
            }
        });
    }

    var reader = new FileReader();
    reader.onload = function () {
        var preview = `<lottie-player src="https://assets5.lottiefiles.com/packages/lf20_sr65xoio.json"  background="transparent"  speed="1.2"  style="width: 420px; height: auto;"  loop  autoplay></lottie-player>`
        $(banner).html(preview)
    }
    reader.readAsDataURL(document.getElementById(element).files[0]);
}

function uploadBanner(element, banner) {
    var url = "/pengelola/wisata";
    var elmnt = document.getElementById(element);
    var filename = elmnt.getAttribute('name');
    var content = new FormData();
    content.append('fileContent', elmnt.files[0]);
    content.append('fileName', filename);
    console.log(content)
    $.ajax({
        headers: {
            'X-CSRF-Token': $('meta[name=csrf_token]').attr('content')
        },
        async: true,
        type: "post",
        contentType: false,
        url: url,
        data: content,
        processData: false,
        success: function () {
            location.reload();
        },
        error: function (e) {
            console.log(e)
        }
    });
    var reader = new FileReader();
    reader.onload = function () {
        var preview = `<lottie-player src="https://assets5.lottiefiles.com/packages/lf20_sr65xoio.json"  background="transparent"  speed="1.2"  style="width: 420px; height: auto;"  loop  autoplay></lottie-player>`
        $(banner).html(preview)
    }
    reader.readAsDataURL(document.getElementById(element).files[0]);
}

function updateBanner(element, banner) {
    var elmnt = document.getElementById(element);
    var id = elmnt.getAttribute('id-content');
    var filename = elmnt.getAttribute('name');
    var url = "/pengelola/wisata/" + id;
    var content = new FormData();
    content.append('updateContent', elmnt.files[0]);
    content.append('fileName', filename);
    console.log(content)
    $.ajax({
        headers: {
            'X-CSRF-Token': $('meta[name=csrf_token]').attr('content')
        },
        async: true,
        type: "post",
        contentType: false,
        url: url,
        data: content,
        processData: false,
        success: function () {
            location.reload();
        },
        error: function (e) {
            console.log(e)
        }
    });
    var reader = new FileReader();
    reader.onload = function () {
        var preview = `<lottie-player src="https://assets5.lottiefiles.com/packages/lf20_sr65xoio.json"  background="transparent"  speed="1.2"  style="width: 420px; height: auto;"  loop  autoplay></lottie-player>`
        $(banner).html(preview)
    }
    reader.readAsDataURL(document.getElementById(element).files[0]);
}

function alertValidation(type, title, message) {
    Swal.fire({
        icon: type,
        title: title,
        text: message,
    })
}


