function uploadImage(element, banner, type) {
    var url = "/admin/content";
    if (type < 4) {
        var content = new FormData();
        content.append('fileContent', document.getElementById(element).files[0]);
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
                // location.reload();
            }
        });

    } else {
        var ads = new FormData();
        ads.append('fileAds', document.getElementById(element).files[0]);
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
                // location.reload();
            }
        });
    }

    var reader = new FileReader();
    reader.onload = function () {
        var preview = `<lottie-player src="https://assets5.lottiefiles.com/packages/lf20_sr65xoio.json"  background="transparent"  speed="1.2"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>`
        $(banner).html(preview)
    }
    reader.readAsDataURL(document.getElementById(element).files[0]);
}

function updateImage(element, banner, type, id) {
    console.log('test')
    var url = "/admin/content/"+id;
    if (type < 4) {
        var content = new FormData();
        content.append('updateContent', document.getElementById(element).files[0]);
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
        ads.append('updateAds', document.getElementById(element).files[0]);
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
        var preview = `<lottie-player src="https://assets5.lottiefiles.com/packages/lf20_sr65xoio.json"  background="transparent"  speed="1.2"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>`
        $(banner).html(preview)
    }
    reader.readAsDataURL(document.getElementById(element).files[0]);
}


