@extends('Main_layout')
@section('title')
    الكورسات
@endsection
@section('content')

          <div class="col-12" style="padding: 15px; background-color: white">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="text-align: center; float: none">بيانات الكورسات</h3>
<a href="{{ route('courses.create') }}" class="btn btn-sm btn-info">اضافة كورس</a>
    
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                @if (@isset($data) and !@empty($data) and @count($data)>0)
                 
                    
                
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      
                      <th>اسم الكورس</th>
                      <th>حالةالتفعيل</th>
                      <th>تاريخ الاضافة</th>
                      <th>تاريخ التحديث</th>
                        <th>التحكم</th>
                    </tr>
                  </thead>
                  <tbody>
                     
                @foreach ($data as $info)
                       
                     <tr>
                      <td>{{ $info->name }}</td>
                      <td>@if ($info->active==1) مفعل @else
                          غير مفعل
                          
                      @endif</td>
                      <td>{{ $info->created_at }}</td>
                      <td>{{ $info->updated_at }}</td>
                      <td>
                    <a href="{{ route('courses.edit', $info->id) }}" class="btn btn-primary">تعديل</a>
                    <a href="{{ route('courses.destroy', $info->id) }}" class="btn btn-danger">حذف</a>

                
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