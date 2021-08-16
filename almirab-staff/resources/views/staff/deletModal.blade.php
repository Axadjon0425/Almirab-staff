 <!--===========================DeletModal========================-->
 <div class="modal fade" id="modalDelete{{ $s->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{ $s->firstname." ".$s->lastname }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p class="text-danger text-left">Maʼlumotni rostdan ochirmoqchimiz?</p>
        </div>
        <div class="modal-footer">
          <form action="{{ route('AlmirabStaff.destroy', ['AlmirabStaff'=>$s->id]) }}" method="POST"  class="js_delet_staff">                           
            @csrf
            {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-danger">Xa</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Yoq</button>
          </form>
        </div>
      </div>
    </div>
  </div>