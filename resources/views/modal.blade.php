<div class="modal fade" id="modal-note" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tulis Catatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.edit', $note->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <h1 style="color: #B9B9B9;">Judul Catatan</h1>
                    <input type="text" id="notes" placeholder="Update Konten, Wisata, dll" style="border-radius: 8px;">
                    <h1 style="color: #B9B9B9;">Isi Catatan</h1>
                    <textarea name="" id="isi" placeholder="Tulis apa aja deh disini buat admin yang lain biar bisa koordinasi" style="border-radius: 8px;"></textarea>
                    <div class="modal-footer" style="border: none;">
                        <button type="submit" class="btn py-3 text-white" style="background-color: #02182B;border-radius: 8px;">Simpan</button>
                        <button type="button" class="btn py-3">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>