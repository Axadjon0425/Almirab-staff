

<!-- Modal -->
<div class="modal fade" id="editModal{{ $s->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Malumot tahrirlash</h5>
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form action="{{ route('AlmirabStaff.update', ['AlmirabStaff'=>$s->id] ) }}" method="POST" enctype="multipart/form-data" class="js_edit_staff">
  @csrf
  {{ method_field('PUT') }}
  <input type="hidden" name="photo_hidden1" value="{{ $s->file1 }}">
  <input type="hidden" name="photo_hidden2" value="{{ $s->file2 }}">
  <div class="row">
    
    <div class="col-md-4 mb-3 d-flex flex-column justify-content-start ">
      <label class="text-left" for="ism{{$s->id}}">Ism</label>
      <input type="text" id="ism{{$s->id}}" name="firstname" class="form-control" value="{{ $s->firstname}}">
      <span style="font-size: 12px" class="validation-firstname text-danger text-left"></span>
    </div>

    <div class="col-md-4 mb-3 d-flex flex-column justify-content-start ">
      <label class="text-left" for="lastname{{$s->id}}">Familya</label>
      <input type="text" id="lastname{{$s->id}}" name="lastname" class="form-control" value="{{ $s->lastname }}">
      <span style="font-size: 12px" class="validation-lastname text-danger text-left"></span>
    </div>

    <div class="col-md-4 mb-3 d-flex flex-column justify-content-start ">
      <label class="text-left" for="reference{{$s->id}}">Malumot</label>
      <input type="text" id="reference{{$s->id}}" name="reference" class="form-control" value="{{ $s->reference }}">
      <span style="font-size: 12px" class="validation-reference text-danger text-left"></span>
    </div>
  
    <div class="col-md-4 mb-3 d-flex flex-column justify-content-start ">
      <label class="text-left" for="address{{$s->id}}">Manzil</label>
      <input type="text" id="address{{$s->id}}" name="address"  class="form-control" value="{{ $s->address }}">
      <span style="font-size: 12px" class="validation-address text-danger text-left"></span>
    </div>

    <div class="col-md-4 mb-3 d-flex flex-column justify-content-start ">
      <label class="text-left" for="born{{$s->id}}">Tugilgan sana</label>
      <input type="date" id="born{{$s->id}}" name="born"  class="form-control" value="{{ $s->born }}">
      <span style="font-size: 12px" class="validation-born text-danger text-left"></span>
    </div>

    <div class="col-md-4 mb-3 d-flex flex-column justify-content-start ">
      <label class="text-left" for="specialty{{$s->id}}">Mutaxasisligi</label>
      <input type="text" id="specialty{{$s->id}}" name="specialty" class="form-control" value="{{ $s->specialty }}">
      <span style="font-size: 12px" class="validation-specialty text-danger text-left"></span>
    </div>

    <div class="col-md-4 mb-3 d-flex flex-column justify-content-start ">
      <label class="text-left" for="work_activity{{$s->id}}">Mexnat faoliyati</label>
      <input type="text" id="work_activity{{$s->id}}" name="work_activity" class="form-control" value="{{ $s->work_activity }}">
      <span style="font-size: 12px" class="validation-work_activity text-danger text-left"></span>
    </div>


    <div class="col-md-4 mb-3 d-flex flex-column justify-content-start ">
      <label class="text-left" for="lang{{$s->id}}">Qaysi tillarni biladi</label>
      <input type="text" id="lang{{$s->id}}" name="lang" class="form-control" value="{{ $s->lang }}">
      <span style="font-size: 12px" class="validation-lang text-danger text-left"></span>
    </div>

    <div class="col-md-4 mb-3 d-flex flex-column justify-content-start ">
      <label class="text-left" for="salary{{$s->id}}">Qancha maosh qoniqtiradi</label>
      <input type="text" id="salary{{$s->id}}" name="salary" class="form-control" value="{{ $s->salary }}">
      <span style="font-size: 12px" class="validation-feedback text-danger text-left"></span>
    </div>

    <div class="col-md-4 mb-3 d-flex flex-column justify-content-start ">
      <label class="text-left" for="phone_one{{$s->id}}">Telefon raqami</label>
      <input type="text" id="phone_one{{$s->id}}" name="phone_one" class="form-control phone" value="{{ $s->phone_one }}">
      <span style="font-size: 12px" class="validation-phone_one text-danger text-left"></span>
    </div>

    <div class="col-md-4 mb-3 d-flex flex-column justify-content-start ">
      <label class="text-left" for="phone_two{{$s->id}}">Qoshimcha telefon raqami</label>
      <input type="text" id="phone_two{{$s->id}}" name="phone_two" class="form-control phone" value="{{ $s->phone_two }}">
      <span style="font-size: 12px" class="validation-phone_two text-danger text-left"></span>
    </div>

    <div class="col-md-4 mb-3 d-flex flex-column justify-content-start ">
      <label class="text-left" for="marital_status{{$s->id}}">Oilaviy ahvoli</label>
      <input type="text" class="form-control" name="marital_status" id="marital_status{{$s->id}}"  value="{{ $s->marital_status }}">
      <span style="font-size: 12px" class="validation-marital_status text-danger text-left"></span>
    </div>

    <div class="col-md-4 d-flex flex-column justify-content-start">
      <label for="status{{$s->id}}" class="text-left">Status</label>
      <select class="custom-select" name="status" id="status{{$s->id}}">
        <option >Tanlang...</option>
        <option value="1" @if ($s->status==1) selected @endif>Sinovda</option>
        <option value="2" @if ($s->status==2) selected @endif>Ishlayotgan</option>
        <option value="3" @if ($s->status==3) selected @endif>Ketgan</option>
        <option value="4" @if ($s->status==4) selected @endif>Sinovda o'ta olmagan</option>
      </select>
    </div>

    <div class="col-md-4 d-flex flex-column justify-content-start">
     <label for="pasport1{{$s->id}}" class="text-left">Rasm1</label>
      <div class="custom-file">
        <input type="file" class="custom-file-input" id="file1{{$s->id}}"  name="file1">
        <label class="custom-file-label"  for="file1{{$s->id}}" style="font-size: 12px; text-align:left ">{{ $s->file1}}</label>
        <span style="font-size: 12px" class="validation-file1 text-danger text-left"></span>
    </div>
    </div>

    <div class="col-md-4 d-flex flex-column justify-content-start">
      <label for="pasport2{{$s->id}}" class="text-left">Rasm2</label>
       <div class="custom-file">
         <input type="file" class="custom-file-input" id="file2{{$s->id}}"  name="file2">
         <label class="custom-file-label"  for="file2{{$s->id}}" style="font-size: 12px; text-align:left ">{{ $s->file2}}</label>
         <span style="font-size: 12px" class="validation-file2 text-danger text-left"></span>
     </div> 
     </div>

    <div class="col-md-4 d-flex flex-column justify-content-start">
    <label for=""{{$s->id}} class="text-left">Jins</label>
      <div class="row ">
        <div class="col-6">
      <label for="e{{$s->id}}">Erkak</label>
          <input type="radio" id="e{{$s->id}}" name="gender" value="Erkak" checked>
        </div>

        <div class="col-6">
     <label for="a{{$s->id}}">Ayol</label>
          <input type="radio" id="a{{$s->id}}" name="gender" value="Ayol">
        </div>

      </div>

    </div>

    

      

    </div>
  </div>
  <div class="modal-footer">
    <button type="submit" class="btn btn-primary">Saqlash</button>
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Yopish</button>
  </div>
</form>


</div>
</div>
</div>
