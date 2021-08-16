@extends('layouts.backApp')
@section('content')
    <div class="container-fluid">
      <div class="btn-group row mb-5 ok" role="group" style=" width: 100%;">
        <a href="{{ route('Almirab.index', ['id'=>1]) }}" class="btn rounded-0 col-3 @if(Request::segment(2) == 1) btn-primary @else btn-secondary @endif " >Sinovda</a>
        <a href="{{ route('Almirab.index', ['id'=>2]) }}" class="btn rounded-0 col-3 @if(Request::segment(2) == 2) btn-primary @else btn-secondary @endif">Ishlayotgan</a>
        <a href="{{ route('Almirab.index', ['id'=>3]) }}" class="btn rounded-0 col-3 @if(Request::segment(2) == 3) btn-primary @else btn-secondary @endif">Ketgan</a>
        <a href="{{ route('Almirab.index', ['id'=>4]) }}" class="btn rounded-0 col-3 @if(Request::segment(2) == 4) btn-primary @else btn-secondary @endif">Sivovdan o'tolmagan</a>
      </div>
        <div class="container">
         

     @include('staff.addModal')
     
        <table id="dataTable_staff" class="table table-striped" style="width:100%;" >
        
            <thead>
                <tr>
                    <th class="text-left">№</th>
                    <th class="text-left">Ismi</th>
                    <th class="text-left">Familiyasi</th>
                    <th class="text-left">Mutaxasisligi</th>
                    <th class="text-left">Telefon raqami</th>
                    <th class="text-left">Tug'ilgan sana</th>
                  
                    
                    <th class="text-right">Harakatlar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($AlmirabStaff as $s)
                <tr>
                    <td class="align-middle text-left">{{ ($loop->index+1)}}</td>
                    <td class="align-middle text-left">{{ $s->firstname }}</td>
                    <td class="align-middle text-left">{{ $s->lastname }}</td>
                    <td class="align-middle text-left">{{ $s->specialty }}</td>
                    <td class="align-middle text-left" style="font-size:12px">{{ $s->phone_one }} <br> {{ $s->phone_two }}</td>
                    <td class="align-middle text-left" style="font-size:12px">{{ date('d.m.Y', strtotime($s->born)) }} </td>
                    <td class="text-right ">
                      <div class="btn-group">

                        <a href="" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#showModal{{ $s->id }}">
                          <i class="fas fa-eye" style="font-size: 13px; color: white"></i></i>
                        </a>

                        @include('staff.showModal')

                        <a href="" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editModal{{ $s->id }}">
                          <i class="far fa-edit"></i>
                        </a>

                        @include('staff.editModal')

                        <button type="submit" class="btn btn-sm btn-danger"data-toggle="modal" data-target="#modalDelete{{ $s->id }}">
                            <i class="far fa-trash-alt"></i>
                        </button>

                      </div>
                   
                       @include('staff.deletModal')
                       
                      
                    </td>
                    
                
                </tr>
                @endforeach
              
            
            </tbody>
        </table>
        </div>
    </div>
@endsection