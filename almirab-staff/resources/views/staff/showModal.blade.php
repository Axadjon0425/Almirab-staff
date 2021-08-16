                          
<!-- Modal -->
<div class="modal fade" id="showModal{{ $s->id }}" tabindex="-1" aria-labelledby="showModal{{ $s->id }}" aria-hidden="true" >
<div class="modal-dialog modal-lg">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Batafsil ko'rish</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
  </div>
  <div class="modal-body">
    <div class="row">
      <div class="col-md-7">
        <table class="table" style="font-size: 12px">
          <thead>
            <tr class="text-left">
                <th class="text-uppercase">Birinchi</th>
                <th class="text-uppercase">Ikkinchi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-left fw-bolder" >Familyasi</td>
              <td class="text-left" >{{ $s->lastname }}</td>
            </tr>
            <tr>
              <td class="text-left fw-bolder" >Ismi</td>
              <td class="text-left" >{{ $s->firstname }}</td>
            </tr>
            <tr>
              <td class="text-left fw-bolder" >Tug'ilgan yili</td>
              <td class="text-left" >{{ date('d.m.Y', strtotime($s->born)) }}</td>
            </tr>
            <tr>
              <td class="text-left fw-bolder" >Telefon raqami</td>
              <td class="text-left fw-normal" style="font-size:12px">
                <span class="fst-italic">1.</span>  {{ $s->phone_one}}
                <span class="fst-italic fw-bold">2.</span>  {{ $s->phone_two }}
              </td>
            </tr>
            <tr>
              <td class="text-left fw-bolder" >Yashash manzili</td>
              <td class="text-left" >{{ $s->address }}</td>
            </tr>
            <tr>
              <td class="text-left fw-bolder" >Malumoti</td>
              <td class="text-left" >{{ $s->reference }}</td>
            </tr>
            <tr>
              <td class="text-left fw-bolder" >Mutaxasisligi</td>
              <td class="text-left" >{{ $s->specialty }}</td>
            </tr>
            <tr>
              <td class="text-left fw-bolder" >Mexnat faoliyati</td>
              <td class="text-left" >{{ $s->work_activity }}</td>
            </tr>
            <tr>
              <td class="text-left fw-bolder" >Qaysi chet tillarni biladi</td>
              <td class="text-left" >{{ $s->lang }}</td>
            </tr>
            <tr>
              <td class="text-left fw-bolder" >Qancha maosh qoniqtiradi</td>
              <td class="text-left" >{{ $s->salary }}</td>
            </tr>
            <tr>
              <td class="text-left fw-bolder" >Maqomi</td>
              <td class="text-left">
                  @if($s->status == 1) Sinovda @endif 
                  @if($s->status == 2) Ishlayotgan @endif 
                  @if($s->status == 3) Ketgan @endif 
                  @if($s->status == 4) Sinovda o'ta olmagan @endif 
              </td>
            </tr>
            <tr>
              <td class="text-left fw-bolder">Jinsi</td>
              <td class="text-left" >{{$s->gender}}</td>
            </tr>
            <tr>
              <td class="text-left fw-bolder" >Kelgan vaqti</td>
              <td class="text-left" >{{ date('d.m.Y', strtotime($s->created_at)) }}</td>
            </tr>
            @if ($s->status == 1)
            <tr>
              <td class="text-left fw-bolder">Sinov vaqti</td>
              <td class="text-left" >{{ date('d.m.Y', strtotime($s->test_duration)) }}</td>
            </tr>
            @endif
            @if ($s->update_at)
            <tr>
              <td class="text-left fw-bolder">Tahrirlangan vaqt</td>
              <td class="text-left" >{{ date('d.m.Y', strtotime($s->update_at)) }}</td>
            </tr>
            @endif
          </tbody>
        </table>
      </div>
      <div class="col-md-5">
        <div class="row">
          <div class="col-md-16">
            <img src="{{ asset('upload/staff/'.$s->file1) }}" class="img-thumbnail" alt="pasport1" style="width: 100%;">
          </div>
          <br>
          <div class="col-md-16">
            <img src="{{ asset('upload/staff/'.$s->file2) }}" class="img-thumbnail" alt="paspor2" style="width: 100%;">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Yopish</button>
  </div>
</div>
</div>
</div>