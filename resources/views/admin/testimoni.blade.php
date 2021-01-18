<<<<<<< HEAD
       
    @extends('admin.index')
    @section('pasing')
    <section class="container">
      <div class="row">
        <div class="col-md-4">
    <button type="button" class="btn btn-success"><i class="far fa-plus-square"> Tambah Data</i></button>
      </div>
      <div class="col-md-4"></div>
    <div class="row col-md-4">
    <input type="text" class="form-control" placeholder="cari" aria-label="Recipient's username" aria-describedby="button-addon2">
  </div>
  </div>
  <div class="bg-light">
    <table class="table">
  <thead>
    <tr class="bg-secondary">
      <th></th>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Nama Perusahaan</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Gambar</th>
      <th scope="col">Tindakan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><input type="checkbox" name=""></td>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>Perusahaan ini sangat baik dan ramah, project yang saya berikan diselesaikan dengan baik</td>
      <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6Vfw1pC-3Vwtw1eVE2D6waAOkdaXwBfpCFg&usqp=CAU" class="w-50" style="max-height: 100px;"></td>
      <td class="row top-50 "><button type="button" class="btn btn-danger col-md-6"><i class="fa fa-trash" aria-hidden="true"></i>
</button>  <button type="button" class="btn btn-success col-md-6"><i class="fas fa-user-edit" aria-hidden="true"></i></button></td>
    </tr>

    <tr>
      <td><input type="checkbox" name=""></td>
      <th scope="row">2</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>Perusahaan ini sangat baik dan ramah, project yang saya berikan diselesaikan dengan baik</td>
      <td><img src="https://thumbs.dreamstime.com/z/portrait-asian-japanese-school-girl-costume-looking-park-outdoor-film-vintage-style-146938784.jpg" class="w-50" style="max-height: 100px;"></td>
      <td class="row center-block"><button type="button" class="btn btn-danger center-block col-md-6"><i class="fa fa-trash" aria-hidden="true"></i>
</button> <button type="button" class="btn btn-success center-block col-md-6"><i class="fas fa-user-edit"></i></button></td>
    </tr>
  </tbody>
</table>
</div>
<button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true">   Hapus</i>
</button>
</section>
@endsection
=======
       @extends('admin.index')
       @section('pasing')
       <section class="container">
           <div class="row">
               <div class="col-md-4">
                   <button type="button" class="btn btn-success"><i class="far fa-plus-square">Tambah Data</i></button>
               </div>
               <div class="col-md-4"></div>
               <div class="row col-md-4">
                   <input type="text" class="form-control" placeholder="cari" aria-label="Recipient's username" aria-describedby="button-addon2">
               </div>
           </div>
           <div class="bg-light">
               <table class="table">
                   <thead>
                       <tr class="bg-secondary">
                           <th scope="col">#</th>
                           <th scope="col">Nama</th>
                           <th scope="col">Nama Perusahaan</th>
                           <th scope="col">Deskripsi</th>
                           <th scope="col">Gambar</th>
                           <th scope="col">Tindakan</th>
                       </tr>
                   </thead>
                   <tbody>
                       <tr>
                           <!-- <td><input type="checkbox" name=""></td> -->
                           <td>Mark</td>
                           <td>Otto</td>
                           <td>PT Bahagi</td>
                           <td>Perusahaan ini sangat baik dan ramah, project yang saya berikan diselesaikan dengan baik</td>
                           <td>
                               <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6Vfw1pC-3Vwtw1eVE2D6waAOkdaXwBfpCFg&usqp=CAU" class="w-50" style="max-height: 100px;">
                           </td>
                           <td>
                               <div class="row">
                                   <button type="button" class="btn btn-danger col-md-6">
                                       <i class="fas fa-trash" aria-hidden="true"></i>
                                   </button>
                                   <button type="button" class="btn btn-success col-md-6">
                                       <i class="fas fa-user-edit" aria-hidden="true"></i>
                                   </button>
                               </div>
                           </td>
                       </tr>
                   </tbody>
               </table>
           </div>
           <button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"> Hapus</i>
           </button>
       </section>
       @endsection
>>>>>>> c760d6ccb5ed3cea4904aef0e55c5bd5793444d8
