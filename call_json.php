<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "camera_storage";

// Buat Koneksi database
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Periksa Koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "success connected";
// mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<?php


// exec('start /B C:\xampp\htdocs\stream2\ffmpeg-4.4.1-essentials_build\bin\cam.bat');

// $ffmpeg = 'C:/xampp/htdocs/stream2/ffmpeg-4.4.1-essentials_build/bin/ffmpeg.exe';
// $video = 'rtsp://rtsp.stream/pattern';
// $output = 'C:/xampp/htdocs/stream2/video_convert/stream.m3u8';
// $cmd = $ffmpeg . ' -v verbose  -i ' . $video .  ' -vf scale=1920:1080  -t 1 -vcodec libx264 -r 1 -b:v 1000000 -crf 31 -acodec aac  -sc_threshold 0 -f hls  -hls_time 1  -segment_time 1 -hls_list_size 5 ' . $output;
// exec($cmd);

// Dua Video


// if ($files[0] == 1) {

//     unlink("C:/xampp/htdocs/stream2/video_convert/stream.m3u8");
//     unlink("C:/xampp/htdocs/stream2/video_convert/stream0.ts");

//     if ($files[1] == 1) {

//         unlink("C:/xampp/htdocs/stream2/video_convert/cam2/stream.m3u8");
//         unlink("C:/xampp/htdocs/stream2/video_convert/cam2/stream0.ts");
//     }
// }



$ffmpeg = 'C:/xampp/htdocs/stream2/ffmpeg-4.4.1-essentials_build/bin/ffmpeg.exe';
$video = array('rtsp://rtsp.stream/pattern', 'rtsp://rtsp.stream/pattern', 'rtsp://rtsp.stream/pattern', 'rtsp://rtsp.stream/pattern');
$output = array('C:/xampp/htdocs/stream2/video_convert/stream.m3u8', 'C:/xampp/htdocs/stream2/video_convert/cam2/stream.m3u8', 'C:/xampp/htdocs/stream2/video_convert/cam3/stream.m3u8', 'C:/xampp/htdocs/stream2/video_convert/cam4/stream.m3u8');
$cmd = $ffmpeg . ' -v verbose  -i ' . $video[0] .  ' -vf scale=1920:1080  -t 1 -vcodec libx264 -r 1 -b:v 1000000 -crf 31 -acodec aac  -sc_threshold 0 -f hls  -hls_time 1  -segment_time 1 -hls_list_size 5 ' . $output[0];
$cmd2 = $ffmpeg . ' -v verbose  -i ' . $video[1] .  ' -vf scale=1920:1080  -t 1 -vcodec libx264 -r 1 -b:v 1000000 -crf 31 -acodec aac  -sc_threshold 0 -f hls  -hls_time 1  -segment_time 1 -hls_list_size 5 ' . $output[1];
$cmd3 = $ffmpeg . ' -v verbose  -i ' . $video[2] .  ' -vf scale=1920:1080  -t 1 -vcodec libx264 -r 1 -b:v 1000000 -crf 31 -acodec aac  -sc_threshold 0 -f hls  -hls_time 1  -segment_time 1 -hls_list_size 5 ' . $output[2];
$cmd4 = $ffmpeg . ' -v verbose  -i ' . $video[3] .  ' -vf scale=1920:1080  -t 1 -vcodec libx264 -r 1 -b:v 1000000 -crf 31 -acodec aac  -sc_threshold 0 -f hls  -hls_time 1  -segment_time 1 -hls_list_size 5 ' . $output[3];
$cmd11 = $ffmpeg . ' -y -i C:\xampp\htdocs\stream2\video_convert\stream0.ts -qscale:v 2 output_01.png ';
$cmd12 = $ffmpeg . ' -y -i C:\xampp\htdocs\stream2\video_convert\cam2\stream0.ts -qscale:v 2 output_02.png ';
$cmd13 = $ffmpeg . ' -y -i C:\xampp\htdocs\stream2\video_convert\cam3\stream0.ts -qscale:v 2 output_03.png ';
$cmd14 = $ffmpeg . ' -y -i C:\xampp\htdocs\stream2\video_convert\cam4\stream0.ts -qscale:v 2 output_04.png ';
exec($cmd);
exec($cmd2);
exec($cmd3);
exec($cmd4);
?>

<?php
// $files = file_exists('C:\xampp\htdocs\stream2\video_convert\stream0.ts');
$files = array(
    file_exists('C:\xampp\htdocs\stream2\video_convert\stream0.ts'), file_exists('C:\xampp\htdocs\stream2\video_convert\cam2\stream0.ts'),
    file_exists('C:\xampp\htdocs\stream2\video_convert\cam3\stream0.ts'), file_exists('C:\xampp\htdocs\stream2\video_convert\cam4\stream0.ts')
);

$output_files = array(
    file_exists('C:\xampp\htdocs\stream2\output_01.png'), file_exists('C:\xampp\htdocs\stream2\output_02.png'),
    file_exists('C:\xampp\htdocs\stream2\output_03.png'), file_exists('C:\xampp\htdocs\stream2\output_04.png')
);

// $send_files = addslashes(file_get_contents('C:\xampp\htdocs\stream2\apple_blur.png', 'C:\xampp\htdocs\stream2\output_01.png'));

// $send_files = addslashes(file_get_contents('C:\xampp\htdocs\stream2\apple_blur.png'));

// $multi = addslashes(file_get_contents('C:\xampp\htdocs\stream2\apple_blur.png'), file_get_contents('C:\xampp\htdocs\stream2\output_01.png'));

// $fill = fopen('C:\xampp\htdocs\stream2\output_01.png', 'r');
// echo get_resource_type($fill);
// echo $multi;


// $imageStorage = 'test';



//proses olah data dari table
$somevar = $_GET["uid"];
$arr = json_decode($somevar, true);
foreach ($arr as $itemData) {
    $itemTable = array(
        'id' => $itemData['id'],
        'name' => $itemData['name'],
        'price' => $itemData['price']
    );
    $dataJson = json_encode($itemTable);
}



$image_ada = false;
$send_oke = true;
?>

<body>
    <div class="container mt-3">
        <!-- <?php //if ($files == true) { 
                ?> -->
        <?php foreach ($files as $item) {
            # code...
            if ($item == true) {
                exec($cmd11);
                exec($cmd12);
                exec($cmd13);
                exec($cmd14);
                $image_ada = true;
            }
        }
        foreach ($output_files as $items) {
            # code...
            if ($image_ada == true) {
                # code...
                // echo 'ada : ' . $items . '<br>';
                //files image

                if ($send_oke == true) {
                    $send_files = array(
                        file_get_contents('C:\xampp\htdocs\stream2\output_01.png'),
                        file_get_contents('C:\xampp\htdocs\stream2\output_02.png'),
                        file_get_contents('C:\xampp\htdocs\stream2\output_03.png'),
                        file_get_contents('C:\xampp\htdocs\stream2\output_04.png')
                    );

                    //proses olah image ke base64
                    $file_arr = array();
                    foreach ($send_files as $itemImage) {
                        # code...
                        $enfiles = base64_encode($itemImage);

                        // echo $enfiles . '<br>';

                        $file_arr[] = $enfiles;
                    }

                    //hasil image json
                    $dataImage = array(
                        "captureDepan" => $file_arr[0],
                        "captureBelakang" => $file_arr[1],
                        "captureKanan" => $file_arr[2],
                        "captureKiri" => $file_arr[3]
                    );

                    $imageJson = json_encode($dataImage);

                    //hasil json dari 2 data yang digabungkan
                    $hasilJson = json_encode(array_merge(json_decode($dataJson, true), json_decode($imageJson, true)));
                    echo $hasilJson;
                }
                $send_oke = false;
            }
        } //if ($files[0] == true) {
        //if ($files[1] == true) {
        // echo $files[0];
        // exec($cmd11);
        //exec($cmd12);
        // echo $output_files;
        //if ($output_files == true) {
        // $query = mysqli_query($conn, "INSERT INTO streaming (id, imageData) VALUES ('implode('', '$send_files')')");

        // insert blob 1 image 1 row
        // $query = mysqli_query(
        //     $conn,
        //     "INSERT INTO streaming (id, imageData) VALUES ('', '$send_files')"
        // );
        // if ($query) {
        //     echo "<center><h1>Your News has Been Published</h1></center>";
        // } else {
        //     echo "Error: " . mysqli_error($conn);
        // }

        // }
        //}
        //} 
        ?>
        <div class="row">
            <div class="col-12">
                <div class="alert alert-success">
                    <strong>Success!</strong> the page will switch automatically.

                </div>
                <!-- <img src="info.php?id=<?php //echo $row["id"]; 
                                            ?>" /> -->

            </div>
        </div>
        <?php //header("refresh:5;url=http://localhost/stream2/streamview-4.php"); 
        ?>
        <?php //} else {
        ?>
        <div class="row">
            <div class="col-12" style="text-align: center; margin-top: 10%;">

                <div class="spinner-border spinner-border-xl" style="margin-bottom: 4px;"></div>
                <div>
                    <h4>Waiting . . .</h4>
                </div>
            </div>
        </div>
        <?php //}
        ?>
    </div>

</body>

</html>



<?php
// $username1 = isset($_POST["username"]) ? $_POST["username"] : '';
// $test = $_GET['data'];
// echo $username1;
$errorMSG = "";

// if (empty($_POST["val"])) {
//     $errorMSG = "name is required";
// } else {
//     $val = $_POST["val"];
// }

// if (empty($errorMSG)) {
//     $msg = "Val: " . $val;
//     echo json_encode(['code' => 200, 'msg' => $msg]);
//     echo $msg;
//     exit;
// }
// echo json_encode(['code' => 404, 'msg' => $errorMSG]);

// $send_files = 'C:\xampp\htdocs\stream2\apple_blur.png';
// $type = pathinfo($send_files, PATHINFO_EXTENSION);
// $data = file_get_contents($send_files);
// $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

// echo $send_files[3];

// $save = ($_POST["val"]);

// var_dump($file_arr);

// var_dump($data);
// $imagedata = array();
// foreach ($file_arr as $file) {
    //     # code...
    //     'captureDepan' => $file['0'],
    
    // }
    
    // $base64 = base64_encode($send_files[3]);
    
    // $base64decode = base64_decode($base64);
    
    // echo $somevar;
    // echo $arr;
    // $hasil = array();

    
    
    // echo $arr;

// $hasil[] = array_merge($item, $data);
    // echo json_encode($hasil);

    // $uses1 = $value['id'];
    // $uses2 = $value['name'];
    // $uses3 = $value['price'];
    // $uses4 = $value['state'];
    # code...
    // var_dump($uses1);
    // var_dump($uses2);
    // $complete = json_encode($hasil);
    // print_r($hasil);
    // var_dump(json_decode($complete));
    // echo  $uses1;

// echo $hasil["id"];

// foreach ($arr as $value) {
//     # code...
//     $dataTable = array(
//         $value['id'],
//         $value['name'],
//         $value['price']
//     );
// }

// echo 'item = ' . $dataTable[0];
// echo $useCaptureDepan;


// $sendjson = '{
//     "id":' . $dataTable[0] . ',
//     "user":' . $dataTable[1] . ',
//     "foto_depan":' . $file_arr[0] . ',
//     "foto_belakang":' . $file_arr[1] . '
//     "foto_kiri":' . $file_arr[2] . '
//     "foto_kanan":' . $file_arr[3] . '
// }';

// echo $sendjson;



// function testing($id = "", $name = "", $price = "")
// {
    //     $postdata = http_build_query(
        //         array(
            //             'id' => $id,
//             'name' => $name,
//             'price' => $price
//         )
//     );

//     $opts = array(
//         'http' =>
//         array(
//             'method' => 'POST',
//             'header' => 'Content-Type: application/x-www-form-urlencoded',
//             'content' => $postdata
//         )
//     );

//     $context = stream_context_create($opts);
//     $str = file_get_contents('http://wenzhixin.net.cn/examples/bootstrap_table/data', false, $context);
//     return json_decode($str, true);
// }

// testing('10001', 'testing', '$2000');

// $user = array($uses1, $uses2, $uses3);

// var_dump(json_encode($user));
// var_dump($arr);
// foreach ($arr as $value) {
//     # code...
//     if (is_array($value)) {
//         $conv = (implode("", $value));
//         echo json_encode($conv);
//     } else {
//         echo 'err';
//     }
// }
// echo "hasil";
// print_r(implode("", $arr));
// <script>document.writeln(p1);</script>

// $check_file = 'C:/xampp/htdocs/stream2/video_convert/';



// $fullPath = __DIR__ . $check_file;
// // echo $fullPath;

// array_map('unlink', glob("$fullPath*.m3u8"));
// header('Refresh: 10; Location: https://www.w3schools.com/');

// $file = array(file_exists('C:\xampp\htdocs\stream2\video_convert\stream0.ts'), file_exists('C:\xampp\htdocs\stream2\video_convert\cam2\stream0.ts'));

// echo $file[1];
