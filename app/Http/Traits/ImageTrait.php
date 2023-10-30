<?php

namespace App\Http\Traits;

trait ImageTrait
{


////////////delete//////////////////////

//function delete()
//{
//    if ($managements->img != null) {
//        if (@getimagesize((public_path() . "/frontend/assets/img/management/" . ($managements->img)))) {
//            unlink(public_path() . "/frontend/assets/img/management/" . ($managements->img));
//        }
//    }
//}


////////////////////update///////////////////////////////

function updateImage( $request , $model , $id , $path )
{
    if ($request->image) {
//        if ($request->hasfile('image')) {
            $managements = $model::where('id', $id)->first();

        if ($request->hasfile('image')) {
            $file = $request->image;
            $newfile = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path() .$path , $newfile);


            if ($managements->image != null) {
                if (@getimagesize((public_path() . $path . '/'.($managements->image)))) {
                    unlink(public_path() . $path . '/'.($managements->image));
                }
            }
//            dd((public_path() . $path . '/'.($managements->image)));
            return $newfile;

//        "/frontend/assets/img/management/"
        }

//            $file_extension = $request->image->getClientOriginalExtension();
//            $m =   $file_name = time() . '.' . $file_extension;
//          $request->image->move(public_path() .$path, $file_name);
//     return $m;
 //            $managements->update([
//                'image' => $file_name
//            ]);

//            "/frontend/assets/img/management/"
//        }
    }

}
///////////////store////////////////////////

function storeImage($request , $path)
{
    if ($request->hasfile('image')) {
        $file = $request->image;
        $newfile = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path() .$path , $newfile);
//        "/frontend/assets/img/management/"
    }
}

/***************************************/

    ////////////////////update///////////////////////////////

    function updateImage2( $request , $model , $id , $path , $requestName , $name)
    {
        if ($requestName) {
//        if ($request->hasfile('image')) {
            $managements = $model::where('id', $id)->first();

            if ($request->hasfile($name)) {
//                $file = $request->$name;



                $file =  $requestName;
                $newfile = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path() .$path , $newfile);
//                dd($file->move(public_path() .$path , $newfile));


                if ($managements->$name != null) {
                    if (@getimagesize((public_path() . $path . '/'.($managements->$name)))) {
                        unlink(public_path() . $path . '/'.($managements->$name));
                    }
                }
//            dd((public_path() . $path . '/'.($managements->image)));
                return $newfile;


//        "/frontend/assets/img/management/"
            }

//            $file_extension = $request->image->getClientOriginalExtension();
//            $m =   $file_name = time() . '.' . $file_extension;
//          $request->image->move(public_path() .$path, $file_name);
//     return $m;
            //            $managements->update([
//                'image' => $file_name
//            ]);

//            "/frontend/assets/img/management/"
//        }
        }

    }
///////////////store////////////////////////

    function storeImage2($request , $path , $requestName , $name)
    {

        if ($request->hasfile($name)) {
            $file = $requestName;
            $newfile = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path() .$path , $newfile);
            return $newfile;
//        "/frontend/assets/img/management/"
        }
    }

    /****************************************/

    function storeImageMulti($request , $path , $requestName , $name)
    {
        $newfileAll = [];
        foreach ($requestName as $key => $val) {

            if(isset($requestName[$key])) {
                if (isset($request->file($name)[$key])) {
                    $file = $request->file($name)[$key];
                    $newfile = time().$key . '.' . $file->getClientOriginalExtension();
                    $file->move(public_path() . $path, $newfile);
                    $newfileAll[] = $newfile;
                }
            }
        }
        return $newfileAll;
    }




    function updateImageMulti( $request , $model , $id , $path , $requestName , $name )
    {

            $newfileAll = [];
            $idAll = [];
            if($requestName) {
                foreach ($requestName as $key => $val) {
                    if(isset($requestName[$key]) && isset($request->id[$key]) ) {

                             if (isset($request->file($name)[$key])) {

                                $managements = $model::where('id', (int)$request->id[$key])->first();

                                if (isset($request->file($name)[$key])) {
                                    $file = $request->file($name)[$key];
                                    $newfile = time() .$key . '.' . $file->getClientOriginalExtension();
                                    $file->move(public_path() . $path, $newfile);
                                    $newfileAll[] = $newfile;
                                    $idAll[] = $request->id[$key];

                                     if ($managements->$name  != null) {
                                        if (@getimagesize((public_path() . $path . '/' . ($managements->$name )))) {
                                            unlink(public_path() . $path . '/' . ($managements->$name ));
                                        }
                                    }
                                }
                            }
                     }
                }
            }
             return [$newfileAll , $idAll];


    }

}
