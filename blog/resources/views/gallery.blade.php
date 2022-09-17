 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>گالری تصاویر</title>
     <style>
         .form {
             border: 1px solid black;
             width: 200px;
             height: 150px;
             float: right;
             padding: 20px;
             margin: 20px;
         }

         .show {
             width: 900px;
             box-shadow: 5px 5px 5px #333333;
             margin: 10px;
             padding: 10px;
         }

         .show img {
             width: 100px;
             height: 100px;
             margin: 10px;
         }

         .show div {
             margin: 10px;
             padding: 10px;
             border: 1px solid brown;
             text-align: center;
             display: inline-block;
             width: 150px;
             height: 200px;
         }

         .show div:hover {
             border: 1px solid blue;
         }
     </style>
 </head>

 <body>
     <div>
         <form method="post" action="{{ route('gallery-store') }}" enctype="multipart/form-data" class="form">
             @csrf

             <label>
                 <h4>انتخاب عکس</h4>
             </label>
             <input type="file" required name="image">
             <div>
                 <input type="submit" value="بارگزاری عکس">
             </div>

         </form>
     </div>

     <div class="show">
              
         @foreach($content as $t)
         <div>
            <img src="{{asset('storage/'."$t->imagepath")}}">         
             <p><?php echo $t->imagepath ?></p>
         </div>
         @endforeach
     </div>

 </body>

 </html>