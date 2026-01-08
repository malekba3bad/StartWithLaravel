@extends('Main_layout')
@section('title')
  الطلاب
@endsection
@section('content')

          <div class="col-12" style="padding: 15px; background-color: white">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="text-align: center; float: none">بيانات الطلاب</h3>
<a href="{{ route('student.create') }}" class="btn btn-sm btn-info">اضافة طالب</a>

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
                      
                      <th>اسم الطالب</th>
                      <th>الدولة</th>
                      <th>العنوان</th>
                      <th>الهاتف</th>
                      <th>الصورة</th>
                      <th>ملاحظات</th>
                      <th>التفعيل</th>
                      <th>الاضافة</th>
                      <th>التحديث</th>
                      <th>التحكم</th>
                    </tr>
                  </thead>
                  <tbody>
                     
                @foreach ($data as $info)
                       
                     <tr>
                      <td>{{ $info->name }}</td>
                      <td>{{ $info->country_name }}</td>
                      <td>{{ $info->address }}</td>
                      <td>{{ $info->phone }}</td>
                      <td>
                        @if ($info->image != null)
                        <img style="width: 80px; height: 80px" src="{{ asset('uploads/' . $info->image) }}" alt="صورة الطالب">
                        @else
                        لا يوجد صورة
                        @endif
                      </td>
                      <td>{{ $info->notes }}</td>
                      <td>@if ($info->active==1) مفعل @else
                          غير مفعل
                          
                      @endif</td>
                      <td>{{ $info->created_at }}</td>
                      <td>{{ $info->updated_at }}</td>
                      <td>
                    <a href="{{ route('student.edit', $info->id) }}" class="btn btn-primary">تعديل</a>
                    <a href="{{ route('student.destroy', $info->id) }}" class="btn btn-danger">حذف</a>

                
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
