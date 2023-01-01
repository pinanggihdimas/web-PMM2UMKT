@extends("blank")

@section("konten")

    <form action="{{ route("simpan_cetak") }}" method="post">
        @csrf
        
        <div class="col-lg-6">
        <div class="p-5">
        <center><h3>BUAT PESANAN</h3></center><br>
        <div class="form-group">
            <label>Tanggal</label>
            <input type="date" name="tanggal" class="form-control form-control-user" required>
        </div>
        <div class="form-group">
            <label>Minuman</label>
            <input type="text" name="minuman" class="form-control form-control-user" required>
        </div>
        <div class="form-group">
            <label>Nama Pemesan</label>
            <input type="text" name="nama" class="form-control form-control-user" required>
        </div>
        <div class="form-group">
            <label>Qty</label>
            <select name="qty" class="form-control form-control-user" required>
                        <option value="">- Jumlah -</option>
                        <?php
                            for($x=1;$x<=50;$x++){
                        ?>
                        <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
                        <?php
                            }
                        ?>
                    </select>
        </div>
        <button type="submit" class="btn btn-secondary">Simpan</button>
        <button type="reset" class="btn btn-danger">Reset</button>
</div>
</div>
    </form>


@endsection