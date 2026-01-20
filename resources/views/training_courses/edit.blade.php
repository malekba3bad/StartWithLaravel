@extends("Main_layout")
@section("title")
تعديل دورة جديدة 
@endsection

@section("content")
@if (Session::has('error'))
    <div class="alert alert-danger" role="alert" style="color: red; font-size: 16px; font-weight: bold; text-align: center; margin-top: 10px">
        {{ Session::get('error') }}
    </div>
  
@endif

<div class="col-md-12">
<form method="POST" action="{{ route('training_courses.update', $data->id) }}') }}" style="width: 80%; margin: 0 auto; background-color:white">
    @csrf
                <div class="card-body">
                  
                  <div class="form-group">
                    <label>الكورس المخصص للدورة</label>
                    <select name="courseID" class="form-control select2" id="courseID">
                        <option value="">اختر الكورس</option>
                        @if(!empty($Courses))
                        @foreach ($Courses as $info)
                            <option value="{{ $info->id }}" @if(old('courseID' , $data['courseID'] == $info->id)) selected @endif > {{ $info->name }}</option>
                        @endforeach
                        @endif
                    </select>
                    @error('courseID')
                    <div style="color: red" class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="price">سعر الدورة</label>
                    <input type="text" name="price" class="form-control" oninput="this.value=this.value.replace(/[^0-9.]/g,'');" id="price" placeholder="سعر الدورة" value="{{ old('price', $data->price) * 1 }}">

                  </div>
                  <div class="form-group">
                    <label for="start_date">تاريخ بدء الدورة</label>
                    <input type="date" name="start_date" class="form-control" id="start_date" placeholder="تاريخ بدء الدورة" value="{{ old('start_date', $data->start_date) }}">
                    @error('start_date')
                    <div style="color: red" class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                   <div class="form-group">
                    <label for="end_date">تاريخ نهاية الدورة</label>
                    <input type="date" name="end_date" class="form-control" id="end_date" placeholder="تاريخ نهاية الدورة" value="{{ old('end_date', $data->end_date) }}">
                    @error('end_date')
                    <div style="color: red" class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="notes">ملاحظات</label>
                    <textarea name="notes" class="form-control" id="notes" placeholder="ملاحظات">{{ old('notes', $data->notes) }}</textarea>
                  </div>
                  
                   <div class="form-group" style="text-align: center; margin-bottom: 20px">
                  <button type="submit" style="" class="btn btn-primary">اضف دورة</button>
                </div>
                </div>
                <!-- /.card-body -->

               
              </form>

</div>

@endsection
