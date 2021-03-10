 @extends ("layouts.main")
 @section('title' , 'Thêm mới')
 @section('name' , 'Thêm mới 1 sản phẩm')
 @section('main-content')
     <form method="post" action="" enctype="multipart/form-data">
         <div class="form-group">
             <label for="exampleInputEmail1">Tên sản phẩm</label>
             <input name="name" style="" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tên sản phẩm ">
             <p style="margin-left: 10px ; margin-top: 10px ; color: red">{{@$error['name']}}</p>
         </div>

         <div class="form-group">
             <label for="exampleFormControlTextarea1">Mô tả sản phẩm ( chi tiết )</label>
             <textarea name="detail" style="width: 200%" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
             <p style="margin-left: 10px ; margin-top: 10px ; color: red">{{@$error['detail']}}</p>
         </div>

         <div class="form-group">
             <label for="exampleInputEmail1">Hình ảnh sản phẩm</label>
             <input name="image" style="width: 100%" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tên danh mục">
             <p style="margin-left: 10px ; margin-top: 10px ; color: red">{{@$error['image']}}</p>
         </div>

         <div class="form-group">
             <label for="exampleInputEmail1">Giá sản phẩm</label>
             <input  name="price" style="" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Giá sản phẩm">
             <p style="margin-left: 10px ; margin-top: 10px ; color: red">{{@$error['price']}}</p>
         </div>


         <div class="form-group">
             <label for="exampleFormControlSelect1">Example select</label>
             <select class="form-control" id="exampleFormControlSelect1" name="cate_id">
                 @foreach($categories as $category)
                     <option value="{{$category->id}}">{{$category->cate_name}}</option>
                 @endforeach
             </select>
         </div>

         <button name="sub" style="margin-top: 20px" type="submit" class="btn btn-primary">Thêm mới</button>
     </form>
 @endsection
 @section('appendjs')
     <script>
         CKEDITOR.replace('exampleFormControlTextarea1');
     </script>
     @endsection
