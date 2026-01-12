@extends('Main_layout')
@section('title')
  الدورات
@endsection
@section('content')

          <div class="col-12" style="padding: 15px; background-color: white">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="text-align: center; float: none">بيانات الدورات</h3>
<a href="{{ route('training_courses.create') }}" class="btn btn-sm btn-info">اضافة جديد</a>

@if (Session::has('success'))
    <div class="alert alert-success" style="color: green; font-size: 16px; font-weight: bold; text-align: center; margin-top: 10px">
        {{ Session::get('success') }}
    </div>
  
@endif

@if (Session::has('error'))
    <div class="alert alert-danger" style="color: red; font-size: 16px; font-weight: bold; text-align: center; margin-top: 10px">
        {{ Session::get('error') }}
    </div>
  
@endif
    
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                @if (@isset($data) and !@empty($data) and @count($data)>0)
                 
                    
                
                <table id="example2" class="table table-bordered table-hover table-sm ">
                  <thead>
                    <tr>
                      
                      <th style="width: 20%">اسم الدورة</th>
                      <th>سعر الدورة</th>
                      <th>البداية</th>
                      <th>النهاية</th>
                      <th>ملاحظات</th>
                      <th>الاضافة</th>
                      <th>التحديث</th>
                      <th>التحكم</th>
                    </tr>
                  </thead>
                  <tbody>
                     
                @foreach ($data as $info)
                       
                     <tr>
                      <td>{{ $info->course_name }}</td>
                      <td>{{ $info->price * 1 }}</td>
                      <td>{{ $info->start_date }}</td>
                      <td>{{ $info->end_date }}</td>
                      <td>{{ $info->notes }}</td>
                      <td>{{ $info->created_at }}</td>
                      <td>{{ $info->updated_at }}</td>
                      <td>
                    <a href="{{ route('training_courses.edit', $info->id) }}" class="btn btn-primary">تعديل</a>
                    <a href="{{ route('training_courses.destroy', $info->id) }}" class="btn btn-danger">حذف</a>

                
                </td>
                    
                    </tr>
                  @endforeach
                   
                   
                  </tbody>
                </table>
                @else
                <p style="text-align: center; color: brown; font-size: 20px; font-weight: bold; margin-top: 50px">لا يوجد كورسات</p>
                    @endif
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        

@endsection
