<div class="modal fade" id="modal-detail{{ $wisata->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold h1" id="exampleModalLabel">Detail Wisata</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="wrap">
                    <p>Pemilik Wisata : <strong>{{$wisata->username}}</strong></p>
                    <br>
                    <img src="{{ $wisata->credential }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
