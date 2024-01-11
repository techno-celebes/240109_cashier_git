@extends('master_admin')
@section('content')

  <main class="main">
    <div class="content-wrapper">
      <div class="container pt-5 vh-100">
      <button type="button" class="btn btn-primary" id="tampilkanModalBtn">
        Tampilkan Modal
      </button>

      <table class="table mt-5">
        <thead class="table-dark">
          <tr>
            <th scope="col" class="col-2">No</th>
            <th scope="col" class="col-2">Nama</th>
            <th scope="col" class="col-2">Alamat</th>
            <th scope="col" class="col-4">Email</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody id="data"></tbody>
      </table>

      <!-- modal hapus -->

      <div class="modal" id="modalHapus" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Modal title</h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">
              <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
              <button
                type="button"
                class="btn btn-secondary"
                data-bs-dismiss="modal"
                id="btn2"
              >
                batal
              </button>
              <button type="button" class="btn btn-primary" id="Hapusdata">
                Hapus
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal utama -->
      <div
        class="modal fade"
        id="exampleModal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
              <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label"
                    >Nama</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="nama"
                    aria-describedby="emailHelp"
                  />
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label"
                    >Alamat</label
                  >
                  <input type="text" class="form-control" id="alamat" />
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label"
                    >Email</label
                  >
                  <input type="email" class="form-control" id="email" />
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" id="tutupBtn">
                Tutup
              </button>
              <button type="submit" class="btn btn-primary" id="submitBtn">
                Simpan Perubahan
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- tutup modal utama -->
      </div>
    </div>

    <!-- modal edit -->

    <div
      class="modal fade"
      id="modaledit"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input
                  type="text"
                  class="form-control"
                  id="nama"
                  aria-describedby="emailHelp"
                />
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"
                  >Alamat</label
                >
                <input type="text" class="form-control" id="alamat" />
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"
                  >Email</label
                >
                <input type="email" class="form-control" id="email" />
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" id="tutupBtn1">
              Tutup
            </button>
            <button type="submit" class="btn btn-primary" id="submitBtn1">
              Simpan Perubahan
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- tutup modal edit -->

    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    // jQuery code to show modal when button is clicked
    $(document).ready(function () {
        $("#tampilkanModalBtn").click(function () {
            $("#exampleModal").modal("show");
        });

        $("#tutupBtn").click(function () {
            $("#exampleModal").modal("hide");
        });

        // tambah baris baru
        $("#submitBtn").click(function () {
            var nama = $("#nama").val();
            var alamat = $("#alamat").val();
            var email = $("#email").val();
            var barisBaru = `<tr>
                <td>1</td>
                <td>${nama}</td>
                <td>${alamat}</td>
                <td>${email}</td>
                <td>
                    <button type="button" class="btn btn-danger" id="hapus">hapus</button>
                    <button type="button" class="btn btn-primary editmodal">edit</button>
                </td>
            </tr>`;

            $("#data").append(barisBaru);
            $("#exampleModal").modal("hide");
        });

        // fungsii buka modal hapus
        $(document).on('click', '#hapus', function () {
            $("#modalHapus").modal("show");
        });

        $(document).on('click', '#btn2', function () {
            $("#modalHapus").modal("hide");
        });

        $("#Hapusdata").click(function () {
            var hps = $("#data tr:last"); // Menghapus baris terakhir di dalam tabel
            hps.remove();
            $("#modalHapus").modal("hide");
        });

        $(document).on('click', '.editmodal', function () {
            $("#modaledit").modal("show");
        });

    });
</script>
  </main>


@endsection