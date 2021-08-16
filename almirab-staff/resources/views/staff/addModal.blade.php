<a href="" class="btn btn-outline-primary" style="position: absolute; z-index: 20;" data-toggle="modal" data-target="#exampleModal"><i class="far fa-plus"></i> Add</a>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Malumot qo'shish</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form action="{{ route('AlmirabStaff.store') }}" method="POST" enctype="multipart/form-data" id="js_add_staff">
  @csrf
  <div class="row">
    
    <div class="col-md-4 mb-3">
      <label for="ism">Ism</label>
      <input type="text" id="ism" name="firstname" class="form-control" value="{{ old('firstname') }}">
      <span  style="font-size: 12px" class="validation-firstname text-danger"></span>
    </div>

    <div class="col-md-4 mb-3">
      <label for="lastname">Familya</label>
      <input type="text" id="lastname" name="lastname" class="form-control" value="{{ old('lastname') }}">
      <span  style="font-size: 12px" class="validation-lastname text-danger"></span>
    </div>

    <div class="col-md-4 mb-3">
      <label for="reference">Malumot</label>
      <input type="text" id="reference" name="reference" class="form-control" value="{{ old('reference') }}">
      <span  style="font-size: 12px" class="validation-reference text-danger"></span>
    </div>
  
    <div class="col-md-4 mb-3">
      <label for="address">Manzil</label>
      <input type="text" name="address"  class="form-control" value="{{ old('address') }}">
      <span  style="font-size: 12px" class="validation-address text-danger"></span>
    </div>

    <div class="col-md-4 mb-3">
      <label for="born">Tugilgan sana</label>
      <input type="date"  name="born"  class="form-control" value="{{ old('born') }}">
      <span  style="font-size: 12px" class="validation-born text-danger"></span>
    </div>

    <div class="col-md-4 mb-3">
      <label for="specialty">Mutaxasisligi</label>
      <input type="text" id="specialty" name="specialty" class="form-control" value="{{ old('specialty') }}">
      <span  style="font-size: 12px" class="validation-specialty text-danger"></span>
    </div>

    <div class="col-md-4 mb-3">
      <label for="work_activity">Mexnat faoliyati</label>
      <input type="text"  id="work_activity" name="work_activity" class="form-control" value="{{ old('work_activity') }}">
      <span  style="font-size: 12px" class="validation-work_activity text-danger"></span>
    </div>


    <div class="col-md-4 mb-3">
      <label for="lang">Qaysi tillarni biladi</label>
      <input type="text" id="lang" name="lang" class="form-control" value="{{ old('lang') }}">
      <span  style="font-size: 12px" class="validation-lang text-danger"></span>
    </div>

    <div class="col-md-4 mb-3">
      <label for="salary">Qancha maosh qoniqtiradi</label>
      <input type="text" id="salary" name="salary" class="form-control" value="{{ old('salary') }}">
      <span  style="font-size: 12px" class="validation-feedback text-danger"></span>
    </div>

    <div class="col-md-4 mb-3">
      <label for="phone_one">Telefon raqami</label>
      <input type="text"  id="phone_one" name="phone_one" class="form-control phone" value="{{ old('salary') }}">
      <span  style="font-size: 12px" class="validation-phone_one text-danger"></span>
    </div>

    <div class="col-md-4 mb-3">
      <label for="phone_two">Qoshimcha telefon raqami</label>
      <input type="text"  id="phone_two" name="phone_two" class="form-control phone" value="{{ old('salary') }}">
      <span  style="font-size: 12px" class="validation-phone_two text-danger"></span>
    </div>

    <div class="col-md-4 mb-3">
      <label for="marital_status">Oilaviy ahvoli</label>
      <input type="text" class="form-control" name="marital_status" id="marital_status"  value="{{ old('marital_status') }}">
      <span  style="font-size: 12px" class="validation-marital_status text-danger"></span>
    </div>

    <div class="col-md-4 ">
      <label for="status">Status</label>
      <select class="custom-select js_select_status" name="status" id="status">
        <option selected>Tanlang...</option>
        <option value="1">Sinovda</option>
        <option value="2">Ishlayotgan</option>
        <option value="3">Ketgan</option>
        <option value="4">Sinovda o'ta olmagan</option>
      </select>
    </div>

    <div class="col-md-4 Sinov d-none">
      <label for="test_duration">Sinov vaqti</label>
      <select class="custom-select" name="test_duration" id="test_duration">
        <option  >Tanlang...</option>
        <option value="1">1 hafta</option>
        <option value="10">10 kun</option>
        <option value="30">1 oy</option>
      </select>
    </div>

    <div class="col-md-4">
      <label for="pasport">Rasm1</label>
      <div class="custom-file">
        <input type="file" class="custom-file" id="file1" name="file1" value="{{ old('file1') }}">
        <label class="custom-file-label" for="file1" style="font-size: 12px"></label>
        <span  style="font-size: 12px" class="validation-file1 text-danger"></span>
    </div>
    </div>

    <div class="col-md-4">
      <label for="pasport">Rasm2</label>
      <div class="custom-file">
        <input type="file" class="custom-file" id="file2" name="file2" value="{{ old('file2') }}">
        <label class="custom-file-label" for="file2" style="font-size: 12px"></label>
        <span  style="font-size: 12px" class="validation-file2 text-danger"></span>
    </div>
    </div>

    <div class="col-md-4">
      <label for="">Jins</label>
      <div class="row ">
        <div class="col-6">
          <label for="e">Erkak</label>
          <input type="radio" id="e" name="gender" value="Erkak" checked>
        </div>

        <div class="col-6">
          <label for="a">Ayol</label>
          <input type="radio" id="a" name="gender" value="Ayol">
        </div>

      </div>

    </div>

    

      

    </div>
  </div>
  <div class="modal-footer">
    <button type="submit" class="btn btn-primary">Saqlash</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Yopish</button>
  </div>
</form>


</div>
</div>
</div>
