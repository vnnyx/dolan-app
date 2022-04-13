<div class="modal fade" id="modal-bukti{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold h1" id="exampleModalLabel">Bukti Transaksi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="wrap">
                    <img src="{{ $data->bukti_pembayaran }}" alt="">
                </div>
                <button type="submit" class="btn btn-bukti w-100 py-3 text-white" style="background-color: #02182B;border-radius: 8px;"><i class='bx bxs-file-image'></i> Unduh Bukti Pembayaran</button>
                </form>
            </div>
        </div>
    </div>
</div>
