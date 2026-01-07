@extends("Main_layout")
@section("title")
  اضافة طالب
@endsection

@section("content")
@if (Session::has('error'))
    <div class="alert alert-danger" role="alert" style="color: red; font-size: 16px; font-weight: bold; text-align: center; margin-top: 10px">
        {{ Session::get('error') }}
    </div>
  
@endif

<div class="col-md-12">
<form method="POST" enctype="multipart/form-data" action="{{ route('student.store') }}" style="width: 80%; margin: 0 auto; background-color:white">
    @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">اسم الطالب</label>
                    <input autofocus type="text" name="name" class="form-control" id="name" placeholder="اسم الطالب" value="{{ old('name') }}">
                    @error('name')
                    <div style="color: red" class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="country_id">الدولة</label>
                    <select name="country_id" class="form-control select2" id="country_id">
                        <option value="">اختر الدولة</option>
                        @if(!empty($countries))
                        @foreach ($countries as $info)
                            <option value="{{ $info->id }}"> {{ $info->name }}</option>
                        @endforeach
                        @endif
                    </select>
                    @error('country_id')
                    <div style="color: red" class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="address">العنوان</label>
                    <input type="text" name="address" class="form-control" id="address" placeholder="العنوان" value="{{ old('address') }}">
                    
                  </div>
                  <div class="form-group">
                    <label for="phone">الهاتف</label>
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="الهاتف" value="{{ old('phone') }}">
                    @error('phone')
                    <div style="color: red" class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="{{ old('email') }}">
                    @error('email')
                    <div style="color: red" class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                <div class="form-group">
                    <label for="nationalID">الرقم القومي</label>
                    <input type="email" name="nationalID" class="form-control" id="nationalID" placeholder="الرقم القومي" value="{{ old('nationalID') }}">
                    @error('nationalID')
                    <div style="color: red" class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                  
                  <div class="form-group">
                    <label for="image">الصورة</label>
                    <input type="file" name="image" class="form-control" id="image" >
                  </div>
                  <div class="form-group">
                    <label for="notes">ملاحظات</label>
                    <textarea name="notes" class="form-control" id="notes" placeholder="ملاحظات">{{ old('notes') }}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="active">حالة التفعيل</label>
                    <select name="active" class="form-control" id="active">
                        <option value="">اختر الحالة</option>
                      <option value="1" @if(old('active') == 1) selected @endif>نشط</option>
                      <option value="0" @if(old('active') == 0 and old('active')!=1) selected @endif>غير نشط</option>
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
