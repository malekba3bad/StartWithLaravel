@extends("Main_layout")
@section("title")
  تفاصيل الطلاب في الدورة {{ $data->course_name }}
@endsection

@section("content")
@if (Session::has('error'))
    <div class="alert alert-danger" role="alert" style="color: red; font-size: 16px; font-weight: bold; text-align: center; margin-top: 10px">
        {{ Session::get('error') }}
    </div>
  
@endif


                <div class="card-body">
                <table id="example2" class="table table-bordered table-hover table-sm ">
                  <thead>
                    <tr>
                      
                     <td>اسم الكورس</td>
                     <td>{{ $data['course_name'] }}</td>
                    </tr>

                    <tr>
                      
                     <td>السعر</td>
                     <td>{{ $data['price'] * 1 }}</td>
                    </tr>
                    <tr>
                      
                     <td>تاريخ البداية</td>
                     <td>{{ $data['start_date'] }}</td>
                    </tr>
                    <tr>
                      
                     <td>تاريخ النهاية</td>
                     <td>{{ $data['end_date'] }}</td>
                    </tr>
                    <tr>
                      
                     <td>ملاحظات</td>
                     <td>{{ $data['notes'] }}</td>
                    </tr>

                    <tr>
                      <td>عدد الطلاب المسجلين في الكورس</td>
                      <td>{{ $data['StudentCounter']*1}}</td>
                    </tr>

                   
                  </tbody>
                </table>
                 
                </div>
                <!-- /.card-body -->

               
              </form>

</div>

@endsection
