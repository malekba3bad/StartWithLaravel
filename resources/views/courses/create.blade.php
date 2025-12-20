@extends("Main_layout")
@section("title")
  اضافة كورس
@endsection
@section("content")
<div class="col-md-12">
<form method="POST" action="{{ route('courses.store') }}" style="width: 80%; margin: 0 auto; background-color:white">
    @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">اسم الكورس</label>
                    <input autofocus type="text" name="name" class="form-control" id="name" placeholder="اسم الكورس" value="{{ old('name') }}">
                    @error('name')
                    <div style="color: red" class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                    <div class="form-group">
                    <label for="active">حالة التفعيل</label>
                    <select name="active" class="form-control" id="active">
                        <option value="">اختر الحالة</option>
                      <option value="1">نشط</option>
                      <option value="0">غير نشط</option>
                    </select>
                    @error('active')
                    <div style="color: red" class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                


                   <div class="form-group" style="text-align: center; margin-bottom: 20px">
                  <button type="submit" style="" class="btn btn-primary">Submit</button>
                </div>
                </div>
                <!-- /.card-body -->

               
              </form>

</div>

@endsection
