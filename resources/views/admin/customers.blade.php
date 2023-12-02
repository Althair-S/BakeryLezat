@extends('admin.partials.sidebar')

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 custom-content">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Customers</h1>
    </div>

    <!-- Customers Table -->
    <div class="card">
        <div class="card-header">
            <h2>Feedback List</h2>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Kontak</th>
                        <th>Umpan Balik</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Table content goes here -->
                    <tr>
                        <td>1</td>
                        <td>Jane Doe</td>
                        <td>Jl. Contoh No. 123</td>
                        <td>08123456789</td>
                        <td>Feedback Text</td>
                        <td>
                            <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#responseModal">
                                Respon Pertanyaan
                            </button>
                        </td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal for Response -->
    <div class="modal fade" id="responseModal" tabindex="-1" role="dialog" aria-labelledby="responseModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="responseModalLabel">Respon Pertanyaan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Add your response form or text area here -->
                    <form>
                        <div class="form-group">
                            <label for="responseText">Tulis Respon Anda:</label>
                            <textarea class="form-control" id="responseText" rows="4"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim Respon</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
    


@endsection
